<div id="wrap" class="container_24">
	
	<div class="grid_24">
		
		<!-- User Panel: Start -->
		<div id="userpanel">
			
			<!-- User: Start -->
			<ul id="user" class="dropdown">
				<li class="topnav">
					<!-- User Name -->
					<a href="#" class="top icon user">{$username}</a>
					
					<!-- User Dropdown Content: Start -->
					<ul class="subnav">  
			            <li><a href="game.php?page=settings" class="icon settings">{$LNG.lm_options}</a></li>  
			            <li><a href="game.php?page=messages" class="icon chatbubbles">{$LNG.lm_messages}</a></li> 
						{if isModulAvalible($smarty.const.MODULE_NOTICE)}<li><a class="icon edit" href="game.php?page=notes" onclick="return Dialog.open(this.href, 1000, 500);">{$LNG.lm_notes}</a></li>{/if}
						{if isModulAvalible($smarty.const.MODULE_BUDDYLIST)}<li><a class="icon user" href="game.php?page=buddyList">{$LNG.lm_buddylist}</a></li>{/if}
			            <li><a href="game.php?page=logout" class="icon lock">{$LNG.lm_logout}</a></li>
						{if $authlevel > 0}<li><a class="icon windows" href="./admin.php" style="color:lime">{$LNG.lm_administration}</a></li>{/if}						
			        </ul>  
			        <!-- User Dropdown Content: End -->
				</li>
			</ul>
			<!-- User: End -->
			
			<!-- Messages: Start -->
			<ul class="messages">
				<!-- Messages amount with Popup and Tip -->
				<li><a href="game.php?page=messages" class="newmsg"> {nocache}{if $new_message > 0}<span id="newmes"> {$new_message}</span>{else}<span>0</span>{/if}{/nocache}</a></li>
			</ul>
			<!-- Messages: End -->
			
						<!-- Width Switcher: Start -->
			<ul id="width" class="dropdown right">

			
			<a href="#" class="newmsg tip" title="{$LNG.tech.921}<br><br>{shortly_number($tinyDarkMatter)}<br>(Click to Donate)">
			<div class="ressdmimg"><img src="styles/theme/gow/images/darkmatter.gif"></div>
			<div class="ressdm">{shortly_number($tinyDarkMatter)}</div></a>
			
			</ul>
			
			<!-- Width Switcher: End -->
						
		</div>
		<!-- User Panel: End -->
		
		<!-- Header: Start -->
		<div id="header">
				
			<!-- Logo: Start -->
			<a id="logo"></a>
	<div class="selector" style="width:150px;"><span>{$planetName} [{$planetCoords1}:{$planetCoords2}:{$planetCoords3}]</span>
	<select id="planetSelector" style="opacity: 0;">{html_options options=$PlanetSelect selected=$current_pid}</select></div>

			<!-- Logo: End -->

			
			<!-- Navigation: Start -->
			<ul id="navigation" class="dropdown">
				<li><a class="preview active" href="game.php?page=overview">{$LNG.global}</a></li>
				
				<!-- Navigation Dropdown Menu Item: Start -->
				<li class="topnav">
					<a class="bullseye" href="#">{$LNG.ov_planet}</a>
					
					<!-- Navigation Dropdown Menu Item Content: Start -->
					<ul class="subnav">
		{if isModulAvalible($smarty.const.MODULE_IMPERIUM)}<li><a href="game.php?page=imperium">{$LNG.lm_empire}</a></li>{/if}
		{if isModulAvalible($smarty.const.MODULE_RESEARCH)}<li><a href="game.php?page=research">{$LNG.lm_research}</a></li>{/if}
		{if isModulAvalible($smarty.const.MODULE_BUILDING)}<li><a href="game.php?page=buildings">{$LNG.lm_buildings}</a></li>{/if}
		{if isModulAvalible($smarty.const.MODULE_SHIPYARD_FLEET)}<li><a href="game.php?page=shipyard&amp;mode=fleet">{$LNG.lm_shipshard}</a></li>{/if}
		{if isModulAvalible($smarty.const.MODULE_SHIPYARD_DEFENSIVE)}<li><a href="game.php?page=shipyard&amp;mode=defense">{$LNG.lm_defenses}</a></li>{/if}
		{if isModulAvalible($smarty.const.MODULE_OFFICIER) || isModulAvalible($smarty.const.MODULE_DMEXTRAS)}<li><a href="game.php?page=officier">{$LNG.lm_officiers}</a></li>{/if}
		{if isModulAvalible($smarty.const.MODULE_TRADER)}<li><a href="game.php?page=trader">{$LNG.lm_trader}</a></li>{/if}
		{if isModulAvalible($smarty.const.MODULE_FLEET_TABLE)}<li><a href="game.php?page=fleetTable">{$LNG.lm_fleet}</a></li>{/if}
		{if isModulAvalible($smarty.const.MODULE_TECHTREE)}<li><a href="game.php?page=techtree">{$LNG.lm_technology}</a></li>{/if}
		{if isModulAvalible($smarty.const.MODULE_RESSOURCE_LIST)}<li><a href="game.php?page=resources">{$LNG.lm_resources}</a></li>{/if}
			        </ul> 
			        <!-- Navigation Dropdown Menu Item Content: End --> 
				</li>
				<!-- Navigation Dropdown Menu Item: End -->
				
				<!-- Navigation Dropdown Menu Item: Start -->
				<li class="topnav">
					<a class="globe2" href="#">{$LNG.universe}</a>
					
					<!-- Navigation Dropdown Menu Item Content: Start -->
					<ul class="subnav">
		{if isModulAvalible($smarty.const.MODULE_GALAXY)}<li><a href="game.php?page=galaxy">{$LNG.lm_galaxy}</a></li>{/if}
		{if isModulAvalible($smarty.const.MODULE_ALLIANCE)}<li><a href="game.php?page=alliance">{$LNG.lm_alliance}</a></li>{/if}
        {if !empty($hasBoard)}<li><a href="game.php?page=board" target="forum">{$LNG.lm_forums}</a></li>{/if}
		{if isModulAvalible($smarty.const.MODULE_STATISTICS)}<li><a href="game.php?page=statistics">{$LNG.lm_statistics}</a></li>{/if}
		{if isModulAvalible($smarty.const.MODULE_RECORDS)}<li><a href="game.php?page=records">{$LNG.lm_records}</a></li>{/if}
		{if isModulAvalible($smarty.const.MODULE_BATTLEHALL)}<li><a href="game.php?page=battleHall">{$LNG.lm_topkb}</a></li>{/if}   
			        </ul>  
			        <!-- Navigation Dropdown Menu Item Content: End --> 
			        
				</li>
				<!-- Navigation Dropdown Menu Item: End -->
				
				<!-- Navigation Dropdown Menu Item: Start -->
				<li class="topnav">
					<a class="pages" href="#">{$LNG.lm_search}</a>
					
					<!-- Navigation Dropdown Menu Item Content: Start -->
					<ul class="subnav">
		{if isModulAvalible($smarty.const.MODULE_SEARCH)}<li><a href="game.php?page=search">{$LNG.lm_search}</a></li>{/if}
		{if isModulAvalible($smarty.const.MODULE_CHAT)}<li><a href="game.php?page=chat">{$LNG.lm_chat}</a></li>{/if}
		{if isModulAvalible($smarty.const.MODULE_SUPPORT)}<li><a href="game.php?page=ticket">{$LNG.lm_support}</a></li>{/if}
		<li><a href="game.php?page=questions">{$LNG.lm_faq}</a></li>
		{if isModulAvalible($smarty.const.MODULE_BANLIST)}<li><a href="game.php?page=banList">{$LNG.lm_banned}</a></li>{/if}
		<li><a href="index.php?page=rules" target="rules">{$LNG.lm_rules}</a></li>
			        </ul>  
			        <!-- Navigation Dropdown Menu Item Content: End --> 
			        
				</li>
				<!-- Navigation Dropdown Menu Item: End -->
				
			</ul>
			<!-- Navigation: End -->
			
		</div>
		<!-- Header: End -->
		
		<!-- Breadcrumb Bar: Start -->
		<div id="breadcrumb">
			
			<!-- Breadcrumb: Start -->
			
			<div class="ress1img"><img src="styles/theme/gow/images/metall.gif"></div>
			<div class="ress1"><a href="#" class="tip whitty" title="{$LNG.tech.901}<br><br>{$LNG.tech.901}: {shortly_number($tinyMetal_current)} {$LNG.units}<br> {$LNG.storage}: {shortly_number($tinyMetal_max)} {$LNG.units} <br> {$LNG.perHour}: {shortly_number($tinyMetal_prod)} {$LNG.perHourProd}">{shortly_number($tinyMetal_current)}</a></div>
			
			<div class="ress2img"><img src="styles/theme/gow/images/kristall.gif"></div>
			<div class="ress2"><a href="#" class="tip whitty" title="{$LNG.tech.902}<br><br>{$LNG.tech.902}: {shortly_number($tinyCrystal_current)} {$LNG.units}<br> {$LNG.storage}: {shortly_number($tinyCrystal_max)} {$LNG.units} <br> {$LNG.perHour}: {shortly_number($tinyCrystal_prod)} {$LNG.perHourProd}">{shortly_number($tinyCrystal_current)}</a></div>
			
			<div class="ress3img"><img src="styles/theme/gow/images/deuterium.gif"></div>
			<div class="ress3"><a href="#" class="tip whitty" title="{$LNG.tech.903}<br><br>{$LNG.tech.903}: {shortly_number($tinyDeuterium_current)} {$LNG.units}<br> {$LNG.storage}: {shortly_number($tinyDeuterium_max)} {$LNG.units} <br> {$LNG.perHour}: {shortly_number($tinyDeuterium_prod)} {$LNG.perHourProd}">{shortly_number($tinyDeuterium_current)}</a></div>
			
			<div class="ress4img"><img src="styles/theme/gow/images/energie.gif"></div>
			<div class="ress4"><a href="#" class="tip whitty" title="{$LNG.tech.911}<br><br>{$LNG.tech.911}<br>{$LNG.usedE}: {shortly_number($tinyEnergy_used)}W<br>{$LNG.totalE}: {shortly_number($tinyEnergy_current)}W">{shortly_number($tinyEnergy_used)} ({shortly_number($tinyEnergy_current)})</a></div>
			
			
						<!-- Messages Popup Content: Start -->
			<div class="box_content padding hide" id="ressdata">
				  
					<!-- Message From User: Start -->
					<h6>
						<a href="#">{$LNG.ress}</a>
					</h6>
					<p>
	{$LNG.tech.901}: {shortly_number($tinyMetal_current)} {$LNG.units}<br> {$LNG.storage}: {shortly_number($tinyMetal_max)} {$LNG.units} <br> {$LNG.perHour}: {shortly_number($tinyMetal_prod)} {$LNG.perHourProd}<br><br>
	{$LNG.tech.902}: {shortly_number($tinyCrystal_current)} {$LNG.units}<br> {$LNG.storage}: {shortly_number($tinyCrystal_max)} {$LNG.units} <br> {$LNG.perHour}: {shortly_number($tinyCrystal_prod)} {$LNG.perHourProd}<br><br>
	{$LNG.tech.903}: {shortly_number($tinyDeuterium_current)} {$LNG.units}<br> {$LNG.storage}: {shortly_number($tinyDeuterium_max)} {$LNG.units} <br> {$LNG.perHour}: {shortly_number($tinyDeuterium_prod)} {$LNG.perHourProd}<br><br>
	{$LNG.tech.911}<br>{$LNG.usedE}: {shortly_number($tinyEnergy_used)}W<br>{$LNG.totalE}: {shortly_number($tinyEnergy_current)}W
					</p>
					<!-- Message From User: End -->
				
				  
			</div>
			<!-- Messages Popup Content: End -->
			

			<!-- Breadcrumb: End -->
			
			
		</div>
		<!-- Breadcrumb Bar: End -->
		
	</div>
	


	
	{if $closed}
	<div class="infobox">{$LNG.ov_closed}</div>
	{elseif $delete}
	<div class="infobox">{$delete}</div>
	{elseif $vacation}
	<div class="infobox">{$LNG.tn_vacation_mode} {$vacation}</div>
	{/if}