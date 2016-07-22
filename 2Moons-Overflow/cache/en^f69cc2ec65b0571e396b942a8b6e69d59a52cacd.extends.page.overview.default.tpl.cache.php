<?php /* Smarty version Smarty-3.1.13, created on 2014-09-12 05:40:50
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/page.overview.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196687762554128762db79a1-55955036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f69cc2ec65b0571e396b942a8b6e69d59a52cacd' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/page.overview.default.tpl',
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
  'nocache_hash' => '196687762554128762db79a1-55955036',
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
  'unifunc' => 'content_5412876375a0a9_93560825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5412876375a0a9_93560825')) {function content_5412876375a0a9_93560825($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('bodyclass'=>"full"), 0, '196687762554128762db79a1-55955036');
content_541287631f9c20_99290916($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>

<?php /*  Call merged included template "main.topnav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '196687762554128762db79a1-55955036');
content_541287633fbf69_07781248($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.topnav.tpl" */?>
<div id="content">

<div class="row">
 
<div class="span9">


<h3 class="spec">Overview Page</h3>

<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php if ($_smarty_tpl->tpl_vars[\'is_news\']->value){?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<div class="alert alert-standard fade in">
<a class="close" data-dismiss="alert" href="#">&times;</a>
<h4>Hello</h4>
<font color=#FF7373><b>
<div class="" style="text-align:left;float:left;"><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'news\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
</div><br>
</div>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>


<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php if ($_smarty_tpl->tpl_vars[\'messages\']->value){?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
<div class="alert alert-standard fade in">
<a class="close" data-dismiss="alert" href="#">&times;</a>
<center><b><font color=white><a href="?page=messages"><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'messages\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
</a></font></b></center>
</div>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

  
<div class="accordion" id="accordionArea">


<div class="accordion-group">
<div class="accordion-heading accordionize">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#threeArea">
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_my_planets'];?>

<span class="font-icon-arrow-simple-down"></span>
</a>
</div>
<div id="threeArea" class="accordion-body collapse">
<div class="accordion-inner">
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php if ($_smarty_tpl->tpl_vars[\'AllPlanets\']->value){?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<table>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php  $_smarty_tpl->tpl_vars[\'PlanetRow\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'PlanetRow\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'AllPlanets\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
 $_smarty_tpl->tpl_vars[\'PlanetRow\']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars[\'PlanetRow\']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars[\'PlanetRow\']->key => $_smarty_tpl->tpl_vars[\'PlanetRow\']->value){
$_smarty_tpl->tpl_vars[\'PlanetRow\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'PlanetRow\']->iteration++;
 $_smarty_tpl->tpl_vars[\'PlanetRow\']->last = $_smarty_tpl->tpl_vars[\'PlanetRow\']->iteration === $_smarty_tpl->tpl_vars[\'PlanetRow\']->total;
?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php if (($_smarty_tpl->tpl_vars[\'PlanetRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'PLANET_ROWS_ON_OVERVIEW\'])===1){?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
<tr style="height:20px;"><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<td class="transparent"><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlanetRow\']->value[\'name\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
<br><a href="game.php?page=overview&amp;cp=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlanetRow\']->value[\'id\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
" title="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlanetRow\']->value[\'name\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
planeten/small/s_<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlanetRow\']->value[\'image\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
.jpg" alt="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlanetRow\']->value[\'name\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"></a></td>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php if ($_smarty_tpl->tpl_vars[\'PlanetRow\']->last&&$_smarty_tpl->tpl_vars[\'PlanetRow\']->total>1&&($_smarty_tpl->tpl_vars[\'PlanetRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'PLANET_ROWS_ON_OVERVIEW\'])!==0){?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php $_smarty_tpl->tpl_vars[\'to\'] = new Smarty_variable($_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'PLANET_ROWS_ON_OVERVIEW\']-($_smarty_tpl->tpl_vars[\'PlanetRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'PLANET_ROWS_ON_OVERVIEW\']), true, 0);?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php $_smarty_tpl->tpl_vars[\'foo\'] = new Smarty_Variable;$_smarty_tpl->tpl_vars[\'foo\']->step = 1;$_smarty_tpl->tpl_vars[\'foo\']->total = (int)ceil(($_smarty_tpl->tpl_vars[\'foo\']->step > 0 ? $_smarty_tpl->tpl_vars[\'to\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'to\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'foo\']->step));
if ($_smarty_tpl->tpl_vars[\'foo\']->total > 0){
for ($_smarty_tpl->tpl_vars[\'foo\']->value = 1, $_smarty_tpl->tpl_vars[\'foo\']->iteration = 1;$_smarty_tpl->tpl_vars[\'foo\']->iteration <= $_smarty_tpl->tpl_vars[\'foo\']->total;$_smarty_tpl->tpl_vars[\'foo\']->value += $_smarty_tpl->tpl_vars[\'foo\']->step, $_smarty_tpl->tpl_vars[\'foo\']->iteration++){
$_smarty_tpl->tpl_vars[\'foo\']->first = $_smarty_tpl->tpl_vars[\'foo\']->iteration == 1;$_smarty_tpl->tpl_vars[\'foo\']->last = $_smarty_tpl->tpl_vars[\'foo\']->iteration == $_smarty_tpl->tpl_vars[\'foo\']->total;?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<td class="transparent">&nbsp;</td>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }} ?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php if (($_smarty_tpl->tpl_vars[\'PlanetRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'PLANET_ROWS_ON_OVERVIEW\'])===0){?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
</tr><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php } ?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

</table>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }else{ ?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

</div>
</div>
</div> 
 

<div class="accordion-inner">
	<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php  $_smarty_tpl->tpl_vars[\'fleet\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'fleet\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'index\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'fleets\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'fleet\']->key => $_smarty_tpl->tpl_vars[\'fleet\']->value){
$_smarty_tpl->tpl_vars[\'fleet\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'index\']->value = $_smarty_tpl->tpl_vars[\'fleet\']->key;
?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

	<tr>
		<div style="text-align:right;float:right;" id="fleettime_<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'index\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
" class="fleets" data-fleet-end-time="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'fleet\']->value[\'returntime\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
" data-fleet-time="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'fleet\']->value[\'resttime\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'fleet\']->value[\'resttime\'];?>
<?php $_tmp1=ob_get_clean();?><?php echo pretty_fly_time($_tmp1);?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
</div>
		<div style="text-align:left;float:left;" colspan="2">(See) <?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'fleet\']->value[\'text\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
</div>
	</tr><br>
	<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php } ?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

</div> 
 

</div>

<div class="accordion-inner">
<table class="redesign">
<tr>
<td width="250">
<img src="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
planeten/<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'planetimage\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
.jpg" height="200" width="200" alt="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'planetname\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
">
</td>
<td><p align=left>
<br><b><a href="#" onclick="return Dialog.PlanetAction();" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_planetmenu'];?>
"><font size=5><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'planetname\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
</font></b></a> &nbsp<font size=4><?php echo $_smarty_tpl->tpl_vars['LNG']->value['colonized_by'];?>
 <b><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
</b></font><br> 

<br><b><font size=2><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ti_status'];?>
</font></b> | <?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php if ($_smarty_tpl->tpl_vars[\'buildInfo\']->value[\'buildings\']){?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'buildInfo\']->value[\'buildings\'][\'id\']];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
 (<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'buildInfo\']->value[\'buildings\'][\'level\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
)
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }else{ ?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_free\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>


<br><b><font size=2><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_moon'];?>
</font></b> | <?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php if ($_smarty_tpl->tpl_vars[\'Moon\']->value){?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
<a href="game.php?page=overview&amp;cp=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'Moon\']->value[\'id\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
&amp;re=0" title="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'Moon\']->value[\'name\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"> Yes, visit it</a><br><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'Moon\']->value[\'name\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
 (<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fcm_moon\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
)<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }else{ ?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
This planet does not have moon<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>


<br><b><font size=2><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_diameter'];?>
</font></b> | <?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet_diameter\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_distance_unit'];?>
 (<a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_developed_fields'];?>
"><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet_field_current\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
</a> / <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_max_developed_fields'];?>
"><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet_field_max\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
</a> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_fields'];?>
)

<br><b><font size=2><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_temperature'];?>
</font></b> | <?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_aprox'];?>
 <?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet_temp_min\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_temp_unit'];?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_to'];?>
 <?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet_temp_max\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_temp_unit'];?>


<br><b><font size=2><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_position'];?>
</font></b> | <a href="game.php?page=galaxy&amp;galaxy=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
">[<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
:<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
:<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
]</a>
</td>
</tr>
</table>
</div>


</div>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php  $_smarty_tpl->tpl_vars[\'cronjob\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'cronjob\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cronjobs\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'cronjob\']->key => $_smarty_tpl->tpl_vars[\'cronjob\']->value){
$_smarty_tpl->tpl_vars[\'cronjob\']->_loop = true;
?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
<img src="cronjob.php?cronjobID=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'cronjob\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
" alt=""><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php } ?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-09-12 05:40:51
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541287631f9c20_99290916')) {function content_541287631f9c20_99290916($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title>Your Game Name</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
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
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
, <?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
, <?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
, <?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
, <?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
, <?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>
	<script type="text/javascript" src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

	<script type="text/javascript" src="scripts/game/<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php } ?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
">
	<div id="tooltip" class="tip"></div>

	<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

	<script type="text/javascript" src="scripts/game/<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php } ?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

	
	<script type="text/javascript" src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
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
<script src="skin/js/main.js"></script> <!-- Default JS --><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-09-12 05:40:51
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/main.topnav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541287633fbf69_07781248')) {function content_541287633fbf69_07781248($_smarty_tpl) {?><!-- Header -->
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
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<td><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'resourceID\']->value];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<br>
</td>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php } ?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

</tr>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php if ($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value){?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<tr>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])){?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php $_smarty_tpl->createLocalArrayVariable(\'resourceData\', true, 0);
$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<td class="res_current tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"><span<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']<0){?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
</span></td>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }else{ ?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<td class="res_current tooltip" id="current_<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
</td>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php } ?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

</tr>
<tr>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])||!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'])){?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<td>&nbsp;</td>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }else{ ?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<td class="res_max tooltip" id="max_<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
</td>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php } ?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

</tr>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }else{ ?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<tr>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])){?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php $_smarty_tpl->createLocalArrayVariable(\'resourceData\', true, 0);
$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<td class="res_current"><span<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']<0){?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
</span></td>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }else{ ?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<td class="res_current" id="current_<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
"><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
</td>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php } ?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

</tr>
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

</tbody>
</table>
</td>

<nav id="menu">
<ul id="menu-nav">

<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php if ($_smarty_tpl->tpl_vars[\'authlevel\']->value>0){?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
<li><a href="./admin.php" style="color:lime">ADM</a></li><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

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
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'hasBoard\']->value)){?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
<a href="game.php?page=board" target="forum"><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_forums\'];?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>

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
<?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value>0){?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
<span id="newmes"> (<span id="newmesnum"><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_message\']->value;?>
/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
</span>)</span><?php echo '/*%%SmartyNocache:196687762554128762db79a1-55955036%%*/<?php }?>/*/%%SmartyNocache:196687762554128762db79a1-55955036%%*/';?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_NOTICE'))){?><a href="game.php?page=notes"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_notes'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_BUDDYLIST'))){?><a href="game.php?page=buddyList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buddylist'];?>
</a><br><?php }?>
</ul>
</nav>
</td></table>
</div><?php }} ?>