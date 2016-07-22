<?php /*%%SmartyHeaderCode:1811273251547d9f9f0a7680-57690856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a828639b76c6b71d04dc98b6ce863b2708696aac' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/page.battleHall.default.tpl',
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
  'nocache_hash' => '1811273251547d9f9f0a7680-57690856',
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5485b877ef1bb9_06646332',
  'has_nocache_code' => true,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5485b877ef1bb9_06646332')) {function content_5485b877ef1bb9_06646332($_smarty_tpl) {?><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_html_options')) include '/home/qwatakayean/public_html/darkness/includes/libs/Smarty/plugins/function.html_options.php';
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
	<link rel="stylesheet" type="text/css" href="styles/resource/css/login/main.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['siteTitleBattleHall'];?>
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
<body id="battleHall" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
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
						<td class="box-inner-header-center"><h1><?php echo $_smarty_tpl->tpl_vars['LNG']->value['siteTitleBattleHall'];?>
</h1></td>
						<td class="box-inner-header-right"></td>
					</tr>
					<tr class="box-inner-content">
						<td class="box-inner-content-left"></td>
						<td class="box-inner-content-center">
<?php if ($_smarty_tpl->tpl_vars['isMultiUniverse']->value){?><p>
<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['universeSelect']->value,'selected'=>$_smarty_tpl->tpl_vars['UNI']->value,'class'=>"changeUni",'id'=>"universe",'name'=>"universe"),$_smarty_tpl);?>

</p><?php }?>
<table>
<tr>
	<th style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_platz'];?>
</th>
	<th style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_owners'];?>
</th>
	<th style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_datum'];?>
</th>
	<th style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_units'];?>
</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['hallRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hallRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hallList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['hallRow']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['hallRow']->key => $_smarty_tpl->tpl_vars['hallRow']->value){
$_smarty_tpl->tpl_vars['hallRow']->_loop = true;
 $_smarty_tpl->tpl_vars['hallRow']->iteration++;
?>
<tr>
	<td><?php echo $_smarty_tpl->tpl_vars['hallRow']->iteration;?>
</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hallRow']->value['result']=="a"){?>
	<span style="color:#00FF00"><?php echo $_smarty_tpl->tpl_vars['hallRow']->value['attacker'];?>
</span><span style="color:#FFFFFF"><b> VS </b></span><span style="color:#FF0000"><?php echo $_smarty_tpl->tpl_vars['hallRow']->value['defender'];?>
</span>
	<?php }elseif($_smarty_tpl->tpl_vars['hallRow']->value['result']=="r"){?>
	<span style="color:#FF0000"><?php echo $_smarty_tpl->tpl_vars['hallRow']->value['attacker'];?>
</span><span style="color:#FFFFFF"><b> VS </b></span><span style="color:#00FF00"><?php echo $_smarty_tpl->tpl_vars['hallRow']->value['defender'];?>
</span>
	<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['hallRow']->value['attacker'];?>
<b> VS </b><?php echo $_smarty_tpl->tpl_vars['hallRow']->value['defender'];?>

	<?php }?>
	</td>
	<td><?php echo $_smarty_tpl->tpl_vars['hallRow']->value['time'];?>
</td>
	<td><?php echo pretty_number($_smarty_tpl->tpl_vars['hallRow']->value['units']);?>
</td>
</tr>
<?php } ?>
<tr>
<td colspan="4"><p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_legende'];?>
<span style="color:#00FF00"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_gewinner'];?>
</span><span style="color:#FF0000"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_verlierer'];?>
</span></p></td>
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
<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>