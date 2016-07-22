{block name="title" prepend}{$LNG.lm_alliance}{/block}
{block name="content"}
<form action="game.php?page=alliance&amp;mode=admin&amp;action=changeTag" method="post">
<section id="playground">
<div class="full-width">
<div class="box">
<div class="inner"> 
<div class="titlebar">{$LNG.lm_alliance}</div>
<div class="contents">
<table style="width:100%">	<tr>
		<th colspan="2">{$LNG.al_tag} {$LNG.al_change_title}</th>
	</tr>
	<tr>
		<td>{$LNG.al_new_tag}</td>
		<td><input type="text" name="newname"> <input type="submit" value="{$LNG.al_change_submit}"></td>
	</tr>
	<tr>
		<th colspan="2"><a href="game.php?page=alliance&amp;mode=admin">{$LNG.al_back}</a></th>
	</tr>
</table>
</form>
</div>
</div>
</div>
</div>
</section>
{/block}