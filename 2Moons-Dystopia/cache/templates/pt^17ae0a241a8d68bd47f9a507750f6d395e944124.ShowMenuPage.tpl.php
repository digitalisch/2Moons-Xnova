<?php /*%%SmartyHeaderCode:967354b59a788f0ec7-21238112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17ae0a241a8d68bd47f9a507750f6d395e944124' => 
    array (
      0 => 'C:\\Wamp\\www\\Dystopia\\styles\\templates\\adm\\ShowMenuPage.tpl',
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
  'nocache_hash' => '967354b59a788f0ec7-21238112',
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b5aed560ce83_18103663',
  'has_nocache_code' => true,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b5aed560ce83_18103663')) {function content_54b5aed560ce83_18103663($_smarty_tpl) {?><!DOCTYPE html>

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
<body id="menu" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div><div id="leftmenu">
	<ul id="menu">
		<li style="background-image: url('./styles/theme/gow/img/menu-top.png');height:100px;"></li>
		<li><a href="javascript:void(0);"><span style="color:lime">Geral</span></a></li>
		<li><a href="?page=infos" target="Hauptframe">Informação</a></li>		<li><a href="?page=config" target="Hauptframe">Configuração do Jogo</a></li>		<li><a href="?page=configuni" target="Hauptframe">Configuração do Universo</a></li>		<li><a href="?page=chat" target="Hauptframe">Configurações de Chat</a></li>		<li><a href="?page=teamspeak" target="Hauptframe">Opções Teamspeak</a></li>		<li><a href="?page=facebook" target="Hauptframe">Registo pelo Facebook</a></li>		<li><a href="?page=module" target="Hauptframe">Modulos</a></li>		<li><a href="?page=disclamer" target="Hauptframe">Configurações de contato</a></li>		<li><a href="?page=statsconf" target="Hauptframe">Opções de Estatísticas</a></li>		<li><a href="?page=vertify" target="Hauptframe">Verificar Conteúdo do Jogo</a></li>		<li><a href="?page=cronjob" target="Hauptframe">Cronjobs</a></li>		<li><a href="?page=dump" target="Hauptframe">Backup da Base de Dados</a></li>		<li><a href="javascript:void(0);"><span style="color:lime">Editar menu</span></a></li>
		<li><a href="?page=create" target="Hauptframe">Criador</a></li>		<li><a href="?page=accounteditor" target="Hauptframe">Editar Contas</a></li>		<li><a href="?page=bans" target="Hauptframe">Opções de Ban</a></li>		<li><a href="?page=giveaway" target="Hauptframe">Sistema Giveaway</a></li>		<li><a href="javascript:void(0);"><span style="color:lime">Observação</span></a></li>
		<li><a href="?page=search&amp;search=online&amp;minimize=on" target="Hauptframe">Online</a></li>		<li><a href="?page=support" target="Hauptframe">Tickets de Suporte<?php if ($_smarty_tpl->tpl_vars['supportticks']->value!=0){?> (<?php echo $_smarty_tpl->tpl_vars['supportticks']->value;?>
)<?php }?></a></li>		<li><a href="?page=active" target="Hauptframe">Atividade de Usuário</a></li>		<li><a href="?page=search&amp;search=p_connect&amp;minimize=on" target="Hauptframe">Planetas Ativos</a></li>		<li><a href="?page=fleets" target="Hauptframe">Frotas em Voo</a></li>		<li><a href="?page=news" target="Hauptframe">Noticias</a></li>		<li><a href="?page=search&amp;search=users&amp;minimize=on" target="Hauptframe">Lista de Jogadores</a></li>		<li><a href="?page=search&amp;search=planet&amp;minimize=on" target="Hauptframe">Lista de Planetas</a></li>		<li><a href="?page=search&amp;search=moon&amp;minimize=on" target="Hauptframe">Lista de Luas</a></li>		<li><a href="?page=messagelist" target="Hauptframe">Lista de Mensagens</a></li>		<li><a href="?page=accountdata" target="Hauptframe">Informações de Contas</a></li>		<li><a href="?page=search" target="Hauptframe">Procura Avançada</a></li>		<li><a href="?page=multiips" target="Hauptframe">Múltiplos IPs</a></li>		<li><a href="javascript:void(0);"><span style="color:lime">Ferramentas</span></a></li>
		<li><a href="?page=log" target="Hauptframe">Atividade de Administrador</a></li>		<li><a href="?page=globalmessage" target="Hauptframe">Mensagem Global</a></li>		<li><a href="?page=password" target="Hauptframe">Encriptador MD5</a></li>		<li><a href="?page=statsupdate" target="Hauptframe" onClick=" return confirm('O atualizador de pontos é automatico, isso permite ver o que é que o teu servidor esta atualmente a fazer (Como memoria consumida , SQL , etc.)');">Atualização de pontos manual</a></li>		<li><a href="?page=clearcache" target="Hauptframe">Limpar Cache</a></li>		<li style="background-image: url('./styles/theme/gow/img/menu-foot.png');height:30px;"></li>
	</ul>
</div>
</body>
</html><?php }} ?>