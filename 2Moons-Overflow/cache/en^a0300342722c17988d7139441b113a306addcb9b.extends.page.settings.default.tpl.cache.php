<?php /* Smarty version Smarty-3.1.13, created on 2014-09-13 17:41:06
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/page.settings.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1684399144541481b2e7e4a9-35604519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0300342722c17988d7139441b113a306addcb9b' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/page.settings.default.tpl',
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
  ),
  'nocache_hash' => '1684399144541481b2e7e4a9-35604519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cronjobs' => 1,
    'cronjob' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_541481b38579f9_28775824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541481b38579f9_28775824')) {function content_541481b38579f9_28775824($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'/home/qwatakayean/public_html/fallenblack/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
<?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('bodyclass'=>"full"), 0, '1684399144541481b2e7e4a9-35604519');
content_541481b32bfb64_25378510($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>

<?php /*  Call merged included template "main.topnav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '1684399144541481b2e7e4a9-35604519');
content_541481b34e17e0_75915294($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.topnav.tpl" */?>
<div id="content">
<form action="game.php?page=settings" method="post">
<input type="hidden" name="mode" value="send">
	
<div class="row">
<div class="span9">

<h3 class="spec"></h3>
<div class="tabbable">

<ul class="nav nav-tabs" id="myTab">
<li class="active"><a href="#tab1" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_options'];?>
</a></li>
</ul>
 
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">
<table class="redesign">

