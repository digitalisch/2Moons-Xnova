<?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 00:29:49
         compiled from "C:\Wamp\www\Dystopia\styles\templates\game\page.settings.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2322754b59e79755715-45624410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f2b70d80fdea15a68cd95c884b565b63e7a843' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\page.settings.default.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
    '0d87be48ddd93fcf796073d4cdc89664d7443f31' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\layout.full.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
    'bd0460dc332afc3e5badef19cbdec6f14b205e68' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\main.header.tpl',
      1 => 1421190463,
      2 => 'file',
    ),
    '3fac69c8cf4e2f015f41071bd7989c414d561601' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\main.navigation.tpl',
      1 => 1421189182,
      2 => 'file',
    ),
    'cde4185ebd3114e6746348a1b15757e50d8cfb8b' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\main.topnav.tpl',
      1 => 1421191463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2322754b59e79755715-45624410',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b59e79df3e44_08135402',
  'variables' => 
  array (
    'hasAdminAccess' => 1,
    'LNG' => 1,
    'cronjobs' => 1,
    'cronjob' => 1,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b59e79df3e44_08135402')) {function content_54b59e79df3e44_08135402($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'C:\\\\Wamp\\\\www\\\\Dystopia\\\\includes\\\\libs\\\\Smarty\\\\plugins\\\\function.html_options.php\';
?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
<?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('bodyclass'=>"full"), 0, '2322754b59e79755715-45624410');
content_54b5aa6d6ab4a3_85669513($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>
<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php if ($_smarty_tpl->tpl_vars[\'hasAdminAccess\']->value){?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>

<div class="globalWarning">
<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_1\'];?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
 <a id="drop-admin"><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_link\'];?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</a><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_2\'];?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>

</div>
<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php }?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>

<?php /*  Call merged included template "main.navigation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '2322754b59e79755715-45624410');
content_54b5aa6d872574_11142781($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.navigation.tpl" */?>
<?php /*  Call merged included template "main.topnav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '2322754b59e79755715-45624410');
content_54b5aa6d87f950_52917729($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.topnav.tpl" */?>
<div id="content">
<form action="game.php?page=settings" method="post">
<input type="hidden" name="mode" value="send">
	<table style="width:760px;">
	<tbody>
		<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php if ($_smarty_tpl->tpl_vars[\'userAuthlevel\']->value>0){?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>

		<tr>
			<th colspan="2"><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'op_admin_title_options\'];?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</th>
		</tr>
		<tr>
			<td><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'op_admin_planets_protection\'];?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</td>
			<td><input name="adminprotection" type="checkbox" value="1" <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php if ($_smarty_tpl->tpl_vars[\'adminProtection\']->value>0){?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
checked="checked"<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php }?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
></td>
		</tr>
		<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php }?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>

		<tr>
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_user_data'];?>
</th>
		</tr>
		<tr>
			<td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_username'];?>
</td>
			<td width="50%" style="height:22px;"><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php if ($_smarty_tpl->tpl_vars[\'changeNickTime\']->value<0){?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
<input name="username" size="20" value="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
" type="text"><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php }else{ ?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php }?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_old_pass'];?>
</td>
			<td><input name="password" size="20" type="password" class="autocomplete"></td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_new_pass'];?>
</td>
			<td><input name="newpassword" size="20" maxlength="40" type="password" class="autocomplete"></td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_repeat_new_pass'];?>
</td>
			<td><input name="newpassword2" size="20" maxlength="40" type="password" class="autocomplete"></td>
		</tr>
		<tr>
			<td><a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_email_adress_descrip'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_email_adress'];?>
</a></td>
			<td><input name="email" maxlength="64" size="20" value="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'email\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
" type="text"></td>
		</tr>
		<tr>
			<td style="height:22px;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_permanent_email_adress'];?>
</td>
			<td><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'permaEmail\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</td>
		</tr>
		<tr>
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_general_settings'];?>
</th>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_timezone'];?>
</td>
			<td><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'timezone\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selectors\']->value[\'timezones\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'timezone\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</td>
		</tr>
		<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php if (count($_smarty_tpl->tpl_vars[\'Selectors\']->value[\'lang\'])>1){?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>

		<tr>
			<td><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'op_lang\'];?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</td>
			<td><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'language\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selectors\']->value[\'lang\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'userLang\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</td>
		</tr>
		<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php }?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>

		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_sort_planets_by'];?>
</td>
			<td><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'planetSort\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selectors\']->value[\'Sort\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'planetSort\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_sort_kind'];?>
</td>
			<td>
				<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'planetOrder\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selectors\']->value[\'SortUpDown\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'planetOrder\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>

			</td>
		</tr>
		<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php if (count($_smarty_tpl->tpl_vars[\'Selectors\']->value[\'Skins\'])>1){?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>

		<tr>
			<td><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'op_skin_example\'];?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</td>
			<td><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'Selectors\']->value[\'Skins\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'theme\']->value,\'name\'=>"theme",\'id\'=>"theme"),$_smarty_tpl);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</td>
		</tr>
		<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php }?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>

		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_active_build_messages'];?>
</td>
			<td><input name="queueMessages" type="checkbox" value="1" <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php if ($_smarty_tpl->tpl_vars[\'queueMessages\']->value==1){?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
checked="checked"<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php }?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
></td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_active_spy_messages_mode'];?>
</td>
			<td><input name="spyMessagesMode" type="checkbox" value="1" <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php if ($_smarty_tpl->tpl_vars[\'spyMessagesMode\']->value==1){?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
checked="checked"<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php }?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
></td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_block_pm'];?>
</td>
			<td><input name="blockPM" type="checkbox" value="1" <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php if ($_smarty_tpl->tpl_vars[\'blockPM\']->value==1){?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
checked="checked"<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php }?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
></td>
		</tr>
		<tr>
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_galaxy_settings'];?>
</th>
		</tr>
		<tr>
			<td><a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_spy_probes_number_descrip'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_spy_probes_number'];?>
</a></td>
			<td><input name="spycount" size="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo preg_match_all(\'/[^\\s]/u\',$_smarty_tpl->tpl_vars[\'spycount\']->value, $tmp)+3;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
" value="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'spycount\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
" type="int"></td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_max_fleets_messages'];?>
</td>
			<td><input name="fleetactions" maxlength="2" size="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo preg_match_all(\'/[^\\s]/u\',$_smarty_tpl->tpl_vars[\'fleetActions\']->value, $tmp)+2;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
" value="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'fleetActions\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
" type="int"></td>
		</tr>
		<tr>
			<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_shortcut'];?>
</th>
			<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_show'];?>
</th>
		</tr>
		<tr>
			<td><img src="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
img/e.gif" alt=""><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_spy'];?>
</td>
			<td><input name="galaxySpy" type="checkbox" value="1" <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php if ($_smarty_tpl->tpl_vars[\'galaxySpy\']->value==1){?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
checked="checked"<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php }?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
></td>
		</tr>
		<tr>
			<td><img src="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
img/m.gif" alt=""><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_write_message'];?>
</td>
			<td><input name="galaxyMessage" type="checkbox" value="1" <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php if ($_smarty_tpl->tpl_vars[\'galaxyMessage\']->value==1){?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
checked="checked"<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php }?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
></td>
		</tr>
		<tr>
			<td><img src="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
img/b.gif" alt=""><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_add_to_buddy_list'];?>
</td>
			<td><input name="galaxyBuddyList" type="checkbox" value="1" <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php if ($_smarty_tpl->tpl_vars[\'galaxyBuddyList\']->value==1){?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
checked="checked"<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php }?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
></td>
		</tr>
		<tr>
			<td><img src="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
img/r.gif" alt=""><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_missile_attack'];?>
</td>
			<td><input name="galaxyMissle" type="checkbox" value="1" <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php if ($_smarty_tpl->tpl_vars[\'galaxyMissle\']->value==1){?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
checked="checked"<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php }?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
></td>
		</tr>
		<tr>
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_vacation_delete_mode'];?>
</th>
		</tr>
		<tr>
			<td><a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_activate_vacation_mode_descrip'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_activate_vacation_mode'];?>
</a></td>
			<td><input name="vacation" type="checkbox" value="1"></td>
		</tr>
		<tr>
			<td><a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_dlte_account_descrip'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_dlte_account'];?>
</a></td>
			<td><input name="delete" type="checkbox" value="1" <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php if ($_smarty_tpl->tpl_vars[\'delete\']->value>0){?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
checked="checked"<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php }?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
></td>
		</tr>
		<?php if (extension_loaded('gd')&&isModulAvalible(@constant('MODULE_BANNER'))){?>
		<tr>
			<th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_userbanner'];?>
</th>
		</tr>
		<tr>
			<td colspan="3"><img src="userpic.php?id=<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'userID\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
" alt="" width="590" height="95" id="userpic"><br><br><table><tr><td class="transparent">HTML:</td><td class="transparent"><input type="text" value='<a href="<?php echo @constant('PROTOCOL');?>
<?php echo @constant('HTTP_HOST');?>
<?php echo @constant('HTTP_ROOT');?>
<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php if ($_smarty_tpl->tpl_vars[\'ref_active\']->value){?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
index.php?ref=<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'userid\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php }?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
"><img src="<?php echo @constant('PROTOCOL');?>
<?php echo @constant('HTTP_HOST');?>
<?php echo @constant('HTTP_ROOT');?>
userpic.php?id=<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'userid\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
"></a>' readonly="readonly" style="width:450px;"></td></tr><tr><td class="transparent">BBCode:</td><td class="transparent"><input type="text" value="[url=<?php echo @constant('PROTOCOL');?>
<?php echo @constant('HTTP_HOST');?>
<?php echo @constant('HTTP_ROOT');?>
<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php if ($_smarty_tpl->tpl_vars[\'ref_active\']->value){?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
index.php?ref=<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'userid\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php }?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
][img]<?php echo @constant('PROTOCOL');?>
<?php echo @constant('HTTP_HOST');?>
<?php echo @constant('HTTP_ROOT');?>
userpic.php?id=<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'userid\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
[/img][/url]" readonly="readonly" style="width:450px;"></td></tr></table></td>
		</tr>
		<?php }?>
		<tr>
			<td colspan="2"><input value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_save_changes'];?>
" type="submit"></td>
		</tr>
		</tbody>
	</table>
	</form>
</div>
<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php  $_smarty_tpl->tpl_vars[\'cronjob\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'cronjob\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cronjobs\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'cronjob\']->key => $_smarty_tpl->tpl_vars[\'cronjob\']->value){
$_smarty_tpl->tpl_vars[\'cronjob\']->_loop = true;
?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
<img src="cronjob.php?cronjobID=<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'cronjob\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
" alt=""><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php } ?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>

<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 00:29:49
         compiled from "C:\Wamp\www\Dystopia\styles\templates\game\main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b5aa6d6ab4a3_85669513')) {function content_54b5aa6d6ab4a3_85669513($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_options'];?>
 - <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
 - <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<?php if (!empty($_smarty_tpl->tpl_vars['goto']->value)){?>
	<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['gotoinsec']->value;?>
;URL=<?php echo $_smarty_tpl->tpl_vars['goto']->value;?>
">
	<?php }?>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/resource/css/styles/cms.css">
	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/resource/css/styles/base.css">
	<link href="http://fonts.googleapis.com/css?family=Terminal+Dosis" rel="stylesheet" type="text/css">
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:100,400'>

	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/resource/css/ingame/main.css?v=2676">
	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/resource/css/base/jquery.css">
	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/resource/css/base/jquery.fancybox.css">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/resource/css/base/validationEngine.jquery.css?v=2676">	
	
	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/formate.css?v=2676">
	<link rel="shortcut icon" href="http://dystopiaonline.fr/v1.1.0/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://dystopiaonline.fr/v1.1.0/favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
, <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
, <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
, <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
, <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
, <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>

	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/jquery.js?v=2676"></script>



	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/vegas/jquery.vegas.js"></script>
	
	<link rel="stylesheet" type="text/css" href="http://dystopiaonline.fr/v1.1.0/scripts/vegas/jquery.vegas.css" />
	
	
	
	<script type="text/javascript">
	    $(function() {
			$.vegas({
			src:'http://dystopiaonline.fr/v1.1.0/styles/theme/gow/img/bkd_page.jpg',
			fade: 0
			});
			$.vegas('overlay', {
			src:'http://dystopiaonline.fr/v1.1.0/scripts/vegas/overlays/04.png',
			opacity:0.3
			});
		});
	</script>
	
	
	
	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/jquery.ui.js?v=2676"></script>
	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/jquery.cookie.js?v=2676"></script>
	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/jquery.fancybox.js?v=2676"></script>
	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/jquery.validationEngine.js?v=2676"></script>
	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/tooltip.js?v=2676"></script>
	<!--<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/base/jquery.knob.min.js"></script>
<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/vegas/square.js"></script>	-->
	
		<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/game/jquery.countdown.js?v=2676"></script>
		
	<script type="text/javascript">
	$(function() {
		
	});
	</script>
	
<script src="scripts/style/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript">
    var s_account = "mshaloglobalplat";
</script>

<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/game/base.js?v=2676"></script>
<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/style/jquery-ui.min.js" ></script>
<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/style/Core8b08.js?v=12314" ></script>
<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/style/cms.js" ></script>
<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/style/main.js" ></script>
	<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>

	<script type="text/javascript" src="http://dystopiaonline.fr/v1.1.0/scripts/game/<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php } ?>/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 00:29:49
         compiled from "C:\Wamp\www\Dystopia\styles\templates\game\main.navigation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b5aa6d872574_11142781')) {function content_54b5aa6d872574_11142781($_smarty_tpl) {?>
<div id="leftmenu">


		
			
			
<div class="categories">
     <ul class="menuleft">
			<li onClick="window.open('game.php?page=overview', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item1"></div>Vue générale</span></li>
					<li onClick="window.open('game.php?page=buildings', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item8"></div>Infrastructures</span></li>
							<li onClick="window.open('game.php?page=expe', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item8"></div>Expéditions</span></li>
							<li onClick="window.open('game.php?page=research', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item9"></div>Centre de Recherche</span></li>
							<li onClick="window.open('game.php?page=shipyard&amp;mode=fleet&amp;shipyardpage=2', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item10"></div>Hangar</span></li>
						
					<li onClick="window.open('game.php?page=shipyard&amp;mode=defense', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item11"></div>Canons extérieurs</span></li>
		
		
		
		
		
		<li onClick="window.open('game.php?page=bank', '_self', 'scrollbars=no');" style="position: relative; margin-top: 10px;"><span><div class="item item13"></div>Compartiment</span></li>
						<li onClick="window.open('game.php?page=Lottery', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item6"></div>Taverne</span></li>		
		
		
		
		
		
		
		
		
		
		
		
		

							  <li style="background: none; position: relative; margin-top: 10px;"><span><div class="item item4"></div>Galaxie</span>
					  </li>							
					<li onClick="window.open('game.php?page=mission', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item2"></div>Missions</span></li>
	

					<li onClick="window.open('game.php?page=fleetTable', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item3"></div>Flottes</span></li>
				

					<li onClick="window.open('game.php?page=techtree', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item16"></div>Technologies</span></li>
							<li onClick="window.open('game.php?page=records', '_self', 'scrollbars=no');" style="position: relative;"><span><div class="item item18"></div>Médailles</span></li>
					<li style="background: none; position: relative; margin-top: 10px;"><span><div class="item item14"></div>Menu social</span>
			</li>
	</ul>
</div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 00:29:49
         compiled from "C:\Wamp\www\Dystopia\styles\templates\game\main.topnav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54b5aa6d87f950_52917729')) {function content_54b5aa6d87f950_52917729($_smarty_tpl) {?><div id="header" style="margin-left: 0px; ">
	
	
	
	
	
	
	
	
	
	
	
	
	    <div class="article clearfix" id="home_videos_article">
        


        
        <div class="container background" style="height: 91px;
width: 100%;
position: fixed;
z-index: 10;
top: -3px;
border: 0px solid rgba(22, 24, 28, 0.5);
font-family: 'Roboto',sans-serif;
background: none repeat scroll 0% 0% rgba(8, 23, 36, 0.95);
box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.41);">
            <div class="content_area">
            <div class="hatch_strip"><br>
				
				
				
				<center>
				

				
		<table id="headerTable" style="margin-left: 35px;">
			<tbody>
			


			
				<tr>
				
					<td class="ficheperso" style="border-radius: 0px;">
						<a data-tooltip-content="Modifier l'avatar" class="tooltip" href="game.php?page=settings" ;="">
							<img src="styles/resource/uploads/anonymous.png" alt="Qwa" class="avatartop">
						</a>
						<br>
						
						<a data-tooltip-content="Points de compétences" class="tooltip" ;="">
							<div style="border-radius: 0px 0px 30px;
								z-index: 100;
								background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.8);
								position: absolute;
								width: 120px;
								margin-top: -35px;
								margin-left: 2px;
								font-size: 19px;
								text-shadow: none;">
								<span style="font-family: 'Anton',sans-serif !important; text-transform: uppercase !important;">
									0<span class="flaticon-heart27" style="color: #FFF; font-size: 20px;"></span>
								</span>
							</div>
						</a>
							
							
					</td>
				<!--	
					<td class="competence">
					<div style="margin-left:25px; margin-right:40px; color: rgba(255, 255, 255, 1);width:82%;">
						<a data-tooltip-content="Points de compétences" class="tooltip"> 
							<div style="margin-top:3px;">
							
							<table style="margin: 0px; width: 100%;border-spacing:0px;">
								<tr>
									<td class="transparent" style="text-align: center; box-shadow: none;">
										0
									</td>
									<td class="transparent" style="width: 70px; box-shadow: none;">
										<img src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/922.png" height="33px" alt="" style="margin-top: -3px;">
									</td>
								</tr>
							</table>
							
							
							</div> 
						</a>
					</div>
					</td>
					-->

					


				</tr>
			</tbody>
		</table>				

				
					<div class="menutop" style="height: 45px;">
						<table style="width: auto;">
							<tbody><tr>
								<td class="transparent" style="width: 45px; position: relative;">
									<a href="game.php?page=ticket" data-tooltip-content="Envoyer un message à l'administration." class="tooltip">
										<img src="http://dystopiaonline.fr/v1.1.0/styles/resource/images/icons/support.png" style="position: absolute; top: -1px; left: 0px; width: 39px;">
									</a>
								</td>								
								<td class="transparent" style="width: 45px; position: relative;">
									<a href="game.php?page=officier" data-tooltip-content="Compétences" class="tooltip">
										<span class="fa fa-heart" style="color: #FFF;  font-size: 28px; position: absolute; top: 5px; left: 0px;"></span>
									</a>
								</td>
								<td class="transparent" style="width: 45px; position: relative;">
									<div style="position: relative;">
										<a href="game.php?page=chat" data-tooltip-content="Chat" class="tooltip">
											<span class="fa fa-inbox" style="color: #FFF; font-size: 28px; position: absolute;top: 5px;left: -10px;"></span>
									</div>
								</td>
								<td class="transparent" style="width: 45px; position: relative;">
									<a href="game.php?page=statistics" data-tooltip-content="Classement" class="tooltip">
										<span class="fa fa-sort-amount-asc" style="color: #FFF;  font-size: 28px; position: absolute;top: 5px;left: 0px;"></span>
									</a>
								</td>
								<td class="transparent" style="width: 45px; position: relative;">
									<a href="game.php?page=settings" data-tooltip-content="Configuration" class="tooltip">
										<span  class="fa fa-cogs" style="color: #FFF; font-size: 28px; position: absolute;top: 5px; left: 0px;"></span>
									</a>
								</td>
							</tr>
						</tbody></table>
						<img src="http://dystopiaonline.fr/v1.1.0/styles/resource/images/angletop.png" style="opacity: 0.34; position: absolute; top: 0px; left: 350px; width: 35px; height: 45px;">
					</div>

					
					


											<a href="game.php?page=resources">
							<div class="ressourcestopgestion">
								Gérer l'énergie
							</div>
						</a>
						
					

					
				
					
					
					<table class="ressourcetop">
						<tbody><tr>
																	<td class="transparent metalheader" style="width: 11%;">
										<table class="ressourcemetalheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
																										
														<img class="ressourcetopimg" src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/metal.png" alt="">
													</a>
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_metal" data-real="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'metal\']->value);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'metal\']->value);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
"><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'metal\']->value);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</td>
																
																	
																																			<td class="res_max" id="max_metal" data-real="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'metal\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
">/<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'metal_max\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent crystalheader" style="width: 11%;">
										<table class="ressourcecrystalheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
									<img class="ressourcetopimg" src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/crystal.png" alt="">
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_crystal" data-real="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'crystal\']->value);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'crystal\']->value);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
"><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'crystal\']->value);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</td>
																
																	
																																			<td class="res_max" id="max_crystal" data-real="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'crystal\']->value);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
">/<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'crystal_max\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent deuteriumheader" style="width: 11%;">
										<table class="ressourcedeuteriumheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
														<img class="ressourcetopimg" src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/deuterium.png" alt="">
													</a>
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_deuterium" data-real="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'deuterium\']->value);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'deuterium\']->value);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
"><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'deuterium\']->value);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</td>
																
																	
																																			<td class="res_max" id="max_deuterium" data-real="<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'deuterium\']->value);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
">/<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'deuterium_max\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent naniteheader" style="width: 11%;">
										<table class="ressourcenaniteheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
																								
														<img class="ressourcetopimg" src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/nanite.png" alt="">
													</a>
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_nanite" data-real="0" data-tooltip-content="0"><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo $_smarty_tpl->tpl_vars[\'darkmatter\']->value;?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</td>
																
																	
																																			<td class="res_max" id="max_nanite" data-real="0"></td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent civilheader" style="width: 0.01%;">
										<table class="ressourcecivilheader" style="border-spacing: 0px;">
											<tbody>
										</tbody></table>
									</td>
																	<td class="transparent energyheader" style="width: 11%;">
										<table class="ressourceenergyheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
																									
														<img class="ressourcetopimg" src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/energy.png" alt="">
													</a>
																									</td>
																																													<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none;">
																	<span style=""><?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'energy_used\']->value);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
/<?php echo '/*%%SmartyNocache:2322754b59e79755715-45624410%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'energy\']->value);?>
/*/%%SmartyNocache:2322754b59e79755715-45624410%%*/';?>
</span>
																</td>
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent darkmatterheader" style="width: 300px;">
										<table class="ressourcedarkmatterheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
																										<a class="tooltip" style="height: 35px; display: block;" data-tooltip-content="<h3>Electrum</h3>">
																													<img src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/darkmatter.gif" height="25px" ;="" alt="">
																											</a>
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_darkmatter" data-real="228" data-tooltip-content="228">
																	228																</td>
																
																	
																																			<td id="max_darkmatter">&nbsp;</td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent missionheader" style="width: 11%;">
										<table class="ressourcemissionheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
																										<a class="tooltip" style="height: 35px; display: block;" data-tooltip-content="<h3>Point de compétence</h3>">
																													<img class="ressourcetopimg" src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/mission.gif" alt="">
																											</a>
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_mission" data-real="0" data-tooltip-content="0">
																	0																</td>
																
																	
																																			<td id="max_mission">&nbsp;</td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
																	<td class="transparent jetonheader" style="width: 300px;">
										<table class="ressourcejetonheader" style="border-spacing: 0px;">
											<tbody><tr class="ressourcetable">
												<td id="imageressource" style="border-radius: 0px;">
																										<a class="tooltip" style="height: 35px; display: block;" data-tooltip-content="<h3>Jetons</h3>">
																													<img src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/923.png" height="25px" ;="" alt="">
																											</a>
																									</td>
																														<td class="res_current" style="border-radius: 0px; background: none repeat scroll 0px 0px rgba(0, 0, 0, 0.5); box-shadow: none; text-shadow: 0px 0px 2px #000; font-size: 12px;" id="current_jeton" data-real="304" data-tooltip-content="304">
																	304<span style="font-family: Websymbol; color: white; text-align: center;">ã</span>																</td>
																
																	
																																			<td id="max_jeton">&nbsp;</td>
																																	
																							
											</tr>
										</tbody></table>
									</td>
															</tr>
						</tbody></table>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
				
				
				
				
					
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				</center>
				</div>
            </div>
        </div>

    </div>
	
	
	
	
	<a class="tooltip" style="position: fixed; top: 15px; right: 15px; z-index: 999;" href="game.php?page=logout" data-tooltip-content="<span style='color: #F60; font-weight: 400; font-size: 15px; padding: 20px;'>Se déconnecter</span>">
		<img src="http://dystopiaonline.fr/v1.1.0/styles/resource/images/icons/logout.png" style="width: 20px; opacity: 0.5;">
	</a>
		<script type="text/javascript">

	</script>
	
	
			</div>
			
			<div id="wrapper">
    <div id="mainBody">
		<div id="article" class="index"><?php }} ?>