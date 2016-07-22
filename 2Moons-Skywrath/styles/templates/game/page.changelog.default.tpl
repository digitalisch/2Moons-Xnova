{block name="title" prepend}{$LNG.lm_changelog}{/block}
{block name="content"}
<section id="playground">
<div class="full-width">
<div class="box">
<div class="inner"> 
<div class="titlebar">{$LNG.lm_changelog}</div>
<div class="contents">
<table style="width:100%">	<tr>
		<th>{$LNG.Version}</th>
		<th>{$LNG.Description}</th>
	</tr>
{foreach key=version_number item=description from=$ChangelogList}
<tr>
	<td style="width:42px">{$version_number}</th>
	<td class="left">{$description}</td>
</tr>
{/foreach}
</table>
</div>
</div>
</div>
</div>
</section>
{/block}