<?php

define('INSIDE'  , true);
define('INSTALL' , false);
define('IN_ADMIN', true);

$ugamela_root_path = './../';
include($ugamela_root_path . 'extension.inc');
include($ugamela_root_path . 'common.' . $phpEx);

	if ($user['authlevel'] >= 1) {
		includeLang('admin');

		$mode      = $_POST['mode'];

		$PageTpl   = gettemplate("admin/del_money");
		$parse     = $lang;

		if ($mode == 'addit') {
			$id          = $_POST['id'];
			$metal       = $_POST['metal'];
			$cristal     = $_POST['cristal'];
			$deut        = $_POST['deut'];
			$QryUpdatePlanet  = "UPDATE {{table}} SET ";
			$QryUpdatePlanet .= "`metal` = `metal` - '". $metal ."', ";
			$QryUpdatePlanet .= "`crystal` = `crystal` - '". $cristal ."', ";
			$QryUpdatePlanet .= "`deuterium` = `deuterium` - '". $deut ."' ";
			$QryUpdatePlanet .= "WHERE ";
			$QryUpdatePlanet .= "`id` = '". $id ."' ";
			doquery( $QryUpdatePlanet, "planets");

			AdminMessage ( $lang['adm_delmoney2'], $lang['adm_delmoney1'] );
		}
		$Page = parsetemplate($PageTpl, $parse);

		display ($Page, $lang['adm_moneydel1'], false, '', true);
	} else {
		AdminMessage ( $lang['sys_noalloaw'], $lang['sys_noaccess'] );
	}

?>