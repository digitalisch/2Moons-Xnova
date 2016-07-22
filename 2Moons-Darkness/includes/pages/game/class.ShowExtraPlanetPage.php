<?php
class ShowExtraPlanetPage extends AbstractPage
{	
	public static $requireModule = 0;
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function show()
	{
            
            global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
            
            
            if($_POST){
                
            $iPlanetCount 	= $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM ".PLANETS." WHERE `id_owner` = '". $USER['id'] ."' AND `planet_type` = '1' AND `destruyed` = '0';");
            
	
		//option is ok . go forward
		
	//enough dm ? 
        

	if($USER['darkmatter'] < 30000){
		$this->printMessage("You do not have enough dark matter", true, array('game.php?page=ExtraPlanet', 3));
		die();
	}
        
	if($iPlanetCount < 30)
		{
                    
		$this->printMessage("You can buy a special planet after you've colonized all the normal slots", true, array('game.php?page=ExtraPlanet', 3));
                die();	
		}
        
        
	
	//seems legit, go forward and see what needs to be done
	
	$cost = 30000;
	
        
	if($USER['extra_planet'] < 5){
            $USER['darkmatter']	-= $cost;
		$GLOBALS['DATABASE']->query("
			Update
				".USERS."
			SET
				`extra_planet` = `extra_planet` + ".(1)."
                                
			WHERE
				`id` = ".$USER['id']." ;
		");
                
                
			require_once('includes/functions/CreateOnePlanetRecord.php');
			
		
                
                $this->printMessage("You succesfully buyd 1 extra planet", true, array('game.php?page=ExtraPlanet', 3));
                die();
	}
        else{
		$this->printMessage("You can only buy 5 extra planets", true, array('game.php?page=ExtraPlanet', 3));
                die();
                
                
	}
	
	
	
	}
		$this->tplObj->assign_vars(array(
			
			'requiredDarkMatter'	=> $USER['darkmatter'] < 30000 ? sprintf($LNG['tr_not_enought'], $LNG['tech'][921]) : false,
                        'extra_planet'          => $USER['extra_planet'],
		));
		$this->display('page.extra.default.tpl');
	}
}
		

?>