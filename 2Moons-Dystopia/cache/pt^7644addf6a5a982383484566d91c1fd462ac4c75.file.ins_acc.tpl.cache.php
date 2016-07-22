<?php /* Smarty version Smarty-3.1.13, created on 2015-01-13 23:20:21
         compiled from "C:\Wamp\www\Dystopia\styles\templates\install\ins_acc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1000554b59a25089665-54764525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7644addf6a5a982383484566d91c1fd462ac4c75' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\install\\ins_acc.tpl',
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
  'nocache_hash' => '1000554b59a25089665-54764525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LNG' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b59a2542c548_87927523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b59a2542c548_87927523')) {function content_54b59a2542c548_87927523($_smarty_tpl) {?><?php /*  Call merged included template "ins_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("ins_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '1000554b59a25089665-54764525');
content_54b59a2523abd0_27462838($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "ins_header.tpl" */?>
<tr>
	<td class="left">
		<h2><?php echo $_smarty_tpl->tpl_vars['LNG']->value['step4_head'];?>
</h2>
		<p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['step4_desc'];?>
</p>
		<form action="index.php?mode=install&step=8" method="post"> 
		<input type="hidden" name="post" value="1">
		<table class="req">
			<tr>
				<td class="transparent left"><p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['step4_admin_name'];?>
</p><p class="desc"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['step4_admin_name_desc'];?>
</p></td>
				<td class="transparent"><input type="text" name="username" value="" size="30"></td>
			</tr>
			<tr>
				<td class="transparent left"><p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['step4_admin_pass'];?>
</p><p class="desc"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['step4_admin_pass_desc'];?>
</p></td>
				<td class="transparent"><input type="password" name="password" value="" size="30"></td>
			</tr>
			<tr>
				<td class="transparent left"><p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['step4_admin_mail'];?>
</p></td>
				<td class="transparent"><input type="text" name="email" value="" size="30"></td>
			</tr>
			<tr class="noborder">
				<td colspan="2" class="transparent"><input type="submit" name="next" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['continue'];?>
"></td>
			</tr>
		</table>
		</form>
	</td>
</tr>
<?php /*  Call merged included template "ins_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("ins_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '1000554b59a25089665-54764525');
content_54b59a25424850_03387875($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "ins_footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-13 23:20:21
         compiled from "C:\Wamp\www\Dystopia\styles\templates\install\ins_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b59a2523abd0_27462838')) {function content_54b59a2523abd0_27462838($_smarty_tpl) {?><!DOCTYPE html>

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
	<?php echo '/*%%SmartyNocache:1000554b59a25089665-54764525%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:1000554b59a25089665-54764525%%*/';?>

	<script type="text/javascript" src="../scripts/game/<?php echo '/*%%SmartyNocache:1000554b59a25089665-54764525%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:1000554b59a25089665-54764525%%*/';?>
.js"></script>
	<?php echo '/*%%SmartyNocache:1000554b59a25089665-54764525%%*/<?php } ?>/*/%%SmartyNocache:1000554b59a25089665-54764525%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:1000554b59a25089665-54764525%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:1000554b59a25089665-54764525%%*/';?>

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
</tr><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-13 23:20:21
         compiled from "C:\Wamp\www\Dystopia\styles\templates\install\ins_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b59a25424850_03387875')) {function content_54b59a25424850_03387875($_smarty_tpl) {?></table>
</body>
</html><?php }} ?>