<?php

class ShowRelocatePage extends AbstractPage
{
	public static $requireModule = 0;

	function __construct() 
	{
		parent::__construct();
	
	}
	
	function show() 
	{
		global $USER, $PLANET, $LNG, $LANG;

        $mode = HTTP::_GP('mode', '');
		
		
		$this->display('page.relocate.default.tpl');
	}
	
function pack1(){
	global $USER, $PLANET, $LNG, $reslist, $resource;	
	
		$galaxy  			= HTTP::_GP('galaxy', '');
		$system   			= HTTP::_GP('system', '');
		$planet   			= HTTP::_GP('planet', '');
		$maxgalaxy          = Config::get('max_galaxy');
        $maxsystem          = Config::get('max_system');
        $maxplanet          = Config::get('max_planets');		

    if ($maxgalaxy < $galaxy || $galaxy == 0 || $galaxy < 0) {
 	$this->printMessage(sprintf('error galaxy'), "?page=overview", 3);
    }elseif($maxsystem < $system || $system == 0 || $system < 0) {
 	$this->printMessage(sprintf('error system'), "?page=overview", 3);
    }elseif($maxplanet < $planet || $planet == 0 || $planet < 0) {
 	$this->printMessage(sprintf('error planet'), "?page=overview", 3);
    }else{
    if($USER['darkmatter'] >= 50000) {
    $Control    = $GLOBALS['DATABASE']->countquery("SELECT COUNT(*) FROM ".PLANETS." WHERE `galaxy` = '".$galaxy."' AND `system` = '".$system."' AND `planet` = '".$planet."';");

   $qry = $GLOBALS['DATABASE']->query("SELECT * FROM ".FLEETS." WHERE `fleet_start_id` = '".$PLANET['id']."' OR `fleet_end_id` = '".$PLANET['id']."'".($PLANET['id_luna'] != 0 ? " OR `fleet_start_id` = '".$PLANET['id_luna']."' OR `fleet_start_id` = '".$PLANET['id_luna']."'":"").";");

    $ATTACK = $GLOBALS['DATABASE']->fetch_array($qry);
        if($ATTACK['fleet_owner'] == $USER['id'] OR $ATTACK['fleet_target_owner'] == $USER['id']){
        $this->printMessage(sprintf('<a href="?page=overview">You cant move while fleet missions are on this planet</a>'), "?page=overview", 3);
        exit();
        }
		
if($Control == 0 && $PLANET['planet_type'] == 1){
    $GLOBALS['DATABASE']->multi_query("UPDATE ".PLANETS." SET `galaxy` = '".$galaxy."' , `system` = '".$system."' , `planet` = '".$planet."' WHERE `id` = '".$PLANET['id']."'; UPDATE ".PLANETS." SET`galaxy` = '".$galaxy."',`system` = '".$system."' , `planet` = '".$planet."' WHERE `id` = '".$PLANET['id_luna']."'; ");
	$USER['darkmatter']	-= 50000;
$this->printMessage(sprintf('was changed'), "?page=overview", 3);
}else{
$this->printMessage(sprintf('<a href="?page=overview">You can relocate only planets, if at coordinates is already a planet you cant move there!</a>'), "?page=overview", 3);
 }
 } else {
            $this->printMessage(sprintf('<a href="?page=overview">You need 50k Dark Matter to move the planet!</a>'), "?page=overview", 3);
        }
        }

 
}


function pack2(){
	global $USER, $PLANET, $LNG, $reslist, $resource;	
	
if($PLANET['planet_type'] == 1 && $PLANET['id_luna'] == 0){	
require_once(ROOT_PATH.'includes/functions/CreateOneMoonRecord.php');
$a = mt_rand(10000, 12000);
$u_have_moon = CreateOneMoonRecord($PLANET['galaxy'], $PLANET['system'], $PLANET['planet'], $PLANET['universe'], $USER['id'],'', 'Moon', '', $a);
    $USER['darkmatter']	-= 25000;
 
	$this->printMessage(sprintf('<a href="?page=shop">You have created a moon over this planet!</a>'), "?page=shop", 1);
    exit;    
   }
   elseif($PLANET['planet_type'] == 3 || $PLANET['id_luna'] == 1){
 	$this->printMessage(sprintf('<a href="?page=shop">You cant create moon on a moon and you cant have more then 1 / planet</a>'), "?page=shop", 1);
 exit; 
	} 
    
   elseif($USER['darkmatter'] <25000){
 	$this->printMessage(sprintf('<a href="?page=shop">You need 25.000 Dark Matter!</a>'), "?page=shop", 3);
 exit;    
}		
	
}	


function pack3(){
	global $USER, $PLANET, $LNG, $reslist, $resource;	
	
if($USER['darkmatter'] >= 30000){	

    $USER['darkmatter']	-= 30000;
	$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET `field_max`=field_max+1000 WHERE id = ".$PLANET['id'].";");
 
	$this->printMessage(sprintf('<a href="?page=shop">Your Planet/Moon has 1000 fields more!</a>'), "?page=shop", 3);
    exit;    
   }
   elseif($PLANET['planet_type'] == 3){
 	$this->printMessage(sprintf('<a href="?page=shop">You cant activate this bonus on a moon!</a>'), "?page=shop", 3);
 exit;    
}	   
   elseif($USER['darkmatter'] <30000){
 	$this->printMessage(sprintf('<a href="?page=shop">You need more Dark Matter</a>'), "?page=shop", 3);
 exit;    
}		
	
}
	
function pack4(){
	global $USER, $PLANET, $LNG, $reslist, $resource;	
	
if($USER['darkmatter'] >= 45000){	

    $USER['darkmatter']	-= 45000;
	$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET `metal`=metal+100000000 WHERE id = ".$PLANET['id'].";");
 
	$this->printMessage(sprintf('<a href="?page=shop">You have buyed 100mil Metal</a>'), "?page=shop", 3);
    exit;    
   }
   elseif($USER['darkmatter'] <45000){
 	$this->printMessage(sprintf('<a href="?page=shop">You need more Dark Matter</a>'), "?page=shop", 3);
 exit;    
}		
	
}
function pack5(){
	global $USER, $PLANET, $LNG, $reslist, $resource;	
	
if($USER['darkmatter'] >= 45000){	

    $USER['darkmatter']	-= 45000;
	$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET `crystal`=crystal+90000000 WHERE id = ".$PLANET['id'].";");
 
	$this->printMessage(sprintf('<a href="?page=shop">You have buyed 90mil Crystal</a>'), "?page=shop", 3);
    exit;    
   }
   elseif($USER['darkmatter'] <45000){
 	$this->printMessage(sprintf('<a href="?page=shop">You need more Dark Matter</a>'), "?page=shop", 3);
 exit;    
}		
	
}
function pack6(){
	global $USER, $PLANET, $LNG, $reslist, $resource;	
	
if($USER['darkmatter'] >= 45000){	

    $USER['darkmatter']	-= 45000;
	$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET `deuterium`=deuterium+80000000 WHERE id = ".$PLANET['id'].";");
	$this->printMessage(sprintf('<a href="?page=shop">You have buyed 80mil Deuterium</a>'), "?page=shop", 3);
    exit;    
   }
   elseif($USER['darkmatter'] <45000){
 	$this->printMessage(sprintf('<a href="?page=shop">You need more Dark Matter</a>'), "?page=shop", 3);
 exit;    
}		
	
}
function pack7(){
	global $USER, $PLANET, $LNG, $reslist, $resource;	
	
if($PLANET['planet_type'] == 3){	

    $USER['darkmatter']	-= 20000;
	$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET `sprungtor`=sprungtor+1 WHERE id = ".$PLANET['id'].";");
	$this->printMessage(sprintf('<a href="?page=shop">You have buyed 1 StarGame!</a>'), "?page=shop", 3);
    exit;    
   }
   elseif($USER['darkmatter'] <20000){
 	$this->printMessage(sprintf('<a href="?page=shop">You need more Dark Matter</a>'), "?page=shop", 3);
 exit;    
}		
	
}
	


function pack8(){
	global $USER, $PLANET, $LNG, $reslist, $resource;	
	
if($USER['darkmatter'] >= 125000 && $PLANET['planet_type'] == 1){	

    $USER['darkmatter']	-= 125000;
	$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET `small_laser`=small_laser+125000 WHERE id = ".$PLANET['id'].";");
	$this->printMessage(sprintf('<a href="?page=shop">You have buyed 125.000 Light Lasers!</a>'), "?page=shop", 3);
    exit;    
   }
   elseif($USER['darkmatter'] <125000 || $PLANET['planet_type'] == 3){
 	$this->printMessage(sprintf('<a href="?page=shop">You need more Dark Matter and you cant activate this on a moon!</a>'), "?page=shop", 3);
 exit;    
}		
	
}
	
}
?>


