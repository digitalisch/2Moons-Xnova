{block name="title" prepend}{$LNG.lm_fleet}{/block}
{block name="content"}


<div class="row">
<div class="span9">
<h3 class="spec">{$LNG.lm_fleet}</h3>
<div class="accordion" id="accordionArea">
<div class="accordion-group">
<div class="accordion-heading accordionize">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#oneArea">
{$LNG.fl_fleets} ({$activeFleetSlots} {$LNG.ov_of} {$maxFleetSlots})
&nbsp&nbsp&nbsp&nbsp&nbsp
{$LNG.fl_expeditions} ({$activeExpedition} {$LNG.ov_of} {$maxExpedition})
<span class="font-icon-arrow-simple-down"></span>
</a>
</div>
<div id="oneArea" class="accordion-body collapse">
<div class="accordion-inner">

<table class="redesign"><tr>
</tr>
<tr>
<td>{$LNG.fl_number}</td>
<td>{$LNG.fl_mission}</td>
<td>{$LNG.fl_ammount}</td>
<td>{$LNG.fl_beginning}</td>
<td>{$LNG.fl_departure}</td>
<td>{$LNG.fl_destiny}</td>
<td>{$LNG.fl_arrival}</td>
<td>{$LNG.fl_objective}</td>
<td>{$LNG.fl_order}</td>
</tr>
{foreach name=FlyingFleets item=FlyingFleetRow from=$FlyingFleetList}
<tr>
<td>{$smarty.foreach.FlyingFleets.iteration}</td>
<td>{$LNG.type_mission.{$FlyingFleetRow.mission}}

</td>
<td><a class="tooltip_sticky" data-tooltip-content="<table width='100%'><tr><th colspan='2' style='text-align:center;'>{$LNG.fl_info_detail}</th></tr>{foreach $FlyingFleetRow.FleetList as $shipID => $shipCount}<tr><td class='transparent'>{$LNG.tech.{$shipID}}:</td><td class='transparent'>{$shipCount}</td></tr>{/foreach}</table>">{$FlyingFleetRow.amount}</a></td>
<td><a href="game.php?page=galaxy&amp;galaxy={$FlyingFleetRow.startGalaxy}&amp;system={$FlyingFleetRow.startSystem}">[{$FlyingFleetRow.startGalaxy}:{$FlyingFleetRow.startSystem}:{$FlyingFleetRow.startPlanet}]</a></td>
<td{if $FlyingFleetRow.state == 0} style="color:lime"{/if}>{$FlyingFleetRow.startTime}</td>
<td><a href="game.php?page=galaxy&amp;galaxy={$FlyingFleetRow.endGalaxy}&amp;system={$FlyingFleetRow.endSystem}">[{$FlyingFleetRow.endGalaxy}:{$FlyingFleetRow.endSystem}:{$FlyingFleetRow.endPlanet}]</a></td>
{if $FlyingFleetRow.mission == 4 && $FlyingFleetRow.state == 0}
<td>-</td>
{else}
<td{if $FlyingFleetRow.state != 0} style="color:lime"{/if}>{$FlyingFleetRow.endTime}</td>
{/if}
<td id="fleettime_{$smarty.foreach.FlyingFleets.iteration}" class="fleets" data-fleet-end-time="{$FlyingFleetRow.returntime}" data-fleet-time="{$FlyingFleetRow.resttime}">{pretty_fly_time({$FlyingFleetRow.resttime})}</td>
<td>
{if !$isVacation && $FlyingFleetRow.state != 1}
<form action="game.php?page=fleetTable&amp;action=sendfleetback" method="post">
<input name="fleetID" value="{$FlyingFleetRow.id}" type="hidden">
<input class="button button-mini" value="{$LNG.fl_send_back}" type="submit">
</form>
{if $FlyingFleetRow.mission == 1}
<form action="game.php?page=fleetTable&amp;action=acs" method="post">
<input name="fleetID" value="{$FlyingFleetRow.id}" type="hidden">
<input class="button button-mini" value="{$LNG.fl_acs}" type="submit">
</form>
{/if}
{else}
&nbsp;-&nbsp;
{/if}
</td>
</tr>
{foreachelse}
<tr>
<td>-</td>
<td>-</td>
<td>-</td>
<td>-</td>
<td>-</td>
<td>-</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>
{/foreach}
{if $maxFleetSlots == $activeFleetSlots}
<tr><td colspan="9">{$LNG.fl_no_more_slots}</td></tr>
{/if}</table>

