{block name="title" prepend}Black Market{/block}
{block name="content"}
<div id="content">

<table border="0" width="510" cellpadding="1" cellspacing="1">
<tr>			
<th class=kategorie colspan=3>The Black Market</th>		
</tr>			
<td>
<p align=left>The "Black Market" is a distant planet where there does not have war and does not have attacks. Is a peaceful area with the most strange and smartest scientists of the galaxy. They are neutral so don't work for any empire, or give them advantages.<br>Everything here is useful for your planet, but remember, they can help you, but you should have some Dark Matter in your ships, because they always have a expensive price.<br>Some features they do it requires time, except the less reputated scientists, but after you request something, they should rest some days to be ready for new requests of all galaxy.

<br><br><font color=red>NOTE</font> - To check information, please move the cursor to "Purchase" and the image and will show a information!
</p>
</td>
</tr>
</table>

<tr></table>




<table><tr><th colspan="8">Building Category</th></tr><tr>
<td>
<img border="1" src="styles/theme/gow/gebaeude/1.gif" align="top" width="80" height="80" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>Metal Mine Upgrade</b></font> - This will allows upgrade your Metal Mine + 1 level, in the planet that you currently are. Metal Mine is used to produce Metal</b></font><br><br><font color=#63B8FF><b>{$MetalMineDM}</b></font> Dark Matter - Waiting Time : 1 Day 6 Hours">
<br><br>{if $MetalMineTime === true}<a href="?page=blackMarket&buildingID=1" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>{$MetalMineDM}</b></font> Dark Matter<br><br>Next cost will be:<br><font color=#63B8FF><b>{$MetalMineNewPrice}</b></font> units of Dark Matter, because you purchased <font color=#63B8FF><b>{$MetalMinePurchased}</b></font> times"><input name="action" value="Purchase" type="submit"></a>{else}<font color=#63B8FF><b><span class="countdown2" secs="{$MetalMineTime}"></b></font></span>{/if}</td>
<td>
<img border="1" src="styles/theme/gow/gebaeude/2.gif" align="top" width="80" height="80" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>Crystal Mine Upgrade</b></font> - This will allows upgrade your Crystal Mine + 1 level, in the planet that you currently are. Crystal Mine is used to produce Crystal.</b></font><br><br><font color=#63B8FF><b>{$CrystalMineDM}</b></font> Dark Matter - Waiting Time : 1 Day 6 Hours">
<br><br>{if $CrystalMineTime === true}<a href="?page=blackMarket&buildingID=2" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>{$CrystalMineDM}</b></font> Dark Matter<br><br>Next cost will be:<br><font color=#63B8FF><b>{$CrystalMineNewPrice}</b></font> units of Dark Matter, because you purchased <font color=#63B8FF><b>{$CrystalMinePurchased}</b></font> times"><input name="action" value="Purchase" type="submit"></a>{else}<font color=#63B8FF><b><span class="countdown2" secs="{$CrystalMineTime}"></b></font></span>{/if}</td>
<td>
<img border="1" src="styles/theme/gow/gebaeude/3.gif" align="top" width="80" height="80" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>Deuterium Synthesizer Upgrade</b></font> - This will allows upgrade your Deuterium Synthesizer + 1 level, in the planet that you currently are. Deuterium Synthesizer is used to produce Deuterium.</b></font><br><br><font color=#63B8FF><b>{$DeuteriumSynthesizerDM}</b></font> Dark Matter - Waiting Time : 1 Day 12 Hours"> 
<br><br>{if $DeuteriumSynthesizerTime === true}<a href="?page=blackMarket&buildingID=3" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>{$DeuteriumSynthesizerDM}</b></font> Dark Matter<br><br>Next cost will be:<br><font color=#63B8FF><b>{$DeuteriumSynthesizerNewPrice}</b></font> units of Dark Matter, because you purchased <font color=#63B8FF><b>{$DeuteriumSynthesizerPurchased}</b></font> times"><input name="action" value="Purchase" type="submit"></a>{else}<font color=#63B8FF><b><span class="countdown2" secs="{$DeuteriumSynthesizerTime}"></b></font></span>{/if}</td>
<td>
<img border="1" src="styles/theme/gow/gebaeude/4.gif" align="top" width="80" height="80" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>Power Plant Upgrade</b></font> - This will allows upgrade your Power Plant + 1 level, in the planet that you currently are. Power Plant is used to produce Energy.</b></font><br><br><font color=#63B8FF><b>{$PowerPlantDM}</b></font> Dark Matter - Waiting Time : 1 Day 6 Hours">
<br><br>{if $PowerPlantTime === true}<a href="?page=blackMarket&buildingID=4" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>{$PowerPlantDM}</b></font> Dark Matter<br><br>Next cost will be:<br><font color=#63B8FF><b>{$PowerPlantNewPrice}</b></font> units of Dark Matter, because you purchased <font color=#63B8FF><b>{$PowerPlantPurchased}</b></font> times"><input name="action" value="Purchase" type="submit"></a>{else}<font color=#63B8FF><b><span class="countdown2" secs="{$PowerPlantTime}"></b></font></span>{/if}</td>
<td>
<img border="1" src="styles/theme/gow/gebaeude/6.gif" align="top" width="80" height="80" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>University Upgrade</b></font> - This will allows upgrade your University + 1 level, in the planet that you currently are. University is used to reduce Research time.</b></font><br><br><font color=#63B8FF><b>{$UniversityDM}</b></font> Dark Matter - Waiting Time : 3 Days">
<br><br>{if $UniversityTime === true}<a href="?page=blackMarket&buildingID=6" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>{$UniversityDM}</b></font> Dark Matter<br><br>Next cost will be:<br><font color=#63B8FF><b>{$UniversityNewPrice}</b></font> units of Dark Matter, because you purchased <font color=#63B8FF><b>{$UniversityPurchased}</b></font> times"><input name="action" value="Purchase" type="submit"></a>{else}<font color=#63B8FF><b><span class="countdown2" secs="{$UniversityTime}"></b></font></span>{/if}</td>
<td>
<img border="1" src="styles/theme/gow/gebaeude/15.gif" align="top" width="80" height="80" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>Nano Factory Upgrade</b></font> - This will allows upgrade your Nano Factory + 1 level, in the planet that you currently are. Nano Factory is used to reduce Buildings, Defense and Ships building time.</b></font><br><br><font color=#63B8FF><b>{$NanoFactoryDM}</b></font> Dark Matter - Waiting Time : 2 Days">
<br><br>{if $NanoFactoryTime === true}<a href="?page=blackMarket&buildingID=15" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>{$NanoFactoryDM}</b></font> Dark Matter<br><br>Next cost will be:<br><font color=#63B8FF><b>{$NanoFactoryNewPrice}</b></font> units of Dark Matter, because you purchased <font color=#63B8FF><b>{$NanoFactoryPurchased}</b></font> times"><input name="action" value="Purchase" type="submit"></a>{else}<font color=#63B8FF><b><span class="countdown2" secs="{$NanoFactoryTime}"></b></font></span>{/if}</td>
<td>
<img border="1" src="styles/theme/gow/gebaeude/33.gif" align="top" width="80" height="80" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>Terraformer Upgrade</b></font> - This will allows upgrade your Terraformer + 1 level, in the planet that you currently are. Terraformer is used to increase Planet fields</b></font><br><br><font color=#63B8FF><b>{$TerraformerDM}</b></font> Dark Matter - Waiting Time : 1 Day">
<br><br>{if $TerraformerTime === true}<a href="?page=blackMarket&buildingID=33" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>{$TerraformerDM}</b></font> Dark Matter<br><br>Next cost will be:<br><font color=#63B8FF><b>{$TerraformerNewPrice}</b></font> units of Dark Matter, because you purchased <font color=#63B8FF><b>{$TerraformerPurchased}</b></font> times"><input name="action" value="Purchase" type="submit"></a>{else}<font color=#63B8FF><b><span class="countdown2" secs="{$TerraformerTime}"></b></font></span>{/if}</td>
<td>
<Empty>
<img border="1" src="http://media.steampowered.com/steamcommunity/public/images/apps/2870/8bf2f5064f10ff093db7c182daab0318408e74a8.jpg" align="top" width="80" height="80" class="tooltip"  data-tooltip-content="
<p align=left><font color=#63B8FF><b>Locked</b></font> - This has not been released yet">
<br><br><a href="#" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>0</b></font> Dark Matter<br><br>Next cost will be:<br><font color=#63B8FF><b>0</b></font> units of Dark Matter, because you purchased <font color=#63B8FF><b>0</b></font> times"><input name="action" value="Purchase" type="submit"></a>
</td></tr>
</table>


