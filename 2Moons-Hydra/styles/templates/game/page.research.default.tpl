{block name="title" prepend}{$LNG.lm_buildings}{/block}
{block name="content"}

{if $IsLabinBuild}
<div class="grid_24">
<div class="notice error">
<p><b>Error Message:</b> {$LNG.bd_building_lab}.</p>
</div>
</div>
{/if}

{foreach $Queue as $List}
{$ID = $List.element}<center>
<table class=""><tr>
<td width="650" class="left">

{if isset($ResearchList[$List.element])}
<form class="build_form" action="game.php?page=research" method="post">
<input type="hidden" name="cmd" value="insert">
<input type="hidden" name="tech" value="{$ID}">
{$LNG.tech.{$ID}} ({$LNG.bd_lvl} {$List.level}){if $List.destroy} {$LNG.bd_dismantle}{/if}
</form>
{else}{$LNG.tech.{$ID}} {$List.level} {if $List.destroy}{$LNG.bd_dismantle}{/if}{/if}
{if $List@first}
<div id="progressbar" data-time="{$List.resttime}">

</td>
<td>
<form action="game.php?page=research" method="post" class="build_form">
<input type="hidden" name="cmd" value="cancel">
<button class="button">{$LNG.bd_cancel}<br><div id="time" data-time="{$List.time}"><br></div></button>
</form>
{else}
</td>
<td>
<form action="game.php?page=research" method="post" class="build_form">
<input type="hidden" name="cmd" value="remove">
<input type="hidden" name="listid" value="{$List@iteration}">
<button class="button">{$LNG.bd_cancel}</button>
</form>
{/if}
</td>
</tr>
</table>
{/foreach}
</div>

	{foreach $ResearchList as $ID => $Element}

<div class="grid_8">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="titletech"><a href="#" onclick="return Dialog.info({$ID})">{$LNG.tech.{$ID}}</a><br>{if $Element.level > 0} ({$LNG.bd_lvl} {$Element.level}{if $Element.maxLevel != 255}/{$Element.maxLevel}{/if}){/if}</h2> 
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding" style="height:175px;">
		
						<img src="{$dpath}gebaeude/{$ID}.gif" alt="{$LNG.tech.{$ID}}" width="60" height="60"><br>
						<div class="desc"><a href="#" class="tip" title="<br><br>{$LNG.shortDescription.{$ID}}">(?)</a> {$LNG.shortDescription.{$ID}}</div><br>
						<div class="resscost">{foreach $Element.costRessources as $RessID => $RessAmount}
					{$LNG.tech.{$RessID}}: <b><span style="color:{if $Element.costOverflow[$RessID] == 0}green{else}red{/if}">{$RessAmount|number}</span></b>
					{/foreach}<br>
					{foreach $Element.costOverflow as $ResType => $ResCount}
					{$LNG.tech.{$ResType}}: <span style="font-weight:700">{$ResCount|number}</span> 
					{/foreach}<br>
					{$LNG.fgf_time}{$Element.elementTime|time}</div>
					
					<div class="build">
					{if $Element.maxLevel == $Element.levelToBuild}
						<a href="#" class="button "><span style="color:red">{$LNG.bd_maxlevel}</span></a>
					{elseif $IsLabinBuild || $IsFullQueue || !$Element.buyable}
						<a href="#" class="button "><span style="color:red">{if $Element.level == 0}{$LNG.bd_tech}{else}{$LNG.bd_tech_next_level}{$Element.levelToBuild + 1}{/if}</span></a>
					{else}
						<form action="game.php?page=research" method="post" class="build_form">
							<input type="hidden" name="cmd" value="insert">
							<input type="hidden" name="tech" value="{$ID}">
							<button type="submit" class="build_submit">{if $Element.level == 0}{$LNG.bd_tech}{else}{$LNG.bd_tech_next_level}{$Element.levelToBuild + 1}{/if}</button>
						</form>
					{/if}
					</div>

		
	 </div> 
	<!-- Box Content: End -->
	
</div>
{/foreach}

{/block}