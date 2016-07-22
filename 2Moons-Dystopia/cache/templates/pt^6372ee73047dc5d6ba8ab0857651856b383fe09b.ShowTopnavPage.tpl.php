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
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b5aed572c607_71433346',
  'has_nocache_code' => true,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b5aed572c607_71433346')) {function content_54b5aed572c607_71433346($_smarty_tpl) {?><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_html_options')) include 'C:\\Wamp\\www\\Dystopia\\includes\\libs\\Smarty\\plugins\\function.html_options.php';
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
<body id="topnav" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div><br><div style="font-size:22px;font-weight:bolder;font-variant:small-caps;text-align:center;width:100%;"><?php echo $_smarty_tpl->tpl_vars['adm_cp_title']->value;?>
</div><br>
<div align="right">
<?php if ($_smarty_tpl->tpl_vars['authlevel']->value==@constant('AUTH_ADM')){?>
<select id="universe">
<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['AvailableUnis']->value,'selected'=>$_smarty_tpl->tpl_vars['UNI']->value),$_smarty_tpl);?>

</select>
<?php }?>
<a href="admin.php?page=overview" target="Hauptframe" class="topn">&nbsp;<?php echo $_smarty_tpl->tpl_vars['adm_cp_index']->value;?>
&nbsp;</a>
<?php if ($_smarty_tpl->tpl_vars['authlevel']->value==@constant('AUTH_ADM')){?>
<a href="?page=universe&amp;sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" target="Hauptframe" class="topn">&nbsp;<?php echo $_smarty_tpl->tpl_vars['mu_universe']->value;?>
&nbsp;</a>
<a href="?page=rights&amp;mode=rights&amp;sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" target="Hauptframe" class="topn">&nbsp;<?php echo $_smarty_tpl->tpl_vars['mu_moderation_page']->value;?>
&nbsp;</a>
<a href="?page=rights&amp;mode=users&amp;sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" target="Hauptframe" class="topn">&nbsp;<?php echo $_smarty_tpl->tpl_vars['ad_authlevel_title']->value;?>
&nbsp;</a>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['id']->value==1){?>
<a href="?page=reset&amp;sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" target="Hauptframe" class="topn">&nbsp;<?php echo $_smarty_tpl->tpl_vars['re_reset_universe']->value;?>
&nbsp;</a>
<?php }?>
<a href="javascript:top.location.href='game.php';" target="_top" class="out">&nbsp;<?php echo $_smarty_tpl->tpl_vars['adm_cp_logout']->value;?>
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
</body>
</html><?php }} ?>