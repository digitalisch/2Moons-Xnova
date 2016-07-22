<?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 00:27:11
         compiled from "C:\Wamp\www\Dystopia\styles\templates\game\page.overview.actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:828854b59d1e2ddb61-12565548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cf4ed9f1d0944a0b1ca7c9492c1801b310f1436' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\page.overview.actions.tpl',
      1 => 1368959720,
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
  'nocache_hash' => '828854b59d1e2ddb61-12565548',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b59d1e565a69_96259891',
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b59d1e565a69_96259891')) {function content_54b59d1e565a69_96259891($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('bodyclass'=>"popup"), 0, '828854b59d1e2ddb61-12565548');
content_54b5a9cfc1a7d5_87736874($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>
<div id="content">
<div id="tabs">
	<ul>
		<li><a href="#tabs-1"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_planet_rename'];?>
</a></li>
		<li><a href="#tabs-2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_delete_planet'];?>
</a></li>
	</ul>
	<div id="tabs-1">
		<label for="name"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_rename_label'];?>
: </label><input class="left" type="text" name="name" id="name" size="25" maxlength="20" autocomplete="off"><br><br>
		<center><input type="button" onclick="checkrename()" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_planet_rename'];?>
"></center>
	</div>
	<div id="tabs-2"><h3 style="margin:0"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_security_request'];?>
</h3><?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'ov_security_confirm\']->value;?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
<br>
		<label for="password"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_password'];?>
: </label><input class="left" type="password" name="password" id="password" size="25" maxlength="20" autocomplete="off"><br><br>
		<center><input class="center" type="button" onclick="checkcancel()" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_delete_planet'];?>
"></center>
	</div>
</div>
</div>
<?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 00:27:11
         compiled from "C:\Wamp\www\Dystopia\styles\templates\game\main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b5a9cfc1a7d5_87736874')) {function content_54b5a9cfc1a7d5_87736874($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_overview'];?>
 - <?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
 - <?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>

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
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
, <?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
, <?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
, <?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
, <?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
, <?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
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
	<?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>

	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/game/<?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php } ?>/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:828854b59d1e2ddb61-12565548%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php }} ?>