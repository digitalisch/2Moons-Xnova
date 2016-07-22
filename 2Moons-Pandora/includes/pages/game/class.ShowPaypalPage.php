<?php

require_once(ROOT_PATH . 'includes/classes/class.paypal.php');

class ShowPaypalPage extends AbstractPage
{
        const MAIL        = 'mr@eichbuehlerhof.de';

        public $pattern        = array(
                  50000        => '10.00',
                 110000        => '20.00',
                 230000        => '40.00',
                 490000        => '80.00',
                1100000        => '160.00',
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
                global $LNG;
                $this->printMessage(pretty_number(HTTP::_GP('amount', 0)).$LNG['p_mess1'], true, array('game.php?page=overview', 4));
        }

        function Cancel()
        {
                global $LNG;
                $this->printMessage($LNG['p_mess2'], true, array('game.php?page=overview', 4));
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
                global $LNG, $USER, $resource;
						//if (!$this_p->validate_ipn())
                        //exit;
				
				$ID        	= HTTP::_GP('custom', '');
                $INFO        = $GLOBALS['DATABASE']->uniquequery("SELECT * FROM `uni1_paypal` WHERE `player` = '".$USER['id']. "';");
				//print_r($INFO);
				if($INFO){
				$USER['darkmatter'] += $INFO['amount'];
                $GLOBALS['DATABASE']->query("
				UPDATE 
				`" . USERS . "`
				SET 
				`darkmatter` = `darkmatter` + ".$INFO['amount']."
				WHERE 
				`id` = ".$INFO['player']."
				;");
                $GLOBALS['DATABASE']->query("DELETE FROM `uni1_paypal` WHERE `id` = '".$INFO['id']."';");
				$GLOBALS['DATABASE']->query("INSERT INTO `uni1_paypal_log` (`id`, `user_id`, `darkmatter`, `time`) VALUES (".$INFO['id'].", '".$INFO['player']."', '".$INFO['amount']."', '".TIMESTAMP."');");
				$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `donate` = donate+1 WHERE `id` = ".$INFO['player'].";");
                
                SendSimpleMessage($INFO['player'], '', TIMESTAMP, 1, 'System', $LNG['p_mess4'], $LNG['p_mess5'] .pretty_number($INFO['amount']).$LNG['p_mess6']);
				
				$this->printMessage(pretty_number(HTTP::_GP('amount', 0)).$LNG['p_mess1'], true, array('game.php?page=overview', 4));
				}
				else{
						$this->printMessage($LNG['p_e_mess1'], true, array('game.php?page=overview', 4));
					}
        }

        function CallOrder()
        {
                global $USER, $CONF, $LNG;

                $this->amount                = HTTP::_GP('amount', 0);

                if(!array_key_exists($this->amount, $this->pattern)) {
                        $this->printMessage($LNG['p_mess3'], true, array('game.php?page=donate', 4));
                        exit;
                }

                $this->cost        = $this->pattern[$this->amount];
                $GLOBALS['DATABASE']->query("INSERT INTO `uni1_paypal` (`id`, `player`, `amount`, `timestamp`) VALUES (NULL, '".$USER['id']."', '".$this->amount."', '".TIMESTAMP."');");
                
				$this_p = new paypal_class;
				$ID        = $GLOBALS['DATABASE']->uniquequery("SELECT `id` FROM `uni1_paypal` WHERE `player` = '".$USER['id']."' AND `amount` = '".$this->amount."' AND `timestamp` = '".TIMESTAMP."'");
                $this_p->add_field('business', self::MAIL);
                $this_p->add_field('return', 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'&action=success&amount='.$this->amount);
                $this_p->add_field('cancel_return', 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'&action=cancel');
                $this_p->add_field('notify_url', 'http://'.$_SERVER['HTTP_HOST'].'/paypal.php');
                $this_p->add_field('item_name', $this->amount.' Dunkle Materie - User '.$USER['username'].' auf '.$CONF['game_name']);
                $this_p->add_field('item_number', $this->amount.' Dunkle Materie');
                $this_p->add_field('amount', $this->cost);
                //$this_p->add_field('action', $action); ?
                $this_p->add_field('currency_code', 'EUR');
                 $this_p->add_field('custom', $USER['id'].','.$ID['id']);
                 $this_p->add_field('rm', '2');
                //$this_p->dump_fields();
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