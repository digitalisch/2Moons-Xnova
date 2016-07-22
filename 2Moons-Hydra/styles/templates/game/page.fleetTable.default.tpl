{block name="title" prepend}{$LNG.lm_fleet}{/block}
{block name="content"}

<div class="grid_24">

<!-- Box Header: Start -->
<div class="box_top">

<h2 class=" ">Fleet Activity <span>{$LNG.fl_fleets} {$activeFleetSlots} / {$maxFleetSlots}</span> <span>{$activeExpedition} / {$maxExpedition} {$LNG.fl_expeditions}</span></h2>

</div>
<!-- Box Header: End -->

<!-- Box Content: Start -->
<div class="box_content">

<!-- Simple Sorting Table + Pagination: Start -->
<div class="dataTables_wrapper"><table class="simple_sorting">
<thead>

<tr>
<th class="sorting_disabled" rowspan="1" colspan="1">{$LNG.fl_mission}</th>
<th class="sorting_disabled" rowspan="1" colspan="1">{$LNG.fl_ammount}</th>
<th class="sorting_disabled" rowspan="1" colspan="1">{$LNG.fl_beginning}</th>
<th class="sorting_disabled" rowspan="1" colspan="1">{$LNG.fl_destiny}</th>
<th class="sorting_disabled" rowspan="1" colspan="1">{$LNG.fl_arrival}</th>
<th class="sorting_disabled" rowspan="1" colspan="1">{$LNG.fl_objective}</th>
<th class="sorting_disabled" rowspan="1" colspan="1">{$LNG.fl_order}</th>



</thead>

<tbody>
	{foreach name=FlyingFleets item=FlyingFleetRow from=$FlyingFleetList}

<tr class=" odd">
<td>{$LNG.type_mission.{$FlyingFleetRow.mission}}
	{if $FlyingFleetRow.state == 1}
		<a title="{$LNG.fl_returning}">{$LNG.fl_r}</a>
	{else}
		<a title="{$LNG.fl_onway}">{$LNG.fl_a}</a>
	{/if}</td>
<td><a class="tip" title="{foreach $FlyingFleetRow.FleetList as $shipID => $shipCount}
{$LNG.tech.{$shipID}}: {$shipCount}{/foreach}">{$FlyingFleetRow.amount}</a></td>
<td class="center"><a href="game.php?page=galaxy&amp;galaxy={$FlyingFleetRow.startGalaxy}&amp;system={$FlyingFleetRow.startSystem}">[{$FlyingFleetRow.startGalaxy}:{$FlyingFleetRow.startSystem}:{$FlyingFleetRow.startPlanet}]</a></td>
<td class="center"><a href="game.php?page=galaxy&amp;galaxy={$FlyingFleetRow.endGalaxy}&amp;system={$FlyingFleetRow.endSystem}">[{$FlyingFleetRow.endGalaxy}:{$FlyingFleetRow.endSystem}:{$FlyingFleetRow.endPlanet}]</a></td>
{if $FlyingFleetRow.mission == 4 && $FlyingFleetRow.state == 0}
	<td>-</td>
	{else}
	<td{if $FlyingFleetRow.state != 0} style="color:lime"{/if}>{$FlyingFleetRow.endTime}</td>
	{/if}
<td id="fleettime_{$smarty.foreach.FlyingFleets.iteration}" class="fleets" data-fleet-end-time="{$FlyingFleetRow.returntime}" data-fleet-time="{$FlyingFleetRow.resttime}">{pretty_fly_time({$FlyingFleetRow.resttime})}</td>
<td class="align_left buttons tools center">
	{if !$isVacation && $FlyingFleetRow.state != 1}
		<form action="game.php?page=fleetTable&amp;action=sendfleetback" method="post">
		<input name="fleetID" value="{$FlyingFleetRow.id}" type="hidden">
		<input value="{$LNG.fl_send_back}" type="submit">
		</form>
		{if $FlyingFleetRow.mission == 1}
		<form action="game.php?page=fleetTable&amp;action=acs" method="post">
		<input name="fleetID" value="{$FlyingFleetRow.id}" type="hidden">
		<input value="{$LNG.fl_acs}" type="submit">
		</form>
		{/if}
	{else}
	&nbsp;-&nbsp;
	{/if}
</td>
</tr>
	{foreachelse}
	<tr class="gradeX odd">
<td>-</td>
<td>-</td>
<td>-</td>
<td class="center">-</td>
<td class="center">-</td>
<td class="center">-</td>
<td class="center">-</td>
</tr>

	{/foreach}


