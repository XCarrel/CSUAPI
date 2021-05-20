-- --------------------------------------------------------
-- Hôte:                         localhost
-- Version du serveur:           8.0.23 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

unlock tables;

-- Listage de la structure de la base pour csunvb_csu
DROP DATABASE IF EXISTS `csunvb_csu`;
CREATE DATABASE IF NOT EXISTS `csunvb_csu` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `csunvb_csu`;

-- Listage de la structure de la table csunvb_csu. apitokens
CREATE TABLE IF NOT EXISTS `apitokens` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int NOT NULL,
  `token` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `user_id` (`user_id`),
  CONSTRAINT `FK_apitokens_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='Tokens utilisés par l''API';

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. bases
CREATE TABLE IF NOT EXISTS `bases` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. batches
CREATE TABLE IF NOT EXISTS `batches` (
  `id` int NOT NULL AUTO_INCREMENT,
  `number` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL DEFAULT 'new',
  `drug_id` int NOT NULL,
  `base_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number_UNIQUE` (`number`),
  KEY `fk_batches_drugs_idx` (`drug_id`),
  KEY `fk_batches_bases1_idx` (`base_id`),
  CONSTRAINT `fk_batches_bases1` FOREIGN KEY (`base_id`) REFERENCES `bases` (`id`),
  CONSTRAINT `fk_batches_drugs` FOREIGN KEY (`drug_id`) REFERENCES `drugs` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. drugs
CREATE TABLE IF NOT EXISTS `drugs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. drugsheets
CREATE TABLE IF NOT EXISTS `drugsheets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `week` int NOT NULL,
  `status_id` int NOT NULL,
  `base_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `drugSHEETUNIQ` (`week`,`base_id`),
  KEY `fk_drugsheets_bases1_idx` (`base_id`),
  KEY `fk_drugsheets_status1` (`status_id`),
  CONSTRAINT `fk_drugsheets_bases1` FOREIGN KEY (`base_id`) REFERENCES `bases` (`id`),
  CONSTRAINT `fk_drugsheets_status1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. drugsheet_use_batch
CREATE TABLE IF NOT EXISTS `drugsheet_use_batch` (
  `id` int NOT NULL AUTO_INCREMENT,
  `drugsheet_id` int NOT NULL,
  `batch_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_use` (`drugsheet_id`,`batch_id`),
  KEY `fk_drugsheet_use_batch_drugsheets1_idx` (`drugsheet_id`),
  KEY `fk_drugsheet_use_batch_batches1_idx` (`batch_id`),
  CONSTRAINT `fk_drugsheet_use_batch_batches1` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`),
  CONSTRAINT `fk_drugsheet_use_batch_drugsheets1` FOREIGN KEY (`drugsheet_id`) REFERENCES `drugsheets` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=188 DEFAULT CHARSET=utf8mb4;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. drugsheet_use_nova
