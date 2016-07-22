{block name="title" prepend}{/block}
{block name="content"}

<div class="row">
<div class="span9">

<h3 class="spec">{$LNG.alliance}</h3>
<div class="tabbable">
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">
<form action="game.php?page=alliance&amp;mode=admin&amp;action=changeName" method="post">
<table class="redesign">
	<tr>
		<th colspan="2">{$LNG.al_name} {$LNG.al_change_title}</th>
	</tr>
	<tr>
		<td>{$LNG.al_new_name}</td>
		<td><input type="text" name="newname"> <input type="submit" value="{$LNG.al_change_submit}"></td>
	</tr>
	<tr>
		<th colspan="2"><a href="game.php?page=alliance&amp;mode=admin">{$LNG.al_back}</a></th>
	</tr>
</table>
</form>
</div>

</div>{/block}
