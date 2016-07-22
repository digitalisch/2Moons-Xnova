{block name="title" prepend}Premium Trader{/block}
{block name="content"}
	<table>
		<tr>
			<td>
	<form method="post" action="">
				<input id="totalPoints" name="totalPoints" value="{$total_points11}" type="hidden">
				<input id="oldMetal" name="oldMetal" value="{$planet_metal11}" type="hidden">
				<input id="oldCrystal" name="oldCrystal" value="{$planet_crystal11}" type="hidden">
				<input id="oldDeuterium" name="oldDeuterium" value="{$planet_deuterium11}" type="hidden">
				<table>
					<tbody><tr>
						<td class="c">Metal</td>
						<th>{$planet_metal} * 1</th>
						<th>{$planet_metal_t}</th>
					</tr>
					<tr>
						<td class="c">Crystal</td>
						<th>{$planet_crystal} * 2</th>
						<th>{$planet_crystal_t}</th>
					</tr>
					<tr>
						<td class="c">Deuterium</td>
						<th>{$planet_deuterium} * 4</th>
						<th>{$planet_deuterium_t}</th>
					</tr>
					<tr>
						<td class="c">Total</td>
						<th>&nbsp;</th>
						<th>{$total_points}</th>
					</tr>
                    
				</tbody></table>
				<br>
				<table>
					<tbody><tr>
						<td class="c">&nbsp;</td>
						<td class="c">Metal (1)</td>
						<td class="c">Crystal (2)</td>
						<td class="c">Deuterium (4)</td>
                                                
					</tr>
					<tr>
						<th>Before</th>
						<th>{$planet_metal}</th>
						<th>{$planet_crystal}</th>
						<th>{$planet_deuterium}</th>
                                                
					</tr>
					<tr>
						<th>After</th>
						<th><input value="0" id="newMetal" name="newMetal" onkeyup="page_merchant_updateRes();" type="text"></th>
						<th><input value="0" id="newCrystal" name="newCrystal" onkeyup="page_merchant_updateRes();" type="text"></th>
						<th><input value="0" id="newDeuterium" name="newDeuterium" onkeyup="page_merchant_updateRes();" type="text"></th>
                                              
					</tr>
					<tr>
						<th>&nbsp;</th>
						<th><a onclick="page_merchant_setMax(1);">Max</a></th>
						<th><a onclick="page_merchant_setMax(2);">Max</a></th>
						<th><a onclick="page_merchant_setMax(4);">Max</a></th>
                                                
					</tr>
					<tr>
						<th>&nbsp;</th>
						<th><a onclick="page_merchant_setRest(1);">Rest</a></th>
						<th><a onclick="page_merchant_setRest(2);">Rest</a></th>
						<th><a onclick="page_merchant_setRest(4);">Rest</a></th>
                                               
					</tr>
					<tr>
						<th>&nbsp;</th>
						<th><a onclick="page_merchant_setSpread(1,1,1,1);">Spread 1:1:1:1</a></th>
						<th><a onclick="page_merchant_setSpread(4,2,1,0);">Spread 4:2:1:0</a></th>
						<th><a onclick="page_merchant_setSpread(1,1,0,0);">Spread 1:1:0:0</a></th>
                                              
					</tr>
					<tr>
						<th>&nbsp;</th>
						<th colspan="4"><a onclick="page_merchant_setCurrent();">Current</a></th>
					</tr>
					<tr>
						<th>&nbsp;</th>
						<th colspan="4"><input id="ratio1" value="1" size="3" onchange="page_merchant_customRatio();" type="text">:<input id="ratio2" value="1" size="3" onchange="page_merchant_customRatio();" type="text">:<input id="ratio3" value="1" size="3" onchange="page_merchant_customRatio();" type="text"></th>
					</tr>
					<tr>
						<td class="c">Points left</td>
						<td class="c" colspan="4" id="resLeft">{$total_points}</td>
					</tr>
					<tr>
						<th colspan="5"><input value="Trade" id="okBtn" disabled="disabled" type="submit"></th>
					</tr>
					<tr>
						<td class="c" colspan="5">Ship presets</td>
					</tr>
                    
                    
                    <table width="100%"><tr>
            <th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(3000,1000,0);">Light Fighter</th>
        <th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(10000,20000,10000);">Colonyship</th>
    <th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(0,1000,0);">Espionage probe</th>
    						<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(0,2000,500);">Solar Satellite</th>
