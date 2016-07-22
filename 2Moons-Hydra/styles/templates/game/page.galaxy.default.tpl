{block name="title" prepend}{$LNG.lm_galaxy}{/block}
{block name="content"}




	<form action="?page=galaxy" method="post" id="galaxy_form">
	<input type="hidden" id="auto" value="dr">
	<div class="grid_24">
	
		<!-- Info Notice: Start -->
	<div class="notice info">
		<p>You can add the buttons of skip Galaxy or System easily. Just follow page.galaxy.default.txt</p>
	</div>
	<!-- Info Notice: End -->
	
		<!-- Box Header: Start -->
	<div class="box_top"><h2>{$LNG.gl_solar_system} {$galaxy}:{$system}</h2>
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			<thead>
				<tr>
					<th>{$LNG.gl_galaxy}</th>
					<th>{$LNG.gl_solar_system}</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr class="gradeA">
					<td><input type="text" name="galaxy" value="{$galaxy}" size="5" maxlength="3" tabindex="1"></td>
					<td><input type="text" name="system" value="{$system}" size="5" maxlength="3" tabindex="2"></td>
					<td><input type="submit" value="{$LNG.gl_show}"></td>

				</tr>
					<tr style="display: none;" id="fleetstatusrow"><th colspan="8"></tr>

			</tbody>
		</table></form>
		<!-- Plain Table: End -->

	</div>
	<!-- Box Content: End -->

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.gl_galaxy}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<div colspan="7" id="fleetstatusrow">
	</div>
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			<thead>
				<tr>
		<th style="white-space: nowrap">{$LNG.gl_pos}</th>
		<th style="white-space: nowrap">{$LNG.gl_planet}</th>
		<th style="white-space: nowrap">{$LNG.gl_name_activity}</th>
		<th style="white-space: nowrap">{$LNG.gl_moon}</th>
		<th style="white-space: nowrap">{$LNG.gl_debris}</th>
		<th style="white-space: nowrap">{$LNG.gl_alliance}</th>
		<th style="white-space: nowrap">{$LNG.orders}</th>
				</tr>
			</thead>
			<tbody>
					{for $planet=1 to $max_planets}
	<tr class="gradeA">
    {if !isset($GalaxyRows[$planet])}
		<td>
			<a href="?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=1&amp;target_mission=7">{$planet}</a>
		</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    {elseif $GalaxyRows[$planet] === false}
		<td>
			{$planet}
		</td>
        <td></td>
        <td style="white-space: nowrap;">{$LNG.gl_planet_destroyed}</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    {else}
		<td>
			{$planet}
		</td>
        {$currentPlanet = $GalaxyRows[$planet]}
		<td>
			<a href="game.php?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=1" class="tip" title="{$LNG.missionGalaxy}">
				<img src="{$dpath}planeten/small/s_{$currentPlanet.planet.image}.jpg" height="30" width="30" alt="">
			</a> 
			
			
		</td>
		<td style="white-space: nowrap;">{$currentPlanet.planet.name}<br> 
		
		<a href="#" class="tip" title="{$LNG.playerGalaxy}"; onclick="return Dialog.Playercard({$currentPlanet.user.id});">
				<span class="{foreach $currentPlanet.user.class as $class}{if !$class@first} {/if}galaxy-username-{$class}{/foreach} galaxy-username">{$currentPlanet.user.username}</span>
				{if !empty($currentPlanet.user.class)}
				<span>(</span>{foreach $currentPlanet.user.class as $class}{if !$class@first}&nbsp;{/if}<span class="galaxy-short-{$class} galaxy-short">{$ShortStatus.$class}</span>{/foreach}<span>)</span>
				{/if}
			</a>  
			</td>
		<td style="white-space: nowrap;">
			{if $currentPlanet.moon}
			<a href="game.php?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=3" class="tip" title="{$LNG.missionGalaxy}<br><br>{$currentPlanet.moon.name} [{$galaxy}:{$system}:{$planet}]<br><br>{$LNG.gl_diameter}: {$currentPlanet.moon.diameter|number}<br>{$LNG.gl_temperature}: {$currentPlanet.moon.temp_min}">
				<img src="{$dpath}planeten/small/s_mond.jpg" height="30" width="30" alt="{$currentPlanet.moon.name}">
			</a>
			{/if}
		</td>
		<td style="white-space: nowrap;">
        {if $currentPlanet.debris}
		<a href="javascript:doit(8, {$currentPlanet.planet.id});" class="tip" title="{$LNG.recGalaxy} <br><br>{$LNG.gl_debris_field} [{$galaxy}:{$system}:{$planet}]<br><br> {$LNG.tech.901}: {$currentPlanet.debris.metal|number}<br>{$LNG.tech.902}: {$currentPlanet.debris.crystal|number}">
			<img src="{$dpath}planeten/debris.jpg" height="30" width="30" alt="">
			</a>
        {/if}
		</td>
		<td style="white-space: nowrap;">
			{if $currentPlanet.alliance}
			<a href='?page=alliance&amp;mode=info&amp;id={$currentPlanet.alliance.id}'>
				<span class="{foreach $currentPlanet.alliance.class as $class}{if !$class@first} {/if}galaxy-alliance-{$class}{/foreach} galaxy-alliance">{$currentPlanet.alliance.tag}</span>
			</a>
			{else}-{/if}
		</td>
		<td style="white-space: nowrap;">
			{if $currentPlanet.action}
				{if $currentPlanet.action.esp}
				<a href="javascript:doit(6,{$currentPlanet.planet.id},{$spyShips|json|escape:'html'})">
					<span class="icon preview tip" title="{$LNG.gl_spy}" alt="">
				</a>{/if}
				{if $currentPlanet.action.message}
				<a href="#" onclick="return Dialog.PM({$currentPlanet.user.id})">
					<span class="icon mail tip" title="{$LNG.write_message}" alt="">
				</a>{/if}
				{if $currentPlanet.action.buddy}
                <a href="#" onclick="return Dialog.Buddy({$currentPlanet.user.id})">
					<span class="icon user tip" title="{$LNG.gl_buddy_request}" alt="">
				</a>{/if}
				{if $currentPlanet.action.missle}<a href="?page=galaxy&amp;action=sendMissle&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;type=1">
					<span class="icon warning tip" title="{$LNG.gl_missile_attack}" alt="">
				</a>{/if}
				{if $currentPlanet.planet.phalanx}<a href='javascript:OpenPopup(&quot;?page=phalanx&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=1&quot;, &quot;&quot;, 640, 510);' class="tip" >
				<span class="icon wifi tip" title="{$LNG.gl_phalanx}" alt="">
				</a>{/if}
			{else}-{/if}
		</td>
	{/if}
	</tr>
	{/for}
		<tr>
		<td>{$max_planets + 1}</td>
		<td colspan="7"><a href="?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$max_planets + 1}&amp;planettype=1&amp;target_mission=15">{$LNG.gl_out_space}</a></td>
	</tr>
			</tbody>
		</table>
		<!-- Plain Table: End -->

	</div>
	<!-- Box Content: End -->
	
	
	<!-- Box Header: Start -->
	<div class="box_top">
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			<thead>
				<tr>
					<th>{$LNG.gl_avaible_missiles}</th>
					<th>{$LNG.gl_fleets}</th>
					<th>{$LNG.gl_avaible_spyprobes}</th>
					<th>{$LNG.gl_avaible_recyclers}</th>
					<th>{$LNG.gl_avaible_grecyclers}</th>
				</tr>
			</thead>
			<tbody>
				<tr class="gradeA">
					<td><span id="missiles">{$currentmip|number}</span></td>
					<td><span id="slots">{$maxfleetcount}</span>/{$fleetmax}</td>
					<td><span id="elementID210">{$spyprobes|number}</span></td>
					<td class="center"><span id="elementID209">{$recyclers|number}</span></td>
					<td class="center"><span id="elementID219">{$grecyclers|number}</span></td>
				</tr>

			</tbody>
		</table>
		<!-- Plain Table: End -->

	</div>
	<!-- Box Content: End -->
	
</div>

	<script type="text/javascript">
		status_ok		= '{$LNG.gl_ajax_status_ok}';
		status_fail		= '{$LNG.gl_ajax_status_fail}';
		MaxFleetSetting = {$settings_fleetactions};
	</script>
</div>
{/block}