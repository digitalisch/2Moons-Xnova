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
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b5aed5259780_86185535',
  'has_nocache_code' => true,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b5aed5259780_86185535')) {function content_54b5aed5259780_86185535($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $_smarty_tpl->tpl_vars['adm_cp_title']->value;?>
 &bull; <?php echo $_smarty_tpl->tpl_vars['game_name']->value;?>
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