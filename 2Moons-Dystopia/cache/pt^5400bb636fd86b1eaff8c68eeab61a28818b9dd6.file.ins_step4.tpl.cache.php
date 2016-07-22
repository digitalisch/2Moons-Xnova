<?php /* Smarty version Smarty-3.1.13, created on 2015-01-13 23:17:21
         compiled from "C:\Wamp\www\Dystopia\styles\templates\install\ins_step4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3201854b599718bcc92-25438876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5400bb636fd86b1eaff8c68eeab61a28818b9dd6' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\install\\ins_step4.tpl',
      1 => 1368959719,
      2 => 'file',
    ),
    '95f638dc2a75b29d9c1ad65b559a5002892fd019' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\install\\ins_header.tpl',
      1 => 1368959719,
      2 => 'file',
    ),
    '3620f4830355dded19bf9564fc9a1c36c8260c21' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\install\\ins_footer.tpl',
      1 => 1368959719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3201854b599718bcc92-25438876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 1,
    'message' => 1,
    'LNG' => 0,
    'host' => 1,
    'port' => 1,
    'user' => 1,
    'dbname' => 1,
    'prefix' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b59971a21d89_74088233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b59971a21d89_74088233')) {function content_54b59971a21d89_74088233($_smarty_tpl) {?><?php /*  Call merged included template "ins_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("ins_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '3201854b599718bcc92-25438876');
content_54b599718f75f2_19303073($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "ins_header.tpl" */?>
<tr>
	<td colspan="2">
		<div id="main" class="left">
			<div class="<?php echo '/*%%SmartyNocache:3201854b599718bcc92-25438876%%*/<?php echo $_smarty_tpl->tpl_vars[\'class\']->value;?>
/*/%%SmartyNocache:3201854b599718bcc92-25438876%%*/';?>
"><p><?php echo '/*%%SmartyNocache:3201854b599718bcc92-25438876%%*/<?php echo $_smarty_tpl->tpl_vars[\'message\']->value;?>
/*/%%SmartyNocache:3201854b599718bcc92-25438876%%*/';?>
</p></div>
			<?php echo '/*%%SmartyNocache:3201854b599718bcc92-25438876%%*/<?php if ($_smarty_tpl->tpl_vars[\'class\']->value==\'noerror\'){?>/*/%%SmartyNocache:3201854b599718bcc92-25438876%%*/';?>

			<div style="text-align:center;"><p>
				<a href="index.php?mode=install&step=5"><button><?php echo '/*%%SmartyNocache:3201854b599718bcc92-25438876%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'continue\'];?>
/*/%%SmartyNocache:3201854b599718bcc92-25438876%%*/';?>
</button></a>
			</p></div>
			<?php echo '/*%%SmartyNocache:3201854b599718bcc92-25438876%%*/<?php }else{ ?>/*/%%SmartyNocache:3201854b599718bcc92-25438876%%*/';?>

			<div><p>
				<a href="index.php?mode=install&step=3&amp;host=<?php echo '/*%%SmartyNocache:3201854b599718bcc92-25438876%%*/<?php echo $_smarty_tpl->tpl_vars[\'host\']->value;?>
/*/%%SmartyNocache:3201854b599718bcc92-25438876%%*/';?>
&amp;port=<?php echo '/*%%SmartyNocache:3201854b599718bcc92-25438876%%*/<?php echo $_smarty_tpl->tpl_vars[\'port\']->value;?>
/*/%%SmartyNocache:3201854b599718bcc92-25438876%%*/';?>
&amp;user=<?php echo '/*%%SmartyNocache:3201854b599718bcc92-25438876%%*/<?php echo $_smarty_tpl->tpl_vars[\'user\']->value;?>
/*/%%SmartyNocache:3201854b599718bcc92-25438876%%*/';?>
&amp;dbname=<?php echo '/*%%SmartyNocache:3201854b599718bcc92-25438876%%*/<?php echo $_smarty_tpl->tpl_vars[\'dbname\']->value;?>
/*/%%SmartyNocache:3201854b599718bcc92-25438876%%*/';?>
&amp;prefix=<?php echo '/*%%SmartyNocache:3201854b599718bcc92-25438876%%*/<?php echo $_smarty_tpl->tpl_vars[\'prefix\']->value;?>
/*/%%SmartyNocache:3201854b599718bcc92-25438876%%*/';?>
"><button><?php echo $_smarty_tpl->tpl_vars['LNG']->value['back'];?>
</button></a>
			</p></div>
			<?php echo '/*%%SmartyNocache:3201854b599718bcc92-25438876%%*/<?php }?>/*/%%SmartyNocache:3201854b599718bcc92-25438876%%*/';?>

		</div>
	</td>
