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
 * @info $Id: class.ShowBanListPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */

class ShowBonusPage extends AbstractPage
{
	public static $requireModule = MODULE_SUPPORT;

	function __construct()
	{
		parent::__construct();
	}

	function show()
	{
		global $USER, $PLANET, $LNG, $UNI, $resource;

		$darkmatter = $USER['darkmatter'];
		$Test = $USER['bonus_attente_time'] == 0;

		$test=mt_rand(1,5);
		/* 'switch' compare la valeur d’une variable $var successivement à chacun des 'case' */
		switch ($test)
		{
			case 1 :  /* Chaque 'case' se termine par deux points */

				if ($USER['bonus_attente_time'] > TIMESTAMP) {
					$this->printMessage("Your renewal time has not yet elapsed ", true, array('game.php?page=overview', 3));
					break;

				}

				if ($Test) {



					$time = TIMESTAMP + 30*60 ;
					$metal = mt_rand(20000 , 40000);
					$crystal = mt_rand(20000 , 40000);
					$deuterium = mt_rand(20000 , 40000);
					$darkmatter = mt_rand(2000 , 4000);

					$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET
                              bonus_attente_time=".$time."
                              WHERE id= '".$USER['id']."';");

					$PLANET[$resource[901]] += $darkmatter;
					$PLANET[$resource[902]] += $darkmatter;
					$PLANET[$resource[903]] += $darkmatter;
					$USER[$resource[921]] += $darkmatter;

					$this->printMessage("you won ".$darkmatter." darkmatter <br>
						you won ".$metal." metal <br>
						you won ".$crystal." crystal <br>
						you won ".$deuterium." deuterium ", true, array('game.php?page=overview', 3));
					break;
				}

			case 2 : /* L’ordre des 'case' est très important */

				if ($USER['bonus_attente_time'] > TIMESTAMP) {
					$this->printMessage("Your renewal time has not yet elapsed ", true, array('game.php?page=overview', 3));
					break;

				}

				if ($Test) {

					$time = TIMESTAMP + 2*60*60 ;
					$metal = mt_rand(200000 , 400000);
					$crystal = mt_rand(200000 , 400000);
					$deuterium = mt_rand(200000 , 400000);
					$darkmatter = mt_rand(4000 , 8000);

					$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET
                              bonus_attente_time=".$time."
                              WHERE id= '".$USER['id']."';");

					$PLANET[$resource[901]] += $darkmatter;
					$PLANET[$resource[902]] += $darkmatter;
					$PLANET[$resource[903]] += $darkmatter;
					$USER[$resource[921]] += $darkmatter;

					$this->printMessage("you won ".$darkmatter." darkmatter <br>
						you won ".$metal." metal <br>
						you won ".$crystal." crystal <br>
						you won ".$deuterium." deuterium ", true, array('game.php?page=overview', 3));
					break;

				}

			case 3 :

				if ($USER['bonus_attente_time'] > TIMESTAMP) {
					$this->printMessage("Your renewal time has not yet elapsed ", true, array('game.php?page=overview', 3));
					break;

				}

				if ($Test) {

					$time = TIMESTAMP + 3*60*60 ;
					$metal = mt_rand(2000000 , 4000000);
					$crystal = mt_rand(2000000 , 4000000);
					$deuterium = mt_rand(2000000 , 4000000);
					$darkmatter = mt_rand(8000 , 16000);

					$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET
                              bonus_attente_time=".$time."
                              WHERE id= '".$USER['id']."';");

					$PLANET[$resource[901]] += $darkmatter;
					$PLANET[$resource[902]] += $darkmatter;
					$PLANET[$resource[903]] += $darkmatter;
					$USER[$resource[921]] += $darkmatter;

					$this->printMessage("you won ".$darkmatter." darkmatter <br>
						you won ".$metal." metal <br>
						you won ".$crystal." crystal <br>
						you won ".$deuterium." deuterium ", true, array('game.php?page=overview', 3));
					break;

				}

			case 4 :

				if ($USER['bonus_attente_time'] > TIMESTAMP) {
					$this->printMessage("Your renewal time has not yet elapsed ", true, array('game.php?page=overview', 3));
					break;

				}

				if ($Test) {

					$time = TIMESTAMP + 6*60*60 ;
					$metal = mt_rand(20000000 , 40000000);
					$crystal = mt_rand(20000000 , 40000000);
					$deuterium = mt_rand(20000000 , 40000000);
					$darkmatter = mt_rand(16000 , 32000);

					$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET
                              bonus_attente_time=".$time."
                              WHERE id= '".$USER['id']."';");

					$PLANET[$resource[901]] += $darkmatter;
					$PLANET[$resource[902]] += $darkmatter;
					$PLANET[$resource[903]] += $darkmatter;
					$USER[$resource[921]] += $darkmatter;

					$this->printMessage("you won ".$darkmatter." darkmatter <br>
						you won ".$metal." metal <br>
						you won ".$crystal." crystal <br>
						you won ".$deuterium." deuterium ", true, array('game.php?page=overview', 3));
					break;

				}

			case 5 :

				if ($USER['bonus_attente_time'] > TIMESTAMP) {
					$this->printMessage("Your renewal time has not yet elapsed ", true, array('game.php?page=overview', 3));
					break;

				}

				if ($Test) {

					$time = TIMESTAMP + 24*60*60 ;
					$metal = mt_rand(200000000 , 400000000);
					$crystal = mt_rand(200000000 , 400000000);
					$deuterium = mt_rand(200000000 , 400000000);
					$darkmatter = mt_rand(32000 , 64000);

					$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET
                              bonus_attente_time=".$time."
                              WHERE id= '".$USER['id']."';");

					$PLANET[$resource[901]] += $darkmatter;
					$PLANET[$resource[902]] += $darkmatter;
					$PLANET[$resource[903]] += $darkmatter;
					$USER[$resource[921]] += $darkmatter;

					$this->printMessage("you won ".$darkmatter." darkmatter <br>
						you won ".$metal." metal <br>
						you won ".$crystal." crystal <br>
						you won ".$deuterium." deuterium ", true, array('game.php?page=overview', 3));
					break;

				}

			default :
				break;

		}

		$this->tplObj->assign_vars(array(

		));

	}
}