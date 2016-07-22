<?php /*%%SmartyHeaderCode:1780878323547cae3815b2d6-59007766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd97078e29f12f30e2c13029cdf09f34e489b3b2a' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/game/page.buildings.default.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
    '80b2a7bf94c15b3b8914c37fbe189c5e0c295b67' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/game/layout.full.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
    '2e2cf729a868970d7dd52f6e26b7f04ab67a542b' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/game/main.header.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
    '6dc446546c2ac4f1e6fef21ee1f0ab3d56b185f9' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/game/main.navigation.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
    '44a9ca4d3b237ccf0e3f92214043e2efa6f1881f' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/game/main.topnav.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
    '7b2f1a226e01d11463f45cc5d9d3ad1aa3ecfb3f' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/game/main.footer.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1780878323547cae3815b2d6-59007766',
  'variables' => 
  array (
    'hasAdminAccess' => 1,
    'LNG' => 1,
    'cronjobs' => 1,
    'cronjob' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547cae393303e7_73339599',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547cae393303e7_73339599')) {function content_547cae393303e7_73339599($_smarty_tpl) {?><!DOCTYPE html>

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
	<title>Buildings - <?php echo $_smarty_tpl->tpl_vars['uni_name']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['game_name']->value;?>
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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
formate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
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
<body id="buildings" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div><?php if ($_smarty_tpl->tpl_vars['hasAdminAccess']->value){?>
<div class="globalWarning">
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_1'];?>
 <a id="drop-admin"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_link'];?>
</a><?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_2'];?>

</div>
<?php }?>
<div id="leftmenu">
	<ul id="menu">
		<li class="menu-head"><a href="game.php?page=changelog">Changelog</a></li>
		<li class="menucat1-head"></li>
		<li><a href="game.php?page=overview">Overview</a></li>
		<li><a href="game.php?page=imperium">Empire</a></li>		<li><a href="game.php?page=research">Research</a></li>		<li><a href="game.php?page=buildings">Buildings</a></li>		<li><a href="game.php?page=shipyard&amp;mode=fleet">Hangar</a></li>		<li><a href="game.php?page=shipyard&amp;mode=defense">Defenses</a></li>		<li><a href="game.php?page=officier">Officers</a></li>		<li><a href="game.php?page=trader">Market</a></li>		<li><a href="game.php?page=fleetDealer">Merchant of Fleets</a></li>		<li><a href="game.php?page=fleetTable">Fleet</a></li>		<li><a href="game.php?page=techtree">Technologies</a></li>		<li><a href="game.php?page=resources">Resources</a></li>		<li class="menucat2-head"></li>
		<li><a href="game.php?page=galaxy">Galaxy</a></li>		<li><a href="game.php?page=alliance">Alliance</a></li>        <?php if (!empty($_smarty_tpl->tpl_vars['hasBoard']->value)){?><li><a href="game.php?page=board" target="forum"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_forums'];?>
</a></li><?php }?>
		<li><a href="game.php?page=statistics">Statistics</a></li>		<li><a href="game.php?page=records">Records</a></li>		<li><a href="game.php?page=battleHall">Hall of Fame</a></li>		<li><a href="game.php?page=search">Search</a></li>		<li><a href="game.php?page=chat" onclick="return Dialog.open(this.href, 1000, 720);">Chat</a></li>		<li><a href="game.php?page=ticket">Support</a></li>		<li><a href="game.php?page=questions">FAQ</a></li>
		<li><a href="game.php?page=banList">Banned</a></li>		<li><a href="index.php?page=rules" target="rules">Rules</a></li>
		<li><a href="game.php?page=battleSimulator">Simulator</a></li>
		<li class="menucat3-head"></li>
		<li><a href="game.php?page=messages">Messages<?php if ($_smarty_tpl->tpl_vars['new_message']->value>0){?><span id="newmes"> (<span id="newmesnum"><?php echo $_smarty_tpl->tpl_vars['new_message']->value;?>
</span>)</span><?php }?></a></li>		<li><a href="javascript:OpenPopup('?page=notes', 'notes', 720, 300);">Notes</a></li>		<li><a href="game.php?page=buddyList">Friendships</a></li>		<li><a href="game.php?page=settings">Options</a></li>
		<li><a href="game.php?page=logout">Logout</a></li>
		<?php if ($_smarty_tpl->tpl_vars['authlevel']->value>0){?><li><a href="./admin.php" style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_administration'];?>
 (<?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
)</a></li><?php }?>
		<li class="menu-footer"></li>
	</ul>
	<div id="disclamer"><a href="index.php?page=disclamer" target="_blank">Credits</a></div>
</div><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_html_options')) include '/home/qwatakayean/public_html/darkness/includes/libs/Smarty/plugins/function.html_options.php';
?><div id="page">
	<div id="header">
		<table id="headerTable">
			<tbody>
				<tr>
					<td id="planetImage">
						<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
.jpg" alt=""> 
					</td>
					<td id="planetSelectorWrapper">
						<select id="planetSelector">
							<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['PlanetSelect']->value,'selected'=>$_smarty_tpl->tpl_vars['current_pid']->value),$_smarty_tpl);?>

						</select>
					</td>
					<td id="resourceWrapper">
						<table id="resourceTable">
							<tbody>
								<tr>
									<?php  $_smarty_tpl->tpl_vars['resouceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resouceData']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resouceData']->key => $_smarty_tpl->tpl_vars['resouceData']->value){
$_smarty_tpl->tpl_vars['resouceData']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['resouceData']->key;
?>
									<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['name'];?>
.gif" alt=""></td>
									<?php } ?>
								</tr>
								<tr>
									<?php  $_smarty_tpl->tpl_vars['resouceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resouceData']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resouceData']->key => $_smarty_tpl->tpl_vars['resouceData']->value){
$_smarty_tpl->tpl_vars['resouceData']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['resouceData']->key;
?>
									<td class="res_name"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['resourceID']->value];?>
</td>
									<?php } ?>
								</tr>
								<?php if ($_smarty_tpl->tpl_vars['shortlyNumber']->value){?>
								<tr>
									<?php  $_smarty_tpl->tpl_vars['resouceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resouceData']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resouceData']->key => $_smarty_tpl->tpl_vars['resouceData']->value){
$_smarty_tpl->tpl_vars['resouceData']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['resouceData']->key;
?>
									<?php if (!isset($_smarty_tpl->tpl_vars['resouceData']->value['current'])){?>
									<?php $_smarty_tpl->createLocalArrayVariable('resouceData', true, 0);
$_smarty_tpl->tpl_vars['resouceData']->value['current'] = $_smarty_tpl->tpl_vars['resouceData']->value['max']+$_smarty_tpl->tpl_vars['resouceData']->value['used'];?>
									<td class="res_current tooltip" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['current']);?>
&nbsp;/&nbsp;<?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['max']);?>
"><span<?php if ($_smarty_tpl->tpl_vars['resouceData']->value['current']<0){?> style="color:red"<?php }?>><?php echo shortly_number($_smarty_tpl->tpl_vars['resouceData']->value['current']);?>
&nbsp;/&nbsp;<?php echo shortly_number($_smarty_tpl->tpl_vars['resouceData']->value['max']);?>
</span></td>
									<?php }else{ ?>
									<td class="res_current tooltip" id="current_<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['current'];?>
" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['current']);?>
"><?php echo shortly_number($_smarty_tpl->tpl_vars['resouceData']->value['current']);?>
</td>
									<?php }?>
									<?php } ?>
								</tr>
								<tr>
									<?php  $_smarty_tpl->tpl_vars['resouceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resouceData']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resouceData']->key => $_smarty_tpl->tpl_vars['resouceData']->value){
$_smarty_tpl->tpl_vars['resouceData']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['resouceData']->key;
?>
									<?php if (!isset($_smarty_tpl->tpl_vars['resouceData']->value['current'])||!isset($_smarty_tpl->tpl_vars['resouceData']->value['max'])){?>
									<td>&nbsp;</td>
									<?php }else{ ?>
									<td class="res_max tooltip" id="max_<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['max'];?>
" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['max']);?>
"><?php echo shortly_number($_smarty_tpl->tpl_vars['resouceData']->value['max']);?>
</td>
									<?php }?>
									<?php } ?>
								</tr>
								<?php }else{ ?>
								<tr>
									<?php  $_smarty_tpl->tpl_vars['resouceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resouceData']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resouceData']->key => $_smarty_tpl->tpl_vars['resouceData']->value){
$_smarty_tpl->tpl_vars['resouceData']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['resouceData']->key;
?>
									<?php if (!isset($_smarty_tpl->tpl_vars['resouceData']->value['current'])){?>
									<?php $_smarty_tpl->createLocalArrayVariable('resouceData', true, 0);
$_smarty_tpl->tpl_vars['resouceData']->value['current'] = $_smarty_tpl->tpl_vars['resouceData']->value['max']+$_smarty_tpl->tpl_vars['resouceData']->value['used'];?>
									<td class="res_current"><span<?php if ($_smarty_tpl->tpl_vars['resouceData']->value['current']<0){?> style="color:red"<?php }?>><?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['current']);?>
&nbsp;/&nbsp;<?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['max']);?>
</span></td>
									<?php }else{ ?>
									<td class="res_current" id="current_<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['current'];?>
"><?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['current']);?>
</td>
									<?php }?>
									<?php } ?>
								</tr>
								<tr>
									<?php  $_smarty_tpl->tpl_vars['resouceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resouceData']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resouceData']->key => $_smarty_tpl->tpl_vars['resouceData']->value){
$_smarty_tpl->tpl_vars['resouceData']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['resouceData']->key;
?>
									<?php if (!isset($_smarty_tpl->tpl_vars['resouceData']->value['current'])||!isset($_smarty_tpl->tpl_vars['resouceData']->value['max'])){?>
									<td>&nbsp;</td>
									<?php }else{ ?>
									<td class="res_max" id="max_<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['current'];?>
"><?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['max']);?>
</td>
									<?php }?>
									<?php } ?>
								</tr>
								<?php }?>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<?php if (!$_smarty_tpl->tpl_vars['vmode']->value){?>
		<script type="text/javascript">
		var viewShortlyNumber	= <?php echo json_encode($_smarty_tpl->tpl_vars['shortlyNumber']->value);?>

		var vacation			= <?php echo $_smarty_tpl->tpl_vars['vmode']->value;?>
;
		<?php  $_smarty_tpl->tpl_vars['resouceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resouceData']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resouceData']->key => $_smarty_tpl->tpl_vars['resouceData']->value){
$_smarty_tpl->tpl_vars['resouceData']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['resouceData']->key;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['resouceData']->value['production'])){?>
		resourceTicker({
			available: <?php echo json_encode($_smarty_tpl->tpl_vars['resouceData']->value['current']);?>
,
			limit: [0, <?php echo json_encode($_smarty_tpl->tpl_vars['resouceData']->value['max']);?>
],
			production: <?php echo json_encode($_smarty_tpl->tpl_vars['resouceData']->value['production']);?>
,
			valueElem: "current_<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['name'];?>
"
		}, true);
		<?php }?>
		<?php } ?>
		</script>
		<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['closed']->value){?>
	<div class="infobox"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_closed'];?>
</div>
	<?php }elseif($_smarty_tpl->tpl_vars['delete']->value){?>
	<div class="infobox"><?php echo $_smarty_tpl->tpl_vars['delete']->value;?>
</div>
	<?php }elseif($_smarty_tpl->tpl_vars['vacation']->value){?>
	<div class="infobox"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tn_vacation_mode'];?>
 <?php echo $_smarty_tpl->tpl_vars['vacation']->value;?>
</div>
	<?php }?><div id="content">
<?php if (!empty($_smarty_tpl->tpl_vars['Queue']->value)){?>
<div id="buildlist" class="buildlist">
	<table style="width:760px">
		<?php  $_smarty_tpl->tpl_vars['List'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['List']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Queue']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['List']->iteration=0;
 $_smarty_tpl->tpl_vars['List']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['List']->key => $_smarty_tpl->tpl_vars['List']->value){
$_smarty_tpl->tpl_vars['List']->_loop = true;
 $_smarty_tpl->tpl_vars['List']->iteration++;
 $_smarty_tpl->tpl_vars['List']->index++;
 $_smarty_tpl->tpl_vars['List']->first = $_smarty_tpl->tpl_vars['List']->index === 0;
?>
		<?php $_smarty_tpl->tpl_vars['ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['List']->value['element'], true, 0);?>
		<tr>
			<td style="width:70%;vertical-align:top;" class="left">
				<?php echo $_smarty_tpl->tpl_vars['List']->iteration;?>
.: 
				<?php if (!($_smarty_tpl->tpl_vars['isBusy']->value['research']&&($_smarty_tpl->tpl_vars['ID']->value==6||$_smarty_tpl->tpl_vars['ID']->value==31))&&!($_smarty_tpl->tpl_vars['isBusy']->value['shipyard']&&($_smarty_tpl->tpl_vars['ID']->value==15||$_smarty_tpl->tpl_vars['ID']->value==21))&&$_smarty_tpl->tpl_vars['RoomIsOk']->value&&$_smarty_tpl->tpl_vars['CanBuildElement']->value&&$_smarty_tpl->tpl_vars['BuildInfoList']->value[$_smarty_tpl->tpl_vars['ID']->value]['buyable']){?>
				<form class="build_form" action="game.php?page=buildings" method="post">
					<input type="hidden" name="cmd" value="insert">
					<input type="hidden" name="building" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">
					<button type="submit" class="build_submit onlist"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['List']->value['level'];?>
<?php if ($_smarty_tpl->tpl_vars['List']->value['destroy']){?> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_dismantle'];?>
<?php }?></button>
				</form>
				<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['List']->value['level'];?>
 <?php if ($_smarty_tpl->tpl_vars['List']->value['destroy']){?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_dismantle'];?>
<?php }?><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['List']->first){?>
				<br><br><div id="progressbar" data-time="<?php echo $_smarty_tpl->tpl_vars['List']->value['resttime'];?>
"></div>
			</td>
			<td>
				<div id="time" data-time="<?php echo $_smarty_tpl->tpl_vars['List']->value['time'];?>
"><br></div>
				<form action="game.php?page=buildings" method="post" class="build_form">
					<input type="hidden" name="cmd" value="cancel">
					<button type="submit" class="build_submit onlist"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_cancel'];?>
</button>
				</form>
				<?php }else{ ?>
			</td>
			<td>
				<form action="game.php?page=buildings" method="post" class="build_form">
					<input type="hidden" name="cmd" value="remove">
					<input type="hidden" name="listid" value="<?php echo $_smarty_tpl->tpl_vars['List']->iteration;?>
">
					<button type="submit" class="build_submit onlist"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_cancel'];?>
</button>
				</form>
				<?php }?>
				<br><span style="color:lime" data-time="<?php echo $_smarty_tpl->tpl_vars['List']->value['endtime'];?>
" class="timer"><?php echo $_smarty_tpl->tpl_vars['List']->value['display'];?>
</span>
			</td>
		</tr>
	<?php } ?>
	</table>
</div>
<?php }?>
<table style="width:760px">
	<?php  $_smarty_tpl->tpl_vars['Element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Element']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['BuildInfoList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Element']->key => $_smarty_tpl->tpl_vars['Element']->value){
$_smarty_tpl->tpl_vars['Element']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['Element']->key;
?>
	<tr>
		<td rowspan="2" style="width:120px;">
			<a href="#" onclick="return Dialog.info(<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
)">
				<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
gebaeude/<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
.gif" alt="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
" width="120" height="120">
			</a>
		</td>
		<th>
			<a href="#" onclick="return Dialog.info(<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
</a><?php if ($_smarty_tpl->tpl_vars['Element']->value['level']>0){?> (<?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_lvl'];?>
 <?php echo $_smarty_tpl->tpl_vars['Element']->value['level'];?>
<?php if ($_smarty_tpl->tpl_vars['Element']->value['maxLevel']!=255){?>/<?php echo $_smarty_tpl->tpl_vars['Element']->value['maxLevel'];?>
<?php }?>)<?php }?>
		</th>
	</tr>
	<tr>
		<td>
			<table style="width:100%">
				<tr>
					<td class="transparent left" style="width:90%;padding:10px;"><p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['shortDescription'][$_smarty_tpl->tpl_vars['ID']->value];?>
</p>
					<p><?php  $_smarty_tpl->tpl_vars['RessAmount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RessAmount']->_loop = false;
 $_smarty_tpl->tpl_vars['RessID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Element']->value['costRessources']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RessAmount']->key => $_smarty_tpl->tpl_vars['RessAmount']->value){
$_smarty_tpl->tpl_vars['RessAmount']->_loop = true;
 $_smarty_tpl->tpl_vars['RessID']->value = $_smarty_tpl->tpl_vars['RessAmount']->key;
?>
					<?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['RessID']->value];?>
: <b><span style="color:<?php if ($_smarty_tpl->tpl_vars['Element']->value['costOverflow'][$_smarty_tpl->tpl_vars['RessID']->value]==0){?>lime<?php }else{ ?>red<?php }?>"><?php echo pretty_number($_smarty_tpl->tpl_vars['RessAmount']->value);?>
</span></b>
					<?php } ?></p></td>
					<td class="transparent" style="vertical-align:middle;width:100px">
					<?php if ($_smarty_tpl->tpl_vars['Element']->value['maxLevel']==$_smarty_tpl->tpl_vars['Element']->value['levelToBuild']){?>
						<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_maxlevel'];?>
</span>
					<?php }elseif(($_smarty_tpl->tpl_vars['isBusy']->value['research']&&($_smarty_tpl->tpl_vars['ID']->value==6||$_smarty_tpl->tpl_vars['ID']->value==31))||($_smarty_tpl->tpl_vars['isBusy']->value['shipyard']&&($_smarty_tpl->tpl_vars['ID']->value==15||$_smarty_tpl->tpl_vars['ID']->value==21))){?>
						<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_working'];?>
</span>
					<?php }else{ ?>
						<?php if ($_smarty_tpl->tpl_vars['RoomIsOk']->value){?>
							<?php if ($_smarty_tpl->tpl_vars['CanBuildElement']->value&&$_smarty_tpl->tpl_vars['Element']->value['buyable']){?>
							<form action="game.php?page=buildings" method="post" class="build_form">
								<input type="hidden" name="cmd" value="insert">
								<input type="hidden" name="building" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">
								<button type="submit" class="build_submit"><?php if ($_smarty_tpl->tpl_vars['Element']->value['level']==0){?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_build'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_build_next_level'];?>
<?php echo $_smarty_tpl->tpl_vars['Element']->value['levelToBuild']+1;?>
<?php }?></button>
							</form>
							<?php }else{ ?>
							<span style="color:red"><?php if ($_smarty_tpl->tpl_vars['Element']->value['level']==0){?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_build'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_build_next_level'];?>
<?php echo $_smarty_tpl->tpl_vars['Element']->value['levelToBuild']+1;?>
<?php }?></span>
							<?php }?>
						<?php }else{ ?>
						<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_no_more_fields'];?>
</span>
						<?php }?>
					<?php }?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td colspan="2" style="margin-bottom:10px;">  
			<table style="width:100%">
				<tr>
					<td class="transparent left">
						<?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_remaining'];?>
<br>
						<?php  $_smarty_tpl->tpl_vars['ResCount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ResCount']->_loop = false;
 $_smarty_tpl->tpl_vars['ResType'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Element']->value['costOverflow']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ResCount']->key => $_smarty_tpl->tpl_vars['ResCount']->value){
$_smarty_tpl->tpl_vars['ResCount']->_loop = true;
 $_smarty_tpl->tpl_vars['ResType']->value = $_smarty_tpl->tpl_vars['ResCount']->key;
?>
						<?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ResType']->value];?>
: <span style="font-weight:700"><?php echo pretty_number($_smarty_tpl->tpl_vars['ResCount']->value);?>
</span><br>
						<?php } ?>
						<br>
					</td>
				</tr>
				<tr>		
					<td class="transparent left" style="width:68%">
						<?php if (!empty($_smarty_tpl->tpl_vars['Element']->value['infoEnergy'])){?>
							<?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_next_level'];?>
<br>
							<?php echo $_smarty_tpl->tpl_vars['Element']->value['infoEnergy'];?>
<br>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['Element']->value['level']>0){?>
							<?php if ($_smarty_tpl->tpl_vars['ID']->value==43){?><a href="#" onclick="return Dialog.info(<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_jump_gate_action'];?>
</a><?php }?>
							<?php if (($_smarty_tpl->tpl_vars['ID']->value==44&&!$_smarty_tpl->tpl_vars['HaveMissiles']->value)||$_smarty_tpl->tpl_vars['ID']->value!=44){?><br><a class="tooltip_sticky" data-tooltip-content="
								
								<table style='width:300px'>
									<tr>
										<th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_price_for_destroy'];?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['Element']->value['level'];?>
</th>
									</tr>
									<?php  $_smarty_tpl->tpl_vars['ResCount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ResCount']->_loop = false;
 $_smarty_tpl->tpl_vars['ResType'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Element']->value['destroyRessources']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ResCount']->key => $_smarty_tpl->tpl_vars['ResCount']->value){
$_smarty_tpl->tpl_vars['ResCount']->_loop = true;
 $_smarty_tpl->tpl_vars['ResType']->value = $_smarty_tpl->tpl_vars['ResCount']->key;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ResType']->value];?>
</td>
										<td><span style='color:<?php if ($_smarty_tpl->tpl_vars['Element']->value['destroyOverflow'][$_smarty_tpl->tpl_vars['RessID']->value]==0){?>lime<?php }else{ ?>red<?php }?>'><?php echo pretty_number($_smarty_tpl->tpl_vars['ResCount']->value);?>
</span></td>
									</tr>
									<?php } ?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_destroy_time'];?>
</td>
										<td><?php echo pretty_time($_smarty_tpl->tpl_vars['Element']->value['destroyTime']);?>
</td>
									</tr>
									<tr>
										<td colspan='2'>
											<form action='game.php?page=buildings' method='post' class='build_form'>
												<input type='hidden' name='cmd' value='destroy'>
												<input type='hidden' name='building' value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'>
												<button type='submit' class='build_submit onlist'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_dismantle'];?>
</button>
											</form>
										</td>
									</tr>
								</table>
								
								"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_dismantle'];?>
</a><?php }?>
						<?php }else{ ?>
							&nbsp;
						<?php }?>
					</td>
					<td class="transparent right" style="white-space:nowrap;">
						<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fgf_time'];?>
:<br><?php echo pretty_time($_smarty_tpl->tpl_vars['Element']->value['elementTime']);?>

					</td>
				</tr>	
			</table>
		</td>
	</tr>
	<?php } ?>
</table>
</div>
<?php  $_smarty_tpl->tpl_vars['cronjob'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cronjob']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cronjobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cronjob']->key => $_smarty_tpl->tpl_vars['cronjob']->value){
$_smarty_tpl->tpl_vars['cronjob']->_loop = true;
?><img src="cronjob.php?cronjobID=<?php echo $_smarty_tpl->tpl_vars['cronjob']->value;?>
" alt=""><?php } ?>
<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>