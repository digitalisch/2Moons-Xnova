<?php /* Smarty version Smarty-3.1.13, created on 2014-09-12 05:42:01
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/page.fleetDealer.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:615009345541287a9c19778-39897258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8e465267cfd1588e63d18db4ff9d6e5f2407e5b' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/page.fleetDealer.default.tpl',
      1 => 1410292615,
      2 => 'file',
    ),
    '579b7c5aefb20c201b1a386d215d2e6659b58fad' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/layout.full.tpl',
      1 => 1410292615,
      2 => 'file',
    ),
    '7108819c2b97f2edea1dcbc209a7b6b33b730231' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/main.header.tpl',
      1 => 1410292615,
      2 => 'file',
    ),
    'c28f4f9d5336816da88dc0341e52385f87e5d53b' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/main.topnav.tpl',
      1 => 1410292615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '615009345541287a9c19778-39897258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cronjobs' => 1,
    'cronjob' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_541287a9eebca3_05957861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541287a9eebca3_05957861')) {function content_541287a9eebca3_05957861($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('bodyclass'=>"full"), 0, '615009345541287a9c19778-39897258');
content_541287a9c7b063_31684346($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>

<?php /*  Call merged included template "main.topnav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '615009345541287a9c19778-39897258');
content_541287a9d2c941_68394568($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.topnav.tpl" */?>
<div id="content"><div class="row"><div class="span9"><h3 class="spec"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleettrader'];?>
</h3><div class="tabbable"><div class="tab-content"><div class="tab-pane fade in active" id="tab1"><form action="game.php?page=fleetDealer" method="post">	<input type="hidden" name="mode" value="send">	<table class="redesign">        <tr>			<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ft_head'];?>
</th>		</tr>        <tr>			<td>				<div class="transparent" style="text-align:left;float:left;"><img id="img" alt="" data-src="<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
gebaeude/"></div>				<div class="transparent" style="text-align:right;float:right;padding:5px">					<select name="shipID" id="shipID" onchange="updateVars()">						<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php  $_smarty_tpl->tpl_vars[\'shipID\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'shipID\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'shipIDs\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'shipID\']->key => $_smarty_tpl->tpl_vars[\'shipID\']->value){
$_smarty_tpl->tpl_vars[\'shipID\']->_loop = true;
?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
						<option value="<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'shipID\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"><?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'shipID\']->value];?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
</option>						<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php } ?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
					</select>				</div>				<div style="clear:right;margin-top:20px;margin-left:125px;">					<h2 id="traderHead"></h2>					<p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ft_count'];?>
: <input type="text" id="count" name="count" onkeyup="Total();"><button onclick="MaxShips();return false;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ft_max'];?>
</button></p>					<p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][901];?>
: <span id="metal" style="font-weight:800;"></span> &bull; <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][902];?>
: <span id="crystal" style="font-weight:800;"></span> &bull; <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][903];?>
: <span id="deuterium" style="font-weight:800;"></span> &bull; <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][921];?>
: <span id="darkmatter" style="font-weight:800;"></span></p>					<p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ft_total'];?>
: <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][901];?>
: <span id="total_metal" style="font-weight:800;"></span> &bull; <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][902];?>
: <span id="total_crystal" style="font-weight:800;"></span> &bull; <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][903];?>
 <span id="total_deuterium" style="font-weight:800;"></span> &bull; <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][921];?>
: <span id="total_darkmatter" style="font-weight:800;"></span></�>					<p><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ft_absenden'];?>
"></p>					<p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ft_charge'];?>
: <?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'Charge\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
%</p>				</div>			</td>		</tr>	</table></form></div></div></div>
<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php  $_smarty_tpl->tpl_vars[\'cronjob\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'cronjob\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cronjobs\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'cronjob\']->key => $_smarty_tpl->tpl_vars[\'cronjob\']->value){
$_smarty_tpl->tpl_vars[\'cronjob\']->_loop = true;
?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
<img src="cronjob.php?cronjobID=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'cronjob\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
" alt=""><?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php } ?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-09-12 05:42:01
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541287a9c7b063_31684346')) {function content_541287a9c7b063_31684346($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title>Your Game Name</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
">
	
	
<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="skin/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="skin/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="skin/css/supersized.css" rel="stylesheet">
<link href="skin/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="skin/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="skin/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="skin/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="skin/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="skin/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="skin/css/supersized.css" rel="stylesheet">
<link href="skin/css/supersized.shutter.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="skin/js/modernizr.js"></script>

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  

</script>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
, <?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
, <?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
, <?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
, <?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
, <?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>
	<script type="text/javascript" src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

	<script type="text/javascript" src="scripts/game/<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php } ?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

	<script type="text/javascript">var CostInfo = <?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'CostInfos\']->value);?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
;var Charge = <?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'Charge\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
;</script>
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
">
	<div id="tooltip" class="tip"></div>

	<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

	<script type="text/javascript" src="scripts/game/<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php } ?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

	
	<script type="text/javascript" src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"></script>
<script src="skin/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="skin/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="skin/js/waypoints.js"></script> <!-- WayPoints -->
<script src="skin/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="skin/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="skin/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="skin/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="skin/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="skin/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="skin/js/main.js"></script> <!-- Default JS --><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-09-12 05:42:01
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/main.topnav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541287a9d2c941_68394568')) {function content_541287a9d2c941_68394568($_smarty_tpl) {?><!-- Header -->
<header>

<a id="back-to-top" href="#">
<i class="font-icon-arrow-simple-up"></i>
</a>

<div class="sticky-nav">
<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>

<div id="logo">
<a id="goUp" href="game.php?page=changelog" title=""></a>
</div>

<table class=redesign>
<tbody>
<tr>
<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<td><?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'resourceID\']->value];?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<br>
</td>
<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php } ?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

</tr>
<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php if ($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value){?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<tr>
<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])){?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php $_smarty_tpl->createLocalArrayVariable(\'resourceData\', true, 0);
$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<td class="res_current tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"><span<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']<0){?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php }?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
><?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
</span></td>
<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php }else{ ?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<td class="res_current tooltip" id="current_<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"><?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
</td>
<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php }?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php } ?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

