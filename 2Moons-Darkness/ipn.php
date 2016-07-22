<?php
/**
 *  PHP-PayPal-IPN Example
 *
 *  This shows a basic example of how to use the IpnListener() PHP class to 
 *  implement a PayPal Instant Payment Notification (IPN) listener script.
 *
 *  For a more in depth tutorial, see my blog post:
 *  http://www.micahcarrick.com/paypal-ipn-with-php.html
 *
 *  This code is available at github:
 *  https://github.com/Quixotix/PHP-PayPal-IPN
 *
 *  @package    PHP-PayPal-IPN
 *  @author     Micah Carrick
 *  @copyright  (c) 2011 - Micah Carrick
 *  @license    http://opensource.org/licenses/gpl-3.0.html
 */
 
 
/*
Since this script is executed on the back end between the PayPal server and this
script, you will want to log errors to a file or email. Do not try to use echo
or print--it will not work! 

Here I am turning on PHP error logging to a file called "ipn_errors.log". Make
sure your web server has permissions to write to that file. In a production 
environment it is better to have that log file outside of the web root.
*/

define('MODE'  , 'CRON');

define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
set_include_path(ROOT_PATH);
require('includes/common.php');

ini_set('log_errors', true);
ini_set('error_log', dirname(__FILE__).'/ipn_errors.log');
// instantiate the IpnListener class
include('ipnlistener.php');
$listener = new IpnListener();


/*
When you are testing your IPN script you should be using a PayPal "SanGLOBALS['DATABASE']ox"
account: https://developer.paypal.com
When you are ready to go live change use_sanGLOBALS['DATABASE']ox to false.
*/
$listener->use_sandbox = false;

/*
By default the IpnListener object is going  going to post the data back to PayPal
using cURL over a secure SSL connection. This is the recommended way to post
the data back, however, some people may have connections problems using this
method. 

To post over standard HTTP connection, use:
$listener->use_ssl = false;

To post using the fsockopen() function rather than cURL, use:
$listener->use_curl = false;
*/

/*
The processIpn() method will encode the POST variables sent by PayPal and then
POST them back to the PayPal server. An exception will be thrown if there is 
a fatal error (cannot connect, your server is not configured properly, etc.).
Use a try/catch block to catch these fatal errors and log to the ipn_errors.log
file we setup at the top of this file.

The processIpn() method will send the raw data on 'php://input' to PayPal. You
can optionally pass the data to processIpn() yourself:
$verified = $listener->processIpn($my_post_data);
*/
try {
    $listener->requirePostMethod();
    $verified = $listener->processIpn();
} catch (Exception $e) {
    error_log($e->getMessage());
    exit(0);
}


/*
The processIpn() method returned true if the IPN was "VERIFIED" and false if it
was "INVALID".
*/
if ($verified) {
    /*
    Once you have a verified IPN you need to do a few more checks on the POST
    fields--typically against data you stored in your database during when the
    end user made a purchase (such as in the "success" page on a web payments
    standard button). The fields PayPal recommends checking are:
    
        1. Check the $_POST['payment_status'] is "Completed"
	    2. Check that $_POST['txn_id'] has not been previously processed 
	    3. Check that $_POST['receiver_email'] is your Primary PayPal email 
	    4. Check that $_POST['payment_amount'] and $_POST['payment_currency'] 
	       are correct
    
    Since implementations on this varies, I will leave these checks out of this
    example and just send an email using the getTextReport() method to get all
    of the details about the IPN.  
    */
	 $ID        = HTTP::_GP('custom','');
	$explode = explode(',',$ID);
	$user_id = $explode[0];
	$the_id = $explode[1];
	if(empty($ID)){
					message("Error occured, no data backed");
				}
	$INFO        = $GLOBALS['DATABASE']->uniquequery("SELECT * FROM `uni1_paypal` WHERE `id` = ".$GLOBALS['DATABASE']->sql_escape($the_id)." and `player` = ".$GLOBALS['DATABASE']->sql_escape($user_id).";");
	
	$INFO1        = $GLOBALS['DATABASE']->uniquequery("SELECT * FROM `uni1_users` WHERE `id` = ".$GLOBALS['DATABASE']->sql_escape($user_id).";");
				
				if($INFO1['lp_points'] == 0)
				$text = 0;
				if($INFO1['lp_points'] > 0)
                $text = 0;
				if($INFO1['lp_points'] >= 125)
                $text = 5;
				if($INFO1['lp_points'] >= 625)
                $text = 10;
				if($INFO1['lp_points'] >= 2500)
                $text = 15;
				if($INFO1['lp_points'] >= 7000)
                $text = 20;
				
				if($INFO1['lp_points'] >= 0)
				$tex = 1;
				if($INFO1['lp_points'] >= 125)
                $tex = 2;
				if($INFO1['lp_points'] >= 625)
                $tex = 4;
				if($INFO1['lp_points'] >= 2500)
                $tex = 6;
				if($INFO1['lp_points'] >= 7000)
                $tex = 8;
				if(!empty($INFO)){
             
		$GLOBALS['DATABASE']->query("UPDATE 
					`uni1_users` 
						SET 
					`darkmatter` = `darkmatter` + ".$INFO['amount']." 
					
				WHERE `id` = '".$INFO['player']."';");
				$GLOBALS['DATABASE']->query("UPDATE 
					`uni1_users` 
						SET 
					`darkmatter` = `darkmatter` + (".$INFO['amount'] / 100 * $text.") 
					
				WHERE `id` = '".$INFO['player']."';");
				$GLOBALS['DATABASE']->query("UPDATE 
					`uni1_users` 
						SET 
					`lp_points` = `lp_points` + (".$INFO['price'] * $tex.") 
					
				WHERE `id` = '".$INFO['player']."';");
				
			
                $GLOBALS['DATABASE']->query("DELETE FROM `uni1_paypal` WHERE `id` = '".$the_id."';");
          
		SendSimpleMessage($INFO['player'], '', TIMESTAMP, 1, 'System', 'Dark Matter Order', 'PayPal payment was successful. <br>'.pretty_number($INFO['amount'] + ($INFO['amount'] / 100 * $text)).' dark matter have been credited to your account.');
			


$GLOBALS['DATABASE']->query("INSERT INTO `uni1_paypal_log` VALUES (null,".$INFO['player'].",".$INFO['amount'].",".TIMESTAMP.") ;");
		
			message(pretty_number($INFO['amount']).' DM have been added to your account. <br><br><a href="?page=overview">Continue</a>');
			
			}else{
		message('Error please contact the administrator <br><br><a href="?page=overview">Continue</a>');
}
    mail('iberion_uni@yahoo.com', 'Verified IPN', $listener->getTextReport());

} else {
    /*
    An Invalid IPN *may* be caused by a fraudulent transaction attempt. It's
    a good idea to have a developer or sys admin manually investigate any 
    invalid IPN.
    */
    mail('iberion_uni@yahoo.com', 'Invalid IPN', $listener->getTextReport());
}

?>