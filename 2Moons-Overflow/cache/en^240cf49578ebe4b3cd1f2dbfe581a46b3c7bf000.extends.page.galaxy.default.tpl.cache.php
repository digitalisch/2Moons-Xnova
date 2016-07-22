<?php /* Smarty version Smarty-3.1.13, created on 2014-09-12 05:42:18
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/page.galaxy.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1867915280541287ba622b61-37825746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '240cf49578ebe4b3cd1f2dbfe581a46b3c7bf000' => 
    array (
      0 => '/home/qwatakayean/public_html/fallenblack/styles/templates/game/page.galaxy.default.tpl',
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
  'nocache_hash' => '1867915280541287ba622b61-37825746',
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
  'unifunc' => 'content_541287babd0742_27637359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541287babd0742_27637359')) {function content_541287babd0742_27637359($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'/home/qwatakayean/public_html/fallenblack/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('bodyclass'=>"full"), 0, '1867915280541287ba622b61-37825746');
content_541287ba656fb0_61648825($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>

<?php /*  Call merged included template "main.topnav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '1867915280541287ba622b61-37825746');
content_541287ba707550_64441475($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.topnav.tpl" */?>
<div id="content">

<div class="row">
<div class="span9">

<h3 class="spec"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_galaxy'];?>
</h3>
<div class="tabbable">


 
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">
<table class="redesign">

<form action="?page=galaxy" method="post" id="galaxy_form">
	<input type="hidden" id="auto" value="dr">
	<table style="min-width:324px;width:324px;">
		<tr>
			<td class="transparent">
				<table>
					<tr>
						<th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_galaxy'];?>
</th>
					</tr>
					<tr>
						<td><input class="button button-mini" type="button" name="galaxyLeft" value="&lt;" onclick="galaxy_submit('galaxyLeft')"></td>
						<td><input class="button button-mini" name="galaxy" value="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
" size="5" maxlength="3" tabindex="1"></td>
						<td><input class="button button-mini" type="button" name="galaxyRight" value="&gt;" onclick="galaxy_submit('galaxyRight')"></td>
					</tr>
				</table>
			</td>
			<td class="transparent">
				<table>
					<tr>
						<th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_solar_system'];?>
</th>
					</tr>
					<tr>
						<td><input class="button button-mini" type="button" name="systemLeft" value="&lt;" onclick="galaxy_submit('systemLeft')"></td>
						<td><input class="button button-mini" name="system" value="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
" size="5" maxlength="3" tabindex="2"></td>
						<td><input class="button button-mini" type="button" name="systemRight" value="&gt;" onclick="galaxy_submit('systemRight')"></td>
					</tr>
				</table>
			</td>
			<td class="transparent">
				<table>
					<tr>
						<td><input class="button button" type="submit" value="Search"></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	</form>
	
	<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'action\']->value==\'sendMissle\'){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

    <form action="?page=fleetMissile" method="post">
	<input type="hidden" name="galaxy" value="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
">
	<input type="hidden" name="system" value="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
">
	<input type="hidden" name="planet" value="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
">
	<input type="hidden" name="type" value="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'type\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
">
	<table class="table569">
		<tr>
			<th colspan="2"><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_missil_launch\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
 [<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
:<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
:<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
]</th>
		</tr>
		<tr>
			<td><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'missile_count\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
 <input type="text" name="SendMI" size="2" maxlength="7"></td>
			<td><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_objective\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
: 
				<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'Target\',\'options\'=>$_smarty_tpl->tpl_vars[\'MissleSelector\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

			</td>
		</tr>
		<tr>
			<th colspan="2" style="text-align:center;"><input type="submit" value="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_missil_launch_action\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"></th>
		</tr>
	</table>
	</form>
    <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

	
	
	<table class="redesign">
    <tr>
		<th colspan="8"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_solar_system'];?>
 <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
:<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</th>
	</tr>
	<tr>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_pos'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_planet'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_name_activity'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_moon'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_debris'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_player_estate'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_alliance'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_actions'];?>
