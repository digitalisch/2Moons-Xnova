<?php

/**
 * autounban.php
 *
 * @version 1.0
 * @copyright 2008 by ??????? for XNova
 */


// Mais qu'est ce qu'il voullait demontrer lui ????

define('INSIDE'  , true);
define('INSTALL' , false);
define('IN_ADMIN', true);

XNOVA_ROOT_PATH = '../';

include(XNOVA_ROOT_PATH . 'common.php');

	if ($user['authlevel'] >= 3) {
		$lang['PHP_SELF'] = 'options.php';
		doquery("UPDATE {{table}} SET `banaday` =` banaday` - '1' WHERE `banaday` != '0';",'users');
		doquery("UPDATE {{table}} SET `bana` = '0' WHERE `banaday` < '1';",'users');
		$parse = $game_config;
		$parse['dpath'] = $dpath;
		$parse['debug'] = ($game_config['debug'] == 1) ? " checked='checked'/":'';
	} else {
		message ( $lang['sys_noalloaw'], $lang['sys_noaccess'] );
	}
?>