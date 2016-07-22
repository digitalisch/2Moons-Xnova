<?php /* Smarty version Smarty-3.1.13, created on 2014-12-03 04:01:23
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/login/page.banList.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:349328523547e8b1336d9f1-39648593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bae7e5cb3b5ae0c6ddeabf8c34139dcd7649e0e3' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/page.banList.default.tpl',
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
  'nocache_hash' => '349328523547e8b1336d9f1-39648593',
  'function' => 
  array (
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547e8b1378cb10_23282224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e8b1378cb10_23282224')) {function content_547e8b1378cb10_23282224($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'/home/qwatakayean/public_html/darkness/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
<?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '349328523547e8b1336d9f1-39648593');
content_547e8b13425b94_93873361($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>
<?php /*  Call merged included template "main.navigation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '349328523547e8b1336d9f1-39648593');
content_547e8b134efbc3_84155066($_smarty_tpl);
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
						<td class="box-inner-header-center"><h1><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'siteTitleBanList\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</h1></td>
						<td class="box-inner-header-right"></td>
					</tr>
					<tr class="box-inner-content">
						<td class="box-inner-content-left"></td>
						<td class="box-inner-content-center">
<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php if ($_smarty_tpl->tpl_vars[\'isMultiUniverse\']->value){?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
<p>
<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'universeSelect\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'UNI\']->value,\'class\'=>"changeUni",\'id\'=>"universe",\'name\'=>"universe"),$_smarty_tpl);?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>

</p><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php }?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>

<table>
	<tr>
		<th colspan="5"><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bn_players_banned_list\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</th>
	</tr>
<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php if ($_smarty_tpl->tpl_vars[\'banCount\']->value){?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>

	<tr>
		<td style="text-align:right;" colspan="5"><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_page\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
: <?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value!=1){?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
<a href="index.php?page=banList&amp;side=<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value-1;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
">&laquo;</a>&nbsp;<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php }?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php $_smarty_tpl->tpl_vars[\'site\'] = new Smarty_Variable;$_smarty_tpl->tpl_vars[\'site\']->step = 1;$_smarty_tpl->tpl_vars[\'site\']->total = (int)ceil(($_smarty_tpl->tpl_vars[\'site\']->step > 0 ? $_smarty_tpl->tpl_vars[\'maxPage\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'maxPage\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'site\']->step));
if ($_smarty_tpl->tpl_vars[\'site\']->total > 0){
for ($_smarty_tpl->tpl_vars[\'site\']->value = 1, $_smarty_tpl->tpl_vars[\'site\']->iteration = 1;$_smarty_tpl->tpl_vars[\'site\']->iteration <= $_smarty_tpl->tpl_vars[\'site\']->total;$_smarty_tpl->tpl_vars[\'site\']->value += $_smarty_tpl->tpl_vars[\'site\']->step, $_smarty_tpl->tpl_vars[\'site\']->iteration++){
$_smarty_tpl->tpl_vars[\'site\']->first = $_smarty_tpl->tpl_vars[\'site\']->iteration == 1;$_smarty_tpl->tpl_vars[\'site\']->last = $_smarty_tpl->tpl_vars[\'site\']->iteration == $_smarty_tpl->tpl_vars[\'site\']->total;?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
<a href="index.php?page=banList&amp;side=<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
"><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value==$_smarty_tpl->tpl_vars[\'page\']->value){?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
<b>[<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
]</b><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php }else{ ?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
[<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
]<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php }?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</a><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value!=$_smarty_tpl->tpl_vars[\'maxPage\']->value){?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php }?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php }} ?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value!=$_smarty_tpl->tpl_vars[\'maxPage\']->value){?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
&nbsp;<a href="index.php?page=banList&amp;side=<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value+1;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
">&raquo;</a><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php }?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</td>
	</tr>
<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php }?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>

	<tr>
		<td><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bn_from\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</td>
		<td><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bn_until\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</td>
		<td><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bn_player\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</td>
		<td><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bn_by\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</td>
		<td><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bn_reason\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</td>
	</tr>
<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php if ($_smarty_tpl->tpl_vars[\'banCount\']->value){?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>

	<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php  $_smarty_tpl->tpl_vars[\'banRow\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'banRow\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'banList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'banRow\']->key => $_smarty_tpl->tpl_vars[\'banRow\']->value){
$_smarty_tpl->tpl_vars[\'banRow\']->_loop = true;
?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>

	<tr>
		<td><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'banRow\']->value[\'from\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</td>
		<td><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'banRow\']->value[\'to\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</td>
		<td><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'banRow\']->value[\'player\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</td>
		<td><a href="mailto:<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'banRow\']->value[\'mail\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
" title="<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'banRow\']->value[\'info\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
"><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'banRow\']->value[\'admin\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</a></td>
		<td><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'banRow\']->value[\'theme\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php } ?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>

	<tr>
		<td style="text-align:right;" colspan="5"><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_page\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
: <?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value!=1){?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
<a href="index.php?page=banList&amp;side=<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value-1;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
">&laquo;</a>&nbsp;<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php }?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php $_smarty_tpl->tpl_vars[\'site\'] = new Smarty_Variable;$_smarty_tpl->tpl_vars[\'site\']->step = 1;$_smarty_tpl->tpl_vars[\'site\']->total = (int)ceil(($_smarty_tpl->tpl_vars[\'site\']->step > 0 ? $_smarty_tpl->tpl_vars[\'maxPage\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'maxPage\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'site\']->step));
if ($_smarty_tpl->tpl_vars[\'site\']->total > 0){
for ($_smarty_tpl->tpl_vars[\'site\']->value = 1, $_smarty_tpl->tpl_vars[\'site\']->iteration = 1;$_smarty_tpl->tpl_vars[\'site\']->iteration <= $_smarty_tpl->tpl_vars[\'site\']->total;$_smarty_tpl->tpl_vars[\'site\']->value += $_smarty_tpl->tpl_vars[\'site\']->step, $_smarty_tpl->tpl_vars[\'site\']->iteration++){
$_smarty_tpl->tpl_vars[\'site\']->first = $_smarty_tpl->tpl_vars[\'site\']->iteration == 1;$_smarty_tpl->tpl_vars[\'site\']->last = $_smarty_tpl->tpl_vars[\'site\']->iteration == $_smarty_tpl->tpl_vars[\'site\']->total;?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
<a href="index.php?page=banList&amp;side=<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
"><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value==$_smarty_tpl->tpl_vars[\'page\']->value){?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
<b>[<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
]</b><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php }else{ ?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
[<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
]<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php }?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</a><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value!=$_smarty_tpl->tpl_vars[\'maxPage\']->value){?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php }?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php }} ?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value!=$_smarty_tpl->tpl_vars[\'maxPage\']->value){?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
&nbsp;<a href="index.php?page=banList&amp;side=<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value+1;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
">&raquo;</a><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php }?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</td>
	</tr>
	<tr>
		<td colspan="5"><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bn_exists\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'banCount\']->value);?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bn_players_banned\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</td>
	</tr>
<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php }else{ ?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>

	<tr>
		<td colspan="5"><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bn_no_players_banned\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</td>
	</tr>	
<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php }?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>

</table>
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
<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-12-03 04:01:23
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/login/main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_547e8b13425b94_93873361')) {function content_547e8b13425b94_93873361($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<link rel="stylesheet" type="text/css" href="styles/resource/css/login/main.css?v=<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<title><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'siteTitleBanList\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
 - <?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'gameName\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<meta name="keywords" content="Weltraum Browsergame, XNova, 2Moons, Space, Private, Server, Speed">
	<meta name="description" content="2Moons Browsergame powerd by http://2moons.cc/"> <!-- Noob Check :) -->
	<!--[if lt IE 9]>
	<script src="scripts/base/html5.js"></script>
	<![endif]-->
	<script src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
"></script>
	<script src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
"></script>
	<script src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
"></script>
	<script src="scripts/login/main.js"></script>
	<script><?php if (isset($_smarty_tpl->tpl_vars['code']->value)){?>var loginError = <?php echo json_encode($_smarty_tpl->tpl_vars['code']->value);?>
;<?php }?></script>
		
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
">
	<div id="page"><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-12-03 04:01:23
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/login/main.navigation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_547e8b134efbc3_84155066')) {function content_547e8b134efbc3_84155066($_smarty_tpl) {?><header>
	<nav>
		<ul id="menu">
			<li><a href="index.php"><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_index\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</a></li>
			<li><a href="index.php?page=board" target="board"><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'forum\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</a></li>
			<li><a href="index.php?page=news"><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_news\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</a></li>
			<li><a href="index.php?page=rules"><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_rules\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</a></li>
			<li><a href="index.php?page=battleHall"><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_battlehall\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</a></li>
			<li><a href="index.php?page=banList"><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_banlist\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</a></li>
			<li><a href="index.php?page=disclamer"><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_disclamer\'];?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</a></li>
		</ul>
	</nav>
	<nav>
		<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php if (count($_smarty_tpl->tpl_vars[\'languages\']->value)>1){?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>

		<ul id="language">
		<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php  $_smarty_tpl->tpl_vars[\'langName\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'langName\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'langKey\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'languages\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'langName\']->key => $_smarty_tpl->tpl_vars[\'langName\']->value){
$_smarty_tpl->tpl_vars[\'langName\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'langKey\']->value = $_smarty_tpl->tpl_vars[\'langName\']->key;
?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>

		<li><a href="?lang=<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
" rel="alternate" hreflang="<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
" title="<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
"><span class="flags <?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
"><?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>
</span></a></li>
		<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php } ?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>

		</ul>
		<?php echo '/*%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/<?php }?>/*/%%SmartyNocache:349328523547e8b1336d9f1-39648593%%*/';?>

	</nav>
</header><?php }} ?>