<?php /* Smarty version Smarty-3.1.13, created on 2014-12-01 18:07:06
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/game/page.infomation.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1767079585547cae4aef9cc3-31422673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b9f8e8806f78d0cd36ac32d30c61cad9274f8a5' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/game/page.infomation.default.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
    '88c99dedee5cb71682f237a2f912e1aa0bc677da' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/game/layout.popup.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
    '2e2cf729a868970d7dd52f6e26b7f04ab67a542b' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/game/main.header.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1767079585547cae4aef9cc3-31422673',
  'function' => 
  array (
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547cae4b3edb70_30709003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547cae4b3edb70_30709003')) {function content_547cae4b3edb70_30709003($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('bodyclass'=>"popup"), 0, '1767079585547cae4aef9cc3-31422673');
content_547cae4b03a814_12526531($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>
<div id="content">
<table style="width:100%;">
	<tbody>
	<tr>
		<th><?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'elementID\']->value];?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
</th>
	</tr>
	<tr>
		<td>
			<table>
				<tr>
					<td class="transparent" style="width:120px"><img width="120" height="120" src="<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
gebaeude/<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'elementID\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
.<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php if ($_smarty_tpl->tpl_vars[\'elementID\']->value>=600&&$_smarty_tpl->tpl_vars[\'elementID\']->value<=699){?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
jpg<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php }else{ ?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
gif<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php }?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
" alt=""></td>
					<td class="transparent left"><p><?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'longDescription\'][$_smarty_tpl->tpl_vars[\'elementID\']->value];?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
</p>
					<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'Bonus\']->value)){?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
<p>
					<b><?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'in_bonus\'];?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
</b><br>
					<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php  $_smarty_tpl->tpl_vars[\'elementBouns\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'elementBouns\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'BonusName\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'Bonus\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'elementBouns\']->key => $_smarty_tpl->tpl_vars[\'elementBouns\']->value){
$_smarty_tpl->tpl_vars[\'elementBouns\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'BonusName\']->value = $_smarty_tpl->tpl_vars[\'elementBouns\']->key;
?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php if ($_smarty_tpl->tpl_vars[\'elementBouns\']->value[0]<0){?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
-<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php }else{ ?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
+<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php }?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php if ($_smarty_tpl->tpl_vars[\'elementBouns\']->value[1]==0){?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo abs($_smarty_tpl->tpl_vars[\'elementBouns\']->value[0]*100);?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
%<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php }else{ ?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo floatval($_smarty_tpl->tpl_vars[\'elementBouns\']->value[0]);?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php }?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
 <?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bonus\'][$_smarty_tpl->tpl_vars[\'BonusName\']->value];?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
<br><?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php } ?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

					</p><?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php }?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
	
					<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'FleetInfo\']->value)){?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

					<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'FleetInfo\']->value[\'rapidfire\'][\'to\'])){?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
<p>
					<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php  $_smarty_tpl->tpl_vars[\'shoots\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'shoots\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'rapidfireID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'FleetInfo\']->value[\'rapidfire\'][\'to\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'shoots\']->key => $_smarty_tpl->tpl_vars[\'shoots\']->value){
$_smarty_tpl->tpl_vars[\'shoots\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'rapidfireID\']->value = $_smarty_tpl->tpl_vars[\'shoots\']->key;
?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

					<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'in_rf_again\'];?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
 <?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'rapidfireID\']->value];?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
: <span style="color:#00ff00"><?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'shoots\']->value);?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
</span><br>
					<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php } ?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

					</p><?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php }?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

					<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'FleetInfo\']->value[\'rapidfire\'][\'from\'])){?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
<p>
					<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php  $_smarty_tpl->tpl_vars[\'shoots\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'shoots\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'rapidfireID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'FleetInfo\']->value[\'rapidfire\'][\'from\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'shoots\']->key => $_smarty_tpl->tpl_vars[\'shoots\']->value){
$_smarty_tpl->tpl_vars[\'shoots\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'rapidfireID\']->value = $_smarty_tpl->tpl_vars[\'shoots\']->key;
?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

					<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'in_rf_from\'];?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
 <?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'rapidfireID\']->value];?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
: <span style="color:#ff0000"><?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'shoots\']->value);?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
</span><br>
					<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php } ?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

					</p><?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php }?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

					<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php }?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
				
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'productionTable\']->value[\'production\'])){?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->getSubTemplate ("shared.information.production.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php }?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'productionTable\']->value[\'storage\'])){?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->getSubTemplate ("shared.information.storage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php }?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'FleetInfo\']->value)){?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->getSubTemplate ("shared.information.shipInfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php }?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'gateData\']->value)){?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->getSubTemplate ("shared.information.gate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php }?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'MissileList\']->value)){?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->getSubTemplate ("shared.information.missiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php }?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

</div>
<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-12-01 18:07:07
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/game/main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_547cae4b03a814_12526531')) {function content_547cae4b03a814_12526531($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_info'];?>
 - <?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
 - <?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
, <?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
, <?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
, <?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
, <?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
, <?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

	<script type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php } ?>/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:1767079585547cae4aef9cc3-31422673%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php }} ?>