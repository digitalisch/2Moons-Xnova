<div id="leftmenu">
	<ul id="menu">
		<br>
		<center><a href="game.php?page=overview"style="color:white">{$LNG.lm_overview}</a></center>
		<center><a href="#" onclick="return Dialog.imperium();"style="color:white">{$LNG.lm_empire}</a></center>
		<center><a href="game.php?page=buildings"style="color:white">{$LNG.lm_buildings}</a></center>
		<center><a href="game.php?page=research"style="color:white">{$LNG.lm_research}</a></center>
		<center><a href="game.php?page=defense"style="color:white">{$LNG.lm_defenses}</a></center>
		<center><a href="game.php?page=resources"style="color:white">{$LNG.lm_resources}</em></a></center>
		<center><a href="game.php?page=shipyard"style="color:white">{$LNG.lm_shipshard}</a></center>
		<center><a href="game.php?page=fleetTable"style="color:white">{$LNG.lm_fleet}</a></center>
		<center><a href="game.php?page=techtree"style="color:white">{$LNG.lm_technology}</a></center>
		<center><a><br></a></center>
		<center><a href="game.php?page=galaxy"style="color:white">{$LNG.lm_galaxy}</em></a></center>
		<center><a href="game.php?page=officier"style="color:white">{$LNG.lm_officiers}</em></a></center>
		<center><a href="game.php?page=trader"style="color:white">{$LNG.lm_trader}</em></a></center>
		<center><a href="game.php?page=fleetDealer"style="color:white">{$LNG.lm_fleettrader}</em></a></center>
		<center><a href="game.php?page=battleSimulator"style="color:white">{$LNG.lm_battlesim}</a></center>
		{if $authlevel > 0}<center><a href="./admin.php" style="color:lime">{$LNG.lm_administration} ({$VERSION})</a></center>{/if}
		<center><a>{$scancheck}</a></center></ul>
	</ul>
</div>
	