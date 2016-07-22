{block name="title" prepend}{$LNG.lm_fleet}{/block}
{block name="content"}

 
<div class="row">
<div class="span9">

<h3 class="spec">Fleet Specs</h3>
<div class="tabbable">

<ul class="nav nav-tabs" id="myTab">
<li class="active"><a href="#tab1" data-toggle="tab">Info</a></li>
</ul>
 
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">
<table class="redesign">
    <tr style="height:20px">
        <td>{$LNG.fl_mission}</td>
        <td>{$LNG.type_mission.{$targetMission}}</td>
	</tr>
    <tr style="height:20px">
        <td>{$LNG.fl_distance}</td>
        <td>{$distance|number}</td>
    </tr>
    <tr style="height:20px">
        <td>{$LNG.fl_fleet_speed}</td>
        <td>{$MaxFleetSpeed|number}</td>
    </tr>
    <tr style="height:20px">
        <td>{$LNG.fl_fuel_consumption}</td>
        <td>{$consumption|number}</td>
    </tr>
    <tr style="height:20px">
        <td>{$LNG.fl_from}</td>
        <td>{$from}</td>
    </tr>
    <tr style="height:20px">
        <td>{$LNG.fl_destiny}</td>
        <td>{$destination}</td>
    </tr>
    <tr style="height:20px">
        <td>{$LNG.fl_arrival_time}</td>
        <td>{$fleetStartTime}</td>
    </tr>
    <tr style="height:20px">
        <td>{$LNG.fl_return_time}</td>
        <td>{$fleetEndTime}</td>
    </tr>
    <tr style="height:20px">
        <th colspan="2">{$LNG.fl_fleet}</th>
    </tr>
	{foreach $FleetList as $ShipID => $ShipCount}
	<tr>
		<td>{$LNG.tech.{$ShipID}}</td>
		<td>{$ShipCount|number}</td>
	</tr>
	{/foreach}
	</table>
</div>
</div>
</div>
</div>
</div>

{/block}