</tbody></table>
<!-- Simple Sorting Table + Pagination: End -->

</div>
<!-- Box Content: End -->

</div>


<!-- Box Content: End -->

<!-- Box Header: Start -->
<div class="box_top">

<h2 class=" ">Fleet</h2>

</div>
<!-- Box Header: End -->

<!-- Box Content: Start -->
<div class="box_content">

<form action="?page=fleetStep1" method="post">
<input type="hidden" name="galaxy" value="{$targetGalaxy}">
<input type="hidden" name="system" value="{$targetSystem}">
<input type="hidden" name="planet" value="{$targetPlanet}">
<input type="hidden" name="type" value="{$targetType}">
<input type="hidden" name="target_mission" value="{$targetMission}">

<!-- Simple Sorting Table + Pagination: Start -->
<div class="dataTables_wrapper"><table class="">
<thead>

<tr>
<th class="sorting_disabled" rowspan="1" colspan="1">{$LNG.fl_ship_type}</th>
<th class="sorting_disabled" rowspan="1" colspan="1">{$LNG.fl_ship_available}</th>
<th class="sorting_disabled" rowspan="1" colspan="1">-</th>
<th class="sorting_disabled" rowspan="1" colspan="1">-</th>
</thead>
<tbody>	

{foreach $FleetsOnPlanet as $FleetRow}
<tr class=" odd">

<td class="center">{if $FleetRow.speed != 0} <a title="{$LNG.fl_speed_title} {$FleetRow.speed}">{$LNG.tech.{$FleetRow.id}}</a>{else}{$LNG.tech.{$FleetRow.id}}{/if}</td>
<td id="ship{$FleetRow.id}_value">{$FleetRow.count|number}</td>
{if $FleetRow.speed != 0}
<td><a href="javascript:maxShip('ship{$FleetRow.id}');">{$LNG.fl_max}</a></td>
<td><input name="ship{$FleetRow.id}" id="ship{$FleetRow.id}_input" size="10" value="0"></td>
{else}
<td>&nbsp;</td>
<td>&nbsp;</td>
{/if}
{/foreach}
</tr>
{if $maxFleetSlots != $activeFleetSlots}
<tr>
 
<td><a href="javascript:noShips();"><span>{$LNG.fl_remove_all_ships}</span></a></td>
<td><a href="javascript:maxShips();"><span>{$LNG.fl_select_all_ships}</span></a></td>
<td></td>
<td><input type="submit" value="{$LNG.fl_continue}"></td>
</tr>
{/if}</form>


</tbody></table>
<!-- Simple Sorting Table + Pagination: End -->

</div>
<!-- Box Content: End -->

</div>


{if !empty($acsData)}
{include file="shared.fleetTable.acsTable.tpl"}
{/if}

<!-- Box Header: Start -->
<div class="box_top">

<h2 class=" ">{$LNG.fl_bonus}</h2>

</div>
<!-- Box Header: End -->

<!-- Box Content: Start -->
<div class="box_content">

<!-- Simple Sorting Table + Pagination: Start -->
<div class="dataTables_wrapper"><table class="">
<thead>

<tr>
<th class="sorting_disabled" rowspan="1" colspan="1">{$LNG.fl_bonus_attack}</th>
<th class="sorting_disabled" rowspan="1" colspan="1">{$LNG.fl_bonus_defensive}</th>
<th class="sorting_disabled" rowspan="1" colspan="1">{$LNG.fl_bonus_shield}</th>
<th class="sorting_disabled" rowspan="1" colspan="1">{$LNG.tech.115}</th>
<th class="sorting_disabled" rowspan="1" colspan="1">{$LNG.tech.117}</th>
<th class="sorting_disabled" rowspan="1" colspan="1">{$LNG.tech.118}</th>
</thead>
<tbody>	

<tr class=" odd">

<td class="center">+{$bonusAttack} %</td>
<td class="center">+{$bonusDefensive} %</td>
<td class="center">+{$bonusShield} %</td>
<td class="center">+{$bonusCombustion} %</td>
<td class="center">+{$bonusImpulse} %</td>
<td class="center">+{$bonusHyperspace} %</td>


</tr>



</tbody></table>
<!-- Simple Sorting Table + Pagination: End -->

</div>
<!-- Box Content: End -->

</div>


<!-- Box Content: End -->

</div>
{/block}
{block name="script" append}<script src="scripts/game/fleetTable.js"></script>{/block}