</tr>
<?php /*  Call merged included template "ins_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("ins_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '3201854b599718bcc92-25438876');
content_54b59971a1a6d0_67478667($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "ins_footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-13 23:17:21
         compiled from "C:\Wamp\www\Dystopia\styles\templates\install\ins_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b599718f75f2_19303073')) {function content_54b599718f75f2_19303073($_smarty_tpl) {?><!DOCTYPE html>

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
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta name="generator" content="2Moons">
	<!-- 
		This website is powered by 2Moons
		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2012 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<?php if (!empty($_smarty_tpl->tpl_vars['goto']->value)){?>
	<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['gotoinsec']->value;?>
;URL=<?php echo $_smarty_tpl->tpl_vars['goto']->value;?>
">
	<?php }?>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="../styles/resource/css/base/boilerplate.css">
	<link rel="stylesheet" type="text/css" href="../styles/resource/css/ingame/main.css">
	<link rel="stylesheet" type="text/css" href="../styles/resource/css/install/main.css">
	<link rel="stylesheet" type="text/css" href="../styles/resource/css/base/jquery.css">
	<link rel="stylesheet" type="text/css" href="../styles/resource/css/base/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="../styles/resource/css/base/validationEngine.jquery.css">
	<link rel="stylesheet" type="text/css" href="../styles/theme/gow/formate.css">
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<script type="text/javascript" src="../scripts/base/jquery.js"></script>
	<script type="text/javascript" src="../scripts/base/jquery.ui.js"></script>
	<script type="text/javascript" src="../scripts/base/jquery.cookie.js"></script>
	<script type="text/javascript" src="../scripts/base/jquery.fancybox.js"></script>
	<script type="text/javascript" src="../scripts/base/jquery.validationEngine.js"></script>
	<script type="text/javascript" src="../scripts/l18n/validationEngine/jquery.validationEngine-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js"></script>
	<script type="text/javascript" src="../scripts/base/tooltip.js"></script>
	<script type="text/javascript" src="../scripts/game/base.js"></script>
	<?php echo '/*%%SmartyNocache:3201854b599718bcc92-25438876%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:3201854b599718bcc92-25438876%%*/';?>

	<script type="text/javascript" src="../scripts/game/<?php echo '/*%%SmartyNocache:3201854b599718bcc92-25438876%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:3201854b599718bcc92-25438876%%*/';?>
.js"></script>
	<?php echo '/*%%SmartyNocache:3201854b599718bcc92-25438876%%*/<?php } ?>/*/%%SmartyNocache:3201854b599718bcc92-25438876%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:3201854b599718bcc92-25438876%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:3201854b599718bcc92-25438876%%*/';?>

	});
	</script>
</head>
<body id="step<?php echo (($tmp = @htmlspecialchars($_GET['step']))===null||$tmp==='' ? 'intro' : $tmp);?>
">
<div id="tooltip" class="tip"></div>
<div><p>&nbsp;</p></div>
<table width="960">
<tr>
	<th colspan="3"><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</th>
</tr><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-13 23:17:21
         compiled from "C:\Wamp\www\Dystopia\styles\templates\install\ins_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b59971a1a6d0_67478667')) {function content_54b59971a1a6d0_67478667($_smarty_tpl) {?></table>
</body>
</html><?php }} ?>