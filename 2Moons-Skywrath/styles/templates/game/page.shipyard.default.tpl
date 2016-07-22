{block name="title" prepend}{if $mode == "defense"}{$LNG.lm_defenses}{else}{$LNG.lm_shipshard}{/if}{/block}
{block name="content"}

<section id="playground">
<div class="full-width">

			
			<div class="three-fourths breadcrumb">
            	<span><a href="#" class="icon awesome exclamation-sign"></a></span>
                <span class="middle"></span>
                <span><a href="#">Hit "Enter" key of your keyboard after selecting the amount of Ships or Defense to build</a></span>
                <span class="end"></span>
            </div>
			
			{if !$NotBuilding}
			<div class="three-fourths breadcrumb">
            	<span><a href="#" class="icon entypo warning"></a></span>
                <span class="middle"></span>
                <span><a href="#">{$LNG.bd_building_shipyard}</a></span>
                <span class="end"></span>
            </div>
			{/if}


{if !empty($BuildList)}
<div class="full-width">
<div class="box">
<div class="inner"> 
<div class="contents">

<table style="width:100%">
<form action="game.php?page=shipyard&amp;mode={$mode}" method="post">
<input type="hidden" name="action" value="delete">
<tr>
<td>
<select name="auftr[]" id="auftr" size="1" multiple><option>&nbsp;</option></select>
<br><br><input class="button " type="submit" value="{$LNG.bd_cancel_send}">
</td>
<td>
{$LNG.bd_cancel_warning}<br>
<div id="bx" class="z"></div> (<span id="timeleft"></span>)
</td></tr>
</table>
			</form>		

	
</div></div></div></div>{/if}<br>

{foreach $elementList as $ID => $Element}
<form action="game.php?page=shipyard&amp;mode={$mode}" method="post">

<div class="one-third">
<div class="box">
<div class="inner"> 
<div class="titlebar"><a href="#" onclick="return Dialog.info({$ID})">{$LNG.tech.{$ID}}</a> <span id="val_{$ID}">{if $Element.available != 0} ({$LNG.bd_available} {$Element.available|number}){/if}</div>
<div class="contents"><img src="{$dpath}gebaeude/{$ID}.gif" alt="{$LNG.tech.{$ID}}" width="60" height="60"><br>
						<div class="desc"><a href="#" class="tip" title="<br><br>{$LNG.shortDescription.{$ID}}">(?)</a> {$LNG.shortDescription.{$ID}}</div><br>
						<div class="resscost">{foreach $Element.costRessources as $RessID => $RessAmount}
					{$LNG.tech.{$RessID}}: <b><span style="color:{if $Element.costOverflow[$RessID] == 0}green{else}red{/if}">{$RessAmount|number}</span></b>
					{/foreach}<br>
					{$LNG.fgf_time}{$Element.elementTime|time}</div>
					
					<div class="fleet">
					{if $Element.AlreadyBuild}<a href="#" class="button"><span style="color:red">{$LNG.bd_protection_shield_only_one}</span></a>{elseif $NotBuilding && $Element.buyable}
					<div class="field-box">
					<input type="text" class="small" name="fmenge[{$ID}]" id="input_{$ID}" size="{$maxlength}" maxlength="{$maxlength}" placeholder="Max : {$Element.maxBuildable|number}" tabindex="{$smarty.foreach.FleetList.iteration}>
					</div>
					{/if}
					</div>

					<div class="hitbox"><a href="#" class="button tipsy-header" title="{$LNG.shortDescription.{$ID}}">(?)</a></div>

	</form>				
</div>
</div>
</div>
</div>
</div>
{/foreach}


<script type="text/javascript">
data			= {$BuildList|json};
bd_operating	= '{$LNG.bd_operating}';
bd_available	= '{$LNG.bd_available}';
</script>
{/block}