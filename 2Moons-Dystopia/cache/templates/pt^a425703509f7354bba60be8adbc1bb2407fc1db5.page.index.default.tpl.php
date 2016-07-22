<?php /*%%SmartyHeaderCode:3148454b59a7beb3052-62399417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a425703509f7354bba60be8adbc1bb2407fc1db5' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\login\\page.index.default.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
    'e78a4662a151c879cf18b6eabe56ab14b136670d' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\login\\layout.light.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
    'dc8537b1c410a54082e920edb862787fbfddc0b1' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\login\\main.header.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
    '8590aef66f5d5a7fb66ce8ca6ba692ec1a7e399a' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\login\\main.navigation.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
    'dd77a7ba61439f02fe2606d780aa330834cb3366' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\login\\main.footer.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3148454b59a7beb3052-62399417',
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b59a7c458126_54840641',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b59a7c458126_54840641')) {function content_54b59a7c458126_54840641($_smarty_tpl) {?><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_html_options')) include 'C:\\Wamp\\www\\Dystopia\\includes\\libs\\Smarty\\plugins\\function.html_options.php';
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
	<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['siteTitleIndex'];?>
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
	<script><?php if (isset($_smarty_tpl->tpl_vars['code']->value)){?>var loginError = <?php echo json_encode($_smarty_tpl->tpl_vars['code']->value);?>
;<?php }?></script>
	
<script><?php if ($_smarty_tpl->tpl_vars['code']->value){?>alert(<?php echo json_encode($_smarty_tpl->tpl_vars['code']->value);?>
);<?php }?></script>
	
</head>
<body id="overview" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
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
</header>
<section>
	<h1><?php echo $_smarty_tpl->tpl_vars['descHeader']->value;?>
</h1>
	<p class="desc"><?php echo $_smarty_tpl->tpl_vars['descText']->value;?>
</p>
	<p class="desc"><ul id="desc_list"><?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LNG']->value['gameInformations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?><li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li><?php } ?></ul></p>
</section>
<section>
	<table class="contentbox">
		<tr class="contentbox-header">
			<td class="contentbox-header-left"></td><td class="contentbox-header-center"></td><td class="contentbox-header-right"></td>
		</tr>
		<tr class="contentbox-content">
			<td class="contentbox-content-left"></td><td class="contentbox-content-center">
				<h1><?php echo $_smarty_tpl->tpl_vars['LNG']->value['loginHeader'];?>
</h1>
				<form id="login" name="login" action="index.php?page=login" data-action="index.php?page=login" method="post">
					<div class="row">
						<label for="universe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['universe'];?>
</label>
						<select name="uni" id="universe" class="changeAction"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['universeSelect']->value,'selected'=>$_smarty_tpl->tpl_vars['UNI']->value),$_smarty_tpl);?>
</select>
					</div>
					<div class="row">
						<label for="username"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['loginUsername'];?>
</label>
						<input name="username" id="username" type="text">
					</div>
					<div class="row">
						<label for="password"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['loginPassword'];?>
</label>
						<input name="password" id="password" type="password">
					</div>
					<div class="row">
						<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['loginButton'];?>
">
					</div>
				</form>
				<?php if ($_smarty_tpl->tpl_vars['facebookEnable']->value){?><a href="#" data-href="index.php?page=externalAuth&method=facebook" class="fb_login"><img src="styles/resource/images/facebook/fb-connect-large.png" alt=""></a><?php }?><!-- http://b.static.ak.fbcdn.net/rsrc.php/zB6N8/hash/4li2k73z.gif -->
				<br><span class="small"><?php echo $_smarty_tpl->tpl_vars['loginInfo']->value;?>
</span>
			</td><td class="contentbox-content-right"></td>
		</tr>
		<tr class="contentbox-footer">
			<td class="contentbox-footer-left"></td><td class="contentbox-footer-center"></td><td class="contentbox-footer-right"></td>
		</tr>
	</table>
</section>
<section>
	<div class="button-box">
		<div class="button-box-inner">
			<div class="button-important">
				<a href="index.php?page=register">
					<span class="button-left"></span>
					<span class="button-center"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['buttonRegister'];?>
</span>
					<span class="button-right"></span>
				</a>
			</div>
		</div>
	</div>
	<div class="button-box">
		<div class="button-box-inner">
			<?php if ($_smarty_tpl->tpl_vars['mailEnable']->value){?> 
			<div class="button multi">
				<a href="index.php?page=lostPassword">
					<span class="button-left"></span>
					<span class="button-center"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['buttonLostPassword'];?>
</span>
					<span class="button-right"></span>
				</a>
			</div>
			<div class="button multi">
			<?php }else{ ?>
			<div class="button">
			<?php }?>
				<a href="index.php?page=screens">
					<span class="button-left"></span>
					<span class="button-center"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['buttonScreenshot'];?>
</span>
					<span class="button-right"></span>
				</a>
			</div>
		</div>
	</div>
</section>

<footer>
	<a href="index.php?page=disclamer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_disclamer'];?>
</a><br>Powered by <a href="http://2moons.cc" title="2Moons" target="copy">2Moons</a> 2009-2013
</footer>
</div>
<div id="dialog" style="display:none;"></div>
<script>
var LoginConfig = {
	'isMultiUniverse': <?php echo json_encode($_smarty_tpl->tpl_vars['isMultiUniverse']->value);?>
,
	'referralEnable' : <?php echo json_encode($_smarty_tpl->tpl_vars['referralEnable']->value);?>
,
	'basePath' : <?php echo json_encode($_smarty_tpl->tpl_vars['basepath']->value);?>

};
</script>
<?php if ($_smarty_tpl->tpl_vars['analyticsEnable']->value){?>
<script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
<script type="text/javascript">
try{
var pageTracker = _gat._getTracker("<?php echo $_smarty_tpl->tpl_vars['analyticsUID']->value;?>
");
pageTracker._trackPageview();
} catch(err) {}</script>
<?php }?>
</body>
</html><?php }} ?>