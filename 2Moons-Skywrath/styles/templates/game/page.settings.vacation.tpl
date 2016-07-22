{block name="title" prepend}{$LNG.lm_options}{/block}
{block name="content"}
<form action="game.php?page=settings&amp;mode=send" method="post">
<section id="playground">
<div class="full-width">
<div class="box">
<div class="inner"> 
<div class="titlebar">{$LNG.lm_options}</div>
<div class="contents">
<table style="width:100%">
		<tr>
			<th colspan="2">{$LNG.op_vacation_mode_active_message} {$vacationUntil}</th>
		</tr>
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
	</table>
</form>
</div>
</div>
</div>
</div>
</section>
{/block}