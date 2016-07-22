{block name="title" prepend}{$LNG.lm_alliance}{/block}
{block name="content"}
<section id="playground">
<div class="full-width">
<div class="box">
<div class="inner"> 
<div class="titlebar">{$LNG.lm_alliance}</div>
<div class="contents">
<table style="width:100%">	<tr>
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
</div>
</div>
</div>
</section>
{/block}