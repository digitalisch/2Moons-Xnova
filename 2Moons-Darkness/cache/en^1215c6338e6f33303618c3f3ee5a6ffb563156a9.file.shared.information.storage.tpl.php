<?php /* Smarty version Smarty-3.1.13, created on 2014-12-01 18:07:07
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/game/shared.information.storage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1333843309547cae4b40c704-68424093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1215c6338e6f33303618c3f3ee5a6ffb563156a9' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/game/shared.information.storage.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1333843309547cae4b40c704-68424093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productionTable' => 1,
    'LNG' => 1,
    'count' => 1,
    'resourceID' => 1,
    'CurrentLevel' => 1,
    'elementLevel' => 1,
    'productionData' => 1,
    'storage' => 1,
    'storageDiff' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547cae4b502891_46750156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547cae4b502891_46750156')) {function content_547cae4b502891_46750156($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['productionTable']->value['usedResource'], true, 0);?>

<table style="width:100%;">
	<tbody>
		<tr>
			<td colspan="2">
				<table>
				<tr>
					<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['in_level'];?>
</th>
				<?php if ($_smarty_tpl->tpl_vars['count']->value>1){?>
					<?php  $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resourceID']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productionTable']->value['usedResource']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resourceID']->key => $_smarty_tpl->tpl_vars['resourceID']->value){
$_smarty_tpl->tpl_vars['resourceID']->_loop = true;
?>
					<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['resourceID']->value];?>
</th>
					<?php } ?>
				</tr>
				<tr>
					<th>&nbsp;</th>
				<?php }?>
					<?php  $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resourceID']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productionTable']->value['usedResource']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resourceID']->key => $_smarty_tpl->tpl_vars['resourceID']->value){
$_smarty_tpl->tpl_vars['resourceID']->_loop = true;
?>
					<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['in_storage'];?>
</th>
					<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['in_difference'];?>
</th>
					<?php } ?>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['productionData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productionData']->_loop = false;
 $_smarty_tpl->tpl_vars['elementLevel'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['productionTable']->value['storage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['productionData']->key => $_smarty_tpl->tpl_vars['productionData']->value){
$_smarty_tpl->tpl_vars['productionData']->_loop = true;
 $_smarty_tpl->tpl_vars['elementLevel']->value = $_smarty_tpl->tpl_vars['productionData']->key;
?>
				<tr>
					<td><span<?php if ($_smarty_tpl->tpl_vars['CurrentLevel']->value==$_smarty_tpl->tpl_vars['elementLevel']->value){?> style="color:#ff0000"<?php }?>><?php echo $_smarty_tpl->tpl_vars['elementLevel']->value;?>
</span></td>
					<?php  $_smarty_tpl->tpl_vars['storage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['storage']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['productionData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['storage']->key => $_smarty_tpl->tpl_vars['storage']->value){
$_smarty_tpl->tpl_vars['storage']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['storage']->key;
?>
					<?php $_smarty_tpl->tpl_vars['storageDiff'] = new Smarty_variable($_smarty_tpl->tpl_vars['storage']->value-$_smarty_tpl->tpl_vars['productionTable']->value['storage'][$_smarty_tpl->tpl_vars['CurrentLevel']->value][$_smarty_tpl->tpl_vars['resourceID']->value], true, 0);?>
					<td><span style="color:<?php if ($_smarty_tpl->tpl_vars['storage']->value>0){?>lime<?php }elseif($_smarty_tpl->tpl_vars['storage']->value<0){?>red<?php }else{ ?>white<?php }?>"><?php echo pretty_number($_smarty_tpl->tpl_vars['storage']->value);?>
</span></td>
					<td><span style="color:<?php if ($_smarty_tpl->tpl_vars['storageDiff']->value>0){?>lime<?php }elseif($_smarty_tpl->tpl_vars['storageDiff']->value<0){?>red<?php }else{ ?>white<?php }?>"><?php echo pretty_number($_smarty_tpl->tpl_vars['storageDiff']->value);?>
</span></td>
					<?php } ?>
				</tr>
				<?php } ?>
				</table>
			</td>
		</tr>
	</tbody>
</table><?php }} ?>