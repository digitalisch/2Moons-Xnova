{include file="overall_header.tpl"}
<form action="admin.php?page=allo" method="post" id="form">
<input type="hidden" name="side" value="{$page}" id="side">
<table width="90%">   
	<tr>
		<th colspan="5">Allopass List</th>
	</tr>
	<tr>
		<td style="width:15%">Code</td>
		<td style="width:35%"><input type="text" id="code" name="code" value="{$code}" length="11"></td>
		
	</tr>
	<tr>
		<td style="width:15%"><label for="sender">User</label></td>
		<td style="width:35%"><input type="text" id="sender" name="sender" value="{$sender}" length="11"></td>
	</tr>
	<tr>
		<th colspan="5" class="center">
			<input type="submit" value="{$LNG.ml_type_submit}">
		</th>
	</tr>
</table>






<table width="90%">  	
	<tr>
		<th colspan="{if $Selected == 100}7{else}6{/if}">Allopass List</th>
	</tr>
	<tr style="height: 20px;">
		<td colspan="{if $Selected == 100}7{else}6{/if}">{$LNG.mg_page}: {if $page != 1}<a href="#" onclick="gotoPage({$page - 1});return false;">&laquo;</a> {/if}{for $site=1 to $maxPage}<a href="#" onclick="gotoPage({$site});return false;">{if $site == $page}<span style="color:orange"><b>[{$site}]</b></span>{else}[{$site}]{/if}</a>{if $site != $maxPage} {/if}{/for}{if $page != $maxPage} <a href="#" onclick="gotoPage({$page + 1});return false;">&raquo;</a>{/if}</td>
	</tr>
	<tr>
		<th style="width:4%">OrderID</th>
		<th style="width:4%">UserID</th>
		<th>Transaction ID</th>
		<th style="width:15%">{$LNG.ml_date}</th>
		<th>Code</th>
		<th>Amount Received DM</th>
	</tr>
	{foreach $messageList as $messageID => $messageRow}
	<tr data-messageID="{$messageID}">
		<td><a href="#" class="toggle">{$messageID}</a></td>
		<td><a href="#" class="toggle">{$messageRow.id}</a></td>
		<td><a href="#" class="toggle">{$messageRow.transac}</a></td>
		<td><a href="#" class="toggle">{$messageRow.date}</a></td>
		<td><a href="#" class="toggle">{$messageRow.code}</a></td>
		<td><a href="#" class="toggle">{$messageRow.dm}</a></td>
	</tr>
	<tr id="contentID{$messageID}" style="display:none;">
		<td colspan="{if $Selected == 100}7{else}6{/if}" style="padding:5px 8px;">                <table width="90%" >
                    <tbody><tr>
                        <th colspan="5">Order Received</th>
                    </tr>
                   
                   
                    <tr>
                        <td {if $messageRow.result == 1}style="background-color:#3ADF00;"{else}style="background-color:red;"{/if}><p> {if $messageRow.result == 1}Thank you. Your order has been received.{else} Sorry. We could not proceed to the payment: The code you used is not valid{/if}</p>

		<ul class="order_details">
			<li class="order">
				Order:				<strong>#{$messageID}</strong>
			</li>
			<li class="date">
				Date:				<strong>{$messageRow.date}</strong>
			</li>
			<li class="total">
				Total:				<strong><span class="amount">€{$messageRow.total}</span></strong>
			</li>
					</ul></td>
                      
                    </tr>
            
                    
                      
                    </tr>
        
                </tbody>
				
</table> 
<table width="90%">
                    <tbody><tr>
                        <th colspan="3">Order Details</th>
                    </tr>
                   

	
	
	<tbody>
		
					<tr class="order_table_item">
						<td class="product-name">Dark Matter Package<dl class="variation"></dl><small>{$messageRow.dm}</small> <strong class="product-quantity">× 1</strong></td><td class="product-total"><span class="amount">€{$messageRow.total} <sup>({$messageRow.payout})</sup></span></td></tr>	</tbody>
						
						

         </tr>
                    
                </tbody></table>
				

                <table width="90%">
                    <tbody><tr>
                        <th colspan="3">Customer Details</th>
                    </tr>
                   <tr class="order_table_item">
						<td class="product-name">Transaction ID</td><td class="product-total"><span class="amount">{$messageRow.transac}</span></td></tr>
 <tr class="order_table_item">
						<td class="product-name">Code </td><td class="product-total"><span class="amount">{$messageRow.code}</span></td>
						</tr>		
 <tr class="order_table_item">
<td class="product-name">Payment Method </td><td class="product-total"><span class="amount">{$messageRow.type}</span></td></tr>						</tbody>
						
						

         </tr>
                    
                </tbody></table></td>
	</tr>
	{/foreach}
</table>
</form>
<script src="scripts/admin/messageList.js"></script>
{include file="overall_footer.tpl"}