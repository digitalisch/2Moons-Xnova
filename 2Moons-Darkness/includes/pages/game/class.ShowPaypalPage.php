<?php

require_once(ROOT_PATH . 'includes/classes/class.paypal.php');

class ShowPaypalPage extends AbstractPage
{
        const MAIL        = 'Daniel_Reinert@t-online.de';

        public $pattern        = array(
            
                
                25000        => '1.00',
                50000	        => '2.00',
                75000        => '3.00',
                250000        => '7.00',
                
                
  
   /*             150000 => '50.00',
                400000 => '100.00',
                700000 => '200.00',
                1400000 => '350.OO',
                3000000 => '600.00',
                  */

                
        );
        public $cost        = '0';
        public $amount        = '0';

        function __construct() {
                parent::__construct();
				
				
				$action = HTTP::_GP('action', '');
                switch ($action)
                {
                        case 'success':
                                $this->IPN();
                        break;
                        case 'cancel':
                                $this->Cancel();
                        break;
                        case 'ipn':
                                $this->IPN();
                        break;
                        default:
                                $this->CallOrder();
                        break;
                }
				
        }

        function Success()
        {
 
                message(pretty_number(HTTP::_GP('amount', 0)).' Dark matter where is on your account. <br><br><a href="?page=overview">Continue</a>');
        }

        function Cancel()
        {
                message('Your Order where Cancelled.</h3><br><a href="?page=overview">Continue</a><br>');
        }

        /*
                It's important to remember that paypal calling this script.  There
                is no output here.  This is where you validate the IPN data and if it's
                valid, update your database to signify that the user has payed.  If
                you try and use an echo or printf function here it's not going to do you
                a bit of good.  This is on the "backend".  That is why, by default, the
                class logs all IPN data to a text file.
        */

       function IPN()
        {
                global $USER;
               /* if (!$this_p->validate_ipn())
                      {
						message('There was an error');
					  }
				*/
                $ID        = HTTP::_GP('custom','');
				//print_r($ID);
              //  $ID        = HTTP::_GP('amount','');
				$explode = explode(',',$ID);
				$user_id = $explode[0];
				$the_id = $explode[1];
				if(empty($ID)){
					message("Error occured");
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
				
				//print_r($INFO);
				if(!empty($INFO)){
                $GLOBALS['DATABASE']->query("UPDATE 
					`uni1_users` 
						SET 
					`darkmatter` = `darkmatter` + ".$INFO['amount']." '
				WHERE `id` = '".$INFO['player']."';");
                $GLOBALS['DATABASE']->query("DELETE FROM `uni1_paypal` WHERE `id` = '".$the_id."';");
                SendSimpleMessage($INFO['player'], '', TIMESTAMP, 1, 'System', 'Dark Matter Order', 'PayPal payment was successful. <br>'.pretty_number($INFO['amount']).' Dark Matter Units have been credited to your account.');

				message(pretty_number($INFO['amount']).' Dark Matter is on your account. <br><br><a href="?page=overview">Continue</a>');
				
				}else{
		message('Error please contact the administrator <br><br><a href="?page=overview">Continue</a>');
}

        }

        function CallOrder()
        {
                global $USER, $CONF;

                $this->amount                = HTTP::_GP('amount',0);

                if(!array_key_exists($this->amount, $this->pattern)) {
                        message('NOT VALID VALUE', '?page=overview', 3);
                        exit;
                }

                $this->cost        = $this->pattern[$this->amount];

                $GLOBALS['DATABASE']->query("INSERT INTO `uni1_paypal` (`id`, `player`, `amount`, `timestamp`) VALUES (NULL, '".$USER['id']."', '".$this->amount."', '".TIMESTAMP."');");
				SendSimpleMessage ( $USER['id'], $USER['id'], TIMESTAMP, 1, 'Payment Bot', 'To do', 'After the payment has been processed, if you didnt received your DM please send an ticket or an Private Message to "Admin"');
				$this_p = new paypal_class;
				
                $ID        = $GLOBALS['DATABASE']->uniquequery("SELECT `id` FROM `uni1_paypal` WHERE `player` = '".$USER['id']."' AND `amount` = '".$this->amount."' AND `timestamp` = '".TIMESTAMP."'");
                $this_p->add_field('business', $this::MAIL);
                $this_p->add_field('return', 'http://'.$_SERVER['HTTP_HOST'].'/game.php?page=overview');
				$this_p->add_field('cancel_return', 'http://'.$_SERVER['HTTP_HOST'].'/ipn.php');
                $this_p->add_field('notify_url', 'http://'.$_SERVER['HTTP_HOST'].'/ipn.php');
				
                $this_p->add_field('item_name', $this->amount.' DM-User('.$USER['username'].').');
                $this_p->add_field('item_number', $this->amount.'_DM');
                $this_p->add_field('amount', $this->cost);
                $this_p->add_field('action', $action); 
                $this_p->add_field('currency_code', 'EUR');
                 $this_p->add_field('custom', $USER['id'].','.$ID['id']);
                 $this_p->add_field('rm', '2');
                $this_p->dump_fields(); 
				 foreach ($this_p->fields as $name => $value) {
					$field[] = array('text'=>'<input type="hidden" name="'.$name.'" value="'.$value.'">');
				}
			 $this->tplObj->assign_vars(array(
				'fields' => $field,
			 ));
			$this->display('paypal_class.tpl');
        }

}
?>