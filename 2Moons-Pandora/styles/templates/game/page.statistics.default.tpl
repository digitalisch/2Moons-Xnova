{block name="title" prepend}{$LNG.lm_statistics}{/block}
{block name="content"}
<form name="stats" id="stats" method="post" action="">
	<table style="width:100%;">
		<tr>
			<th>{$LNG.st_statistics} ({$LNG.st_updated}: {$stat_date})</th>
		</tr>
		<tr>
			<td>
				<label for="who">{$LNG.st_show}</label> <select name="who" id="who" onchange="$('#stats').submit();">{html_options options=$Selectors.who selected=$who}</select>
				<label for="type">{$LNG.st_per}</label> <select name="type" id="type" onchange="$('#stats').submit();">{html_options options=$Selectors.type selected=$type}</select>
				<label for="range">{$LNG.st_in_the_positions}</label> <select name="range" id="range" onchange="$('#stats').submit();">{html_options options=$Selectors.range selected=$range}</select>
			</td>
		</tr>
	</table>
</form>
<table style="width:100%;">
{if $who == 1}
	{include file="shared.statistics.playerTable.tpl"}
{elseif $who == 2}
	{include file="shared.statistics.allianceTable.tpl"}
{/if}
</table>
{/block}