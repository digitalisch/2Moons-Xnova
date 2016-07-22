<?php /*%%SmartyHeaderCode:83154b5b02a3cd726-61617805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fad4f8370ed332cb3c22aa6c3553c2a535f667d' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\page.galaxy.default.tpl',
      1 => 1421193427,
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
      1 => 1421193254,
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
  'nocache_hash' => '83154b5b02a3cd726-61617805',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b5b0d537bd37_32988711',
  'variables' => 
  array (
    'hasAdminAccess' => 1,
    'LNG' => 1,
    'cronjobs' => 1,
    'cronjob' => 1,
  ),
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b5b0d537bd37_32988711')) {function content_54b5b0d537bd37_32988711($_smarty_tpl) {?><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_html_options')) include 'C:\\Wamp\\www\\Dystopia\\includes\\libs\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html>

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
	<title>Galáxia - <?php echo $_smarty_tpl->tpl_vars['uni_name']->value;?>
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
	
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="galaxy" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
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
		
		
		
		
		
		
		
		
		
		
		
		

							  <li onClick="window.open('game.php?page=galaxy', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item4"></div>Galaxie</span>
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


	<form action="?page=galaxy" method="post" id="galaxy_form">
	<input type="hidden" id="auto" value="dr">
	<table style="min-width:324px;width:324px;">
		<tr>
			<td class="transparent">
				<table>
					<tr>
						<th colspan="3">Galáxia</th>
					</tr>
					<tr>
						<td><input type="button" name="galaxyLeft" value="&lt;-" onclick="galaxy_submit('galaxyLeft')"></td>
						<td><input type="text" name="galaxy" value="<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
" size="5" maxlength="3" tabindex="1"></td>
						<td><input type="button" name="galaxyRight" value="-&gt;" onclick="galaxy_submit('galaxyRight')"></td>
					</tr>
				</table>
			</td>
			<td class="transparent">
				<table>
					<tr>
						<th colspan="3">Sistema</th>
					</tr>
					<tr>
						<td><input type="button" name="systemLeft" value="&lt;-" onclick="galaxy_submit('systemLeft')"></td>
						<td><input type="text" name="system" value="<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
" size="5" maxlength="3" tabindex="2"></td>
						<td><input type="button" name="systemRight" value="-&gt;" onclick="galaxy_submit('systemRight')"></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="background-color:transparent;border:0px;" colspan="2"> 
				<input type="submit" value="Exibir">
			</td>
		</tr>
	</table>
	</form>
	<?php if ($_smarty_tpl->tpl_vars['action']->value=='sendMissle'){?>
    <form action="?page=fleetMissile" method="post">
	<input type="hidden" name="galaxy" value="<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
">
	<input type="hidden" name="system" value="<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
">
	<input type="hidden" name="planet" value="<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
">
	<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
	<table class="table569">
		<tr>
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_missil_launch'];?>
 [<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['missile_count']->value;?>
 <input type="text" name="SendMI" size="2" maxlength="7"></td>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_objective'];?>
: 
				<?php echo smarty_function_html_options(array('name'=>'Target','options'=>$_smarty_tpl->tpl_vars['MissleSelector']->value),$_smarty_tpl);?>

			</td>
		</tr>
		<tr>
			<th colspan="2" style="text-align:center;"><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_missil_launch_action'];?>
"></th>
		</tr>
	</table>
	</form>
    <?php }?>
	<table class="table569">
    <tr>
		<th colspan="8">Sistema <?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
</th>
	</tr>
	<tr>
		<th style="white-space: nowrap">Pos.</th>
		<th style="white-space: nowrap">Planeta</th>
		<th style="white-space: nowrap">Nome (Atividade)</th>
		<th style="white-space: nowrap">Lua</th>
		<th style="white-space: nowrap">CD</th>
		<th style="white-space: nowrap">Jogador (Estado)</th>
		<th style="white-space: nowrap">Aliança</th>
		<th style="white-space: nowrap">Ações</th>
	</tr>
    <?php $_smarty_tpl->tpl_vars['planet'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['planet']->step = 1;$_smarty_tpl->tpl_vars['planet']->total = (int)ceil(($_smarty_tpl->tpl_vars['planet']->step > 0 ? $_smarty_tpl->tpl_vars['max_planets']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['max_planets']->value)+1)/abs($_smarty_tpl->tpl_vars['planet']->step));
if ($_smarty_tpl->tpl_vars['planet']->total > 0){
for ($_smarty_tpl->tpl_vars['planet']->value = 1, $_smarty_tpl->tpl_vars['planet']->iteration = 1;$_smarty_tpl->tpl_vars['planet']->iteration <= $_smarty_tpl->tpl_vars['planet']->total;$_smarty_tpl->tpl_vars['planet']->value += $_smarty_tpl->tpl_vars['planet']->step, $_smarty_tpl->tpl_vars['planet']->iteration++){
$_smarty_tpl->tpl_vars['planet']->first = $_smarty_tpl->tpl_vars['planet']->iteration == 1;$_smarty_tpl->tpl_vars['planet']->last = $_smarty_tpl->tpl_vars['planet']->iteration == $_smarty_tpl->tpl_vars['planet']->total;?>
	<tr>
    <?php if (!isset($_smarty_tpl->tpl_vars['GalaxyRows']->value[$_smarty_tpl->tpl_vars['planet']->value])){?>
		<td>
			<a href="?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=7"><?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
</a>
		</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    <?php }elseif($_smarty_tpl->tpl_vars['GalaxyRows']->value[$_smarty_tpl->tpl_vars['planet']->value]===false){?>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>

		</td>
        <td></td>
        <td style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_planet_destroyed'];?>
</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    <?php }else{ ?>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>

		</td>
        <?php $_smarty_tpl->tpl_vars['currentPlanet'] = new Smarty_variable($_smarty_tpl->tpl_vars['GalaxyRows']->value[$_smarty_tpl->tpl_vars['planet']->value], true, 0);?>
		<td>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:220px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_planet'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['name'];?>
 [<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th></tr><tr><td style='width:80px'><img src='<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['image'];?>
.jpg' height='75' width='75'></td><td><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][6]){?><a href='javascript:doit(6,<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['id'];?>
);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][6];?>
</a><br><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['phalanx']){?><a href='javascript:OpenPopup(&quot;?page=phalanx&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&quot;, &quot;&quot;, 640, 510);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_phalanx'];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][1]){?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=1'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][1];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][5]){?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=5'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][5];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][4]){?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=4'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][4];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][3]){?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=3'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][3];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][10]){?><a href='?page=galaxy&amp;action=sendMissle&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][10];?>
</a><br><?php }?></td></tr></table>">
				<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['image'];?>
.jpg" height="30" width="30" alt="">
			</a>
		</td>
		<td style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['lastActivity'];?>
</td>
		<td style="white-space: nowrap;">
			<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['moon']){?>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_moon'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['name'];?>
 [<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th></tr><tr><td style='width:80px'><img src='<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/mond.jpg' height='75' width='75'></td><td><table style='width:100%'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_features'];?>
</th></tr><tr><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_diameter'];?>
</td><td><?php echo pretty_number($_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['diameter']);?>
</td></tr><tr><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_temperature'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['temp_min'];?>
</td></tr><tr><th colspan=2><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_actions'];?>
</th></tr><tr><td colspan='2'><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][1]){?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=1'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][1];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][3]){?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=3'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][3];?>
</a><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][3]){?><br><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=4'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][4];?>
</a><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][5]){?><br><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=5'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][5];?>
</a><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][6]){?><br><a href='javascript:doit(6,<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['id'];?>
);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][6];?>
</a><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][9]){?><br><br><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=9'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][9];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][10]){?><a href='?page=galaxy&amp;action=sendMissle&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;type=3'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][10];?>
</a><br><?php }?></td></tr></table></td></tr></table>">
				<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_mond.jpg" height="22" width="22" alt="<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['name'];?>
">
			</a>
			<?php }?>
		</td>
		<td style="white-space: nowrap;">
        <?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['debris']){?>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_debris_field'];?>
 [<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th></tr><tr><td style='width:80px'><img src='<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/debris.jpg' height='75' style='width:75'></td><td><table style='width:100%'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_resources'];?>
:</th></tr><tr><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][901];?>
: </td><td><?php echo pretty_number($_smarty_tpl->tpl_vars['currentPlanet']->value['debris']['metal']);?>
</td></tr><tr><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][902];?>
: </td><td><?php echo pretty_number($_smarty_tpl->tpl_vars['currentPlanet']->value['debris']['crystal']);?>
</td></tr><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][8]){?><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_actions'];?>
</th></tr><tr><td colspan='2'><a href='javascript:doit(8, <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['id'];?>
);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][8];?>
</a></td></tr><?php }?></table></td></tr></table>">
			<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/debris.jpg" height="22" width="22" alt="">
			</a>
        <?php }?>
		</td>
		<td>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['playerrank'];?>
</th></tr><tr><?php if (!$_smarty_tpl->tpl_vars['currentPlanet']->value['ownPlanet']){?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['user']['isBuddy']){?><tr><td><a href='#' onclick='return Dialog.Buddy(<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['id'];?>
)'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_buddy_request'];?>
</a></td></tr><?php }?><tr><td><a href='#' onclick='return Dialog.Playercard(<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['id'];?>
);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_playercard'];?>
</a></td></tr><?php }?><tr><td><a href='?page=statistics&amp;who=1&amp;start=<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['rank'];?>
'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_see_on_stats'];?>
</a></td></tr></table>">
				<span class="<?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['class']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value){
$_smarty_tpl->tpl_vars['class']->_loop = true;
 $_smarty_tpl->tpl_vars['class']->index++;
 $_smarty_tpl->tpl_vars['class']->first = $_smarty_tpl->tpl_vars['class']->index === 0;
?><?php if (!$_smarty_tpl->tpl_vars['class']->first){?> <?php }?>galaxy-username-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php } ?> galaxy-username"><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['username'];?>
</span>
				<?php if (!empty($_smarty_tpl->tpl_vars['currentPlanet']->value['user']['class'])){?>
				<span>(</span><?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['class']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value){
$_smarty_tpl->tpl_vars['class']->_loop = true;
 $_smarty_tpl->tpl_vars['class']->index++;
 $_smarty_tpl->tpl_vars['class']->first = $_smarty_tpl->tpl_vars['class']->index === 0;
?><?php if (!$_smarty_tpl->tpl_vars['class']->first){?>&nbsp;<?php }?><span class="galaxy-short-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 galaxy-short"><?php echo $_smarty_tpl->tpl_vars['ShortStatus']->value[$_smarty_tpl->tpl_vars['class']->value];?>
</span><?php } ?><span>)</span>
				<?php }?>
			</a>
		</td>
		<td style="white-space: nowrap;">
			<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']){?>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_alliance'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['member'];?>
</th></tr><td><table><tr><td><a href='?page=alliance&amp;mode=info&amp;id=<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_alliance_page'];?>
</a></td></tr><tr><td><a href='?page=statistics&amp;start=<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['rank'];?>
&amp;who=2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_see_on_stats'];?>
</a></td></tr><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['web']){?><tr><td><a href='<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['web'];?>
' target='allyweb'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_alliance_web_page'];?>
</td></tr><?php }?></table></td></table>">
				<span class="<?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['class']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value){
$_smarty_tpl->tpl_vars['class']->_loop = true;
 $_smarty_tpl->tpl_vars['class']->index++;
 $_smarty_tpl->tpl_vars['class']->first = $_smarty_tpl->tpl_vars['class']->index === 0;
?><?php if (!$_smarty_tpl->tpl_vars['class']->first){?> <?php }?>galaxy-alliance-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php } ?> galaxy-alliance"><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['tag'];?>
</span>
			</a>
			<?php }else{ ?>-<?php }?>
		</td>
		<td style="white-space: nowrap;">
			<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']){?>
				<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']['esp']){?>
				<a href="javascript:doit(6,<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['id'];?>
,<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['spyShips']->value), ENT_QUOTES, 'UTF-8', true);?>
)">
					<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/e.gif" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_spy'];?>
" alt="">
				</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']['message']){?>
				<a href="#" onclick="return Dialog.PM(<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['id'];?>
)">
					<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/m.gif" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['write_message'];?>
" alt="">
				</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']['buddy']){?>
                <a href="#" onclick="return Dialog.Buddy(<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['id'];?>
)">
					<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/b.gif" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_buddy_request'];?>
" alt="">
				</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']['missle']){?><a href="?page=galaxy&amp;action=sendMissle&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;type=1">
					<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/r.gif" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_missile_attack'];?>
" alt="">
				</a><?php }?>
			<?php }else{ ?>-<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['phalanx']){?><a class="textForBlind" href="#" onclick="OpenPopup('?page=phalanx&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1','',640,510);return false;"><span><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_phalanx'];?>
</span></a><?php }?>
		</td>
	<?php }?>
	</tr>
	<?php }} ?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['max_planets']->value+1;?>
</td>
		<td colspan="7"><a href="?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['max_planets']->value+1;?>
&amp;planettype=1&amp;target_mission=15">Área profunda da Galáxia</a></td>
	</tr>
	<tr>
		<td colspan="6">(<?php echo $_smarty_tpl->tpl_vars['planetcount']->value;?>
)</td>
		<td colspan="2">
			<a class="tooltip" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'>Legenda</td></tr><tr><td style='width:220px'>Jogador forte</td><td><span class='galaxy-short-strong'>F</span></td></tr><tr><td style='width:220px'>Jogador fraco</td><td><span class='galaxy-short-noob'>f</span></td></tr><tr><td style='width:220px'>Modo de Férias</td><td><span class='galaxy-short-vacation'>mf</span></td></tr><tr><td style='width:220px'>Banido / Suspenso</td><td><span class='galaxy-short-banned'>B</span></td></tr><tr><td style='width:220px'>7 Dias inativo</td><td><span class='galaxy-short-inactive'>i</span></td></tr><tr><td style='width:220px'>28 Dias inativo</td><td><span class='galaxy-short-longinactive'>I</span></td></tr></table>">Legenda</a> 
		</td>
	</tr>
	<tr>
		<td colspan="3"><span id="missiles"><?php echo pretty_number($_smarty_tpl->tpl_vars['currentmip']->value);?>
</span> Misseis Disponiveis</td>
		<td colspan="5"><span id="slots"><?php echo $_smarty_tpl->tpl_vars['maxfleetcount']->value;?>
</span>/<?php echo $_smarty_tpl->tpl_vars['fleetmax']->value;?>
 Slots de Fleet</td>
	</tr>
	<tr>
		<td colspan="3">
			<span id="elementID210"><?php echo pretty_number($_smarty_tpl->tpl_vars['spyprobes']->value);?>
</span> Sondas de Espionagem
		</td>
		<td colspan="3">
			<span id="elementID209"><?php echo pretty_number($_smarty_tpl->tpl_vars['recyclers']->value);?>
</span> Reciclador
		</td>
		<td colspan="2">
			<span id="elementID219"><?php echo pretty_number($_smarty_tpl->tpl_vars['grecyclers']->value);?>
</span> Reciclador de Batalha
		</td>
	</tr>
	<tr style="display: none;" id="fleetstatusrow">
		<th colspan="8">Frotas
	</tr>
	</table>
	<script type="text/javascript">
		status_ok		= 'Feito';
		status_fail		= 'Erro';
		MaxFleetSetting = <?php echo $_smarty_tpl->tpl_vars['settings_fleetactions']->value;?>
;
	</script>
</div>
</div>
<?php  $_smarty_tpl->tpl_vars['cronjob'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cronjob']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cronjobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cronjob']->key => $_smarty_tpl->tpl_vars['cronjob']->value){
$_smarty_tpl->tpl_vars['cronjob']->_loop = true;
?><img src="cronjob.php?cronjobID=<?php echo $_smarty_tpl->tpl_vars['cronjob']->value;?>
" alt=""><?php } ?>
<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>