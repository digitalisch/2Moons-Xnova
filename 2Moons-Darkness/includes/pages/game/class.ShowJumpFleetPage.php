<?php

class ShowJumpFleetPage extends AbstractPage {

	public static $requireModule = 0;

	function __construct() {
		parent::__construct();
	}

	function show() {

		global $CONF, $LNG, $PLANET, $USER, $resource, $UNI;

		$act	     	= HTTP::_GP('act', '');
			$transCoasts	= 2000;
		
		if ($act == "take") {

			if (!isset($_POST['check_planet']) && !isset($_POST['check_moons']))
				$this->redirectTo('game.php?page=harvest');

			
				if($transCoasts > $USER['darkmatter']){$this->printMessage($LNG['error_3'], true, array('game.php?page=JumpFleet', 4));}
				else
				$USER['darkmatter']	-= $transCoasts;
				
			if(!isset($_POST['check_planet']))
				$_POST['check_planet'] = array();
			foreach($_POST['check_planet'] as $ID => $Value) {
				$sur = $GLOBALS['DATABASE']->uniquequery("SELECT small_ship_cargo, big_ship_cargo, light_hunter, heavy_hunter, crusher, battle_ship, colonizer, recycler, spy_sonde, bomber_ship, destructor, dearth_star, battleship, lune_noir, ev_transporter, star_crasher, giga_recykler, dm_ship FROM ".PLANETS." where `id` = '".$Value."';");
				$GLOBALS['DATABASE']->multi_query("LOCK TABLE ".PLANETS." WRITE; UPDATE ".PLANETS." SET `small_ship_cargo` = small_ship_cargo - ".$sur['small_ship_cargo'].", `big_ship_cargo` = big_ship_cargo - ".$sur['big_ship_cargo'].", `light_hunter` = light_hunter - ".$sur['light_hunter'].",  `heavy_hunter` = heavy_hunter - ".$sur['heavy_hunter'].", `crusher` = crusher - ".$sur['crusher'].", `battle_ship` = battle_ship - ".$sur['battle_ship'].", `colonizer` = colonizer - ".$sur['colonizer'].", `recycler` = recycler - ".$sur['recycler'].", `spy_sonde` = spy_sonde - ".$sur['spy_sonde'].", `bomber_ship` = bomber_ship - ".$sur['bomber_ship'].", `destructor` = destructor - ".$sur['destructor'].", `dearth_star` = dearth_star - ".$sur['dearth_star'].", `battleship` = battleship - ".$sur['battleship'].", `lune_noir` = lune_noir - ".$sur['lune_noir'].", `ev_transporter` = ev_transporter - ".$sur['ev_transporter'].", `star_crasher` = star_crasher - ".$sur['star_crasher'].", `giga_recykler` = giga_recykler - ".$sur['giga_recykler'].", `dm_ship` = dm_ship - ".$sur['dm_ship']." WHERE `id` = '".$Value."'; UNLOCK TABLES;");
				$PLANET['small_ship_cargo'] += $sur['small_ship_cargo'];
				$PLANET['big_ship_cargo'] += $sur['big_ship_cargo'];
				$PLANET['deuterium'] += $sur['deuterium'];
                                $PLANET['light_hunter'] += $sur['light_hunter'];
                                $PLANET['heavy_hunter'] += $sur['heavy_hunter'];
                                $PLANET['crusher'] += $sur['crusher'];
                                $PLANET['battle_ship'] += $sur['battle_ship'];
                                $PLANET['colonizer'] += $sur['colonizer'];
                                $PLANET['recycler'] += $sur['recycler'];
                                $PLANET['dearth_star'] += $sur['dearth_star'];
                                $PLANET['battleship'] += $sur['battleship'];
                                $PLANET['lune_noir'] += $sur['lune_noir'];
                                $PLANET['ev_transporter'] += $sur['ev_transporter'];
                                $PLANET['star_crasher'] += $sur['star_crasher'];
                                $PLANET['giga_recykler'] += $sur['giga_recykler'];
                                $PLANET['dm_ship'] += $sur['dm_ship'];

                                
			}
			if(!isset($_POST['check_moons']))
				$_POST['check_moons'] = array();
			foreach($_POST['check_moons'] as $ID => $Value) {
				$sur = $GLOBALS['DATABASE']->uniquequery("SELECT small_ship_cargo, big_ship_cargo, light_hunter, heavy_hunter, crusher, battle_ship, colonizer, recycler, spy_sonde, bomber_ship, destructor, dearth_star, battleship, lune_noir, ev_transporter, star_crasher, giga_recykler, dm_ship FROM ".PLANETS." where `id` = '".$Value."';");
				$GLOBALS['DATABASE']->multi_query("LOCK TABLE ".PLANETS." WRITE; UPDATE ".PLANETS." SET `small_ship_cargo` = small_ship_cargo - ".$sur['small_ship_cargo'].", `big_ship_cargo` = big_ship_cargo - ".$sur['big_ship_cargo'].", `light_hunter` = light_hunter - ".$sur['light_hunter'].",  `heavy_hunter` = heavy_hunter - ".$sur['heavy_hunter'].", `crusher` = crusher - ".$sur['crusher'].", `battle_ship` = battle_ship - ".$sur['battle_ship'].", `colonizer` = colonizer - ".$sur['colonizer'].", `recycler` = recycler - ".$sur['recycler'].", `spy_sonde` = spy_sonde - ".$sur['spy_sonde'].", `bomber_ship` = bomber_ship - ".$sur['bomber_ship'].", `destructor` = destructor - ".$sur['destructor'].", `dearth_star` = dearth_star - ".$sur['dearth_star'].", `battleship` = battleship - ".$sur['battleship'].", `lune_noir` = lune_noir - ".$sur['lune_noir'].", `ev_transporter` = ev_transporter - ".$sur['ev_transporter'].", `star_crasher` = star_crasher - ".$sur['star_crasher'].", `giga_recykler` = giga_recykler - ".$sur['giga_recykler'].", `dm_ship` = dm_ship - ".$sur['dm_ship']." WHERE `id` = '".$Value."'; UNLOCK TABLES;");
				$PLANET['small_ship_cargo'] += $sur['small_ship_cargo'];
				$PLANET['big_ship_cargo'] += $sur['big_ship_cargo'];
				$PLANET['deuterium'] += $sur['deuterium'];
                                $PLANET['light_hunter'] += $sur['light_hunter'];
                                $PLANET['heavy_hunter'] += $sur['heavy_hunter'];
                                $PLANET['crusher'] += $sur['crusher'];
                                $PLANET['battle_ship'] += $sur['battle_ship'];
                                $PLANET['colonizer'] += $sur['colonizer'];
                                $PLANET['recycler'] += $sur['recycler'];
                                $PLANET['dearth_star'] += $sur['dearth_star'];
                                $PLANET['battleship'] += $sur['battleship'];
                                $PLANET['lune_noir'] += $sur['lune_noir'];
                                $PLANET['ev_transporter'] += $sur['ev_transporter'];
                                $PLANET['star_crasher'] += $sur['star_crasher'];
                                $PLANET['giga_recykler'] += $sur['giga_recykler'];
                                $PLANET['dm_ship'] += $sur['dm_ship'];
			}
			$this->printMessage($LNG['h_ok'], true, array('game.php?page=JumpFleet', 4));
		} else {
			$Planets		= array();
			$Moons 			= array();
			if (isset($USER['PLANETS'])) {
				$USER['PLANETS']	= getPlanets($USER);
			}
			foreach($USER['PLANETS'] as $ID => $PlanetQuery) {
				if ($ID == $PLANET['id']) continue;
				if ($PlanetQuery['planet_type'] == 3) {
					$Moons[$PlanetQuery['id']] = $PlanetQuery['name'] . " [" . $PlanetQuery['galaxy'] . ":" . $PlanetQuery['system'] . ":" . $PlanetQuery['planet'] . "]";
				} elseif ($PlanetQuery['planet_type'] == 1) {
					$Planets[$PlanetQuery['id']] = $PlanetQuery['name'] . " [".$PlanetQuery['galaxy'] . ":" . $PlanetQuery['system'] . ":" . $PlanetQuery['planet'] . "]";
				}
			}
//			$this->tplObj->loadscript("jquery.countdown.js");
			$this->tplObj->assign_vars(array(
				'PlanetsList'				=> $Planets,
				'MoonsList'					=> $Moons,
			));
			$this->display('page.JumpFleet.default.tpl');
		}
	}
}
?>