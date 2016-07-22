{include file="overall_header.tpl"}
<table>
	<tr>
		<td colspan="15" width="500px">
			All Matches
		</td>
	</tr>
	<tr>
	<td>
			ID
		</td>
		<td>
			Home Team
		</td>
		<td>
			Visitor Team
		</td>
		<td>
			Home Ratio
		</td>
		<td>
			Draw Ratio
		</td>
		<td>
			Visitor Ratio
		</td>
		<td>
			Date
		</td>
      
		<td>
			New Bets Accepted
		</td>
		<td>
			Winner
		</td>
		<td>
			Action
		</td>
	</tr>
	{foreach from=$AllVouchers item=i key=k}
		<tr>
		<td>
			{$i.id}
			</td>
			<td>
			{$i.h_team}
			</td>
			<td>
			{$i.v_team}
			</td>
			<td>
			{$i.h_win}
			</td>
			<td>
			{$i.draw}
			</td>
			<td>
			{$i.v_win}
			</td>
			<td>
			{$i.date}
			</td>
            <td>
			<a href="admin.php?page=match&amp;idr={$i.id}&amp;betmodus={if $i.bet_close == 1}-1" style="color:red">No{else}1" style="color:lime">Yes{/if}</a>
			</td>
            <td>
			<a href="admin.php?page=match&amp;idr={$i.id}&amp;winner={if $i.winner == -1}1" style="color:Gray">No Winners{elseif $i.winner == 1 }3" style="color:Green">Home Team{elseif $i.winner == 3 }2" style="color:orange">Draw{elseif $i.winner == 2}-1" style="color:green">Visitor Team {/if}</a>
			</td>
                 
			<td>	
			<a href="?page=match&mode=delete&i={$i.id}">
				<img src="./styles/images/delete.png" widht="16px" height="16px" />
			</a>
			<a href="?page=match&mode=validate&i={$i.id}">
				<img src="./styles/images/valid.png" widht="16px" height="16px" />
			</a>
			</td>
		</tr>
	{foreachelse}
	<tr>
		<td colspan="15">
			There are no matches
		</td>
	</tr>
	{/foreach}
	</table>
	
	<table width="500px">
	<form method="POST">
	<tr>
		<td colspan="2" >
			Add Match
		</td>
	</tr>
	
	<tr>
		<td>
			Home Team
		</td>
		<td>
			<input type="text" name="hteam">
		</td>
	</tr>
	<tr>
		<td>
			Visitor Team
		</td>
		<td>
			<input type="text" name="vteam">
		</td>
	</tr>
	<tr>
		<td>
			Home Ratio
		</td>
		<td>
			<input type="text" name="hratio">
		</td>
	</tr>
	<tr>
		<td>
			Draw Ratio
		</td>
		<td>
			<input type="text" name="dratio">
		</td>
	</tr>
	<tr>
		<td>
			Visitors Ratio
		</td>
		<td>
			<input type="text" name="vratio">
		</td>
	</tr>
    
		<tr>
		<td>
			Date
		</td>
		<td>
			<input type="text" name="dd" size="2">/<input type="text" name="mt" size="2">/<input type="text" name="yr" size="4"> At <input type="text" name="hr" size="2">h<input type="text" name="min" size="2">
		</td>
	</tr>


	<tr>
		<td colspan="2">
		<input type="Submit" value="add" name="add">
		</td>
		
	</tr>
	
</table>
</form>
{include file="overall_footer.tpl"}