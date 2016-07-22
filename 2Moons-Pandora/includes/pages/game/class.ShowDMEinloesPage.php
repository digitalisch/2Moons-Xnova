<?php

class ShowDMEinloesPage extends AbstractPage {

	public static $requireModule = 0;

	function __construct() {
		parent::__construct();
	}

	function show() {
	global $LNG, $USER, $DMGut, $PLANET, $db, $LNG, $resource;
	
	$gkey					= HTTP::_GP('gutscheine_key', '');
	$query = $GLOBALS['DATABASE']->query("SELECT * FROM ".DMGut." WHERE `key` = '".$GLOBALS['DATABASE']->sql_escape($gkey)."'");
	$Gutschein = $GLOBALS['DATABASE']->fetch_array($query);
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
		
						$metallbonus	= $totalProduction[901]*48;
						$kristallbonus	= $totalProduction[902]*48;
						$deutbonus		= $totalProduction[903]*48;
						
						$metal_gut		= $Gutschein['metal'] + $metallbonus;
						$crystal_gut	= $Gutschein['crystal'] + $kristallbonus;
						$deut_gut		= $Gutschein['deuterium'] + $deutbonus;
						
						
	if (!empty($_POST))
	{
	$gkey					= HTTP::_GP('gutscheine_key', '');
	if($gkey == NULL)
	{
	$query = $GLOBALS['DATABASE']->query("SELECT * FROM ".DMGut." WHERE `key` = '".$GLOBALS['DATABASE']->sql_escape($gkey)."'");
	$Gutschein = $GLOBALS['DATABASE']->fetch_array($query);
	$errorcode = 1;
		$mod_gutscheine_success = 0;
	$template = new template();
	
	$this->tplObj->assign_vars(array(
	'mod_gutscheine_success'					=> $mod_gutscheine_success,
	'mod_gutschein_name'						=> $Gutschein['name'],
	'mod_gutscheine_user_headline'				=> $LNG['mod_gutscheine_user_headline'],
	'mod_gutscheine_user_Successhead'			=> $LNG['mod_gutscheine_user_Successhead'], //Gratulation!
	'mod_gutscheine_recieve1'					=> $LNG['mod_gutscheine_recieve1'],  //Du hast durch diesen Gutschein
	'mod_gutscheine_recieve2'					=> $LNG['mod_gutscheine_recieve2'], // erhalten
	'mod_gutscheine_metal'						=> $metal_gut,
	'mod_gutscheine_crystal'					=> $crystal_gut,
	'mod_gutscheine_deuterium'					=> $deut_gut,
	'mod_gutscheine_matter'						=> $Gutschein['matter'],
	'mod_metal'									=> $LNG['metal'],
	'mod_crystal'								=> $LNG['crystal'],
	'mod_deuterium'								=> $LNG['Deuterium'],
	'mod_darkmatter'							=> $LNG['Darkmatter'],
	'mod_gutscheine_errorcode'					=> $errorcode,
	'mod_gutscheine_user_headline'				=> $LNG['mod_gutscheine_user_headline'],
	'mod_gutscheine_user_back'					=> $LNG['mod_gutscheine_user_back'],
			'mod_gutscheine_user_Fail'					=> $LNG['mod_gutscheine_user_Fail'],  //Fehler
			'mod_gutscheine_user_Fail1'					=> $LNG['mod_gutscheine_user_Fail1'], //Du hast keinen Gutscheincode eingetragen!
			'mod_gutscheine_user_Fail2'					=> $LNG['mod_gutscheine_user_Fail2'], //Du hast diesen Gutscheincode bereits verwendet!
			'mod_gutscheine_user_Fail3'					=> $LNG['mod_gutscheine_user_Fail3'], //Dieser Gutscheincode ist abgelaufen!
			'mod_gutscheine_user_Fail5'					=> $LNG['mod_gutscheine_user_Fail5'],
	));
	$this->display('page.gutschein.error.tpl');
	exit();
	}
	
	$query = $GLOBALS['DATABASE']->query("SELECT * FROM ".DMGut." WHERE `key` = '".$GLOBALS['DATABASE']->sql_escape($gkey)."'");
	$Gutschein = $GLOBALS['DATABASE']->fetch_array($query);
	if($Gutschein['id'] == "" && $Gutschein['name'] == "")
	{
			$errorcode = 4;
		$mod_gutscheine_success = 0;
			$template = new template();
			
			$this->tplObj->assign_vars(array(
	'mod_gutscheine_success'					=> $mod_gutscheine_success,
	'mod_gutschein_name'						=> $Gutschein['name'],
	'mod_gutscheine_user_headline'				=> $LNG['mod_gutscheine_user_headline'],
	'mod_gutscheine_user_Successhead'			=> $LNG['mod_gutscheine_user_Successhead'], //Gratulation!
	'mod_gutscheine_recieve1'					=> $LNG['mod_gutscheine_recieve1'],  //Du hast durch diesen Gutschein
	'mod_gutscheine_recieve2'					=> $LNG['mod_gutscheine_recieve2'], // erhalten
	'mod_gutscheine_metal'						=> $metal_gut,
	'mod_gutscheine_crystal'					=> $crystal_gut,
	'mod_gutscheine_deuterium'					=> $deut_gut,
	'mod_gutscheine_matter'						=> $Gutschein['matter'],
	'mod_metal'									=> $LNG['metal'],
	'mod_crystal'								=> $LNG['crystal'],
	'mod_deuterium'								=> $LNG['Deuterium'],
	'mod_darkmatter'							=> $LNG['Darkmatter'],
			'mod_gutscheine_errorcode'					=> $errorcode,
			'mod_gutscheine_user_back'					=> $LNG['mod_gutscheine_user_back'],
			'mod_gutscheine_user_headline'				=> $LNG['mod_gutscheine_user_headline'],
			'mod_gutscheine_user_Fail'					=> $LNG['mod_gutscheine_user_Fail'],  //Fehler
			'mod_gutscheine_user_Fail1'					=> $LNG['mod_gutscheine_user_Fail1'], //Du hast keinen Gutscheincode eingetragen!
			'mod_gutscheine_user_Fail2'					=> $LNG['mod_gutscheine_user_Fail2'], //Du hast diesen Gutscheincode bereits verwendet!
			'mod_gutscheine_user_Fail3'					=> $LNG['mod_gutscheine_user_Fail3'],
			'mod_gutscheine_user_Fail4'					=> $LNG['mod_gutscheine_user_Fail4'],			//Dieser Gutscheincode ist abgelaufen!
			));
			$this->display('page.gutschein.error.tpl');
	}
	
	if($Gutschein['useable'] >= '1' || $Gutschein['useable'] == '-1')
	{
	
		$Useable = $Gutschein['useable'];
		if($Useable >= 1)
		$Useable = $Useable - 1;
		$LastUser = "".$Gutschein['usedby'].",'".$USER['id']."'";
		$DeineID = "'".$USER['id']."'";
		if(preg_match($DeineID,$Gutschein['usedby']))
		{
			$errorcode = 2;
		$mod_gutscheine_success = 0;
			$template = new template();
			
			$this->tplObj->assign_vars(array(
	'mod_gutscheine_success'					=> $mod_gutscheine_success,
	'mod_gutschein_name'						=> $Gutschein['name'],
	'mod_gutscheine_user_headline'				=> $LNG['mod_gutscheine_user_headline'],
	'mod_gutscheine_user_Successhead'			=> $LNG['mod_gutscheine_user_Successhead'], //Gratulation!
	'mod_gutscheine_recieve1'					=> $LNG['mod_gutscheine_recieve1'],  //Du hast durch diesen Gutschein
	'mod_gutscheine_recieve2'					=> $LNG['mod_gutscheine_recieve2'], // erhalten
	'mod_gutscheine_metal'						=> $metal_gut,
	'mod_gutscheine_crystal'					=> $crystal_gut,
	'mod_gutscheine_deuterium'					=> $deut_gut,
	'mod_gutscheine_matter'						=> $Gutschein['matter'],
	'mod_metal'									=> $LNG['metal'],
	'mod_crystal'								=> $LNG['crystal'],
	'mod_deuterium'								=> $LNG['Deuterium'],
	'mod_darkmatter'							=> $LNG['Darkmatter'],
			'mod_gutscheine_errorcode'					=> $errorcode,
			'mod_gutscheine_user_back'					=> $LNG['mod_gutscheine_user_back'],
			'mod_gutscheine_user_headline'				=> $LNG['mod_gutscheine_user_headline'],
			'mod_gutscheine_user_Fail'					=> $LNG['mod_gutscheine_user_Fail'],  //Fehler
			'mod_gutscheine_user_Fail1'					=> $LNG['mod_gutscheine_user_Fail1'], //Du hast keinen Gutscheincode eingetragen!
			'mod_gutscheine_user_Fail2'					=> $LNG['mod_gutscheine_user_Fail2'], //Du hast diesen Gutscheincode bereits verwendet!
			'mod_gutscheine_user_Fail3'					=> $LNG['mod_gutscheine_user_Fail3'], //Dieser Gutscheincode ist abgelaufen!
			'mod_gutscheine_user_Fail5'					=> $LNG['mod_gutscheine_user_Fail5'],
			));
			$this->display('page.gutschein.error.tpl');
			exit();
		}
		$StrExpire = strtotime($Gutschein['createday']);
		$dateExpire = $StrExpire + (60*60*24*$Gutschein['expireday']);
		$test = time();
		if($dateExpire < $test)
		{
			$errorcode = 5;
		$mod_gutscheine_success = 0;
			$template = new template();
			
			$this->tplObj->assign_vars(array(
	'mod_gutscheine_success'					=> $mod_gutscheine_success,
	'mod_gutschein_name'						=> $Gutschein['name'],
	'mod_gutscheine_user_headline'				=> $LNG['mod_gutscheine_user_headline'],
	'mod_gutscheine_user_Successhead'			=> $LNG['mod_gutscheine_user_Successhead'], //Gratulation!
	'mod_gutscheine_recieve1'					=> $LNG['mod_gutscheine_recieve1'],  //Du hast durch diesen Gutschein
	'mod_gutscheine_recieve2'					=> $LNG['mod_gutscheine_recieve2'], // erhalten
	'mod_gutscheine_metal'						=> $metal_gut,
	'mod_gutscheine_crystal'					=> $crystal_gut,
	'mod_gutscheine_deuterium'					=> $deut_gut,
	'mod_gutscheine_matter'						=> $Gutschein['matter'],
	'mod_metal'									=> $LNG['metal'],
	'mod_crystal'								=> $LNG['crystal'],
	'mod_deuterium'								=> $LNG['Deuterium'],
	'mod_darkmatter'							=> $LNG['Darkmatter'],
			'mod_gutscheine_errorcode'					=> $errorcode,
			'mod_gutscheine_user_back'					=> $LNG['mod_gutscheine_user_back'],
			'mod_gutscheine_user_headline'				=> $LNG['mod_gutscheine_user_headline'],
			'mod_gutscheine_user_Fail'					=> $LNG['mod_gutscheine_user_Fail'],  //Fehler
			'mod_gutscheine_user_Fail1'					=> $LNG['mod_gutscheine_user_Fail1'], //Du hast keinen Gutscheincode eingetragen!
			'mod_gutscheine_user_Fail2'					=> $LNG['mod_gutscheine_user_Fail2'], //Du hast diesen Gutscheincode bereits verwendet!
			'mod_gutscheine_user_Fail3'					=> $LNG['mod_gutscheine_user_Fail3'], //Dieser Gutscheincode ist abgelaufen!
			'mod_gutscheine_user_Fail5'					=> $LNG['mod_gutscheine_user_Fail5'],
			));
			$this->display('page.gutschein.error.tpl');
			exit();
		}
		
						
		// Code by Robbyn - Thanks for this =)
		$GLOBALS['DATABASE']->query("
        UPDATE 
            ".DMGut." as dm, 
            ".PLANETS." as p,
            ".USERS." as u
        SET
            dm.`useable` = '".$GLOBALS['DATABASE']->sql_escape($Useable)."',
            dm.`usedby` = '".$GLOBALS['DATABASE']->sql_escape($LastUser)."',
            p.`metal` = p.`metal` + ".$metal_gut.",
            p.`crystal` = p.`crystal` + ".$crystal_gut.",
            p.`deuterium` = p.`deuterium` + ".$deut_gut.",
            u.`darkmatter` = u.`darkmatter` + ".$Gutschein['matter']."
        WHERE
            dm.`key` = '".$GLOBALS['DATABASE']->sql_escape($gkey)."' AND
            p.`id` = '".$USER['id']."' AND
            u.`id` = '".$USER['id']."';");
			$PLANET['metal'] += $metal_gut;
			$PLANET['crystal'] += $crystal_gut;
			$PLANET['deuterium'] += $deut_gut;
			$USER['darkmatter'] += $Gutschein['matter'];
			
		// Code by Robbyn - Thanks for this =)
		$mod_gutscheine_success = 1;
		$errorcode = 0;
	$template = new template();
	
	$this->tplObj->assign_vars(array(
	'mod_gutscheine_success'					=> $mod_gutscheine_success,
	'mod_gutschein_name'						=> $Gutschein['name'],
	'mod_gutscheine_user_headline'				=> $LNG['mod_gutscheine_user_headline'],
	'mod_gutscheine_user_Successhead'			=> $LNG['mod_gutscheine_user_Successhead'], //Gratulation!
	'mod_gutscheine_user_back'					=> $LNG['mod_gutscheine_user_back'],
	'mod_gutscheine_recieve1'					=> $LNG['mod_gutscheine_recieve1'],  //Du hast durch diesen Gutschein
	'mod_gutscheine_recieve2'					=> $LNG['mod_gutscheine_recieve2'], // erhalten
	'mod_gutscheine_metal'						=> $metal_gut,
	'mod_gutscheine_crystal'					=> $crystal_gut,
	'mod_gutscheine_deuterium'					=> $deut_gut,
	'mod_gutscheine_matter'						=> $Gutschein['matter'],
	'mod_metal'									=> $LNG['metal'],
	'mod_crystal'								=> $LNG['crystal'],
	'mod_deuterium'								=> $LNG['Deuterium'],
	'mod_darkmatter'							=> $LNG['Darkmatter'],
			'mod_gutscheine_user_Fail'					=> $LNG['mod_gutscheine_user_Fail'],  //Fehler
			'mod_gutscheine_user_Fail1'					=> $LNG['mod_gutscheine_user_Fail1'], //Du hast keinen Gutscheincode eingetragen!
			'mod_gutscheine_user_Fail2'					=> $LNG['mod_gutscheine_user_Fail2'], //Du hast diesen Gutscheincode bereits verwendet!
			'mod_gutscheine_user_Fail3'					=> $LNG['mod_gutscheine_user_Fail3'], //Dieser Gutscheincode ist abgelaufen!
			'mod_gutscheine_user_Fail5'					=> $LNG['mod_gutscheine_user_Fail5'],
			'mod_gutscheine_errorcode'					=> $errorcode,
	));
	$this->display('page.gutschein.error.tpl');
	exit();
	}
	$errorcode = 3;
	$template = new template();
	
	$this->tplObj->assign_vars(array(
	'mod_gutscheine_errorcode'					=> $errorcode,
	'mod_gutscheine_user_headline'				=> $LNG['mod_gutscheine_user_headline'],
	'mod_gutscheine_user_back'					=> $LNG['mod_gutscheine_user_back'],
			'mod_gutscheine_user_Fail'					=> $LNG['mod_gutscheine_user_Fail'],  //Fehler
			'mod_gutscheine_user_Fail1'					=> $LNG['mod_gutscheine_user_Fail1'], //Du hast keinen Gutscheincode eingetragen!
			'mod_gutscheine_user_Fail2'					=> $LNG['mod_gutscheine_user_Fail2'], //Du hast diesen Gutscheincode bereits verwendet!
			'mod_gutscheine_user_Fail3'					=> $LNG['mod_gutscheine_user_Fail3'], //Dieser Gutscheincode ist abgelaufen!
			'mod_gutscheine_user_Fail5'					=> $LNG['mod_gutscheine_user_Fail5'],
	));
	$this->display('page.gutschein.error.tpl');
	exit();
	
	}
	$template	= new template();

	$this->tplObj->assign_vars(array(
		'mod_gutscheine_user_headline'				=> $LNG['mod_gutscheine_user_headline'],
		'mod_gutscheine_user_key'					=> $LNG['mod_gutscheine_user_key'],
		'mod_user_refund'							=> $LNG['mod_user_refund'],
		'mod_gutscheine_info_user'					=> $LNG['mod_gutscheine_info_user'],
	));
	
	$this->display('page.gutschein.default.tpl');
}
}

?>