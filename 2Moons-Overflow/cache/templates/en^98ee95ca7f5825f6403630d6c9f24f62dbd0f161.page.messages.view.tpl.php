<?php /*%%SmartyHeaderCode:1935595980541481cc2bc653-87348534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98ee95ca7f5825f6403630d6c9f24f62dbd0f161' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/page.messages.view.tpl',
      1 => 1410292615,
      2 => 'file',
    ),
    '85449f5980d348487ee0deeb2aa3f184f8063bfc' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/layout.ajax.tpl',
      1 => 1410292615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1935595980541481cc2bc653-87348534',
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_541481cc62a631_68614310',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541481cc62a631_68614310')) {function content_541481cc62a631_68614310($_smarty_tpl) {?><form action="game.php?page=messages" method="post">
<input type="hidden" name="mode" value="action">
<input type="hidden" name="ajax" value="1">
<input type="hidden" name="messcat" value="<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
">
<input type="hidden" name="side" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">

<table class="redesign" id="messagestable" style="width:760px;">
	<tr>
		<th colspan="4">Messages</th>
	</tr>
	<tr style="height: 20px;">
		<td class="right" colspan="4">Page: <?php if ($_smarty_tpl->tpl_vars['page']->value!=1){?><a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
);return false;">&laquo;</a>&nbsp;<?php }?><?php $_smarty_tpl->tpl_vars['site'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['site']->step = 1;$_smarty_tpl->tpl_vars['site']->total = (int)ceil(($_smarty_tpl->tpl_vars['site']->step > 0 ? $_smarty_tpl->tpl_vars['maxPage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['maxPage']->value)+1)/abs($_smarty_tpl->tpl_vars['site']->step));
if ($_smarty_tpl->tpl_vars['site']->total > 0){
for ($_smarty_tpl->tpl_vars['site']->value = 1, $_smarty_tpl->tpl_vars['site']->iteration = 1;$_smarty_tpl->tpl_vars['site']->iteration <= $_smarty_tpl->tpl_vars['site']->total;$_smarty_tpl->tpl_vars['site']->value += $_smarty_tpl->tpl_vars['site']->step, $_smarty_tpl->tpl_vars['site']->iteration++){
$_smarty_tpl->tpl_vars['site']->first = $_smarty_tpl->tpl_vars['site']->iteration == 1;$_smarty_tpl->tpl_vars['site']->last = $_smarty_tpl->tpl_vars['site']->iteration == $_smarty_tpl->tpl_vars['site']->total;?><a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['site']->value;?>
);return false;"><?php if ($_smarty_tpl->tpl_vars['site']->value==$_smarty_tpl->tpl_vars['page']->value){?><b>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]</b><?php }else{ ?>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]<?php }?></a><?php if ($_smarty_tpl->tpl_vars['site']->value!=$_smarty_tpl->tpl_vars['maxPage']->value){?>&nbsp;<?php }?><?php }} ?><?php if ($_smarty_tpl->tpl_vars['page']->value!=$_smarty_tpl->tpl_vars['maxPage']->value){?>&nbsp;<a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
);return false;">&raquo;</a><?php }?></td>
	</tr>
	<tr style="height: 20px;">
		<td>Action</td>
		<td>Date</td>
		<td><?php if ($_smarty_tpl->tpl_vars['MessID']->value!=999){?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_from'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_to'];?>
<?php }?></td>
		<td>Subject</td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['Message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MessageList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Message']->key => $_smarty_tpl->tpl_vars['Message']->value){
$_smarty_tpl->tpl_vars['Message']->_loop = true;
?>
	<tr id="message_<?php echo $_smarty_tpl->tpl_vars['Message']->value['id'];?>
" class="message_head<?php if ($_smarty_tpl->tpl_vars['MessID']->value!=999&&$_smarty_tpl->tpl_vars['Message']->value['unread']==1){?> mes_unread<?php }?>">
		<td style="width:40px;" rowspan="2">
		<?php if ($_smarty_tpl->tpl_vars['MessID']->value!=999){?><input name="messageID[<?php echo $_smarty_tpl->tpl_vars['Message']->value['id'];?>
]" value="1" type="checkbox"><?php }?>
		</td>
		<td><?php echo $_smarty_tpl->tpl_vars['Message']->value['time'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['Message']->value['from'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['Message']->value['subject'];?>

		<?php if ($_smarty_tpl->tpl_vars['Message']->value['type']==1&&$_smarty_tpl->tpl_vars['MessID']->value!=999){?>
		<a href="#" onclick="return Dialog.PM(<?php echo $_smarty_tpl->tpl_vars['Message']->value['sender'];?>
, Message.CreateAnswer('<?php echo $_smarty_tpl->tpl_vars['Message']->value['subject'];?>
'));" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_answer_to'];?>
 <?php echo strip_tags($_smarty_tpl->tpl_vars['Message']->value['from']);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/m.gif" border="0"></a>
		<?php }?>
		</td>
	</tr>
	<tr class="messages_body">
		<td colspan="3" class="left">
		<?php echo $_smarty_tpl->tpl_vars['Message']->value['text'];?>

		</td>
	</tr>
	<?php } ?>
	<tr style="height: 20px;">
		<td class="right" colspan="4">Page: <?php if ($_smarty_tpl->tpl_vars['page']->value!=1){?><a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, 1);return false;">&laquo;</a>&nbsp;<?php }?><?php $_smarty_tpl->tpl_vars['site'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['site']->step = 1;$_smarty_tpl->tpl_vars['site']->total = (int)ceil(($_smarty_tpl->tpl_vars['site']->step > 0 ? $_smarty_tpl->tpl_vars['maxPage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['maxPage']->value)+1)/abs($_smarty_tpl->tpl_vars['site']->step));
if ($_smarty_tpl->tpl_vars['site']->total > 0){
for ($_smarty_tpl->tpl_vars['site']->value = 1, $_smarty_tpl->tpl_vars['site']->iteration = 1;$_smarty_tpl->tpl_vars['site']->iteration <= $_smarty_tpl->tpl_vars['site']->total;$_smarty_tpl->tpl_vars['site']->value += $_smarty_tpl->tpl_vars['site']->step, $_smarty_tpl->tpl_vars['site']->iteration++){
$_smarty_tpl->tpl_vars['site']->first = $_smarty_tpl->tpl_vars['site']->iteration == 1;$_smarty_tpl->tpl_vars['site']->last = $_smarty_tpl->tpl_vars['site']->iteration == $_smarty_tpl->tpl_vars['site']->total;?><a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['site']->value;?>
);return false;"><?php if ($_smarty_tpl->tpl_vars['site']->value==$_smarty_tpl->tpl_vars['page']->value){?><b>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]</b><?php }else{ ?>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]<?php }?></a><?php if ($_smarty_tpl->tpl_vars['site']->value!=$_smarty_tpl->tpl_vars['maxPage']->value){?>&nbsp;<?php }?><?php }} ?><?php if ($_smarty_tpl->tpl_vars['page']->value!=$_smarty_tpl->tpl_vars['maxPage']->value){?>&nbsp;<a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['maxPage']->value;?>
);return false;">&raquo;</a><?php }?></td>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['MessID']->value!=999){?>
	<tr>
		<td colspan="4" >
			<center><select class="button button-mini" name="actionBottom">
				<option value="readmarked"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_read_marked'];?>
</option>
				<option value="readtypeall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_read_type_all'];?>
</option>
				<option value="readall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_read_all'];?>
</option>
				<option value="deletemarked"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_marked'];?>
</option>
				<option value="deleteunmarked"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_unmarked'];?>
</option>
				<option value="deletetypeall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_type_all'];?>
</option>
				<option value="deleteall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_all'];?>
</option>
			</select>
			<input class="button button-mini" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_confirm'];?>
" type="submit" name="submitBottom">
		</center></td>
	</tr>
	<?php }?>
</table>
</form>
<?php }} ?>