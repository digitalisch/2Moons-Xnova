<?php /*%%SmartyHeaderCode:23744710554128790114a59-73558009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adce0eee58b909d597c781e7679ac1d66b63571a' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/page.infomation.default.tpl',
      1 => 1410292615,
      2 => 'file',
    ),
    'f8c996b96d2eb9eb3e3e6c1ea3a04920ba90896a' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/layout.popup.tpl',
      1 => 1410292615,
      2 => 'file',
    ),
    '7108819c2b97f2edea1dcbc209a7b6b33b730231' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/main.header.tpl',
      1 => 1410292615,
      2 => 'file',
    ),
    'b17c9c2a9ec8ef02c7547890da74e955104faae8' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/shared.information.production.tpl',
      1 => 1410292615,
      2 => 'file',
    ),
    '101522886cd444d04ecc4a12b5ab6cbf038bb6a7' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/main.footer.tpl',
      1 => 1410292615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23744710554128790114a59-73558009',
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5412879035ab45_66427764',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5412879035ab45_66427764')) {function content_5412879035ab45_66427764($_smarty_tpl) {?><!DOCTYPE html>

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
	<title>Your Game Name</title>
	<meta name="generator" content="2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
	<!-- 
		This website is powered by 2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/boilerplate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/ingame/main.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/validationEngine.jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
formate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
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
	var ServerTimezoneOffset = <?php echo $_smarty_tpl->tpl_vars['Offset']->value;?>
;
	var serverTime 	= new Date(<?php echo $_smarty_tpl->tpl_vars['date']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[1]-1;?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[2];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[3];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[4];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[5];?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "Ready";
	var Skin		= "<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
";
	var Lang		= "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
";
	var head_info	= "Info";
	var auth		= <?php echo (($tmp = @$_smarty_tpl->tpl_vars['authlevel']->value)===null||$tmp==='' ? '0' : $tmp);?>
;
	var days 		= ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"] 
	var months 		= ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"] ;
	var tdformat	= "[M] [D] [d] [H]:[i]:[s]";
	var queryString	= "<?php echo strtr($_smarty_tpl->tpl_vars['queryString']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>
	<script type="text/javascript" src="scripts/base/jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.ui.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.fancybox.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.validationEngine.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="scripts/l18n/validationEngine/jquery.validationEngine-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="scripts/base/tooltip.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="scripts/game/base.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php  $_smarty_tpl->tpl_vars['scriptname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scriptname']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->key => $_smarty_tpl->tpl_vars['scriptname']->value){
$_smarty_tpl->tpl_vars['scriptname']->_loop = true;
?>
	<script type="text/javascript" src="scripts/game/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php } ?>
	
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="information" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div>

	<?php  $_smarty_tpl->tpl_vars['scriptname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scriptname']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->key => $_smarty_tpl->tpl_vars['scriptname']->value){
$_smarty_tpl->tpl_vars['scriptname']->_loop = true;
?>
	<script type="text/javascript" src="scripts/game/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php } ?>
	
	<script type="text/javascript" src="scripts/base/jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.ui.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.fancybox.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.validationEngine.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="scripts/l18n/validationEngine/jquery.validationEngine-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
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
<script src="skin/js/main.js"></script> <!-- Default JS --><div id="content"><div class="row"><div class="span9"><h3 class="spec">Info</h3><div class="tabbable"><div class="tab-content"><div class="tab-pane fade in active" id="tab1"><table class="redesign">	<tbody>	<tr>		<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['elementID']->value];?>
</th>	</tr>	<tr>		<td>			<table>				<tr>					<td class="transparent" style="width:120px"><img width="120" height="120" src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
gebaeude/<?php echo $_smarty_tpl->tpl_vars['elementID']->value;?>
.<?php if ($_smarty_tpl->tpl_vars['elementID']->value>=600&&$_smarty_tpl->tpl_vars['elementID']->value<=699){?>jpg<?php }else{ ?>gif<?php }?>" alt=""></td>					<td class="transparent left"><p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['longDescription'][$_smarty_tpl->tpl_vars['elementID']->value];?>
</p>					<?php if (!empty($_smarty_tpl->tpl_vars['Bonus']->value)){?><p>					<b><?php echo $_smarty_tpl->tpl_vars['LNG']->value['in_bonus'];?>
</b><br>					<?php  $_smarty_tpl->tpl_vars['elementBouns'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elementBouns']->_loop = false;
 $_smarty_tpl->tpl_vars['BonusName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Bonus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elementBouns']->key => $_smarty_tpl->tpl_vars['elementBouns']->value){
$_smarty_tpl->tpl_vars['elementBouns']->_loop = true;
 $_smarty_tpl->tpl_vars['BonusName']->value = $_smarty_tpl->tpl_vars['elementBouns']->key;
?><?php if ($_smarty_tpl->tpl_vars['elementBouns']->value[0]<0){?>-<?php }else{ ?>+<?php }?><?php if ($_smarty_tpl->tpl_vars['elementBouns']->value[1]==0){?><?php echo abs($_smarty_tpl->tpl_vars['elementBouns']->value[0]*100);?>
%<?php }else{ ?><?php echo floatval($_smarty_tpl->tpl_vars['elementBouns']->value[0]);?>
<?php }?> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['bonus'][$_smarty_tpl->tpl_vars['BonusName']->value];?>
<br><?php } ?>					</p><?php }?>						<?php if (!empty($_smarty_tpl->tpl_vars['FleetInfo']->value)){?>					<?php if (!empty($_smarty_tpl->tpl_vars['FleetInfo']->value['rapidfire']['to'])){?><p>					<?php  $_smarty_tpl->tpl_vars['shoots'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shoots']->_loop = false;
 $_smarty_tpl->tpl_vars['rapidfireID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FleetInfo']->value['rapidfire']['to']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shoots']->key => $_smarty_tpl->tpl_vars['shoots']->value){
$_smarty_tpl->tpl_vars['shoots']->_loop = true;
 $_smarty_tpl->tpl_vars['rapidfireID']->value = $_smarty_tpl->tpl_vars['shoots']->key;
?>					<?php echo $_smarty_tpl->tpl_vars['LNG']->value['in_rf_again'];?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['rapidfireID']->value];?>
: <span style="color:#00ff00"><?php echo pretty_number($_smarty_tpl->tpl_vars['shoots']->value);?>
</span><br>					<?php } ?>					</p><?php }?>					<?php if (!empty($_smarty_tpl->tpl_vars['FleetInfo']->value['rapidfire']['from'])){?><p>					<?php  $_smarty_tpl->tpl_vars['shoots'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shoots']->_loop = false;
 $_smarty_tpl->tpl_vars['rapidfireID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FleetInfo']->value['rapidfire']['from']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shoots']->key => $_smarty_tpl->tpl_vars['shoots']->value){
$_smarty_tpl->tpl_vars['shoots']->_loop = true;
 $_smarty_tpl->tpl_vars['rapidfireID']->value = $_smarty_tpl->tpl_vars['shoots']->key;
?>					<?php echo $_smarty_tpl->tpl_vars['LNG']->value['in_rf_from'];?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['rapidfireID']->value];?>
: <span style="color:#ff0000"><?php echo pretty_number($_smarty_tpl->tpl_vars['shoots']->value);?>
</span><br>					<?php } ?>					</p><?php }?>					<?php }?>									</td>				</tr>			</table>		</td>	</tr>	</tbody></table><?php if (!empty($_smarty_tpl->tpl_vars['productionTable']->value['production'])){?><?php echo $_smarty_tpl->getSubTemplate ("shared.information.production.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['productionTable']->value['storage'])){?><?php echo $_smarty_tpl->getSubTemplate ("shared.information.storage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['FleetInfo']->value)){?><?php echo $_smarty_tpl->getSubTemplate ("shared.information.shipInfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['gateData']->value)){?><?php echo $_smarty_tpl->getSubTemplate ("shared.information.gate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['MissileList']->value)){?><?php echo $_smarty_tpl->getSubTemplate ("shared.information.missiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?></div></div></div>
<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>