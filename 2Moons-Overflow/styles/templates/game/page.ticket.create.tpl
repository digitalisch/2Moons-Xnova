{block name="title" prepend}{/block}
{block name="content"}

<div class="row">
<div class="span9">

<h3 class="spec">{$LNG.lm_support}</h3>
<div class="tabbable">
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">
<form action="game.php?page=ticket&mode=send" method="post" id="form">
<input type="hidden" name="id" value="0">
		<table class="redesign">
	<tr>
		<td style="width:30%"><label for="category">{$LNG.ti_category}</label></td>
		<td style="width:70%"><select id="category" name="category" style="width:500px;">{html_options options=$categoryList}</select></td>
	</tr>
	<tr>
		<td><label for="subject">{$LNG.ti_subject}</label></td>
		<td><input class="validate[required]" type="text" id="subject" name="subject" size="40" maxlength="255" style="width:500px;"></td>
	</tr>
	<tr>
		<td><label for="message">{$LNG.ti_message}</label></td>
		<td><textarea class="validate[required]" id="message" name="message" row="60" cols="8" style="height:100px;width:500px;"></textarea></td>
	</tr>
	<tr>
		<td colspan="2"><p align=right><input class="button" type="submit" value="{$LNG.ti_submit}"></td>
	</tr>
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