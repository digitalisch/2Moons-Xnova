<?php

class ShowResPage extends AbstractPage

{

	function __construct() 

	{

		global $USER;

		parent::__construct();

		}
	
	function show() 

	{

	global $USER ,$LNG,$PLANET;

	$modo = HTTP::_GP('modo', '', UTF8_SUPPORT);

	$id = HTTP::_GP('id',0);

	 if($USER['darkmatter'] <= 10000) { 

	 $resto  = 10000 - $USER['darkmatter'];

		$this->printMessage("No, no! You do not have enough dark matter to do business with me! Come back when you have. ".$resto." unit dark matter!");

		exit;

	}elseif($modo == "ricevi"){

	$USER['darkmatter'] -= 10000;
	$PLANET['metal'] += 50000000;
	$PLANET['deuterium'] += 20000000;
	$PLANET['crystal'] += 35000000;
	
	$this->printMessage("The Agreement with Graferex was successfull you recieve: <br>			<li>Metal:   50.000.000</li>
			<li>Crystal: 35.000.000</li>
			<li>Deuterium:  20.000.000</li>", true, array("game.php?page=res", 3));
	
	}else{
	
	$this->tplObj->assign_vars(array(
	
			'USERNAME'			=> $USER['username'],
			
		));
		
	$this->display('res.tpl');
}
	}
	
	private function redirectToHome()
	
	{
	
		$this->redirectTo('game.php?page=res');
		
	}

	

	

	

	}