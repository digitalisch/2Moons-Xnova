{block name="title" prepend}{$LNG.bank}{/block}
{block name="content"}
<table>
<tr>
	<td colspan="3"><font color = lime>{$LNG.bank_info}{$transCoast} {$LNG.bank_tcShort}</font></td>
</tr>
<tr>
	<th style="width:34%;">{$LNG.bank_storage_f}</th>
	<th style="width:33%;">{$LNG.bank_storage_m}</th>
	<th style="width:33%;"></th>
</tr>
<tr>
	<td>{$freeStorage}</td>
	<td>{$maxStorage}</td>
	<td></td>
</tr>
<tr>
	<th colspan="3">{$LNG.bank_ress}</th>
</tr>
<tr>
	<td>{$LNG.bank_ressm}</td>
	<td>{$LNG.bank_ressc}</td>
	<td>{$LNG.bank_ressd}</td>
</tr>
<tr>
	<td>{$bankm}</td>
	<td>{$bankc}</td>
	<td>{$bankd}</td>
</tr>
<tr>
	<th colspan="3">{$LNG.bank_choice}</th>
</tr>
<tr>
	<td><a href="?page=bank&mode=in">{$LNG.bank_in}</a></td>
	<td><a href="?page=bank&mode=out">{$LNG.bank_out}</td>
	<td></td>
</tr>		
</table>
{/block}
