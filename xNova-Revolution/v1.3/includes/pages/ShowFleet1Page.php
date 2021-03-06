<?php

/*
 _  \_/ |\ | /��\ \  / /\    |��) |_� \  / /��\ |  |   |��|�` | /��\ |\ |
 �  /�\ | \| \__/  \/ /--\   |��\ |__  \/  \__/ |__ \_/   |   | \__/ | \|
 @copyright:
Copyright (C) 2010 por Brayan Narvaez (principe negro)
Copyright (C) 2008 - 2009 By lucky from Xtreme-gameZ.com.ar

@support:
Web http://www.xnovarevolution.com.ar/
Forum http://www.xnovarevolution.com.ar/foros/

Proyect based in xg proyect for xtreme gamez.
*/

function ShowFleet1Page($CurrentUser, $CurrentPlanet)
{
	global $resource, $pricelist, $reslist, $phpEx, $lang;

	$parse = $lang;
	$speed = array(10 => 100,
					9 => 90,
					8 => 80,
					7 => 70,
					6 => 60,
					5 => 50,
					4 => 40,
					3 => 30,
					2 => 20,
					1 => 10,
					);

	$g = $_POST['galaxy'];
	$s = $_POST['system'];
	$p = $_POST['planet'];
	$t = $_POST['planet_type'];

	if (!$g)
		$g = $CurrentPlanet['galaxy'];
	if (!$s)
		$s = $CurrentPlanet['system'];
	if (!$p)
		$p = $CurrentPlanet['planet'];
	if (!$t)
		$t = $CurrentPlanet['planet_type'];

	$FleetHiddenBlock  = "";
	foreach ($reslist['fleet'] as $n => $i)
	{
		if ($i > 201 && $i < 218 && $_POST["ship$i"] > "0")
		{
			if (($_POST["ship$i"] > $CurrentPlanet[$resource[$i]]) OR (!ctype_digit( $_POST["ship$i"] )))
				header("location:game.php?page=fleet");
			else
			{
				$fleet['fleetarray'][$i]   = $_POST["ship$i"];
				$fleet['fleetlist']       .= $i . "," . $_POST["ship$i"] . ";";
				$fleet['amount']          += $_POST["ship$i"];
				$FleetHiddenBlock         .= "<input type=\"hidden\" name=\"consumption". $i ."\" value=\"". GetShipConsumption ( $i, $CurrentUser ) ."\" />";
				$FleetHiddenBlock         .= "<input type=\"hidden\" name=\"speed". $i ."\"       value=\"". GetFleetMaxSpeed ( "", $i, $CurrentUser ) ."\" />";
				$FleetHiddenBlock         .= "<input type=\"hidden\" name=\"capacity". $i ."\"    value=\"". $pricelist[$i]['capacity'] ."\" />";
				$FleetHiddenBlock         .= "<input type=\"hidden\" name=\"ship". $i ."\"        value=\"". $_POST["ship$i"] ."\" />";
				$speedalls[$i]             = GetFleetMaxSpeed( "", $i, $CurrentUser);
			}
		}
	}

	if (!$fleet['fleetlist'])
		header("location:game." . $phpEx . "?page=fleet");
	else
		$speedallsmin = min($speedalls);

	$parse['fleetblock'] 			= $FleetHiddenBlock;
	$parse['speedallsmin'] 			= $speedallsmin;
	$parse['fleetarray'] 			= str_rot13(base64_encode(serialize($fleet['fleetarray'])));
	$parse['galaxy'] 				= $CurrentPlanet['galaxy'];
	$parse['system'] 				= $CurrentPlanet['system'];
	$parse['planet'] 				= $CurrentPlanet['planet'];
	$parse['galaxy_post'] 			= intval($_POST['galaxy']);
	$parse['system_post'] 			= intval($_POST['system']);
	$parse['planet_post'] 			= intval($_POST['planet']);
	$parse['speedfactor'] 			= GetGameSpeedFactor();
	$parse['planet_type'] 			= $CurrentPlanet['planet_type'];
	$parse['metal'] 				= floor($CurrentPlanet['metal']);
	$parse['crystal'] 				= floor($CurrentPlanet['crystal']);
	$parse['deuterium'] 			= floor($CurrentPlanet['deuterium']);
	$parse['darkmatter'] 			= floor($CurrentPlanet['darkmatter']);
	$parse['g'] 					= $g;
	$parse['s'] 					= $s;
	$parse['p'] 					= $p;
	$parse['options_planettype']   .= "<option value=\"1\"". (($t == 1) ? " SELECTED" : "" ) .">".$lang['fl_planet']."</option>";
	$parse['options_planettype']   .= "<option value=\"2\"". (($t == 2) ? " SELECTED" : "" ) .">".$lang['fl_debris']."</option>";
	$parse['options_planettype']   .= "<option value=\"3\"". (($t == 3) ? " SELECTED" : "" ) .">".$lang['fl_moon']."</option>";

	foreach ($speed as $a => $b)
	{
		$parse['options'] .= "<option value=\"".$a."\">".$b."</option>";
	}

	if ($CurrentUser['fleet_shortcut'])
	{
		$scarray = explode("\r\n", $CurrentUser['fleet_shortcut']);
		$i = 0;
		foreach ($scarray as $a => $b)
		{
			if ($b != "")
			{
				$c = explode(',', $b);
				if ($i == 0)
					$ShortCut .= "<tr height=\"20\">";

				$ShortCut .= "<th><a href=\"javascript:setTarget(". $c[1] .",". $c[2] .",". $c[3] .",". $c[4] ."); shortInfo();\"";
				$ShortCut .= ">". $c[0] ." ". $c[1] .":". $c[2] .":". $c[3] ." ";

				if ($c[4] == 1)
					$ShortCut .= $lang['fl_planet_shortcut'];
				elseif ($c[4] == 2)
					$ShortCut .= $lang['fl_debris_shortcut'];
				elseif ($c[4] == 3)
					$ShortCut .= $lang['fl_moon_shortcut'];

				$ShortCut .= "</a></th>";

				if ($i == 1)
					$ShortCut .= "</tr>";

				if ($i == 1)
					$i = 0;
				else
					$i = 1;
			}
		}
		if ($i == 1)
			$ShortCut .= "<th></th></tr>";
	}
	else
	{
		$ShortCut .= "<tr height=\"20\">";
		$ShortCut .= "<th colspan=\"2\">".$lang['fl_no_shortcuts']."</th>";
		$ShortCut .= "</tr>";
	}

	$parse['shortcut'] 	= $ShortCut;
	$kolonien      		= SortUserPlanets($CurrentUser);

	if (mysql_num_rows($kolonien) > 1)
	{
		$i = 0;
		$w = 0;
		$tr = true;
		while ($row = mysql_fetch_array($kolonien))
		{
			if ($w == 0 && $tr)
			{
				$ColonyList .= "<tr height=\"20\">";
				$tr = false;
			}

			if ($w == 2)
			{
				$ColonyList .= "</tr>";
				$w = 0;
				$tr = true;
			}

			if ($row['planet_type'] == 3)
				$row['name'] .= " ". $lang['fl_moon_shortcut'];

			if ($CurrentPlanet['galaxy'] == $row['galaxy'] && $CurrentPlanet['system'] == $row['system'] &&
				$CurrentPlanet['planet'] == $row['planet'] && $CurrentPlanet['planet_type'] == $row['planet_type'])
			{/* HERE NOTHING HAPPENS.. =p*/}
			else
			{
				$ColonyList .= "<th><a href=\"javascript:setTarget(". $row['galaxy'] .",". $row['system'] .",". $row['planet'] .",". $row['planet_type'] ."); shortInfo();\">". $row['name'] ." ". $row['galaxy'] .":". $row['system'] .":". $row['planet'] ."</a></th>";
				$w++;
				$i++;
			}
		}

		if ($i % 2 != 0)
			$ColonyList .= "<th>&nbsp;</th></tr>";
		elseif ($w == 2)
			$ColonyList .= "</tr>";
	}
	else
		$ColonyList .= "<th colspan=\"2\">".$lang['fl_no_colony']."</th>";

	$parse['colonylist'] = $ColonyList;

	$aks_madnessred = doquery("SELECT * FROM {{table}} ;", 'aks');

	$aks_code_mr = '';
	$aks_invited_mr = '';

	while($row = mysql_fetch_array($aks_madnessred))
	{
		$members = explode(",", $row['eingeladen']);
		foreach($members as $a => $b)
		{
			if ($b == $CurrentUser['id'])
			{
				$aks_fleets_mr .= "<tr height=\"20\">";
				$aks_fleets_mr .= "<th colspan=\"2\">";
				$aks_fleets_mr .= "<a href=\"javascript:";
				$aks_fleets_mr .= "setTarget(". $row['galaxy'] .",". $row['system'] .",". $row['planet'] ."); ";
				$aks_fleets_mr .= "shortInfo(); ";
				$aks_fleets_mr .= "setACS(". $row['id'] ."); ";
				$aks_fleets_mr .= "setACS_target('"."g". $row['galaxy'] ."s". $row['system'] ."p". $row['planet'] ."t". $row['planet_type'] ."');";
				$aks_fleets_mr .= "\">";
				$aks_fleets_mr .= "(".$row['name'].")";
				$aks_fleets_mr .= "</a>";
				$aks_fleets_mr .= "</th>";
				$aks_fleets_mr .= "</tr>";
			}
		}
	}

	$parse['asc'] 				= $aks_fleets_mr;
	$parse['maxepedition'] 		= $_POST['maxepedition'];
	$parse['curepedition'] 		= $_POST['curepedition'];
	$parse['target_mission'] 	= $_POST['target_mission'];

	display(parsetemplate(gettemplate('fleet/fleet1_table'), $parse));
}
?>
