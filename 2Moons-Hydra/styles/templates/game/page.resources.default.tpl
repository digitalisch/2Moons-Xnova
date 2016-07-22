{block name="title" prepend}{$LNG.lm_resources}{/block}
{block name="content"}<form action="?page=resources" method="post">
<input type="hidden" name="mode" value="send">

<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$header}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			<thead>
				<tr>
	<td style="width:40%">&nbsp;</td>
	<td style="width:10%">{$LNG.tech.901}</td>
	<td style="width:10%">{$LNG.tech.902}</td>
	<td style="width:10%">{$LNG.tech.903}</td>
	<td style="width:10%">{$LNG.tech.911}</td>
	<td style="width:10%"></td>
				</tr>
			</thead>
			<tbody>
				<tr class="gradeA">
	<td>{$LNG.rs_basic_income}</td>
	<td>{$basicProduction.901|number}</td>
	<td>{$basicProduction.902|number}</td>
	<td>{$basicProduction.903|number}</td>
	<td>{$basicProduction.911|number}</td>
	<td></td>
				</tr>

				
				{foreach $productionList as $productionID => $productionRow}
<tr>
	<td>{$LNG.tech.$productionID } ({if $productionID  > 200}{$LNG.rs_amount}{else}{$LNG.rs_lvl}{/if} {$productionRow.elementLevel})</td>
	<td><span style="color:{if $productionRow.production.901 > 0}green{elseif $productionRow.production.901 < 0}red{else}white{/if}">{$productionRow.production.901|number}</span></td>
	<td><span style="color:{if $productionRow.production.902 > 0}green{elseif $productionRow.production.902 < 0}red{else}white{/if}">{$productionRow.production.902|number}</span></td>
	<td><span style="color:{if $productionRow.production.903 > 0}green{elseif $productionRow.production.903 < 0}red{else}white{/if}">{$productionRow.production.903|number}</span></td>
	<td><span style="color:{if $productionRow.production.911 > 0}green{elseif $productionRow.production.911 < 0}red{else}white{/if}">{$productionRow.production.911|number}</span></td>
	<td style="width:10%">
		{html_options name="prod[{$productionID}]" options=$prodSelector selected=$productionRow.prodLevel}
	</td>
</tr>
{/foreach}

				
				
				<tr class="gradeA">
						<td>{$LNG.rs_ress_bonus}</td>
	<td><span style="color:{if $bonusProduction.901 > 0}green{elseif $bonusProduction.901 < 0}red{else}white{/if}">{$bonusProduction.901|number}</span></td>
	<td><span style="color:{if $bonusProduction.902 > 0}green{elseif $bonusProduction.902 < 0}red{else}white{/if}">{$bonusProduction.902|number}</span></td>
	<td><span style="color:{if $bonusProduction.903 > 0}green{elseif $bonusProduction.903 < 0}red{else}white{/if}">{$bonusProduction.903|number}</span></td>
	<td><span style="color:{if $bonusProduction.911 > 0}green{elseif $bonusProduction.911 < 0}red{else}white{/if}">{$bonusProduction.911|number}</span></td>
	<td><input value="Calculate" type="submit"></td>
				</tr>
				<tr class="gradeA">
	<td>{$LNG.rs_storage_capacity}</td>
	<td><span style="color:green;">{$storage.901}</span></td>
	<td><span style="color:green;">{$storage.902}</span></td>
	<td><span style="color:green;">{$storage.903}</span></td>
	<td>-</td>
	<td>-</td>
				</tr>
				<tr class="gradeA">
	<td>{$LNG.rs_sum}:</td>
	<td><span style="color:{if $totalProduction.901 > 0}green{elseif $totalProduction.901 < 0}red{else}white{/if}">{$totalProduction.901|number}</span></td>
	<td><span style="color:{if $totalProduction.902 > 0}green{elseif $totalProduction.902 < 0}red{else}white{/if}">{$totalProduction.902|number}</span></td>
	<td><span style="color:{if $totalProduction.903 > 0}green{elseif $totalProduction.903 < 0}red{else}white{/if}">{$totalProduction.903|number}</span></td>
	<td><span style="color:{if $totalProduction.911 > 0}green{elseif $totalProduction.911 < 0}red{else}white{/if}">{$totalProduction.911|number}</span></td>
	<td>-</td>
				</tr>
				<tr class="gradeA">
	<td>{$LNG.rs_daily}</td>
	<td><span style="color:{if $dailyProduction.901 > 0}green{elseif $dailyProduction.901 < 0}red{else}white{/if}">{$dailyProduction.901|number}</span></td>
	<td><span style="color:{if $dailyProduction.902 > 0}green{elseif $dailyProduction.902 < 0}red{else}white{/if}">{$dailyProduction.902|number}</span></td>
	<td><span style="color:{if $dailyProduction.903 > 0}green{elseif $dailyProduction.903 < 0}red{else}white{/if}">{$dailyProduction.903|number}</span></td>
	<td><span style="color:{if $dailyProduction.911 > 0}green{elseif $dailyProduction.911 < 0}red{else}white{/if}">{$dailyProduction.911|number}</span></td>
	<td>-</td>
				</tr>
				<tr class="gradeA">
	<td>{$LNG.rs_weekly}</td>
	<td><span style="color:{if $weeklyProduction.901 > 0}green{elseif $weeklyProduction.901 < 0}red{else}white{/if}">{$weeklyProduction.901|number}</span></td>
	<td><span style="color:{if $weeklyProduction.902 > 0}green{elseif $weeklyProduction.902 < 0}red{else}white{/if}">{$weeklyProduction.902|number}</span></td>
	<td><span style="color:{if $weeklyProduction.903 > 0}green{elseif $weeklyProduction.903 < 0}red{else}white{/if}">{$weeklyProduction.903|number}</span></td>
	<td><span style="color:{if $weeklyProduction.911 > 0}green{elseif $weeklyProduction.911 < 0}red{else}white{/if}">{$weeklyProduction.911|number}</span></td>
	<td>-</td>
				</tr>
			</tbody>
		</table>
		<!-- Plain Table: End -->

	</div>
	<!-- Box Content: End -->
	
</div></form>
{/block}