{block name="title" prepend}{$LNG.lm_fleet}{/block}
{block name="content"}

<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.fl_send_fleet}</h2>
		
	</div>
	<!-- Box Header: End -->
	<form action="game.php?page=fleetStep2" method="post" onsubmit="return CheckTarget()" id="form">
	<input type="hidden" name="token" value="{$token}">
	<input type="hidden" name="fleet_group" value="0">
	<input type="hidden" name="target_mission" value="{$mission}">
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			<tbody>
				<tr class="gradeA">
					<td><select id="type" name="type" onchange="updateVars()">
					{html_options options=$typeSelect selected=$type}
				</select></td>
					<td><input type="text" id="galaxy" name="galaxy" size="3" maxlength="2" onkeyup="updateVars()" value="{$galaxy}">
				<input type="text" id="system" name="system" size="3" maxlength="3" onkeyup="updateVars()" value="{$system}">
				<input type="text" id="planet" name="planet" size="3" maxlength="2" onkeyup="updateVars()" value="{$planet}"></td>
				</tr>
				
				<tr class="gradeA">
					<td>{$LNG.fl_fleet_speed}</td>
					<td><select id="speed" name="speed" onChange="updateVars()">
					{html_options options=$speedSelect}
				</select> %</td>
				</tr>
				
				<tr class="gradeA">
					<td>{$LNG.fl_distance}</td>
			<td id="distance">-</td>
				</tr>
				
				<tr class="gradeA">
					<td>{$LNG.fl_flying_time}</th>
			<td id="duration">-</td>
				</tr>
				
				<tr class="gradeA">
					<td>{$LNG.fl_flying_arrival}</th>
			<td id="arrival">-</td>
				</tr>
				
				<tr class="gradeA">
					<td>{$LNG.fl_flying_return}</th>
			<td id="return">-</td>
				</tr>
				
				<tr class="gradeA">
					<td>{$LNG.fl_fuel_consumption}</td>
			<td id="consumption">-</td>
				</tr>
				
				<tr class="gradeA">
					<td>{$LNG.fl_max_speed}</td>
			<td id="maxspeed">-</td>
				</tr>
			
				<tr class="gradeA">
					<td>{$LNG.fl_cargo_capacity}</td>
			<td id="storage">-</td>
				</tr>
				
				<tr class="gradeA">
					<td></td>
			<td id="storage"><input type="submit" value="{$LNG.fl_continue}"></td>
				</tr>
				
			</tbody>
		</table>
		<!-- Plain Table: End -->

	</div></form>

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.fl_my_planets}</h2>
		
	</div>
	<!-- Box Header: End -->
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			<tbody>
			<tr class="gradeA">
				{foreach $colonyList as $ColonyRow}
		{if ($ColonyRow@iteration % $themeSettings.COLONY_ROWS_ON_FLEET1) === 1}<tr style="height:20px;">{/if}
				
					<td><a href="javascript:setTarget({$ColonyRow.galaxy},{$ColonyRow.system},{$ColonyRow.planet},{$ColonyRow.type});updateVars();">{$ColonyRow.name}{if $ColonyRow.type == 3}{$LNG.fl_moon_shortcut}{/if} [{$ColonyRow.galaxy}:{$ColonyRow.system}:{$ColonyRow.planet}]</a></td>
					
		{if $ColonyRow@last && ($ColonyRow@iteration % $themeSettings.COLONY_ROWS_ON_FLEET1) !== 0}
		{$to = $themeSettings.COLONY_ROWS_ON_FLEET1 - ($ColonyRow@iteration % $themeSettings.COLONY_ROWS_ON_FLEET1)}
		{for $foo=1 to $to}<td>&nbsp;</td>{/for}
		{/if}
		
		{if ($ColonyRow@iteration % $themeSettings.COLONY_ROWS_ON_FLEET1) === 0}</tr>{/if}
		{foreachelse}
			<td colspan="{$themeSettings.COLONY_ROWS_ON_FLEET1}">{$LNG.fl_no_colony}</td>
		{/foreach}
				</tr>
								
			</tbody>
		</table>
		<!-- Plain Table: End -->

	</div>
	<!-- Box Content: End -->
	
</div>

<script type="text/javascript">
data			= {$fleetdata|json};
shortCutRows	= {$themeSettings.SHORTCUT_ROWS_ON_FLEET1};
fl_no_shortcuts	= '{$LNG.fl_no_shortcuts}';
</script>
{/block}