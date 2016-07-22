<?php

class ShowImmunityPage extends AbstractPage
{
            
	function __construct() 
	{
		parent::__construct();
	}
	
	function show(){
		global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;

	if($_POST){
$this->tplObj->loadscript('countdown.js');
        $mode   = HTTP::_GP('con', '');

        switch($mode){
        case 'buy':
		
		$fleets = $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM ".FLEETS." WHERE `fleet_owner` = ".$USER['id']." OR `fleet_target_owner` = ".$USER['id'].";");
		if($fleets != 0){
        $this->printMessage("Fleet mouvement!", true, array('game.php?page=immunity', 2));
        die();
        }
			
			
	if($USER['darkmatter'] < 30000){
        $this->printMessage("You do not have enough Dark matter!", true, array('game.php?page=immunity', 2));
        die();
        }else{
	$USER['darkmatter'] -= 30000;
        $GLOBALS['DATABASE']->query("Update ".USERS." SET `immunity_until` = ".(TIMESTAMP + 60*60*24*3).", `next_immunity` = ".(TIMESTAMP + 7*60*60*24)." WHERE `id` = ".$USER['id']." ;");
	$this->printMessage("You succesfully activated the immunity mod", true, array('game.php?page=immunity', 3));
        die();
        }
        break;
       case 'end':
	if($USER['darkmatter'] < 20000){
        $this->printMessage("You do not have enough Dark matter!", true, array('game.php?page=immunity', 2));
        die();
        }else{
	$USER['darkmatter'] -= 20000;
        $GLOBALS['DATABASE']->query("Update ".USERS." SET `immunity_until` = 0 WHERE `id` = ".$USER['id']." ;");
	$this->printMessage("You succesfully desactivated the immunity mod", true, array('game.php?page=immunity', 3));
        die();
        }
        break;
	}
        }
	$this->tplObj->loadscript('countdown.js');
		$this->tplObj->assign_vars(
				array(
                                        'p_state' => (($USER['immunity_until'] > TIMESTAMP) ? "Planet Protection (Immunity) - " :"Planet Protection (Immunity) - Status: offline" ),
					'immunity_active' => (($USER['immunity_until'] > TIMESTAMP) ? ($USER['immunity_until'] - TIMESTAMP) : 0),
                                        'immunity_next_active' => (($USER['next_immunity'] > TIMESTAMP) ? ($USER['next_immunity'] - TIMESTAMP) : 0),
                                        'next_immunity' => (($USER['next_immunity'] > TIMESTAMP) ? "You can re-activate immunity in : " :'<button type="submit" name="buy" class="button" style="height:25px;">Activate Player Immunity!</button>' ),
                                        'end_immunity' => (($USER['immunity_until'] > TIMESTAMP) ? '<button type="submit" name="end" class="button" style="height:25px;">Desactivate Player Immunity!</button>' : "" ),
                                       
                                 )
		);
		$this->display("page.immunity.default.tpl");
	}
}
