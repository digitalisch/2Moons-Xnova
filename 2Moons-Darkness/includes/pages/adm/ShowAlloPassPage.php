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
 * @info $Id: ShowMessageListPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */

if (!allowedTo(str_replace(array(dirname(__FILE__), '\\', '/', '.php'), '', __FILE__))) throw new Exception("Permission error!");

function ShowAlloPassPage()
{
	global $LNG;
	$page		= HTTP::_GP('side', 1);
	$type		= HTTP::_GP('type', 100);
	$code		= HTTP::_GP('code', '', UTF8_SUPPORT);

	
	$perSide	= 50;

	$messageList	= array();
	$userWhereSQL	= '';
	$countJoinSQL	= '';
	
	$categories	= $LNG['mg_type'];
	unset($categories[999]);
	

	
	if(!empty($sender))
	{
		$countJoinSQL	.= ' LEFT JOIN '.USERS.' as us ON id = us.id';
		$userWhereSQL	.= ' AND us.username = "'.$GLOBALS['DATABASE']->escape($sender).'"';
	}
if ($type != 100)
	{
		$MessageCount	= $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM ".ALLOPASS.$countJoinSQL." WHERE type = ".$type." ;");
	}
	else
	{
		$MessageCount	= $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM ".ALLOPASS.$countJoinSQL." ;");
	}
	
	$maxPage	= max(1, ceil($MessageCount / $perSide));
	$page		= max(1, min($page, $maxPage));
	
	$sqlLimit	= (($page - 1) * $perSide).", ".($perSide - 1);
	
	if ($type == 100)
	{
		$messageRaw	= $GLOBALS['DATABASE']->query("SELECT u.username, us.username as senderName, m.* 
		FROM uni1_allopass_log as m 
		LEFT JOIN ".USERS." as u ON m.id = u.id 
		LEFT JOIN ".USERS." as us ON m.id = us.id
		
		
		ORDER BY date DESC
		LIMIT ".$sqlLimit.";");
	} else {
		$messageRaw	= $GLOBALS['DATABASE']->query("SELECT u.username, us.username as senderName, m.* 
		FROM uni1_allopass_log as m
		LEFT JOIN ".USERS." as u ON m.id = u.id
		LEFT JOIN ".USERS." as us ON m.id = us.id
		WHERE m.message_type = ".$type." 
		
		ORDER BY date DESC
		LIMIT ".$sqlLimit.";");
	}
	
	while($messageRow = $GLOBALS['DATABASE']->fetch_array($messageRaw))
	{
		$messageList[$messageRow['orderid']]	= array(
			'transac'		=> $messageRow['transac'],
			'total'		=> $messageRow['reference_paid'],
			'code'		=> $messageRow['code'],
			'dm'		=> pretty_number($messageRow['credits']),
			'result'		=> $messageRow['result'],
			'id'		=> $messageRow['id'],
			'type'		=> $messageRow['type'],
			'payout'		=> $messageRow['reference_payout'],
			'date'		=> str_replace(' ', '&nbsp;', _date($LNG['php_tdformat'], $messageRow['date']), $USER['timezone']),
		);
	}	
	
	$template 	= new template();

	$template->assign_vars(array(
		'maxPage'		=> $maxPage,
		'page'			=> $page,
		'messageList'	=> $messageList,

	));
				
	$template->show('allopass.tpl');
}