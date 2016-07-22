{block name="title" prepend}{$LNG.lm_fleet}{/block}
{block name="content"}
<section id="playground">
<div class="full-width">
<div class="box">
<div class="inner"> 
<div class="titlebar">{$LNG.lm_fleet}</div>
<div class="contents">
<table style="width:100%">
	<tr style="height:20px">
		<th colspan="2" class="success">{$LNG.fl_fleet_sended}</span></th>
	</tr>
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
</section>
{/block}