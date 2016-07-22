<?php

class ShowBlackMarketPage extends AbstractPage
{
public static $requireModule = 0;

function __construct() 
{
parent::__construct();
}

public function show()
{
global $USER, $CONF, $PLANET, $resource, $reslist, $LNG, $pricelist;

$this->tplObj->loadscript('jquery.countdown.js');
$BuildingID  = HTTP::_GP('buildingID', '', UTF8_SUPPORT);
$TechID  = HTTP::_GP('techID', '', UTF8_SUPPORT);
$MiscID  = HTTP::_GP('miscID', '', UTF8_SUPPORT);

############ VMode Protection

if( $USER['urlaubs_modus'] == 1){
$this->printMessage('If you desire to use Black Market Shop, please verify if your account is allowed play. Disable Vacation Mode on Settings Page and then, try again!',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

############ ID:1 Metal Mine
### ALTER TABLE uni1_users ADD bm_MetalMine_price int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_MetalMine_time int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_MetalMine_amount int(11) NOT NULL DEFAULT '0';
############

$MetalMineDM = $USER['bm_MetalMine_price'];
$MetalMinePurchased = $USER['bm_MetalMine_amount'];
$MetalMineNewPrice = $MetalMineDM * 2;

if( $BuildingID == '1' && $USER['darkmatter'] >= $MetalMineDM && $USER['bm_MetalMine_time'] < TIMESTAMP  && $PLANET['planet_type'] == 1){
$USER['darkmatter'] -= $MetalMineDM;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET bm_MetalMine_price= '".$MetalMineNewPrice."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_MetalMine_time` = '".(TIMESTAMP + 108000)."' WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_MetalMine_amount` = bm_MetalMine_amount+1 WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET metal_mine = metal_mine+1 WHERE `id` ='".$PLANET['id']."';");
$this->printMessage('Metal Mine Purchased!',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

if( $BuildingID == '1' && $USER['darkmatter'] < $MetalMineDM){
$this->printMessage('Please verify your Dark Matter to purchase Metal Mine !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $BuildingID == '1' && $USER['bm_MetalMine_time'] > TIMESTAMP){
$this->printMessage('Please verify your cooldown time to purchase Metal Mine !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $BuildingID == '1' && $PLANET['planet_type'] == 3){
$this->printMessage('Once you are on the moon, you can not purchase Metal Mine !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

############ ID:2 Crystal Mine
### ALTER TABLE uni1_users ADD bm_CrystalMine_price int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_CrystalMine_time int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_CrystalMine_amount int(11) NOT NULL DEFAULT '0';
############

$CrystalMineDM = $USER['bm_CrystalMine_price'];
$CrystalMinePurchased = $USER['bm_CrystalMine_amount'];
$CrystalMineNewPrice = $CrystalMineDM * 2;

if( $BuildingID == '2' && $USER['darkmatter'] >= $CrystalMineDM && $USER['bm_CrystalMine_time'] < TIMESTAMP  && $PLANET['planet_type'] == 1){
$USER['darkmatter'] -= $CrystalMineDM;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET bm_CrystalMine_price= '".$CrystalMineNewPrice."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_CrystalMine_time` = '".(TIMESTAMP + 108000)."' WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_CrystalMine_amount` = bm_CrystalMine_amount+1 WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET crystal_mine = crystal_mine+1 WHERE `id` ='".$PLANET['id']."';");
$this->printMessage('Crystal Mine Purchased!',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

if( $BuildingID == '2' && $USER['darkmatter'] < $CrystalMineDM){
$this->printMessage('Please verify your Dark Matter to purchase Crystal Mine !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $BuildingID == '2' && $USER['bm_CrystalMine_time'] > TIMESTAMP){
$this->printMessage('Please verify your cooldown time to purchase Crystal Mine !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $BuildingID == '2' && $PLANET['planet_type'] == 3){
$this->printMessage('Once you are on the moon, you can not purchase Crystal Mine !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

############ ID:3 Deuterium Syntesizer
### ALTER TABLE uni1_users ADD bm_DeuteriumSynthesizer_price int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_DeuteriumSynthesizer_time int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_DeuteriumSynthesizer_amount int(11) NOT NULL DEFAULT '0';
############

$DeuteriumSynthesizerDM = $USER['bm_DeuteriumSynthesizer_price'];
$DeuteriumSynthesizerPurchased = $USER['bm_DeuteriumSynthesizer_amount'];
$DeuteriumSynthesizerNewPrice = $DeuteriumSynthesizerDM * 2;

if( $BuildingID == '3' && $USER['darkmatter'] >= $DeuteriumSynthesizerDM && $USER['bm_DeuteriumSynthesizer_time'] < TIMESTAMP  && $PLANET['planet_type'] == 1){
$USER['darkmatter'] -= $DeuteriumSynthesizerDM;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET bm_DeuteriumSynthesizer_price= '".$DeuteriumSynthesizerNewPrice."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_DeuteriumSynthesizer_time` = '".(TIMESTAMP + 129600)."' WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_DeuteriumSynthesizer_amount` = bm_DeuteriumSynthesizer_amount+1 WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET deuterium_sintetizer = deuterium_sintetizer+1 WHERE `id` ='".$PLANET['id']."';");
$this->printMessage('Metal Mine Purchased!',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

if( $BuildingID == '3' && $USER['darkmatter'] < $DeuteriumSynthesizerDM){
$this->printMessage('Please verify your Dark Matter to purchase Metal Mine !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $BuildingID == '3' && $USER['bm_DeuteriumSynthesizer_time'] > TIMESTAMP){
$this->printMessage('Please verify your cooldown time to purchase Metal Mine !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $BuildingID == '3' && $PLANET['planet_type'] == 3){
$this->printMessage('Once you are on the moon, you can not purchase Metal Mine !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

############ ID:4 Power Plant
### ALTER TABLE uni1_users ADD bm_PowerPlant_price int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_PowerPlant_time int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_PowerPlant_amount int(11) NOT NULL DEFAULT '0';
############

$PowerPlantDM = $USER['bm_PowerPlant_price'];
$PowerPlantPurchased = $USER['bm_PowerPlant_amount'];
$PowerPlantNewPrice = $PowerPlantDM * 2;

if( $BuildingID == '4' && $USER['darkmatter'] >= $PowerPlantDM && $USER['bm_PowerPlant_time'] < TIMESTAMP  && $PLANET['planet_type'] == 1){
$USER['darkmatter'] -= $PowerPlantDM;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET bm_PowerPlant_price= '".$PowerPlantNewPrice."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_PowerPlant_time` = '".(TIMESTAMP + 108000)."' WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_PowerPlant_amount` = bm_PowerPlant_amount+1 WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET solar_plant = solar_plant+1 WHERE `id` ='".$PLANET['id']."';");
$this->printMessage('Power Plant Purchased!',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

if( $BuildingID == '4' && $USER['darkmatter'] < $PowerPlantDM){
$this->printMessage('Please verify your Dark Matter to purchase Power Plant !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $BuildingID == '4' && $USER['bm_PowerPlant_time'] > TIMESTAMP){
$this->printMessage('Please verify your cooldown time to purchase Power Plant !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $BuildingID == '4' && $PLANET['planet_type'] == 3){
$this->printMessage('Once you are on the moon, you can not purchase Power Plant !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

############ ID:6 University
### ALTER TABLE uni1_users ADD bm_University_price int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_University_time int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_University_amount int(11) NOT NULL DEFAULT '0';
############

$UniversityDM = $USER['bm_University_price'];
$UniversityPurchased = $USER['bm_University_amount'];
$UniversityNewPrice = $UniversityDM * 2;

if( $BuildingID == '6' && $USER['darkmatter'] >= $UniversityDM && $USER['bm_University_time'] < TIMESTAMP  && $PLANET['planet_type'] == 1){
$USER['darkmatter'] -= $UniversityDM;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET bm_University_price= '".$UniversityNewPrice."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_University_time` = '".(TIMESTAMP + 259200)."' WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_University_amount` = bm_University_amount+1 WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET university = university+1 WHERE `id` ='".$PLANET['id']."';");
$this->printMessage('University Purchased!',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

if( $BuildingID == '6' && $USER['darkmatter'] < $UniversityDM){
$this->printMessage('Please verify your Dark Matter to purchase University !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $BuildingID == '6' && $USER['bm_University_time'] > TIMESTAMP){
$this->printMessage('Please verify your cooldown time to purchase University !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $BuildingID == '6' && $PLANET['planet_type'] == 3){
$this->printMessage('Once you are on the moon, you can not purchase University !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

############ ID:15 Nano Factory
### ALTER TABLE uni1_users ADD bm_NanoFactory_price int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_NanoFactory_time int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_NanoFactory_amount int(11) NOT NULL DEFAULT '0';
############

$NanoFactoryDM = $USER['bm_NanoFactory_price'];
$NanoFactoryPurchased = $USER['bm_NanoFactory_amount'];
$NanoFactoryNewPrice = $NanoFactoryDM * 2;

if( $BuildingID == '15' && $USER['darkmatter'] >= $NanoFactoryDM && $USER['bm_NanoFactory_time'] < TIMESTAMP  && $PLANET['planet_type'] == 1){
$USER['darkmatter'] -= $NanoFactoryDM;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET bm_NanoFactory_price= '".$NanoFactoryNewPrice."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_NanoFactory_time` = '".(TIMESTAMP + 172800)."' WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_NanoFactory_amount` = bm_NanoFactory_amount+1 WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET nano_factory = nano_factory+1 WHERE `id` ='".$PLANET['id']."';");
$this->printMessage('Nano Factory Purchased!',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

if( $BuildingID == '15' && $USER['darkmatter'] < $NanoFactoryDM){
$this->printMessage('Please verify your Dark Matter to purchase Nano Factory !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $BuildingID == '15' && $USER['bm_NanoFactory_time'] > TIMESTAMP){
$this->printMessage('Please verify your cooldown time to purchase Nano Factory !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $BuildingID == '15' && $PLANET['planet_type'] == 3){
$this->printMessage('Once you are on the moon, you can not purchase Nano Factory !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}


############ ID:33 Terraformer
### ALTER TABLE uni1_users ADD bm_Terraformer_price int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_Terraformer_time int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_Terraformer_amount int(11) NOT NULL DEFAULT '0';
############

$TerraformerDM = $USER['bm_Terraformer_price'];
$TerraformerPurchased = $USER['bm_Terraformer_amount'];
$TerraformerNewPrice = $TerraformerDM * 2;

if( $BuildingID == '33' && $USER['darkmatter'] >= $TerraformerDM && $USER['bm_Terraformer_time'] < TIMESTAMP  && $PLANET['planet_type'] == 1){
$USER['darkmatter'] -= $TerraformerDM;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET bm_Terraformer_price= '".$TerraformerNewPrice."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_Terraformer_time` = '".(TIMESTAMP + 86400)."' WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_Terraformer_amount` = bm_Terraformer_amount+1 WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET terraformer = terraformer+1 WHERE `id` ='".$PLANET['id']."';");
$this->printMessage('Terraformer Purchased!',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

if( $BuildingID == '33' && $USER['darkmatter'] < $TerraformerDM){
$this->printMessage('Please verify your Dark Matter to purchase Terraformer !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $BuildingID == '33' && $USER['bm_Terraformer_time'] > TIMESTAMP){
$this->printMessage('Please verify your cooldown time to purchase Terraformer !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $BuildingID == '33' && $PLANET['planet_type'] == 3){
$this->printMessage('Once you are on the moon, you can not purchase Terraformer !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

############ ID:109 Weapon Tech
### ALTER TABLE uni1_users ADD bm_WeaponTech_price int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_WeaponTech_time int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_WeaponTech_amount int(11) NOT NULL DEFAULT '0';
############

$WeaponTechDM = $USER['bm_WeaponTech_price'];
$WeaponTechPurchased = $USER['bm_WeaponTech_amount'];
$WeaponTechNewPrice = $WeaponTechDM * 2;

if( $TechID == '109' && $USER['darkmatter'] >= $WeaponTechDM && $USER['bm_WeaponTech_time'] < TIMESTAMP){
$USER['darkmatter'] -= $WeaponTechDM;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET bm_WeaponTech_price= '".$WeaponTechNewPrice."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_WeaponTech_time` = '".(TIMESTAMP + 108000)."' WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_WeaponTech_amount` = bm_WeaponTech_amount+1 WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET military_tech = military_tech+1 WHERE `id` ='".$USER['id']."';");
$this->printMessage('Weapon Tech Purchased!',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

if( $TechID == '109' && $USER['darkmatter'] < $WeaponTechDM){
$this->printMessage('Please verify your Dark Matter to purchase Weapon Tech !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $TechID == '109' && $USER['bm_WeaponTech_time'] > TIMESTAMP){
$this->printMessage('Please verify your cooldown time to purchase Weapon Tech !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

############ ID:110 Shield Tech
### ALTER TABLE uni1_users ADD bm_ShieldTech_price int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_ShieldTech_time int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_ShieldTech_amount int(11) NOT NULL DEFAULT '0';
############

$ShieldTechDM = $USER['bm_ShieldTech_price'];
$ShieldTechPurchased = $USER['bm_ShieldTech_amount'];
$ShieldTechNewPrice = $ShieldTechDM * 2;

if( $TechID == '110' && $USER['darkmatter'] >= $ShieldTechDM && $USER['bm_ShieldTech_time'] < TIMESTAMP){
$USER['darkmatter'] -= $ShieldTechDM;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET bm_ShieldTech_price= '".$ShieldTechNewPrice."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_ShieldTech_time` = '".(TIMESTAMP + 108000)."' WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_ShieldTech_amount` = bm_ShieldTech_amount+1 WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET defence_tech = defence_tech+1 WHERE `id` ='".$USER['id']."';");
$this->printMessage('Shield Tech Purchased!',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

if( $TechID == '110' && $USER['darkmatter'] < $ShieldTechDM){
$this->printMessage('Please verify your Dark Matter to purchase Shield Tech !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $TechID == '110' && $USER['bm_ShieldTech_time'] > TIMESTAMP){
$this->printMessage('Please verify your cooldown time to purchase Shield Tech !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

############ ID:111 Armor Tech
### ALTER TABLE uni1_users ADD bm_ArmorTech_price int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_ArmorTech_time int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_ArmorTech_amount int(11) NOT NULL DEFAULT '0';
############

$ArmorTechDM = $USER['bm_ArmorTech_price'];
$ArmorTechPurchased = $USER['bm_ArmorTech_amount'];
$ArmorTechNewPrice = $ArmorTechDM * 2;

if( $TechID == '111' && $USER['darkmatter'] >= $ArmorTechDM && $USER['bm_ArmorTech_time'] < TIMESTAMP){
$USER['darkmatter'] -= $ArmorTechDM;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET bm_ArmorTech_price= '".$ArmorTechNewPrice."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_ArmorTech_time` = '".(TIMESTAMP + 108000)."' WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_ArmorTech_amount` = bm_ArmorTech_amount+1 WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET shield_tech = shield_tech+1 WHERE `id` ='".$USER['id']."';");
$this->printMessage('Armor Tech Purchased!',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

if( $TechID == '111' && $USER['darkmatter'] < $ArmorTechDM){
$this->printMessage('Please verify your Dark Matter to purchase Armor Tech !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $TechID == '111' && $USER['bm_ArmorTech_time'] > TIMESTAMP){
$this->printMessage('Please verify your cooldown time to purchase Armor Tech !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

############ ID:118 Hyperspace Engine
### ALTER TABLE uni1_users ADD bm_HyperspaceEngine_price int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_HyperspaceEngine_time int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_HyperspaceEngine_amount int(11) NOT NULL DEFAULT '0';
############

$HyperspaceEngineDM = $USER['bm_HyperspaceEngine_price'];
$HyperspaceEnginePurchased = $USER['bm_HyperspaceEngine_amount'];
$HyperspaceEngineNewPrice = $HyperspaceEngineDM * 2;

if( $TechID == '118' && $USER['darkmatter'] >= $HyperspaceEngineDM && $USER['bm_HyperspaceEngine_time'] < TIMESTAMP){
$USER['darkmatter'] -= $HyperspaceEngineDM;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET bm_HyperspaceEngine_price= '".$HyperspaceEngineNewPrice."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_HyperspaceEngine_time` = '".(TIMESTAMP + 172800)."' WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_HyperspaceEngine_amount` = bm_HyperspaceEngine_amount+1 WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET hyperspace_motor_tech = hyperspace_motor_tech+1 WHERE `id` ='".$USER['id']."';");
$this->printMessage('Hyperspace Engine Purchased!',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

if( $TechID == '118' && $USER['darkmatter'] < $HyperspaceEngineDM){
$this->printMessage('Please verify your Dark Matter to purchase Hyperspace Engine !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $TechID == '118' && $USER['bm_HyperspaceEngine_time'] > TIMESTAMP){
$this->printMessage('Please verify your cooldown time to purchase Hyperspace Engine !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

############ ID:131 Mineral Tech
### ALTER TABLE uni1_users ADD bm_MineralTech_price int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_MineralTech_time int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_MineralTech_amount int(11) NOT NULL DEFAULT '0';
############

$MineralTechDM = $USER['bm_MineralTech_price'];
$MineralTechPurchased = $USER['bm_MineralTech_amount'];
$MineralTechNewPrice = $MineralTechDM * 2;

if( $TechID == '131' && $USER['darkmatter'] >= $MineralTechDM && $USER['bm_MineralTech_time'] < TIMESTAMP){
$USER['darkmatter'] -= $MineralTechDM;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET bm_MineralTech_price= '".$MineralTechNewPrice."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_MineralTech_time` = '".(TIMESTAMP + 108000)."' WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_MineralTech_amount` = bm_MineralTech_amount+1 WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET metal_proc_tech = metal_proc_tech+1 WHERE `id` ='".$USER['id']."';");
$this->printMessage('Mineral Tech Purchased!',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

if( $TechID == '131' && $USER['darkmatter'] < $MineralTechDM){
$this->printMessage('Please verify your Dark Matter to purchase Mineral Tech !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $TechID == '131' && $USER['bm_MineralTech_time'] > TIMESTAMP){
$this->printMessage('Please verify your cooldown time to purchase Mineral Tech !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

############ ID:132 Semi-Crystals Tech
### ALTER TABLE uni1_users ADD bm_SemiCrystalsTech_price int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_SemiCrystalsTech_time int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_SemiCrystalsTech_amount int(11) NOT NULL DEFAULT '0';
############

$SemiCrystalsTechDM = $USER['bm_SemiCrystalsTech_price'];
$SemiCrystalsTechPurchased = $USER['bm_SemiCrystalsTech_amount'];
$SemiCrystalsTechNewPrice = $SemiCrystalsTechDM * 2;

if( $TechID == '132' && $USER['darkmatter'] >= $SemiCrystalsTechDM && $USER['bm_SemiCrystalsTech_time'] < TIMESTAMP){
$USER['darkmatter'] -= $SemiCrystalsTechDM;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET bm_SemiCrystalsTech_price= '".$SemiCrystalsTechNewPrice."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_SemiCrystalsTech_time` = '".(TIMESTAMP + 108000)."' WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_SemiCrystalsTech_amount` = bm_SemiCrystalsTech_amount+1 WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET crystal_proc_tech = crystal_proc_tech+1 WHERE `id` ='".$USER['id']."';");
$this->printMessage('Semi-Crystals Tech Purchased!',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

if( $TechID == '132' && $USER['darkmatter'] < $SemiCrystalsTechDM){
$this->printMessage('Please verify your Dark Matter to purchase Semi-Crystals Tech !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $TechID == '132' && $USER['bm_SemiCrystalsTech_time'] > TIMESTAMP){
$this->printMessage('Please verify your cooldown time to purchase Semi-Crystals Tech !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

############ ID:133 Fuel Tech
### ALTER TABLE uni1_users ADD bm_FuelTech_price int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_FuelTech_time int(11) NOT NULL DEFAULT '0';
### ALTER TABLE uni1_users ADD bm_FuelTech_amount int(11) NOT NULL DEFAULT '0';
############

$FuelTechDM = $USER['bm_FuelTech_price'];
$FuelTechPurchased = $USER['bm_FuelTech_amount'];
$FuelTechNewPrice = $FuelTechDM * 2;

if( $TechID == '133' && $USER['darkmatter'] >= $FuelTechDM && $USER['bm_FuelTech_time'] < TIMESTAMP){
$USER['darkmatter'] -= $FuelTechDM;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET bm_FuelTech_price= '".$FuelTechNewPrice."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_FuelTech_time` = '".(TIMESTAMP + 108000)."' WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `bm_FuelTech_amount` = bm_FuelTech_amount+1 WHERE `id` = '".$USER['id']."' ;");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET deuterium_proc_tech = deuterium_proc_tech+1 WHERE `id` ='".$USER['id']."';");
$this->printMessage('Fuel Tech Purchased!',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

if( $TechID == '133' && $USER['darkmatter'] < $FuelTechDM){
$this->printMessage('Please verify your Dark Matter to purchase Fuel Tech !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}
if( $TechID == '133' && $USER['bm_FuelTech_time'] > TIMESTAMP){
$this->printMessage('Please verify your cooldown time to purchase Fuel Tech !',  true, array('game.php?page=blackMarket', 1)); 
exit;    
}

############ Template

$this->tplObj->assign_vars(array(

############ Buildings
'MetalMineTime'   => (($USER['bm_MetalMine_time'] < TIMESTAMP) ? true : ($USER['bm_MetalMine_time'] - TIMESTAMP)),
'MetalMineDM'   => $MetalMineDM,
'MetalMinePurchased'   => $MetalMinePurchased,
'MetalMineNewPrice'   => $MetalMineDM * 2,
'CrystalMineTime'   => (($USER['bm_CrystalMine_time'] < TIMESTAMP) ? true : ($USER['bm_CrystalMine_time'] - TIMESTAMP)),
'CrystalMineDM'   => $CrystalMineDM,
'CrystalMinePurchased'   => $CrystalMinePurchased,
'CrystalMineNewPrice'   => $CrystalMineDM * 2,
'DeuteriumSynthesizerTime'   => (($USER['bm_DeuteriumSynthesizer_time'] < TIMESTAMP) ? true : ($USER['bm_DeuteriumSynthesizer_time'] - TIMESTAMP)),
'DeuteriumSynthesizerDM'   => $DeuteriumSynthesizerDM,
'DeuteriumSynthesizerPurchased'   => $DeuteriumSynthesizerPurchased,
'DeuteriumSynthesizerNewPrice'   => $DeuteriumSynthesizerDM * 2,
'PowerPlantTime'   => (($USER['bm_PowerPlant_time'] < TIMESTAMP) ? true : ($USER['bm_PowerPlant_time'] - TIMESTAMP)),
'PowerPlantDM'   => $PowerPlantDM,
'PowerPlantPurchased'   => $PowerPlantPurchased,
'PowerPlantNewPrice'   => $PowerPlantDM * 2,
'UniversityTime'   => (($USER['bm_University_time'] < TIMESTAMP) ? true : ($USER['bm_University_time'] - TIMESTAMP)),
'UniversityDM'   => $UniversityDM,
'UniversityPurchased'   => $UniversityPurchased,
'UniversityNewPrice'   => $UniversityDM * 2,
'NanoFactoryTime'   => (($USER['bm_NanoFactory_time'] < TIMESTAMP) ? true : ($USER['bm_NanoFactory_time'] - TIMESTAMP)),
'NanoFactoryDM'   => $NanoFactoryDM,
'NanoFactoryPurchased'   => $NanoFactoryPurchased,
'NanoFactoryNewPrice'   => $NanoFactoryDM * 2,
'TerraformerTime'   => (($USER['bm_Terraformer_time'] < TIMESTAMP) ? true : ($USER['bm_Terraformer_time'] - TIMESTAMP)),
'TerraformerDM'   => $TerraformerDM,
'TerraformerPurchased'   => $TerraformerPurchased,
'TerraformerNewPrice'   => $TerraformerDM * 2,

### Science
'WeaponTechTime'   => (($USER['bm_WeaponTech_time'] < TIMESTAMP) ? true : ($USER['bm_WeaponTech_time'] - TIMESTAMP)),
'WeaponTechDM'   => $WeaponTechDM,
'WeaponTechPurchased'   => $WeaponTechPurchased,
'WeaponTechNewPrice'   => $WeaponTechDM * 2,
'ShieldTechTime'   => (($USER['bm_ShieldTech_time'] < TIMESTAMP) ? true : ($USER['bm_ShieldTech_time'] - TIMESTAMP)),
'ShieldTechDM'   => $ShieldTechDM,
'ShieldTechPurchased'   => $ShieldTechPurchased,
'ShieldTechNewPrice'   => $ShieldTechDM * 2,
'ArmorTechTime'   => (($USER['bm_ArmorTech_time'] < TIMESTAMP) ? true : ($USER['bm_ArmorTech_time'] - TIMESTAMP)),
'ArmorTechDM'   => $ArmorTechDM,
'ArmorTechPurchased'   => $ArmorTechPurchased,
'ArmorTechNewPrice'   => $ArmorTechDM * 2,
'HyperspaceEngineTime'   => (($USER['bm_HyperspaceEngine_time'] < TIMESTAMP) ? true : ($USER['bm_HyperspaceEngine_time'] - TIMESTAMP)),
'HyperspaceEngineDM'   => $HyperspaceEngineDM,
'HyperspaceEnginePurchased'   => $HyperspaceEnginePurchased,
'HyperspaceEngineNewPrice'   => $HyperspaceEngineDM * 2,
'MineralTechTime'   => (($USER['bm_MineralTech_time'] < TIMESTAMP) ? true : ($USER['bm_MineralTech_time'] - TIMESTAMP)),
'MineralTechDM'   => $MineralTechDM,
'MineralTechPurchased'   => $MineralTechPurchased,
'MineralTechNewPrice'   => $MineralTechDM * 2,
'SemiCrystalsTechTime'   => (($USER['bm_SemiCrystalsTech_time'] < TIMESTAMP) ? true : ($USER['bm_SemiCrystalsTech_time'] - TIMESTAMP)),
'SemiCrystalsTechDM'   => $SemiCrystalsTechDM,
'SemiCrystalsTechPurchased'   => $SemiCrystalsTechPurchased,
'SemiCrystalsTechNewPrice'   => $SemiCrystalsTechDM * 2,
'FuelTechTime'   => (($USER['bm_FuelTech_time'] < TIMESTAMP) ? true : ($USER['bm_FuelTech_time'] - TIMESTAMP)),
'FuelTechDM'   => $FuelTechDM,
'FuelTechPurchased'   => $FuelTechPurchased,
'FuelTechNewPrice'   => $FuelTechDM * 2,
));

$this->display('page.blackmarket.default.tpl');
}
}