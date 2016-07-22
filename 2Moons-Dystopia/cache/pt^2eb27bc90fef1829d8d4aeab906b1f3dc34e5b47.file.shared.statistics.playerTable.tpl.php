<?php /* Smarty version Smarty-3.1.13, created on 2015-01-13 23:49:41
         compiled from "C:\Wamp\www\Dystopia\styles\templates\game\shared.statistics.playerTable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3132254b5a10544da72-93420727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2eb27bc90fef1829d8d4aeab906b1f3dc34e5b47' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\game\\shared.statistics.playerTable.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3132254b5a10544da72-93420727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LNG' => 1,
    'RangeList' => 1,
    'RangeInfo' => 1,
    'CUser_id' => 1,
    'dpath' => 1,
    'CUser_ally' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b5a1055db0a3_14567242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b5a1055db0a3_14567242')) {function content_54b5a1055db0a3_14567242($_smarty_tpl) {?><tr>
	<th style="width:60px;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['st_position'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['st_player'];?>
</th>
	<th>&nbsp;</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['st_alliance'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['st_points'];?>
</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['RangeInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RangeInfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RangeList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RangeInfo']->key => $_smarty_tpl->tpl_vars['RangeInfo']->value){
$_smarty_tpl->tpl_vars['RangeInfo']->_loop = true;
?>
<tr>
	<td><a class="tooltip" data-tooltip-content="<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['ranking']==0){?><span style='color:#87CEEB'>*</span><?php }elseif($_smarty_tpl->tpl_vars['RangeInfo']->value['ranking']<0){?><span style='color:red'>-<?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['ranking'];?>
</span><?php }elseif($_smarty_tpl->tpl_vars['RangeInfo']->value['ranking']>0){?><span style='color:green'>+<?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['ranking'];?>
</span><?php }?>"><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['rank'];?>
</a></td>
	<td><a href="#" onclick="return Dialog.Playercard(<?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['name'];?>
');"<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['id']==$_smarty_tpl->tpl_vars['CUser_id']->value){?> style="color:lime"<?php }?>><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['name'];?>
</a></td>
	<td><?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['id']!=$_smarty_tpl->tpl_vars['CUser_id']->value){?><a href="#" onclick="return Dialog.PM(<?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['id'];?>
);"><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/m.gif" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['st_write_message'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['st_write_message'];?>
"></a><?php }?></td>
	<td><?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['allyid']!=0){?><a href="game.php?page=alliance&amp;mode=info&amp;id=<?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['allyid'];?>
"><?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['allyid']==$_smarty_tpl->tpl_vars['CUser_ally']->value){?><span style="color:#33CCFF"><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['allyname'];?>
</span><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['allyname'];?>
<?php }?></a><?php }else{ ?>-<?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['points'];?>
</td>
</tr>
<?php } ?><?php }} ?>