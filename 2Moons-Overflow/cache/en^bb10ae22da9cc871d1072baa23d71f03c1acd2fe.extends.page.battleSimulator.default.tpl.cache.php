<?php /* Smarty version Smarty-3.1.13, created on 2014-09-12 05:42:12
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/page.battleSimulator.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:516949172541287b444d943-35141770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb10ae22da9cc871d1072baa23d71f03c1acd2fe' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/page.battleSimulator.default.tpl',
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
  'nocache_hash' => '516949172541287b444d943-35141770',
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
  'unifunc' => 'content_541287b483c025_30370581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541287b483c025_30370581')) {function content_541287b483c025_30370581($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('bodyclass'=>"full"), 0, '516949172541287b444d943-35141770');
content_541287b448ae22_64856741($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>

<?php /*  Call merged included template "main.topnav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '516949172541287b444d943-35141770');
content_541287b45359f1_29305541($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.topnav.tpl" */?>
<div id="content">

<div class="row">
<div class="span9">

<h3 class="spec"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_battlesim'];?>
</h3>
<div class="tabbable">
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">

<form id="form" name="battlesim">
	<input type="hidden" name="slots" id="slots" value="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'Slots\']->value+1;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
">
	<table class="redesign">
		<tr>
			<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_battlesim'];?>
</th>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bs_steal'];?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][901];?>
: <input type="text" size="10" value="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'battleinput\']->value[0][1][1])){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'battleinput\']->value[0][1][1];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }else{ ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
0<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" name="battleinput[0][1][1]"> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][902];?>
: <input type="text" size="10" value="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'battleinput\']->value[0][1][2])){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'battleinput\']->value[0][1][2];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }else{ ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
0<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" name="battleinput[0][1][2]"> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][903];?>
: <input type="text" size="10" value="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'battleinput\']->value[0][1][3])){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'battleinput\']->value[0][1][3];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }else{ ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
0<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" name="battleinput[0][1][3]"></td>
		</tr>
		<tr>
			<td class="left"><input type="button" onClick="return add();" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['bs_add_acs_slot'];?>
"></td>
		</tr>
		<tr>
			<td class="transparent" style="padding:0;">
				<div id="tabs">
					<ul>
						<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'])) unset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\']);
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'name\'] = \'tab\';
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'start\'] = (int)0;
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'loop\'] = is_array($_loop=$_smarty_tpl->tpl_vars[\'Slots\']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'show\'] = true;
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'max\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'loop\'];
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'step\'] = 1;
if ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'start\'] < 0)
    $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'start\'] = max($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'step\'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'loop\'] + $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'start\']);
else
    $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'start\'] = min($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'start\'], $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'step\'] > 0 ? $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'loop\'] : $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'loop\']-1);
if ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'show\']) {
    $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'total\'] = min(ceil(($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'step\'] > 0 ? $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'loop\'] - $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'start\'] : $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'start\']+1)/abs($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'step\'])), $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'max\']);
    if ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'total\'] == 0)
        $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'show\'] = false;
} else
    $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'total\'] = 0;
if ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'show\']):

            for ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'index\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'start\'], $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'iteration\'] = 1;
                 $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'iteration\'] <= $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'total\'];
                 $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'index\'] += $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'step\'], $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'iteration\']++):
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'rownum\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'iteration\'];
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'index_prev\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'index\'] - $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'step\'];
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'index_next\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'index\'] + $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'step\'];
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'first\']      = ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'iteration\'] == 1);
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'last\']       = ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'iteration\'] == $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'tab\'][\'total\']);
?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<li><a href="#tabs-<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'tab\'][\'index\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bs_acs_slot\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
 <?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'tab\'][\'index\']+1;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</a></li><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php endfor; endif; ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

					</ul>
					<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'])) unset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\']);
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'name\'] = \'content\';
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'start\'] = (int)0;
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'loop\'] = is_array($_loop=$_smarty_tpl->tpl_vars[\'Slots\']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'show\'] = true;
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'max\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'loop\'];
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'step\'] = 1;
if ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'start\'] < 0)
    $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'start\'] = max($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'step\'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'loop\'] + $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'start\']);
else
    $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'start\'] = min($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'start\'], $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'step\'] > 0 ? $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'loop\'] : $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'loop\']-1);
if ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'show\']) {
    $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'total\'] = min(ceil(($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'step\'] > 0 ? $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'loop\'] - $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'start\'] : $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'start\']+1)/abs($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'step\'])), $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'max\']);
    if ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'total\'] == 0)
        $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'show\'] = false;
} else
    $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'total\'] = 0;
if ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'show\']):

            for ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'index\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'start\'], $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'iteration\'] = 1;
                 $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'iteration\'] <= $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'total\'];
                 $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'index\'] += $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'step\'], $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'iteration\']++):
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'rownum\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'iteration\'];
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'index_prev\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'index\'] - $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'step\'];
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'index_next\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'index\'] + $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'step\'];
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'first\']      = ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'iteration\'] == 1);
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'last\']       = ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'iteration\'] == $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'content\'][\'total\']);
?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

					<div id="tabs-<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
">
						<table>
							<tr>
								<th><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bs_techno\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</th>
								<th><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bs_atter\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</th>
								<th><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bs_deffer\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</th>
							</tr>
							<tr>
								<td></td>
								<td><button class="reset"><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bs_reset\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</button></td>
								<td><button class="reset"><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bs_reset\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</button></td>
							</tr>
							<tr>
								<td><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][109];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
:</td>
								<td><input type="text" size="10" value="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'battleinput\']->value[$_smarty_tpl->getVariable(\'smarty\',null,true,false)->value[\'section\'][\'content\'][\'index\']][0][109])){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'battleinput\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\']][0][109];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }else{ ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
0<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" name="battleinput[<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
][0][109]"></td>
								<td><input type="text" size="10" value="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'battleinput\']->value[$_smarty_tpl->getVariable(\'smarty\',null,true,false)->value[\'section\'][\'content\'][\'index\']][1][109])){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'battleinput\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\']][1][109];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }else{ ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
0<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" name="battleinput[<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
][1][109]"></td>
							</tr>
							<tr>
								<td><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][110];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
:</td>
								<td><input type="text" size="10" value="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'battleinput\']->value[$_smarty_tpl->getVariable(\'smarty\',null,true,false)->value[\'section\'][\'content\'][\'index\']][0][110])){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'battleinput\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\']][0][110];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }else{ ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
0<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" name="battleinput[<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
][0][110]"></td>
								<td><input type="text" size="10" value="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'battleinput\']->value[$_smarty_tpl->getVariable(\'smarty\',null,true,false)->value[\'section\'][\'content\'][\'index\']][1][110])){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'battleinput\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\']][1][110];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }else{ ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
0<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" name="battleinput[<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
][1][110]"></td>
							</tr>
							<tr>
								<td><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][111];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
:</td>
								<td><input type="text" size="10" value="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'battleinput\']->value[$_smarty_tpl->getVariable(\'smarty\',null,true,false)->value[\'section\'][\'content\'][\'index\']][0][111])){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'battleinput\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\']][0][111];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }else{ ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
0<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" name="battleinput[<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
][0][111]"></td>
								<td><input type="text" size="10" value="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'battleinput\']->value[$_smarty_tpl->getVariable(\'smarty\',null,true,false)->value[\'section\'][\'content\'][\'index\']][1][111])){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'battleinput\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\']][1][111];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }else{ ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