</div>
</div>
</div> 

<br>

<form action="?page=fleetStep1" method="post">
<input type="hidden" name="galaxy" value="{$targetGalaxy}">
<input type="hidden" name="system" value="{$targetSystem}">
<input type="hidden" name="planet" value="{$targetPlanet}">
<input type="hidden" name="type" value="{$targetType}">
<input type="hidden" name="target_mission" value="{$targetMission}">

<div class="tabbable">

<ul class="nav nav-tabs" id="myTab">
<li class="active"><a href="#tab1" data-toggle="tab">Fleet</a></li>
<li><a href="#tab2" data-toggle="tab">{$LNG.fl_bonus}</a></li>
<li><a href="#tab3" data-toggle="tab">{$LNG.fl_acs}</a></li>
</ul>
 
<div class="tab-content">
<div class="tab-pane fade in active" id="tab1">

<table class="redesign">
<tr style="height:20px;">
<td>{$LNG.fl_ship_type}</td>
<td>{$LNG.fl_ship_available}</td>
<td></td>
<td></td>
</tr>
{foreach $FleetsOnPlanet as $FleetRow}
<tr style="height:20px;">
<td width="450">{if $FleetRow.speed != 0} <a title="{$LNG.fl_speed_title} {$FleetRow.speed}">{$LNG.tech.{$FleetRow.id}}</a>{else}{$LNG.tech.{$FleetRow.id}}{/if}</td>
<td id="ship{$FleetRow.id}_value" width="100">{$FleetRow.count|number}</td>
{if $FleetRow.speed != 0}
<td><a href="javascript:maxShip('ship{$FleetRow.id}');">{$LNG.fl_max}</a></td>
<td><input name="ship{$FleetRow.id}" id="ship{$FleetRow.id}_input" size="10" value="0"></td>
{else}
<td>&nbsp;</td>
<td>&nbsp;</td>
{/if}
</tr>
{/foreach}
<tr style="height:20px;">
{if count($FleetsOnPlanet) == 0}
<td colspan="4">{$LNG.fl_no_ships}</td>
{else}
<td colspan="2"><a href="javascript:noShips();">{$LNG.fl_remove_all_ships}</a></td>
<td colspan="2"><a href="javascript:maxShips();">{$LNG.fl_select_all_ships}</a></td>
{/if}
</tr>
{if $maxFleetSlots != $activeFleetSlots}
<tr style="height:20px;"><td colspan="4"><center><input type="submit" class="button" value="{$LNG.fl_continue}"></center></td>
{/if}
</table>

</div>
<div class="tab-pane fade in" id="tab2">
<table class="redesign">
<tr><th style="width:33%">{$LNG.fl_bonus_attack}</th><th style="width:33%">{$LNG.fl_bonus_defensive}</th><th style="width:33%">{$LNG.fl_bonus_shield}</th></tr>
<tr><td>+{$bonusAttack} %</td><td>+{$bonusDefensive} %</td><td>+{$bonusShield} %</td></tr>
<tr><th style="width:33%">{$LNG.tech.115}</th><th style="width:33%">{$LNG.tech.117}</th><th style="width:33%">{$LNG.tech.118}</th></tr>
<tr><td>+{$bonusCombustion} %</td><td>+{$bonusImpulse} %</td><td>+{$bonusHyperspace} %</td></tr>
</table>
</div>
<div class="tab-pane fade in" id="tab3">
{if !empty($acsData)}
{include file="shared.fleetTable.acsTable.tpl"}
{else}{$LNG.missing_acs}{/if}
</div>
</div>

</div>
</div>

{/block}
{block name="script" append}<script src="scripts/game/fleetTable.js"></script>{/block}