<?php

if (!allowedTo(str_replace(array(dirname(__FILE__), '\\', '/', '.php'), '', __FILE__))) exit;




function ShowMatchPage() 
{
	global $LNG, $USER;
	
	
    $template = new template();
    
    if($_GET['mode'] == 'delete' && !empty($_GET['i'])){
        //delete an entry
		
        $GLOBALS['DATABASE']->query("DELETE from `uni1_match` where `id` = ".$_GET['i']." ;");
		 $GLOBALS['DATABASE']->query("DELETE from `uni1_match_log` where `matchid` = ".$_GET['i']." ;");
        $template->message("match deleted");
        die();
    }
	
if($_GET['mode'] == 'validate' && !empty($_GET['i'])){
        //delete an entry
	
$GLOBALS['DATABASE']->query("UPDATE `uni1_match_log` set `finish` = '1' where `matchid` = ".$_GET['i']." ;");

$USERS		 = $GLOBALS['DATABASE']->query("SELECT DISTINCT ticketID, possible_win, id_owner FROM `uni1_match_log` WHERE finish = '1' AND matchid = ".$_GET['i']." AND bet_for = winner ;");
   if($GLOBALS['DATABASE']->numRows($USERS)>0){
   
				while($UserData = $GLOBALS['DATABASE']->fetch_array($USERS)) {
				    $message = "You have validated a winning ticket and the credits have been added to your account";
				     SendSimpleMessage($UserData['id_owner'], 1, TIMESTAMP, 1, 'Bet System', 'Bet System', $message);
                     
                     }
				
				// $SQL = "UPDATE ".USERS." SET
				// `credits` = `credits` + ".$ptr['possible_win']."
				 // WHERE id = '".$ptr['id_owner']."' ;";
				
		// $GLOBALS['DATABASE']->query($SQL);

				$template->message("Match And tickets validated");
				 die();
			}
	}
	
	  
	
	
	if (isset($_GET['betmodus']))
		$GLOBALS['DATABASE']->query("UPDATE `uni1_match` set `bet_close` = ".HTTP::_GP('betmodus', -1)." where `id` = ".HTTP::_GP('idr', 0)." ;");
	if (isset($_GET['winner']))
		$GLOBALS['DATABASE']->query("UPDATE `uni1_match` set `winner` = ".HTTP::_GP('winner', -1)." where `id` = ".HTTP::_GP('idr', 0)." ;");
		$GLOBALS['DATABASE']->query("UPDATE `uni1_match_log` set `winner` = ".HTTP::_GP('winner', -1)." where `matchid` = ".HTTP::_GP('idr', 0)." ;");
	
  if ($_POST)
			{
				if ($_POST['add'])
				{
					$mode   = HTTP::_GP('ii', '');
	$mode2   = HTTP::_GP('hteam', '');
	$mode3   = HTTP::_GP('vteam', '');
	$mode4   = HTTP::_GP('hratio', '');
	$mode5   = HTTP::_GP('dratio', '');
	$mode6   = HTTP::_GP('vratio', '');
	$mode7   = HTTP::_GP('dd', '');
	$mode8   = HTTP::_GP('mt', '');
	$mode9   = HTTP::_GP('yr', '');
	$mode10   = HTTP::_GP('hr', '');
	$mode11  = HTTP::_GP('min', '');
	$sec = 00;
	$date = mktime($mode10, $mode11, $sec, $mode8, $mode7, $mode9);
	$matchID	= $GLOBALS['DATABASE']->GetInsertID();
						$GLOBALS['DATABASE']->query("INSERT INTO `uni1_match` VALUES ('".$matchID."', '".$mode2."', '".$mode3."', '".$mode4."', '".$mode5."', '".$mode6."', '".$date."', '-1', '-1') ;");
				}elseif ($_POST['edit'])
				{
				$mode   = HTTP::_GP('ii', '');
				$mode13   = HTTP::_GP('winner', '');
$GLOBALS['DATABASE']->query("UPDATE `uni1_match` set `winner` = '".$mode13."' where `id` = '".$mode."' ;");
if ($_POST['winner'] != -1){
$GLOBALS['DATABASE']->query("UPDATE `uni1_match` set `bet_close` = '1' where `id` = '".$mode."' ;");
$GLOBALS['DATABASE']->query("UPDATE `uni1_match_log` set `finish` = '1', winner = '".$mode13."' where `matchid` = '".$mode."' ;");
				}
				}
				
				if ($_POST['add']) {
					$template->message('Match added', '?page=match');
				} else if ($_POST['edit']) {
					$template->message('Match changed', '?page=match');
				}
				exit;
			}
				
				
   $AllVouchers = array();
   
   $GetAll = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_match` ;");
   if($GLOBALS['DATABASE']->numRows($GetAll)>0){
    while($x = $GLOBALS['DATABASE']->fetch_array($GetAll)){
        $AllVouchers[] = $x;
    }
   }
	$template->assign_vars(
        array(
            'AllVouchers' => $AllVouchers,
        )
    );
	$template->show('match.tpl');
}
?>