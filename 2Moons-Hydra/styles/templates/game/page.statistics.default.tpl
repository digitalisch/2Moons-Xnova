{block name="title" prepend}{$LNG.lm_statistics}{/block}
{block name="content"}

<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		<form name="stats" id="stats" method="post" action="">

		<h2 class="icon users">{$LNG.st_statistics} ({$LNG.st_updated}: {$stat_date})</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			<tbody>
		<tr>
			<td width="50"><a href="game.php?page=statistics&who=1" class="tip" title="{$LNG.st_player}" id="who" onchange="$('#stats').submit();"><img src="styles/theme/gow/img/players.png" /></a></td>
			<td width="50"><a href="game.php?page=statistics&who=2" class="tip" title="{$LNG.st_alliance}" id="who" onchange="$('#stats').submit();"><img src="styles/theme/gow/img/alliance.png" /></a></td>
			<td width="50"><a href="game.php?page=statistics&type=2" class="tip" title="{$LNG.st_defenses}" id="type" onchange="$('#stats').submit();"><img src="styles/theme/gow/img/defense.png" /></a></td>
			<td width="50"><a href="game.php?page=statistics&type=4" class="tip" title="{$LNG.lm_buildings}" id="type" onchange="$('#stats').submit();"><img src="styles/theme/gow/img/builds.png" /></a></td>
			<td width="50"><a href="game.php?page=statistics&type=3" class="tip" title="{$LNG.st_researh}" id="type" onchange="$('#stats').submit();"><img src="styles/theme/gow/img/tech.png" /></a></td>
			<td width="50"><a href="game.php?page=statistics&type=5" class="tip" title="{$LNG.st_fleets}" id="type" onchange="$('#stats').submit();"><img src="styles/theme/gow/img/fleet.png" /></a></td>
			<td><p align=right><select class="button button-mini" name="range" onChange="javascript:document.stats.submit()">{html_options options=$Selectors.range selected=$range}</select></td>
		</tr>
			</tbody>
		</table>
		<!-- Plain Table: End -->
	</div></form>
	<!-- Box Content: End -->
	
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			{if $who == 1}
	{include file="shared.statistics.playerTable.tpl"}
{elseif $who == 2}
	{include file="shared.statistics.allianceTable.tpl"}
{/if}
		</table>
		<!-- Plain Table: End -->
	</div>
	<!-- Box Content: End -->
	
</div>


{/block}