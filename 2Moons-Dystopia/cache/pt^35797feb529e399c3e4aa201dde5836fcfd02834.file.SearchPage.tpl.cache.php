<?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 00:48:39
         compiled from "C:\Wamp\www\Dystopia\styles\templates\adm\SearchPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2251654b5aed7ec5708-29076229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35797feb529e399c3e4aa201dde5836fcfd02834' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\adm\\SearchPage.tpl',
      1 => 1368959719,
      2 => 'file',
    ),
    '4b65d994abda475bcdb85c762e300d686bb4e7a6' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\adm\\overall_header.tpl',
      1 => 1368959719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2251654b5aed7ec5708-29076229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'minimize' => 1,
    'se_contrac' => 1,
    'ac_minimize_maximize' => 1,
    'diisplaay' => 1,
    'se_search_title' => 1,
    'se_intro' => 1,
    'se_type_typee' => 1,
    'se_search_in' => 1,
    'se_filter_title' => 1,
    'se_limit' => 1,
    'se_asc_desc' => 1,
    'OrderBYParse' => 1,
    'se_search_order' => 1,
    'search' => 1,
    'Selector' => 1,
    'SearchFile' => 1,
    'SearchFor' => 1,
    'Searchmethod' => 1,
    'limit' => 1,
    'OrderBY' => 1,
    'Order' => 1,
    'se_search' => 1,
    'error' => 0,
    'PAGES' => 1,
    'LIST' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b5aed83ce2b5_14565624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b5aed83ce2b5_14565624')) {function content_54b5aed83ce2b5_14565624($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'C:\\\\Wamp\\\\www\\\\Dystopia\\\\includes\\\\libs\\\\Smarty\\\\plugins\\\\function.html_options.php\';
?>/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
<?php /*  Call merged included template "overall_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '2251654b5aed7ec5708-29076229');
content_54b5aed809b8a3_53648553($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_header.tpl" */?>
<form action="" method="POST">
<table width="90%">
<tr>
<td class="transparent left">
<input type="checkbox" <?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'minimize\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
 name="minimize"><input type="submit" value="<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_contrac\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
" class="button">
<img src="./styles/resource/images/admin/GO.png" onClick="javascript:$('#seeker').slideToggle();" style="cursor:pointer;padding-right:60px;" class="tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_minimize_maximize\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
">
</td>
</tr>
</table>
<div id="seeker"<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'diisplaay\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
>
<table width="90%">
	<tr>
		<th colspan="8">
			<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_search_title\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

		</td>
	</tr>
	<tr>
		<td>
			<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_intro\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

		</td>
		<td>
			<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_type_typee\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

		</td>
		<td>
			<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_search_in\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

		</td>
		<td>
			<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_filter_title\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

		</td>
		<td>
			<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_limit\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

		</td>
		<td>
			<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_asc_desc\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

		</td>
		<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php if ($_smarty_tpl->tpl_vars[\'OrderBYParse\']->value){?>/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

		<td>
			<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_search_order\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

		</td>
		<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php }?>/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

		<td>
			&nbsp;
		</td>
	</tr>
<tr>
	<td>
		<input type="text" name="key_user" value="<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'search\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
">
	</td>
	<td>
		<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'search\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selector\']->value[\'list\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'SearchFile\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

	</td>
	<td>
		<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'search_in\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selector\']->value[\'search\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'SearchFor\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

	</td>
	<td>
		<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'fucki\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selector\']->value[\'filter\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'Searchmethod\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

	</td>
	<td>
		<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'limit\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selector\']->value[\'limit\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'limit\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

	</td>
	<td>
		<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'key_acc\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selector\']->value[\'order\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'OrderBY\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

	</td>
	<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php if ($_smarty_tpl->tpl_vars[\'OrderBYParse\']->value){?>/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

	<td>
		<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'key_order\',\'options\'=>$_smarty_tpl->tpl_vars[\'OrderBYParse\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'Order\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

	</td>
	<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php }?>/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

	<td>
		<input type="submit" value="<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_search\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
">
	</td>
</tr>
<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)){?>
<tr>
	<td colspan="8">
		<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
	</td>
</tr>
<?php }?>
</table>
</div>
<br>
<table width="90%" border="0px">
<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGES\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

</table>
<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'LIST\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

<br>
<table width="90%" border="0px">
<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGES\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

</table>
</form><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 00:48:40
         compiled from "C:\Wamp\www\Dystopia\styles\templates\adm\overall_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b5aed809b8a3_53648553')) {function content_54b5aed809b8a3_53648553($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'title\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/admin/main.css?v=<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
, <?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
, <?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
, <?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
, <?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
, <?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
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
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

	<script type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php } ?>/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:2251654b5aed7ec5708-29076229%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php }} ?>