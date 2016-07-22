<?php /*%%SmartyHeaderCode:1574954b5aa7cf17b59-80563173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67dad8c07a4233ae500485248d6d4c8345270375' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\page.fleetTable.default.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
    '0d87be48ddd93fcf796073d4cdc89664d7443f31' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\layout.full.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
    'bd0460dc332afc3e5badef19cbdec6f14b205e68' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\main.header.tpl',
      1 => 1421190463,
      2 => 'file',
    ),
    '3fac69c8cf4e2f015f41071bd7989c414d561601' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\main.navigation.tpl',
      1 => 1421189182,
      2 => 'file',
    ),
    'cde4185ebd3114e6746348a1b15757e50d8cfb8b' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\main.topnav.tpl',
      1 => 1421191463,
      2 => 'file',
    ),
    '626ff14735e2dc86488cd73f782ebb662593e5f2' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\main.footer.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1574954b5aa7cf17b59-80563173',
  'variables' => 
  array (
    'hasAdminAccess' => 1,
    'LNG' => 1,
    'cronjobs' => 1,
    'cronjob' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b5aa7d89bb47_27257854',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b5aa7d89bb47_27257854')) {function content_54b5aa7d89bb47_27257854($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js"> <!--<![endif]-->
<head>
	<title>Frota - <?php echo $_smarty_tpl->tpl_vars['uni_name']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['game_name']->value;?>
</title>
	<meta name="generator" content="2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
	<!-- 
		This website is powered by 2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/resource/css/styles/cms.css">
	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/resource/css/styles/base.css">
	<link href="http://fonts.googleapis.com/css?family=Terminal+Dosis" rel="stylesheet" type="text/css">
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:100,400'>

	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/resource/css/ingame/main.css?v=2676">
	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/resource/css/base/jquery.css">
	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/resource/css/base/jquery.fancybox.css">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/resource/css/base/validationEngine.jquery.css?v=2676">	
	
	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/formate.css?v=2676">
	<link rel="shortcut icon" href="http://dystopiaonline.fr/v1.1.0/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://dystopiaonline.fr/v1.1.0/favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo $_smarty_tpl->tpl_vars['Offset']->value;?>
;
	var serverTime 	= new Date(<?php echo $_smarty_tpl->tpl_vars['date']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[1]-1;?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[2];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[3];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[4];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[5];?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "Pronto";
	var Skin		= "<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
";
	var Lang		= "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
";
	var head_info	= "Informação";
	var auth		= <?php echo (($tmp = @$_smarty_tpl->tpl_vars['authlevel']->value)===null||$tmp==='' ? '0' : $tmp);?>
;
	var days 		= ["So","Mo","Di","Mi","Do","Fr","Sa"] 
	var months 		= ["Jan","Feb","Mar","Apr","Mai","Jun","Jul","Aug","Sep","Okt","Nov","Dez"] ;
	var tdformat	= "[M] [D] [d] [H]:[i]:[s]";
	var queryString	= "<?php echo strtr($_smarty_tpl->tpl_vars['queryString']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>

	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/jquery.js?v=2676"></script>



	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/vegas/jquery.vegas.js"></script>
	
	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/scripts/vegas/jquery.vegas.css" />
	
	
	
	<script type="text/javascript">
	    $(function() {
			$.vegas({
			src:'http://dystopiaonline.fr/v1.1.0/styles/theme/gow/img/bkd_page.jpg',
			fade: 0
			});
			$.vegas('overlay', {
			src:'http://dystopiaonline.fr/v1.1.0/scripts/vegas/overlays/04.png',
			opacity:0.3
			});
		});
	</script>
	
	
	
	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/jquery.ui.js?v=2676"></script>
	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/jquery.cookie.js?v=2676"></script>
	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/jquery.fancybox.js?v=2676"></script>
	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/jquery.validationEngine.js?v=2676"></script>
	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/tooltip.js?v=2676"></script>
	<!--<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/jquery.knob.min.js"></script>
<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/vegas/square.js"></script>	-->
	
		<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/game/jquery.countdown.js?v=2676"></script>
		
	<script type="text/javascript">
	$(function() {
		
	});
	</script>
	
<script src="scripts/style/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript">
    var s_account = "mshaloglobalplat";
</script>

<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/game/base.js?v=2676"></script>
<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/style/jquery-ui.min.js" ></script>
<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/style/Core8b08.js?v=12314" ></script>
<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/style/cms.js" ></script>
<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/style/main.js" ></script>
	<?php  $_smarty_tpl->tpl_vars['scriptname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scriptname']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->key => $_smarty_tpl->tpl_vars['scriptname']->value){
$_smarty_tpl->tpl_vars['scriptname']->_loop = true;
?>
	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/game/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php } ?>
	<script src="scripts/game/fleetTable.js"></script>
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="fleetTable" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div><?php if ($_smarty_tpl->tpl_vars['hasAdminAccess']->value){?>
<div class="globalWarning">
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_1'];?>
 <a id="drop-admin"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_link'];?>
</a><?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_2'];?>

</div>
<?php }?>
<div id="leftmenu">


		
			
			
<div class="categories">
     <ul class="menuleft">
			<li onClick="window.open('game.php?page=overview', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item1"></div>Vue générale</span></li>
					<li onClick="window.open('game.php?page=buildings', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item8"></div>Infrastructures</span></li>
							<li onClick="window.open('game.php?page=expe', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item8"></div>Expéditions</span></li>
							<li onClick="window.open('game.php?page=research', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item9"></div>Centre de Recherche</span></li>
							<li onClick="window.open('game.php?page=shipyard&amp;mode=fleet&amp;shipyardpage=2', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item10"></div>Hangar</span></li>
						
					<li onClick="window.open('game.php?page=shipyard&amp;mode=defense', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item11"></div>Canons extérieurs</span></li>
		
		
		
		
		
		<li onClick="window.open('game.php?page=bank', '_self', 'scrollbars=no');" style="position: relative; margin-top: 10px;"><span><div class="item item13"></div>Compartiment</span></li>
						<li onClick="window.open('game.php?page=Lottery', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item6"></div>Taverne</span></li>		
		
		
		
		
		
		
		
		
		
		
		
		

							  <li style="background: none; position: relative; margin-top: 10px;"><span><div class="item item4"></div>Galaxie</span>
					  </li>							
					<li onClick="window.open('game.php?page=mission', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item2"></div>Missions</span></li>
	

					<li onClick="window.open('game.php?page=fleetTable', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item3"></div>Flottes</span></li>
				

					<li onClick="window.open('game.php?page=techtree', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item16"></div>Technologies</span></li>
							<li onClick="window.open('game.php?page=records', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item18"></div>Médailles</span></li>
					<li style="background: none; position: relative; margin-top: 10px;"><span><div class="item item14"></div>Menu social</span>
			</li>
	</ul>
</div>
</div><div id="header" style="margin-left: 0px; ">
	
	
	
	
	
	
	
	
	
	
	
	
	    <div class="article clearfix" id="home_videos_article">
        


        
        <div class="container background" style="height: 91px;
width: 100%;
position: fixed;
z-index: 10;
top: -3px;
border: 0px solid rgba(22, 24, 28, 0.5);
font-family: 'Roboto',sans-serif;
background: none repeat scroll 0% 0% rgba(8, 23, 36, 0.95);
box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.41);">
            <div class="content_area">
            <div class="hatch_strip"><br>
				
				
				
				<center>
				

				
		<table id="headerTable" style="margin-left: 35px;">
			<tbody>
			


			
				<tr>
				
					<td class="ficheperso" style="border-radius: 0px;">
						<a data-tooltip-content="Modifier l'avatar" class="tooltip" href="game.php?page=settings" ;="">
							<img src="styles/resource/uploads/anonymous.png" alt="Qwa" class="avatartop">
						</a>
						<br>
						
						<a data-tooltip-content="Points de compétences" class="tooltip" ;="">
							<div style="border-radius: 0px 0px 30px;
								z-index: 100;
								background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.8);
								position: absolute;
								width: 120px;
								margin-top: -35px;
								margin-left: 2px;
								font-size: 19px;
								text-shadow: none;">
								<span style="font-family: 'Anton',sans-serif !important; text-transform: uppercase !important;">
									0<span class="flaticon-heart27" style="color: #FFF; font-size: 20px;"></span>
								</span>
							</div>
						</a>
							
							
					</td>
				<!--	
					<td class="competence">
					<div style="margin-left:25px; margin-right:40px; color: rgba(255, 255, 255, 1);width:82%;">
						<a data-tooltip-content="Points de compétences" class="tooltip"> 
							<div style="margin-top:3px;">
							
							<table style="margin: 0px; width: 100%;border-spacing:0px;">
								<tr>
									<td class="transparent" style="text-align: center; box-shadow: none;">
										0
									</td>
									<td class="transparent" style="width: 70px; box-shadow: none;">
										<img src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/922.png" height="33px" alt="" style="margin-top: -3px;">
									</td>
								</tr>
							</table>
							
							
							</div> 
						</a>
					</div>
					</td>
					-->

					


				</tr>
			</tbody>
		</table>				

				
					<div class="menutop" style="height: 45px;">
						<table style="width: auto;">
							<tbody><tr>
								<td class="transparent" style="width: 45px; position: relative;">
									<a href="game.php?page=ticket" data-tooltip-content="Envoyer un message à l'administration." class="tooltip">
										<img src="http://dystopiaonline.fr/v1.1.0/styles/resource/images/icons/support.png" style="position: absolute; top: -1px; left: 0px; width: 39px;">
									</a>
								</td>								
								<td class="transparent" style="width: 45px; position: relative;">
									<a href="game.php?page=officier" data-tooltip-content="Compétences" class="tooltip">
										<span class="fa fa-heart" style="color: #FFF;  font-size: 28px; position: absolute; top: 5px; left: 0px;"></span>
									</a>
								</td>
								<td class="transparent" style="width: 45px; position: relative;">
									<div style="position: relative;">
										<a href="game.php?page=chat" data-tooltip-content="Chat" class="tooltip">
											<span class="fa fa-inbox" style="color: #FFF; font-size: 28px; position: absolute;top: 5px;left: -10px;"></span>
									</div>
								</td>
								<td class="transparent" style="width: 45px; position: relative;">
									<a href="game.php?page=statistics" data-tooltip-content="Classement" class="tooltip">
										<span class="fa fa-sort-amount-asc" style="color: #FFF;  font-size: 28px; position: absolute;top: 5px;left: 0px;"></span>
									</a>
								</td>
								<td class="transparent" style="width: 45px; position: relative;">
									<a href="game.php?page=settings" data-tooltip-content="Configuration" class="tooltip">
										<span  class="fa fa-cogs" style="color: #FFF; font-size: 28px; position: absolute;top: 5px; left: 0px;"></span>
									</a>
								</td>
							</tr>
						</tbody></table>
						<img src="http://dystopiaonline.fr/v1.1.0/styles/resource/images/angletop.png" style="opacity: 0.34; position: absolute; top: 0px; left: 350px; width: 35px; height: 45px;">
					</div>

					
					


											<a href="game.php?page=resources">
							<div class="ressourcestopgestion">
								Gérer l'énergie
							</div>
						</a>
						
					

					
				
					
					
					<table class="ressourcetop">
						<tbody><tr>
																	<td class="transparent metalheader" style="width: 11%;">
										<table class="ressourcemetalheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
																										
														<img class="ressourcetopimg" src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/metal.png" alt="">
													</a>
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_metal" data-real="<?php echo pretty_number($_smarty_tpl->tpl_vars['metal']->value);?>
" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['metal']->value);?>
"><?php echo pretty_number($_smarty_tpl->tpl_vars['metal']->value);?>
</td>
																
																	
																																			<td class="res_max" id="max_metal" data-real="<?php echo $_smarty_tpl->tpl_vars['metal']->value;?>
">/<?php echo $_smarty_tpl->tpl_vars['metal_max']->value;?>
</td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent crystalheader" style="width: 11%;">
										<table class="ressourcecrystalheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
									<img class="ressourcetopimg" src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/crystal.png" alt="">
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_crystal" data-real="<?php echo pretty_number($_smarty_tpl->tpl_vars['crystal']->value);?>
" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['crystal']->value);?>
"><?php echo pretty_number($_smarty_tpl->tpl_vars['crystal']->value);?>
</td>
																
																	
																																			<td class="res_max" id="max_crystal" data-real="<?php echo pretty_number($_smarty_tpl->tpl_vars['crystal']->value);?>
">/<?php echo $_smarty_tpl->tpl_vars['crystal_max']->value;?>
</td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent deuteriumheader" style="width: 11%;">
										<table class="ressourcedeuteriumheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
														<img class="ressourcetopimg" src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/deuterium.png" alt="">
													</a>
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_deuterium" data-real="<?php echo pretty_number($_smarty_tpl->tpl_vars['deuterium']->value);?>
" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['deuterium']->value);?>
"><?php echo pretty_number($_smarty_tpl->tpl_vars['deuterium']->value);?>
</td>
																
																	
																																			<td class="res_max" id="max_deuterium" data-real="<?php echo pretty_number($_smarty_tpl->tpl_vars['deuterium']->value);?>
">/<?php echo $_smarty_tpl->tpl_vars['deuterium_max']->value;?>
</td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent naniteheader" style="width: 11%;">
										<table class="ressourcenaniteheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
																								
														<img class="ressourcetopimg" src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/nanite.png" alt="">
													</a>
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_nanite" data-real="0" data-tooltip-content="0"><?php echo $_smarty_tpl->tpl_vars['darkmatter']->value;?>
</td>
																
																	
																																			<td class="res_max" id="max_nanite" data-real="0"></td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent civilheader" style="width: 0.01%;">
										<table class="ressourcecivilheader" style="border-spacing: 0px;">
											<tbody>
										</tbody></table>
									</td>
																	<td class="transparent energyheader" style="width: 11%;">
										<table class="ressourceenergyheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
																									
														<img class="ressourcetopimg" src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/energy.png" alt="">
													</a>
																									</td>
																																													<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none;">
																	<span style=""><?php echo pretty_number($_smarty_tpl->tpl_vars['energy_used']->value);?>
/<?php echo pretty_number($_smarty_tpl->tpl_vars['energy']->value);?>
</span>
																</td>
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent darkmatterheader" style="width: 300px;">
										<table class="ressourcedarkmatterheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
																										<a class="tooltip" style="height: 35px; display: block;" data-tooltip-content="<h3>Electrum</h3>">
																													<img src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/darkmatter.gif" height="25px" ;="" alt="">
																											</a>
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_darkmatter" data-real="228" data-tooltip-content="228">
																	228																</td>
																
																	
																																			<td id="max_darkmatter">&nbsp;</td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent missionheader" style="width: 11%;">
										<table class="ressourcemissionheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
																										<a class="tooltip" style="height: 35px; display: block;" data-tooltip-content="<h3>Point de compétence</h3>">
																													<img class="ressourcetopimg" src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/mission.gif" alt="">
																											</a>
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_mission" data-real="0" data-tooltip-content="0">
																	0																</td>
																
																	
																																			<td id="max_mission">&nbsp;</td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent jetonheader" style="width: 300px;">
										<table class="ressourcejetonheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
																										<a class="tooltip" style="height: 35px; display: block;" data-tooltip-content="<h3>Jetons</h3>">
																													<img src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/923.png" height="25px" ;="" alt="">
																											</a>
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_jeton" data-real="304" data-tooltip-content="304">
																	304<span style="font-family: Websymbol; color: white; text-align: center;">ã</span>																</td>
																
																	
																																			<td id="max_jeton">&nbsp;</td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
															</tr>
						</tbody></table>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
				
				
				
				
					
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				</center>
				</div>
            </div>
        </div>

    </div>
	
	
	
	
	<a class="tooltip" style="position: fixed; top: 15px; right: 15px; z-index: 999;" href="game.php?page=logout" data-tooltip-content="<span style='color: #F60; font-weight: 400; font-size: 15px; padding: 20px;'>Se déconnecter</span>">
		<img src="http://dystopiaonline.fr/v1.1.0/styles/resource/images/icons/logout.png" style="width: 20px; opacity: 0.5;">
	</a>
		<script type="text/javascript">

	</script>
	
	
			</div>
			
			<div id="wrapper">
    <div id="mainBody">
		<div id="article" class="index"><div id="content">
<table style="width:760px;">
	<tr>
		<th colspan="9">
			<div class="transparent" style="text-align:left;float:left;">Frota <?php echo $_smarty_tpl->tpl_vars['activeFleetSlots']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['maxFleetSlots']->value;?>
</div>
			<div class="transparent" style="text-align:right;float:right;"><?php echo $_smarty_tpl->tpl_vars['activeExpedition']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['maxExpedition']->value;?>
 Expedição</div>
		</th>
	</tr>
	<tr>
		<td>ID</td>
		<td>Missão</td>
		<td>Número</td>
		<td>Inicio</td>
		<td>Chegada(Destino)</td>
		<td>Destino</td>
		<td>Chegada(Volta)</td>
		<td>Objetivo</td>
		<td>Ordem</td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['FlyingFleetRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FlyingFleetRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FlyingFleetList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['FlyingFleets']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['FlyingFleetRow']->key => $_smarty_tpl->tpl_vars['FlyingFleetRow']->value){
$_smarty_tpl->tpl_vars['FlyingFleetRow']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['FlyingFleets']['iteration']++;
?>
	<tr>
	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['FlyingFleets']['iteration'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][$_smarty_tpl->tpl_vars['FlyingFleetRow']->value['mission']];?>

	<?php if ($_smarty_tpl->tpl_vars['FlyingFleetRow']->value['state']==1){?>
		<br><a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_returning'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_r'];?>
</a>
	<?php }else{ ?>
		<br><a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_onway'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_a'];?>
</a>
	<?php }?>
	</td>
	<td><a class="tooltip_sticky" data-tooltip-content="<table width='100%'><tr><th colspan='2' style='text-align:center;'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_info_detail'];?>
</th></tr><?php  $_smarty_tpl->tpl_vars['shipCount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipCount']->_loop = false;
 $_smarty_tpl->tpl_vars['shipID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['FleetList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipCount']->key => $_smarty_tpl->tpl_vars['shipCount']->value){
$_smarty_tpl->tpl_vars['shipCount']->_loop = true;
 $_smarty_tpl->tpl_vars['shipID']->value = $_smarty_tpl->tpl_vars['shipCount']->key;
?><tr><td class='transparent'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['shipID']->value];?>
:</td><td class='transparent'><?php echo $_smarty_tpl->tpl_vars['shipCount']->value;?>
</td></tr><?php } ?></table>"><?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['amount'];?>
</a></td>
	<td><a href="game.php?page=galaxy&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['startGalaxy'];?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['startSystem'];?>
">[<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['startGalaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['startSystem'];?>
:<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['startPlanet'];?>
]</a></td>
	<td<?php if ($_smarty_tpl->tpl_vars['FlyingFleetRow']->value['state']==0){?> style="color:lime"<?php }?>><?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['startTime'];?>
</td>
	<td><a href="game.php?page=galaxy&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['endGalaxy'];?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['endSystem'];?>
">[<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['endGalaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['endSystem'];?>
:<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['endPlanet'];?>
]</a></td>
	<?php if ($_smarty_tpl->tpl_vars['FlyingFleetRow']->value['mission']==4&&$_smarty_tpl->tpl_vars['FlyingFleetRow']->value['state']==0){?>
	<td>-</td>
	<?php }else{ ?>
	<td<?php if ($_smarty_tpl->tpl_vars['FlyingFleetRow']->value['state']!=0){?> style="color:lime"<?php }?>><?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['endTime'];?>
</td>
	<?php }?>
	<td id="fleettime_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['FlyingFleets']['iteration'];?>
" class="fleets" data-fleet-end-time="<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['returntime'];?>
" data-fleet-time="<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['resttime'];?>
"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['resttime'];?>
<?php $_tmp1=ob_get_clean();?><?php echo pretty_fly_time($_tmp1);?>
</td>
	<td>
	<?php if (!$_smarty_tpl->tpl_vars['isVacation']->value&&$_smarty_tpl->tpl_vars['FlyingFleetRow']->value['state']!=1){?>
		<form action="game.php?page=fleetTable&amp;action=sendfleetback" method="post">
		<input name="fleetID" value="<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['id'];?>
" type="hidden">
		<input value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_send_back'];?>
" type="submit">
		</form>
		<?php if ($_smarty_tpl->tpl_vars['FlyingFleetRow']->value['mission']==1){?>
		<form action="game.php?page=fleetTable&amp;action=acs" method="post">
		<input name="fleetID" value="<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['id'];?>
" type="hidden">
		<input value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_acs'];?>
" type="submit">
		</form>
		<?php }?>
	<?php }else{ ?>
	&nbsp;-&nbsp;
	<?php }?>
	</td>
	</tr>
	<?php }
if (!$_smarty_tpl->tpl_vars['FlyingFleetRow']->_loop) {
?>
	<tr>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
	</tr>
	<?php } ?>
	<?php if ($_smarty_tpl->tpl_vars['maxFleetSlots']->value==$_smarty_tpl->tpl_vars['activeFleetSlots']->value){?>
	<tr><td colspan="9"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_no_more_slots'];?>
</td></tr>
	<?php }?>
</table>
<?php if (!empty($_smarty_tpl->tpl_vars['acsData']->value)){?>
<?php echo $_smarty_tpl->getSubTemplate ("shared.fleetTable.acsTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<form action="?page=fleetStep1" method="post">
<input type="hidden" name="galaxy" value="<?php echo $_smarty_tpl->tpl_vars['targetGalaxy']->value;?>
">
<input type="hidden" name="system" value="<?php echo $_smarty_tpl->tpl_vars['targetSystem']->value;?>
">
<input type="hidden" name="planet" value="<?php echo $_smarty_tpl->tpl_vars['targetPlanet']->value;?>
">
<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['targetType']->value;?>
">
<input type="hidden" name="target_mission" value="<?php echo $_smarty_tpl->tpl_vars['targetMission']->value;?>
">
<table class="table519">
	<tr>
		<th colspan="4">Nova Missão : Selecionar frota</th>
	</tr>
	<tr style="height:20px;">
		<td>Tipo de Nave</td>
		<td>Naves disponíveis</td>
		<td>-</td>
		<td>-</td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['FleetRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FleetRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FleetsOnPlanet']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FleetRow']->key => $_smarty_tpl->tpl_vars['FleetRow']->value){
$_smarty_tpl->tpl_vars['FleetRow']->_loop = true;
?>
	<tr style="height:20px;">
		<td><?php if ($_smarty_tpl->tpl_vars['FleetRow']->value['speed']!=0){?> <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_speed_title'];?>
 <?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['speed'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['FleetRow']->value['id']];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['FleetRow']->value['id']];?>
<?php }?></td>
		<td id="ship<?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['id'];?>
_value"><?php echo pretty_number($_smarty_tpl->tpl_vars['FleetRow']->value['count']);?>
</td>
		<?php if ($_smarty_tpl->tpl_vars['FleetRow']->value['speed']!=0){?>
		<td><a href="javascript:maxShip('ship<?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['id'];?>
');"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_max'];?>
</a></td>
		<td><input name="ship<?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['id'];?>
" id="ship<?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['id'];?>
_input" size="10" value="0"></td>
		<?php }else{ ?>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<?php }?>
	</tr>
	<?php } ?>
	<tr style="height:20px;">
	<?php if (count($_smarty_tpl->tpl_vars['FleetsOnPlanet']->value)==0){?>
	<td colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_no_ships'];?>
</td>
	<?php }else{ ?>
	<td colspan="2"><a href="javascript:noShips();"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_remove_all_ships'];?>
</a></td>
	<td colspan="2"><a href="javascript:maxShips();"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_select_all_ships'];?>
</a></td>
	<?php }?>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['maxFleetSlots']->value!=$_smarty_tpl->tpl_vars['activeFleetSlots']->value){?>
	<tr style="height:20px;"><td colspan="4"><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_continue'];?>
"></td>
	<?php }?>
</table>	
</form>
<br>
<table style="min-width:519px;width:519px;">
	<tr><th colspan="3">Bonus</th></tr>
	<tr><th style="width:33%">Armas</th><th style="width:33%">Defesa</th><th style="width:33%">Escudo</th></tr>
	<tr><td>+<?php echo $_smarty_tpl->tpl_vars['bonusAttack']->value;?>
 %</td><td>+<?php echo $_smarty_tpl->tpl_vars['bonusDefensive']->value;?>
 %</td><td>+<?php echo $_smarty_tpl->tpl_vars['bonusShield']->value;?>
 %</td></tr>
	<tr><th style="width:33%">Motor de Combustão</th><th style="width:33%">Motor de Impulsão</th><th style="width:33%">Motor Propulsor de Hiperespaço</th></tr>
	<tr><td>+<?php echo $_smarty_tpl->tpl_vars['bonusCombustion']->value;?>
 %</td><td>+<?php echo $_smarty_tpl->tpl_vars['bonusImpulse']->value;?>
 %</td><td>+<?php echo $_smarty_tpl->tpl_vars['bonusHyperspace']->value;?>
 %</td></tr>
</table>
</div>
<?php  $_smarty_tpl->tpl_vars['cronjob'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cronjob']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cronjobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cronjob']->key => $_smarty_tpl->tpl_vars['cronjob']->value){
$_smarty_tpl->tpl_vars['cronjob']->_loop = true;
?><img src="cronjob.php?cronjobID=<?php echo $_smarty_tpl->tpl_vars['cronjob']->value;?>
" alt=""><?php } ?>
<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>