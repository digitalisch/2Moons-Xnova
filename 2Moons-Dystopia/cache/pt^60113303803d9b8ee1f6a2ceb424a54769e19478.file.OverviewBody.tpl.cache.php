<?php /* Smarty version Smarty-3.1.13, created on 2015-01-13 23:21:45
         compiled from "C:\Wamp\www\Dystopia\styles\templates\adm\OverviewBody.tpl" */ ?>
<?php /*%%SmartyHeaderCode:830754b59a79aac823-99734263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60113303803d9b8ee1f6a2ceb424a54769e19478' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\adm\\OverviewBody.tpl',
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
  'nocache_hash' => '830754b59a79aac823-99734263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LNG' => 0,
    'Messages' => 1,
    'Message' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b59a79ddef59_23142214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b59a79ddef59_23142214')) {function content_54b59a79ddef59_23142214($_smarty_tpl) {?><?php /*  Call merged included template "overall_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '830754b59a79aac823-99734263');
content_54b59a79b01f47_99464507($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_header.tpl" */?>
<center>
<h1><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_title'];?>
</h1>
<table width="90%" style="border:2px <?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php if (empty($_smarty_tpl->tpl_vars[\'Messages\']->value)){?>/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
lime<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php }else{ ?>/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
red<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php }?>/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
 solid;text-align:center;font-weight:bold;">
