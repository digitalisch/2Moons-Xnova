<div id="menu_izquierdo">
        <ul id="menu_botones">
  		<li class="arriba_menu">
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/gow/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton_2 " href="?page=overview"><span>{$lm_overview}</span></a>
		</li>
		{if !CheckModule(15)}<li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/gow/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton" href="javascript:OpenPopup('?page=imperium','{$lm_empire}', 1024, 768);"><span>{$lm_empire}</span></a>
		</li>{/if}
		{if !CheckModule(3)}<li>
	    <span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/gow/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton " href="?page=buildings&amp;mode=research"><span>{$lm_research}</span></a>
		</li>{/if}
		{if !CheckModule(2)}<li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/gow/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton " href="?page=buildings"><span>{$lm_buildings}</span></a>
		</li>{/if}
		{if !CheckModule(4)}<li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/gow/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton " href="?page=buildings&amp;mode=fleet"><span>{$lm_shipshard}</span></a>
		</li>{/if}
		{if !CheckModule(5)}<li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/gow/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton " href="?page=buildings&amp;mode=defense"><span>{$lm_defenses}</span></a>
		</li>{/if}
		{if !CheckModule(13)}<li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/gow/imagenes/navegacion/menu_icon.png">
        </span><a class="menu_boton " href="?page=trader"><span style="color:orange;">{$lm_trader}</span></a>
		</li>{/if}
		{if !CheckModule(38)}<li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/gow/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton " href="?page=fleettrader"><span>{$lm_fleettrader}</span></a>
		</li>{/if}
		{if !CheckModule(9)}<li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/gow/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton " href="?page=fleet"><span>{$lm_fleet}</span></a>
		</li>{/if}
		{if !CheckModule(28)}<li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/gow/imagenes/navegacion/menu_icon.png">
        </span><a class="menu_boton " href="?page=techtree"><span>{$lm_technology}</span></a>
		</li>{/if}
		{if !CheckModule(23)}<li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/gow/imagenes/navegacion/menu_icon.png">
        </span><a class="menu_boton " href="?page=resources"><span>{$lm_resources}</span></a>
		</li>{/if}
		{if !CheckModule(11)}<li><span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/gow/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton " href="?page=galaxy"><span>{$lm_galaxy}</span></a>
		</li>{/if}
		{if !CheckModule(0)}<li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/gow/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton " href="?page=alliance"><span>{$lm_alliance}</span></a>
		</li>{/if}
		{if !CheckModule(25)}<li class="abajo_menu">
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/gow/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton_3 " href="?page=statistics"><span>{$lm_statistics}</span></a>
		</li>{/if}		
    </ul>
	{if $closed}
	<table width="70%" id="infobox" style="border: 3px solid red; text-align:center; margin-left: 6px; margin-top: 3px;"><tr><td>{$closed}</td></tr></table>
	{elseif $delete}
	<table width="70%" id="infobox" style="border: 3px solid red; text-align:center; margin-left: 6px; margin-top: 3px;"><tr><td>{$tn_delete_mode} {$delete}</td></tr></table>
	{elseif $vacation}
	<table width="70%" id="infobox" style="border: 3px solid red; text-align:center; margin-left: 6px; margin-top: 3px;"><tr><td>{$tn_vacation_mode} {$vacation}</td></tr></table>
	{/if}
</div>