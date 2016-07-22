<?php /* Smarty version Smarty-3.1.13, created on 2014-12-03 03:16:53
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/login/page.register.default.tpl" */ ?>
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
  ),
  'nocache_hash' => '1328168657547e80a588cc66-19801526',
  'function' => 
  array (
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547e80a5d3b2c2_20526608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e80a5d3b2c2_20526608')) {function content_547e80a5d3b2c2_20526608($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'/home/qwatakayean/public_html/darkness/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
<?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '1328168657547e80a588cc66-19801526');
content_547e80a59334c2_78386315($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>
<?php /*  Call merged included template "main.navigation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '1328168657547e80a588cc66-19801526');
content_547e80a5a39a43_38835685($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.navigation.tpl" */?>
<div id="content">
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
						<td class="box-inner-header-center"><h1><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'siteTitleRegister\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</h1></td>
						<td class="box-inner-header-right"></td>
					</tr>
					<tr class="box-inner-content">
						<td class="box-inner-content-left"></td>
						<td class="box-inner-content-center">
<div id="registerFormWrapper">
<form id="registerForm" method="post" action="index.php?page=register" data-action="index.php?page=register">
<input type="hidden" value="send" name="mode">
<input type="hidden" value="<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'externalAuth\']->value[\'account\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
" name="externalAuth[account]">
<input type="hidden" value="<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'externalAuth\']->value[\'method\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
" name="externalAuth[method]">
<input type="hidden" value="<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'referralData\']->value[\'id\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
" name="referralID">
	<div class="rowForm">
		<label for="universe"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'universe\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</label>
		<select name="uni" id="universe" class="changeAction"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'universeSelect\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'UNI\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</select>
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value['uni'])){?><span class="error errorUni"></span><?php }?>
	</div>
	<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'externalAuth\']->value[\'account\'])){?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

	<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php if ($_smarty_tpl->tpl_vars[\'facebookEnable\']->value){?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

	<div class="rowForm">
		<label><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerFacebookAccount\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</label>
		<span class="text fbname"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'accountName\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</span>
	</div>
	<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php }?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

	<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php }elseif(empty($_smarty_tpl->tpl_vars[\'referralData\']->value[\'id\'])){?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

	<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php if ($_smarty_tpl->tpl_vars[\'facebookEnable\']->value){?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

	<div class="rowForm">
		<label><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerFacebookAccount\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</label>
		<a href="#" data-href="index.php?page=externalAuth&method=facebook" class="fb_login"><img src="styles/resource/images/facebook/fb-connect-large.png" alt=""></a>
	</div>
	<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php }?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

	<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php }?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

	<div class="rowForm">
		<label for="username"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerUsername\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</label>
		<input type="text" class="input" name="username" id="username" maxlenght="32">
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value['username'])){?><span class="error errorUsername"></span><?php }?>
		<span class="inputDesc"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerUsernameDesc\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</span>
	</div>
	<div class="rowForm">
		<label for="password"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerPassword\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</label>
		<input type="password" class="input" name="password" id="password">
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value['password'])){?><span class="error errorPassword"></span><?php }?>
		<span class="inputDesc"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerPasswordDesc\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</span>
	</div>
	<div class="rowForm">
		<label for="passwordReplay"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerPasswordReplay\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</label>
		<input type="password" class="input" name="passwordReplay" id="passwordReplay">
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value['passwordReplay'])){?><span class="error errorPasswordReplay"></span><?php }?>
		<span class="inputDesc"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerPasswordReplayDesc\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</span>
	</div>
	<div class="rowForm">
		<label for="email"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerEmail\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</label>
		<input type="email" class="input" name="email" id="email">
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value['email'])){?><span class="error errorEmail"></span><?php }?>
		<span class="inputDesc"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerEmailDesc\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</span>
	</div>
	<div class="rowForm">
		<label for="emailReplay"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerEmailReplay\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</label>
		<input type="email" class="input" name="emailReplay" id="emailReplay">
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value['emailReplay'])){?><span class="error errorEmailReplay"></span><?php }?>
		<span class="inputDesc"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerEmailReplayDesc\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</span>
	</div>
	<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php if (count($_smarty_tpl->tpl_vars[\'languages\']->value)>1){?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

	<div class="rowForm">
		<label for="language"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerLanguage\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</label>
		<select name="lang" id="language"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'languages\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'lang\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</select>
		<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'error\']->value[\'language\'])){?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
<span class="error errorLanguage"></span><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php }?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

		<div class="clear"></div>
	</div>
	<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php }?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

	<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'referralData\']->value[\'name\'])){?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

	<div class="rowForm">
		<label for="language"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerReferral\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</label>
		<span class="text"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'referralData\']->value[\'name\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</span>
		<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'error\']->value[\'language\'])){?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
<span class="error errorLanguage"></span><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php }?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

		<div class="clear"></div>
	</div>
	<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php }?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

	<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php if ($_smarty_tpl->tpl_vars[\'recaptchaEnable\']->value){?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

	<div class="rowForm" id="captchaRow">
		<div id="recaptcha_widget">
			<label for="recaptcha_response_field"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerCaptcha\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
<p class="captchaButtons"><a href="javascript:Recaptcha.reload()"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerCaptchaReload\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</a></p></label>
			<span class="inputDesc"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerCaptchaDesc\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</span>
			<div id="recaptcha_image"></div>			
			<div id="recaptcha_input_wrap"><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" class="input"></div>
		</div>
		<div class="clear"></div>
	</div>
	<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php }?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

	<div class="rowForm">
		<label for="rules"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerRules\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</label>
		<input type="checkbox" name="rules" id="rules" value="1">
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value['rules'])){?><span class="error errorRules"></span><?php }?>
		<span class="inputDesc"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'registerRulesDesc\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</span>
	</div>
	<div class="rowForm">
		<input type="submit" class="submitButton" value="<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'buttonRegister\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
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
<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-12-03 03:16:53
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/login/main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_547e80a59334c2_78386315')) {function content_547e80a59334c2_78386315($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<link rel="stylesheet" type="text/css" href="styles/resource/css/login/main.css?v=<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<title><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'siteTitleRegister\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
 - <?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'gameName\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<meta name="keywords" content="Weltraum Browsergame, XNova, 2Moons, Space, Private, Server, Speed">
	<meta name="description" content="2Moons Browsergame powerd by http://2moons.cc/"> <!-- Noob Check :) -->
	<!--[if lt IE 9]>
	<script src="scripts/base/html5.js"></script>
	<![endif]-->
	<script src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
