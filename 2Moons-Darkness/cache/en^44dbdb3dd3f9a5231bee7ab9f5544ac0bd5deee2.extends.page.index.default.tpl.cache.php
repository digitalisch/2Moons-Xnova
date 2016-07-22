<?php /* Smarty version Smarty-3.1.13, created on 2014-12-04 08:03:11
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/login/page.index.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10717972235480153f7a9fe0-38621915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44dbdb3dd3f9a5231bee7ab9f5544ac0bd5deee2' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/page.index.default.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
    'd53166deb1a2a483a29158fe8fa6c1079885b330' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/layout.light.tpl',
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
  'nocache_hash' => '10717972235480153f7a9fe0-38621915',
  'function' => 
  array (
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5480153fd33f79_76564032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5480153fd33f79_76564032')) {function content_5480153fd33f79_76564032($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'/home/qwatakayean/public_html/darkness/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
<?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '10717972235480153f7a9fe0-38621915');
content_5480153f89da50_19361438($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>
<?php /*  Call merged included template "main.navigation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '10717972235480153f7a9fe0-38621915');
content_5480153f9946d3_00944572($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.navigation.tpl" */?>

<section>
	<h1><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'descHeader\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</h1>
	<p class="desc"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'descText\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</p>
	<p class="desc"><ul id="desc_list"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php  $_smarty_tpl->tpl_vars[\'info\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'info\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gameInformations\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'info\']->key => $_smarty_tpl->tpl_vars[\'info\']->value){
$_smarty_tpl->tpl_vars[\'info\']->_loop = true;
?>/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
<li><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'info\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</li><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php } ?>/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</ul></p>
</section>
<section>
	<table class="contentbox">
		<tr class="contentbox-header">
			<td class="contentbox-header-left"></td><td class="contentbox-header-center"></td><td class="contentbox-header-right"></td>
		</tr>
		<tr class="contentbox-content">
			<td class="contentbox-content-left"></td><td class="contentbox-content-center">
				User: Demo | Password: 123456demo<br>The Demo resets every 12 hours<br><br>
				<form id="login" name="login" action="index.php?page=login" data-action="index.php?page=login" method="post">
					<div class="row">
						<label for="universe"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'universe\'];?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</label>
						<select name="uni" id="universe" class="changeAction"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'universeSelect\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'UNI\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</select>
					</div>
					<div class="row">
						<label for="username"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'loginUsername\'];?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</label>
						<input name="username" id="username" type="text">
					</div>
					<div class="row">
						<label for="password"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'loginPassword\'];?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</label>
						<input name="password" id="password" type="password">
					</div>
					<div class="row">
						<input type="submit" value="<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'loginButton\'];?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
">
					</div>
				</form>
				<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php if ($_smarty_tpl->tpl_vars[\'facebookEnable\']->value){?>/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
<a href="#" data-href="index.php?page=externalAuth&method=facebook" class="fb_login"><img src="styles/resource/images/facebook/fb-connect-large.png" alt=""></a><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php }?>/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
<!-- http://b.static.ak.fbcdn.net/rsrc.php/zB6N8/hash/4li2k73z.gif -->
				<br><span class="small"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'loginInfo\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
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
					<span class="button-center"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'buttonRegister\'];?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</span>
					<span class="button-right"></span>
				</a>
			</div>
		</div>
	</div>
	<div class="button-box">
		<div class="button-box-inner">
			<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php if ($_smarty_tpl->tpl_vars[\'mailEnable\']->value){?>/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
 
			<div class="button multi">
				<a href="index.php?page=lostPassword">
					<span class="button-left"></span>
					<span class="button-center"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'buttonLostPassword\'];?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</span>
					<span class="button-right"></span>
				</a>
			</div>
			<div class="button multi">
			<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php }else{ ?>/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>

			<div class="button">
			<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php }?>/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>

				<a href="index.php?page=screens">
					<span class="button-left"></span>
					<span class="button-center"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'buttonScreenshot\'];?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</span>
					<span class="button-right"></span>
				</a>
			</div>
		</div>
	</div>
</section>

<?php /*  Call merged included template "main.footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '10717972235480153f7a9fe0-38621915');
content_5480153fcd4e43_75981427($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-12-04 08:03:11
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/login/main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5480153f89da50_19361438')) {function content_5480153f89da50_19361438($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<link rel="stylesheet" type="text/css" href="styles/resource/css/login/main.css?v=<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<title><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'siteTitleIndex\'];?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
 - <?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'gameName\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<meta name="keywords" content="Weltraum Browsergame, XNova, 2Moons, Space, Private, Server, Speed">
	<meta name="description" content="2Moons Browsergame powerd by http://2moons.cc/"> <!-- Noob Check :) -->
	<!--[if lt IE 9]>
	<script src="scripts/base/html5.js"></script>
	<![endif]-->
	<script src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
"></script>
	<script src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
"></script>
	<script src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
"></script>
	<script src="scripts/login/main.js"></script>
	<script><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'code\']->value)){?>/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
var loginError = <?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'code\']->value);?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
;<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php }?>/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</script>
	
<script><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php if ($_smarty_tpl->tpl_vars[\'code\']->value){?>/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
alert(<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'code\']->value);?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
);<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php }?>/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</script>
	
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
">
	<div id="page"><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-12-04 08:03:11
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/login/main.navigation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5480153f9946d3_00944572')) {function content_5480153f9946d3_00944572($_smarty_tpl) {?><header>
	<nav>
		<ul id="menu">
			<li><a href="index.php"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_index\'];?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</a></li>
			<li><a href="index.php?page=board" target="board"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'forum\'];?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</a></li>
			<li><a href="index.php?page=news"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_news\'];?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</a></li>
			<li><a href="index.php?page=rules"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_rules\'];?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</a></li>
			<li><a href="index.php?page=battleHall"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_battlehall\'];?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</a></li>
			<li><a href="index.php?page=banList"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_banlist\'];?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</a></li>
			<li><a href="index.php?page=disclamer"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_disclamer\'];?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</a></li>
		</ul>
	</nav>
	<nav>
		<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php if (count($_smarty_tpl->tpl_vars[\'languages\']->value)>1){?>/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>

		<ul id="language">
		<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php  $_smarty_tpl->tpl_vars[\'langName\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'langName\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'langKey\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'languages\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'langName\']->key => $_smarty_tpl->tpl_vars[\'langName\']->value){
$_smarty_tpl->tpl_vars[\'langName\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'langKey\']->value = $_smarty_tpl->tpl_vars[\'langName\']->key;
?>/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>

		<li><a href="?lang=<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
" rel="alternate" hreflang="<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
" title="<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
"><span class="flags <?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</span></a></li>
		<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php } ?>/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>

		</ul>
		<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php }?>/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>

	</nav>
</header><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-12-04 08:03:11
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/login/main.footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5480153fcd4e43_75981427')) {function content_5480153fcd4e43_75981427($_smarty_tpl) {?><footer>
	<a href="index.php?page=disclamer"><?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_disclamer\'];?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
</a><br>Powered by <a href="http://2moons.cc" title="2Moons" target="copy">2Moons</a> 2009-2013
</footer>
</div>
<div id="dialog" style="display:none;"></div>
<script>
var LoginConfig = {
	'isMultiUniverse': <?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'isMultiUniverse\']->value);?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
,
	'referralEnable' : <?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'referralEnable\']->value);?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
,
	'basePath' : <?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'basepath\']->value);?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>

};
</script>
<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php if ($_smarty_tpl->tpl_vars[\'analyticsEnable\']->value){?>/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>

<script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
<script type="text/javascript">
try{
var pageTracker = _gat._getTracker("<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php echo $_smarty_tpl->tpl_vars[\'analyticsUID\']->value;?>
/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>
");
pageTracker._trackPageview();
} catch(err) {}</script>
<?php echo '/*%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/<?php }?>/*/%%SmartyNocache:10717972235480153f7a9fe0-38621915%%*/';?>

</body>
</html><?php }} ?>