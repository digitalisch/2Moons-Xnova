<?php

class ShowPlanetRadarPage extends AbstractPage
{
    
function __construct() 
{
parent::__construct();
}

function show(){
global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;

$Search = HTTP::_GP('search', '');
$Style = "";
$RangeLimit = $PLANET['hangar'] * 2;

/* If you want Fleet as total
($GalaxyRowPlanet['small_ship_cargo'] + $GalaxyRowPlanet['big_ship_cargo'] + $GalaxyRowPlanet['light_hunter'] + $GalaxyRowPlanet['heavy_hunter'] + $GalaxyRowPlanet['crusher'] + $GalaxyRowPlanet['battle_ship'] + $GalaxyRowPlanet['colonizer'] + $GalaxyRowPlanet['recycler'] + $GalaxyRowPlanet['bomber_ship'] + $GalaxyRowPlanet['destructor'] + $GalaxyRowPlanet['dearth_star'] + $GalaxyRowPlanet['battleship'] + $GalaxyRowPlanet['lune_noir'] + $GalaxyRowPlanet['ev_transporter'] + $GalaxyRowPlanet['star_crasher'] + $GalaxyRowPlanet['giga_recykler'] + $GalaxyRowPlanet['dm_ship'])
*/

/* If you want Defense as total
($GalaxyRowPlanet['orbital_station'] + $GalaxyRowPlanet['misil_launcher'] + $GalaxyRowPlanet['small_laser'] + $GalaxyRowPlanet['big_laser'] + $GalaxyRowPlanet['gauss_canyon'] + $GalaxyRowPlanet['ionic_canyon'] + $GalaxyRowPlanet['buster_canyon'] + $GalaxyRowPlanet['small_protection_shield'] + $GalaxyRowPlanet['planet_protector'] + $GalaxyRowPlanet['big_protection_shield'] + $GalaxyRowPlanet['graviton_canyon'])
*/

/* If you want Debris as total
($GalaxyRowPlanet['der_metal'] + $GalaxyRowPlanet['der_crystal'])
.*/

/* If you want to see Planet Mines
$GalaxyRowPlanet['metal_mine']."/".$GalaxyRowPlanet['crystal_mine']."/".$GalaxyRowPlanet['deuterium_sintetizer']
.*/

############# BONUS NAME #####################


if($Search == 'players'){
$PlanetSearch = $GLOBALS['DATABASE']->query("SELECT *from ".PLANETS."  WHERE  (`system` > '".($PLANET['system'] - $RangeLimit)."' AND `system` < '".($PLANET['system'] + $RangeLimit)."') AND `galaxy` = '".$PLANET['galaxy']."' AND `planet_type` = '1' ORDER BY `system` ASC, `planet` ASC;");
/* INNER JOIN ".USERS." ON username = id_owner */

$Style = '<table class="redesign"><tr><td>Galaxy</td><td>System</td><td>Planet</td><td>
Current Mines (MM/CM/DS)
</td><td>
Debris in Orbit
</td><td>&nbsp</td></tr>';
/*
Delete 'Edit First Bonus!' and insert the column name like Total Defense for bonus that Hangar is > 10 and < 20
Delete 'Edit Second Bonus!' and insert the column name like Total Fleet for bonus that Hangar is > 20

Suggested Bonus Names:
For fleets = Total Fleets
For defense = Total Defense
For debris = Debris in Orbit
For mines = Current Mines (MM/CM/DS)
*/

############# TUTORIAL TO EDIT BONUS #########

/* If you wish to pick total Debris bonus for example, you can copy "($GalaxyRowPlanet['der_metal'] + $GalaxyRowPlanet['der_crystal'])" (without "") and replace it for "$NoBonus". 

So, before edit it looks ".$NoBonus.", after edit will look as ".($GalaxyRowPlanet['der_metal'] + $GalaxyRowPlanet['der_crystal'])."

This is valid to all bonus, if does not look like that, the mod should not work correctly and give to you Fatal Errors
*/

############# BONUS EDIT #####################

$NoBonus = "NoBonus";

/* Add the wished bonus. No Hangar levels required*/
if($GLOBALS['DATABASE']->numRows($PlanetSearch) > 0 )
while($GalaxyRowPlanet = $GLOBALS['DATABASE']->fetch_array($PlanetSearch)){
$Style .= "<tr><td>".$GalaxyRowPlanet['galaxy']."</td><td>".$GalaxyRowPlanet['system']."</td><td>".$GalaxyRowPlanet['planet']."</td><td>
".$GalaxyRowPlanet['metal_mine']."/".$GalaxyRowPlanet['crystal_mine']."/".$GalaxyRowPlanet['deuterium_sintetizer']."
</td><td>
".($GalaxyRowPlanet['der_metal'] + $GalaxyRowPlanet['der_crystal'])."
</td><td><a href='game.php?page=fleetTable&galaxy=".$GalaxyRowPlanet['galaxy']."&system=".$GalaxyRowPlanet['system']."&planet=".$GalaxyRowPlanet['planet']."&planettype=1'>Send Fleet</a></td></tr>";
}
/*Insert the bonus 1 where is the first "$NoBonus".*/
/*Insert the bonus 2 where is the second "$NoBonus".*/



/* If no Target avaliable*/
if($GLOBALS['DATABASE']->numRows($PlanetSearch) == 0)
$Style .= "<tr><td colspan='5'>There are no planets in your range</td></tr>";
$Style .= "</table>";
}

$this->tplObj->assign_vars(
array(
'MaxAllowed' => $RangeLimit,
'Radar' => $Style,
)
);
$this->display("page.planetradar.default.tpl");
}
}
?>