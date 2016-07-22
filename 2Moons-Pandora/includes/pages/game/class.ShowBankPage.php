<?php

class ShowBankPage extends AbstractPage 
{
	
	public static $requireModule = MODULE_SUPPORT;
	

	function __construct() 
	{
		parent::__construct();
		
	}
		
function show()

{

	global $USER, $PLANET, $LNG, $CONF, $reslist, $resource;

	$transCoasts	= 200;
	$maxStorage		= pow($PLANET['bank'],4) * 1000 * $CONF['resource_multiplier'];
    $freeStorage	= $maxStorage - $PLANET['bankm'] - $PLANET['bankc'] - $PLANET['bankd'];

			

			$this->tplObj->assign_vars(array(	
				'bankm'			=> $PLANET['bankm'],
				'bankc'			=> $PLANET['bankc'],
				'bankd'			=> $PLANET['bankd'],
				'transCoast'	=> $transCoasts,
				'maxStorage'	=> $maxStorage,
				'freeStorage'	=> $freeStorage,
				'bank'				=> $LNG['bank'],
				'bank_info'			=> $LNG['bank_info'],
				'bank_transCoast'	=> $LNG['bank_transCoast'],
				'bank_tcShort'		=> $LNG['bank_tcShort'],
				'bank_ress'			=> $LNG['bank_ress'],
				'bank_storage'		=> $LNG['bank_storage'],
				'bank_ressm'		=> $LNG['bank_ressm'],
				'bank_ressc'		=> $LNG['bank_ressc'],
				'bank_ressd'		=> $LNG['bank_ressd'],
				'bank_choice'		=> $LNG['bank_choice'],
				'bank_in'			=> $LNG['bank_in'],
				'bank_out'			=> $LNG['bank_out'],

			));

			$this->display('bank_overview.tpl');
}


function in()
	{
		global $USER, $PLANET, $LNG, $CONF, $reslist, $resource;
		$transCoasts	= 200;
		$maxStorage		= pow($PLANET['bank'],4) * 1000 * $CONF['resource_multiplier'];
		$freeStorage	= $maxStorage - $PLANET['bankm'] - $PLANET['bankc'] - $PLANET['bankd'];
		$action     	= HTTP::_GP('action', '');
		if ($USER['darkmatter'] < $transCoasts) {
			$this->redirectTo('game.php?page=bank');
		}
		
		
		
		
			$pMet			= $PLANET['metal'];
			$pCrys			= $PLANET['crystal'];
			$pDeut			= $PLANET['deuterium'];
	

			if ($action == 'in'){

				$bMet 				= max(0, round(HTTP::_GP('metal', 0.0)));
				$bCrys				= max(0, round(HTTP::_GP('kryst', 0.0)));
				$bDeut				= max(0, round(HTTP::_GP('deuta', 0.0)));
				$totalRess			= $bMet + $bCrys + $bDeut;

				

				if($bMet < '0'){$this->printMessage($LNG['error_1'], true, array('game.php?page=logout', 2));}
				elseif($bCrys < '0'){$this->printMessage($LNG['error_1'], true, array('game.php?page=logout', 2));}
				elseif($bDeut < '0'){$this->printMessage($LNG['error_1'], true, array('game.php?page=logout', 2));}
				elseif($bMet == '0' && $bCrys == '0' && $bDeut == '0'){$this->printMessage($LNG['error_2'], true, array('game.php?page=bank', 2));}
				elseif($bMet > $PLANET['metal']){$this->printMessage($LNG['error_in_1'], true, array('game.php?page=bank', 2));}
				elseif($bCrys > $PLANET['crystal']){$this->printMessage($LNG['error_in_2'], true, array('game.php?page=bank', 2));}
				elseif($bDeut > $PLANET['deuterium']){$this->printMessage($LNG['error_in_3'], true, array('game.php?page=bank', 2));}
				elseif($transCoasts > $USER['darkmatter']){$this->printMessage($LNG['error_3'], true, array('game.php?page=bank', 2));}
				elseif($freeStorage < $totalRess){$this->printMessage('Brak wystarczającej ilości miejsca.', true, array('game.php?page=bank', 2));}

				else{
                    $PLANET[$resource[901]]	-= $bMet;
                    $PLANET[$resource[902]]	-= $bCrys;
                    $PLANET[$resource[903]]	-= $bDeut;
					$USER[$resource[921]]	-= $transCoasts;
					$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET
                        bankm = bankm + $bMet,
                        bankc = bankc + $bCrys,
                        bankd = bankd + $bDeut 
                    WHERE id = ".$PLANET['id'].";");

					$this->printMessage( 'Du hast gerade '. $bMet .' Trinium, '. $bCrys .' Naquada und '. $bDeut .' Naquadria eingezahlt', true, array('game.php?page=bank', 2));

				}
			}			


			$this->tplObj->assign_vars(array(	
				'transCoast'		=> $transCoasts,
				'bankm'				=> $PLANET['bankm'],
				'bankc'				=> $PLANET['bankc'],
				'bankd'				=> $PLANET['bankd'],
				'maxStorage'		=> $maxStorage,
				'freeStorage'		=> $freeStorage,
				'bank_ress'			=> $LNG['bank_ress'],
				'bank_transCoast'	=> $LNG['bank_transCoast'],
				'bank_tcShort'		=> $LNG['bank_tcShort'],
				'bank_storage'		=> $LNG['bank_storage'],
				'bank_ressm'		=> $LNG['bank_ressm'],
				'bank_ressc'		=> $LNG['bank_ressc'],
				'bank_ressd'		=> $LNG['bank_ressd'],
				'bank_in_header'	=> $LNG['bank_in_header'],
				'bank_in_info'		=> $LNG['bank_in_info'],
				'bank_in'			=> $LNG['bank_in'],

			));

			$this->display('bank_in.tpl');
	}
function out()
{
	global $USER, $PLANET, $LNG, $CONF, $reslist, $resource;
		$transCoasts	= 0;
		$maxStorage		= pow($PLANET['bank'],4) * 1000 * $CONF['resource_multiplier'];
		$freeStorage	= $maxStorage - $PLANET['bankm'] - $PLANET['bankc'] - $PLANET['bankd'];
		$action     	= HTTP::_GP('action', '');
		if ($USER['darkmatter'] < $transCoasts) {
			$this->redirectTo('game.php?page=bank');
		}
		
			$pMet		= $PLANET['bankm'];
			$pCrys		= $PLANET['bankc'];
			$pDeut		= $PLANET['bankd'];
			$transCoasts	= 0;
		

			if ($action == 'out') {		

				$bMet 				= max(0, round(HTTP::_GP('metal', 0.0)));
				$bCrys				= max(0, round(HTTP::_GP('kryst', 0.0)));
				$bDeut				= max(0, round(HTTP::_GP('deuta', 0.0)));

				if($bMet < '0'){$this->printMessage($LNG['error_1'], true, array('game.php?page=logout', 2));}
				elseif($bCrys < '0'){$this->printMessage($LNG['error_1'], true, array('game.php?page=logout', 2));}
				elseif($bDeut < '0'){$this->printMessage($LNG['error_1'], true, array('game.php?page=logout', 2));}
				elseif($bMet == '0' && $bCrys == '0' && $bDeut == '0'){$this->printMessage($LNG['error_2'], true, array('game.php?page=bank', 2));}
				elseif($bMet > $pMet){$this->printMessage($LNG['error_out_1'], true, array('game.php?page=bank', 2));}
				elseif($bCrys > $pCrys){$this->printMessage($LNG['error_out_2'], true, array('game.php?page=bank', 2));}
				elseif($bDeut > $pDeut){$this->printMessage($LNG['error_out_3'], true, array('game.php?page=bank', 2));}
				elseif($transCoasts > $USER['darkmatter']){$this->printMessage($LNG['error_3'], true, array('game.php?page=bank', 2));}

				else{
					 $PLANET[$resource[901]]	+= $bMet;
                    $PLANET[$resource[902]]	+= $bCrys;
                    $PLANET[$resource[903]]	+= $bDeut;
					$USER[$resource[921]]	-= $transCoasts;
					$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET
                        bankm = bankm - $bMet,
                        bankc = bankc - $bCrys,
                        bankd = bankd - $bDeut 
                    WHERE id = ".$PLANET['id'].";");
					$this->printMessage( 'Es wurde '. $bMet .' Trinium, '. $bCrys .' Naquada und '. $bDeut .' Naquadria ausgezahlt.', true, array('game.php?page=bank', 2));
				}

			}

			$this->tplObj->assign_vars(array(	
				'bankm'				=> $PLANET['bankm'],
				'bankc'				=> $PLANET['bankc'],
				'bankd'				=> $PLANET['bankd'],
				'bank_ress'			=> $LNG['bank_ress'],
				'bank_ressm'		=> $LNG['bank_ressm'],
				'bank_ressc'		=> $LNG['bank_ressc'],
				'bank_ressd'		=> $LNG['bank_ressd'],
				'bank_out_header'	=> $LNG['bank_out_header'],
				'bank_out'			=> $LNG['bank_out'],
			));

			$this->display('bank_out.tpl');	
}
	

	


	

 
}
?>
