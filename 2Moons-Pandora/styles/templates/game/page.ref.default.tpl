{block name="title" prepend}Referfal{/block}
{block name="content"}
	<table style="width: 100%;">
		<th colspan="4">
			<font size="2">
				<center>
					{$LNG.ov_reflink}
					<br>
					<br>
				</center>
			</font>
		</th>
			<tr>
				{if $id >0}
					<td colspan="4" style="border:1px solid silver;">
						<font color="orange">
							Du wurdest geworben von 
						</font>
						<a href="#" onclick="return Dialog.Playercard({$id}, '{$name}');"style="color:lime">
							{$name}.
						</a>
					</td>
				{/if}
			</tr>
			<tr>
				<td colspan="4" style="border:1px solid silver;">
					Du hast <font color="lime">{$refs}</font> von <font color="red">{$refmax}</font> geworben.
				</td>
			</tr>
			<tr>
				<td colspan="4" style="border:1px solid silver;">
					<input type="text" value="{$path}index.php?ref={$userid}" readonly="readonly" style="width:450px;">
				</td>
			</tr>
			{foreach $RefLinks as $RefID => $RefLink}
				<tr>
					<td colspan="2" style="border:1px solid silver;"><b><u> {$LNG.st_player} </u></b></td>
					<td colspan="2" style="border:1px solid silver;"><b><u> {$LNG.st_points} </u></b></td>
				</tr>
				<tr>
					<td colspan="2" style="border:1px solid silver;">
						<a href="#" onclick="return Dialog.Playercard({$RefID}, '{$RefLink.username}');">
							{$RefLink.username}
						</a>
					</td>
					<td colspan="2" style="border:1px solid silver;">
						{{$RefLink.points|number}} 
						{if $RefLink.ref == 1}
							/ 50.000
						{elseif $RefLink.ref == 2}
							/ 250.000
						{elseif $RefLink.ref == 3}
							/ 500.000
						{elseif $RefLink.ref == 4}
							/ 1.000.000
						{elseif $RefLink.ref == 5}
							/ 2.000.000
						{elseif $RefLink.ref == 6}
							/ 4.500.000
						{elseif $RefLink.ref == 7}
							/ 9.000.000
						{else $RefLink.ref == 0}
						{/if}
					</td>
				</tr>
			{foreachelse}
				<tr>
					<td colspan="4" style="border:1px solid silver;">
						{$LNG.ov_noreflink}
					</td>
				</tr>
			{/foreach}
		</table>
{/block}