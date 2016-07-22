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
 * @version 1.7.2 (2013-03-18)
 * @info $Id: PlanetData.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */

$PlanetData		= array(
	1	=> array('temp' => mt_rand(220, 260),	'fields' => mt_rand(395, 408),	'image' => array('trocken' => mt_rand(1, 10), 'wuesten' => mt_rand(1, 4))),
	2	=> array('temp' => mt_rand(170, 210),	'fields' => mt_rand(397, 410),	'image' => array('trocken' => mt_rand(1, 10), 'wuesten' => mt_rand(1, 4))),
	3	=> array('temp' => mt_rand(120, 160),	'fields' => mt_rand(398, 437),	'image' => array('trocken' => mt_rand(1, 10), 'wuesten' => mt_rand(1, 4))),
	4	=> array('temp' => mt_rand(70, 110),	'fields' => mt_rand(423, 503),	'image' => array('dschjungel' => mt_rand(1, 10))),
	5	=> array('temp' => mt_rand(60, 100),	'fields' => mt_rand(448, 510),	'image' => array('dschjungel' => mt_rand(1, 10))),
	6	=> array('temp' => mt_rand(50, 90),		'fields' => mt_rand(448, 526),	'image' => array('dschjungel' => mt_rand(1, 10))),
	7	=> array('temp' => mt_rand(40, 80),		'fields' => mt_rand(441, 573),	'image' => array('normaltemp' => mt_rand(1, 7))),
	8	=> array('temp' => mt_rand(30, 70),		'fields' => mt_rand(469, 546),	'image' => array('normaltemp' => mt_rand(1, 7))),
	9	=> array('temp' => mt_rand(20, 60),		'fields' => mt_rand(461, 538),	'image' => array('normaltemp' => mt_rand(1, 7), 'wasser' => mt_rand(1, 9))),
	10	=> array('temp' => mt_rand(10, 50),		'fields' => mt_rand(454, 524),	'image' => array('normaltemp' => mt_rand(1, 7), 'wasser' => mt_rand(1, 9))),
	11	=> array('temp' => mt_rand(0, 40),		'fields' => mt_rand(448, 504),	'image' => array('normaltemp' => mt_rand(1, 7), 'wasser' => mt_rand(1, 9))),
	12	=> array('temp' => mt_rand(-10, 30),	'fields' => mt_rand(436, 471),	'image' => array('normaltemp' => mt_rand(1, 7), 'wasser' => mt_rand(1, 9))),
	13	=> array('temp' => mt_rand(-50, -10),	'fields' => mt_rand(409, 421),	'image' => array('eis' => mt_rand(1, 10))),
	14	=> array('temp' => mt_rand(-90, -50),	'fields' => mt_rand(381, 393),	'image' => array('eis' => mt_rand(1, 10))),
	15	=> array('temp' => mt_rand(-130, -90),	'fields' => mt_rand(365, 374),	'image' => array('eis' => mt_rand(1, 10)))
);

?>