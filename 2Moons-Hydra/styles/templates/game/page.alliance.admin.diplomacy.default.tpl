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
			<tbody>
	{foreach $diploList.0 as $diploMode => $diploAlliances}	
	<tr>
		<th colspan="2">{$LNG.al_diplo_level.$diploMode}</th>
	</tr>
		{foreach $diploAlliances as $diploID => $diploName}
		<tr>
			<td style="width:90%">{$diploName}</td>
			<td>
				<a href="game.php?page=alliance&amp;mode=admin&amp;action=diplomacyDelete&amp;id={$diploID}" onclick="return confirm('{$LNG.al_diplo_confirm_delete}');"><img src="styles/resource/images/false.png" alt="" width="16" height="16"></a>
			</td>
		</tr>
		{foreachelse}
		<tr>
			<td colspan="2">{$LNG.al_diplo_no_entry}</td>
		</tr>
		{/foreach}
	<tr>
		<td colspan="2">
			<a href="game.php?page=alliance&amp;mode=admin&amp;action=diplomacyCreate&amp;diploMode={$diploMode}" onclick="return Dialog.open(this.href, 650, 300);">{$LNG.al_diplo_create}</a>
		</td>
	</tr>
	{/foreach}
			</tbody>
		</table>
		<!-- Plain Table: End -->
	</div>
	<!-- Box Content: End -->
	
	
</div>

<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.al_diplo_accept}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			<tbody>
{if array_filter($diploList.1)}
		{foreach $diploList.1 as $diploMode => $diploAlliances}	
		{if !empty($diploAlliances)}
		<tr>
			<th colspan="2">{$LNG.al_diplo_level.$diploMode}</th>
		</tr>
		{foreach $diploAlliances as $diploID => $diploName}
		<tr>
			<td style="width:90%">{$diploName}</td>
			<td>
				<a href="game.php?page=alliance&amp;mode=admin&amp;action=diplomacyAccept&amp;id={$diploID}" onclick="return confirm('{$LNG.al_diplo_accept_yes_confirm}');"><img src="styles/resource/images/true.png" alt="" width="16" height="16"></a>
				<a href="game.php?page=alliance&amp;mode=admin&amp;action=diplomacyDelete&amp;id={$diploID}" onclick="return confirm('{$LNG.al_diplo_accept_no_confirm}');"><img src="styles/resource/images/false.png" alt="" width="16" height="16"></a>
			</td>
		</tr>
		{/foreach}
		{/if}
		{/foreach}
	{else}
	<tr>
		<td colspan="2">{$LNG.al_diplo_no_accept}</td>
	</tr>	
	{/if}
			</tbody>
		</table>
		<!-- Plain Table: End -->
	</div>
	<!-- Box Content: End -->
	
</div>


<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.al_diplo_accept_send}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			<tbody>
	{if array_filter($diploList.2)}
		{foreach $diploList.2 as $diploMode => $diploAlliances}	
		{if !empty($diploAlliances)}
		<tr>
			<th colspan="2">{$LNG.al_diplo_level.$diploMode}</th>
		</tr>
		{foreach $diploAlliances as $diploID => $diploName}
		<tr>
			<td style="width:90%">{$diploName}</td>
			<td>
				<a href="game.php?page=alliance&amp;mode=admin&amp;action=diplomacyDelete&amp;id={$diploID}" onclick="return confirm('{$LNG.al_diplo_confirm_delete}');"><img src="styles/resource/images/false.png" alt="" width="16" height="16"></a>
			</td>
		</tr>
		{/foreach}
		{/if}
		{/foreach}
	{else}
	<tr>
		<td colspan="2">{$LNG.al_diplo_no_accept}</td>
	</tr>	
	{/if}
			</tbody>
		</table>
		<!-- Plain Table: End -->
	</div>
	<!-- Box Content: End -->
	
</div>


{/block}