{block name="title" prepend}{/block}
{block name="content"}

<div class="row">
<div class="span9">

<h3 class="spec">{$LNG.alliance}</h3>
<div class="tabbable">
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">
<form action="game.php?page=alliance&amp;mode=create&amp;action=send" method="POST">
	<table class="redesign">
		<tr>
			<th colspan=2>{$LNG.al_make_alliance}</th>
		</tr>
		<tr>
			<td>{$LNG.al_make_ally_tag_required}</td>
			<td><input type="text" name="atag" size="8" maxlength="8" value=""></td>
		</tr>
		<tr>
			<td>{$LNG.al_make_ally_name_required}</th>
			<td><input type="text" name="aname" size="20" maxlength="30" value=""></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="{$LNG.al_make_submit}"></td>
		</tr>
	</table>
</form>
</div>

</div>{/block}