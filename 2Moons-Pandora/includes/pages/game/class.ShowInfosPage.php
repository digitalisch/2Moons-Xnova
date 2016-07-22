<?php

class ShowInfosPage extends AbstractPage {

	public static $requireModule = 0;

	function __construct() {
		parent::__construct();
		$this->setWindow('popup');
		$this->initTemplate();
	}

	function show() {
		
		global $CONF, $LNG, $PLANET, $USER, $db, $resource, $UNI;
		
		$gspeed = Config::get('game_speed')/2500;
		$fspeed = Config::get('fleet_speed')/2500;
		$rspeed = Config::get('resource_multiplier');
		$espeed = Config::get('halt_speed');
		$noobsch = Config::get('noobprotectiontime');
		$noobm = Config::get('noobprotectionmulti');
		$planetm = Config::get('min_player_planets');
		$planett = Config::get('planets_tech');
		$ref = Config::get('ref_minpoints');
		$ftf = Config::get('Fleet_Cdr');
		$dtf = Config::get('Defs_Cdr');

		{
			$this->tplObj->assign_vars(array(
			'gspeed'				=> $gspeed,
			'fspeed'				=> $fspeed,
			'rspeed'				=> $rspeed,
			'espeed'				=> $espeed,
			'noobsch'				=> $noobsch,
			'noobm'					=> $noobm,
			'planetm'				=> $planetm,
			'planett'				=> $planett,
			'ref'					=> $ref,
			'ftf'					=> $ftf,
			'dtf'					=> $dtf,
		));
		
			$this->display('infos.tpl');
		}
	}
}
?>