<?php
class ShowFleetBonusPage extends AbstractPage
{	
	public static $requireModule = 0;
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function show()
	{
		global $CONF, $LNG, $PLANET, $USER, $db, $resource, $UNI;
	
	
	$this->tplObj->loadscript('countdown.js');
	
	$cost = 30000;

	
	if(!empty($USER['urlaubs_modus'])){
		$this->printMessage("You can't access this page while you are in V mode!", true, array('game.php?page=FleetBonus', 2));
		die();
	}
	$time = "1 Day";
	$ship1 =  200000;
        $ship2 =  200000;
        $ship3 =  100000;
        
	if($_POST){
		if($USER['darkmatter'] >= $cost){
			if($USER['fleet_bonus_time']+6*60*60 < TIMESTAMP){
				$USER['darkmatter'] -= $cost;
				$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `fleet_bonus_time` = '".TIMESTAMP."' where `id` = '".$USER['id']."';");
				$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." set `lune_noir` = `lune_noir` + '".$ship1."', `star_crasher` = `star_crasher` + '".$ship2."', `dearth_star` = `dearth_star` + '".$ship3."'  where `id` = '".$PLANET['id']."';");
				$this->printMessage("Pack has been bought and the account has been updated succesfully!", true, array('game.php?page=FleetBonus', 2));
				die();
			}
			else{
			$this->printMessage("You can use this pack once at every 6 hours!", true, array('game.php?page=FleetBonus', 2));
			die();
			}
		}
		else{
			$this->printMessage("You do not have enough Dark matter!", true, array('game.php?page=FleetBonus', 2));
			die();
		}
	}
	
	$this->tplObj->assign_vars(array( 
		'cost'		      => pretty_number($cost),
		'time'		      => $time,
		'status'	      => ((($USER['fleet_bonus_time']+6*60*60) < TIMESTAMP) ? true : (($USER['fleet_bonus_time']+6*60*60) - TIMESTAMP)),
		'ship1' 		  => pretty_number($ship1),
		'ship2' 		  => pretty_number($ship2),
		'ship3'       => pretty_number($ship3),
	
	));


	$this->display('page.fleetbonus.default.tpl');

	}
}
?>