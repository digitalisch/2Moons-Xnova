{block name="title" prepend}{$LNG.lm_overview}{/block}
{block name="script" append}{/block}
{block name="content"}
<script>
$(function() {
		$( "#tabs" ).tabs();
	});
</script>
<table style="width: 90%;">
	<tr>
		<th colspan="4" style="text-align:center;"><a href="#" onclick="return Dialog.PlanetAction();" title="{$LNG.ov_planetmenu}">{$LNG.type_planet.$planet_type} "<span class="planetname">{$planetname}</span>"</a></th>
	</tr>
	
	<tr>
		<td>{$LNG.ov_server_time}</td>
		<td colspan="3" class="servertime" style="">{$servertime}</td>
	</tr>
	{if $is_news}
		<tr>
			<td>{$LNG.ov_news}</td>
			<td colspan="3" style="">{$news}</td>
		</tr>
	{/if}
	{if !empty($chatOnline)}
		<tr>
			<td style="white-space: nowrap;">{$LNG.ov_chat_online}</td>
			<td colspan="3" style="">{foreach $chatOnline as $Name}{if !$Name@first},&nbsp;{/if}<a href="?page=chat">{$Name}</a>{/foreach}</td>
		</tr>
	{/if}
	{if $teamspeakData !== false}
		<tr>
			<td>{$LNG.ov_teamspeak}</td>
			<td colspan="4" style="">{if $teamspeakData.error}{$teamspeakData.error}{else}<a href="{$teamspeakData.url}">{$LNG.ov_teamspeak_connect}</a> &bull; {$LNG.ov_teamspeak_online}: {$teamspeakData.current}/{$teamspeakData.max}{/if}</td>
		</tr>
	{/if}
	{if $allyid > 0}
	<tr>
		<td colspan="4">
			{$LNG.t_ally1}
			<a href="game.php?page=alliance">
				{$allyname}
			</a>
			<br>
			{$LNG.t_ally2}
			{$allyrank}	
		</td>
	</tr>
	{/if}
	<tr>
		<td colspan="4">
			<a href="?page=messages">
				{if $messages}
					{$messages}
				{else}
					{$LNG.no_messages}
				{/if}
			</a>
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<center>
				<b>
					<a href="game.php?page=changelog"style="color:gold">
						Changelog
					</a> 
					|| 
					<a href="#" onclick="return Dialog.infos();"style="color:gold">
						Server-Infos
					</a>
					|| 
					<a href="game.php?page=ref" style="color:gold">
							{$LNG.ov_reflink}
					</a>
				</b>
			</center>
		</td>
	</tr>
	<tr>
		<td style="white-space: nowrap; width: 25%;">
			{$LNG.ov_admins_online}
		</td>
		<td style="width: 25%;">
			{foreach $AdminsOnline as $ID => $Name}
				{if !$Name@first}
					&nbsp;&bull;&nbsp;
				{/if}
				<a href="#" onclick="return Dialog.PM({$ID})">
					{$Name}
				</a>
			{foreachelse}
				{$LNG.ov_no_admins_online}
			{/foreach}
		</td>
		<td valign="middle" nowrap="nowrap" style="width: 25%;">
			User Online :  
		</td>            
		<td align="left" valign="middle" style="width: 25%;">
			<div align="left">	
				<a style="color:lime"><center>
					{$online_users}
				</a>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2"  style="width: 50%;">
			<a class="htooltip">
				<span>
					<table width="400">
						<tr>
							<td style="width: 50%;">
								Planeten
							</td>
							<td style="width: 50%;">
								{$planets} / {$maxplanets}
							</td>
						</tr>
						<tr>
							<td style="width: 50%;">
								{$LNG.ov_diameter}
							</td>
							<td style="width: 50%;">
								{$planet_diameter} {$LNG.ov_distance_unit} 
								(<a title="{$LNG.ov_developed_fields}">
									{$planet_field_current}
								</a> 
								/ 
								<a title="{$LNG.ov_max_developed_fields}">
									{$planet_field_max}
								</a> 
								{$LNG.ov_fields})
							</td>
						</tr>
						<tr>
							<td style="width: 50%;">
								{$LNG.ov_temperature}
							</td>
							<td style="width: 50%;">
								{$LNG.ov_aprox} {$planet_temp_min}{$LNG.ov_temp_unit} {$LNG.ov_to} {$planet_temp_max}{$LNG.ov_temp_unit}
							</td>
						</tr>
						<tr>
							<td style="width: 50%;">
								{$LNG.ov_position}
							</td>
							<td style="width: 50%;">
								<a href="game.php?page=galaxy&amp;galaxy={$galaxy}&amp;system={$system}">
									[{$galaxy}:{$system}:{$planet}]
								</a>
							</td>
						</tr>
						{if isModulAvalible(25)}
							<tr>
								<td style="width: 50%;">
									{$LNG.ov_points}
								</td>
								<td style="width: 50%;">
									{$rankInfo}
								</td>
							</tr>
						{/if}
						<tr>
							<td style="width: 50%;">
								Erfolge
							</td>
							<td style="width: 50%;">
								{$erfolge}
							</td>
						<tr>
					</table>
				</span>
					{$LNG.info}
			</a>
		</td>
		<td colspan="2" style="width: 50%;">
			<a class="htooltip">
				<span>
					<table width="400">
						<tr>
							<td style="width: 50%;">
								{$LNG.buildings}
							</td>
							<td colspan="2" style="width: 50%;">
								<font color="red">
									{if $buildInfo.buildings}
										{$LNG.tech[$buildInfo.buildings['id']]} ({$buildInfo.buildings['level']})<br>
										<div class="timer" data-time="{$buildInfo.buildings['timeleft']}">
											{$buildInfo.buildings['starttime']}
										</div>
									{else}
										{$LNG.ov_free}
									{/if}
								</font>
							</td>
						</tr>
						<tr>
							<td style="width: 50%;">
								{$LNG.research}
							</td>
							<td colspan="2" style="width: 50%;">
								<font color="red">
									{if $buildInfo.tech}
										{$LNG.tech[$buildInfo.tech['id']]} ({$buildInfo.tech['level']})<br>
										<div class="timer" data-time="{$buildInfo.tech['timeleft']}">
											{$buildInfo.tech['starttime']}
										</div>
									{else}
										{$LNG.ov_free}
									{/if}
								</font>
							</td>
						</tr>
						<tr>
							<td style="width: 50%;">
								{$LNG.fleet}
							</td>
							<td colspan="2" style="width: 50%;">
								<font color="red">
									{if $buildInfo.fleet}
										{$LNG.tech[$buildInfo.fleet['id']]} ({$buildInfo.fleet['level']})<br>
										<div class="timer" data-time="{$buildInfo.fleet['timeleft']}">
											{$buildInfo.fleet['starttime']}
										</div>
									{else}
										{$LNG.ov_free}
									{/if}
								</font>
							</td>
						</tr>
					</table>
				</span>
				{$LNG.job}
			</a>
		</td>
	</tr>
	<tr>
		<th colspan="4">{$LNG.ov_events}</th>
	</tr>
	{foreach $fleets as $index => $fleet}
		<tr>
			<td id="fleettime_{$index}" class="fleets" data-fleet-end-time="{$fleet.returntime}" data-fleet-time="{$fleet.resttime}">
				-
			</td>
			<td colspan="3">
				{$fleet.text}
			</td>
		</tr>
	{/foreach}
</table>
{/block}