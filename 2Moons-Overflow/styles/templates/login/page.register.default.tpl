{block name="content"}
<br><br><h2><font color=white><center>{$LNG.siteTitleRegister}</center></font></h2><br><br>

<section id="banner2">
<header><br><br><br><br><br><br><br><br><br><br><br><br><br></header>

<div class="reg">
<form id="registerForm" method="post" action="index.php?page=register" data-action="index.php?page=register">
<input type="hidden" value="send" name="mode">
<input type="hidden" value="{$externalAuth.account}" name="externalAuth[account]">
<input type="hidden" value="{$externalAuth.method}" name="externalAuth[method]">
<input type="hidden" value="{$referralData.id}" name="referralID">

<label for="username"><font size=4>{$LNG.registerUsername}</font></label>
<input class="main-form" name="username" id="username" type="text" placeholder="{if !empty($error.username)}<span class="error errorUsername"></span>{else}{$LNG.reg_username}{/if}" maxlength="32" required="required" />

<label for="password"><font size=4>{$LNG.registerPassword}</label>
<input class="main-form" name="password" id="password" type="password" placeholder="{if !empty($error.password)}<span class="error errorPassword"></span>{else}{$LNG.reg_password}{/if}" required="required" />

<label for="passwordReplay">{$LNG.registerPasswordReplay}</label>
<input class="main-form" name="passwordReplay" id="passwordReplay" type="password" placeholder="{if !empty($error.passwordReplay)}<span class="error errorPasswordReplay"></span>{else}{$LNG.reg_passwordReplay}{/if}" required="required" />

<label for="email">{$LNG.registerEmail}</label>
<input class="main-form" name="email" id="email" type="email" placeholder="{if !empty($error.email)}<span class="error errorEmail"></span>{else}{$LNG.reg_email}{/if}" required="required" />

<label for="emailReplay">{$LNG.registerEmailReplay}</label>
<input class="main-form" name="emailReplay" id="emailReplay" type="email" placeholder="{if !empty($error.emailReplay)}<span class="error errorEmailReplay"></span>{else}{$LNG.reg_emailReplay}{/if}" required="required" />

{if count($languages) > 1}
<label for="language">{$LNG.registerLanguage}</label>
<select class="main-form" name="lang" id="language">{html_options options=$languages selected=$lang}</select>
{/if}

<label for="rules">{$LNG.reg_rules}</label>
<input type="checkbox" name="rules" id="rules" value="1">

<br><br><br>
<input type="submit" class="submitButton" value="{$LNG.buttonRegister}"><br><br><br><br><br><br>
</form></div>
</section>	

{if $recaptchaEnable}
<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
<script type="text/javascript">
var RecaptchaOptions = {
	lang : '{$lang}',
};

var recaptchaPublicKey = "{$recaptchaPublicKey}";

Recaptcha.create(recaptchaPublicKey, 'display_captcha', {
	theme: 'custom',
	tabindex: '6',
	custom_theme_widget: 'display_captcha'
});
</script>
{/if}
<script type="text/javascript" src="scripts/login/register.js"></script>
<script></script>
{/block}