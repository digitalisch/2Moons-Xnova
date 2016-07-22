<?php /*%%SmartyHeaderCode:3128654b59957d2b530-44643713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea8f7306ef2a3cbe483a9ad7afdd22960c877324' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\install\\ins_req.tpl',
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
  'nocache_hash' => '3128654b59957d2b530-44643713',
  'variables' => 
  array (
    'LNG' => 0,
    'PHP' => 0,
    'global' => 0,
    'mysqli' => 0,
    'gdlib' => 0,
    'json' => 0,
    'iniset' => 0,
    'dir' => 0,
    'config' => 0,
    'done' => 0,
    'ftp' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b5995801f297_05919048',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b5995801f297_05919048')) {function content_54b5995801f297_05919048($_smarty_tpl) {?><!DOCTYPE html>

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
<body id="step2">
<div id="tooltip" class="tip"></div>
<div><p>&nbsp;</p></div>
<table width="960">
<tr>
	<th colspan="3">Instalação</th>
</tr><tr>
	<td class="left">
		<h2>Requesitos de Sistema</h2>
		<p>Antes da instalação prosseguir, o 2Moons realizará alguns testes para verificar se o teu Servidor suporta o 2Moons, de modo garantir que o 2Moons possa ser instalado. É surgerido que leia cuidadosamente os resultados, e não prossiga até todos estes serem verificados.</p>
		<table class="req border">
			<tr>
				<td class="transparent left"><p>Versão instalada da linguagem de script &raquo;PHP&laquo;</p><p class="desc"><strong>Requerido</strong> — O PHP é a linguagem base de código do 2Moons. Este é requerido a versão PHP 5.2.5 ou superior para que todos os modulos funcionam correctamente</p></td>
				<td class="transparent"><span class="yes">Sim, v5.5.12</span></td>
			</tr>
			<tr>
				<td class="transparent left"><p>register_globals desactivado?</p><p class="desc">2Moons também irá funcionar, se essa configuração está instalada no teu servidor. No entanto, é recomendado por razões de segurança, desactivar o "register_globals" na instalação PHP, se isso é possível.</p></td>
				<td class="transparent"><span class="yes">Sim</span></th>
			</tr>
			<tr>
				<td class="transparent left"><p>Suporte de extensão &raquo;MySQLi&laquo;</p><p class="desc"><strong>Requerido</strong> — Precisas de ter suporte para MySQLi em PHP. Se nenhum módulo de banco de dados são mostrados como sendo disponíveis, deves contactar o teu provedor de hospedagem (Hoster do Dominio) ou rever a documentação do PHP.</p></td>
				<td class="transparent"><span class="yes">Sim</span></th>
			</tr>
			<tr>
				<td class="transparent left"><p>Versão instalada do PHP GD Script &raquo;gdlib&laquo;</p><p class="desc"><strong>Opcional</strong> — Biblioteca de processamento gráfico &raquo;gdlib&laquo; é responsável pela geração dinâmica de imagens. Eles trabalham sem algumas das funcionalidades do software.</p></td>
				<td class="transparent"><span class="yes">Sim, v2.1.0</span></td>
			</tr>
			<tr>
				<td class="transparent left"><p>Extensão &raquo;JSON&laquo; disponivél?</p></td>
				<td class="transparent"><span class="yes">Sim</span></td>
			</tr>
			<tr>
				<td class="transparent left"><p>Função PHP &raquo;ini_set&laquo; disponivél?</p></td>
				<td class="transparent"><span class="yes">Sim</span></td>
			</tr>
			<tr><td class="transparent left"><p>A pasta &raquo;cache/&laquo; é gravavel?</p></td><td class="transparent"><span class="yes">Encontrado</span><span class="yes"> - Gravavel</span></td></tr><tr><td class="transparent left"><p>A pasta &raquo;cache/templates/&laquo; é gravavel?</p></td><td class="transparent"><span class="yes">Encontrado</span><span class="yes"> - Gravavel</span></td></tr><tr><td class="transparent left"><p>A pasta &raquo;includes/&laquo; é gravavel?</p></td><td class="transparent"><span class="yes">Encontrado</span><span class="yes"> - Gravavel</span></td></tr>
			<tr><td class="transparent left"><p>O ficheiro &raquo;includes/config.php&laquo; é gravavel?</p></td><td class="transparent"><span class="yes">Encontrado</span><span class="yes"> - Gravavel</span></td></tr>
			<tr class="noborder"><td colspan="2" class="transparent"><a href="index.php?mode=install&step=3"><button style="cursor: pointer;">Continuar</button></a></td></tr>
		</table>
	</td>
</tr>
</table>
</body>
</html><?php }} ?>