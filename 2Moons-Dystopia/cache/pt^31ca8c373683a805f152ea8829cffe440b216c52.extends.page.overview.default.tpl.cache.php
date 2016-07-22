<?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 00:58:04
         compiled from "C:\Wamp\www\Dystopia\styles\templates\game\page.overview.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:760754b59a85002517-23704138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31ca8c373683a805f152ea8829cffe440b216c52' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\page.overview.default.tpl',
      1 => 1421191781,
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
  ),
  'nocache_hash' => '760754b59a85002517-23704138',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b59a863bb255_32296834',
  'variables' => 
  array (
    'hasAdminAccess' => 1,
    'LNG' => 1,
    'cronjobs' => 1,
    'cronjob' => 1,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b59a863bb255_32296834')) {function content_54b59a863bb255_32296834($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('bodyclass'=>"full"), 0, '760754b59a85002517-23704138');
content_54b5b10c1eafe4_10165072($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>
<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php if ($_smarty_tpl->tpl_vars[\'hasAdminAccess\']->value){?>/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>

<div class="globalWarning">
<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_1\'];?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
 <a id="drop-admin"><?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_link\'];?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
</a><?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_2\'];?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>

</div>
<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php }?>/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>

<?php /*  Call merged included template "main.navigation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '760754b59a85002517-23704138');
content_54b5b10c3e74a6_44886480($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.navigation.tpl" */?>
<?php /*  Call merged included template "main.topnav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '760754b59a85002517-23704138');
content_54b5b10c3f5cc4_23063737($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.topnav.tpl" */?>
<div id="content">

					<div class="article clearfix">
						<div class="section clearfix col9" id="home_news_section">
							<div class="container">
								<h2 class="clearfix">
									<div class="icon"></div>
									<div>Salle de Contrôle</div>
								</h2>
								<div class="news_articles">
										<div class="news_article">
											<div class="article_content">
												<div class="title_block dark_hatch_container">
													<h3 style="color: #FFF; line-height: 16px;">
														<table style="width: 100%; margin-top: 6px;">
															<tr>
															
																																	
																<td class="transparent" style="text-align : left; box-shadow: 0px 0px 0px 0px;">
																	
																	
																	<a href="#" onclick="return Dialog.PlanetAction();" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_planetmenu'];?>
"><?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'type_planet\'][$_smarty_tpl->tpl_vars[\'planet_type\']->value];?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
 "<span class="planetname"><?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'planetname\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
</span>"</a> (<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
) <?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'messages\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>

																</td>
																
																<td class="servertime" style="text-align : right; box-shadow: 0px 0px 0px 0px; background: transparent; border: 0px; border-radius: 0px;">
																	<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'servertime\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>

																</td>
															</tr>
														</table>
													</h3>									
												</div>
												
													



															 															 
																	 <!-- A MODIFIER EN FONCTION DES NEWS -->
																		<style type="text/css">
																			 #fondoverview{
																					background-image: url(http://dystopiaonline.fr/v1.1.0/styles/resource/images/planeten/fond.png);
																			}
																		</style>
																	<!-- A MODIFIER EN FONCTION DES NEWS -->
															 													<div style="position: relative;">
														<div id="overview" style="padding: 2.4px;">


															<table id="tableoverview2" class="table519">	
																<tr>

																	<td class="transparent"></td>

																</tr>
															</table>


	
															<table id="tableoverview" class="table519" style="
																margin-top: 200px;
																height: 120px;
																width: 600px;
																float: right;
																margin-right: 10px;
															">		


																<tr>

																	<td id="tableoverviewtd"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_diameter'];?>
: </td>

																	<td id="tableoverviewtd" colspan="2"><?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet_diameter\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_distance_unit'];?>
 (<a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_developed_fields'];?>
"><?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet_field_current\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
</a> / <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_max_developed_fields'];?>
"><?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet_field_max\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
</a> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_fields'];?>
)</td>

																</tr>

																<tr>

																	<td id="tableoverviewtd"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_temperature'];?>
:</td>

																	<td id="tableoverviewtd" colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_aprox'];?>
 <?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet_temp_min\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_temp_unit'];?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_to'];?>
 <?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet_temp_max\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_temp_unit'];?>
</td>

																</tr>

																<tr>

																	<td id="tableoverviewtd"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_position'];?>
:</td>

																	<td id="tableoverviewtd" colspan="2"><a href="game.php?page=galaxy&amp;galaxy=<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
">[<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
:<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
:<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
]</a></td>

																</tr>

																
																<tr>

																	<td id="tableoverviewtd"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_points'];?>
