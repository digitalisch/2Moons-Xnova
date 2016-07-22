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
 * @info $Id: CombatReport.php 1916 2011-07-12 17:58:10Z slaver7 $
 * @link http://code.google.com/p/2moons/
 */

define('INSIDE'  , true);
define('AJAX', true );

define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
require(ROOT_PATH . 'includes/common.php');
$Stats 	= $db->uniquequery("SELECT * FROM (
	SELECT 
	IFNULL(AVG(p.metal_mine / sum.build * 100), -1) as metal_mine,  
	IFNULL(AVG(p.crystal_mine / sum.build * 100), -1) as crystal_mine, 
	IFNULL(AVG(p.deuterium_sintetizer / sum.build * 100), -1) as deuterium_sintetizer, 
	IFNULL(AVG(p.solar_plant / sum.build * 100), -1) as solar_plant, 
	IFNULL(AVG(p.university / sum.build * 100), -1) as university, 
	IFNULL(AVG(p.fusion_plant / sum.build * 100), -1) as fusion_plant, 
	IFNULL(AVG(p.robot_factory / sum.build * 100), -1) as robot_factory, 
	IFNULL(AVG(p.nano_factory / sum.build * 100), -1) as nano_factory, 
	IFNULL(AVG(p.hangar / sum.build * 100), -1) as hangar, 
	IFNULL(AVG(p.metal_store / sum.build * 100), -1) as metal_store, 
	IFNULL(AVG(p.crystal_store / sum.build * 100), -1) as crystal_store, 
	IFNULL(AVG(p.deuterium_store / sum.build * 100), -1) as deuterium_store, 
	IFNULL(AVG(p.laboratory / sum.build * 100), -1) as laboratory, 
	IFNULL(AVG(p.terraformer / sum.build * 100), -1) as terraformer, 
	IFNULL(AVG(p.ally_deposit / sum.build * 100), -1) as ally_deposit, 
	IFNULL(AVG(p.silo / sum.build * 100), -1) as silo

	FROM ".PLANETS." as p, (
		SELECT 
		sp.id as id,
		sp.metal_mine + sp.crystal_mine + sp.deuterium_sintetizer + sp.solar_plant + sp.university + sp.fusion_plant + 
		sp.robot_factory + sp.nano_factory + sp.hangar + sp.metal_store + sp.crystal_store + sp.deuterium_store + sp.laboratory + 
		sp.terraformer + sp.ally_deposit + sp.mondbasis + sp.phalanx + sp.sprungtor + sp.silo as build
		FROM ".PLANETS." as sp 
	) as sum WHERE p.id = sum.id AND p.planet_type = 1 AND sum.build > 0 
) as builds, (
	SELECT 
	IFNULL(AVG(p.robot_factory / sum.moon * 100), -1) as moon_robot_factory, 
	IFNULL(AVG(p.hangar / sum.moon * 100), -1) as moon_hangar, 
	IFNULL(AVG(p.metal_store / sum.moon * 100), -1) as moon_metal_store, 
	IFNULL(AVG(p.crystal_store / sum.moon * 100), -1) as moon_crystal_store, 
	IFNULL(AVG(p.deuterium_store / sum.moon * 100), -1) as moon_deuterium_store, 
	IFNULL(AVG(p.ally_deposit / sum.moon * 100), -1) as moon_ally_deposit,
	IFNULL(AVG(p.mondbasis / sum.moon * 100), -1) as moon_mondbasis, 
	IFNULL(AVG(p.phalanx / sum.moon * 100), -1) as moon_phalanx, 
	IFNULL(AVG(p.sprungtor / sum.moon * 100), -1) as moon_sprungtor
	FROM ".PLANETS." as p, (
		SELECT 
		sp.id as id,
		sp.robot_factory + sp.hangar + sp.metal_store + sp.crystal_store + sp.deuterium_store + sp.ally_deposit + 
		sp.mondbasis + sp.phalanx + sp.sprungtor as moon
		FROM ".PLANETS." as sp 
	) as sum WHERE p.id = sum.id AND p.planet_type = 3 AND sum.moon > 0 
) as moons, (
	SELECT 
	IFNULL(AVG(p.small_ship_cargo / sum.ship * 100), -1) as small_ship_cargo, 
	IFNULL(AVG(p.big_ship_cargo / sum.ship * 100), -1) as big_ship_cargo, 
	IFNULL(AVG(p.light_hunter / sum.ship * 100), -1) as light_hunter, 
	IFNULL(AVG(p.heavy_hunter / sum.ship * 100), -1) as heavy_hunter, 
	IFNULL(AVG(p.crusher / sum.ship * 100), -1) as crusher, 
	IFNULL(AVG(p.battle_ship / sum.ship * 100), -1) as battle_ship, 
	IFNULL(AVG(p.colonizer / sum.ship * 100), -1) as colonizer, 
	IFNULL(AVG(p.recycler / sum.ship * 100), -1) as recycler, 
	IFNULL(AVG(p.spy_sonde / sum.ship * 100), -1) as spy_sonde, 
	IFNULL(AVG(p.bomber_ship / sum.ship * 100), -1) as bomber_ship, 
	IFNULL(AVG(p.solar_satelit / sum.ship * 100), -1) as solar_satelit, 
	IFNULL(AVG(p.destructor / sum.ship * 100), -1) as destructor, 
	IFNULL(AVG(p.dearth_star / sum.ship * 100), -1) as dearth_star, 
	IFNULL(AVG(p.battleship / sum.ship * 100), -1) as battleship, 
	IFNULL(AVG(p.lune_noir / sum.ship * 100), -1) as lune_noir, 
	IFNULL(AVG(p.ev_transporter / sum.ship * 100), -1) as ev_transporter, 
	IFNULL(AVG(p.star_crasher / sum.ship * 100), -1) as star_crasher, 
	IFNULL(AVG(p.giga_recykler / sum.ship * 100), -1) as giga_recykler, 
	IFNULL(AVG(p.dm_ship / sum.ship * 100), -1) as dm_ship
	
	FROM ".PLANETS." as p, (
		SELECT 
		sp.id as id,
		sp.small_ship_cargo + sp.big_ship_cargo + sp.light_hunter + sp.heavy_hunter + sp.crusher + sp.battle_ship + sp.colonizer + 
		sp.recycler + sp.spy_sonde + sp.bomber_ship + sp.solar_satelit + sp.destructor + sp.dearth_star + sp.battleship + sp.lune_noir + 
		sp.ev_transporter + sp.star_crasher + sp.giga_recykler + sp.dm_ship as ship
		FROM ".PLANETS." as sp
	) as sum WHERE sum.ship > 0 AND p.id = sum.id
) as ships, (
	SELECT 
	IFNULL(AVG(p.misil_launcher / sum.def * 100), -1) as misil_launcher, 
	IFNULL(AVG(p.small_laser / sum.def * 100), -1) as small_laser, 
	IFNULL(AVG(p.big_laser / sum.def * 100), -1) as big_laser, 
	IFNULL(AVG(p.gauss_canyon / sum.def * 100), -1) as gauss_canyon, 
	IFNULL(AVG(p.ionic_canyon / sum.def * 100), -1) as ionic_canyon, 
	IFNULL(AVG(p.buster_canyon / sum.def * 100), -1) as buster_canyon, 
	IFNULL(AVG(p.small_protection_shield / sum.def * 100), -1) as small_protection_shield, 
	IFNULL(AVG(p.big_protection_shield / sum.def * 100), -1) as big_protection_shield, 
	IFNULL(AVG(p.planet_protector / sum.def * 100), -1) as planet_protector, 
	IFNULL(AVG(p.graviton_canyon / sum.def * 100), -1) as graviton_canyon, 
	IFNULL(AVG(p.orbital_station / sum.def * 100), -1) as orbital_station, 
	IFNULL(AVG(p.interceptor_misil / sum.def * 100), -1) as interceptor_misil, 
	IFNULL(AVG(p.interplanetary_misil / sum.def * 100), -1) as interplanetary_misil

	FROM ".PLANETS." as p, (
		SELECT 
		sp.id as id,
		sp.misil_launcher + sp.small_laser + sp.big_laser + sp.gauss_canyon + sp.ionic_canyon + sp.buster_canyon + 
		sp.small_protection_shield + sp.big_protection_shield + sp.planet_protector + sp.graviton_canyon + sp.orbital_station + 
		sp.interceptor_misil + sp.interplanetary_misil as def
		FROM ".PLANETS." as sp 
	) as sum WHERE sum.def > 0 AND p.id = sum.id
) as def, (
	SELECT 
	IFNULL(AVG(u.spy_tech / sum.tech * 100), -1) as spy_tech, 
	IFNULL(AVG(u.computer_tech / sum.tech * 100), -1) as computer_tech, 
	IFNULL(AVG(u.military_tech / sum.tech * 100), -1) as military_tech, 
	IFNULL(AVG(u.defence_tech / sum.tech * 100), -1) as defence_tech, 
	IFNULL(AVG(u.shield_tech / sum.tech * 100), -1) as shield_tech, 
	IFNULL(AVG(u.energy_tech / sum.tech * 100), -1) as energy_tech, 
	IFNULL(AVG(u.hyperspace_tech / sum.tech * 100), -1) as hyperspace_tech, 
	IFNULL(AVG(u.combustion_tech / sum.tech * 100), -1) as combustion_tech, 
	IFNULL(AVG(u.impulse_motor_tech / sum.tech * 100), -1) as impulse_motor_tech, 
	IFNULL(AVG(u.hyperspace_motor_tech / sum.tech * 100), -1) as hyperspace_motor_tech, 
	IFNULL(AVG(u.laser_tech / sum.tech * 100), -1) as laser_tech, 
	IFNULL(AVG(u.ionic_tech / sum.tech * 100), -1) as ionic_tech, 
	IFNULL(AVG(u.buster_tech / sum.tech * 100), -1) as buster_tech, 
	IFNULL(AVG(u.intergalactic_tech / sum.tech * 100), -1) as intergalactic_tech, 
	IFNULL(AVG(u.expedition_tech / sum.tech * 100), -1) as expedition_tech, 
	IFNULL(AVG(u.metal_proc_tech / sum.tech * 100), -1) as metal_proc_tech, 
	IFNULL(AVG(u.crystal_proc_tech / sum.tech * 100), -1) as crystal_proc_tech, 
	IFNULL(AVG(u.deuterium_proc_tech / sum.tech * 100), -1) as deuterium_proc_tech, 
	IFNULL(AVG(u.graviton_tech / sum.tech * 100), -1) as graviton_tech

	FROM ".USERS." as u, (
		SELECT 
		su.id as id,
		su.spy_tech + su.computer_tech + su.military_tech + su.defence_tech + su.shield_tech + su.energy_tech + su.hyperspace_tech + su.combustion_tech + su.impulse_motor_tech + su.hyperspace_motor_tech + su.laser_tech + su.ionic_tech + su.buster_tech + su.intergalactic_tech + su.expedition_tech + su.metal_proc_tech + su.crystal_proc_tech + su.deuterium_proc_tech + su.graviton_tech as tech
		FROM ".USERS." as su
	) as sum WHERE sum.tech > 0 AND u.id = sum.id
) as tech;");

foreach($Stats as $Col => $Value)
	echo $Col.": ".$Value."<br />\r\n";

echo "<br />\r\n";
echo json_encode($Stats);
?>