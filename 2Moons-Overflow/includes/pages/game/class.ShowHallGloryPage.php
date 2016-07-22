<?php

class ShowHallGloryPage extends AbstractPage
{
public static $requireModule = 0;

function __construct() 
{
parent::__construct();
}

public function show()
{
global $USER, $CONF, $PLANET, $resource, $reslist, $LNG, $pricelist;

$Complete  = HTTP::_GP('completeID', '', UTF8_SUPPORT);
$Sell  = HTTP::_GP('sellID', '', UTF8_SUPPORT);


############ VMode Protection

if( $USER['urlaubs_modus'] == 1){
$this->printMessage('If you desire to use Black Market Shop, please verify if your account is allowed play. Disable Vacation Mode on Settings Page and then, try again!',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

############ START OF COLLECTION TEST PREVIEW
### ALTER TABLE uni1_users ADD hog_piece_1 int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD hog_piece_1_1 int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD hog_piece_1_2 int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD hog_piece_1_3 int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD hog_piece_1_4 int(11) NOT NULL DEFAULT '0';
############

$Piece_1_1 = $USER['hog_piece_1_1'];
$Piece_1_1_Metal = $Piece_1_1 * 0;
$Piece_1_1_Crystal = $Piece_1_1 * 0;
$Piece_1_1_Deuterium = $Piece_1_1 * 2000000000000;
$Piece_1_1_DarkMatter = $Piece_1_1 * 1;
$Piece_1_2 = $USER['hog_piece_1_2'];
$Piece_1_2_Metal = $Piece_1_2 * 0;
$Piece_1_2_Crystal = $Piece_1_2 * 0;
$Piece_1_2_Deuterium = $Piece_1_2 * 1000000000000;
$Piece_1_2_DarkMatter = $Piece_1_2 * 1;
$Piece_1_3 = $USER['hog_piece_1_3'];
$Piece_1_3_Metal = $Piece_1_3 * 0;
$Piece_1_3_Crystal = $Piece_1_3 * 0;
$Piece_1_3_Deuterium = $Piece_1_3 * 1000000000000;
$Piece_1_3_DarkMatter = $Piece_1_3 * 0;
$Piece_1_4 = $USER['hog_piece_1_4'];
$Piece_1_4_Metal = $Piece_1_4 * 0;
$Piece_1_4_Crystal = $Piece_1_4 * 0;
$Piece_1_4_Deuterium = $Piece_1_4 * 1000000000000;
$Piece_1_4_DarkMatter = $Piece_1_4 * 0;

// Piece 1-1 Sell Piece
if($Sell == '1-1' && $USER['hog_piece_1_1'] >= 1){
$USER['darkmatter'] += $Piece_1_1_DarkMatter;
$PLANET['metal'] +=$Piece_1_1_Metal;
$PLANET['crystal'] += $Piece_1_1_Crystal;
$PLANET['deuterium'] += $Piece_1_1_Deuterium;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `hog_piece_1_1` = 0 WHERE `id` = '".$USER['id']."' ;");

$this->printMessage("You sold your pieces!","?page=hallofglory",2);
exit;  

}elseif($USER['hog_piece_1_1'] < 1 && $Sell == '1-1'){
$this->printMessage("You do not have pieces to trade",  true, array("game.php?page=hallGlory", 1));           
exit;         
}

// Piece 1-2 Sell Piece
if($Sell == '1-2' && $USER['hog_piece_1_2'] >= 1){
$USER['darkmatter'] += $Piece_1_2_DarkMatter;
$PLANET['metal'] +=$Piece_1_2_Metal;
$PLANET['crystal'] += $Piece_1_2_Crystal;
$PLANET['deuterium'] += $Piece_1_2_Deuterium;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `hog_piece_1_2` = 0 WHERE `id` = '".$USER['id']."' ;");

$this->printMessage("You sold your pieces!","?page=hallofglory",2);
exit;  

}elseif($USER['hog_piece_1_2'] < 1 && $Sell == '1-2'){
$this->printMessage("You do not have pieces to trade",  true, array("game.php?page=hallGlory", 1));           
exit;         
}

// Piece 1-3 Sell Piece
if($Sell == '1-3' && $USER['hog_piece_1_3'] >= 1){
$USER['darkmatter'] += $Piece_1_3_DarkMatter;
$PLANET['metal'] +=$Piece_1_3_Metal;
$PLANET['crystal'] += $Piece_1_3_Crystal;
$PLANET['deuterium'] += $Piece_1_3_Deuterium;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `hog_piece_1_3` = 0 WHERE `id` = '".$USER['id']."' ;");

$this->printMessage("You sold your pieces!","?page=hallofglory",2);
exit;  

}elseif($USER['hog_piece_1_3'] < 1 && $Sell == '1-3'){
$this->printMessage("You do not have pieces to trade",  true, array("game.php?page=hallGlory", 1));           
exit;         
}

// Piece 1-4 Sell Piece
if($Sell == '1-4' && $USER['hog_piece_1_4'] >= 1){
$USER['darkmatter'] += $Piece_1_4_DarkMatter;
$PLANET['metal'] += $Piece_1_4_Metal;
$PLANET['crystal'] += $Piece_1_4_Crystal;
$PLANET['deuterium'] += $Piece_1_4_Deuterium;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `hog_piece_1_4` = 0 WHERE `id` = '".$USER['id']."' ;");

$this->printMessage("You sold your pieces!","?page=hallofglory",2);
exit;  

}elseif($USER['hog_piece_1_4'] == 0 && $Sell == '1-4'){
$this->printMessage("You do not have pieces to trade",  true, array("game.php?page=hallGlory", 1));           
exit;         
}


// Piece 1 Complete
if($Complete == '1' && $USER['hog_piece_1'] == 0 && $USER['hog_piece_1_1'] >= 1 && $USER['hog_piece_1_2'] >= 1 && $USER['hog_piece_1_3'] >= 1 && $USER['hog_piece_1_4'] >= 1){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `hog_piece_1` = 1 WHERE `id` = ".$USER['id'].";");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `hog_piece_1_1` = `hog_piece_1_1` - 1 WHERE `id` = ".$USER['id'].";");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `hog_piece_1_2` = `hog_piece_1_2` - 1  WHERE `id` = ".$USER['id'].";");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `hog_piece_1_3` = `hog_piece_1_3` - 1  WHERE `id` = ".$USER['id'].";");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `hog_piece_1_4` = `hog_piece_1_4` - 1  WHERE `id` = ".$USER['id'].";");
$USER['darkmatter'] += 0;
$this->printMessage("You completed this set",  true, array("game.php?page=hallGlory", 1));           
}elseif($USER['hog_piece_1'] == 1 && $Complete == '1'){
$this->printMessage("You do not have all requirements",  true, array("game.php?page=hallGlory", 1));           
exit;         
}

// Piece_1_0
if($USER['hog_piece_1'] == 0)
	$Piece_1_0 = '<a href="?page=hallGlory&completeID=1" class="tooltip" data-tooltip-content="<p align=left>This will make you complete the <font color=#5E98D9><b>Test Collection</b></font>, and you will recieve as reward nothing"><input data-tooltip-content="action" value="Purchase" type="submit"></a>';
else
	$Piece_1_0 = '<font color=red><b>You finished this set</b></font>';

// Piece_1_1 Image
if($USER['hog_piece_1_1'] >= 1)
	$Piece_1_1_Image = '<img border="1" src="styles/hallofglory/1_1.png" align="top" width="120" height="120" class="tooltip" data-tooltip-content="
<p align=left><font color=#5E98D9><b>Test 1</b></font> - The Aurora Station uses the name ´Aurora´ due to the lights usually apaers in this area. It is a special station it allows convert little quantities of Dark Matter to huge quantities of Deuterium.
<br><br>">';
else
	$Piece_1_1_Image = '<img border="1" src="styles/hallofglory/1_1_locked.png" align="top" width="120" height="120" class="tooltip" data-tooltip-content="
<p align=left><font color=#5E98D9><b>Test 1</b></font> - The Aurora Station uses the name ´Aurora´ due to the lights usually apaers in this area. It is a special station it allows convert little quantities of Dark Matter to huge quantities of Deuterium.
<br><br>">';

// Piece_1_2 Image
if($USER['hog_piece_1_2'] >= 1)
	$Piece_1_2_Image = '<img border="1" src="styles/hallofglory/1_2.png" align="top" width="120" height="120" class="tooltip" data-tooltip-content="
<p align=left><font color=#5E98D9><b>Test 2</b></font> - The Freeze Station has been left from the scientists to the new conceptual station called Aurora. We believe there can contain hidden projects
<br><br>">';
else
	$Piece_1_2_Image = '<img border="1" src="styles/hallofglory/1_2_locked.png" align="top" width="120" height="120" class="tooltip" data-tooltip-content="
<p align=left><font color=#5E98D9><b>Test 2</b></font> - The Freeze Station has been left from the scientists to the new conceptual station called Aurora. We believe there can contain hidden projects
<br><br>">';

// Piece_1_3 Image
if($USER['hog_piece_1_3'] >= 1)
	$Piece_1_3_Image = '<img border="1" src="styles/hallofglory/1_3.png" align="top" width="120" height="120" class="tooltip" data-tooltip-content="
<p align=left><font color=#5E98D9><b>Test 3</b></font> - The Crystalizated Deuterium Plant is a plant produces massive Deuterium, then if we stole that projects, we can study how they produce this huges amount and in future, take all of our battleships to the biggest wars
<br><br>">';
else
	$Piece_1_3_Image = '<img border="1" src="styles/hallofglory/1_3_locked.png" align="top" width="120" height="120" class="tooltip" data-tooltip-content="
<p align=left><font color=#5E98D9><b>Test 3</b></font> - The Crystalizated Deuterium Plant is a plant produces massive Deuterium, then if we stole that projects, we can study how they produce this huges amount and in future, take all of our battleships to the biggest wars
<br><br>">';

// Piece_1_4 Image
if($USER['hog_piece_1_4'] >= 1)
	$Piece_1_4_Image = '<img border="1" src="styles/hallofglory/1_4.png" align="top" width="120" height="120" class="tooltip" data-tooltip-content="
<p align=left><font color=#FFFFFF><b>Test 4</b></font> - The Test 4 is foundable in all planets, it is required to produce new features to your empire
<br><br>">';
else
	$Piece_1_4_Image = '<img border="1" src="styles/hallofglory/1_4_locked.png" align="top" width="120" height="120" class="tooltip" data-tooltip-content="
<p align=left><font color=#FFFFFF><b>Test 4</b></font> - The Test 4 is foundable in all planets, it is required to produce new features to your empire
<br><br>">';
    

##################### END OF COLLECTION TEST PREVIEW!
##############################################################################
##############################################################################


############ Template

$this->tplObj->assign_vars(array(

############ Test ID
	'Piece_1_0'	=> $Piece_1_0,
	'Piece_1_1'	=> $Piece_1_1,
	'Piece_1_1_Image'	=> $Piece_1_1_Image,
	'Piece_1_1_Metal'	=> shortly_number($Piece_1_1_Metal),
	'Piece_1_1_Crystal'	=> shortly_number($Piece_1_1_Crystal),
	'Piece_1_1_Deuterium'	=> shortly_number($Piece_1_1_Deuterium),
	'Piece_1_1_DarkMatter'	=> shortly_number($Piece_1_1_DarkMatter),
	'Piece_1_2'	=> $Piece_1_2,
	'Piece_1_2_Image'	=> $Piece_1_2_Image,
	'Piece_1_2_Metal'	=> shortly_number($Piece_1_2_Metal),
	'Piece_1_2_Crystal'	=> shortly_number($Piece_1_2_Crystal),
	'Piece_1_2_Deuterium'	=> shortly_number($Piece_1_2_Deuterium),
	'Piece_1_2_DarkMatter'	=> shortly_number($Piece_1_2_DarkMatter),
	'Piece_1_3'	=> $Piece_1_3,
	'Piece_1_3_Image'	=> $Piece_1_3_Image,
	'Piece_1_3_Metal'	=> shortly_number($Piece_1_3_Metal),
	'Piece_1_3_Crystal'	=> shortly_number($Piece_1_3_Crystal),
	'Piece_1_3_Deuterium'	=> shortly_number($Piece_1_3_Deuterium),
	'Piece_1_3_DarkMatter'	=> shortly_number($Piece_1_3_DarkMatter),
	'Piece_1_4'	=> $Piece_1_4,
	'Piece_1_4_Image'	=> $Piece_1_4_Image,
	'Piece_1_4_Metal'	=> shortly_number($Piece_1_4_Metal),
	'Piece_1_4_Crystal'	=> shortly_number($Piece_1_4_Crystal),
	'Piece_1_4_Deuterium'	=> shortly_number($Piece_1_4_Deuterium),
	'Piece_1_4_DarkMatter'	=> shortly_number($Piece_1_4_DarkMatter),
));

$this->display('page.hallofglory.default.tpl');
}
}