:</td>

																	<td id="tableoverviewtd" colspan="2"><?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'rankInfo\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
</td>

																</tr>

																															</table>
															
															
															<br>
															
																<table id="tableoverview" class="table519" style="
																	background-color: rgba(0, 0, 0, 0.8);
																	border-radius: 0px;
																	padding: 10px;
																	margin: 0px;
																	width: 100%;
																">	
																

																

															</table>



														<div id="activ">

															<table>
															
																																																												</table>


														</div>


														
														
															<table style="position: absolute;
															top: 5px;
															right: 6px;
															background-color: rgba(0, 0, 0, 0.79);
															border-radius: 0px 0px 0px 3px;
															padding: 6px;">
																<tr>
																		
																	</td>
																</tr>
															</table>
														
															
															

														
														</div>
														<div id="fondoverview"></div>
													</div>






														<div id="lune" style="text-align: center;">
																													</div>
		
		


														<br>
														<table class="table519">

																																
														</table>



														


															
														








													
												
											</div>
										</div>						                

								</div>
							</div>
						</div>
					</div>


</div>
<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php  $_smarty_tpl->tpl_vars[\'cronjob\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'cronjob\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cronjobs\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'cronjob\']->key => $_smarty_tpl->tpl_vars[\'cronjob\']->value){
$_smarty_tpl->tpl_vars[\'cronjob\']->_loop = true;
?>/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
<img src="cronjob.php?cronjobID=<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'cronjob\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
" alt=""><?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php } ?>/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>

<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 00:58:04
         compiled from "C:\Wamp\www\Dystopia\styles\templates\game\main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b5b10c1eafe4_10165072')) {function content_54b5b10c1eafe4_10165072($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_overview'];?>
 - <?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
 - <?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<?php if (!empty($_smarty_tpl->tpl_vars['goto']->value)){?>
	<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['gotoinsec']->value;?>
;URL=<?php echo $_smarty_tpl->tpl_vars['goto']->value;?>
">
	<?php }?>
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
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
, <?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
, <?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
, <?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
, <?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
, <?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
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
	<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>

	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/game/<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php } ?>/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 00:58:04
         compiled from "C:\Wamp\www\Dystopia\styles\templates\game\main.navigation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b5b10c3e74a6_44886480')) {function content_54b5b10c3e74a6_44886480($_smarty_tpl) {?>
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 00:58:04
         compiled from "C:\Wamp\www\Dystopia\styles\templates\game\main.topnav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b5b10c3f5cc4_23063737')) {function content_54b5b10c3f5cc4_23063737($_smarty_tpl) {?><div id="header" style="margin-left: 0px; ">
	
	
	
	
	
	
	
	
	
	
	
	
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
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_metal" data-real="<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'metal\']->value);?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'metal\']->value);?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
"><?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'metal\']->value);?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
</td>
																
																	
																																			<td class="res_max" id="max_metal" data-real="<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'metal\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
">/<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'metal_max\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
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
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_crystal" data-real="<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'crystal\']->value);?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'crystal\']->value);?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
"><?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'crystal\']->value);?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
</td>
																
																	
																																			<td class="res_max" id="max_crystal" data-real="<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'crystal\']->value);?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
">/<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'crystal_max\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
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
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_deuterium" data-real="<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'deuterium\']->value);?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'deuterium\']->value);?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
"><?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'deuterium\']->value);?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
</td>
																
																	
																																			<td class="res_max" id="max_deuterium" data-real="<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'deuterium\']->value);?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
">/<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'deuterium_max\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
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
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_nanite" data-real="0" data-tooltip-content="0"><?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo $_smarty_tpl->tpl_vars[\'darkmatter\']->value;?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
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
																	<span style=""><?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'energy_used\']->value);?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
/<?php echo '/*%%SmartyNocache:760754b59a85002517-23704138%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'energy\']->value);?>
/*/%%SmartyNocache:760754b59a85002517-23704138%%*/';?>
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
		<div id="article" class="index"><?php }} ?>