<tr>
    <td class="transparent"><?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php  $_smarty_tpl->tpl_vars[\'Message\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'Message\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'Messages\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'Message\']->key => $_smarty_tpl->tpl_vars[\'Message\']->value){
$_smarty_tpl->tpl_vars[\'Message\']->_loop = true;
?>/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>

	<span style="color:red"><?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
</span><br>
	<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php }
if (!$_smarty_tpl->tpl_vars[\'Message\']->_loop) {
?>/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ow_none\'];?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php } ?>/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>

	</td>
</tr>
</table>
<br>
<table width="80%">
	<tr>
    	<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_overview'];?>
</th>
    </tr>
	<tr>
    	<td style="height:50px" colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_welcome_text'];?>
<br><iframe src="https://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2F2Moons%2F129282307106646&amp;width=292&amp;connections=0&amp;stream=false&amp;header=false&amp;height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:62px;" allowTransparency="true"></iframe></td>
    </tr>
    <tr>
        <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_support'];?>
</th>
    </tr>
    <tr>
        <td colspan="2"><a href="http://code.google.com/p/2moons/" target="_blank">Project Homepage</a><br>
        <a href="http://code.google.com/p/2moons/source/list" target="_blank">SVN Revision List</a><br>
		<a href="http://www.titanspace.org/" target="_blank">Offical Betauni</a><br>
		<a href="http://2moons.cc/" target="_blank">2moons.cc - <?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_forum'];?>
</a></td>
    </tr> 
	<tr>
		<th style="width:50%;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_donate'];?>
 - Paypal</th>
		<th style="width:50%;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_donate'];?>
 - Moneybookers</th>
	</tr>
	<tr>
		<td align="center" style="height:110px;">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="CM6PQFUATN7MS">
		<input type="image" src="https://www.paypal.com/de_DE/DE/i/btn/btn_donateCC_LG.gif" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen - mit PayPal." style="background:transparent;border:0px none;">
		</form>
		</td>
		<td align="center">
		<img src="http://www.moneybookers.com/images/logos/additional_logos/de_donatewith.gif" style="background:transparent;border:0px none;">
		<form action="https://www.moneybookers.com/app/payment.pl" target="_blank">
		<input type="hidden" name="pay_to_email" value="slaver7@gmail.com">
		<input type="hidden" name="recipient_description" value="Donation for 2Moons">
		<input type="hidden" name="return_url_target" value="1">
		<input type="hidden" name="cancel_url_target" value="1">
		<input type="hidden" name="dynamic_descriptor" value="Descriptor">
		<input type="hidden" name="language" value="DE">
		<input type="hidden" name="confirmation_note" value="Thank you for this Donation">
		<input type="hidden" name="detail1_description" value="Donation">
		<input type="hidden" name="detail1_text" value="Thank you for this donation!">
		<input type="hidden" name="rec_period" value="1">
		<input type="hidden" name="rec_grace_period" value="1">
		<input type="hidden" name="rec_cycle" value="day">
		<input type="hidden" name="submit_id" value="Submit">
		<input type="text" name="amount" value="0.00">
		<select name="currency">
			<option value="EUR">EUR</option>
			<option value="USD">USD</option>
		</select><br>
		<input type="submit" name="Pay" value="Pay">
		</form>
		</td>
	</tr>
	<tr>
		<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_updates'];?>
</th>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<div id="feed"></div>
		</td>
	</tr> 
	<tr>
		<th colspan="2"><a href="https://www.facebook.com/2Moons.Game"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_news'];?>
</a></th>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<div id="news"></div>
		</td>
	</tr>  
    <tr>
    	<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_credits'];?>
</th>
    </tr>
    <tr>
    	<td colspan="2">
            <table align="center">
                <tr>
					<td class="transparent" colspan="3"><h3><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_proyect_leader'];?>
</h3></td>
                </tr>
                <tr>
					<td class="transparent" colspan="3"><h3><a href="https://2moons.cc/user/5-jan/" style="color:red">Jan</a></h3></td>
                </tr>
			</table>
			<div style="width:100%">
				<div style="float:left;width:33%;min-width:250px;">
					<table>
						<tr>
							<td class="transparent"><p>&nbsp;</p><h3><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_developers'];?>
</h3></td>
						</tr>
						<tr>
							<td class="transparent">
								<a href="https://2moons.cc/user/5-jan/" style="color:red">Jan</a><br>
								<a href="https://2moons.cc/user/64-orion/" style="color:red">Orion</a><br>
								<a href="https://2moons.cc/user/88-fc92/" style="color:red">FC92</a>
							</td>
						</tr>
					</table>
				</div>
				<div style="float:left;width:33%;min-width:250px;">
					<table>
						<tr>
							<td class="transparent"><p>&nbsp;</p><h3><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_translator'];?>
</h3></td>
						</tr>
						<tr>
							<td class="transparent">
								<table width="250px;">
								<tr>
									<td class="transparent">
										<a href="https://2moons.cc/user/100-qwatakayean/" target="_blank">QwataKayean</a>
									</td>
									<td class="transparent">
										<img src="styles/resource/images/login/flags/us.png" alt="(english)">
									</td>
								</tr>
								<tr>
									<td class="transparent">
										<a href="https://2moons.cc/user/529-haloraptor33/" target="_blank">HaloRaptor33</a> / <a href="http://2moons.cc/user/1231-scofield06/">scofield06</a>
									</td>
									<td class="transparent">
										<img src="styles/resource/images/login/flags/fr.png" alt="(french)">
									</td>
								</tr>
								<tr>
									<td class="transparent">
										<a href="https://2moons.cc/user/205-idro/" target="_blank">Idro</a>
									</td>
									<td class="transparent">
										<img src="styles/resource/images/login/flags/it.png" alt="(italia)">
									</td>
								</tr>
								<tr>
									<td class="transparent">
										<a href="https://2moons.cc/user/100-qwatakayean/" target="_blank">QwataKayean</a>
									</td>
									<td class="transparent">
										<img src="styles/resource/images/login/flags/pt.png" alt="(portuguese)">
									</td>
								</tr>
								<tr>
									<td class="transparent">
										<a href="https://2moons.cc/user/98-inquisitorea/" target="_blank">InquisitorEA</a>
									</td>
									<td class="transparent">
										<img src="styles/resource/images/login/flags/ru.png" alt="(russian)">
									</td>
								</tr>
								<tr>
									<td class="transparent">
										<a href="https://2moons.cc/user/64-orion/" style="color:red">Orion</a>
									</td>
									<td class="transparent">
										<img src="styles/resource/images/login/flags/es.png" alt="(spanish)">
									</td>
								</tr>
								<tr>
									<td class="transparent">
										<a href="http://2moons.cc/user/853-pandorax/" target="_blank">_pandorax_ </a>
									</td>
									<td class="transparent">
										<img src="styles/resource/images/login/flags/si.png" alt="(slovenian)">
									</td>
								</tr>
								</table>
							</td>
						</tr> 
					</table>
				</div>
				<div style="float:left;width:33%;min-width:250px;">
					<table>
						<tr>
							<td class="transparent"><p>&nbsp;</p><h3><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_special_thanks'];?>
</h3></td>
						</tr>
						<tr>
							<td class="transparent">
								<table width="250px;">
								<tr>
									<td class="transparent left">Ralf M.</td>
									<td class="transparent left">InquisitorEA</td>
									<td class="transparent left">lucky</td>
								</tr>
								<tr>
									<td class="transparent left">Metusalem</td>
									<td class="transparent left">Meikel</td>
									<td class="transparent left">Phil</td>
								</tr>
								<tr>
									<td class="transparent left">Schnippi</td>
									<td class="transparent left">Vobi</td>
									<td class="transparent left">Sycrog</td>
								</tr>
								<tr>
									<td class="transparent left">Raito</td>
									<td class="transparent left">Chlorel</td>
									<td class="transparent left">e-Zobar</td>
								</tr>
								<tr>
									<td class="transparent left">Flousedid</td>
									<td class="transparent left">&nbsp;</td>
									<td class="transparent left">&nbsp;</td>
								</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
			</div>
        </td>
    </tr>
</table>
</center>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("feeds", "1");
google.setOnLoadCallback(initialize);
function initialize() {
	var feedControl = new google.feeds.FeedControl();
	feedControl.addFeed("http://code.google.com/feeds/p/2moons/svnchanges/basic", "");
	feedControl.draw(document.getElementById("feed"));
	var feedControl = new google.feeds.FeedControl();
	feedControl.addFeed("https://www.facebook.com/feeds/page.php?id=129282307106646&format=rss20", "");
	feedControl.draw(document.getElementById("news"));
}
</script>
<?php /*  Call merged included template "overall_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '830754b59a79aac823-99734263');
content_54b59a79d946a7_05843329($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-13 23:21:45
         compiled from "C:\Wamp\www\Dystopia\styles\templates\adm\overall_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b59a79b01f47_99464507')) {function content_54b59a79b01f47_99464507($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'title\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/admin/main.css?v=<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
, <?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
, <?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
, <?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
, <?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
, <?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
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
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>

	<script type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php } ?>/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>

	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:830754b59a79aac823-99734263%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:830754b59a79aac823-99734263%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-13 23:21:45
         compiled from "C:\Wamp\www\Dystopia\styles\templates\adm\overall_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b59a79d946a7_05843329')) {function content_54b59a79d946a7_05843329($_smarty_tpl) {?><?php if (isset($_GET['reload'])){?>
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