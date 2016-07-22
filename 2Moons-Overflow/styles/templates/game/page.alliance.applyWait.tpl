{block name="title" prepend}{/block}
{block name="content"}

<div class="row">
<div class="span9">

<h3 class="spec">{$LNG.alliance}</h3>
<div class="tabbable">
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">
<form action="game.php?page=alliance&amp;mode=cancelApply" method="post">
	<table class="redesign">
	<tr>
		<th>{$LNG.al_your_request_title}</th>
	</tr>
	<tr>
		<td>{$request_text}</td>
	</tr>
	<tr>
		<td><p align=right><input class="button" type="submit" value="{$LNG.al_continue}"></td>
	</tr>
</table>
</form>
</div>

</div>{/block}
