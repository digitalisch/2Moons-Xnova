<?php /*%%SmartyHeaderCode:1684399144541481b2e7e4a9-35604519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0300342722c17988d7139441b113a306addcb9b' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/page.settings.default.tpl',
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
    '101522886cd444d04ecc4a12b5ab6cbf038bb6a7' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/main.footer.tpl',
      1 => 1410292615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1684399144541481b2e7e4a9-35604519',
  'variables' => 
  array (
    'cronjobs' => 1,
    'cronjob' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_541481b3879ed5_96603253',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541481b3879ed5_96603253')) {function content_541481b3879ed5_96603253($_smarty_tpl) {?><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_html_options')) include '/home/qwatakayean/public_html/fallenblack/includes/libs/Smarty/plugins/function.html_options.php';
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
<body id="settings" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
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
<script src="skin/js/main.js"></script> <!-- Default JS -->
<!-- Header -->
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
<?php  $_smarty_tpl->tpl_vars['resourceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resourceData']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resourceData']->key => $_smarty_tpl->tpl_vars['resourceData']->value){
$_smarty_tpl->tpl_vars['resourceData']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['resourceData']->key;
?>
<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['resourceID']->value];?>

<br>
</td>
<?php } ?>
</tr>
<?php if ($_smarty_tpl->tpl_vars['shortlyNumber']->value){?>
<tr>
<?php  $_smarty_tpl->tpl_vars['resourceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resourceData']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resourceData']->key => $_smarty_tpl->tpl_vars['resourceData']->value){
$_smarty_tpl->tpl_vars['resourceData']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['resourceData']->key;
?>
<?php if (!isset($_smarty_tpl->tpl_vars['resourceData']->value['current'])){?>
<?php $_smarty_tpl->createLocalArrayVariable('resourceData', true, 0);
$_smarty_tpl->tpl_vars['resourceData']->value['current'] = $_smarty_tpl->tpl_vars['resourceData']->value['max']+$_smarty_tpl->tpl_vars['resourceData']->value['used'];?>
<td class="res_current tooltip" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
&nbsp;/&nbsp;<?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
"><span<?php if ($_smarty_tpl->tpl_vars['resourceData']->value['current']<0){?> style="color:red"<?php }?>><?php echo shortly_number($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
&nbsp;/&nbsp;<?php echo shortly_number($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
</span></td>
<?php }else{ ?>
<td class="res_current tooltip" id="current_<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['current'];?>
" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
"><?php echo shortly_number($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
</td>
<?php }?>
<?php } ?>
</tr>
<tr>
<?php  $_smarty_tpl->tpl_vars['resourceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resourceData']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resourceData']->key => $_smarty_tpl->tpl_vars['resourceData']->value){
$_smarty_tpl->tpl_vars['resourceData']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['resourceData']->key;
?>
<?php if (!isset($_smarty_tpl->tpl_vars['resourceData']->value['current'])||!isset($_smarty_tpl->tpl_vars['resourceData']->value['max'])){?>
<td>&nbsp;</td>
<?php }else{ ?>
<td class="res_max tooltip" id="max_<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['max'];?>
" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
"><?php echo shortly_number($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
</td>
<?php }?>
<?php } ?>
</tr>
<?php }else{ ?>
<tr>
<?php  $_smarty_tpl->tpl_vars['resourceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resourceData']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resourceData']->key => $_smarty_tpl->tpl_vars['resourceData']->value){
$_smarty_tpl->tpl_vars['resourceData']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['resourceData']->key;
?>
<?php if (!isset($_smarty_tpl->tpl_vars['resourceData']->value['current'])){?>
<?php $_smarty_tpl->createLocalArrayVariable('resourceData', true, 0);
$_smarty_tpl->tpl_vars['resourceData']->value['current'] = $_smarty_tpl->tpl_vars['resourceData']->value['max']+$_smarty_tpl->tpl_vars['resourceData']->value['used'];?>
<td class="res_current"><span<?php if ($_smarty_tpl->tpl_vars['resourceData']->value['current']<0){?> style="color:red"<?php }?>><?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
&nbsp;/&nbsp;<?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
</span></td>
<?php }else{ ?>
<td class="res_current" id="current_<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['current'];?>
"><?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
</td>
<?php }?>
<?php } ?>
</tr>
<?php }?>
</tbody>
</table>
</td>

<nav id="menu">
<ul id="menu-nav">

<?php if ($_smarty_tpl->tpl_vars['authlevel']->value>0){?><li><a href="./admin.php" style="color:lime">ADM</a></li><?php }?>
<li><a href="game.php?page=overview">Overview</a></li>
<li><a href="game.php?page=fleetTable">Fleet</a></li>
<li><a href="game.php?page=galaxy">Galaxy</a></li>
<li><a href="game.php?page=settings">Options</a></li>
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
<a href="game.php?page=imperium">Empire</a><br><a href="game.php?page=research">Research</a><br><a href="game.php?page=buildings">Buildings</a><br><a href="game.php?page=shipyard&amp;mode=fleet">Hangar</a><br><a href="game.php?page=shipyard&amp;mode=defense">Defenses</a><br><a href="game.php?page=officier">Officers</a><br><a href="game.php?page=trader">Market</a><br><a href="game.php?page=fleetDealer">Merchant of Fleets</a><br><a href="game.php?page=techtree">Technologies</a><br><a href="game.php?page=resources">Resources</a><br><a href="game.php?page=alliance">Alliance</a><br><?php if (!empty($_smarty_tpl->tpl_vars['hasBoard']->value)){?><a href="game.php?page=board" target="forum"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_forums'];?>
</a><br><?php }?>
<a href="game.php?page=statistics">Statistics</a><br><a href="game.php?page=records">Records</a><br><a href="game.php?page=battleHall">Hall of Fame</a><br><a href="game.php?page=search">Search</a><br><a href="game.php?page=chat">Chat</a><br><a href="game.php?page=ticket">Support</a><br><a href="game.php?page=questions">FAQ</a><br>
<a href="game.php?page=banList">Banned</a><br><a href="index.php?page=rules" target="rules">Rules</a><br>
<a href="game.php?page=battleSimulator">Simulator</a><br><a href="game.php?page=messages">Messages<?php if ($_smarty_tpl->tpl_vars['new_message']->value>0){?><span id="newmes"> (<span id="newmesnum"><?php echo $_smarty_tpl->tpl_vars['new_message']->value;?>
</span>)</span><?php }?></a><br><a href="game.php?page=notes">Notes</a><br><a href="game.php?page=buddyList">Friendships</a><br></ul>
</nav>
</td></table>
</div><div id="content">
<form action="game.php?page=settings" method="post">
<input type="hidden" name="mode" value="send">
	
<div class="row">
<div class="span9">

<h3 class="spec"></h3>
<div class="tabbable">

<ul class="nav nav-tabs" id="myTab">
<li class="active"><a href="#tab1" data-toggle="tab">Options</a></li>
</ul>
 
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">
<table class="redesign">

<tr>
<?php if ($_smarty_tpl->tpl_vars['userAuthlevel']->value>0){?>
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_admin_title_options'];?>
</th>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_admin_planets_protection'];?>
</td>
			<td><input name="adminprotection" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['adminProtection']->value>0){?>checked="checked"<?php }?>></td>
		</tr>
		<?php }?>
		<tr>
			<th colspan="2">User data</th>
		</tr>
		<tr>
			<td width="50%">Name</td>
			<td width="50%" style="height:22px;"><?php if ($_smarty_tpl->tpl_vars['changeNickTime']->value<0){?><input name="username" size="20" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" type="text"><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<?php }?></td>
		</tr>
		<tr>
			<td>Current Password</td>
			<td><input name="password" size="20" type="password" class="autocomplete"></td>
		</tr>
		<tr>
			<td>New Password (min. 8 characters)</td>
			<td><input name="newpassword" size="20" maxlength="40" type="password" class="autocomplete"></td>
		</tr>
		<tr>
			<td>New Password (repeat)</td>
			<td><input name="newpassword2" size="20" maxlength="40" type="password" class="autocomplete"></td>
		</tr>
		<tr>
			<td><a title="You can change this e-mail address at any time. Will become the permanent e-mail after 7 days, without changes.">Email address</a></td>
			<td><input name="email" maxlength="64" size="20" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" type="text"></td>
		</tr>
		<tr>
			<td style="height:22px;">Permanent email address</td>
			<td><?php echo $_smarty_tpl->tpl_vars['permaEmail']->value;?>
</td>
		</tr>
		<tr>
			<th colspan="2">General options</th>
		</tr>
		<tr>
			<td>Time zone</td>
			<td><?php echo smarty_function_html_options(array('name'=>'timezone','options'=>$_smarty_tpl->tpl_vars['Selectors']->value['timezones'],'selected'=>$_smarty_tpl->tpl_vars['timezone']->value),$_smarty_tpl);?>
</td>
		</tr>
		<?php if (count($_smarty_tpl->tpl_vars['Selectors']->value['lang'])>1){?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_lang'];?>
</td>
			<td><?php echo smarty_function_html_options(array('name'=>'language','options'=>$_smarty_tpl->tpl_vars['Selectors']->value['lang'],'selected'=>$_smarty_tpl->tpl_vars['userLang']->value),$_smarty_tpl);?>
</td>
		</tr>
		<?php }?>
		<tr>
			<td>Sort by planets</td>
			<td><?php echo smarty_function_html_options(array('name'=>'planetSort','options'=>$_smarty_tpl->tpl_vars['Selectors']->value['Sort'],'selected'=>$_smarty_tpl->tpl_vars['planetSort']->value),$_smarty_tpl);?>
</td>
		</tr>
		<tr>
			<td>Order of classification</td>
			<td>
				<?php echo smarty_function_html_options(array('name'=>'planetOrder','options'=>$_smarty_tpl->tpl_vars['Selectors']->value['SortUpDown'],'selected'=>$_smarty_tpl->tpl_vars['planetOrder']->value),$_smarty_tpl);?>

			</td>
		</tr>
		<?php if (count($_smarty_tpl->tpl_vars['Selectors']->value['Skins'])>1){?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_skin_example'];?>
</td>
			<td><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['Selectors']->value['Skins'],'selected'=>$_smarty_tpl->tpl_vars['theme']->value,'name'=>"theme",'id'=>"theme"),$_smarty_tpl);?>
</td>
		</tr>
		<?php }?>
		<tr>
			<td>Enable messages of building</td>
			<td><input name="queueMessages" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['queueMessages']->value==1){?>checked="checked"<?php }?>></td>
		</tr>
		<tr>
			<td>Enable Summarized Spy Reports</td>
			<td><input name="spyMessagesMode" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['spyMessagesMode']->value==1){?>checked="checked"<?php }?>></td>
		</tr>
		<tr>
			<td>Block private messages</td>
			<td><input name="blockPM" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['blockPM']->value==1){?>checked="checked"<?php }?>></td>
		</tr>
		<tr>
			<th colspan="2">Options of Galaxy</th>
		</tr>
		<tr>
			<td><a title="Number of probes you can send directly from the view of Galaxia.">Number of Spy probes</a></td>
			<td><input name="spycount" size="<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['spycount']->value, $tmp)+3;?>
" value="<?php echo $_smarty_tpl->tpl_vars['spycount']->value;?>
" type="int"></td>
		</tr>
		<tr>
			<td>Number of max messages of Fleet</td>
			<td><input name="fleetactions" maxlength="2" size="<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['fleetActions']->value, $tmp)+2;?>
" value="<?php echo $_smarty_tpl->tpl_vars['fleetActions']->value;?>
" type="int"></td>
		</tr>
		<tr>
			<th>Shortcut</th>
			<th>View</th>
		</tr>
		<tr>
			<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/e.gif" alt="">Spying</td>
			<td><input name="galaxySpy" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['galaxySpy']->value==1){?>checked="checked"<?php }?>></td>
		</tr>
		<tr>
			<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/m.gif" alt="">Write Message</td>
			<td><input name="galaxyMessage" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['galaxyMessage']->value==1){?>checked="checked"<?php }?>></td>
		</tr>
		<tr>
			<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/b.gif" alt="">Send friend request</td>
			<td><input name="galaxyBuddyList" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['galaxyBuddyList']->value==1){?>checked="checked"<?php }?>></td>
		</tr>
		<tr>
			<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/r.gif" alt="">Missile attack</td>
			<td><input name="galaxyMissle" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['galaxyMissle']->value==1){?>checked="checked"<?php }?>></td>
		</tr>
		<tr>
			<th colspan="2">Vacation mode/delete account</th>
		</tr>
		<tr>
			<td><a title="Vacation mode protects your account for as long as you are out of the game. But you can only activate it if its not you have nothing in construction (buildings, fleet, or defense), and nothing to be searched, and none of your fleets is destroyed. Once activated, is protected against attacks. Attacks that had already been posted before will continue during the holidays, the production is put at 0% so desativares vacation mode will reset the production to 100%. So ativares the holidays are bound to remain so for a minimum time of 48 hours. Only then will be disabled.">Activate vacation mode</a></td>
			<td><input name="vacation" type="checkbox" value="1"></td>
		</tr>
		<tr>
			<td><a title="If you choose this option your account will be deleted after 7 days.">Delete account</a></td>
			<td><input name="delete" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['delete']->value>0){?>checked="checked"<?php }?>></td>
		</tr>
				<tr>
			<th colspan="3">Player's Banner</th>
		</tr>
		<tr>
			<td colspan="3"><img src="userpic.php?id=<?php echo $_smarty_tpl->tpl_vars['userID']->value;?>
" alt="" width="590" height="95" id="userpic"><br><br><table><tr><td class="transparent">HTML:</td><td class="transparent"><input type="text" value='<a href="https://endlessuni.com/fallenblack/<?php if ($_smarty_tpl->tpl_vars['ref_active']->value){?>index.php?ref=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
<?php }?>"><img src="https://endlessuni.com/fallenblack/userpic.php?id=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"></a>' readonly="readonly" style="width:450px;"></td></tr><tr><td class="transparent">BBCode:</td><td class="transparent"><input type="text" value="[url=https://endlessuni.com/fallenblack/<?php if ($_smarty_tpl->tpl_vars['ref_active']->value){?>index.php?ref=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
<?php }?>][img]https://endlessuni.com/fallenblack/userpic.php?id=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
[/img][/url]" readonly="readonly" style="width:450px;"></td></tr></table></td>
		</tr>
				<tr>
			<td colspan="2"><p align=right><input class="button" value="Save changes" type="submit"></td>
		</tr>

</table>
</div>
</div>
</div>
</div>
</div>
	
</form>
</div>
<?php  $_smarty_tpl->tpl_vars['cronjob'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cronjob']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cronjobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cronjob']->key => $_smarty_tpl->tpl_vars['cronjob']->value){
$_smarty_tpl->tpl_vars['cronjob']->_loop = true;
?><img src="cronjob.php?cronjobID=<?php echo $_smarty_tpl->tpl_vars['cronjob']->value;?>
" alt=""><?php } ?>
<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>