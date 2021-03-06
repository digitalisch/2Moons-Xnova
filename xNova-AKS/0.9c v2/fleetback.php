<?php

/**
 * fleetback.php
 *
 */

define('INSIDE'  , true);
define('INSTALL' , false);

    $xnova_root_path = './';
    include($xnova_root_path . 'extension.inc');
    include($xnova_root_path . 'common.' . $phpEx);

    includeLang('fleet');

    $BoxTitle   = $lang['fl_error'];
    $TxtColor   = "red";
    $BoxMessage = $lang['fl_notback'];
    if ( is_numeric($_POST['fleetid']) ) {
        $fleetid  = intval($_POST['fleetid']);

        $FleetRow = doquery("SELECT * FROM {{table}} WHERE `fleet_id` = '". $fleetid ."';", 'fleets', true);
        $i = 0;

        if ($FleetRow['fleet_owner'] == $user['id']) {
            if ($FleetRow['fleet_group'] > 0) {
                    $Aks = doquery("SELECT teilnehmer FROM {{table}} WHERE id = '". $FleetRow['fleet_group'] ."';", 'aks', true);
                    if ($Aks['teilnehmer'] == $FleetRow['fleet_owner'] AND $FleetRow['fleet_mission'] == 1) {
                        // suppression de l'AG dans la table aks
                        doquery ("DELETE FROM {{table}} WHERE id ='". $FleetRow['fleet_group'] ."';", 'aks');
                        doquery ("UPDATE {{table}} SET `fleet_group` = '0' WHERE `fleet_group` = '". $FleetRow['fleet_group'] ."';", 'fleets');
                    }
                    if ($FleetRow['fleet_mission'] == 2) {
                        // suppression du fleet_group de la flotte
                        doquery ("UPDATE {{table}} SET `fleet_group` = '0' WHERE `fleet_id` = '".  $fleetid ."';", 'fleets');
                    }
                }
            if ($FleetRow['fleet_mess'] == 0) {
                if ($FleetRow['fleet_end_stay'] != 0) {
                    // Faut calculer le temps reel de retour
                    if ($FleetRow['fleet_start_time'] < time()) {
                        // On a pas encore entam� le stationnement
                        // Il faut calculer la parcelle de temps ecoul�e depuis le lancement de la flotte
                        $CurrentFlyingTime = time() - $FleetRow['start_time'];
                    } else {
                        // On est deja en stationnement
                        // Il faut donc directement calculer la dur�e d'un vol aller ou retour
                        $CurrentFlyingTime = $FleetRow['fleet_start_time'] - $FleetRow['start_time'];
                    }
                } else {
                    // C'est quoi le stationnement ??
                    // On calcule sagement la parcelle de temps ecoul�e depuis le depart
                    $CurrentFlyingTime = time() - $FleetRow['start_time'];
                }
                // Allez houste au bout du compte y a la maison !! (E.T. phone home.............)
                $ReturnFlyingTime  = $CurrentFlyingTime + time();

                $QryUpdateFleet  = "UPDATE {{table}} SET ";
                $QryUpdateFleet .= "`fleet_start_time` = '". (time() - 1) ."', ";
                $QryUpdateFleet .= "`fleet_end_stay` = '0', ";
                $QryUpdateFleet .= "`fleet_end_time` = '". ($ReturnFlyingTime + 1) ."', ";
                $QryUpdateFleet .= "`fleet_target_owner` = '". $user['id'] ."', ";
                $QryUpdateFleet .= "`fleet_resource_deuterium` = fleet_resource_deuterium+'". ($FleetRow['fleet_conso']/2) ."', ";
                $QryUpdateFleet .= "`fleet_mess` = '1' ";
                $QryUpdateFleet .= "WHERE ";
                $QryUpdateFleet .= "`fleet_id` = '" . $fleetid . "';";
                doquery( $QryUpdateFleet, 'fleets');

                $BoxTitle   = $lang['fl_sback'];
                $TxtColor   = "lime";
                $BoxMessage = $lang['fl_isback'];
            } elseif ($FleetRow['fleet_mess'] == 1) {
                $BoxMessage = $lang['fl_notback'];
            }
        } else {
            $BoxMessage = $lang['fl_onlyyours'];
        }
    }

    message ("<font color=\"".$TxtColor."\">". $BoxMessage ."</font>", $BoxTitle, "fleet.". $phpEx, 2);

// -----------------------------------------------------------------------------------------------------------
// History version
// Updated by Chlorel. 22 Jan 2008 (String extraction, bug corrections, code uniformisation
// Created by DxPpLmOs. All rights reversed (C) 2007
// Updated by -= MoF =- for Deutsches Ugamela Forum
// 06.12.2007 - 08:41
// Open Source
// (c) by MoF
?>