<tr>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if ($_smarty_tpl->tpl_vars[\'userAuthlevel\']->value>0){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

			<th colspan="2"><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'op_admin_title_options\'];?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
</th>
		</tr>
		<tr>
			<td><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'op_admin_planets_protection\'];?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
</td>
			<td><input name="adminprotection" type="checkbox" value="1" <?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if ($_smarty_tpl->tpl_vars[\'adminProtection\']->value>0){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
checked="checked"<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
></td>
		</tr>
		<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

		<tr>
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_user_data'];?>
</th>
		</tr>
		<tr>
			<td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_username'];?>
</td>
			<td width="50%" style="height:22px;"><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if ($_smarty_tpl->tpl_vars[\'changeNickTime\']->value<0){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
<input name="username" size="20" value="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
" type="text"><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }else{ ?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
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
			<td><input name="email" maxlength="64" size="20" value="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'email\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
" type="text"></td>
		</tr>
		<tr>
			<td style="height:22px;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_permanent_email_adress'];?>
</td>
			<td><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'permaEmail\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
</td>
		</tr>
		<tr>
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_general_settings'];?>
</th>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_timezone'];?>
</td>
			<td><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'timezone\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selectors\']->value[\'timezones\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'timezone\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
</td>
		</tr>
		<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if (count($_smarty_tpl->tpl_vars[\'Selectors\']->value[\'lang\'])>1){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

		<tr>
			<td><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'op_lang\'];?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
</td>
			<td><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'language\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selectors\']->value[\'lang\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'userLang\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
</td>
		</tr>
		<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_sort_planets_by'];?>
</td>
			<td><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'planetSort\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selectors\']->value[\'Sort\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'planetSort\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
</td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_sort_kind'];?>
</td>
			<td>
				<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'planetOrder\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selectors\']->value[\'SortUpDown\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'planetOrder\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

			</td>
		</tr>
		<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if (count($_smarty_tpl->tpl_vars[\'Selectors\']->value[\'Skins\'])>1){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

		<tr>
			<td><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'op_skin_example\'];?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
</td>
			<td><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'Selectors\']->value[\'Skins\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'theme\']->value,\'name\'=>"theme",\'id\'=>"theme"),$_smarty_tpl);?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
</td>
		</tr>
		<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_active_build_messages'];?>
</td>
			<td><input name="queueMessages" type="checkbox" value="1" <?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if ($_smarty_tpl->tpl_vars[\'queueMessages\']->value==1){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
checked="checked"<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
></td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_active_spy_messages_mode'];?>
</td>
			<td><input name="spyMessagesMode" type="checkbox" value="1" <?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if ($_smarty_tpl->tpl_vars[\'spyMessagesMode\']->value==1){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
checked="checked"<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
></td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_block_pm'];?>
</td>
			<td><input name="blockPM" type="checkbox" value="1" <?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if ($_smarty_tpl->tpl_vars[\'blockPM\']->value==1){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
checked="checked"<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
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
			<td><input name="spycount" size="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo preg_match_all(\'/[^\\s]/u\',$_smarty_tpl->tpl_vars[\'spycount\']->value, $tmp)+3;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
" value="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'spycount\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
" type="int"></td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_max_fleets_messages'];?>
</td>
			<td><input name="fleetactions" maxlength="2" size="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo preg_match_all(\'/[^\\s]/u\',$_smarty_tpl->tpl_vars[\'fleetActions\']->value, $tmp)+2;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
" value="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'fleetActions\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
" type="int"></td>
		</tr>
		<tr>
			<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_shortcut'];?>
</th>
			<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_show'];?>
</th>
		</tr>
		<tr>
			<td><img src="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
img/e.gif" alt=""><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_spy'];?>
</td>
			<td><input name="galaxySpy" type="checkbox" value="1" <?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if ($_smarty_tpl->tpl_vars[\'galaxySpy\']->value==1){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
checked="checked"<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
></td>
		</tr>
		<tr>
			<td><img src="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
img/m.gif" alt=""><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_write_message'];?>
</td>
			<td><input name="galaxyMessage" type="checkbox" value="1" <?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if ($_smarty_tpl->tpl_vars[\'galaxyMessage\']->value==1){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
checked="checked"<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
></td>
		</tr>
		<tr>
			<td><img src="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
img/b.gif" alt=""><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_add_to_buddy_list'];?>
</td>
			<td><input name="galaxyBuddyList" type="checkbox" value="1" <?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if ($_smarty_tpl->tpl_vars[\'galaxyBuddyList\']->value==1){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
checked="checked"<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
></td>
		</tr>
		<tr>
			<td><img src="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
img/r.gif" alt=""><?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_missile_attack'];?>
</td>
			<td><input name="galaxyMissle" type="checkbox" value="1" <?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if ($_smarty_tpl->tpl_vars[\'galaxyMissle\']->value==1){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
checked="checked"<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
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
			<td><input name="delete" type="checkbox" value="1" <?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if ($_smarty_tpl->tpl_vars[\'delete\']->value>0){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
checked="checked"<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
></td>
		</tr>
		<?php if (extension_loaded('gd')&&isModulAvalible(@constant('MODULE_BANNER'))){?>
		<tr>
			<th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_userbanner'];?>
</th>
		</tr>
		<tr>
			<td colspan="3"><img src="userpic.php?id=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'userID\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
" alt="" width="590" height="95" id="userpic"><br><br><table><tr><td class="transparent">HTML:</td><td class="transparent"><input type="text" value='<a href="<?php echo @constant('PROTOCOL');?>
<?php echo @constant('HTTP_HOST');?>
<?php echo @constant('HTTP_ROOT');?>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if ($_smarty_tpl->tpl_vars[\'ref_active\']->value){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
index.php?ref=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'userid\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"><img src="<?php echo @constant('PROTOCOL');?>
<?php echo @constant('HTTP_HOST');?>
<?php echo @constant('HTTP_ROOT');?>
userpic.php?id=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'userid\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"></a>' readonly="readonly" style="width:450px;"></td></tr><tr><td class="transparent">BBCode:</td><td class="transparent"><input type="text" value="[url=<?php echo @constant('PROTOCOL');?>
<?php echo @constant('HTTP_HOST');?>
<?php echo @constant('HTTP_ROOT');?>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if ($_smarty_tpl->tpl_vars[\'ref_active\']->value){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
index.php?ref=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'userid\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
][img]<?php echo @constant('PROTOCOL');?>
<?php echo @constant('HTTP_HOST');?>
<?php echo @constant('HTTP_ROOT');?>
userpic.php?id=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'userid\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
[/img][/url]" readonly="readonly" style="width:450px;"></td></tr></table></td>
		</tr>
		<?php }?>
		<tr>
			<td colspan="2"><p align=right><input class="button" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['op_save_changes'];?>
" type="submit"></td>
		</tr>

</table>
</div>
</div>
</div>
</div>
</div>
	
</form>
</div>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php  $_smarty_tpl->tpl_vars[\'cronjob\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'cronjob\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cronjobs\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'cronjob\']->key => $_smarty_tpl->tpl_vars[\'cronjob\']->value){
$_smarty_tpl->tpl_vars[\'cronjob\']->_loop = true;
?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
<img src="cronjob.php?cronjobID=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'cronjob\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
" alt=""><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php } ?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-09-13 17:41:07
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541481b32bfb64_25378510')) {function content_541481b32bfb64_25378510($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title>Your Game Name</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
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
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
, <?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
, <?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
, <?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
, <?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
, <?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>
	<script type="text/javascript" src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

	<script type="text/javascript" src="scripts/game/<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php } ?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
">
	<div id="tooltip" class="tip"></div>

	<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

	<script type="text/javascript" src="scripts/game/<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php } ?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

	
	<script type="text/javascript" src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
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
<script src="skin/js/main.js"></script> <!-- Default JS --><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-09-13 17:41:07
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/main.topnav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541481b34e17e0_75915294')) {function content_541481b34e17e0_75915294($_smarty_tpl) {?><!-- Header -->
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
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<td><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'resourceID\']->value];?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<br>
</td>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php } ?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

</tr>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if ($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<tr>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php $_smarty_tpl->createLocalArrayVariable(\'resourceData\', true, 0);
$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<td class="res_current tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"><span<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']<0){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
</span></td>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }else{ ?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<td class="res_current tooltip" id="current_<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
</td>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php } ?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

</tr>
<tr>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])||!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'])){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<td>&nbsp;</td>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }else{ ?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<td class="res_max tooltip" id="max_<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'];?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
</td>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php } ?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

</tr>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }else{ ?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<tr>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php $_smarty_tpl->createLocalArrayVariable(\'resourceData\', true, 0);
$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<td class="res_current"><span<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']<0){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
</span></td>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }else{ ?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<td class="res_current" id="current_<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
"><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
</td>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php } ?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

</tr>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

</tbody>
</table>
</td>

<nav id="menu">
<ul id="menu-nav">

<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if ($_smarty_tpl->tpl_vars[\'authlevel\']->value>0){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
<li><a href="./admin.php" style="color:lime">ADM</a></li><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<li><a href="game.php?page=overview"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_overview'];?>
</a></li>
<li><a href="game.php?page=fleetTable"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleet'];?>
</a></li>
<li><a href="game.php?page=galaxy"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_galaxy'];?>
</a></li>
<li><a href="game.php?page=settings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_options'];?>
</a></li>
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
<?php if (isModulAvalible(@constant('MODULE_IMPERIUM'))){?><a href="game.php?page=imperium"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_empire'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_RESEARCH'))){?><a href="game.php?page=research"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_research'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_BUILDING'))){?><a href="game.php?page=buildings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buildings'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_SHIPYARD_FLEET'))){?><a href="game.php?page=shipyard&amp;mode=fleet"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_shipshard'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_SHIPYARD_DEFENSIVE'))){?><a href="game.php?page=shipyard&amp;mode=defense"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_defenses'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_OFFICIER'))||isModulAvalible(@constant('MODULE_DMEXTRAS'))){?><a href="game.php?page=officier"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_officiers'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_TRADER'))){?><a href="game.php?page=trader"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_trader'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_FLEET_TRADER'))){?><a href="game.php?page=fleetDealer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleettrader'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_TECHTREE'))){?><a href="game.php?page=techtree"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_technology'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_RESSOURCE_LIST'))){?><a href="game.php?page=resources"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_resources'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_ALLIANCE'))){?><a href="game.php?page=alliance"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_alliance'];?>
</a><br><?php }?>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'hasBoard\']->value)){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
<a href="game.php?page=board" target="forum"><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_forums\'];?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>

<?php if (isModulAvalible(@constant('MODULE_STATISTICS'))){?><a href="game.php?page=statistics"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_statistics'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_RECORDS'))){?><a href="game.php?page=records"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_records'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_BATTLEHALL'))){?><a href="game.php?page=battleHall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_topkb'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_SEARCH'))){?><a href="game.php?page=search"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_search'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_CHAT'))){?><a href="game.php?page=chat"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_chat'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_SUPPORT'))){?><a href="game.php?page=ticket"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_support'];?>
</a><br><?php }?>
<a href="game.php?page=questions"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_faq'];?>
</a><br>
<?php if (isModulAvalible(@constant('MODULE_BANLIST'))){?><a href="game.php?page=banList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_banned'];?>
</a><br><?php }?>
<a href="index.php?page=rules" target="rules"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_rules'];?>
</a><br>
<?php if (isModulAvalible(@constant('MODULE_SIMULATOR'))){?><a href="game.php?page=battleSimulator"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_battlesim'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_MESSAGES'))){?><a href="game.php?page=messages"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_messages'];?>
<?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value>0){?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
<span id="newmes"> (<span id="newmesnum"><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_message\']->value;?>
/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
</span>)</span><?php echo '/*%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/<?php }?>/*/%%SmartyNocache:1684399144541481b2e7e4a9-35604519%%*/';?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_NOTICE'))){?><a href="game.php?page=notes"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_notes'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_BUDDYLIST'))){?><a href="game.php?page=buddyList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buddylist'];?>
</a><br><?php }?>
</ul>
</nav>
</td></table>
</div><?php }} ?>