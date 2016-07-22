{block name="title" prepend}{$LNG.lm_research}{/block}
{block name="content"}
{if !empty($Queue)}
<div id="buildlist" class="buildlist">
	<table style="width:760px">
		{foreach $Queue as $List}
		{$ID = $List.element}
		<tr>
			<td style="width:70%;vertical-align:top;" class="left">
				{if isset($ResearchList[$List.element])}
				{$CQueue = $ResearchList[$List.element]}
				{/if}
				{$List@iteration}.: 
				{if isset($CQueue) && $CQueue.maxLevel != $CQueue.level && !$IsFullQueue && $CQueue.buyable}
				<form action="game.php?page=research" method="post" class="build_form">
					<input type="hidden" name="cmd" value="insert">
					<input type="hidden" name="tech" value="{$ID}">
					<button type="submit" class="build_submit onlist">{$LNG.tech.{$ID}} {$List.level}{if !empty($List.planet)} @ {$List.planet}{/if}</button>
				</form>
				{else}
				{$LNG.tech.{$ID}} {$List.level}{if !empty($List.planet)} @ {$List.planet}{/if}
				{/if}
				{if $List@first}
				<br><br><div id="progressbar" data-time="{$List.resttime}"></div>
			</td>
			<td>
				<div id="time" data-time="{$List.time}"><br></div>
				<form action="game.php?page=research" method="post" class="build_form">
					<input type="hidden" name="cmd" value="cancel">
					<button type="submit" class="build_submit onlist">{$LNG.bd_cancel}</button>
				</form>
				{else}
			</td>
			<td>
				<form action="game.php?page=research" method="post" class="build_form">
					<input type="hidden" name="cmd" value="remove">
					<input type="hidden" name="listid" value="{$List@iteration}">
					<button type="submit" class="build_submit onlist">{$LNG.bd_cancel}</button>
				</form>
				{/if}
				<br><span style="color:lime" data-time="{$List.endtime}" class="timer">{$List.display}</span>
			</td>
		</tr>
	{/foreach}
	</table>
</div>
{/if}
{if $IsLabinBuild}<table width="70%" id="infobox" style="border: 2px solid red; text-align:center;background:transparent"><tr><td>{$LNG.bd_building_lab}</td></tr></table><br><br>{/if}
<table style="width:760px">
	{foreach $ResearchList as $ID => $Element}
	<tr>
		<th colspan="4" class=" center">
			<a href="#" onclick="return Dialog.info({$ID})">{$LNG.tech.{$ID}}</a>{if $Element.level != 0} ({$LNG.bd_lvl} {$Element.level}{if $Element.maxLevel != 255}/{$Element.maxLevel}{/if}){/if}
		</th>
	</tr>
	<tr>
		<td rowspan="1" style="width:120px;">
			<a href="#" onclick="return Dialog.info({$ID})" class="tooltip_sticky"data-tooltip-content="<table width='100%'><tr><th colspan='2' style='text-align:center;background-color: rgba(0,0,0, 1.0);'>{$LNG.shortDescription.{$ID}}</th></tr><tr><td class='transparent'></td><td class='transparent'></td></tr></table>">
				<img src="{$dpath}gebaeude/{$ID}.png"  alt="" class="top" width="120" height="120">
			</a>
		</td>
		<td rowspan="l">
		<table style="width:100%">	
					
		<td class="transparent" style="vertical-align:middle;width:100px">
						<font color="orange"><b>{$LNG.gf_time}:</b></font><br>{$Element.elementTime|time}</td></table>
		</td>
					
					<td>
						{foreach $Element.costRessources as $RessID => $RessAmount}
						&nbsp;&nbsp;<b>{$LNG.tech.{$RessID}}:</b>&nbsp;<span style="color:{if $Element.costOverflow[$RessID] == 0}lime{else}red{/if}">{$RessAmount|number}</span>
						{/foreach}
					</td>
		
		<td rowspan="l">
		
					{if $Element.maxLevel == $Element.levelToBuild}
						<span style="color:red">{$LNG.bd_maxlevel}</span>
					{elseif $IsLabinBuild || $IsFullQueue || !$Element.buyable}
						<span style="color:red">{if $Element.level == 0}{$LNG.bd_tech}{else}{$LNG.bd_tech_next_level}{$Element.levelToBuild + 1}{/if}</span>
						
					{else}
						<form action="game.php?page=research" method="post" class="build_form">
							<input type="hidden" name="cmd" value="insert">
							<input type="hidden" name="tech" value="{$ID}">
							<button type="submit" class="build_submit">{if $Element.level == 0}{$LNG.bd_tech}{else}{$LNG.bd_tech_next_level}{$Element.levelToBuild + 1}{/if}</button>
						</form>
					{/if}
		
		</td>
	</tr>
	{/foreach}
</table>
{/block}