{block name="title" prepend}{$LNG.bank}{/block}
{block name="content"}
<script type="text/javascript" src="scripts/jQuery.js?v=1829"></script>
<table>
<form action="" method="post">
<input name="action" value="in" type="hidden">
<tr>
	<td colspan="3"><font color = red>{$LNG.bank_in_info}{$transCoast} {$LNG.bank_tcShort}</font></td>
</tr>
<tr>
	<th>{$LNG.bank_storage_f}</th>
	<th>{$LNG.bank_storage_m}</th>
	<th></th>
</tr>
<tr>
	<td>{$freeStorage}</td>
	<td>{$maxStorage}</td>
	<td></td>
</tr>
<tr>
	<th colspan="3">{$LNG.bank_in_header}</th>
</tr>
<tr>
	<td>{$LNG.bank_ressm}</td>
	<td>{$LNG.bank_ressc}</td>
	<td>{$LNG.bank_ressd}</td>
</tr>
<tr>
	<td><input name="metal" value="0" type="text"></td>
	<td><input name="kryst" value="0" type="text"></td>
	<td><input name="deuta" value="0" type="text"></td>
</tr>
<tr>
	<td colspan="3"><input value="{$LNG.bank_in}" type="submit"></td>
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
</form>
</table>
{/block}