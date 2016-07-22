<!-- Header -->
<header>

<a id="back-to-top" href="#">
<i class="font-icon-arrow-simple-up"></i>
</a>

<div class="sticky-nav">
<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>

<div id="logo">
<a id="goUp" href="game.php?page=changelog" title=""></a>
</div>

<table class=redesign>
<tbody>
<tr>
{foreach $resourceTable as $resourceID => $resourceData}
<td>{$LNG.tech.$resourceID}
<br>
</td>
{/foreach}
</tr>
{if $shortlyNumber}
<tr>
{foreach $resourceTable as $resourceID => $resourceData}
{if !isset($resourceData.current)}
{$resourceData.current = $resourceData.max + $resourceData.used}
<td class="res_current tooltip" data-tooltip-content="{$resourceData.current|number}&nbsp;/&nbsp;{$resourceData.max|number}"><span{if $resourceData.current < 0} style="color:red"{/if}>{shortly_number($resourceData.current)}&nbsp;/&nbsp;{shortly_number($resourceData.max)}</span></td>
{else}
<td class="res_current tooltip" id="current_{$resourceData.name}" data-real="{$resourceData.current}" data-tooltip-content="{$resourceData.current|number}">{shortly_number($resourceData.current)}</td>
{/if}
{/foreach}
</tr>
<tr>
{foreach $resourceTable as $resourceID => $resourceData}
{if !isset($resourceData.current) || !isset($resourceData.max)}
<td>&nbsp;</td>
{else}
<td class="res_max tooltip" id="max_{$resourceData.name}" data-real="{$resourceData.max}" data-tooltip-content="{$resourceData.max|number}">{shortly_number($resourceData.max)}</td>
{/if}
{/foreach}
</tr>
{else}
<tr>
{foreach $resourceTable as $resourceID => $resourceData}
{if !isset($resourceData.current)}
{$resourceData.current = $resourceData.max + $resourceData.used}
<td class="res_current"><span{if $resourceData.current < 0} style="color:red"{/if}>{$resourceData.current|number}&nbsp;/&nbsp;{$resourceData.max|number}</span></td>
{else}
<td class="res_current" id="current_{$resourceData.name}" data-real="{$resourceData.current}">{$resourceData.current|number}</td>
{/if}
{/foreach}
</tr>
{/if}
</tbody>
</table>
</td>

<nav id="menu">
<ul id="menu-nav">

{if $authlevel > 0}<li><a href="./admin.php" style="color:lime">ADM</a></li>{/if}
<li><a href="game.php?page=overview">{$LNG.lm_overview}</a></li>
<li><a href="game.php?page=fleetTable">{$LNG.lm_fleet}</a></li>
<li><a href="game.php?page=galaxy">{$LNG.lm_galaxy}</a></li>
<li><a href="game.php?page=settings">{$LNG.lm_options}</a></li>
<li><a href="game.php?page=logout" class="external"><font color=red>Logout</font></a></li>
</ul>
</nav>

</div>
</header>
<!-- End Header -->

<!-- Our Work Section -->
<br><br>
<div class="span3">
<!-- Filter -->
<table class="redesign">
<td width="100">
<nav id="options" class="work-nav">
<ul id="filters" class="option-set" data-option-key="filter">
<li class="type-work">Menu</li>
{if isModulAvalible($smarty.const.MODULE_IMPERIUM)}<a href="game.php?page=imperium">{$LNG.lm_empire}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_RESEARCH)}<a href="game.php?page=research">{$LNG.lm_research}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_BUILDING)}<a href="game.php?page=buildings">{$LNG.lm_buildings}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_SHIPYARD_FLEET)}<a href="game.php?page=shipyard&amp;mode=fleet">{$LNG.lm_shipshard}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_SHIPYARD_DEFENSIVE)}<a href="game.php?page=shipyard&amp;mode=defense">{$LNG.lm_defenses}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_OFFICIER) || isModulAvalible($smarty.const.MODULE_DMEXTRAS)}<a href="game.php?page=officier">{$LNG.lm_officiers}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_TRADER)}<a href="game.php?page=trader">{$LNG.lm_trader}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_FLEET_TRADER)}<a href="game.php?page=fleetDealer">{$LNG.lm_fleettrader}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_TECHTREE)}<a href="game.php?page=techtree">{$LNG.lm_technology}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_RESSOURCE_LIST)}<a href="game.php?page=resources">{$LNG.lm_resources}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_ALLIANCE)}<a href="game.php?page=alliance">{$LNG.lm_alliance}</a><br>{/if}
{if !empty($hasBoard)}<a href="game.php?page=board" target="forum">{$LNG.lm_forums}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_STATISTICS)}<a href="game.php?page=statistics">{$LNG.lm_statistics}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_RECORDS)}<a href="game.php?page=records">{$LNG.lm_records}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_BATTLEHALL)}<a href="game.php?page=battleHall">{$LNG.lm_topkb}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_SEARCH)}<a href="game.php?page=search">{$LNG.lm_search}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_CHAT)}<a href="game.php?page=chat">{$LNG.lm_chat}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_SUPPORT)}<a href="game.php?page=ticket">{$LNG.lm_support}</a><br>{/if}
<a href="game.php?page=questions">{$LNG.lm_faq}</a><br>
{if isModulAvalible($smarty.const.MODULE_BANLIST)}<a href="game.php?page=banList">{$LNG.lm_banned}</a><br>{/if}
<a href="index.php?page=rules" target="rules">{$LNG.lm_rules}</a><br>
{if isModulAvalible($smarty.const.MODULE_SIMULATOR)}<a href="game.php?page=battleSimulator">{$LNG.lm_battlesim}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_MESSAGES)}<a href="game.php?page=messages">{$LNG.lm_messages}{nocache}{if $new_message > 0}<span id="newmes"> (<span id="newmesnum">{$new_message}</span>)</span>{/if}{/nocache}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_NOTICE)}<a href="game.php?page=notes">{$LNG.lm_notes}</a><br>{/if}
{if isModulAvalible($smarty.const.MODULE_BUDDYLIST)}<a href="game.php?page=buddyList">{$LNG.lm_buddylist}</a><br>{/if}
</ul>
</nav>
</td></table>
</div>