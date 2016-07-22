{block name="title" prepend}{$LNG.lm_buddylist}{/block}
{block name="content"}
<form name="buddy" id="buddy" action="game.php?page=buddyList&amp;mode=send&amp;ajax=1" method="post">
<input type="hidden" name="id" value="{$id}">
<section id="playground">
<div class="full-width">
<div class="box">
<div class="inner"> 
<div class="titlebar">{$LNG.lm_buddylist}</div>
<div class="contents">
<table style="width:100%">
    <tr>
        <th colspan="2">{$LNG.bu_request_message}</th>
    </tr>
	<tr style="height:20px;">
        <td>{$LNG.bu_player}</td>
        <td><input type="text" value="{$username} [{$galaxy}:{$system}:{$planet}]" size="40" readonly></td>
    </tr>
	<tr>
        <td>{$LNG.bu_request_text}(<span id="cntChars">0</span> / 5000 {$LNG.bu_characters})</td>
        <td><textarea name="text" id="text" cols="40" rows="10" size="100" onkeyup="$('#cntChars').text($(this).val().length);"></textarea></td>
    </tr>
	<tr>
        <td colspan="2"><input type="submit" value="{$LNG.bu_send}"></td>
	</tr>
</table>
</form>
</div>
</div>
</div>
</div>
</section>
{/block}