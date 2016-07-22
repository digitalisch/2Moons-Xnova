{block name="title" prepend}Res{/block}
{block name="content"}
<table style="width:650px">
	<tbody><tr>
		<th colspan="2">
			Resource Pack
		</th>
	</tr><tr>
				<td><img src="styles/theme/gow/img/mercado.png" width="650px" height="298px"></td></tr>
	
		<td style="text-align:left;">
			Hello Emperor <font color="lime"><b>{$USERNAME}</b></font>! Today is your lucky day! I introduce myself, I am far orgini Graferex a merchant in exchange for Dark Matter I can offer you huge amounts of resources, want to buy something? <br><br>For <b><font color=red>10.000</font></b> units of dark matter you can buy:<br>
			<br>
			<center><li>Metal:   <font color=red>50.000.000</font></li>
			<li>Crystal: <font color=red>35.000.000</font></li>
			<li>Deuterium:  <font color=red>20.000.000</font></li>
			<ul>
			</ul></center>

		</td>
	</tr>
	<tr>
		<td colspan="2">
						<form action="game.php?page=res&modo=ricevi" method="POST">
				<input type="submit" class="buttona" name="risorse" value="Buy Resources">
			</form>
					</td>
	</tr>
</tbody><th colspan="1" style="text-align:center"></table>{/block}