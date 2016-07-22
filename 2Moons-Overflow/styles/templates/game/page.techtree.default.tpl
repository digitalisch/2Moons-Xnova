{block name="title" prepend}{$LNG.lm_technology}{/block}
{block name="content"}

<div class="row">
<div class="span9">

<h3 class="spec">{$LNG.lm_technology}</h3>
{foreach $TechTreeList as $elementID => $requireList}
{if !is_array($requireList)}
<tr>
<td></td>
</tr>
{else}
<div class="info-block">

<div class="info-text">
<h3><a href="#" onclick="return Dialog.info({$elementID})">{$LNG.tech.$elementID}</a></h3>
<table class="redesign">
<tr>
<td width="100">
<a href="#" onclick="return Dialog.info({$elementID})"><img src="{$dpath}gebaeude/{$elementID}.{if $elementID >=600 && $elementID <= 699}jpg{else}gif{/if}" width="50" height="50"></a></td>
<td width=400><p align=left>
{if $requireList}
{foreach $requireList as $requireID => $NeedLevel}
<a href="#" onclick="return Dialog.info({$elementID})"><span style="color:{if $NeedLevel.own < $NeedLevel.count}red{else}lime{/if};">{$LNG.tech.$requireID} ({$LNG.tt_lvl} {min($NeedLevel.count, $NeedLevel.own)}/{$NeedLevel.count})</span></a>{if !$NeedLevel@last} | {/if}
{/foreach}
{/if}
</td>

</tr></table>
</div>
</div>
{/if}
{/foreach}


{/block}