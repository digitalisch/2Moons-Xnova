{block name="title" prepend}{/block}
{block name="content"}


<h3 class="spec"></h3>
<div class="tabbable">
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">
<form name="message" id="message" action="">
		<table style="width:95%;">
		<tr>
			<th colspan="2">{$LNG.mg_send_new}</th>
		</tr><tr>
			<td style="width:30%">{$LNG.mg_send_to}</td>
			<td style="width:70%"><input style="width:300px" type="text" name="to" size="40" value="{$OwnerRecord.username} [{$OwnerRecord.galaxy}:{$OwnerRecord.system}:{$OwnerRecord.planet}]"></td>
		</tr><tr>
			<td style="width:30%">{$LNG.mg_subject}</td>
			<td style="width:70%"><input style="width:300px" type="text" name="subject" id="subject" size="40" maxlength="40" value="{if !empty($subject)}{$subject}{else}{$LNG.mg_no_subject}{/if}"></td>
		</tr><tr>
			<td style="width:30%">{$LNG.mg_message}<br>(<span id="cntChars">0</span>&nbsp;/&nbsp;5.000&nbsp;{$LNG.mg_characters})</th>
			<td style="width:70%"><textarea name="text" style="width:300px" id="text" cols="40" rows="10" onkeyup="$('#cntChars').text($(this).val().length);"></textarea></td>
		</tr><tr>
			<td colspan="2"><p align=right><input class="button" id="submit" type="button" onClick="check();" name="button" value="{$LNG.mg_send}"></td>
		</tr>
	</table>
</form>
</div>

</div>{/block}
{block name="script" append}
<script type="text/javascript">
function check(){
	if($('#text').val().length == 0) {
		alert('{$LNG.mg_empty_text}');
		return false;
	} else {
		$('submit').attr('disabled','disabled');
		$.post('game.php?page=messages&mode=send&id={$id}&ajax=1', $('#message').serialize(), function(data) {
			alert(data);
			parent.$.fancybox.close();
			return true;
		}, 'json');
	}
}
</script>
{/block}
