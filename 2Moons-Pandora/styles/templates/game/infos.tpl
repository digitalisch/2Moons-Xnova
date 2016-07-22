{block name="title" prepend}Infos{/block}
{block name="content"}
	<table>
		<tr>
			<th colspan="3" class="center" style="white-space:nowrap;"><font color="purple" size=3><b>Server-Infos</b></font></th>
		</tr>
		<tr>
			<td colspan="3">
			
			<br><center><a style="color:yellow;"><font size=2>Game Speed: {$gspeed} </font></a> </center>
			<br><center><a style="color:yellow;"><font size=2>Fleet Speed: {$fspeed}</font></a></center>
			<br><center><a style="color:yellow;"><font size=2>Ressourcen Speed: {$rspeed}</font></a> </center>
			<br><center><a style="color:yellow;"><font size=2>Expedition Speed: {$espeed}</font></a> </center>
			<br><center><a style="color:yellow;"><font size=2>Flotte ins TF: {$ftf}%</font></a></center>
			<br><center><a style="color:yellow;"><font size=2>Verteidigung ins TF: {$dtf}%</font></a></center>
			<br><center><a style="color:yellow;"><font size=2>Planeten pro Spieler (Ohne Forschung): {$planetm}</font></a> </center>
			<br><center><a style="color:yellow;"><font size=2>Planeten pro Spieler (Mit Forschung): {$planett}</font></a></center>
			<br><center><a style="color:yellow;"><font size=2>Referalbonus: {$ref}</font></a></center>
			
			<center><a style="color:red;">Die genaue Erkl&auml;rung, k&ouml;nnt ihr in den FAQ nachlesen
			
			<br><center><a style="color:yellow;"><font size=2>Noobschutz: {$noobsch}</font></a></center>
			
			<center><a style="color:red;">Ihr k&ouml;nnt erst angegriffen werden, wenn ihr 15000 Punkte habt</a></center>
			
			<br><center><a style="color:yellow;"><font size=2>Noobschutzfaktor: {$noobm}</font></a></center>
			
			<center><a style="color:red;">Als Beispiel: Ihr habt 9k Punkte, dann k&ouml;nnt ihr nur jemanden ab 3000 bzw bis 27000 Punkten angreifen</a></center>
			
		</tr>
	</table>
{/block}