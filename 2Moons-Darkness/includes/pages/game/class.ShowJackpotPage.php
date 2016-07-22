<?php

class ShowJackpotPage extends AbstractPage
{
        public static $requireModule = 0;
        var $JackpotPrice = array(1=>5000,5=>20000,10=>30000); // (weeks => price dm)
	function __construct() 
	{
		parent::__construct();
	}
	
	function show(){
		global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
		$act	     	= HTTP::_GP('act', '');
                
                if($CONF['jackpot_update']+12*60*60 < TIMESTAMP){
                $time = TIMESTAMP;
                $GLOBALS['DATABASE']->query("UPDATE `uni1_config` SET `jackpot_prize` = `jackpot_prize` + 10000 ;");
                $GLOBALS['DATABASE']->query("UPDATE `uni1_config` SET `jackpot_update` = ".$time." ;");
                $GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `jackpot` = 5 WHERE `jackpot` < 5 ;");
                if($CONF['jackpot_prize'] > 500000){
                $GLOBALS['DATABASE']->query("UPDATE `uni1_config` SET `jackpot_prize` = 500000 ;");
                }
                $this->printMessage("Jack Pot is being increased", true, array('game.php?page=jackpot', 3));
		die();
                }
                if($CONF['jackpot_update1']+24*60*60 < TIMESTAMP){
                $time1 = TIMESTAMP;
                $GLOBALS['DATABASE']->query("UPDATE `uni1_config` SET `jackpot_update1` = ".$time1." ;");
                $GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `jackpot` = 5 WHERE `jackpot` < 5 ;");
                $this->printMessage("Counters have been reseted", true, array('game.php?page=jackpot', 3));
		die();
                }
        
                if ($act == "buyext") {
                $premium_opt = HTTP::_GP('premium',0);
                if(!array_key_exists($premium_opt,$this->JackpotPrice)){
		$this->printMessage("Invalid Option", true, array('game.php?page=jackpot', 3));
                }else{
		//option is ok . go forward
		
                //enough dm ? 
                if($USER['darkmatter'] < $this->JackpotPrice[$premium_opt]){
		$this->printMessage("Not enough DM", true, array('game.php?page=jackpot', 3));
		die();
                }
                $USER['darkmatter'] -= $this->JackpotPrice[$premium_opt];
                $GLOBALS['DATABASE']->query("Update ".USERS." SET `jackpot` = `jackpot` + ".($premium_opt)." WHERE `id` = ".$USER['id']." ; ");
                $this->printMessage("You have bought x jackpot points", true, array('game.php?page=jackpot', 3));
                die();
                }
                }
                
                $a	     	= HTTP::_GP('code1', 0);
                $b	     	= HTTP::_GP('code2', 0);
                $c	     	= HTTP::_GP('code3', 0);
                $d = "$a$b$c";
                if ($act == "try") {
                if($USER['jackpot'] == 0){
                $this->printMessage("You dont have any jack pot attemps anymore", true, array('game.php?page=jackpot', 3));
                }
                    
                if($CONF['jackpot_code'] == $d ){
                $newcode = mt_rand(0,999);
                $USER['darkmatter'] += $CONF['jackpot_prize'];
                $GLOBALS['DATABASE']->query("Update `uni1_config` SET `jackpot_code` = ".$newcode." ; ");
                $GLOBALS['DATABASE']->query("Update ".USERS." SET `jackpot` = `jackpot` - 1 WHERE `id` = ".$USER['id']." ; ");
                $GLOBALS['DATABASE']->query("INSERT INTO `uni1_jackpot_logs` VALUES('".$USER['username']."','".TIMESTAMP."','".$CONF['jackpot_prize']."') ");
                $GLOBALS['DATABASE']->query("Update `uni1_config` SET `jackpot_prize` = 50000 ; ");
                $this->printMessage("You are the lucky winner of the jackpot", true, array('game.php?page=jackpot', 3));
                die();
                }elseif( $d + 30 > $CONF['jackpot_code'] && $CONF['jackpot_code'] > $d - 30){
                $GLOBALS['DATABASE']->query("Update ".USERS." SET `jackpot` = `jackpot` - 1 WHERE `id` = ".$USER['id']." ; ");
                $this->printMessage("Fails, You are very close (30 range)", true, array('game.php?page=jackpot', 3));
                die();
                }else{
                if( $d > $CONF['jackpot_code'] || $d < $CONF['jackpot_code']){
                $GLOBALS['DATABASE']->query("Update ".USERS." SET `jackpot` = `jackpot` - 1 WHERE `id` = ".$USER['id']." ; ");
                $this->printMessage("Fails, ", true, array('game.php?page=jackpot', 3));
                die();
                }
                }
     
                
                }
                
                
                   
                   
                $this->tplObj->loadscript("jquery.countdown.js");
		$this->tplObj->assign_vars(
				array(
                                
                                'jackpot' => $CONF['jackpot_prize'],
                                'amount' => $USER['jackpot'],
                                'next_reset'	      => ((($CONF['jackpot_update1'] +24*60*60) < TIMESTAMP) ? true : (($CONF['jackpot_update1']+24*60*60) - TIMESTAMP)),
                                'prices' => $this->JackpotPrice,
                                            )
		);
		$this->display("page.jackpot.default.tpl");
	}
}