</tr></table>
					
			 <table width="100%"><tr>
             
             
             <th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(5000000,4000000,1000000);">Deathstar</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(30000,40000,15000);">Battlecruiser</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(8000000,2000000,1500000);">Lune Noir</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(35000,20000,1500);">Evo Transporter</th>
             
             </tr></table>
				
					<table width="100%">
					
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(1000000,600000,200000);">Mega-Recycler </th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(50000000,37500000,40000000);">Column thriller</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(250000000,120000000,30000000);">Bahamut</th>
                    <th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(100000,100000,15000);">Ifrit</th></tr></table>
					
					
					<table width="100%">
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(95000,95000,25000);">Shiva</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(130000,70000,15000);">Catoblepas </th>
                    <th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(130000,70000,15000);">Ixion</th>
<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(105000,105000,5000);">Odin </th></tr></table>
					<table width="100%">
					
            <th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(470000000,250000000,130000000);">Iberion </th></tr></table>
					
					
					
					<table width="100%">
						<td class="c" colspan="4">Defense presets</td>
					</table>
					<table width="100%"><th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(2000,0,0);">Missile Launcher</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(1500,500,0);">Light Laser</th>
                                        <th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(6000,2000,0);">Heavy Laser</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(20000,15000,2000);">Gauss Cannon</th></tr></table>
					
                                        <table width="100%"><th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(2000,6000,0);">Ion Cannon</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(50000,50000,30000);">Plasma Turret</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(15000000,15000000,0);">Gravitons Cannon</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(10000,10000,0);">Small Shield Dome</th></tr></table>
					
					<table width="100%"><th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(50000,50000,0);">Large Shield Dome</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(8000,2000,0);">Anti-Ballistic Missiles</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(12500,2500,10000);">Interplanetary Missiles</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(5000000000,2000000000,500000000);">Orbital Defence Platform</th></tr></table>
					

					<table width="100%">
						<td class="c" colspan="4">Building presets</td>
					</table>
                    
                    
					<table width="100%"><th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(60,15,0);">Metal Mine</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(48,24,0);">Crystal Mine</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(225,75,0);">Deuterium Synthesizer</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(100000000,50000000,25000000);">University</th></tr></table>
					
                                        <table width="100%"><th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(75,30,0);">Solar Plant</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(900,360,180);">Fusion Reactor</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(400,120,200);">Robotics Factory</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(1000000,500000,100000);">Nanite Factory</th></tr></table>
					
					<table width="100%"><th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(400,200,100);">Shipyard</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(2000,0,0);">Metal Storage</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(2000,1000,0);">Crystal Storage</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(2000,2000,0);">Deuterium Tank</th></tr></table>
					
					<table width="100%"><th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(200,400,200);">Research Lab</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(0,50000,100000);">Terraformer</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(20000,40000,0);">Alliance Depot</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(20000,20000,1000);">Missile Silo</th></tr></table>
					
					<table width="100%"><th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(20000,40000,20000);">Lunar Base</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(20000,40000,20000);">Sensor Phalanx</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(2000000,4000000,2000000);">Jump Gate</th></tr></table>
					
					
					
				                         <table width="100%">
						<td class="c" colspan="4">Research presets</td>
					 </table>
					<table width="100%"><th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(200,1000,200);">Espionage Technology</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(0,400,600);">Computer Technology</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(800,200,0);">Weapons Technology</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(200,600,0);">Shielding Technology</th></tr></table>
					
					<table width="100%"><th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(1000,0,0);">Armour Technology</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(0,800,400);">Energy Technology</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(0,4000,2000);">Hyperspace Technology</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(400,0,600);">Combustion Drive</th></tr></table>
					
					<table width="100%"><th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(2000,4000,6000);">Impulse Drive</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(10000,20000,6000);">Hyperspace Drive</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(200,100,0);">Laser Technology</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(1000,300,100);">Ion Technology</th></tr></table>
					
					<table width="100%"><th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(2000,4000,1000);">Plasma Technology</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(240000,400000,160000);">Intergalactic Research Network</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(4000,8000,4000);">Astrophysics</th>
					<th colspan="4" style="cursor: pointer;" onclick="page_merchant_setSpread(0,0,0);">Graviton Technology</th></tr></table>
					
  
				</tbody></table>
			</form>

			</td>
				</tr>
					</table>
{/block}