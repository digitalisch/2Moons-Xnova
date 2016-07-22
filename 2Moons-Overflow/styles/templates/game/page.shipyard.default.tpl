{block name="title" prepend}{if $mode == "defense"}{$LNG.lm_defenses}{else}{$LNG.lm_shipshard}{/if}{/block}
{block name="content"}


<div class="row">
<div class="span9">

{if !$NotBuilding}<table class="redesign" width="70%" id="infobox" style="text-align:center" class="redesign"><tr><td>{$LNG.bd_building_shipyard}</td></tr></table><br><br>{/if}

<h3 class="spec">{if $mode == "defense"}{$LNG.lm_defenses}{else}{$LNG.lm_shipshard}{/if}</h3>

<div class="alert alert-standard fade in">
<a class="close" data-dismiss="alert" href="#">&times;</a>
{if !empty($BuildList)}
<table class="redesign">
<form action="game.php?page=shipyard&amp;mode={$mode}" method="post">
<input type="hidden" name="action" value="delete">
<tr>
<td>
<select name="auftr[]" id="auftr" size="1" multiple><option>&nbsp;</option></select>
<br><center><input class="button button-mini" type="submit" value="{$LNG.bd_cancel_send}"></center>
</td>
<td>
{$LNG.bd_cancel_warning}<br>
<div id="bx" class="z"></div>
</td></tr>
</table>
</form>
{/if}
</div>



{foreach $elementList as $ID => $Element}
<div class="info-block">

<form action="game.php?page=shipyard&amp;mode={$mode}" method="post">

<div class="info-text">
<h3><a href="#" onclick="return Dialog.info({$ID})">{$LNG.tech.{$ID}}</a><span id="val_{$ID}">{if $Element.available != 0} ({$LNG.bd_available} {$Element.available|number}){/if}</h3>
<table class="redesign">
<tr>
<td width="120">
<a href="#" onclick="return Dialog.info({$ID})">
<img src="{$dpath}gebaeude/{$ID}.gif" alt="{$LNG.tech.{$ID}}" width="120" height="120">
</a></td>
<td width=400><p align=left>
{$LNG.shortDescription.{$ID}}</p>
<p>{foreach $Element.costRessources as $RessID => $RessAmount}
{$LNG.tech.{$RessID}}: <b><span style="color:{if $Element.costOverflow[$RessID] == 0}lime{else}red{/if}">{$RessAmount|number}</span></b>
{/foreach}
</p></td>


<td width=100 align=right>
{if $Element.AlreadyBuild}<span style="color:red">{$LNG.bd_protection_shield_only_one}</span>{elseif $NotBuilding && $Element.buyable}
<input type="text" name="fmenge[{$ID}]" id="input_{$ID}" size="{$maxlength}" maxlength="{$maxlength}" placeholder="Max : {$Element.maxBuildable|number}" tabindex="{$smarty.foreach.FleetList.iteration}">
<br><center>{$Element.elementTime|time}<br>{$LNG.enter} </a></center>
{/if}
</td>

</tr></table>
</div></form>
</div>
{/foreach}

<script type="text/javascript">
data= {$BuildList|json};
bd_operating	= '{$LNG.bd_operating}';
bd_available	= '{$LNG.bd_available}';
</script>
{/block}