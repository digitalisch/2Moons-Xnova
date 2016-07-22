{block name="title" prepend}{/block}
{block name="content"}

<div class="row">
<div class="span9">

<h3 class="spec">{$LNG.alliance}</h3>
<div class="tabbable">
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">
<form action="game.php?page=alliance&amp;mode=admin&amp;action=transfer" method="post">
<table class="redesign">
	<tr>
		<th colspan="3">{$LNG.al_transfer_alliance}</th>
	</tr>
	<tr>
		<td>{$LNG.al_transfer_to}:</td>
		<td>{html_options name=newleader options=$transferUserList}</td>
		<td><input class="button button-mini" type="submit" value="{$LNG.al_transfer_submit}"></td>
	</tr>
	<tr>
		<th colspan="3"><a href="game.php?page=alliance&amp;mode=admin">{$LNG.al_back}</a></th>
	</tr>
</table>
</form>
</div>

</div>{/block}
