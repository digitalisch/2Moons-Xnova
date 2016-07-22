{include file="overall_header.tpl"}
<body id="mercado">
<div id="tooltip" class="tip"></div>
<div class="contenido_big">
<div id="cajaBG">
    <div id="caja">
<div id="topnav" class="header_normal"> 	
		{include file="overall_topnav.tpl"}	
			<div id="titular">
			<div id="estructura_titular" style="position:relative;">
				<div id="titular_texto" style="display: block;">{$ft_head}</div>
			</div>
        </div>
	</div> 
{include file="left_menu.tpl"}
<div id="contenidoMostrado">                               
<div id="elCosoxD">
<div id="planeta" style="background-image: url(styles/theme/gow/adds/fleettrader.jpg);"></div>
<div class="coso_izquierda"></div>
<div class="coso_derecha"></div>
<div id="titulo_alternativo">
    <ul class="tabsbelow">
        <li>
              <span></span>
        </li>                                    
    </ul>
</div>
<div id="eins">
        <div>	    
 <form action="" method="POST">
    <table width="95%">
		<tbody>
			<tr>
			<th>{$ft_naves}</th>
			<th>{$ft_selecciona}</th>
			<th>{$ft_cantidad}</th>
			<th>{$ft_coste}</th>
			</tr>
			
			<td class="semi_remarcado">
			<div class="imagenes_fleettrader">
			{foreach $trade_allowed_ships as $ID}
			<img class="tooltip" name="{$tech.$ID}" src="styles/theme/gow/gebaeude/{$ID}.png" height="70" width="70" />
			{/foreach}
			</div>
			</td>
			
			<td class="remarcado">
			<div>
			<select name="id" id="id" onChange="updateVars()" size="5">
			{foreach $trade_allowed_ships as $ID}
			<option value="{$ID}" label="{$tech.$ID}">{$tech.$ID}</option>
			{/foreach}
			</select>
			</div>
			</td>
					
			<td class="semi_remarcado">
			<div class="bg_input_special">
			<input type="text" class="text" id="count" name="count" onkeyup="Total();" />
			</div>
			</td>
			
			<td class="remarcado">
			<div class="recursos_fleettrader">
			<img class="tooltip" name="{$ft_cau}{$Metal}{$ft_cau_2}" src="styles/theme/gow/images/metal.jpg" /><b><span id="metal">0</span></b><br />
			<img class="tooltip" name="{$ft_cau}{$Crystal}{$ft_cau_2}" src="styles/theme/gow/images/cristal.jpg" /><b><span id="crystal">0</span></b><br />
			<img class="tooltip" name="{$ft_cau}{$Deuterium}{$ft_cau_2}" src="styles/theme/gow/images/deuterio.jpg" /><b><span id="deuterium">0</span></b><br />
			<img class="tooltip" name="{$ft_cau}{$Norio}{$ft_cau_2}" src="styles/theme/gow/images/norio.jpg" /><b><span id="norio">0</span></b>
			</div>
			</td>
					
			<tr><td colspan="4">
			<div>
			<input type="submit" class="submit" value="{$ft_absenden}">
			</div>
			</td></tr>
			
		</tbody>
	</table>
 </form>
        </div>
</div>	
<div class="new_footer"></div>	
<br /><br /><br />	
</div>
</div>	
</div>	
</div>	
</div>
<script type="text/javascript">
var CostInfo = {$CostInfos};
var Charge = {$Charge};
</script>
{include file="planet_menu.tpl"}
{include file="overall_footer.tpl"}