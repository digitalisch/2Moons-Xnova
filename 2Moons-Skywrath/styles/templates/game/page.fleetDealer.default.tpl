{block name="title" prepend}{$LNG.lm_fleettrader}{/block}
{block name="content"}

<section id="playground">
<div class="full-width">
<div class="box">
<div class="inner"> 
<div class="titlebar">{$LNG.lm_fleettrader}</div>
<div class="contents">

<form action="game.php?page=fleetDealer" method="post">
	<input type="hidden" name="mode" value="send">
	<table style="width:100%;">
        <tr>
			<th>{$LNG.ft_head}</th>
		</tr>
        <tr>
			<td>
				<div class="transparent" style="text-align:left;float:left;"><img id="img" alt="" data-src="{$dpath}gebaeude/"></div>
				<div style="clear:right;margin-top:20px;margin-left:125px;">
					<h2 id="traderHead"></h2>
										<select name="shipID" id="shipID" onchange="updateVars()">
						{foreach $shipIDs as $shipID}
						<option value="{$shipID}">{$LNG.tech.$shipID}</option>
						{/foreach}
					</select>
					<p>{$LNG.ft_count}: <input type="text" id="count" name="count" class="button" onkeyup="Total();"><button onclick="MaxShips();return false;">{$LNG.ft_max}</button></p>
					<p>{$LNG.tech.901}: <span id="metal" style="font-weight:800;"></span> &bull; {$LNG.tech.902}: <span id="crystal" style="font-weight:800;"></span> &bull; {$LNG.tech.903}: <span id="deuterium" style="font-weight:800;"></span> &bull; {$LNG.tech.921}: <span id="darkmatter" style="font-weight:800;"></span></p>
					<p>{$LNG.ft_total}: {$LNG.tech.901}: <span id="total_metal" style="font-weight:800;"></span> &bull; {$LNG.tech.902}: <span id="total_crystal" style="font-weight:800;"></span> &bull; {$LNG.tech.903} <span id="total_deuterium" style="font-weight:800;"></span> &bull; {$LNG.tech.921}: <span id="total_darkmatter" style="font-weight:800;"></span></ü>
					<p><input type="submit" value="{$LNG.ft_absenden}"></p>
					<p>{$LNG.ft_charge}: {$Charge}%</p>
				</div>
			</td>
		</tr>
	</table>
</form>

</div>
</div>
</div>
</div>
</section>
{/block}
{block name="script" append}
<script type="text/javascript">
var CostInfo = {$CostInfos|json};
var Charge = {$Charge};
</script>
{/block}