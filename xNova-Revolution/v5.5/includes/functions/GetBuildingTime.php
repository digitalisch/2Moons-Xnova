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

if(!defined('INSIDE')) die('Hacking attempt!');

	function GetBuildingTime ($USER, $PLANET, $Element, $Destroy = false)
	{
		global $pricelist, $resource, $reslist, $CONF, $requeriments;

		$CONF	= getConfig($USER['universe']);
		$level = isset($PLANET[$resource[$Element]]) ? $PLANET[$resource[$Element]] : $USER[$resource[$Element]];
		
	$Cost = floor($pricelist[$Element]['metal'] * pow($pricelist[$Element]['factor'], $level)) + floor($pricelist[$Element]['crystal'] * pow($pricelist[$Element]['factor'], $level)) - floor(($pricelist[$Element]['norio'] * 2) * pow($pricelist[$Element]['factor'], $level));
		if	   (in_array($Element, $reslist['build']))
			$time			= $Cost / ($CONF['game_speed'] * (2 + $PLANET[$resource[14]])) * pow(0.5, $PLANET[$resource[15]]);
		elseif (in_array($Element, $reslist['fleet']))
			$time			= $Cost / ($CONF['game_speed'] * (1 + ($PLANET[$resource[21]] + $PLANET[$resource[14]]))) * pow(0.5, $PLANET[$resource[15]]);	
		elseif (in_array($Element, $reslist['defense']))
			$time			= $Cost / ($CONF['game_speed'] * (1 + ($PLANET[$resource[21]] + $PLANET[$resource[14]]))) * pow(0.5, $PLANET[$resource[15]]);
		elseif (in_array($Element, $reslist['tech']))
		{
			if(is_array($PLANET[$resource[31].'_inter']))
			{
				$Level = 0;
				foreach($PLANET[$resource[31].'_inter'] as $Levels)
				{
					if($Levels >= $requeriments[$Element][31])
						$Level += $Levels;
				}
			}
			else
				$Level	= $PLANET[$resource[31]];

			$time	= $Cost / (1000 * ($Level * 2)) / ($CONF['game_speed'] / 2500) * pow(1 - UNIVERISTY_RESEARCH_REDUCTION / 100, $PLANET[$resource[6]]);
			#$time = $Cost / ($CONF['game_speed'] * (1000 * ($Level * 2))) * pow(1 - UNIVERISTY_RESEARCH_REDUCTION / 100, $PLANET[$resource[6]]);
		}
		
		if(!$Destroy)
			$time	= floor($time * 3600);
		else
			$time	= floor($time * 1300);
		
		return max($time, $CONF['min_build_time']);
	}

?>