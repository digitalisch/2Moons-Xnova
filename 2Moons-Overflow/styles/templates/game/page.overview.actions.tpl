{block name="title" prepend}{$LNG.lm_overview}{/block}
{block name="content"}
<table>
	<tr><th>{$LNG.ov_planet_rename}</th></tr>
		<tr><td>{$LNG.ov_rename_label}<br><center><input class="left" type="text" name="name" id="name" size="25" maxlength="20" autocomplete="off"><br><input class="button" type="button" onclick="checkrename()" value="{$LNG.ov_planet_rename}"></center></td></tr>

	<tr><td>&nbsp</td></tr>
	
	<tr><th>{$LNG.ov_delete_planet}</th></tr><tr><td><h3 style="margin:0">{$LNG.ov_security_request}</h3>{$ov_security_confirm}<br>
		<center><input type="password" name="password" id="password" size="25" maxlength="20" autocomplete="off"><br>
		<input class="button" type="button" onclick="checkcancel()" value="{$LNG.ov_delete_planet}"></center></td></tr>
</table>
{/block}