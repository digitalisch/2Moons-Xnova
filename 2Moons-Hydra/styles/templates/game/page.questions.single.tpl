{block name="title" prepend}{$LNG.lm_faq}{/block}
{block name="content"}
<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$questionRow.title}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			
			<tbody>
	<tr>
		<td class="left">
		{$questionRow.body}
		</td>
	</tr>
			</tbody>
		</table>
		<!-- Plain Table: End -->
	</div>
	<!-- Box Content: End -->
	
</div>

{/block}