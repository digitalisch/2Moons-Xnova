{block name="title" prepend}{/block}
{block name="content"}

<div class="row">
<div class="span9">

<h3 class="spec">{$LNG.lm_trader}</h3>
<div class="tabbable">
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">
{if $requiredDarkMatter}
<table class="redesign">
<tr>
	<th>{$LNG.fcm_info}</th>
</tr>
<tr>
	<td><span style="color:red;">{$requiredDarkMatter}</span></td>
</tr>
</table>
<br>
<br>
{/if}
<table style="width:519px;">
<tr>
	<th>{$LNG.tr_call_trader}</th>
</tr>
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
						</form>
						{else}<img src="{$dpath}images/{$resource.$resourceID}.gif" title="{$LNG.tech.$resourceID}" border="0" height="32" width="52" style="margin: 3px;"><br>{$LNG.tech.$resourceID}{/if}
					</div>
					{/foreach}
				</div>
			</div>
			<div class="clear"></div>
		</div>
		</div>
		<div>
			<p>{$tr_cost_dm_trader}<br>
			{$LNG.tr_exchange_quota}: {$charge.901.903}/{$charge.902.903}/{$charge.903.903}</p>
		</div>
	</td>
</tr>
</table>
</div>

</div>{/block}