0<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" name="battleinput[<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
][1][111]"></td>
							</tr>
						</table>
						<br>
						<table>
							<tr>
								<td class="transparent">
									<table>
										<tr>
											<th><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bs_names\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</th>
											<th><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bs_atter\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</th>
											<th><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bs_deffer\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</th>
										</tr>
										<tr>
											<td></td>
											<td><button class="reset"><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bs_reset\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</button></td>
											<td><button class="reset"><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bs_reset\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</button></td>
										</tr>
										<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php  $_smarty_tpl->tpl_vars[\'id\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'id\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'fleetList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'id\']->key => $_smarty_tpl->tpl_vars[\'id\']->value){
$_smarty_tpl->tpl_vars[\'id\']->_loop = true;
?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

										<tr>
											<td><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'id\']->value];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
:</td>
											<td><input type="text" size="10" value="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'battleinput\']->value[$_smarty_tpl->getVariable(\'smarty\',null,true,false)->value[\'section\'][\'content\'][\'index\']][0][$_smarty_tpl->tpl_vars[\'id\']->value])){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'battleinput\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\']][0][$_smarty_tpl->tpl_vars[\'id\']->value];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }else{ ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
0<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" name="battleinput[<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
][0][<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'id\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
]"></td>
											<td><input type="text" size="10" value="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'battleinput\']->value[$_smarty_tpl->getVariable(\'smarty\',null,true,false)->value[\'section\'][\'content\'][\'index\']][1][$_smarty_tpl->tpl_vars[\'id\']->value])){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'battleinput\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\']][1][$_smarty_tpl->tpl_vars[\'id\']->value];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }else{ ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
0<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" name="battleinput[<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
][1][<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'id\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
]"></td>
										</tr>
										<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php } ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

									</table>
								</td>
								<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if ($_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\']==0){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

									<td style="width:50%" class="transparent">
										<table>
											<tr>
												<th><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bs_names\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</td>
												<th><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bs_atter\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</th>
												<th><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bs_deffer\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</th>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td><button class="reset"><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bs_reset\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</button></td>
											</tr>
											<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php  $_smarty_tpl->tpl_vars[\'id\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'id\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'defensiveList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'id\']->key => $_smarty_tpl->tpl_vars[\'id\']->value){
$_smarty_tpl->tpl_vars[\'id\']->_loop = true;
?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

											<tr>
												<td><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'id\']->value];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
:</td>
												<td>-</td>
												<td><input type="text" size="10" value="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'battleinput\']->value[$_smarty_tpl->getVariable(\'smarty\',null,true,false)->value[\'section\'][\'content\'][\'index\']][1][$_smarty_tpl->tpl_vars[\'id\']->value])){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'battleinput\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\']][1][$_smarty_tpl->tpl_vars[\'id\']->value];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }else{ ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
0<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" name="battleinput[<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'content\'][\'index\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
][1][<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'id\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
]"></td>
											</tr>
										<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php } ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

										</table>
									</td>
								<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

							</tr>
						</table>
					</div>
					<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php endfor; endif; ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

				</div>
			</td>
		</tr>
		<tr id="submit">
			<td><input type="button" onClick="return check();" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['bs_send'];?>
">&nbsp;<input type="reset" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['bs_cancel'];?>
"></td>
		</tr>
		<tr id="wait" style="display:none;">
			<td style="height:20px"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bs_wait'];?>
</td>
		</tr>
	</table>
</form>

</div>

</div></div>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php  $_smarty_tpl->tpl_vars[\'cronjob\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'cronjob\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cronjobs\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'cronjob\']->key => $_smarty_tpl->tpl_vars[\'cronjob\']->value){
$_smarty_tpl->tpl_vars[\'cronjob\']->_loop = true;
?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<img src="cronjob.php?cronjobID=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'cronjob\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" alt=""><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php } ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-09-12 05:42:12
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541287b448ae22_64856741')) {function content_541287b448ae22_64856741($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title>Your Game Name</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
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
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
, <?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
, <?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
, <?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
, <?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
, <?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>
	<script type="text/javascript" src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

	<script type="text/javascript" src="scripts/game/<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php } ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
">
	<div id="tooltip" class="tip"></div>

	<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

	<script type="text/javascript" src="scripts/game/<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php } ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

	
	<script type="text/javascript" src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
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
<script src="skin/js/main.js"></script> <!-- Default JS --><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-09-12 05:42:12
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/main.topnav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541287b45359f1_29305541')) {function content_541287b45359f1_29305541($_smarty_tpl) {?><!-- Header -->
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
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<td><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'resourceID\']->value];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<br>
</td>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php } ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

</tr>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if ($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<tr>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php $_smarty_tpl->createLocalArrayVariable(\'resourceData\', true, 0);
$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<td class="res_current tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"><span<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']<0){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</span></td>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }else{ ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<td class="res_current tooltip" id="current_<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</td>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php } ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

</tr>
<tr>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])||!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'])){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<td>&nbsp;</td>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }else{ ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<td class="res_max tooltip" id="max_<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</td>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php } ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

</tr>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }else{ ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<tr>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php $_smarty_tpl->createLocalArrayVariable(\'resourceData\', true, 0);
$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<td class="res_current"><span<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']<0){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</span></td>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }else{ ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<td class="res_current" id="current_<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
"><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</td>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php } ?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

</tr>
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

</tbody>
</table>
</td>

<nav id="menu">
<ul id="menu-nav">

<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if ($_smarty_tpl->tpl_vars[\'authlevel\']->value>0){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<li><a href="./admin.php" style="color:lime">ADM</a></li><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

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
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'hasBoard\']->value)){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<a href="game.php?page=board" target="forum"><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_forums\'];?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>

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
<?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value>0){?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
<span id="newmes"> (<span id="newmesnum"><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_message\']->value;?>
/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</span>)</span><?php echo '/*%%SmartyNocache:516949172541287b444d943-35141770%%*/<?php }?>/*/%%SmartyNocache:516949172541287b444d943-35141770%%*/';?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_NOTICE'))){?><a href="game.php?page=notes"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_notes'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_BUDDYLIST'))){?><a href="game.php?page=buddyList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buddylist'];?>
</a><br><?php }?>
</ul>
</nav>
</td></table>
</div><?php }} ?>