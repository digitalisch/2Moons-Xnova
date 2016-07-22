<?php /* Smarty version Smarty-3.1.13, created on 2015-01-13 23:21:45
         compiled from "C:\Wamp\www\Dystopia\styles\templates\adm\ShowTopnavPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3071954b59a792e07c8-42314146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6372ee73047dc5d6ba8ab0857651856b383fe09b' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\adm\\ShowTopnavPage.tpl',
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
  'nocache_hash' => '3071954b59a792e07c8-42314146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adm_cp_title' => 1,
    'authlevel' => 1,
    'AvailableUnis' => 1,
    'UNI' => 1,
    'adm_cp_index' => 1,
    'sid' => 1,
    'mu_universe' => 1,
    'mu_moderation_page' => 1,
    'ad_authlevel_title' => 1,
    'id' => 1,
    're_reset_universe' => 1,
    'adm_cp_logout' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b59a797e5b24_74815038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b59a797e5b24_74815038')) {function content_54b59a797e5b24_74815038($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'C:\\\\Wamp\\\\www\\\\Dystopia\\\\includes\\\\libs\\\\Smarty\\\\plugins\\\\function.html_options.php\';
?>/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
<?php /*  Call merged included template "overall_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '3071954b59a792e07c8-42314146');
content_54b59a79354925_00332434($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_header.tpl" */?>
<br><div style="font-size:22px;font-weight:bolder;font-variant:small-caps;text-align:center;width:100%;"><?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'adm_cp_title\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
</div><br>
<div align="right">
<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php if ($_smarty_tpl->tpl_vars[\'authlevel\']->value==@constant(\'AUTH_ADM\')){?>/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>

<select id="universe">
<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'AvailableUnis\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'UNI\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>

</select>
<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php }?>/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>

<a href="admin.php?page=overview" target="Hauptframe" class="topn">&nbsp;<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'adm_cp_index\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
&nbsp;</a>
<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php if ($_smarty_tpl->tpl_vars[\'authlevel\']->value==@constant(\'AUTH_ADM\')){?>/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>

<a href="?page=universe&amp;sid=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'sid\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
" target="Hauptframe" class="topn">&nbsp;<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'mu_universe\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
&nbsp;</a>
<a href="?page=rights&amp;mode=rights&amp;sid=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'sid\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
" target="Hauptframe" class="topn">&nbsp;<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'mu_moderation_page\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
&nbsp;</a>
<a href="?page=rights&amp;mode=users&amp;sid=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'sid\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
" target="Hauptframe" class="topn">&nbsp;<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'ad_authlevel_title\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
&nbsp;</a>
<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php }?>/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>

<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php if ($_smarty_tpl->tpl_vars[\'id\']->value==1){?>/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>

<a href="?page=reset&amp;sid=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'sid\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
" target="Hauptframe" class="topn">&nbsp;<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'re_reset_universe\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
&nbsp;</a>
<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php }?>/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>

<a href="javascript:top.location.href='game.php';" target="_top" class="out">&nbsp;<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'adm_cp_logout\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
&nbsp;</a>
</div>
<script>
$(function() {
	$('#universe').on('change', function(e) {
		parent.frames['Hauptframe'].location.href = parent.frames['Hauptframe'].location.href+'&uni='+$(this).val();
		parent.frames['rightFrame'].location.reload();
	});
});
</script>
<?php /*  Call merged included template "overall_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '3071954b59a792e07c8-42314146');
content_54b59a7979f188_29386565($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-13 23:21:45
         compiled from "C:\Wamp\www\Dystopia\styles\templates\adm\overall_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b59a79354925_00332434')) {function content_54b59a79354925_00332434($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'title\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/admin/main.css?v=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
, <?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
, <?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
, <?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
, <?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
, <?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
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
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>

	<script type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php } ?>/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>

	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:3071954b59a792e07c8-42314146%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:3071954b59a792e07c8-42314146%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-13 23:21:45
         compiled from "C:\Wamp\www\Dystopia\styles\templates\adm\overall_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b59a7979f188_29386565')) {function content_54b59a7979f188_29386565($_smarty_tpl) {?><?php if (isset($_GET['reload'])){?>
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