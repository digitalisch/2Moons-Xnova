<?php

class ShowBankinPage extends AbstractPage
{
            
	function __construct() 
	{
		parent::__construct();
	}
	
	function show(){
		global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
		 
                 
                 
                 if($_POST){
                     
                $metalin = $_POST['metalin'];
                $crystalin = $_POST['crystalin'];
                $deutin = $_POST['deutin'];
                $cost = 4000;
                
				
				if($metalin < 0|| $crystalin < 0  ||$deutin < 0){
                                 $this->printMessage("Hack Attempt", true, array('game.php?page=bankin', 2));
                                die();
                }
				
				
                 if($PLANET['metal'] < $metalin || $PLANET['crystal'] < $crystalin  || $PLANET['deuterium'] < $deutin){
                                 $this->printMessage("You dont have enough resources", true, array('game.php?page=bankin', 2));
                                die();
                }
				if($USER['darkmatter'] < $cost ){
                                 $this->printMessage("You dont have enough dark matter!", true, array('game.php?page=bankin', 2));
                                die();
                }
                
                $PLANET['metal'] -= $metalin;
                $PLANET['crystal'] -= $crystalin;
                $PLANET['deuterium'] -= $deutin;
                $USER['bankm'] += $metalin;
                $GLOBALS['DATABASE']->query("UPDATE ".USERS." set `bankm` = `bankm` + ".$metalin." where `id` = '".$USER['id']."';");
                $USER['bankc'] += $crystalin;
                $GLOBALS['DATABASE']->query("UPDATE ".USERS." set `bankc` = `bankc` + ".$crystalin." where `id` = '".$USER['id']."';");
                $USER['bankd'] += $deutin;
                $GLOBALS['DATABASE']->query("UPDATE ".USERS." set `bankd` = `bankd` + ".$deutin." where `id` = '".$USER['id']."';");
                $USER['darkmatter'] -= $cost;
                

                }
	
		$this->tplObj->assign_vars(
				array(
                                'bankm' => pretty_number($USER['bankm']),
                                'bankc' => pretty_number($USER['bankc']),
                                'bankd' => pretty_number($USER['bankd']),
                                        )
		);
		$this->display("page.bancin.default.tpl");
	}
}