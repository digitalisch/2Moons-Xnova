{block name="title" prepend}{$LNG.lm_faq}{/block}
{block name="content"}
<section id="playground">
<div class="full-width">
<div class="box">
<div class="inner"> 
<div class="titlebar">{$LNG.lm_alliance}</div>
<div class="contents">
<table style="width:100%">
	<tr>
		<th>{$LNG.faq_overview}</th>
	</tr>
	<tr>
		<th>{$questionRow.title}</th>
	</tr>
	<tr>
		<td class="left">
		{$questionRow.body}
		</td>
	</tr>
	<tr><th><a href="game.php?page=questions">{$LNG.al_back}</a></th>
	</tr>
</table>
</div>
</div>
</div>
</div>
</section>
{/block}