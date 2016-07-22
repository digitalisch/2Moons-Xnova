<?php /* Smarty version Smarty-3.1.13, created on 2014-09-12 05:41:12
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/page.buildings.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299004797541287781a5387-21417016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f357eb12bc1494af859b101cee0a84c70e40639' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/page.buildings.default.tpl',
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
  'nocache_hash' => '299004797541287781a5387-21417016',
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
  'unifunc' => 'content_541287785b3c72_41988871',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541287785b3c72_41988871')) {function content_541287785b3c72_41988871($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('bodyclass'=>"full"), 0, '299004797541287781a5387-21417016');
content_541287781f21a8_57309352($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>

<?php /*  Call merged included template "main.topnav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '299004797541287781a5387-21417016');
content_541287782c4da9_41531185($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.topnav.tpl" */?>
<div id="content">

<div class="row">
<div class="span9">
<h3 class="spec"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buildings'];?>
</h3>

<div class="alert alert-standard fade in">
<a class="close" data-dismiss="alert" href="#">&times;</a>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php  $_smarty_tpl->tpl_vars[\'List\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'List\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'Queue\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
 $_smarty_tpl->tpl_vars[\'List\']->iteration=0;
 $_smarty_tpl->tpl_vars[\'List\']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars[\'List\']->key => $_smarty_tpl->tpl_vars[\'List\']->value){
$_smarty_tpl->tpl_vars[\'List\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'List\']->iteration++;
 $_smarty_tpl->tpl_vars[\'List\']->index++;
 $_smarty_tpl->tpl_vars[\'List\']->first = $_smarty_tpl->tpl_vars[\'List\']->index === 0;
?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php $_smarty_tpl->tpl_vars[\'ID\'] = new Smarty_variable($_smarty_tpl->tpl_vars[\'List\']->value[\'element\'], true, 0);?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<table class="redesign"><tr>
<td width="650" class="left">

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if (!($_smarty_tpl->tpl_vars[\'isBusy\']->value[\'research\']&&($_smarty_tpl->tpl_vars[\'ID\']->value==6||$_smarty_tpl->tpl_vars[\'ID\']->value==31))&&!($_smarty_tpl->tpl_vars[\'isBusy\']->value[\'shipyard\']&&($_smarty_tpl->tpl_vars[\'ID\']->value==15||$_smarty_tpl->tpl_vars[\'ID\']->value==21))&&$_smarty_tpl->tpl_vars[\'RoomIsOk\']->value&&$_smarty_tpl->tpl_vars[\'CanBuildElement\']->value&&$_smarty_tpl->tpl_vars[\'BuildInfoList\']->value[$_smarty_tpl->tpl_vars[\'ID\']->value][\'buyable\']){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<form class="build_form" action="game.php?page=buildings" method="post">
<input type="hidden" name="cmd" value="insert">
<input type="hidden" name="building" value="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
">
<button type="submit" class="build_submit onlist"><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'ID\']->value];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
 (<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_lvl\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
 <?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->value[\'level\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
)<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if ($_smarty_tpl->tpl_vars[\'List\']->value[\'destroy\']){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
 <?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_dismantle\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

</button>
</form>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }else{ ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'ID\']->value];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
 <?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->value[\'level\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
 <?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if ($_smarty_tpl->tpl_vars[\'List\']->value[\'destroy\']){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_dismantle\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if ($_smarty_tpl->tpl_vars[\'List\']->first){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<div id="progressbar" data-time="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->value[\'resttime\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
">

</td>
<td>
<form action="game.php?page=buildings" method="post" class="build_form">
<input type="hidden" name="cmd" value="cancel">
<button class="button"><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_cancel\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<br><div id="time" data-time="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->value[\'time\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"><br></div></button>
</form>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }else{ ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

</td>
<td>
<form action="game.php?page=buildings" method="post" class="build_form">
<input type="hidden" name="cmd" value="remove">
<input type="hidden" name="listid" value="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->iteration;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
">
<button class="button"><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_cancel\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</button>
</form>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

</td>
</tr>
</table>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php } ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

</div>


<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php  $_smarty_tpl->tpl_vars[\'Element\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'Element\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'ID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'BuildInfoList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'Element\']->key => $_smarty_tpl->tpl_vars[\'Element\']->value){
$_smarty_tpl->tpl_vars[\'Element\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'ID\']->value = $_smarty_tpl->tpl_vars[\'Element\']->key;
?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<div class="info-block">

<div class="info-text">
<h3><a href="#" onclick="return Dialog.info(<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
)"><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'ID\']->value];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</a><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'level\']>0){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
 (<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_lvl\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
 <?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'level\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'maxLevel\']!=255){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
/<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'maxLevel\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
)<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</h3>
<table class="redesign">
<tr>
<td width="120">
<a href="#" onclick="return Dialog.info(<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
)">
<img src="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
gebaeude/<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
.gif" alt="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'ID\']->value];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
" width="120" height="120">
</a></td>
<td width=300><p align=left>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'shortDescription\'][$_smarty_tpl->tpl_vars[\'ID\']->value];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</p>
<p><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php  $_smarty_tpl->tpl_vars[\'RessAmount\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'RessAmount\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'RessID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'Element\']->value[\'costRessources\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'RessAmount\']->key => $_smarty_tpl->tpl_vars[\'RessAmount\']->value){
$_smarty_tpl->tpl_vars[\'RessAmount\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'RessID\']->value = $_smarty_tpl->tpl_vars[\'RessAmount\']->key;
?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'RessID\']->value];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
: <b><span style="color:<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'costOverflow\'][$_smarty_tpl->tpl_vars[\'RessID\']->value]==0){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
lime<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }else{ ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
red<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'RessAmount\']->value);?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</span></b>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php } ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
 | 
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_remaining\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php  $_smarty_tpl->tpl_vars[\'ResCount\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'ResCount\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'ResType\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'Element\']->value[\'costOverflow\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'ResCount\']->key => $_smarty_tpl->tpl_vars[\'ResCount\']->value){
$_smarty_tpl->tpl_vars[\'ResCount\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'ResType\']->value = $_smarty_tpl->tpl_vars[\'ResCount\']->key;
?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'ResType\']->value];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
: <span style="font-weight:700"><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ResCount\']->value);?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</span>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php } ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'Element\']->value[\'infoEnergy\'])){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<br><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'infoEnergy\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
 | <?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fgf_time\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
 <?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo pretty_time($_smarty_tpl->tpl_vars[\'Element\']->value[\'elementTime\']);?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

</p></td>
<td class="transparent" style="vertical-align:middle;width:100px">
</td>

<td width=120><center>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'maxLevel\']==$_smarty_tpl->tpl_vars[\'Element\']->value[\'levelToBuild\']){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<span style="color:red"><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_maxlevel\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</span>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }elseif(($_smarty_tpl->tpl_vars[\'isBusy\']->value[\'research\']&&($_smarty_tpl->tpl_vars[\'ID\']->value==6||$_smarty_tpl->tpl_vars[\'ID\']->value==31))||($_smarty_tpl->tpl_vars[\'isBusy\']->value[\'shipyard\']&&($_smarty_tpl->tpl_vars[\'ID\']->value==15||$_smarty_tpl->tpl_vars[\'ID\']->value==21))){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<span style="color:red"><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_working\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</span>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }else{ ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if ($_smarty_tpl->tpl_vars[\'RoomIsOk\']->value){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if ($_smarty_tpl->tpl_vars[\'CanBuildElement\']->value&&$_smarty_tpl->tpl_vars[\'Element\']->value[\'buyable\']){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<button class="button button-mini" name="building_minus" onclick="buildanz(<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
,-1);">-</button>&nbsp&nbsp&nbsp
<form action="game.php?page=buildings" method="post" class="build_form">
<input type="hidden" name="cmd" value="insert">
<input type="hidden" name="building" value="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
">
<input class="button button-mini" type="text" id="building_anz<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
" name="building_anz" value="1" style="width:20px;">
<button class="button button-mini" name="building_plus" onclick="buildanz(<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
,1);">+</button><br>
<button class="button button-mini" type="submit" class="build_submit"><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_build\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</button>
</form>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }else{ ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<span style="color:red"><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'level\']==0){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_build\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }else{ ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_build_next_level\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'levelToBuild\']+1;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</span>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }else{ ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<span style="color:red"><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_no_more_fields\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</span>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<br>
<form action='game.php?page=buildings' method='post' class='build_form'><input type='hidden' name='cmd' value='destroy'><input type='hidden' name='building' value='<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
'><button class="button button-mini" type='submit' class='build_submit onlist'><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_dismantle\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</button></form>
</center></td></tr></table>
</div>
</div>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php } ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>


</div>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php  $_smarty_tpl->tpl_vars[\'cronjob\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'cronjob\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cronjobs\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'cronjob\']->key => $_smarty_tpl->tpl_vars[\'cronjob\']->value){
$_smarty_tpl->tpl_vars[\'cronjob\']->_loop = true;
?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<img src="cronjob.php?cronjobID=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'cronjob\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
" alt=""><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php } ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-09-12 05:41:12
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541287781f21a8_57309352')) {function content_541287781f21a8_57309352($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title>Your Game Name</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
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
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
, <?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
, <?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
, <?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
, <?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
, <?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>
	<script type="text/javascript" src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

	<script type="text/javascript" src="scripts/game/<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php } ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
">
	<div id="tooltip" class="tip"></div>

	<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

	<script type="text/javascript" src="scripts/game/<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php } ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

	
	<script type="text/javascript" src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
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
<script src="skin/js/main.js"></script> <!-- Default JS --><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-09-12 05:41:12
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/main.topnav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541287782c4da9_41531185')) {function content_541287782c4da9_41531185($_smarty_tpl) {?><!-- Header -->
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
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<td><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'resourceID\']->value];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<br>
</td>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php } ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

</tr>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if ($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<tr>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php $_smarty_tpl->createLocalArrayVariable(\'resourceData\', true, 0);
$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<td class="res_current tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"><span<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']<0){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</span></td>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }else{ ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<td class="res_current tooltip" id="current_<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</td>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php } ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

</tr>
<tr>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])||!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'])){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<td>&nbsp;</td>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }else{ ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<td class="res_max tooltip" id="max_<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</td>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php } ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

</tr>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }else{ ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<tr>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php $_smarty_tpl->createLocalArrayVariable(\'resourceData\', true, 0);
$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<td class="res_current"><span<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']<0){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</span></td>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }else{ ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<td class="res_current" id="current_<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
"><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</td>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php } ?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

</tr>
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

</tbody>
</table>
</td>

<nav id="menu">
<ul id="menu-nav">

<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if ($_smarty_tpl->tpl_vars[\'authlevel\']->value>0){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<li><a href="./admin.php" style="color:lime">ADM</a></li><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

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
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'hasBoard\']->value)){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<a href="game.php?page=board" target="forum"><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_forums\'];?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>

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
<?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value>0){?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
<span id="newmes"> (<span id="newmesnum"><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_message\']->value;?>
/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</span>)</span><?php echo '/*%%SmartyNocache:299004797541287781a5387-21417016%%*/<?php }?>/*/%%SmartyNocache:299004797541287781a5387-21417016%%*/';?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_NOTICE'))){?><a href="game.php?page=notes"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_notes'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_BUDDYLIST'))){?><a href="game.php?page=buddyList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buddylist'];?>
</a><br><?php }?>
</ul>
</nav>
</td></table>
</div><?php }} ?>