<table><tr><th colspan="8">Science Category</th></tr><tr>
<td>
<img border="1" src="styles/theme/gow/gebaeude/109.gif" align="top" width="80" height="80" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>Weapon Upgrade</b></font> - This will allows upgrade your Weapon Research + 1 level. Weapon Research is used to increase Hull Integrity of your ships.</b></font><br><br><font color=#63B8FF><b>{$WeaponTechDM}</b></font> Dark Matter - Waiting Time : 1 Day 6 Hours">
<br><br>{if $WeaponTechTime === true}<a href="?page=blackMarket&techID=109" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>{$WeaponTechDM}</b></font> Dark Matter<br><br>Next cost will be:<br><font color=#63B8FF><b>{$WeaponTechNewPrice}</b></font> units of Dark Matter, because you purchased <font color=#63B8FF><b>{$WeaponTechPurchased}</b></font> times"><input name="action" value="Purchase" type="submit"></a>{else}<font color=#63B8FF><b><span class="countdown2" secs="{$WeaponTechTime}"></b></font></span>{/if}</td>
<td>
<img border="1" src="styles/theme/gow/gebaeude/110.gif" align="top" width="80" height="80" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>Shield Upgrade</b></font> - This will allows upgrade your Shield Research + 1 level. Shield Research is used to increase Shield Integrity of your ships.</b></font><br><br><font color=#63B8FF><b>{$ShieldTechDM}</b></font> Dark Matter - Waiting Time : 1 Day 6 Hours">
<br><br>{if $ShieldTechTime === true}<a href="?page=blackMarket&techID=110" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>{$ShieldTechDM}</b></font> Dark Matter<br><br>Next cost will be:<br><font color=#63B8FF><b>{$ShieldTechNewPrice}</b></font> units of Dark Matter, because you purchased <font color=#63B8FF><b>{$ShieldTechPurchased}</b></font> times"><input name="action" value="Purchase" type="submit"></a>{else}<font color=#63B8FF><b><span class="countdown2" secs="{$ShieldTechTime}"></b></font></span>{/if}</td>
<td>
<img border="1" src="styles/theme/gow/gebaeude/111.gif" align="top" width="80" height="80" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>Armor Upgrade</b></font> - This will allows upgrade your Armor Research + 1 level. Armor Research is used to increase Hull Integrity of your ships.</b></font><br><br><font color=#63B8FF><b>{$ArmorTechDM}</b></font> Dark Matter - Waiting Time : 3 Days ">
<br><br>{if $ArmorTechTime === true}<a href="?page=blackMarket&techID=111" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>{$ArmorTechDM}</b></font> Dark Matter<br><br>Next cost will be:<br><font color=#63B8FF><b>{$ArmorTechNewPrice}</b></font> units of Dark Matter, because you purchased <font color=#63B8FF><b>{$ArmorTechPurchased}</b></font> times"><input name="action" value="Purchase" type="submit"></a>{else}<font color=#63B8FF><b><span class="countdown2" secs="{$ArmorTechTime}"></b></font></span>{/if}</td>
<td>
<img border="1" src="styles/theme/gow/gebaeude/118.gif" align="top" width="80" height="80" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>Engine Upgrade</b></font> - This will allows upgrade your Hyperspace Engine Research + 1 level. Hyperspace Engine is used to boost your capital ships.</b></font><br><br><font color=#63B8FF><b>{$HyperspaceEngineDM}</b></font> Dark Matter - Waiting Time : 1 Day 6 Hours">
<br><br>{if $HyperspaceEngineTime === true}<a href="?page=blackMarket&techID=118" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>{$HyperspaceEngineDM}</b></font> Dark Matter<br><br>Next cost will be:<br><font color=#63B8FF><b>{$HyperspaceEngineNewPrice}</b></font> units of Dark Matter, because you purchased <font color=#63B8FF><b>{$HyperspaceEnginePurchased}</b></font> times"><input name="action" value="Purchase" type="submit"></a>{else}<font color=#63B8FF><b><span class="countdown2" secs="{$HyperspaceEngineTime}"></b></font></span>{/if}</td>
<td>
<img border="1" src="styles/theme/gow/gebaeude/131.gif" align="top" width="80" height="80" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>Mineral Upgrade</b></font> - This will allows upgrade your Mineral Research + 1 level. Mineral Research is used to produce little amounts of Metal.</b></font><br><br><font color=#63B8FF><b>{$MineralTechDM}</b></font> Dark Matter - Waiting Time : 1 Day 6 Hours">
<br><br>{if $MineralTechTime === true}<a href="?page=blackMarket&techID=131" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>{$MineralTechDM}</b></font> Dark Matter<br><br>Next cost will be:<br><font color=#63B8FF><b>{$MineralTechNewPrice}</b></font> units of Dark Matter, because you purchased <font color=#63B8FF><b>{$MineralTechPurchased}</b></font> times"><input name="action" value="Purchase" type="submit"></a>{else}<font color=#63B8FF><b><span class="countdown2" secs="{$MineralTechTime}"></b></font></span>{/if}</td>
<td>
<img border="1" src="styles/theme/gow/gebaeude/132.gif" align="top" width="80" height="80" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>Semi-Crystals Upgrade</b></font> - This will allows upgrade your Semi-Crystals Research + 1 level. Semi-Crystals Research is used to produce little amounts of Crystal.</b></font><br><br><font color=#63B8FF><b>{$SemiCrystalsTechDM}</b></font> Dark Matter - Waiting Time : 1 Day 6 Hours">
<br><br>{if $SemiCrystalsTechTime === true}<a href="?page=blackMarket&techID=132" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>{$SemiCrystalsTechDM}</b></font> Dark Matter<br><br>Next cost will be:<br><font color=#63B8FF><b>{$SemiCrystalsTechNewPrice}</b></font> units of Dark Matter, because you purchased <font color=#63B8FF><b>{$SemiCrystalsTechPurchased}</b></font> times"><input name="action" value="Purchase" type="submit"></a>{else}<font color=#63B8FF><b><span class="countdown2" secs="{$SemiCrystalsTechTime}"></b></font></span>{/if}</td>
<td>
<img border="1" src="styles/theme/gow/gebaeude/133.gif" align="top" width="80" height="80" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>Fuel Upgrade</b></font> - This will allows upgrade your Fuel Research + 1 level. Fuel Research is used to produce little amounts of Deuterium.</b></font><br><br><font color=#63B8FF><b>{$FuelTechDM}</b></font> Dark Matter - Waiting Time : 1 Day 6 Hours">
<br><br>{if $FuelTechTime === true}<a href="?page=blackMarket&techID=133" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>{$FuelTechDM}</b></font> Dark Matter<br><br>Next cost will be:<br><font color=#63B8FF><b>{$FuelTechNewPrice}</b></font> units of Dark Matter, because you purchased <font color=#63B8FF><b>{$FuelTechPurchased}</b></font> times"><input name="action" value="Purchase" type="submit"></a>{else}<font color=#63B8FF><b><span class="countdown2" secs="{$FuelTechTime}"></b></font></span>{/if}</td>
<td>
<img border="1" src="http://media.steampowered.com/steamcommunity/public/images/apps/2870/8bf2f5064f10ff093db7c182daab0318408e74a8.jpg" align="top" width="80" height="80" class="tooltip"  data-tooltip-content="
<p align=left><font color=#63B8FF><b>Locked</b></font> - This has not been released yet">
<br><br><a href="#" class="tooltip"  data-tooltip-content="<p align=left><font color=#63B8FF><b>0</b></font> Dark Matter<br><br>Next cost will be:<br><font color=#63B8FF><b>0</b></font> units of Dark Matter, because you purchased <font color=#63B8FF><b>0</b></font> times"><input name="action" value="Purchase" type="submit"></a>
</td></tr>
</table>


</div>


</div>
{/block}