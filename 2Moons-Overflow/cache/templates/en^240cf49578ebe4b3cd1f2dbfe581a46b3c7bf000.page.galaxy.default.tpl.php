<?php /*%%SmartyHeaderCode:1867915280541287ba622b61-37825746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '240cf49578ebe4b3cd1f2dbfe581a46b3c7bf000' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/page.galaxy.default.tpl',
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
  'nocache_hash' => '1867915280541287ba622b61-37825746',
  'variables' => 
  array (
    'cronjobs' => 1,
    'cronjob' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_541287babf7278_90806705',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541287babf7278_90806705')) {function content_541287babf7278_90806705($_smarty_tpl) {?><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_html_options')) include '/home/qwatakayean/public_html/fallenblack/includes/libs/Smarty/plugins/function.html_options.php';
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
<body id="galaxy" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
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

<div class="row">
<div class="span9">

<h3 class="spec">Galaxy</h3>
<div class="tabbable">


 
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">
<table class="redesign">

<form action="?page=galaxy" method="post" id="galaxy_form">
	<input type="hidden" id="auto" value="dr">
	<table style="min-width:324px;width:324px;">
		<tr>
			<td class="transparent">
				<table>
					<tr>
						<th colspan="3">Galaxy</th>
					</tr>
					<tr>
						<td><input class="button button-mini" type="button" name="galaxyLeft" value="&lt;" onclick="galaxy_submit('galaxyLeft')"></td>
						<td><input class="button button-mini" name="galaxy" value="<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
" size="5" maxlength="3" tabindex="1"></td>
						<td><input class="button button-mini" type="button" name="galaxyRight" value="&gt;" onclick="galaxy_submit('galaxyRight')"></td>
					</tr>
				</table>
			</td>
			<td class="transparent">
				<table>
					<tr>
						<th colspan="3">System</th>
					</tr>
					<tr>
						<td><input class="button button-mini" type="button" name="systemLeft" value="&lt;" onclick="galaxy_submit('systemLeft')"></td>
						<td><input class="button button-mini" name="system" value="<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
" size="5" maxlength="3" tabindex="2"></td>
						<td><input class="button button-mini" type="button" name="systemRight" value="&gt;" onclick="galaxy_submit('systemRight')"></td>
					</tr>
				</table>
			</td>
			<td class="transparent">
				<table>
					<tr>
						<td><input class="button button" type="submit" value="Search"></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	</form>
	
	<?php if ($_smarty_tpl->tpl_vars['action']->value=='sendMissle'){?>
    <form action="?page=fleetMissile" method="post">
	<input type="hidden" name="galaxy" value="<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
">
	<input type="hidden" name="system" value="<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
">
	<input type="hidden" name="planet" value="<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
">
	<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
	<table class="table569">
		<tr>
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_missil_launch'];?>
 [<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['missile_count']->value;?>
 <input type="text" name="SendMI" size="2" maxlength="7"></td>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_objective'];?>
: 
				<?php echo smarty_function_html_options(array('name'=>'Target','options'=>$_smarty_tpl->tpl_vars['MissleSelector']->value),$_smarty_tpl);?>

			</td>
		</tr>
		<tr>
			<th colspan="2" style="text-align:center;"><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_missil_launch_action'];?>
"></th>
		</tr>
	</table>
	</form>
    <?php }?>
	
	
	<table class="redesign">
    <tr>
		<th colspan="8">System <?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
</th>
	</tr>
	<tr>
		<th style="white-space: nowrap">Pos.</th>
		<th style="white-space: nowrap">Planet</th>
		<th style="white-space: nowrap">Name (Activity)</th>
		<th style="white-space: nowrap">Moon</th>
		<th style="white-space: nowrap">Debris</th>
		<th style="white-space: nowrap">Player (State)</th>
		<th style="white-space: nowrap">Alliance</th>
		<th style="white-space: nowrap">Actions</th>
	</tr>
    <?php $_smarty_tpl->tpl_vars['planet'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['planet']->step = 1;$_smarty_tpl->tpl_vars['planet']->total = (int)ceil(($_smarty_tpl->tpl_vars['planet']->step > 0 ? $_smarty_tpl->tpl_vars['max_planets']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['max_planets']->value)+1)/abs($_smarty_tpl->tpl_vars['planet']->step));
if ($_smarty_tpl->tpl_vars['planet']->total > 0){
for ($_smarty_tpl->tpl_vars['planet']->value = 1, $_smarty_tpl->tpl_vars['planet']->iteration = 1;$_smarty_tpl->tpl_vars['planet']->iteration <= $_smarty_tpl->tpl_vars['planet']->total;$_smarty_tpl->tpl_vars['planet']->value += $_smarty_tpl->tpl_vars['planet']->step, $_smarty_tpl->tpl_vars['planet']->iteration++){
$_smarty_tpl->tpl_vars['planet']->first = $_smarty_tpl->tpl_vars['planet']->iteration == 1;$_smarty_tpl->tpl_vars['planet']->last = $_smarty_tpl->tpl_vars['planet']->iteration == $_smarty_tpl->tpl_vars['planet']->total;?>
	<tr>
    <?php if (!isset($_smarty_tpl->tpl_vars['GalaxyRows']->value[$_smarty_tpl->tpl_vars['planet']->value])){?>
		<td>
			<a href="?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=7"><?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
</a>
		</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    <?php }elseif($_smarty_tpl->tpl_vars['GalaxyRows']->value[$_smarty_tpl->tpl_vars['planet']->value]===false){?>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>

		</td>
        <td></td>
        <td style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_planet_destroyed'];?>
</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    <?php }else{ ?>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>

		</td>
        <?php $_smarty_tpl->tpl_vars['currentPlanet'] = new Smarty_variable($_smarty_tpl->tpl_vars['GalaxyRows']->value[$_smarty_tpl->tpl_vars['planet']->value], true, 0);?>
		<td>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:220px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_planet'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['name'];?>
 [<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th></tr><tr><td style='width:80px'><img src='<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['image'];?>
.jpg' height='75' width='75'></td><td><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][6]){?><a href='javascript:doit(6,<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['id'];?>
);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][6];?>
</a><br><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['phalanx']){?><a href='javascript:OpenPopup(&quot;?page=phalanx&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&quot;, &quot;&quot;, 640, 510);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_phalanx'];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][1]){?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=1'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][1];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][5]){?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=5'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][5];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][4]){?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=4'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][4];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][3]){?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=3'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][3];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][10]){?><a href='?page=galaxy&amp;action=sendMissle&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][10];?>
</a><br><?php }?></td></tr></table>">
				<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['image'];?>
.jpg" height="30" width="30" alt="">
			</a>
		</td>
		<td style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['lastActivity'];?>
</td>
		<td style="white-space: nowrap;">
			<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['moon']){?>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_moon'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['name'];?>
 [<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th></tr><tr><td style='width:80px'><img src='<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/mond.jpg' height='75' width='75'></td><td><table style='width:100%'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_features'];?>
</th></tr><tr><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_diameter'];?>
</td><td><?php echo pretty_number($_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['diameter']);?>
</td></tr><tr><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_temperature'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['temp_min'];?>
</td></tr><tr><th colspan=2><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_actions'];?>
</th></tr><tr><td colspan='2'><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][1]){?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=1'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][1];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][3]){?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=3'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][3];?>
</a><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][3]){?><br><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=4'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][4];?>
</a><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][5]){?><br><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=5'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][5];?>
</a><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][6]){?><br><a href='javascript:doit(6,<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['id'];?>
);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][6];?>
</a><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][9]){?><br><br><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=9'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][9];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][10]){?><a href='?page=galaxy&amp;action=sendMissle&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;type=3'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][10];?>
</a><br><?php }?></td></tr></table></td></tr></table>">
				<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_mond.jpg" height="22" width="22" alt="<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['name'];?>
">
			</a>
			<?php }?>
		</td>
		<td style="white-space: nowrap;">
        <?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['debris']){?>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_debris_field'];?>
 [<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th></tr><tr><td style='width:80px'><img src='<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/debris.jpg' height='75' style='width:75'></td><td><table style='width:100%'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_resources'];?>
:</th></tr><tr><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][901];?>
: </td><td><?php echo pretty_number($_smarty_tpl->tpl_vars['currentPlanet']->value['debris']['metal']);?>
</td></tr><tr><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][902];?>
: </td><td><?php echo pretty_number($_smarty_tpl->tpl_vars['currentPlanet']->value['debris']['crystal']);?>
</td></tr><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][8]){?><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_actions'];?>
</th></tr><tr><td colspan='2'><a href='javascript:doit(8, <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['id'];?>
);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][8];?>
</a></td></tr><?php }?></table></td></tr></table>">
			<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/debris.jpg" height="22" width="22" alt="">
			</a>
        <?php }?>
		</td>
		<td>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['playerrank'];?>
</th></tr><tr><?php if (!$_smarty_tpl->tpl_vars['currentPlanet']->value['ownPlanet']){?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['user']['isBuddy']){?><tr><td><a href='#' onclick='return Dialog.Buddy(<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['id'];?>
)'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_buddy_request'];?>
</a></td></tr><?php }?><tr><td><a href='#' onclick='return Dialog.Playercard(<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['id'];?>
);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_playercard'];?>
</a></td></tr><?php }?><tr><td><a href='?page=statistics&amp;who=1&amp;start=<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['rank'];?>
'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_see_on_stats'];?>
</a></td></tr></table>">
				<span class="<?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['class']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value){
$_smarty_tpl->tpl_vars['class']->_loop = true;
 $_smarty_tpl->tpl_vars['class']->index++;
 $_smarty_tpl->tpl_vars['class']->first = $_smarty_tpl->tpl_vars['class']->index === 0;
?><?php if (!$_smarty_tpl->tpl_vars['class']->first){?> <?php }?>galaxy-username-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php } ?> galaxy-username"><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['username'];?>
</span>
				<?php if (!empty($_smarty_tpl->tpl_vars['currentPlanet']->value['user']['class'])){?>
				<span>(</span><?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['class']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value){
$_smarty_tpl->tpl_vars['class']->_loop = true;
 $_smarty_tpl->tpl_vars['class']->index++;
 $_smarty_tpl->tpl_vars['class']->first = $_smarty_tpl->tpl_vars['class']->index === 0;
?><?php if (!$_smarty_tpl->tpl_vars['class']->first){?>&nbsp;<?php }?><span class="galaxy-short-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 galaxy-short"><?php echo $_smarty_tpl->tpl_vars['ShortStatus']->value[$_smarty_tpl->tpl_vars['class']->value];?>
</span><?php } ?><span>)</span>
				<?php }?>
			</a>
		</td>
		<td style="white-space: nowrap;">
			<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']){?>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_alliance'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['member'];?>
</th></tr><td><table><tr><td><a href='?page=alliance&amp;mode=info&amp;id=<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_alliance_page'];?>
</a></td></tr><tr><td><a href='?page=statistics&amp;start=<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['rank'];?>
&amp;who=2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_see_on_stats'];?>
</a></td></tr><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['web']){?><tr><td><a href='<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['web'];?>
' target='allyweb'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_alliance_web_page'];?>
</td></tr><?php }?></table></td></table>">
				<span class="<?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['class']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value){
$_smarty_tpl->tpl_vars['class']->_loop = true;
 $_smarty_tpl->tpl_vars['class']->index++;
 $_smarty_tpl->tpl_vars['class']->first = $_smarty_tpl->tpl_vars['class']->index === 0;
?><?php if (!$_smarty_tpl->tpl_vars['class']->first){?> <?php }?>galaxy-alliance-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php } ?> galaxy-alliance"><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['tag'];?>
</span>
			</a>
			<?php }else{ ?>-<?php }?>
		</td>
		<td style="white-space: nowrap;">
			<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']){?>
				<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']['esp']){?>
				<a href="javascript:doit(6,<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['id'];?>
,<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['spyShips']->value), ENT_QUOTES, 'UTF-8', true);?>
)">
					<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/e.gif" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_spy'];?>
" alt="">
				</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']['message']){?>
				<a href="#" onclick="return Dialog.PM(<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['id'];?>
)">
					<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/m.gif" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['write_message'];?>
" alt="">
				</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']['buddy']){?>
                <a href="#" onclick="return Dialog.Buddy(<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['id'];?>
)">
					<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/b.gif" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_buddy_request'];?>
" alt="">
				</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']['missle']){?><a href="?page=galaxy&amp;action=sendMissle&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;type=1">
					<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/r.gif" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_missile_attack'];?>
" alt="">
				</a><?php }?>
			<?php }else{ ?>-<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['phalanx']){?><a class="textForBlind" href="#" onclick="OpenPopup('?page=phalanx&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1','',640,510);return false;"><span><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_phalanx'];?>
</span></a><?php }?>
		</td>
	<?php }?>
	</tr>
	<?php }} ?>
	<tr>
		<td colspan="3"><span id="missiles"><?php echo pretty_number($_smarty_tpl->tpl_vars['currentmip']->value);?>
</span> Available Missiles</td>
		<td colspan="3"><span id="slots"><?php echo $_smarty_tpl->tpl_vars['maxfleetcount']->value;?>
</span>/<?php echo $_smarty_tpl->tpl_vars['fleetmax']->value;?>
 Fleet Slots</td>
		<td colspan="3">
			<a class="tooltip" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'>Legend</td></tr><tr><td style='width:220px'>Strong player</td><td><span class='galaxy-short-strong'>S</span></td></tr><tr><td style='width:220px'>Weak player</td><td><span class='galaxy-short-noob'>N</span></td></tr><tr><td style='width:220px'>Vacation mode</td><td><span class='galaxy-short-vacation'>VM</span></td></tr><tr><td style='width:220px'>Banned / Suspended</td><td><span class='galaxy-short-banned'>B</span></td></tr><tr><td style='width:220px'>7 Inactive days</td><td><span class='galaxy-short-inactive'>i</span></td></tr><tr><td style='width:220px'>28 Inactive days</td><td><span class='galaxy-short-longinactive'>I</span></td></tr></table>"><img src="./styles/theme/gow/img/s.gif" title="Info" alt="" /></a> 
		</td></td>
	</tr>
	<tr style="display: none;" id="fleetstatusrow">
		<th colspan="8">Fleets
	</tr>
	</table>

</table>
</div>
</div>
</div>
</div>
</div>

	
<script type="text/javascript">
		status_ok		= 'Done';
		status_fail		= 'Error';
		MaxFleetSetting = <?php echo $_smarty_tpl->tpl_vars['settings_fleetactions']->value;?>
;
	</script>

</div>
<?php  $_smarty_tpl->tpl_vars['cronjob'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cronjob']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cronjobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cronjob']->key => $_smarty_tpl->tpl_vars['cronjob']->value){
$_smarty_tpl->tpl_vars['cronjob']->_loop = true;
?><img src="cronjob.php?cronjobID=<?php echo $_smarty_tpl->tpl_vars['cronjob']->value;?>
" alt=""><?php } ?>
<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>