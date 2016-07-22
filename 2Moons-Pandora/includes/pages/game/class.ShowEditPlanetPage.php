<?php
/*
* Autore : Giogio, Modified by gooman93    
* Versione : 0.2
* Revisione : 0.0.2
* Funzione : Gestione cambio coordinate e immagine pianeta e spazzi ;)
*/  

//Pagina generale

class ShowEditPlanetPage extends AbstractPage
{
	function __construct() 
	{
		global $USER, $PLANET, $LNG, $UNI, $CONF;
		parent::__construct();
		$mode = HTTP::_GP('mode', '');
		switch($mode){
			case 'index':
			default:
				$this->tplObj->assign_vars(array(
					'Descr'					=> $LNG['pl_text_fiel'],
					'Campi'        			=> $LNG['pl_text_fiel_x'],
					'Field'					=> CalculateMaxPlanetFields($PLANET),
					'Buy'        			=> $LNG['pl_change_price'],
					'Change'    			=> $LNG['pl_change'],
					'Send'        			=> $LNG['pl_send'],
					'descr_field' 			=> $LNG['pl_descr_field'],
					'Change_img'    		=> $LNG['pl_change_img'],
					'Change_pla'    		=> $LNG['pl_change_pla'],
					'Change_img_desc' 		=> $LNG['pl_change_img_desc'],
					'Change_planet'   		=> $LNG['pl_change_planet'],
					'Change_planet_desc' 	=> $LNG['pl_change_planet_desc'],
					'dark'					=> $LNG['Dar'],
			));
				$this->display("default.tpl");
			break;
			
			case'field':
				$sk = HTTP::_GP('sk', '');
				if($sk == 'change') {
					if($USER['darkmatter']>=1000) { 
						$SQL  = "UPDATE ".USERS." SET ";
						$SQL .= "`darkmatter` = '1000' ";
						$SQL .= "WHERE ";
						$SQL .= "`id` = '". $USER['id'] ."'";
						$GLOBALS['DATABASE']->query($SQL);
						$USER['darkmatter'] -= 1000;
						$GLOBALS['DATABASE']->multi_query("UPDATE `".USERS."` SET `darkmatter`=".$USER['darkmatter']."-1000 WHERE `id`='".$USER['id']. "';
							UPDATE `".PLANETS."` SET `field_max`=field_max+25 WHERE `id` = '".$PLANET['id']."';
							");
						$this->printMessage("Planetenfelder um 25 angehoben.", true, array(
							"game.php?page=editPlanet",
							3)
						);
					}else{
						$this->printMessage("Du brauchst mindestens 1000 einheiten Dunkle Materie!",  true, array("game.php?page=editPlanet", 3));
					}       
				}
			break;
			
			case'image':
				//incoming
				$sk = HTTP::_GP('sk', '');
				if($sk == 'change') {
					if($USER['darkmatter']>=10) { 
						$edit = HTTP::_GP('planetimage', '');
						$USER['darkmatter'] -= 10;
						$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `darkmatter` = darkmatter - 10 WHERE id=".$USER['id'].";");
						$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET `image` = '".$GLOBALS['DATABASE']->sql_escape($edit)."' WHERE `id` = '".$PLANET['id']."';");            
						$this->printMessage("Bild ge&auml;ndert", true, array("game.php?page=editPlanet", 3));
					}else{
						$this->printMessage("Du brauchst mindestens 10 einheiten Dunkle Materie", true, array("game.php?page=editPlanet", 3));
					}
				}elseif($sk=="shows"){
					$this->tplObj->assign_vars(array(
						'Change' =>$LNG['pl_change_img'],
					));
					$this->display("Edit_img.tpl");
				}
			break;
			
			case'coord':
				$galaxy= HTTP::_GP('galaxy', '');
				$system= HTTP::_GP('system', '');
				$planet= HTTP::_GP('planet', '');
			 
				if ($CONF['max_galaxy'] < $galaxy || $galaxy == 0 || $galaxy < 0) {
					$this->printMessage("errore galaxy", true, array("game.php?page=editPlanet", 3));
				}elseif($CONF['max_system'] < $system || $system == 0 || $system < 0) {
					$this->printMessage("errore system", true, array("game.php?page=editPlanet", 3));
				}elseif($CONF['max_planets'] < $planet || $planet == 0 || $planet < 0) {
					$this->printMessage("errore planet", true, array("game.php?page=editPlanet", 3));
				}else{
					if($USER['darkmatter']>=50000) {
						$USER['darkmatter'] -= 50000;
						$Controllo = $GLOBALS['DATABASE']->countquery("SELECT COUNT(*) FROM ".PLANETS." WHERE `galaxy` = '".$galaxy."' AND `system` = '".$system."' AND `planet` = '".$planet."';");
						//Flottenbewegung?
						$qry = $GLOBALS['DATABASE']->query("SELECT * FROM ".FLEETS." WHERE `fleet_start_id` = '".$PLANET['id']."' OR `fleet_end_id` = '".$PLANET['id']."'".($PLANET['id_luna'] != 0 ? " OR `fleet_start_id` = '".$PLANET['id_luna']."' OR `fleet_start_id` = '".$PLANET['id_luna']."'":"").";");
		
						$ATTACK = $GLOBALS['DATABASE']->fetch_array($qry);
						if($ATTACK['fleet_owner'] == $USER['id'] OR $ATTACK['fleet_target_owner'] == $USER['id']){
							$this->printMessage("Derzeit nicht m&ouml;glich, da dein Planet in einer Flottenbewegung ist.", true, array("game.php?page=editPlanet", 3));
							exit();
						}
					if($Controllo == 0){
						$GLOBALS['DATABASE']->multi_query("UPDATE ".PLANETS." SET
								`galaxy` = '".$galaxy."',
								`system` = '".$system."',
								`planet` = '".$planet."' WHERE `id` = '".$PLANET['id']."';
							UPDATE ".PLANETS." SET
								`galaxy` = '".$galaxy."',
								`system` = '".$system."',
								`planet` = '".$planet."' WHERE `id` = '".$PLANET['id_luna']."';
							UPDATE ".USERS." SET
								`galaxy` = '".$galaxy."',
								`system` = '".$system."',
								`planet` = '".$planet."',
								`darkmatter` = darkmatter - 50000 WHERE `id` = '".$USER['id']."';
							UPDATE ".CONFIG." SET
								`LastSettedGalaxyPos` ='".$galaxy."',
								`LastSettedSystemPos` = '".$system."',
								`LastSettedPlanetPos` = '".$planet."' WHERE `uni` = '".$UNI['id']."';");
			 			$this->printMessage("Koordinaten ge&auml;ndert.", true, array("game.php?page=editPlanet", 3));
					}else{
		 				$this->printMessage("Die gew&auml:hlten Koordinaten sind bereits in benutzung.",  true,array("game.php?page=editPlanet", 3));
		 			}
				}else{
					$this->printMessage("Du brauchst mindestens 50.000 einheiten Dunkle Materie", true, array("game.php?page=editPlanet", 3));
				}
			}
			break;
			$this->tplObj->assign_vars(array(
					'transcoast'			=> $transcoasts,
			));
		}
	}
}
?>