<?php /*%%SmartyHeaderCode:1328168657547e80a588cc66-19801526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f241f002fb1e68fe292188cd960ecb1202d7fe8' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/page.register.default.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
    'b1b7daab2c52f36539733087c1ac60274106c2b0' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/layout.normal.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
    '5c883fa89672f4ec1d5882695d0292c565102d82' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/main.header.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
    '186f668ffff9f4b38c1f29ae816a403efbd2ee51' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/main.navigation.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
    '73d3d4cdb3713e07994bdce36b26f7a080732fba' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/main.footer.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1328168657547e80a588cc66-19801526',
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5484eee3673967_35905297',
  'has_nocache_code' => true,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5484eee3673967_35905297')) {function content_5484eee3673967_35905297($_smarty_tpl) {?><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_html_options')) include '/home/qwatakayean/public_html/darkness/includes/libs/Smarty/plugins/function.html_options.php';
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
	<link rel="stylesheet" type="text/css" href="styles/resource/css/login/main.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['siteTitleRegister'];?>
 - <?php echo $_smarty_tpl->tpl_vars['gameName']->value;?>
</title>
	<meta name="generator" content="2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
	<!-- 
		This website is powered by 2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<meta name="keywords" content="Weltraum Browsergame, XNova, 2Moons, Space, Private, Server, Speed">
	<meta name="description" content="2Moons Browsergame powerd by http://2moons.cc/"> <!-- Noob Check :) -->
	<!--[if lt IE 9]>
	<script src="scripts/base/html5.js"></script>
	<![endif]-->
	<script src="scripts/base/jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script src="scripts/base/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script src="scripts/base/jquery.fancybox.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script src="scripts/login/main.js"></script>
	<script></script>
	
<link rel="stylesheet" type="text/css" href="styles/resource/css/login/register.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
<?php if ($_smarty_tpl->tpl_vars['recaptchaEnable']->value){?>
<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
<script type="text/javascript">
var RecaptchaOptions = {
	lang : '<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
',
};

var recaptchaPublicKey = "<?php echo $_smarty_tpl->tpl_vars['recaptchaPublicKey']->value;?>
";

Recaptcha.create(recaptchaPublicKey, 'display_captcha', {
	theme: 'custom',
	tabindex: '6',
	custom_theme_widget: 'display_captcha'
});
</script>
<?php }?>
<script type="text/javascript" src="scripts/login/register.js"></script>
<script></script>
	
</head>
<body id="register" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="page"><header>
	<nav>
		<ul id="menu">
			<li><a href="index.php"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_index'];?>
</a></li>
			<li><a href="index.php?page=board" target="board"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['forum'];?>
</a></li>
			<li><a href="index.php?page=news"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_news'];?>
</a></li>
			<li><a href="index.php?page=rules"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_rules'];?>
</a></li>
			<li><a href="index.php?page=battleHall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_battlehall'];?>
</a></li>
			<li><a href="index.php?page=banList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_banlist'];?>
</a></li>
			<li><a href="index.php?page=disclamer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_disclamer'];?>
</a></li>
		</ul>
	</nav>
	<nav>
		<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
		<ul id="language">
		<?php  $_smarty_tpl->tpl_vars['langName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['langName']->_loop = false;
 $_smarty_tpl->tpl_vars['langKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['langName']->key => $_smarty_tpl->tpl_vars['langName']->value){
$_smarty_tpl->tpl_vars['langName']->_loop = true;
 $_smarty_tpl->tpl_vars['langKey']->value = $_smarty_tpl->tpl_vars['langName']->key;
?>
		<li><a href="?lang=<?php echo $_smarty_tpl->tpl_vars['langKey']->value;?>
" rel="alternate" hreflang="<?php echo $_smarty_tpl->tpl_vars['langKey']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['langName']->value;?>
"><span class="flags <?php echo $_smarty_tpl->tpl_vars['langKey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['langName']->value;?>
</span></a></li>
		<?php } ?>
		</ul>
		<?php }?>
	</nav>
</header><div id="content">
<section>
	<table class="box-out">
		<tr class="box-out-header">
			<td class="box-out-header-left"></td>
			<td class="box-out-header-center"></td>
			<td class="box-out-header-right"></td>
		</tr>
		<tr class="box-out-content">
			<td class="box-out-content-left"></td>
			<td class="box-out-content-center">
				<table class="box-inner">
					<tr class="box-inner-header">
						<td class="box-inner-header-left"></td>
						<td class="box-inner-header-center"><h1><?php echo $_smarty_tpl->tpl_vars['LNG']->value['siteTitleRegister'];?>
</h1></td>
						<td class="box-inner-header-right"></td>
					</tr>
					<tr class="box-inner-content">
						<td class="box-inner-content-left"></td>
						<td class="box-inner-content-center">
<div id="registerFormWrapper">
<form id="registerForm" method="post" action="index.php?page=register" data-action="index.php?page=register">
<input type="hidden" value="send" name="mode">
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['externalAuth']->value['account'];?>
" name="externalAuth[account]">
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['externalAuth']->value['method'];?>
" name="externalAuth[method]">
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['referralData']->value['id'];?>
" name="referralID">
	<div class="rowForm">
		<label for="universe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['universe'];?>
</label>
		<select name="uni" id="universe" class="changeAction"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['universeSelect']->value,'selected'=>$_smarty_tpl->tpl_vars['UNI']->value),$_smarty_tpl);?>
</select>
			</div>
	<?php if (!empty($_smarty_tpl->tpl_vars['externalAuth']->value['account'])){?>
	<?php if ($_smarty_tpl->tpl_vars['facebookEnable']->value){?>
	<div class="rowForm">
		<label><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerFacebookAccount'];?>
</label>
		<span class="text fbname"><?php echo $_smarty_tpl->tpl_vars['accountName']->value;?>
</span>
	</div>
	<?php }?>
	<?php }elseif(empty($_smarty_tpl->tpl_vars['referralData']->value['id'])){?>
	<?php if ($_smarty_tpl->tpl_vars['facebookEnable']->value){?>
	<div class="rowForm">
		<label><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerFacebookAccount'];?>
</label>
		<a href="#" data-href="index.php?page=externalAuth&method=facebook" class="fb_login"><img src="styles/resource/images/facebook/fb-connect-large.png" alt=""></a>
	</div>
	<?php }?>
	<?php }?>
	<div class="rowForm">
		<label for="username"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerUsername'];?>
</label>
		<input type="text" class="input" name="username" id="username" maxlenght="32">
				<span class="inputDesc"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerUsernameDesc'];?>
</span>
	</div>
	<div class="rowForm">
		<label for="password"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerPassword'];?>
</label>
		<input type="password" class="input" name="password" id="password">
				<span class="inputDesc"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerPasswordDesc'];?>
</span>
	</div>
	<div class="rowForm">
		<label for="passwordReplay"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerPasswordReplay'];?>
</label>
		<input type="password" class="input" name="passwordReplay" id="passwordReplay">
				<span class="inputDesc"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerPasswordReplayDesc'];?>
</span>
	</div>
	<div class="rowForm">
		<label for="email"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerEmail'];?>
</label>
		<input type="email" class="input" name="email" id="email">
				<span class="inputDesc"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerEmailDesc'];?>
</span>
	</div>
	<div class="rowForm">
		<label for="emailReplay"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerEmailReplay'];?>
</label>
		<input type="email" class="input" name="emailReplay" id="emailReplay">
				<span class="inputDesc"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerEmailReplayDesc'];?>
</span>
	</div>
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
	<div class="rowForm">
		<label for="language"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerLanguage'];?>
</label>
		<select name="lang" id="language"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['languages']->value,'selected'=>$_smarty_tpl->tpl_vars['lang']->value),$_smarty_tpl);?>
</select>
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value['language'])){?><span class="error errorLanguage"></span><?php }?>
		<div class="clear"></div>
	</div>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['referralData']->value['name'])){?>
	<div class="rowForm">
		<label for="language"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerReferral'];?>
</label>
		<span class="text"><?php echo $_smarty_tpl->tpl_vars['referralData']->value['name'];?>
</span>
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value['language'])){?><span class="error errorLanguage"></span><?php }?>
		<div class="clear"></div>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['recaptchaEnable']->value){?>
	<div class="rowForm" id="captchaRow">
		<div id="recaptcha_widget">
			<label for="recaptcha_response_field"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerCaptcha'];?>
<p class="captchaButtons"><a href="javascript:Recaptcha.reload()"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerCaptchaReload'];?>
</a></p></label>
			<span class="inputDesc"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerCaptchaDesc'];?>
</span>
			<div id="recaptcha_image"></div>			
			<div id="recaptcha_input_wrap"><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" class="input"></div>
		</div>
		<div class="clear"></div>
	</div>
	<?php }?>
	<div class="rowForm">
		<label for="rules"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerRules'];?>
</label>
		<input type="checkbox" name="rules" id="rules" value="1">
				<span class="inputDesc"><?php echo $_smarty_tpl->tpl_vars['registerRulesDesc']->value;?>
</span>
	</div>
	<div class="rowForm">
		<input type="submit" class="submitButton" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['buttonRegister'];?>
">
	</div>
</form>
</td>
						<td class="box-inner-content-right"></td>
					</tr>
					<tr class="box-inner-footer">
						<td class="box-inner-footer-left"></td>
						<td class="box-inner-footer-center"></td>
						<td class="box-inner-footer-right"></td>
					</tr>
				</table>					
			</td>
			<td class="box-out-content-right"></td>
		</tr>
		<tr class="box-out-footer">
			<td class="box-out-footer-left"></td>
			<td class="box-out-footer-center"></td>
			<td class="box-out-footer-right"></td>
		</tr>
	</table>
</section>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>