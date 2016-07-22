{block name="title" prepend}Changelog{/block}
{block name="content"}
<table>
	<tr>
		<th>{$LNG.Version}</th>
		<th>Solved By</th>
		<th>{$LNG.Description}</th>
	</tr>
{foreach key=version_number item=description from=$ChangelogList}
<tr>
	<td style="width:80px">{$version_number}</th>
	<td style="width:80px"class="center"><font color="red">Bijuu</font></td>
	<td class="left">{$description}</td>
</tr>
{/foreach}
</table>
{/block}