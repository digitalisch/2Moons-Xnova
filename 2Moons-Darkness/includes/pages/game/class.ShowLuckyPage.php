<?php
class ShowLuckyPage extends AbstractPage
{	
	public static $requireModule = 0;
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function show()
	{
		global $CONF, $LNG, $PLANET, $USER, $db, $resource, $UNI;


//$db->query("UPDATE ".USERS." set `bonus_page_time2` = 0;");



$PlanetRess = new ResourceUpdate();
$PlanetRess->CalcResource();
$PlanetRess->SavePlanetToDB();

//start the template
$this->tplObj->loadscript('countdown.js');

$cost = 50000;


if(!empty($USER['urlaubs_modus'])){
	$this->printMessage("You can't access this page while you are in V mode!", true, array('game.php?page=overview', 2));
	die();
}

//fetch the best planet
$za_planet1 = $GLOBALS['DATABASE']->uniquequery("SELECT *FROM ".PLANETS." where `id_owner` = ".$USER['id']." order by `metal_perhour` DESC limit 1;");
$za_planet2 = $GLOBALS['DATABASE']->uniquequery("SELECT *FROM ".PLANETS." where `id_owner` = ".$USER['id']." order by `crystal_perhour` DESC limit 1;");
$za_planet3 = $GLOBALS['DATABASE']->uniquequery("SELECT *FROM ".PLANETS." where `id_owner` = ".$USER['id']." order by `deuterium_perhour` DESC limit 1;");



$metal   	= 7*7*7*24*$za_planet1['metal_perhour'];
$crystal   	= 7*7*7*24*$za_planet2['crystal_perhour'];
$deuterium   	= 7*7*7*24*$za_planet3['deuterium_perhour'];



$time = "1 Week";
if($_POST){
	
	//verificam daca au trecut 24h
	if($USER['darkmatter'] >= $cost){
		if($USER['bonus_page_time2']+3.5*24*60*60 < TIMESTAMP){
			//update
			$USER['darkmatter'] -= $cost;
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `bonus_page_time2` = '".TIMESTAMP."' where `id` = '".$USER['id']."';");
			$PLANET['metal'] += $metal;
			$PLANET['crystal'] += $crystal;
			$PLANET['deuterium'] += $deuterium ;
                       
			$this->printMessage("Pack has been bought and the account has been updated succesfully!", true, array('game.php?page=lucky', 2));
			die();
		die();
		}else{
		$this->printMessage("You can use this pack Twice at every 1 week!", true, array('game.php?page=lucky', 2));
		die();
		}
	}else{
		$this->printMessage("You do not have enough DarkMatter!", true, array('game.php?page=lucky', 2));
		die();
	}
}

$this->tplObj->assign_vars(array( 
	'cost'		      => pretty_number($cost),
	'time'		      => $time,
	'price_metal'     => pretty_number($metal),
	'price_crystal'   => pretty_number($crystal),
	'price_deuterium' => pretty_number($deuterium), 
        
	'status'	      => ((($USER['bonus_page_time2']+3.5*24*60*60) < TIMESTAMP) ? true : (($USER['bonus_page_time2']+3.5*24*60*60) - TIMESTAMP)),
));

//afisam pagina
$this->display('page.lucky.default.tpl');

	}
}
?>