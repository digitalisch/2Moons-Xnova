<?php
class ShowDefBonusPage extends AbstractPage
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
	

   
 
   
        
		
		
	
	if(!empty($USER['urlaubs_modus'])){
		$this->printMessage("You can't access this page while you are in V mode!", true, array('game.php?page=DefBonus', 2));
		die();
	}
	$time = "1 Day";
	$ship1 = 200000;
	$ship2 = 10000;
	$ship3 = 200000;
	$cost = 10000;

        
	if($_POST){
		if($USER['darkmatter'] >= $cost){
			if($USER['def_bonus_time']+12*60*60 < TIMESTAMP){
				$USER['darkmatter'] -= $cost;
				$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `def_bonus_time` = '".TIMESTAMP."' where `id` = '".$USER['id']."';");
				$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." set `small_laser` = `small_laser` + '".$ship1."', `misil_launcher` = `misil_launcher` + '".$ship3."', `graviton_canyon` = `graviton_canyon` + '".$ship2."'  where `id` = '".$PLANET['id']."';");
				$this->printMessage("Pack has been bought and the account has been updated succesfully!", true, array('game.php?page=DefBonus', 2));
				die();
			}
			else{
			$this->printMessage("You can use this pack once every 2 days!", true, array('game.php?page=DefBonus', 2));
			die();
			}
		}
		else{
			$this->printMessage("You do not have enough Dark matter!", true, array('game.php?page=DefBonus', 2));
			die();
		}
	}
	
	$this->tplObj->assign_vars(array( 
		'cost'		      => pretty_number($cost),
		'time'		      => $time,
		'status'	      => ((($USER['def_bonus_time']+12*60*60) < TIMESTAMP) ? true : (($USER['def_bonus_time']+12*60*60) - TIMESTAMP)),
		'ship1' 		  => pretty_number($ship1),
		'ship2' 		  => pretty_number($ship2),
		'ship3'       => pretty_number($ship3),
	));


	$this->display('page.defbonus.default.tpl');

	}
}
?>