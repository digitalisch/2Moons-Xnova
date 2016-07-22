{$count = count($costTable.usedResource)}
<table style="width:100%;">    
<tbody>    
	<tr>        
		<td colspan="2">            
		<table>                
		<tr>                    
			<th>{$LNG.in_level}</th>                
			{foreach $costTable.usedResource as $resourceID}                    
			<th>{$LNG.tech.$resourceID}</th>                
			{/foreach}                
		</tr>            
			{foreach $costTable.costs as $elementLevel => $costData}                
			<tr>                    
				<td><span{if $CurrentLevel == $elementLevel} style="color:#ff0000"{/if}>{$elementLevel}</span></td>                    
				{foreach $costData as $resourceID => $cost}                        
					<td><span style="color:{if $cost > 0}lime{elseif $cost < 0}red{else}white{/if}">{$cost|number}</span></td>                    
				{/foreach}                
			</tr>            
			{/foreach}            
		</table>        
		</td>    
		</tr>    
		</tbody>
		</table>