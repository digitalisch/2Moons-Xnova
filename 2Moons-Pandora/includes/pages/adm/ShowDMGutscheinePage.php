<?php

/**
 *  Gutscheine-Mod
 *  Copyright (C) 2011  DokDobler	
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
 * @author DokDobler <dokdobler@hotmail.com>
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.0
 */

if (!allowedTo(str_replace(array(dirname(__FILE__), '\\', '/', '.php'), '', __FILE__))) exit;

function ShowDMGutscheine()
{

	global $LNG, $USER, $LANG, $db, $DMGut;
	
	$id = HTTP::_GP('id', 0);
	if($_GET['action'] == 'delete' && !empty($id))
		$GLOBALS['DATABASE']->query("DELETE FROM ".DMGut." WHERE `id` = '".$id."';");
	if($_GET['action'] == 'disable' && !empty($id))
		$GLOBALS['DATABASE']->query("UPDATE ".DMGut." SET `useable` = '0' WHERE `id` = '".$id."';");
	if($_GET['action'] == 'up' && !empty($id))
		{
			$checkdb = $GLOBALS['DATABASE']->query("SELECT `useable` FROM ".DMGut." WHERE `id` = '".$id."';");
			$check = $GLOBALS['DATABASE']->fetch_array($checkdb);
			$GLOBALS['DATABASE']->query("UPDATE ".DMGut." SET `useable` = '".$GLOBALS['DATABASE']->sql_escape($check['useable'] + 1)."' WHERE `id` = '".$id."';");
		}
	if($_GET['action'] == 'down' && !empty($id))
		{
			$checkdb = $GLOBALS['DATABASE']->query("SELECT `useable` FROM ".DMGut." WHERE `id` = '".$id."';");
			$check = $GLOBALS['DATABASE']->fetch_array($checkdb);
			if($check['useable'] > "-1")
			$GLOBALS['DATABASE']->query("UPDATE ".DMGut." SET `useable` = '".$GLOBALS['DATABASE']->sql_escape($check['useable'] - 1)."' WHERE `id` = '".$id."';");
		}		
	
	if (!empty($_POST))
	{
		$name 				= HTTP::_GP('gutscheine_name', '', true);
		$gmetal			= HTTP::_GP('gutscheine_gutschrift_metal', '', true);
		$gcrystal			= HTTP::_GP('gutscheine_gutschrift_crystal', '', true);
		$gdeuterium			= HTTP::_GP('gutscheine_gutschrift_deuterium', '', true);
		$gdarkmatter		= HTTP::_GP('gutscheine_gutschrift_dm', '', true);
		$guseable			= HTTP::_GP('gutscheine_useable', '', true);
		$gkey				= HTTP::_GP('gutscheine_key', '', true);
		$gexpday			= HTTP::_GP('gutscheine_expire', '', true);
		$createday 			= time();
		$createdaydb		= date("d.m.Y",$createday);
		$StrExpire			= time() + (60*60*24*$gexpday);
		$Expire 			= date("d.m.Y", $StrExpire);
		if($name == "" || $gmetal == "" || $gcrystal == "" ||$gdeuterium == "" || $gdarkmatter == "" || $guseable == "" || $gkey == "" || $gexpday == "")
		{
		$template = new template();
		$template->message($LNG['mod_gutschein_admin_error1'],'?page=DMGutscheine');
		}
		$speicher 			= $GLOBALS['DATABASE']->query("INSERT INTO ".DMGut." (`name`, `metal`, `crystal`, `deuterium`, `matter`, `useable`, `key`, `expireday`, `createday`, `expiredayrl`) VALUES ( '".$GLOBALS['DATABASE']->sql_escape($name)."', '".$GLOBALS['DATABASE']->sql_escape($gmetal)."', '".$GLOBALS['DATABASE']->sql_escape($gcrystal)."', '".$GLOBALS['DATABASE']->sql_escape($gdeuterium)."', '".$GLOBALS['DATABASE']->sql_escape($gdarkmatter)."', '".$GLOBALS['DATABASE']->sql_escape($guseable)."', '".$GLOBALS['DATABASE']->sql_escape($gkey)."', '".$GLOBALS['DATABASE']->sql_escape($gexpday)."', '".$GLOBALS['DATABASE']->sql_escape($createdaydb)."', '".$GLOBALS['DATABASE']->sql_escape($Expire)."')");
	}
	
	$query = $GLOBALS['DATABASE']->query("SELECT * FROM ".DMGut."");
	while($Gutschein = $GLOBALS['DATABASE']->fetch_array($query))
	{
		$Gutscheine[] = array(
		'id' 		=> $Gutschein['id'],
		'name'		=> $Gutschein['name'],
		'metal'=> $Gutschein['metal'],
		'crystal'	=> $Gutschein['crystal'],
		'deuterium' => $Gutschein['deuterium'],
		'dm'		=> $Gutschein['matter'],
		'useable'	=> $Gutschein['useable'],
		'used'		=> $Gutschein['usedby'],
		'key'		=> $Gutschein['key'],
		'expireday' => $Gutschein['expireday'],
		'createday' => $Gutschein['createday'],
		'expiredayrl'=>$Gutschein['expiredayrl']
		);
	}


	
	$template	= new template();

	$template->assign_vars(array(
		'Gutscheine'								=> $Gutscheine,
		'mod_gutscheine_headline'					=> $LNG['mod_gutscheine_headline'],
		'mod_gutschein_exists_id'					=> $LNG['mod_gutschein_exists_id'],
		'mod_gutschein_exists_name'					=> $LNG['mod_gutschein_exists_name'],
		'mod_gutschein_exists_metal'				=> $LNG['mod_gutschein_exists_metal'],
		'mod_gutschein_exists_crystal'				=> $LNG['mod_gutschein_exists_crystal'],
		'mod_gutschein_exists_deuterium'			=> $LNG['mod_gutschein_exists_deuterium'],
		'mod_gutschein_exists_dm'					=> $LNG['mod_gutschein_exists_dm'],
		'mod_gutschein_exists_key'					=> $LNG['mod_gutschein_exists_key'],
		'mod_gutschein_exists_used'					=> $LNG['mod_gutschein_exists_used'],
		'mod_gutschein_exists_useable'				=> $LNG['mod_gutschein_exists_useable'],
		'mod_gutschein_exists_createday'			=> $LNG['mod_gutschein_exists_createday'],
		'mod_gutschein_exists_expireday'			=> $LNG['mod_gutschein_exists_expireday'],
		'mod_gutschein_exists_delete'				=> $LNG['mod_gutschein_exists_delete'],
		'mod_gutschein_exists_disable'				=> $LNG['mod_gutschein_exists_disable'],
		'mod_gutscheine_erstellen'					=> $LNG['mod_gutscheine_erstellen'],
		'mod_gutscheine_name'						=> $LNG['mod_gutscheine_name'],
		'mod_gutscheine_gutschrift_metal'		=> $LNG['mod_gutscheine_gutschrift_metal'],
		'mod_gutscheine_gutschrift_crystal'		=> $LNG['mod_gutscheine_gutschrift_crystal'],
		'mod_gutscheine_gutschrift_deuterium'		=> $LNG['mod_gutscheine_gutschrift_deuterium'],
		'mod_gutscheine_gutschrift_DM'				=> $LNG['mod_gutscheine_gutschrift_DM'],
		'mod_gutscheine_useable'					=> $LNG['mod_gutscheine_useable'],
		'mod_gutscheine_key'						=> $LNG['mod_gutscheine_key'],
		'mod_gutscheine_expire'						=> $LNG['mod_gutscheine_expire'],
		'mod_save_gutscheine'						=> $LNG['mod_save_gutscheine'],
	));
	
	$template->show('DM-GutscheineBody.tpl');
}

?>