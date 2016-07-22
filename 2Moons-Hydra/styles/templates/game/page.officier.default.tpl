{block name="title" prepend}{$LNG.lm_buildings}{/block}
{block name="content"}


	{foreach $darkmatterList as $ID => $Element}

<div class="grid_8">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="titletech"><a href="#" onclick="return Dialog.info({$ID});">{$LNG.tech.{$ID}}</a></h2> 
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding" style="height:175px;">
		
						<img src="{$dpath}gebaeude/{$ID}.gif" alt="{$LNG.tech.{$ID}}" width="60" height="60"><br>
						<div class="desc">{$LNG.shortDescription.{$ID}}</div><br>
						<div class="resscost">{foreach $Element.costRessources as $RessID => $RessAmount}
					{$LNG.tech.{$RessID}}: <b><span style="color:{if $Element.costOverflow[$RessID] == 0}green{else}red{/if}">{$RessAmount|number}</span></b>
					{/foreach}<br>{$LNG.in_dest_durati}: <span style="color:green">{$Element.time|time}</span>
					</div>
					
					<div class="build">
					{if $Element.timeLeft > 0}
							{$LNG.of_still}<br>
							<span id="time_{$ID}">-</span>
							{$LNG.of_active}
							{if $Element.buyable}
							<form action="game.php?page=officier" method="post" class="build_form">
								<input type="hidden" name="id" value="{$ID}">
								<button type="submit" class="build_submit">{$LNG.of_recruit}</button>
							</form>
							{/if}
						{elseif $Element.buyable}
						<form action="game.php?page=officier" method="post" class="build_form">
							<input type="hidden" name="id" value="{$ID}">
							<button type="submit" class="build_submit">{$LNG.of_recruit}</button>
						</form>
						{else}
						<a href="#" class="button"><span style="color:#FF0000">{$LNG.of_recruit}</span></a>
						{/if}
					</div>

		
	 </div> 
	<!-- Box Content: End -->
</div>
{/foreach}

{if $officierList}
{foreach $officierList as $ID => $Element}

	<!-- Box Header: Start -->
	<div class="grid_8">
	
	<div class="box_top">
		
		<h2 class="titletech"><a href="#" onclick="return Dialog.info({$ID});">{$LNG.tech.{$ID}}</a></h2> 
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding" style="height:175px;">
		
						<img src="{$dpath}gebaeude/{$ID}.gif" alt="{$LNG.tech.{$ID}}" width="60" height="60"><br>
						<div class="desc">{foreach $Element.elementBonus as $BonusName => $Bonus}{if $Bonus[0] < 0}-{else}+{/if}{if $Bonus[1] == 0}{abs($Bonus[0] * 100)}%{else}{floatval($Bonus[0])}{/if} {$LNG.bonus.$BonusName}<br>{/foreach}</div><br>
						<div class="resscost">{foreach $Element.costRessources as $RessID => $RessAmount}
					{$LNG.tech.{$RessID}}: <b><span style="color:{if $Element.costOverflow[$RessID] == 0}green{else}red{/if}">{$RessAmount|number}</span></b>
					{/foreach}<br></span>
					</div>
					
					<div class="build">
					{if $Element.maxLevel <= $Element.level}
							<a href="#" class="button"><span style="color:red">{$LNG.bd_maxlevel}</span></a>
						{elseif $Element.buyable}
							<form action="game.php?page=officier" method="post" class="build_form">
								<input type="hidden" name="id" value="{$ID}">
								<button type="submit" class="build_submit">{$LNG.of_recruit}</button>
							</form>
						{else}
							<a href="#" class="button"><span style="color:red">{$LNG.of_recruit}</span></a>
						{/if}
					</div>

		
	 </div> 
	<!-- Box Content: End -->
	
</div>
{/foreach}{/if}

{/block}