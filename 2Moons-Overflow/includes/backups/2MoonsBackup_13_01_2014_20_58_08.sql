-- MySQL dump | 2Moons dumper v1.7.2772
--
-- Host: localhost    Database: server
-- ------------------------------------------------------
-- Server version       5.5.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `uni1_aks`
--

DROP TABLE IF EXISTS `uni1_aks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_aks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `target` int(11) unsigned NOT NULL,
  `ankunft` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_aks`
--

--
-- Table structure for table `uni1_alliance`
--

DROP TABLE IF EXISTS `uni1_alliance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_alliance` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ally_name` varchar(50) DEFAULT '',
  `ally_tag` varchar(20) DEFAULT '',
  `ally_owner` int(11) unsigned NOT NULL DEFAULT '0',
  `ally_register_time` int(11) NOT NULL DEFAULT '0',
  `ally_description` text,
  `ally_web` varchar(255) DEFAULT '',
  `ally_text` text,
  `ally_image` varchar(255) DEFAULT '',
  `ally_request` varchar(1000) DEFAULT NULL,
  `ally_request_notallow` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ally_request_min_points` bigint(20) unsigned NOT NULL DEFAULT '0',
  `ally_owner_range` varchar(32) DEFAULT '',
  `ally_members` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ally_stats` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `ally_diplo` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `ally_universe` tinyint(3) unsigned NOT NULL,
  `ally_max_members` int(5) unsigned NOT NULL DEFAULT '20',
  `ally_events` varchar(55) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `ally_tag` (`ally_tag`),
  KEY `ally_name` (`ally_name`),
  KEY `ally_universe` (`ally_universe`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_alliance`
--

LOCK TABLES `uni1_alliance` WRITE;
/*!40000 ALTER TABLE `uni1_alliance` DISABLE KEYS */;

INSERT INTO `uni1_alliance` (`id`, `ally_name`, `ally_tag`, `ally_owner`, `ally_register_time`, `ally_description`, `ally_web`, `ally_text`, `ally_image`, `ally_request`, `ally_request_notallow`, `ally_request_min_points`, `ally_owner_range`, `ally_members`, `ally_stats`, `ally_diplo`, `ally_universe`, `ally_max_members`, `ally_events`) VALUES
(1, 'Test', 'Test', 1, 1389561007, NULL, '', NULL, '', NULL, 0, 0, 'Leader', 1, 1, 1, 1, 20, '');
			
/*!40000 ALTER TABLE `uni1_alliance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_alliance_ranks`
--

DROP TABLE IF EXISTS `uni1_alliance_ranks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_alliance_ranks` (
  `rankID` int(11) NOT NULL AUTO_INCREMENT,
  `rankName` varchar(32) NOT NULL,
  `allianceID` int(10) unsigned NOT NULL,
  `MEMBERLIST` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ONLINESTATE` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `TRANSFER` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `SEEAPPLY` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `MANAGEAPPLY` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ROUNDMAIL` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ADMIN` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `KICK` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `DIPLOMATIC` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `RANKS` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `MANAGEUSERS` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `EVENTS` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`rankID`),
  KEY `allianceID` (`allianceID`,`rankID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_alliance_ranks`
--

--
-- Table structure for table `uni1_alliance_request`
--

DROP TABLE IF EXISTS `uni1_alliance_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_alliance_request` (
  `applyID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `userID` int(10) unsigned NOT NULL,
  `allianceID` int(10) unsigned NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`applyID`),
  KEY `allianceID` (`allianceID`,`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_alliance_request`
--

--
-- Table structure for table `uni1_banned`
--

DROP TABLE IF EXISTS `uni1_banned`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_banned` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `who` varchar(64) NOT NULL DEFAULT '',
  `theme` varchar(500) NOT NULL,
  `time` int(11) NOT NULL DEFAULT '0',
  `longer` int(11) NOT NULL DEFAULT '0',
  `author` varchar(64) NOT NULL DEFAULT '',
  `email` varchar(64) NOT NULL DEFAULT '',
  `universe` tinyint(3) unsigned NOT NULL,
  KEY `ID` (`id`),
  KEY `universe` (`universe`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_banned`
--

LOCK TABLES `uni1_banned` WRITE;
/*!40000 ALTER TABLE `uni1_banned` DISABLE KEYS */;

INSERT INTO `uni1_banned` (`id`, `who`, `theme`, `time`, `longer`, `author`, `email`, `universe`) VALUES
(1, 'Qwa1', 'Ban1', 1389571335, 2147483647, 'Qwa', '', 1);
			
/*!40000 ALTER TABLE `uni1_banned` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_buddy`
--

DROP TABLE IF EXISTS `uni1_buddy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_buddy` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sender` int(11) unsigned NOT NULL DEFAULT '0',
  `owner` int(11) unsigned NOT NULL DEFAULT '0',
  `universe` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `universe` (`universe`),
  KEY `sender` (`sender`,`owner`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_buddy`
--

--
-- Table structure for table `uni1_buddy_request`
--

DROP TABLE IF EXISTS `uni1_buddy_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_buddy_request` (
  `id` int(11) unsigned NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_buddy_request`
--

--
-- Table structure for table `uni1_chat_bans`
--

DROP TABLE IF EXISTS `uni1_chat_bans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_chat_bans` (
  `userID` int(11) NOT NULL,
  `userName` varchar(64) NOT NULL,
  `dateTime` datetime NOT NULL,
  `ip` varbinary(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_chat_bans`
--

--
-- Table structure for table `uni1_chat_invitations`
--

DROP TABLE IF EXISTS `uni1_chat_invitations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_chat_invitations` (
  `userID` int(11) NOT NULL,
  `channel` int(11) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_chat_invitations`
--

--
-- Table structure for table `uni1_chat_messages`
--

DROP TABLE IF EXISTS `uni1_chat_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_chat_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `userName` varchar(64) NOT NULL,
  `userRole` int(1) NOT NULL,
  `channel` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_chat_messages`
--

LOCK TABLES `uni1_chat_messages` WRITE;
/*!40000 ALTER TABLE `uni1_chat_messages` DISABLE KEYS */;

