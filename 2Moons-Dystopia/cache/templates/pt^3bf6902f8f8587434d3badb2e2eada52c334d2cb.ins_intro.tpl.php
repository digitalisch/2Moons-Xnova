<?php /*%%SmartyHeaderCode:2837954b5994d49fcc0-13336584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bf6902f8f8587434d3badb2e2eada52c334d2cb' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\install\\ins_intro.tpl',
      1 => 1368959719,
      2 => 'file',
    ),
    '95f638dc2a75b29d9c1ad65b559a5002892fd019' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\install\\ins_header.tpl',
      1 => 1368959719,
      2 => 'file',
    ),
    '3620f4830355dded19bf9564fc9a1c36c8260c21' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\install\\ins_footer.tpl',
      1 => 1368959719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2837954b5994d49fcc0-13336584',
  'variables' => 
  array (
    'LNG' => 0,
    'Selector' => 0,
    'lang' => 0,
    'canUpgrade' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b5994dad7c02_31868830',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b5994dad7c02_31868830')) {function content_54b5994dad7c02_31868830($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="pt" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="pt" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="pt" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="pt" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="pt" class="no-js"> <!--<![endif]-->
<head>
	<title>Instalação &bull; 2Moons</title>
	<meta name="generator" content="2Moons">
	<!-- 
		This website is powered by 2Moons
		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2012 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="../styles/resource/css/base/boilerplate.css">
	<link rel="stylesheet" type="text/css" href="../styles/resource/css/ingame/main.css">
	<link rel="stylesheet" type="text/css" href="../styles/resource/css/install/main.css">
	<link rel="stylesheet" type="text/css" href="../styles/resource/css/base/jquery.css">
	<link rel="stylesheet" type="text/css" href="../styles/resource/css/base/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="../styles/resource/css/base/validationEngine.jquery.css">
	<link rel="stylesheet" type="text/css" href="../styles/theme/gow/formate.css">
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<script type="text/javascript" src="../scripts/base/jquery.js"></script>
	<script type="text/javascript" src="../scripts/base/jquery.ui.js"></script>
	<script type="text/javascript" src="../scripts/base/jquery.cookie.js"></script>
	<script type="text/javascript" src="../scripts/base/jquery.fancybox.js"></script>
	<script type="text/javascript" src="../scripts/base/jquery.validationEngine.js"></script>
	<script type="text/javascript" src="../scripts/l18n/validationEngine/jquery.validationEngine-pt.js"></script>
	<script type="text/javascript" src="../scripts/base/tooltip.js"></script>
	<script type="text/javascript" src="../scripts/game/base.js"></script>
	<?php  $_smarty_tpl->tpl_vars['scriptname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scriptname']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->key => $_smarty_tpl->tpl_vars['scriptname']->value){
$_smarty_tpl->tpl_vars['scriptname']->_loop = true;
?>
	<script type="text/javascript" src="../scripts/game/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js"></script>
	<?php } ?>
	
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="stepintro">
<div id="tooltip" class="tip"></div>
<div><p>&nbsp;</p></div>
<table width="960">
<tr>
	<th colspan="3">Instalação</th>
</tr><tr>
	<td colspan="2">
		<div id="lang" align="right">Idioma:&nbsp;<select id="lang" name="lang" onchange="document.location = '?lang='+$(this).val();"><option value="de">Deutsch</option>
<option value="en">English</option>
<option value="es">Spanish</option>
<option value="pl">Polish</option>
<option value="pt" selected="selected">Português</option>
<option value="ru">Русский</option>
</select></div>
		<div id="main" align="left">
			<h2>Olá utilizador de 2Moons!</h2>
			<p>O 2Moons é um dos melhores projectos de OGame.<br>O 2Moons é a versão mais recente e mais estável do XNova actualmente desenvolvido. 2Moons é notável por sua facilidade de estabilidade, flexibilidade, dinamismo, qualidade e utilização. Nós sempre esperamos ser melhor do que as tuas expectativas.<br><br>O sistema de instalação irá guiar-te através da instalação ou atualizar de uma versão anterior para a mais recente. Cada questão, um problema, por favor não hesites em pedir ao nosso desenvolvimento e suporte em caso de duvidas!<br><br>O 2Moons é um projeto em Open Source, lincenciado sob GNU GPL v3. Para que esta seja verificado, por favor clica no link acima onde se refera a "Lincença"<br><br>Antes da instalação pode ser iniciado um pequeno teste para verificar se o teu Plano/Dominio tem todos os requesitos para suportar o 2Moons</p>
		</div><br><a href="index.php?mode=install&step=1"><button style="cursor: pointer;">Continuar</button></a>
	</td>
</tr>
</table>
</body>
</html><?php }} ?>