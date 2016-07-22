{block name="title" prepend}{$LNG.lm_topkb}{/block}
{block name="content"}

<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.tkb_top}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table class="sorting">
			<thead>
				<tr>
<th>{$LNG.tkb_platz}</th>
	<th><a href="game.php?page=battleHall&order=owner&sort={if $sort == "ASC"}DESC{else}ASC{/if}"{if $order == "owner"} style="font-weight:bold;"{/if}>{$LNG.tkb_owners}</a></th>
    <th><a href="game.php?page=battleHall&order=date&sort={if $sort == "ASC"}DESC{else}ASC{/if}"{if $order == "date"} style="font-weight:bold;"{/if}>{$LNG.tkb_datum}</a></th>
	<th><a href="game.php?page=battleHall&order=units&sort={if $sort == "ASC"}DESC{else}ASC{/if}"{if $order == "units"} style="font-weight:bold;"{/if}>{$LNG.tkb_units}</a></th>
				</tr>
			</thead>
			<tbody>
{foreach $TopKBList as $hallCat}
{foreach $hallCat as $rank => $hallRow}
<tr class="day{floor($hallRow.date / 86400)} week{floor($hallRow.date / 604800)}">
    <td>{$rank}</td>
    <td><a href="game.php?page=raport&amp;mode=battlehall&amp;raport={$hallRow.rid}" target="_blank">
	{if $hallRow.result == "a"}
	<span style="color:green">{$hallRow.attacker}</span> VS <span style="color:#FF0000">{$hallRow.defender}</span>
	{elseif $hallRow.result == "r"}
	<span style="color:#FF0000">{$hallRow.attacker}</span> VS <span style="color:green">{$hallRow.defender}</span>
	{else}
	{$hallRow.attacker} VS {$hallRow.defender}
	{/if}
	</a></td>
    <td>{$hallRow.date}</td>
	<td>{$hallRow.units|number}</td>
</tr>
{/foreach}
{/foreach}
			</tbody>
		</table>
		<!-- Sorting Table: End -->

	</div>
	<!-- Box Content: End -->
	
</div>

{/block}