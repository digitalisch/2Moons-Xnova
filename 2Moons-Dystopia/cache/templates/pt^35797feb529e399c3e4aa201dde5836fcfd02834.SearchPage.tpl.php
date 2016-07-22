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
  'unifunc' => 'content_54b5aed8432ee3_41839361',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b5aed8432ee3_41839361')) {function content_54b5aed8432ee3_41839361($_smarty_tpl) {?><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_html_options')) include 'C:\\Wamp\\www\\Dystopia\\includes\\libs\\Smarty\\plugins\\function.html_options.php';
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
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta name="generator" content="2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
	<!-- 
		This website is powered by 2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/admin/main.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo $_smarty_tpl->tpl_vars['Offset']->value;?>
;
	var serverTime 	= new Date(<?php echo $_smarty_tpl->tpl_vars['date']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[1]-1;?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[2];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[3];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[4];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[5];?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "Pronto";
	var Skin		= "<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
";
	var Lang		= "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
";
	var head_info	= "Informação";
	var days 		= ["So","Mo","Di","Mi","Do","Fr","Sa"] 
	var months 		= ["Jan","Feb","Mar","Apr","Mai","Jun","Jul","Aug","Sep","Okt","Nov","Dez"] ;
	var tdformat	= "[M] [D] [d] [H]:[i]:[s]";
	function openEdit(id, type) {
		var editlist = window.open("?page=qeditor&edit="+type+"&id="+id, "edit", "scrollbars=yes,statusbar=no,toolbar=no,location=no,directories=no,resizable=no,menubar=no,width=850,height=600,screenX="+((xsize-600)/2)+",screenY="+((ysize-850)/2)+",top="+((ysize-600)/2)+",left="+((xsize-850)/2));
		editlist.focus();
	}
	</script> 
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php  $_smarty_tpl->tpl_vars['scriptname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scriptname']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->key => $_smarty_tpl->tpl_vars['scriptname']->value){
$_smarty_tpl->tpl_vars['scriptname']->_loop = true;
?>
	<script type="text/javascript" src="./scripts/game/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php } ?>
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="search" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div><form action="" method="POST">
<table width="90%">
<tr>
<td class="transparent left">
<input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['minimize']->value;?>
 name="minimize"><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['se_contrac']->value;?>
" class="button">
<img src="./styles/resource/images/admin/GO.png" onClick="javascript:$('#seeker').slideToggle();" style="cursor:pointer;padding-right:60px;" class="tooltip" data-tooltip-content="<?php echo $_smarty_tpl->tpl_vars['ac_minimize_maximize']->value;?>
">
</td>
</tr>
</table>
<div id="seeker"<?php echo $_smarty_tpl->tpl_vars['diisplaay']->value;?>
>
<table width="90%">
	<tr>
		<th colspan="8">
			<?php echo $_smarty_tpl->tpl_vars['se_search_title']->value;?>

		</td>
	</tr>
	<tr>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['se_intro']->value;?>

		</td>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['se_type_typee']->value;?>

		</td>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['se_search_in']->value;?>

		</td>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['se_filter_title']->value;?>

		</td>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['se_limit']->value;?>

		</td>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['se_asc_desc']->value;?>

		</td>
		<?php if ($_smarty_tpl->tpl_vars['OrderBYParse']->value){?>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['se_search_order']->value;?>

		</td>
		<?php }?>
		<td>
			&nbsp;
		</td>
	</tr>
<tr>
	<td>
		<input type="text" name="key_user" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">
	</td>
	<td>
		<?php echo smarty_function_html_options(array('name'=>'search','options'=>$_smarty_tpl->tpl_vars['Selector']->value['list'],'selected'=>$_smarty_tpl->tpl_vars['SearchFile']->value),$_smarty_tpl);?>

	</td>
	<td>
		<?php echo smarty_function_html_options(array('name'=>'search_in','options'=>$_smarty_tpl->tpl_vars['Selector']->value['search'],'selected'=>$_smarty_tpl->tpl_vars['SearchFor']->value),$_smarty_tpl);?>

	</td>
	<td>
		<?php echo smarty_function_html_options(array('name'=>'fucki','options'=>$_smarty_tpl->tpl_vars['Selector']->value['filter'],'selected'=>$_smarty_tpl->tpl_vars['Searchmethod']->value),$_smarty_tpl);?>

	</td>
	<td>
		<?php echo smarty_function_html_options(array('name'=>'limit','options'=>$_smarty_tpl->tpl_vars['Selector']->value['limit'],'selected'=>$_smarty_tpl->tpl_vars['limit']->value),$_smarty_tpl);?>

	</td>
	<td>
		<?php echo smarty_function_html_options(array('name'=>'key_acc','options'=>$_smarty_tpl->tpl_vars['Selector']->value['order'],'selected'=>$_smarty_tpl->tpl_vars['OrderBY']->value),$_smarty_tpl);?>

	</td>
	<?php if ($_smarty_tpl->tpl_vars['OrderBYParse']->value){?>
	<td>
		<?php echo smarty_function_html_options(array('name'=>'key_order','options'=>$_smarty_tpl->tpl_vars['OrderBYParse']->value,'selected'=>$_smarty_tpl->tpl_vars['Order']->value),$_smarty_tpl);?>

	</td>
	<?php }?>
	<td>
		<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['se_search']->value;?>
">
	</td>
</tr>
</table>
</div>
<br>
<table width="90%" border="0px">
<?php echo $_smarty_tpl->tpl_vars['PAGES']->value;?>

</table>
<?php echo $_smarty_tpl->tpl_vars['LIST']->value;?>

<br>
<table width="90%" border="0px">
<?php echo $_smarty_tpl->tpl_vars['PAGES']->value;?>

</table>
</form><?php }} ?>