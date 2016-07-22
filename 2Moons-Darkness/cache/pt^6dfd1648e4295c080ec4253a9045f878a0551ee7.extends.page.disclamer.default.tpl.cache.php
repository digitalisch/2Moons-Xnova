<?php /* Smarty version Smarty-3.1.13, created on 2014-12-07 11:28:59
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/login/page.disclamer.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1240175799548439fb886906-84097847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dfd1648e4295c080ec4253a9045f878a0551ee7' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/page.disclamer.default.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
    'b1b7daab2c52f36539733087c1ac60274106c2b0' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/layout.normal.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
    '5c883fa89672f4ec1d5882695d0292c565102d82' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/main.header.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
    '186f668ffff9f4b38c1f29ae816a403efbd2ee51' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/main.navigation.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1240175799548439fb886906-84097847',
  'function' => 
  array (
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_548439fbaeb376_26683277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548439fbaeb376_26683277')) {function content_548439fbaeb376_26683277($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '1240175799548439fb886906-84097847');
content_548439fb9167c5_14424215($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>
<?php /*  Call merged included template "main.navigation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '1240175799548439fb886906-84097847');
content_548439fb9f4e43_05779154($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.navigation.tpl" */?>
<div id="content">
<section>
	<table class="box-out">
		<tr class="box-out-header">
			<td class="box-out-header-left"></td>
			<td class="box-out-header-center"></td>
			<td class="box-out-header-right"></td>
		</tr>
		<tr class="box-out-content">
			<td class="box-out-content-left"></td>
			<td class="box-out-content-center">
				<table class="box-inner">
					<tr class="box-inner-header">
						<td class="box-inner-header-left"></td>
						<td class="box-inner-header-center"><h1><?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'siteTitleDisclamer\'];?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
</h1></td>
						<td class="box-inner-header-right"></td>
					</tr>
					<tr class="box-inner-content">
						<td class="box-inner-content-left"></td>
						<td class="box-inner-content-center">
<table id="disclamerTable">
	<tr>
		<td style="width:50%;text-align:left;"><?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'disclamerLabelAddress\'];?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
</td><td style="width:50%;text-align:left;"><?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'disclamerAddress\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
</td>
	</tr>
	<tr>
		<td style="width:50%;text-align:left;"><?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'disclamerLabelPhone\'];?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
</td><td style="width:50%;text-align:left;"><?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'disclamerPhone\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
</td>
	</tr>
	<tr>
		<td style="width:50%;text-align:left;"><?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'disclamerLabelMail\'];?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
</td><td style="width:50%;text-align:left;"><a href="<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'disclamerMail\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
"><?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'disclamerMail\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
</a></td>
	</tr>
	<tr>
		<td colspan="2" style="text-align:left;"><p><br></p></td>
	</tr>
	<tr>
		<td colspan="2"><?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'disclamerLabelNotice\'];?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
</td>
	</tr>
	<tr>
		<td colspan="2" style="text-align:left;"><?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'disclamerNotice\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
</td>
	</tr>
</table>
</td>
						<td class="box-inner-content-right"></td>
					</tr>
					<tr class="box-inner-footer">
						<td class="box-inner-footer-left"></td>
						<td class="box-inner-footer-center"></td>
						<td class="box-inner-footer-right"></td>
					</tr>
				</table>					
			</td>
			<td class="box-out-content-right"></td>
		</tr>
		<tr class="box-out-footer">
			<td class="box-out-footer-left"></td>
			<td class="box-out-footer-center"></td>
			<td class="box-out-footer-right"></td>
		</tr>
	</table>
</section>
</div>
<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-12-07 11:28:59
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/login/main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_548439fb9167c5_14424215')) {function content_548439fb9167c5_14424215($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<link rel="stylesheet" type="text/css" href="styles/resource/css/login/main.css?v=<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<title><?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'siteTitleDisclamer\'];?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
 - <?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'gameName\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<meta name="keywords" content="Weltraum Browsergame, XNova, 2Moons, Space, Private, Server, Speed">
	<meta name="description" content="2Moons Browsergame powerd by http://2moons.cc/"> <!-- Noob Check :) -->
	<!--[if lt IE 9]>
	<script src="scripts/base/html5.js"></script>
	<![endif]-->
	<script src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
"></script>
	<script src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
"></script>
	<script src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
"></script>
	<script src="scripts/login/main.js"></script>
	<script><?php if (isset($_smarty_tpl->tpl_vars['code']->value)){?>var loginError = <?php echo json_encode($_smarty_tpl->tpl_vars['code']->value);?>
;<?php }?></script>
		
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
">
	<div id="page"><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-12-07 11:28:59
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/login/main.navigation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_548439fb9f4e43_05779154')) {function content_548439fb9f4e43_05779154($_smarty_tpl) {?><header>
	<nav>
		<ul id="menu">
			<li><a href="index.php"><?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_index\'];?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
</a></li>
			<li><a href="index.php?page=board" target="board"><?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'forum\'];?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
</a></li>
			<li><a href="index.php?page=news"><?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_news\'];?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
</a></li>
			<li><a href="index.php?page=rules"><?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_rules\'];?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
</a></li>
			<li><a href="index.php?page=battleHall"><?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_battlehall\'];?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
</a></li>
			<li><a href="index.php?page=banList"><?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_banlist\'];?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
</a></li>
			<li><a href="index.php?page=disclamer"><?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_disclamer\'];?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
</a></li>
		</ul>
	</nav>
	<nav>
		<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php if (count($_smarty_tpl->tpl_vars[\'languages\']->value)>1){?>/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>

		<ul id="language">
		<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php  $_smarty_tpl->tpl_vars[\'langName\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'langName\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'langKey\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'languages\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'langName\']->key => $_smarty_tpl->tpl_vars[\'langName\']->value){
$_smarty_tpl->tpl_vars[\'langName\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'langKey\']->value = $_smarty_tpl->tpl_vars[\'langName\']->key;
?>/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>

		<li><a href="?lang=<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
" rel="alternate" hreflang="<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
" title="<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
"><span class="flags <?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
"><?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>
</span></a></li>
		<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php } ?>/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>

		</ul>
		<?php echo '/*%%SmartyNocache:1240175799548439fb886906-84097847%%*/<?php }?>/*/%%SmartyNocache:1240175799548439fb886906-84097847%%*/';?>

	</nav>
</header><?php }} ?>