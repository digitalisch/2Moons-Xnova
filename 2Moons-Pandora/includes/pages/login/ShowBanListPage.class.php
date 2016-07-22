<?php

/**
 *  2Moons
 *  Copyright (C) 2012 Jan
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
 * @author Jan <info@2moons.cc>
 * @copyright 2006 Perberos <ugamela@perberos.com.ar> (UGamela)
 * @copyright 2008 Chlorel (XNova)
 * @copyright 2012 Jan <info@2moons.cc> (2Moons)
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 2.0.$Revision: 2242 $ (2012-11-31)
 * @info $Id: ShowBanListPage.class.php 2442 2012-11-18 00:48:36Z slaver7 $
 * @link http://2moons.cc/
 */

class ShowBanListPage extends AbstractPage 
{
	public static $requireModule = MODULE_BANLIST;

	function __construct() 
	{
		parent::__construct();
		$this->setWindow('light');
	}

	function show()
	{		
		global $UNI;
		$universeSelect	= array();
		
		$page  		= HTTP::_GP('side', 1);
		$banCount	= $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM ".BANNED." WHERE universe = ".$GLOBALS['UNI']." ORDER BY time DESC;");
		
		$maxPage	= ceil($banCount / BANNED_USERS_PER_PAGE);
		$page		= max(1, min($page, $maxPage));
		
		$banResult	= $GLOBALS['DATABASE']->query("SELECT * FROM ".BANNED." WHERE universe = ".$GLOBALS['UNI']." ORDER BY time DESC LIMIT ".(($page - 1) * BANNED_USERS_PER_PAGE).", ".BANNED_USERS_PER_PAGE.";");
		$banList	= array();
		
		while($banRow = $GLOBALS['DATABASE']->fetchArray($banResult))
		{
			$banList[]	= array(
				'player'	=> $banRow['who'],
				'theme'		=> $banRow['theme'],
				'from'		=> _date(t('php_tdformat'), $banRow['time'], Config::get('timezone')),
				'to'		=> _date(t('php_tdformat'), $banRow['longer'], Config::get('timezone')),
				'admin'		=> $banRow['author'],
				'mail'		=> $banRow['email'],
				'info'		=> t('bn_writemail', $banRow['author']),
			);
		}
		
		$uniAllConfig	= Config::getAll('universe');
		foreach($uniAllConfig as $uniID => $uniConfig)
		{
			$universeSelect[$uniID]	= $uniConfig['uni_name'];
		}
		
		$Online 	= $GLOBALS['DATABASE']->countquery("SELECT COUNT(*) FROM ".USERS." WHERE universe = ".$UNI." AND onlinetime > '".(TIMESTAMP - 15 * 60 )."';");
		$User		= $GLOBALS['DATABASE']->countquery("SELECT COUNT(*) FROM ".USERS." WHERE universe = ".$UNI.";");
		$Planet 	= $GLOBALS['DATABASE']->countquery("SELECT COUNT(*) FROM ".PLANETS." WHERE universe = ".$UNI.";");
		$Last		= $GLOBALS['DATABASE']->countquery("SELECT `username` FROM ".USERS." ORDER BY register_time DESC LIMIT 1;");
		
		$this->assign(array(
			'universeSelect'	=> $universeSelect,
			'banList'			=> $banList,
			'banCount'			=> $banCount,
			'page'				=> $page,
			'maxPage'			=> $maxPage,
			'online'			=> $Online,
			'user'				=> $User,
			'planet'			=> $Planet,
			'last'				=> $Last
		));
		
		$this->render('page.banList.default.tpl');
	}
}