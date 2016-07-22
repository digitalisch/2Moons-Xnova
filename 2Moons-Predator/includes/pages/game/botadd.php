<?php

/**
 *  2Moons
 *  Copyright (C) 2011  Slaver
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
 * @author Slaver <slaver7@gmail.com>
 * @copyright 2009 Lucky <lucky@xgproyect.net> (XGProyecto)
 * @copyright 2011 Slaver <slaver7@gmail.com> (Fork/2Moons)
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.4 (2011-07-10)
 * @info $Id: index.php 1913 2011-07-10 18:13:22Z slaver7 $
 * @link http://code.google.com/p/2moons/
 */
 

define('INSIDE', true );
define('LOGIN', true );

define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
require(ROOT_PATH . 'includes/common.php');
$Names		= file(ROOT_PATH.'scripts/Names.txt');
$NamesCount	= count($Names);
$Num		= 0;
while($Num < 1000)
{
	$Num++;
	do{
		$Rand		= mt_rand(0, $NamesCount);
		$UserName 	= trim($Names[$Rand]);
	} while($db->countquery("SELECT (SELECT COUNT(*) FROM ".USERS." WHERE `universe` = '".$UNI."' AND `username` = '".$db->sql_escape($UserName)."') + (SELECT COUNT(*) FROM ".USERS_VALID." WHERE `universe` = '".$UNI."' AND `username` = '".$db->sql_escape($UserName)."')") != 0);

	$MailDomain	= explode('@', $_SERVER["SERVER_ADMIN"]);
	$UserPass 	= microtime(true);
	$UserPass2 	= $UserPass;
	$UserMail 	= strtolower($UserName).'@'.$MailDomain[1];
	$UserMail2	= $UserMail;
	$UserLang 	= $CONF['lang'];
	$Rand		= mt_rand(0, $NamesCount);
	$UserPlanet = trim($Names[$Rand]);
		
	$SQL = "INSERT INTO ".USERS." SET ";
	$SQL .= "`username` = '".$db->sql_escape($UserName). "', ";
	$SQL .= "`email` = '".$db->sql_escape($UserMail)."', ";
	$SQL .= "`email_2` = '".$db->sql_escape($UserMail)."', ";
	$SQL .= "`lang` = '".$db->sql_escape($UserLang)."', ";
	$SQL .= "`authlevel` = '0', ";
	$SQL .= "`ip_at_reg` = '".$_SERVER['REMOTE_ADDR']."', ";
	$SQL .= "`user_lastip` = '".$_SERVER['REMOTE_ADDR']."', ";
	$SQL .= "`id_planet` = '0', ";
	$SQL .= "`universe` = '".$UNI."',";
	$SQL .= "`onlinetime` = '".TIMESTAMP."', ";
	$SQL .= "`register_time` = '".TIMESTAMP. "', ";
	$SQL .= "`password` = '".md5($UserPass)."', ";
	$SQL .= "`dpath` = '".DEFAULT_THEME."', ";
	$SQL .= "`uctime`= '0';";
	$db->query($SQL);

	$NewUser = $db->GetInsertID();
	
	$db->query("UPDATE ".CONFIG." SET `users_amount` = users_amount + '1' WHERE `uni` = '".$UNI."';");
	
	$LastSettedGalaxyPos = $CONF['LastSettedGalaxyPos'];
	$LastSettedSystemPos = $CONF['LastSettedSystemPos'];
	$LastSettedPlanetPos = $CONF['LastSettedPlanetPos'];
	require_once(ROOT_PATH.'includes/functions/CreateOnePlanetRecord.php');	
	$PlanetID = false;

	while ($PlanetID === false) {
		$Planet = mt_rand(4, 12);
		if ($LastSettedPlanetPos < 3) {
			$LastSettedPlanetPos += 1;
		} else {
			if ($LastSettedSystemPos > $CONF['max_system']) {
				$LastSettedGalaxyPos += 1;
				$LastSettedSystemPos = 1;
				$LastSettedPlanetPos = 1;
			} else {
				$LastSettedSystemPos += 1;
				$LastSettedPlanetPos = 1;
			}
			
			if($LastSettedGalaxyPos  > $CONF['max_system'])
				$LastSettedGalaxyPos	= 1;
		}
		
		$PlanetID = CreateOnePlanetRecord($LastSettedGalaxyPos, $LastSettedSystemPos, $Planet, $UNI, $NewUser, $UserPlanet, true);
	}
								
	$SQL = "UPDATE ".USERS." SET ";
	$SQL .= "`id_planet` = '".$PlanetID."', ";
	$SQL .= "`universe` = '".$UNI."', ";
	$SQL .= "`galaxy` = '".$LastSettedGalaxyPos."', ";
	$SQL .= "`system` = '".$LastSettedSystemPos."', ";
	$SQL .= "`planet` = '".$Planet."' ";
	$SQL .= "WHERE ";
	$SQL .= "`id` = '".$NewUser."' ";
	$SQL .= "LIMIT 1;";
	$db->query($SQL);
								
	$SQL = "INSERT INTO `2moons`.`uni1_bots` (`id`, `player`, `last_time`, `every_time`, `last_planet`, `type`) VALUES (NULL, ".$NewUser.", 0, 2, ".$PlanetID.", 0);";
	$db->query($SQL);

	echo "OK - ".$Num." - ".$NewUser."<br>\r\n";
}
exit;