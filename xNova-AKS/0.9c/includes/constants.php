<?php


/**
 * constants.php
 *
 * @version 1
 * @copyright 2008 By Chlorel for XNova
 */

// ----------------------------------------------------------------------------------------------------------------

if ( defined('INSIDE') ) {
	define('ADMINEMAIL'               , "Metusalem100@gmx.de");
	define('GAMEURL'                  , "http://".$_SERVER['HTTP_HOST']."/");

	// Definition du monde connu !
	define('MAX_GALAXY_IN_WORLD'      , 9);
	define('MAX_SYSTEM_IN_GALAXY'     , 499);
	define('MAX_PLANET_IN_SYSTEM'     , 15);
	// Nombre de colones pour les rapports d'espionnage
	define('SPY_REPORT_ROW'           , 2);
	// Cases données par niveau de Base Lunaire
	define('FIELDS_BY_MOONBASIS_LEVEL', 4);
	// Nombre maximum de colonie par joueur
	define('MAX_PLAYER_PLANETS'       , 15);
	// Nombre maximum d'element dans la liste de construction de batiments
	define('MAX_BUILDING_QUEUE_SIZE'  , 10);
	// Nombre maximum d'element dans une ligne de liste de construction flotte et defenses
	define('MAX_FLEET_OR_DEFS_PER_ROW', 100000000);
	// Taux de depassement possible dans l'espace de stockage des hangards ...
	// 1.0 pour 100% - 1.1 pour 110% etc ...
	define('MAX_OVERFLOW'             , 1.1);
	// Affiche les administrateur dans la page des records ...
	// 1 -> les affiche
	// 0 -> les affiche pas
	define('SHOW_ADMIN_IN_RECORDS'    , 0);

	// Valeurs de bases pour les colonies ou planetes fraichement crées
	define('BASE_STORAGE_SIZE'        , 10000000);
	define('BUILD_METAL'              , 400);
	define('BUILD_CRISTAL'            , 200);
	define('BUILD_DEUTERIUM'          , 1);

	// Debug Level
	define('DEBUG', 1); // Debugging off
	// Mot qui sont interdit a la saisie !
	$ListCensure = array ( "<", ">", "script", "doquery", "http", "javascript", "'" );
} else {
	die("Hacking attempt");
}



?>