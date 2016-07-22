<?php

class ShowBetPage extends AbstractPage
{
         var $CreditPrice = array(10000=>10000,20000=>20000,30000=>30000,40000=>40000,50000=>50000); // (credits => price dm)    
         var $WidrawPrice = array(50000=>5,100000=>10,150000=>15,200000=>20); // (credits => price dm)    
	function __construct() 
	{
		parent::__construct();
	}
	
	function show(){
	
	global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
	
	
		$search_b = $GLOBALS['DATABASE']->query("SELECT *FROM `uni1_match` where `date` < ".(TIMESTAMP - 15 * 60)." AND bet_close = '-1' ;");
		if($GLOBALS['DATABASE']->numRows($search_b)>0 ){
		$GLOBALS['DATABASE']->query("UPDATE `uni1_match` SET bet_close = '1' WHERE `date` < ".(TIMESTAMP - 15 * 60)." ;");
		$this->printMessage("Loading Matches!", true, array('game.php?page=bet', 2));
		}	
	
	
		
		$status   = HTTP::_GP('status', '');
		 switch($status){
		
		
 case '':
		global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
		
        $controlevotes = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_match` WHERE bet_close = '-1' AND winner = '-1' AND date > ".(TIMESTAMP - 15 * 60).";");
		
		$surveillance = "";
		while($x = $GLOBALS['DATABASE']->fetch_array($controlevotes)){
		$details = "<a href='#' onclick='return Dialog.Match(".$x['id'].")';>
(Details)</a>";
		$surveillance .= "<tr><td>".date('d-m-Y - H:i:s',$x['date'])."</td><td>".$x['h_team']." Vs ".$x['v_team']." ".$details."</td></tr>";
		
		}
	
	
		$this->tplObj->assign_vars(
				array(
			 'liste'     => $surveillance,

                                        )
		);
		$this->display("page.bet.default.tpl");
		break;
		case 'opened':
		global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
		
		$controlevotes = $GLOBALS['DATABASE']->query("SELECT *FROM uni1_match_log WHERE id_owner = ".$USER['id']." AND finish = '-1'");

		$surveillance = "";
		while($x = $GLOBALS['DATABASE']->fetch_array($controlevotes)){
		$surveillance .= "<tr><td>".$x['h_name']." vs ".$x['v_name']."</td><td>".$x['money_spend']."</td><td>".$x['possible_win']."</td><td><span style='color:red;'>NOT FINISHED</span></td></tr>";
		}
	
	
		$this->tplObj->assign_vars(
				array(
			 'liste'     => $surveillance,

                                        )
		);
		$this->display("page.bet.opened.tpl");
		break;
		case 'closed':
		global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
		
       $controlevotes = $GLOBALS['DATABASE']->query("SELECT * FROM uni1_match_log WHERE id_owner = ".$USER['id']." AND FINISH = '1' AND winner != '-1'");
		$resultat = "";
		$surveillance = "";
		while($x = $GLOBALS['DATABASE']->fetch_array($controlevotes)){
		
		if($x['winner'] != $x['bet_for']){
		$resultat = '<font color="red">Lost</font>';
		}else{
		$resultat = '<font color="green">Won</font>';
		}
		$surveillance .= "<tr><td>".$x['h_name']." vs ".$x['v_name']."</td><td>".$x['money_spend']."</td><td>".$x['possible_win']."</td><td>".$resultat."</td></tr>";
		}
	
	
		$this->tplObj->assign_vars(
				array(
			 'liste'     => $surveillance,

                                        )
		);
		$this->display("page.bet.closed.tpl");
		break;
		case 'exchange':
		global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
		
		
			
	 
	
		$this->tplObj->assign_vars(
				array(
			 'bc' => pretty_number($USER['credits_bought']),
			 'wc' => pretty_number($USER['credits_won']),
			 'tc' => pretty_number($USER['credits_bought'] + $USER['credits_won']),
'prices' => $this->CreditPrice,
'prices1' => $this->WidrawPrice,
                                        )
		);
		$this->display("page.bet.exchange.tpl");
		break;
            
            
 }
	
		
	
		
	}
	}
