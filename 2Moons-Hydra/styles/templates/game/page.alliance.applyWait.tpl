{block name="title" prepend}{$LNG.lm_research}{/block}
{block name="content"}

<div class="grid_24">
<form action="game.php?page=alliance&amp;mode=cancelApply" method="post">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.lm_alliance}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			<tbody>
				<tr class="gradeA">
					<td>{$request_text}
					</td>
				</tr>
				<tr class="gradeA">
					<td><input type="submit" value="{$LNG.al_continue}">
					</td>
				</tr>

			</tbody>
		</table>
		<!-- Plain Table: End -->
</form>
	</div>
	<!-- Box Content: End -->
	
</div>


{/block}