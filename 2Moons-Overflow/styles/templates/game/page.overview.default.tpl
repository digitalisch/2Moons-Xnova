{block name="title" prepend}{$LNG.lm_overview}{/block}
{block name="script" append}{/block}
{block name="content"}

<div class="row">
 
<div class="span9">


<h3 class="spec">Overview Page</h3>

{if $is_news}
<div class="alert alert-standard fade in">
<a class="close" data-dismiss="alert" href="#">&times;</a>
<h4>Hello</h4>
<font color=#FF7373><b>
<div class="" style="text-align:left;float:left;">{$news}</div><br>
</div>
{/if}

{if $messages}<div class="alert alert-standard fade in">
<a class="close" data-dismiss="alert" href="#">&times;</a>
<center><b><font color=white><a href="?page=messages">{$messages}</a></font></b></center>
</div>
{/if}
  
<div class="accordion" id="accordionArea">


<div class="accordion-group">
<div class="accordion-heading accordionize">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#threeArea">
{$LNG.fl_my_planets}
<span class="font-icon-arrow-simple-down"></span>
</a>
</div>
<div id="threeArea" class="accordion-body collapse">
<div class="accordion-inner">
{if $AllPlanets}
<table>
{foreach $AllPlanets as $PlanetRow}
{if ($PlanetRow@iteration % $themeSettings.PLANET_ROWS_ON_OVERVIEW) === 1}<tr style="height:20px;">{/if}
<td class="transparent">{$PlanetRow.name}<br><a href="game.php?page=overview&amp;cp={$PlanetRow.id}" title="{$PlanetRow.name}"><img src="{$dpath}planeten/small/s_{$PlanetRow.image}.jpg" alt="{$PlanetRow.name}"></a></td>
{if $PlanetRow@last && $PlanetRow@total > 1 && ($PlanetRow@iteration % $themeSettings.PLANET_ROWS_ON_OVERVIEW) !== 0}
{$to = $themeSettings.PLANET_ROWS_ON_OVERVIEW - ($PlanetRow@iteration % $themeSettings.PLANET_ROWS_ON_OVERVIEW)}
{for $foo=1 to $to}
<td class="transparent">&nbsp;</td>
{/for}
{/if}
{if ($PlanetRow@iteration % $themeSettings.PLANET_ROWS_ON_OVERVIEW) === 0}</tr>{/if}
{/foreach}
</table>
{else}&nbsp;{/if}
</div>
</div>
</div> 
 

<div class="accordion-inner">
	{foreach $fleets as $index => $fleet}
	<tr>
		<div style="text-align:right;float:right;" id="fleettime_{$index}" class="fleets" data-fleet-end-time="{$fleet.returntime}" data-fleet-time="{$fleet.resttime}">{pretty_fly_time({$fleet.resttime})}</div>
		<div style="text-align:left;float:left;" colspan="2">(See) {$fleet.text}</div>
	</tr><br>
	{/foreach}
</div> 
 

</div>

<div class="accordion-inner">
<table class="redesign">
<tr>
<td width="250">
<img src="{$dpath}planeten/{$planetimage}.jpg" height="200" width="200" alt="{$planetname}">
</td>
<td><p align=left>
<br><b><a href="#" onclick="return Dialog.PlanetAction();" title="{$LNG.ov_planetmenu}"><font size=5>{$planetname}</font></b></a> &nbsp<font size=4>{$LNG.colonized_by} <b>{$username}</b></font><br> 

<br><b><font size=2>{$LNG.ti_status}</font></b> | {if $buildInfo.buildings}{$LNG.tech[$buildInfo.buildings['id']]} ({$buildInfo.buildings['level']})
{else}{$LNG.ov_free}{/if}

<br><b><font size=2>{$LNG.gl_moon}</font></b> | {if $Moon}<a href="game.php?page=overview&amp;cp={$Moon.id}&amp;re=0" title="{$Moon.name}"> Yes, visit it</a><br>{$Moon.name} ({$LNG.fcm_moon}){else}This planet does not have moon{/if}

<br><b><font size=2>{$LNG.ov_diameter}</font></b> | {$planet_diameter} {$LNG.ov_distance_unit} (<a title="{$LNG.ov_developed_fields}">{$planet_field_current}</a> / <a title="{$LNG.ov_max_developed_fields}">{$planet_field_max}</a> {$LNG.ov_fields})

<br><b><font size=2>{$LNG.ov_temperature}</font></b> | {$LNG.ov_aprox} {$planet_temp_min}{$LNG.ov_temp_unit} {$LNG.ov_to} {$planet_temp_max}{$LNG.ov_temp_unit}

<br><b><font size=2>{$LNG.ov_position}</font></b> | <a href="game.php?page=galaxy&amp;galaxy={$galaxy}&amp;system={$system}">[{$galaxy}:{$system}:{$planet}]</a>
</td>
</tr>
</table>
</div>


{/block}