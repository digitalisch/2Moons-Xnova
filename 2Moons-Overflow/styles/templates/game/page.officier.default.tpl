{block name="title" prepend}{$LNG.lm_officiers}{/block}
{block name="content"}
<div class="row">
<div class="span9">

<h3 class="spec">{$of_dm_trade}</h3>
{foreach $darkmatterList as $ID => $Element}
<div class="info-block">

<div class="info-text">
<h3><a href="#" onclick="return Dialog.info({$ID});">{$LNG.tech.{$ID}}</a></h3>
<table class="redesign">
<tr>
<td width="100">
<a href="#" onclick="return Dialog.info({$ID})">
<img src="{$dpath}gebaeude/{$ID}.gif" alt="{$LNG.tech.{$ID}}" width="100" height="100">
</a></td>
<td width=300><p align=left>
<p>{foreach $Element.costRessources as $RessID => $RessAmount}
<p>{$LNG.shortDescription.{$ID}}</p>
{foreach $Element.elementBonus as $BonusName => $Bonus}{if $Bonus@iteration % 3 === 1}<p>{/if}{if $Bonus[0] < 0}-{else}+{/if}{if $Bonus[1] == 0}{abs($Bonus[0] * 100)}%{else}{$Bonus[0]}{/if} {$LNG.bonus.$BonusName}{if $Bonus@iteration % 3 === 0 || $Bonus@last}</p>{else}&nbsp;{/if}{/foreach}
<p>{foreach $Element.costRessources as $RessID => $RessAmount}{$LNG.tech.{$RessID}}: <b><span style="color:{if $Element.costOverflow[$RessID] == 0}lime{else}red{/if}">{$RessAmount|number}</span></b>{/foreach} | {$LNG.in_dest_durati}: <span style="color:lime">{$Element.time|time}</span></p></td>
<td class="transparent" style="vertical-align:middle;width:100px">
</td>

<td width=120><center>
{if $Element.timeLeft > 0}
{$LNG.of_still}<br>
<span id="time_{$ID}">-</span>
{$LNG.of_active}
{if $Element.buyable}
<form action="game.php?page=officier" method="post" class="build_form">
<input type="hidden" name="id" value="{$ID}">
<button class="button" type="submit" >{$LNG.of_recruit}</button>
</form>
{/if}
{elseif $Element.buyable}
<form action="game.php?page=officier" method="post" class="build_form">
<input type="hidden" name="id" value="{$ID}">
<button class="button" type="submit">{$LNG.of_recruit}</button>
</form>
{else}
<span style="color:#FF0000">{$LNG.of_recruit}</span>
{/if}
</center></td></tr></table>
</div>
</div>
{/foreach}
{/foreach}

{foreach $officierList as $ID => $Element}
<div class="info-block">

<div class="info-text">
<h3><a href="#" onclick="return Dialog.info({$ID})">{$LNG.tech.{$ID}}</a> ({$LNG.of_lvl} {$Element.level}/{$Element.maxLevel})</h3>
<table class="redesign">
<tr>
<td width="120">
<a href="#" onclick="return Dialog.info({$ID})">
<img src="{$dpath}gebaeude/{$ID}.jpg" alt="{$LNG.tech.{$ID}}" width="120" height="120">
</a></td>
<td width=300><p align=left>
<p>{foreach $Element.elementBonus as $BonusName => $Bonus}{if $Bonus[0] < 0}-{else}+{/if}{if $Bonus[1] == 0}{abs($Bonus[0] * 100)}%{else}{floatval($Bonus[0])}{/if} {$LNG.bonus.$BonusName}<br>{/foreach}</p>
<p>{foreach $Element.costRessources as $RessID => $RessAmount}{$LNG.tech.{$RessID}}: <b><span style="color:{if $Element.costOverflow[$RessID] == 0}lime{else}red{/if}">{$RessAmount|number}</span></b>{/foreach}</p>
<td class="transparent" style="vertical-align:middle;width:100px">
</td>

<td width=120><center>
{if $Element.maxLevel <= $Element.level}
<span style="color:red">{$LNG.bd_maxlevel}</span>
{elseif $Element.buyable}
<form action="game.php?page=officier" method="post" class="build_form">
<input type="hidden" name="id" value="{$ID}">
<button type="submit" class="button">{$LNG.of_recruit}</button>
</form>
{else}
<span style="color:red">{$LNG.of_recruit}</span>
{/if}</td></tr></table>
</div>
</div>
{/foreach}


{/block}