INSERT INTO `uni1_chat_messages` (`id`, `userID`, `userName`, `userRole`, `channel`, `dateTime`, `ip`, `text`) VALUES
(1, 2147483647, '2Moons', 4, 0, '2014-01-04 23:51:27', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login Qwa'),
(2, 2147483647, '2Moons', 4, 0, '2014-01-05 00:01:42', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout Qwa'),
(3, 2147483647, '2Moons', 4, 0, '2014-01-05 00:01:45', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login Qwa'),
(4, 2147483647, '2Moons', 4, 0, '2014-01-12 20:38:54', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout Qwa Timeout'),
(5, 2147483647, '2Moons', 4, 0, '2014-01-12 20:38:55', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login Qwa'),
(6, 2147483647, '2Moons', 4, 0, '2014-01-12 20:39:01', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout Qwa'),
(7, 2147483647, '2Moons', 4, 0, '2014-01-12 20:42:01', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login Qwa');
			
/*!40000 ALTER TABLE `uni1_chat_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_chat_online`
--

DROP TABLE IF EXISTS `uni1_chat_online`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_chat_online` (
  `userID` int(11) NOT NULL,
  `userName` varchar(64) NOT NULL,
  `userRole` int(1) NOT NULL,
  `channel` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  `ip` varbinary(16) NOT NULL,
  KEY `dateTime` (`dateTime`,`channel`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_chat_online`
--

LOCK TABLES `uni1_chat_online` WRITE;
/*!40000 ALTER TABLE `uni1_chat_online` DISABLE KEYS */;

INSERT INTO `uni1_chat_online` (`userID`, `userName`, `userRole`, `channel`, `dateTime`, `ip`) VALUES
(1, 'Qwa', 3, 0, '2014-01-12 20:42:04', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0');
			
/*!40000 ALTER TABLE `uni1_chat_online` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_config`
--

DROP TABLE IF EXISTS `uni1_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_config` (
  `uni` int(11) NOT NULL AUTO_INCREMENT,
  `VERSION` varchar(8) NOT NULL,
  `sql_revision` int(11) NOT NULL DEFAULT '0',
  `users_amount` int(11) unsigned NOT NULL DEFAULT '1',
  `game_speed` bigint(20) unsigned NOT NULL DEFAULT '2500',
  `fleet_speed` bigint(20) unsigned NOT NULL DEFAULT '2500',
  `resource_multiplier` smallint(5) unsigned NOT NULL DEFAULT '1',
  `halt_speed` smallint(5) unsigned NOT NULL DEFAULT '1',
  `Fleet_Cdr` tinyint(3) unsigned NOT NULL DEFAULT '30',
  `Defs_Cdr` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `initial_fields` smallint(5) unsigned NOT NULL DEFAULT '163',
  `uni_name` varchar(30) NOT NULL,
  `game_name` varchar(30) NOT NULL,
  `game_disable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `close_reason` text NOT NULL,
  `metal_basic_income` int(11) NOT NULL DEFAULT '20',
  `crystal_basic_income` int(11) NOT NULL DEFAULT '10',
  `deuterium_basic_income` int(11) NOT NULL DEFAULT '0',
  `energy_basic_income` int(11) NOT NULL DEFAULT '0',
  `LastSettedGalaxyPos` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `LastSettedSystemPos` smallint(5) unsigned NOT NULL DEFAULT '1',
  `LastSettedPlanetPos` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `noobprotection` int(11) NOT NULL DEFAULT '0',
  `noobprotectiontime` int(11) NOT NULL DEFAULT '5000',
  `noobprotectionmulti` int(11) NOT NULL DEFAULT '5',
  `forum_url` varchar(128) NOT NULL DEFAULT 'http://2moons.cc',
  `adm_attack` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `debug` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `lang` varchar(2) NOT NULL DEFAULT '',
  `stat` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `stat_level` tinyint(3) unsigned NOT NULL DEFAULT '2',
  `stat_last_update` int(11) NOT NULL DEFAULT '0',
  `stat_settings` int(11) unsigned NOT NULL DEFAULT '1000',
  `stat_update_time` tinyint(3) unsigned NOT NULL DEFAULT '25',
  `stat_last_db_update` int(11) NOT NULL DEFAULT '0',
  `stats_fly_lock` int(11) NOT NULL DEFAULT '0',
  `cron_lock` int(11) NOT NULL DEFAULT '0',
  `ts_modon` tinyint(1) NOT NULL DEFAULT '0',
  `ts_server` varchar(64) NOT NULL DEFAULT '',
  `ts_tcpport` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ts_udpport` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ts_timeout` tinyint(1) NOT NULL DEFAULT '1',
  `ts_version` tinyint(1) NOT NULL DEFAULT '2',
  `ts_cron_last` int(11) NOT NULL DEFAULT '0',
  `ts_cron_interval` smallint(5) NOT NULL DEFAULT '5',
  `ts_login` varchar(32) NOT NULL DEFAULT '',
  `ts_password` varchar(32) NOT NULL DEFAULT '',
  `reg_closed` tinyint(1) NOT NULL DEFAULT '0',
  `OverviewNewsFrame` tinyint(1) NOT NULL DEFAULT '1',
  `OverviewNewsText` text NOT NULL,
  `capaktiv` tinyint(1) NOT NULL DEFAULT '0',
  `cappublic` varchar(42) NOT NULL DEFAULT '',
  `capprivate` varchar(42) NOT NULL DEFAULT '',
  `min_build_time` tinyint(2) NOT NULL DEFAULT '1',
  `mail_active` tinyint(1) NOT NULL DEFAULT '0',
  `mail_use` tinyint(1) NOT NULL DEFAULT '0',
  `smtp_host` varchar(64) NOT NULL DEFAULT '',
  `smtp_port` smallint(5) NOT NULL DEFAULT '0',
  `smtp_user` varchar(64) NOT NULL DEFAULT '',
  `smtp_pass` varchar(32) NOT NULL DEFAULT '',
  `smtp_ssl` enum('','ssl','tls') NOT NULL DEFAULT '',
  `smtp_sendmail` varchar(64) NOT NULL DEFAULT '',
  `smail_path` varchar(30) NOT NULL DEFAULT '/usr/sbin/sendmail',
  `user_valid` tinyint(1) NOT NULL DEFAULT '0',
  `fb_on` tinyint(1) NOT NULL DEFAULT '0',
  `fb_apikey` varchar(42) NOT NULL DEFAULT '',
  `fb_skey` varchar(42) NOT NULL DEFAULT '',
  `ga_active` varchar(42) NOT NULL DEFAULT '0',
  `ga_key` varchar(42) NOT NULL DEFAULT '',
  `moduls` varchar(100) NOT NULL DEFAULT '',
  `trade_allowed_ships` varchar(255) NOT NULL DEFAULT '202,401',
  `trade_charge` varchar(5) NOT NULL DEFAULT '30',
  `chat_closed` tinyint(1) NOT NULL DEFAULT '0',
  `chat_allowchan` tinyint(1) NOT NULL DEFAULT '1',
  `chat_allowmes` tinyint(1) NOT NULL DEFAULT '1',
  `chat_allowdelmes` tinyint(1) NOT NULL DEFAULT '1',
  `chat_logmessage` tinyint(1) NOT NULL DEFAULT '1',
  `chat_nickchange` tinyint(1) NOT NULL DEFAULT '1',
  `chat_botname` varchar(15) NOT NULL DEFAULT '2Moons',
  `chat_channelname` varchar(15) NOT NULL DEFAULT '2Moons',
  `chat_socket_active` tinyint(1) NOT NULL DEFAULT '0',
  `chat_socket_host` varchar(64) NOT NULL DEFAULT '',
  `chat_socket_ip` varchar(40) NOT NULL DEFAULT '',
  `chat_socket_port` smallint(5) NOT NULL DEFAULT '0',
  `chat_socket_chatid` tinyint(1) NOT NULL DEFAULT '1',
  `max_galaxy` tinyint(3) unsigned NOT NULL DEFAULT '9',
  `max_system` smallint(5) unsigned NOT NULL DEFAULT '400',
  `max_planets` tinyint(3) unsigned NOT NULL DEFAULT '15',
  `planet_factor` float(2,1) NOT NULL DEFAULT '1.0',
  `max_elements_build` tinyint(3) unsigned NOT NULL DEFAULT '5',
  `max_elements_tech` tinyint(3) unsigned NOT NULL DEFAULT '2',
  `max_elements_ships` tinyint(3) unsigned NOT NULL DEFAULT '10',
  `min_player_planets` tinyint(3) unsigned NOT NULL DEFAULT '9',
  `planets_tech` tinyint(4) NOT NULL DEFAULT '11',
  `planets_officier` tinyint(4) NOT NULL DEFAULT '5',
  `planets_per_tech` float(2,1) NOT NULL DEFAULT '0.5',
  `max_fleet_per_build` bigint(20) unsigned NOT NULL DEFAULT '1000000',
  `deuterium_cost_galaxy` int(11) unsigned NOT NULL DEFAULT '10',
  `max_dm_missions` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `max_overflow` float(2,1) NOT NULL DEFAULT '1.0',
  `moon_factor` float(2,1) NOT NULL DEFAULT '1.0',
  `moon_chance` tinyint(3) unsigned NOT NULL DEFAULT '20',
  `darkmatter_cost_trader` int(11) unsigned NOT NULL DEFAULT '750',
  `factor_university` tinyint(3) unsigned NOT NULL DEFAULT '8',
  `max_fleets_per_acs` tinyint(3) unsigned NOT NULL DEFAULT '16',
  `debris_moon` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `vmode_min_time` int(11) NOT NULL DEFAULT '259200',
  `gate_wait_time` int(11) NOT NULL DEFAULT '3600',
  `metal_start` int(11) unsigned NOT NULL DEFAULT '500',
  `crystal_start` int(11) unsigned NOT NULL DEFAULT '500',
  `deuterium_start` int(11) unsigned NOT NULL DEFAULT '0',
  `darkmatter_start` int(11) unsigned NOT NULL DEFAULT '0',
  `ttf_file` varchar(128) NOT NULL DEFAULT 'styles/resource/fonts/DroidSansMono.ttf',
  `ref_active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ref_bonus` int(11) unsigned NOT NULL DEFAULT '1000',
  `ref_minpoints` bigint(20) unsigned NOT NULL DEFAULT '2000',
  `ref_max_referals` tinyint(1) unsigned NOT NULL DEFAULT '5',
  `del_oldstuff` tinyint(3) unsigned NOT NULL DEFAULT '3',
  `del_user_manually` tinyint(3) unsigned NOT NULL DEFAULT '7',
  `del_user_automatic` tinyint(3) unsigned NOT NULL DEFAULT '30',
  `del_user_sendmail` tinyint(3) unsigned NOT NULL DEFAULT '21',
  `sendmail_inactive` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `silo_factor` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `timezone` varchar(32) NOT NULL DEFAULT 'Europe/London',
  `dst` enum('0','1','2') NOT NULL DEFAULT '2',
  `energySpeed` smallint(6) NOT NULL DEFAULT '1',
  `disclamerAddress` text NOT NULL,
  `disclamerPhone` text NOT NULL,
  `disclamerMail` text NOT NULL,
  `disclamerNotice` text NOT NULL,
  `alliance_create_min_points` bigint(20) unsigned NOT NULL DEFAULT '0',
  `achievements_mines` int(11) NOT NULL DEFAULT '4',
  `achievements_tech` int(11) NOT NULL DEFAULT '4',
  `achievements_engine` int(11) NOT NULL DEFAULT '4',
  `achievements_colonization` int(11) NOT NULL DEFAULT '3',
  `achievements_moon` int(11) NOT NULL DEFAULT '3',
  `achievements_war` int(11) NOT NULL DEFAULT '3',
  `achievements_destroy` int(11) NOT NULL DEFAULT '4',
  `achievements_time` int(11) NOT NULL DEFAULT '3',
  `achievements_hof` int(11) NOT NULL DEFAULT '4',
  `achievements_community` int(11) NOT NULL DEFAULT '3',
  `achievements_fleet` int(11) NOT NULL DEFAULT '4',
  `achievements_darkmatter` int(11) NOT NULL DEFAULT '5',
  `achievements_planet` int(11) NOT NULL DEFAULT '4',
  `achievements_lab` int(11) NOT NULL DEFAULT '4',
  PRIMARY KEY (`uni`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_config`
--

LOCK TABLES `uni1_config` WRITE;
/*!40000 ALTER TABLE `uni1_config` DISABLE KEYS */;

INSERT INTO `uni1_config` (`uni`, `VERSION`, `sql_revision`, `users_amount`, `game_speed`, `fleet_speed`, `resource_multiplier`, `halt_speed`, `Fleet_Cdr`, `Defs_Cdr`, `initial_fields`, `uni_name`, `game_name`, `game_disable`, `close_reason`, `metal_basic_income`, `crystal_basic_income`, `deuterium_basic_income`, `energy_basic_income`, `LastSettedGalaxyPos`, `LastSettedSystemPos`, `LastSettedPlanetPos`, `noobprotection`, `noobprotectiontime`, `noobprotectionmulti`, `forum_url`, `adm_attack`, `debug`, `lang`, `stat`, `stat_level`, `stat_last_update`, `stat_settings`, `stat_update_time`, `stat_last_db_update`, `stats_fly_lock`, `cron_lock`, `ts_modon`, `ts_server`, `ts_tcpport`, `ts_udpport`, `ts_timeout`, `ts_version`, `ts_cron_last`, `ts_cron_interval`, `ts_login`, `ts_password`, `reg_closed`, `OverviewNewsFrame`, `OverviewNewsText`, `capaktiv`, `cappublic`, `capprivate`, `min_build_time`, `mail_active`, `mail_use`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `smtp_ssl`, `smtp_sendmail`, `smail_path`, `user_valid`, `fb_on`, `fb_apikey`, `fb_skey`, `ga_active`, `ga_key`, `moduls`, `trade_allowed_ships`, `trade_charge`, `chat_closed`, `chat_allowchan`, `chat_allowmes`, `chat_allowdelmes`, `chat_logmessage`, `chat_nickchange`, `chat_botname`, `chat_channelname`, `chat_socket_active`, `chat_socket_host`, `chat_socket_ip`, `chat_socket_port`, `chat_socket_chatid`, `max_galaxy`, `max_system`, `max_planets`, `planet_factor`, `max_elements_build`, `max_elements_tech`, `max_elements_ships`, `min_player_planets`, `planets_tech`, `planets_officier`, `planets_per_tech`, `max_fleet_per_build`, `deuterium_cost_galaxy`, `max_dm_missions`, `max_overflow`, `moon_factor`, `moon_chance`, `darkmatter_cost_trader`, `factor_university`, `max_fleets_per_acs`, `debris_moon`, `vmode_min_time`, `gate_wait_time`, `metal_start`, `crystal_start`, `deuterium_start`, `darkmatter_start`, `ttf_file`, `ref_active`, `ref_bonus`, `ref_minpoints`, `ref_max_referals`, `del_oldstuff`, `del_user_manually`, `del_user_automatic`, `del_user_sendmail`, `sendmail_inactive`, `silo_factor`, `timezone`, `dst`, `energySpeed`, `disclamerAddress`, `disclamerPhone`, `disclamerMail`, `disclamerNotice`, `alliance_create_min_points`, `achievements_mines`, `achievements_tech`, `achievements_engine`, `achievements_colonization`, `achievements_moon`, `achievements_war`, `achievements_destroy`, `achievements_time`, `achievements_hof`, `achievements_community`, `achievements_fleet`, `achievements_darkmatter`, `achievements_planet`, `achievements_lab`) VALUES
(1, '1.7.2772', 0, 2, 2500, 2500, 1, 1, 30, 0, 163, 'Universo 1', '2Moons', 1, 'O jogo encontra-se fechado', 20, 10, 0, 0, 1, 1, 1, 0, 5000, 5, 'http://2moons.cc', 0, 0, 'en', 0, 2, 1389565865, 1000, 25, 0, 0, 0, 0, '', 0, 0, 1, 2, 0, 5, '', '', 0, 1, 'Bem vindo ao 2Moons v1.7', 0, '', '', 1, 0, 0, '', 0, '', '', '', '', '/usr/sbin/sendmail', 0, 0, '', '', '0', '', '1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1', '202,401', '30', 0, 1, 1, 1, 1, 1, '2Moons', '2Moons', 0, '', '', 0, 1, 9, 400, 15, 1.0, 5, 2, 10, 9, 11, 5, 0.5, 1000000, 10, 1, 1.0, 1.0, 20, 750, 8, 16, 1, 259200, 3600, 500, 500, 0, 0, 'styles/resource/fonts/DroidSansMono.ttf', 1, 1000, 2000, 5, 3, 7, 30, 21, 0, 1, 'Europe/Berlin', '2', 1, '', '', '', '', 0, 4, 4, 4, 3, 3, 3, 4, 3, 4, 3, 4, 5, 4, 4);
			
/*!40000 ALTER TABLE `uni1_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_cronjobs`
--

DROP TABLE IF EXISTS `uni1_cronjobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_cronjobs` (
  `cronjobID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `min` varchar(32) NOT NULL,
  `hours` varchar(32) NOT NULL,
  `dom` varchar(32) NOT NULL,
  `month` varchar(32) NOT NULL,
  `dow` varchar(32) NOT NULL,
  `class` varchar(32) NOT NULL,
  `nextTime` int(11) NOT NULL DEFAULT '0',
  `lock` varchar(32) DEFAULT NULL,
  UNIQUE KEY `cronjobID` (`cronjobID`),
  KEY `isActive` (`isActive`,`nextTime`,`lock`,`cronjobID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_cronjobs`
--

LOCK TABLES `uni1_cronjobs` WRITE;
/*!40000 ALTER TABLE `uni1_cronjobs` DISABLE KEYS */;

INSERT INTO `uni1_cronjobs` (`cronjobID`, `name`, `isActive`, `min`, `hours`, `dom`, `month`, `dow`, `class`, `nextTime`, `lock`) VALUES
(1, 'referral', 1, '0,30', '*', '*', '*', '*', 'ReferralCronjob', 1389654000, '669ccff6a799f9030b7ada3d5a293b41'),
(2, 'statistic', 1, '0,30', '*', '*', '*', '*', 'StatisticCronjob', 1389654000, NULL),
(3, 'daily', 1, '25', '2', '*', '*', '*', 'DailyCronjob', 1389576300, NULL),
(4, 'cleaner', 1, '45', '2', '*', '*', '6', 'CleanerCronjob', 1390009500, NULL),
(5, 'inactive', 1, '30', '1', '*', '*', '0,3,6', 'InactiveMailCronjob', 1389745800, NULL),
(6, 'teamspeak', 0, '*/3', '*', '*', '*', '*', 'TeamSpeakCronjob', 1389654000, NULL),
(7, 'databasedump', 1, '30', '1', '*', '*', '1', 'DumpCronjob', 1389573000, '65c0382aa250601714f8a060445c09b9'),
(8, 'tracking', 1, '24', '10', '*', '*', '0', 'TrackingCronjob', 1390123440, NULL);
			
/*!40000 ALTER TABLE `uni1_cronjobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_diplo`
--

DROP TABLE IF EXISTS `uni1_diplo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_diplo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `owner_1` int(11) unsigned NOT NULL,
  `owner_2` int(11) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  `accept` tinyint(1) unsigned NOT NULL,
  `accept_text` varchar(255) NOT NULL,
  `universe` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `universe` (`universe`),
  KEY `owner_1` (`owner_1`,`owner_2`,`accept`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_diplo`
--

--
-- Table structure for table `uni1_fleet_event`
--

DROP TABLE IF EXISTS `uni1_fleet_event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_fleet_event` (
  `fleetID` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `lock` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`fleetID`),
  KEY `lock` (`lock`,`time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_fleet_event`
--

--
-- Table structure for table `uni1_fleets`
--

DROP TABLE IF EXISTS `uni1_fleets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_fleets` (
  `fleet_id` bigint(11) unsigned NOT NULL AUTO_INCREMENT,
  `fleet_owner` int(11) unsigned NOT NULL DEFAULT '0',
  `fleet_mission` tinyint(3) unsigned NOT NULL DEFAULT '3',
  `fleet_amount` bigint(20) unsigned NOT NULL DEFAULT '0',
  `fleet_array` text,
  `fleet_universe` tinyint(3) unsigned NOT NULL,
  `fleet_start_time` int(11) NOT NULL DEFAULT '0',
  `fleet_start_id` int(11) unsigned NOT NULL,
  `fleet_start_galaxy` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_start_system` smallint(5) unsigned NOT NULL DEFAULT '0',
  `fleet_start_planet` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_start_type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fleet_end_time` int(11) NOT NULL DEFAULT '0',
  `fleet_end_stay` int(11) NOT NULL DEFAULT '0',
  `fleet_end_id` int(11) unsigned NOT NULL,
  `fleet_end_galaxy` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_end_system` smallint(5) unsigned NOT NULL DEFAULT '0',
  `fleet_end_planet` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_end_type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fleet_target_obj` smallint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_resource_metal` double(50,0) unsigned NOT NULL DEFAULT '0',
  `fleet_resource_crystal` double(50,0) unsigned NOT NULL DEFAULT '0',
  `fleet_resource_deuterium` double(50,0) unsigned NOT NULL DEFAULT '0',
  `fleet_resource_darkmatter` double(50,0) unsigned NOT NULL DEFAULT '0',
  `fleet_target_owner` int(11) unsigned NOT NULL DEFAULT '0',
  `fleet_group` int(10) unsigned NOT NULL DEFAULT '0',
  `fleet_mess` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `start_time` int(11) DEFAULT NULL,
  `fleet_busy` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `hasCanceled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fleet_id`),
  KEY `fleet_target_owner` (`fleet_target_owner`,`fleet_mission`),
  KEY `fleet_owner` (`fleet_owner`,`fleet_mission`),
  KEY `fleet_group` (`fleet_group`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_fleets`
--

--
-- Table structure for table `uni1_log`
--

DROP TABLE IF EXISTS `uni1_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `mode` tinyint(3) unsigned NOT NULL,
  `admin` int(11) unsigned NOT NULL,
  `target` int(11) NOT NULL,
  `time` int(11) unsigned NOT NULL,
  `data` text NOT NULL,
  `universe` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mode` (`mode`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_log`
--

LOCK TABLES `uni1_log` WRITE;
/*!40000 ALTER TABLE `uni1_log` DISABLE KEYS */;

INSERT INTO `uni1_log` (`id`, `mode`, `admin`, `target`, `time`, `data`, `universe`) VALUES
(1, 2, 1, 11, 1385065534, 'a:2:{i:0;a:53:{i:202;s:1:\"0\";i:203;s:1:\"0\";i:204;s:1:\"0\";i:205;s:1:\"0\";i:206;s:1:\"0\";i:207;s:1:\"0\";i:208;s:1:\"0\";i:209;s:1:\"0\";i:210;s:1:\"0\";i:211;s:1:\"0\";i:212;s:1:\"0\";i:213;s:1:\"0\";i:214;s:1:\"0\";i:215;s:1:\"0\";i:216;s:1:\"0\";i:217;s:1:\"0\";i:218;s:1:\"0\";i:219;s:1:\"0\";i:220;s:1:\"0\";i:1;s:1:\"0\";i:2;s:1:\"0\";i:3;s:1:\"0\";i:4;s:1:\"0\";i:6;s:1:\"0\";i:12;s:1:\"0\";i:14;s:1:\"0\";i:15;s:1:\"0\";i:21;s:1:\"0\";i:22;s:1:\"0\";i:23;s:1:\"0\";i:24;s:1:\"0\";i:31;s:1:\"0\";i:33;s:1:\"0\";i:34;s:1:\"0\";i:41;s:1:\"0\";i:42;s:1:\"0\";i:43;s:1:\"0\";i:44;s:1:\"0\";i:401;s:1:\"0\";i:402;s:1:\"0\";i:403;s:1:\"0\";i:404;s:1:\"0\";i:405;s:1:\"0\";i:406;s:1:\"0\";i:407;s:1:\"0\";i:408;s:1:\"0\";i:409;s:1:\"0\";i:410;s:1:\"0\";i:411;s:1:\"0\";i:901;s:10:\"946.294445\";i:902;s:10:\"723.147223\";i:903;s:8:\"0.000000\";s:9:\"field_max\";s:3:\"163\";}i:1;a:53:{i:202;i:0;i:203;i:0;i:204;i:0;i:205;i:0;i:206;i:0;i:207;i:0;i:208;i:0;i:209;i:0;i:210;i:0;i:211;i:0;i:212;i:0;i:213;i:0;i:214;i:0;i:215;i:0;i:216;i:0;i:217;i:0;i:218;d:1;i:219;i:0;i:220;i:0;i:1;i:0;i:2;i:0;i:3;i:0;i:4;i:0;i:6;i:0;i:12;i:0;i:14;i:0;i:15;i:0;i:21;i:0;i:22;i:0;i:23;i:0;i:24;i:0;i:31;i:0;i:33;i:0;i:34;i:0;i:41;i:0;i:42;i:0;i:43;i:0;i:44;i:0;i:401;i:0;i:402;i:0;i:403;i:0;i:404;i:0;i:405;i:0;i:406;i:0;i:407;i:0;i:408;i:0;i:409;i:0;i:410;i:0;i:411;i:0;i:901;d:946;i:902;d:723;i:903;d:10000000000;s:9:\"field_max\";i:163;}}', 1),
(2, 2, 1, 1, 1385078358, 'a:2:{i:0;a:53:{i:202;s:1:\"0\";i:203;s:1:\"0\";i:204;s:1:\"0\";i:205;s:1:\"0\";i:206;s:1:\"0\";i:207;s:1:\"0\";i:208;s:1:\"0\";i:209;s:1:\"0\";i:210;s:1:\"0\";i:211;s:1:\"0\";i:212;s:1:\"0\";i:213;s:1:\"0\";i:214;s:1:\"0\";i:215;s:1:\"0\";i:216;s:1:\"0\";i:217;s:1:\"0\";i:218;s:1:\"0\";i:219;s:1:\"0\";i:220;s:1:\"0\";i:1;s:1:\"5\";i:2;s:1:\"2\";i:3;s:1:\"0\";i:4;s:1:\"1\";i:6;s:1:\"0\";i:12;s:1:\"0\";i:14;s:1:\"0\";i:15;s:1:\"0\";i:21;s:1:\"0\";i:22;s:1:\"0\";i:23;s:1:\"0\";i:24;s:1:\"0\";i:31;s:1:\"0\";i:33;s:1:\"0\";i:34;s:1:\"0\";i:41;s:1:\"0\";i:42;s:1:\"0\";i:43;s:1:\"0\";i:44;s:1:\"0\";i:401;s:1:\"0\";i:402;s:1:\"0\";i:403;s:1:\"0\";i:404;s:1:\"0\";i:405;s:1:\"0\";i:406;s:1:\"0\";i:407;s:1:\"0\";i:408;s:1:\"0\";i:409;s:1:\"0\";i:410;s:1:\"0\";i:411;s:1:\"0\";i:901;s:9:\"93.580650\";i:902;s:10:\"497.569484\";i:903;s:8:\"0.000000\";s:9:\"field_max\";s:3:\"163\";}i:1;a:53:{i:202;i:0;i:203;i:0;i:204;i:0;i:205;i:0;i:206;i:0;i:207;i:0;i:208;i:0;i:209;i:0;i:210;i:0;i:211;i:0;i:212;i:0;i:213;i:0;i:214;i:0;i:215;i:0;i:216;i:0;i:217;i:0;i:218;i:0;i:219;i:0;i:220;i:0;i:1;d:5;i:2;d:2;i:3;i:0;i:4;d:1;i:6;i:0;i:12;i:0;i:14;i:0;i:15;i:0;i:21;i:0;i:22;i:0;i:23;i:0;i:24;i:0;i:31;i:0;i:33;i:0;i:34;i:0;i:41;i:0;i:42;i:0;i:43;i:0;i:44;i:0;i:401;i:0;i:402;i:0;i:403;i:0;i:404;i:0;i:405;i:0;i:406;i:0;i:407;i:0;i:408;i:0;i:409;i:0;i:410;i:0;i:411;i:0;i:901;d:99999994;i:902;d:9999999;i:903;i:0;s:9:\"field_max\";i:163;}}', 1),
(3, 2, 1, 11, 1385081313, 'a:2:{i:0;a:53:{i:202;s:1:\"0\";i:203;s:1:\"0\";i:204;s:1:\"0\";i:205;s:1:\"0\";i:206;s:1:\"0\";i:207;s:1:\"0\";i:208;s:1:\"0\";i:209;s:1:\"0\";i:210;s:1:\"0\";i:211;s:1:\"0\";i:212;s:1:\"0\";i:213;s:1:\"0\";i:214;s:1:\"0\";i:215;s:1:\"0\";i:216;s:1:\"0\";i:217;s:1:\"0\";i:218;s:1:\"0\";i:219;s:1:\"0\";i:220;s:1:\"0\";i:1;s:1:\"0\";i:2;s:1:\"0\";i:3;s:1:\"0\";i:4;s:1:\"0\";i:6;s:1:\"0\";i:12;s:1:\"0\";i:14;s:1:\"0\";i:15;s:1:\"0\";i:21;s:1:\"0\";i:22;s:1:\"0\";i:23;s:1:\"0\";i:24;s:1:\"0\";i:31;s:1:\"0\";i:33;s:1:\"0\";i:34;s:1:\"0\";i:41;s:1:\"0\";i:42;s:1:\"0\";i:43;s:1:\"0\";i:44;s:1:\"0\";i:401;s:1:\"0\";i:402;s:1:\"0\";i:403;s:1:\"0\";i:404;s:1:\"0\";i:405;s:1:\"0\";i:406;s:1:\"0\";i:407;s:1:\"0\";i:408;s:1:\"0\";i:409;s:1:\"0\";i:410;s:1:\"0\";i:411;s:1:\"0\";i:901;s:11:\"1033.738890\";i:902;s:10:\"766.869445\";i:903;s:17:\"9999999260.000000\";s:9:\"field_max\";s:3:\"163\";}i:1;a:53:{i:202;i:0;i:203;i:0;i:204;i:0;i:205;i:0;i:206;i:0;i:207;i:0;i:208;i:0;i:209;i:0;i:210;i:0;i:211;i:0;i:212;i:0;i:213;i:0;i:214;i:0;i:215;i:0;i:216;i:0;i:217;i:0;i:218;d:1000000000000;i:219;i:0;i:220;i:0;i:1;i:0;i:2;i:0;i:3;i:0;i:4;i:0;i:6;i:0;i:12;i:0;i:14;i:0;i:15;i:0;i:21;i:0;i:22;i:0;i:23;i:0;i:24;i:0;i:31;i:0;i:33;i:0;i:34;i:0;i:41;i:0;i:42;i:0;i:43;i:0;i:44;i:0;i:401;i:0;i:402;i:0;i:403;i:0;i:404;i:0;i:405;i:0;i:406;i:0;i:407;i:0;i:408;i:0;i:409;i:0;i:410;i:0;i:411;i:0;i:901;d:1034;i:902;d:767;i:903;d:9999999260;s:9:\"field_max\";i:163;}}', 1),
(4, 2, 1, 1, 1385081542, 'a:2:{i:0;a:53:{i:202;s:1:\"0\";i:203;s:1:\"0\";i:204;s:1:\"0\";i:205;s:1:\"0\";i:206;s:1:\"0\";i:207;s:1:\"0\";i:208;s:1:\"0\";i:209;s:1:\"0\";i:210;s:1:\"0\";i:211;s:1:\"0\";i:212;s:1:\"0\";i:213;s:1:\"0\";i:214;s:1:\"0\";i:215;s:1:\"0\";i:216;s:1:\"0\";i:217;s:1:\"0\";i:218;s:1:\"0\";i:219;s:1:\"0\";i:220;s:1:\"0\";i:1;s:1:\"7\";i:2;s:1:\"2\";i:3;s:1:\"0\";i:4;s:1:\"1\";i:6;s:1:\"0\";i:12;s:1:\"0\";i:14;s:1:\"0\";i:15;s:1:\"0\";i:21;s:1:\"0\";i:22;s:1:\"0\";i:23;s:1:\"0\";i:24;s:1:\"0\";i:31;s:1:\"0\";i:33;s:1:\"0\";i:34;s:1:\"0\";i:41;s:1:\"0\";i:42;s:1:\"0\";i:43;s:1:\"0\";i:44;s:1:\"0\";i:401;s:1:\"0\";i:402;s:1:\"0\";i:403;s:1:\"0\";i:404;s:1:\"0\";i:405;s:1:\"0\";i:406;s:1:\"0\";i:407;s:1:\"0\";i:408;s:1:\"0\";i:409;s:1:\"0\";i:410;s:1:\"0\";i:411;s:1:\"0\";i:901;s:15:\"99978854.937500\";i:902;s:14:\"9959714.234375\";i:903;s:8:\"0.000000\";s:9:\"field_max\";s:3:\"163\";}i:1;a:53:{i:202;i:0;i:203;i:0;i:204;i:0;i:205;i:0;i:206;i:0;i:207;i:0;i:208;i:0;i:209;i:0;i:210;i:0;i:211;i:0;i:212;i:0;i:213;i:0;i:214;i:0;i:215;i:0;i:216;i:0;i:217;i:0;i:218;d:100000000;i:219;i:0;i:220;i:0;i:1;d:7;i:2;d:2;i:3;i:0;i:4;d:1;i:6;i:0;i:12;i:0;i:14;i:0;i:15;i:0;i:21;i:0;i:22;i:0;i:23;i:0;i:24;i:0;i:31;i:0;i:33;i:0;i:34;i:0;i:41;i:0;i:42;i:0;i:43;i:0;i:44;i:0;i:401;i:0;i:402;i:0;i:403;i:0;i:404;i:0;i:405;i:0;i:406;i:0;i:407;i:0;i:408;i:0;i:409;i:0;i:410;i:0;i:411;i:0;i:901;d:99978855;i:902;d:9959714;i:903;d:1000000000;s:9:\"field_max\";i:163;}}', 1),
(5, 2, 1, 1, 1385081562, 'a:2:{i:0;a:53:{i:202;s:1:\"0\";i:203;s:1:\"0\";i:204;s:1:\"0\";i:205;s:1:\"0\";i:206;s:1:\"0\";i:207;s:1:\"0\";i:208;s:1:\"0\";i:209;s:1:\"0\";i:210;s:1:\"0\";i:211;s:1:\"0\";i:212;s:1:\"0\";i:213;s:1:\"0\";i:214;s:1:\"0\";i:215;s:1:\"0\";i:216;s:1:\"0\";i:217;s:1:\"0\";i:218;s:9:\"100000000\";i:219;s:1:\"0\";i:220;s:1:\"0\";i:1;s:1:\"7\";i:2;s:1:\"2\";i:3;s:1:\"0\";i:4;s:1:\"1\";i:6;s:1:\"0\";i:12;s:1:\"0\";i:14;s:1:\"0\";i:15;s:1:\"0\";i:21;s:1:\"0\";i:22;s:1:\"0\";i:23;s:1:\"0\";i:24;s:1:\"0\";i:31;s:1:\"0\";i:33;s:1:\"0\";i:34;s:1:\"0\";i:41;s:1:\"0\";i:42;s:1:\"0\";i:43;s:1:\"0\";i:44;s:1:\"0\";i:401;s:1:\"0\";i:402;s:1:\"0\";i:403;s:1:\"0\";i:404;s:1:\"0\";i:405;s:1:\"0\";i:406;s:1:\"0\";i:407;s:1:\"0\";i:408;s:1:\"0\";i:409;s:1:\"0\";i:410;s:1:\"0\";i:411;s:1:\"0\";i:901;s:15:\"99978855.000000\";i:902;s:14:\"9959714.000000\";i:903;s:17:\"1000000000.000000\";s:9:\"field_max\";s:3:\"163\";}i:1;a:53:{i:202;i:0;i:203;i:0;i:204;i:0;i:205;i:0;i:206;i:0;i:207;i:0;i:208;d:1;i:209;i:0;i:210;i:0;i:211;i:0;i:212;i:0;i:213;i:0;i:214;i:0;i:215;i:0;i:216;i:0;i:217;i:0;i:218;d:100000000;i:219;i:0;i:220;i:0;i:1;d:7;i:2;d:2;i:3;i:0;i:4;d:1;i:6;i:0;i:12;i:0;i:14;i:0;i:15;i:0;i:21;i:0;i:22;i:0;i:23;i:0;i:24;i:0;i:31;i:0;i:33;i:0;i:34;i:0;i:41;i:0;i:42;i:0;i:43;i:0;i:44;i:0;i:401;i:0;i:402;i:0;i:403;i:0;i:404;i:0;i:405;i:0;i:406;i:0;i:407;i:0;i:408;i:0;i:409;i:0;i:410;i:0;i:411;i:0;i:901;d:99978855;i:902;d:9959714;i:903;d:1000000000;s:9:\"field_max\";i:163;}}', 1),
(6, 1, 1, 1, 1385081756, 'a:2:{i:0;a:38:{i:106;s:1:\"0\";i:108;s:1:\"0\";i:109;s:1:\"0\";i:110;s:1:\"0\";i:111;s:1:\"0\";i:113;s:1:\"0\";i:114;s:1:\"0\";i:115;s:1:\"0\";i:117;s:1:\"0\";i:118;s:1:\"0\";i:120;s:1:\"0\";i:121;s:1:\"0\";i:122;s:1:\"0\";i:123;s:1:\"0\";i:124;s:1:\"0\";i:131;s:1:\"0\";i:132;s:1:\"0\";i:133;s:1:\"0\";i:199;s:1:\"0\";i:601;s:1:\"0\";i:602;s:1:\"0\";i:603;s:1:\"0\";i:604;s:1:\"0\";i:605;s:1:\"0\";i:606;s:1:\"0\";i:607;s:1:\"0\";i:608;s:1:\"0\";i:609;s:1:\"0\";i:610;s:1:\"0\";i:611;s:1:\"0\";i:612;s:1:\"0\";i:613;s:1:\"0\";i:614;s:1:\"0\";i:615;s:1:\"0\";i:921;s:1:\"0\";s:8:\"username\";s:3:\"Qwa\";s:10:\"authattack\";s:1:\"0\";s:5:\"multi\";s:1:\"1\";}i:1;a:37:{i:106;i:0;i:108;i:20;i:109;i:0;i:110;i:0;i:111;i:0;i:113;i:0;i:114;i:0;i:115;i:0;i:117;i:0;i:118;i:0;i:120;i:0;i:121;i:0;i:122;i:0;i:123;i:0;i:124;i:0;i:131;i:0;i:132;i:0;i:133;i:0;i:199;i:0;i:601;i:0;i:602;i:0;i:603;i:0;i:604;i:0;i:605;i:0;i:606;i:0;i:607;i:0;i:608;i:0;i:609;i:0;i:610;i:0;i:611;i:0;i:612;i:0;i:613;i:0;i:614;i:0;i:615;i:0;i:921;i:0;s:8:\"username\";s:3:\"Qwa\";s:10:\"authattack\";i:1;}}', 1),
(7, 2, 1, 1, 1385484423, 'a:2:{i:0;a:53:{i:202;s:1:\"0\";i:203;s:1:\"0\";i:204;s:1:\"0\";i:205;s:1:\"0\";i:206;s:1:\"0\";i:207;s:1:\"0\";i:208;s:1:\"1\";i:209;s:1:\"0\";i:210;s:1:\"0\";i:211;s:1:\"0\";i:212;s:1:\"0\";i:213;s:1:\"0\";i:214;s:1:\"0\";i:215;s:1:\"0\";i:216;s:1:\"0\";i:217;s:1:\"0\";i:218;s:8:\"99999997\";i:219;s:1:\"0\";i:220;s:1:\"0\";i:1;s:1:\"8\";i:2;s:1:\"3\";i:3;s:1:\"0\";i:4;s:1:\"1\";i:6;s:1:\"0\";i:12;s:1:\"0\";i:14;s:1:\"0\";i:15;s:1:\"0\";i:21;s:1:\"0\";i:22;s:1:\"0\";i:23;s:1:\"0\";i:24;s:1:\"0\";i:31;s:1:\"0\";i:33;s:1:\"0\";i:34;s:1:\"1\";i:41;s:1:\"0\";i:42;s:1:\"0\";i:43;s:1:\"0\";i:44;s:1:\"0\";i:401;s:1:\"0\";i:402;s:1:\"0\";i:403;s:1:\"0\";i:404;s:1:\"0\";i:405;s:1:\"0\";i:406;s:1:\"0\";i:407;s:1:\"0\";i:408;s:1:\"0\";i:409;s:1:\"0\";i:410;s:1:\"0\";i:411;s:1:\"0\";i:901;s:15:\"99977719.843750\";i:902;s:14:\"9959403.710938\";i:903;s:16:\"999998050.000000\";s:9:\"field_max\";s:3:\"163\";}i:1;a:53:{i:202;i:0;i:203;i:0;i:204;i:0;i:205;i:0;i:206;i:0;i:207;i:0;i:208;d:1;i:209;i:0;i:210;i:0;i:211;i:0;i:212;i:0;i:213;i:0;i:214;i:0;i:215;i:0;i:216;i:0;i:217;i:0;i:218;d:99999997;i:219;i:0;i:220;i:0;i:1;d:8;i:2;d:3;i:3;i:0;i:4;d:1;i:6;i:0;i:12;i:0;i:14;i:0;i:15;i:0;i:21;d:50;i:22;i:0;i:23;i:0;i:24;i:0;i:31;d:50;i:33;i:0;i:34;d:1;i:41;i:0;i:42;i:0;i:43;i:0;i:44;i:0;i:401;i:0;i:402;i:0;i:403;i:0;i:404;i:0;i:405;i:0;i:406;i:0;i:407;i:0;i:408;i:0;i:409;i:0;i:410;i:0;i:411;i:0;i:901;d:99977720;i:902;d:9959404;i:903;d:999998050;s:9:\"field_max\";i:163;}}', 1),
(8, 2, 1, 1, 1385486792, 'a:2:{i:0;a:53:{i:202;s:1:\"0\";i:203;s:1:\"0\";i:204;s:1:\"0\";i:205;s:1:\"0\";i:206;s:1:\"0\";i:207;s:1:\"0\";i:208;s:1:\"1\";i:209;s:1:\"0\";i:210;s:1:\"0\";i:211;s:1:\"0\";i:212;s:1:\"0\";i:213;s:1:\"0\";i:214;s:1:\"0\";i:215;s:1:\"0\";i:216;s:1:\"0\";i:217;s:1:\"0\";i:218;s:8:\"99999997\";i:219;s:1:\"0\";i:220;s:1:\"0\";i:1;s:1:\"8\";i:2;s:1:\"3\";i:3;s:1:\"0\";i:4;s:1:\"1\";i:6;s:1:\"0\";i:12;s:1:\"0\";i:14;s:1:\"0\";i:15;s:1:\"0\";i:21;s:2:\"50\";i:22;s:1:\"0\";i:23;s:1:\"0\";i:24;s:1:\"0\";i:31;s:2:\"50\";i:33;s:1:\"0\";i:34;s:1:\"1\";i:41;s:1:\"0\";i:42;s:1:\"0\";i:43;s:1:\"0\";i:44;s:1:\"0\";i:401;s:1:\"0\";i:402;s:1:\"0\";i:403;s:1:\"0\";i:404;s:1:\"0\";i:405;s:1:\"0\";i:406;s:1:\"0\";i:407;s:1:\"0\";i:408;s:1:\"0\";i:409;s:1:\"0\";i:410;s:1:\"0\";i:411;s:1:\"0\";i:901;s:15:\"99975982.265625\";i:902;s:14:\"9958019.566406\";i:903;s:16:\"999997850.000000\";s:9:\"field_max\";s:3:\"163\";}i:1;a:53:{i:202;i:0;i:203;i:0;i:204;i:0;i:205;i:0;i:206;i:0;i:207;i:0;i:208;d:1;i:209;i:0;i:210;i:0;i:211;i:0;i:212;i:0;i:213;i:0;i:214;i:0;i:215;i:0;i:216;i:0;i:217;i:0;i:218;d:99999997;i:219;i:0;i:220;i:0;i:1;d:8;i:2;d:3;i:3;i:0;i:4;d:1;i:6;i:0;i:12;i:0;i:14;i:0;i:15;i:0;i:21;d:50;i:22;i:0;i:23;i:0;i:24;i:0;i:31;d:50;i:33;i:0;i:34;d:1;i:41;i:0;i:42;i:0;i:43;i:0;i:44;i:0;i:401;i:0;i:402;i:0;i:403;i:0;i:404;i:0;i:405;i:0;i:406;i:0;i:407;i:0;i:408;i:0;i:409;i:0;i:410;i:0;i:411;i:0;i:901;d:999759820000;i:902;d:999759820000;i:903;d:999759820000;s:9:\"field_max\";i:163;}}', 1),
(9, 1, 1, 1, 1386279444, 'a:2:{i:0;a:38:{i:106;s:1:\"3\";i:108;s:2:\"20\";i:109;s:1:\"0\";i:110;s:1:\"0\";i:111;s:1:\"0\";i:113;s:1:\"0\";i:114;s:1:\"0\";i:115;s:1:\"0\";i:117;s:1:\"0\";i:118;s:1:\"0\";i:120;s:1:\"0\";i:121;s:1:\"0\";i:122;s:1:\"0\";i:123;s:1:\"0\";i:124;s:1:\"0\";i:131;s:1:\"0\";i:132;s:1:\"0\";i:133;s:1:\"0\";i:199;s:1:\"0\";i:601;s:1:\"0\";i:602;s:1:\"0\";i:603;s:1:\"0\";i:604;s:1:\"0\";i:605;s:1:\"0\";i:606;s:1:\"0\";i:607;s:1:\"0\";i:608;s:1:\"0\";i:609;s:1:\"0\";i:610;s:1:\"0\";i:611;s:1:\"0\";i:612;s:1:\"0\";i:613;s:1:\"0\";i:614;s:1:\"0\";i:615;s:1:\"0\";i:921;s:1:\"0\";s:8:\"username\";s:3:\"Qwa\";s:10:\"authattack\";s:1:\"0\";s:5:\"multi\";s:1:\"1\";}i:1;a:37:{i:106;i:50;i:108;i:50;i:109;i:50;i:110;i:50;i:111;i:50;i:113;i:50;i:114;i:50;i:115;i:50;i:117;i:50;i:118;i:50;i:120;i:50;i:121;i:50;i:122;i:50;i:123;i:50;i:124;i:50;i:131;i:50;i:132;i:50;i:133;i:50;i:199;i:50;i:601;i:0;i:602;i:0;i:603;i:0;i:604;i:0;i:605;i:0;i:606;i:0;i:607;i:0;i:608;i:0;i:609;i:0;i:610;i:0;i:611;i:0;i:612;i:0;i:613;i:0;i:614;i:0;i:615;i:0;i:921;i:0;s:8:\"username\";s:3:\"Qwa\";s:10:\"authattack\";i:1;}}', 1),
(10, 1, 1, 1, 1389388243, 'a:2:{i:0;a:38:{i:106;s:2:\"50\";i:108;s:2:\"50\";i:109;s:2:\"50\";i:110;s:2:\"50\";i:111;s:2:\"50\";i:113;s:2:\"50\";i:114;s:2:\"50\";i:115;s:2:\"50\";i:117;s:2:\"50\";i:118;s:2:\"50\";i:120;s:2:\"50\";i:121;s:2:\"50\";i:122;s:2:\"50\";i:123;s:2:\"50\";i:124;s:2:\"50\";i:131;s:2:\"50\";i:132;s:2:\"50\";i:133;s:2:\"50\";i:199;s:2:\"50\";i:601;s:1:\"0\";i:602;s:1:\"0\";i:603;s:1:\"0\";i:604;s:1:\"0\";i:605;s:1:\"0\";i:606;s:1:\"0\";i:607;s:1:\"0\";i:608;s:1:\"0\";i:609;s:1:\"0\";i:610;s:1:\"0\";i:611;s:1:\"0\";i:612;s:1:\"0\";i:613;s:1:\"0\";i:614;s:1:\"0\";i:615;s:1:\"0\";i:921;s:1:\"0\";s:8:\"username\";s:3:\"Qwa\";s:10:\"authattack\";s:1:\"0\";s:5:\"multi\";s:1:\"1\";}i:1;a:37:{i:106;i:50;i:108;i:50;i:109;i:50;i:110;i:50;i:111;i:50;i:113;i:50;i:114;i:50;i:115;i:50;i:117;i:50;i:118;i:50;i:120;i:50;i:121;i:50;i:122;i:50;i:123;i:50;i:124;i:50;i:131;i:50;i:132;i:50;i:133;i:50;i:199;i:50;i:601;i:0;i:602;i:0;i:603;i:0;i:604;i:0;i:605;i:0;i:606;i:0;i:607;i:0;i:608;i:0;i:609;i:0;i:610;i:0;i:611;i:0;i:612;i:0;i:613;i:0;i:614;i:0;i:615;i:0;i:921;i:2147483647;s:8:\"username\";s:3:\"Qwa\";s:10:\"authattack\";i:1;}}', 1),
(11, 3, 1, 1, 1389565080, 'a:2:{i:0;a:65:{s:18:\"noobprotectiontime\";s:4:\"5000\";s:19:\"noobprotectionmulti\";s:1:\"5\";s:14:\"noobprotection\";s:1:\"0\";s:8:\"Defs_Cdr\";s:1:\"0\";s:9:\"Fleet_Cdr\";s:2:\"30\";s:12:\"game_disable\";s:1:\"1\";s:12:\"close_reason\";s:26:\"O jogo encontra-se fechado\";s:17:\"OverviewNewsFrame\";s:1:\"1\";s:10:\"reg_closed\";s:1:\"0\";s:16:\"OverviewNewsText\";s:24:\"Bem vindo ao 2Moons v1.7\";s:8:\"uni_name\";s:10:\"Universo 1\";s:9:\"forum_url\";s:16:\"http://2moons.cc\";s:10:\"game_speed\";s:4:\"2500\";s:11:\"fleet_speed\";s:4:\"2500\";s:19:\"resource_multiplier\";s:1:\"1\";s:10:\"halt_speed\";s:1:\"1\";s:11:\"energySpeed\";s:1:\"1\";s:14:\"initial_fields\";s:3:\"163\";s:18:\"metal_basic_income\";s:2:\"20\";s:20:\"crystal_basic_income\";s:2:\"10\";s:22:\"deuterium_basic_income\";s:1:\"0\";s:5:\"debug\";s:1:\"0\";s:10:\"adm_attack\";s:1:\"0\";s:4:\"lang\";s:2:\"pt\";s:14:\"min_build_time\";s:1:\"1\";s:10:\"user_valid\";s:1:\"0\";s:12:\"trade_charge\";s:2:\"30\";s:19:\"trade_allowed_ships\";s:7:\"202,401\";s:9:\"game_name\";s:6:\"2Moons\";s:8:\"capaktiv\";s:1:\"0\";s:10:\"capprivate\";s:0:\"\";s:9:\"cappublic\";s:0:\"\";s:10:\"max_galaxy\";s:1:\"9\";s:10:\"max_system\";s:3:\"400\";s:11:\"max_planets\";s:2:\"15\";s:18:\"min_player_planets\";s:1:\"9\";s:12:\"planets_tech\";s:2:\"11\";s:16:\"planets_officier\";s:1:\"5\";s:16:\"planets_per_tech\";s:3:\"0.5\";s:13:\"planet_factor\";s:3:\"1.0\";s:18:\"max_elements_build\";s:1:\"5\";s:17:\"max_elements_tech\";s:1:\"2\";s:18:\"max_elements_ships\";s:2:\"10\";s:19:\"max_fleet_per_build\";s:7:\"1000000\";s:12:\"max_overflow\";s:3:\"1.0\";s:11:\"moon_factor\";s:3:\"1.0\";s:11:\"moon_chance\";s:2:\"20\";s:22:\"darkmatter_cost_trader\";s:3:\"750\";s:17:\"factor_university\";s:1:\"8\";s:18:\"max_fleets_per_acs\";s:2:\"16\";s:14:\"vmode_min_time\";s:6:\"259200\";s:14:\"gate_wait_time\";s:4:\"3600\";s:11:\"metal_start\";s:3:\"500\";s:13:\"crystal_start\";s:3:\"500\";s:15:\"deuterium_start\";s:1:\"0\";s:16:\"darkmatter_start\";s:1:\"0\";s:11:\"debris_moon\";s:1:\"1\";s:21:\"deuterium_cost_galaxy\";s:2:\"10\";s:10:\"ref_active\";s:1:\"0\";s:9:\"ref_bonus\";s:4:\"1000\";s:13:\"ref_minpoints\";s:4:\"2000\";s:16:\"ref_max_referals\";s:1:\"5\";s:11:\"silo_factor\";s:1:\"1\";s:15:\"max_dm_missions\";s:1:\"1\";s:26:\"alliance_create_min_points\";s:1:\"0\";}i:1;a:61:{s:18:\"noobprotectiontime\";i:5000;s:19:\"noobprotectionmulti\";i:5;s:14:\"noobprotection\";i:0;s:8:\"Defs_Cdr\";i:0;s:9:\"Fleet_Cdr\";i:30;s:12:\"game_disable\";i:1;s:12:\"close_reason\";s:26:\"O jogo encontra-se fechado\";s:17:\"OverviewNewsFrame\";i:1;s:10:\"reg_closed\";i:0;s:16:\"OverviewNewsText\";s:24:\"Bem vindo ao 2Moons v1.7\";s:8:\"uni_name\";s:10:\"Universo 1\";s:9:\"forum_url\";s:16:\"http://2moons.cc\";s:10:\"game_speed\";d:2500;s:11:\"fleet_speed\";d:2500;s:19:\"resource_multiplier\";d:1;s:10:\"halt_speed\";d:1;s:11:\"energySpeed\";d:1;s:14:\"initial_fields\";i:163;s:18:\"metal_basic_income\";i:20;s:20:\"crystal_basic_income\";i:10;s:22:\"deuterium_basic_income\";i:0;s:5:\"debug\";i:0;s:10:\"adm_attack\";i:0;s:4:\"lang\";s:2:\"en\";s:14:\"min_build_time\";i:1;s:10:\"user_valid\";i:0;s:12:\"trade_charge\";d:30;s:19:\"trade_allowed_ships\";s:7:\"202,401\";s:10:\"max_galaxy\";i:9;s:10:\"max_system\";i:400;s:11:\"max_planets\";i:15;s:18:\"min_player_planets\";i:9;s:12:\"planets_tech\";i:11;s:16:\"planets_officier\";i:5;s:16:\"planets_per_tech\";d:0.5;s:13:\"planet_factor\";d:1;s:18:\"max_elements_build\";i:5;s:17:\"max_elements_tech\";i:2;s:18:\"max_elements_ships\";i:10;s:19:\"max_fleet_per_build\";d:1000000;s:12:\"max_overflow\";i:1;s:11:\"moon_factor\";d:1;s:11:\"moon_chance\";i:20;s:22:\"darkmatter_cost_trader\";i:750;s:17:\"factor_university\";i:8;s:18:\"max_fleets_per_acs\";i:16;s:14:\"vmode_min_time\";i:259200;s:14:\"gate_wait_time\";i:3600;s:11:\"metal_start\";i:500;s:13:\"crystal_start\";i:500;s:15:\"deuterium_start\";i:0;s:16:\"darkmatter_start\";i:0;s:11:\"debris_moon\";i:1;s:21:\"deuterium_cost_galaxy\";i:10;s:10:\"ref_active\";i:1;s:9:\"ref_bonus\";i:1000;s:13:\"ref_minpoints\";i:2000;s:16:\"ref_max_referals\";i:5;s:11:\"silo_factor\";i:1;s:15:\"max_dm_missions\";i:1;s:26:\"alliance_create_min_points\";i:0;}}', 1);
			
/*!40000 ALTER TABLE `uni1_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_log_fleets`
--

DROP TABLE IF EXISTS `uni1_log_fleets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_log_fleets` (
  `fleet_id` bigint(11) unsigned NOT NULL,
  `fleet_owner` int(11) unsigned NOT NULL DEFAULT '0',
  `fleet_mission` tinyint(3) unsigned NOT NULL DEFAULT '3',
  `fleet_amount` bigint(20) unsigned NOT NULL DEFAULT '0',
  `fleet_array` text,
  `fleet_universe` tinyint(3) unsigned NOT NULL,
  `fleet_start_time` int(11) NOT NULL DEFAULT '0',
  `fleet_start_id` int(11) unsigned NOT NULL,
  `fleet_start_galaxy` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_start_system` smallint(5) unsigned NOT NULL DEFAULT '0',
  `fleet_start_planet` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_start_type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fleet_end_time` int(11) NOT NULL DEFAULT '0',
  `fleet_end_stay` int(11) NOT NULL DEFAULT '0',
  `fleet_end_id` int(11) unsigned NOT NULL,
  `fleet_end_galaxy` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_end_system` smallint(5) unsigned NOT NULL DEFAULT '0',
  `fleet_end_planet` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_end_type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fleet_target_obj` smallint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_resource_metal` double(50,0) unsigned NOT NULL DEFAULT '0',
  `fleet_resource_crystal` double(50,0) unsigned NOT NULL DEFAULT '0',
  `fleet_resource_deuterium` double(50,0) unsigned NOT NULL DEFAULT '0',
  `fleet_resource_darkmatter` double(50,0) unsigned NOT NULL DEFAULT '0',
  `fleet_target_owner` int(11) unsigned NOT NULL DEFAULT '0',
  `fleet_group` varchar(15) NOT NULL DEFAULT '0',
  `fleet_mess` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `start_time` int(11) DEFAULT NULL,
  `fleet_busy` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_state` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fleet_id`),
  KEY `BashRule` (`fleet_owner`,`fleet_end_id`,`fleet_start_time`,`fleet_mission`,`fleet_state`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_log_fleets`
--

LOCK TABLES `uni1_log_fleets` WRITE;
/*!40000 ALTER TABLE `uni1_log_fleets` DISABLE KEYS */;

INSERT INTO `uni1_log_fleets` (`fleet_id`, `fleet_owner`, `fleet_mission`, `fleet_amount`, `fleet_array`, `fleet_universe`, `fleet_start_time`, `fleet_start_id`, `fleet_start_galaxy`, `fleet_start_system`, `fleet_start_planet`, `fleet_start_type`, `fleet_end_time`, `fleet_end_stay`, `fleet_end_id`, `fleet_end_galaxy`, `fleet_end_system`, `fleet_end_planet`, `fleet_end_type`, `fleet_target_obj`, `fleet_resource_metal`, `fleet_resource_crystal`, `fleet_resource_deuterium`, `fleet_resource_darkmatter`, `fleet_target_owner`, `fleet_group`, `fleet_mess`, `start_time`, `fleet_busy`, `fleet_state`) VALUES
(1, 2, 1, 1, '218,1', 1, 1385251007, 11, 1, 1, 3, 1, 1385436403, 1385251007, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 1, '0', 0, 1385065611, 0, 0),
(2, 1, 1, 1, '218,1', 1, 1385304206, 1, 1, 1, 1, 1, 1385526680, 1385304206, 11, 1, 1, 3, 1, 0, 0, 0, 0, 0, 2, '0', 0, 1385081733, 0, 2),
(3, 1, 5, 1, '218,1', 1, 1385304287, 1, 1, 1, 1, 1, 1385530361, 1385307887, 11, 1, 1, 3, 1, 0, 1, 0, 0, 0, 2, '0', 0, 1385081814, 0, 0),
(4, 1, 3, 1, '218,1', 1, 1385304321, 1, 1, 1, 1, 1, 1385526795, 1385304321, 11, 1, 1, 3, 1, 0, 1, 0, 0, 0, 2, '0', 0, 1385081848, 0, 0),
(5, 1, 7, 1, '208,1', 1, 1388887281, 1, 1, 1, 1, 1, 1388889444, 1388887281, 0, 1, 1, 9, 1, 0, 0, 0, 0, 0, 0, '0', 0, 1388885119, 0, 0);
			
/*!40000 ALTER TABLE `uni1_log_fleets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_lostpassword`
--

DROP TABLE IF EXISTS `uni1_lostpassword`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_lostpassword` (
  `userID` int(10) unsigned NOT NULL,
  `key` varchar(32) NOT NULL,
  `time` int(10) unsigned NOT NULL,
  `hasChanged` tinyint(1) NOT NULL DEFAULT '0',
  `fromIP` varchar(40) NOT NULL,
  PRIMARY KEY (`key`),
  UNIQUE KEY `userID` (`userID`,`key`,`time`,`hasChanged`),
  KEY `time` (`time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_lostpassword`
--

--
-- Table structure for table `uni1_messages`
--

DROP TABLE IF EXISTS `uni1_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_messages` (
  `message_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `message_owner` int(11) unsigned NOT NULL DEFAULT '0',
  `message_sender` int(11) unsigned NOT NULL DEFAULT '0',
  `message_time` int(11) NOT NULL DEFAULT '0',
  `message_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `message_from` varchar(128) DEFAULT NULL,
  `message_subject` varchar(255) DEFAULT NULL,
  `message_text` text,
  `message_unread` tinyint(4) NOT NULL DEFAULT '1',
  `message_universe` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`message_id`),
  KEY `message_sender` (`message_sender`),
  KEY `message_owner` (`message_owner`,`message_type`,`message_unread`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_messages`
--

--
-- Table structure for table `uni1_multi`
--

DROP TABLE IF EXISTS `uni1_multi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_multi` (
  `multiID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  PRIMARY KEY (`multiID`),
  KEY `userID` (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_multi`
--

LOCK TABLES `uni1_multi` WRITE;
/*!40000 ALTER TABLE `uni1_multi` DISABLE KEYS */;

INSERT INTO `uni1_multi` (`multiID`, `userID`) VALUES
(1, 2),
(2, 1);
			
/*!40000 ALTER TABLE `uni1_multi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_news`
--

DROP TABLE IF EXISTS `uni1_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(64) NOT NULL,
  `date` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_news`
--

--
-- Table structure for table `uni1_notes`
--

DROP TABLE IF EXISTS `uni1_notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` int(11) unsigned DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `priority` tinyint(1) unsigned DEFAULT '1',
  `title` varchar(32) DEFAULT NULL,
  `text` text,
  `universe` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `universe` (`universe`),
  KEY `owner` (`owner`,`time`,`priority`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_notes`
--

--
-- Table structure for table `uni1_planets`
--

DROP TABLE IF EXISTS `uni1_planets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_planets` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT 'Hauptplanet',
  `id_owner` int(11) unsigned DEFAULT NULL,
  `universe` tinyint(3) unsigned NOT NULL,
  `galaxy` tinyint(3) NOT NULL DEFAULT '0',
  `system` smallint(5) NOT NULL DEFAULT '0',
  `planet` tinyint(3) NOT NULL DEFAULT '0',
  `last_update` int(11) DEFAULT NULL,
  `planet_type` enum('1','3') NOT NULL DEFAULT '1',
  `destruyed` int(11) NOT NULL DEFAULT '0',
  `b_building` int(11) NOT NULL DEFAULT '0',
  `b_building_id` text,
  `b_hangar` int(11) NOT NULL DEFAULT '0',
  `b_hangar_id` text,
  `b_hangar_plus` int(11) NOT NULL DEFAULT '0',
  `image` varchar(32) NOT NULL DEFAULT 'normaltempplanet01',
  `diameter` int(11) unsigned NOT NULL DEFAULT '12800',
  `field_current` smallint(5) unsigned NOT NULL DEFAULT '0',
  `field_max` smallint(5) unsigned NOT NULL DEFAULT '163',
  `temp_min` int(3) NOT NULL DEFAULT '-17',
  `temp_max` int(3) NOT NULL DEFAULT '23',
  `eco_hash` varchar(32) NOT NULL DEFAULT '',
  `metal` double(50,6) unsigned NOT NULL DEFAULT '0.000000',
  `metal_perhour` double(50,6) NOT NULL DEFAULT '0.000000',
  `metal_max` double(50,0) unsigned DEFAULT '100000',
  `crystal` double(50,6) unsigned NOT NULL DEFAULT '0.000000',
  `crystal_perhour` double(50,6) NOT NULL DEFAULT '0.000000',
  `crystal_max` double(50,0) unsigned DEFAULT '100000',
  `deuterium` double(50,6) unsigned NOT NULL DEFAULT '0.000000',
  `deuterium_perhour` double(50,6) NOT NULL DEFAULT '0.000000',
  `deuterium_max` double(50,0) unsigned DEFAULT '100000',
  `energy_used` double(50,0) NOT NULL DEFAULT '0',
  `energy` double(50,0) unsigned NOT NULL DEFAULT '0',
  `metal_mine` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `crystal_mine` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `deuterium_sintetizer` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `solar_plant` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fusion_plant` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `robot_factory` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `nano_factory` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `hangar` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `metal_store` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `crystal_store` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `deuterium_store` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `laboratory` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `terraformer` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `university` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ally_deposit` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `silo` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `mondbasis` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `phalanx` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `sprungtor` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `small_ship_cargo` bigint(20) unsigned NOT NULL DEFAULT '0',
  `big_ship_cargo` bigint(20) unsigned NOT NULL DEFAULT '0',
  `light_hunter` bigint(20) unsigned NOT NULL DEFAULT '0',
  `heavy_hunter` bigint(20) unsigned NOT NULL DEFAULT '0',
  `crusher` bigint(20) unsigned NOT NULL DEFAULT '0',
  `battle_ship` bigint(20) unsigned NOT NULL DEFAULT '0',
  `colonizer` bigint(20) unsigned NOT NULL DEFAULT '0',
  `recycler` bigint(20) unsigned NOT NULL DEFAULT '0',
  `spy_sonde` bigint(20) unsigned NOT NULL DEFAULT '0',
  `bomber_ship` bigint(20) unsigned NOT NULL DEFAULT '0',
  `solar_satelit` bigint(20) unsigned NOT NULL DEFAULT '0',
  `destructor` bigint(20) unsigned NOT NULL DEFAULT '0',
  `dearth_star` bigint(20) unsigned NOT NULL DEFAULT '0',
  `battleship` bigint(20) unsigned NOT NULL DEFAULT '0',
  `lune_noir` bigint(20) unsigned NOT NULL DEFAULT '0',
  `ev_transporter` bigint(20) unsigned NOT NULL DEFAULT '0',
  `star_crasher` bigint(20) unsigned NOT NULL DEFAULT '0',
  `giga_recykler` bigint(20) unsigned NOT NULL DEFAULT '0',
  `dm_ship` bigint(20) NOT NULL DEFAULT '0',
  `orbital_station` bigint(20) unsigned NOT NULL DEFAULT '0',
  `misil_launcher` bigint(20) unsigned NOT NULL DEFAULT '0',
  `small_laser` bigint(20) unsigned NOT NULL DEFAULT '0',
  `big_laser` bigint(20) unsigned NOT NULL DEFAULT '0',
  `gauss_canyon` bigint(20) unsigned NOT NULL DEFAULT '0',
  `ionic_canyon` bigint(20) unsigned NOT NULL DEFAULT '0',
  `buster_canyon` bigint(20) unsigned NOT NULL DEFAULT '0',
  `small_protection_shield` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `planet_protector` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `big_protection_shield` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `graviton_canyon` bigint(20) unsigned NOT NULL DEFAULT '0',
  `interceptor_misil` bigint(20) unsigned NOT NULL DEFAULT '0',
  `interplanetary_misil` bigint(20) unsigned NOT NULL DEFAULT '0',
  `metal_mine_porcent` enum('0','1','2','3','4','5','6','7','8','9','10') NOT NULL DEFAULT '10',
  `crystal_mine_porcent` enum('0','1','2','3','4','5','6','7','8','9','10') NOT NULL DEFAULT '10',
  `deuterium_sintetizer_porcent` enum('0','1','2','3','4','5','6','7','8','9','10') NOT NULL DEFAULT '10',
  `solar_plant_porcent` enum('0','1','2','3','4','5','6','7','8','9','10') NOT NULL DEFAULT '10',
  `fusion_plant_porcent` enum('0','1','2','3','4','5','6','7','8','9','10') NOT NULL DEFAULT '10',
  `solar_satelit_porcent` enum('0','1','2','3','4','5','6','7','8','9','10') NOT NULL DEFAULT '10',
  `last_jump_time` int(11) NOT NULL DEFAULT '0',
  `der_metal` double(50,0) unsigned NOT NULL DEFAULT '0',
  `der_crystal` double(50,0) unsigned NOT NULL DEFAULT '0',
  `id_luna` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_luna` (`id_luna`),
  KEY `id_owner` (`id_owner`),
  KEY `destruyed` (`destruyed`),
  KEY `universe` (`universe`,`galaxy`,`system`,`planet`,`planet_type`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_planets`
--

LOCK TABLES `uni1_planets` WRITE;
/*!40000 ALTER TABLE `uni1_planets` DISABLE KEYS */;

INSERT INTO `uni1_planets` (`id`, `name`, `id_owner`, `universe`, `galaxy`, `system`, `planet`, `last_update`, `planet_type`, `destruyed`, `b_building`, `b_building_id`, `b_hangar`, `b_hangar_id`, `b_hangar_plus`, `image`, `diameter`, `field_current`, `field_max`, `temp_min`, `temp_max`, `eco_hash`, `metal`, `metal_perhour`, `metal_max`, `crystal`, `crystal_perhour`, `crystal_max`, `deuterium`, `deuterium_perhour`, `deuterium_max`, `energy_used`, `energy`, `metal_mine`, `crystal_mine`, `deuterium_sintetizer`, `solar_plant`, `fusion_plant`, `robot_factory`, `nano_factory`, `hangar`, `metal_store`, `crystal_store`, `deuterium_store`, `laboratory`, `terraformer`, `university`, `ally_deposit`, `silo`, `mondbasis`, `phalanx`, `sprungtor`, `small_ship_cargo`, `big_ship_cargo`, `light_hunter`, `heavy_hunter`, `crusher`, `battle_ship`, `colonizer`, `recycler`, `spy_sonde`, `bomber_ship`, `solar_satelit`, `destructor`, `dearth_star`, `battleship`, `lune_noir`, `ev_transporter`, `star_crasher`, `giga_recykler`, `dm_ship`, `orbital_station`, `misil_launcher`, `small_laser`, `big_laser`, `gauss_canyon`, `ionic_canyon`, `buster_canyon`, `small_protection_shield`, `planet_protector`, `big_protection_shield`, `graviton_canyon`, `interceptor_misil`, `interplanetary_misil`, `metal_mine_porcent`, `crystal_mine_porcent`, `deuterium_sintetizer_porcent`, `solar_plant_porcent`, `fusion_plant_porcent`, `solar_satelit_porcent`, `last_jump_time`, `der_metal`, `der_crystal`, `id_luna`) VALUES
(1, 'Main Planet', 1, 1, 1, 1, 1, 1389643085, '1', 0, 0, '', 83249, 'a:1:{i:0;a:2:{i:0;i:220;i:1;d:1;}}', 0, 'wuestenplanet04', 9797, 118, 163, 183, 223, 'fb7da938147032cfd5fd05a5fb3cb45e', 999738788328.890000, 3759.523352, 10000, 999317454481.970000, 159.720000, 10000, 999127442580.000000, 0.000000, 10000, -667, 6469, 15, 3, 0, 1, 0, 0, 0, 50, 0, 0, 0, 50, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 101, 0, 0, 0, 0, 0, 99999999, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, '10', '10', '10', '10', '10', '10', 0, 0, 0, 0),
(2, 'Colony', 1, 1, 1, 1, 2, 1389563144, '1', 0, 0, '', 0, '', 0, 'trockenplanet01', 10344, 0, 50000, 141, 181, '', 10000.000000, 0.000000, 10000, 10000.000000, 0.000000, 10000, 0.000000, 0.000000, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '10', '10', '10', '10', '10', '10', 0, 0, 0, 0),
(3, 'Colony', 1, 1, 2, 1, 1, 1389563144, '1', 0, 0, '', 0, '', 0, 'trockenplanet02', 10344, 0, 10000, 194, 234, '', 10000.000000, 0.000000, 10000, 10000.000000, 0.000000, 10000, 0.000000, 0.000000, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '10', '10', '10', '10', '10', '10', 0, 0, 0, 0),
(4, 'Planet', 1, 1, 3, 1, 1, 1389563144, '1', 0, 0, '', 0, '', 0, 'wuestenplanet01', 10099, 0, 102, 209, 249, '', 10000.000000, 0.000000, 10000, 10000.000000, 0.000000, 10000, 0.000000, 0.000000, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '10', '10', '10', '10', '10', '10', 0, 0, 0, 0),
(5, 'Colony', 1, 1, 4, 1, 1, 1389563144, '1', 0, 0, '', 0, '', 0, 'wuestenplanet02', 10000, 0, 0, 219, 259, '', 10000.000000, 0.000000, 10000, 10000.000000, 0.000000, 10000, 0.000000, 0.000000, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '10', '10', '10', '10', '10', '10', 0, 0, 0, 0),
(6, 'Colony', 1, 1, 5, 1, 1, 1389563144, '1', 0, 0, '', 0, '', 0, 'wuestenplanet04', 10099, 0, 0, 212, 252, '', 10000.000000, 0.000000, 10000, 10000.000000, 0.000000, 10000, 0.000000, 0.000000, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '10', '10', '10', '10', '10', '10', 0, 0, 0, 0),
(7, 'Colony', 1, 1, 6, 1, 1, 1389563144, '1', 0, 0, '', 0, '', 0, 'trockenplanet08', 10099, 0, 0, 203, 243, '', 10000.000000, 0.000000, 10000, 10000.000000, 0.000000, 10000, 0.000000, 0.000000, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '10', '10', '10', '10', '10', '10', 0, 0, 0, 0),
(8, 'Colony', 1, 1, 7, 1, 1, 1389563144, '1', 0, 0, '', 0, '', 0, 'wuestenplanet03', 10198, 0, 0, 198, 238, '', 10000.000000, 0.000000, 10000, 10000.000000, 0.000000, 10000, 0.000000, 0.000000, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '10', '10', '10', '10', '10', '10', 0, 0, 0, 0),
(9, 'Colony', 1, 1, 8, 1, 1, 1389563144, '1', 0, 0, '', 0, '', 0, 'wuestenplanet02', 10392, 0, 0, 189, 229, '', 10000.000000, 0.000000, 10000, 10000.000000, 0.000000, 10000, 0.000000, 0.000000, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '10', '10', '10', '10', '10', '10', 0, 0, 0, 0),
(10, 'Colony', 1, 1, 9, 1, 1, 1389563144, '1', 0, 0, '', 0, '', 0, 'trockenplanet10', 10049, 0, 0, 185, 225, '', 10000.000000, 0.000000, 10000, 10000.000000, 0.000000, 10000, 0.000000, 0.000000, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '10', '10', '10', '10', '10', '10', 0, 0, 0, 0),
(12, 'Colony', 1, 1, 1, 1, 9, 1389563144, '1', 0, 0, '', 0, '', 0, 'wasserplanet04', 13747, 0, 189, 19, 59, '', 4251.805555, 0.000000, 10000, 2375.902778, 0.000000, 10000, 0.000000, 0.000000, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '10', '10', '10', '10', '10', '10', 0, 0, 0, 0),
(13, 'Planet', 3, 1, 1, 1, 8, 1389563100, '1', 0, 0, NULL, 0, NULL, 0, 'normaltempplanet05', 13114, 0, 163, -1, 39, '', 500.000000, 20.000000, 100000, 500.000000, 10.000000, 100000, 0.000000, 0.000000, 100000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '10', '10', '10', '10', '10', '10', 0, 0, 0, 0);
			
/*!40000 ALTER TABLE `uni1_planets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_raports`
--

DROP TABLE IF EXISTS `uni1_raports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_raports` (
  `rid` varchar(32) NOT NULL,
  `raport` text NOT NULL,
  `time` int(11) NOT NULL,
  `attacker` varchar(255) NOT NULL DEFAULT '',
  `defender` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `time` (`time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_raports`
--

LOCK TABLES `uni1_raports` WRITE;
/*!40000 ALTER TABLE `uni1_raports` DISABLE KEYS */;

INSERT INTO `uni1_raports` (`rid`, `raport`, `time`, `attacker`, `defender`) VALUES
('648318ca8999ea4242f4692a917fd633', 'a:12:{s:4:\"mode\";i:0;s:4:\"time\";s:10:\"1385304206\";s:5:\"start\";a:4:{i:0;s:1:\"1\";i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";}s:6:\"koords\";a:4:{i:0;s:1:\"1\";i:1;s:1:\"1\";i:2;s:1:\"3\";i:3;s:1:\"1\";}s:5:\"units\";a:2:{i:0;d:405000000;i:1;d:0;}s:6:\"debris\";a:2:{i:901;d:82500000;i:902;d:39000000;}s:5:\"steal\";a:3:{i:901;i:0;i:902;i:0;i:903;i:0;}s:6:\"result\";s:1:\"r\";s:4:\"moon\";a:6:{s:8:\"moonName\";N;s:10:\"moonChance\";i:20;s:17:\"moonDestroyChance\";i:0;s:18:\"moonDestroySuccess\";i:0;s:18:\"fleetDestroyChance\";i:0;s:19:\"fleetDestroySuccess\";i:0;}s:14:\"additionalInfo\";s:0:\"\";s:7:\"players\";a:2:{i:1;a:3:{s:4:\"name\";s:3:\"Qwa\";s:6:\"koords\";a:4:{i:0;s:1:\"1\";i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";}s:4:\"tech\";a:3:{i:0;d:100;i:1;d:100;i:2;d:100;}}i:2;a:3:{s:4:\"name\";s:4:\"Test\";s:6:\"koords\";a:4:{i:0;s:1:\"1\";i:1;s:1:\"1\";i:2;s:1:\"3\";i:3;s:1:\"1\";}s:4:\"tech\";a:3:{i:0;d:100;i:1;d:100;i:2;d:100;}}}s:6:\"rounds\";a:2:{i:0;a:3:{s:8:\"attacker\";a:1:{i:0;a:2:{s:6:\"userID\";s:1:\"1\";s:5:\"ships\";a:1:{i:218;a:4:{i:0;i:1;i:1;d:29050000;i:2;d:2000000;i:3;d:40500000;}}}}s:8:\"defender\";a:1:{i:0;a:2:{s:6:\"userID\";s:1:\"2\";s:5:\"ships\";a:1:{i:218;a:4:{i:0;s:13:\"1000000000000\";i:1;d:36400000000000000000;i:2;d:2000000000000000000;i:3;d:40500000000000000000;}}}}s:4:\"info\";a:4:{i:0;d:29050000;i:1;d:2000000;i:2;d:36400000000000000000;i:3;d:29050000;}}i:1;a:2:{s:8:\"attacker\";a:1:{i:0;a:2:{s:6:\"userID\";s:1:\"1\";s:5:\"ships\";a:0:{}}}s:8:\"defender\";a:1:{i:0;a:2:{s:6:\"userID\";s:1:\"2\";s:5:\"ships\";a:1:{i:218;a:4:{i:0;d:1000000000000;i:1;d:31500000000000000000;i:2;d:2000000000000000000;i:3;d:40500000000000000000;}}}}}}}', 1385304206, '1', '2');
			
/*!40000 ALTER TABLE `uni1_raports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_records`
--

DROP TABLE IF EXISTS `uni1_records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_records` (
  `userID` int(10) unsigned NOT NULL,
  `elementID` smallint(5) unsigned NOT NULL,
  `level` bigint(20) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_records`
--

LOCK TABLES `uni1_records` WRITE;
/*!40000 ALTER TABLE `uni1_records` DISABLE KEYS */;

INSERT INTO `uni1_records` (`userID`, `elementID`, `level`) VALUES
(1, 1, 14),
(1, 2, 3),
(1, 4, 1),
(1, 21, 50),
(1, 31, 50),
(1, 34, 1),
(1, 106, 50),
(1, 108, 50),
(1, 109, 50),
(1, 110, 50),
(1, 111, 50),
(1, 113, 50),
(1, 114, 50),
(1, 115, 50),
(1, 117, 50),
(1, 118, 50),
(1, 120, 50),
(1, 121, 50),
(1, 122, 50),
(1, 123, 50),
(1, 124, 50),
(1, 131, 50),
(1, 132, 50),
(1, 133, 50),
(1, 199, 50),
(1, 212, 101),
(1, 218, 99999999),
(1, 401, 1),
(1, 410, 1);
			
/*!40000 ALTER TABLE `uni1_records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_session`
--

DROP TABLE IF EXISTS `uni1_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_session` (
  `sessionID` varchar(32) NOT NULL,
  `userID` int(10) unsigned NOT NULL,
  `userIP` varchar(40) NOT NULL,
  `lastonline` int(11) NOT NULL,
  PRIMARY KEY (`userID`),
  KEY `sessionID` (`sessionID`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_session`
--

LOCK TABLES `uni1_session` WRITE;
/*!40000 ALTER TABLE `uni1_session` DISABLE KEYS */;

INSERT INTO `uni1_session` (`sessionID`, `userID`, `userIP`, `lastonline`) VALUES
('2ps6a0lr3uv81ikmga6hemfhc1', 1, '::1', 1389643085);
			
/*!40000 ALTER TABLE `uni1_session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_shortcuts`
--

DROP TABLE IF EXISTS `uni1_shortcuts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_shortcuts` (
  `shortcutID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ownerID` int(10) unsigned NOT NULL,
  `name` varchar(32) NOT NULL,
  `galaxy` tinyint(3) unsigned NOT NULL,
  `system` smallint(5) unsigned NOT NULL,
  `planet` tinyint(3) unsigned NOT NULL,
  `type` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`shortcutID`),
  KEY `ownerID` (`ownerID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_shortcuts`
--

--
-- Table structure for table `uni1_statpoints`
--

DROP TABLE IF EXISTS `uni1_statpoints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_statpoints` (
  `id_owner` int(11) unsigned NOT NULL DEFAULT '0',
  `id_ally` int(11) unsigned NOT NULL DEFAULT '0',
  `stat_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `universe` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `tech_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `tech_old_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `tech_points` double(50,0) unsigned NOT NULL DEFAULT '0',
  `tech_count` bigint(20) unsigned NOT NULL DEFAULT '0',
  `build_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `build_old_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `build_points` double(50,0) unsigned NOT NULL DEFAULT '0',
  `build_count` bigint(20) unsigned NOT NULL DEFAULT '0',
  `defs_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `defs_old_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `defs_points` double(50,0) unsigned NOT NULL DEFAULT '0',
  `defs_count` bigint(20) unsigned NOT NULL DEFAULT '0',
  `fleet_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `fleet_old_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `fleet_points` double(50,0) unsigned NOT NULL DEFAULT '0',
  `fleet_count` bigint(20) unsigned NOT NULL DEFAULT '0',
  `total_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `total_old_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `total_points` double(50,0) unsigned NOT NULL DEFAULT '0',
  `total_count` bigint(20) unsigned NOT NULL DEFAULT '0',
  KEY `id_owner` (`id_owner`),
  KEY `universe` (`universe`),
  KEY `stat_type` (`stat_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_statpoints`
--

LOCK TABLES `uni1_statpoints` WRITE;
/*!40000 ALTER TABLE `uni1_statpoints` DISABLE KEYS */;

INSERT INTO `uni1_statpoints` (`id_owner`, `id_ally`, `stat_type`, `universe`, `tech_rank`, `tech_old_rank`, `tech_points`, `tech_count`, `build_rank`, `build_old_rank`, `build_points`, `build_count`, `defs_rank`, `defs_old_rank`, `defs_points`, `defs_count`, `fleet_rank`, `fleet_old_rank`, `fleet_points`, `fleet_count`, `total_rank`, `total_old_rank`, `total_points`, `total_count`) VALUES
(1, 1, 1, 1, 1, 1, 1962383913883100000, 950, 1, 1, 3377699720528100, 119, 1, 1, 30002, 2, 1, 1, 46499999535252, 100000100, 1, 1, 1965808113603200000, 100001171),
(3, 0, 1, 1, 2, 2, 0, 0, 2, 2, 0, 0, 2, 2, 0, 0, 2, 2, 0, 0, 2, 2, 0, 0),
(1, 0, 2, 1, 1, 0, 1962383913883100000, 950, 1, 1, 3377699720528100, 119, 1, 1, 30002, 2, 1, 1, 46499999535252, 100000100, 1, 1, 1965808113603200000, 100001171);
			
/*!40000 ALTER TABLE `uni1_statpoints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_ticket`
--

DROP TABLE IF EXISTS `uni1_ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_ticket` (
  `ticketID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `universe` tinyint(3) unsigned NOT NULL,
  `ownerID` int(10) unsigned NOT NULL,
  `categoryID` tinyint(1) unsigned NOT NULL,
  `subject` varchar(255) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ticketID`),
  KEY `ownerID` (`ownerID`),
  KEY `universe` (`universe`,`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_ticket`
--

--
-- Table structure for table `uni1_ticket_answer`
--

DROP TABLE IF EXISTS `uni1_ticket_answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_ticket_answer` (
  `answerID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ownerID` int(10) unsigned NOT NULL,
  `ownerName` varchar(32) NOT NULL,
  `ticketID` int(10) unsigned NOT NULL,
  `time` int(10) unsigned NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  PRIMARY KEY (`answerID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_ticket_answer`
--

--
-- Table structure for table `uni1_ticket_category`
--

DROP TABLE IF EXISTS `uni1_ticket_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_ticket_category` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_ticket_category`
--

LOCK TABLES `uni1_ticket_category` WRITE;
/*!40000 ALTER TABLE `uni1_ticket_category` DISABLE KEYS */;

INSERT INTO `uni1_ticket_category` (`categoryID`, `name`) VALUES
(1, 'Support');
			
/*!40000 ALTER TABLE `uni1_ticket_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_topkb`
--

DROP TABLE IF EXISTS `uni1_topkb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_topkb` (
  `rid` varchar(32) NOT NULL,
  `units` double(50,0) unsigned NOT NULL,
  `result` varchar(1) NOT NULL,
  `time` int(11) NOT NULL,
  `universe` tinyint(3) unsigned NOT NULL,
  KEY `time` (`universe`,`rid`,`time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_topkb`
--

LOCK TABLES `uni1_topkb` WRITE;
/*!40000 ALTER TABLE `uni1_topkb` DISABLE KEYS */;

INSERT INTO `uni1_topkb` (`rid`, `units`, `result`, `time`, `universe`) VALUES
('648318ca8999ea4242f4692a917fd633', 405000000, 'r', 1385304206, 1);
			
/*!40000 ALTER TABLE `uni1_topkb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_users`
--

DROP TABLE IF EXISTS `uni1_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(64) NOT NULL DEFAULT '',
  `email_2` varchar(64) NOT NULL DEFAULT '',
  `lang` varchar(2) NOT NULL DEFAULT 'de',
  `authattack` tinyint(1) NOT NULL DEFAULT '0',
  `authlevel` tinyint(1) NOT NULL DEFAULT '0',
  `rights` text,
  `id_planet` int(11) unsigned NOT NULL DEFAULT '0',
  `universe` tinyint(3) unsigned NOT NULL,
  `galaxy` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `system` smallint(5) unsigned NOT NULL DEFAULT '0',
  `planet` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `darkmatter` double(50,0) NOT NULL DEFAULT '0',
  `user_lastip` varchar(40) NOT NULL DEFAULT '',
  `ip_at_reg` varchar(40) NOT NULL DEFAULT '',
  `register_time` int(11) NOT NULL DEFAULT '0',
  `onlinetime` int(11) NOT NULL DEFAULT '0',
  `dpath` varchar(20) NOT NULL DEFAULT 'gow',
  `timezone` varchar(32) NOT NULL DEFAULT 'Europe/London',
  `planet_sort` tinyint(1) NOT NULL DEFAULT '0',
  `planet_sort_order` tinyint(1) NOT NULL DEFAULT '0',
  `spio_anz` int(10) unsigned NOT NULL DEFAULT '1',
  `settings_fleetactions` tinyint(2) unsigned NOT NULL DEFAULT '3',
  `settings_esp` tinyint(1) NOT NULL DEFAULT '1',
  `settings_wri` tinyint(1) NOT NULL DEFAULT '1',
  `settings_bud` tinyint(1) NOT NULL DEFAULT '1',
  `settings_mis` tinyint(1) NOT NULL DEFAULT '1',
  `settings_blockPM` tinyint(1) NOT NULL DEFAULT '0',
  `urlaubs_modus` tinyint(1) NOT NULL DEFAULT '0',
  `urlaubs_until` int(11) NOT NULL DEFAULT '0',
  `db_deaktjava` int(11) NOT NULL DEFAULT '0',
  `b_tech_planet` int(11) unsigned NOT NULL DEFAULT '0',
  `b_tech` int(11) unsigned NOT NULL DEFAULT '0',
  `b_tech_id` smallint(2) unsigned NOT NULL DEFAULT '0',
  `b_tech_queue` text,
  `spy_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `computer_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `military_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `defence_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `shield_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `energy_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `hyperspace_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `combustion_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `impulse_motor_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `hyperspace_motor_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `laser_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ionic_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `buster_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `intergalactic_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `expedition_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `metal_proc_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `crystal_proc_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `deuterium_proc_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `graviton_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ally_id` int(11) unsigned NOT NULL DEFAULT '0',
  `ally_register_time` int(11) NOT NULL DEFAULT '0',
  `ally_rank_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `rpg_geologue` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `rpg_amiral` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_ingenieur` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_technocrate` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_espion` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_constructeur` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_scientifique` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_commandant` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_stockeur` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_defenseur` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_destructeur` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_general` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_bunker` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_raideur` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_empereur` tinyint(22) NOT NULL DEFAULT '0',
  `bana` tinyint(1) NOT NULL DEFAULT '0',
  `banaday` int(11) NOT NULL DEFAULT '0',
  `hof` tinyint(1) NOT NULL DEFAULT '1',
  `spyMessagesMode` tinyint(1) NOT NULL DEFAULT '0',
  `wons` int(11) unsigned NOT NULL DEFAULT '0',
  `loos` int(11) unsigned NOT NULL DEFAULT '0',
  `draws` int(11) unsigned NOT NULL DEFAULT '0',
  `kbmetal` double(50,0) unsigned NOT NULL DEFAULT '0',
  `kbcrystal` double(50,0) unsigned NOT NULL DEFAULT '0',
  `lostunits` double(50,0) unsigned NOT NULL DEFAULT '0',
  `desunits` double(50,0) unsigned NOT NULL DEFAULT '0',
  `uctime` int(11) NOT NULL DEFAULT '0',
  `setmail` int(11) NOT NULL DEFAULT '0',
  `dm_attack` int(11) NOT NULL DEFAULT '0',
  `dm_defensive` int(11) NOT NULL DEFAULT '0',
  `dm_buildtime` int(11) NOT NULL DEFAULT '0',
  `dm_researchtime` int(11) NOT NULL DEFAULT '0',
  `dm_resource` int(11) NOT NULL DEFAULT '0',
  `dm_energie` int(11) NOT NULL DEFAULT '0',
  `dm_fleettime` int(11) NOT NULL DEFAULT '0',
  `ref_id` int(11) NOT NULL DEFAULT '0',
  `ref_bonus` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `inactive_mail` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `achievements` int(11) NOT NULL DEFAULT '0',
  `achievements_mines` int(11) NOT NULL DEFAULT '0',
  `achievements_mines1` int(11) NOT NULL DEFAULT '0',
  `achievements_mines2` int(11) NOT NULL DEFAULT '0',
  `achievements_mines3` int(11) NOT NULL DEFAULT '0',
  `achievements_mines4` int(11) NOT NULL DEFAULT '0',
  `achievements_tech` int(11) NOT NULL DEFAULT '0',
  `achievements_tech1` int(11) NOT NULL DEFAULT '0',
  `achievements_tech2` int(11) NOT NULL DEFAULT '0',
  `achievements_tech3` int(11) NOT NULL DEFAULT '0',
  `achievements_tech4` int(11) NOT NULL DEFAULT '0',
  `achievements_engine` int(11) NOT NULL DEFAULT '0',
  `achievements_engine1` int(11) NOT NULL DEFAULT '0',
  `achievements_engine2` int(11) NOT NULL DEFAULT '0',
  `achievements_engine3` int(11) NOT NULL DEFAULT '0',
  `achievements_engine4` int(11) NOT NULL DEFAULT '0',
  `achievements_colonization` int(11) NOT NULL DEFAULT '0',
  `achievements_colonization1` int(11) NOT NULL DEFAULT '0',
  `achievements_colonization2` int(11) NOT NULL DEFAULT '0',
  `achievements_colonization3` int(11) NOT NULL DEFAULT '0',
  `achievements_moon` int(11) NOT NULL DEFAULT '0',
  `achievements_moon1` int(11) NOT NULL DEFAULT '0',
  `achievements_moon2` int(11) NOT NULL DEFAULT '0',
  `achievements_moon3` int(11) NOT NULL DEFAULT '0',
  `achievements_war` int(11) NOT NULL DEFAULT '0',
  `achievements_war1` int(11) NOT NULL DEFAULT '0',
  `achievements_war2` int(11) NOT NULL DEFAULT '0',
  `achievements_war3` int(11) NOT NULL DEFAULT '0',
  `achievements_destroy` int(11) NOT NULL DEFAULT '0',
  `achievements_destroy1` int(11) NOT NULL DEFAULT '0',
  `achievements_destroy2` int(11) NOT NULL DEFAULT '0',
  `achievements_destroy3` int(11) NOT NULL DEFAULT '0',
  `achievements_destroy4` int(11) NOT NULL DEFAULT '0',
  `achievements_time` int(11) NOT NULL DEFAULT '0',
  `achievements_time1` int(11) NOT NULL DEFAULT '0',
  `achievements_time2` int(11) NOT NULL DEFAULT '0',
  `achievements_time3` int(11) NOT NULL DEFAULT '0',
  `achievements_hof` int(11) NOT NULL DEFAULT '0',
  `achievements_hof1` int(11) NOT NULL DEFAULT '0',
  `achievements_hof2` int(11) NOT NULL DEFAULT '0',
  `achievements_hof3` int(11) NOT NULL DEFAULT '0',
  `achievements_hof4` int(11) NOT NULL DEFAULT '0',
  `achievements_community` int(11) NOT NULL DEFAULT '0',
  `achievements_community1` int(11) NOT NULL DEFAULT '0',
  `achievements_community2` int(11) NOT NULL DEFAULT '0',
  `achievements_community3` int(11) NOT NULL DEFAULT '0',
  `achievements_fleet` int(11) NOT NULL DEFAULT '0',
  `achievements_fleet1` int(11) NOT NULL DEFAULT '0',
  `achievements_fleet2` int(11) NOT NULL DEFAULT '0',
  `achievements_fleet3` int(11) NOT NULL DEFAULT '0',
  `achievements_fleet4` int(11) NOT NULL DEFAULT '0',
  `achievements_darkmatter1` int(11) NOT NULL DEFAULT '0',
  `achievements_darkmatter2` int(11) NOT NULL DEFAULT '0',
  `achievements_darkmatter3` int(11) NOT NULL DEFAULT '0',
  `achievements_darkmatter4` int(11) NOT NULL DEFAULT '0',
  `achievements_darkmatter5` int(11) NOT NULL DEFAULT '0',
  `achievements_planet1` int(11) NOT NULL DEFAULT '0',
  `achievements_planet2` int(11) NOT NULL DEFAULT '0',
  `achievements_planet3` int(11) NOT NULL DEFAULT '0',
  `achievements_planet4` int(11) NOT NULL DEFAULT '0',
  `achievements_lab1` int(11) NOT NULL DEFAULT '0',
  `achievements_lab2` int(11) NOT NULL DEFAULT '0',
  `achievements_lab3` int(11) NOT NULL DEFAULT '0',
  `achievements_lab4` int(11) NOT NULL DEFAULT '0',
  `achievements_darkmatter` int(11) NOT NULL DEFAULT '0',
  `achievements_planet` int(11) NOT NULL DEFAULT '0',
  `achievements_lab` int(11) NOT NULL DEFAULT '0',
  `achievements_badge` int(11) NOT NULL DEFAULT '0',
  `bm_MetalMine_price` int(11) NOT NULL DEFAULT '25000',
  `bm_MetalMine_time` int(11) NOT NULL DEFAULT '0',
  `bm_MetalMine_amount` int(11) NOT NULL DEFAULT '0',
  `bm_CrystalMine_price` int(11) NOT NULL DEFAULT '25000',
  `bm_CrystalMine_time` int(11) NOT NULL DEFAULT '0',
  `bm_CrystalMine_amount` int(11) NOT NULL DEFAULT '0',
  `bm_DeuteriumSynthesizer_price` int(11) NOT NULL DEFAULT '0',
  `bm_DeuteriumSynthesizer_time` int(11) NOT NULL DEFAULT '0',
  `bm_DeuteriumSynthesizer_amount` int(11) NOT NULL DEFAULT '0',
  `bm_PowerPlant_price` int(11) NOT NULL DEFAULT '0',
  `bm_PowerPlant_time` int(11) NOT NULL DEFAULT '0',
  `bm_PowerPlant_amount` int(11) NOT NULL DEFAULT '0',
  `bm_University_price` int(11) NOT NULL DEFAULT '0',
  `bm_University_time` int(11) NOT NULL DEFAULT '0',
  `bm_University_amount` int(11) NOT NULL DEFAULT '0',
  `bm_NanoFactory_price` int(11) NOT NULL DEFAULT '0',
  `bm_NanoFactory_time` int(11) NOT NULL DEFAULT '0',
  `bm_NanoFactory_amount` int(11) NOT NULL DEFAULT '0',
  `bm_Terraformer_price` int(11) NOT NULL DEFAULT '0',
  `bm_Terraformer_time` int(11) NOT NULL DEFAULT '0',
  `bm_Terraformer_amount` int(11) NOT NULL DEFAULT '0',
  `bm_WeaponTech_price` int(11) NOT NULL DEFAULT '0',
  `bm_WeaponTech_time` int(11) NOT NULL DEFAULT '0',
  `bm_WeaponTech_amount` int(11) NOT NULL DEFAULT '0',
  `bm_ShieldTech_price` int(11) NOT NULL DEFAULT '0',
  `bm_ShieldTech_time` int(11) NOT NULL DEFAULT '0',
  `bm_ShieldTech_amount` int(11) NOT NULL DEFAULT '0',
  `bm_ArmorTech_price` int(11) NOT NULL DEFAULT '0',
  `bm_ArmorTech_time` int(11) NOT NULL DEFAULT '0',
  `bm_ArmorTech_amount` int(11) NOT NULL DEFAULT '0',
  `bm_HyperspaceEngine_price` int(11) NOT NULL DEFAULT '0',
  `bm_HyperspaceEngine_time` int(11) NOT NULL DEFAULT '0',
  `bm_HyperspaceEngine_amount` int(11) NOT NULL DEFAULT '0',
  `bm_MineralTech_price` int(11) NOT NULL DEFAULT '0',
  `bm_MineralTech_time` int(11) NOT NULL DEFAULT '0',
  `bm_MineralTech_amount` int(11) NOT NULL DEFAULT '0',
  `bm_SemiCrystalsTech_price` int(11) NOT NULL DEFAULT '0',
  `bm_SemiCrystalsTech_time` int(11) NOT NULL DEFAULT '0',
  `bm_SemiCrystalsTech_amount` int(11) NOT NULL DEFAULT '0',
  `bm_FuelTech_price` int(11) NOT NULL DEFAULT '0',
  `bm_FuelTech_time` int(11) NOT NULL DEFAULT '0',
  `bm_FuelTech_amount` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `authlevel` (`authlevel`),
  KEY `ref_bonus` (`ref_bonus`),
  KEY `universe` (`universe`,`username`,`password`,`onlinetime`,`authlevel`),
  KEY `ally_id` (`ally_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_users`
--

LOCK TABLES `uni1_users` WRITE;
/*!40000 ALTER TABLE `uni1_users` DISABLE KEYS */;

INSERT INTO `uni1_users` (`id`, `username`, `password`, `email`, `email_2`, `lang`, `authattack`, `authlevel`, `rights`, `id_planet`, `universe`, `galaxy`, `system`, `planet`, `darkmatter`, `user_lastip`, `ip_at_reg`, `register_time`, `onlinetime`, `dpath`, `timezone`, `planet_sort`, `planet_sort_order`, `spio_anz`, `settings_fleetactions`, `settings_esp`, `settings_wri`, `settings_bud`, `settings_mis`, `settings_blockPM`, `urlaubs_modus`, `urlaubs_until`, `db_deaktjava`, `b_tech_planet`, `b_tech`, `b_tech_id`, `b_tech_queue`, `spy_tech`, `computer_tech`, `military_tech`, `defence_tech`, `shield_tech`, `energy_tech`, `hyperspace_tech`, `combustion_tech`, `impulse_motor_tech`, `hyperspace_motor_tech`, `laser_tech`, `ionic_tech`, `buster_tech`, `intergalactic_tech`, `expedition_tech`, `metal_proc_tech`, `crystal_proc_tech`, `deuterium_proc_tech`, `graviton_tech`, `ally_id`, `ally_register_time`, `ally_rank_id`, `rpg_geologue`, `rpg_amiral`, `rpg_ingenieur`, `rpg_technocrate`, `rpg_espion`, `rpg_constructeur`, `rpg_scientifique`, `rpg_commandant`, `rpg_stockeur`, `rpg_defenseur`, `rpg_destructeur`, `rpg_general`, `rpg_bunker`, `rpg_raideur`, `rpg_empereur`, `bana`, `banaday`, `hof`, `spyMessagesMode`, `wons`, `loos`, `draws`, `kbmetal`, `kbcrystal`, `lostunits`, `desunits`, `uctime`, `setmail`, `dm_attack`, `dm_defensive`, `dm_buildtime`, `dm_researchtime`, `dm_resource`, `dm_energie`, `dm_fleettime`, `ref_id`, `ref_bonus`, `inactive_mail`, `achievements`, `achievements_mines`, `achievements_mines1`, `achievements_mines2`, `achievements_mines3`, `achievements_mines4`, `achievements_tech`, `achievements_tech1`, `achievements_tech2`, `achievements_tech3`, `achievements_tech4`, `achievements_engine`, `achievements_engine1`, `achievements_engine2`, `achievements_engine3`, `achievements_engine4`, `achievements_colonization`, `achievements_colonization1`, `achievements_colonization2`, `achievements_colonization3`, `achievements_moon`, `achievements_moon1`, `achievements_moon2`, `achievements_moon3`, `achievements_war`, `achievements_war1`, `achievements_war2`, `achievements_war3`, `achievements_destroy`, `achievements_destroy1`, `achievements_destroy2`, `achievements_destroy3`, `achievements_destroy4`, `achievements_time`, `achievements_time1`, `achievements_time2`, `achievements_time3`, `achievements_hof`, `achievements_hof1`, `achievements_hof2`, `achievements_hof3`, `achievements_hof4`, `achievements_community`, `achievements_community1`, `achievements_community2`, `achievements_community3`, `achievements_fleet`, `achievements_fleet1`, `achievements_fleet2`, `achievements_fleet3`, `achievements_fleet4`, `achievements_darkmatter1`, `achievements_darkmatter2`, `achievements_darkmatter3`, `achievements_darkmatter4`, `achievements_darkmatter5`, `achievements_planet1`, `achievements_planet2`, `achievements_planet3`, `achievements_planet4`, `achievements_lab1`, `achievements_lab2`, `achievements_lab3`, `achievements_lab4`, `achievements_darkmatter`, `achievements_planet`, `achievements_lab`, `achievements_badge`, `bm_MetalMine_price`, `bm_MetalMine_time`, `bm_MetalMine_amount`, `bm_CrystalMine_price`, `bm_CrystalMine_time`, `bm_CrystalMine_amount`, `bm_DeuteriumSynthesizer_price`, `bm_DeuteriumSynthesizer_time`, `bm_DeuteriumSynthesizer_amount`, `bm_PowerPlant_price`, `bm_PowerPlant_time`, `bm_PowerPlant_amount`, `bm_University_price`, `bm_University_time`, `bm_University_amount`, `bm_NanoFactory_price`, `bm_NanoFactory_time`, `bm_NanoFactory_amount`, `bm_Terraformer_price`, `bm_Terraformer_time`, `bm_Terraformer_amount`, `bm_WeaponTech_price`, `bm_WeaponTech_time`, `bm_WeaponTech_amount`, `bm_ShieldTech_price`, `bm_ShieldTech_time`, `bm_ShieldTech_amount`, `bm_ArmorTech_price`, `bm_ArmorTech_time`, `bm_ArmorTech_amount`, `bm_HyperspaceEngine_price`, `bm_HyperspaceEngine_time`, `bm_HyperspaceEngine_amount`, `bm_MineralTech_price`, `bm_MineralTech_time`, `bm_MineralTech_amount`, `bm_SemiCrystalsTech_price`, `bm_SemiCrystalsTech_time`, `bm_SemiCrystalsTech_amount`, `bm_FuelTech_price`, `bm_FuelTech_time`, `bm_FuelTech_amount`) VALUES
(1, 'Qwa', '$2a$09$/SIokHQYw7TCLJ5ly0ct.O3BsKBv6hAsSK9SjduCIwWEyHdiB4WAq', '', '', 'en', 0, 3, '', 1, 1, 1, 1, 2, 2147408647, '::1', '::1', 1384976124, 1389643085, 'gow', 'Europe/London', 0, 0, 1, 3, 1, 1, 1, 1, 0, 0, 0, 0, 1, 1415100062, 108, 'a:1:{i:0;a:5:{i:0;i:108;i:1;i:21;i:2;d:29606851;i:3;d:1415100062;i:4;s:1:\"1\";}}', 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 1, 1389561007, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 82500000, 39000000, 405000000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 4, 1, 1, 1, 1, 4, 1, 1, 1, 1, 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 3, 0, 100000, 1389496363, 2, 25000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Qwa1', '$2a$09$/SIokHQYw7TCLJ5ly0ct.OB1Kj/9gaWJEtIz7iXkhN6Vg6XHHioGm', 'qwavillas@gmail.com', 'qwavillas@gmail.com', 'de', 0, 0, NULL, 13, 1, 1, 1, 8, 0, '', '::1', 1389563100, 1389563100, 'gow', 'Europe/Berlin', 0, 0, 1, 3, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2147483647, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25000, 0, 0, 25000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
			
/*!40000 ALTER TABLE `uni1_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_users_to_acs`
--

DROP TABLE IF EXISTS `uni1_users_to_acs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_users_to_acs` (
  `userID` int(10) unsigned NOT NULL,
  `acsID` int(10) unsigned NOT NULL,
  KEY `userID` (`userID`),
  KEY `acsID` (`acsID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_users_to_acs`
--

--
-- Table structure for table `uni1_users_to_extauth`
--

DROP TABLE IF EXISTS `uni1_users_to_extauth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_users_to_extauth` (
  `id` int(11) NOT NULL,
  `account` varchar(64) NOT NULL,
  `mode` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `account` (`account`,`mode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_users_to_extauth`
--

--
-- Table structure for table `uni1_users_to_topkb`
--

DROP TABLE IF EXISTS `uni1_users_to_topkb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_users_to_topkb` (
  `rid` varchar(32) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `role` tinyint(1) NOT NULL,
  KEY `rid` (`rid`,`role`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_users_to_topkb`
--

LOCK TABLES `uni1_users_to_topkb` WRITE;
/*!40000 ALTER TABLE `uni1_users_to_topkb` DISABLE KEYS */;

INSERT INTO `uni1_users_to_topkb` (`rid`, `uid`, `username`, `role`) VALUES
('648318ca8999ea4242f4692a917fd633', 1, 'Qwa', 1),
('648318ca8999ea4242f4692a917fd633', 2, 'Test', 2);
			
/*!40000 ALTER TABLE `uni1_users_to_topkb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_users_valid`
--

DROP TABLE IF EXISTS `uni1_users_valid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_users_valid` (
  `validationID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userName` varchar(64) NOT NULL,
  `validationKey` varchar(32) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(64) NOT NULL,
  `date` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `language` varchar(3) NOT NULL,
  `universe` tinyint(3) unsigned NOT NULL,
  `referralID` int(11) DEFAULT NULL,
  `externalAuthUID` varchar(128) DEFAULT NULL,
  `externalAuthMethod` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`validationID`,`validationKey`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- No data for table `uni1_users_valid`
--

--
-- Table structure for table `uni1_vars`
--

DROP TABLE IF EXISTS `uni1_vars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_vars` (
  `elementID` smallint(5) unsigned NOT NULL,
  `name` varchar(32) NOT NULL,
  `class` int(11) NOT NULL,
  `onPlanetType` set('1','3') NOT NULL,
  `onePerPlanet` tinyint(4) NOT NULL,
  `factor` float(4,2) NOT NULL,
  `maxLevel` int(11) DEFAULT NULL,
  `cost901` bigint(20) unsigned NOT NULL DEFAULT '0',
  `cost902` bigint(20) unsigned NOT NULL DEFAULT '0',
  `cost903` bigint(20) unsigned NOT NULL DEFAULT '0',
  `cost911` bigint(20) unsigned NOT NULL DEFAULT '0',
  `cost921` bigint(20) unsigned NOT NULL DEFAULT '0',
  `consumption1` int(11) unsigned DEFAULT NULL,
  `consumption2` int(11) unsigned DEFAULT NULL,
  `speedTech` int(11) unsigned DEFAULT NULL,
  `speed1` int(11) unsigned DEFAULT NULL,
  `speed2` int(11) unsigned DEFAULT NULL,
  `speed2Tech` int(10) unsigned DEFAULT NULL,
  `speed2onLevel` int(10) unsigned DEFAULT NULL,
  `speed3Tech` int(10) unsigned DEFAULT NULL,
  `speed3onLevel` int(10) unsigned DEFAULT NULL,
  `capacity` int(11) unsigned DEFAULT NULL,
  `attack` int(10) unsigned DEFAULT NULL,
  `defend` int(10) unsigned DEFAULT NULL,
  `timeBonus` int(11) unsigned DEFAULT NULL,
  `bonusAttack` float(4,2) NOT NULL DEFAULT '0.00',
  `bonusDefensive` float(4,2) NOT NULL DEFAULT '0.00',
  `bonusShield` float(4,2) NOT NULL DEFAULT '0.00',
  `bonusBuildTime` float(4,2) NOT NULL DEFAULT '0.00',
  `bonusResearchTime` float(4,2) NOT NULL DEFAULT '0.00',
  `bonusShipTime` float(4,2) NOT NULL DEFAULT '0.00',
  `bonusDefensiveTime` float(4,2) NOT NULL DEFAULT '0.00',
  `bonusResource` float(4,2) NOT NULL DEFAULT '0.00',
  `bonusEnergy` float(4,2) NOT NULL DEFAULT '0.00',
  `bonusResourceStorage` float(4,2) NOT NULL DEFAULT '0.00',
  `bonusShipStorage` float(4,2) NOT NULL DEFAULT '0.00',
  `bonusFlyTime` float(4,2) NOT NULL DEFAULT '0.00',
  `bonusFleetSlots` float(4,2) NOT NULL DEFAULT '0.00',
  `bonusPlanets` float(4,2) NOT NULL DEFAULT '0.00',
  `bonusSpyPower` float(4,2) NOT NULL DEFAULT '0.00',
  `bonusExpedition` float(4,2) NOT NULL DEFAULT '0.00',
  `bonusGateCoolTime` float(4,2) NOT NULL DEFAULT '0.00',
  `bonusMoreFound` float(4,2) NOT NULL DEFAULT '0.00',
  `bonusAttackUnit` smallint(1) NOT NULL DEFAULT '0',
  `bonusDefensiveUnit` smallint(1) NOT NULL DEFAULT '0',
  `bonusShieldUnit` smallint(1) NOT NULL DEFAULT '0',
  `bonusBuildTimeUnit` smallint(1) NOT NULL DEFAULT '0',
  `bonusResearchTimeUnit` smallint(1) NOT NULL DEFAULT '0',
  `bonusShipTimeUnit` smallint(1) NOT NULL DEFAULT '0',
  `bonusDefensiveTimeUnit` smallint(1) NOT NULL DEFAULT '0',
  `bonusResourceUnit` smallint(1) NOT NULL DEFAULT '0',
  `bonusEnergyUnit` smallint(1) NOT NULL DEFAULT '0',
  `bonusResourceStorageUnit` smallint(1) NOT NULL DEFAULT '0',
  `bonusShipStorageUnit` smallint(1) NOT NULL DEFAULT '0',
  `bonusFlyTimeUnit` smallint(1) NOT NULL DEFAULT '0',
  `bonusFleetSlotsUnit` smallint(1) NOT NULL DEFAULT '0',
  `bonusPlanetsUnit` smallint(1) NOT NULL DEFAULT '0',
  `bonusSpyPowerUnit` smallint(1) NOT NULL DEFAULT '0',
  `bonusExpeditionUnit` smallint(1) NOT NULL DEFAULT '0',
  `bonusGateCoolTimeUnit` smallint(1) NOT NULL DEFAULT '0',
  `bonusMoreFoundUnit` smallint(1) NOT NULL DEFAULT '0',
  `speedFleetFactor` float(4,2) DEFAULT NULL,
  `production901` varchar(255) DEFAULT NULL,
  `production902` varchar(255) DEFAULT NULL,
  `production903` varchar(255) DEFAULT NULL,
  `production911` varchar(255) DEFAULT NULL,
  `production921` varchar(255) DEFAULT NULL,
  `storage901` varchar(255) DEFAULT NULL,
  `storage902` varchar(255) DEFAULT NULL,
  `storage903` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`elementID`),
  KEY `class` (`class`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_vars`
--

LOCK TABLES `uni1_vars` WRITE;
/*!40000 ALTER TABLE `uni1_vars` DISABLE KEYS */;

INSERT INTO `uni1_vars` (`elementID`, `name`, `class`, `onPlanetType`, `onePerPlanet`, `factor`, `maxLevel`, `cost901`, `cost902`, `cost903`, `cost911`, `cost921`, `consumption1`, `consumption2`, `speedTech`, `speed1`, `speed2`, `speed2Tech`, `speed2onLevel`, `speed3Tech`, `speed3onLevel`, `capacity`, `attack`, `defend`, `timeBonus`, `bonusAttack`, `bonusDefensive`, `bonusShield`, `bonusBuildTime`, `bonusResearchTime`, `bonusShipTime`, `bonusDefensiveTime`, `bonusResource`, `bonusEnergy`, `bonusResourceStorage`, `bonusShipStorage`, `bonusFlyTime`, `bonusFleetSlots`, `bonusPlanets`, `bonusSpyPower`, `bonusExpedition`, `bonusGateCoolTime`, `bonusMoreFound`, `bonusAttackUnit`, `bonusDefensiveUnit`, `bonusShieldUnit`, `bonusBuildTimeUnit`, `bonusResearchTimeUnit`, `bonusShipTimeUnit`, `bonusDefensiveTimeUnit`, `bonusResourceUnit`, `bonusEnergyUnit`, `bonusResourceStorageUnit`, `bonusShipStorageUnit`, `bonusFlyTimeUnit`, `bonusFleetSlotsUnit`, `bonusPlanetsUnit`, `bonusSpyPowerUnit`, `bonusExpeditionUnit`, `bonusGateCoolTimeUnit`, `bonusMoreFoundUnit`, `speedFleetFactor`, `production901`, `production902`, `production903`, `production911`, `production921`, `storage901`, `storage902`, `storage903`) VALUES
(1, 'metal_mine', 0, '1', 0, 1.50, 255, 60, 15, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '(30 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor)', NULL, NULL, '-(10 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor)', NULL, NULL, NULL, NULL),
(2, 'crystal_mine', 0, '1', 0, 1.50, 255, 48, 24, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '(20 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor)', NULL, '-(10 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor);', NULL, NULL, NULL, NULL),
(3, 'deuterium_sintetizer', 0, '1', 0, 1.50, 255, 225, 75, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, '(10 * $BuildLevel * pow((1.1), $BuildLevel) * (-0.002 * $BuildTemp + 1.28) * (0.1 * $BuildLevelFactor))', '- (30 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor)', NULL, NULL, NULL, NULL),
(4, 'solar_plant', 0, '1', 0, 1.50, 255, 75, 30, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '(20 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor)', NULL, NULL, NULL, NULL),
(6, 'university', 0, '1', 0, 2.00, 255, 100000000, 50000000, 25000000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'fusion_plant', 0, '1', 0, 2.00, 255, 900, 360, 180, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, '- (10 * $BuildLevel * pow(1.1,$BuildLevel) * (0.1 * $BuildLevelFactor))', '(30 * $BuildLevel * pow((1.05 + $BuildEnergy * 0.01), $BuildLevel)) * (0.1 * $BuildLevelFactor)', NULL, NULL, NULL, NULL),
(14, 'robot_factory', 0, '1,3', 0, 2.00, 255, 400, 120, 200, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'nano_factory', 0, '1', 0, 2.00, 255, 1000000, 500000, 100000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'hangar', 0, '1,3', 0, 2.00, 255, 400, 200, 100, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'metal_store', 0, '1,3', 0, 2.00, 255, 2000, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'floor(2.5 * pow(1.8331954764, $BuildLevel)) * 5000', NULL, NULL),
(23, 'crystal_store', 0, '1,3', 0, 2.00, 255, 2000, 1000, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'floor(2.5 * pow(1.8331954764, $BuildLevel)) * 5000', NULL),
(24, 'deuterium_store', 0, '1,3', 0, 2.00, 255, 2000, 2000, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'floor(2.5 * pow(1.8331954764, $BuildLevel)) * 5000'),
(31, 'laboratory', 0, '1', 0, 2.00, 255, 200, 400, 200, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'terraformer', 0, '1', 0, 2.00, 255, 0, 50000, 100000, 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'ally_deposit', 0, '1', 0, 2.00, 255, 20000, 40000, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'mondbasis', 0, '3', 0, 2.00, 255, 20000, 40000, 20000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'phalanx', 0, '3', 0, 2.00, 255, 20000, 40000, 20000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'sprungtor', 0, '3', 0, 2.00, 255, 2000000, 4000000, 2000000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'silo', 0, '1', 0, 2.00, 255, 20000, 20000, 1000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 'spy_tech', 100, '1,3', 0, 2.00, 255, 200, 1000, 200, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 'computer_tech', 100, '1,3', 0, 2.00, 255, 0, 400, 600, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 'military_tech', 100, '1,3', 0, 2.00, 255, 800, 200, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 'defence_tech', 100, '1,3', 0, 2.00, 255, 200, 600, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'shield_tech', 100, '1,3', 0, 2.00, 255, 1000, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'energy_tech', 100, '1,3', 0, 2.00, 255, 0, 800, 400, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 'hyperspace_tech', 100, '1,3', 0, 2.00, 255, 0, 4000, 2000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(115, 'combustion_tech', 100, '1,3', 0, 2.00, 255, 400, 0, 600, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, 'impulse_motor_tech', 100, '1,3', 0, 2.00, 255, 2000, 4000, 600, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(118, 'hyperspace_motor_tech', 100, '1,3', 0, 2.00, 255, 10000, 20000, 6000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(120, 'laser_tech', 100, '1,3', 0, 2.00, 255, 200, 100, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(121, 'ionic_tech', 100, '1,3', 0, 2.00, 255, 1000, 300, 100, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(122, 'buster_tech', 100, '1,3', 0, 2.00, 255, 2000, 4000, 1000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(123, 'intergalactic_tech', 100, '1,3', 0, 2.00, 255, 240000, 400000, 160000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(124, 'expedition_tech', 100, '1,3', 0, 1.75, 255, 4000, 8000, 4000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 'metal_proc_tech', 100, '1,3', 0, 2.00, 255, 750, 500, 250, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(132, 'crystal_proc_tech', 100, '1,3', 0, 2.00, 255, 1000, 750, 500, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(133, 'deuterium_proc_tech', 100, '1,3', 0, 2.00, 255, 1250, 1000, 750, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(199, 'graviton_tech', 100, '1,3', 0, 3.00, 255, 0, 0, 0, 300000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(202, 'small_ship_cargo', 200, '1,3', 0, 1.00, NULL, 2000, 2000, 0, 0, 0, 10, 20, 4, 5000, 10000, NULL, NULL, NULL, NULL, 5000, 5, 10, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(203, 'big_ship_cargo', 200, '1,3', 0, 1.00, NULL, 6000, 6000, 0, 0, 0, 50, 50, 1, 7500, 7500, NULL, NULL, NULL, NULL, 25000, 5, 25, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(204, 'light_hunter', 200, '1,3', 0, 1.00, NULL, 3000, 1000, 0, 0, 0, 20, 20, 1, 12500, 12500, NULL, NULL, NULL, NULL, 50, 50, 10, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(205, 'heavy_hunter', 200, '1,3', 0, 1.00, NULL, 6000, 4000, 0, 0, 0, 75, 75, 2, 10000, 15000, NULL, NULL, NULL, NULL, 100, 150, 25, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(206, 'crusher', 200, '1,3', 0, 1.00, NULL, 20000, 7000, 2000, 0, 0, 300, 300, 2, 15000, 15000, NULL, NULL, NULL, NULL, 800, 400, 50, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(207, 'battle_ship', 200, '1,3', 0, 1.00, NULL, 45000, 15000, 0, 0, 0, 250, 250, 3, 10000, 10000, NULL, NULL, NULL, NULL, 1500, 1000, 200, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(208, 'colonizer', 200, '1,3', 0, 1.00, NULL, 10000, 20000, 10000, 0, 0, 1000, 1000, 2, 2500, 2500, NULL, NULL, NULL, NULL, 7500, 50, 100, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(209, 'recycler', 200, '1,3', 0, 1.00, NULL, 10000, 6000, 2000, 0, 0, 300, 300, 1, 2000, 2000, NULL, NULL, NULL, NULL, 20000, 1, 10, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(210, 'spy_sonde', 200, '1,3', 0, 1.00, NULL, 0, 1000, 0, 0, 0, 1, 1, 1, 100000000, 100000000, NULL, NULL, NULL, NULL, 5, 0, 0, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(211, 'bomber_ship', 200, '1,3', 0, 1.00, NULL, 50000, 25000, 15000, 0, 0, 1000, 1000, 5, 4000, 5000, NULL, NULL, NULL, NULL, 500, 1000, 500, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(212, 'solar_satelit', 200, '1,3', 0, 1.00, NULL, 0, 2000, 500, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '((($BuildTemp + 160) / 6) * (0.1 * $BuildLevelFactor) * $BuildLevel)', NULL, NULL, NULL, NULL);
INSERT INTO `uni1_vars` (`elementID`, `name`, `class`, `onPlanetType`, `onePerPlanet`, `factor`, `maxLevel`, `cost901`, `cost902`, `cost903`, `cost911`, `cost921`, `consumption1`, `consumption2`, `speedTech`, `speed1`, `speed2`, `speed2Tech`, `speed2onLevel`, `speed3Tech`, `speed3onLevel`, `capacity`, `attack`, `defend`, `timeBonus`, `bonusAttack`, `bonusDefensive`, `bonusShield`, `bonusBuildTime`, `bonusResearchTime`, `bonusShipTime`, `bonusDefensiveTime`, `bonusResource`, `bonusEnergy`, `bonusResourceStorage`, `bonusShipStorage`, `bonusFlyTime`, `bonusFleetSlots`, `bonusPlanets`, `bonusSpyPower`, `bonusExpedition`, `bonusGateCoolTime`, `bonusMoreFound`, `bonusAttackUnit`, `bonusDefensiveUnit`, `bonusShieldUnit`, `bonusBuildTimeUnit`, `bonusResearchTimeUnit`, `bonusShipTimeUnit`, `bonusDefensiveTimeUnit`, `bonusResourceUnit`, `bonusEnergyUnit`, `bonusResourceStorageUnit`, `bonusShipStorageUnit`, `bonusFlyTimeUnit`, `bonusFleetSlotsUnit`, `bonusPlanetsUnit`, `bonusSpyPowerUnit`, `bonusExpeditionUnit`, `bonusGateCoolTimeUnit`, `bonusMoreFoundUnit`, `speedFleetFactor`, `production901`, `production902`, `production903`, `production911`, `production921`, `storage901`, `storage902`, `storage903`) VALUES
(213, 'destructor', 200, '1,3', 0, 1.00, NULL, 60000, 50000, 15000, 0, 0, 1000, 1000, 3, 5000, 5000, NULL, NULL, NULL, NULL, 2000, 2000, 500, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(214, 'dearth_star', 200, '1,3', 0, 1.00, NULL, 5000000, 4000000, 1000000, 0, 0, 1, 1, 3, 200, 200, NULL, NULL, NULL, NULL, 1000000, 200000, 50000, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(215, 'battleship', 200, '1,3', 0, 1.00, NULL, 30000, 40000, 15000, 0, 0, 250, 250, 3, 10000, 10000, NULL, NULL, NULL, NULL, 750, 700, 400, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(216, 'lune_noir', 200, '1,3', 0, 1.00, NULL, 8000000, 2000000, 1500000, 0, 0, 250, 250, 3, 900, 900, NULL, NULL, NULL, NULL, 15000000, 150000, 70000, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(217, 'ev_transporter', 200, '1,3', 0, 1.00, NULL, 35000, 20000, 1500, 0, 0, 90, 90, 3, 6000, 6000, NULL, NULL, NULL, NULL, 400000000, 50, 120, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(218, 'star_crasher', 200, '1,3', 0, 1.00, NULL, 275000000, 130000000, 60000000, 0, 0, 10000, 10000, 3, 10, 10, NULL, NULL, NULL, NULL, 50000000, 35000000, 2000000, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(219, 'giga_recykler', 200, '1,3', 0, 1.00, NULL, 1000000, 600000, 200000, 0, 0, 300, 300, 3, 7500, 7500, NULL, NULL, NULL, NULL, 200000000, 1, 1000, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(220, 'dm_ship', 200, '1,3', 0, 1.00, NULL, 6000000, 7000000, 3000000, 0, 0, 100000, 100000, 3, 100, 100, NULL, NULL, NULL, NULL, 6000000, 5, 50000, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(401, 'misil_launcher', 400, '1,3', 0, 1.00, NULL, 2000, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 80, 20, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(402, 'small_laser', 400, '1,3', 0, 1.00, NULL, 1500, 500, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 25, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(403, 'big_laser', 400, '1,3', 0, 1.00, NULL, 6000, 2000, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 250, 100, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(404, 'gauss_canyon', 400, '1,3', 0, 1.00, NULL, 20000, 15000, 2000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1100, 200, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(405, 'ionic_canyon', 400, '1,3', 0, 1.00, NULL, 2000, 6000, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 150, 500, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(406, 'buster_canyon', 400, '1,3', 0, 1.00, NULL, 50000, 50000, 30000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 3000, 300, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(407, 'small_protection_shield', 400, '1,3', 1, 1.00, NULL, 10000, 10000, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 2000, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(408, 'big_protection_shield', 400, '1,3', 1, 1.00, NULL, 50000, 50000, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 10000, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(409, 'planet_protector', 400, '1,3', 1, 1.00, NULL, 10000000, 5000000, 2500000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1000000, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(410, 'graviton_canyon', 400, '1,3', 0, 1.00, NULL, 15000000, 15000000, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 500000, 80000, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(411, 'orbital_station', 400, '1,3', 1, 1.00, NULL, 5000000000, 2000000000, 500000000, 1000000, 10000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 400000000, 2000000000, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(502, 'interceptor_misil', 500, '1,3', 0, 1.00, NULL, 8000, 0, 2000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(503, 'interplanetary_misil', 500, '1,3', 0, 1.00, NULL, 12500, 2500, 10000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 12000, 1, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(601, 'rpg_geologue', 600, '1,3', 0, 1.00, 20, 0, 0, 0, 0, 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.05, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(602, 'rpg_amiral', 600, '1,3', 0, 1.00, 20, 0, 0, 0, 0, 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.05, 0.05, 0.05, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(603, 'rpg_ingenieur', 600, '1,3', 0, 1.00, 10, 0, 0, 0, 0, 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.05, 0.05, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.05, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(604, 'rpg_technocrate', 600, '1,3', 0, 1.00, 10, 0, 0, 0, 0, 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, -0.05, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(605, 'rpg_constructeur', 600, '1,3', 0, 1.00, 3, 0, 0, 0, 0, 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, -0.10, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(606, 'rpg_scientifique', 600, '1,3', 0, 1.00, 3, 0, 0, 0, 0, 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, -0.10, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(607, 'rpg_stockeur', 600, '1,3', 0, 1.00, 2, 0, 0, 0, 0, 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.50, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(608, 'rpg_defenseur', 600, '1,3', 0, 1.00, 2, 0, 0, 0, 0, 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, -0.25, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(609, 'rpg_bunker', 600, '1,3', 0, 1.00, 1, 0, 0, 0, 0, 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(610, 'rpg_espion', 600, '1,3', 0, 1.00, 2, 0, 0, 0, 0, 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.35, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(611, 'rpg_commandant', 600, '1,3', 0, 1.00, 3, 0, 0, 0, 0, 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 3.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(612, 'rpg_destructeur', 600, '1,3', 0, 1.00, 1, 0, 0, 0, 0, 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(613, 'rpg_general', 600, '1,3', 0, 1.00, 3, 0, 0, 0, 0, 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, -0.10, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(614, 'rpg_raideur', 600, '1,3', 0, 1.00, 1, 0, 0, 0, 0, 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(615, 'rpg_empereur', 600, '1,3', 0, 1.00, 1, 0, 0, 0, 0, 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 2.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(701, 'dm_attack', 700, '1,3', 0, 1.00, NULL, 0, 0, 0, 0, 1500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86400, 0.10, 0.10, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(702, 'dm_defensive', 700, '1,3', 0, 1.00, NULL, 0, 0, 0, 0, 1500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86400, 0.00, 0.00, 0.10, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(703, 'dm_buildtime', 700, '1,3', 0, 1.00, NULL, 0, 0, 0, 0, 750, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86400, 0.00, 0.00, 0.00, -0.10, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(704, 'dm_resource', 700, '1,3', 0, 1.00, NULL, 0, 0, 0, 0, 2500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86400, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.10, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(705, 'dm_energie', 700, '1,3', 0, 1.00, NULL, 0, 0, 0, 0, 2000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86400, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.10, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(706, 'dm_researchtime', 700, '1,3', 0, 1.00, NULL, 0, 0, 0, 0, 1250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86400, 0.00, 0.00, 0.00, 0.00, -0.10, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(707, 'dm_fleettime', 700, '1,3', 0, 1.00, NULL, 0, 0, 0, 0, 3000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86400, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, -0.10, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
			
/*!40000 ALTER TABLE `uni1_vars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_vars_rapidfire`
--

DROP TABLE IF EXISTS `uni1_vars_rapidfire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_vars_rapidfire` (
  `elementID` int(11) NOT NULL,
  `rapidfireID` int(11) NOT NULL,
  `shoots` int(11) NOT NULL,
  KEY `elementID` (`elementID`),
  KEY `rapidfireID` (`rapidfireID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_vars_rapidfire`
--

LOCK TABLES `uni1_vars_rapidfire` WRITE;
/*!40000 ALTER TABLE `uni1_vars_rapidfire` DISABLE KEYS */;

INSERT INTO `uni1_vars_rapidfire` (`elementID`, `rapidfireID`, `shoots`) VALUES
(202, 210, 5),
(202, 212, 5),
(203, 210, 5),
(203, 212, 5),
(204, 210, 5),
(204, 212, 5),
(205, 202, 3),
(205, 210, 5),
(205, 212, 5),
(206, 204, 6),
(206, 401, 10),
(206, 210, 5),
(206, 212, 5),
(207, 210, 5),
(207, 212, 5),
(208, 210, 5),
(208, 212, 5),
(209, 210, 5),
(209, 212, 5),
(211, 210, 5),
(211, 212, 5),
(211, 401, 20),
(211, 402, 20),
(211, 403, 10),
(211, 405, 10),
(213, 210, 5),
(213, 212, 5),
(213, 215, 2),
(213, 402, 10),
(214, 210, 1250),
(214, 212, 1250),
(214, 202, 250),
(214, 203, 250),
(214, 208, 250),
(214, 209, 250),
(214, 204, 200),
(214, 205, 100),
(214, 206, 33),
(214, 207, 30),
(214, 211, 25),
(214, 215, 15),
(214, 213, 5),
(214, 401, 200),
(214, 402, 200),
(214, 403, 100),
(214, 404, 50),
(214, 405, 100),
(215, 202, 3),
(215, 203, 3);
INSERT INTO `uni1_vars_rapidfire` (`elementID`, `rapidfireID`, `shoots`) VALUES
(215, 205, 4),
(215, 206, 4),
(215, 207, 10),
(215, 210, 5),
(215, 212, 5),
(216, 210, 1250),
(216, 212, 1250),
(216, 202, 250),
(216, 203, 250),
(216, 204, 200),
(216, 205, 100),
(216, 206, 33),
(216, 207, 30),
(216, 208, 250),
(216, 209, 250),
(216, 211, 25),
(216, 213, 5),
(216, 214, 1),
(216, 215, 15),
(216, 401, 400),
(216, 402, 200),
(216, 403, 100),
(216, 404, 50),
(216, 405, 100),
(217, 210, 5),
(217, 212, 5),
(218, 210, 1250),
(218, 212, 1250),
(218, 202, 250),
(218, 203, 250),
(218, 204, 200),
(218, 205, 100),
(218, 206, 33),
(218, 207, 30),
(218, 208, 250),
(218, 209, 250),
(218, 211, 25),
(218, 213, 5),
(218, 215, 15),
(218, 401, 400),
(218, 402, 200),
(218, 403, 100),
(218, 404, 50),
(218, 405, 100),
(219, 210, 5),
(219, 212, 5),
(220, 210, 5),
(220, 212, 5);
			
/*!40000 ALTER TABLE `uni1_vars_rapidfire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni1_vars_requriements`
--

DROP TABLE IF EXISTS `uni1_vars_requriements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `uni1_vars_requriements` (
  `elementID` int(11) NOT NULL,
  `requireID` int(11) NOT NULL,
  `requireLevel` int(11) NOT NULL,
  KEY `elementID` (`elementID`),
  KEY `requireID` (`requireID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			
/*!40101 SET character_set_client = @saved_cs_client */;
			
--
-- Dumping data for table `uni1_vars_requriements`
--

LOCK TABLES `uni1_vars_requriements` WRITE;
/*!40000 ALTER TABLE `uni1_vars_requriements` DISABLE KEYS */;

INSERT INTO `uni1_vars_requriements` (`elementID`, `requireID`, `requireLevel`) VALUES
(6, 14, 20),
(6, 31, 22),
(6, 15, 4),
(6, 108, 12),
(6, 123, 3),
(12, 3, 5),
(12, 113, 3),
(15, 14, 10),
(15, 108, 10),
(21, 14, 2),
(33, 15, 1),
(33, 113, 12),
(42, 41, 1),
(43, 41, 1),
(43, 114, 7),
(44, 21, 1),
(106, 31, 3),
(108, 31, 1),
(109, 31, 4),
(110, 113, 3),
(110, 31, 6),
(111, 31, 2),
(113, 31, 1),
(114, 113, 5),
(114, 110, 5),
(114, 31, 7),
(115, 113, 1),
(115, 31, 1),
(117, 113, 1),
(117, 31, 2),
(118, 114, 3),
(118, 31, 7),
(120, 31, 1),
(120, 113, 2),
(121, 31, 4),
(121, 120, 5),
(121, 113, 4),
(122, 31, 5),
(122, 113, 8),
(122, 120, 10),
(122, 121, 5),
(123, 31, 10),
(123, 108, 8),
(123, 114, 8),
(124, 106, 3),
(124, 117, 3),
(124, 31, 3),
(131, 31, 8),
(131, 113, 5);
INSERT INTO `uni1_vars_requriements` (`elementID`, `requireID`, `requireLevel`) VALUES
(132, 31, 8),
(132, 113, 5),
(133, 31, 8),
(133, 113, 5),
(199, 31, 12),
(202, 21, 2),
(202, 115, 2),
(203, 21, 4),
(203, 115, 6),
(204, 21, 1),
(204, 115, 1),
(205, 21, 3),
(205, 111, 2),
(205, 117, 2),
(206, 21, 5),
(206, 117, 4),
(206, 121, 2),
(207, 21, 7),
(207, 118, 4),
(208, 21, 4),
(208, 117, 3),
(209, 21, 4),
(209, 115, 6),
(209, 110, 2),
(210, 21, 3),
(210, 115, 3),
(210, 106, 2),
(211, 117, 6),
(211, 21, 8),
(211, 122, 5),
(212, 21, 1),
(213, 21, 9),
(213, 118, 6),
(213, 114, 5),
(214, 21, 12),
(214, 118, 7),
(214, 114, 6),
(214, 199, 1),
(215, 114, 5),
(215, 120, 12),
(215, 118, 5),
(215, 21, 8),
(216, 106, 12),
(216, 21, 15),
(216, 109, 14),
(216, 110, 14),
(216, 111, 15),
(216, 114, 10),
(216, 120, 20),
(216, 199, 3);
INSERT INTO `uni1_vars_requriements` (`elementID`, `requireID`, `requireLevel`) VALUES
(217, 111, 10),
(217, 21, 14),
(217, 114, 10),
(217, 110, 14),
(217, 117, 15),
(218, 21, 18),
(218, 109, 20),
(218, 110, 20),
(218, 111, 20),
(218, 114, 15),
(218, 118, 20),
(218, 120, 25),
(218, 199, 8),
(219, 21, 15),
(219, 109, 15),
(219, 110, 15),
(219, 111, 15),
(219, 118, 8),
(220, 21, 9),
(220, 114, 5),
(220, 118, 6),
(401, 21, 1),
(402, 113, 1),
(402, 21, 2),
(402, 120, 3),
(403, 113, 3),
(403, 21, 4),
(403, 120, 6),
(404, 21, 6),
(404, 113, 6),
(404, 109, 3),
(404, 110, 1),
(405, 21, 4),
(405, 121, 4),
(406, 21, 8),
(406, 122, 7),
(407, 110, 2),
(407, 21, 1),
(408, 110, 6),
(408, 21, 6),
(409, 609, 1),
(410, 199, 7),
(410, 21, 18),
(410, 109, 20),
(411, 199, 10),
(411, 110, 22),
(411, 122, 20),
(411, 108, 15),
(411, 111, 25),
(411, 113, 20);
INSERT INTO `uni1_vars_requriements` (`elementID`, `requireID`, `requireLevel`) VALUES
(411, 608, 2),
(411, 21, 20),
(502, 44, 2),
(502, 21, 1),
(503, 44, 4),
(503, 21, 1),
(503, 117, 1),
(603, 601, 5),
(604, 602, 5),
(605, 601, 10),
(605, 603, 2),
(606, 601, 10),
(606, 603, 2),
(607, 605, 1),
(608, 606, 1),
(609, 601, 20),
(609, 603, 10),
(609, 605, 3),
(609, 606, 3),
(609, 607, 2),
(609, 608, 2),
(610, 602, 10),
(610, 604, 5),
(611, 602, 10),
(611, 604, 5),
(612, 610, 1),
(613, 611, 1),
(614, 602, 20),
(614, 604, 10),
(614, 610, 2),
(614, 611, 2),
(614, 612, 1),
(614, 613, 3),
(615, 614, 1),
(615, 609, 1);
			
/*!40000 ALTER TABLE `uni1_vars_requriements` ENABLE KEYS */;
UNLOCK TABLES;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-13-01 20:58:11