<?php
class ShowLotteryPage extends AbstractPage
{	
	public static $requireModule = 0;
	
	function __construct() {
		parent::__construct();
	}
	
	function show()
	{
		global  $USER, $PLANET, $LNG, $LANG,$CONF,$UNI;
	
		$max_users_tickets = 10;
		$ticket_price_metal = $CONF['lottery_met'];
		$ticket_price_crystal = $CONF['lottery_cry'];
		$ticket_price_deuterium = $CONF['lottery_deu'];
		$this->tplObj->loadscript('countdown.js');
	
	
		$ticket_prize_dm = $CONF['lottery_prize'];;
	
	
	if($_POST){
		$tickets = HTTP::_GP('tickets', 0);
		if($tickets <=0 || $tickets > 10){
			$this->printMessage("Hack attempt , FUCK YOU");
			die();
		}

		$cautare = $GLOBALS['DATABASE']->query("SELECT *from `uni1_lotterie` where `id` = '".$USER['id']."' ;");
	
		if($GLOBALS['DATABASE']->numRows($cautare) > 0){

			$cautare2 = $GLOBALS['DATABASE']->query("SELECT SUM(tickets) as total_tickets from `uni1_lotterie` where `id` = '".$USER['id']."' ;");
			$cautare2 = $GLOBALS['DATABASE']->fetch_array($cautare2);
			if(($cautare2['total_tickets']+ $tickets) > $max_users_tickets){
				$this->printMessage($LNG['lm_error1'], true, array('game.php?page=lottery', 2));
				die();
			}
		}
		$cost['metal'] = $tickets * $ticket_price_metal;
		$cost['crystal'] = $tickets * $ticket_price_crystal;
		$cost['deuterium'] = $tickets * $ticket_price_deuterium;
		if($PLANET['metal'] < $cost['metal'] || $PLANET['crystal'] < $cost['crystal'] || $PLANET['deuterium'] < $cost['deuterium']){
			$this->printMessage($LNG['lm_error2'], true, array('game.php?page=lottery', 2));
			die();
		}else{
			$PLANET['metal'] 		-= $cost['metal'];
			$PLANET['crystal'] 		-= $cost['crystal'];
			$PLANET['deuterium'] 	-= $cost['deuterium'];
			$GLOBALS['DATABASE']->query("INSERT INTO `uni1_lotterie` VALUES ('".$USER['id']."','".$USER['username']."','".$tickets."') ;");
			$this->printMessage($LNG['lm_msg1'] .$tickets. $LNG['lm_tickets'], true, array('game.php?page=lottery', 2));
			die();
		}
	}
	


$total_users = $GLOBALS['DATABASE']->query("SELECT DISTINCT `id` from `uni1_lotterie` ;");
	$total_users = $GLOBALS['DATABASE']->numRows($total_users);
	if($CONF['lottery_time'] < TIMESTAMP){
		if($total_users < $CONF['lottery_min']){

			$GLOBALS['DATABASE']->query("UPDATE ".CONFIG." set `lottery_prize` = `lottery_prize` + 100 ");
			$time = TIMESTAMP+12*60*60;
			$GLOBALS['DATABASE']->query("UPDATE `uni1_config` SET `lottery_time` = ". $time ." where `uni` = ".$UNI.";");
			$this->printMessage($LNG['lm_msg2'], true, array('game.php?page=lottery', 2));
			die();
		} 

		$get_tickets = $GLOBALS['DATABASE']->query("SELECT *FROM `uni1_lotterie` ");
		if($GLOBALS['DATABASE']->numRows($get_tickets) >0){


			$user_array = array();
			$diferent_users = $GLOBALS['DATABASE']->query("SELECT DISTINCT `id` from `uni1_lotterie` ;");
			while($s = $GLOBALS['DATABASE']->fetch_array($diferent_users)){
				$user_array[] = $s['id'];
			}
			$random = rand(0,count($user_array)-1);
			do{
			$random1 = rand(0,count($user_array)-1);
			}while($random1==$random);
			do{
			$random2 = rand(0,count($user_array)-1);
			}while($random2==$random1 || $random2==$random);

			$total_user  = $GLOBALS['DATABASE']->query("SELECT SUM(tickets) as sum_tickets, user from `uni1_lotterie` where `id` = '".$user_array[$random]."' ;");
			$total_user1 = $GLOBALS['DATABASE']->query("SELECT SUM(tickets) as sum_tickets, user from `uni1_lotterie` where `id` = '".$user_array[$random1]."' ;");
			$total_user2 = $GLOBALS['DATABASE']->query("SELECT SUM(tickets) as sum_tickets, user from `uni1_lotterie` where `id` = '".$user_array[$random2]."' ;");
			
			$total_user  = $GLOBALS['DATABASE']->fetch_array($total_user);
			$total_user1 = $GLOBALS['DATABASE']->fetch_array($total_user1);
			$total_user2 = $GLOBALS['DATABASE']->fetch_array($total_user2);
			
			$total_user_prize = $ticket_prize_dm * $total_user['sum_tickets'];
			$total_user_prize1 = $ticket_prize_dm/2 * $total_user1['sum_tickets'];
			$total_user_prize2 = $ticket_prize_dm/4 * $total_user2['sum_tickets'];
			
			if($USER['id'] == $user_array[$random])
				$USER['darkmatter'] += $total_user_prize;
			else{
				$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `darkmatter` = `darkmatter` + ".$total_user_prize." where `id` = '".$user_array[$random]."' AND `universe` = '".$UNI."';");
			}
			if($USER['id'] == $user_array[$random1])
				$USER['darkmatter'] += $total_user_prize1;
			else
				$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `darkmatter` = `darkmatter` + ".$total_user_prize1." where `id` = '".$user_array[$random1]."' AND `universe` = '".$UNI."';");
			if($USER['id'] == $user_array[$random2])
				$USER['darkmatter'] += $total_user_prize2;
			else
				$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `darkmatter` = `darkmatter` + ".$total_user_prize2." where `id` = '".$user_array[$random2]."' AND `universe` = '".$UNI."';");
	
			$GLOBALS['DATABASE']->query("TRUNCATE TABLE `uni1_lotterie_log`;");
			$GLOBALS['DATABASE']->query("INSERT INTO `uni1_lotterie_log` VALUES('".$total_user['user']."','".TIMESTAMP."','".$total_user_prize."') ");
			$GLOBALS['DATABASE']->query("INSERT INTO `uni1_lotterie_log` VALUES('".$total_user1['user']."','".TIMESTAMP."','".$total_user_prize1."') ");
			$GLOBALS['DATABASE']->query("INSERT INTO `uni1_lotterie_log` VALUES('".$total_user2['user']."','".TIMESTAMP."','".$total_user_prize2."') ");
			
			$GLOBALS['DATABASE']->query("TRUNCATE TABLE `uni1_lotterie`;");
			
			SendSimpleMessage ( $user_array[$random], $user_array[$random], TIMESTAMP, 1, $LNG['Lottery'], $LNG['Lottery'], $LNG['lm_msg4'] .$total_user_prize. $LNG['lm_msg5']); //Enviamos el mensaje
			SendSimpleMessage ( $user_array[$random1], $user_array[$random1], TIMESTAMP, 1, $LNG['Lottery'], $LNG['Lottery'], $LNG['lm_msg4'] .$total_user_prize1. $LNG['lm_msg5']);
			SendSimpleMessage ( $user_array[$random2], $user_array[$random2], TIMESTAMP, 1, $LNG['Lottery'], $LNG['Lottery'], $LNG['lm_msg4'] .$total_user_prize2. $LNG['lm_msg5']);
			
			$time = TIMESTAMP+24*60*60;

			$GLOBALS['DATABASE']->query("UPDATE `uni1_config` SET `lottery_time` = ". $time ." where `uni` = ".$UNI.";");
			$GLOBALS['DATABASE']->query("UPDATE `uni1_config` SET `lottery_prize` = 200 where `uni` = ".$UNI.";");

			$this->printMessage($LNG['lm_msg9'], true, array('game.php?page=lottery', 2));
			die();
		}else{

			$time = TIMESTAMP+12*60*60;
			$GLOBALS['DATABASE']->query("UPDATE `uni1_config` SET `lottery_time` = ". $time ." ;");
			$GLOBALS['DATABASE']->query("UPDATE ".CONFIG." set `lottery_prize` = `lottery_prize` + 100 ");
	
			$this->printMessage($LNG['lm_msg6'], true, array('game.php?page=lottery', 2));
			die();
		}
	}else{
		$secs = $CONF['lottery_time'] - TIMESTAMP;

		

		$diferent_users = $GLOBALS['DATABASE']->query("SELECT DISTINCT `id` from `uni1_lotterie` ;");
		if($GLOBALS['DATABASE']->numRows($diferent_users) > 0){
		$lista = '<table style="width:100%"><tr><td>Username</td><td>Tickets Bought</td></tr>';
			while($s = $GLOBALS['DATABASE']->fetch_array($diferent_users)){
			$total_user = $GLOBALS['DATABASE']->query("SELECT user,SUM(tickets) as sum_tickets from `uni1_lotterie` where `id` = '".$s['id']."' ;");
			$total_user = $GLOBALS['DATABASE']->fetch_array($total_user);
			$lista .= '<tr><td>'.$total_user['user'].'</td><td>'.$total_user['sum_tickets'].'</td></tr>';
		}
		$lista .= '</table>';}
		else{
			$lista = $LNG['lm_msg7'];
		}

		$castigatori = $GLOBALS['DATABASE']->query("SELECT *FROM `uni1_lotterie_log` ORDER BY `time` DESC LIMIT 5");
		if($GLOBALS['DATABASE']->numRows($castigatori) >0){

			$lista_winners = "<table style='width:100%'><tr><td>Winner</td><td>Time</td><td>DM WON</td></tr>";
			while($x = $GLOBALS['DATABASE']->fetch_array($castigatori)){
				$lista_winners .= "<tr><td>".$x['username']."</td><td>". gmdate("M d Y H:i:s",$x['time'] )."</td><td>".$x['prize']."</td></tr>";
			}
			$lista_winners .= "</table>";
		}else{

			$lista_winners = $LNG['lm_msg8'];
		}

		$this->tplObj->assign_vars(array(
			'metal_p' 						=> pretty_number(floattostring($ticket_price_metal)),
			'crystal_p' 					=> pretty_number(floattostring($ticket_price_crystal)),
			'deuterium_p' 					=> pretty_number(floattostring($ticket_price_deuterium)),
			'dm_win'						=> $ticket_prize_dm,
			'secs'							=>$secs,
			'user_lists' 					=> $lista,
			'max_tickets_per_player' 		=> $max_users_tickets,
			'winners'						=> $lista_winners,
			'minimum_users'					=> $CONF['lottery_min'],));
		$this->display('page.lottery.default.tpl');
	}
	}
}
?>