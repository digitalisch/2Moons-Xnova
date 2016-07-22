{block name="title" prepend}{$LNG.lm_research}{/block}
{block name="content"}

<div class="row">
<div class="span9">
<h3 class="spec">{$LNG.lm_research}</h3>

<div class="alert alert-standard fade in">
<a class="close" data-dismiss="alert" href="#">&times;</a>
{foreach $Queue as $List}
{$ID = $List.element}
<table class="redesign"><tr>
<td width="650" class="left">
{if isset($ResearchList[$List.element])}
{$CQueue = $ResearchList[$List.element]}
{/if}
{if isset($CQueue) && $CQueue.maxLevel != $CQueue.level && !$IsFullQueue && $CQueue.buyable}
<form action="game.php?page=research" method="post" class="build_form">
<input type="hidden" name="cmd" value="insert">
<input type="hidden" name="tech" value="{$ID}">
<button type="submit" class="build_submit onlist">{$LNG.tech.{$ID}} {$List.level}{if !empty($List.planet)} @ {$List.planet}{/if}</button>
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
<div class="info-block">

<div class="info-text">
<h3><a href="#" onclick="return Dialog.info({$ID})">{$LNG.tech.{$ID}}</a>{if $Element.level != 0} ({$LNG.bd_lvl} {$Element.level}{if $Element.maxLevel != 255}/{$Element.maxLevel}{/if}){/if}</h3>
<table class="redesign">
<tr>
<td width="120">
<a href="#" onclick="return Dialog.info({$ID})">
<img src="{$dpath}gebaeude/{$ID}.gif" alt="{$LNG.tech.{$ID}}" width="120" height="120">
</a></td>
<td width=300><p align=left>
{$LNG.shortDescription.{$ID}}</p>
<p>{foreach $Element.costRessources as $RessID => $RessAmount}
{$LNG.tech.{$RessID}}: <b><span style="color:{if $Element.costOverflow[$RessID] == 0}lime{else}red{/if}">{$RessAmount|number}</span></b>
{/foreach} | 
{$LNG.bd_remaining}
{foreach $Element.costOverflow as $ResType => $ResCount}
{$LNG.tech.{$ResType}}: <span style="font-weight:700">{$ResCount|number}</span>
{/foreach}
</p></td>
<td class="transparent" style="vertical-align:middle;width:100px">
</td>

<td width=120><center>
{if $Element.maxLevel == $Element.levelToBuild}
<span style="color:red">{$LNG.bd_maxlevel}</span>
{elseif $IsLabinBuild || $IsFullQueue || !$Element.buyable}
<span style="color:red"><button class="button">{if $Element.level == 0}{$LNG.bd_tech}{else}{$LNG.bd_tech_next_level}{$Element.levelToBuild + 1}{/if}</span></button>
{else}
<form action="game.php?page=research" method="post" class="build_form">
<input type="hidden" name="cmd" value="insert">
<input type="hidden" name="tech" value="{$ID}">
<button class="button">{if $Element.level == 0}{$LNG.bd_tech}{else}{$LNG.bd_tech_next_level}{$Element.levelToBuild + 1}{/if}</button>
<br>{$LNG.fgf_time} {$Element.elementTime|time}
</form>
{/if}
</center></td></tr></table>
</div>
</div>
{/foreach}

{/block}