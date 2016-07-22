<?php /*%%SmartyHeaderCode:1681754b5aedc802b72-46710201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb61bfde33ca02a1f65ccc6f3929b09f29145bd2' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\adm\\QuickEditorPlanet.tpl',
      1 => 1368959719,
      2 => 'file',
    ),
    '4b65d994abda475bcdb85c762e300d686bb4e7a6' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\adm\\overall_header.tpl',
      1 => 1368959719,
      2 => 'file',
    ),
    'c6937634cbb40669bbc6e5e6d5c9b96d048391c2' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\adm\\overall_footer.tpl',
      1 => 1368959719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1681754b5aedc802b72-46710201',
  'variables' => 
  array (
    'id' => 1,
    'LNG' => 0,
    'name' => 1,
    'galaxy' => 1,
    'system' => 1,
    'planet' => 1,
    'ownername' => 1,
    'ownerid' => 1,
    'field_min' => 1,
    'field_max' => 1,
    'temp_min' => 1,
    'temp_max' => 1,
    'metal_c' => 1,
    'metal' => 1,
    'crystal_c' => 1,
    'crystal' => 1,
    'deuterium_c' => 1,
    'deuterium' => 1,
    'build' => 1,
    'Element' => 1,
    'fleet' => 1,
    'defense' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b5aedcd9d781_64807752',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b5aedcd9d781_64807752')) {function content_54b5aedcd9d781_64807752($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta name="generator" content="2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
	<!-- 
		This website is powered by 2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/admin/main.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo $_smarty_tpl->tpl_vars['Offset']->value;?>
;
	var serverTime 	= new Date(<?php echo $_smarty_tpl->tpl_vars['date']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[1]-1;?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[2];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[3];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[4];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[5];?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "Pronto";
	var Skin		= "<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
";
	var Lang		= "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
";
	var head_info	= "Informação";
	var days 		= ["So","Mo","Di","Mi","Do","Fr","Sa"] 
	var months 		= ["Jan","Feb","Mar","Apr","Mai","Jun","Jul","Aug","Sep","Okt","Nov","Dez"] ;
	var tdformat	= "[M] [D] [d] [H]:[i]:[s]";
	function openEdit(id, type) {
		var editlist = window.open("?page=qeditor&edit="+type+"&id="+id, "edit", "scrollbars=yes,statusbar=no,toolbar=no,location=no,directories=no,resizable=no,menubar=no,width=850,height=600,screenX="+((xsize-600)/2)+",screenY="+((ysize-850)/2)+",top="+((ysize-600)/2)+",left="+((xsize-850)/2));
		editlist.focus();
	}
	</script> 
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php  $_smarty_tpl->tpl_vars['scriptname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scriptname']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->key => $_smarty_tpl->tpl_vars['scriptname']->value){
$_smarty_tpl->tpl_vars['scriptname']->_loop = true;
?>
	<script type="text/javascript" src="./scripts/game/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php } ?>
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="qeditor" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div><script type="text/javascript">
function check(){
	$.post('?page=qeditor&edit=planet&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&action=send', $('#userform').serialize(), function(data){
		Dialog.alert(data, function() {
			opener.location.reload();
			window.close();
		});
	});
	return false;
}
</script>
<form method="post" id="userform" action="" onsubmit="return check();">
<table width="100%" style="color:#FFFFFF"><tr>
        <th colspan="3">Informação</th>
</tr>
<tr style="height:26px;"><td width="50%">ID:</td><td width="50%"><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td></tr>
<tr><td width="50%">Planeta:</td><td width="50%"><input name="name" type="text" size="15" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"></td></tr>
<tr style="height:26px;"><td width="50%">Coordenadas:</td><td width="50%">[<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</td></tr>
<tr style="height:26px;"><td width="50%">Dono:</td><td width="50%"><?php echo $_smarty_tpl->tpl_vars['ownername']->value;?>
 (ID: <?php echo $_smarty_tpl->tpl_vars['ownerid']->value;?>
)</td></tr>
<tr><td width="50%">Campos:</td><td width="50%"><?php echo $_smarty_tpl->tpl_vars['field_min']->value;?>
 / <input name="field_max" type="text" size="3" value="<?php echo $_smarty_tpl->tpl_vars['field_max']->value;?>
"></td></tr>
<tr style="height:26px;"><td width="50%">Temperatura:</td><td width="50%"><?php echo $_smarty_tpl->tpl_vars['temp_min']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['temp_max']->value;?>
</td></tr>
</table>
<table width="100%" style="color:#FFFFFF">
<tr>
        <th colspan="3">Recursos</th>
</tr>
<tr>
        <td></td><td>Disponivel</td><td>Editar</td>
</tr>
<tr><td width="30%">Metal:</td><td width="30%"><?php echo $_smarty_tpl->tpl_vars['metal_c']->value;?>
</td><td width="40%"><input name="metal" type="text" value="<?php echo $_smarty_tpl->tpl_vars['metal']->value;?>
"></td></tr>
<tr><td width="30%">Cristal:</td><td width="30%"><?php echo $_smarty_tpl->tpl_vars['crystal_c']->value;?>
</td><td width="40%"><input name="crystal" type="text" value="<?php echo $_smarty_tpl->tpl_vars['crystal']->value;?>
"></td></tr>
<tr><td width="30%">Deutério:</td><td width="30%"><?php echo $_smarty_tpl->tpl_vars['deuterium_c']->value;?>
</td><td width="40%"><input name="deuterium" type="text" value="<?php echo $_smarty_tpl->tpl_vars['deuterium']->value;?>
"></td></tr>
</table>
<table width="100%" style="color:#FFFFFF">
<tr>
        <th colspan="3">Edificios</th>
</tr>
<tr>
        <td></td><td>Nivel</td><td>Editar</td>
</tr>
<?php  $_smarty_tpl->tpl_vars['Element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['build']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Element']->key => $_smarty_tpl->tpl_vars['Element']->value){
$_smarty_tpl->tpl_vars['Element']->_loop = true;
?>
<tr><td width="30%"><?php echo $_smarty_tpl->tpl_vars['Element']->value['name'];?>
:</td><td width="30%"><?php echo $_smarty_tpl->tpl_vars['Element']->value['count'];?>
</td><td width="40%"><input name="<?php echo $_smarty_tpl->tpl_vars['Element']->value['type'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['Element']->value['input'];?>
"></td>
<?php } ?>
</table>
<table width="100%" style="color:#FFFFFF">
<tr>
        <th colspan="3">Frota</th>
</tr>
<tr>
        <td></td><td>Disponivel</td><td>Editar</td>
</tr>
<?php  $_smarty_tpl->tpl_vars['Element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fleet']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Element']->key => $_smarty_tpl->tpl_vars['Element']->value){
$_smarty_tpl->tpl_vars['Element']->_loop = true;
?>
<tr><td width="30%"><?php echo $_smarty_tpl->tpl_vars['Element']->value['name'];?>
:</td><td width="30%"><?php echo $_smarty_tpl->tpl_vars['Element']->value['count'];?>
</td><td width="40%"><input name="<?php echo $_smarty_tpl->tpl_vars['Element']->value['type'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['Element']->value['input'];?>
"></td>
<?php } ?>
</table>
<table width="100%" style="color:#FFFFFF">
<tr>
        <th colspan="3">Defesas</th>
</tr>
<tr>
        <td></td><td>Disponivel</td><td>Editar</td>
</tr>
<?php  $_smarty_tpl->tpl_vars['Element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['defense']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Element']->key => $_smarty_tpl->tpl_vars['Element']->value){
$_smarty_tpl->tpl_vars['Element']->_loop = true;
?>
<tr><td width="30%"><?php echo $_smarty_tpl->tpl_vars['Element']->value['name'];?>
:</td><td width="30%"><?php echo $_smarty_tpl->tpl_vars['Element']->value['count'];?>
</td><td width="40%"><input name="<?php echo $_smarty_tpl->tpl_vars['Element']->value['type'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['Element']->value['input'];?>
"></td>
<?php } ?>
<tr>
        <td colspan="3"><input type="submit" value="Enviar"> <input type="reset" value="Reiniciar"></td>
</tr>
</table>
</form>
</body>
</html><?php }} ?>