{block name="title" prepend}{$LNG.lm_trader}{/block}
{block name="content"}


<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon time">{$LNG.lm_trader}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding">

	<form id="trader" action="" method="post">
	<input type="hidden" name="mode" value="send">
	<input type="hidden" name="resource" value="{$tradeResourceID}">
	<table class="table569">
	<tr>
		<th colspan="4">{$LNG.tr_sell} {$LNG.tech.$tradeResourceID}</th>
	</tr>
	<tr>
		<td>{$LNG.tr_resource}</td>
		<td colspan="2">{$LNG.tr_amount}</td>
		<td>{$LNG.tr_quota_exchange}</td>
	</tr>
	<tr>
		<td>{$LNG.tech.$tradeResourceID}</td>
		<td colspan="2"><span id="ress">0</span></td>
		<td>1</td>
	</tr>
	{foreach $tradeResources as $tradeResource}
	<tr>
		<td><label for="resource{$tradeResource}">{$LNG.tech[$tradeResource]}</label></td>
		<td><input name="trade[{$tradeResource}]" id="resource{$tradeResource}" class="trade_input" type="text" value="0" size="30" data-resource="{$tradeResource}"></td>
		<td><span id="resource{$tradeResource}Shortly"></span></td>
		<td>{$charge[$tradeResource]}</td>
	</tr>
	{/foreach}
	<tr>
		<td colspan="4"><input type="submit" value="{$LNG.tr_exchange}"></td>
	</tr>
	</table>
</form>
		
	</div>
	<!-- Box Content: End -->
	
</div>



{/block}
{block name="script" append}
<script type="text/javascript">
var charge = {$charge|json};
</script>
{/block}