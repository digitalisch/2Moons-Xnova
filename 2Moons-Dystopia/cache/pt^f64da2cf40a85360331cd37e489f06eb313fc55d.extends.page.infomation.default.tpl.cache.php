<?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 00:55:22
         compiled from "C:\Wamp\www\Dystopia\styles\templates\game\page.infomation.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2907454b5b06a275879-84439181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f64da2cf40a85360331cd37e489f06eb313fc55d' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\page.infomation.default.tpl',
      1 => 1421193314,
      2 => 'file',
    ),
    'a5c71eba35cd3456cd703e148117dd4839f0b0b3' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\layout.popup.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
    'bd0460dc332afc3e5badef19cbdec6f14b205e68' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\main.header.tpl',
      1 => 1421190463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2907454b5b06a275879-84439181',
  'function' => 
  array (
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b5b06a64e2c6_64929055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b5b06a64e2c6_64929055')) {function content_54b5b06a64e2c6_64929055($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('bodyclass'=>"popup"), 0, '2907454b5b06a275879-84439181');
content_54b5b06a2b6492_20291082($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>
<div id="content">

			<div class="article clearfix" id="home_carousel_article">
				<div class="section parent_section clearfix col9 carousel_section"></div>
				<div class="article clearfix">
					<div class="section clearfix col9" id="home_news_section">
						<div class="container">
							<div class="creat_ally">
							</div>
							<h2 class="clearfix">
								<div class="icon"></div>
								<div>Infrastructures</div>
							</h2>
							<div class="news_articles">
																<br>
								<center>
									
								</center>
								<br>

<table style="width:100%;">
	<tbody>
	<tr>
		<th><?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'elementID\']->value];?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
</th>
	</tr>
	<tr>
		<td>
			<table>
				<tr>
					<td class="transparent" style="width:120px"><img width="120" height="120" src="<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
gebaeude/<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'elementID\']->value;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
.<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php if ($_smarty_tpl->tpl_vars[\'elementID\']->value>=600&&$_smarty_tpl->tpl_vars[\'elementID\']->value<=699){?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
jpg<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php }else{ ?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
gif<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php }?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
" alt=""></td>
					<td class="transparent left"><p><?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'longDescription\'][$_smarty_tpl->tpl_vars[\'elementID\']->value];?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
</p>
					<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'Bonus\']->value)){?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
<p>
					<b><?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'in_bonus\'];?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
</b><br>
					<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php  $_smarty_tpl->tpl_vars[\'elementBouns\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'elementBouns\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'BonusName\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'Bonus\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'elementBouns\']->key => $_smarty_tpl->tpl_vars[\'elementBouns\']->value){
$_smarty_tpl->tpl_vars[\'elementBouns\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'BonusName\']->value = $_smarty_tpl->tpl_vars[\'elementBouns\']->key;
?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php if ($_smarty_tpl->tpl_vars[\'elementBouns\']->value[0]<0){?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
-<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php }else{ ?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
+<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php }?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php if ($_smarty_tpl->tpl_vars[\'elementBouns\']->value[1]==0){?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo abs($_smarty_tpl->tpl_vars[\'elementBouns\']->value[0]*100);?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
%<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php }else{ ?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo floatval($_smarty_tpl->tpl_vars[\'elementBouns\']->value[0]);?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php }?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
 <?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bonus\'][$_smarty_tpl->tpl_vars[\'BonusName\']->value];?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
<br><?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php } ?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

					</p><?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php }?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
	
					<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'FleetInfo\']->value)){?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

					<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'FleetInfo\']->value[\'rapidfire\'][\'to\'])){?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
<p>
					<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php  $_smarty_tpl->tpl_vars[\'shoots\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'shoots\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'rapidfireID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'FleetInfo\']->value[\'rapidfire\'][\'to\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'shoots\']->key => $_smarty_tpl->tpl_vars[\'shoots\']->value){
$_smarty_tpl->tpl_vars[\'shoots\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'rapidfireID\']->value = $_smarty_tpl->tpl_vars[\'shoots\']->key;
?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

					<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'in_rf_again\'];?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
 <?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'rapidfireID\']->value];?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
: <span style="color:#00ff00"><?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'shoots\']->value);?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
</span><br>
					<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php } ?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

					</p><?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php }?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

					<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'FleetInfo\']->value[\'rapidfire\'][\'from\'])){?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
<p>
					<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php  $_smarty_tpl->tpl_vars[\'shoots\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'shoots\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'rapidfireID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'FleetInfo\']->value[\'rapidfire\'][\'from\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'shoots\']->key => $_smarty_tpl->tpl_vars[\'shoots\']->value){
$_smarty_tpl->tpl_vars[\'shoots\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'rapidfireID\']->value = $_smarty_tpl->tpl_vars[\'shoots\']->key;
?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

					<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'in_rf_from\'];?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
 <?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'rapidfireID\']->value];?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
: <span style="color:#ff0000"><?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'shoots\']->value);?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
</span><br>
					<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php } ?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

					</p><?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php }?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

					<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php }?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
				
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'productionTable\']->value[\'production\'])){?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->getSubTemplate ("shared.information.production.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php }?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'productionTable\']->value[\'storage\'])){?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->getSubTemplate ("shared.information.storage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php }?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'FleetInfo\']->value)){?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->getSubTemplate ("shared.information.shipInfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php }?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'gateData\']->value)){?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->getSubTemplate ("shared.information.gate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php }?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'MissileList\']->value)){?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->getSubTemplate ("shared.information.missiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php }?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

</div>
<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 00:55:22
         compiled from "C:\Wamp\www\Dystopia\styles\templates\game\main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b5b06a2b6492_20291082')) {function content_54b5b06a2b6492_20291082($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_info'];?>
 - <?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
 - <?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

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
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
, <?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
, <?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
, <?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
, <?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
, <?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
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
	<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/game/<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php } ?>/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:2907454b5b06a275879-84439181%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:2907454b5b06a275879-84439181%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php }} ?>