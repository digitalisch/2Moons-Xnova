<?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 00:48:44
         compiled from "C:\Wamp\www\Dystopia\styles\templates\adm\QuickEditorPlanet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1681754b5aedc802b72-46710201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb61bfde33ca02a1f65ccc6f3929b09f29145bd2' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\adm\\QuickEditorPlanet.tpl',
      1 => 1368959719,
      2 => 'file',
    ),
    '4b65d994abda475bcdb85c762e300d686bb4e7a6' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\adm\\overall_header.tpl',
      1 => 1368959719,
      2 => 'file',
    ),
    'c6937634cbb40669bbc6e5e6d5c9b96d048391c2' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\adm\\overall_footer.tpl',
      1 => 1368959719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1681754b5aedc802b72-46710201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 1,
    'LNG' => 0,
    'name' => 1,
    'galaxy' => 1,
    'system' => 1,
    'planet' => 1,
    'ownername' => 1,
    'ownerid' => 1,
    'field_min' => 1,
    'field_max' => 1,
    'temp_min' => 1,
    'temp_max' => 1,
    'metal_c' => 1,
    'metal' => 1,
    'crystal_c' => 1,
    'crystal' => 1,
    'deuterium_c' => 1,
    'deuterium' => 1,
    'build' => 1,
    'Element' => 1,
    'fleet' => 1,
    'defense' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b5aedcd13255_53016390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b5aedcd13255_53016390')) {function content_54b5aedcd13255_53016390($_smarty_tpl) {?><?php /*  Call merged included template "overall_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '1681754b5aedc802b72-46710201');
content_54b5aedc8e5ba8_89725504($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_header.tpl" */?>
<script type="text/javascript">
function check(){
	$.post('?page=qeditor&edit=planet&id=<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'id\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
&action=send', $('#userform').serialize(), function(data){
		Dialog.alert(data, function() {
			opener.location.reload();
			window.close();
		});
	});
	return false;
}
</script>
<form method="post" id="userform" action="" onsubmit="return check();">
<table width="100%" style="color:#FFFFFF"><tr>
        <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_info'];?>
</th>
</tr>
<tr style="height:26px;"><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_id'];?>
:</td><td width="50%"><?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'id\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
</td></tr>
<tr><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_planetname'];?>
:</td><td width="50%"><input name="name" type="text" size="15" value="<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'name\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
"></td></tr>
<tr style="height:26px;"><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_coords'];?>
:</td><td width="50%">[<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
:<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
:<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
]</td></tr>
<tr style="height:26px;"><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_owner'];?>
:</td><td width="50%"><?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'ownername\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
 (<?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_id'];?>
: <?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'ownerid\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
)</td></tr>
<tr><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_fields'];?>
:</td><td width="50%"><?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'field_min\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
 / <input name="field_max" type="text" size="3" value="<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'field_max\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
"></td></tr>
<tr style="height:26px;"><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_temp'];?>
:</td><td width="50%"><?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'temp_min\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
 / <?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'temp_max\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
</td></tr>
</table>
<table width="100%" style="color:#FFFFFF">
<tr>
        <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_resources'];?>
</th>
</tr>
<tr>
        <td></td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_count'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_input'];?>
</td>
</tr>
<tr><td width="30%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][901];?>
:</td><td width="30%"><?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'metal_c\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
</td><td width="40%"><input name="metal" type="text" value="<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'metal\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
"></td></tr>
<tr><td width="30%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][902];?>
:</td><td width="30%"><?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'crystal_c\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
</td><td width="40%"><input name="crystal" type="text" value="<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'crystal\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
"></td></tr>
<tr><td width="30%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][903];?>
:</td><td width="30%"><?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'deuterium_c\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
</td><td width="40%"><input name="deuterium" type="text" value="<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'deuterium\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
"></td></tr>
</table>
<table width="100%" style="color:#FFFFFF">
<tr>
        <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_build'];?>
</th>
</tr>
<tr>
        <td></td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_level'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_input'];?>