"></script>
	<script src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
"></script>
	<script src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
"></script>
	<script src="scripts/login/main.js"></script>
	<script><?php if (isset($_smarty_tpl->tpl_vars['code']->value)){?>var loginError = <?php echo json_encode($_smarty_tpl->tpl_vars['code']->value);?>
;<?php }?></script>
	
<link rel="stylesheet" type="text/css" href="styles/resource/css/login/register.css?v=<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
">
<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php if ($_smarty_tpl->tpl_vars[\'recaptchaEnable\']->value){?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
<script type="text/javascript">
var RecaptchaOptions = {
	lang : '<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
',
};

var recaptchaPublicKey = "<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'recaptchaPublicKey\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
";

Recaptcha.create(recaptchaPublicKey, 'display_captcha', {
	theme: 'custom',
	tabindex: '6',
	custom_theme_widget: 'display_captcha'
});
</script>
<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php }?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

<script type="text/javascript" src="scripts/login/register.js"></script>
<script></script>
	
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
">
	<div id="page"><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-12-03 03:16:53
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/login/main.navigation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_547e80a5a39a43_38835685')) {function content_547e80a5a39a43_38835685($_smarty_tpl) {?><header>
	<nav>
		<ul id="menu">
			<li><a href="index.php"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_index\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</a></li>
			<li><a href="index.php?page=board" target="board"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'forum\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</a></li>
			<li><a href="index.php?page=news"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_news\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</a></li>
			<li><a href="index.php?page=rules"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_rules\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</a></li>
			<li><a href="index.php?page=battleHall"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_battlehall\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</a></li>
			<li><a href="index.php?page=banList"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_banlist\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</a></li>
			<li><a href="index.php?page=disclamer"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_disclamer\'];?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</a></li>
		</ul>
	</nav>
	<nav>
		<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php if (count($_smarty_tpl->tpl_vars[\'languages\']->value)>1){?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

		<ul id="language">
		<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php  $_smarty_tpl->tpl_vars[\'langName\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'langName\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'langKey\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'languages\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'langName\']->key => $_smarty_tpl->tpl_vars[\'langName\']->value){
$_smarty_tpl->tpl_vars[\'langName\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'langKey\']->value = $_smarty_tpl->tpl_vars[\'langName\']->key;
?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

		<li><a href="?lang=<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
" rel="alternate" hreflang="<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
" title="<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
"><span class="flags <?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
"><?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>
</span></a></li>
		<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php } ?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

		</ul>
		<?php echo '/*%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/<?php }?>/*/%%SmartyNocache:1328168657547e80a588cc66-19801526%%*/';?>

	</nav>
</header><?php }} ?>