CREATE TABLE IF NOT EXISTS `drugsheet_use_nova` (
  `id` int NOT NULL AUTO_INCREMENT,
  `drugsheet_id` int NOT NULL,
  `nova_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_use` (`drugsheet_id`,`nova_id`),
  KEY `fk_drugsheet_use_nova_drugsheets1_idx` (`drugsheet_id`),
  KEY `fk_drugsheet_use_nova_novas1_idx` (`nova_id`),
  CONSTRAINT `fk_drugsheet_use_nova_drugsheets1` FOREIGN KEY (`drugsheet_id`) REFERENCES `drugsheets` (`id`),
  CONSTRAINT `fk_drugsheet_use_nova_novas1` FOREIGN KEY (`nova_id`) REFERENCES `novas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. drugsignatures
CREATE TABLE IF NOT EXISTS `drugsignatures` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `day` datetime NOT NULL,
  `drugsheet_id` int NOT NULL,
  `user_id` int NOT NULL,
  `base` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `day_drugsheet_id` (`day`,`drugsheet_id`),
  KEY `fk_drugsignatures_drugsheets1_idx` (`drugsheet_id`),
  KEY `fk_drugsignatures_users1_idx` (`user_id`),
  KEY `fk_drugsignatures_bases1` (`base`),
  CONSTRAINT `fk_drugsignatures_bases1` FOREIGN KEY (`base`) REFERENCES `bases` (`id`),
  CONSTRAINT `fk_drugsignatures_drugsheets1` FOREIGN KEY (`drugsheet_id`) REFERENCES `drugsheets` (`id`),
  CONSTRAINT `fk_drugsignatures_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. logs
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int NOT NULL,
  `report_type` enum('SHIFT','TODO','DRUG') NOT NULL,
  `report_id` int NOT NULL COMMENT 'A foreign key without constraint, because it will point to different tables according to the report type',
  `info` varchar(200) DEFAULT NULL COMMENT 'decribe what is done',
  PRIMARY KEY (`id`),
  KEY `fkmadeby_idx` (`user_id`),
  CONSTRAINT `fkmadeby` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COMMENT='This table contains all log entries for all reports';

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. novachecks
CREATE TABLE IF NOT EXISTS `novachecks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `start` int NOT NULL,
  `end` int DEFAULT NULL,
  `drug_id` int NOT NULL,
  `nova_id` int NOT NULL,
  `user_id` int NOT NULL,
  `drugsheet_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_novachecks` (`date`,`drug_id`,`nova_id`,`drugsheet_id`) USING BTREE,
  KEY `fk_novachecks_drugs1_idx` (`drug_id`),
  KEY `fk_novachecks_novas1_idx` (`nova_id`),
  KEY `fk_novachecks_users1_idx` (`user_id`),
  KEY `fk_novachecks_drugsheets1_idx` (`drugsheet_id`),
  CONSTRAINT `fk_novachecks_drugs1` FOREIGN KEY (`drug_id`) REFERENCES `drugs` (`id`),
  CONSTRAINT `fk_novachecks_drugsheets1` FOREIGN KEY (`drugsheet_id`) REFERENCES `drugsheets` (`id`),
  CONSTRAINT `fk_novachecks_novas1` FOREIGN KEY (`nova_id`) REFERENCES `novas` (`id`),
  CONSTRAINT `fk_novachecks_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2537 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. novas
CREATE TABLE IF NOT EXISTS `novas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `number` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number_UNIQUE` (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `novaUnavailabilites`;
CREATE TABLE IF NOT EXISTS `novaUnavailabilites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(45) NULL,
  `date` date NOT NULL,
  `day` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nova_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_novaUnavailabilites` (`date`,`day`,`nova_id`) USING BTREE,
  KEY `fk_novaUnavailabilites_user_id` (`user_id`),
  KEY `fk_novaUnavailabilites_nova_id` (`nova_id`),
  CONSTRAINT `fk_novaUnavailabilites_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_novaUnavailabilites_nova_id` FOREIGN KEY (`nova_id`) REFERENCES `novas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2251 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. pharmachecks
CREATE TABLE IF NOT EXISTS `pharmachecks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `start` int NOT NULL,
  `end` int DEFAULT NULL,
  `batch_id` int NOT NULL,
  `user_id` int NOT NULL,
  `drugsheet_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_pharmachecks` (`date`,`batch_id`,`drugsheet_id`) USING BTREE,
  KEY `fk_pharmachecks_batches1_idx` (`batch_id`),
  KEY `fk_pharmachecks_users1_idx` (`user_id`),
  KEY `fk_pharmachecks_drugsheets1_idx` (`drugsheet_id`),
  CONSTRAINT `fk_pharmachecks_batches1` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`),
  CONSTRAINT `fk_pharmachecks_drugsheets1` FOREIGN KEY (`drugsheet_id`) REFERENCES `drugsheets` (`id`),
  CONSTRAINT `fk_pharmachecks_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5936 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. restocks
CREATE TABLE IF NOT EXISTS `restocks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `quantity` int NOT NULL,
  `batch_id` int NOT NULL,
  `nova_id` int NOT NULL,
  `user_id` int NOT NULL,
  `drugsheet_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_restocks` (`date`,`batch_id`,`nova_id`) USING BTREE,
  KEY `fk_restocks_batches1_idx` (`batch_id`),
  KEY `fk_restocks_novas1_idx` (`nova_id`),
  KEY `fk_restocks_users1_idx` (`user_id`),
  KEY `fk_restocks_drugsheet` (`drugsheet_id`),
  CONSTRAINT `fk_restocks_batches1` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`),
  CONSTRAINT `fk_restocks_drugsheet` FOREIGN KEY (`drugsheet_id`) REFERENCES `drugsheets` (`id`),
  CONSTRAINT `fk_restocks_novas1` FOREIGN KEY (`nova_id`) REFERENCES `novas` (`id`),
  CONSTRAINT `fk_restocks_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. shiftactions
CREATE TABLE IF NOT EXISTS `shiftactions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `text` varchar(45) NOT NULL,
  `shiftsection_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_shift_lines_shift_sections1_idx` (`shiftsection_id`),
  CONSTRAINT `fk_shift_lines_shift_sections1` FOREIGN KEY (`shiftsection_id`) REFERENCES `shiftsections` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. shiftchecks
CREATE TABLE IF NOT EXISTS `shiftchecks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `day` tinyint(1) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `shiftsheet_id` int NOT NULL,
  `user_id` int NOT NULL,
  `shiftaction_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_shiftChecks_shiftSheets1_idx` (`shiftsheet_id`),
  KEY `fk_shiftChecks_users1_idx` (`user_id`),
  KEY `fk_shiftChecks_shiftActions1_idx` (`shiftaction_id`),
  CONSTRAINT `fk_shiftChecks_shiftActions1` FOREIGN KEY (`shiftaction_id`) REFERENCES `shiftactions` (`id`),
  CONSTRAINT `fk_shiftChecks_shiftSheets1` FOREIGN KEY (`shiftsheet_id`) REFERENCES `shiftsheets` (`id`),
  CONSTRAINT `fk_shiftChecks_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. shiftcomments
CREATE TABLE IF NOT EXISTS `shiftcomments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `message` varchar(200) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `carryOn` tinyint(1) NOT NULL DEFAULT '0',
  `endOfCarryOn` date DEFAULT NULL,
  `user_id` int NOT NULL,
  `shiftsheet_id` int NOT NULL,
  `shiftaction_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_comments_users1_idx` (`user_id`),
  KEY `fk_comments_shiftSheets1_idx` (`shiftsheet_id`),
  KEY `fk_comments_shiftActions1_idx` (`shiftaction_id`),
  CONSTRAINT `fk_comments_shiftActions1` FOREIGN KEY (`shiftaction_id`) REFERENCES `shiftactions` (`id`),
  CONSTRAINT `fk_comments_shiftSheets1` FOREIGN KEY (`shiftsheet_id`) REFERENCES `shiftsheets` (`id`),
  CONSTRAINT `fk_comments_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. shiftmodels
CREATE TABLE IF NOT EXISTS `shiftmodels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `nbTeamD` int(11) NOT NULL DEFAULT '1',
  `nbTeamN` int(11) NOT NULL DEFAULT '1',
  `suggested` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idshiftmodels_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. shiftmodel_has_shiftaction
CREATE TABLE IF NOT EXISTS `shiftmodel_has_shiftaction` (
  `id` int NOT NULL AUTO_INCREMENT,
  `shiftaction_id` int NOT NULL,
  `shiftmodel_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `shiftmodelscol_has_shiftactions_UNIQUE` (`id`),
  UNIQUE KEY `uniqueactionpermodel` (`shiftaction_id`,`shiftmodel_id`),
  KEY `fk_shiftactions_has_shiftmodels_shiftmodels1_idx` (`shiftmodel_id`),
  KEY `fk_shiftactions_has_shiftmodels_shiftactions1_idx` (`shiftaction_id`),
  CONSTRAINT `fk_shiftactions_has_shiftmodels_shiftactions1` FOREIGN KEY (`shiftaction_id`) REFERENCES `shiftactions` (`id`),
  CONSTRAINT `fk_shiftactions_has_shiftmodels_shiftmodels1` FOREIGN KEY (`shiftmodel_id`) REFERENCES `shiftmodels` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. shiftsections
CREATE TABLE IF NOT EXISTS `shiftsections` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title_UNIQUE` (`title`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. shiftsheets
CREATE TABLE IF NOT EXISTS `shiftsheets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `shiftmodel_id` int(11) NOT NULL,
  `base_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `closeBy` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq` (`base_id`,`date`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_shiftsheets_bases1_idx` (`base_id`),
  KEY `fk_shiftSheets_status1_idx` (`status_id`),
  KEY `fk_shiftSheets_users5_idx` (`closeBy`),
  KEY `fk_shiftsheets_shiftmodels1_idx` (`shiftmodel_id`),
  CONSTRAINT `fk_shiftSheets_status1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  CONSTRAINT `fk_shiftSheets_users5` FOREIGN KEY (`closeBy`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_shiftsheets_bases1` FOREIGN KEY (`base_id`) REFERENCES `bases` (`id`),
  CONSTRAINT `fk_shiftsheets_shiftmodels1` FOREIGN KEY (`shiftmodel_id`) REFERENCES `shiftmodels` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `shiftteams`;
CREATE TABLE IF NOT EXISTS `shiftteams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shiftsheet_id` int(11) NOT NULL,
  `boss_id` int(11) DEFAULT NULL,
  `teammate_id` int(11) DEFAULT NULL,
  `nova_id` int(11) DEFAULT NULL,
  `day` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_shiftteams_shiftsheet` (`shiftsheet_id`),
  KEY `fk_shiftteams_boss` (`boss_id`),
  KEY `fk_shiftteams_teammate` (`teammate_id`),
  KEY `fk_shiftteams_nova` (`nova_id`),
  CONSTRAINT `fk_shiftteams_shiftsheet` FOREIGN KEY (`shiftsheet_id`) REFERENCES `shiftsheets` (`id`),
  CONSTRAINT `fk_shiftteams_boss` FOREIGN KEY (`boss_id`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_shiftteams_teammate` FOREIGN KEY (`teammate_id`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_shiftteams_nova` FOREIGN KEY (`nova_id`) REFERENCES `novas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. status
CREATE TABLE IF NOT EXISTS `status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `slug` varchar(25) NOT NULL,
  `displayname` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. todos
CREATE TABLE IF NOT EXISTS `todos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `todothing_id` int NOT NULL,
  `todosheet_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  `done_at` datetime DEFAULT NULL,
  `day_of_week` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_todoitems_todotexts1_idx` (`todothing_id`),
  KEY `fk_todoitems_todosheets1_idx` (`todosheet_id`),
  KEY `fk_todoitems_users1_idx` (`user_id`),
  CONSTRAINT `fk_todoitems_todosheets1` FOREIGN KEY (`todosheet_id`) REFERENCES `todosheets` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_todoitems_todotexts1` FOREIGN KEY (`todothing_id`) REFERENCES `todothings` (`id`),
  CONSTRAINT `fk_todoitems_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=190 DEFAULT CHARSET=utf8mb4;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. todosheets
CREATE TABLE IF NOT EXISTS `todosheets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `week` int NOT NULL,
  `status_id` int NOT NULL,
  `base_id` int NOT NULL,
  `closeBy` int DEFAULT NULL,
  `template_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `model_name_UNIQUE` (`template_name`),
  KEY `fk_todosheets_bases1_idx` (`base_id`),
  KEY `fk_todosheets_status1` (`status_id`),
  KEY `fk_todosheets_user1` (`closeBy`),
  CONSTRAINT `fk_todosheets_bases1` FOREIGN KEY (`base_id`) REFERENCES `bases` (`id`),
  CONSTRAINT `fk_todosheets_status1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  CONSTRAINT `fk_todosheets_user1` FOREIGN KEY (`closeBy`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. todothings
CREATE TABLE IF NOT EXISTS `todothings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  `daything` tinyint NOT NULL DEFAULT '1',
  `type` enum('novas') DEFAULT NULL,
  `display_order` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `text_UNIQUE` (`description`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. tokens
CREATE TABLE IF NOT EXISTS `tokens` (
  `id` int NOT NULL AUTO_INCREMENT,
  `value` varchar(50) NOT NULL,
  `validity` datetime NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `token_UNIQUE` (`value`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_table1_users1_idx` (`user_id`),
  CONSTRAINT `fk_table1_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table csunvb_csu. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `initials` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin` tinyint NOT NULL,
  `firstconnect` tinyint NOT NULL,
  `email` varchar(254) DEFAULT NULL,
  `mobileNumber` varchar(20) DEFAULT NULL,
  `number` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `initials_UNIQUE` (`initials`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `worktime`;
CREATE TABLE IF NOT EXISTS `worktime` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(5) NOT NULL,
  `type` int(11) NOT NULL,
  `day` tinyint(1) NULL,
  `base_id` int NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code_UNIQUE` (`code`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_base_id` (`base_id`),
  CONSTRAINT `fk_base_id` FOREIGN KEY (`base_id`) REFERENCES `bases` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
