{block name="title" prepend}{$LNG.lm_statistics}{/block}
{block name="content"}
<form name="stats" id="stats" method="post" action="">
<section id="playground">
<div class="full-width">
<div class="box">
<div class="inner"> 
<div class="titlebar">{$LNG.st_statistics} ({$LNG.st_updated}: {$stat_date})</div>
<div class="contents">
<table style="width:100%">
			<tbody>
		<tr>
			<td width="50"><a href="game.php?page=statistics&who=1" class="tipsy-header" title="{$LNG.st_player}" id="who" onchange="$('#stats').submit();"><img src="ui/stats/players.png" /></a></td>
			<td width="50"><a href="game.php?page=statistics&who=2" class="tipsy-header" title="{$LNG.st_alliance}" id="who" onchange="$('#stats').submit();"><img src="ui/stats/alliance.png" /></a></td>
			<td width="50"><a href="game.php?page=statistics&type=5" class="tipsy-header" title="{$LNG.st_defenses}" id="type" onchange="$('#stats').submit();"><img src="ui/stats/defense.png" /></a></td>
			<td width="50"><a href="game.php?page=statistics&type=4" class="tipsy-header" title="{$LNG.lm_buildings}" id="type" onchange="$('#stats').submit();"><img src="ui/stats/builds.png" /></a></td>
			<td width="50"><a href="game.php?page=statistics&type=3" class="tipsy-header" title="{$LNG.st_researh}" id="type" onchange="$('#stats').submit();"><img src="ui/stats/tech.png" /></a></td>
			<td width="50"><a href="game.php?page=statistics&type=2" class="tipsy-header" title="{$LNG.st_fleets}" id="type" onchange="$('#stats').submit();"><img src="ui/stats/fleet.png" /></a></td>
			<td style="width:35%"><select name="range" id="range" onchange="$('#stats').submit();">{html_options options=$Selectors.range selected=$range}</select></td>
		</tr>
			</tbody>
		</table>
		<!-- Plain Table: End -->
	</div></form>

		<table>
			{if $who == 1}
	{include file="shared.statistics.playerTable.tpl"}
{elseif $who == 2}
	{include file="shared.statistics.allianceTable.tpl"}
{/if}
		</table>

</div>
</div>
</div>
</div>
</section>
{/block}