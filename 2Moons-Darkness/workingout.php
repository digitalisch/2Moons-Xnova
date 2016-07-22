<?php

define('SQL_HOST', '127.0.0.1');
define('SQL_USER', 'xxx');
define('SQL_PASS', 'xxx');
define('SQL_DB', 'xxx');
define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
set_include_path(ROOT_PATH);
require('includes/common.php');

$userId = isset($_GET['user_id']) ? $_GET['user_id'] : null;
$pay = isset($_GET['amount']) ? $_GET['amount'] : null;
$realpay = isset($_GET['paid']) ? $_GET['paid'] : null;
$received = isset($_GET['payout_amount']) ? $_GET['payout_amount'] : null;
$credits = isset($_GET['virtual_amount']) ? $_GET['virtual_amount'] : null;
$type = isset($_GET['type']) ? $_GET['type'] : null;
$transac = isset($_GET['transaction_id']) ? $_GET['transaction_id'] : null;
$code = isset($_GET['code']) ? $_GET['code'] : null;
$timer = time();
$result = false;
$validationID	= $GLOBALS['DATABASE']->GetInsertID();
if (!empty($userId) && !empty($credits) && isset($type) && isset($transac) && isset($code)) {

       
                $result = true;
				
				mysql_connect(SQL_HOST, SQL_USER, SQL_PASS);
				mysql_select_db(SQL_DB);
				
				mysql_query("UPDATE `uni1_users` SET `darkmatter` = `darkmatter` + '".$credits."' WHERE `id` = '".mysql_escape_string($userId)."';");
                mysql_query("INSERT INTO `uni1_allopass_log` VALUES ('".$validationID."', '".mysql_escape_string($userId)."', '".mysql_escape_string($code)."', '".mysql_escape_string($credits)."','".mysql_escape_string($type)."', '".mysql_escape_string($transac)."', '".mysql_escape_string($pay)."', '".mysql_escape_string($realpay)."', '".mysql_escape_string($received)."',  '".$timer."', '1') ;");
				
				
				
				
				// user message
				SendSimpleMessage(mysql_escape_string($userId), '', $timer, 1, 'System', 'Dark Matter Order', 'Allopass payment was successful. <br>'.pretty_number($credits).' Dark Matter Units have been credited to your account');
				// admin message
				SendSimpleMessage(1, '', $timer, 1, 'System', 'Dark Matter Order', 'Allopass payment was successful. <br>'.pretty_number($credits).' Dark Matter Units have been credited to '.$userId.'');
				

}

if ($result) {
        echo 'OK';
		die();
}