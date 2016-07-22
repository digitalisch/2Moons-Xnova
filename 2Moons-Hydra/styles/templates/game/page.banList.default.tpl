{block name="title" prepend}{$LNG.lm_banned}{/block}
{block name="content"}

<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.lm_banned}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table class="sorting">
			<thead>
				<tr>
		<th>{$LNG.bn_from}</th>
		<th>{$LNG.bn_until}</th>
		<th>{$LNG.bn_player}</th>
		<th>{$LNG.bn_by}</th>
		<th>{$LNG.bn_reason}</th>
				</tr>
			</thead>
			<tbody>
	{if $banCount}
	<tr>
		<td class="right" colspan="5">{$LNG.mg_page}: {if $page != 1}<a href="game.php?page=banList&amp;side={$page - 1}">&laquo;</a>&nbsp;{/if}{for $site=1 to $maxPage}<a href="game.php?page=banList&amp;side={$site}">{if $site == $page}<b>[{$site}]</b>{else}[{$site}]{/if}</a>{if $site != $maxPage}&nbsp;{/if}{/for}{if $page != $maxPage}&nbsp;<a href="game.php?page=banList&amp;side={$page + 1}">&raquo;</a>{/if}</td>
	</tr>
	{foreach $banList as $banRow}
	<tr>
		<td>{$banRow.from}</td>
		<td>{$banRow.to}</td>
		<td>{$banRow.player}</td>
		<td><a href="mailto:{$banRow.mail}" title="{$banRow.info}">{$banRow.admin}</a></td>
		<td>{$banRow.theme}</td>
	</tr>
	{/foreach}
	<tr>
		<td class="right" colspan="5">{$LNG.mg_page}: {if $page != 1}<a href="game.php?page=banList&amp;side={$page - 1}">&laquo;</a>&nbsp;{/if}{for $site=1 to $maxPage}<a href="game.php?page=banList&amp;side={$site}">{if $site == $page}<b>[{$site}]</b>{else}[{$site}]{/if}</a>{if $site != $maxPage}&nbsp;{/if}{/for}{if $page != $maxPage}&nbsp;<a href="game.php?page=banList&amp;side={$page + 1}">&raquo;</a>{/if}</td>
	</tr>
	<tr>
		<td colspan="5">{$LNG.bn_exists}{$banCount|number}{$LNG.bn_players_banned}</td>
	</tr>
	{else}	
	{/if}
			</tbody>
		</table>
		<!-- Sorting Table: End -->

	</div>
	<!-- Box Content: End -->
	
</div>

{/block}