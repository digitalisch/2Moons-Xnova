{block name="title" prepend}{$LNG.an_an}{/block}
{block name="content"}
<form name="stats" id="stats" method="post" action="">
<table style="width:100%">
		<tr>
			<th><center><font color="#00FF00">{$LNG.gl_resources}</font></center></th>
		</tr>
		<tr>
			<td>
				<label for="who">{$LNG.an_an}</label> <select name="who" id="who" onchange="$('#stats').submit();">{html_options options=$Selectors.who selected=$who}</select>
				
			</td>
		</tr>
	</table>
	</form>
<table style="width:100%">
{if $who == 1}
	{include file="page.marketbuy.default.tpl"}
{elseif $who == 2}
	
{include file="page.marketbuyally.default.tpl"}
{/if}
</table>

{/block}