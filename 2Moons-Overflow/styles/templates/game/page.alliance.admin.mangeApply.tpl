{block name="title" prepend}{/block}
{block name="content"}

<div class="row">
<div class="span9">

<h3 class="spec">{$LNG.lm_alliance}</h3>
<div class="tabbable">
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">
<form name="message" id="message">
<table class="redesign">
	<tr>
		<th colspan="2">{$LNG.al_request_list}</th>
	</tr>
	<tr>
		<th>{$LNG.al_candidate}</th>
		<th>{$LNG.al_request_date}</th>
	</tr>
	{foreach $applyList as $applyRow}
	<tr>
		<td><a href="game.php?page=alliance&amp;mode=admin&amp;action=detailApply&amp;id={$applyRow.id}">{$applyRow.username}</a></td>
		<td><a href="game.php?page=alliance&amp;mode=admin&amp;action=detailApply&amp;id={$applyRow.id}">{$applyRow.time}</a></td>
	</tr>
	{foreachelse}
	<tr>
		<td colspan="2">{$LNG.al_no_requests}</td>
	</tr>
	{/foreach}
	<tr>
		<th colspan="2"><a href="game.php?page=alliance">{$LNG.al_back}</a></th>
	</tr>
</table>
</div>

</div>{/block}
