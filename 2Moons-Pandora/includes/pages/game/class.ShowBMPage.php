<?php

class ShowBMPage extends AbstractPage
{
	public static $requireModule = 0;

	function __construct() 
	{
		global $USER, $PLANET, $LNG, $UNI, $CONF, $resource;
		parent::__construct();
		$this->tplObj->loadscript('countdown.js');
		$mode = HTTP::_GP('mode', '');
		switch($mode){
			case 'index':
			default:
				if($USER['urlaubs_modus'] == 1 || $PLANET['planet_type'] != 1)
			{
				$basicIncome[901]	= 0;
				$basicIncome[902]	= 0;
				$basicIncome[903]	= 0;
				$basicIncome[911]	= 0;
			}
			else
			{		
				$basicIncome[901]	= Config::get($resource[901].'_basic_income');
				$basicIncome[902]	= Config::get($resource[902].'_basic_income');
				$basicIncome[903]	= Config::get($resource[903].'_basic_income');
				$basicIncome[911]	= Config::get($resource[911].'_basic_income');
			}
			$temp	= array(
			901	=> array(
				'plus'	=> 0,
				'minus'	=> 0,
			),
			902	=> array(
				'plus'	=> 0,
				'minus'	=> 0,
			),
			903	=> array(
				'plus'	=> 0,
				'minus'	=> 0,
			),
		);
		$basicProduction	= array(
			901 => $basicIncome[901] * Config::get('resource_multiplier'),
			902 => $basicIncome[902] * Config::get('resource_multiplier'),
			903	=> $basicIncome[903] * Config::get('resource_multiplier'),
		);
		
		$totalProduction	= array(
			901 => $PLANET[$resource[901].'_perhour'] + $basicProduction[901],
			902 => $PLANET[$resource[902].'_perhour'] + $basicProduction[902],
			903	=> $PLANET[$resource[903].'_perhour'] + $basicProduction[903],
		);
		
		$bonusProduction	= array(
			901 => $temp[901]['plus'] * ($USER['factor']['Resource'] + 0.02 * $USER[$resource[131]]),
			902 => $temp[902]['plus'] * ($USER['factor']['Resource'] + 0.02 * $USER[$resource[132]]),
			903	=> $temp[903]['plus'] * ($USER['factor']['Resource'] + 0.02 * $USER[$resource[133]]),
		);
		
						$metallbonus	= $totalProduction[901]*24*7;
						$kristallbonus	= $totalProduction[902]*24*7;
						$deutbonus		= $totalProduction[903]*24*7;
				
				
				
				if($USER['geo1']>0){
					if(TIMESTAMP < ($USER['geo1']+2*60*60)){
						$secunde1 = $USER['geo1'] + 2*60*60 - TIMESTAMP;
						$USER['geo1'] = '<font color=red><span class=countdown2 secs='.$secunde1.'></span></font>';
					}else{
						$USER['geo1'] = '<a href=game.php?page=BM&mode=geo1&sk=change><font color=lime>Trade</font></a>';
					}
				}else{
					$USER['geo1'] = '<a href=game.php?page=BM&mode=geo1&sk=change><font color=lime>Trade</font></a>';
				};	

				if($USER['geo2']>0){
					if(TIMESTAMP < ($USER['geo2']+2*60*60)){
						$secunde2 = $USER['geo2'] + 2*60*60 - TIMESTAMP;
						$USER['geo2'] = '<font color=red><span class=countdown2 secs='.$secunde2.'></span></font>';
					}else{
						$USER['geo2'] = '<a href=game.php?page=BM&mode=geo2&sk=change><font color=lime>Trade</font></a>';
					}
				}else{
					$USER['geo2'] = '<a href=game.php?page=BM&mode=geo2&sk=change><font color=lime>Trade</font></a>';
				};	
				
				if($USER['geo3']>0){
					if(TIMESTAMP < ($USER['geo3']+2*60*60)){
						$secunde3 = $USER['geo3'] + 2*60*60 - TIMESTAMP;
						$USER['geo3'] = '<font color=red><span class=countdown2 secs='.$secunde3.'></span></font>';
					}else{
						$USER['geo3'] = '<a href=game.php?page=BM&mode=geo3&sk=change><font color=lime>Trade</font></a>';
					}
				}else{
					$USER['geo3'] = '<a href=game.php?page=BM&mode=geo3&sk=change><font color=lime>Trade</font></a>';
				};	
				
				if($USER['geo4']>0){
					if(TIMESTAMP < ($USER['geo4']+2*60*60)){
						$secunde4 = $USER['geo4'] + 2*60*60 - TIMESTAMP;
						$USER['geo4'] = '<font color=red><span class=countdown2 secs='.$secunde4.'></span></font>';
					}else{
						$USER['geo4'] = '<a href=game.php?page=BM&mode=geo4&sk=change><font color=lime>Trade</font></a>';
					}
				}else{
					$USER['geo4'] = '<a href=game.php?page=BM&mode=geo4&sk=change><font color=lime>Trade</font></a>';
				};	
				
				if($USER['geo5']>0){
					if(TIMESTAMP < ($USER['geo5']+2*60*60)){
						$secunde5 = $USER['geo5'] + 2*60*60 - TIMESTAMP;
						$USER['geo5'] = '<font color=red><span class=countdown2 secs='.$secunde5.'></span></font>';
					}else{
						$USER['geo5'] = '<a href=game.php?page=BM&mode=geo5&sk=change><font color=lime>Trade</font></a>';
					}
				}else{
					$USER['geo5'] = '<a href=game.php?page=BM&mode=geo5&sk=change><font color=lime>Trade</font></a>';
				};	
				
				if($USER['geo6']>0){
					if(TIMESTAMP < ($USER['geo6']+2*60*60)){
						$secunde6 = $USER['geo6'] + 2*60*60 - TIMESTAMP;
						$USER['geo6'] = '<font color=red><span class=countdown2 secs='.$secunde6.'></span></font>';
					}else{
						$USER['geo6'] = '<a href=game.php?page=BM&mode=geo6&sk=change><font color=lime>Trade</font></a>';
					}
				}else{
					$USER['geo6'] = '<a href=game.php?page=BM&mode=geo6&sk=change><font color=lime>Trade</font></a>';
				};	
				
				if($USER['geo7']>0){
					if(TIMESTAMP < ($USER['geo7']+2*60*60)){
						$secunde7 = $USER['geo7'] + 2*60*60 - TIMESTAMP;
						$USER['geo7'] = '<font color=red><span class=countdown2 secs='.$secunde7.'></span></font>';
					}else{
						$USER['geo7'] = '<a href=game.php?page=BM&mode=geo7&sk=change><font color=lime>Trade</font></a>';
					}
				}else{
					$USER['geo7'] = '<a href=game.php?page=BM&mode=geo7&sk=change><font color=lime>Trade</font></a>';
				};	
				
				if($USER['geo8']>0){
					if(TIMESTAMP < ($USER['geo8']+2*60*60)){
						$secunde8 = $USER['geo8'] + 2*60*60 - TIMESTAMP;
						$USER['geo8'] = '<font color=red><span class=countdown2 secs='.$secunde8.'></span></font>';
					}else{
						$USER['geo8'] = '<a href=game.php?page=BM&mode=geo8&sk=change><font color=lime>Trade</font></a>';
					}
				}else{
					$USER['geo8'] = '<a href=game.php?page=BM&mode=geo8&sk=change><font color=lime>Trade</font></a>';
				};	
				
				if($USER['geo9']>0){
					if(TIMESTAMP < ($USER['geo9']+2*60*60)){
						$secunde9 = $USER['geo9'] + 2*60*60 - TIMESTAMP;
						$USER['geo9'] = '<font color=red><span class=countdown2 secs='.$secunde9.'></span></font>';
					}else{
						$USER['geo9'] = '<a href=game.php?page=BM&mode=geo9&sk=change><font color=lime>Trade</font></a>';
					}
				}else{
					$USER['geo9'] = '<a href=game.php?page=BM&mode=geo9&sk=change><font color=lime>Trade</font></a>';
				};	
				
				if($USER['geo10']>0){
					if(TIMESTAMP < ($USER['geo10']+2*60*60)){
						$secunde10 = $USER['geo10'] + 2*60*60 - TIMESTAMP;
						$USER['geo10'] = '<font color=red><span class=countdown2 secs='.$secunde10.'></span></font>';
					}else{
						$USER['geo10'] = '<a href=game.php?page=BM&mode=geo10&sk=change><font color=lime>Trade</font></a>';
					}
				}else{
					$USER['geo10'] = '<a href=game.php?page=BM&mode=geo10&sk=change><font color=lime>Trade</font></a>';
				};	
				
				if($USER['geo11']>0){
					if(TIMESTAMP < ($USER['geo11']+2*60*60)){
						$secunde11 = $USER['geo11'] + 2*60*60 - TIMESTAMP;
						$USER['geo11'] = '<font color=red><span class=countdown2 secs='.$secunde11.'></span></font>';
					}else{
						$USER['geo11'] = '<a href=game.php?page=BM&mode=geo11&sk=change><font color=lime>Trade</font></a>';
					}
				}else{
					$USER['geo11'] = '<a href=game.php?page=BM&mode=geo11&sk=change><font color=lime>Trade</font></a>';
				};	
				
				if($USER['geo12']>0){
					if(TIMESTAMP < ($USER['geo12']+2*60*60)){
						$secunde12 = $USER['geo12'] + 2*60*60 - TIMESTAMP;
						$USER['geo12'] = '<font color=red><span class=countdown2 secs='.$secunde12.'></span></font>';
					}else{
						$USER['geo12'] = '<a href=game.php?page=BM&mode=geo12&sk=change><font color=lime>Trade</font></a>';
					}
				}else{
					$USER['geo12'] = '<a href=game.php?page=BM&mode=geo12&sk=change><font color=lime>Trade</font></a>';
				};	
				
				if($USER['geo13']>0){
					if(TIMESTAMP < ($USER['geo13']+12*60*60)){
						$secunde13 = $USER['geo13'] + 12*60*60 - TIMESTAMP;
						$USER['geo13'] = '<font color=red><span class=countdown2 secs='.$secunde13.'></span></font>';
					}else{
						$USER['geo13'] = '<a href=game.php?page=BM&mode=geo13&sk=change><font color=lime>Trade</font></a>';
					}
				}else{
					$USER['geo13'] = '<a href=game.php?page=BM&mode=geo13&sk=change><font color=lime>Trade</font></a>';
				};	
				
				if($USER['geo14']>0){
					if(TIMESTAMP < ($USER['geo14']+2*60*60)){
						$secunde14 = $USER['geo14'] + 2*60*60 - TIMESTAMP;
						$USER['geo14'] = '<font color=red><span class=countdown2 secs='.$secunde14.'></span></font>';
					}else{
						$USER['geo14'] = '<a href=game.php?page=BM&mode=geo14&sk=change><font color=lime>Trade</font></a>';
					}
				}else{
					$USER['geo14'] = '<a href=game.php?page=BM&mode=geo14&sk=change><font color=lime>Trade</font></a>';
				};	
				
				
				$this->tplObj->assign_vars(array(
					'weekm'					=> pretty_number($metallbonus),
					'weekc'					=> pretty_number($kristallbonus),
					'weekd'					=> pretty_number($deutbonus),
					'geo1'					=> $USER['geo1'],
					'geo2'					=> $USER['geo2'],
					'geo3'					=> $USER['geo3'],
					'geo4'					=> $USER['geo4'],
					'geo5'					=> $USER['geo5'],
					'geo6'					=> $USER['geo6'],
					'geo7'					=> $USER['geo7'],
					'geo8'					=> $USER['geo8'],
					'geo9'					=> $USER['geo9'],
					'geo10'					=> $USER['geo10'],
					'geo11'					=> $USER['geo11'],
					'geo12'					=> $USER['geo12'],
					'geo13'					=> $USER['geo13'],
					'geo14'					=> $USER['geo14'],
			));
				$this->display('page.bm.default.tpl');
			break;
	
			case'geo1':
				$sk = HTTP::_GP('sk', '');
				if($sk == 'change') {
				if(TIMESTAMP < ($USER['geo1']+2*60*60)){
					$this->printMessage($LNG['blm_error4'], true, array(
							"game.php?page=BM",
							3)
						);
				}
				elseif($PLANET['metal_mine']>=90) {
						$this->printMessage($LNG['blm_error3'], true, array(
							"game.php?page=BM",
							3)
						);
					}
					elseif($USER['darkmatter']>=5000) { 
						$SQL  = "UPDATE ".USERS." SET ";
						$SQL .= "`darkmatter` = '5000' ";
						$SQL .= "WHERE ";
						$SQL .= "`id` = '". $USER['id'] ."'";
						$GLOBALS['DATABASE']->query($SQL);
						$USER['darkmatter'] -= 5000;
						$GLOBALS['DATABASE']->multi_query("UPDATE `".USERS."` SET `darkmatter`=".$USER['darkmatter']."-5000 WHERE `id`='".$USER['id']. "';
							UPDATE `".PLANETS."` SET `metal_mine`=metal_mine+1 WHERE `id` = '".$PLANET['id']."';
							UPDATE `".USERS."` SET `geo1`='".TIMESTAMP."' WHERE `id` = '".$USER['id']."';
							");
						$this->printMessage($LNG['blm_done'], true, array(
							"game.php?page=BM",
							3)
						);
					}else{
						$this->printMessage($LNG['blm_error'],  true, array("game.php?page=BM", 3));
					}       
				}
			break;
		
		
			case'geo2':
				$sk = HTTP::_GP('sk', '');
				if(TIMESTAMP < ($USER['geo2']+2*60*60)){
					$this->printMessage($LNG['blm_error4'], true, array(
							"game.php?page=BM",
							3)
						);
				}
				elseif($sk == 'change') {
					if($PLANET['crystal_mine']>=88) {
						$this->printMessage($LNG['blm_error3'], true, array(
							"game.php?page=BM",
							3)
						);
					}
					elseif($USER['darkmatter']>=5000) { 
						$SQL  = "UPDATE ".USERS." SET ";
						$SQL .= "`darkmatter` = '5000' ";
						$SQL .= "WHERE ";
						$SQL .= "`id` = '". $USER['id'] ."'";
						$GLOBALS['DATABASE']->query($SQL);
						$USER['darkmatter'] -= 5000;
						$GLOBALS['DATABASE']->multi_query("UPDATE `".USERS."` SET `darkmatter`=".$USER['darkmatter']."-5000 WHERE `id`='".$USER['id']. "';
							UPDATE `".PLANETS."` SET `crystal_mine`=crystal_mine+1 WHERE `id` = '".$PLANET['id']."';
							UPDATE `".USERS."` SET `geo2`='".TIMESTAMP."' WHERE `id` = '".$USER['id']."';
							");
						$this->printMessage($LNG['blm_done'], true, array(
							"game.php?page=BM",
							3)
						);
					}else{
						$this->printMessage($LNG['blm_error'],  true, array("game.php?page=BM", 3));
					}     
				}
			break;
			
			case'geo3':
				$sk = HTTP::_GP('sk', '');
				if($sk == 'change') {
				if(TIMESTAMP < ($USER['geo3']+2*60*60)){
					$this->printMessage($LNG['blm_error4'], true, array(
							"game.php?page=BM",
							3)
						);
				}
				elseif($PLANET['deuterium_sintetizer']>=86) {
						$this->printMessage($LNG['blm_error3'], true, array(
							"game.php?page=BM",
							3)
						);
					}
					elseif($USER['darkmatter']>=5000) { 
						$SQL  = "UPDATE ".USERS." SET ";
						$SQL .= "`darkmatter` = '5000' ";
						$SQL .= "WHERE ";
						$SQL .= "`id` = '". $USER['id'] ."'";
						$GLOBALS['DATABASE']->query($SQL);
						$USER['darkmatter'] -= 5000;
						$GLOBALS['DATABASE']->multi_query("UPDATE `".USERS."` SET `darkmatter`=".$USER['darkmatter']."-5000 WHERE `id`='".$USER['id']. "';
							UPDATE `".PLANETS."` SET `deuterium_sintetizer`=deuterium_sintetizer+1 WHERE `id` = '".$PLANET['id']."';
							UPDATE `".USERS."` SET `geo3`='".TIMESTAMP."' WHERE `id` = '".$USER['id']."';
							");
						$this->printMessage($LNG['blm_done'], true, array(
							"game.php?page=BM",
							3)
						);
					}else{
						$this->printMessage($LNG['blm_error'],  true, array("game.php?page=BM", 3));
					}       
				}
			break;
			
			case'geo4':
				$sk = HTTP::_GP('sk', '');
				if($sk == 'change') {
				if(TIMESTAMP < ($USER['geo4']+2*60*60)){
					$this->printMessage($LNG['blm_error4'], true, array(
							"game.php?page=BM",
							3)
						);
				}
				elseif($PLANET['solar_plant']>=75) {
						$this->printMessage($LNG['blm_error3'], true, array(
							"game.php?page=BM",
							3)
						);
					}
					elseif($USER['darkmatter']>=5000) { 
						$SQL  = "UPDATE ".USERS." SET ";
						$SQL .= "`darkmatter` = '5000' ";
						$SQL .= "WHERE ";
						$SQL .= "`id` = '". $USER['id'] ."'";
						$GLOBALS['DATABASE']->query($SQL);
						$USER['darkmatter'] -= 5000;
						$GLOBALS['DATABASE']->multi_query("UPDATE `".USERS."` SET `darkmatter`=".$USER['darkmatter']."-5000 WHERE `id`='".$USER['id']. "';
							UPDATE `".PLANETS."` SET `solar_plant`=solar_plant+1 WHERE `id` = '".$PLANET['id']."';
							UPDATE `".USERS."` SET `geo4`='".TIMESTAMP."' WHERE `id` = '".$USER['id']."';
							");
						$this->printMessage($LNG['blm_done'], true, array(
							"game.php?page=BM",
							3)
						);
					}else{
						$this->printMessage($LNG['blm_error'],  true, array("game.php?page=BM", 3));
					}      
				}
			break;
			
			case'geo5':
				$sk = HTTP::_GP('sk', '');
				if($sk == 'change') {
				if(TIMESTAMP < ($USER['geo5']+2*60*60)){
					$this->printMessage($LNG['blm_error4'], true, array(
							"game.php?page=BM",
							3)
						);
				}
				elseif($PLANET['university']>=35) {
						$this->printMessage($LNG['blm_error3'], true, array(
							"game.php?page=BM",
							3)
						);
					}
					elseif($USER['darkmatter']>=10000) { 
						$SQL  = "UPDATE ".USERS." SET ";
						$SQL .= "`darkmatter` = '510000' ";
						$SQL .= "WHERE ";
						$SQL .= "`id` = '". $USER['id'] ."'";
						$GLOBALS['DATABASE']->query($SQL);
						$USER['darkmatter'] -= 10000;
						$GLOBALS['DATABASE']->multi_query("UPDATE `".USERS."` SET `darkmatter`=".$USER['darkmatter']."-10000 WHERE `id`='".$USER['id']. "';
							UPDATE `".PLANETS."` SET `university`=university+1 WHERE `id` = '".$PLANET['id']."';
							UPDATE `".USERS."` SET `geo5`='".TIMESTAMP."' WHERE `id` = '".$USER['id']."';
							");
						$this->printMessage($LNG['blm_done'], true, array(
							"game.php?page=BM",
							3)
						);
					}else{
						$this->printMessage($LNG['blm_error'],  true, array("game.php?page=BM", 3));
					}    
				}
			break;
			
			case'geo6':
				$sk = HTTP::_GP('sk', '');
				if($sk == 'change') {
				if(TIMESTAMP < ($USER['geo6']+2*60*60)){
					$this->printMessage($LNG['blm_error4'], true, array(
							"game.php?page=BM",
							3)
						);
				}
				elseif($PLANET['laboratory']>=45) {
						$this->printMessage($LNG['blm_error3'], true, array(
							"game.php?page=BM",
							3)
						);
					}
					elseif($USER['darkmatter']>=5000) { 
						$SQL  = "UPDATE ".USERS." SET ";
						$SQL .= "`darkmatter` = '5000' ";
						$SQL .= "WHERE ";
						$SQL .= "`id` = '". $USER['id'] ."'";
						$GLOBALS['DATABASE']->query($SQL);
						$USER['darkmatter'] -= 5000;
						$GLOBALS['DATABASE']->multi_query("UPDATE `".USERS."` SET `darkmatter`=".$USER['darkmatter']."-5000 WHERE `id`='".$USER['id']. "';
							UPDATE `".PLANETS."` SET `laboratory`=laboratory+1 WHERE `id` = '".$PLANET['id']."';
							UPDATE `".USERS."` SET `geo6`='".TIMESTAMP."' WHERE `id` = '".$USER['id']."';
							");
						$this->printMessage($LNG['blm_done'], true, array(
							"game.php?page=BM",
							3)
						);
					}else{
						$this->printMessage($LNG['blm_error'],  true, array("game.php?page=BM", 3));
					}      
				}
			break;
			
			case'geo7':
				$sk = HTTP::_GP('sk', '');
				if($sk == 'change') {
				if(TIMESTAMP < ($USER['geo7']+2*60*60)){
					$this->printMessage($LNG['blm_error4'], true, array(
							"game.php?page=BM",
							3)
						);
				}
				elseif($PLANET['metal_store']>=40) {
						$this->printMessage($LNG['blm_error3'], true, array(
							"game.php?page=BM",
							3)
						);
					}
					elseif($USER['darkmatter']>=5000) { 
						$SQL  = "UPDATE ".USERS." SET ";
						$SQL .= "`darkmatter` = '5000' ";
						$SQL .= "WHERE ";
						$SQL .= "`id` = '". $USER['id'] ."'";
						$GLOBALS['DATABASE']->query($SQL);
						$USER['darkmatter'] -= 5000;
						$GLOBALS['DATABASE']->multi_query("UPDATE `".USERS."` SET `darkmatter`=".$USER['darkmatter']."-5000 WHERE `id`='".$USER['id']. "';
							UPDATE `".PLANETS."` SET `metal_store`=metal_store+5 WHERE `id` = '".$PLANET['id']."';
							UPDATE `".USERS."` SET `geo7`='".TIMESTAMP."' WHERE `id` = '".$USER['id']."';
							");
						$this->printMessage($LNG['blm_done'], true, array(
							"game.php?page=BM",
							3)
						);
					}else{
						$this->printMessage($LNG['blm_error'],  true, array("game.php?page=BM", 3));
					}       
				}
			break;
			
			case'geo8':
				$sk = HTTP::_GP('sk', '');
				if($sk == 'change') {
				if(TIMESTAMP < ($USER['geo8']+2*60*60)){
					$this->printMessage($LNG['blm_error4'], true, array(
							"game.php?page=BM",
							3)
						);
				}
				elseif($PLANET['crystal_store']>=40) {
						$this->printMessage($LNG['blm_error3'], true, array(
							"game.php?page=BM",
							3)
						);
					}
					elseif($USER['darkmatter']>=5000) { 
						$SQL  = "UPDATE ".USERS." SET ";
						$SQL .= "`darkmatter` = '5000' ";
						$SQL .= "WHERE ";
						$SQL .= "`id` = '". $USER['id'] ."'";
						$GLOBALS['DATABASE']->query($SQL);
						$USER['darkmatter'] -= 5000;
						$GLOBALS['DATABASE']->multi_query("UPDATE `".USERS."` SET `darkmatter`=".$USER['darkmatter']."-5000 WHERE `id`='".$USER['id']. "';
							UPDATE `".PLANETS."` SET `crystal_store`=crystal_store+5 WHERE `id` = '".$PLANET['id']."';
							UPDATE `".USERS."` SET `geo8`='".TIMESTAMP."' WHERE `id` = '".$USER['id']."';
							");
						$this->printMessage($LNG['blm_done'], true, array(
							"game.php?page=BM",
							3)
						);
					}else{
						$this->printMessage($LNG['blm_error'],  true, array("game.php?page=BM", 3));
					}     
				}
			break;
			
			case'geo9':
				$sk = HTTP::_GP('sk', '');
				if($sk == 'change') {
				if(TIMESTAMP < ($USER['geo9']+2*60*60)){
					$this->printMessage($LNG['blm_error4'], true, array(
							"game.php?page=BM",
							3)
						);
				}
				elseif($PLANET['deuterium_store']>=40) {
						$this->printMessage($LNG['blm_error3'], true, array(
							"game.php?page=BM",
							3)
						);
					}
					elseif($USER['darkmatter']>=5000) { 
						$SQL  = "UPDATE ".USERS." SET ";
						$SQL .= "`darkmatter` = '5000' ";
						$SQL .= "WHERE ";
						$SQL .= "`id` = '". $USER['id'] ."'";
						$GLOBALS['DATABASE']->query($SQL);
						$USER['darkmatter'] -= 5000;
						$GLOBALS['DATABASE']->multi_query("UPDATE `".USERS."` SET `darkmatter`=".$USER['darkmatter']."-5000 WHERE `id`='".$USER['id']. "';
							UPDATE `".PLANETS."` SET `deuterium_store`=deuterium_store+5 WHERE `id` = '".$PLANET['id']."';
							UPDATE `".USERS."` SET `geo9`='".TIMESTAMP."' WHERE `id` = '".$USER['id']."';
							");
						$this->printMessage($LNG['blm_done'], true, array(
							"game.php?page=BM",
							3)
						);
					}else{
						$this->printMessage($LNG['blm_error'],  true, array("game.php?page=BM", 3));
					}      
				}
			break;
			
			case'geo10':
				$sk = HTTP::_GP('sk', '');
				if($sk == 'change') {
				if(TIMESTAMP < ($USER['geo10']+2*60*60)){
					$this->printMessage($LNG['blm_error4'], true, array(
							"game.php?page=BM",
							3)
						);
				}
				elseif($PLANET['robot_factory']>=47) {
						$this->printMessage($LNG['blm_error3'], true, array(
							"game.php?page=BM",
							3)
						);
					}
					elseif($USER['darkmatter']>=5000) { 
						$SQL  = "UPDATE ".USERS." SET ";
						$SQL .= "`darkmatter` = '5000' ";
						$SQL .= "WHERE ";
						$SQL .= "`id` = '". $USER['id'] ."'";
						$GLOBALS['DATABASE']->query($SQL);
						$USER['darkmatter'] -= 5000;
						$GLOBALS['DATABASE']->multi_query("UPDATE `".USERS."` SET `darkmatter`=".$USER['darkmatter']."-5000 WHERE `id`='".$USER['id']. "';
							UPDATE `".PLANETS."` SET `robot_factory`=robot_factory+1 WHERE `id` = '".$PLANET['id']."';
							UPDATE `".USERS."` SET `geo10`='".TIMESTAMP."' WHERE `id` = '".$USER['id']."';
							");
						$this->printMessage($LNG['blm_done'], true, array(
							"game.php?page=BM",
							3)
						);
					}else{
						$this->printMessage($LNG['blm_error'],  true, array("game.php?page=BM", 3));
					}    
				}
			break;
			
			case'geo11':
				$sk = HTTP::_GP('sk', '');
				if($sk == 'change') {
				if(TIMESTAMP < ($USER['geo11']+2*60*60)){
					$this->printMessage($LNG['blm_error4'], true, array(
							"game.php?page=BM",
							3)
						);
				}
				elseif($PLANET['hangar']>=47) {
						$this->printMessage($LNG['blm_error3'], true, array(
							"game.php?page=BM",
							3)
						);
					}
					elseif($USER['darkmatter']>=5000) { 
						$SQL  = "UPDATE ".USERS." SET ";
						$SQL .= "`darkmatter` = '5000' ";
						$SQL .= "WHERE ";
						$SQL .= "`id` = '". $USER['id'] ."'";
						$GLOBALS['DATABASE']->query($SQL);
						$USER['darkmatter'] -= 5000;
						$GLOBALS['DATABASE']->multi_query("UPDATE `".USERS."` SET `darkmatter`=".$USER['darkmatter']."-5000 WHERE `id`='".$USER['id']. "';
							UPDATE `".PLANETS."` SET `hangar`=hangar+1 WHERE `id` = '".$PLANET['id']."';
							UPDATE `".USERS."` SET `geo11`='".TIMESTAMP."' WHERE `id` = '".$USER['id']."';
							");
						$this->printMessage($LNG['blm_done'], true, array(
							"game.php?page=BM",
							3)
						);
					}else{
						$this->printMessage($LNG['blm_error'],  true, array("game.php?page=BM", 3));
					}      
				}
			break;
			
			case'geo12':
				$sk = HTTP::_GP('sk', '');
				if($sk == 'change') {
				if(TIMESTAMP < ($USER['geo12']+2*60*60)){
					$this->printMessage($LNG['blm_error4'], true, array(
							"game.php?page=BM",
							3)
						);
				}
				elseif($PLANET['nano_factory']>=35) {
						$this->printMessage($LNG['blm_error3'], true, array(
							"game.php?page=BM",
							3)
						);
					}
					elseif($USER['darkmatter']>=10000) { 
						$SQL  = "UPDATE ".USERS." SET ";
						$SQL .= "`darkmatter` = '10000' ";
						$SQL .= "WHERE ";
						$SQL .= "`id` = '". $USER['id'] ."'";
						$GLOBALS['DATABASE']->query($SQL);
						$USER['darkmatter'] -= 10000;
						$GLOBALS['DATABASE']->multi_query("UPDATE `".USERS."` SET `darkmatter`=".$USER['darkmatter']."-10000 WHERE `id`='".$USER['id']. "';
							UPDATE `".PLANETS."` SET `nano_factory`=nano_factory+1 WHERE `id` = '".$PLANET['id']."';
							UPDATE `".USERS."` SET `geo12`='".TIMESTAMP."' WHERE `id` = '".$USER['id']."';
							");
						$this->printMessage($LNG['blm_done'], true, array(
							"game.php?page=BM",
							3)
						);
					}else{
						$this->printMessage($LNG['blm_error'],  true, array("game.php?page=BM", 3));
					}  
				}
			break;
			
			case'geo13':
				$sk = HTTP::_GP('sk', '');
				if($sk == 'change') {
				if(TIMESTAMP < ($USER['geo13']+12*60*60)){
					$this->printMessage($LNG['blm_error4'], true, array(
							"game.php?page=BM",
							3)
						);
				}
				elseif($USER['darkmatter']>=15000 || $USER['urlaubs_modus'] == 1 || $PLANET['planet_type'] != 1) { 
						if($USER['urlaubs_modus'] == 1 || $PLANET['planet_type'] != 1)
					{
			$basicIncome[901]	= 0;
			$basicIncome[902]	= 0;
			$basicIncome[903]	= 0;
			$basicIncome[911]	= 0;
		}
		else
		{		
			$basicIncome[901]	= Config::get($resource[901].'_basic_income');
			$basicIncome[902]	= Config::get($resource[902].'_basic_income');
			$basicIncome[903]	= Config::get($resource[903].'_basic_income');
			$basicIncome[911]	= Config::get($resource[911].'_basic_income');
		}
			$temp	= array(
			901	=> array(
				'plus'	=> 0,
				'minus'	=> 0,
			),
			902	=> array(
				'plus'	=> 0,
				'minus'	=> 0,
			),
			903	=> array(
				'plus'	=> 0,
				'minus'	=> 0,
			),
		);
		
		$basicProduction	= array(
			901 => $basicIncome[901] * Config::get('resource_multiplier'),
			902 => $basicIncome[902] * Config::get('resource_multiplier'),
			903	=> $basicIncome[903] * Config::get('resource_multiplier'),
		);
		
		$totalProduction	= array(
			901 => $PLANET[$resource[901].'_perhour'] + $basicProduction[901],
			902 => $PLANET[$resource[902].'_perhour'] + $basicProduction[902],
			903	=> $PLANET[$resource[903].'_perhour'] + $basicProduction[903],
		);
		
		$bonusProduction	= array(
			901 => $temp[901]['plus'] * ($USER['factor']['Resource'] + 0.02 * $USER[$resource[131]]),
			902 => $temp[902]['plus'] * ($USER['factor']['Resource'] + 0.02 * $USER[$resource[132]]),
			903	=> $temp[903]['plus'] * ($USER['factor']['Resource'] + 0.02 * $USER[$resource[133]]),
		);
		
						$metallbonus	= $totalProduction[901]*24*7;
						$kristallbonus	= $totalProduction[902]*24*7;
						$deutbonus		= $totalProduction[903]*24*7;
						
						$week_met		= $metallbonus;
						$week_cry		= $kristallbonus;
						$week_deu		= $deutbonus; 
						
						$PLANET['metal']		+= $metallbonus;
						$PLANET['crystal']		+= $kristallbonus;
						$PLANET['deuterium']	+= $deutbonus;
						$USER['darkmatter']	-= 15000;
						$GLOBALS['DATABASE']->multi_query("UPDATE `".USERS."` SET `darkmatter`=".$USER['darkmatter']."-15000 WHERE `id`='".$USER['id']. "';
							UPDATE `".USERS."` SET `geo13`='".TIMESTAMP."' WHERE `id` = '".$USER['id']."';
							");
					$this->printMessage($LNG['blm_done'], true, array(
							"game.php?page=BM",
							3)
						);
					}
					else
					{
						$this->printMessage($LNG['blm_error2'],  true, array("game.php?page=BM", 3));
					}  
				}
			break;
			case'geo14':
				$sk = HTTP::_GP('sk', '');
				if($sk == 'change') {
				if(TIMESTAMP < ($USER['geo14']+2*60*60)){
					$this->printMessage($LNG['blm_error4'], true, array(
							"game.php?page=BM",
							3)
						);
				}
				elseif($PLANET['id_luna']>=1) {
						$this->printMessage($LNG['blm_error3'], true, array(
							"game.php?page=BM",
							3)
						);
					}
						elseif($USER['darkmatter']>=10000) { 
						$SQL  = "UPDATE ".USERS." SET ";
						$SQL .= "`darkmatter` = '5000' ";
						$SQL .= "WHERE ";
						$SQL .= "`id` = '". $USER['id'] ."'";
						$GLOBALS['DATABASE']->query($SQL);
						$USER['darkmatter'] -= 10000;
						$GLOBALS['DATABASE']->multi_query("UPDATE `".USERS."` SET `darkmatter`=".$USER['darkmatter']."-10000 WHERE `id`='".$USER['id']. "';
							UPDATE `".USERS."` SET `geo14`='".TIMESTAMP."' WHERE `id` = '".$USER['id']."';
							");
							// Moon
							require_once(ROOT_PATH.'includes/functions/CreateOneMoonRecord.php');
							$Size = mt_rand(7000, 9000);
							$MoonRequest = CreateOneMoonRecord($PLANET['galaxy'], $PLANET['system'], $PLANET['planet'], $PLANET['universe'], $USER['id'],'', 'Moon', '', $Size);

							$this->printMessage($LNG['blm_done'], true, array("game.php?page=BM",3));  
						}else{
						$this->printMessage($LNG['blm_error2'],  true, array("game.php?page=BM", 3));
					} 
					}
			break;
			
	
	}
}
}