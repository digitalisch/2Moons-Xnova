<?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 00:55:22
         compiled from "C:\Wamp\www\Dystopia\styles\templates\game\shared.information.production.tpl" */ ?>
<?php /*%%SmartyHeaderCode:534254b5b06a754862-35592002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb2637f4f2b1b77dd7404dff91a29330d0263af7' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\shared.information.production.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '534254b5b06a754862-35592002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productionTable' => 1,
    'LNG' => 1,
    'resourceID' => 1,
    'CurrentLevel' => 1,
    'elementLevel' => 1,
    'productionData' => 1,
    'production' => 1,
    'productionDiff' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b5b06a881bf6_99733470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b5b06a881bf6_99733470')) {function content_54b5b06a881bf6_99733470($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['productionTable']->value['usedResource']), true, 0);?>

<table style="width:100%;">
	<tbody>
		<tr>
			<td colspan="2">
				<table>
				<tr>
					<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['in_level'];?>
</th>
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
					<?php  $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resourceID']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productionTable']->value['usedResource']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resourceID']->key => $_smarty_tpl->tpl_vars['resourceID']->value){
$_smarty_tpl->tpl_vars['resourceID']->_loop = true;
?>
					<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['in_prod_p_hour'];?>
</th>
					<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['in_difference'];?>
</th>
					<?php } ?>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['productionData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productionData']->_loop = false;
 $_smarty_tpl->tpl_vars['elementLevel'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['productionTable']->value['production']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['productionData']->key => $_smarty_tpl->tpl_vars['productionData']->value){
$_smarty_tpl->tpl_vars['productionData']->_loop = true;
 $_smarty_tpl->tpl_vars['elementLevel']->value = $_smarty_tpl->tpl_vars['productionData']->key;
?>
				<tr>
					<td><span<?php if ($_smarty_tpl->tpl_vars['CurrentLevel']->value==$_smarty_tpl->tpl_vars['elementLevel']->value){?> style="color:#ff0000"<?php }?>><?php echo $_smarty_tpl->tpl_vars['elementLevel']->value;?>
</span></td>
					<?php  $_smarty_tpl->tpl_vars['production'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['production']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['productionData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['production']->key => $_smarty_tpl->tpl_vars['production']->value){
$_smarty_tpl->tpl_vars['production']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['production']->key;
?>
					<?php $_smarty_tpl->tpl_vars['productionDiff'] = new Smarty_variable($_smarty_tpl->tpl_vars['production']->value-$_smarty_tpl->tpl_vars['productionTable']->value['production'][$_smarty_tpl->tpl_vars['CurrentLevel']->value][$_smarty_tpl->tpl_vars['resourceID']->value], true, 0);?>
					<td><span style="color:<?php if ($_smarty_tpl->tpl_vars['production']->value>0){?>lime<?php }elseif($_smarty_tpl->tpl_vars['production']->value<0){?>red<?php }else{ ?>white<?php }?>"><?php echo pretty_number($_smarty_tpl->tpl_vars['production']->value);?>
</span></td>
					<td><span style="color:<?php if ($_smarty_tpl->tpl_vars['productionDiff']->value>0){?>lime<?php }elseif($_smarty_tpl->tpl_vars['productionDiff']->value<0){?>red<?php }else{ ?>white<?php }?>"><?php echo pretty_number($_smarty_tpl->tpl_vars['productionDiff']->value);?>
</span></td>
					<?php } ?>
				</tr>
				<?php } ?>
				</table>
			</td>
		</tr>
	</tbody>
</table><?php }} ?>