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
 * @info $Id: ShowDisclamerPage.class.php 2416 2012-11-10 00:12:51Z slaver7 $
 * @link http://2moons.cc/
 */


class ShowDisclamerPage extends AbstractPage
{
	public static $requireModule = 0;

	function __construct() 
	{
		parent::__construct();
		$this->setWindow('light');
	}
	
	function show() 
	{
		global $LNG, $UNI;
	
		$Online 	= $GLOBALS['DATABASE']->countquery("SELECT COUNT(*) FROM ".USERS." WHERE universe = ".$UNI." AND onlinetime > '".(TIMESTAMP - 15 * 60 )."';");
		$User		= $GLOBALS['DATABASE']->countquery("SELECT COUNT(*) FROM ".USERS." WHERE universe = ".$UNI.";");
		$Planet 	= $GLOBALS['DATABASE']->countquery("SELECT COUNT(*) FROM ".PLANETS." WHERE universe = ".$UNI.";");
		$Last		= $GLOBALS['DATABASE']->countquery("SELECT `username` FROM ".USERS." ORDER BY register_time DESC LIMIT 1;");
		
		$this->assign(array(
			'disclamerAddress'		=> makebr(Config::get('disclamerAddress')),
			'disclamerPhone'		=> Config::get('disclamerPhone'),
			'disclamerMail'			=> Config::get('disclamerMail'),
			'disclamerNotice'		=> Config::get('disclamerNotice'),
			'online'				=> $Online,
			'user'					=> $User,
			'planet'				=> $Planet,
			'last'					=> $Last
		));
		
		$this->render('page.disclamer.default.tpl');
	}
}
