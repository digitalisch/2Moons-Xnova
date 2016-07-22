<?php /* Smarty version Smarty-3.1.13, created on 2015-01-13 23:21:44
         compiled from "C:\Wamp\www\Dystopia\styles\templates\adm\ShowIndexPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:456054b59a780a04c0-85594514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '664c8e2743ec2b9ee46ec0f69ef61c053ba0d03e' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\adm\\ShowIndexPage.tpl',
      1 => 1368959719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '456054b59a780a04c0-85594514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adm_cp_title' => 1,
    'game_name' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b59a780e1864_67712048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b59a780e1864_67712048')) {function content_54b59a780e1864_67712048($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo '/*%%SmartyNocache:456054b59a780a04c0-85594514%%*/<?php echo $_smarty_tpl->tpl_vars[\'adm_cp_title\']->value;?>
/*/%%SmartyNocache:456054b59a780a04c0-85594514%%*/';?>
 &bull; <?php echo '/*%%SmartyNocache:456054b59a780a04c0-85594514%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:456054b59a780a04c0-85594514%%*/';?>
</title>
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
<script type="text/javascript">
if (top.location != self.location) top.location = self.location;
</script>
</head>
<frameset cols="217,*" frameborder="0">
<frame src="admin.php?page=menu" name="rightFrame" id="rightFrame" noresize="noresize">
	<frameset rows="84,*" frameborder="0">
		<frame src="admin.php?page=topnav" name="topFrame" scrolling="no" noresize="noresize" id="topFrame">
		<frame src="admin.php?page=overview" name="Hauptframe" scrolling="auto" noresize="noresize" id="mainFrame">
	</frameset>
</frameset>
</html><?php }} ?>