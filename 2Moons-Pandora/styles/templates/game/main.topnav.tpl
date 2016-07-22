
<div id="page">
	<div id="header">
		<div id="g_top_nav_menu">
			<ul id="g_top_nav_ul">
				<li>
					<a href="game.php?page=findDebris">
						Find Debris
					</a>
				</li>
				<li>
					<a href="game.php?page=lottery">
						{$LNG.lm_Lottery}
					</a>
				</li>
				<li>
					<a href="game.php?page=Tutorial">
						{$LNG.tut_tut}
					</a>
				</li>
				<li>
					<a href="game.php?page=Achievement">
						{$LNG.lm_achievements}
					</a>
				</li>
				<li>
					<a href="game.php?page=BM">
						Black Market
					</a>
				</li>
				<li>
					<a href="game.php?page=EditPlanet">
						{$LNG.planet}
					</a>
				</li>
				<li>
					<a href="game.php?page=Harvest">
						Harvest
					</a>
				</li>
				<li>
					<a href="game.php?page=DMEinloes">
						{$LNG.lm_gutscheine_einloes}
					</a>
				</li>
				<li>
					<a href="game.php?page=Premium">
						Premium Trader
					</a>
				</li>
				<li>
					<a href="game.php?page=Bank">
						  Tresor
					</a>
				</li>
				<li>
					<a href="game.php?page=Vote" style="color:red;">
						  {$LNG.lm_vote}
					</a>
				</li>
			</ul>
		</div>
		<table id="headerTable">
			<tbody>
				<tr>
					<td id="resourceWrapper">
						<table id="resourceTable">
							<tbody>
								<tr>
									{foreach $resourceTable as $resourceID => $resouceData}
									<td><img src="{$dpath}images/{$resouceData.name}.gif" alt=""></td>
									{/foreach}
									<td>
										{if $racep == 1}
											<img src="styles/resource/images/login/races/goauld/1.png" style="widht:50px;height:50px;" alt="">
										{elseif $racep == 2}
											<img src="styles/resource/images/login/races/replicator/1.png" style="widht:50px;height:50px;" alt="">
										{else $racep == 3}
											<img src="styles/resource/images/login/races/humans/1.png" style="widht:50px;height:50px;" alt="">
										{/if}
									</td>
								</tr>
								<tr>
									{foreach $resourceTable as $resourceID => $resouceData}
									<td class="res_name">{$LNG.tech.$resourceID}</td>
									{/foreach}
									<td>
										{if $racep == 1}
											<font color="orange">{$racen}</font>
										{elseif $racep == 2}
											<font color="lime">{$racen}</font>
										{else $racep == 3}
											<font color="blue">{$racen}</font>
										{/if}
									</td>
								</tr>
								<tr>
									{foreach $resourceTable as $resourceID => $resouceData}
									{if !isset($resouceData.current)}
									{$resouceData.current = $resouceData.max + $resouceData.used}
									<td class="res_current"><span{if $resouceData.current < 0} style="color:red"{/if}>{$resouceData.current|number}&nbsp;/&nbsp;{$resouceData.max|number}</span></td>
									{else}
									<td class="res_current" id="current_{$resouceData.name}" data-real="{$resouceData.current}">{$resouceData.current|number}</td>
									{/if}
									{/foreach}
									<td><font color="skyblue">{$username}</font></td>
								</tr>
								<tr>
									{foreach $resourceTable as $resourceID => $resouceData}
									{if !isset($resouceData.current) || !isset($resouceData.max)}
									<td>&nbsp;</td>
									{else}
									<td class="res_max" id="max_{$resouceData.name}" data-real="{$resouceData.current}">{$resouceData.max|number}</td>
									{/if}
									{/foreach}
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		{if !$vmode}
		<script type="text/javascript">
		var viewShortlyNumber	= {$shortlyNumber|json}
		var vacation			= {$vmode};
		{foreach $resourceTable as $resourceID => $resouceData}
		{if isset($resouceData.production)}
		resourceTicker({
			available: {$resouceData.current|json},
			limit: [0, {$resouceData.max|json}],
			production: {$resouceData.production|json},
			valueElem: "current_{$resouceData.name}"
		}, true);
		{/if}
		{/foreach}
		</script>
		{/if}
	</div>
	{if $closed}
	<div class="infobox"><br>{$LNG.ov_closed}</div>
	{elseif $delete}
	<div class="infobox"><br>{$delete}</div>
	{elseif $vacation}
	<div class="infobox"><br>{$LNG.tn_vacation_mode} {$vacation}</div>
	{/if}