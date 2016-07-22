<?php /* Smarty version Smarty-3.1.13, created on 2014-09-13 17:41:32
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/page.messages.view.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_541481cc621994_09062112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541481cc621994_09062112')) {function content_541481cc621994_09062112($_smarty_tpl) {?>
<form action="game.php?page=messages" method="post">
<input type="hidden" name="mode" value="action">
<input type="hidden" name="ajax" value="1">
<input type="hidden" name="messcat" value="<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
">
<input type="hidden" name="side" value="<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value;?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
">

<table class="redesign" id="messagestable" style="width:760px;">
	<tr>
		<th colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_message_title'];?>
</th>
	</tr>
	<tr style="height: 20px;">
		<td class="right" colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_page'];?>
: <?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value!=1){?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
<a href="#" onclick="Message.getMessages(<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
, <?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value-1;?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
);return false;">&laquo;</a>&nbsp;<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php }?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php $_smarty_tpl->tpl_vars[\'site\'] = new Smarty_Variable;$_smarty_tpl->tpl_vars[\'site\']->step = 1;$_smarty_tpl->tpl_vars[\'site\']->total = (int)ceil(($_smarty_tpl->tpl_vars[\'site\']->step > 0 ? $_smarty_tpl->tpl_vars[\'maxPage\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'maxPage\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'site\']->step));
if ($_smarty_tpl->tpl_vars[\'site\']->total > 0){
for ($_smarty_tpl->tpl_vars[\'site\']->value = 1, $_smarty_tpl->tpl_vars[\'site\']->iteration = 1;$_smarty_tpl->tpl_vars[\'site\']->iteration <= $_smarty_tpl->tpl_vars[\'site\']->total;$_smarty_tpl->tpl_vars[\'site\']->value += $_smarty_tpl->tpl_vars[\'site\']->step, $_smarty_tpl->tpl_vars[\'site\']->iteration++){
$_smarty_tpl->tpl_vars[\'site\']->first = $_smarty_tpl->tpl_vars[\'site\']->iteration == 1;$_smarty_tpl->tpl_vars[\'site\']->last = $_smarty_tpl->tpl_vars[\'site\']->iteration == $_smarty_tpl->tpl_vars[\'site\']->total;?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
<a href="#" onclick="Message.getMessages(<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
, <?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
);return false;"><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value==$_smarty_tpl->tpl_vars[\'page\']->value){?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
<b>[<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
]</b><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php }else{ ?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
[<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
]<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php }?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
</a><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value!=$_smarty_tpl->tpl_vars[\'maxPage\']->value){?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php }?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php }} ?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value!=$_smarty_tpl->tpl_vars[\'maxPage\']->value){?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
&nbsp;<a href="#" onclick="Message.getMessages(<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
, <?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value+1;?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
);return false;">&raquo;</a><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php }?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
</td>
	</tr>
	<tr style="height: 20px;">
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_action'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_date'];?>
</td>
		<td><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php if ($_smarty_tpl->tpl_vars[\'MessID\']->value!=999){?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_from\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php }else{ ?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_to\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php }?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_subject'];?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php  $_smarty_tpl->tpl_vars[\'Message\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'Message\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'MessageList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'Message\']->key => $_smarty_tpl->tpl_vars[\'Message\']->value){
$_smarty_tpl->tpl_vars[\'Message\']->_loop = true;
?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>

	<tr id="message_<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'id\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
" class="message_head<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php if ($_smarty_tpl->tpl_vars[\'MessID\']->value!=999&&$_smarty_tpl->tpl_vars[\'Message\']->value[\'unread\']==1){?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
 mes_unread<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php }?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
">
		<td style="width:40px;" rowspan="2">
		<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php if ($_smarty_tpl->tpl_vars[\'MessID\']->value!=999){?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
<input name="messageID[<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'id\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
]" value="1" type="checkbox"><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php }?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>

		</td>
		<td><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'time\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
</td>
		<td><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'from\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
</td>
		<td><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'subject\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>

		<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php if ($_smarty_tpl->tpl_vars[\'Message\']->value[\'type\']==1&&$_smarty_tpl->tpl_vars[\'MessID\']->value!=999){?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>

		<a href="#" onclick="return Dialog.PM(<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'sender\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
, Message.CreateAnswer('<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'subject\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
'));" title="<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_answer_to\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
 <?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo strip_tags($_smarty_tpl->tpl_vars[\'Message\']->value[\'from\']);?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
img/m.gif" border="0"></a>
		<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php }?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>

		</td>
	</tr>
	<tr class="messages_body">
		<td colspan="3" class="left">
		<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'text\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>

		</td>
	</tr>
	<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php } ?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>

	<tr style="height: 20px;">
		<td class="right" colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_page'];?>
: <?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value!=1){?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
<a href="#" onclick="Message.getMessages(<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
, 1);return false;">&laquo;</a>&nbsp;<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php }?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php $_smarty_tpl->tpl_vars[\'site\'] = new Smarty_Variable;$_smarty_tpl->tpl_vars[\'site\']->step = 1;$_smarty_tpl->tpl_vars[\'site\']->total = (int)ceil(($_smarty_tpl->tpl_vars[\'site\']->step > 0 ? $_smarty_tpl->tpl_vars[\'maxPage\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'maxPage\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'site\']->step));
if ($_smarty_tpl->tpl_vars[\'site\']->total > 0){
for ($_smarty_tpl->tpl_vars[\'site\']->value = 1, $_smarty_tpl->tpl_vars[\'site\']->iteration = 1;$_smarty_tpl->tpl_vars[\'site\']->iteration <= $_smarty_tpl->tpl_vars[\'site\']->total;$_smarty_tpl->tpl_vars[\'site\']->value += $_smarty_tpl->tpl_vars[\'site\']->step, $_smarty_tpl->tpl_vars[\'site\']->iteration++){
$_smarty_tpl->tpl_vars[\'site\']->first = $_smarty_tpl->tpl_vars[\'site\']->iteration == 1;$_smarty_tpl->tpl_vars[\'site\']->last = $_smarty_tpl->tpl_vars[\'site\']->iteration == $_smarty_tpl->tpl_vars[\'site\']->total;?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
<a href="#" onclick="Message.getMessages(<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
, <?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
);return false;"><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value==$_smarty_tpl->tpl_vars[\'page\']->value){?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
<b>[<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
]</b><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php }else{ ?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
[<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
]<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php }?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
</a><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value!=$_smarty_tpl->tpl_vars[\'maxPage\']->value){?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php }?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php }} ?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value!=$_smarty_tpl->tpl_vars[\'maxPage\']->value){?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
&nbsp;<a href="#" onclick="Message.getMessages(<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
, <?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'maxPage\']->value;?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
);return false;">&raquo;</a><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php }?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php if ($_smarty_tpl->tpl_vars[\'MessID\']->value!=999){?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>

	<tr>
		<td colspan="4" >
			<center><select class="button button-mini" name="actionBottom">
				<option value="readmarked"><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_read_marked\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
</option>
				<option value="readtypeall"><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_read_type_all\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
</option>
				<option value="readall"><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_read_all\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
</option>
				<option value="deletemarked"><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_marked\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
</option>
				<option value="deleteunmarked"><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_unmarked\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
</option>
				<option value="deletetypeall"><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_type_all\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
</option>
				<option value="deleteall"><?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_all\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
</option>
			</select>
			<input class="button button-mini" value="<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_confirm\'];?>
/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>
" type="submit" name="submitBottom">
		</center></td>
	</tr>
	<?php echo '/*%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/<?php }?>/*/%%SmartyNocache:1935595980541481cc2bc653-87348534%%*/';?>

</table>
</form>
<?php }} ?>