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
					'Change_img_desc' 		=> $LNG['pl_change_img_desc'],
					'Change_planet'   		=> $LNG['pl_change_planet'],
					'Change_planet_desc' 	=> $LNG['pl_change_planet_desc'],
					'dark'					=> $LNG['Darkmatter'],
			));
				$this->display("page.planet.edit.default.tpl");
			break;
			
			case'field':
				$sk = HTTP::_GP('sk', '');
				if($sk == 'change') {
					if($USER['darkmatter']>=2000) { 
						$SQL  = "UPDATE ".USERS." SET ";
						$SQL .= "`darkmatter` = '2000' ";
						$SQL .= "WHERE ";
						$SQL .= "`id` = '". $USER['id'] ."'";
						$GLOBALS['DATABASE']->query($SQL);
						$USER['darkmatter'] -= 2000;
						$GLOBALS['DATABASE']->multi_query("UPDATE `".USERS."` SET `darkmatter`=".$USER['darkmatter']."-2000 WHERE `id`='".$USER['id']. "';
							UPDATE `".PLANETS."` SET `field_max`=field_max+25 WHERE `id` = '".$PLANET['id']."';
							");
						$this->printMessage("Planetenfelder um 25 angehoben.", true, array(
							"game.php?page=editPlanet",
							3)
						);
					}else{
						$this->printMessage("Du brauchst mindestens 2000 einheiten Dunkle Materie!",  true, array("game.php?page=editPlanet", 3));
					}       
				}
			break;
			
			case'image':
				//incoming
				$sk = HTTP::_GP('sk', '');
				if($sk == 'change') {
					if($USER['darkmatter']>=200) { 
						$edit = HTTP::_GP('planetimage', '');
						$USER['darkmatter'] -= 200;
						$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `darkmatter` = darkmatter - 200 WHERE id=".$USER['id'].";");
						$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET `image` = '".$GLOBALS['DATABASE']->sql_escape($edit)."' WHERE `id` = '".$PLANET['id']."';");            
						$this->printMessage("Bild ge&auml;ndert", true, array("game.php?page=editPlanet", 3));
					}else{
						$this->printMessage("Du brauchst mindestens 200 einheiten Dunkle Materie", true, array("game.php?page=editPlanet", 3));
					}
				}elseif($sk=="shows"){
					$this->tplObj->assign_vars(array(
						'Change' =>$LNG['pl_change_img'],
					));
					$this->display("page.planet.edit.image");
				}
			break;
			
		}
	}
}
/*
function ShowModPlanet(){

global $USER, $PLANET, $LNG, $db,$UNI,$CONF;
 $template   = new template();
    $modo = request_var('mode', '');
    switch($modo){
    
    case'index':
    default:
    $this->tplObj->assign_vars(array(
        'Descr'     => $LNG['pl_text_fiel'],
        'Campi'        =>$LNG['pl_text_fiel_x'],
        'Field' => CalculateMaxPlanetFields($PLANET),
        'Buy'        =>$LNG['pl_change_price'],
        'Change'    =>$LNG['pl_change'],
        'Send'        =>$LNG['pl_send'],
        'descr_field' => $LNG['pl_descr_field'],
        'Change_img'    =>$LNG['pl_change_img'],
        'Change_img_desc' =>$LNG['pl_change_img_desc'],
        'Change_planet'    => $LNG['pl_change_planet'],
        'Change_planet_desc' =>$LNG['pl_change_planet_desc'],
        'dark'        =>$LNG['Darkmatter'],
        ));
    $this->display("planet/default.tpl");
    break;
    
    case'field':
    $sk = request_var('sk', '');
    if($sk == 'change') {
        if($USER['darkmatter']>=1000) { 
            $edit = request_var('planetimage', '');
            $GLOBALS['DATABASE']->multi_query("UPDATE ".USERS." SET `darkmatter` = darkmatter - 1000 WHERE id=".$USER['id'].";UPDATE ".PLANETS." SET `field_max` =field_max + 25 WHERE `id` = '".$PLANET['id']."';");            
            $this->printMessage("Planetenfelder um 25 angehoben.", array("game.php?page=editPlanet", 3));
        } else {
            $this->printMessage("Du brauchst mindestens 1000 einheiten Dunkle Materie!", array("game.php?page=editPlanet", 3));
        }       
       }
    break;
    
    case'image':
    //incoming
    $sk = request_var('sk', '');
    if($sk == 'change') {
        if($USER['darkmatter']>=10) { 
            $edit = request_var('planetimage', '');
            $GLOBALS['DATABASE']->multi_query("UPDATE ".USERS." SET `darkmatter` = darkmatter - 10 WHERE id=".$USER['id'].";UPDATE ".PLANETS." SET `image` = '".$GLOBALS['DATABASE']->sql_escape($edit)."' WHERE `id` = '".$PLANET['id']."';");            
            $this->printMessage("Bild ge&auml;ndert", array("game.php?page=editPlanet", 3));
        } else {
            $this->printMessage("Du brauchst mindestens 10 einheiten Dunkle Materie", array("game.php?page=editPlanet", 3));
        }
       }elseif($sk=="shows"){
    $this->tplObj->assign_vars(array(
 'Change' =>$LNG['pl_change_img'],
 ));
        $this->display("planet/Edit_img.tpl");
       }
    break;
 
  } 
 }*/
?>