</th>
	</tr>
    <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php $_smarty_tpl->tpl_vars[\'planet\'] = new Smarty_Variable;$_smarty_tpl->tpl_vars[\'planet\']->step = 1;$_smarty_tpl->tpl_vars[\'planet\']->total = (int)ceil(($_smarty_tpl->tpl_vars[\'planet\']->step > 0 ? $_smarty_tpl->tpl_vars[\'max_planets\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'max_planets\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'planet\']->step));
if ($_smarty_tpl->tpl_vars[\'planet\']->total > 0){
for ($_smarty_tpl->tpl_vars[\'planet\']->value = 1, $_smarty_tpl->tpl_vars[\'planet\']->iteration = 1;$_smarty_tpl->tpl_vars[\'planet\']->iteration <= $_smarty_tpl->tpl_vars[\'planet\']->total;$_smarty_tpl->tpl_vars[\'planet\']->value += $_smarty_tpl->tpl_vars[\'planet\']->step, $_smarty_tpl->tpl_vars[\'planet\']->iteration++){
$_smarty_tpl->tpl_vars[\'planet\']->first = $_smarty_tpl->tpl_vars[\'planet\']->iteration == 1;$_smarty_tpl->tpl_vars[\'planet\']->last = $_smarty_tpl->tpl_vars[\'planet\']->iteration == $_smarty_tpl->tpl_vars[\'planet\']->total;?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

	<tr>
    <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'GalaxyRows\']->value[$_smarty_tpl->tpl_vars[\'planet\']->value])){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

		<td>
			<a href="?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planettype=1&amp;target_mission=7"><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a>
		</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'GalaxyRows\']->value[$_smarty_tpl->tpl_vars[\'planet\']->value]===false){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

		<td>
			<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

		</td>
        <td></td>
        <td style="white-space: nowrap;"><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_planet_destroyed\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }else{ ?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

		<td>
			<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

		</td>
        <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php $_smarty_tpl->tpl_vars[\'currentPlanet\'] = new Smarty_variable($_smarty_tpl->tpl_vars[\'GalaxyRows\']->value[$_smarty_tpl->tpl_vars[\'planet\']->value], true, 0);?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

		<td>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:220px'><tr><th colspan='2'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_planet\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
 <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'planet\'][\'name\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
 [<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
:<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
:<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
]</th></tr><tr><td style='width:80px'><img src='<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
planeten/small/s_<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'planet\'][\'image\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
.jpg' height='75' width='75'></td><td><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][6]){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<a href='javascript:doit(6,<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'planet\'][\'id\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
);'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'type_mission\'][6];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a><br><br><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'planet\'][\'phalanx\']){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<a href='javascript:OpenPopup(&quot;?page=phalanx&amp;galaxy=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planettype=1&quot;, &quot;&quot;, 640, 510);'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_phalanx\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][1]){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<a href='?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planettype=1&amp;target_mission=1'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'type_mission\'][1];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][5]){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<a href='?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planettype=1&amp;target_mission=5'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'type_mission\'][5];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][4]){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<a href='?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planettype=1&amp;target_mission=4'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'type_mission\'][4];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][3]){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<a href='?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planettype=1&amp;target_mission=3'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'type_mission\'][3];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][10]){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<a href='?page=galaxy&amp;action=sendMissle&amp;galaxy=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'type_mission\'][10];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</td></tr></table>">
				<img src="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
planeten/small/s_<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'planet\'][\'image\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
.jpg" height="30" width="30" alt="">
			</a>
		</td>
		<td style="white-space: nowrap;"><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'planet\'][\'name\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
 <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'lastActivity\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</td>
		<td style="white-space: nowrap;">
			<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'moon\']){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_moon\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
 <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'moon\'][\'name\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
 [<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
:<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
:<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
]</th></tr><tr><td style='width:80px'><img src='<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
planeten/mond.jpg' height='75' width='75'></td><td><table style='width:100%'><tr><th colspan='2'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_features\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</th></tr><tr><td><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_diameter\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'moon\'][\'diameter\']);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</td></tr><tr><td><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_temperature\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'moon\'][\'temp_min\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</td></tr><tr><th colspan=2><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_actions\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</th></tr><tr><td colspan='2'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][1]){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<a href='?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planettype=3&amp;target_mission=1'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'type_mission\'][1];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][3]){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<a href='?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planettype=3&amp;target_mission=3'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'type_mission\'][3];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][3]){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<br><a href='?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planettype=3&amp;target_mission=4'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'type_mission\'][4];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][5]){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<br><a href='?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planettype=3&amp;target_mission=5'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'type_mission\'][5];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][6]){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<br><a href='javascript:doit(6,<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'moon\'][\'id\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
);'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'type_mission\'][6];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][9]){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<br><br><a href='?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planettype=3&amp;target_mission=9'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'type_mission\'][9];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][10]){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<a href='?page=galaxy&amp;action=sendMissle&amp;galaxy=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;type=3'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'type_mission\'][10];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</td></tr></table></td></tr></table>">
				<img src="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
planeten/small/s_mond.jpg" height="22" width="22" alt="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'moon\'][\'name\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
">
			</a>
			<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

		</td>
		<td style="white-space: nowrap;">
        <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'debris\']){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_debris_field\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
 [<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
:<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
:<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
]</th></tr><tr><td style='width:80px'><img src='<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
planeten/debris.jpg' height='75' style='width:75'></td><td><table style='width:100%'><tr><th colspan='2'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_resources\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
:</th></tr><tr><td><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][901];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
: </td><td><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'debris\'][\'metal\']);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</td></tr><tr><td><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][902];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
: </td><td><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'debris\'][\'crystal\']);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</td></tr><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][8]){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<tr><th colspan='2'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_actions\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</th></tr><tr><td colspan='2'><a href='javascript:doit(8, <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'planet\'][\'id\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
);'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'type_mission\'][8];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a></td></tr><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</table></td></tr></table>">
			<img src="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
planeten/debris.jpg" height="22" width="22" alt="">
			</a>
        <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

		</td>
		<td>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'playerrank\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</th></tr><tr><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if (!$_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'ownPlanet\']){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'isBuddy\']){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<tr><td><a href='#' onclick='return Dialog.Buddy(<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'id\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
)'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_buddy_request\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a></td></tr><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<tr><td><a href='#' onclick='return Dialog.Playercard(<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'id\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
);'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_playercard\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a></td></tr><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<tr><td><a href='?page=statistics&amp;who=1&amp;start=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'rank\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_see_on_stats\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a></td></tr></table>">
				<span class="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php  $_smarty_tpl->tpl_vars[\'class\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'class\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'class\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
 $_smarty_tpl->tpl_vars[\'class\']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars[\'class\']->key => $_smarty_tpl->tpl_vars[\'class\']->value){
$_smarty_tpl->tpl_vars[\'class\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'class\']->index++;
 $_smarty_tpl->tpl_vars[\'class\']->first = $_smarty_tpl->tpl_vars[\'class\']->index === 0;
?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if (!$_smarty_tpl->tpl_vars[\'class\']->first){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
 <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
galaxy-username-<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'class\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php } ?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
 galaxy-username"><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'username\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</span>
				<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'class\'])){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

				<span>(</span><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php  $_smarty_tpl->tpl_vars[\'class\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'class\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'class\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
 $_smarty_tpl->tpl_vars[\'class\']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars[\'class\']->key => $_smarty_tpl->tpl_vars[\'class\']->value){
$_smarty_tpl->tpl_vars[\'class\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'class\']->index++;
 $_smarty_tpl->tpl_vars[\'class\']->first = $_smarty_tpl->tpl_vars[\'class\']->index === 0;
?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if (!$_smarty_tpl->tpl_vars[\'class\']->first){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<span class="galaxy-short-<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'class\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
 galaxy-short"><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'ShortStatus\']->value[$_smarty_tpl->tpl_vars[\'class\']->value];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</span><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php } ?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<span>)</span>
				<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

			</a>
		</td>
		<td style="white-space: nowrap;">
			<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'alliance\']){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_alliance\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
 <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'alliance\'][\'name\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
 <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'alliance\'][\'member\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</th></tr><td><table><tr><td><a href='?page=alliance&amp;mode=info&amp;id=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'alliance\'][\'id\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_alliance_page\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a></td></tr><tr><td><a href='?page=statistics&amp;start=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'alliance\'][\'rank\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;who=2'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_see_on_stats\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a></td></tr><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'alliance\'][\'web\']){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<tr><td><a href='<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'alliance\'][\'web\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
' target='allyweb'><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_alliance_web_page\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</td></tr><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</table></td></table>">
				<span class="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php  $_smarty_tpl->tpl_vars[\'class\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'class\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'alliance\'][\'class\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
 $_smarty_tpl->tpl_vars[\'class\']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars[\'class\']->key => $_smarty_tpl->tpl_vars[\'class\']->value){
$_smarty_tpl->tpl_vars[\'class\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'class\']->index++;
 $_smarty_tpl->tpl_vars[\'class\']->first = $_smarty_tpl->tpl_vars[\'class\']->index === 0;
?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if (!$_smarty_tpl->tpl_vars[\'class\']->first){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
 <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
galaxy-alliance-<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'class\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php } ?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
 galaxy-alliance"><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'alliance\'][\'tag\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</span>
			</a>
			<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }else{ ?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
-<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

		</td>
		<td style="white-space: nowrap;">
			<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'action\']){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

				<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'action\'][\'esp\']){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

				<a href="javascript:doit(6,<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'planet\'][\'id\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
,<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars[\'spyShips\']->value), ENT_QUOTES, \'UTF-8\', true);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
)">
					<img src="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
img/e.gif" title="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_spy\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
" alt="">
				</a><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

				<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'action\'][\'message\']){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

				<a href="#" onclick="return Dialog.PM(<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'id\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
)">
					<img src="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
img/m.gif" title="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'write_message\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
" alt="">
				</a><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

				<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'action\'][\'buddy\']){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

                <a href="#" onclick="return Dialog.Buddy(<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'id\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
)">
					<img src="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
img/b.gif" title="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_buddy_request\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
" alt="">
				</a><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

				<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'action\'][\'missle\']){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<a href="?page=galaxy&amp;action=sendMissle&amp;galaxy=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;type=1">
					<img src="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
img/r.gif" title="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_missile_attack\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
" alt="">
				</a><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

			<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }else{ ?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
-<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

			<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'planet\'][\'phalanx\']){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<a class="textForBlind" href="#" onclick="OpenPopup('?page=phalanx&amp;galaxy=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&amp;planettype=1','',640,510);return false;"><span><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_phalanx\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</span></a><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

		</td>
	<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

	</tr>
	<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }} ?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

	<tr>
		<td colspan="3"><span id="missiles"><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'currentmip\']->value);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_avaible_missiles'];?>
</td>
		<td colspan="3"><span id="slots"><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'maxfleetcount\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</span>/<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'fleetmax\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_fleets'];?>
</td>
		<td colspan="3">
			<a class="tooltip" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_legend'];?>
</td></tr><tr><td style='width:220px'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_strong_player'];?>
</td><td><span class='galaxy-short-strong'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_short_strong'];?>
</span></td></tr><tr><td style='width:220px'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_week_player'];?>
</td><td><span class='galaxy-short-noob'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_short_newbie'];?>
</span></td></tr><tr><td style='width:220px'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_vacation'];?>
</td><td><span class='galaxy-short-vacation'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_short_vacation'];?>
</span></td></tr><tr><td style='width:220px'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_banned'];?>
</td><td><span class='galaxy-short-banned'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_short_ban'];?>
</span></td></tr><tr><td style='width:220px'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_inactive_seven'];?>
</td><td><span class='galaxy-short-inactive'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_short_inactive'];?>
</span></td></tr><tr><td style='width:220px'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_inactive_twentyeight'];?>
</td><td><span class='galaxy-short-longinactive'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_short_long_inactive'];?>
</span></td></tr></table>"><img src="./styles/theme/gow/img/s.gif" title="Info" alt="" /></a> 
		</td></td>
	</tr>
	<tr style="display: none;" id="fleetstatusrow">
		<th colspan="8"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['cff_fleet_target'];?>

	</tr>
	</table>

</table>
</div>
</div>
</div>
</div>
</div>

	
<script type="text/javascript">
		status_ok		= '<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_ajax_status_ok'];?>
';
		status_fail		= '<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_ajax_status_fail'];?>
';
		MaxFleetSetting = <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'settings_fleetactions\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
;
	</script>

</div>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php  $_smarty_tpl->tpl_vars[\'cronjob\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'cronjob\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cronjobs\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'cronjob\']->key => $_smarty_tpl->tpl_vars[\'cronjob\']->value){
$_smarty_tpl->tpl_vars[\'cronjob\']->_loop = true;
?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<img src="cronjob.php?cronjobID=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'cronjob\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
" alt=""><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php } ?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-09-12 05:42:18
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541287ba656fb0_61648825')) {function content_541287ba656fb0_61648825($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title>Your Game Name</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
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
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
, <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
, <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
, <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
, <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
, <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>
	<script type="text/javascript" src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

	<script type="text/javascript" src="scripts/game/<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php } ?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
">
	<div id="tooltip" class="tip"></div>

	<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

	<script type="text/javascript" src="scripts/game/<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php } ?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

	
	<script type="text/javascript" src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"></script>
	<script type="text/javascript" src="scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
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
<script src="skin/js/main.js"></script> <!-- Default JS --><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-09-12 05:42:18
         compiled from "/home/qwatakayean/public_html/fallenblack/styles/templates/game/main.topnav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541287ba707550_64441475')) {function content_541287ba707550_64441475($_smarty_tpl) {?><!-- Header -->
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
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<td><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'resourceID\']->value];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<br>
</td>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php } ?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

</tr>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<tr>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php $_smarty_tpl->createLocalArrayVariable(\'resourceData\', true, 0);
$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<td class="res_current tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"><span<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']<0){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</span></td>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }else{ ?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<td class="res_current tooltip" id="current_<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</td>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php } ?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

</tr>
<tr>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])||!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'])){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<td>&nbsp;</td>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }else{ ?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<td class="res_max tooltip" id="max_<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</td>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php } ?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

</tr>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }else{ ?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<tr>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php  $_smarty_tpl->tpl_vars[\'resourceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resourceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceData\']->key => $_smarty_tpl->tpl_vars[\'resourceData\']->value){
$_smarty_tpl->tpl_vars[\'resourceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resourceData\']->key;
?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php $_smarty_tpl->createLocalArrayVariable(\'resourceData\', true, 0);
$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<td class="res_current"><span<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']<0){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</span></td>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }else{ ?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<td class="res_current" id="current_<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
"><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</td>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php } ?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

</tr>
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

</tbody>
</table>
</td>

<nav id="menu">
<ul id="menu-nav">

<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'authlevel\']->value>0){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<li><a href="./admin.php" style="color:lime">ADM</a></li><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

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
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'hasBoard\']->value)){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<a href="game.php?page=board" target="forum"><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_forums\'];?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>

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
<?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value>0){?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
<span id="newmes"> (<span id="newmesnum"><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_message\']->value;?>
/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</span>)</span><?php echo '/*%%SmartyNocache:1867915280541287ba622b61-37825746%%*/<?php }?>/*/%%SmartyNocache:1867915280541287ba622b61-37825746%%*/';?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_NOTICE'))){?><a href="game.php?page=notes"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_notes'];?>
</a><br><?php }?>
<?php if (isModulAvalible(@constant('MODULE_BUDDYLIST'))){?><a href="game.php?page=buddyList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buddylist'];?>
</a><br><?php }?>
</ul>
</nav>
</td></table>
</div><?php }} ?>