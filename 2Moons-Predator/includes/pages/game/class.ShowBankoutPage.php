<?php

class ShowBankoutPage extends AbstractPage
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
				
				
				if($metalin < 0|| $crystalin < 0  ||$deutin < 0){
                                 $this->printMessage("Hack Attempt", true, array('game.php?page=bankout', 2));
                                die();
                }
				
                
                if($USER['bankm'] < $metalin || $USER['bankc'] < $crystalin  || $USER['bankd'] < $deutin){
                                 $this->printMessage("You dont have enough resources", true, array('game.php?page=bankout', 2));
                                die();
                }
                $PLANET['metal'] += $metalin;
                $PLANET['crystal'] += $crystalin;
                $PLANET['deuterium'] += $deutin;
                $USER['bankm'] -= $metalin;
                $GLOBALS['DATABASE']->query("UPDATE ".USERS." set `bankm` = `bankm` - ".$metalin." where `id` = '".$USER['id']."';");
                $USER['bankc'] -= $crystalin;
                $GLOBALS['DATABASE']->query("UPDATE ".USERS." set `bankc` = `bankc` - ".$crystalin." where `id` = '".$USER['id']."';");
                $USER['bankd'] -= $deutin;
                $GLOBALS['DATABASE']->query("UPDATE ".USERS." set `bankd` = `bankd` - ".$deutin." where `id` = '".$USER['id']."';");
                

                }
	
		$this->tplObj->assign_vars(
				array(
                                'bankm' => pretty_number($USER['bankm']),
                                'bankc' => pretty_number($USER['bankc']),
                                'bankd' => pretty_number($USER['bankd']),
                                        )
		);
		$this->display("page.bancout.default.tpl");
	}
}