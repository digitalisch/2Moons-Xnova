{block name="title" prepend}harvest{/block}
{block name="content"}
<table style="width:650px">
<tr>
	<th colspan="3" class="center" style="white-space:nowrap;"><font color="skyblue" size=3>{$LNG.harvest}</font></th>
</tr>
</table>
<table style="width:650px">
	<tr>
			<form action="game.php?page=harvest&act=take" method="POST" id="harv" name="harv">
			<tr>
				<td colspan ="3" style="text-align:left">
				{if $PlanetsList}
					<fieldset>
						<font color=gold size=2><legend>{$LNG.h_planets}<input type="checkbox" id="check_p" onClick="check_planets();"></legend></font>
						<font color=skyblue>{foreach $PlanetsList as $ID => $Planets}
							<input type=checkbox name=check_planet[] value={$ID}>{$Planets}
						{/foreach}</font>
					</fieldset>
				{/if}
				</td>
			</tr>
			<tr>
				<td colspan ="3" style="text-align:left">
				{if $MoonsList}
					<fieldset>
						<font color=gold size=2><legend>{$LNG.h_moon}<input type="checkbox" id="check_m" onClick="check_moons();"></legend></font>
						<font color=skyblue>{foreach $MoonsList as $ID => $Moons}
							<input type=checkbox name=check_moons[] value={$ID}>{$Moons}
						{/foreach}</font>
					</fieldset>
				{/if}
				</td>
			</tr>
			<tr>
				<td colspan="3" style="test-align:left">
				<input type="submit" value="{$LNG.h_harvest}">
				</td>
			</tr>
			<tr>
				<td colspan="3" style="test-align:left"><b>
				<br><font color=lime><em>{$LNG.h_desc1}</em></font>
				<br><font color=lime><em>{$LNG.h_desc2}</em></font>
				<br>
				<br><font color=red size=2>{$LNG.h_desc3}</font>
				<br><li><font color=orange><em>{$LNG.h_desc4}</em></font></li>
				<br><li><font color=orange><em>{$LNG.h_desc5}</em></font></li>
				<br><li><font color=orange><em>Transfer costs you</font><font color=lime> {$transcoasts}</font><font color=orange> Dark Matter!</em></font></li>
				</td></b>
			</tr>
			</form>
		</td>
	</tr>
<th colspan="2" style="text-align:center">
</table>
{/block}
{block name="script" append}
<script type="text/javascript">
function check_planets()
{
	var chkAll = document.getElementById('check_p');
	var checks = document.getElementsByName('check_planet[]');

	if(chkAll.checked == true){
		for (i = 0; i < checks.length; i++)
			checks[i].checked = true ;
	}else{
		for (i = 0; i < checks.length; i++)
			checks[i].checked = false ;
	}
}

function check_moons()
{
	var chkAll = document.getElementById('check_m');
	var checks = document.getElementsByName('check_moons[]');

	if(chkAll.checked == true){
		for (i = 0; i < checks.length; i++)
			checks[i].checked = true ;
	}else{
		for (i = 0; i < checks.length; i++)
			checks[i].checked = false ;
	}
}
</script>
{/block}