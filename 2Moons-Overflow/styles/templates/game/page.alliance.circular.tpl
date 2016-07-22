{block name="title" prepend}{/block}
{block name="content"}

<div class="row">
<div class="span9">

<h3 class="spec">{$LNG.alliance}</h3>
<div class="tabbable">
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">
<form name="message" id="message">
	<table class="table519">
	<tr>
		<th colspan="2">{$LNG.al_circular_send_ciruclar}</th>
	</tr>
	<tr>
		<td>{$LNG.al_receiver}</td>
		<td>
		{html_options name=rankID options=$RangeList}
		</td>
	</tr><tr>
	<td>{$LNG.mg_subject}</td>
	<td><input type="text" name="subject" id="subject" size="40" maxlength="40" value="{$LNG.mg_no_subject}"></td>
	</tr>
	<tr>
		<td>{$LNG.al_message} (<span id="cntChars">0</span> / 5000 {$LNG.al_characters})</td>
		<td>
			<textarea name="text" cols="60" rows="10" onkeyup="$('#cntChars').text($(this).val().length);"></textarea>
		</td>
	</tr>
	<tr>
		<th colspan="2" style="text-align:center;">
		<input class="button button-mini" type="reset" value="{$LNG.al_circular_reset}">
		<input class="button button-mini" type="button" onClick="return check();" name="button" value="{$LNG.al_circular_send_submit}">
		</th>
	</tr>
	</table>
</form>
</div>

</div>{/block}
{block name="script" append}
<script type="text/javascript">
function check(){
	if(document.message.text.value == '') {
		alert('{$LNG.mg_empty_text}');
		return false;
	} else {
		$.post('game.php?page=alliance&mode=circular&action=send&ajax=1', $('#message').serialize(), function(data){
			data = $.parseJSON(data);
			alert(data.message);
			if(!data.error) {
				parent.$.fancybox.close();
			}
		});
		return true;
	}
}
</script>
{/block}