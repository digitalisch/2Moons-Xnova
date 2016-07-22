<?php

/* CREATE TABLE `uni1_paypal` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `player` int(11) NOT NULL,
 `amount` int(11) unsigned NOT NULL,
 `timestamp` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8*/

define('INSIDE', true );
define('INSTALL', false );
define('LOGIN', true );

$InLogin = true;

define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');

require_once(ROOT_PATH . 'extension.inc');
require_once(ROOT_PATH . 'includes/common.' . PHP_EXT);
require_once(ROOT_PATH . 'includes/config.' . PHP_EXT);
require_once(ROOT_PATH . 'includes/pages/game/class.ShowPaypalPage.' . PHP_EXT);


$_GET['action'] = 'ipn';
new ShowPaypalPage();

?>