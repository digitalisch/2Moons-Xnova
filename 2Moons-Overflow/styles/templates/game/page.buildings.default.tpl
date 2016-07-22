{block name="title" prepend}{$LNG.lm_buildings}{/block}
{block name="content"}

<div class="row">
<div class="span9">
<h3 class="spec">{$LNG.lm_buildings}</h3>

<div class="alert alert-standard fade in">
<a class="close" data-dismiss="alert" href="#">&times;</a>
{foreach $Queue as $List}
{$ID = $List.element}
<table class="redesign"><tr>
<td width="650" class="left">

{if !($isBusy.research && ($ID == 6 || $ID == 31)) && !($isBusy.shipyard && ($ID == 15 || $ID == 21)) && $RoomIsOk && $CanBuildElement && $BuildInfoList[$ID].buyable}
<form class="build_form" action="game.php?page=buildings" method="post">
<input type="hidden" name="cmd" value="insert">
<input type="hidden" name="building" value="{$ID}">
<button type="submit" class="build_submit onlist">{$LNG.tech.{$ID}} ({$LNG.bd_lvl} {$List.level}){if $List.destroy} {$LNG.bd_dismantle}{/if}
</button>
</form>
{else}{$LNG.tech.{$ID}} {$List.level} {if $List.destroy}{$LNG.bd_dismantle}{/if}{/if}
{if $List@first}
<div id="progressbar" data-time="{$List.resttime}">

</td>
<td>
<form action="game.php?page=buildings" method="post" class="build_form">
<input type="hidden" name="cmd" value="cancel">
<button class="button">{$LNG.bd_cancel}<br><div id="time" data-time="{$List.time}"><br></div></button>
</form>
{else}
</td>
<td>
<form action="game.php?page=buildings" method="post" class="build_form">
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


{foreach $BuildInfoList as $ID => $Element}
<div class="info-block">

<div class="info-text">
<h3><a href="#" onclick="return Dialog.info({$ID})">{$LNG.tech.{$ID}}</a>{if $Element.level > 0} ({$LNG.bd_lvl} {$Element.level}{if $Element.maxLevel != 255}/{$Element.maxLevel}{/if}){/if}</h3>
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
{if !empty($Element.infoEnergy)}
<br>{$Element.infoEnergy}
{/if} | {$LNG.fgf_time} {$Element.elementTime|time}
</p></td>
<td class="transparent" style="vertical-align:middle;width:100px">
</td>

<td width=120><center>
{if $Element.maxLevel == $Element.levelToBuild}
<span style="color:red">{$LNG.bd_maxlevel}</span>
{elseif ($isBusy.research && ($ID == 6 || $ID == 31)) || ($isBusy.shipyard && ($ID == 15 || $ID == 21))}
<span style="color:red">{$LNG.bd_working}</span>
{else}
{if $RoomIsOk}
{if $CanBuildElement && $Element.buyable}
<button class="button button-mini" name="building_minus" onclick="buildanz({$ID},-1);">-</button>&nbsp&nbsp&nbsp
<form action="game.php?page=buildings" method="post" class="build_form">
<input type="hidden" name="cmd" value="insert">
<input type="hidden" name="building" value="{$ID}">
<input class="button button-mini" type="text" id="building_anz{$ID}" name="building_anz" value="1" style="width:20px;">
<button class="button button-mini" name="building_plus" onclick="buildanz({$ID},1);">+</button><br>
<button class="button button-mini" type="submit" class="build_submit">{$LNG.bd_build}</button>
</form>
{else}
<span style="color:red">{if $Element.level == 0}{$LNG.bd_build}{else}{$LNG.bd_build_next_level}{$Element.levelToBuild + 1}{/if}</span>
{/if}
{else}
<span style="color:red">{$LNG.bd_no_more_fields}</span>
{/if}
{/if}<br>
<form action='game.php?page=buildings' method='post' class='build_form'><input type='hidden' name='cmd' value='destroy'><input type='hidden' name='building' value='{$ID}'><button class="button button-mini" type='submit' class='build_submit onlist'>{$LNG.bd_dismantle}</button></form>
</center></td></tr></table>
</div>
</div>
{/foreach}

{/block}