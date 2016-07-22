{block name="title" prepend}PTrader{/block}
{block name="content"}
	<table>
		<tr>
			<th colspan="3" class="center" style="white-space:nowrap;"><font color="gold" size=3><b>Premium Trader</b></font></th>
		</tr>
		<tr>
		<td>{$LNG.p_desc3}</td>
		</tr>
		<tr>
		<td>{$LNG.p_desc1}{$transcoasts}{$LNG.p_desc2}</td>
		</tr>
		</table>
	<table>
		<tr>
			<td>
				<form method="post" action="">
					<input id="totalPoints" name="totalPoints" value="{$total_points11}" type="hidden">
					<input id="oldMetal" name="oldMetal" value="{$planet_metal11}" type="hidden">
					<input id="oldCrystal" name="oldCrystal" value="{$planet_crystal11}" type="hidden">
					<input id="oldDeuterium" name="oldDeuterium" value="{$planet_deuterium11}" type="hidden">
					<table>
						<tbody>
							<tr>
								<td class="c"><font color=orange>{$LNG.tech.{901}}</td>
								<th>{$planet_metal} * 1</th>
								<th>{$planet_metal_t}</th>
							</tr>
							<tr>
								<td class="c"><font color=orange>{$LNG.tech.{902}}</td>
								<th>{$planet_crystal} * 2</th>
								<th>{$planet_crystal_t}</th>
							</tr>
							<tr>
								<td class="c"><font color=orange>{$LNG.tech.{903}}</td>
								<th>{$planet_deuterium} * 4</th>
								<th>{$planet_deuterium_t}</th>
							</tr>
							<tr>
								<td class="c"><font color=orange>Total</td>
								<th>&nbsp;</th>
								<th>{$total_points}</th>
							</tr>
						</tbody>
					</table>
					<table>
						<tbody>
							<tr>
								<td class="c">&nbsp;</td>
								<td class="c"><font color=orange>{$LNG.tech.{901}} (1)</td>
								<td class="c"><font color=orange>{$LNG.tech.{902}} (2)</td>
								<td class="c"><font color=orange>{$LNG.tech.{903}} (4)</td>
							</tr>
							<tr>
								<th><font color=orange>Before</th>
								<th>{$planet_metal}</th>
								<th>{$planet_crystal}</th>
								<th>{$planet_deuterium}</th>
							</tr>
							<tr>
								<th><font color=orange>After</th>
								<th><input value="0" id="newMetal" name="newMetal" onkeyup="page_merchant_updateRes();" type="text" style="border: 2px solid rgba(144, 144, 144, 0.6);"></th>
								<th><input value="0" id="newCrystal" name="newCrystal" onkeyup="page_merchant_updateRes();" type="text" style="border: 2px solid rgba(144, 144, 144, 0.6);"></th>
								<th><input value="0" id="newDeuterium" name="newDeuterium" onkeyup="page_merchant_updateRes();" type="text" style="border: 2px solid rgba(144, 144, 144, 0.6);"></th>
							</tr>
							<tr>
								<th>&nbsp;</th>
								<th><a onclick="page_merchant_setMax(1);"><font color=orange>Max</a></th>
								<th><a onclick="page_merchant_setMax(2);"><font color=orange>Max</a></th>
								<th><a onclick="page_merchant_setMax(4);"><font color=orange>Max</a></th>
							</tr>
							<tr>
								<th>&nbsp;</th>
								<th><a onclick="page_merchant_setRest(1);"><font color=orange>Rest</a></th>
								<th><a onclick="page_merchant_setRest(2);"><font color=orange>Rest</a></th>
								<th><a onclick="page_merchant_setRest(4);"><font color=orange>Rest</a></th>
							</tr>
							<tr>
								<th>&nbsp;</th>
								<th><a onclick="page_merchant_setSpread(1,1,1);"><font color=orange>{$LNG.p_s} 1:1:1</a></th>
								<th><a onclick="page_merchant_setSpread(4,2,1);"><font color=orange>{$LNG.p_s} 4:2:1</a></th>
								<th><a onclick="page_merchant_setSpread(1,1,0);"><font color=orange>{$LNG.p_s} 1:1:0</a></th>
							</tr>
							<tr>
								<th>&nbsp;</th>
								<th colspan="3"><a onclick="page_merchant_setCurrent();"><font color=orange>Current</a></th>
							</tr>
							<tr>
								<th>&nbsp;</th>
								<th colspan="3"><input id="ratio1" value="1" size="3" onchange="page_merchant_customRatio();" type="text" style="border: 2px solid rgba(144, 144, 144, 0.6);"> : <input id="ratio2" value="1" size="3" onchange="page_merchant_customRatio();" type="text" style="border: 2px solid rgba(144, 144, 144, 0.6);"> : <input id="ratio3" value="1" size="3" onchange="page_merchant_customRatio();" type="text" style="border: 2px solid rgba(144, 144, 144, 0.6);"></th>
							</tr>
							<tr>
								<td class="c" colspan="4"><font color=orange>{$LNG.p_p}</td>
							</tr>
							<tr>
								<td class="c" colspan="4" id="resLeft">{$total_points}</td>
							</tr>
							<tr>
								<th colspan="4"><input value="Trade" id="okBtn" disabled="disabled" type="submit" style="border: 2px solid rgba(144, 144, 144, 0.6);"></th>
							</tr><br>
							<table><br>
								<tr>
									<td class="c" colspan="4"><font color=red size=2><b>{$LNG.tech.{200}}</b></td>
								</tr>
								<tr>
									<th width="250" style="cursor: pointer;" onclick="page_merchant_setSpread(2000,2000,0);"><font color=orange>{$LNG.tech.{202}}</th>
									<th width="250" style="cursor: pointer;" onclick="page_merchant_setSpread(6000,6000,0);"><font color=orange>{$LNG.tech.{203}}</th>
									<th width="250" style="cursor: pointer;" onclick="page_merchant_setSpread(3000,1000,0);"><font color=orange>{$LNG.tech.{204}}</th>
									<th width="250" style="cursor: pointer;" onclick="page_merchant_setSpread(6000,4000,0);"><font color=orange>{$LNG.tech.{205}}</th>
								</tr>
								<tr>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(20000,7000,2000);"><font color=orange>{$LNG.tech.{206}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(45000,15000,0);"><font color=orange>{$LNG.tech.{207}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(10000,20000,10000);"><font color=orange>{$LNG.tech.{208}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(10000,6000,2000);"><font color=orange>{$LNG.tech.{209}}</th>
								</tr>
								<tr>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(0,1000,0);"><font color=orange>{$LNG.tech.{210}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(50000,25000,15000);"><font color=orange>{$LNG.tech.{211}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(0,2000,500);"><font color=orange>Solar {$LNG.tech.{212}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(60000,50000,15000);"><font color=orange>{$LNG.tech.{213}}</th>
								</tr>
								<tr>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(5000000,4000000,1000000);"><font color=orange>{$LNG.tech.{214}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(30000,40000,15000);"><font color=orange>{$LNG.tech.{215}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(8000000,2000000,1500000);"><font color=orange>{$LNG.tech.{216}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(35000,20000,1500);"><font color=orange>{$LNG.tech.{217}}</th>
								</tr>
								<tr>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(275000000,130000000,60000000);"><font color=orange>{$LNG.tech.{218}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(1000000,600000,200000);"><font color=orange>{$LNG.tech.{219}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(6000000,7000000,3000000);"><font color=orange>{$LNG.tech.{220}}</th>
								</tr>
							</table><br>
							<table>
								<tr>
									<td class="c" colspan="4"><font color=red size=2><b>{$LNG.tech.{400}}</b></td>
								</tr>
								<tr>
									<th width="250" style="cursor: pointer;" onclick="page_merchant_setSpread(2000,0,0);"><font color=orange>{$LNG.tech.{401}}</th>
									<th width="250" style="cursor: pointer;" onclick="page_merchant_setSpread(1500,500,0);"><font color=orange>{$LNG.tech.{402}}</th>
									<th width="250" style="cursor: pointer;" onclick="page_merchant_setSpread(6000,2000,0);"><font color=orange>{$LNG.tech.{403}}</th>
									<th width="250" style="cursor: pointer;" onclick="page_merchant_setSpread(20000,15000,2000);"><font color=orange>{$LNG.tech.{404}}</th>
								</tr>
								<tr>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(2000,6000,0);"><font color=orange>{$LNG.tech.{405}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(50000,50000,30000);"><font color=orange>{$LNG.tech.{406}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(15000000,15000000,0);"><font color=orange>{$LNG.tech.{410}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(10000,10000,0);"><font color=orange>{$LNG.tech.{407}}</th>
								</tr>
								<tr>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(50000,50000,0);"><font color=orange>{$LNG.tech.{408}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(8000,2000,0);"><font color=orange>{$LNG.tech.{502}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(12500,2500,10000);"><font color=orange>{$LNG.tech.{503}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(5000000000,2000000000,500000000);"><font color=orange>{$LNG.tech.{411}}</th>
								</tr>
							</table><br>
							<table>
								<tr>
									<td class="c" colspan="4"><font color=red size=2><b>{$LNG.tech.{0}}</b></td>
								</tr>
								<tr>
									<th width="250" style="cursor: pointer;" onclick="page_merchant_setSpread(30,7,0);"><font color=orange>{$LNG.tech.{1}}</th>
									<th width="250" style="cursor: pointer;" onclick="page_merchant_setSpread(20,10,0);"><font color=orange>{$LNG.tech.{2}}</th>
									<th width="250" style="cursor: pointer;" onclick="page_merchant_setSpread(110,30,0);"><font color=orange>{$LNG.tech.{3}}</th>
									<th width="250" style="cursor: pointer;" onclick="page_merchant_setSpread(100000000,50000000,25000000);"><font color=orange>{$LNG.tech.{6}}</th>
								</tr>
								<tr>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(40,15,0);"><font color=orange>{$LNG.tech.{4}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(900,360,180);"><font color=orange>{$LNG.tech.{12}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(400,120,200);"><font color=orange>{$LNG.tech.{14}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(1000000,500000,100000);"><font color=orange>{$LNG.tech.{15}}</th>
								</tr>
								<tr>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(400,200,100);"><font color=orange>{$LNG.tech.{21}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(2000,0,0);"><font color=orange>{$LNG.tech.{22}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(2000,1000,0);"><font color=orange>{$LNG.tech.{23}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(2000,2000,0);"><font color=orange>{$LNG.tech.{24}}</th>
								</tr>
								<tr>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(200,400,200);"><font color=orange>{$LNG.tech.{31}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(0,50000,100000);"><font color=orange>{$LNG.tech.{33}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(20000,40000,0);"><font color=orange>{$LNG.tech.{34}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(20000,20000,1000);"><font color=orange>{$LNG.tech.{33}}</th>
								</tr>
								<tr>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(20000,40000,20000);"><font color=orange>{$LNG.tech.{41}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(20000,40000,20000);"><font color=orange>{$LNG.tech.{42}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(2000000,4000000,2000000);"><font color=orange>{$LNG.tech.{43}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(7700,5790,3300);"><font color=orange>{$LNG.tech.{5}}</th>
								</tr>
							</table><br>
							<table>
								<tr>
									<td class="c" colspan="4"><font color=red size=2><b>{$LNG.tech.{100}}</b></td>
								</tr>
								<tr>
									<th width="250" style="cursor: pointer;" onclick="page_merchant_setSpread(200,1000,200);"><font color=orange>{$LNG.tech.{106}}</th>
									<th width="250" style="cursor: pointer;" onclick="page_merchant_setSpread(0,400,600);"><font color=orange>{$LNG.tech.{108}}</th>
									<th width="250" style="cursor: pointer;" onclick="page_merchant_setSpread(800,200,0);"><font color=orange>{$LNG.tech.{109}}</th>
									<th width="250" style="cursor: pointer;" onclick="page_merchant_setSpread(200,600,0);"><font color=orange>{$LNG.tech.{110}}</th>
								</tr>
								<tr>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(1000,0,0);"><font color=orange>{$LNG.tech.{111}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(0,800,400);"><font color=orange>{$LNG.tech.{113}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(0,4000,2000);"><font color=orange>{$LNG.tech.{114}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(400,0,600);"><font color=orange>{$LNG.tech.{115}}</th>
								</tr>
								<tr>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(2000,4000,6000);"><font color=orange>{$LNG.tech.{117}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(10000,20000,6000);"><font color=orange>{$LNG.tech.{118}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(200,100,0);"><font color=orange>{$LNG.tech.{120}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(1000,300,100);"><font color=orange>{$LNG.tech.{121}}</th>
								</tr>
								<tr>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(2000,4000,1000);"><font color=orange>{$LNG.tech.{122}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(240000,400000,160000);"><font color=orange>{$LNG.tech.{123}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(4000,8000,4000);"><font color=orange>{$LNG.tech.{124}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(750,500,250);"><font color=orange>{$LNG.tech.{131}}</th>
								</tr>
								<tr>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(1000,750,500);"><font color=orange>{$LNG.tech.{132}}</th>
									<th style="cursor: pointer;" onclick="page_merchant_setSpread(1250,1000,750);"><font color=orange>{$LNG.tech.{133}}</th>
								</tr>
							</table>
						</tbody>
					</table>
				</form>
			</td>
		</tr>
	</table>
{/block}