{block name="title" prepend}{$LNG.lm_research}{/block}
{block name="content"}
<form action="game.php?page=alliance&amp;mode=cancelApply" method="post">
<section id="playground">
<div class="full-width">
<div class="box">
<div class="inner"> 
<div class="titlebar">{$LNG.lm_alliance}</div>
<div class="contents">
<table style="width:100%">	<tr>
		<th>{$LNG.al_your_request_title}</th>
	</tr>
	<tr>
		<td>{$request_text}</td>
	</tr>
	<tr>
		<td><input type="submit" value="{$LNG.al_continue}"></td>
	</tr>
</table>
</form>
</div>
</div>
</div>
</div>
</section>
{/block}