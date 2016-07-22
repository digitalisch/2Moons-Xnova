{block name="title" prepend}{$LNG.lm_technology}{/block}
{block name="content"}


{foreach $TechTreeList as $elementID => $requireList}
{if !is_array($requireList)}
{else}
<div class="grid_6">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="titletech"><a href="#" onclick="return Dialog.info({$elementID})">{$LNG.tech.$elementID}</a></h2> 
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding" style="height:180px;">
		
						<center><a href="#" onclick="return Dialog.info({$elementID})"><img src="{$dpath}gebaeude/{$elementID}.{if $elementID >=600 && $elementID <= 699}jpg{else}gif{/if}" width="50" height="50"></a></center><br>
						{if $requireList}
		{foreach $requireList as $requireID => $NeedLevel}
			<a href="#" onclick="return Dialog.info({$elementID})">
			<span style="color:{if $NeedLevel.own < $NeedLevel.count}red{else}green{/if};">
			{$LNG.tech.$requireID} ({min($NeedLevel.count, $NeedLevel.own)}/{$NeedLevel.count})</span></a>{if !$NeedLevel@last}<br>{/if}
		{/foreach}
	{/if}
					</div>

		
	 </div> {/if}
{/foreach}
	<!-- Box Content: End -->
	
</div>


{/block}