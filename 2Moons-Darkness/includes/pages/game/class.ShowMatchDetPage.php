<?php

/**
 *  2Moons
 *  Copyright (C) 2012 Jan Kröpke
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package 2Moons
 * @author Jan Kröpke <info@2moons.cc>
 * @copyright 2012 Jan Kröpke <info@2moons.cc>
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.7.3 (2013-05-19)
 * @info $Id: class.ShowPlayerCardPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */


class ShowMatchDetPage extends AbstractPage
{
	
	protected $disableEcoSystem = true;

	function __construct() 
	{
		parent::__construct();
	}
	
	function show()
	{
		global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
            
		
		$this->setWindow('popup');
		$this->initTemplate();
		$MatchId 	= HTTP::_GP('id', 0);
		$query 		= $GLOBALS['DATABASE']->query("SELECT h_team, draw, v_team, h_win, v_win, date FROM `uni1_match` WHERE id = ".$MatchId.";");
		$query  = $GLOBALS['DATABASE']->fetch_array($query);
		
		
		if($_POST){
		
		
		$prem_leveling1 	= HTTP::_GP('prem_leveling1', 0);
		$prem_leveling2 	= HTTP::_GP('prem_leveling2', 0);
		$prem_leveling3 	= HTTP::_GP('prem_leveling3', 0);
		$mode   = HTTP::_GP('cmd', '');
		$Matchpo 	= HTTP::_GP('matchid', '');
		$result 	= HTTP::_GP('result', '');
		$hname 	= HTTP::_GP('hname', '');
		$vname 	= HTTP::_GP('vname', '');
		
		$quer 		= $GLOBALS['DATABASE']->query("SELECT date FROM `uni1_match` WHERE id = ".$Matchpo.";");
		$quer  = $GLOBALS['DATABASE']->fetch_array($quer);
		
		if($quer['date'] < TIMESTAMP - 15 * 60){
		$this->printMessage("No more bets for this match allowed, you may close this window now");
        die();
        break;

		}
		
		
		switch($mode){
						case '1':
						$query1 		= $GLOBALS['DATABASE']->query("SELECT h_team, draw, v_team, h_win, v_win, date FROM `uni1_match` WHERE id = ".$Matchpo.";");
						while($s = $GLOBALS['DATABASE']->fetch_array($query1)){
                        if($USER['credits_won'] + $USER['credits_bought'] < $prem_leveling1){
						$this->printMessage("You do not have credits!", true, array('game.php?page=bet', 2));
						die();
					}else{
					
					
					if($USER['credits_won'] >= $prem_leveling1){
							$pay_won = $prem_leveling1;

					$ticketID	= $GLOBALS['DATABASE']->GetInsertID();
							$possible_gains = $prem_leveling1 * $s['h_win'];
							$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `credits_won` = `credits_won` - '".$pay_won."' where `id` = '".$USER['id']."' ;");
							$GLOBALS['DATABASE']->query("INSERT INTO `uni1_match_log` VALUES ('".$ticketID."', '".$USER['id']."', '".$Matchpo."', '".$result."', '".$prem_leveling1."', '".$possible_gains."', '".$hname."', '".$vname."', '-1', '-1') ;");
		
							$this->printMessage("Ticket Bought!, You may close this window now");
							echo json_encode(array('success' => true));
							die();
						}elseif($USER['credits_won'] < $prem_leveling1 && $USER['credits_won'] + $USER['credits_bought'] >= $prem_leveling1){
							$pay_won = $USER['credits_won'];
							$pay_pay = $prem_leveling1 - $USER['credits_won'];
							
					
					
					$ticketID	= $GLOBALS['DATABASE']->GetInsertID();
							$possible_gains = $prem_leveling1 * $s['h_win'];
							$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `credits_won` = `credits_won` - '".$pay_won."', `credits_bought` = `credits_bought` - '".$pay_pay."' where `id` = '".$USER['id']."' ;");
							$GLOBALS['DATABASE']->query("INSERT INTO `uni1_match_log` VALUES ('".$ticketID."', '".$USER['id']."', '".$Matchpo."', '".$result."', '".$prem_leveling1."', '".$possible_gains."', '".$hname."', '".$vname."', '-1', '-1') ;");
		
							$this->printMessage("Ticket Bought!, You may close this window now");
							echo json_encode(array('success' => true));
							die();
						}
						}
						}
                        break;
						case '3':
						$query1 		= $GLOBALS['DATABASE']->query("SELECT h_team, draw, v_team, h_win, v_win, date FROM `uni1_match` WHERE id = ".$Matchpo.";");
						while($s = $GLOBALS['DATABASE']->fetch_array($query1)){
                        if($USER['credits_won'] + $USER['credits_bought'] < $prem_leveling2){
						$this->printMessage("You do not have credits!", true, array('game.php?page=bet', 2));
						die();
					}else{
				if($USER['credits_won'] >= $prem_leveling2){
							$pay_won = $prem_leveling2;

					$ticketID	= $GLOBALS['DATABASE']->GetInsertID();
							$possible_gains = $prem_leveling2 * $s['h_win'];
							$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `credits_won` = `credits_won` - '".$pay_won."' where `id` = '".$USER['id']."' ;");
							$GLOBALS['DATABASE']->query("INSERT INTO `uni1_match_log` VALUES ('".$ticketID."', '".$USER['id']."', '".$Matchpo."', '".$result."', '".$prem_leveling2."', '".$possible_gains."', '".$hname."', '".$vname."', '-1', '-1') ;");
		
							$this->printMessage("Ticket Bought!, You may close this window now");
							echo json_encode(array('success' => true));
							die();
						}elseif($USER['credits_won'] < $prem_leveling2 && $USER['credits_won'] + $USER['credits_bought'] >= $prem_leveling2){
							$pay_won = $USER['credits_won'];
							$pay_pay = $prem_leveling2 - $USER['credits_won'];
							
					
					
					$ticketID	= $GLOBALS['DATABASE']->GetInsertID();
							$possible_gains = $prem_leveling2 * $s['h_win'];
							$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `credits_won` = `credits_won` - '".$pay_won."', `credits_bought` = `credits_bought` - '".$pay_pay."' where `id` = '".$USER['id']."' ;");
							$GLOBALS['DATABASE']->query("INSERT INTO `uni1_match_log` VALUES ('".$ticketID."', '".$USER['id']."', '".$Matchpo."', '".$result."', '".$prem_leveling2."', '".$possible_gains."', '".$hname."', '".$vname."', '-1', '-1') ;");
		
							$this->printMessage("Ticket Bought!, You may close this window now");
							echo json_encode(array('success' => true));
							die();
						}
						}
						}
                        break;
						case '2':
						$query1 		= $GLOBALS['DATABASE']->query("SELECT h_team, draw, v_team, h_win, v_win, date FROM `uni1_match` WHERE id = ".$Matchpo.";");
						while($s = $GLOBALS['DATABASE']->fetch_array($query1)){
                        if($USER['credits_won'] + $USER['credits_bought'] < $prem_leveling3){
						$this->printMessage("You do not have credits!", true, array('game.php?page=bet', 2));
						die();
					}else{
						if($USER['credits_won'] >= $prem_leveling3){
							$pay_won = $prem_leveling3;

					$ticketID	= $GLOBALS['DATABASE']->GetInsertID();
							$possible_gains = $prem_leveling3 * $s['h_win'];
							$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `credits_won` = `credits_won` - '".$pay_won."' where `id` = '".$USER['id']."' ;");
							$GLOBALS['DATABASE']->query("INSERT INTO `uni1_match_log` VALUES ('".$ticketID."', '".$USER['id']."', '".$Matchpo."', '".$result."', '".$prem_leveling3."', '".$possible_gains."', '".$hname."', '".$vname."', '-1', '-1') ;");
		
							$this->printMessage("Ticket Bought!, You may close this window now");
							echo json_encode(array('success' => true));
							die();
						}elseif($USER['credits_won'] < $prem_leveling3 && $USER['credits_won'] + $USER['credits_bought'] >= $prem_leveling3){
							$pay_won = $USER['credits_won'];
							$pay_pay = $prem_leveling3 - $USER['credits_won'];
							
					
					
					$ticketID	= $GLOBALS['DATABASE']->GetInsertID();
							$possible_gains = $prem_leveling3 * $s['h_win'];
							$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `credits_won` = `credits_won` - '".$pay_won."', `credits_bought` = `credits_bought` - '".$pay_pay."' where `id` = '".$USER['id']."' ;");
							$GLOBALS['DATABASE']->query("INSERT INTO `uni1_match_log` VALUES ('".$ticketID."', '".$USER['id']."', '".$Matchpo."', '".$result."', '".$prem_leveling3."', '".$possible_gains."', '".$hname."', '".$vname."', '-1', '-1') ;");
		
							$this->printMessage("Ticket Bought!, You may close this window now");
							echo json_encode(array('success' => true));
							die();
						}
						}
						}
                        break;

	}
}
		$this->tplObj->assign_vars(array(	
			
			'id'			=> $MatchId,
			'h_team'			=> $query['h_team'],
			'draw'	=> $query['draw'],
			'v_team'		=> $query['v_team'],
			'h_win'		=> $query['h_win'],
			'v_win'		=> $query['v_win'],
			'date'		=> $query['date'],
			'cred'			=> pretty_number($USER['credits_won'] + $USER['credits_bought']),
			
		));
		
		$this->display('page.matchdet.default.tpl');
	}
}