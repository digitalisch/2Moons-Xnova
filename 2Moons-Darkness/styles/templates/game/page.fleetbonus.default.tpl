{block name="title" prepend}Fleeter package{/block}
{block name="content"}
<div id="content">
<table>
<tr><td>Check this mod in Plugin Store here - <b><a href="https://2moons-host.com/plugins/plugin.id.9.php">Plugin Store Link</a></b></td></tr>

	<tr>
		<th colspan="2">
			Fleet Package
		</th>
	</tr><tr>
	
		<td  style="text-align:left;">
			With this pack you can purchase some fleet to help in your journey<br> 
		<li> 200.000 Lune Noir </li>
                <li> 200.000 Star Crasher </li>
                <li> 100.000 Death Star </li>
		
		</ul>

<b><font color="red">{$LNG.cost} {$cost} {$LNG.dm}</font></b>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			{if $status === true}
			<form method="POST">
				<input type="submit" name="Buy" value="Buy">
			</form>
			{else}
				<font color="lime"><b>{$LNG.nextbonus}</font></b><br>
				<big><b><font color="yellow"><span class="countdown2" secs="{$status}"></span></font></b></big>
			{/if}
		</td>
	</tr>
</table>
</div>
{/block}