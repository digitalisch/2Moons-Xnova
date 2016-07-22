{block name="title" prepend}{$LNG.bank}{/block}
{block name="content"}

<table>

<form action="" method="post">

<input type="hidden" name="action" value="out">
<tr>
	<th colspan="3">{$LNG.bank_out_header}</th>
</tr>
<tr>
	<td>{$LNG.bank_ressm}</td>
	<td>{$LNG.bank_ressc}</td>
	<td>{$LNG.bank_ressd}</td>
</tr>
<tr>
	<td><input name="metal" type="text" value="0"></td>
	<td><input name="kryst" type="text" value="0"></td>
	<td><input name="deuta" type="text" value="0"></td>
</tr>
<tr>
	<td colspan="3"><input type="Submit" value="{$LNG.bank_out}"></td>
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