</tr>
<tr>
<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])||!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'])){?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<td>&nbsp;</td>
<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php }else{ ?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<td class="res_max tooltip" id="max_<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'];?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"><?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
</td>
<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php }?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php } ?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

</tr>
<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php }else{ ?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<tr>
<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])){?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php $_smarty_tpl->createLocalArrayVariable(\'resourceData\', true, 0);
$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<td class="res_current"><span<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']<0){?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php }?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
><?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
</span></td>
<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php }else{ ?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<td class="res_current" id="current_<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
"><?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
</td>
<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php }?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php } ?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

</tr>
<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php }?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

</tbody>
</table>
</td>

<nav id="menu">
<ul id="menu-nav">

<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php if ($_smarty_tpl->tpl_vars[\'authlevel\']->value>0){?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
<li><a href="./admin.php" style="color:lime">ADM</a></li><?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php }?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<li><a href="game.php?page=overview"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_overview'];?>
</a></li>
<li><a href="game.php?page=fleetTable"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleet'];?>
</a></li>
<li><a href="game.php?page=galaxy"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_galaxy'];?>
</a></li>
<li><a href="game.php?page=settings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_options'];?>
</a></li>
<li><a href="game.php?page=logout" class="external"><font color=red>Logout</font></a></li>
</ul>
</nav>

</div>
</header>
<!-- End Header -->

<!-- Our Work Section -->
<br><br>
<div class="span3">
<!-- Filter -->
<table class="redesign">
<td width="100">
<nav id="options" class="work-nav">
<ul id="filters" class="option-set" data-option-key="filter">
<li class="type-work">Menu</li>
<?php if (isModulAvalible(@constant('MODULE_IMPERIUM'))){?><a href="game.php?page=imperium"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_empire'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_RESEARCH'))){?><a href="game.php?page=research"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_research'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_BUILDING'))){?><a href="game.php?page=buildings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buildings'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_SHIPYARD_FLEET'))){?><a href="game.php?page=shipyard&amp;mode=fleet"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_shipshard'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_SHIPYARD_DEFENSIVE'))){?><a href="game.php?page=shipyard&amp;mode=defense"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_defenses'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_OFFICIER'))||isModulAvalible(@constant('MODULE_DMEXTRAS'))){?><a href="game.php?page=officier"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_officiers'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_TRADER'))){?><a href="game.php?page=trader"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_trader'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_FLEET_TRADER'))){?><a href="game.php?page=fleetDealer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleettrader'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_TECHTREE'))){?><a href="game.php?page=techtree"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_technology'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_RESSOURCE_LIST'))){?><a href="game.php?page=resources"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_resources'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_ALLIANCE'))){?><a href="game.php?page=alliance"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_alliance'];?>
</a><br><?php }?>
<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'hasBoard\']->value)){?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
<a href="game.php?page=board" target="forum"><?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_forums\'];?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php }?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>

<?php if (isModulAvalible(@constant('MODULE_STATISTICS'))){?><a href="game.php?page=statistics"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_statistics'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_RECORDS'))){?><a href="game.php?page=records"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_records'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_BATTLEHALL'))){?><a href="game.php?page=battleHall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_topkb'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_SEARCH'))){?><a href="game.php?page=search"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_search'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_CHAT'))){?><a href="game.php?page=chat"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_chat'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_SUPPORT'))){?><a href="game.php?page=ticket"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_support'];?>
</a><br><?php }?>
<a href="game.php?page=questions"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_faq'];?>
</a><br>
<?php if (isModulAvalible(@constant('MODULE_BANLIST'))){?><a href="game.php?page=banList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_banned'];?>
</a><br><?php }?>
<a href="index.php?page=rules" target="rules"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_rules'];?>
</a><br>
<?php if (isModulAvalible(@constant('MODULE_SIMULATOR'))){?><a href="game.php?page=battleSimulator"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_battlesim'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_MESSAGES'))){?><a href="game.php?page=messages"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_messages'];?>
<?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value>0){?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
<span id="newmes"> (<span id="newmesnum"><?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_message\']->value;?>
/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
</span>)</span><?php echo '/*%%SmartyNocache:615009345541287a9c19778-39897258%%*/<?php }?>/*/%%SmartyNocache:615009345541287a9c19778-39897258%%*/';?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_NOTICE'))){?><a href="game.php?page=notes"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_notes'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_BUDDYLIST'))){?><a href="game.php?page=buddyList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buddylist'];?>
</a><br><?php }?>
</ul>
</nav>
</td></table>
</div><?php }} ?>