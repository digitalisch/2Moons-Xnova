{block name="title" prepend}{if $mode == "defense"}{$LNG.lm_defenses}{else}{$LNG.lm_shipshard}{/if}{/block}
{block name="content"}

{if !$NotBuilding}
<div class="grid_24">
<div class="notice error">
<p><b>Error Message:</b> {$LNG.bd_building_shipyard}.</p>
</div>
</div>
{else}
<div class="grid_24">
<div class="notice error">
<p><b>Hint Message:</b> After select the fleet amount you want to build, hit Enter</p>
</div>
</div>
{/if}



{if !empty($BuildList)}
<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon time">{$LNG.bd_remaining}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding">

<table class="redesign">
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
			</form		
	</div>
	<!-- Box Content: End -->
	
</div>{/if}<br>

</div>

{foreach $elementList as $ID => $Element}
<form action="game.php?page=shipyard&amp;mode={$mode}" method="post">

<div class="grid_8">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="titletech"><a href="#" onclick="return Dialog.info({$ID})">{$LNG.tech.{$ID}}</a> <span id="val_{$ID}">{if $Element.available != 0} ({$LNG.bd_available} {$Element.available|number}){/if}</h2> 
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding" style="height:175px;">
		
						<img src="{$dpath}gebaeude/{$ID}.gif" alt="{$LNG.tech.{$ID}}" width="60" height="60"><br>
						<div class="desc"><a href="#" class="tip" title="<br><br>{$LNG.shortDescription.{$ID}}">(?)</a> {$LNG.shortDescription.{$ID}}</div><br>
						<div class="resscost">{foreach $Element.costRessources as $RessID => $RessAmount}
					{$LNG.tech.{$RessID}}: <b><span style="color:{if $Element.costOverflow[$RessID] == 0}green{else}red{/if}">{$RessAmount|number}</span></b>
					{/foreach}<br>
					{$LNG.fgf_time}{$Element.elementTime|time}</div>
					
					<div class="build">
					{if $Element.AlreadyBuild}<a href="#" class="button"><span style="color:red">{$LNG.bd_protection_shield_only_one}</span></a>{elseif $NotBuilding && $Element.buyable}
					<input type="text" name="fmenge[{$ID}]" id="input_{$ID}" size="{$maxlength}" maxlength="{$maxlength}" placeholder="Max : {$Element.maxBuildable|number}" tabindex="{$smarty.foreach.FleetList.iteration}">
					{/if}
					</div>

		
	 </div> 
	<!-- Box Content: End --></form>
	
</div>
{/foreach}
<script type="text/javascript">
data			= {$BuildList|json};
bd_operating	= '{$LNG.bd_operating}';
bd_available	= '{$LNG.bd_available}';
</script>
{/block}