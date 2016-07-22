{block name="title" prepend}{$LNG.lm_technology}{/block}
{block name="content"}


<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="titletech">Ressource Collector</a></h2> 
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding">
		
						<table>
	<tr>
		<td  style="text-align:left">
		<b><font color=blue>The Harvest System will get all the resources from the selected planets to the planet where you find yourself on.</font><br><br>
		</font><font color="red"><blink>IMPORTANT</blink></font><br><br><big>
		Before you harvest from planets be sure to visit <font color=blue>Empire view</font> <br>
		And do the same after Harvest is completed.<br><br></b></big>

		<b>Possible problem fixes:<br>
		1. To avoid losing resource from planets when using harvest you have to click on <font color=blue>Empire view</font> page before harvest.<br>
		2. If mines after harvest aren't producing resource click on <font color=blue>Empire view</font> page after using harvest.<br>
		3. If you have negative energy for mines on planets after harvest you have to enter resource screen on that planets.</b><br><br>
</table>
<table>
	<tr>
			<form action="game.php?page=harvest&act=take" method="POST" id="harv" name="harv">
			<tr>
				<td colspan ="3" style="text-align:left">
				{if $PlanetsList}
					<fieldset>
						<font color=gold size=2><legend>Planets<input type="checkbox" id="check_p" onClick="check_planets();"></legend></font>
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
						<font color=gold size=2><legend>Moons<input type="checkbox" id="check_m" onClick="check_moons();"></legend></font>
						<font color=skyblue>{foreach $MoonsList as $ID => $Moons}
							<input type=checkbox name=check_moons[] value={$ID}>{$Moons}
						{/foreach}</font>
					</fieldset>
				{/if}
				</td>
			</tr>
			<tr>
				<td colspan="3" style="test-align:left">
				<input type="submit" value="Harvest">
</form>
		</td>
	</tr>
</table>

					</div>

		
	 </div>
	<!-- Box Content: End -->
	
</div>

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
{/block}
