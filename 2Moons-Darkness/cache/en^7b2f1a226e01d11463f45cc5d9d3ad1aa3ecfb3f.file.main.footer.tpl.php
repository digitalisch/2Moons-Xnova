<?php /* Smarty version Smarty-3.1.13, created on 2014-12-01 18:06:49
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/game/main.footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1201775419547cae39304b02-16914204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b2f1a226e01d11463f45cc5d9d3ad1aa3ecfb3f' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/game/main.footer.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1201775419547cae39304b02-16914204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ga_active' => 1,
    'ga_key' => 1,
    'debug' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547cae3932d595_58537314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547cae3932d595_58537314')) {function content_547cae3932d595_58537314($_smarty_tpl) {?><div class="clear"></div>
<div id="footer">
	<?php if ($_smarty_tpl->tpl_vars['ga_active']->value){?>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', '<?php echo $_smarty_tpl->tpl_vars['ga_key']->value;?>
']);
	_gaq.push(['_trackPageview']);

	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['debug']->value==1){?>
	<script type="text/javascript">
	onerror = handleErr;
	</script>
	<?php }?>
</div>
</body>
</html><?php }} ?>