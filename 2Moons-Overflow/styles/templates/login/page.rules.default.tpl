
{block name="content"}
<br><br><h2><font color=white><center>{$LNG.siteTitleRules}</center></font></h2><br><br>

<section id="banner2">
<header><br><br><br><br><br><br><br><br><br><br><br><br><br></header>

<div class="rules">

<p align=right>{$rules}</p>

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