</td>
</tr>
<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php  $_smarty_tpl->tpl_vars[\'Element\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'Element\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'build\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'Element\']->key => $_smarty_tpl->tpl_vars[\'Element\']->value){
$_smarty_tpl->tpl_vars[\'Element\']->_loop = true;
?>/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>

<tr><td width="30%"><?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'name\'];?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
:</td><td width="30%"><?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'count\'];?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
</td><td width="40%"><input name="<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'type\'];?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
" type="text" value="<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'input\'];?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
"></td>
<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php } ?>/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>

</table>
<table width="100%" style="color:#FFFFFF">
<tr>
        <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_fleet'];?>
</th>
</tr>
<tr>
        <td></td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_count'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_input'];?>
</td>
</tr>
<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php  $_smarty_tpl->tpl_vars[\'Element\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'Element\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'fleet\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'Element\']->key => $_smarty_tpl->tpl_vars[\'Element\']->value){
$_smarty_tpl->tpl_vars[\'Element\']->_loop = true;
?>/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>

<tr><td width="30%"><?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'name\'];?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
:</td><td width="30%"><?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'count\'];?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
</td><td width="40%"><input name="<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'type\'];?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
" type="text" value="<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'input\'];?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
"></td>
<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php } ?>/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>

</table>
<table width="100%" style="color:#FFFFFF">
<tr>
        <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_defensive'];?>
</th>
</tr>
<tr>
        <td></td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_count'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_input'];?>
</td>
</tr>
<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php  $_smarty_tpl->tpl_vars[\'Element\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'Element\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'defense\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'Element\']->key => $_smarty_tpl->tpl_vars[\'Element\']->value){
$_smarty_tpl->tpl_vars[\'Element\']->_loop = true;
?>/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>

<tr><td width="30%"><?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'name\'];?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
:</td><td width="30%"><?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'count\'];?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
</td><td width="40%"><input name="<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'type\'];?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
" type="text" value="<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'input\'];?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
"></td>
<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php } ?>/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>

<tr>
        <td colspan="3"><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_submit'];?>
"> <input type="reset" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_reset'];?>
"></td>
</tr>
</table>
</form>
<?php /*  Call merged included template "overall_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '1681754b5aedc802b72-46710201');
content_54b5aedccce4f7_44543264($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 00:48:44
         compiled from "C:\Wamp\www\Dystopia\styles\templates\adm\overall_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b5aedc8e5ba8_89725504')) {function content_54b5aedc8e5ba8_89725504($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'title\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<?php if (!empty($_smarty_tpl->tpl_vars['goto']->value)){?>
	<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['gotoinsec']->value;?>
;URL=<?php echo $_smarty_tpl->tpl_vars['goto']->value;?>
">
	<?php }?>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/admin/main.css?v=<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
, <?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
, <?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
, <?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
, <?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
, <?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	function openEdit(id, type) {
		var editlist = window.open("?page=qeditor&edit="+type+"&id="+id, "edit", "scrollbars=yes,statusbar=no,toolbar=no,location=no,directories=no,resizable=no,menubar=no,width=850,height=600,screenX="+((xsize-600)/2)+",screenY="+((ysize-850)/2)+",top="+((ysize-600)/2)+",left="+((xsize-850)/2));
		editlist.focus();
	}
	</script> 
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>

	<script type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php } ?>/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>

	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:1681754b5aedc802b72-46710201%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:1681754b5aedc802b72-46710201%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 00:48:44
         compiled from "C:\Wamp\www\Dystopia\styles\templates\adm\overall_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b5aedccce4f7_44543264')) {function content_54b5aedccce4f7_44543264($_smarty_tpl) {?><?php if (isset($_GET['reload'])){?>
<?php if ($_GET['reload']=='t'){?>
<script type="text/javascript">
parent.topFrame.document.location.reload();
</script>
<?php }elseif($_GET['reload']=='l'){?>
<script type="text/javascript">
parent.rightFrame.document.location.reload();
</script>
<?php }elseif($_GET['reload']=='r'){?>
<script type="text/javascript">
top.document.location.reload();
</script>
<?php }?>
<?php }?>
</body>
</html><?php }} ?>