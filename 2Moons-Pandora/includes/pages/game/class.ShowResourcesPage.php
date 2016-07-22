<?php

/**
 *  2Moons
 *  Copyright (C) 2012 Jan Kröpke
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package 2Moons
 * @author Jan Kröpke <info@2moons.cc>
 * @copyright 2012 Jan Kröpke <info@2moons.cc>
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.7.2 (2013-03-18)
 * @info $Id: class.ShowResourcesPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */

class ShowResourcesPage extends AbstractPage
{
	public static $requireModule = MODULE_RESSOURCE_LIST;

	function __construct() 
	{
		parent::__construct();
	}
	
	function send()
	{
		global $LNG, $resource, $USER, $PLANET;
		if ($USER['urlaubs_modus'] == 0)
		{
			$updateSQL	= array();
			if(!isset($_POST['prod']))
				$_POST['prod'] = array();
				
				
			foreach($_POST['prod'] as $ressourceID => $Value)
			{
				$FieldName = $resource[$ressourceID].'_porcent';
				if (!isset($PLANET[$FieldName]) || !in_array($Value, range(0, 10)))
					continue;
				
				$updateSQL[]	= $FieldName." = '".((int) $Value)."'";
				
				$PLANET[$FieldName]	= $Value;
				$this->ecoObj->PLANET[$FieldName]	= $Value;
			}

			if(!empty($updateSQL))
			{
				$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET ".implode(", ", $updateSQL)." WHERE `id` = ".$PLANET['id'] .";");
				
				$this->ecoObj->ReBuildCache();
				$this->ecoObj->PLANET['eco_hash'] = $this->ecoObj->CreateHash();
				$PLANET = $this->ecoObj->PLANET;
			}
		}
		$this->save();
		$this->redirectTo('game.php?page=resources');
	}
	function show()
	{
		global $LNG, $ProdGrid, $resource, $reslist, $CONF, $pricelist, $USER, $PLANET;
		
		if($USER['urlaubs_modus'] == 1 || $PLANET['planet_type'] != 1)
		{
			$basicIncome[901]	= 0;
			$basicIncome[902]	= 0;
			$basicIncome[903]	= 0;
			$basicIncome[911]	= 0;
		}
		else
		{		
			$basicIncome[901]	= Config::get($resource[901].'_basic_income');
			$basicIncome[902]	= Config::get($resource[902].'_basic_income');
			$basicIncome[903]	= Config::get($resource[903].'_basic_income');
			$basicIncome[911]	= Config::get($resource[911].'_basic_income');
		}
		
		$temp	= array(
			901	=> array(
				'plus'	=> 0,
				'minus'	=> 0,
			),
			902	=> array(
				'plus'	=> 0,
				'minus'	=> 0,
			),
			903	=> array(
				'plus'	=> 0,
				'minus'	=> 0,
			),
			911	=> array(
				'plus'	=> 0,
				'minus'	=> 0,
			)
		);
		
		$BuildTemp		= $PLANET['temp_max'];
		$BuildEnergy	= $USER[$resource[113]];
		
		$ressIDs		= array_merge(array(), $reslist['resstype'][1], $reslist['resstype'][2]);
		
		if($PLANET['energy_used'] != 0) {
			$prodLevel	= min(1, $PLANET['energy'] / abs($PLANET['energy_used']));
		} else {
			$prodLevel	= 0;
		}
		
		foreach($reslist['prod'] as $ProdID)
		{	
			$BuildLevelFactor	= $PLANET[$resource[$ProdID].'_porcent'];
			$BuildLevel 		= $PLANET[$resource[$ProdID]];
		
			$productionList[$ProdID]	= array(
				'production'	=> array(901 => 0, 902 => 0, 903 => 0, 911 => 0),
				'elementLevel'	=> $PLANET[$resource[$ProdID]],
				'prodLevel'		=> $PLANET[$resource[$ProdID].'_porcent'],
			);
			
			foreach($ressIDs as $ID) 
			{
				if(!isset($ProdGrid[$ProdID]['production'][$ID]))
					continue;
					
				$Production	= eval(ResourceUpdate::getProd($ProdGrid[$ProdID]['production'][$ID]));
				
				if($ID != 911)
				{
					$Production	*= $prodLevel * Config::get('resource_multiplier');
				}
				else
				{
					$Production	*= Config::get('energySpeed');
				}
				
				$productionList[$ProdID]['production'][$ID]	= $Production;
				
				if($Production > 0) {
					if($PLANET[$resource[$ID]] == 0) continue;
					
					$temp[$ID]['plus']	+= $Production;
				} else {
					$temp[$ID]['minus']	+= $Production;
				}
			}
		}
				
		$storage	= array(
			901 => shortly_number($PLANET[$resource[901].'_max']),
			902 => shortly_number($PLANET[$resource[902].'_max']),
			903 => shortly_number($PLANET[$resource[903].'_max']),
		);
		
		$basicProduction	= array(
			901 => $basicIncome[901] * Config::get('resource_multiplier'),
			902 => $basicIncome[902] * Config::get('resource_multiplier'),
			903	=> $basicIncome[903] * Config::get('resource_multiplier'),
			911	=> $basicIncome[911] * Config::get('energySpeed'),
		);
		
		$totalProduction	= array(
			901 => $PLANET[$resource[901].'_perhour'] + $basicProduction[901],
			902 => $PLANET[$resource[902].'_perhour'] + $basicProduction[902],
			903	=> $PLANET[$resource[903].'_perhour'] + $basicProduction[903],
			911	=> $PLANET[$resource[911]] + $basicProduction[911] + $PLANET[$resource[911].'_used'],
		);
		
		$bonusProduction	= array(
			901 => $temp[901]['plus'] * ($USER['factor']['Resource'] + 0.02 * $USER[$resource[131]]),
			902 => $temp[902]['plus'] * ($USER['factor']['Resource'] + 0.02 * $USER[$resource[132]]),
			903	=> $temp[903]['plus'] * ($USER['factor']['Resource'] + 0.02 * $USER[$resource[133]]),
			911	=> $temp[911]['plus'] * $USER['factor']['Energy'],
		);
		
		$raceProduction	= array(
			901 => $totalProduction[901] - $bonusProduction[901] - ($temp[901]['plus'] * $USER['factor']['Resource'] + 0.02) - $basicProduction[901],
			902 => $totalProduction[902] - $bonusProduction[902] - ($temp[902]['plus'] * $USER['factor']['Resource'] + 0.02) - $basicProduction[902],
			903	=> $totalProduction[903] - $bonusProduction[903] - ($temp[903]['plus'] * $USER['factor']['Resource'] + 0.02) - $basicProduction[903],
			911	=> ($totalProduction[911] - ($temp[911]['plus'] + ($temp[911]['plus'] * $USER['factor']['Energy']))) + ($PLANET[$resource[911]] - $totalProduction[911]),
		);
		
		$dailyProduction	= array(
			901 => $totalProduction[901] * 24,
			902 => $totalProduction[902] * 24,
			903	=> $totalProduction[903] * 24,
			911	=> $totalProduction[911],
		);
		
		$weeklyProduction	= array(
			901 => $totalProduction[901] * 168,
			902 => $totalProduction[902] * 168,
			903	=> $totalProduction[903] * 168,
			911	=> $totalProduction[911],
		);
			
		$prodSelector	= array();
		
		foreach(range(0, 10) as $procent) {
			$prodSelector[$procent]	= ($procent * 10).'%';
		}
		$Prod_all_planets    =    $GLOBALS['DATABASE']->uniquequery("SELECT SUM(metal_perhour + '".($CONF['metal_basic_income'] * $CONF['resource_multiplier'])."') as metal_perhour, SUM(crystal_perhour + '".($CONF['crystal_basic_income'] * $CONF['resource_multiplier'])."') as crystal_perhour, SUM(deuterium_perhour + '".($CONF['deuterium_basic_income'] * $CONF['resource_multiplier'])."') as deuterium_perhour FROM ".PLANETS." WHERE `id_owner` = '". $USER['id'] ."'AND `planet_type` = '1';");
		$this->tplObj->assign_vars(array(	
			'header'			=> sprintf($LNG['rs_production_on_planet'], $PLANET['name']),
			'prodSelector'		=> $prodSelector,
			'productionList'	=> $productionList,
			'basicProduction'	=> $basicProduction,
			'totalProduction'	=> $totalProduction,
			'bonusProduction'	=> $bonusProduction,
			'raceProduction'	=> $raceProduction,
			'dailyProduction'	=> $dailyProduction,
			'weeklyProduction'	=> $weeklyProduction,
			'storage'			=> $storage,
		'metal_all_planets'                     => pretty_number($Prod_all_planets['metal_perhour']),
        'crystal_all_planets'                   => pretty_number($Prod_all_planets['crystal_perhour']),
        'deuterium_all_planets'                 => pretty_number($Prod_all_planets['deuterium_perhour']),
        'metal_all_planets_daily'               => pretty_number($Prod_all_planets['metal_perhour'] * 24),
        'crystal_all_planets_daily'             => pretty_number($Prod_all_planets['crystal_perhour'] * 24),
        'deuterium_all_planets_daily'           => pretty_number($Prod_all_planets['deuterium_perhour'] * 24),
        'metal_all_planets_weekly'              => pretty_number($Prod_all_planets['metal_perhour'] * 24 * 7),
        'crystal_all_planets_weekly'            => pretty_number($Prod_all_planets['crystal_perhour'] * 24 * 7),
        'deuterium_all_planets_weekly'          => pretty_number($Prod_all_planets['deuterium_perhour'] * 24 * 7),
        'prod_all_planets'                      => $LNG['rs_all_planets'],
		
		));
		
		$this->display('page.resources.default.tpl');
	}
}
