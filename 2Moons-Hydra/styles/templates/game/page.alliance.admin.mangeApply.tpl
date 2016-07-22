{block name="title" prepend}{$LNG.lm_alliance}{/block}
{block name="content"}

<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.lm_alliance}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
					<thead>
				<tr>
		<th>{$LNG.al_candidate}</th>
		<th>{$LNG.al_request_date}</th>
				</tr>
			</thead>
			<tbody>
	{foreach $applyList as $applyRow}
	<tr>
		<td><a href="game.php?page=alliance&amp;mode=admin&amp;action=detailApply&amp;id={$applyRow.id}">{$applyRow.username}</a></td>
		<td><a href="game.php?page=alliance&amp;mode=admin&amp;action=detailApply&amp;id={$applyRow.id}">{$applyRow.time}</a></td>
	</tr>
	{foreachelse}
	<tr>
		<td colspan="2">{$LNG.al_no_requests}</td>
	</tr>
	{/foreach}
			</tbody>
		</table>
		<!-- Plain Table: End -->
	</div>
	<!-- Box Content: End -->
	
</div>


{/block}