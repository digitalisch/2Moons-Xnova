<?php

class ShowAchievementPage extends AbstractPage 
{
	public static $requireModule = MODULE_SUPPORT;
	function __construct() 
	{
		parent::__construct();
		
	}
		
function show()

{

	global $USER, $PLANET, $LNG, $CONF, $reslist, $resource;
	//Mine Achievement
	
	//Mine Level 1
	if($USER['achievements_mine'] == 1)
	{
		if($PLANET['metal_mine'] >= 8 && $PLANET['crystal_mine'] >= 7 && $PLANET['deuterium_sintetizer'] >=6)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_mine` = achievements_mine+1 WHERE `id` = ".$USER['id'].";");
				$USER[$resource[921]] += 250; //reward dm
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `rpg_geologue` = rpg_geologue+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_mine'],$LNG['achievements_mine_lvl1'],$LNG['achievements_mine_reward_lvl1']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($PLANET['metal_mine'] >=8)
			$mine_done1 = '<img src="styles/achievements/done.png" >';
		else
			$mine_done1 = '<img src="styles/achievements/miss.png" >';
		if($PLANET['crystal_mine'] >=7)
			$mine_done2 = '<img src="styles/achievements/done.png" >';
		else
			$mine_done2 = '<img src="styles/achievements/miss.png" >';	
		if($PLANET['deuterium_sintetizer'] >=6)
			$mine_done3 = '<img src="styles/achievements/done.png" >';
		else
			$mine_done3 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'mine_lvl'			=> $LNG['achievements_mine_lvl1'],
			'mine_req_1'		=> sprintf($LNG['achievements_mine_require_1'],8),
			'mine_req_2'		=> sprintf($LNG['achievements_mine_require_2'],7),
			'mine_req_3'		=> sprintf($LNG['achievements_mine_require_3'],6),
			'mine_reward'		=> $LNG['achievements_mine_reward_lvl1'],
			'mine_done1'    	=> $mine_done1,
			'mine_done2'    	=> $mine_done2,
			'mine_done3'    	=> $mine_done3,
		));
	}
	
	//Mine Level 2
	if($USER['achievements_mine'] == 2)
	{
		if($PLANET['metal_mine'] >= 15 && $PLANET['crystal_mine'] >= 14 && $PLANET['deuterium_sintetizer'] >=12)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_mine` = achievements_mine+1 WHERE `id` = ".$USER['id'].";");
				$USER[$resource[921]] += 500; //reward dm
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `rpg_geologue` = rpg_geologue+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_mine'],$LNG['achievements_mine_lvl2'],$LNG['achievements_mine_reward_lvl2']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($PLANET['metal_mine'] >=15)
			$mine_done1 = '<img src="styles/achievements/done.png" >';
		else
			$mine_done1 = '<img src="styles/achievements/miss.png" >';
		if($PLANET['crystal_mine'] >=14)
			$mine_done2 = '<img src="styles/achievements/done.png" >';
		else
			$mine_done2 = '<img src="styles/achievements/miss.png" >';	
		if($PLANET['deuterium_sintetizer'] >=12)
			$mine_done3 = '<img src="styles/achievements/done.png" >';
		else
			$mine_done3 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'mine_lvl'			=> $LNG['achievements_mine_lvl2'],
			'mine_req_1'		=> sprintf($LNG['achievements_mine_require_1'],15),
			'mine_req_2'		=> sprintf($LNG['achievements_mine_require_2'],14),
			'mine_req_3'		=> sprintf($LNG['achievements_mine_require_3'],12),
			'mine_reward'		=> $LNG['achievements_mine_reward_lvl2'],
			'mine_done1'    	=> $mine_done1,
			'mine_done2'    	=> $mine_done2,
			'mine_done3'    	=> $mine_done3,
		));
	}
	
	//Mine Level 3
	if($USER['achievements_mine'] == 3)
	{
		if($PLANET['metal_mine'] >= 20 && $PLANET['crystal_mine'] >= 18 && $PLANET['deuterium_sintetizer'] >=16)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_mine` = achievements_mine+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `rpg_geologue` = rpg_geologue+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
				$USER[$resource[921]] += 750; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_mine'],$LNG['achievements_mine_lvl3'],$LNG['achievements_mine_reward_lvl3']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($PLANET['metal_mine'] >=20)
			$mine_done1 = '<img src="styles/achievements/done.png" >';
		else
			$mine_done1 = '<img src="styles/achievements/miss.png" >';
		if($PLANET['crystal_mine'] >=18)
			$mine_done2 = '<img src="styles/achievements/done.png" >';
		else
			$mine_done2 = '<img src="styles/achievements/miss.png" >';	
		if($PLANET['deuterium_sintetizer'] >=16)
			$mine_done3 = '<img src="styles/achievements/done.png" >';
		else
			$mine_done3 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'mine_lvl'			=> $LNG['achievements_mine_lvl3'],
			'mine_req_1'		=> sprintf($LNG['achievements_mine_require_1'],20),
			'mine_req_2'		=> sprintf($LNG['achievements_mine_require_2'],18),
			'mine_req_3'		=> sprintf($LNG['achievements_mine_require_3'],16),
			'mine_reward'		=> $LNG['achievements_mine_reward_lvl3'],
			'mine_done1'    	=> $mine_done1,
			'mine_done2'    	=> $mine_done2,
			'mine_done3'    	=> $mine_done3,
		));
	}
	
	//Mine Level 4
	if($USER['achievements_mine'] == 4)
	{
		if($PLANET['metal_mine'] >= 25 && $PLANET['crystal_mine'] >= 23 && $PLANET['deuterium_sintetizer'] >=21)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_mine` = achievements_mine+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `rpg_geologue` = rpg_geologue+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
				$USER[$resource[921]] += 1000; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_mine'],$LNG['achievements_mine_lvl4'],$LNG['achievements_mine_reward_lvl4']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($PLANET['metal_mine'] >=25)
			$mine_done1 = '<img src="styles/achievements/done.png" >';
		else
			$mine_done1 = '<img src="styles/achievements/miss.png" >';
		if($PLANET['crystal_mine'] >=23)
			$mine_done2 = '<img src="styles/achievements/done.png" >';
		else
			$mine_done2 = '<img src="styles/achievements/miss.png" >';	
		if($PLANET['deuterium_sintetizer'] >=21)
			$mine_done3 = '<img src="styles/achievements/done.png" >';
		else
			$mine_done3 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'mine_lvl'			=> $LNG['achievements_mine_lvl4'],
			'mine_req_1'		=> sprintf($LNG['achievements_mine_require_1'],25),
			'mine_req_2'		=> sprintf($LNG['achievements_mine_require_2'],23),
			'mine_req_3'		=> sprintf($LNG['achievements_mine_require_3'],21),
			'mine_reward'		=> $LNG['achievements_mine_reward_lvl4'],
			'mine_done1'    	=> $mine_done1,
			'mine_done2'    	=> $mine_done2,
			'mine_done3'    	=> $mine_done3,
		));
	}

	//Mine Level 5
	if($USER['achievements_mine'] == 5)
	{
		if($PLANET['metal_mine'] >= 30 && $PLANET['crystal_mine'] >= 28 && $PLANET['deuterium_sintetizer'] >=26)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_mine` = achievements_mine+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `rpg_geologue` = rpg_geologue+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
				$USER[$resource[921]] += 1250; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_mine'],$LNG['achievements_mine_lvl5'],$LNG['achievements_mine_reward_lvl5']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($PLANET['metal_mine'] >=30)
			$mine_done1 = '<img src="styles/achievements/done.png" >';
		else
			$mine_done1 = '<img src="styles/achievements/miss.png" >';
		if($PLANET['crystal_mine'] >=28)
			$mine_done2 = '<img src="styles/achievements/done.png" >';
		else
			$mine_done2 = '<img src="styles/achievements/miss.png" >';	
		if($PLANET['deuterium_sintetizer'] >=26)
			$mine_done3 = '<img src="styles/achievements/done.png" >';
		else
			$mine_done3 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'mine_lvl'			=> $LNG['achievements_mine_lvl5'],
			'mine_req_1'		=> sprintf($LNG['achievements_mine_require_1'],30),
			'mine_req_2'		=> sprintf($LNG['achievements_mine_require_2'],28),
			'mine_req_3'		=> sprintf($LNG['achievements_mine_require_3'],26),
			'mine_reward'		=> $LNG['achievements_mine_reward_lvl5'],
			'mine_done1'    	=> $mine_done1,
			'mine_done2'    	=> $mine_done2,
			'mine_done3'    	=> $mine_done3,
		));
	}

	//Mine Level is HARDCORE
	if($USER['achievements_mine'] == 6)
	{
		if($PLANET['metal_mine'] >= 35 && $PLANET['crystal_mine'] >= 33 && $PLANET['deuterium_sintetizer'] >=31)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_mine` = achievements_mine+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `rpg_geologue` = rpg_geologue+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_mine'],$LNG['achievements_mine_hardcore'],$LNG['achievements_mine_reward_hardcore']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($PLANET['metal_mine'] >=35)
			$mine_done1 = '<img src="styles/achievements/done.png" >';
		else
			$mine_done1 = '<img src="styles/achievements/miss.png" >';
		if($PLANET['crystal_mine'] >=33)
			$mine_done2 = '<img src="styles/achievements/done.png" >';
		else
			$mine_done2 = '<img src="styles/achievements/miss.png" >';	
		if($PLANET['deuterium_sintetizer'] >=31)
			$mine_done3 = '<img src="styles/achievements/done.png" >';
		else
			$mine_done3 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'mine_lvl'			=> $LNG['achievements_mine_hardcore'],
			'mine_req_1'		=> sprintf($LNG['achievements_mine_require_1'],35),
			'mine_req_2'		=> sprintf($LNG['achievements_mine_require_2'],33),
			'mine_req_3'		=> sprintf($LNG['achievements_mine_require_3'],31),
			'mine_reward'		=> $LNG['achievements_mine_reward_hardcore'],
			'mine_done1'    	=> $mine_done1,
			'mine_done2'    	=> $mine_done2,
			'mine_done3'    	=> $mine_done3,
		));
	}

	//Mine Finish
	if($USER['achievements_mine'] > 6)
	{
		$mine_done1 = '<img src="styles/achievements/done.png" >';
		$mine_done2 = '<img src="styles/achievements/done.png" >';
		$mine_done3 = '<img src="styles/achievements/done.png" >';
		$this->tplObj->assign_vars(array(
			'mine_lvl'			=> ' <span style="color:yellow">'.$LNG['achievements_mine_done'].'</span>',
			'mine_req_1'		=> sprintf($LNG['achievements_mine_require_1'],35),
			'mine_req_2'		=> sprintf($LNG['achievements_mine_require_2'],33),
			'mine_req_3'		=> sprintf($LNG['achievements_mine_require_3'],31),
			'mine_reward'		=> $LNG['achievements_mine_reward_hardcore'],
			'mine_done1'    	=> $mine_done1,
			'mine_done2'    	=> $mine_done2,
			'mine_done3'    	=> $mine_done3,
		));
	}
	
	//Research Achievement
	
	//Research Level 1
	if($USER['achievements_research'] == 1)
	{
		if($USER['spy_tech'] >= 5 && $USER['computer_tech'] >= 5 && $USER['energy_tech'] >=5)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_research` = achievements_research+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 350; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_research'],$LNG['achievements_research_lvl1'],$LNG['achievements_research_reward_lvl1']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['spy_tech'] >= 5)
			$research_done1 = '<img src="styles/achievements/done.png" >';
		else
			$research_done1 = '<img src="styles/achievements/miss.png" >';
		if($USER['computer_tech'] >= 6)
			$research_done2 = '<img src="styles/achievements/done.png" >';
		else
			$research_done2 = '<img src="styles/achievements/miss.png" >';	
		if($USER['energy_tech'] >=5)
			$research_done3 = '<img src="styles/achievements/done.png" >';
		else
			$research_done3 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'research_lvl'			=> $LNG['achievements_research_lvl1'],
			'research_req_1'		=> $LNG['achievements_research_lvl1_require_1'],
			'research_req_2'		=> $LNG['achievements_research_lvl1_require_2'],
			'research_req_3'		=> $LNG['achievements_research_lvl1_require_3'],
			'research_reward'		=> $LNG['achievements_research_reward_lvl1'],
			'research_done1'    	=> $research_done1,
			'research_done2'    	=> $research_done2,
			'research_done3'    	=> $research_done3,
		));
	}
	
	//Research Level 2
	if($USER['achievements_research'] == 2)
	{
		if($USER['spy_tech'] >= 10 && $USER['computer_tech'] >= 10 && $USER['energy_tech'] >=10)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_research` = achievements_research+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_research'],$LNG['achievements_research_lvl2'],$LNG['achievements_research_reward_lvl2']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['spy_tech'] >= 10)
			$research_done1 = '<img src="styles/achievements/done.png" >';
		else
			$research_done1 = '<img src="styles/achievements/miss.png" >';
		if($USER['computer_tech'] >= 10)
			$research_done2 = '<img src="styles/achievements/done.png" >';
		else
			$research_done2 = '<img src="styles/achievements/miss.png" >';	
		if($USER['energy_tech'] >=10)
			$research_done3 = '<img src="styles/achievements/done.png" >';
		else
			$research_done3 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'research_lvl'			=> $LNG['achievements_research_lvl2'],
			'research_req_1'		=> $LNG['achievements_research_lvl2_require_1'],
			'research_req_2'		=> $LNG['achievements_research_lvl2_require_2'],
			'research_req_3'		=> $LNG['achievements_research_lvl2_require_3'],
			'research_reward'		=> $LNG['achievements_research_reward_lvl2'],
			'research_done1'    	=> $research_done1,
			'research_done2'    	=> $research_done2,
			'research_done3'    	=> $research_done3,
		));
	}
	
	//Research Level 3
	if($USER['achievements_research'] == 3)
	{
		if($USER['combustion_tech'] >=10 && $USER['impulse_motor_tech'] >= 7 && $USER['hyperspace_motor_tech'] >= 5)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_research` = achievements_research+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_research'],$LNG['achievements_research_lvl3'],$LNG['achievements_research_reward_lvl3']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['combustion_tech'] >= 10)
			$research_done1 = '<img src="styles/achievements/done.png" >';
		else
			$research_done1 = '<img src="styles/achievements/miss.png" >';
		if($USER['impulse_motor_tech'] >= 7)
			$research_done2 = '<img src="styles/achievements/done.png" >';
		else
			$research_done2 = '<img src="styles/achievements/miss.png" >';	
		if($USER['hyperspace_motor_tech'] >=5)
			$research_done3 = '<img src="styles/achievements/done.png" >';
		else
			$research_done3 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'research_lvl'			=> $LNG['achievements_research_lvl3'],
			'research_req_1'		=> $LNG['achievements_research_lvl3_require_1'],
			'research_req_2'		=> $LNG['achievements_research_lvl3_require_2'],
			'research_req_3'		=> $LNG['achievements_research_lvl3_require_3'],
			'research_reward'		=> $LNG['achievements_research_reward_lvl3'],
			'research_done1'    	=> $research_done1,
			'research_done2'    	=> $research_done2,
			'research_done3'    	=> $research_done3,
		));
	}
	
	//Research Level 4
	if($USER['achievements_research'] == 4)
	{
		if($USER['metal_proc_tech'] >=15 && $USER['crystal_proc_tech'] >= 15 && $USER['deuterium_proc_tech'] >= 15)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_research` = achievements_research+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 750; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_research'],$LNG['achievements_research_lvl4'],$LNG['achievements_research_reward_lvl4']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['metal_proc_tech'] >=15)
			$research_done1 = '<img src="styles/achievements/done.png" >';
		else
			$research_done1 = '<img src="styles/achievements/miss.png" >';
		if($USER['crystal_proc_tech'] >= 15)
			$research_done2 = '<img src="styles/achievements/done.png" >';
		else
			$research_done2 = '<img src="styles/achievements/miss.png" >';	
		if($USER['deuterium_proc_tech'] >= 15)
			$research_done3 = '<img src="styles/achievements/done.png" >';
		else
			$research_done3 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'research_lvl'			=> $LNG['achievements_research_lvl4'],
			'research_req_1'		=> $LNG['achievements_research_lvl4_require_1'],
			'research_req_2'		=> $LNG['achievements_research_lvl4_require_2'],
			'research_req_3'		=> $LNG['achievements_research_lvl4_require_3'],
			'research_reward'		=> $LNG['achievements_research_reward_lvl4'],
			'research_done1'    	=> $research_done1,
			'research_done2'    	=> $research_done2,
			'research_done3'    	=> $research_done3,
		));
	}
	
	//Research Level 5
	if($USER['achievements_research'] == 5)
	{
		if($USER['military_tech'] >=15 && $USER['defence_tech'] >= 15 && $USER['shield_tech'] >= 15)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_research` = achievements_research+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 750; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_research'],$LNG['achievements_research_lvl5'],$LNG['achievements_research_reward_lvl5']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['military_tech'] >=15)
			$research_done1 = '<img src="styles/achievements/done.png" >';
		else
			$research_done1 = '<img src="styles/achievements/miss.png" >';
		if($USER['defence_tech'] >= 15)
			$research_done2 = '<img src="styles/achievements/done.png" >';
		else
			$research_done2 = '<img src="styles/achievements/miss.png" >';	
		if($USER['shield_tech'] >= 15)
			$research_done3 = '<img src="styles/achievements/done.png" >';
		else
			$research_done3 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'research_lvl'			=> $LNG['achievements_research_lvl5'],
			'research_req_1'		=> $LNG['achievements_research_lvl5_require_1'],
			'research_req_2'		=> $LNG['achievements_research_lvl5_require_2'],
			'research_req_3'		=> $LNG['achievements_research_lvl5_require_3'],
			'research_reward'		=> $LNG['achievements_research_reward_lvl5'],
			'research_done1'    	=> $research_done1,
			'research_done2'    	=> $research_done2,
			'research_done3'    	=> $research_done3,
		));
	}
	
	//Research Level in HARDCORE
	if($USER['achievements_research'] == 6)
	{
		if($USER['military_tech'] >=20 && $USER['defence_tech'] >= 20 && $USER['shield_tech'] >= 20)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_research` = achievements_research+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1000; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_research'],$LNG['achievements_research_hardcore'],$LNG['achievements_research_reward_hardcore']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['military_tech'] >=20)
			$research_done1 = '<img src="styles/achievements/done.png" >';
		else
			$research_done1 = '<img src="styles/achievements/miss.png" >';
		if($USER['defence_tech'] >= 20)
			$research_done2 = '<img src="styles/achievements/done.png" >';
		else
			$research_done2 = '<img src="styles/achievements/miss.png" >';	
		if($USER['shield_tech'] >= 20)
			$research_done3 = '<img src="styles/achievements/done.png" >';
		else
			$research_done3 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'research_lvl'			=> $LNG['achievements_research_hardcore'],
			'research_req_1'		=> $LNG['achievements_research_hardcore_require_1'],
			'research_req_2'		=> $LNG['achievements_research_hardcore_require_2'],
			'research_req_3'		=> $LNG['achievements_research_hardcore_require_3'],
			'research_reward'		=> $LNG['achievements_research_reward_hardcore'],
			'research_done1'    	=> $research_done1,
			'research_done2'    	=> $research_done2,
			'research_done3'    	=> $research_done3,
		));
	}
	//Research Finish
	if($USER['achievements_research'] > 6)
	{
		$research_done1 = '<img src="styles/achievements/done.png" >';
		$research_done2 = '<img src="styles/achievements/done.png" >';
		$research_done3 = '<img src="styles/achievements/done.png" >';
		
		$this->tplObj->assign_vars(array(
			'research_lvl'			=> ' <span style="color:yellow">'.$LNG['achievements_research_done'].'</span>',
			'research_req_1'		=> $LNG['achievements_research_hardcore_require_1'],
			'research_req_2'		=> $LNG['achievements_research_hardcore_require_2'],
			'research_req_3'		=> $LNG['achievements_research_hardcore_require_3'],
			'research_reward'		=> $LNG['achievements_research_reward_hardcore'],
			'research_done1'    	=> $research_done1,
			'research_done2'    	=> $research_done2,
			'research_done3'    	=> $research_done3,
		));
	}
	
	//Battle Achievment
	
	//Battle Level 1
	if($USER['achievements_battle'] == 1)
	{
		if(($USER['wons']+$USER['loos']+$USER['draws'])>=50 && $USER['wons']>=17)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_battle` = achievements_battle+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 200; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_battle'],$LNG['achievements_battle_lvl1'],$LNG['achievements_battle_reward_lvl1']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if (($USER['wons']+$USER['loos']+$USER['draws']) >=50)
			$battle_done1 = '<img src="styles/achievements/done.png" >';
		else
			$battle_done1 = '<img src="styles/achievements/miss.png" >';
		if($USER['wons']>=17)
			$battle_done2 = '<img src="styles/achievements/done.png" >';
		else
			$battle_done2 = '<img src="styles/achievements/miss.png" >';	
		
		$this->tplObj->assign_vars(array(
			'battle_lvl'		=> $LNG['achievements_battle_lvl1'],
			'battle_req_1'		=> sprintf($LNG['achievements_battle_require_1'],50),
			'battle_req_2'		=> sprintf($LNG['achievements_battle_require_2'],17),
			'battle_reward'		=> $LNG['achievements_battle_reward_lvl1'],
			'battle_done1'    	=> $battle_done1,
			'battle_done2'    	=> $battle_done2,

		));
	}
	
	//Battle Level 2
	if($USER['achievements_battle'] == 2)
	{
		if(($USER['wons']+$USER['loos']+$USER['draws'])>=75 && $USER['wons']>=30)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_battle` = achievements_battle+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 400; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_battle'],$LNG['achievements_battle_lvl2'],$LNG['achievements_battle_reward_lvl2']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if (($USER['wons']+$USER['loos']+$USER['draws']) >=75)
			$battle_done1 = '<img src="styles/achievements/done.png" >';
		else
			$battle_done1 = '<img src="styles/achievements/miss.png" >';
		if($USER['wons']>=30)
			$battle_done2 = '<img src="styles/achievements/done.png" >';
		else
			$battle_done2 = '<img src="styles/achievements/miss.png" >';	
		
		$this->tplObj->assign_vars(array(
			'battle_lvl'		=> $LNG['achievements_battle_lvl2'],
			'battle_req_1'		=> sprintf($LNG['achievements_battle_require_1'],75),
			'battle_req_2'		=> sprintf($LNG['achievements_battle_require_2'],30),
			'battle_reward'		=> $LNG['achievements_battle_reward_lvl2'],
			'battle_done1'    	=> $battle_done1,
			'battle_done2'    	=> $battle_done2,

		));
	}
	
	//Battle Level 3
	if($USER['achievements_battle'] == 3)
	{
		if(($USER['wons']+$USER['loos']+$USER['draws'])>=120 && $USER['wons']>=55)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_battle` = achievements_battle+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 650; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_battle'],$LNG['achievements_battle_lvl3'],$LNG['achievements_battle_reward_lvl3']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if (($USER['wons']+$USER['loos']+$USER['draws']) >=120)
			$battle_done1 = '<img src="styles/achievements/done.png" >';
		else
			$battle_done1 = '<img src="styles/achievements/miss.png" >';
		if($USER['wons']>=55)
			$battle_done2 = '<img src="styles/achievements/done.png" >';
		else
			$battle_done2 = '<img src="styles/achievements/miss.png" >';	
		
		$this->tplObj->assign_vars(array(
			'battle_lvl'		=> $LNG['achievements_battle_lvl3'],
			'battle_req_1'		=> sprintf($LNG['achievements_battle_require_1'],120),
			'battle_req_2'		=> sprintf($LNG['achievements_battle_require_2'],55),
			'battle_reward'		=> $LNG['achievements_battle_reward_lvl3'],
			'battle_done1'    	=> $battle_done1,
			'battle_done2'    	=> $battle_done2,

		));
	}
	
	//Battle Level 4
	if($USER['achievements_battle'] == 4)
	{
		if(($USER['wons']+$USER['loos']+$USER['draws'])>=150 && $USER['wons']>=75)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_battle` = achievements_battle+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 900; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_battle'],$LNG['achievements_battle_lvl4'],$LNG['achievements_battle_reward_lvl4']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if (($USER['wons']+$USER['loos']+$USER['draws']) >=150)
			$battle_done1 = '<img src="styles/achievements/done.png" >';
		else
			$battle_done1 = '<img src="styles/achievements/miss.png" >';
		if($USER['wons']>=75)
			$battle_done2 = '<img src="styles/achievements/done.png" >';
		else
			$battle_done2 = '<img src="styles/achievements/miss.png" >';	
		
		$this->tplObj->assign_vars(array(
			'battle_lvl'		=> $LNG['achievements_battle_lvl4'],
			'battle_req_1'		=> sprintf($LNG['achievements_battle_require_1'],150),
			'battle_req_2'		=> sprintf($LNG['achievements_battle_require_2'],75),
			'battle_reward'		=> $LNG['achievements_battle_reward_lvl4'],
			'battle_done1'    	=> $battle_done1,
			'battle_done2'    	=> $battle_done2,

		));
	}
	
	//Battle Level 5
	if($USER['achievements_battle'] == 5)
	{
		if(($USER['wons']+$USER['loos']+$USER['draws'])>=200 && $USER['wons']>=95)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_battle` = achievements_battle+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1200; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_battle'],$LNG['achievements_battle_lvl5'],$LNG['achievements_battle_reward_lvl5']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if (($USER['wons']+$USER['loos']+$USER['draws']) >=200)
			$battle_done1 = '<img src="styles/achievements/done.png" >';
		else
			$battle_done1 = '<img src="styles/achievements/miss.png" >';
		if($USER['wons']>=95)
			$battle_done2 = '<img src="styles/achievements/done.png" >';
		else
			$battle_done2 = '<img src="styles/achievements/miss.png" >';	
		
		$this->tplObj->assign_vars(array(
			'battle_lvl'		=> $LNG['achievements_battle_lvl5'],
			'battle_req_1'		=> sprintf($LNG['achievements_battle_require_1'],200),
			'battle_req_2'		=> sprintf($LNG['achievements_battle_require_2'],95),
			'battle_reward'		=> $LNG['achievements_battle_reward_lvl5'],
			'battle_done1'    	=> $battle_done1,
			'battle_done2'    	=> $battle_done2,

		));
	}
		
	//Battle Level in HARDCORE
	if($USER['achievements_battle'] == 6)
	{
		if(($USER['wons']+$USER['loos']+$USER['draws'])>=300 && $USER['wons']>=150)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_battle` = achievements_battle+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_battle'],$LNG['achievements_battle_hardcore'],$LNG['achievements_battle_reward_hardcore']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if (($USER['wons']+$USER['loos']+$USER['draws']) >=300)
			$battle_done1 = '<img src="styles/achievements/done.png" >';
		else
			$battle_done1 = '<img src="styles/achievements/miss.png" >';
		if($USER['wons']>=150)
			$battle_done2 = '<img src="styles/achievements/done.png" >';
		else
			$battle_done2 = '<img src="styles/achievements/miss.png" >';	
		
		$this->tplObj->assign_vars(array(
			'battle_lvl'		=> $LNG['achievements_battle_hardcore'],
			'battle_req_1'		=> sprintf($LNG['achievements_battle_require_1'],300),
			'battle_req_2'		=> sprintf($LNG['achievements_battle_require_2'],150),
			'battle_reward'		=> $LNG['achievements_battle_reward_hardcore'],
			'battle_done1'    	=> $battle_done1,
			'battle_done2'    	=> $battle_done2,

		));
	}

	//Battle Finish
	if($USER['achievements_battle'] > 6)
	{
		$battle_done1 = '<img src="styles/achievements/done.png" >';
		$battle_done2 = '<img src="styles/achievements/done.png" >';

		$this->tplObj->assign_vars(array(
			'battle_lvl'		=> ' <span style="color:yellow">'.$LNG['achievements_battle_done'].'</span>',
			'battle_req_1'		=> sprintf($LNG['achievements_battle_require_1'],300),
			'battle_req_2'		=> sprintf($LNG['achievements_battle_require_2'],150),
			'battle_reward'		=> $LNG['achievements_battle_reward_hardcore'],
			'battle_done1'    	=> $battle_done1,
			'battle_done2'    	=> $battle_done2,

		));
	}
	
	//Ship Achievement

	//Ship Level 1
	if($USER['achievements_ship'] == 1)
	{
		if($PLANET['small_ship_cargo']>=1000 && $PLANET['big_ship_cargo']>=750)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_ship` = achievements_ship+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_ship'],$LNG['achievements_ship_lvl1'],$LNG['achievements_ship_reward_lvl1']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($PLANET['light_hunter']>=1000)
			$ship_done1 = '<img src="styles/achievements/done.png" >';
		else
			$ship_done1 = '<img src="styles/achievements/miss.png" >';
		
		if($PLANET['big_ship_cargo']>=750)
			$ship_done2 = '<img src="styles/achievements/done.png" >';
		else
			$ship_done2 = '<img src="styles/achievements/miss.png" >';	
		
		$this->tplObj->assign_vars(array(
			'ship_lvl'			=> $LNG['achievements_ship_lvl1'],
			'ship_req_1'		=> $LNG['achievements_ship_lvl1_require_1'],
			'ship_req_2'		=> $LNG['achievements_ship_lvl1_require_2'],
			'ship_reward'		=> $LNG['achievements_ship_reward_lvl1'],
			'ship_done1'    	=> $ship_done1,
			'ship_done2'    	=> $ship_done2,

		));
	}
	
	//Ship Level 2
	if($USER['achievements_ship'] == 2)
	{
		if($PLANET['light_hunter']>=700 && $PLANET['heavy_hunter']>=550)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_ship` = achievements_ship+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 750; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_ship'],$LNG['achievements_ship_lvl2'],$LNG['achievements_ship_reward_lvl2']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($PLANET['light_hunter']>=700)
			$ship_done1 = '<img src="styles/achievements/done.png" >';
		else
			$ship_done1 = '<img src="styles/achievements/miss.png" >';
		
		if($PLANET['heavy_hunter']>=550)
			$ship_done2 = '<img src="styles/achievements/done.png" >';
		else
			$ship_done2 = '<img src="styles/achievements/miss.png" >';	
		
		$this->tplObj->assign_vars(array(
			'ship_lvl'			=> $LNG['achievements_ship_lvl2'],
			'ship_req_1'		=> $LNG['achievements_ship_lvl2_require_1'],
			'ship_req_2'		=> $LNG['achievements_ship_lvl2_require_2'],
			'ship_reward'		=> $LNG['achievements_ship_reward_lvl2'],
			'ship_done1'    	=> $ship_done1,
			'ship_done2'    	=> $ship_done2,
			

		));
	}
	
	//Ship Level 3
	if($USER['achievements_ship'] == 3)
	{
		if($PLANET['crusher']>=450 && $PLANET['battle_ship']>=450)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_ship` = achievements_ship+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1000; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_ship'],$LNG['achievements_ship_lvl3'],$LNG['achievements_ship_reward_lvl3']), true, array('game.php?page=achievement', 2));
			exit;
		}
		if ($PLANET['crusher']>=450)
			$ship_done1 = '<img src="styles/achievements/done.png" >';
		else
			$ship_done1 = '<img src="styles/achievements/miss.png" >';
		
		if($PLANET['battle_ship']>=450)
			$ship_done2 = '<img src="styles/achievements/done.png" >';
		else
			$ship_done2 = '<img src="styles/achievements/miss.png" >';	
		
		$this->tplObj->assign_vars(array(
			'ship_lvl'			=> $LNG['achievements_ship_lvl3'],
			'ship_req_1'		=> $LNG['achievements_ship_lvl3_require_1'],
			'ship_req_2'		=> $LNG['achievements_ship_lvl3_require_2'],
			'ship_reward'		=> $LNG['achievements_ship_reward_lvl3'],
			'ship_done1'    	=> $ship_done1,
			'ship_done2'    	=> $ship_done2,

		));
	}
	
	//Ship Level 4
	if($USER['achievements_ship'] == 4)
	{
		if($PLANET['destructor']>=300 && $PLANET['battleship']>=300)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_ship` = achievements_ship+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 2500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_ship'],$LNG['achievements_ship_lvl4'],$LNG['achievements_ship_reward_lvl4']), true, array('game.php?page=achievement', 2));
			exit;
		}
		if ($PLANET['destructor']>=300)
			$ship_done1 = '<img src="styles/achievements/done.png" >';
		else
			$ship_done1 = '<img src="styles/achievements/miss.png" >';
		
		if($PLANET['battleship']>=300)
			$ship_done2 = '<img src="styles/achievements/done.png" >';
		else
			$ship_done2 = '<img src="styles/achievements/miss.png" >';
		
		$this->tplObj->assign_vars(array(
			'ship_lvl'			=> $LNG['achievements_ship_lvl4'],
			'ship_req_1'		=> $LNG['achievements_ship_lvl4_require_1'],
			'ship_req_2'		=> $LNG['achievements_ship_lvl4_require_2'],
			'ship_reward'		=> $LNG['achievements_ship_reward_lvl4'],
			'ship_done1'    	=> $ship_done1,
			'ship_done2'    	=> $ship_done2,
			

		));
	}
	
	//Ship Level 5	
	if($USER['achievements_ship'] == 5)
	{
		if($PLANET['dearth_star']>=50 && $PLANET['star_crasher']>=50)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_ship` = achievements_ship+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 3500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_ship'],$LNG['achievements_ship_lvl5'],$LNG['achievements_ship_reward_lvl5']), true, array('game.php?page=achievement', 2));
			exit;
		}
		if ($PLANET['dearth_star']>=50)
			$ship_done1 = '<img scr="styles/achievements/done.png" >';
		else
			$ship_done1 = '<img src="styles/achievements/miss.png" >';
		
		if($PLANET['star_crasher']>=50)
			$ship_done2 = '<img src="styles/achievements/done.png" >';
		else
			$ship_done2 = '<img src="styles/achievements/miss.png" >';
		
		$this->tplObj->assign_vars(array(
			'ship_lvl'			=> $LNG['achievements_ship_lvl5'],
			'ship_req_1'		=> sprintf($LNG['achievements_ship_lvl5_require_1'],50),
			'ship_req_2'		=> sprintf($LNG['achievements_ship_lvl5_require_2'],50),
			'ship_reward'		=> $LNG['achievements_ship_reward_lvl5'],
			'ship_done1'    	=> $ship_done1,
			'ship_done2'    	=> $ship_done2,

		));
	}
	
	//Ship Finish
	if($USER['achievements_ship'] > 5)
	{
		
		$ship_done1 = '<img src="styles/achievements/done.png" >';
		$ship_done2 = '<img src="styles/achievements/done.png" >';
		
		$this->tplObj->assign_vars(array(
			'ship_lvl'		=> ' <span style="color:yellow">'.$LNG['achievements_ship_done'].'</span>',
			'ship_req_1'		=> sprintf($LNG['achievements_ship_lvl5_require_1'],50),
			'ship_req_2'		=> sprintf($LNG['achievements_ship_lvl5_require_2'],50),
			'ship_reward'		=> $LNG['achievements_ship_reward_lvl5'],
			'ship_done1'    	=> $ship_done1,
			'ship_done2'    	=> $ship_done2,
			

		));
	}

	//Defence Achievement
	
	//Defence Level 1
	if($USER['achievements_defence'] == 1)
	{
		if($PLANET['misil_launcher']>=5000)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_defence` = achievements_defence+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_ship'],$LNG['achievements_defence_lvl1'],$LNG['achievements_defence_reward_lvl1']), true, array('game.php?page=achievement', 2));
			exit;
		}
		else
			$defence_done1 = '<img src="styles/achievements/miss.png" >';
		
		$this->tplObj->assign_vars(array(
			'defence_lvl'		=> $LNG['achievements_defence_lvl1'],
			'defence_req_1'		=> $LNG['achievements_defence_lvl1_require_1'],
			'defence_reward'	=> $LNG['achievements_defence_reward_lvl1'],
			'defence_done1'    	=> $defence_done1,
			

		));
	}
	
	//Defence Level 2
	if($USER['achievements_defence'] == 2)
	{
		if($PLANET['gauss_canyon']>=1800)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_defence` = achievements_defence+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 750; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_ship'],$LNG['achievements_defence_lvl2'],$LNG['achievements_defence_reward_lvl2']), true, array('game.php?page=achievement', 2));
			exit;
		}
		else
			$defence_done1 = '<img src="styles/achievements/miss.png" >';
		
		$this->tplObj->assign_vars(array(
			'defence_lvl'		=> $LNG['achievements_defence_lvl2'],
			'defence_req_1'		=> $LNG['achievements_defence_lvl2_require_1'],
			'defence_reward'	=> $LNG['achievements_defence_reward_lvl2'],
			'defence_done1'    	=> $defence_done1,
			

		));
	}
	
	//Defence Level 3
	if($USER['achievements_defence'] == 3)
	{
		if($PLANET['buster_canyon']>=900)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_defence` = achievements_defence+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1000; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_ship'],$LNG['achievements_defence_lvl3'],$LNG['achievements_defence_reward_lvl3']), true, array('game.php?page=achievement', 2));
			exit;
		}
		else
			$defence_done1 = '<img src="styles/achievements/miss.png" >';
		
		$this->tplObj->assign_vars(array(
			'defence_lvl'		=> $LNG['achievements_defence_lvl3'],
			'defence_req_1'		=> $LNG['achievements_defence_lvl3_require_1'],
			'defence_reward'	=> $LNG['achievements_defence_reward_lvl3'],
			'defence_done1'    	=> $defence_done1,
			

		));
	}
	
	//Defence Level 4
	if($USER['achievements_defence'] == 4)
	{
		if($PLANET['graviton_canyon']>=450)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_defence` = achievements_defence+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 2500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_ship'],$LNG['achievements_defence_lvl4'],$LNG['achievements_defence_reward_lvl4']), true, array('game.php?page=achievement', 2));
			exit;
		}
		else
			$defence_done1 = '<img src="styles/achievements/miss.png" >';
		
		$this->tplObj->assign_vars(array(
			'defence_lvl'		=> $LNG['achievements_defence_lvl4'],
			'defence_req_1'		=> $LNG['achievements_defence_lvl4_require_1'],
			'defence_reward'	=> $LNG['achievements_defence_reward_lvl4'],
			'defence_done1'    	=> $defence_done1,
			

		));
	}
	
	//Defence Level 5
	if($USER['achievements_defence'] == 5)
	{
		if($PLANET['planet_protector'] == 1)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_defence` = achievements_defence+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 4000; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_ship'],$LNG['achievements_defence_lvl5'],$LNG['achievements_defence_reward_lvl5']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		else
			$defence_done1 = '<img src="styles/achievements/miss.png" >';
		
		$this->tplObj->assign_vars(array(
			'defence_lvl'		=> $LNG['achievements_defence_lvl5'],
			'defence_req_1'		=> $LNG['achievements_defence_lvl5_require_1'],
			'defence_reward'	=> $LNG['achievements_defence_reward_lvl5'],
			'defence_done1'    	=> $defence_done1,
			

		));
	}
	
	//Defence Finish
	if($USER['achievements_defence'] > 5)
	{		
		$defence_done1 = '<img src="styles/achievements/done.png" >';
		
		$this->tplObj->assign_vars(array(
			'defence_lvl'		=> ' <span style="color:yellow">'.$LNG['achievements_defence_done'].'</span>',
			'defence_req_1'		=> $LNG['achievements_defence_lvl5_require_1'],
			'defence_reward'	=> $LNG['achievements_defence_reward_lvl5'],
			'defence_done1'    	=> $defence_done1,
			

		));
	}

	
	//Storage Achievement
	
	//Storage Level 1
	if($USER['achievements_storage'] == 1)
	{
		if($PLANET['metal_store'] >= 5 && $PLANET['crystal_store'] >= 5 && $PLANET['deuterium_store'] >=5)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_storage` = achievements_storage+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 250; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_storage'],$LNG['achievements_storage_lvl1'],$LNG['achievements_storage_reward_lvl1']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($PLANET['metal_store'] >=5)
			$storage_done1 = '<img src="styles/achievements/done.png" >';
		else
			$storage_done1 = '<img src="styles/achievements/miss.png" >';
		if($PLANET['crystal_store'] >=5)
			$storage_done2 = '<img src="styles/achievements/done.png" >';
		else
			$storage_done2 = '<img src="styles/achievements/miss.png" >';	
		if($PLANET['deuterium_store'] >=5)
			$storage_done3 = '<img src="styles/achievements/done.png" >';
		else
			$storage_done3 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'storage_lvl'			=> $LNG['achievements_storage_lvl1'],
			'storage_req_1'		=> sprintf($LNG['achievements_storage_require_1'],5),
			'storage_req_2'		=> sprintf($LNG['achievements_storage_require_2'],5),
			'storage_req_3'		=> sprintf($LNG['achievements_storage_require_3'],5),
			'storage_reward'		=> $LNG['achievements_storage_reward_lvl1'],
			'storage_done1'    	=> $storage_done1,
			'storage_done2'    	=> $storage_done2,
			'storage_done3'    	=> $storage_done3,
		));
	}

	//Storage Level 2
	if($USER['achievements_storage'] == 2)
	{
		if($PLANET['metal_store'] >= 10 && $PLANET['crystal_store'] >= 10 && $PLANET['deuterium_store'] >= 10)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_storage` = achievements_storage+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_storage'],$LNG['achievements_storage_lvl2'],$LNG['achievements_storage_reward_lvl2']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($PLANET['metal_store'] >=10)
			$storage_done1 = '<img src="styles/achievements/done.png" >';
		else
			$storage_done1 = '<img src="styles/achievements/miss.png" >';
		if($PLANET['crystal_store'] >=10)
			$storage_done2 = '<img src="styles/achievements/done.png" >';
		else
			$storage_done2 = '<img src="styles/achievements/miss.png" >';	
		if($PLANET['deuterium_store'] >=10)
			$storage_done3 = '<img src="styles/achievements/done.png" >';
		else
			$storage_done3 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'storage_lvl'			=> $LNG['achievements_storage_lvl2'],
			'storage_req_1'		=> sprintf($LNG['achievements_storage_require_1'],10),
			'storage_req_2'		=> sprintf($LNG['achievements_storage_require_2'],10),
			'storage_req_3'		=> sprintf($LNG['achievements_storage_require_3'],10),
			'storage_reward'		=> $LNG['achievements_storage_reward_lvl2'],
			'storage_done1'    	=> $storage_done1,
			'storage_done2'    	=> $storage_done2,
			'storage_done3'    	=> $storage_done3,
		));
	}	

	//Storage Level 3
	if($USER['achievements_storage'] == 3)
	{
		if($PLANET['metal_store'] >= 14 && $PLANET['crystal_store'] >= 14 && $PLANET['deuterium_store'] >= 13)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_storage` = achievements_storage+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 750; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_storage'],$LNG['achievements_storage_lvl3'],$LNG['achievements_storage_reward_lvl3']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($PLANET['metal_store'] >=14)
			$storage_done1 = '<img src="styles/achievements/done.png" >';
		else
			$storage_done1 = '<img src="styles/achievements/miss.png" >';
		if($PLANET['crystal_store'] >=14)
			$storage_done2 = '<img src="styles/achievements/done.png" >';
		else
			$storage_done2 = '<img src="styles/achievements/miss.png" >';	
		if($PLANET['deuterium_store'] >=13)
			$storage_done3 = '<img src="styles/achievements/done.png" >';
		else
			$storage_done3 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'storage_lvl'			=> $LNG['achievements_storage_lvl3'],
			'storage_req_1'		=> sprintf($LNG['achievements_storage_require_1'],14),
			'storage_req_2'		=> sprintf($LNG['achievements_storage_require_2'],14),
			'storage_req_3'		=> sprintf($LNG['achievements_storage_require_3'],13),
			'storage_reward'	=> $LNG['achievements_storage_reward_lvl3'],
			'storage_done1'    	=> $storage_done1,
			'storage_done2'    	=> $storage_done2,
			'storage_done3'    	=> $storage_done3,
		));
		
	}	
		
	//Storage Finish
	if($USER['achievements_storage'] > 3)
	{
		$storage_done1 = '<img src="styles/achievements/done.png" >';
		$storage_done2 = '<img src="styles/achievements/done.png" >';
		$storage_done3 = '<img src="styles/achievements/done.png" >';
		$this->tplObj->assign_vars(array(
			'storage_lvl'			=> ' <span style="color:yellow">'.$LNG['achievements_storage_done'].'</span>',
			'storage_req_1'		=> sprintf($LNG['achievements_storage_require_1'],14),
			'storage_req_2'		=> sprintf($LNG['achievements_storage_require_2'],14),
			'storage_req_3'		=> sprintf($LNG['achievements_storage_require_3'],13),
			'storage_reward'	=> $LNG['achievements_storage_reward_lvl3'],
			'storage_done1'    	=> $storage_done1,
			'storage_done2'    	=> $storage_done2,
			'storage_done3'    	=> $storage_done3,
		));
	}

	//Moon Achievement
	
	//Moon Level 1
	if($USER['achievements_moon'] == 1)
	{
		if($PLANET['mondbasis'] >= 3)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_moon` = achievements_moon+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_moon'],$LNG['achievements_moon_lvl1'],$LNG['achievements_moon_reward_lvl1']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($PLANET['mondbasis'] >=3)
			$moon_done1 = '<img src="styles/achievements/done.png" >';
		else
			$moon_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'moon_lvl'			=> $LNG['achievements_moon_lvl1'],
			'moon_req_1'		=> sprintf($LNG['achievements_moon_require_1'],5),
			'moon_reward'		=> $LNG['achievements_moon_reward_lvl1'],
			'moon_done1'    	=> $moon_done1,
			'moon_done2'    	=> false,
			'moon_req_2'		=> false,
			'moon_req_3'		=> false,
			'moon_done3'    	=> false,
		));
	}

	//Moon Level 2
	if($USER['achievements_moon'] == 2)
	{
		if($PLANET['mondbasis'] >= 7 && $PLANET['phalanx'] >= 3)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_moon` = achievements_moon+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 750; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_moon'],$LNG['achievements_moon_lvl2'],$LNG['achievements_moon_reward_lvl2']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if($PLANET['mondbasis'] >= 7)
			$moon_done1 = '<img src="styles/achievements/done.png" >';
		else
			$moon_done1 = '<img src="styles/achievements/miss.png" >';
		if($PLANET['phalanx'] >= 3)
			$moon_done2 = '<img src="styles/achievements/done.png" >';
		else
			$moon_done2 = '<img src="styles/achievements/miss.png" >';	
			
		$this->tplObj->assign_vars(array(
			'moon_lvl'			=> $LNG['achievements_moon_lvl2'],
			'moon_req_1'		=> sprintf($LNG['achievements_moon_require_1'],7),
			'moon_req_2'		=> sprintf($LNG['achievements_moon_require_2'],3),
			'moon_reward'		=> $LNG['achievements_moon_reward_lvl2'],
			'moon_done1'    	=> $moon_done1,
			'moon_done2'    	=> $moon_done2,
			'moon_req_3'		=> false,
			'moon_done3'    	=> false,
		));
	}	

	//Moon Level 3
	if($USER['achievements_moon'] == 3)
	{
		if($PLANET['mondbasis'] >= 10 && $PLANET['phalanx'] >= 5 && $PLANET['sprungtor'] >= 3)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_moon` = achievements_moon+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1000; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_moon'],$LNG['achievements_moon_lvl3'],$LNG['achievements_moon_reward_lvl3']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($PLANET['mondbasis'] >=10)
			$moon_done1 = '<img src="styles/achievements/done.png" >';
		else
			$moon_done1 = '<img src="styles/achievements/miss.png" >';
		if($PLANET['phalanx'] >=5)
			$moon_done2 = '<img src="styles/achievements/done.png" >';
		else
			$moon_done2 = '<img src="styles/achievements/miss.png" >';	
		if($PLANET['sprungtor'] >=3)
			$moon_done3 = '<img src="styles/achievements/done.png" >';
		else
			$moon_done3 = '<img src="styles/achievements/miss.png" >';	
			
		$this->tplObj->assign_vars(array(
			'moon_lvl'			=> $LNG['achievements_moon_lvl3'],
			'moon_req_1'		=> sprintf($LNG['achievements_moon_require_1'],10),
			'moon_req_2'		=> sprintf($LNG['achievements_moon_require_2'],5),
			'moon_req_3'		=> sprintf($LNG['achievements_moon_require_3'],3),
			'moon_reward'		=> $LNG['achievements_moon_reward_lvl3'],
			'moon_done1'    	=> $moon_done1,
			'moon_done2'    	=> $moon_done2,
			'moon_done3'    	=> $moon_done3,
		));
		
	}	
		
	//Moon Finish
	if($USER['achievements_moon'] > 3)
	{
		$moon_done1 = '<img src="styles/achievements/done.png" >';
		$moon_done2 = '<img src="styles/achievements/done.png" >';
		$moon_done3 = '<img src="styles/achievements/done.png" >';
		$this->tplObj->assign_vars(array(
			'moon_lvl'			=> ' <span style="color:yellow">'.$LNG['achievements_moon_done'].'</span>',
			'moon_req_1'		=> sprintf($LNG['achievements_moon_require_1'],11),
			'moon_req_2'		=> sprintf($LNG['achievements_moon_require_2'],5),
			'moon_req_3'		=> sprintf($LNG['achievements_moon_require_3'],3),
			'moon_reward'		=> $LNG['achievements_moon_reward_lvl3'],
			'moon_done1'    	=> $moon_done1,
			'moon_done2'    	=> $moon_done2,
			'moon_done3'    	=> $moon_done3,
		));
	}
	
	//Colony Achievement

	//Colony Level 1
	if($USER['achievements_colony'] == 1)
	{
		$query = $GLOBALS['DATABASE']->uniquequery("SELECT count(*) AS planet_count FROM ".PLANETS." WHERE `id_owner` = '". $USER['id'] ."';");
		$planet_count = $query['planet_count'];
		if($planet_count >=2)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_colony` = achievements_colony+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_colony'],$LNG['achievements_colony_lvl1'],$LNG['achievements_colony_reward']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		else
			$colony_done1 = '<img src="styles/achievements/miss.png" >';
		
		$this->tplObj->assign_vars(array(
			'colony_lvl'			=> $LNG['achievements_colony_lvl1'],
			'colony_req_1'		=> $LNG['achievements_colony_lvl1_require_1'],
			'colony_reward'		=> $LNG['achievements_colony_reward'],
			'colony_done1'    	=> $colony_done1,
			

		));
	}

	//Colony Level 2
	if($USER['achievements_colony'] == 2)
	{
		$query = $GLOBALS['DATABASE']->uniquequery("SELECT count(*) AS planet_count FROM ".PLANETS." WHERE `id_owner` = '". $USER['id'] ."';");
		$planet_count = $query['planet_count'];
		if($planet_count >=4)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_colony` = achievements_colony+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_colony'],$LNG['achievements_colony_lvl2'],$LNG['achievements_colony_reward']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		else
			$colony_done1 = '<img src="styles/achievements/miss.png" >';
		
		$this->tplObj->assign_vars(array(
			'colony_lvl'			=> $LNG['achievements_colony_lvl2'],
			'colony_req_1'		=> $LNG['achievements_colony_lvl2_require_1'],
			'colony_reward'		=> $LNG['achievements_colony_reward'],
			'colony_done1'    	=> $colony_done1,
			

		));
	}
	
	//Colony Level 3
	if($USER['achievements_colony'] == 3)
	{
		$query = $GLOBALS['DATABASE']->uniquequery("SELECT count(*) AS planet_count FROM ".PLANETS." WHERE `id_owner` = '". $USER['id'] ."';");
		$planet_count = $query['planet_count'];
		if($planet_count >=6)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_colony` = achievements_colony+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_colony'],$LNG['achievements_colony_lvl3'],$LNG['achievements_colony_reward']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		else
			$colony_done1 = '<img src="styles/achievements/miss.png" >';
		
		$this->tplObj->assign_vars(array(
			'colony_lvl'			=> $LNG['achievements_colony_lvl3'],
			'colony_req_1'		=> $LNG['achievements_colony_lvl3_require_1'],
			'colony_reward'		=> $LNG['achievements_colony_reward'],
			'colony_done1'    	=> $colony_done1,
			

		));
	}

	//Colony Level 4
	if($USER['achievements_colony'] == 4)
	{
		$query = $GLOBALS['DATABASE']->uniquequery("SELECT count(*) AS planet_count FROM ".PLANETS." WHERE `id_owner` = '". $USER['id'] ."';");
		$planet_count = $query['planet_count'];
		if($planet_count >=8)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_colony` = achievements_colony+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_colony'],$LNG['achievements_colony_lvl4'],$LNG['achievements_colony_reward']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		else
			$colony_done1 = '<img src="styles/achievements/miss.png" >';
		
		$this->tplObj->assign_vars(array(
			'colony_lvl'			=> $LNG['achievements_colony_lvl4'],
			'colony_req_1'		=> $LNG['achievements_colony_lvl4_require_1'],
			'colony_reward'		=> $LNG['achievements_colony_reward'],
			'colony_done1'    	=> $colony_done1,
		
		
		));
	}	

	//Colony Level 5
	if($USER['achievements_colony'] == 5)
	{
		$query = $GLOBALS['DATABASE']->uniquequery("SELECT count(*) AS planet_count FROM ".PLANETS." WHERE `id_owner` = '". $USER['id'] ."';");
		$planet_count = $query['planet_count'];
		if($planet_count >=10)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_colony` = achievements_colony+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1000; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_colony'],$LNG['achievements_colony_lvl5'],$LNG['achievements_colony_reward']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		else
			$colony_done1 = '<img src="styles/achievements/miss.png" >';
		
		$this->tplObj->assign_vars(array(
			'colony_lvl'			=> $LNG['achievements_colony_lvl5'],
			'colony_req_1'		=> $LNG['achievements_colony_lvl5_require_1'],
			'colony_reward'		=> $LNG['achievements_colony_reward_lvl5'],
			'colony_done1'    	=> $colony_done1,
			

		));
	}	
	
	//Colony Finish
	if($USER['achievements_colony'] > 5)
	{
		
		$colony_done1 = '<img src="styles/achievements/done.png" >';
		
		$this->tplObj->assign_vars(array(
			'colony_lvl'		=> ' <span style="color:yellow">'.$LNG['achievements_colony_done'].'</span>',
			'colony_req_1'		=> $LNG['achievements_colony_lvl5_require_1'],
			'colony_reward'		=> $LNG['achievements_colony_reward_lvl5'],
			'colony_done1'    	=> $colony_done1,
			

		));
	}

	//Friendship Achievement	
	
	//Friendship Level 1
	if($USER['achievements_friend'] == 1)
	{
		if($USER['ally_id'] > 0)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_friend` = achievements_friend+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 250; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_friend'],$LNG['achievements_friend_lvl1'],$LNG['achievements_friend_reward_lvl1']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['ally_id'] > 0)
			$friend_done1 = '<img src="styles/achievements/done.png" >';
		else
			$friend_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'friend_lvl'		=> $LNG['achievements_friend_lvl1'],
			'friend_req_1'		=> $LNG['achievements_friend_lvl1_require_1'],
			'friend_reward'	=> $LNG['achievements_friend_reward_lvl1'],
			'friend_done1'    	=> $friend_done1,
		));
	}

	//Friendship Level 2
	if($USER['achievements_friend'] == 2)
	{
		$query = $GLOBALS['DATABASE']->uniquequery("SELECT * FROM ".BUDDY." WHERE `sender` = '". $USER['id'] ."';");
		if($query>1)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_friend` = achievements_friend+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_friend'],$LNG['achievements_friend_lvl2'],$LNG['achievements_friend_reward_lvl2']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($query>1)
			$friend_done1 = '<img src="styles/achievements/done.png" >';
		else
			$friend_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'friend_lvl'		=> $LNG['achievements_friend_lvl2'],
			'friend_req_1'		=> $LNG['achievements_friend_lvl2_require_1'],
			'friend_reward'	=> $LNG['achievements_friend_reward_lvl2'],
			'friend_done1'    	=> $friend_done1,
		));
	}	

	//Friendfriend Finish
	if($USER['achievements_friend'] > 2)
	{
		
		$friend_done1 = '<img src="styles/achievements/done.png" >';
		
		$this->tplObj->assign_vars(array(
			'friend_lvl'		=> ' <span style="color:yellow">'.$LNG['achievements_friend_done'].'</span>',
			'friend_req_1'		=> $LNG['achievements_friend_lvl2_require_1'],
			'friend_reward'		=> $LNG['achievements_friend_reward_lvl2'],
			'friend_done1'    	=> $friend_done1,
			

		));
	}

	//Statpoints Achievement	
	
	//Statpoints Level 1
	if($USER['achievements_statpoints'] == 1)
	{
		if($USER['total_points'] >= 250000)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_statpoints` = achievements_statpoints+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 750; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_statpoints'],$LNG['achievements_statpoints_lvl1'],$LNG['achievements_statpoints_reward_lvl1']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if($USER['total_points'] >= 250000)
			$statpoints_done1 = '<img src="styles/achievements/done.png" >';
		else
			$statpoints_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'statpoints_lvl'		=> $LNG['achievements_statpoints_lvl1'],
			'statpoints_req_1'		=> $LNG['achievements_statpoints_lvl1_require_1'],
			'statpoints_reward'	=> $LNG['achievements_statpoints_reward_lvl1'],
			'statpoints_done1'    	=> $statpoints_done1,
		));
	}	
	
	//Statpoints Level 2
	if($USER['achievements_statpoints'] == 2)
	{
		if($USER['total_points'] >= 500000)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_statpoints` = achievements_statpoints+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1000; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_statpoints'],$LNG['achievements_statpoints_lvl2'],$LNG['achievements_statpoints_reward_lvl2']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if($USER['total_points'] >= 500000)
			$statpoints_done1 = '<img src="styles/achievements/done.png" >';
		else
			$statpoints_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'statpoints_lvl'		=> $LNG['achievements_statpoints_lvl2'],
			'statpoints_req_1'		=> $LNG['achievements_statpoints_lvl2_require_1'],
			'statpoints_reward'	=> $LNG['achievements_statpoints_reward_lvl2'],
			'statpoints_done1'    	=> $statpoints_done1,
		));
	}	
	
	//Statpoints Level 3
	if($USER['achievements_statpoints'] == 3)
	{
		if($USER['total_points'] >= 750000)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_statpoints` = achievements_statpoints+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1250; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_statpoints'],$LNG['achievements_statpoints_lvl3'],$LNG['achievements_statpoints_reward_lvl3']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if($USER['total_points'] >= 750000)
			$statpoints_done1 = '<img src="styles/achievements/done.png" >';
		else
			$statpoints_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'statpoints_lvl'		=> $LNG['achievements_statpoints_lvl3'],
			'statpoints_req_1'		=> $LNG['achievements_statpoints_lvl3_require_1'],
			'statpoints_reward'	=> $LNG['achievements_statpoints_reward_lvl3'],
			'statpoints_done1'    	=> $statpoints_done1,
		));
	}	
	
	//Statpoints Level 4
	if($USER['achievements_statpoints'] == 4)
	{
		if($USER['total_points'] >= 1000000)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_statpoints` = achievements_statpoints+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_statpoints'],$LNG['achievements_statpoints_lvl4'],$LNG['achievements_statpoints_reward_lvl4']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if($USER['total_points'] >= 1000000)
			$statpoints_done1 = '<img src="styles/achievements/done.png" >';
		else
			$statpoints_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'statpoints_lvl'		=> $LNG['achievements_statpoints_lvl4'],
			'statpoints_req_1'		=> $LNG['achievements_statpoints_lvl4_require_1'],
			'statpoints_reward'	=> $LNG['achievements_statpoints_reward_lvl4'],
			'statpoints_done1'    	=> $statpoints_done1,
		));
	}	
	
	//Statpoints Level 5
	if($USER['achievements_statpoints'] == 5)
	{
		if($USER['total_points'] >= 2000000)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_statpoints` = achievements_statpoints+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1750; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_statpoints'],$LNG['achievements_statpoints_lvl5'],$LNG['achievements_statpoints_reward_lvl5']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if($USER['total_points'] >= 2000000)
			$statpoints_done1 = '<img src="styles/achievements/done.png" >';
		else
			$statpoints_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'statpoints_lvl'		=> $LNG['achievements_statpoints_lvl5'],
			'statpoints_req_1'		=> $LNG['achievements_statpoints_lvl5_require_1'],
			'statpoints_reward'	=> $LNG['achievements_statpoints_reward_lvl5'],
			'statpoints_done1'    	=> $statpoints_done1,
		));
	}	
	
	//Statpoints Level 6
	if($USER['achievements_statpoints'] == 6)
	{
		if($USER['total_points'] >= 3500000)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_statpoints` = achievements_statpoints+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 2250; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_statpoints'],$LNG['achievements_statpoints_lvl6'],$LNG['achievements_statpoints_reward_lvl6']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if($USER['total_points'] >= 3500000)
			$statpoints_done1 = '<img src="styles/achievements/done.png" >';
		else
			$statpoints_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'statpoints_lvl'		=> $LNG['achievements_statpoints_lvl6'],
			'statpoints_req_1'		=> $LNG['achievements_statpoints_lvl6_require_1'],
			'statpoints_reward'	=> $LNG['achievements_statpoints_reward_lvl6'],
			'statpoints_done1'    	=> $statpoints_done1,
		));
	}	

	//Statpoints Finish
	if($USER['achievements_statpoints'] > 6)
	{
		
		$statpoints_done1 = '<img src="styles/achievements/done.png" >';
		
		$this->tplObj->assign_vars(array(
			'statpoints_lvl'		=> ' <span style="color:yellow">'.$LNG['achievements_statpoints_done'].'</span>',
			'statpoints_req_1'		=> $LNG['achievements_statpoints_lvl6_require_1'],
			'statpoints_reward'		=> $LNG['achievements_statpoints_reward_lvl6'],
			'statpoints_done1'    	=> $statpoints_done1,
			

		));
	}

	//Destruction Achievement	
	
	//Destruction Level 1
	if($USER['achievements_destroy'] == 1)
	{
		if($USER['desunits'] >= 500000)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_destroy` = achievements_destroy+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_destroy'],$LNG['achievements_destroy_lvl1'],$LNG['achievements_destroy_reward_lvl1']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['desunits'] >= 500000)
			$destroy_done1 = '<img src="styles/achievements/done.png" >';
		else
			$destroy_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'destroy_lvl'		=> $LNG['achievements_destroy_lvl1'],
			'destroy_req_1'		=> $LNG['achievements_destroy_lvl1_require_1'],
			'destroy_reward'	=> $LNG['achievements_destroy_reward_lvl1'],
			'destroy_done1'    	=> $destroy_done1,
		));
	}	
	
	//Destruction Level 2
	if($USER['achievements_destroy'] == 2)
	{
		if($USER['desunits'] >= 1000000)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_destroy` = achievements_destroy+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 750; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_destroy'],$LNG['achievements_destroy_lvl2'],$LNG['achievements_destroy_reward_lvl2']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['desunits'] >= 1000000)
			$destroy_done1 = '<img src="styles/achievements/done.png" >';
		else
			$destroy_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'destroy_lvl'		=> $LNG['achievements_destroy_lvl2'],
			'destroy_req_1'		=> $LNG['achievements_destroy_lvl2_require_1'],
			'destroy_reward'	=> $LNG['achievements_destroy_reward_lvl2'],
			'destroy_done1'    	=> $destroy_done1,
		));
	}	
	
	//Destruction Level 3
	if($USER['achievements_destroy'] == 3)
	{
		if($USER['desunits'] >= 20000000)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_destroy` = achievements_destroy+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1000; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_destroy'],$LNG['achievements_destroy_lvl3'],$LNG['achievements_destroy_reward_lvl3']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['desunits'] >= 20000000)
			$destroy_done1 = '<img src="styles/achievements/done.png" >';
		else
			$destroy_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'destroy_lvl'		=> $LNG['achievements_destroy_lvl3'],
			'destroy_req_1'		=> $LNG['achievements_destroy_lvl3_require_1'],
			'destroy_reward'	=> $LNG['achievements_destroy_reward_lvl3'],
			'destroy_done1'    	=> $destroy_done1,
		));
	}	
	
	//Destruction Level 4
	if($USER['achievements_destroy'] == 4)
	{
		if($USER['desunits'] >= 100000000)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_destroy` = achievements_destroy+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1250; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_destroy'],$LNG['achievements_destroy_lvl4'],$LNG['achievements_destroy_reward_lvl4']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['desunits'] >= 100000000)
			$destroy_done1 = '<img src="styles/achievements/done.png" >';
		else
			$destroy_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'destroy_lvl'		=> $LNG['achievements_destroy_lvl4'],
			'destroy_req_1'		=> $LNG['achievements_destroy_lvl4_require_1'],
			'destroy_reward'	=> $LNG['achievements_destroy_reward_lvl4'],
			'destroy_done1'    	=> $destroy_done1,
		));
	}	
	
	//Destruction Level 5
	if($USER['achievements_destroy'] == 5)
	{
		if($USER['desunits'] >= 400000000)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_destroy` = achievements_destroy+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_destroy'],$LNG['achievements_destroy_lvl5'],$LNG['achievements_destroy_reward_lvl5']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['desunits'] >= 400000000)
			$destroy_done1 = '<img src="styles/achievements/done.png" >';
		else
			$destroy_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'destroy_lvl'		=> $LNG['achievements_destroy_lvl5'],
			'destroy_req_1'		=> $LNG['achievements_destroy_lvl5_require_1'],
			'destroy_reward'	=> $LNG['achievements_destroy_reward_lvl5'],
			'destroy_done1'    	=> $destroy_done1,
		));
	}	
	
	//Destruction Level 6
	if($USER['achievements_destroy'] == 6)
	{
		if($USER['desunits'] >= 1000000000)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_destroy` = achievements_destroy+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1750; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_destroy'],$LNG['achievements_destroy_lvl4'],$LNG['achievements_destroy_reward_lvl4']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['desunits'] >= 1000000000)
			$destroy_done1 = '<img src="styles/achievements/done.png" >';
		else
			$destroy_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'destroy_lvl'		=> $LNG['achievements_destroy_lvl6'],
			'destroy_req_1'		=> $LNG['achievements_destroy_lvl6_require_1'],
			'destroy_reward'	=> $LNG['achievements_destroy_reward_lvl6'],
			'destroy_done1'    	=> $destroy_done1,
		));
	}		

	//Destruction Finish
	if($USER['achievements_destroy'] > 6)
	{
		
		$destroy_done1 = '<img src="styles/achievements/done.png" >';
		
		$this->tplObj->assign_vars(array(
			'destroy_lvl'		=> ' <span style="color:yellow">'.$LNG['achievements_destroy_done'].'</span>',
			'destroy_req_1'		=> $LNG['achievements_destroy_lvl6_require_1'],
			'destroy_reward'		=> $LNG['achievements_destroy_reward_lvl6'],
			'destroy_done1'    	=> $destroy_done1,
			

		));
	}

	//Debris Achievement	
	
	//Debris Level 1
	if($USER['achievements_debris'] == 1)
	{
		if($USER['kbmetal'] >= 10000000 && $USER['kbcrystal'] >= 10000000)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_debris` = achievements_debris+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_debris'],$LNG['achievements_debris_lvl1'],$LNG['achievements_debris_reward_lvl1']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['kbmetal'] >=10000000)
			$debris_done1 = '<img src="styles/achievements/done.png" >';
		else
			$debris_done1 = '<img src="styles/achievements/miss.png" >';
		if($USER['kbcrystal'] >=10000000)
			$debris_done2 = '<img src="styles/achievements/done.png" >';
		else
			$debris_done2 = '<img src="styles/achievements/miss.png" >';	
			
		$this->tplObj->assign_vars(array(
			'debris_m'			=> pretty_number($USER['kbmetal']),
			'debris_c'			=> pretty_number($USER['kbcrystal']),
			'debris_lvl'		=> $LNG['achievements_debris_lvl1'],
			'debris_req_1'		=> sprintf($LNG['achievements_debris_require_1'],10000000),
			'debris_req_2'		=> sprintf($LNG['achievements_debris_require_2'],10000000),
			'debris_reward'		=> $LNG['achievements_debris_reward_lvl1'],
			'debris_done1'    	=> $debris_done1,
			'debris_done2'    	=> $debris_done2,
		));
	}		
	
	//Debris Level 2
	if($USER['achievements_debris'] == 2)
	{
		if($USER['kbmetal'] >= 30000000 && $USER['kbcrystal'] >= 30000000)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_debris` = achievements_debris+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 750; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_debris'],$LNG['achievements_debris_lvl2'],$LNG['achievements_debris_reward_lvl2']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['kbmetal'] >=30000000)
			$debris_done1 = '<img src="styles/achievements/done.png" >';
		else
			$debris_done1 = '<img src="styles/achievements/miss.png" >';
		if($USER['kbcrystal'] >=30000000)
			$debris_done2 = '<img src="styles/achievements/done.png" >';
		else
			$debris_done2 = '<img src="styles/achievements/miss.png" >';	
			
		$this->tplObj->assign_vars(array(
			'debris_m'			=> pretty_number($USER['kbmetal']),
			'debris_c'			=> pretty_number($USER['kbcrystal']),
			'debris_lvl'			=> $LNG['achievements_debris_lvl2'],
			'debris_req_1'		=> sprintf($LNG['achievements_debris_require_1'],30000000),
			'debris_req_2'		=> sprintf($LNG['achievements_debris_require_2'],30000000),
			'debris_reward'		=> $LNG['achievements_debris_reward_lvl2'],
			'debris_done1'    	=> $debris_done1,
			'debris_done2'    	=> $debris_done2,
		));
	}
	
	//Debris Level 3
	if($USER['achievements_debris'] == 3)
	{
		if($USER['kbmetal'] >= 75000000 && $USER['kbcrystal'] >= 75000000)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_debris` = achievements_debris+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1000; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_debris'],$LNG['achievements_debris_lvl3'],$LNG['achievements_debris_reward_lvl3']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['kbmetal'] >=75000000)
			$debris_done1 = '<img src="styles/achievements/done.png" >';
		else
			$debris_done1 = '<img src="styles/achievements/miss.png" >';
		if($USER['kbcrystal'] >=75000000)
			$debris_done2 = '<img src="styles/achievements/done.png" >';
		else
			$debris_done2 = '<img src="styles/achievements/miss.png" >';	
			
		$this->tplObj->assign_vars(array(
			'debris_m'			=> pretty_number($USER['kbmetal']),
			'debris_c'			=> pretty_number($USER['kbcrystal']),
			'debris_lvl'			=> $LNG['achievements_debris_lvl3'],
			'debris_req_1'		=> sprintf($LNG['achievements_debris_require_1'],75000000),
			'debris_req_2'		=> sprintf($LNG['achievements_debris_require_2'],75000000),
			'debris_reward'		=> $LNG['achievements_debris_reward_lvl3'],
			'debris_done1'    	=> $debris_done1,
			'debris_done2'    	=> $debris_done2,
		));
	}		
	
	//Debris Level 4
	if($USER['achievements_debris'] == 4)
	{
		if($USER['kbmetal'] >= 150000000 && $USER['kbcrystal'] >= 150000000)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_debris` = achievements_debris+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1250; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_debris'],$LNG['achievements_debris_lvl4'],$LNG['achievements_debris_reward_lvl4']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['kbmetal'] >=150000000)
			$debris_done1 = '<img src="styles/achievements/done.png" >';
		else
			$debris_done1 = '<img src="styles/achievements/miss.png" >';
		if($USER['kbcrystal'] >=150000000)
			$debris_done2 = '<img src="styles/achievements/done.png" >';
		else
			$debris_done2 = '<img src="styles/achievements/miss.png" >';	
			
		$this->tplObj->assign_vars(array(
			'debris_m'			=> pretty_number($USER['kbmetal']),
			'debris_c'			=> pretty_number($USER['kbcrystal']),
			'debris_lvl'			=> $LNG['achievements_debris_lvl4'],
			'debris_req_1'		=> sprintf($LNG['achievements_debris_require_1'],150000000),
			'debris_req_2'		=> sprintf($LNG['achievements_debris_require_2'],150000000),
			'debris_reward'		=> $LNG['achievements_debris_reward_lvl4'],
			'debris_done1'    	=> $debris_done1,
			'debris_done2'    	=> $debris_done2,
		));
	}
	
	//Debris Level 5
	if($USER['achievements_debris'] == 5)
	{
		if($USER['kbmetal'] >= 200000000 && $USER['kbcrystal'] >= 200000000)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_debris` = achievements_debris+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_debris'],$LNG['achievements_debris_lvl5'],$LNG['achievements_debris_reward_lvl5']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['kbmetal'] >=200000000)
			$debris_done1 = '<img src="styles/achievements/done.png" >';
		else
			$debris_done1 = '<img src="styles/achievements/miss.png" >';
		if($USER['kbcrystal'] >=200000000)
			$debris_done2 = '<img src="styles/achievements/done.png" >';
		else
			$debris_done2 = '<img src="styles/achievements/miss.png" >';	
			
		$this->tplObj->assign_vars(array(
			'debris_m'			=> pretty_number($USER['kbmetal']),
			'debris_c'			=> pretty_number($USER['kbcrystal']),
			'debris_lvl'			=> $LNG['achievements_debris_lvl5'],
			'debris_req_1'		=> sprintf($LNG['achievements_debris_require_1'],200000000),
			'debris_req_2'		=> sprintf($LNG['achievements_debris_require_2'],200000000),
			'debris_reward'		=> $LNG['achievements_debris_reward_lvl5'],
			'debris_done1'    	=> $debris_done1,
			'debris_done2'    	=> $debris_done2,
		));
	}		
		
	//Debris Finish
	if($USER['achievements_debris'] > 5)
	{
		$debris_done1 = '<img src="styles/achievements/done.png" >';
		$debris_done2 = '<img src="styles/achievements/done.png" >';
		$this->tplObj->assign_vars(array(
			'debris_m'			=> pretty_number($USER['kbmetal']),
			'debris_c'			=> pretty_number($USER['kbcrystal']),
			'debris_lvl'			=> ' <span style="color:yellow">'.$LNG['achievements_debris_done'].'</span>',
			'debris_req_1'		=> sprintf($LNG['achievements_debris_require_1'],200000000),
			'debris_req_2'		=> sprintf($LNG['achievements_debris_require_2'],200000000),
			'debris_reward'		=> $LNG['achievements_debris_reward_lvl5'],
			'debris_done1'    	=> $debris_done1,
			'debris_done2'    	=> $debris_done2,
		));
	}
	
	//Offis 1 (spio)
	if($USER['achievements_offi'] == 1)
	{
		if($USER['rpg_espion'] >= 1)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_offi` = achievements_offi+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `spy_tech` = spy_tech+2 WHERE `id` = ".$USER['id'].";");
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_offi'],$LNG['achievements_offi_1'],$LNG['achievements_offi_reward_1']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['rpg_espion'] >=1)
			$offi_done1 = '<img src="styles/achievements/done.png" >';
		else
			$offi_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'offi_lvl'			=> $LNG['achievements_offi_1'],
			'offi_req_1'		=> sprintf($LNG['achievements_offi1_require_1'],1),
			'offi_reward'		=> $LNG['achievements_offi_reward_1'],
			'offi_done1'    	=> $offi_done1,
		));
	}
	
	//Offis 2 (Bunker)
	if($USER['achievements_offi'] == 2)
	{
		if($USER['rpg_bunker'] >= 1)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_offi` = achievements_offi+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET `metal_store` = metal_store+2 WHERE `id` = ".$PLANET['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET `crystal_store` = crystal_store+2 WHERE `id` = ".$PLANET['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET `deuterium_store` = deuterium_store+2 WHERE `id` = ".$PLANET['id'].";");
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_offi'],$LNG['achievements_offi_2'],$LNG['achievements_offi_reward_2']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['rpg_bunker'] >=1)
			$offi_done1 = '<img src="styles/achievements/done.png" >';
		else
			$offi_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'offi_lvl'			=> $LNG['achievements_offi_2'],
			'offi_req_1'		=> sprintf($LNG['achievements_offi2_require_1'],1),
			'offi_reward'		=> $LNG['achievements_offi_reward_2'],
			'offi_done1'    	=> $offi_done1,
		));
	}
	
	//Offis 3 (Spio)
	if($USER['achievements_offi'] == 3)
	{
		if($USER['rpg_espion'] >= 2)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_offi` = achievements_offi+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `spy_tech` = spy_tech+3 WHERE `id` = ".$USER['id'].";");
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_offi'],$LNG['achievements_offi_3'],$LNG['achievements_offi_reward_3']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['rpg_espion'] >=3)
			$offi_done1 = '<img src="styles/achievements/done.png" >';
		else
			$offi_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'offi_lvl'			=> $LNG['achievements_offi_3'],
			'offi_req_1'		=> sprintf($LNG['achievements_offi3_require_1'],2),
			'offi_reward'		=> $LNG['achievements_offi_reward_3'],
			'offi_done1'    	=> $offi_done1,
		));
	}
	//Offis 4 (Zerstörer)
	if($USER['achievements_offi'] == 4)
	{
		if($USER['rpg_destructeur'] >= 1)
		{
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_offi` = achievements_offi+1 WHERE `id` = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `Erfolge` = Erfolge+1 WHERE `id` = ".$USER['id'].";");
			    $USER[$resource[921]] += 1500; //reward dm
			$this->printMessage(sprintf($LNG['achievements_success'],$LNG['achievements_typ_offi'],$LNG['achievements_offi_4'],$LNG['achievements_offi_reward_4']), true, array('game.php?page=achievement', 2));
			exit;	
		}
		if ($USER['rpg_destructeur'] >=1)
			$offi_done1 = '<img src="styles/achievements/done.png" >';
		else
			$offi_done1 = '<img src="styles/achievements/miss.png" >';
			
		$this->tplObj->assign_vars(array(
			'offi_lvl'			=> $LNG['achievements_offi_4'],
			'offi_req_1'		=> sprintf($LNG['achievements_offi4_require_1'],1),
			'offi_reward'		=> $LNG['achievements_offi_reward_4'],
			'offi_done1'    	=> $offi_done1,
		));
	}

	//Offis Finish
	if($USER['achievements_offi'] > 4)
	{
		$offi_done1 = '<img src="styles/achievements/done.png" >';
		$this->tplObj->assign_vars(array(
			'offi_lvl'			=> ' <span style="color:yellow">'.$LNG['achievements_offi_done'].'</span>',
			'offi_req_1'		=> sprintf($LNG['achievements_offi4_require_1'],1),
			'offi_reward'		=> $LNG['achievements_offi_reward_4'],
			'offi_done1'    	=> $offi_done1,
		));
	}
	$this->tplObj->assign_vars(array(
			'mine'			=> $USER['achievements_mine'],
			'research'    	=> $USER['achievements_research'],
			'battle'		=> $USER['achievements_battle'],
			'ship'			=> $USER['achievements_ship'],
			'defence'		=> $USER['achievements_defence'],
			'storage'		=> $USER['achievements_storage'],
			'moon'			=> $USER['achievements_moon'],
			'colony'		=> $USER['achievements_colony'],
			'friend'		=> $USER['achievements_friend'],
			'stats'			=> $USER['achievements_statpoints'],
			'destroyer'		=> $USER['achievements_destroy'],
			'debris'		=> $USER['achievements_debris'],
			'offi'			=> $USER['achievements_offi'],
			
		));
	$this->display('achievements_body.tpl');
 }
}
?>
