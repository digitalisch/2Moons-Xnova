{block name="title" prepend}{$LNG.lm_officiers}{/block}
{block name="content"}

<section id="playground">

{foreach $darkmatterList as $ID => $Element}
<div class="one-third">
<div class="box">
<div class="inner">
<div class="titlebar"><span class="icon entypo info-circle"></span> <a href="#" onclick="return Dialog.info({$ID});">{$LNG.tech.{$ID}}</a> </span></div>
<div class="contents">
<img src="{$dpath}gebaeude/{$ID}.gif" alt="{$LNG.tech.{$ID}}" width="60" height="60"><br>
						<div class="desc">{$LNG.shortDescription.{$ID}}</div><br>
						<div class="resscost">{foreach $Element.costRessources as $RessID => $RessAmount}
					{$LNG.tech.{$RessID}}: <b><span style="color:{if $Element.costOverflow[$RessID] == 0}green{else}red{/if}">{$RessAmount|number}</span></b>
					{/foreach}<br>{$LNG.in_dest_durati}: <span style="color:green">{$Element.time|time}</span>
					</div>
					
					<div class="offi">
					{if $Element.timeLeft > 0}
							
							{if $Element.buyable}
							<form action="game.php?page=officier" method="post" class="build_form">
								<input type="hidden" name="id" value="{$ID}">
								<button type="submit" class="button"><span id="time_{$ID}">-</span> | {$LNG.of_recruit}</button>
							</form>
							{/if}
						{elseif $Element.buyable}
						<form action="game.php?page=officier" method="post" class="build_form">
							<input type="hidden" name="id" value="{$ID}">
							<button type="submit" class="button">{$LNG.of_recruit}</button>
						</form>
						{else}
						<a href="#" class="button"><span style="color:#FF0000">{$LNG.of_recruit}</span></a>
						{/if}
					</div>

</div>
</div>
</div>
</div>{/foreach}<br>

{if $officierList}
{foreach $officierList as $ID => $Element}
<div class="one-third">
<div class="box">
<div class="inner">
<div class="titlebar"><span class="icon entypo info-circle"></span> <a href="#" onclick="return Dialog.info({$ID});">{$LNG.tech.{$ID}}</a> ({$LNG.of_lvl} {$Element.level}/{$Element.maxLevel})</span></div>
<div class="contents">
<img src="{$dpath}gebaeude/{$ID}.jpg" alt="{$LNG.tech.{$ID}}" width="60" height="60"><br>
						<div class="desc">{foreach $Element.elementBonus as $BonusName => $Bonus}{if $Bonus[0] < 0}-{else}+{/if}{if $Bonus[1] == 0}{abs($Bonus[0] * 100)}%{else}{floatval($Bonus[0])}{/if} {$LNG.bonus.$BonusName}<br>{/foreach}</div><br>
						<div class="resscost">{foreach $Element.costRessources as $RessID => $RessAmount}
					{$LNG.tech.{$RessID}}: <b><span style="color:{if $Element.costOverflow[$RessID] == 0}green{else}red{/if}">{$RessAmount|number}</span></b>
					{/foreach}<br></span>
					</div>
					
					<div class="offi">
					{if $Element.maxLevel <= $Element.level}
							<a href="#" class="button"><span style="color:red">{$LNG.bd_maxlevel}</span></a>
						{elseif $Element.buyable}
							<form action="game.php?page=officier" method="post" class="build_form">
								<input type="hidden" name="id" value="{$ID}">
								<button type="submit" class="button">{$LNG.of_recruit}</button>
							</form>
						{else}
							<a href="#" class="button"><span style="color:red">{$LNG.of_recruit}</span></a>
						{/if}
					</div>
					<div class="hitbox"><a href="#" class="button tipsy-header" title="{$LNG.shortDescription.{$ID}}"><span class="icon entypo info"></span></a></div>
					</div>
</div>
</div>
</div>{/foreach}{/if}

</section>

{/block}