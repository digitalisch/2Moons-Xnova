{block name="title" prepend}{/block}
{block name="content"}

<div class="row">
<div class="span9">

<h3 class="spec">{$LNG.lm_support}</h3>
<div class="tabbable">
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">
<form action="game.php?page=ticket&mode=send" method="post" id="form">
<input type="hidden" name="id" value="{$ticketID}">
		<table class="redesign">
	{foreach $answerList as $answerID => $answerRow}	
	<tr>
		<td class="left" colspan="2">
			<font color=lime>{$LNG.ti_msgtime} <b>{$answerRow.time}</b> {$LNG.ti_from} <b>{$answerRow.ownerName}</b></font>
			{if $answerRow@first}
				<br>{$LNG.ti_category}: {$categoryList[$answerRow.categoryID]}
			{/if}
			</p>
			<hr>
			<p>
				{$answerRow.message}
			</p>
		</td>
	</tr>
	{/foreach}
	{if $status < 2}
	<tr>
		<th colspan="2">{$LNG.ti_answer}</th>
	</tr>
	<tr>
		<td style="width:30%"><label for="message">{$LNG.ti_message}</label></td>
		<td style="width:70%"><textarea class="validate[required]" id="message" name="message" row="60" cols="8" style="height:100px;width:500px"></textarea></td>
	</tr>
	<tr>
		<td colspan="2"><p align=right><input class="button" type="submit" value="{$LNG.ti_submit}"></td>
	</tr>
	{/if}
		</table>
</form>
</div>

</div>{/block}
{block name="script" append}
<script>
$(document).ready(function() {
	$("#form").validationEngine('attach');
});
</script>
{/block}