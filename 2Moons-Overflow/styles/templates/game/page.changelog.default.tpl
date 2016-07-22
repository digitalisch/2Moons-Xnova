{block name="title" prepend}{/block}
{block name="content"}

<div class="row">
<div class="span9">

<h3 class="spec">Changelog</h3>
<div class="tabbable">
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">

<table class="redesign">
	<tr>
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

</div>{/block}
