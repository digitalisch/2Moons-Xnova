{block name="title" prepend}{$LNG.lm_fleet}{/block}
{block name="content"}

<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.fl_fleet_sended}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			<tbody>
				<tr class="gradeA">
					<td>{$LNG.fl_mission}</td>			<td>{$LNG.type_mission.{$targetMission}}</td>
				</tr>
				<tr class="gradeA">
        <td>{$LNG.fl_distance}</td>
        <td>{$distance|number}</td>
				</tr>
				<tr class="gradeA">
        <td>{$LNG.fl_fleet_speed}</td>
        <td>{$MaxFleetSpeed|number}</td>
				</tr>
				<tr class="gradeA">
        <td>{$LNG.fl_fuel_consumption}</td>
        <td>{$consumption|number}</td>
				</tr>
				<tr class="gradeA">
        <td>{$LNG.fl_from}</td>
        <td>{$from}</td>
				</tr>
				<tr class="gradeA">
        <td>{$LNG.fl_destiny}</td>
        <td>{$destination}</td>
				</tr>
				<tr class="gradeA">
        <td>{$LNG.fl_return_time}</td>
        <td>{$fleetEndTime}</td>
				</tr>
				<thead>
				<tr>
					<th>{$LNG.fl_fleet}</th>
					<th></th>
				</tr>
			</thead>
			{foreach $FleetList as $ShipID => $ShipCount}
			<tr>
				<td>{$LNG.tech.{$ShipID}}</td>
				<td>{$ShipCount|number}</td>
			</tr>
			{/foreach}

				</tbody>
		</table>
		<!-- Plain Table: End -->

	</div>
	<!-- Box Content: End -->
	
</div>

{/block}