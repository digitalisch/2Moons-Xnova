{block name="title" prepend}{$LNG.lm_fleet}{/block}
{block name="content"}
<form action="game.php?page=fleetStep3" method="post">
<input type="hidden" name="token" value="{$token}">

<div class="grid_8">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon info">{$galaxy}:{$system}:{$planet} - {$LNG.type_planet.{$type}}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Stats Table: Start -->
		<table>
			
			<tbody>
			{foreach $MissionSelector as $MissionID} 
					<tr>
						<td class="transparent left">
						<input id="radio_{$MissionID}" type="radio" name="mission" value="{$MissionID}" {if $mission == $MissionID}checked="checked"{/if}>{$LNG.type_mission.{$MissionID}}<br>
							{if $MissionID == 15}<br><div style="color:red;padding-left:13px;">{$LNG.fl_expedition_alert_message}</div><br>{/if}
							{if $MissionID == 11}<br><div style="color:red;padding-left:13px;">{$LNG.fl_dm_alert_message}</div><br>{/if}
						</td>
					</tr>
					{/foreach}
			
		</tbody></table>
		<!-- Stats Table: End -->
		
	</div>
	<!-- Box Content: End -->
	
</div>

<div class="grid_16">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon info">{$LNG.fl_mission}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Stats Table: Start -->
		<table>
			
			<tbody>
					 <tr style="height:20px;">
        				<td class="transparent">{$LNG.tech.901}</td>
        				<td class="transparent"><a href="javascript:maxResource('metal');">{$LNG.fl_max}</a></th>
        				<td class="transparent"><input name="metal" size="10" onchange="calculateTransportCapacity();" type="text"></td>
        			</tr>
                    <tr style="height:20px;">
        				<td class="transparent">{$LNG.tech.902}</td>
        				<td class="transparent"><a href="javascript:maxResource('crystal');">{$LNG.fl_max}</a></th>
        				<td class="transparent"><input name="crystal" size="10" onchange="calculateTransportCapacity();" type="text"></td>
        			</tr>
                    <tr style="height:20px;">
        				<td class="transparent">{$LNG.tech.903}</td>
        				<td class="transparent"><a href="javascript:maxResource('deuterium');">{$LNG.fl_max}</a></td>
        				<td class="transparent"><input name="deuterium" size="10" onchange="calculateTransportCapacity();" type="text"></td>
        			</tr>
                    <tr style="height:20px;">
        				<td class="transparent">{$LNG.fl_resources_left}</td>
        				<td class="transparent" colspan="2" id="remainingresources">-</td>
        			</tr>
                    <tr style="height:20px;">
        				<td class="transparent" colspan="3"><a href="javascript:maxResources()">{$LNG.fl_all_resources}</a></td>
        			</tr>
                    <tr style="height:20px;">
        				<td class="transparent" colspan="3">{$LNG.fl_fuel_consumption}: <span id="consumption" class="consumption">{$consumption}</span></td>
        			</tr>
					{if $StaySelector}
		<tr style="height:20px;">
			<td class="transparent" colspan="3">
			{$LNG.fl_hold_time} : {html_options name=staytime options=$StaySelector} {$LNG.fl_hours}

		{/if}
        	<div style="text-align:right;float:right;"><input value="{$LNG.fl_continue}" type="submit"></input></div></td>
			</td>
		</tr>	
		
		</tbody></table>
		<!-- Stats Table: End -->
		
	</div>
	<!-- Box Content: End -->
	
</div></form>

<script type="text/javascript">
data	= {$fleetdata|json};
</script>
{/block}