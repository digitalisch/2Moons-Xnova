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
    '101522886cd444d04ecc4a12b5ab6cbf038bb6a7' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/main.footer.tpl',
      1 => 1410292615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '615009345541287a9c19778-39897258',
  'variables' => 
  array (
    'cronjobs' => 1,
    'cronjob' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_541287a9effde9_60623362',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541287a9effde9_60623362')) {function content_541287a9effde9_60623362($_smarty_tpl) {?><!DOCTYPE html>

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
	<script type="text/javascript">var CostInfo = <?php echo json_encode($_smarty_tpl->tpl_vars['CostInfos']->value);?>
;var Charge = <?php echo $_smarty_tpl->tpl_vars['Charge']->value;?>
;</script>
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="fleetDealer" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
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
</div><div id="content"><div class="row"><div class="span9"><h3 class="spec">Merchant of Fleets</h3><div class="tabbable"><div class="tab-content"><div class="tab-pane fade in active" id="tab1"><form action="game.php?page=fleetDealer" method="post">	<input type="hidden" name="mode" value="send">	<table class="redesign">        <tr>			<th>Merchant fleets</th>		</tr>        <tr>			<td>				<div class="transparent" style="text-align:left;float:left;"><img id="img" alt="" data-src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
gebaeude/"></div>				<div class="transparent" style="text-align:right;float:right;padding:5px">					<select name="shipID" id="shipID" onchange="updateVars()">						<?php  $_smarty_tpl->tpl_vars['shipID'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipID']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipIDs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipID']->key => $_smarty_tpl->tpl_vars['shipID']->value){
$_smarty_tpl->tpl_vars['shipID']->_loop = true;
?>						<option value="<?php echo $_smarty_tpl->tpl_vars['shipID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['shipID']->value];?>
</option>						<?php } ?>					</select>				</div>				<div style="clear:right;margin-top:20px;margin-left:125px;">					<h2 id="traderHead"></h2>					<p>Number: <input type="text" id="count" name="count" onkeyup="Total();"><button onclick="MaxShips();return false;">max</button></p>					<p>Metal: <span id="metal" style="font-weight:800;"></span> &bull; Crystal: <span id="crystal" style="font-weight:800;"></span> &bull; Deuterium: <span id="deuterium" style="font-weight:800;"></span> &bull; Dark Matter: <span id="darkmatter" style="font-weight:800;"></span></p>					<p>TOTAL: Metal: <span id="total_metal" style="font-weight:800;"></span> &bull; Crystal: <span id="total_crystal" style="font-weight:800;"></span> &bull; Deuterium <span id="total_deuterium" style="font-weight:800;"></span> &bull; Dark Matter: <span id="total_darkmatter" style="font-weight:800;"></span></�>					<p><input type="submit" value="Send"></p>					<p>Merchant rate: <?php echo $_smarty_tpl->tpl_vars['Charge']->value;?>
%</p>				</div>			</td>		</tr>	</table></form></div></div></div>
<?php  $_smarty_tpl->tpl_vars['cronjob'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cronjob']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cronjobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cronjob']->key => $_smarty_tpl->tpl_vars['cronjob']->value){
$_smarty_tpl->tpl_vars['cronjob']->_loop = true;
?><img src="cronjob.php?cronjobID=<?php echo $_smarty_tpl->tpl_vars['cronjob']->value;?>
" alt=""><?php } ?>
<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>