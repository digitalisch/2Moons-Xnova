{block name="title" prepend}{$LNG.lm_statistics}{/block}
{block name="content"}
<form name="stats" id="stats" method="post" action="">

<div class="row">
<div class="span9">

<h3 class="spec"></h3>
<div class="tabbable">
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">
		<table class="redesign">
		<tr>
			<td width="50"><a href="game.php?page=statistics&who=1" class="tooltip" data-tooltip-content="{$LNG.st_player}" id="who" onchange="$('#stats').submit();"><img src="styles/theme/gow/img/players.png" /></a><p class="stats ellipsis"><img src="styles/theme/gow/img/players.png" /></p></td>
			<td width="50"><a href="game.php?page=statistics&who=2" class="tooltip" data-tooltip-content="{$LNG.st_alliance}" id="who" onchange="$('#stats').submit();"><img src="styles/theme/gow/img/alliance.png" /></a><p class="stats ellipsis"><img src="styles/theme/gow/img/alliance.png" /></p></td>
			<td width="50"><a href="game.php?page=statistics&type=2" class="tooltip" data-tooltip-content="{$LNG.st_defenses}" id="type" onchange="$('#stats').submit();"><img src="styles/theme/gow/img/defense.png" /></a><p class="stats ellipsis"><img src="styles/theme/gow/img/defense.png" /></p></td>
			<td width="50"><a href="game.php?page=statistics&type=3" class="tooltip" data-tooltip-content="{$LNG.lm_buildings}" id="type" onchange="$('#stats').submit();"><img src="styles/theme/gow/img/builds.png" /></a><p class="stats ellipsis"><img src="styles/theme/gow/img/builds.png" /></p></td>
			<td width="50"><a href="game.php?page=statistics&type=4" class="tooltip" data-tooltip-content="{$LNG.st_researh}" id="type" onchange="$('#stats').submit();"><img src="styles/theme/gow/img/tech.png" /></a><p class="stats ellipsis"><img src="styles/theme/gow/img/tech.png" /></p></td>
			<td width="50"><a href="game.php?page=statistics&type=5" class="tooltip" data-tooltip-content="{$LNG.st_fleets}" id="type" onchange="$('#stats').submit();"><img src="styles/theme/gow/img/fleet.png" /></a><p class="stats ellipsis"><img src="styles/theme/gow/img/fleet.png" /></p></td>
			<td><p align=right><select class="button button-mini" name="range" onChange="javascript:document.stats.submit()">{html_options options=$Selectors.range selected=$range}</select></td>
		</tr>
		</table>
</form>
</div>

<div class="tab-pane fade in active" id="tab1">
<table class="redesign">
{if $who == 1}
	{include file="shared.statistics.playerTable.tpl"}
{elseif $who == 2}
	{include file="shared.statistics.allianceTable.tpl"}
{/if}
</div>


<tr><td colspan="6">{$LNG.st_statistics} ({$LNG.st_updated}: {$stat_date})</td></tr>
</table>
{/block}