{block name="title" prepend}{$LNG.lm_fleet}{/block}
{block name="content"}
<form action="game.php?page=fleetStep2" method="post" onsubmit="return CheckTarget()" id="form">
<input type="hidden" name="token" value="{$token}">
<input type="hidden" name="fleet_group" value="0">
<input type="hidden" name="target_mission" value="{$mission}">

<div class="row">
<div class="span9">

<h3 class="spec">Fleet Specs</h3>
<div class="tabbable">

<ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#tab1" data-toggle="tab">Fleet</a></li>
    <li><a href="#tab2" data-toggle="tab">{$LNG.fl_shortcuts}</a></li>
</ul>
 
<div class="tab-content">
    <div class="tab-pane fade in active" id="tab1">

<table class="redesign" style="table-layout: fixed;">

<tr style="height:20px;">
<td style="width:50%"><b>{$LNG.fl_destiny}</b></td>
<td>
<input type="text" id="galaxy" name="galaxy" size="3" maxlength="2" onkeyup="updateVars()" value="{$galaxy}">
<input type="text" id="system" name="system" size="3" maxlength="3" onkeyup="updateVars()" value="{$system}">
<input type="text" id="planet" name="planet" size="3" maxlength="2" onkeyup="updateVars()" value="{$planet}">
<select id="type" name="type" onchange="updateVars()">
{html_options options=$typeSelect selected=$type}
</select>
</td>
</tr>
<tr style="height:20px;">
<td><b>{$LNG.fl_fleet_speed}</b></td>
<td>
<select id="speed" name="speed" onChange="updateVars()">
{html_options options=$speedSelect}
</select> %
</td>
</tr>
<tr style="height:20px;">
<td><b>{$LNG.fl_distance}</b></td>
<td id="distance">NaN</td>
</tr>
<tr style="height:20px;">
<td><b>{$LNG.fl_flying_time}</b></th>
<td id="duration">NaN</td>
</tr>
<tr style="height:20px;">
<td><b>{$LNG.fl_flying_arrival}</b></th>
<td id="arrival">NaN</td>
</tr>
<tr style="height:20px;">
<td><b>{$LNG.fl_flying_return}</b></th>
<td id="return">NaN</td>
</tr>
<tr style="height:20px;">
<td><b>{$LNG.fl_fuel_consumption}</b></td>
<td id="consumption">NaN</td>
</tr>
<tr style="height:20px;">
<td><b>{$LNG.fl_max_speed}</b></td>
<td id="maxspeed">NaN</td>
</tr>
<tr style="height:20px;">
<td><b>{$LNG.fl_cargo_capacity}</b></td>
<td id="storage">NaN</td>
</tr>
</table>
<table class="redesign" style="table-layout: fixed;">
<tr style="height:20px;">
<td><p align=right><input type="submit" value="{$LNG.fl_continue}" class="button"></td>
</tr>
</table>

    </div>
    <div class="tab-pane fade in" id="tab2">

<table class="table519" style="table-layout: fixed;">
<tr style="height:20px;">
<th colspan="{$themeSettings.COLONY_ROWS_ON_FLEET1}">{$LNG.fl_my_planets}</th>
</tr>
{foreach $colonyList as $ColonyRow}
{if ($ColonyRow@iteration % $themeSettings.COLONY_ROWS_ON_FLEET1) === 1}<tr style="height:20px;">{/if}
<td>
<a href="javascript:setTarget({$ColonyRow.galaxy},{$ColonyRow.system},{$ColonyRow.planet},{$ColonyRow.type});updateVars();">{$ColonyRow.name}{if $ColonyRow.type == 3}{$LNG.fl_moon_shortcut}{/if} [{$ColonyRow.galaxy}:{$ColonyRow.system}:{$ColonyRow.planet}]</a>
</td>
{if $ColonyRow@last && ($ColonyRow@iteration % $themeSettings.COLONY_ROWS_ON_FLEET1) !== 0}
{$to = $themeSettings.COLONY_ROWS_ON_FLEET1 - ($ColonyRow@iteration % $themeSettings.COLONY_ROWS_ON_FLEET1)}
{for $foo=1 to $to}<td>&nbsp;</td>{/for}
{/if}
{if ($ColonyRow@iteration % $themeSettings.COLONY_ROWS_ON_FLEET1) === 0}</tr>{/if}
{foreachelse}
<tr style="height:20px;">
<td colspan="{$themeSettings.COLONY_ROWS_ON_FLEET1}">{$LNG.fl_no_colony}</td>
</tr>
{/foreach}
</table>

{if $ACSList}
<table class="table519" style="table-layout: fixed;">
<tr style="height:20px;">
<th colspan="{$themeSettings.COLONY_ROWS_ON_FLEET1}">{$LNG.fl_acs_title}</th>
</tr>
{foreach $ACSList as $ACSRow}
{if ($ACSRow@iteration % $themeSettings.ACS_ROWS_ON_FLEET1) === 1}<tr style="height:20px;">{/if}
<tr style="height:20px;">
<td><a href="javascript:setACSTarget({$ACSRow.galaxy},{$ACSRow.system},{$ACSRow.planet},{$ACSRow.planet_type},{$ACSRow.id});">{$ACSRow.name} - [{$ACSRow.galaxy}:{$ACSRow.system}:{$ACSRow.planet}]</a></td>
</tr>
{if $ACSRow@last && ($ACSRow@iteration % $themeSettings.ACS_ROWS_ON_FLEET1) !== 0}
{$to = $themeSettings.ACS_ROWS_ON_FLEET1 - ($ACSRow@iteration % $themeSettings.ACS_ROWS_ON_FLEET1)}
{for $foo=1 to $to}<td>&nbsp;</td>{/for}
{/if}
{if ($ACSRow@iteration % $themeSettings.ACS_ROWS_ON_FLEET1) === 0}</tr>{/if}
{/foreach}
</table>
{/if}

</div>

</div>

</div>
</div>
</div>

</form>
<script type="text/javascript">
data= {$fleetdata|json};
shortCutRows= {$themeSettings.SHORTCUT_ROWS_ON_FLEET1};
fl_no_shortcuts= '{$LNG.fl_no_shortcuts}';
</script>
{/block}