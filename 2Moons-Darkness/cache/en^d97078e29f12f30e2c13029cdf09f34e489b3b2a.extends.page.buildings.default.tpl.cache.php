<?php /* Smarty version Smarty-3.1.13, created on 2014-12-01 18:06:48
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/game/page.buildings.default.tpl" */ ?>
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
  ),
  'nocache_hash' => '1780878323547cae3815b2d6-59007766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hasAdminAccess' => 1,
    'LNG' => 1,
    'cronjobs' => 1,
    'cronjob' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547cae3929b299_68761328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547cae3929b299_68761328')) {function content_547cae3929b299_68761328($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('bodyclass'=>"full"), 0, '1780878323547cae3815b2d6-59007766');
content_547cae381f28c0_40927872($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'hasAdminAccess\']->value){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

<div class="globalWarning">
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_1\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
 <a id="drop-admin"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_link\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</a><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_2\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

</div>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

<?php /*  Call merged included template "main.navigation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '1780878323547cae3815b2d6-59007766');
content_547cae384831a2_71744084($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.navigation.tpl" */?>
<?php /*  Call merged included template "main.topnav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '1780878323547cae3815b2d6-59007766');
content_547cae3899d3f9_80041470($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.topnav.tpl" */?>
<div id="content">
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'Queue\']->value)){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

<div id="buildlist" class="buildlist">
	<table style="width:760px">
		<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php  $_smarty_tpl->tpl_vars[\'List\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'List\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'Queue\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
 $_smarty_tpl->tpl_vars[\'List\']->iteration=0;
 $_smarty_tpl->tpl_vars[\'List\']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars[\'List\']->key => $_smarty_tpl->tpl_vars[\'List\']->value){
$_smarty_tpl->tpl_vars[\'List\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'List\']->iteration++;
 $_smarty_tpl->tpl_vars[\'List\']->index++;
 $_smarty_tpl->tpl_vars[\'List\']->first = $_smarty_tpl->tpl_vars[\'List\']->index === 0;
?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

		<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php $_smarty_tpl->tpl_vars[\'ID\'] = new Smarty_variable($_smarty_tpl->tpl_vars[\'List\']->value[\'element\'], true, 0);?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

		<tr>
			<td style="width:70%;vertical-align:top;" class="left">
				<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->iteration;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
.: 
				<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if (!($_smarty_tpl->tpl_vars[\'isBusy\']->value[\'research\']&&($_smarty_tpl->tpl_vars[\'ID\']->value==6||$_smarty_tpl->tpl_vars[\'ID\']->value==31))&&!($_smarty_tpl->tpl_vars[\'isBusy\']->value[\'shipyard\']&&($_smarty_tpl->tpl_vars[\'ID\']->value==15||$_smarty_tpl->tpl_vars[\'ID\']->value==21))&&$_smarty_tpl->tpl_vars[\'RoomIsOk\']->value&&$_smarty_tpl->tpl_vars[\'CanBuildElement\']->value&&$_smarty_tpl->tpl_vars[\'BuildInfoList\']->value[$_smarty_tpl->tpl_vars[\'ID\']->value][\'buyable\']){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

				<form class="build_form" action="game.php?page=buildings" method="post">
					<input type="hidden" name="cmd" value="insert">
					<input type="hidden" name="building" value="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
">
					<button type="submit" class="build_submit onlist"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'ID\']->value];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
 <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->value[\'level\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'List\']->value[\'destroy\']){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
 <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_dismantle\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</button>
				</form>
				<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }else{ ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'ID\']->value];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
 <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->value[\'level\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
 <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'List\']->value[\'destroy\']){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_dismantle\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

				<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'List\']->first){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

				<br><br><div id="progressbar" data-time="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->value[\'resttime\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
"></div>
			</td>
			<td>
				<div id="time" data-time="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->value[\'time\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
"><br></div>
				<form action="game.php?page=buildings" method="post" class="build_form">
					<input type="hidden" name="cmd" value="cancel">
					<button type="submit" class="build_submit onlist"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_cancel\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</button>
				</form>
				<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }else{ ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

			</td>
			<td>
				<form action="game.php?page=buildings" method="post" class="build_form">
					<input type="hidden" name="cmd" value="remove">
					<input type="hidden" name="listid" value="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->iteration;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
">
					<button type="submit" class="build_submit onlist"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_cancel\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</button>
				</form>
				<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

				<br><span style="color:lime" data-time="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->value[\'endtime\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
" class="timer"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->value[\'display\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</span>
			</td>
		</tr>
	<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php } ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

	</table>
</div>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

<table style="width:760px">
	<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php  $_smarty_tpl->tpl_vars[\'Element\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'Element\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'ID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'BuildInfoList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'Element\']->key => $_smarty_tpl->tpl_vars[\'Element\']->value){
$_smarty_tpl->tpl_vars[\'Element\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'ID\']->value = $_smarty_tpl->tpl_vars[\'Element\']->key;
?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

	<tr>
		<td rowspan="2" style="width:120px;">
			<a href="#" onclick="return Dialog.info(<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
)">
				<img src="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
gebaeude/<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
.gif" alt="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'ID\']->value];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
" width="120" height="120">
			</a>
		</td>
		<th>
			<a href="#" onclick="return Dialog.info(<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
)"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'ID\']->value];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</a><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'level\']>0){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
 (<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_lvl\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
 <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'level\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'maxLevel\']!=255){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
/<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'maxLevel\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
)<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

		</th>
	</tr>
	<tr>
		<td>
			<table style="width:100%">
				<tr>
					<td class="transparent left" style="width:90%;padding:10px;"><p><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'shortDescription\'][$_smarty_tpl->tpl_vars[\'ID\']->value];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</p>
					<p><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php  $_smarty_tpl->tpl_vars[\'RessAmount\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'RessAmount\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'RessID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'Element\']->value[\'costRessources\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'RessAmount\']->key => $_smarty_tpl->tpl_vars[\'RessAmount\']->value){
$_smarty_tpl->tpl_vars[\'RessAmount\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'RessID\']->value = $_smarty_tpl->tpl_vars[\'RessAmount\']->key;
?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

					<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'RessID\']->value];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
: <b><span style="color:<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'costOverflow\'][$_smarty_tpl->tpl_vars[\'RessID\']->value]==0){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
lime<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }else{ ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
red<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'RessAmount\']->value);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</span></b>
					<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php } ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</p></td>
					<td class="transparent" style="vertical-align:middle;width:100px">
					<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'maxLevel\']==$_smarty_tpl->tpl_vars[\'Element\']->value[\'levelToBuild\']){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

						<span style="color:red"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_maxlevel\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</span>
					<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }elseif(($_smarty_tpl->tpl_vars[\'isBusy\']->value[\'research\']&&($_smarty_tpl->tpl_vars[\'ID\']->value==6||$_smarty_tpl->tpl_vars[\'ID\']->value==31))||($_smarty_tpl->tpl_vars[\'isBusy\']->value[\'shipyard\']&&($_smarty_tpl->tpl_vars[\'ID\']->value==15||$_smarty_tpl->tpl_vars[\'ID\']->value==21))){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

						<span style="color:red"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_working\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</span>
					<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }else{ ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

						<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'RoomIsOk\']->value){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

							<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'CanBuildElement\']->value&&$_smarty_tpl->tpl_vars[\'Element\']->value[\'buyable\']){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

							<form action="game.php?page=buildings" method="post" class="build_form">
								<input type="hidden" name="cmd" value="insert">
								<input type="hidden" name="building" value="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
">
								<button type="submit" class="build_submit"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'level\']==0){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_build\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }else{ ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_build_next_level\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'levelToBuild\']+1;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</button>
							</form>
							<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }else{ ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

							<span style="color:red"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'level\']==0){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_build\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }else{ ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_build_next_level\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'levelToBuild\']+1;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</span>
							<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

						<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }else{ ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

						<span style="color:red"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_no_more_fields\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</span>
						<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

					<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

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
						<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_remaining\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<br>
						<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php  $_smarty_tpl->tpl_vars[\'ResCount\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'ResCount\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'ResType\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'Element\']->value[\'costOverflow\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'ResCount\']->key => $_smarty_tpl->tpl_vars[\'ResCount\']->value){
$_smarty_tpl->tpl_vars[\'ResCount\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'ResType\']->value = $_smarty_tpl->tpl_vars[\'ResCount\']->key;
?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

						<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'ResType\']->value];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
: <span style="font-weight:700"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ResCount\']->value);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</span><br>
						<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php } ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

						<br>
					</td>
				</tr>
				<tr>		
					<td class="transparent left" style="width:68%">
						<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'Element\']->value[\'infoEnergy\'])){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

							<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_next_level\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<br>
							<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'infoEnergy\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<br>
						<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

						<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'level\']>0){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

							<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'ID\']->value==43){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<a href="#" onclick="return Dialog.info(<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
)"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_jump_gate_action\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</a><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

							<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if (($_smarty_tpl->tpl_vars[\'ID\']->value==44&&!$_smarty_tpl->tpl_vars[\'HaveMissiles\']->value)||$_smarty_tpl->tpl_vars[\'ID\']->value!=44){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<br><a class="tooltip_sticky" data-tooltip-content="
								
								<table style='width:300px'>
									<tr>
										<th colspan='2'><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_price_for_destroy\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
 <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'ID\']->value];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
 <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'level\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</th>
									</tr>
									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php  $_smarty_tpl->tpl_vars[\'ResCount\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'ResCount\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'ResType\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'Element\']->value[\'destroyRessources\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'ResCount\']->key => $_smarty_tpl->tpl_vars[\'ResCount\']->value){
$_smarty_tpl->tpl_vars[\'ResCount\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'ResType\']->value = $_smarty_tpl->tpl_vars[\'ResCount\']->key;
?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<tr>
										<td><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'ResType\']->value];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</td>
										<td><span style='color:<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'destroyOverflow\'][$_smarty_tpl->tpl_vars[\'RessID\']->value]==0){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
lime<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }else{ ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
red<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
'><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ResCount\']->value);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</span></td>
									</tr>
									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php } ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<tr>
										<td><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_destroy_time\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</td>
										<td><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo pretty_time($_smarty_tpl->tpl_vars[\'Element\']->value[\'destroyTime\']);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</td>
									</tr>
									<tr>
										<td colspan='2'>
											<form action='game.php?page=buildings' method='post' class='build_form'>
												<input type='hidden' name='cmd' value='destroy'>
												<input type='hidden' name='building' value='<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
'>
												<button type='submit' class='build_submit onlist'><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_dismantle\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</button>
											</form>
										</td>
									</tr>
								</table>
								
								"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_dismantle\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</a><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

						<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }else{ ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

							&nbsp;
						<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

					</td>
					<td class="transparent right" style="white-space:nowrap;">
						<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fgf_time\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
:<br><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo pretty_time($_smarty_tpl->tpl_vars[\'Element\']->value[\'elementTime\']);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

					</td>
				</tr>	
			</table>
		</td>
	</tr>
	<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php } ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

</table>
</div>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php  $_smarty_tpl->tpl_vars[\'cronjob\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'cronjob\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cronjobs\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'cronjob\']->key => $_smarty_tpl->tpl_vars[\'cronjob\']->value){
$_smarty_tpl->tpl_vars[\'cronjob\']->_loop = true;
?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<img src="cronjob.php?cronjobID=<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'cronjob\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
" alt=""><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php } ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-12-01 18:06:48
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/game/main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_547cae381f28c0_40927872')) {function content_547cae381f28c0_40927872($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buildings'];?>
 - <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
 - <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
, <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
, <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
, <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
, <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
, <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

	<script type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php } ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-12-01 18:06:48
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/game/main.navigation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_547cae384831a2_71744084')) {function content_547cae384831a2_71744084($_smarty_tpl) {?><div id="leftmenu">
	<ul id="menu">
		<li class="menu-head"><a href="game.php?page=changelog"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_changelog'];?>
</a></li>
		<li class="menucat1-head"></li>
		<li><a href="game.php?page=overview"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_overview'];?>
</a></li>
		<?php if (isModulAvalible(@constant('MODULE_IMPERIUM'))){?><li><a href="game.php?page=imperium"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_empire'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_RESEARCH'))){?><li><a href="game.php?page=research"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_research'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_BUILDING'))){?><li><a href="game.php?page=buildings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buildings'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_SHIPYARD_FLEET'))){?><li><a href="game.php?page=shipyard&amp;mode=fleet"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_shipshard'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_SHIPYARD_DEFENSIVE'))){?><li><a href="game.php?page=shipyard&amp;mode=defense"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_defenses'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_OFFICIER'))||isModulAvalible(@constant('MODULE_DMEXTRAS'))){?><li><a href="game.php?page=officier"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_officiers'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_TRADER'))){?><li><a href="game.php?page=trader"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_trader'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_FLEET_TRADER'))){?><li><a href="game.php?page=fleetDealer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleettrader'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_FLEET_TABLE'))){?><li><a href="game.php?page=fleetTable"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleet'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_TECHTREE'))){?><li><a href="game.php?page=techtree"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_technology'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_RESSOURCE_LIST'))){?><li><a href="game.php?page=resources"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_resources'];?>
</a></li><?php }?>
		<li class="menucat2-head"></li>
		<?php if (isModulAvalible(@constant('MODULE_GALAXY'))){?><li><a href="game.php?page=galaxy"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_galaxy'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_ALLIANCE'))){?><li><a href="game.php?page=alliance"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_alliance'];?>
</a></li><?php }?>
        <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'hasBoard\']->value)){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<li><a href="game.php?page=board" target="forum"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_forums\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</a></li><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

		<?php if (isModulAvalible(@constant('MODULE_STATISTICS'))){?><li><a href="game.php?page=statistics"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_statistics'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_RECORDS'))){?><li><a href="game.php?page=records"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_records'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_BATTLEHALL'))){?><li><a href="game.php?page=battleHall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_topkb'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_SEARCH'))){?><li><a href="game.php?page=search"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_search'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_CHAT'))){?><li><a href="game.php?page=chat" onclick="return Dialog.open(this.href, 1000, 720);"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_chat'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_SUPPORT'))){?><li><a href="game.php?page=ticket"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_support'];?>
</a></li><?php }?>
		<li><a href="game.php?page=questions"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_faq'];?>
</a></li>
		<?php if (isModulAvalible(@constant('MODULE_BANLIST'))){?><li><a href="game.php?page=banList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_banned'];?>
</a></li><?php }?>
		<li><a href="index.php?page=rules" target="rules"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_rules'];?>
</a></li>
		<?php if (isModulAvalible(@constant('MODULE_SIMULATOR'))){?><li><a href="game.php?page=battleSimulator"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_battlesim'];?>
</a></li><?php }?>

		<li class="menucat3-head"></li>
		<?php if (isModulAvalible(@constant('MODULE_MESSAGES'))){?><li><a href="game.php?page=messages"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_messages'];?>
<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value>0){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<span id="newmes"> (<span id="newmesnum"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_message\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</span>)</span><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_NOTICE'))){?><li><a href="javascript:OpenPopup('?page=notes', 'notes', 720, 300);"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_notes'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_BUDDYLIST'))){?><li><a href="game.php?page=buddyList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buddylist'];?>
</a></li><?php }?>
		<li><a href="game.php?page=settings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_options'];?>
</a></li>
		<li><a href="game.php?page=logout"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_logout'];?>
</a></li>
		<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'authlevel\']->value>0){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<li><a href="./admin.php" style="color:lime"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_administration\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
 (<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
)</a></li><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

		<li class="menu-footer"></li>
	</ul>
	<div id="disclamer"><a href="index.php?page=disclamer" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_disclamer'];?>
</a></div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-12-01 18:06:48
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/game/main.topnav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_547cae3899d3f9_80041470')) {function content_547cae3899d3f9_80041470($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'/home/qwatakayean/public_html/darkness/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<div id="page">
	<div id="header">
		<table id="headerTable">
			<tbody>
				<tr>
					<td id="planetImage">
						<img src="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
planeten/small/s_<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'image\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
.jpg" alt=""> 
					</td>
					<td id="planetSelectorWrapper">
						<select id="planetSelector">
							<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'PlanetSelect\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'current_pid\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

						</select>
					</td>
					<td id="resourceWrapper">
						<table id="resourceTable">
							<tbody>
								<tr>
									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php  $_smarty_tpl->tpl_vars[\'resouceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resouceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resouceData\']->key => $_smarty_tpl->tpl_vars[\'resouceData\']->value){
$_smarty_tpl->tpl_vars[\'resouceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resouceData\']->key;
?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<td><img src="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
images/<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
.gif" alt=""></td>
									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php } ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php  $_smarty_tpl->tpl_vars[\'resouceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resouceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resouceData\']->key => $_smarty_tpl->tpl_vars[\'resouceData\']->value){
$_smarty_tpl->tpl_vars[\'resouceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resouceData\']->key;
?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<td class="res_name"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'resourceID\']->value];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php } ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

								<tr>
									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php  $_smarty_tpl->tpl_vars[\'resouceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resouceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resouceData\']->key => $_smarty_tpl->tpl_vars[\'resouceData\']->value){
$_smarty_tpl->tpl_vars[\'resouceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resouceData\']->key;
?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'])){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php $_smarty_tpl->createLocalArrayVariable(\'resouceData\', true, 0);
$_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'] = $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resouceData\']->value[\'used\'];?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<td class="res_current tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
"><span<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']<0){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</span></td>
									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }else{ ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<td class="res_current tooltip" id="current_<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php } ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php  $_smarty_tpl->tpl_vars[\'resouceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resouceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resouceData\']->key => $_smarty_tpl->tpl_vars[\'resouceData\']->value){
$_smarty_tpl->tpl_vars[\'resouceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resouceData\']->key;
?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'])||!isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\'])){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<td>&nbsp;</td>
									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }else{ ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<td class="res_max tooltip" id="max_<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php } ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }else{ ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

								<tr>
									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php  $_smarty_tpl->tpl_vars[\'resouceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resouceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resouceData\']->key => $_smarty_tpl->tpl_vars[\'resouceData\']->value){
$_smarty_tpl->tpl_vars[\'resouceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resouceData\']->key;
?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'])){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php $_smarty_tpl->createLocalArrayVariable(\'resouceData\', true, 0);
$_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'] = $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resouceData\']->value[\'used\'];?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<td class="res_current"><span<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']<0){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</span></td>
									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }else{ ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<td class="res_current" id="current_<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php } ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php  $_smarty_tpl->tpl_vars[\'resouceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resouceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resouceData\']->key => $_smarty_tpl->tpl_vars[\'resouceData\']->value){
$_smarty_tpl->tpl_vars[\'resouceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resouceData\']->key;
?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'])||!isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\'])){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<td>&nbsp;</td>
									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }else{ ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<td class="res_max" id="max_<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

									<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php } ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if (!$_smarty_tpl->tpl_vars[\'vmode\']->value){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

		<script type="text/javascript">
		var viewShortlyNumber	= <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

		var vacation			= <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'vmode\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
;
		<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php  $_smarty_tpl->tpl_vars[\'resouceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resouceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resouceData\']->key => $_smarty_tpl->tpl_vars[\'resouceData\']->value){
$_smarty_tpl->tpl_vars[\'resouceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resouceData\']->key;
?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

		<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'production\'])){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

		resourceTicker({
			available: <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
,
			limit: [0, <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
],
			production: <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'production\']);?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
,
			valueElem: "current_<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
"
		}, true);
		<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

		<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php } ?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

		</script>
		<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

	</div>
	<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php if ($_smarty_tpl->tpl_vars[\'closed\']->value){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_closed\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'delete\']->value){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'delete\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'vacation\']->value){?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tn_vacation_mode\'];?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
 <?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php echo $_smarty_tpl->tpl_vars[\'vacation\']->value;?>
/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/<?php }?>/*/%%SmartyNocache:1780878323547cae3815b2d6-59007766%%*/';?>
<?php }} ?>