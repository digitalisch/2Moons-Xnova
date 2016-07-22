<?php

/**
 _  \_/ |\ | /¯¯\ \  / /\    |¯¯) |_¯ \  / /¯¯\ |  |   |´¯|¯` | /¯¯\ |\ |5
 ¯  /¯\ | \| \__/  \/ /--\   |¯¯\ |__  \/  \__/ |__ \_/   |   | \__/ | \|Core.
 * @author: Copyright (C) 2011 by Brayan Narvaez (Prinick) developer of xNova Revolution
 * @link: http://www.xnovarevolution.con.ar

 * @package 2Moons
 * @author Slaver <slaver7@gmail.com>
 * @copyright 2009 Lucky <douglas@crockford.com> (XGProyecto)
 * @copyright 2011 Slaver <slaver7@gmail.com> (Fork/2Moons)
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.3 (2011-01-21)
 * @link http://code.google.com/p/2moons/

 * Please do not remove the credits
*/

function ShowFleetTraderPage()
{
	global $USER, $PLANET, $LNG, $CONF, $pricelist, $resource, $reslist;
	$PlanetRess = new ResourceUpdate();
	$PlanetRess->CalcResource();
	$CONF['trade_allowed_ships']	= explode(',', $CONF['trade_allowed_ships']);
	$ID								= request_var('id', 0);
	if(!empty($ID) && in_array($ID, $CONF['trade_allowed_ships'])) {
		$Count						= min(request_outofint('count'), $PLANET[$resource[$ID]]);
		$PLANET['metal']			+= $Count * $pricelist[$ID]['metal'] * (1 - $CONF['trade_charge']);
		$PLANET['crystal']			+= $Count * $pricelist[$ID]['crystal'] * (1 - $CONF['trade_charge']);
		$PLANET['deuterium']		+= $Count * $pricelist[$ID]['deuterium'] * (1 - $CONF['trade_charge']);
		$USER['darkmatter']			+= $Count * $pricelist[$ID]['darkmatter'] * (1 - $CONF['trade_charge']);
		$PLANET['norio']		    += $Count * $pricelist[$ID]['norio'] * (1 - $CONF['trade_charge']);				
		$PLANET[$resource[$ID]]		-= $Count;
		$PlanetRess->Builded[$ID]	-= $Count;
	}	
	$PlanetRess->SavePlanetToDB();

	$template	= new template();
	$template->loadscript('fleettrader.js');
	$template->execscript('updateVars();');
	$Cost	= array();
	foreach($CONF['trade_allowed_ships'] as $ID)
	{
		if(in_array($ID, $reslist['fleet']))
			$Cost[$ID]	= array($PLANET[$resource[$ID]], $pricelist[$ID]['metal'], $pricelist[$ID]['crystal'], $pricelist[$ID]['deuterium'], $pricelist[$ID]['darkmatter'], $pricelist[$ID]['norio']);
	}	
		if(empty($Cost)) {
			$template->message($LNG['ft_empty']);
			exit;
	}
	$template->assign_vars(array(	
		'tech'						=> $LNG['tech'],
		'ft_head'					=> $LNG['ft_head'],
		'ft_max'					=> $LNG['ft_max'],
		'ft_total'					=> $LNG['ft_total'],
		'tech'						=> $LNG['tech'],
		'ft_naves'					=> $LNG['ft_naves'],
		'ft_selecciona'				=> $LNG['ft_selecciona'],
		'ft_coste'					=> $LNG['ft_coste'],		
		'ft_cantidad'				=> $LNG['ft_cantidad'],
		'ft_absenden'				=> $LNG['ft_absenden'],
		'ft_cau'					=> $LNG['ft_cau'],
		'ft_cau_2'					=> $LNG['ft_cau_2'],
		'trade_allowed_ships'		=> $CONF['trade_allowed_ships'],
		'CostInfos'					=> json_encode($Cost),
		'Charge'					=> $CONF['trade_charge'],
	));
	
	$template->show("fleettrader_overview.tpl");
}
?>