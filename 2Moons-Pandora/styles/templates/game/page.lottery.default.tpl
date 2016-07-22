{block name="title" prepend}{$LNG.lm_Lottery}{/block}
{block name="content"}
<br>
<table>
<tr>
   <td class="c" colspan="3">{$LNG.lm_Lottery}</td>
</tr>
<tr>
   <td width="400px">
	One ticket price <p>
{$metal_p} {$LNG.tech['901']}<br>
{$crystal_p} {$LNG.tech['902']}<br>
{$deuterium_p} {$LNG.tech['903']}<p>

	Prize : 
			<br>
			<font color="lime">{$LNG.tpl_msg1} {$dm_win} {$LNG.tpl_msg2}<p></font>
			<font color="lime">{$LNG.tpl_msg3} {$minimum_users}</font><br>
			<font color="lime">{$LNG.tpl_msg4} {$minimum_users} {$LNG.tpl_msg5}</font>
	</td>
   <td class="c">
   {$LNG.tpl_msg6}<br>
   <form method="POST">
   <select size="1" name="tickets">
   <option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option value="4">4</option>
   <option value="5">5</option>
   <option value="6">6</option>
   <option value="7">7</option>
   <option value="8">8</option>
   <option value="9">9</option>
   <option value="10">10</option>
   </select>
   <input type="submit" value="Buy" name="Buy">
</form>
	</td>
		<td>
			Details: <br>{$LNG.tpl_msg7} {$max_tickets_per_player} {$LNG.tpl_msg8}
			<br>{$LNG.tpl_msg9} <font color="red"><span class="countdown2" secs="{$secs}"></span></font>
			
		</td>
	</tr>
	<tr>
		<td colspan="3">
			{$user_lists}
		</td>
	</tr>
	<tr>
		<td colspan="3">
			{$LNG.tpl_msg10} <br>
			{$winners}
		</td>
	</tr>
    </table>
    <div style="display:none">
</div>
{/block}