<?php

class ShowPremiumPage extends AbstractPage {

	public static $requireModule = 0;

	function __construct() 
	{
		parent::__construct();
	}
	
	function show()
	{

		global $CONF, $LNG, $PLANET, $USER, $db, $resource, $UNI;

			$PlanetRess = new ResourceUpdate();
			$PlanetRess	->CalcResource();
			$PlanetRess	->SavePlanetToDB();

			$template = new template();
			$this->tplObj->loadscript('p_trader.js');
			
			$transCoasts	= 1000;
			
		if($_POST){
			
			if($transCoasts > $USER['darkmatter']){$this->printMessage($LNG['error_3'], true, array('game.php?page=premium', 4));}
				else
				$USER['darkmatter']	-= $transCoasts;
			
			$PlanetRess = new ResourceUpdate();
			$PlanetRess	->CalcResource();
			$PlanetRess	->SavePlanetToDB();
			
			$PlanetRess = new ResourceUpdate();
			
			$total_points 	= $GLOBALS['DATABASE']->sql_escape($_POST['totalPoints']);
			$new_metal 		= $GLOBALS['DATABASE']->sql_escape($_POST['newMetal']);
			$new_crystal 	= $GLOBALS['DATABASE']->sql_escape($_POST['newCrystal']);
			$new_deuterium 	= $GLOBALS['DATABASE']->sql_escape($_POST['newDeuterium']);
			
			
			
			$recalculate = $new_metal + 2*$new_crystal + 4*$new_deuterium;

			if($recalculate != $total_points && ($recalculate - $total_points > 2000)){
				$this->printMessage('Error with inputs', true, array('game.php?page=premium',2));
				die();
			}

			if($new_metal < 0 || $new_crystal < 0 || $new_deuterium < 0){
				$this->printMessage('ERROR with negative numbers', true, array('game.php?page=premium',2));
				die();
			}
			
					$PLANET[$resource[901]]	= $new_metal;
                    $PLANET[$resource[902]]	= $new_crystal;
                    $PLANET[$resource[903]]	= $new_deuterium;
					
			$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET 
										`metal` 		= ".$new_metal.", 
										`crystal`		= ".$new_crystal.", 
										`deuterium` 	= ".$new_deuterium."
										WHERE id  	= ".$PLANET['id']." ;");
			$this->printMessage($LNG['p_ok'], true, array('game.php?page=premium',2));
			die();
		}

		$recalculate = $PLANET['metal'] + $PLANET['crystal']*2 + $PLANET['deuterium']*4;
		
		$_SESSION['total_p'] = $recalculate;
		
		$this->tplObj->assign_vars(array(
			'transcoasts'			=> $transCoasts,
			'total_points'			=> pretty_number(floattostring($recalculate)),
			'total_points11'		=> floattostring($recalculate),
			'planet_metal'			=> pretty_number($PLANET['metal']),
			'planet_crystal'		=> pretty_number($PLANET['crystal']),
			'planet_deuterium'		=> pretty_number($PLANET['deuterium']),
			'planet_metal11'		=> $PLANET['metal'],
			'planet_crystal11'		=> $PLANET['crystal'],
			'planet_deuterium11'	=> $PLANET['deuterium'],
			'planet_metal_t'		=> pretty_number($PLANET['metal']),
			'planet_crystal_t'		=> pretty_number(floattostring($PLANET['crystal'] *2)),
			'planet_deuterium_t'	=> pretty_number(floattostring($PLANET['deuterium']*4)),
		));

		$this->display('page.premium.default.tpl');
	}
}
?>