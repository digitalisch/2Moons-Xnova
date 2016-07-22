    	<!-- Header -->
	<div id="container">
        <header id="header">
            <figure id="logo"><a href="dashboard.html" class="logo"></a></figure>
			
        <section id="playground">
            	<div class="full-width widget-set2">
            	<div class="box no-bg">
                	<ul>
					
						<li class="widget metal">
                            <div class="image"></div>
                            <label>{shortly_number($tinyMetal_current)}</label>
                            <span>{$LNG.tech.901}</span>
                        </li>
						
						<li class="widget crystal">
                            <div class="image"></div>
                            <label>{shortly_number($tinyCrystal_current)}</label>
                            <span>{$LNG.tech.902}</span>
                        </li>
						
						<li class="widget deuterium">
                            <div class="image"></div>
                            <label>{shortly_number($tinyDeuterium_current)}</label>
                            <span>{$LNG.tech.903}</span>
                        </li>
						
						<li class="widget energy">
                            <div class="image"></div>
                            <label>{shortly_number($tinyEnergy_used)}W ({shortly_number($tinyEnergy_current)}W)</label>
                            <span>{$LNG.tech.911}</span>
                        </li>
						
						<li class="widget dm">
                            <div class="image"></div>
                            <label>{$tinyDarkMatter}</label>
                            <span>{$LNG.tech.921}</span>
                        </li>
						
						<li class="widget zion">
                            <div class="image"></div>
                            <label>0</label>
                            <span>Zion</span>
                        </li>
						
                    </ul>
                </div> 
                
              
            </section>		

            <section id="general-options">
            	<a href="game.php?page=overview" class="overview tipsy-header" title="{$LNG.lm_overview}"></a>
            	<a href="game.php?page=imperium" class="imperium tipsy-header" title="{$LNG.lm_empire}"></a>
            	<a href="game.php?page=statistics" class="statistics tipsy-header" title="{$LNG.lm_statistics}"></a>
            	<a href="game.php?page=battleHall" class="battleHall tipsy-header" title="{$LNG.lm_topkb}"></a>
            	<a href="game.php?page=notes" onclick="return Dialog.open(this.href, 720, 300);" class="notes tipsy-header" title="{$LNG.lm_notes}"></a>
            </section>			

               <section id="end-options">
            	<a href="game.php?page=buddyList" class="buddyList tipsy-header" title="{$LNG.lm_buddylist}"></a>
            	<a href="game.php?page=banList" class="banList tipsy-header" title="{$LNG.lm_banned}"></a>
            	<a href="game.php?page=ticket" class="ticket tipsy-header" title="{$LNG.lm_support}"></a>
            	<a href="game.php?page=search" class="search tipsy-header" title="{$LNG.lm_search}"></a>
            	<a href="game.php?page=settings" class="settings tipsy-header" title="{$LNG.lm_options}"></a>
            	<a href="game.php?page=logout" class="logout tipsy-header" title="{$LNG.lm_logout}"></a>

            </section>			
			
             <section id="planet-pick">
            	<select id="planetSelector" style="opacity: 0;">{html_options options=$PlanetSelect selected=$current_pid}</select>
            </section>			

            
        </header> <!-- /Header -->
        
        <div class="clear"></div>		
