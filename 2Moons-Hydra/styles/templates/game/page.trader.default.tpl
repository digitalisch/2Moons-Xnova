{block name="title" prepend}{$LNG.lm_trader}{/block}
{block name="content"}

<div class="grid_24">

{if $requiredDarkMatter}
<div class="notice error">
<p><b>Error Message:</b> {$requiredDarkMatter}</p>
</div>
{/if}

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon time">{$LNG.lm_trader}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding">
		<center>
<table style="width:100%;">
<tr>
	<td>
		<div>{$LNG.tr_call_trader_who_buys}</div>
		<div id="traderContainer" class="centerContainer">
			<div class="outer">
				<div class="inner">
					{foreach $charge as $resourceID => $chageData}
					<div class="trader_col">
						{if !$requiredDarkMatter}<form action="game.php?page=trader" method="post">
						<input type="hidden" name="mode" value="trade">
						<input type="hidden" name="resource" value="{$resourceID}">
						<input type="image" id="trader_metal" src="{$dpath}images/{$resource.$resourceID}.gif" title="{$LNG.tech.$resourceID}" border="0" height="32" width="52"><br>
						<b>{$LNG.tech.$resourceID}</b>
						</form>
						{else}<img src="{$dpath}images/{$resource.$resourceID}.gif" title="{$LNG.tech.$resourceID}" border="0" height="32" width="52" style="margin: 3px;"><br>{$LNG.tech.$resourceID}{/if}
					</div>
					{/foreach}
				</div>
			</div>
			<div class="clear"></div><br>
		</div>
		</div>
		<div>
			<p>{$tr_cost_dm_trader}</p>
			<p>{$LNG.tr_exchange_quota}: {$charge.901.903}/{$charge.902.903}/{$charge.903.903}</p>
		</div>
	</td>
</tr>
</table></center>
		
	</div>
	<!-- Box Content: End -->
	
</div>


{/block}