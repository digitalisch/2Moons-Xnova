{block name="title" prepend}{$LNG.lm_options}{/block}
{block name="content"}
<form action="game.php?page=settings&amp;mode=send" method="post">

<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.op_vacation_mode_active_message} {$vacationUntil}</span></h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			
				<tbody>
<tr>
			<td>{$LNG.op_end_vacation_mode}</td>
			<td><input name="vacation" type="checkbox" value="1" {if !$canVacationDisbaled}disabled{/if}></td>
		</tr><tr>
			<td><a title="{$LNG.op_dlte_account_descrip}">{$LNG.op_dlte_account}</a></td>
			<td><input name="delete" type="checkbox" value="1" {if $delete > 0}checked="checked"{/if}></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="{$LNG.op_save_changes}"></td>
		</tr>
		</tbody>
		</table>
		<!-- Plain Table: End -->
	</div>
	<!-- Box Content: End -->
	
</div>


</form>
{/block}