<?php /*%%SmartyHeaderCode:1590927374541299cdcee6d3-03327178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdc35e781cd9d169a1009b3ef99dda44e97e1887' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/login/page.index.default.tpl',
      1 => 1410292615,
      2 => 'file',
    ),
    '65860e5baf5cd997534372f5a13abbaf5a8bb94b' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/login/layout.light.tpl',
      1 => 1410292615,
      2 => 'file',
    ),
    '44e72179333ab1f4430a51e51d98e996bfcf25eb' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/login/main.header.tpl',
      1 => 1410292615,
      2 => 'file',
    ),
    '36a61acc33e419d6c95931109ffd8c65c0f25d28' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/login/main.navigation.tpl',
      1 => 1410292615,
      2 => 'file',
    ),
    '2c644f8aee2ffc5fc3e18280788af491445da842' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/login/main.footer.tpl',
      1 => 1410292615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1590927374541299cdcee6d3-03327178',
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5414818a19d007_74562714',
  'has_nocache_code' => true,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5414818a19d007_74562714')) {function content_5414818a19d007_74562714($_smarty_tpl) {?><!DOCTYPE html>
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
		<title>2Moons • QwataKayean</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="Weltraum Browsergame, XNova, 2Moons, Space, Private, Server, Speed" />
		<meta name="generator" content="Fallen Universe <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">

		
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,300italic" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="_login/css/ie/html5shiv.js"></script><![endif]-->
		<script src="_login/js/jquery.min.js"></script>
		<script src="_login/js/jquery.poptrox.min.js"></script>
		<script src="_login/js/skel.min.js"></script>
		<script src="_login/js/init.js"></script>
		<link rel="stylesheet" type="text/css" href="_login/css/style-wide.css">
		<link rel="stylesheet" type="text/css" href="_login/css/style.css">

		<noscript>
			<link rel="stylesheet" href="_login/css/skel-noscript.css" />
			<link rel="stylesheet" href="_login/css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="_login/css/ie/v8.css" /><![endif]-->
	<script src="scripts/login/main.js"></script>
	<script><?php if (isset($_smarty_tpl->tpl_vars['code']->value)){?>var loginError = <?php echo json_encode($_smarty_tpl->tpl_vars['code']->value);?>
;<?php }?></script>
	
<script><?php if ($_smarty_tpl->tpl_vars['code']->value){?>alert(<?php echo json_encode($_smarty_tpl->tpl_vars['code']->value);?>
);<?php }?></script>
	
</head>
<body id="overview" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="page">
<section id="header">
<header>
<h1>Fallen Black Skin Preview</h1>
<p>
• Login : <b>Demo</b> • Password : <b>123456demo</b> •</p>
<div class="login">
   <form id="login" name="login" action="index.php?page=login" data-action="index.php?page=login" method="post">
    	<input class="main-form" name="username" id="username" type="text" placeholder="Username" required="required" />
        <input class="main-form" name="password" id="password" type="password" placeholder="Password" required="required" />
        <button type="submit" class="button style2 scrolly">Login</button><br><br>
    </form>
</div>
</header>

</section>


</div>
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