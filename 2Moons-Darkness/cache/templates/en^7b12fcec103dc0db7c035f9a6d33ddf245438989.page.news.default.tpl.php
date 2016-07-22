<?php /*%%SmartyHeaderCode:250279023548015c5241a54-67917907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b12fcec103dc0db7c035f9a6d33ddf245438989' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/page.news.default.tpl',
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
    '73d3d4cdb3713e07994bdce36b26f7a080732fba' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/main.footer.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250279023548015c5241a54-67917907',
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_548eb252cbee36_39780374',
  'has_nocache_code' => true,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548eb252cbee36_39780374')) {function content_548eb252cbee36_39780374($_smarty_tpl) {?><!DOCTYPE html>
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
	<link rel="stylesheet" type="text/css" href="styles/resource/css/login/main.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['siteTitleNews'];?>
 - <?php echo $_smarty_tpl->tpl_vars['gameName']->value;?>
</title>
	<meta name="generator" content="2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
	<!-- 
		This website is powered by 2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<meta name="keywords" content="Weltraum Browsergame, XNova, 2Moons, Space, Private, Server, Speed">
	<meta name="description" content="2Moons Browsergame powerd by http://2moons.cc/"> <!-- Noob Check :) -->
	<!--[if lt IE 9]>
	<script src="scripts/base/html5.js"></script>
	<![endif]-->
	<script src="scripts/base/jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script src="scripts/base/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script src="scripts/base/jquery.fancybox.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script src="scripts/login/main.js"></script>
	<script></script>
		
</head>
<body id="news" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="page"><header>
	<nav>
		<ul id="menu">
			<li><a href="index.php"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_index'];?>
</a></li>
			<li><a href="index.php?page=board" target="board"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['forum'];?>
</a></li>
			<li><a href="index.php?page=news"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_news'];?>
</a></li>
			<li><a href="index.php?page=rules"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_rules'];?>
</a></li>
			<li><a href="index.php?page=battleHall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_battlehall'];?>
</a></li>
			<li><a href="index.php?page=banList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_banlist'];?>
</a></li>
			<li><a href="index.php?page=disclamer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_disclamer'];?>
</a></li>
		</ul>
	</nav>
	<nav>
		<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
		<ul id="language">
		<?php  $_smarty_tpl->tpl_vars['langName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['langName']->_loop = false;
 $_smarty_tpl->tpl_vars['langKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['langName']->key => $_smarty_tpl->tpl_vars['langName']->value){
$_smarty_tpl->tpl_vars['langName']->_loop = true;
 $_smarty_tpl->tpl_vars['langKey']->value = $_smarty_tpl->tpl_vars['langName']->key;
?>
		<li><a href="?lang=<?php echo $_smarty_tpl->tpl_vars['langKey']->value;?>
" rel="alternate" hreflang="<?php echo $_smarty_tpl->tpl_vars['langKey']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['langName']->value;?>
"><span class="flags <?php echo $_smarty_tpl->tpl_vars['langKey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['langName']->value;?>
</span></a></li>
		<?php } ?>
		</ul>
		<?php }?>
	</nav>
</header><div id="content">
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
						<td class="box-inner-header-center"><h1><?php echo $_smarty_tpl->tpl_vars['LNG']->value['siteTitleNews'];?>
</h1></td>
						<td class="box-inner-header-right"></td>
					</tr>
					<tr class="box-inner-content">
						<td class="box-inner-content-left"></td>
						<td class="box-inner-content-center">
<?php  $_smarty_tpl->tpl_vars['newsRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newsList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['newsRow']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['newsRow']->key => $_smarty_tpl->tpl_vars['newsRow']->value){
$_smarty_tpl->tpl_vars['newsRow']->_loop = true;
 $_smarty_tpl->tpl_vars['newsRow']->index++;
 $_smarty_tpl->tpl_vars['newsRow']->first = $_smarty_tpl->tpl_vars['newsRow']->index === 0;
?>
<?php if (!$_smarty_tpl->tpl_vars['newsRow']->first){?><hr><?php }?>
<h2><?php echo $_smarty_tpl->tpl_vars['newsRow']->value['title'];?>
</h2><br>
<div class="info"><?php echo $_smarty_tpl->tpl_vars['newsRow']->value['from'];?>
</div>
<br><div><p><?php echo $_smarty_tpl->tpl_vars['newsRow']->value['text'];?>
</p></div>
<?php }
if (!$_smarty_tpl->tpl_vars['newsRow']->_loop) {
?>
<h1><?php echo $_smarty_tpl->tpl_vars['LNG']->value['news_does_not_exist'];?>
</h1>
<?php } ?>
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
<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>