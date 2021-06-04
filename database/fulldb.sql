-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: csunvb_csu
-- ------------------------------------------------------
-- Server version	5.5.5-10.5.8-MariaDB

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
-- Table structure for table `apitokens`
--
-- Listage de la structure de la base pour csunvb_csu
DROP DATABASE IF EXISTS `csunvb_csu`;
CREATE DATABASE IF NOT EXISTS `csunvb_csu` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `csunvb_csu`;

DROP TABLE IF EXISTS `apitokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apitokens` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  `token` varchar(60) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `user_id` (`user_id`),
  CONSTRAINT `FK_apitokens_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='Tokens utilisés par l''API';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apitokens`
--

LOCK TABLES `apitokens` WRITE;
/*!40000 ALTER TABLE `apitokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `apitokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bases`
--

DROP TABLE IF EXISTS `bases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bases`
--

LOCK TABLES `bases` WRITE;
/*!40000 ALTER TABLE `bases` DISABLE KEYS */;
INSERT INTO `bases` VALUES (5,'La Vallée-de-Joux'),(4,'Payerne'),(3,'Saint-Loup'),(2,'Ste-Croix'),(1,'Yverdon');
/*!40000 ALTER TABLE `bases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `batches`
--

DROP TABLE IF EXISTS `batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `batches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL DEFAULT 'new',
  `drug_id` int(11) NOT NULL,
  `base_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number_UNIQUE` (`number`),
  KEY `fk_batches_drugs_idx` (`drug_id`),
  KEY `fk_batches_bases1_idx` (`base_id`),
  CONSTRAINT `fk_batches_bases1` FOREIGN KEY (`base_id`) REFERENCES `bases` (`id`),
  CONSTRAINT `fk_batches_drugs` FOREIGN KEY (`drug_id`) REFERENCES `drugs` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `batches`
--

LOCK TABLES `batches` WRITE;
/*!40000 ALTER TABLE `batches` DISABLE KEYS */;
INSERT INTO `batches` VALUES (1,'F1us','used',1,1),(2,'F1ne','new',1,1),(3,'F1in','inuse',1,1),(4,'M1us','used',2,1),(5,'M1ne','new',2,1),(6,'M1in','inuse',2,1),(7,'T1us','used',3,1),(8,'T1ne','new',3,1),(9,'T1in','inuse',3,1),(10,'F2us','used',1,2),(11,'F2ne','new',1,2),(12,'F2in','inuse',1,2),(13,'M2us','used',2,2),(14,'M2ne','new',2,2),(15,'M2in','inuse',2,2),(16,'T2us','used',3,2),(17,'T2ne','new',3,2),(18,'T2in','inuse',3,2),(19,'F3us','used',1,3),(20,'F3ne','new',1,3),(21,'F3in','inuse',1,3),(22,'M3us','used',2,3),(23,'M3ne','new',2,3),(24,'M3in','inuse',2,3),(25,'T3us','used',3,3),(26,'T3ne','new',3,3),(27,'T3in','inuse',3,3),(28,'F4us','used',1,4),(29,'F4ne','new',1,4),(30,'F4in','inuse',1,4),(31,'M4us','used',2,4),(32,'M4ne','new',2,4),(33,'M4in','inuse',2,4),(34,'T4us','used',3,4),(35,'T4ne','new',3,4),(36,'T4in','inuse',3,4),(37,'F5us','used',1,5),(38,'F5ne','new',1,5),(39,'F5in','inuse',1,5),(40,'M5us','used',2,5),(41,'M5ne','new',2,5),(42,'M5in','inuse',2,5),(43,'T5us','used',3,5),(44,'T5ne','new',3,5),(45,'T5in','inuse',3,5);
/*!40000 ALTER TABLE `batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drugs`
--

DROP TABLE IF EXISTS `drugs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `drugs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drugs`
--

LOCK TABLES `drugs` WRITE;
/*!40000 ALTER TABLE `drugs` DISABLE KEYS */;
INSERT INTO `drugs` VALUES (1,'Fentanyl'),(2,'Morphine'),(3,'Temesta');
/*!40000 ALTER TABLE `drugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drugsheet_use_batch`
--

DROP TABLE IF EXISTS `drugsheet_use_batch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `drugsheet_use_batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `drugsheet_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_use` (`drugsheet_id`,`batch_id`),
  KEY `fk_drugsheet_use_batch_drugsheets1_idx` (`drugsheet_id`),
  KEY `fk_drugsheet_use_batch_batches1_idx` (`batch_id`),
  CONSTRAINT `fk_drugsheet_use_batch_batches1` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`),
  CONSTRAINT `fk_drugsheet_use_batch_drugsheets1` FOREIGN KEY (`drugsheet_id`) REFERENCES `drugsheets` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=188 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drugsheet_use_batch`
--

LOCK TABLES `drugsheet_use_batch` WRITE;
/*!40000 ALTER TABLE `drugsheet_use_batch` DISABLE KEYS */;
INSERT INTO `drugsheet_use_batch` VALUES (109,23,4),(110,23,8),(111,23,13);
/*!40000 ALTER TABLE `drugsheet_use_batch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drugsheet_use_nova`
--

DROP TABLE IF EXISTS `drugsheet_use_nova`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `drugsheet_use_nova` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `drugsheet_id` int(11) NOT NULL,
  `nova_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_use` (`drugsheet_id`,`nova_id`),
  KEY `fk_drugsheet_use_nova_drugsheets1_idx` (`drugsheet_id`),
  KEY `fk_drugsheet_use_nova_novas1_idx` (`nova_id`),
  CONSTRAINT `fk_drugsheet_use_nova_drugsheets1` FOREIGN KEY (`drugsheet_id`) REFERENCES `drugsheets` (`id`),
  CONSTRAINT `fk_drugsheet_use_nova_novas1` FOREIGN KEY (`nova_id`) REFERENCES `novas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drugsheet_use_nova`
--

LOCK TABLES `drugsheet_use_nova` WRITE;
/*!40000 ALTER TABLE `drugsheet_use_nova` DISABLE KEYS */;
INSERT INTO `drugsheet_use_nova` VALUES (51,23,3),(52,23,5);
/*!40000 ALTER TABLE `drugsheet_use_nova` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drugsheets`
--

DROP TABLE IF EXISTS `drugsheets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `drugsheets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `week` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `base_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `drugSHEETUNIQ` (`week`,`base_id`),
  KEY `fk_drugsheets_bases1_idx` (`base_id`),
  KEY `fk_drugsheets_status1` (`status_id`),
  CONSTRAINT `fk_drugsheets_bases1` FOREIGN KEY (`base_id`) REFERENCES `bases` (`id`),
  CONSTRAINT `fk_drugsheets_status1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drugsheets`
--

LOCK TABLES `drugsheets` WRITE;
/*!40000 ALTER TABLE `drugsheets` DISABLE KEYS */;
INSERT INTO `drugsheets` VALUES (22,2105,2,1),(23,2105,2,2),(25,2105,2,3),(26,2105,2,4),(27,2105,2,5);
/*!40000 ALTER TABLE `drugsheets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drugsignatures`
--

DROP TABLE IF EXISTS `drugsignatures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `drugsignatures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `day` datetime NOT NULL,
  `drugsheet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `base` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `day_drugsheet_id` (`day`,`drugsheet_id`),
  KEY `fk_drugsignatures_drugsheets1_idx` (`drugsheet_id`),
  KEY `fk_drugsignatures_users1_idx` (`user_id`),
  KEY `fk_drugsignatures_bases1` (`base`),
  CONSTRAINT `fk_drugsignatures_bases1` FOREIGN KEY (`base`) REFERENCES `bases` (`id`),
  CONSTRAINT `fk_drugsignatures_drugsheets1` FOREIGN KEY (`drugsheet_id`) REFERENCES `drugsheets` (`id`),
  CONSTRAINT `fk_drugsignatures_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drugsignatures`
--

LOCK TABLES `drugsignatures` WRITE;
/*!40000 ALTER TABLE `drugsignatures` DISABLE KEYS */;
/*!40000 ALTER TABLE `drugsignatures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `report_type` enum('SHIFT','TODO','DRUG') NOT NULL,
  `report_id` int(11) NOT NULL COMMENT 'A foreign key without constraint, because it will point to different tables according to the report type',
  `info` varchar(200) DEFAULT NULL COMMENT 'decribe what is done',
  PRIMARY KEY (`id`),
  KEY `fkmadeby_idx` (`user_id`),
  CONSTRAINT `fkmadeby` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COMMENT='This table contains all log entries for all reports';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `novaUnavailabilites`
--

DROP TABLE IF EXISTS `novaUnavailabilites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `novaUnavailabilites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(45) DEFAULT NULL,
  `date` date NOT NULL,
  `day` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nova_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_novaUnavailabilites` (`date`,`day`,`nova_id`) USING BTREE,
  KEY `fk_novaUnavailabilites_user_id` (`user_id`),
  KEY `fk_novaUnavailabilites_nova_id` (`nova_id`),
  CONSTRAINT `fk_novaUnavailabilites_nova_id` FOREIGN KEY (`nova_id`) REFERENCES `novas` (`id`),
  CONSTRAINT `fk_novaUnavailabilites_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2251 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `novaUnavailabilites`
--

LOCK TABLES `novaUnavailabilites` WRITE;
/*!40000 ALTER TABLE `novaUnavailabilites` DISABLE KEYS */;
/*!40000 ALTER TABLE `novaUnavailabilites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `novachecks`
--

DROP TABLE IF EXISTS `novachecks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `novachecks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) DEFAULT NULL,
  `drug_id` int(11) NOT NULL,
  `nova_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `drugsheet_id` int(11) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2537 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `novachecks`
--

LOCK TABLES `novachecks` WRITE;
/*!40000 ALTER TABLE `novachecks` DISABLE KEYS */;
INSERT INTO `novachecks` VALUES (673,'2021-02-01 00:00:00',6,6,1,3,11,23),(674,'2021-02-01 00:00:00',6,6,1,5,22,23),(675,'2021-02-01 00:00:00',6,6,2,3,22,23),(676,'2021-02-01 00:00:00',6,6,2,5,33,23),(677,'2021-02-01 00:00:00',6,6,3,3,44,23),(678,'2021-02-01 00:00:00',5,5,3,5,55,23),(679,'2021-02-02 00:00:00',6,6,1,3,66,23),(680,'2021-02-02 00:00:00',6,6,1,5,77,23),(681,'2021-02-02 00:00:00',6,6,2,3,87,23),(682,'2021-02-02 00:00:00',6,5,2,5,76,23),(683,'2021-02-02 00:00:00',6,6,3,3,65,23),(684,'2021-02-02 00:00:00',6,6,3,5,54,23),(685,'2021-02-03 00:00:00',4,NULL,1,3,43,23),(686,'2021-02-03 00:00:00',6,NULL,1,5,3,23),(687,'2021-02-03 00:00:00',6,NULL,2,3,23,23),(688,'2021-02-03 00:00:00',6,NULL,2,5,32,23),(689,'2021-02-03 00:00:00',6,NULL,3,3,21,23),(690,'2021-02-03 00:00:00',6,NULL,3,5,12,23);
/*!40000 ALTER TABLE `novachecks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `novas`
--

DROP TABLE IF EXISTS `novas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `novas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number_UNIQUE` (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `novas`
--

LOCK TABLES `novas` WRITE;
/*!40000 ALTER TABLE `novas` DISABLE KEYS */;
INSERT INTO `novas` VALUES (1,31),(2,32),(3,33),(4,35),(5,36),(11,43),(6,57),(7,58),(8,75),(9,76),(10,77);
/*!40000 ALTER TABLE `novas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pharmachecks`
--

DROP TABLE IF EXISTS `pharmachecks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pharmachecks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) DEFAULT NULL,
  `batch_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `drugsheet_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_pharmachecks` (`date`,`batch_id`,`drugsheet_id`) USING BTREE,
  KEY `fk_pharmachecks_batches1_idx` (`batch_id`),
  KEY `fk_pharmachecks_users1_idx` (`user_id`),
  KEY `fk_pharmachecks_drugsheets1_idx` (`drugsheet_id`),
  CONSTRAINT `fk_pharmachecks_batches1` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`),
  CONSTRAINT `fk_pharmachecks_drugsheets1` FOREIGN KEY (`drugsheet_id`) REFERENCES `drugsheets` (`id`),
  CONSTRAINT `fk_pharmachecks_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5936 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pharmachecks`
--

LOCK TABLES `pharmachecks` WRITE;
/*!40000 ALTER TABLE `pharmachecks` DISABLE KEYS */;
INSERT INTO `pharmachecks` VALUES (5150,'2021-02-01 00:00:00',12,11,4,4,23),(5151,'2021-02-01 00:00:00',8,8,8,8,23),(5152,'2021-02-01 00:00:00',6,4,13,13,23),(5153,'2021-02-02 00:00:00',11,11,4,7,23),(5154,'2021-02-02 00:00:00',8,7,8,8,23),(5155,'2021-02-02 00:00:00',4,4,13,2,23),(5156,'2021-02-03 00:00:00',11,NULL,4,7,23),(5157,'2021-02-03 00:00:00',7,NULL,8,66,23),(5158,'2021-02-03 00:00:00',4,NULL,13,4,23);
/*!40000 ALTER TABLE `pharmachecks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `restocks`
--

DROP TABLE IF EXISTS `restocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `quantity` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `nova_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `drugsheet_id` int(11) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restocks`
--

LOCK TABLES `restocks` WRITE;
/*!40000 ALTER TABLE `restocks` DISABLE KEYS */;
INSERT INTO `restocks` VALUES (5,'2021-02-01 00:00:00',1,4,5,2,23),(6,'2021-02-01 00:00:00',2,13,3,3,23);
/*!40000 ALTER TABLE `restocks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shiftactions`
--

DROP TABLE IF EXISTS `shiftactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shiftactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(45) NOT NULL,
  `shiftsection_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_shift_lines_shift_sections1_idx` (`shiftsection_id`),
  CONSTRAINT `fk_shift_lines_shift_sections1` FOREIGN KEY (`shiftsection_id`) REFERENCES `shiftsections` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shiftactions`
--

LOCK TABLES `shiftactions` WRITE;
/*!40000 ALTER TABLE `shiftactions` DISABLE KEYS */;
INSERT INTO `shiftactions` VALUES (1,'Radios',1),(2,'Détecteurs CO',1),(3,'Téléphones',1),(4,'Gt info avisé',1),(5,'Annonce 144',1),(6,'Plein essence',2),(7,'Opérationnel',2),(8,'Rdv garage',2),(9,'Gt vhc avisé',2),(10,'50chf présents',2),(11,'Problèmes d\'interventions hors véhicules',2),(12,'Info trafic consulté',3),(13,'Report des infos trafic sur plan de secteur',3),(14,'Accueil étudiant ou stagiaire',3),(15,'Lecture journal de bord ',3),(16,'Problème et responsable Gt avisé',3),(17,'Centrale propre',4),(18,'Tâches du jour effectuées',4),(19,'Dimanche ',4);
/*!40000 ALTER TABLE `shiftactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shiftchecks`
--

DROP TABLE IF EXISTS `shiftchecks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shiftchecks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` tinyint(1) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `shiftsheet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shiftaction_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_shiftChecks_shiftSheets1_idx` (`shiftsheet_id`),
  KEY `fk_shiftChecks_users1_idx` (`user_id`),
  KEY `fk_shiftChecks_shiftActions1_idx` (`shiftaction_id`),
  CONSTRAINT `fk_shiftChecks_shiftActions1` FOREIGN KEY (`shiftaction_id`) REFERENCES `shiftactions` (`id`),
  CONSTRAINT `fk_shiftChecks_shiftSheets1` FOREIGN KEY (`shiftsheet_id`) REFERENCES `shiftsheets` (`id`),
  CONSTRAINT `fk_shiftChecks_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1417 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shiftchecks`
--

LOCK TABLES `shiftchecks` WRITE;
/*!40000 ALTER TABLE `shiftchecks` DISABLE KEYS */;
INSERT INTO `shiftchecks` VALUES (4,1,'2021-06-04 09:46:08',8,7,1),(5,1,'2021-06-04 09:46:08',8,4,2),(6,0,'2021-06-04 09:46:08',8,3,3),(7,1,'2021-06-04 09:46:08',8,11,3),(8,0,'2021-06-04 09:46:08',8,2,4),(9,1,'2021-06-04 09:46:08',8,7,4),(10,1,'2021-06-04 09:46:08',8,7,5),(11,1,'2021-06-04 09:46:08',8,6,7),(12,1,'2021-06-04 09:46:08',8,104,8),(13,1,'2021-06-04 09:46:08',8,7,9),(14,1,'2021-06-04 09:46:08',8,9,10),(15,0,'2021-06-04 09:46:08',8,2,11),(16,1,'2021-06-04 09:46:08',8,1,11),(17,0,'2021-06-04 09:46:08',8,2,12),(18,1,'2021-06-04 09:46:08',8,8,12),(19,0,'2021-06-04 09:46:08',8,2,13),(20,1,'2021-06-04 09:46:08',8,6,15),(21,1,'2021-06-04 09:46:08',8,5,16),(22,1,'2021-06-04 09:46:08',8,3,18),(23,0,'2021-06-04 09:46:08',23,11,1),(24,0,'2021-06-04 09:46:08',23,10,3),(25,1,'2021-06-04 09:46:08',23,8,3),(26,0,'2021-06-04 09:46:08',23,8,4),(27,0,'2021-06-04 09:46:08',23,5,5),(28,0,'2021-06-04 09:46:08',23,2,7),(29,1,'2021-06-04 09:46:08',23,6,7),(30,1,'2021-06-04 09:46:08',23,104,8),(31,1,'2021-06-04 09:46:08',23,4,9),(32,1,'2021-06-04 09:46:08',23,2,10),(33,0,'2021-06-04 09:46:08',23,3,11),(34,0,'2021-06-04 09:46:08',23,12,12),(35,1,'2021-06-04 09:46:08',23,2,12),(36,0,'2021-06-04 09:46:08',23,3,13),(37,1,'2021-06-04 09:46:08',23,9,14),(38,1,'2021-06-04 09:46:08',23,10,15),(39,0,'2021-06-04 09:46:08',23,6,17),(40,0,'2021-06-04 09:46:08',23,4,18),(41,1,'2021-06-04 09:46:08',23,10,18),(42,0,'2021-06-04 09:46:08',38,6,1),(43,1,'2021-06-04 09:46:08',38,11,1),(44,0,'2021-06-04 09:46:08',38,1,2),(45,1,'2021-06-04 09:46:08',38,4,3),(46,1,'2021-06-04 09:46:08',38,12,5),(47,0,'2021-06-04 09:46:08',38,7,6),(48,0,'2021-06-04 09:46:08',38,12,7),(49,0,'2021-06-04 09:46:08',38,11,8),(50,1,'2021-06-04 09:46:08',38,104,8),(51,1,'2021-06-04 09:46:08',38,12,9),(52,0,'2021-06-04 09:46:08',38,9,10),(53,0,'2021-06-04 09:46:08',38,8,11),(54,1,'2021-06-04 09:46:08',38,5,11),(55,0,'2021-06-04 09:46:08',38,3,12),(56,1,'2021-06-04 09:46:08',38,11,12),(57,1,'2021-06-04 09:46:08',38,7,13),(58,0,'2021-06-04 09:46:08',38,9,14),(59,0,'2021-06-04 09:46:08',38,9,15),(60,1,'2021-06-04 09:46:08',38,5,15),(61,0,'2021-06-04 09:46:08',38,11,16),(62,1,'2021-06-04 09:46:08',38,7,18),(63,1,'2021-06-04 09:46:08',38,11,19),(64,1,'2021-06-04 09:46:08',53,5,1),(65,0,'2021-06-04 09:46:08',53,12,2),(66,1,'2021-06-04 09:46:08',53,7,6),(67,0,'2021-06-04 09:46:08',53,3,7),(68,0,'2021-06-04 09:46:08',53,3,9),(69,1,'2021-06-04 09:46:08',53,1,9),(70,0,'2021-06-04 09:46:08',53,104,10),(71,1,'2021-06-04 09:46:08',53,2,10),(72,1,'2021-06-04 09:46:08',53,2,11),(73,0,'2021-06-04 09:46:08',53,5,12),(74,0,'2021-06-04 09:46:08',53,11,13),(75,1,'2021-06-04 09:46:08',53,11,13),(76,0,'2021-06-04 09:46:08',53,10,14),(77,0,'2021-06-04 09:46:08',53,8,15),(78,1,'2021-06-04 09:46:08',53,12,15),(79,0,'2021-06-04 09:46:08',53,5,16),(80,0,'2021-06-04 09:46:08',53,1,18),(81,1,'2021-06-04 09:46:08',53,8,18),(82,1,'2021-06-04 09:46:08',53,104,19),(83,0,'2021-06-04 09:46:08',68,3,1),(84,1,'2021-06-04 09:46:08',68,104,1),(85,0,'2021-06-04 09:46:08',68,10,2),(86,0,'2021-06-04 09:46:08',68,3,3),(87,1,'2021-06-04 09:46:08',68,2,3),(88,0,'2021-06-04 09:46:08',68,2,4),(89,1,'2021-06-04 09:46:08',68,2,4),(90,1,'2021-06-04 09:46:08',68,6,5),(91,0,'2021-06-04 09:46:08',68,11,7),(92,1,'2021-06-04 09:46:08',68,1,7),(93,0,'2021-06-04 09:46:08',68,2,10),(94,0,'2021-06-04 09:46:08',68,12,11),(95,0,'2021-06-04 09:46:08',68,5,12),(96,0,'2021-06-04 09:46:08',68,1,14),(97,0,'2021-06-04 09:46:08',68,5,15),(98,0,'2021-06-04 09:46:08',68,3,16),(99,1,'2021-06-04 09:46:08',68,6,18),(100,0,'2021-06-04 09:46:08',68,9,19),(101,0,'2021-06-04 09:46:08',1,5,1),(102,1,'2021-06-04 09:46:08',1,5,1),(103,0,'2021-06-04 09:46:08',1,9,2),(104,1,'2021-06-04 09:46:08',1,12,2),(105,0,'2021-06-04 09:46:08',1,3,3),(106,1,'2021-06-04 09:46:08',1,104,3),(107,0,'2021-06-04 09:46:08',1,4,4),(108,1,'2021-06-04 09:46:08',1,2,4),(109,0,'2021-06-04 09:46:08',1,11,5),(110,1,'2021-06-04 09:46:08',1,9,5),(111,0,'2021-06-04 09:46:08',1,7,6),(112,1,'2021-06-04 09:46:08',1,7,6),(113,0,'2021-06-04 09:46:08',1,6,7),(114,1,'2021-06-04 09:46:08',1,1,7),(115,0,'2021-06-04 09:46:08',1,10,8),(116,1,'2021-06-04 09:46:08',1,104,8),(117,0,'2021-06-04 09:46:08',1,9,9),(118,1,'2021-06-04 09:46:08',1,9,9),(119,0,'2021-06-04 09:46:08',1,12,10),(120,1,'2021-06-04 09:46:08',1,7,10),(121,0,'2021-06-04 09:46:08',1,10,11),(122,1,'2021-06-04 09:46:08',1,10,11),(123,0,'2021-06-04 09:46:08',1,2,12),(124,1,'2021-06-04 09:46:08',1,10,12),(125,0,'2021-06-04 09:46:08',1,12,13),(126,1,'2021-06-04 09:46:08',1,11,13),(127,0,'2021-06-04 09:46:08',1,7,14),(128,1,'2021-06-04 09:46:08',1,4,14),(129,0,'2021-06-04 09:46:08',1,11,15),(130,1,'2021-06-04 09:46:08',1,7,15),(131,0,'2021-06-04 09:46:08',1,8,16),(132,1,'2021-06-04 09:46:08',1,2,16),(133,0,'2021-06-04 09:46:08',1,9,17),(134,1,'2021-06-04 09:46:08',1,7,17),(135,0,'2021-06-04 09:46:08',1,8,18),(136,1,'2021-06-04 09:46:08',1,12,18),(137,0,'2021-06-04 09:46:08',1,3,19),(138,1,'2021-06-04 09:46:08',1,4,19),(139,0,'2021-06-04 09:46:08',2,6,1),(140,1,'2021-06-04 09:46:08',2,7,1),(141,0,'2021-06-04 09:46:08',2,1,2),(142,1,'2021-06-04 09:46:08',2,10,2),(143,0,'2021-06-04 09:46:08',2,12,3),(144,1,'2021-06-04 09:46:08',2,11,3),(145,0,'2021-06-04 09:46:08',2,9,4),(146,1,'2021-06-04 09:46:08',2,104,4),(147,0,'2021-06-04 09:46:08',2,3,5),(148,1,'2021-06-04 09:46:08',2,8,5),(149,0,'2021-06-04 09:46:08',2,10,6),(150,1,'2021-06-04 09:46:08',2,9,6),(151,0,'2021-06-04 09:46:08',2,10,7),(152,1,'2021-06-04 09:46:08',2,1,7),(153,0,'2021-06-04 09:46:08',2,7,8),(154,1,'2021-06-04 09:46:08',2,9,8),(155,0,'2021-06-04 09:46:08',2,8,9),(156,1,'2021-06-04 09:46:08',2,4,9),(157,0,'2021-06-04 09:46:08',2,3,10),(158,1,'2021-06-04 09:46:08',2,12,10),(159,0,'2021-06-04 09:46:08',2,6,11),(160,1,'2021-06-04 09:46:08',2,10,11),(161,0,'2021-06-04 09:46:08',2,104,12),(162,1,'2021-06-04 09:46:08',2,10,12),(163,0,'2021-06-04 09:46:08',2,104,13),(164,1,'2021-06-04 09:46:08',2,6,13),(165,0,'2021-06-04 09:46:08',2,8,14),(166,1,'2021-06-04 09:46:08',2,1,14),(167,0,'2021-06-04 09:46:08',2,11,15),(168,1,'2021-06-04 09:46:08',2,7,15),(169,0,'2021-06-04 09:46:08',2,12,16),(170,1,'2021-06-04 09:46:08',2,11,16),(171,0,'2021-06-04 09:46:08',2,5,17),(172,1,'2021-06-04 09:46:08',2,10,17),(173,0,'2021-06-04 09:46:08',2,6,18),(174,1,'2021-06-04 09:46:08',2,12,18),(175,0,'2021-06-04 09:46:08',2,12,19),(176,1,'2021-06-04 09:46:08',2,104,19),(177,0,'2021-06-04 09:46:08',3,8,1),(178,1,'2021-06-04 09:46:08',3,5,1),(179,0,'2021-06-04 09:46:08',3,9,2),(180,1,'2021-06-04 09:46:08',3,2,2),(181,0,'2021-06-04 09:46:08',3,5,3),(182,1,'2021-06-04 09:46:08',3,11,3),(183,0,'2021-06-04 09:46:08',3,7,4),(184,1,'2021-06-04 09:46:08',3,9,4),(185,0,'2021-06-04 09:46:08',3,3,5),(186,1,'2021-06-04 09:46:08',3,5,5),(187,0,'2021-06-04 09:46:08',3,11,6),(188,1,'2021-06-04 09:46:08',3,8,6),(189,0,'2021-06-04 09:46:08',3,10,7),(190,1,'2021-06-04 09:46:08',3,7,7),(191,0,'2021-06-04 09:46:08',3,2,8),(192,1,'2021-06-04 09:46:08',3,5,8),(193,0,'2021-06-04 09:46:08',3,3,9),(194,1,'2021-06-04 09:46:08',3,2,9),(195,0,'2021-06-04 09:46:08',3,10,10),(196,1,'2021-06-04 09:46:08',3,4,10),(197,0,'2021-06-04 09:46:08',3,12,11),(198,1,'2021-06-04 09:46:08',3,1,11),(199,0,'2021-06-04 09:46:08',3,10,12),(200,1,'2021-06-04 09:46:08',3,4,12),(201,0,'2021-06-04 09:46:08',3,10,13),(202,1,'2021-06-04 09:46:08',3,10,13),(203,0,'2021-06-04 09:46:08',3,9,14),(204,1,'2021-06-04 09:46:08',3,5,14),(205,0,'2021-06-04 09:46:08',3,5,15),(206,1,'2021-06-04 09:46:08',3,11,15),(207,0,'2021-06-04 09:46:08',3,7,16),(208,1,'2021-06-04 09:46:08',3,3,16),(209,0,'2021-06-04 09:46:08',3,11,17),(210,1,'2021-06-04 09:46:08',3,104,17),(211,0,'2021-06-04 09:46:08',3,4,18),(212,1,'2021-06-04 09:46:08',3,2,18),(213,0,'2021-06-04 09:46:08',3,2,19),(214,1,'2021-06-04 09:46:08',3,11,19),(215,0,'2021-06-04 09:46:08',4,4,1),(216,1,'2021-06-04 09:46:08',4,9,1),(217,0,'2021-06-04 09:46:08',4,5,2),(218,1,'2021-06-04 09:46:08',4,104,2),(219,0,'2021-06-04 09:46:08',4,10,3),(220,1,'2021-06-04 09:46:08',4,9,3),(221,0,'2021-06-04 09:46:08',4,6,4),(222,1,'2021-06-04 09:46:08',4,5,4),(223,0,'2021-06-04 09:46:08',4,104,5),(224,1,'2021-06-04 09:46:08',4,104,5),(225,0,'2021-06-04 09:46:08',4,4,6),(226,1,'2021-06-04 09:46:08',4,12,6),(227,0,'2021-06-04 09:46:08',4,11,7),(228,1,'2021-06-04 09:46:08',4,4,7),(229,0,'2021-06-04 09:46:08',4,1,8),(230,1,'2021-06-04 09:46:08',4,10,8),(231,0,'2021-06-04 09:46:08',4,6,9),(232,1,'2021-06-04 09:46:08',4,9,9),(233,0,'2021-06-04 09:46:08',4,12,10),(234,1,'2021-06-04 09:46:08',4,3,10),(235,0,'2021-06-04 09:46:08',4,1,11),(236,1,'2021-06-04 09:46:08',4,11,11),(237,0,'2021-06-04 09:46:08',4,1,12),(238,1,'2021-06-04 09:46:08',4,4,12),(239,0,'2021-06-04 09:46:08',4,7,13),(240,0,'2021-06-04 09:46:08',4,7,14),(241,1,'2021-06-04 09:46:08',4,4,14),(242,0,'2021-06-04 09:46:08',4,3,15),(243,1,'2021-06-04 09:46:08',4,11,15),(244,0,'2021-06-04 09:46:08',4,10,16),(245,1,'2021-06-04 09:46:08',4,4,16),(246,0,'2021-06-04 09:46:08',4,5,17),(247,1,'2021-06-04 09:46:08',4,4,17),(248,0,'2021-06-04 09:46:08',4,11,18),(249,1,'2021-06-04 09:46:09',4,6,18),(250,0,'2021-06-04 09:46:09',4,11,19),(251,1,'2021-06-04 09:46:09',4,5,19),(252,0,'2021-06-04 09:46:09',5,12,1),(253,1,'2021-06-04 09:46:09',5,7,1),(254,0,'2021-06-04 09:46:09',5,5,2),(255,1,'2021-06-04 09:46:09',5,3,2),(256,0,'2021-06-04 09:46:09',5,7,3),(257,1,'2021-06-04 09:46:09',5,12,3),(258,0,'2021-06-04 09:46:09',5,3,4),(259,1,'2021-06-04 09:46:09',5,7,4),(260,0,'2021-06-04 09:46:09',5,11,5),(261,1,'2021-06-04 09:46:09',5,11,5),(262,0,'2021-06-04 09:46:09',5,2,6),(263,1,'2021-06-04 09:46:09',5,7,6),(264,0,'2021-06-04 09:46:09',5,2,7),(265,1,'2021-06-04 09:46:09',5,7,7),(266,0,'2021-06-04 09:46:09',5,1,8),(267,1,'2021-06-04 09:46:09',5,104,8),(268,0,'2021-06-04 09:46:09',5,10,9),(269,1,'2021-06-04 09:46:09',5,5,9),(270,0,'2021-06-04 09:46:09',5,8,10),(271,1,'2021-06-04 09:46:09',5,8,10),(272,0,'2021-06-04 09:46:09',5,11,11),(273,1,'2021-06-04 09:46:09',5,1,11),(274,0,'2021-06-04 09:46:09',5,3,12),(275,1,'2021-06-04 09:46:09',5,7,12),(276,0,'2021-06-04 09:46:09',5,5,13),(277,1,'2021-06-04 09:46:09',5,10,13),(278,0,'2021-06-04 09:46:09',5,3,14),(279,1,'2021-06-04 09:46:09',5,12,14),(280,0,'2021-06-04 09:46:09',5,4,15),(281,1,'2021-06-04 09:46:09',5,104,15),(282,0,'2021-06-04 09:46:09',5,7,16),(283,1,'2021-06-04 09:46:09',5,8,16),(284,0,'2021-06-04 09:46:09',5,6,17),(285,1,'2021-06-04 09:46:09',5,12,17),(286,0,'2021-06-04 09:46:09',5,1,18),(287,1,'2021-06-04 09:46:09',5,7,18),(288,0,'2021-06-04 09:46:09',5,7,19),(289,1,'2021-06-04 09:46:09',5,4,19),(290,0,'2021-06-04 09:46:09',6,3,1),(291,1,'2021-06-04 09:46:09',6,12,1),(292,0,'2021-06-04 09:46:09',6,7,2),(293,1,'2021-06-04 09:46:09',6,1,2),(294,0,'2021-06-04 09:46:09',6,1,3),(295,1,'2021-06-04 09:46:09',6,9,3),(296,0,'2021-06-04 09:46:09',6,11,4),(297,1,'2021-06-04 09:46:09',6,11,4),(298,0,'2021-06-04 09:46:09',6,6,5),(299,1,'2021-06-04 09:46:09',6,6,5),(300,0,'2021-06-04 09:46:09',6,104,6),(301,1,'2021-06-04 09:46:09',6,1,6),(302,0,'2021-06-04 09:46:09',6,6,7),(303,1,'2021-06-04 09:46:09',6,7,7),(304,0,'2021-06-04 09:46:09',6,11,8),(305,1,'2021-06-04 09:46:09',6,104,8),(306,0,'2021-06-04 09:46:09',6,11,9),(307,1,'2021-06-04 09:46:09',6,12,9),(308,0,'2021-06-04 09:46:09',6,7,10),(309,1,'2021-06-04 09:46:09',6,3,10),(310,0,'2021-06-04 09:46:09',6,3,11),(311,1,'2021-06-04 09:46:09',6,2,11),(312,0,'2021-06-04 09:46:09',6,3,12),(313,1,'2021-06-04 09:46:09',6,9,12),(314,0,'2021-06-04 09:46:09',6,12,13),(315,1,'2021-06-04 09:46:09',6,3,13),(316,0,'2021-06-04 09:46:09',6,11,14),(317,1,'2021-06-04 09:46:09',6,8,14),(318,0,'2021-06-04 09:46:09',6,9,15),(319,1,'2021-06-04 09:46:09',6,4,15),(320,0,'2021-06-04 09:46:09',6,104,16),(321,1,'2021-06-04 09:46:09',6,5,16),(322,0,'2021-06-04 09:46:09',6,7,17),(323,1,'2021-06-04 09:46:09',6,104,17),(324,0,'2021-06-04 09:46:09',6,8,18),(325,1,'2021-06-04 09:46:09',6,2,18),(326,0,'2021-06-04 09:46:09',6,11,19),(327,1,'2021-06-04 09:46:09',6,2,19),(328,0,'2021-06-04 09:46:09',7,1,1),(329,1,'2021-06-04 09:46:09',7,11,1),(330,0,'2021-06-04 09:46:09',7,7,2),(331,1,'2021-06-04 09:46:09',7,4,2),(332,0,'2021-06-04 09:46:09',7,11,3),(333,1,'2021-06-04 09:46:09',7,6,3),(334,0,'2021-06-04 09:46:09',7,6,4),(335,1,'2021-06-04 09:46:09',7,4,4),(336,0,'2021-06-04 09:46:09',7,11,5),(337,1,'2021-06-04 09:46:09',7,1,5),(338,0,'2021-06-04 09:46:09',7,7,6),(339,1,'2021-06-04 09:46:09',7,1,6),(340,0,'2021-06-04 09:46:09',7,4,7),(341,1,'2021-06-04 09:46:09',7,6,7),(342,0,'2021-06-04 09:46:09',7,2,8),(343,1,'2021-06-04 09:46:09',7,104,8),(344,0,'2021-06-04 09:46:09',7,104,9),(345,1,'2021-06-04 09:46:09',7,5,9),(346,0,'2021-06-04 09:46:09',7,9,10),(347,1,'2021-06-04 09:46:09',7,104,10),(348,0,'2021-06-04 09:46:09',7,5,11),(349,1,'2021-06-04 09:46:09',7,1,11),(350,0,'2021-06-04 09:46:09',7,2,12),(351,1,'2021-06-04 09:46:09',7,12,12),(352,0,'2021-06-04 09:46:09',7,1,13),(353,1,'2021-06-04 09:46:09',7,104,13),(354,0,'2021-06-04 09:46:09',7,4,14),(355,1,'2021-06-04 09:46:09',7,9,14),(356,0,'2021-06-04 09:46:09',7,9,15),(357,1,'2021-06-04 09:46:09',7,2,15),(358,0,'2021-06-04 09:46:09',7,6,16),(359,1,'2021-06-04 09:46:09',7,10,16),(360,0,'2021-06-04 09:46:09',7,9,17),(361,1,'2021-06-04 09:46:09',7,5,17),(362,0,'2021-06-04 09:46:09',7,5,18),(363,1,'2021-06-04 09:46:09',7,4,18),(364,0,'2021-06-04 09:46:09',7,2,19),(365,1,'2021-06-04 09:46:09',7,8,19),(366,0,'2021-06-04 09:46:09',16,1,1),(367,1,'2021-06-04 09:46:09',16,8,1),(368,0,'2021-06-04 09:46:09',16,5,2),(369,1,'2021-06-04 09:46:09',16,2,2),(370,0,'2021-06-04 09:46:09',16,9,3),(371,1,'2021-06-04 09:46:09',16,6,3),(372,0,'2021-06-04 09:46:09',16,9,4),(373,1,'2021-06-04 09:46:09',16,7,4),(374,0,'2021-06-04 09:46:09',16,4,5),(375,1,'2021-06-04 09:46:09',16,1,5),(376,0,'2021-06-04 09:46:09',16,7,6),(377,1,'2021-06-04 09:46:09',16,2,6),(378,0,'2021-06-04 09:46:09',16,10,7),(379,1,'2021-06-04 09:46:09',16,1,7),(380,0,'2021-06-04 09:46:09',16,104,8),(381,1,'2021-06-04 09:46:09',16,104,8),(382,0,'2021-06-04 09:46:09',16,10,9),(383,1,'2021-06-04 09:46:09',16,4,9),(384,0,'2021-06-04 09:46:09',16,7,10),(385,1,'2021-06-04 09:46:09',16,11,10),(386,0,'2021-06-04 09:46:09',16,2,11),(387,1,'2021-06-04 09:46:09',16,7,11),(388,0,'2021-06-04 09:46:09',16,7,12),(389,1,'2021-06-04 09:46:09',16,104,12),(390,0,'2021-06-04 09:46:09',16,11,13),(391,1,'2021-06-04 09:46:09',16,2,13),(392,0,'2021-06-04 09:46:09',16,7,14),(393,1,'2021-06-04 09:46:09',16,12,14),(394,0,'2021-06-04 09:46:09',16,3,15),(395,1,'2021-06-04 09:46:09',16,2,15),(396,0,'2021-06-04 09:46:09',16,9,16),(397,1,'2021-06-04 09:46:09',16,10,16),(398,0,'2021-06-04 09:46:09',16,8,17),(399,1,'2021-06-04 09:46:09',16,9,17),(400,0,'2021-06-04 09:46:09',16,6,18),(401,1,'2021-06-04 09:46:09',16,8,18),(402,0,'2021-06-04 09:46:09',16,4,19),(403,1,'2021-06-04 09:46:09',16,104,19),(404,0,'2021-06-04 09:46:09',17,104,1),(405,1,'2021-06-04 09:46:09',17,9,1),(406,0,'2021-06-04 09:46:09',17,4,2),(407,1,'2021-06-04 09:46:09',17,5,2),(408,0,'2021-06-04 09:46:09',17,10,3),(409,1,'2021-06-04 09:46:09',17,2,3),(410,0,'2021-06-04 09:46:09',17,12,4),(411,1,'2021-06-04 09:46:09',17,5,4),(412,0,'2021-06-04 09:46:09',17,11,5),(413,1,'2021-06-04 09:46:09',17,2,5),(414,0,'2021-06-04 09:46:09',17,12,6),(415,1,'2021-06-04 09:46:09',17,9,6),(416,0,'2021-06-04 09:46:09',17,7,7),(417,1,'2021-06-04 09:46:09',17,10,7),(418,0,'2021-06-04 09:46:09',17,12,8),(419,1,'2021-06-04 09:46:09',17,4,8),(420,0,'2021-06-04 09:46:09',17,2,9),(421,1,'2021-06-04 09:46:09',17,1,9),(422,0,'2021-06-04 09:46:09',17,1,10),(423,1,'2021-06-04 09:46:09',17,8,10),(424,0,'2021-06-04 09:46:09',17,7,11),(425,1,'2021-06-04 09:46:09',17,8,11),(426,0,'2021-06-04 09:46:09',17,1,12),(427,1,'2021-06-04 09:46:09',17,10,12),(428,0,'2021-06-04 09:46:09',17,11,13),(429,1,'2021-06-04 09:46:09',17,9,13),(430,0,'2021-06-04 09:46:09',17,4,14),(431,1,'2021-06-04 09:46:09',17,4,14),(432,0,'2021-06-04 09:46:09',17,11,15),(433,1,'2021-06-04 09:46:09',17,104,15),(434,0,'2021-06-04 09:46:09',17,1,16),(435,1,'2021-06-04 09:46:09',17,3,16),(436,0,'2021-06-04 09:46:09',17,3,17),(437,1,'2021-06-04 09:46:09',17,8,17),(438,0,'2021-06-04 09:46:09',17,4,18),(439,1,'2021-06-04 09:46:09',17,4,18),(440,0,'2021-06-04 09:46:09',17,7,19),(441,1,'2021-06-04 09:46:09',17,1,19),(442,0,'2021-06-04 09:46:09',18,8,1),(443,1,'2021-06-04 09:46:09',18,9,1),(444,0,'2021-06-04 09:46:09',18,104,2),(445,1,'2021-06-04 09:46:09',18,3,2),(446,0,'2021-06-04 09:46:09',18,11,3),(447,0,'2021-06-04 09:46:09',18,2,4),(448,1,'2021-06-04 09:46:09',18,10,4),(449,0,'2021-06-04 09:46:09',18,10,5),(450,1,'2021-06-04 09:46:09',18,7,5),(451,0,'2021-06-04 09:46:09',18,3,6),(452,1,'2021-06-04 09:46:09',18,2,6),(453,0,'2021-06-04 09:46:09',18,104,7),(454,1,'2021-06-04 09:46:09',18,2,7),(455,0,'2021-06-04 09:46:09',18,3,8),(456,1,'2021-06-04 09:46:09',18,12,8),(457,0,'2021-06-04 09:46:09',18,1,9),(458,1,'2021-06-04 09:46:09',18,10,9),(459,0,'2021-06-04 09:46:09',18,11,10),(460,1,'2021-06-04 09:46:09',18,104,10),(461,0,'2021-06-04 09:46:09',18,5,11),(462,1,'2021-06-04 09:46:09',18,2,11),(463,0,'2021-06-04 09:46:09',18,8,12),(464,1,'2021-06-04 09:46:09',18,11,12),(465,0,'2021-06-04 09:46:09',18,4,13),(466,1,'2021-06-04 09:46:09',18,5,13),(467,0,'2021-06-04 09:46:09',18,11,14),(468,1,'2021-06-04 09:46:09',18,1,14),(469,0,'2021-06-04 09:46:09',18,4,15),(470,1,'2021-06-04 09:46:09',18,6,15),(471,0,'2021-06-04 09:46:09',18,2,16),(472,1,'2021-06-04 09:46:09',18,11,16),(473,0,'2021-06-04 09:46:09',18,9,17),(474,0,'2021-06-04 09:46:09',18,5,18),(475,1,'2021-06-04 09:46:09',18,8,18),(476,0,'2021-06-04 09:46:09',18,8,19),(477,1,'2021-06-04 09:46:09',18,3,19),(478,0,'2021-06-04 09:46:09',19,12,1),(479,1,'2021-06-04 09:46:09',19,8,1),(480,0,'2021-06-04 09:46:09',19,11,2),(481,1,'2021-06-04 09:46:09',19,7,2),(482,0,'2021-06-04 09:46:09',19,2,3),(483,1,'2021-06-04 09:46:09',19,12,3),(484,0,'2021-06-04 09:46:09',19,11,4),(485,1,'2021-06-04 09:46:09',19,6,4),(486,0,'2021-06-04 09:46:09',19,3,5),(487,1,'2021-06-04 09:46:09',19,3,5),(488,0,'2021-06-04 09:46:09',19,9,6),(489,1,'2021-06-04 09:46:09',19,9,6),(490,0,'2021-06-04 09:46:09',19,1,7),(491,1,'2021-06-04 09:46:09',19,4,7),(492,0,'2021-06-04 09:46:09',19,4,8),(493,1,'2021-06-04 09:46:09',19,7,8),(494,0,'2021-06-04 09:46:09',19,7,9),(495,1,'2021-06-04 09:46:09',19,4,9),(496,0,'2021-06-04 09:46:09',19,2,10),(497,1,'2021-06-04 09:46:09',19,5,10),(498,0,'2021-06-04 09:46:09',19,11,11),(499,0,'2021-06-04 09:46:09',19,3,12),(500,1,'2021-06-04 09:46:09',19,6,12),(501,0,'2021-06-04 09:46:09',19,12,13),(502,1,'2021-06-04 09:46:09',19,1,13),(503,0,'2021-06-04 09:46:09',19,104,14),(504,1,'2021-06-04 09:46:09',19,9,14),(505,0,'2021-06-04 09:46:09',19,12,15),(506,1,'2021-06-04 09:46:09',19,12,15),(507,0,'2021-06-04 09:46:09',19,1,16),(508,1,'2021-06-04 09:46:09',19,2,16),(509,0,'2021-06-04 09:46:09',19,9,17),(510,1,'2021-06-04 09:46:09',19,11,17),(511,0,'2021-06-04 09:46:09',19,104,18),(512,1,'2021-06-04 09:46:09',19,104,18),(513,0,'2021-06-04 09:46:09',19,3,19),(514,1,'2021-06-04 09:46:09',19,11,19),(515,0,'2021-06-04 09:46:09',20,11,1),(516,1,'2021-06-04 09:46:09',20,1,1),(517,0,'2021-06-04 09:46:09',20,8,2),(518,0,'2021-06-04 09:46:09',20,104,3),(519,1,'2021-06-04 09:46:09',20,5,3),(520,0,'2021-06-04 09:46:09',20,7,4),(521,1,'2021-06-04 09:46:09',20,12,4),(522,0,'2021-06-04 09:46:09',20,12,5),(523,1,'2021-06-04 09:46:09',20,3,5),(524,0,'2021-06-04 09:46:09',20,6,6),(525,1,'2021-06-04 09:46:09',20,9,6),(526,0,'2021-06-04 09:46:09',20,6,7),(527,1,'2021-06-04 09:46:09',20,6,7),(528,0,'2021-06-04 09:46:09',20,9,8),(529,1,'2021-06-04 09:46:09',20,4,8),(530,0,'2021-06-04 09:46:09',20,5,9),(531,1,'2021-06-04 09:46:09',20,104,9),(532,0,'2021-06-04 09:46:09',20,5,10),(533,1,'2021-06-04 09:46:09',20,3,10),(534,0,'2021-06-04 09:46:09',20,6,11),(535,1,'2021-06-04 09:46:09',20,5,11),(536,0,'2021-06-04 09:46:09',20,5,12),(537,1,'2021-06-04 09:46:09',20,3,12),(538,0,'2021-06-04 09:46:09',20,7,13),(539,1,'2021-06-04 09:46:09',20,12,13),(540,0,'2021-06-04 09:46:09',20,9,14),(541,1,'2021-06-04 09:46:09',20,12,14),(542,0,'2021-06-04 09:46:09',20,6,15),(543,1,'2021-06-04 09:46:09',20,9,15),(544,0,'2021-06-04 09:46:09',20,5,16),(545,1,'2021-06-04 09:46:09',20,1,16),(546,0,'2021-06-04 09:46:09',20,11,17),(547,1,'2021-06-04 09:46:09',20,12,17),(548,0,'2021-06-04 09:46:09',20,2,18),(549,1,'2021-06-04 09:46:09',20,5,18),(550,0,'2021-06-04 09:46:09',20,12,19),(551,1,'2021-06-04 09:46:09',20,9,19),(552,0,'2021-06-04 09:46:09',21,7,1),(553,1,'2021-06-04 09:46:09',21,11,1),(554,0,'2021-06-04 09:46:09',21,9,2),(555,1,'2021-06-04 09:46:09',21,2,2),(556,0,'2021-06-04 09:46:09',21,10,3),(557,1,'2021-06-04 09:46:09',21,6,3),(558,0,'2021-06-04 09:46:09',21,6,4),(559,1,'2021-06-04 09:46:09',21,8,4),(560,0,'2021-06-04 09:46:09',21,2,5),(561,1,'2021-06-04 09:46:09',21,4,5),(562,0,'2021-06-04 09:46:09',21,10,6),(563,1,'2021-06-04 09:46:09',21,9,6),(564,0,'2021-06-04 09:46:09',21,1,7),(565,1,'2021-06-04 09:46:09',21,8,7),(566,0,'2021-06-04 09:46:09',21,5,8),(567,1,'2021-06-04 09:46:09',21,3,8),(568,0,'2021-06-04 09:46:09',21,8,9),(569,1,'2021-06-04 09:46:09',21,8,9),(570,0,'2021-06-04 09:46:09',21,104,10),(571,1,'2021-06-04 09:46:09',21,8,10),(572,0,'2021-06-04 09:46:09',21,3,11),(573,1,'2021-06-04 09:46:09',21,5,11),(574,0,'2021-06-04 09:46:09',21,104,12),(575,1,'2021-06-04 09:46:09',21,3,12),(576,0,'2021-06-04 09:46:09',21,6,13),(577,1,'2021-06-04 09:46:09',21,1,13),(578,0,'2021-06-04 09:46:09',21,104,14),(579,1,'2021-06-04 09:46:09',21,10,14),(580,0,'2021-06-04 09:46:09',21,4,15),(581,1,'2021-06-04 09:46:09',21,10,15),(582,0,'2021-06-04 09:46:09',21,11,16),(583,1,'2021-06-04 09:46:09',21,7,16),(584,0,'2021-06-04 09:46:09',21,3,17),(585,1,'2021-06-04 09:46:09',21,3,17),(586,0,'2021-06-04 09:46:09',21,10,18),(587,1,'2021-06-04 09:46:09',21,1,18),(588,0,'2021-06-04 09:46:09',21,4,19),(589,1,'2021-06-04 09:46:09',21,104,19),(590,0,'2021-06-04 09:46:09',22,3,1),(591,1,'2021-06-04 09:46:09',22,11,1),(592,0,'2021-06-04 09:46:09',22,8,2),(593,1,'2021-06-04 09:46:09',22,12,2),(594,0,'2021-06-04 09:46:09',22,11,3),(595,1,'2021-06-04 09:46:09',22,3,3),(596,0,'2021-06-04 09:46:09',22,104,4),(597,1,'2021-06-04 09:46:09',22,2,4),(598,0,'2021-06-04 09:46:09',22,11,5),(599,1,'2021-06-04 09:46:09',22,11,5),(600,0,'2021-06-04 09:46:09',22,6,6),(601,1,'2021-06-04 09:46:09',22,3,6),(602,0,'2021-06-04 09:46:09',22,11,7),(603,1,'2021-06-04 09:46:09',22,8,7),(604,0,'2021-06-04 09:46:09',22,5,8),(605,1,'2021-06-04 09:46:09',22,5,8),(606,0,'2021-06-04 09:46:09',22,2,9),(607,1,'2021-06-04 09:46:09',22,5,9),(608,0,'2021-06-04 09:46:09',22,9,10),(609,1,'2021-06-04 09:46:09',22,6,10),(610,0,'2021-06-04 09:46:09',22,8,11),(611,1,'2021-06-04 09:46:09',22,6,11),(612,0,'2021-06-04 09:46:09',22,6,12),(613,1,'2021-06-04 09:46:09',22,3,12),(614,0,'2021-06-04 09:46:09',22,1,13),(615,1,'2021-06-04 09:46:09',22,1,13),(616,0,'2021-06-04 09:46:09',22,12,14),(617,1,'2021-06-04 09:46:09',22,1,14),(618,0,'2021-06-04 09:46:09',22,11,15),(619,1,'2021-06-04 09:46:09',22,2,15),(620,0,'2021-06-04 09:46:09',22,12,16),(621,1,'2021-06-04 09:46:09',22,104,16),(622,0,'2021-06-04 09:46:09',22,104,17),(623,1,'2021-06-04 09:46:09',22,2,17),(624,0,'2021-06-04 09:46:09',22,11,18),(625,1,'2021-06-04 09:46:09',22,9,18),(626,0,'2021-06-04 09:46:09',22,8,19),(627,1,'2021-06-04 09:46:09',22,11,19),(628,0,'2021-06-04 09:46:09',31,8,1),(629,1,'2021-06-04 09:46:09',31,104,1),(630,0,'2021-06-04 09:46:09',31,1,2),(631,1,'2021-06-04 09:46:09',31,11,2),(632,0,'2021-06-04 09:46:09',31,11,3),(633,1,'2021-06-04 09:46:09',31,5,3),(634,0,'2021-06-04 09:46:09',31,12,4),(635,1,'2021-06-04 09:46:09',31,12,4),(636,0,'2021-06-04 09:46:09',31,8,5),(637,1,'2021-06-04 09:46:09',31,2,5),(638,0,'2021-06-04 09:46:09',31,10,6),(639,1,'2021-06-04 09:46:09',31,2,6),(640,0,'2021-06-04 09:46:09',31,3,7),(641,1,'2021-06-04 09:46:09',31,7,7),(642,0,'2021-06-04 09:46:09',31,2,8),(643,1,'2021-06-04 09:46:09',31,5,8),(644,0,'2021-06-04 09:46:09',31,1,9),(645,1,'2021-06-04 09:46:09',31,3,9),(646,0,'2021-06-04 09:46:09',31,1,10),(647,1,'2021-06-04 09:46:09',31,7,10),(648,0,'2021-06-04 09:46:09',31,1,11),(649,1,'2021-06-04 09:46:09',31,12,11),(650,0,'2021-06-04 09:46:09',31,8,12),(651,1,'2021-06-04 09:46:09',31,5,12),(652,0,'2021-06-04 09:46:09',31,10,13),(653,1,'2021-06-04 09:46:09',31,10,13),(654,0,'2021-06-04 09:46:09',31,8,14),(655,1,'2021-06-04 09:46:09',31,104,14),(656,0,'2021-06-04 09:46:09',31,1,15),(657,1,'2021-06-04 09:46:09',31,10,15),(658,0,'2021-06-04 09:46:09',31,9,16),(659,1,'2021-06-04 09:46:09',31,12,16),(660,0,'2021-06-04 09:46:09',31,10,17),(661,1,'2021-06-04 09:46:09',31,3,17),(662,0,'2021-06-04 09:46:09',31,12,18),(663,0,'2021-06-04 09:46:09',31,9,19),(664,1,'2021-06-04 09:46:09',31,3,19),(665,0,'2021-06-04 09:46:09',32,8,1),(666,1,'2021-06-04 09:46:09',32,10,1),(667,0,'2021-06-04 09:46:09',32,12,2),(668,1,'2021-06-04 09:46:09',32,2,2),(669,0,'2021-06-04 09:46:09',32,3,3),(670,1,'2021-06-04 09:46:09',32,3,3),(671,0,'2021-06-04 09:46:09',32,3,4),(672,1,'2021-06-04 09:46:09',32,8,4),(673,0,'2021-06-04 09:46:09',32,7,5),(674,1,'2021-06-04 09:46:09',32,10,5),(675,0,'2021-06-04 09:46:09',32,5,6),(676,1,'2021-06-04 09:46:09',32,8,6),(677,0,'2021-06-04 09:46:09',32,3,7),(678,1,'2021-06-04 09:46:09',32,12,7),(679,0,'2021-06-04 09:46:09',32,12,8),(680,1,'2021-06-04 09:46:09',32,11,8),(681,0,'2021-06-04 09:46:09',32,4,9),(682,1,'2021-06-04 09:46:09',32,10,9),(683,0,'2021-06-04 09:46:09',32,6,10),(684,1,'2021-06-04 09:46:09',32,6,10),(685,0,'2021-06-04 09:46:09',32,3,11),(686,1,'2021-06-04 09:46:09',32,12,11),(687,0,'2021-06-04 09:46:09',32,6,12),(688,1,'2021-06-04 09:46:09',32,11,12),(689,0,'2021-06-04 09:46:09',32,3,13),(690,1,'2021-06-04 09:46:09',32,7,13),(691,0,'2021-06-04 09:46:09',32,11,14),(692,1,'2021-06-04 09:46:09',32,9,14),(693,0,'2021-06-04 09:46:09',32,8,15),(694,1,'2021-06-04 09:46:09',32,5,15),(695,0,'2021-06-04 09:46:09',32,11,16),(696,1,'2021-06-04 09:46:09',32,4,16),(697,0,'2021-06-04 09:46:09',32,6,17),(698,1,'2021-06-04 09:46:09',32,11,17),(699,0,'2021-06-04 09:46:09',32,3,18),(700,1,'2021-06-04 09:46:09',32,12,18),(701,0,'2021-06-04 09:46:09',32,7,19),(702,1,'2021-06-04 09:46:09',32,9,19),(703,0,'2021-06-04 09:46:09',33,104,1),(704,1,'2021-06-04 09:46:09',33,11,1),(705,0,'2021-06-04 09:46:09',33,3,2),(706,1,'2021-06-04 09:46:09',33,104,2),(707,0,'2021-06-04 09:46:09',33,10,3),(708,1,'2021-06-04 09:46:09',33,4,3),(709,0,'2021-06-04 09:46:09',33,11,4),(710,1,'2021-06-04 09:46:09',33,5,4),(711,0,'2021-06-04 09:46:09',33,8,5),(712,1,'2021-06-04 09:46:09',33,10,5),(713,0,'2021-06-04 09:46:09',33,104,6),(714,1,'2021-06-04 09:46:09',33,7,6),(715,0,'2021-06-04 09:46:09',33,3,7),(716,1,'2021-06-04 09:46:09',33,3,7),(717,0,'2021-06-04 09:46:09',33,9,8),(718,1,'2021-06-04 09:46:09',33,11,8),(719,0,'2021-06-04 09:46:09',33,4,9),(720,1,'2021-06-04 09:46:09',33,11,9),(721,0,'2021-06-04 09:46:09',33,8,10),(722,1,'2021-06-04 09:46:09',33,11,10),(723,0,'2021-06-04 09:46:09',33,2,11),(724,1,'2021-06-04 09:46:09',33,4,11),(725,0,'2021-06-04 09:46:09',33,2,12),(726,1,'2021-06-04 09:46:09',33,5,12),(727,0,'2021-06-04 09:46:09',33,2,13),(728,1,'2021-06-04 09:46:09',33,11,13),(729,0,'2021-06-04 09:46:09',33,1,14),(730,1,'2021-06-04 09:46:09',33,3,14),(731,0,'2021-06-04 09:46:09',33,6,15),(732,1,'2021-06-04 09:46:09',33,10,15),(733,0,'2021-06-04 09:46:09',33,12,16),(734,1,'2021-06-04 09:46:09',33,5,16),(735,0,'2021-06-04 09:46:09',33,9,17),(736,1,'2021-06-04 09:46:09',33,7,17),(737,0,'2021-06-04 09:46:09',33,6,18),(738,1,'2021-06-04 09:46:09',33,10,18),(739,0,'2021-06-04 09:46:09',33,1,19),(740,1,'2021-06-04 09:46:09',33,6,19),(741,0,'2021-06-04 09:46:09',34,5,1),(742,1,'2021-06-04 09:46:09',34,3,1),(743,0,'2021-06-04 09:46:09',34,10,2),(744,1,'2021-06-04 09:46:09',34,8,2),(745,0,'2021-06-04 09:46:09',34,104,3),(746,1,'2021-06-04 09:46:09',34,104,3),(747,0,'2021-06-04 09:46:09',34,2,4),(748,1,'2021-06-04 09:46:09',34,10,4),(749,0,'2021-06-04 09:46:09',34,10,5),(750,1,'2021-06-04 09:46:09',34,5,5),(751,0,'2021-06-04 09:46:09',34,11,6),(752,1,'2021-06-04 09:46:09',34,2,6),(753,0,'2021-06-04 09:46:09',34,6,7),(754,1,'2021-06-04 09:46:09',34,6,7),(755,0,'2021-06-04 09:46:09',34,12,8),(756,1,'2021-06-04 09:46:09',34,4,8),(757,0,'2021-06-04 09:46:09',34,3,9),(758,1,'2021-06-04 09:46:09',34,9,9),(759,0,'2021-06-04 09:46:09',34,5,10),(760,1,'2021-06-04 09:46:09',34,3,10),(761,0,'2021-06-04 09:46:09',34,1,11),(762,0,'2021-06-04 09:46:09',34,3,12),(763,1,'2021-06-04 09:46:09',34,104,12),(764,0,'2021-06-04 09:46:09',34,1,13),(765,1,'2021-06-04 09:46:09',34,5,13),(766,0,'2021-06-04 09:46:09',34,12,14),(767,1,'2021-06-04 09:46:09',34,9,14),(768,0,'2021-06-04 09:46:09',34,12,15),(769,1,'2021-06-04 09:46:09',34,9,15),(770,0,'2021-06-04 09:46:09',34,10,16),(771,1,'2021-06-04 09:46:09',34,3,16),(772,0,'2021-06-04 09:46:09',34,11,17),(773,1,'2021-06-04 09:46:09',34,8,17),(774,0,'2021-06-04 09:46:09',34,1,18),(775,1,'2021-06-04 09:46:09',34,5,18),(776,0,'2021-06-04 09:46:09',34,5,19),(777,1,'2021-06-04 09:46:09',34,5,19),(778,0,'2021-06-04 09:46:09',35,104,1),(779,1,'2021-06-04 09:46:09',35,10,1),(780,0,'2021-06-04 09:46:09',35,104,2),(781,1,'2021-06-04 09:46:09',35,9,2),(782,0,'2021-06-04 09:46:09',35,3,3),(783,1,'2021-06-04 09:46:09',35,9,3),(784,0,'2021-06-04 09:46:09',35,10,4),(785,1,'2021-06-04 09:46:09',35,4,4),(786,0,'2021-06-04 09:46:09',35,7,5),(787,1,'2021-06-04 09:46:09',35,10,5),(788,0,'2021-06-04 09:46:09',35,2,6),(789,1,'2021-06-04 09:46:09',35,8,6),(790,0,'2021-06-04 09:46:09',35,4,7),(791,1,'2021-06-04 09:46:09',35,104,7),(792,0,'2021-06-04 09:46:09',35,7,8),(793,1,'2021-06-04 09:46:09',35,12,8),(794,0,'2021-06-04 09:46:09',35,1,9),(795,1,'2021-06-04 09:46:09',35,1,9),(796,0,'2021-06-04 09:46:09',35,11,10),(797,1,'2021-06-04 09:46:09',35,1,10),(798,0,'2021-06-04 09:46:09',35,11,11),(799,1,'2021-06-04 09:46:09',35,12,11),(800,0,'2021-06-04 09:46:09',35,104,12),(801,1,'2021-06-04 09:46:09',35,6,12),(802,0,'2021-06-04 09:46:09',35,6,13),(803,1,'2021-06-04 09:46:09',35,1,13),(804,0,'2021-06-04 09:46:09',35,1,14),(805,1,'2021-06-04 09:46:09',35,9,14),(806,0,'2021-06-04 09:46:09',35,12,15),(807,1,'2021-06-04 09:46:09',35,8,15),(808,0,'2021-06-04 09:46:09',35,6,16),(809,1,'2021-06-04 09:46:09',35,8,16),(810,0,'2021-06-04 09:46:09',35,6,17),(811,1,'2021-06-04 09:46:09',35,8,17),(812,0,'2021-06-04 09:46:09',35,2,18),(813,1,'2021-06-04 09:46:09',35,9,18),(814,0,'2021-06-04 09:46:09',35,8,19),(815,1,'2021-06-04 09:46:09',35,2,19),(816,0,'2021-06-04 09:46:09',36,6,1),(817,1,'2021-06-04 09:46:09',36,6,1),(818,0,'2021-06-04 09:46:09',36,104,2),(819,1,'2021-06-04 09:46:09',36,10,2),(820,0,'2021-06-04 09:46:09',36,11,3),(821,1,'2021-06-04 09:46:09',36,7,3),(822,0,'2021-06-04 09:46:09',36,11,4),(823,1,'2021-06-04 09:46:09',36,12,4),(824,0,'2021-06-04 09:46:09',36,5,5),(825,1,'2021-06-04 09:46:09',36,11,5),(826,0,'2021-06-04 09:46:09',36,10,6),(827,1,'2021-06-04 09:46:09',36,12,6),(828,0,'2021-06-04 09:46:09',36,9,7),(829,1,'2021-06-04 09:46:09',36,11,7),(830,0,'2021-06-04 09:46:09',36,8,8),(831,1,'2021-06-04 09:46:09',36,1,8),(832,0,'2021-06-04 09:46:09',36,3,9),(833,1,'2021-06-04 09:46:09',36,104,9),(834,0,'2021-06-04 09:46:09',36,3,10),(835,1,'2021-06-04 09:46:09',36,12,10),(836,0,'2021-06-04 09:46:09',36,4,11),(837,1,'2021-06-04 09:46:09',36,2,11),(838,0,'2021-06-04 09:46:09',36,3,12),(839,1,'2021-06-04 09:46:09',36,7,12),(840,0,'2021-06-04 09:46:09',36,6,13),(841,1,'2021-06-04 09:46:09',36,4,13),(842,0,'2021-06-04 09:46:09',36,10,14),(843,1,'2021-06-04 09:46:09',36,9,14),(844,0,'2021-06-04 09:46:09',36,11,15),(845,1,'2021-06-04 09:46:09',36,11,15),(846,0,'2021-06-04 09:46:09',36,8,16),(847,1,'2021-06-04 09:46:09',36,2,16),(848,0,'2021-06-04 09:46:09',36,8,17),(849,1,'2021-06-04 09:46:09',36,3,17),(850,0,'2021-06-04 09:46:09',36,12,18),(851,1,'2021-06-04 09:46:09',36,1,18),(852,0,'2021-06-04 09:46:09',36,8,19),(853,1,'2021-06-04 09:46:09',36,1,19),(854,0,'2021-06-04 09:46:09',37,104,1),(855,1,'2021-06-04 09:46:09',37,11,1),(856,0,'2021-06-04 09:46:09',37,104,2),(857,1,'2021-06-04 09:46:09',37,1,2),(858,0,'2021-06-04 09:46:09',37,7,3),(859,1,'2021-06-04 09:46:09',37,12,3),(860,0,'2021-06-04 09:46:09',37,8,4),(861,1,'2021-06-04 09:46:09',37,5,4),(862,0,'2021-06-04 09:46:09',37,1,5),(863,1,'2021-06-04 09:46:09',37,2,5),(864,0,'2021-06-04 09:46:09',37,104,6),(865,1,'2021-06-04 09:46:09',37,10,6),(866,0,'2021-06-04 09:46:09',37,11,7),(867,1,'2021-06-04 09:46:09',37,12,7),(868,0,'2021-06-04 09:46:09',37,7,8),(869,1,'2021-06-04 09:46:09',37,1,8),(870,0,'2021-06-04 09:46:09',37,2,9),(871,1,'2021-06-04 09:46:09',37,11,9),(872,0,'2021-06-04 09:46:09',37,4,10),(873,1,'2021-06-04 09:46:09',37,104,10),(874,0,'2021-06-04 09:46:09',37,8,11),(875,1,'2021-06-04 09:46:09',37,104,11),(876,0,'2021-06-04 09:46:09',37,10,12),(877,1,'2021-06-04 09:46:09',37,12,12),(878,0,'2021-06-04 09:46:09',37,11,13),(879,1,'2021-06-04 09:46:09',37,3,13),(880,0,'2021-06-04 09:46:09',37,6,14),(881,1,'2021-06-04 09:46:09',37,4,14),(882,0,'2021-06-04 09:46:09',37,6,15),(883,1,'2021-06-04 09:46:09',37,2,15),(884,0,'2021-06-04 09:46:09',37,5,16),(885,1,'2021-06-04 09:46:09',37,3,16),(886,0,'2021-06-04 09:46:09',37,10,17),(887,1,'2021-06-04 09:46:09',37,12,17),(888,0,'2021-06-04 09:46:09',37,6,18),(889,1,'2021-06-04 09:46:09',37,9,18),(890,0,'2021-06-04 09:46:09',37,11,19),(891,1,'2021-06-04 09:46:09',37,5,19),(892,0,'2021-06-04 09:46:09',46,12,1),(893,1,'2021-06-04 09:46:09',46,9,1),(894,0,'2021-06-04 09:46:09',46,6,2),(895,1,'2021-06-04 09:46:09',46,11,2),(896,0,'2021-06-04 09:46:09',46,1,3),(897,1,'2021-06-04 09:46:09',46,11,3),(898,0,'2021-06-04 09:46:09',46,8,4),(899,1,'2021-06-04 09:46:09',46,11,4),(900,0,'2021-06-04 09:46:09',46,4,5),(901,1,'2021-06-04 09:46:09',46,1,5),(902,0,'2021-06-04 09:46:09',46,6,6),(903,1,'2021-06-04 09:46:09',46,11,6),(904,0,'2021-06-04 09:46:09',46,8,7),(905,1,'2021-06-04 09:46:09',46,2,7),(906,0,'2021-06-04 09:46:09',46,5,8),(907,1,'2021-06-04 09:46:09',46,2,8),(908,0,'2021-06-04 09:46:09',46,2,9),(909,1,'2021-06-04 09:46:09',46,7,9),(910,0,'2021-06-04 09:46:09',46,11,10),(911,1,'2021-06-04 09:46:09',46,11,10),(912,0,'2021-06-04 09:46:09',46,11,11),(913,1,'2021-06-04 09:46:09',46,3,11),(914,0,'2021-06-04 09:46:09',46,104,12),(915,1,'2021-06-04 09:46:09',46,11,12),(916,0,'2021-06-04 09:46:09',46,7,13),(917,1,'2021-06-04 09:46:09',46,4,13),(918,0,'2021-06-04 09:46:09',46,4,14),(919,1,'2021-06-04 09:46:09',46,3,14),(920,0,'2021-06-04 09:46:09',46,8,15),(921,1,'2021-06-04 09:46:09',46,9,15),(922,0,'2021-06-04 09:46:09',46,7,16),(923,1,'2021-06-04 09:46:09',46,4,16),(924,0,'2021-06-04 09:46:09',46,1,17),(925,1,'2021-06-04 09:46:09',46,2,17),(926,0,'2021-06-04 09:46:09',46,8,18),(927,1,'2021-06-04 09:46:09',46,7,18),(928,0,'2021-06-04 09:46:09',46,1,19),(929,1,'2021-06-04 09:46:09',46,3,19),(930,0,'2021-06-04 09:46:09',47,11,1),(931,1,'2021-06-04 09:46:09',47,6,1),(932,0,'2021-06-04 09:46:09',47,104,2),(933,1,'2021-06-04 09:46:09',47,3,2),(934,0,'2021-06-04 09:46:09',47,1,3),(935,1,'2021-06-04 09:46:09',47,1,3),(936,0,'2021-06-04 09:46:09',47,10,4),(937,1,'2021-06-04 09:46:09',47,5,4),(938,0,'2021-06-04 09:46:09',47,5,5),(939,1,'2021-06-04 09:46:09',47,104,5),(940,0,'2021-06-04 09:46:09',47,3,6),(941,1,'2021-06-04 09:46:09',47,4,6),(942,0,'2021-06-04 09:46:09',47,1,7),(943,1,'2021-06-04 09:46:09',47,4,7),(944,0,'2021-06-04 09:46:09',47,9,8),(945,1,'2021-06-04 09:46:09',47,3,8),(946,0,'2021-06-04 09:46:09',47,7,9),(947,1,'2021-06-04 09:46:09',47,12,9),(948,0,'2021-06-04 09:46:09',47,5,10),(949,1,'2021-06-04 09:46:09',47,9,10),(950,0,'2021-06-04 09:46:09',47,7,11),(951,1,'2021-06-04 09:46:09',47,6,11),(952,0,'2021-06-04 09:46:09',47,104,12),(953,1,'2021-06-04 09:46:09',47,11,12),(954,0,'2021-06-04 09:46:09',47,3,13),(955,1,'2021-06-04 09:46:09',47,2,13),(956,0,'2021-06-04 09:46:09',47,11,14),(957,1,'2021-06-04 09:46:09',47,11,14),(958,0,'2021-06-04 09:46:09',47,5,15),(959,1,'2021-06-04 09:46:09',47,9,15),(960,0,'2021-06-04 09:46:09',47,4,16),(961,1,'2021-06-04 09:46:09',47,104,16),(962,0,'2021-06-04 09:46:09',47,12,17),(963,1,'2021-06-04 09:46:09',47,6,17),(964,0,'2021-06-04 09:46:09',47,1,18),(965,1,'2021-06-04 09:46:09',47,4,18),(966,0,'2021-06-04 09:46:09',47,7,19),(967,1,'2021-06-04 09:46:09',47,8,19),(968,1,'2021-06-04 09:46:09',48,4,1),(969,1,'2021-06-04 09:46:09',48,3,2),(970,0,'2021-06-04 09:46:09',48,9,3),(971,1,'2021-06-04 09:46:09',48,9,3),(972,0,'2021-06-04 09:46:09',48,11,4),(973,1,'2021-06-04 09:46:09',48,11,4),(974,0,'2021-06-04 09:46:09',48,7,5),(975,1,'2021-06-04 09:46:09',48,104,5),(976,0,'2021-06-04 09:46:09',48,6,6),(977,1,'2021-06-04 09:46:09',48,11,6),(978,0,'2021-06-04 09:46:09',48,9,7),(979,1,'2021-06-04 09:46:09',48,4,7),(980,0,'2021-06-04 09:46:09',48,7,8),(981,1,'2021-06-04 09:46:09',48,3,8),(982,0,'2021-06-04 09:46:09',48,4,9),(983,1,'2021-06-04 09:46:09',48,4,9),(984,0,'2021-06-04 09:46:09',48,2,10),(985,1,'2021-06-04 09:46:09',48,9,10),(986,0,'2021-06-04 09:46:09',48,11,11),(987,1,'2021-06-04 09:46:09',48,4,11),(988,0,'2021-06-04 09:46:09',48,9,12),(989,1,'2021-06-04 09:46:09',48,104,12),(990,0,'2021-06-04 09:46:09',48,2,13),(991,1,'2021-06-04 09:46:09',48,5,13),(992,0,'2021-06-04 09:46:09',48,4,14),(993,1,'2021-06-04 09:46:09',48,2,14),(994,0,'2021-06-04 09:46:09',48,7,15),(995,1,'2021-06-04 09:46:09',48,9,15),(996,0,'2021-06-04 09:46:09',48,3,16),(997,1,'2021-06-04 09:46:09',48,12,16),(998,0,'2021-06-04 09:46:09',48,5,17),(999,1,'2021-06-04 09:46:09',48,11,17),(1000,0,'2021-06-04 09:46:09',48,104,18),(1001,1,'2021-06-04 09:46:09',48,8,18),(1002,0,'2021-06-04 09:46:09',48,5,19),(1003,1,'2021-06-04 09:46:09',48,8,19),(1004,0,'2021-06-04 09:46:09',49,5,1),(1005,1,'2021-06-04 09:46:09',49,4,1),(1006,0,'2021-06-04 09:46:09',49,3,2),(1007,1,'2021-06-04 09:46:09',49,4,2),(1008,0,'2021-06-04 09:46:09',49,9,3),(1009,1,'2021-06-04 09:46:09',49,5,3),(1010,0,'2021-06-04 09:46:09',49,8,4),(1011,1,'2021-06-04 09:46:09',49,4,4),(1012,0,'2021-06-04 09:46:09',49,5,5),(1013,1,'2021-06-04 09:46:09',49,9,5),(1014,0,'2021-06-04 09:46:09',49,8,6),(1015,1,'2021-06-04 09:46:09',49,3,6),(1016,0,'2021-06-04 09:46:09',49,8,7),(1017,1,'2021-06-04 09:46:09',49,4,7),(1018,0,'2021-06-04 09:46:09',49,4,8),(1019,1,'2021-06-04 09:46:09',49,10,8),(1020,0,'2021-06-04 09:46:09',49,3,9),(1021,1,'2021-06-04 09:46:09',49,7,9),(1022,0,'2021-06-04 09:46:09',49,5,10),(1023,1,'2021-06-04 09:46:09',49,7,10),(1024,0,'2021-06-04 09:46:09',49,10,11),(1025,1,'2021-06-04 09:46:09',49,10,11),(1026,0,'2021-06-04 09:46:09',49,12,12),(1027,1,'2021-06-04 09:46:09',49,2,12),(1028,0,'2021-06-04 09:46:09',49,11,13),(1029,1,'2021-06-04 09:46:09',49,7,13),(1030,0,'2021-06-04 09:46:09',49,6,14),(1031,1,'2021-06-04 09:46:09',49,11,14),(1032,0,'2021-06-04 09:46:09',49,2,15),(1033,1,'2021-06-04 09:46:09',49,11,15),(1034,0,'2021-06-04 09:46:09',49,4,16),(1035,1,'2021-06-04 09:46:09',49,5,16),(1036,0,'2021-06-04 09:46:09',49,4,17),(1037,1,'2021-06-04 09:46:09',49,5,17),(1038,0,'2021-06-04 09:46:09',49,7,18),(1039,1,'2021-06-04 09:46:09',49,1,18),(1040,0,'2021-06-04 09:46:09',49,3,19),(1041,1,'2021-06-04 09:46:09',49,5,19),(1042,0,'2021-06-04 09:46:09',50,104,1),(1043,1,'2021-06-04 09:46:09',50,3,1),(1044,0,'2021-06-04 09:46:09',50,2,2),(1045,1,'2021-06-04 09:46:09',50,4,2),(1046,0,'2021-06-04 09:46:09',50,4,3),(1047,1,'2021-06-04 09:46:09',50,104,3),(1048,0,'2021-06-04 09:46:09',50,12,4),(1049,1,'2021-06-04 09:46:09',50,6,4),(1050,0,'2021-06-04 09:46:09',50,6,5),(1051,1,'2021-06-04 09:46:09',50,7,5),(1052,0,'2021-06-04 09:46:09',50,5,6),(1053,1,'2021-06-04 09:46:09',50,10,6),(1054,0,'2021-06-04 09:46:09',50,8,7),(1055,1,'2021-06-04 09:46:09',50,9,7),(1056,0,'2021-06-04 09:46:09',50,3,8),(1057,1,'2021-06-04 09:46:09',50,8,8),(1058,0,'2021-06-04 09:46:09',50,7,9),(1059,1,'2021-06-04 09:46:09',50,2,9),(1060,0,'2021-06-04 09:46:09',50,6,10),(1061,1,'2021-06-04 09:46:09',50,4,10),(1062,0,'2021-06-04 09:46:09',50,9,11),(1063,1,'2021-06-04 09:46:09',50,3,11),(1064,0,'2021-06-04 09:46:09',50,6,12),(1065,1,'2021-06-04 09:46:09',50,10,12),(1066,0,'2021-06-04 09:46:09',50,1,13),(1067,1,'2021-06-04 09:46:09',50,8,13),(1068,0,'2021-06-04 09:46:09',50,5,14),(1069,1,'2021-06-04 09:46:09',50,10,14),(1070,0,'2021-06-04 09:46:09',50,8,15),(1071,1,'2021-06-04 09:46:09',50,10,15),(1072,0,'2021-06-04 09:46:09',50,8,16),(1073,1,'2021-06-04 09:46:09',50,5,16),(1074,0,'2021-06-04 09:46:09',50,7,17),(1075,1,'2021-06-04 09:46:09',50,3,17),(1076,0,'2021-06-04 09:46:09',50,9,18),(1077,1,'2021-06-04 09:46:09',50,12,18),(1078,0,'2021-06-04 09:46:09',50,7,19),(1079,1,'2021-06-04 09:46:09',50,11,19),(1080,0,'2021-06-04 09:46:09',51,5,1),(1081,1,'2021-06-04 09:46:09',51,9,1),(1082,1,'2021-06-04 09:46:09',51,4,2),(1083,0,'2021-06-04 09:46:09',51,9,3),(1084,1,'2021-06-04 09:46:09',51,4,3),(1085,0,'2021-06-04 09:46:09',51,5,4),(1086,1,'2021-06-04 09:46:09',51,2,4),(1087,0,'2021-06-04 09:46:09',51,11,5),(1088,1,'2021-06-04 09:46:09',51,104,5),(1089,0,'2021-06-04 09:46:09',51,2,6),(1090,1,'2021-06-04 09:46:09',51,10,6),(1091,0,'2021-06-04 09:46:09',51,11,7),(1092,1,'2021-06-04 09:46:09',51,4,7),(1093,0,'2021-06-04 09:46:09',51,6,8),(1094,1,'2021-06-04 09:46:09',51,10,8),(1095,0,'2021-06-04 09:46:09',51,4,9),(1096,1,'2021-06-04 09:46:09',51,2,9),(1097,0,'2021-06-04 09:46:09',51,2,10),(1098,1,'2021-06-04 09:46:09',51,7,10),(1099,0,'2021-06-04 09:46:09',51,3,11),(1100,1,'2021-06-04 09:46:09',51,6,11),(1101,0,'2021-06-04 09:46:09',51,9,12),(1102,1,'2021-06-04 09:46:09',51,7,12),(1103,0,'2021-06-04 09:46:09',51,3,13),(1104,1,'2021-06-04 09:46:09',51,10,13),(1105,0,'2021-06-04 09:46:09',51,1,14),(1106,1,'2021-06-04 09:46:09',51,7,14),(1107,0,'2021-06-04 09:46:09',51,9,15),(1108,1,'2021-06-04 09:46:09',51,11,15),(1109,0,'2021-06-04 09:46:09',51,12,16),(1110,1,'2021-06-04 09:46:09',51,4,16),(1111,0,'2021-06-04 09:46:09',51,2,17),(1112,1,'2021-06-04 09:46:09',51,11,17),(1113,0,'2021-06-04 09:46:09',51,12,18),(1114,1,'2021-06-04 09:46:09',51,4,18),(1115,0,'2021-06-04 09:46:09',51,8,19),(1116,1,'2021-06-04 09:46:09',51,11,19),(1117,0,'2021-06-04 09:46:09',52,6,1),(1118,1,'2021-06-04 09:46:09',52,10,1),(1119,0,'2021-06-04 09:46:09',52,2,2),(1120,1,'2021-06-04 09:46:09',52,12,2),(1121,0,'2021-06-04 09:46:09',52,7,3),(1122,1,'2021-06-04 09:46:09',52,5,3),(1123,0,'2021-06-04 09:46:09',52,3,4),(1124,1,'2021-06-04 09:46:09',52,8,4),(1125,0,'2021-06-04 09:46:09',52,11,5),(1126,1,'2021-06-04 09:46:09',52,4,5),(1127,0,'2021-06-04 09:46:09',52,4,6),(1128,1,'2021-06-04 09:46:09',52,104,6),(1129,0,'2021-06-04 09:46:09',52,2,7),(1130,1,'2021-06-04 09:46:09',52,2,7),(1131,0,'2021-06-04 09:46:09',52,5,8),(1132,1,'2021-06-04 09:46:09',52,11,8),(1133,0,'2021-06-04 09:46:09',52,4,9),(1134,1,'2021-06-04 09:46:09',52,3,9),(1135,0,'2021-06-04 09:46:09',52,104,10),(1136,1,'2021-06-04 09:46:09',52,7,10),(1137,0,'2021-06-04 09:46:09',52,104,11),(1138,1,'2021-06-04 09:46:09',52,8,11),(1139,0,'2021-06-04 09:46:09',52,10,12),(1140,1,'2021-06-04 09:46:09',52,8,12),(1141,0,'2021-06-04 09:46:09',52,4,13),(1142,1,'2021-06-04 09:46:09',52,3,13),(1143,0,'2021-06-04 09:46:09',52,6,14),(1144,1,'2021-06-04 09:46:09',52,9,14),(1145,0,'2021-06-04 09:46:09',52,11,15),(1146,1,'2021-06-04 09:46:09',52,8,15),(1147,0,'2021-06-04 09:46:09',52,11,16),(1148,1,'2021-06-04 09:46:09',52,11,16),(1149,0,'2021-06-04 09:46:09',52,11,17),(1150,1,'2021-06-04 09:46:09',52,11,17),(1151,0,'2021-06-04 09:46:09',52,1,18),(1152,1,'2021-06-04 09:46:09',52,3,18),(1153,0,'2021-06-04 09:46:09',52,3,19),(1154,1,'2021-06-04 09:46:09',52,8,19),(1155,0,'2021-06-04 09:46:09',61,9,1),(1156,1,'2021-06-04 09:46:09',61,104,1),(1157,0,'2021-06-04 09:46:09',61,7,2),(1158,1,'2021-06-04 09:46:09',61,4,2),(1159,0,'2021-06-04 09:46:09',61,10,3),(1160,1,'2021-06-04 09:46:09',61,2,3),(1161,0,'2021-06-04 09:46:09',61,11,4),(1162,1,'2021-06-04 09:46:09',61,1,4),(1163,0,'2021-06-04 09:46:09',61,104,5),(1164,1,'2021-06-04 09:46:09',61,5,5),(1165,0,'2021-06-04 09:46:09',61,4,6),(1166,1,'2021-06-04 09:46:09',61,11,6),(1167,0,'2021-06-04 09:46:09',61,9,7),(1168,1,'2021-06-04 09:46:09',61,11,7),(1169,0,'2021-06-04 09:46:09',61,2,8),(1170,0,'2021-06-04 09:46:09',61,7,9),(1171,1,'2021-06-04 09:46:09',61,1,9),(1172,0,'2021-06-04 09:46:09',61,6,10),(1173,1,'2021-06-04 09:46:09',61,10,10),(1174,0,'2021-06-04 09:46:09',61,1,11),(1175,1,'2021-06-04 09:46:09',61,9,11),(1176,0,'2021-06-04 09:46:09',61,7,12),(1177,1,'2021-06-04 09:46:09',61,3,12),(1178,0,'2021-06-04 09:46:09',61,12,13),(1179,1,'2021-06-04 09:46:09',61,8,13),(1180,0,'2021-06-04 09:46:09',61,104,14),(1181,1,'2021-06-04 09:46:09',61,7,14),(1182,0,'2021-06-04 09:46:09',61,1,15),(1183,1,'2021-06-04 09:46:09',61,4,15),(1184,0,'2021-06-04 09:46:09',61,7,16),(1185,1,'2021-06-04 09:46:09',61,6,16),(1186,0,'2021-06-04 09:46:09',61,10,17),(1187,1,'2021-06-04 09:46:09',61,2,17),(1188,0,'2021-06-04 09:46:09',61,4,18),(1189,1,'2021-06-04 09:46:09',61,104,18),(1190,0,'2021-06-04 09:46:09',61,9,19),(1191,1,'2021-06-04 09:46:09',61,1,19),(1192,0,'2021-06-04 09:46:09',62,11,1),(1193,1,'2021-06-04 09:46:09',62,9,1),(1194,0,'2021-06-04 09:46:09',62,4,2),(1195,1,'2021-06-04 09:46:09',62,104,2),(1196,0,'2021-06-04 09:46:09',62,12,3),(1197,1,'2021-06-04 09:46:09',62,5,3),(1198,0,'2021-06-04 09:46:09',62,4,4),(1199,1,'2021-06-04 09:46:09',62,2,4),(1200,0,'2021-06-04 09:46:09',62,104,5),(1201,1,'2021-06-04 09:46:09',62,11,5),(1202,0,'2021-06-04 09:46:09',62,8,6),(1203,1,'2021-06-04 09:46:09',62,4,6),(1204,0,'2021-06-04 09:46:09',62,4,7),(1205,1,'2021-06-04 09:46:09',62,8,7),(1206,0,'2021-06-04 09:46:09',62,104,8),(1207,1,'2021-06-04 09:46:09',62,11,8),(1208,0,'2021-06-04 09:46:09',62,4,9),(1209,1,'2021-06-04 09:46:09',62,2,9),(1210,0,'2021-06-04 09:46:09',62,9,10),(1211,1,'2021-06-04 09:46:09',62,2,10),(1212,0,'2021-06-04 09:46:09',62,6,11),(1213,1,'2021-06-04 09:46:09',62,1,11),(1214,0,'2021-06-04 09:46:09',62,104,12),(1215,1,'2021-06-04 09:46:09',62,12,12),(1216,0,'2021-06-04 09:46:09',62,4,13),(1217,1,'2021-06-04 09:46:09',62,104,13),(1218,0,'2021-06-04 09:46:09',62,9,14),(1219,1,'2021-06-04 09:46:09',62,6,14),(1220,0,'2021-06-04 09:46:09',62,9,15),(1221,1,'2021-06-04 09:46:09',62,7,15),(1222,0,'2021-06-04 09:46:09',62,12,16),(1223,1,'2021-06-04 09:46:09',62,5,16),(1224,0,'2021-06-04 09:46:09',62,12,17),(1225,1,'2021-06-04 09:46:09',62,1,17),(1226,0,'2021-06-04 09:46:09',62,8,18),(1227,1,'2021-06-04 09:46:09',62,11,18),(1228,0,'2021-06-04 09:46:09',62,6,19),(1229,1,'2021-06-04 09:46:09',62,12,19),(1230,0,'2021-06-04 09:46:09',63,6,1),(1231,1,'2021-06-04 09:46:09',63,104,1),(1232,0,'2021-06-04 09:46:09',63,12,2),(1233,1,'2021-06-04 09:46:09',63,3,2),(1234,0,'2021-06-04 09:46:09',63,4,3),(1235,1,'2021-06-04 09:46:09',63,10,3),(1236,0,'2021-06-04 09:46:09',63,9,4),(1237,1,'2021-06-04 09:46:09',63,1,4),(1238,0,'2021-06-04 09:46:09',63,104,5),(1239,1,'2021-06-04 09:46:09',63,6,5),(1240,0,'2021-06-04 09:46:09',63,5,6),(1241,1,'2021-06-04 09:46:09',63,5,6),(1242,0,'2021-06-04 09:46:09',63,12,7),(1243,1,'2021-06-04 09:46:09',63,7,7),(1244,0,'2021-06-04 09:46:09',63,104,8),(1245,1,'2021-06-04 09:46:09',63,5,8),(1246,0,'2021-06-04 09:46:09',63,6,9),(1247,1,'2021-06-04 09:46:09',63,11,9),(1248,0,'2021-06-04 09:46:09',63,2,10),(1249,1,'2021-06-04 09:46:09',63,3,10),(1250,0,'2021-06-04 09:46:09',63,12,11),(1251,1,'2021-06-04 09:46:09',63,5,11),(1252,0,'2021-06-04 09:46:09',63,4,12),(1253,1,'2021-06-04 09:46:09',63,6,12),(1254,0,'2021-06-04 09:46:09',63,2,13),(1255,1,'2021-06-04 09:46:09',63,7,13),(1256,0,'2021-06-04 09:46:09',63,11,14),(1257,1,'2021-06-04 09:46:09',63,7,14),(1258,0,'2021-06-04 09:46:09',63,2,15),(1259,1,'2021-06-04 09:46:09',63,8,15),(1260,0,'2021-06-04 09:46:09',63,7,16),(1261,1,'2021-06-04 09:46:09',63,3,16),(1262,0,'2021-06-04 09:46:09',63,12,17),(1263,1,'2021-06-04 09:46:09',63,10,17),(1264,0,'2021-06-04 09:46:09',63,7,18),(1265,1,'2021-06-04 09:46:09',63,3,18),(1266,0,'2021-06-04 09:46:09',63,1,19),(1267,1,'2021-06-04 09:46:09',63,10,19),(1268,0,'2021-06-04 09:46:09',64,9,1),(1269,1,'2021-06-04 09:46:09',64,6,1),(1270,0,'2021-06-04 09:46:09',64,10,2),(1271,1,'2021-06-04 09:46:09',64,104,2),(1272,0,'2021-06-04 09:46:09',64,8,3),(1273,1,'2021-06-04 09:46:09',64,10,3),(1274,0,'2021-06-04 09:46:09',64,7,4),(1275,1,'2021-06-04 09:46:09',64,2,4),(1276,0,'2021-06-04 09:46:09',64,10,5),(1277,1,'2021-06-04 09:46:09',64,7,5),(1278,0,'2021-06-04 09:46:09',64,11,6),(1279,1,'2021-06-04 09:46:09',64,3,6),(1280,0,'2021-06-04 09:46:09',64,2,7),(1281,1,'2021-06-04 09:46:09',64,104,7),(1282,0,'2021-06-04 09:46:09',64,10,8),(1283,1,'2021-06-04 09:46:09',64,10,8),(1284,0,'2021-06-04 09:46:09',64,104,9),(1285,1,'2021-06-04 09:46:09',64,104,9),(1286,0,'2021-06-04 09:46:09',64,7,10),(1287,1,'2021-06-04 09:46:09',64,2,10),(1288,0,'2021-06-04 09:46:09',64,5,11),(1289,1,'2021-06-04 09:46:09',64,11,11),(1290,0,'2021-06-04 09:46:09',64,8,12),(1291,1,'2021-06-04 09:46:09',64,1,12),(1292,0,'2021-06-04 09:46:09',64,11,13),(1293,1,'2021-06-04 09:46:09',64,1,13),(1294,0,'2021-06-04 09:46:09',64,5,14),(1295,1,'2021-06-04 09:46:09',64,7,14),(1296,0,'2021-06-04 09:46:09',64,9,15),(1297,1,'2021-06-04 09:46:09',64,1,15),(1298,0,'2021-06-04 09:46:09',64,5,16),(1299,1,'2021-06-04 09:46:09',64,8,16),(1300,0,'2021-06-04 09:46:09',64,10,17),(1301,1,'2021-06-04 09:46:09',64,3,17),(1302,0,'2021-06-04 09:46:09',64,10,18),(1303,1,'2021-06-04 09:46:10',64,5,18),(1304,0,'2021-06-04 09:46:10',64,8,19),(1305,1,'2021-06-04 09:46:10',64,10,19),(1306,0,'2021-06-04 09:46:10',65,12,1),(1307,1,'2021-06-04 09:46:10',65,6,1),(1308,0,'2021-06-04 09:46:10',65,3,2),(1309,1,'2021-06-04 09:46:10',65,12,2),(1310,0,'2021-06-04 09:46:10',65,9,3),(1311,1,'2021-06-04 09:46:10',65,3,3),(1312,0,'2021-06-04 09:46:10',65,8,4),(1313,1,'2021-06-04 09:46:10',65,9,4),(1314,0,'2021-06-04 09:46:10',65,104,5),(1315,1,'2021-06-04 09:46:10',65,4,5),(1316,0,'2021-06-04 09:46:10',65,3,6),(1317,1,'2021-06-04 09:46:10',65,9,6),(1318,0,'2021-06-04 09:46:10',65,4,7),(1319,1,'2021-06-04 09:46:10',65,7,7),(1320,0,'2021-06-04 09:46:10',65,6,8),(1321,1,'2021-06-04 09:46:10',65,10,8),(1322,0,'2021-06-04 09:46:10',65,6,9),(1323,1,'2021-06-04 09:46:10',65,1,9),(1324,0,'2021-06-04 09:46:10',65,1,10),(1325,1,'2021-06-04 09:46:10',65,10,10),(1326,0,'2021-06-04 09:46:10',65,4,11),(1327,1,'2021-06-04 09:46:10',65,7,11),(1328,0,'2021-06-04 09:46:10',65,104,12),(1329,1,'2021-06-04 09:46:10',65,3,12),(1330,0,'2021-06-04 09:46:10',65,8,13),(1331,1,'2021-06-04 09:46:10',65,5,13),(1332,0,'2021-06-04 09:46:10',65,2,14),(1333,1,'2021-06-04 09:46:10',65,8,14),(1334,1,'2021-06-04 09:46:10',65,11,15),(1335,1,'2021-06-04 09:46:10',65,12,16),(1336,0,'2021-06-04 09:46:10',65,9,17),(1337,1,'2021-06-04 09:46:10',65,104,17),(1338,0,'2021-06-04 09:46:10',65,6,18),(1339,1,'2021-06-04 09:46:10',65,2,18),(1340,0,'2021-06-04 09:46:10',65,104,19),(1341,1,'2021-06-04 09:46:10',65,8,19),(1342,0,'2021-06-04 09:46:10',66,8,1),(1343,1,'2021-06-04 09:46:10',66,2,1),(1344,0,'2021-06-04 09:46:10',66,6,2),(1345,1,'2021-06-04 09:46:10',66,3,2),(1346,0,'2021-06-04 09:46:10',66,3,3),(1347,1,'2021-06-04 09:46:10',66,6,3),(1348,0,'2021-06-04 09:46:10',66,4,4),(1349,1,'2021-06-04 09:46:10',66,3,4),(1350,1,'2021-06-04 09:46:10',66,5,5),(1351,0,'2021-06-04 09:46:10',66,7,6),(1352,1,'2021-06-04 09:46:10',66,11,6),(1353,0,'2021-06-04 09:46:10',66,11,7),(1354,1,'2021-06-04 09:46:10',66,8,7),(1355,0,'2021-06-04 09:46:10',66,8,8),(1356,1,'2021-06-04 09:46:10',66,3,8),(1357,0,'2021-06-04 09:46:10',66,2,9),(1358,1,'2021-06-04 09:46:10',66,7,9),(1359,0,'2021-06-04 09:46:10',66,6,10),(1360,1,'2021-06-04 09:46:10',66,6,10),(1361,0,'2021-06-04 09:46:10',66,11,11),(1362,1,'2021-06-04 09:46:10',66,12,11),(1363,0,'2021-06-04 09:46:10',66,1,12),(1364,1,'2021-06-04 09:46:10',66,4,12),(1365,0,'2021-06-04 09:46:10',66,5,13),(1366,1,'2021-06-04 09:46:10',66,3,13),(1367,0,'2021-06-04 09:46:10',66,104,14),(1368,1,'2021-06-04 09:46:10',66,1,14),(1369,0,'2021-06-04 09:46:10',66,5,15),(1370,1,'2021-06-04 09:46:10',66,3,15),(1371,0,'2021-06-04 09:46:10',66,3,16),(1372,1,'2021-06-04 09:46:10',66,7,16),(1373,0,'2021-06-04 09:46:10',66,8,17),(1374,1,'2021-06-04 09:46:10',66,2,17),(1375,0,'2021-06-04 09:46:10',66,10,18),(1376,1,'2021-06-04 09:46:10',66,12,18),(1377,0,'2021-06-04 09:46:10',66,8,19),(1378,1,'2021-06-04 09:46:10',66,10,19),(1379,0,'2021-06-04 09:46:10',67,10,1),(1380,1,'2021-06-04 09:46:10',67,2,1),(1381,0,'2021-06-04 09:46:10',67,104,2),(1382,1,'2021-06-04 09:46:10',67,104,2),(1383,0,'2021-06-04 09:46:10',67,4,3),(1384,1,'2021-06-04 09:46:10',67,2,3),(1385,0,'2021-06-04 09:46:10',67,5,4),(1386,1,'2021-06-04 09:46:10',67,8,4),(1387,0,'2021-06-04 09:46:10',67,7,5),(1388,1,'2021-06-04 09:46:10',67,10,5),(1389,0,'2021-06-04 09:46:10',67,2,6),(1390,1,'2021-06-04 09:46:10',67,11,6),(1391,0,'2021-06-04 09:46:10',67,2,7),(1392,1,'2021-06-04 09:46:10',67,104,7),(1393,0,'2021-06-04 09:46:10',67,3,8),(1394,1,'2021-06-04 09:46:10',67,8,8),(1395,0,'2021-06-04 09:46:10',67,10,9),(1396,1,'2021-06-04 09:46:10',67,4,9),(1397,0,'2021-06-04 09:46:10',67,4,10),(1398,1,'2021-06-04 09:46:10',67,10,10),(1399,0,'2021-06-04 09:46:10',67,2,11),(1400,1,'2021-06-04 09:46:10',67,7,11),(1401,0,'2021-06-04 09:46:10',67,2,12),(1402,1,'2021-06-04 09:46:10',67,104,12),(1403,0,'2021-06-04 09:46:10',67,12,13),(1404,1,'2021-06-04 09:46:10',67,11,13),(1405,0,'2021-06-04 09:46:10',67,9,14),(1406,1,'2021-06-04 09:46:10',67,10,14),(1407,0,'2021-06-04 09:46:10',67,2,15),(1408,1,'2021-06-04 09:46:10',67,4,15),(1409,0,'2021-06-04 09:46:10',67,11,16),(1410,1,'2021-06-04 09:46:10',67,10,16),(1411,0,'2021-06-04 09:46:10',67,9,17),(1412,1,'2021-06-04 09:46:10',67,6,17),(1413,0,'2021-06-04 09:46:10',67,5,18),(1414,1,'2021-06-04 09:46:10',67,6,18),(1415,0,'2021-06-04 09:46:10',67,2,19),(1416,1,'2021-06-04 09:46:10',67,1,19);
/*!40000 ALTER TABLE `shiftchecks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shiftcomments`
--

DROP TABLE IF EXISTS `shiftcomments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shiftcomments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(200) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `carryOn` tinyint(1) NOT NULL DEFAULT 0,
  `endOfCarryOn` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `shiftsheet_id` int(11) NOT NULL,
  `shiftaction_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_comments_users1_idx` (`user_id`),
  KEY `fk_comments_shiftSheets1_idx` (`shiftsheet_id`),
  KEY `fk_comments_shiftActions1_idx` (`shiftaction_id`),
  CONSTRAINT `fk_comments_shiftActions1` FOREIGN KEY (`shiftaction_id`) REFERENCES `shiftactions` (`id`),
  CONSTRAINT `fk_comments_shiftSheets1` FOREIGN KEY (`shiftsheet_id`) REFERENCES `shiftsheets` (`id`),
  CONSTRAINT `fk_comments_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shiftcomments`
--

LOCK TABLES `shiftcomments` WRITE;
/*!40000 ALTER TABLE `shiftcomments` DISABLE KEYS */;
INSERT INTO `shiftcomments` VALUES (3,'Bonjour','2021-06-04 09:46:08',0,NULL,4,8,7),(4,'Bonjour','2021-06-04 09:46:08',0,NULL,2,38,9),(5,'Bonjour','2021-06-04 09:46:08',0,NULL,10,38,11),(6,'Bonjour','2021-06-04 09:46:08',0,NULL,1,38,18),(7,'Bonjour','2021-06-04 09:46:08',0,NULL,2,53,12),(8,'Bonjour','2021-06-04 09:46:08',0,NULL,10,1,9),(9,'Bonjour','2021-06-04 09:46:08',0,NULL,7,1,16),(10,'Bonjour','2021-06-04 09:46:08',0,NULL,4,2,5),(11,'Bonjour','2021-06-04 09:46:08',0,NULL,3,2,9),(12,'Bonjour','2021-06-04 09:46:08',0,NULL,104,3,1),(13,'Bonjour','2021-06-04 09:46:08',0,NULL,6,3,7),(14,'Bonjour','2021-06-04 09:46:08',0,NULL,5,3,15),(15,'Bonjour','2021-06-04 09:46:08',0,NULL,1,3,17),(16,'Bonjour','2021-06-04 09:46:08',0,NULL,8,3,18),(17,'Bonjour','2021-06-04 09:46:09',0,NULL,7,5,3),(18,'Bonjour','2021-06-04 09:46:09',0,NULL,8,5,5),(19,'Bonjour','2021-06-04 09:46:09',0,NULL,11,5,8),(20,'Bonjour','2021-06-04 09:46:09',0,NULL,104,5,10),(21,'Bonjour','2021-06-04 09:46:09',0,NULL,4,6,7),(22,'Bonjour','2021-06-04 09:46:09',0,NULL,8,6,8),(23,'Bonjour','2021-06-04 09:46:09',0,NULL,2,7,19),(24,'Bonjour','2021-06-04 09:46:09',0,NULL,12,16,2),(25,'Bonjour','2021-06-04 09:46:09',0,NULL,5,16,12),(26,'Bonjour','2021-06-04 09:46:09',0,NULL,4,16,13),(27,'Bonjour','2021-06-04 09:46:09',0,NULL,8,17,5),(28,'Bonjour','2021-06-04 09:46:09',0,NULL,1,17,7),(29,'Bonjour','2021-06-04 09:46:09',0,NULL,10,18,4),(30,'Bonjour','2021-06-04 09:46:09',0,NULL,5,18,19),(31,'Bonjour','2021-06-04 09:46:09',0,NULL,12,19,14),(32,'Bonjour','2021-06-04 09:46:09',0,NULL,12,21,9),(33,'Bonjour','2021-06-04 09:46:09',0,NULL,8,31,4),(34,'Bonjour','2021-06-04 09:46:09',0,NULL,10,31,7),(35,'Bonjour','2021-06-04 09:46:09',0,NULL,6,31,9),(36,'Bonjour','2021-06-04 09:46:09',0,NULL,1,32,15),(37,'Bonjour','2021-06-04 09:46:09',0,NULL,11,33,3),(38,'Bonjour','2021-06-04 09:46:09',0,NULL,11,33,4),(39,'Bonjour','2021-06-04 09:46:09',0,NULL,1,33,12),(40,'Bonjour','2021-06-04 09:46:09',0,NULL,1,33,17),(41,'Bonjour','2021-06-04 09:46:09',0,NULL,6,34,4),(42,'Bonjour','2021-06-04 09:46:09',0,NULL,1,34,13),(43,'Bonjour','2021-06-04 09:46:09',0,NULL,1,35,6),(44,'Bonjour','2021-06-04 09:46:09',0,NULL,9,35,10),(45,'Bonjour','2021-06-04 09:46:09',0,NULL,4,36,14),(46,'Bonjour','2021-06-04 09:46:09',0,NULL,9,37,13),(47,'Bonjour','2021-06-04 09:46:09',0,NULL,9,47,9),(48,'Bonjour','2021-06-04 09:46:09',0,NULL,6,47,14),(49,'Bonjour','2021-06-04 09:46:09',0,NULL,7,47,16),(50,'Bonjour','2021-06-04 09:46:09',0,NULL,3,48,3),(51,'Bonjour','2021-06-04 09:46:09',0,NULL,8,48,17),(52,'Bonjour','2021-06-04 09:46:09',0,NULL,11,49,2),(53,'Bonjour','2021-06-04 09:46:09',0,NULL,6,49,11),(54,'Bonjour','2021-06-04 09:46:09',0,NULL,2,50,1),(55,'Bonjour','2021-06-04 09:46:09',0,NULL,8,50,2),(56,'Bonjour','2021-06-04 09:46:09',0,NULL,5,50,3),(57,'Bonjour','2021-06-04 09:46:09',0,NULL,9,50,14),(58,'Bonjour','2021-06-04 09:46:09',0,NULL,104,51,18),(59,'Bonjour','2021-06-04 09:46:09',0,NULL,104,52,5),(60,'Bonjour','2021-06-04 09:46:09',0,NULL,104,52,18),(61,'Bonjour','2021-06-04 09:46:09',0,NULL,12,61,4),(62,'Bonjour','2021-06-04 09:46:09',0,NULL,3,61,7),(63,'Bonjour','2021-06-04 09:46:09',0,NULL,5,61,9),(64,'Bonjour','2021-06-04 09:46:09',0,NULL,5,61,14),(65,'Bonjour','2021-06-04 09:46:09',0,NULL,5,62,10),(66,'Bonjour','2021-06-04 09:46:09',0,NULL,3,62,17),(67,'Bonjour','2021-06-04 09:46:09',0,NULL,1,63,8),(68,'Bonjour','2021-06-04 09:46:09',0,NULL,7,64,10),(69,'Bonjour','2021-06-04 09:46:10',0,NULL,2,65,2),(70,'Bonjour','2021-06-04 09:46:10',0,NULL,9,65,3),(71,'Bonjour','2021-06-04 09:46:10',0,NULL,2,66,1),(72,'Bonjour','2021-06-04 09:46:10',0,NULL,2,67,15);
/*!40000 ALTER TABLE `shiftcomments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shiftmodel_has_shiftaction`
--

DROP TABLE IF EXISTS `shiftmodel_has_shiftaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shiftmodel_has_shiftaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shiftaction_id` int(11) NOT NULL,
  `shiftmodel_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `shiftmodelscol_has_shiftactions_UNIQUE` (`id`),
  UNIQUE KEY `uniqueactionpermodel` (`shiftaction_id`,`shiftmodel_id`),
  KEY `fk_shiftactions_has_shiftmodels_shiftmodels1_idx` (`shiftmodel_id`),
  KEY `fk_shiftactions_has_shiftmodels_shiftactions1_idx` (`shiftaction_id`),
  CONSTRAINT `fk_shiftactions_has_shiftmodels_shiftactions1` FOREIGN KEY (`shiftaction_id`) REFERENCES `shiftactions` (`id`),
  CONSTRAINT `fk_shiftactions_has_shiftmodels_shiftmodels1` FOREIGN KEY (`shiftmodel_id`) REFERENCES `shiftmodels` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shiftmodel_has_shiftaction`
--

LOCK TABLES `shiftmodel_has_shiftaction` WRITE;
/*!40000 ALTER TABLE `shiftmodel_has_shiftaction` DISABLE KEYS */;
INSERT INTO `shiftmodel_has_shiftaction` VALUES (1,1,2),(20,1,3),(33,1,4),(48,1,5),(2,2,2),(21,2,3),(34,2,4),(49,2,5),(3,3,2),(50,3,5),(4,4,2),(22,4,3),(35,4,4),(51,4,5),(5,5,2),(36,5,4),(52,5,5),(6,6,2),(23,6,3),(53,6,5),(7,7,2),(24,7,3),(37,7,4),(54,7,5),(8,8,2),(25,8,3),(38,8,4),(55,8,5),(9,9,2),(26,9,3),(39,9,4),(10,10,2),(27,10,3),(40,10,4),(11,11,2),(28,11,3),(41,11,4),(56,11,5),(12,12,2),(42,12,4),(13,13,2),(29,13,3),(43,13,4),(57,13,5),(14,14,2),(58,14,5),(15,15,2),(30,15,3),(16,16,2),(31,16,3),(44,16,4),(59,16,5),(17,17,2),(32,17,3),(45,17,4),(60,17,5),(18,18,2),(46,18,4),(61,18,5),(19,19,2),(47,19,4),(62,19,5);
/*!40000 ALTER TABLE `shiftmodel_has_shiftaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shiftmodels`
--

DROP TABLE IF EXISTS `shiftmodels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shiftmodels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `nbTeamD` int(11) NOT NULL DEFAULT 1,
  `nbTeamN` int(11) NOT NULL DEFAULT 1,
  `suggested` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idshiftmodels_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shiftmodels`
--

LOCK TABLES `shiftmodels` WRITE;
/*!40000 ALTER TABLE `shiftmodels` DISABLE KEYS */;
INSERT INTO `shiftmodels` VALUES (1,'Vide',1,1,1),(2,'Classique',1,1,1),(3,'Modèle de Test 1',1,1,1),(4,'Modèle de Test 2',1,1,1),(5,'Modèle de Test 3',1,1,1);
/*!40000 ALTER TABLE `shiftmodels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shiftsections`
--

DROP TABLE IF EXISTS `shiftsections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shiftsections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title_UNIQUE` (`title`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shiftsections`
--

LOCK TABLES `shiftsections` WRITE;
/*!40000 ALTER TABLE `shiftsections` DISABLE KEYS */;
INSERT INTO `shiftsections` VALUES (1,'Centrale & Tâches'),(2,'Ecrans de communication & Trafic'),(3,'Matériel & Télécom'),(4,'Véhicules & Interventions');
/*!40000 ALTER TABLE `shiftsections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shiftsheets`
--

DROP TABLE IF EXISTS `shiftsheets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shiftsheets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shiftsheets`
--

LOCK TABLES `shiftsheets` WRITE;
/*!40000 ALTER TABLE `shiftsheets` DISABLE KEYS */;
INSERT INTO `shiftsheets` VALUES (1,'2021-06-03',2,1,3,2),(2,'2021-06-02',2,1,3,10),(3,'2021-06-01',2,1,3,6),(4,'2021-05-31',2,1,3,1),(5,'2021-05-30',2,1,3,8),(6,'2021-05-29',2,1,3,10),(7,'2021-05-28',2,1,3,12),(8,'2021-06-04',2,1,2,NULL),(9,'2021-06-05',2,1,1,NULL),(10,'2021-06-06',2,1,1,NULL),(11,'2021-06-07',2,1,1,NULL),(12,'2021-06-08',2,1,1,NULL),(13,'2021-06-09',2,1,1,NULL),(14,'2021-06-10',2,1,1,NULL),(15,'2021-06-11',2,1,1,NULL),(16,'2021-06-03',2,2,3,2),(17,'2021-06-02',2,2,3,4),(18,'2021-06-01',2,2,3,6),(19,'2021-05-31',2,2,3,3),(20,'2021-05-30',2,2,3,4),(21,'2021-05-29',2,2,3,4),(22,'2021-05-28',2,2,3,1),(23,'2021-06-04',2,2,2,NULL),(24,'2021-06-05',2,2,1,NULL),(25,'2021-06-06',2,2,1,NULL),(26,'2021-06-07',2,2,1,NULL),(27,'2021-06-08',2,2,1,NULL),(28,'2021-06-09',2,2,1,NULL),(29,'2021-06-10',2,2,1,NULL),(30,'2021-06-11',2,2,1,NULL),(31,'2021-06-03',2,3,3,11),(32,'2021-06-02',2,3,3,3),(33,'2021-06-01',2,3,3,9),(34,'2021-05-31',2,3,3,2),(35,'2021-05-30',2,3,3,3),(36,'2021-05-29',2,3,3,5),(37,'2021-05-28',2,3,3,2),(38,'2021-06-04',2,3,2,NULL),(39,'2021-06-05',2,3,1,NULL),(40,'2021-06-06',2,3,1,NULL),(41,'2021-06-07',2,3,1,NULL),(42,'2021-06-08',2,3,1,NULL),(43,'2021-06-09',2,3,1,NULL),(44,'2021-06-10',2,3,1,NULL),(45,'2021-06-11',2,3,1,NULL),(46,'2021-06-03',2,4,3,6),(47,'2021-06-02',2,4,3,4),(48,'2021-06-01',2,4,3,2),(49,'2021-05-31',2,4,3,7),(50,'2021-05-30',2,4,3,12),(51,'2021-05-29',2,4,3,8),(52,'2021-05-28',2,4,3,1),(53,'2021-06-04',2,4,2,NULL),(54,'2021-06-05',2,4,1,NULL),(55,'2021-06-06',2,4,1,NULL),(56,'2021-06-07',2,4,1,NULL),(57,'2021-06-08',2,4,1,NULL),(58,'2021-06-09',2,4,1,NULL),(59,'2021-06-10',2,4,1,NULL),(60,'2021-06-11',2,4,1,NULL),(61,'2021-06-03',2,5,3,10),(62,'2021-06-02',2,5,3,13),(63,'2021-06-01',2,5,3,3),(64,'2021-05-31',2,5,3,11),(65,'2021-05-30',2,5,3,12),(66,'2021-05-29',2,5,3,12),(67,'2021-05-28',2,5,3,7),(68,'2021-06-04',2,5,2,NULL),(69,'2021-06-05',2,5,1,NULL),(70,'2021-06-06',2,5,1,NULL),(71,'2021-06-07',2,5,1,NULL),(72,'2021-06-08',2,5,1,NULL),(73,'2021-06-09',2,5,1,NULL),(74,'2021-06-10',2,5,1,NULL),(75,'2021-06-11',2,5,1,NULL);
/*!40000 ALTER TABLE `shiftsheets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shiftteams`
--

DROP TABLE IF EXISTS `shiftteams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shiftteams` (
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
  CONSTRAINT `fk_shiftteams_boss` FOREIGN KEY (`boss_id`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_shiftteams_nova` FOREIGN KEY (`nova_id`) REFERENCES `novas` (`id`),
  CONSTRAINT `fk_shiftteams_shiftsheet` FOREIGN KEY (`shiftsheet_id`) REFERENCES `shiftsheets` (`id`),
  CONSTRAINT `fk_shiftteams_teammate` FOREIGN KEY (`teammate_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shiftteams`
--

LOCK TABLES `shiftteams` WRITE;
/*!40000 ALTER TABLE `shiftteams` DISABLE KEYS */;
INSERT INTO `shiftteams` VALUES (1,1,11,6,9,0),(2,1,11,6,9,1),(3,2,5,6,11,0),(4,2,9,5,8,1),(5,3,3,8,4,0),(6,3,1,3,11,1),(7,4,5,10,8,0),(8,4,1,2,7,1),(9,5,13,4,4,0),(10,5,13,11,3,1),(11,6,13,10,7,0),(12,6,11,3,8,1),(13,7,6,3,10,0),(14,7,12,9,7,1),(15,8,12,12,9,0),(16,8,13,10,7,1),(17,8,12,8,3,1),(18,9,5,13,11,0),(19,9,10,12,1,1),(20,10,11,10,4,0),(21,10,7,4,2,1),(22,11,9,11,4,0),(23,11,12,8,3,1),(24,12,4,9,6,0),(25,12,10,12,6,1),(26,13,8,9,4,0),(27,13,10,7,6,1),(28,14,NULL,NULL,NULL,0),(29,14,NULL,NULL,NULL,1),(30,15,NULL,NULL,NULL,0),(31,15,NULL,NULL,NULL,1),(32,16,1,9,2,0),(33,16,13,2,11,1),(34,17,6,7,4,0),(35,17,11,5,1,1),(36,18,11,12,10,0),(37,18,11,7,2,1),(38,19,6,10,4,0),(39,19,6,3,9,1),(40,20,12,8,4,0),(41,20,10,9,1,1),(42,21,4,8,10,0),(43,21,12,10,1,1),(44,22,2,5,5,0),(45,22,12,6,4,1),(46,23,6,3,6,0),(47,23,1,9,3,1),(48,23,1,10,4,1),(49,24,5,13,10,0),(50,24,3,5,4,1),(51,25,9,4,4,0),(52,25,12,5,2,1),(53,26,7,1,9,0),(54,26,12,2,10,1),(55,27,12,11,4,0),(56,27,3,2,10,1),(57,28,1,9,1,0),(58,28,3,12,10,1),(59,29,NULL,NULL,NULL,0),(60,29,NULL,NULL,NULL,1),(61,30,NULL,NULL,NULL,0),(62,30,NULL,NULL,NULL,1),(63,31,4,12,8,0),(64,31,11,12,2,1),(65,32,4,11,3,0),(66,32,12,11,3,1),(67,33,10,7,4,0),(68,33,1,5,7,1),(69,34,7,5,3,0),(70,34,13,2,8,1),(71,35,11,8,4,0),(72,35,10,12,3,1),(73,36,3,10,3,0),(74,36,12,12,9,1),(75,37,3,10,1,0),(76,37,1,13,8,1),(77,38,9,4,4,0),(78,38,12,7,10,1),(79,38,10,1,10,1),(80,39,5,2,7,0),(81,39,8,4,5,1),(82,40,3,10,4,0),(83,40,2,9,11,1),(84,41,10,11,10,0),(85,41,1,8,7,1),(86,42,4,7,9,0),(87,42,3,12,9,1),(88,43,3,11,5,0),(89,43,6,13,5,1),(90,44,NULL,NULL,NULL,0),(91,44,NULL,NULL,NULL,1),(92,45,NULL,NULL,NULL,0),(93,45,NULL,NULL,NULL,1),(94,46,10,8,6,0),(95,46,12,10,2,1),(96,47,2,9,11,0),(97,47,11,3,6,1),(98,48,1,11,10,0),(99,48,12,12,10,1),(100,49,1,11,8,0),(101,49,13,11,1,1),(102,50,6,5,7,0),(103,50,10,13,8,1),(104,51,10,12,2,0),(105,51,2,3,6,1),(106,52,11,11,9,0),(107,52,4,3,2,1),(108,53,2,1,10,0),(109,53,6,6,9,1),(110,53,10,4,1,1),(111,54,5,9,5,0),(112,54,11,13,4,1),(113,55,9,4,4,0),(114,55,13,10,9,1),(115,56,9,12,6,0),(116,56,12,1,5,1),(117,57,2,5,4,0),(118,57,9,4,5,1),(119,58,4,3,10,0),(120,58,2,9,2,1),(121,59,NULL,NULL,NULL,0),(122,59,NULL,NULL,NULL,1),(123,60,NULL,NULL,NULL,0),(124,60,NULL,NULL,NULL,1),(125,61,4,3,2,0),(126,61,2,1,1,1),(127,62,8,1,7,0),(128,62,11,4,1,1),(129,63,13,3,11,0),(130,63,4,8,2,1),(131,64,7,4,11,0),(132,64,10,12,2,1),(133,65,5,11,1,0),(134,65,1,11,10,1),(135,66,1,5,10,0),(136,66,2,12,3,1),(137,67,9,10,8,0),(138,67,6,12,4,1),(139,68,12,7,8,0),(140,68,3,10,11,1),(141,68,9,7,5,1),(142,69,10,4,3,0),(143,69,3,4,8,1),(144,70,11,1,10,0),(145,70,1,7,4,1),(146,71,4,3,5,0),(147,71,5,5,11,1),(148,72,8,2,10,0),(149,72,11,7,11,1),(150,73,6,2,3,0),(151,73,13,13,11,1),(152,74,NULL,NULL,NULL,0),(153,74,NULL,NULL,NULL,1),(154,75,NULL,NULL,NULL,0),(155,75,NULL,NULL,NULL,1);
/*!40000 ALTER TABLE `shiftteams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(25) NOT NULL,
  `displayname` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'blank','En préparation'),(2,'open','Actif'),(3,'close','Clôturé'),(4,'reopen','En correction'),(5,'archive','Archivé');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `todos`
--

DROP TABLE IF EXISTS `todos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `todos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `todothing_id` int(11) NOT NULL,
  `todosheet_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  `done_at` datetime DEFAULT NULL,
  `day_of_week` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_todoitems_todotexts1_idx` (`todothing_id`),
  KEY `fk_todoitems_todosheets1_idx` (`todosheet_id`),
  KEY `fk_todoitems_users1_idx` (`user_id`),
  CONSTRAINT `fk_todoitems_todosheets1` FOREIGN KEY (`todosheet_id`) REFERENCES `todosheets` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_todoitems_todotexts1` FOREIGN KEY (`todothing_id`) REFERENCES `todothings` (`id`),
  CONSTRAINT `fk_todoitems_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2640 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `todos`
--

LOCK TABLES `todos` WRITE;
/*!40000 ALTER TABLE `todos` DISABLE KEYS */;
INSERT INTO `todos` VALUES (190,24,1,NULL,NULL,NULL,1),(191,29,1,NULL,NULL,NULL,1),(192,32,1,NULL,NULL,NULL,1),(193,39,1,NULL,NULL,NULL,1),(194,34,1,NULL,NULL,NULL,2),(195,22,1,NULL,NULL,NULL,2),(196,28,1,NULL,NULL,NULL,2),(197,22,1,NULL,NULL,NULL,2),(198,21,1,NULL,NULL,NULL,2),(199,36,1,NULL,NULL,NULL,2),(200,31,1,NULL,NULL,NULL,2),(201,35,1,NULL,NULL,NULL,2),(202,38,1,NULL,NULL,NULL,2),(203,24,1,NULL,NULL,NULL,2),(204,29,1,NULL,NULL,NULL,2),(205,32,1,NULL,NULL,NULL,2),(206,39,1,NULL,NULL,NULL,2),(207,34,1,NULL,NULL,NULL,3),(208,22,1,NULL,NULL,NULL,3),(209,28,1,NULL,NULL,NULL,3),(210,22,1,NULL,NULL,NULL,3),(211,21,1,NULL,NULL,NULL,3),(212,36,1,NULL,NULL,NULL,3),(213,31,1,NULL,NULL,NULL,3),(214,35,1,NULL,NULL,NULL,3),(215,38,1,NULL,NULL,NULL,3),(216,24,1,NULL,NULL,NULL,3),(217,29,1,NULL,NULL,NULL,3),(218,32,1,NULL,NULL,NULL,3),(219,39,1,NULL,NULL,NULL,3),(220,34,1,NULL,NULL,NULL,4),(221,22,1,NULL,NULL,NULL,4),(222,28,1,NULL,NULL,NULL,4),(223,22,1,NULL,NULL,NULL,4),(224,21,1,NULL,NULL,NULL,4),(225,36,1,NULL,NULL,NULL,4),(226,31,1,NULL,NULL,NULL,4),(227,35,1,NULL,NULL,NULL,4),(228,38,1,NULL,NULL,NULL,4),(229,24,1,NULL,NULL,NULL,4),(230,29,1,NULL,NULL,NULL,4),(231,32,1,NULL,NULL,NULL,4),(232,39,1,NULL,NULL,NULL,4),(233,34,1,NULL,NULL,NULL,5),(234,22,1,NULL,NULL,NULL,5),(235,28,1,NULL,NULL,NULL,5),(236,22,1,NULL,NULL,NULL,5),(237,21,1,NULL,NULL,NULL,5),(238,36,1,NULL,NULL,NULL,5),(239,31,1,NULL,NULL,NULL,5),(240,35,1,NULL,NULL,NULL,5),(241,38,1,NULL,NULL,NULL,5),(242,24,1,NULL,NULL,NULL,5),(243,29,1,NULL,NULL,NULL,5),(244,32,1,NULL,NULL,NULL,5),(245,39,1,NULL,NULL,NULL,5),(246,34,1,NULL,NULL,NULL,6),(247,22,1,NULL,NULL,NULL,6),(248,28,1,NULL,NULL,NULL,6),(249,22,1,NULL,NULL,NULL,6),(250,21,1,NULL,NULL,NULL,6),(251,36,1,NULL,NULL,NULL,6),(252,31,1,NULL,NULL,NULL,6),(253,35,1,NULL,NULL,NULL,6),(254,38,1,NULL,NULL,NULL,6),(255,24,1,NULL,NULL,NULL,6),(256,29,1,NULL,NULL,NULL,6),(257,32,1,NULL,NULL,NULL,6),(258,39,1,NULL,NULL,NULL,6),(259,34,1,NULL,NULL,NULL,7),(260,22,1,NULL,NULL,NULL,7),(261,28,1,NULL,NULL,NULL,7),(262,22,1,NULL,NULL,NULL,7),(263,21,1,NULL,NULL,NULL,7),(264,36,1,NULL,NULL,NULL,7),(265,31,1,NULL,NULL,NULL,7),(266,35,1,NULL,NULL,NULL,7),(267,38,1,NULL,NULL,NULL,7),(268,24,1,NULL,NULL,NULL,7),(269,29,1,NULL,NULL,NULL,7),(270,39,1,NULL,NULL,NULL,7),(271,30,1,NULL,NULL,NULL,2),(272,30,1,NULL,NULL,NULL,3),(273,30,1,NULL,NULL,NULL,4),(274,25,1,NULL,NULL,NULL,4),(275,37,1,NULL,NULL,NULL,5),(276,27,1,NULL,NULL,NULL,5),(277,33,1,NULL,NULL,NULL,7),(278,26,1,NULL,NULL,NULL,7),(279,34,1,NULL,NULL,NULL,1),(280,22,1,NULL,NULL,NULL,1),(281,28,1,NULL,NULL,NULL,1),(282,22,1,NULL,NULL,NULL,1),(283,21,1,NULL,NULL,NULL,1),(284,36,1,NULL,NULL,NULL,1),(285,31,1,NULL,NULL,NULL,1),(286,35,1,NULL,NULL,NULL,1),(287,38,1,NULL,NULL,NULL,1),(288,24,2,NULL,NULL,NULL,1),(289,29,2,NULL,NULL,NULL,1),(290,32,2,NULL,NULL,NULL,1),(291,39,2,NULL,NULL,NULL,1),(292,34,2,NULL,NULL,NULL,2),(293,22,2,NULL,NULL,NULL,2),(294,28,2,NULL,NULL,NULL,2),(295,22,2,NULL,NULL,NULL,2),(296,21,2,NULL,NULL,NULL,2),(297,36,2,NULL,NULL,NULL,2),(298,31,2,NULL,NULL,NULL,2),(299,35,2,NULL,NULL,NULL,2),(300,38,2,NULL,NULL,NULL,2),(301,24,2,NULL,NULL,NULL,2),(302,29,2,NULL,NULL,NULL,2),(303,32,2,NULL,NULL,NULL,2),(304,39,2,NULL,NULL,NULL,2),(305,34,2,NULL,NULL,NULL,3),(306,22,2,NULL,NULL,NULL,3),(307,28,2,NULL,NULL,NULL,3),(308,22,2,NULL,NULL,NULL,3),(309,21,2,NULL,NULL,NULL,3),(310,36,2,NULL,NULL,NULL,3),(311,31,2,NULL,NULL,NULL,3),(312,35,2,NULL,NULL,NULL,3),(313,38,2,NULL,NULL,NULL,3),(314,24,2,NULL,NULL,NULL,3),(315,29,2,NULL,NULL,NULL,3),(316,32,2,NULL,NULL,NULL,3),(317,39,2,NULL,NULL,NULL,3),(318,34,2,NULL,NULL,NULL,4),(319,22,2,NULL,NULL,NULL,4),(320,28,2,NULL,NULL,NULL,4),(321,22,2,NULL,NULL,NULL,4),(322,21,2,NULL,NULL,NULL,4),(323,36,2,NULL,NULL,NULL,4),(324,31,2,NULL,NULL,NULL,4),(325,35,2,NULL,NULL,NULL,4),(326,38,2,NULL,NULL,NULL,4),(327,24,2,NULL,NULL,NULL,4),(328,29,2,NULL,NULL,NULL,4),(329,32,2,NULL,NULL,NULL,4),(330,39,2,NULL,NULL,NULL,4),(331,34,2,NULL,NULL,NULL,5),(332,22,2,NULL,NULL,NULL,5),(333,28,2,NULL,NULL,NULL,5),(334,22,2,NULL,NULL,NULL,5),(335,21,2,NULL,NULL,NULL,5),(336,36,2,NULL,NULL,NULL,5),(337,31,2,NULL,NULL,NULL,5),(338,35,2,NULL,NULL,NULL,5),(339,38,2,NULL,NULL,NULL,5),(340,24,2,NULL,NULL,NULL,5),(341,29,2,NULL,NULL,NULL,5),(342,32,2,NULL,NULL,NULL,5),(343,39,2,NULL,NULL,NULL,5),(344,34,2,NULL,NULL,NULL,6),(345,22,2,NULL,NULL,NULL,6),(346,28,2,NULL,NULL,NULL,6),(347,22,2,NULL,NULL,NULL,6),(348,21,2,NULL,NULL,NULL,6),(349,36,2,NULL,NULL,NULL,6),(350,31,2,NULL,NULL,NULL,6),(351,35,2,NULL,NULL,NULL,6),(352,38,2,NULL,NULL,NULL,6),(353,24,2,NULL,NULL,NULL,6),(354,29,2,NULL,NULL,NULL,6),(355,32,2,NULL,NULL,NULL,6),(356,39,2,NULL,NULL,NULL,6),(357,34,2,NULL,NULL,NULL,7),(358,22,2,NULL,NULL,NULL,7),(359,28,2,NULL,NULL,NULL,7),(360,22,2,NULL,NULL,NULL,7),(361,21,2,NULL,NULL,NULL,7),(362,36,2,NULL,NULL,NULL,7),(363,31,2,NULL,NULL,NULL,7),(364,35,2,NULL,NULL,NULL,7),(365,38,2,NULL,NULL,NULL,7),(366,24,2,NULL,NULL,NULL,7),(367,29,2,NULL,NULL,NULL,7),(368,39,2,NULL,NULL,NULL,7),(369,30,2,NULL,NULL,NULL,2),(370,30,2,NULL,NULL,NULL,3),(371,30,2,NULL,NULL,NULL,4),(372,25,2,NULL,NULL,NULL,4),(373,37,2,NULL,NULL,NULL,5),(374,27,2,NULL,NULL,NULL,5),(375,33,2,NULL,NULL,NULL,7),(376,26,2,NULL,NULL,NULL,7),(377,34,2,NULL,NULL,NULL,1),(378,22,2,NULL,NULL,NULL,1),(379,28,2,NULL,NULL,NULL,1),(380,22,2,NULL,NULL,NULL,1),(381,21,2,NULL,NULL,NULL,1),(382,36,2,NULL,NULL,NULL,1),(383,31,2,NULL,NULL,NULL,1),(384,35,2,NULL,NULL,NULL,1),(385,38,2,NULL,NULL,NULL,1),(386,24,3,NULL,NULL,NULL,1),(387,29,3,NULL,NULL,NULL,1),(388,32,3,NULL,NULL,NULL,1),(389,39,3,NULL,NULL,NULL,1),(390,34,3,NULL,NULL,NULL,2),(391,22,3,NULL,NULL,NULL,2),(392,28,3,NULL,NULL,NULL,2),(393,22,3,NULL,NULL,NULL,2),(394,21,3,NULL,NULL,NULL,2),(395,36,3,NULL,NULL,NULL,2),(396,31,3,NULL,NULL,NULL,2),(397,35,3,NULL,NULL,NULL,2),(398,38,3,NULL,NULL,NULL,2),(399,24,3,NULL,NULL,NULL,2),(400,29,3,NULL,NULL,NULL,2),(401,32,3,NULL,NULL,NULL,2),(402,39,3,NULL,NULL,NULL,2),(403,34,3,NULL,NULL,NULL,3),(404,22,3,NULL,NULL,NULL,3),(405,28,3,NULL,NULL,NULL,3),(406,22,3,NULL,NULL,NULL,3),(407,21,3,NULL,NULL,NULL,3),(408,36,3,NULL,NULL,NULL,3),(409,31,3,NULL,NULL,NULL,3),(410,35,3,NULL,NULL,NULL,3),(411,38,3,NULL,NULL,NULL,3),(412,24,3,NULL,NULL,NULL,3),(413,29,3,NULL,NULL,NULL,3),(414,32,3,NULL,NULL,NULL,3),(415,39,3,NULL,NULL,NULL,3),(416,34,3,NULL,NULL,NULL,4),(417,22,3,NULL,NULL,NULL,4),(418,28,3,NULL,NULL,NULL,4),(419,22,3,NULL,NULL,NULL,4),(420,21,3,NULL,NULL,NULL,4),(421,36,3,NULL,NULL,NULL,4),(422,31,3,NULL,NULL,NULL,4),(423,35,3,NULL,NULL,NULL,4),(424,38,3,NULL,NULL,NULL,4),(425,24,3,NULL,NULL,NULL,4),(426,29,3,NULL,NULL,NULL,4),(427,32,3,NULL,NULL,NULL,4),(428,39,3,NULL,NULL,NULL,4),(429,34,3,NULL,NULL,NULL,5),(430,22,3,NULL,NULL,NULL,5),(431,28,3,NULL,NULL,NULL,5),(432,22,3,NULL,NULL,NULL,5),(433,21,3,NULL,NULL,NULL,5),(434,36,3,NULL,NULL,NULL,5),(435,31,3,NULL,NULL,NULL,5),(436,35,3,NULL,NULL,NULL,5),(437,38,3,NULL,NULL,NULL,5),(438,24,3,NULL,NULL,NULL,5),(439,29,3,NULL,NULL,NULL,5),(440,32,3,NULL,NULL,NULL,5),(441,39,3,NULL,NULL,NULL,5),(442,34,3,NULL,NULL,NULL,6),(443,22,3,NULL,NULL,NULL,6),(444,28,3,NULL,NULL,NULL,6),(445,22,3,NULL,NULL,NULL,6),(446,21,3,NULL,NULL,NULL,6),(447,36,3,NULL,NULL,NULL,6),(448,31,3,NULL,NULL,NULL,6),(449,35,3,NULL,NULL,NULL,6),(450,38,3,NULL,NULL,NULL,6),(451,24,3,NULL,NULL,NULL,6),(452,29,3,NULL,NULL,NULL,6),(453,32,3,NULL,NULL,NULL,6),(454,39,3,NULL,NULL,NULL,6),(455,34,3,NULL,NULL,NULL,7),(456,22,3,NULL,NULL,NULL,7),(457,28,3,NULL,NULL,NULL,7),(458,22,3,NULL,NULL,NULL,7),(459,21,3,NULL,NULL,NULL,7),(460,36,3,NULL,NULL,NULL,7),(461,31,3,NULL,NULL,NULL,7),(462,35,3,NULL,NULL,NULL,7),(463,38,3,NULL,NULL,NULL,7),(464,24,3,NULL,NULL,NULL,7),(465,29,3,NULL,NULL,NULL,7),(466,39,3,NULL,NULL,NULL,7),(467,30,3,NULL,NULL,NULL,2),(468,30,3,NULL,NULL,NULL,3),(469,30,3,NULL,NULL,NULL,4),(470,25,3,NULL,NULL,NULL,4),(471,37,3,NULL,NULL,NULL,5),(472,27,3,NULL,NULL,NULL,5),(473,33,3,NULL,NULL,NULL,7),(474,26,3,NULL,NULL,NULL,7),(475,34,3,NULL,NULL,NULL,1),(476,22,3,NULL,NULL,NULL,1),(477,28,3,NULL,NULL,NULL,1),(478,22,3,NULL,NULL,NULL,1),(479,21,3,NULL,NULL,NULL,1),(480,36,3,NULL,NULL,NULL,1),(481,31,3,NULL,NULL,NULL,1),(482,35,3,NULL,NULL,NULL,1),(483,38,3,NULL,NULL,NULL,1),(484,24,4,NULL,NULL,NULL,1),(485,29,4,NULL,NULL,NULL,1),(486,32,4,NULL,NULL,NULL,1),(487,39,4,NULL,NULL,NULL,1),(488,34,4,6,NULL,NULL,2),(489,22,4,1,NULL,NULL,2),(490,28,4,NULL,NULL,NULL,2),(491,22,4,NULL,NULL,NULL,2),(492,21,4,NULL,NULL,NULL,2),(493,36,4,NULL,NULL,NULL,2),(494,31,4,NULL,NULL,NULL,2),(495,35,4,NULL,NULL,NULL,2),(496,38,4,NULL,NULL,NULL,2),(497,24,4,NULL,NULL,NULL,2),(498,29,4,NULL,NULL,NULL,2),(499,32,4,NULL,NULL,NULL,2),(500,39,4,NULL,NULL,NULL,2),(501,34,4,NULL,NULL,NULL,3),(502,22,4,NULL,NULL,NULL,3),(503,28,4,104,NULL,NULL,3),(504,22,4,NULL,NULL,NULL,3),(505,21,4,NULL,NULL,NULL,3),(506,36,4,NULL,NULL,NULL,3),(507,31,4,NULL,NULL,NULL,3),(508,35,4,NULL,NULL,NULL,3),(509,38,4,2,NULL,NULL,3),(510,24,4,NULL,NULL,NULL,3),(511,29,4,NULL,NULL,NULL,3),(512,32,4,NULL,NULL,NULL,3),(513,39,4,NULL,NULL,NULL,3),(514,34,4,NULL,NULL,NULL,4),(515,22,4,NULL,NULL,NULL,4),(516,28,4,NULL,NULL,NULL,4),(517,22,4,NULL,NULL,NULL,4),(518,21,4,NULL,NULL,NULL,4),(519,36,4,NULL,NULL,NULL,4),(520,31,4,NULL,NULL,NULL,4),(521,35,4,5,NULL,NULL,4),(522,38,4,NULL,NULL,NULL,4),(523,24,4,9,NULL,NULL,4),(524,29,4,NULL,NULL,NULL,4),(525,32,4,NULL,NULL,NULL,4),(526,39,4,NULL,NULL,NULL,4),(527,34,4,NULL,NULL,NULL,5),(528,22,4,NULL,NULL,NULL,5),(529,28,4,NULL,NULL,NULL,5),(530,22,4,8,NULL,NULL,5),(531,21,4,NULL,NULL,NULL,5),(532,36,4,NULL,NULL,NULL,5),(533,31,4,NULL,NULL,NULL,5),(534,35,4,NULL,NULL,NULL,5),(535,38,4,12,NULL,NULL,5),(536,24,4,NULL,NULL,NULL,5),(537,29,4,NULL,NULL,NULL,5),(538,32,4,NULL,NULL,NULL,5),(539,39,4,NULL,NULL,NULL,5),(540,34,4,NULL,NULL,NULL,6),(541,22,4,NULL,NULL,NULL,6),(542,28,4,NULL,NULL,NULL,6),(543,22,4,NULL,NULL,NULL,6),(544,21,4,9,NULL,NULL,6),(545,36,4,NULL,NULL,NULL,6),(546,31,4,NULL,NULL,NULL,6),(547,35,4,NULL,NULL,NULL,6),(548,38,4,NULL,NULL,NULL,6),(549,24,4,NULL,NULL,NULL,6),(550,29,4,NULL,NULL,NULL,6),(551,32,4,3,NULL,NULL,6),(552,39,4,NULL,NULL,NULL,6),(553,34,4,NULL,NULL,NULL,7),(554,22,4,NULL,NULL,NULL,7),(555,28,4,NULL,NULL,NULL,7),(556,22,4,NULL,NULL,NULL,7),(557,21,4,NULL,NULL,NULL,7),(558,36,4,NULL,NULL,NULL,7),(559,31,4,NULL,NULL,NULL,7),(560,35,4,NULL,NULL,NULL,7),(561,38,4,NULL,NULL,NULL,7),(562,24,4,NULL,NULL,NULL,7),(563,29,4,NULL,NULL,NULL,7),(564,39,4,NULL,NULL,NULL,7),(565,30,4,NULL,NULL,NULL,2),(566,30,4,NULL,NULL,NULL,3),(567,30,4,NULL,NULL,NULL,4),(568,25,4,NULL,NULL,NULL,4),(569,37,4,NULL,NULL,NULL,5),(570,27,4,104,NULL,NULL,5),(571,33,4,NULL,NULL,NULL,7),(572,26,4,NULL,NULL,NULL,7),(573,34,4,NULL,NULL,NULL,1),(574,22,4,NULL,NULL,NULL,1),(575,28,4,1,NULL,NULL,1),(576,22,4,NULL,NULL,NULL,1),(577,21,4,NULL,NULL,NULL,1),(578,36,4,NULL,NULL,NULL,1),(579,31,4,NULL,NULL,NULL,1),(580,35,4,NULL,NULL,NULL,1),(581,38,4,NULL,NULL,NULL,1),(582,24,5,NULL,NULL,NULL,1),(583,29,5,NULL,NULL,NULL,1),(584,32,5,NULL,NULL,NULL,1),(585,39,5,NULL,NULL,NULL,1),(586,34,5,NULL,NULL,NULL,2),(587,22,5,NULL,NULL,NULL,2),(588,28,5,NULL,NULL,NULL,2),(589,22,5,NULL,NULL,NULL,2),(590,21,5,NULL,NULL,NULL,2),(591,36,5,NULL,NULL,NULL,2),(592,31,5,NULL,NULL,NULL,2),(593,35,5,NULL,NULL,NULL,2),(594,38,5,NULL,NULL,NULL,2),(595,24,5,NULL,NULL,NULL,2),(596,29,5,NULL,NULL,NULL,2),(597,32,5,NULL,NULL,NULL,2),(598,39,5,NULL,NULL,NULL,2),(599,34,5,NULL,NULL,NULL,3),(600,22,5,NULL,NULL,NULL,3),(601,28,5,NULL,NULL,NULL,3),(602,22,5,NULL,NULL,NULL,3),(603,21,5,NULL,NULL,NULL,3),(604,36,5,NULL,NULL,NULL,3),(605,31,5,NULL,NULL,NULL,3),(606,35,5,NULL,NULL,NULL,3),(607,38,5,NULL,NULL,NULL,3),(608,24,5,NULL,NULL,NULL,3),(609,29,5,NULL,NULL,NULL,3),(610,32,5,NULL,NULL,NULL,3),(611,39,5,NULL,NULL,NULL,3),(612,34,5,NULL,NULL,NULL,4),(613,22,5,NULL,NULL,NULL,4),(614,28,5,NULL,NULL,NULL,4),(615,22,5,NULL,NULL,NULL,4),(616,21,5,NULL,NULL,NULL,4),(617,36,5,NULL,NULL,NULL,4),(618,31,5,NULL,NULL,NULL,4),(619,35,5,NULL,NULL,NULL,4),(620,38,5,NULL,NULL,NULL,4),(621,24,5,NULL,NULL,NULL,4),(622,29,5,NULL,NULL,NULL,4),(623,32,5,NULL,NULL,NULL,4),(624,39,5,NULL,NULL,NULL,4),(625,34,5,NULL,NULL,NULL,5),(626,22,5,NULL,NULL,NULL,5),(627,28,5,NULL,NULL,NULL,5),(628,22,5,NULL,NULL,NULL,5),(629,21,5,NULL,NULL,NULL,5),(630,36,5,NULL,NULL,NULL,5),(631,31,5,NULL,NULL,NULL,5),(632,35,5,NULL,NULL,NULL,5),(633,38,5,NULL,NULL,NULL,5),(634,24,5,NULL,NULL,NULL,5),(635,29,5,NULL,NULL,NULL,5),(636,32,5,NULL,NULL,NULL,5),(637,39,5,NULL,NULL,NULL,5),(638,34,5,NULL,NULL,NULL,6),(639,22,5,NULL,NULL,NULL,6),(640,28,5,NULL,NULL,NULL,6),(641,22,5,NULL,NULL,NULL,6),(642,21,5,NULL,NULL,NULL,6),(643,36,5,NULL,NULL,NULL,6),(644,31,5,NULL,NULL,NULL,6),(645,35,5,NULL,NULL,NULL,6),(646,38,5,NULL,NULL,NULL,6),(647,24,5,NULL,NULL,NULL,6),(648,29,5,NULL,NULL,NULL,6),(649,32,5,NULL,NULL,NULL,6),(650,39,5,NULL,NULL,NULL,6),(651,34,5,NULL,NULL,NULL,7),(652,22,5,NULL,NULL,NULL,7),(653,28,5,NULL,NULL,NULL,7),(654,22,5,NULL,NULL,NULL,7),(655,21,5,NULL,NULL,NULL,7),(656,36,5,NULL,NULL,NULL,7),(657,31,5,NULL,NULL,NULL,7),(658,35,5,NULL,NULL,NULL,7),(659,38,5,NULL,NULL,NULL,7),(660,24,5,NULL,NULL,NULL,7),(661,29,5,NULL,NULL,NULL,7),(662,39,5,NULL,NULL,NULL,7),(663,30,5,NULL,NULL,NULL,2),(664,30,5,NULL,NULL,NULL,3),(665,30,5,NULL,NULL,NULL,4),(666,25,5,NULL,NULL,NULL,4),(667,37,5,NULL,NULL,NULL,5),(668,27,5,NULL,NULL,NULL,5),(669,33,5,NULL,NULL,NULL,7),(670,26,5,NULL,NULL,NULL,7),(671,34,5,NULL,NULL,NULL,1),(672,22,5,NULL,NULL,NULL,1),(673,28,5,NULL,NULL,NULL,1),(674,22,5,NULL,NULL,NULL,1),(675,21,5,NULL,NULL,NULL,1),(676,36,5,NULL,NULL,NULL,1),(677,31,5,NULL,NULL,NULL,1),(678,35,5,NULL,NULL,NULL,1),(679,38,5,NULL,NULL,NULL,1),(680,24,6,NULL,NULL,NULL,1),(681,29,6,NULL,NULL,NULL,1),(682,32,6,NULL,NULL,NULL,1),(683,39,6,NULL,NULL,NULL,1),(684,34,6,NULL,NULL,NULL,2),(685,22,6,NULL,NULL,NULL,2),(686,28,6,NULL,NULL,NULL,2),(687,22,6,NULL,NULL,NULL,2),(688,21,6,NULL,NULL,NULL,2),(689,36,6,NULL,NULL,NULL,2),(690,31,6,NULL,NULL,NULL,2),(691,35,6,NULL,NULL,NULL,2),(692,38,6,NULL,NULL,NULL,2),(693,24,6,NULL,NULL,NULL,2),(694,29,6,NULL,NULL,NULL,2),(695,32,6,NULL,NULL,NULL,2),(696,39,6,NULL,NULL,NULL,2),(697,34,6,NULL,NULL,NULL,3),(698,22,6,NULL,NULL,NULL,3),(699,28,6,NULL,NULL,NULL,3),(700,22,6,NULL,NULL,NULL,3),(701,21,6,NULL,NULL,NULL,3),(702,36,6,NULL,NULL,NULL,3),(703,31,6,NULL,NULL,NULL,3),(704,35,6,NULL,NULL,NULL,3),(705,38,6,NULL,NULL,NULL,3),(706,24,6,NULL,NULL,NULL,3),(707,29,6,NULL,NULL,NULL,3),(708,32,6,NULL,NULL,NULL,3),(709,39,6,NULL,NULL,NULL,3),(710,34,6,NULL,NULL,NULL,4),(711,22,6,NULL,NULL,NULL,4),(712,28,6,NULL,NULL,NULL,4),(713,22,6,NULL,NULL,NULL,4),(714,21,6,NULL,NULL,NULL,4),(715,36,6,NULL,NULL,NULL,4),(716,31,6,NULL,NULL,NULL,4),(717,35,6,NULL,NULL,NULL,4),(718,38,6,NULL,NULL,NULL,4),(719,24,6,NULL,NULL,NULL,4),(720,29,6,NULL,NULL,NULL,4),(721,32,6,NULL,NULL,NULL,4),(722,39,6,NULL,NULL,NULL,4),(723,34,6,NULL,NULL,NULL,5),(724,22,6,NULL,NULL,NULL,5),(725,28,6,NULL,NULL,NULL,5),(726,22,6,NULL,NULL,NULL,5),(727,21,6,NULL,NULL,NULL,5),(728,36,6,NULL,NULL,NULL,5),(729,31,6,NULL,NULL,NULL,5),(730,35,6,NULL,NULL,NULL,5),(731,38,6,NULL,NULL,NULL,5),(732,24,6,NULL,NULL,NULL,5),(733,29,6,NULL,NULL,NULL,5),(734,32,6,NULL,NULL,NULL,5),(735,39,6,NULL,NULL,NULL,5),(736,34,6,NULL,NULL,NULL,6),(737,22,6,NULL,NULL,NULL,6),(738,28,6,NULL,NULL,NULL,6),(739,22,6,NULL,NULL,NULL,6),(740,21,6,NULL,NULL,NULL,6),(741,36,6,NULL,NULL,NULL,6),(742,31,6,NULL,NULL,NULL,6),(743,35,6,NULL,NULL,NULL,6),(744,38,6,NULL,NULL,NULL,6),(745,24,6,NULL,NULL,NULL,6),(746,29,6,NULL,NULL,NULL,6),(747,32,6,NULL,NULL,NULL,6),(748,39,6,NULL,NULL,NULL,6),(749,34,6,NULL,NULL,NULL,7),(750,22,6,NULL,NULL,NULL,7),(751,28,6,NULL,NULL,NULL,7),(752,22,6,NULL,NULL,NULL,7),(753,21,6,NULL,NULL,NULL,7),(754,36,6,NULL,NULL,NULL,7),(755,31,6,NULL,NULL,NULL,7),(756,35,6,NULL,NULL,NULL,7),(757,38,6,NULL,NULL,NULL,7),(758,24,6,NULL,NULL,NULL,7),(759,29,6,NULL,NULL,NULL,7),(760,39,6,NULL,NULL,NULL,7),(761,30,6,NULL,NULL,NULL,2),(762,30,6,NULL,NULL,NULL,3),(763,30,6,NULL,NULL,NULL,4),(764,25,6,NULL,NULL,NULL,4),(765,37,6,NULL,NULL,NULL,5),(766,27,6,NULL,NULL,NULL,5),(767,33,6,NULL,NULL,NULL,7),(768,26,6,NULL,NULL,NULL,7),(769,34,6,NULL,NULL,NULL,1),(770,22,6,NULL,NULL,NULL,1),(771,28,6,NULL,NULL,NULL,1),(772,22,6,NULL,NULL,NULL,1),(773,21,6,NULL,NULL,NULL,1),(774,36,6,NULL,NULL,NULL,1),(775,31,6,NULL,NULL,NULL,1),(776,35,6,NULL,NULL,NULL,1),(777,38,6,NULL,NULL,NULL,1),(778,24,7,NULL,NULL,NULL,1),(779,29,7,NULL,NULL,NULL,1),(780,32,7,NULL,NULL,NULL,1),(781,39,7,NULL,NULL,NULL,1),(782,34,7,NULL,NULL,NULL,2),(783,22,7,NULL,NULL,NULL,2),(784,28,7,NULL,NULL,NULL,2),(785,22,7,NULL,NULL,NULL,2),(786,21,7,NULL,NULL,NULL,2),(787,36,7,NULL,NULL,NULL,2),(788,31,7,NULL,NULL,NULL,2),(789,35,7,NULL,NULL,NULL,2),(790,38,7,NULL,NULL,NULL,2),(791,24,7,NULL,NULL,NULL,2),(792,29,7,NULL,NULL,NULL,2),(793,32,7,NULL,NULL,NULL,2),(794,39,7,NULL,NULL,NULL,2),(795,34,7,NULL,NULL,NULL,3),(796,22,7,NULL,NULL,NULL,3),(797,28,7,NULL,NULL,NULL,3),(798,22,7,NULL,NULL,NULL,3),(799,21,7,NULL,NULL,NULL,3),(800,36,7,NULL,NULL,NULL,3),(801,31,7,NULL,NULL,NULL,3),(802,35,7,NULL,NULL,NULL,3),(803,38,7,NULL,NULL,NULL,3),(804,24,7,NULL,NULL,NULL,3),(805,29,7,NULL,NULL,NULL,3),(806,32,7,NULL,NULL,NULL,3),(807,39,7,NULL,NULL,NULL,3),(808,34,7,NULL,NULL,NULL,4),(809,22,7,NULL,NULL,NULL,4),(810,28,7,NULL,NULL,NULL,4),(811,22,7,NULL,NULL,NULL,4),(812,21,7,NULL,NULL,NULL,4),(813,36,7,NULL,NULL,NULL,4),(814,31,7,NULL,NULL,NULL,4),(815,35,7,NULL,NULL,NULL,4),(816,38,7,NULL,NULL,NULL,4),(817,24,7,NULL,NULL,NULL,4),(818,29,7,NULL,NULL,NULL,4),(819,32,7,NULL,NULL,NULL,4),(820,39,7,NULL,NULL,NULL,4),(821,34,7,NULL,NULL,NULL,5),(822,22,7,NULL,NULL,NULL,5),(823,28,7,NULL,NULL,NULL,5),(824,22,7,NULL,NULL,NULL,5),(825,21,7,NULL,NULL,NULL,5),(826,36,7,NULL,NULL,NULL,5),(827,31,7,NULL,NULL,NULL,5),(828,35,7,NULL,NULL,NULL,5),(829,38,7,NULL,NULL,NULL,5),(830,24,7,NULL,NULL,NULL,5),(831,29,7,NULL,NULL,NULL,5),(832,32,7,NULL,NULL,NULL,5),(833,39,7,NULL,NULL,NULL,5),(834,34,7,NULL,NULL,NULL,6),(835,22,7,NULL,NULL,NULL,6),(836,28,7,NULL,NULL,NULL,6),(837,22,7,NULL,NULL,NULL,6),(838,21,7,NULL,NULL,NULL,6),(839,36,7,NULL,NULL,NULL,6),(840,31,7,NULL,NULL,NULL,6),(841,35,7,NULL,NULL,NULL,6),(842,38,7,NULL,NULL,NULL,6),(843,24,7,NULL,NULL,NULL,6),(844,29,7,NULL,NULL,NULL,6),(845,32,7,NULL,NULL,NULL,6),(846,39,7,NULL,NULL,NULL,6),(847,34,7,NULL,NULL,NULL,7),(848,22,7,NULL,NULL,NULL,7),(849,28,7,NULL,NULL,NULL,7),(850,22,7,NULL,NULL,NULL,7),(851,21,7,NULL,NULL,NULL,7),(852,36,7,NULL,NULL,NULL,7),(853,31,7,NULL,NULL,NULL,7),(854,35,7,NULL,NULL,NULL,7),(855,38,7,NULL,NULL,NULL,7),(856,24,7,NULL,NULL,NULL,7),(857,29,7,NULL,NULL,NULL,7),(858,39,7,NULL,NULL,NULL,7),(859,30,7,NULL,NULL,NULL,2),(860,30,7,NULL,NULL,NULL,3),(861,30,7,NULL,NULL,NULL,4),(862,25,7,NULL,NULL,NULL,4),(863,37,7,NULL,NULL,NULL,5),(864,27,7,NULL,NULL,NULL,5),(865,33,7,NULL,NULL,NULL,7),(866,26,7,NULL,NULL,NULL,7),(867,34,7,NULL,NULL,NULL,1),(868,22,7,NULL,NULL,NULL,1),(869,28,7,NULL,NULL,NULL,1),(870,22,7,NULL,NULL,NULL,1),(871,21,7,NULL,NULL,NULL,1),(872,36,7,NULL,NULL,NULL,1),(873,31,7,NULL,NULL,NULL,1),(874,35,7,NULL,NULL,NULL,1),(875,38,7,NULL,NULL,NULL,1),(876,24,8,NULL,NULL,NULL,1),(877,29,8,NULL,NULL,NULL,1),(878,32,8,NULL,NULL,NULL,1),(879,39,8,NULL,NULL,NULL,1),(880,34,8,NULL,NULL,NULL,2),(881,22,8,NULL,NULL,NULL,2),(882,28,8,NULL,NULL,NULL,2),(883,22,8,NULL,NULL,NULL,2),(884,21,8,NULL,NULL,NULL,2),(885,36,8,NULL,NULL,NULL,2),(886,31,8,NULL,NULL,NULL,2),(887,35,8,NULL,NULL,NULL,2),(888,38,8,NULL,NULL,NULL,2),(889,24,8,NULL,NULL,NULL,2),(890,29,8,NULL,NULL,NULL,2),(891,32,8,NULL,NULL,NULL,2),(892,39,8,NULL,NULL,NULL,2),(893,34,8,NULL,NULL,NULL,3),(894,22,8,NULL,NULL,NULL,3),(895,28,8,NULL,NULL,NULL,3),(896,22,8,NULL,NULL,NULL,3),(897,21,8,NULL,NULL,NULL,3),(898,36,8,NULL,NULL,NULL,3),(899,31,8,NULL,NULL,NULL,3),(900,35,8,NULL,NULL,NULL,3),(901,38,8,NULL,NULL,NULL,3),(902,24,8,NULL,NULL,NULL,3),(903,29,8,NULL,NULL,NULL,3),(904,32,8,NULL,NULL,NULL,3),(905,39,8,NULL,NULL,NULL,3),(906,34,8,NULL,NULL,NULL,4),(907,22,8,NULL,NULL,NULL,4),(908,28,8,NULL,NULL,NULL,4),(909,22,8,NULL,NULL,NULL,4),(910,21,8,NULL,NULL,NULL,4),(911,36,8,NULL,NULL,NULL,4),(912,31,8,NULL,NULL,NULL,4),(913,35,8,NULL,NULL,NULL,4),(914,38,8,NULL,NULL,NULL,4),(915,24,8,NULL,NULL,NULL,4),(916,29,8,NULL,NULL,NULL,4),(917,32,8,NULL,NULL,NULL,4),(918,39,8,NULL,NULL,NULL,4),(919,34,8,NULL,NULL,NULL,5),(920,22,8,NULL,NULL,NULL,5),(921,28,8,NULL,NULL,NULL,5),(922,22,8,NULL,NULL,NULL,5),(923,21,8,NULL,NULL,NULL,5),(924,36,8,NULL,NULL,NULL,5),(925,31,8,NULL,NULL,NULL,5),(926,35,8,NULL,NULL,NULL,5),(927,38,8,NULL,NULL,NULL,5),(928,24,8,NULL,NULL,NULL,5),(929,29,8,NULL,NULL,NULL,5),(930,32,8,NULL,NULL,NULL,5),(931,39,8,NULL,NULL,NULL,5),(932,34,8,NULL,NULL,NULL,6),(933,22,8,NULL,NULL,NULL,6),(934,28,8,NULL,NULL,NULL,6),(935,22,8,NULL,NULL,NULL,6),(936,21,8,NULL,NULL,NULL,6),(937,36,8,NULL,NULL,NULL,6),(938,31,8,NULL,NULL,NULL,6),(939,35,8,NULL,NULL,NULL,6),(940,38,8,NULL,NULL,NULL,6),(941,24,8,NULL,NULL,NULL,6),(942,29,8,NULL,NULL,NULL,6),(943,32,8,NULL,NULL,NULL,6),(944,39,8,NULL,NULL,NULL,6),(945,34,8,NULL,NULL,NULL,7),(946,22,8,NULL,NULL,NULL,7),(947,28,8,NULL,NULL,NULL,7),(948,22,8,NULL,NULL,NULL,7),(949,21,8,NULL,NULL,NULL,7),(950,36,8,NULL,NULL,NULL,7),(951,31,8,NULL,NULL,NULL,7),(952,35,8,NULL,NULL,NULL,7),(953,38,8,NULL,NULL,NULL,7),(954,24,8,NULL,NULL,NULL,7),(955,29,8,NULL,NULL,NULL,7),(956,39,8,NULL,NULL,NULL,7),(957,30,8,NULL,NULL,NULL,2),(958,30,8,NULL,NULL,NULL,3),(959,30,8,NULL,NULL,NULL,4),(960,25,8,NULL,NULL,NULL,4),(961,37,8,NULL,NULL,NULL,5),(962,27,8,NULL,NULL,NULL,5),(963,33,8,NULL,NULL,NULL,7),(964,26,8,NULL,NULL,NULL,7),(965,34,8,NULL,NULL,NULL,1),(966,22,8,NULL,NULL,NULL,1),(967,28,8,NULL,NULL,NULL,1),(968,22,8,NULL,NULL,NULL,1),(969,21,8,NULL,NULL,NULL,1),(970,36,8,NULL,NULL,NULL,1),(971,31,8,NULL,NULL,NULL,1),(972,35,8,NULL,NULL,NULL,1),(973,38,8,NULL,NULL,NULL,1),(974,24,9,NULL,NULL,NULL,1),(975,29,9,NULL,NULL,NULL,1),(976,32,9,NULL,NULL,NULL,1),(977,39,9,NULL,NULL,NULL,1),(978,34,9,NULL,NULL,NULL,2),(979,22,9,NULL,NULL,NULL,2),(980,28,9,NULL,NULL,NULL,2),(981,22,9,NULL,NULL,NULL,2),(982,21,9,5,NULL,NULL,2),(983,36,9,NULL,NULL,NULL,2),(984,31,9,NULL,NULL,NULL,2),(985,35,9,2,NULL,NULL,2),(986,38,9,NULL,NULL,NULL,2),(987,24,9,NULL,NULL,NULL,2),(988,29,9,NULL,NULL,NULL,2),(989,32,9,NULL,NULL,NULL,2),(990,39,9,NULL,NULL,NULL,2),(991,34,9,NULL,NULL,NULL,3),(992,22,9,NULL,NULL,NULL,3),(993,28,9,NULL,NULL,NULL,3),(994,22,9,NULL,NULL,NULL,3),(995,21,9,NULL,NULL,NULL,3),(996,36,9,NULL,NULL,NULL,3),(997,31,9,NULL,NULL,NULL,3),(998,35,9,NULL,NULL,NULL,3),(999,38,9,NULL,NULL,NULL,3),(1000,24,9,NULL,NULL,NULL,3),(1001,29,9,NULL,NULL,NULL,3),(1002,32,9,NULL,NULL,NULL,3),(1003,39,9,NULL,NULL,NULL,3),(1004,34,9,NULL,NULL,NULL,4),(1005,22,9,NULL,NULL,NULL,4),(1006,28,9,NULL,NULL,NULL,4),(1007,22,9,NULL,NULL,NULL,4),(1008,21,9,NULL,NULL,NULL,4),(1009,36,9,NULL,NULL,NULL,4),(1010,31,9,104,NULL,NULL,4),(1011,35,9,NULL,NULL,NULL,4),(1012,38,9,NULL,NULL,NULL,4),(1013,24,9,NULL,NULL,NULL,4),(1014,29,9,NULL,NULL,NULL,4),(1015,32,9,NULL,NULL,NULL,4),(1016,39,9,NULL,NULL,NULL,4),(1017,34,9,NULL,NULL,NULL,5),(1018,22,9,2,NULL,NULL,5),(1019,28,9,NULL,NULL,NULL,5),(1020,22,9,NULL,NULL,NULL,5),(1021,21,9,NULL,NULL,NULL,5),(1022,36,9,NULL,NULL,NULL,5),(1023,31,9,NULL,NULL,NULL,5),(1024,35,9,NULL,NULL,NULL,5),(1025,38,9,NULL,NULL,NULL,5),(1026,24,9,NULL,NULL,NULL,5),(1027,29,9,NULL,NULL,NULL,5),(1028,32,9,NULL,NULL,NULL,5),(1029,39,9,NULL,NULL,NULL,5),(1030,34,9,NULL,NULL,NULL,6),(1031,22,9,NULL,NULL,NULL,6),(1032,28,9,NULL,NULL,NULL,6),(1033,22,9,NULL,NULL,NULL,6),(1034,21,9,NULL,NULL,NULL,6),(1035,36,9,NULL,NULL,NULL,6),(1036,31,9,NULL,NULL,NULL,6),(1037,35,9,NULL,NULL,NULL,6),(1038,38,9,NULL,NULL,NULL,6),(1039,24,9,NULL,NULL,NULL,6),(1040,29,9,3,NULL,NULL,6),(1041,32,9,NULL,NULL,NULL,6),(1042,39,9,NULL,NULL,NULL,6),(1043,34,9,NULL,NULL,NULL,7),(1044,22,9,NULL,NULL,NULL,7),(1045,28,9,NULL,NULL,NULL,7),(1046,22,9,NULL,NULL,NULL,7),(1047,21,9,NULL,NULL,NULL,7),(1048,36,9,NULL,NULL,NULL,7),(1049,31,9,NULL,NULL,NULL,7),(1050,35,9,NULL,NULL,NULL,7),(1051,38,9,NULL,NULL,NULL,7),(1052,24,9,NULL,NULL,NULL,7),(1053,29,9,NULL,NULL,NULL,7),(1054,39,9,NULL,NULL,NULL,7),(1055,30,9,NULL,NULL,NULL,2),(1056,30,9,NULL,NULL,NULL,3),(1057,30,9,NULL,NULL,NULL,4),(1058,25,9,NULL,NULL,NULL,4),(1059,37,9,NULL,NULL,NULL,5),(1060,27,9,NULL,NULL,NULL,5),(1061,33,9,9,NULL,NULL,7),(1062,26,9,NULL,NULL,NULL,7),(1063,34,9,NULL,NULL,NULL,1),(1064,22,9,NULL,NULL,NULL,1),(1065,28,9,NULL,NULL,NULL,1),(1066,22,9,NULL,NULL,NULL,1),(1067,21,9,NULL,NULL,NULL,1),(1068,36,9,NULL,NULL,NULL,1),(1069,31,9,NULL,NULL,NULL,1),(1070,35,9,NULL,NULL,NULL,1),(1071,38,9,NULL,NULL,NULL,1),(1072,24,10,NULL,NULL,NULL,1),(1073,29,10,NULL,NULL,NULL,1),(1074,32,10,NULL,NULL,NULL,1),(1075,39,10,NULL,NULL,NULL,1),(1076,34,10,NULL,NULL,NULL,2),(1077,22,10,NULL,NULL,NULL,2),(1078,28,10,NULL,NULL,NULL,2),(1079,22,10,NULL,NULL,NULL,2),(1080,21,10,NULL,NULL,NULL,2),(1081,36,10,NULL,NULL,NULL,2),(1082,31,10,NULL,NULL,NULL,2),(1083,35,10,NULL,NULL,NULL,2),(1084,38,10,NULL,NULL,NULL,2),(1085,24,10,NULL,NULL,NULL,2),(1086,29,10,NULL,NULL,NULL,2),(1087,32,10,NULL,NULL,NULL,2),(1088,39,10,NULL,NULL,NULL,2),(1089,34,10,NULL,NULL,NULL,3),(1090,22,10,NULL,NULL,NULL,3),(1091,28,10,NULL,NULL,NULL,3),(1092,22,10,NULL,NULL,NULL,3),(1093,21,10,NULL,NULL,NULL,3),(1094,36,10,NULL,NULL,NULL,3),(1095,31,10,NULL,NULL,NULL,3),(1096,35,10,NULL,NULL,NULL,3),(1097,38,10,NULL,NULL,NULL,3),(1098,24,10,NULL,NULL,NULL,3),(1099,29,10,NULL,NULL,NULL,3),(1100,32,10,NULL,NULL,NULL,3),(1101,39,10,NULL,NULL,NULL,3),(1102,34,10,NULL,NULL,NULL,4),(1103,22,10,NULL,NULL,NULL,4),(1104,28,10,NULL,NULL,NULL,4),(1105,22,10,NULL,NULL,NULL,4),(1106,21,10,NULL,NULL,NULL,4),(1107,36,10,NULL,NULL,NULL,4),(1108,31,10,NULL,NULL,NULL,4),(1109,35,10,NULL,NULL,NULL,4),(1110,38,10,NULL,NULL,NULL,4),(1111,24,10,NULL,NULL,NULL,4),(1112,29,10,NULL,NULL,NULL,4),(1113,32,10,NULL,NULL,NULL,4),(1114,39,10,NULL,NULL,NULL,4),(1115,34,10,NULL,NULL,NULL,5),(1116,22,10,NULL,NULL,NULL,5),(1117,28,10,NULL,NULL,NULL,5),(1118,22,10,NULL,NULL,NULL,5),(1119,21,10,NULL,NULL,NULL,5),(1120,36,10,NULL,NULL,NULL,5),(1121,31,10,NULL,NULL,NULL,5),(1122,35,10,NULL,NULL,NULL,5),(1123,38,10,NULL,NULL,NULL,5),(1124,24,10,NULL,NULL,NULL,5),(1125,29,10,NULL,NULL,NULL,5),(1126,32,10,NULL,NULL,NULL,5),(1127,39,10,NULL,NULL,NULL,5),(1128,34,10,NULL,NULL,NULL,6),(1129,22,10,NULL,NULL,NULL,6),(1130,28,10,NULL,NULL,NULL,6),(1131,22,10,NULL,NULL,NULL,6),(1132,21,10,NULL,NULL,NULL,6),(1133,36,10,NULL,NULL,NULL,6),(1134,31,10,NULL,NULL,NULL,6),(1135,35,10,NULL,NULL,NULL,6),(1136,38,10,NULL,NULL,NULL,6),(1137,24,10,NULL,NULL,NULL,6),(1138,29,10,NULL,NULL,NULL,6),(1139,32,10,NULL,NULL,NULL,6),(1140,39,10,NULL,NULL,NULL,6),(1141,34,10,NULL,NULL,NULL,7),(1142,22,10,NULL,NULL,NULL,7),(1143,28,10,NULL,NULL,NULL,7),(1144,22,10,NULL,NULL,NULL,7),(1145,21,10,NULL,NULL,NULL,7),(1146,36,10,NULL,NULL,NULL,7),(1147,31,10,NULL,NULL,NULL,7),(1148,35,10,NULL,NULL,NULL,7),(1149,38,10,NULL,NULL,NULL,7),(1150,24,10,NULL,NULL,NULL,7),(1151,29,10,NULL,NULL,NULL,7),(1152,39,10,NULL,NULL,NULL,7),(1153,30,10,NULL,NULL,NULL,2),(1154,30,10,NULL,NULL,NULL,3),(1155,30,10,NULL,NULL,NULL,4),(1156,25,10,NULL,NULL,NULL,4),(1157,37,10,NULL,NULL,NULL,5),(1158,27,10,NULL,NULL,NULL,5),(1159,33,10,NULL,NULL,NULL,7),(1160,26,10,NULL,NULL,NULL,7),(1161,34,10,NULL,NULL,NULL,1),(1162,22,10,NULL,NULL,NULL,1),(1163,28,10,NULL,NULL,NULL,1),(1164,22,10,NULL,NULL,NULL,1),(1165,21,10,NULL,NULL,NULL,1),(1166,36,10,NULL,NULL,NULL,1),(1167,31,10,NULL,NULL,NULL,1),(1168,35,10,NULL,NULL,NULL,1),(1169,38,10,NULL,NULL,NULL,1),(1170,24,11,NULL,NULL,NULL,1),(1171,29,11,NULL,NULL,NULL,1),(1172,32,11,NULL,NULL,NULL,1),(1173,39,11,NULL,NULL,NULL,1),(1174,34,11,NULL,NULL,NULL,2),(1175,22,11,NULL,NULL,NULL,2),(1176,28,11,NULL,NULL,NULL,2),(1177,22,11,NULL,NULL,NULL,2),(1178,21,11,NULL,NULL,NULL,2),(1179,36,11,NULL,NULL,NULL,2),(1180,31,11,NULL,NULL,NULL,2),(1181,35,11,NULL,NULL,NULL,2),(1182,38,11,NULL,NULL,NULL,2),(1183,24,11,NULL,NULL,NULL,2),(1184,29,11,NULL,NULL,NULL,2),(1185,32,11,NULL,NULL,NULL,2),(1186,39,11,NULL,NULL,NULL,2),(1187,34,11,NULL,NULL,NULL,3),(1188,22,11,NULL,NULL,NULL,3),(1189,28,11,NULL,NULL,NULL,3),(1190,22,11,NULL,NULL,NULL,3),(1191,21,11,NULL,NULL,NULL,3),(1192,36,11,NULL,NULL,NULL,3),(1193,31,11,NULL,NULL,NULL,3),(1194,35,11,NULL,NULL,NULL,3),(1195,38,11,NULL,NULL,NULL,3),(1196,24,11,NULL,NULL,NULL,3),(1197,29,11,NULL,NULL,NULL,3),(1198,32,11,NULL,NULL,NULL,3),(1199,39,11,NULL,NULL,NULL,3),(1200,34,11,NULL,NULL,NULL,4),(1201,22,11,NULL,NULL,NULL,4),(1202,28,11,NULL,NULL,NULL,4),(1203,22,11,NULL,NULL,NULL,4),(1204,21,11,NULL,NULL,NULL,4),(1205,36,11,NULL,NULL,NULL,4),(1206,31,11,NULL,NULL,NULL,4),(1207,35,11,NULL,NULL,NULL,4),(1208,38,11,NULL,NULL,NULL,4),(1209,24,11,NULL,NULL,NULL,4),(1210,29,11,NULL,NULL,NULL,4),(1211,32,11,NULL,NULL,NULL,4),(1212,39,11,NULL,NULL,NULL,4),(1213,34,11,NULL,NULL,NULL,5),(1214,22,11,NULL,NULL,NULL,5),(1215,28,11,NULL,NULL,NULL,5),(1216,22,11,NULL,NULL,NULL,5),(1217,21,11,NULL,NULL,NULL,5),(1218,36,11,NULL,NULL,NULL,5),(1219,31,11,NULL,NULL,NULL,5),(1220,35,11,NULL,NULL,NULL,5),(1221,38,11,NULL,NULL,NULL,5),(1222,24,11,NULL,NULL,NULL,5),(1223,29,11,NULL,NULL,NULL,5),(1224,32,11,NULL,NULL,NULL,5),(1225,39,11,NULL,NULL,NULL,5),(1226,34,11,NULL,NULL,NULL,6),(1227,22,11,NULL,NULL,NULL,6),(1228,28,11,NULL,NULL,NULL,6),(1229,22,11,NULL,NULL,NULL,6),(1230,21,11,NULL,NULL,NULL,6),(1231,36,11,NULL,NULL,NULL,6),(1232,31,11,NULL,NULL,NULL,6),(1233,35,11,NULL,NULL,NULL,6),(1234,38,11,NULL,NULL,NULL,6),(1235,24,11,NULL,NULL,NULL,6),(1236,29,11,NULL,NULL,NULL,6),(1237,32,11,NULL,NULL,NULL,6),(1238,39,11,NULL,NULL,NULL,6),(1239,34,11,NULL,NULL,NULL,7),(1240,22,11,NULL,NULL,NULL,7),(1241,28,11,NULL,NULL,NULL,7),(1242,22,11,NULL,NULL,NULL,7),(1243,21,11,NULL,NULL,NULL,7),(1244,36,11,NULL,NULL,NULL,7),(1245,31,11,NULL,NULL,NULL,7),(1246,35,11,NULL,NULL,NULL,7),(1247,38,11,NULL,NULL,NULL,7),(1248,24,11,NULL,NULL,NULL,7),(1249,29,11,NULL,NULL,NULL,7),(1250,39,11,NULL,NULL,NULL,7),(1251,30,11,NULL,NULL,NULL,2),(1252,30,11,NULL,NULL,NULL,3),(1253,30,11,NULL,NULL,NULL,4),(1254,25,11,NULL,NULL,NULL,4),(1255,37,11,NULL,NULL,NULL,5),(1256,27,11,NULL,NULL,NULL,5),(1257,33,11,NULL,NULL,NULL,7),(1258,26,11,NULL,NULL,NULL,7),(1259,34,11,NULL,NULL,NULL,1),(1260,22,11,NULL,NULL,NULL,1),(1261,28,11,NULL,NULL,NULL,1),(1262,22,11,NULL,NULL,NULL,1),(1263,21,11,NULL,NULL,NULL,1),(1264,36,11,NULL,NULL,NULL,1),(1265,31,11,NULL,NULL,NULL,1),(1266,35,11,NULL,NULL,NULL,1),(1267,38,11,NULL,NULL,NULL,1),(1268,24,12,NULL,NULL,NULL,1),(1269,29,12,NULL,NULL,NULL,1),(1270,32,12,NULL,NULL,NULL,1),(1271,39,12,NULL,NULL,NULL,1),(1272,34,12,NULL,NULL,NULL,2),(1273,22,12,NULL,NULL,NULL,2),(1274,28,12,NULL,NULL,NULL,2),(1275,22,12,NULL,NULL,NULL,2),(1276,21,12,NULL,NULL,NULL,2),(1277,36,12,NULL,NULL,NULL,2),(1278,31,12,NULL,NULL,NULL,2),(1279,35,12,NULL,NULL,NULL,2),(1280,38,12,NULL,NULL,NULL,2),(1281,24,12,NULL,NULL,NULL,2),(1282,29,12,NULL,NULL,NULL,2),(1283,32,12,NULL,NULL,NULL,2),(1284,39,12,NULL,NULL,NULL,2),(1285,34,12,NULL,NULL,NULL,3),(1286,22,12,NULL,NULL,NULL,3),(1287,28,12,NULL,NULL,NULL,3),(1288,22,12,NULL,NULL,NULL,3),(1289,21,12,NULL,NULL,NULL,3),(1290,36,12,NULL,NULL,NULL,3),(1291,31,12,NULL,NULL,NULL,3),(1292,35,12,NULL,NULL,NULL,3),(1293,38,12,NULL,NULL,NULL,3),(1294,24,12,NULL,NULL,NULL,3),(1295,29,12,NULL,NULL,NULL,3),(1296,32,12,NULL,NULL,NULL,3),(1297,39,12,NULL,NULL,NULL,3),(1298,34,12,NULL,NULL,NULL,4),(1299,22,12,NULL,NULL,NULL,4),(1300,28,12,NULL,NULL,NULL,4),(1301,22,12,NULL,NULL,NULL,4),(1302,21,12,NULL,NULL,NULL,4),(1303,36,12,NULL,NULL,NULL,4),(1304,31,12,NULL,NULL,NULL,4),(1305,35,12,NULL,NULL,NULL,4),(1306,38,12,NULL,NULL,NULL,4),(1307,24,12,NULL,NULL,NULL,4),(1308,29,12,NULL,NULL,NULL,4),(1309,32,12,NULL,NULL,NULL,4),(1310,39,12,NULL,NULL,NULL,4),(1311,34,12,NULL,NULL,NULL,5),(1312,22,12,NULL,NULL,NULL,5),(1313,28,12,NULL,NULL,NULL,5),(1314,22,12,NULL,NULL,NULL,5),(1315,21,12,NULL,NULL,NULL,5),(1316,36,12,NULL,NULL,NULL,5),(1317,31,12,NULL,NULL,NULL,5),(1318,35,12,NULL,NULL,NULL,5),(1319,38,12,NULL,NULL,NULL,5),(1320,24,12,NULL,NULL,NULL,5),(1321,29,12,NULL,NULL,NULL,5),(1322,32,12,NULL,NULL,NULL,5),(1323,39,12,NULL,NULL,NULL,5),(1324,34,12,NULL,NULL,NULL,6),(1325,22,12,NULL,NULL,NULL,6),(1326,28,12,NULL,NULL,NULL,6),(1327,22,12,NULL,NULL,NULL,6),(1328,21,12,NULL,NULL,NULL,6),(1329,36,12,NULL,NULL,NULL,6),(1330,31,12,NULL,NULL,NULL,6),(1331,35,12,NULL,NULL,NULL,6),(1332,38,12,NULL,NULL,NULL,6),(1333,24,12,NULL,NULL,NULL,6),(1334,29,12,NULL,NULL,NULL,6),(1335,32,12,NULL,NULL,NULL,6),(1336,39,12,NULL,NULL,NULL,6),(1337,34,12,NULL,NULL,NULL,7),(1338,22,12,NULL,NULL,NULL,7),(1339,28,12,NULL,NULL,NULL,7),(1340,22,12,NULL,NULL,NULL,7),(1341,21,12,NULL,NULL,NULL,7),(1342,36,12,NULL,NULL,NULL,7),(1343,31,12,NULL,NULL,NULL,7),(1344,35,12,NULL,NULL,NULL,7),(1345,38,12,NULL,NULL,NULL,7),(1346,24,12,NULL,NULL,NULL,7),(1347,29,12,NULL,NULL,NULL,7),(1348,39,12,NULL,NULL,NULL,7),(1349,30,12,NULL,NULL,NULL,2),(1350,30,12,NULL,NULL,NULL,3),(1351,30,12,NULL,NULL,NULL,4),(1352,25,12,NULL,NULL,NULL,4),(1353,37,12,NULL,NULL,NULL,5),(1354,27,12,NULL,NULL,NULL,5),(1355,33,12,NULL,NULL,NULL,7),(1356,26,12,NULL,NULL,NULL,7),(1357,34,12,NULL,NULL,NULL,1),(1358,22,12,NULL,NULL,NULL,1),(1359,28,12,NULL,NULL,NULL,1),(1360,22,12,NULL,NULL,NULL,1),(1361,21,12,NULL,NULL,NULL,1),(1362,36,12,NULL,NULL,NULL,1),(1363,31,12,NULL,NULL,NULL,1),(1364,35,12,NULL,NULL,NULL,1),(1365,38,12,NULL,NULL,NULL,1),(1366,24,13,NULL,NULL,NULL,1),(1367,29,13,NULL,NULL,NULL,1),(1368,32,13,NULL,NULL,NULL,1),(1369,39,13,NULL,NULL,NULL,1),(1370,34,13,NULL,NULL,NULL,2),(1371,22,13,NULL,NULL,NULL,2),(1372,28,13,NULL,NULL,NULL,2),(1373,22,13,NULL,NULL,NULL,2),(1374,21,13,NULL,NULL,NULL,2),(1375,36,13,NULL,NULL,NULL,2),(1376,31,13,NULL,NULL,NULL,2),(1377,35,13,NULL,NULL,NULL,2),(1378,38,13,NULL,NULL,NULL,2),(1379,24,13,NULL,NULL,NULL,2),(1380,29,13,NULL,NULL,NULL,2),(1381,32,13,NULL,NULL,NULL,2),(1382,39,13,NULL,NULL,NULL,2),(1383,34,13,NULL,NULL,NULL,3),(1384,22,13,NULL,NULL,NULL,3),(1385,28,13,NULL,NULL,NULL,3),(1386,22,13,NULL,NULL,NULL,3),(1387,21,13,NULL,NULL,NULL,3),(1388,36,13,NULL,NULL,NULL,3),(1389,31,13,NULL,NULL,NULL,3),(1390,35,13,NULL,NULL,NULL,3),(1391,38,13,NULL,NULL,NULL,3),(1392,24,13,NULL,NULL,NULL,3),(1393,29,13,NULL,NULL,NULL,3),(1394,32,13,NULL,NULL,NULL,3),(1395,39,13,NULL,NULL,NULL,3),(1396,34,13,NULL,NULL,NULL,4),(1397,22,13,NULL,NULL,NULL,4),(1398,28,13,NULL,NULL,NULL,4),(1399,22,13,NULL,NULL,NULL,4),(1400,21,13,NULL,NULL,NULL,4),(1401,36,13,NULL,NULL,NULL,4),(1402,31,13,NULL,NULL,NULL,4),(1403,35,13,NULL,NULL,NULL,4),(1404,38,13,NULL,NULL,NULL,4),(1405,24,13,NULL,NULL,NULL,4),(1406,29,13,NULL,NULL,NULL,4),(1407,32,13,NULL,NULL,NULL,4),(1408,39,13,NULL,NULL,NULL,4),(1409,34,13,NULL,NULL,NULL,5),(1410,22,13,NULL,NULL,NULL,5),(1411,28,13,NULL,NULL,NULL,5),(1412,22,13,NULL,NULL,NULL,5),(1413,21,13,NULL,NULL,NULL,5),(1414,36,13,NULL,NULL,NULL,5),(1415,31,13,NULL,NULL,NULL,5),(1416,35,13,NULL,NULL,NULL,5),(1417,38,13,NULL,NULL,NULL,5),(1418,24,13,NULL,NULL,NULL,5),(1419,29,13,NULL,NULL,NULL,5),(1420,32,13,NULL,NULL,NULL,5),(1421,39,13,NULL,NULL,NULL,5),(1422,34,13,NULL,NULL,NULL,6),(1423,22,13,NULL,NULL,NULL,6),(1424,28,13,NULL,NULL,NULL,6),(1425,22,13,NULL,NULL,NULL,6),(1426,21,13,NULL,NULL,NULL,6),(1427,36,13,NULL,NULL,NULL,6),(1428,31,13,NULL,NULL,NULL,6),(1429,35,13,NULL,NULL,NULL,6),(1430,38,13,NULL,NULL,NULL,6),(1431,24,13,NULL,NULL,NULL,6),(1432,29,13,NULL,NULL,NULL,6),(1433,32,13,NULL,NULL,NULL,6),(1434,39,13,NULL,NULL,NULL,6),(1435,34,13,NULL,NULL,NULL,7),(1436,22,13,NULL,NULL,NULL,7),(1437,28,13,NULL,NULL,NULL,7),(1438,22,13,NULL,NULL,NULL,7),(1439,21,13,NULL,NULL,NULL,7),(1440,36,13,NULL,NULL,NULL,7),(1441,31,13,NULL,NULL,NULL,7),(1442,35,13,NULL,NULL,NULL,7),(1443,38,13,NULL,NULL,NULL,7),(1444,24,13,NULL,NULL,NULL,7),(1445,29,13,NULL,NULL,NULL,7),(1446,39,13,NULL,NULL,NULL,7),(1447,30,13,NULL,NULL,NULL,2),(1448,30,13,NULL,NULL,NULL,3),(1449,30,13,NULL,NULL,NULL,4),(1450,25,13,NULL,NULL,NULL,4),(1451,37,13,NULL,NULL,NULL,5),(1452,27,13,NULL,NULL,NULL,5),(1453,33,13,NULL,NULL,NULL,7),(1454,26,13,NULL,NULL,NULL,7),(1455,34,13,NULL,NULL,NULL,1),(1456,22,13,NULL,NULL,NULL,1),(1457,28,13,NULL,NULL,NULL,1),(1458,22,13,NULL,NULL,NULL,1),(1459,21,13,NULL,NULL,NULL,1),(1460,36,13,NULL,NULL,NULL,1),(1461,31,13,NULL,NULL,NULL,1),(1462,35,13,NULL,NULL,NULL,1),(1463,38,13,NULL,NULL,NULL,1),(1464,24,14,9,NULL,NULL,1),(1465,29,14,NULL,NULL,NULL,1),(1466,32,14,NULL,NULL,NULL,1),(1467,39,14,NULL,NULL,NULL,1),(1468,34,14,NULL,NULL,NULL,2),(1469,22,14,NULL,NULL,NULL,2),(1470,28,14,NULL,NULL,NULL,2),(1471,22,14,NULL,NULL,NULL,2),(1472,21,14,NULL,NULL,NULL,2),(1473,36,14,NULL,NULL,NULL,2),(1474,31,14,NULL,NULL,NULL,2),(1475,35,14,NULL,NULL,NULL,2),(1476,38,14,NULL,NULL,NULL,2),(1477,24,14,NULL,NULL,NULL,2),(1478,29,14,NULL,NULL,NULL,2),(1479,32,14,NULL,NULL,NULL,2),(1480,39,14,9,NULL,NULL,2),(1481,34,14,5,NULL,NULL,3),(1482,22,14,NULL,NULL,NULL,3),(1483,28,14,NULL,NULL,NULL,3),(1484,22,14,11,NULL,NULL,3),(1485,21,14,NULL,NULL,NULL,3),(1486,36,14,NULL,NULL,NULL,3),(1487,31,14,NULL,NULL,NULL,3),(1488,35,14,NULL,NULL,NULL,3),(1489,38,14,NULL,NULL,NULL,3),(1490,24,14,7,NULL,NULL,3),(1491,29,14,NULL,NULL,NULL,3),(1492,32,14,5,NULL,NULL,3),(1493,39,14,NULL,NULL,NULL,3),(1494,34,14,NULL,NULL,NULL,4),(1495,22,14,NULL,NULL,NULL,4),(1496,28,14,NULL,NULL,NULL,4),(1497,22,14,NULL,NULL,NULL,4),(1498,21,14,NULL,NULL,NULL,4),(1499,36,14,NULL,NULL,NULL,4),(1500,31,14,NULL,NULL,NULL,4),(1501,35,14,NULL,NULL,NULL,4),(1502,38,14,NULL,NULL,NULL,4),(1503,24,14,NULL,NULL,NULL,4),(1504,29,14,NULL,NULL,NULL,4),(1505,32,14,NULL,NULL,NULL,4),(1506,39,14,NULL,NULL,NULL,4),(1507,34,14,NULL,NULL,NULL,5),(1508,22,14,NULL,NULL,NULL,5),(1509,28,14,104,NULL,NULL,5),(1510,22,14,NULL,NULL,NULL,5),(1511,21,14,NULL,NULL,NULL,5),(1512,36,14,NULL,NULL,NULL,5),(1513,31,14,NULL,NULL,NULL,5),(1514,35,14,NULL,NULL,NULL,5),(1515,38,14,NULL,NULL,NULL,5),(1516,24,14,2,NULL,NULL,5),(1517,29,14,NULL,NULL,NULL,5),(1518,32,14,NULL,NULL,NULL,5),(1519,39,14,NULL,NULL,NULL,5),(1520,34,14,NULL,NULL,NULL,6),(1521,22,14,NULL,NULL,NULL,6),(1522,28,14,NULL,NULL,NULL,6),(1523,22,14,NULL,NULL,NULL,6),(1524,21,14,NULL,NULL,NULL,6),(1525,36,14,NULL,NULL,NULL,6),(1526,31,14,NULL,NULL,NULL,6),(1527,35,14,NULL,NULL,NULL,6),(1528,38,14,NULL,NULL,NULL,6),(1529,24,14,NULL,NULL,NULL,6),(1530,29,14,NULL,NULL,NULL,6),(1531,32,14,NULL,NULL,NULL,6),(1532,39,14,12,NULL,NULL,6),(1533,34,14,2,NULL,NULL,7),(1534,22,14,NULL,NULL,NULL,7),(1535,28,14,NULL,NULL,NULL,7),(1536,22,14,104,NULL,NULL,7),(1537,21,14,NULL,NULL,NULL,7),(1538,36,14,NULL,NULL,NULL,7),(1539,31,14,NULL,NULL,NULL,7),(1540,35,14,NULL,NULL,NULL,7),(1541,38,14,NULL,NULL,NULL,7),(1542,24,14,NULL,NULL,NULL,7),(1543,29,14,NULL,NULL,NULL,7),(1544,39,14,NULL,NULL,NULL,7),(1545,30,14,6,NULL,NULL,2),(1546,30,14,NULL,NULL,NULL,3),(1547,30,14,NULL,NULL,NULL,4),(1548,25,14,NULL,NULL,NULL,4),(1549,37,14,NULL,NULL,NULL,5),(1550,27,14,NULL,NULL,NULL,5),(1551,33,14,NULL,NULL,NULL,7),(1552,26,14,NULL,NULL,NULL,7),(1553,34,14,NULL,NULL,NULL,1),(1554,22,14,NULL,NULL,NULL,1),(1555,28,14,NULL,NULL,NULL,1),(1556,22,14,NULL,NULL,NULL,1),(1557,21,14,NULL,NULL,NULL,1),(1558,36,14,NULL,NULL,NULL,1),(1559,31,14,NULL,NULL,NULL,1),(1560,35,14,NULL,NULL,NULL,1),(1561,38,14,NULL,NULL,NULL,1),(1562,24,15,NULL,NULL,NULL,1),(1563,29,15,NULL,NULL,NULL,1),(1564,32,15,NULL,NULL,NULL,1),(1565,39,15,NULL,NULL,NULL,1),(1566,34,15,NULL,NULL,NULL,2),(1567,22,15,NULL,NULL,NULL,2),(1568,28,15,NULL,NULL,NULL,2),(1569,22,15,NULL,NULL,NULL,2),(1570,21,15,NULL,NULL,NULL,2),(1571,36,15,NULL,NULL,NULL,2),(1572,31,15,NULL,NULL,NULL,2),(1573,35,15,NULL,NULL,NULL,2),(1574,38,15,NULL,NULL,NULL,2),(1575,24,15,NULL,NULL,NULL,2),(1576,29,15,NULL,NULL,NULL,2),(1577,32,15,NULL,NULL,NULL,2),(1578,39,15,NULL,NULL,NULL,2),(1579,34,15,NULL,NULL,NULL,3),(1580,22,15,NULL,NULL,NULL,3),(1581,28,15,NULL,NULL,NULL,3),(1582,22,15,NULL,NULL,NULL,3),(1583,21,15,NULL,NULL,NULL,3),(1584,36,15,NULL,NULL,NULL,3),(1585,31,15,NULL,NULL,NULL,3),(1586,35,15,NULL,NULL,NULL,3),(1587,38,15,NULL,NULL,NULL,3),(1588,24,15,NULL,NULL,NULL,3),(1589,29,15,NULL,NULL,NULL,3),(1590,32,15,NULL,NULL,NULL,3),(1591,39,15,NULL,NULL,NULL,3),(1592,34,15,NULL,NULL,NULL,4),(1593,22,15,NULL,NULL,NULL,4),(1594,28,15,NULL,NULL,NULL,4),(1595,22,15,NULL,NULL,NULL,4),(1596,21,15,NULL,NULL,NULL,4),(1597,36,15,NULL,NULL,NULL,4),(1598,31,15,NULL,NULL,NULL,4),(1599,35,15,NULL,NULL,NULL,4),(1600,38,15,NULL,NULL,NULL,4),(1601,24,15,NULL,NULL,NULL,4),(1602,29,15,NULL,NULL,NULL,4),(1603,32,15,NULL,NULL,NULL,4),(1604,39,15,NULL,NULL,NULL,4),(1605,34,15,NULL,NULL,NULL,5),(1606,22,15,NULL,NULL,NULL,5),(1607,28,15,NULL,NULL,NULL,5),(1608,22,15,NULL,NULL,NULL,5),(1609,21,15,NULL,NULL,NULL,5),(1610,36,15,NULL,NULL,NULL,5),(1611,31,15,NULL,NULL,NULL,5),(1612,35,15,NULL,NULL,NULL,5),(1613,38,15,NULL,NULL,NULL,5),(1614,24,15,NULL,NULL,NULL,5),(1615,29,15,NULL,NULL,NULL,5),(1616,32,15,NULL,NULL,NULL,5),(1617,39,15,NULL,NULL,NULL,5),(1618,34,15,NULL,NULL,NULL,6),(1619,22,15,NULL,NULL,NULL,6),(1620,28,15,NULL,NULL,NULL,6),(1621,22,15,NULL,NULL,NULL,6),(1622,21,15,NULL,NULL,NULL,6),(1623,36,15,NULL,NULL,NULL,6),(1624,31,15,NULL,NULL,NULL,6),(1625,35,15,NULL,NULL,NULL,6),(1626,38,15,NULL,NULL,NULL,6),(1627,24,15,NULL,NULL,NULL,6),(1628,29,15,NULL,NULL,NULL,6),(1629,32,15,NULL,NULL,NULL,6),(1630,39,15,NULL,NULL,NULL,6),(1631,34,15,NULL,NULL,NULL,7),(1632,22,15,NULL,NULL,NULL,7),(1633,28,15,NULL,NULL,NULL,7),(1634,22,15,NULL,NULL,NULL,7),(1635,21,15,NULL,NULL,NULL,7),(1636,36,15,NULL,NULL,NULL,7),(1637,31,15,NULL,NULL,NULL,7),(1638,35,15,NULL,NULL,NULL,7),(1639,38,15,NULL,NULL,NULL,7),(1640,24,15,NULL,NULL,NULL,7),(1641,29,15,NULL,NULL,NULL,7),(1642,39,15,NULL,NULL,NULL,7),(1643,30,15,NULL,NULL,NULL,2),(1644,30,15,NULL,NULL,NULL,3),(1645,30,15,NULL,NULL,NULL,4),(1646,25,15,NULL,NULL,NULL,4),(1647,37,15,NULL,NULL,NULL,5),(1648,27,15,NULL,NULL,NULL,5),(1649,33,15,NULL,NULL,NULL,7),(1650,26,15,NULL,NULL,NULL,7),(1651,34,15,NULL,NULL,NULL,1),(1652,22,15,NULL,NULL,NULL,1),(1653,28,15,NULL,NULL,NULL,1),(1654,22,15,NULL,NULL,NULL,1),(1655,21,15,NULL,NULL,NULL,1),(1656,36,15,NULL,NULL,NULL,1),(1657,31,15,NULL,NULL,NULL,1),(1658,35,15,NULL,NULL,NULL,1),(1659,38,15,NULL,NULL,NULL,1),(1660,24,16,NULL,NULL,NULL,1),(1661,29,16,NULL,NULL,NULL,1),(1662,32,16,NULL,NULL,NULL,1),(1663,39,16,NULL,NULL,NULL,1),(1664,34,16,NULL,NULL,NULL,2),(1665,22,16,NULL,NULL,NULL,2),(1666,28,16,NULL,NULL,NULL,2),(1667,22,16,NULL,NULL,NULL,2),(1668,21,16,NULL,NULL,NULL,2),(1669,36,16,NULL,NULL,NULL,2),(1670,31,16,NULL,NULL,NULL,2),(1671,35,16,NULL,NULL,NULL,2),(1672,38,16,NULL,NULL,NULL,2),(1673,24,16,NULL,NULL,NULL,2),(1674,29,16,NULL,NULL,NULL,2),(1675,32,16,NULL,NULL,NULL,2),(1676,39,16,NULL,NULL,NULL,2),(1677,34,16,NULL,NULL,NULL,3),(1678,22,16,NULL,NULL,NULL,3),(1679,28,16,NULL,NULL,NULL,3),(1680,22,16,NULL,NULL,NULL,3),(1681,21,16,NULL,NULL,NULL,3),(1682,36,16,NULL,NULL,NULL,3),(1683,31,16,NULL,NULL,NULL,3),(1684,35,16,NULL,NULL,NULL,3),(1685,38,16,NULL,NULL,NULL,3),(1686,24,16,NULL,NULL,NULL,3),(1687,29,16,NULL,NULL,NULL,3),(1688,32,16,NULL,NULL,NULL,3),(1689,39,16,NULL,NULL,NULL,3),(1690,34,16,NULL,NULL,NULL,4),(1691,22,16,NULL,NULL,NULL,4),(1692,28,16,NULL,NULL,NULL,4),(1693,22,16,NULL,NULL,NULL,4),(1694,21,16,NULL,NULL,NULL,4),(1695,36,16,NULL,NULL,NULL,4),(1696,31,16,NULL,NULL,NULL,4),(1697,35,16,NULL,NULL,NULL,4),(1698,38,16,NULL,NULL,NULL,4),(1699,24,16,NULL,NULL,NULL,4),(1700,29,16,NULL,NULL,NULL,4),(1701,32,16,NULL,NULL,NULL,4),(1702,39,16,NULL,NULL,NULL,4),(1703,34,16,NULL,NULL,NULL,5),(1704,22,16,NULL,NULL,NULL,5),(1705,28,16,NULL,NULL,NULL,5),(1706,22,16,NULL,NULL,NULL,5),(1707,21,16,NULL,NULL,NULL,5),(1708,36,16,NULL,NULL,NULL,5),(1709,31,16,NULL,NULL,NULL,5),(1710,35,16,NULL,NULL,NULL,5),(1711,38,16,NULL,NULL,NULL,5),(1712,24,16,NULL,NULL,NULL,5),(1713,29,16,NULL,NULL,NULL,5),(1714,32,16,NULL,NULL,NULL,5),(1715,39,16,NULL,NULL,NULL,5),(1716,34,16,NULL,NULL,NULL,6),(1717,22,16,NULL,NULL,NULL,6),(1718,28,16,NULL,NULL,NULL,6),(1719,22,16,NULL,NULL,NULL,6),(1720,21,16,NULL,NULL,NULL,6),(1721,36,16,NULL,NULL,NULL,6),(1722,31,16,NULL,NULL,NULL,6),(1723,35,16,NULL,NULL,NULL,6),(1724,38,16,NULL,NULL,NULL,6),(1725,24,16,NULL,NULL,NULL,6),(1726,29,16,NULL,NULL,NULL,6),(1727,32,16,NULL,NULL,NULL,6),(1728,39,16,NULL,NULL,NULL,6),(1729,34,16,NULL,NULL,NULL,7),(1730,22,16,NULL,NULL,NULL,7),(1731,28,16,NULL,NULL,NULL,7),(1732,22,16,NULL,NULL,NULL,7),(1733,21,16,NULL,NULL,NULL,7),(1734,36,16,NULL,NULL,NULL,7),(1735,31,16,NULL,NULL,NULL,7),(1736,35,16,NULL,NULL,NULL,7),(1737,38,16,NULL,NULL,NULL,7),(1738,24,16,NULL,NULL,NULL,7),(1739,29,16,NULL,NULL,NULL,7),(1740,39,16,NULL,NULL,NULL,7),(1741,30,16,NULL,NULL,NULL,2),(1742,30,16,NULL,NULL,NULL,3),(1743,30,16,NULL,NULL,NULL,4),(1744,25,16,NULL,NULL,NULL,4),(1745,37,16,NULL,NULL,NULL,5),(1746,27,16,NULL,NULL,NULL,5),(1747,33,16,NULL,NULL,NULL,7),(1748,26,16,NULL,NULL,NULL,7),(1749,34,16,NULL,NULL,NULL,1),(1750,22,16,NULL,NULL,NULL,1),(1751,28,16,NULL,NULL,NULL,1),(1752,22,16,NULL,NULL,NULL,1),(1753,21,16,NULL,NULL,NULL,1),(1754,36,16,NULL,NULL,NULL,1),(1755,31,16,NULL,NULL,NULL,1),(1756,35,16,NULL,NULL,NULL,1),(1757,38,16,NULL,NULL,NULL,1),(1758,24,17,NULL,NULL,NULL,1),(1759,29,17,NULL,NULL,NULL,1),(1760,32,17,NULL,NULL,NULL,1),(1761,39,17,NULL,NULL,NULL,1),(1762,34,17,NULL,NULL,NULL,2),(1763,22,17,NULL,NULL,NULL,2),(1764,28,17,NULL,NULL,NULL,2),(1765,22,17,NULL,NULL,NULL,2),(1766,21,17,NULL,NULL,NULL,2),(1767,36,17,NULL,NULL,NULL,2),(1768,31,17,NULL,NULL,NULL,2),(1769,35,17,NULL,NULL,NULL,2),(1770,38,17,NULL,NULL,NULL,2),(1771,24,17,NULL,NULL,NULL,2),(1772,29,17,NULL,NULL,NULL,2),(1773,32,17,NULL,NULL,NULL,2),(1774,39,17,NULL,NULL,NULL,2),(1775,34,17,NULL,NULL,NULL,3),(1776,22,17,NULL,NULL,NULL,3),(1777,28,17,NULL,NULL,NULL,3),(1778,22,17,NULL,NULL,NULL,3),(1779,21,17,NULL,NULL,NULL,3),(1780,36,17,NULL,NULL,NULL,3),(1781,31,17,NULL,NULL,NULL,3),(1782,35,17,NULL,NULL,NULL,3),(1783,38,17,NULL,NULL,NULL,3),(1784,24,17,NULL,NULL,NULL,3),(1785,29,17,NULL,NULL,NULL,3),(1786,32,17,NULL,NULL,NULL,3),(1787,39,17,NULL,NULL,NULL,3),(1788,34,17,NULL,NULL,NULL,4),(1789,22,17,NULL,NULL,NULL,4),(1790,28,17,NULL,NULL,NULL,4),(1791,22,17,NULL,NULL,NULL,4),(1792,21,17,NULL,NULL,NULL,4),(1793,36,17,NULL,NULL,NULL,4),(1794,31,17,NULL,NULL,NULL,4),(1795,35,17,NULL,NULL,NULL,4),(1796,38,17,NULL,NULL,NULL,4),(1797,24,17,NULL,NULL,NULL,4),(1798,29,17,NULL,NULL,NULL,4),(1799,32,17,NULL,NULL,NULL,4),(1800,39,17,NULL,NULL,NULL,4),(1801,34,17,NULL,NULL,NULL,5),(1802,22,17,NULL,NULL,NULL,5),(1803,28,17,NULL,NULL,NULL,5),(1804,22,17,NULL,NULL,NULL,5),(1805,21,17,NULL,NULL,NULL,5),(1806,36,17,NULL,NULL,NULL,5),(1807,31,17,NULL,NULL,NULL,5),(1808,35,17,NULL,NULL,NULL,5),(1809,38,17,NULL,NULL,NULL,5),(1810,24,17,NULL,NULL,NULL,5),(1811,29,17,NULL,NULL,NULL,5),(1812,32,17,NULL,NULL,NULL,5),(1813,39,17,NULL,NULL,NULL,5),(1814,34,17,NULL,NULL,NULL,6),(1815,22,17,NULL,NULL,NULL,6),(1816,28,17,NULL,NULL,NULL,6),(1817,22,17,NULL,NULL,NULL,6),(1818,21,17,NULL,NULL,NULL,6),(1819,36,17,NULL,NULL,NULL,6),(1820,31,17,NULL,NULL,NULL,6),(1821,35,17,NULL,NULL,NULL,6),(1822,38,17,NULL,NULL,NULL,6),(1823,24,17,NULL,NULL,NULL,6),(1824,29,17,NULL,NULL,NULL,6),(1825,32,17,NULL,NULL,NULL,6),(1826,39,17,NULL,NULL,NULL,6),(1827,34,17,NULL,NULL,NULL,7),(1828,22,17,NULL,NULL,NULL,7),(1829,28,17,NULL,NULL,NULL,7),(1830,22,17,NULL,NULL,NULL,7),(1831,21,17,NULL,NULL,NULL,7),(1832,36,17,NULL,NULL,NULL,7),(1833,31,17,NULL,NULL,NULL,7),(1834,35,17,NULL,NULL,NULL,7),(1835,38,17,NULL,NULL,NULL,7),(1836,24,17,NULL,NULL,NULL,7),(1837,29,17,NULL,NULL,NULL,7),(1838,39,17,NULL,NULL,NULL,7),(1839,30,17,NULL,NULL,NULL,2),(1840,30,17,NULL,NULL,NULL,3),(1841,30,17,NULL,NULL,NULL,4),(1842,25,17,NULL,NULL,NULL,4),(1843,37,17,NULL,NULL,NULL,5),(1844,27,17,NULL,NULL,NULL,5),(1845,33,17,NULL,NULL,NULL,7),(1846,26,17,NULL,NULL,NULL,7),(1847,34,17,NULL,NULL,NULL,1),(1848,22,17,NULL,NULL,NULL,1),(1849,28,17,NULL,NULL,NULL,1),(1850,22,17,NULL,NULL,NULL,1),(1851,21,17,NULL,NULL,NULL,1),(1852,36,17,NULL,NULL,NULL,1),(1853,31,17,NULL,NULL,NULL,1),(1854,35,17,NULL,NULL,NULL,1),(1855,38,17,NULL,NULL,NULL,1),(1856,24,18,NULL,NULL,NULL,1),(1857,29,18,NULL,NULL,NULL,1),(1858,32,18,NULL,NULL,NULL,1),(1859,39,18,NULL,NULL,NULL,1),(1860,34,18,NULL,NULL,NULL,2),(1861,22,18,NULL,NULL,NULL,2),(1862,28,18,NULL,NULL,NULL,2),(1863,22,18,NULL,NULL,NULL,2),(1864,21,18,NULL,NULL,NULL,2),(1865,36,18,NULL,NULL,NULL,2),(1866,31,18,NULL,NULL,NULL,2),(1867,35,18,NULL,NULL,NULL,2),(1868,38,18,NULL,NULL,NULL,2),(1869,24,18,NULL,NULL,NULL,2),(1870,29,18,NULL,NULL,NULL,2),(1871,32,18,NULL,NULL,NULL,2),(1872,39,18,NULL,NULL,NULL,2),(1873,34,18,NULL,NULL,NULL,3),(1874,22,18,NULL,NULL,NULL,3),(1875,28,18,NULL,NULL,NULL,3),(1876,22,18,NULL,NULL,NULL,3),(1877,21,18,NULL,NULL,NULL,3),(1878,36,18,NULL,NULL,NULL,3),(1879,31,18,NULL,NULL,NULL,3),(1880,35,18,NULL,NULL,NULL,3),(1881,38,18,NULL,NULL,NULL,3),(1882,24,18,NULL,NULL,NULL,3),(1883,29,18,NULL,NULL,NULL,3),(1884,32,18,NULL,NULL,NULL,3),(1885,39,18,NULL,NULL,NULL,3),(1886,34,18,NULL,NULL,NULL,4),(1887,22,18,NULL,NULL,NULL,4),(1888,28,18,NULL,NULL,NULL,4),(1889,22,18,NULL,NULL,NULL,4),(1890,21,18,NULL,NULL,NULL,4),(1891,36,18,NULL,NULL,NULL,4),(1892,31,18,NULL,NULL,NULL,4),(1893,35,18,NULL,NULL,NULL,4),(1894,38,18,NULL,NULL,NULL,4),(1895,24,18,NULL,NULL,NULL,4),(1896,29,18,NULL,NULL,NULL,4),(1897,32,18,NULL,NULL,NULL,4),(1898,39,18,NULL,NULL,NULL,4),(1899,34,18,NULL,NULL,NULL,5),(1900,22,18,NULL,NULL,NULL,5),(1901,28,18,NULL,NULL,NULL,5),(1902,22,18,NULL,NULL,NULL,5),(1903,21,18,NULL,NULL,NULL,5),(1904,36,18,NULL,NULL,NULL,5),(1905,31,18,NULL,NULL,NULL,5),(1906,35,18,NULL,NULL,NULL,5),(1907,38,18,NULL,NULL,NULL,5),(1908,24,18,NULL,NULL,NULL,5),(1909,29,18,NULL,NULL,NULL,5),(1910,32,18,NULL,NULL,NULL,5),(1911,39,18,NULL,NULL,NULL,5),(1912,34,18,NULL,NULL,NULL,6),(1913,22,18,NULL,NULL,NULL,6),(1914,28,18,NULL,NULL,NULL,6),(1915,22,18,NULL,NULL,NULL,6),(1916,21,18,NULL,NULL,NULL,6),(1917,36,18,NULL,NULL,NULL,6),(1918,31,18,NULL,NULL,NULL,6),(1919,35,18,NULL,NULL,NULL,6),(1920,38,18,NULL,NULL,NULL,6),(1921,24,18,NULL,NULL,NULL,6),(1922,29,18,NULL,NULL,NULL,6),(1923,32,18,NULL,NULL,NULL,6),(1924,39,18,NULL,NULL,NULL,6),(1925,34,18,NULL,NULL,NULL,7),(1926,22,18,NULL,NULL,NULL,7),(1927,28,18,NULL,NULL,NULL,7),(1928,22,18,NULL,NULL,NULL,7),(1929,21,18,NULL,NULL,NULL,7),(1930,36,18,NULL,NULL,NULL,7),(1931,31,18,NULL,NULL,NULL,7),(1932,35,18,NULL,NULL,NULL,7),(1933,38,18,NULL,NULL,NULL,7),(1934,24,18,NULL,NULL,NULL,7),(1935,29,18,NULL,NULL,NULL,7),(1936,39,18,NULL,NULL,NULL,7),(1937,30,18,NULL,NULL,NULL,2),(1938,30,18,NULL,NULL,NULL,3),(1939,30,18,NULL,NULL,NULL,4),(1940,25,18,NULL,NULL,NULL,4),(1941,37,18,NULL,NULL,NULL,5),(1942,27,18,NULL,NULL,NULL,5),(1943,33,18,NULL,NULL,NULL,7),(1944,26,18,NULL,NULL,NULL,7),(1945,34,18,NULL,NULL,NULL,1),(1946,22,18,NULL,NULL,NULL,1),(1947,28,18,NULL,NULL,NULL,1),(1948,22,18,NULL,NULL,NULL,1),(1949,21,18,NULL,NULL,NULL,1),(1950,36,18,NULL,NULL,NULL,1),(1951,31,18,NULL,NULL,NULL,1),(1952,35,18,NULL,NULL,NULL,1),(1953,38,18,NULL,NULL,NULL,1),(1954,24,19,NULL,NULL,NULL,1),(1955,29,19,NULL,NULL,NULL,1),(1956,32,19,NULL,NULL,NULL,1),(1957,39,19,NULL,NULL,NULL,1),(1958,34,19,NULL,NULL,NULL,2),(1959,22,19,NULL,NULL,NULL,2),(1960,28,19,NULL,NULL,NULL,2),(1961,22,19,NULL,NULL,NULL,2),(1962,21,19,NULL,NULL,NULL,2),(1963,36,19,NULL,NULL,NULL,2),(1964,31,19,NULL,NULL,NULL,2),(1965,35,19,3,NULL,NULL,2),(1966,38,19,NULL,NULL,NULL,2),(1967,24,19,NULL,NULL,NULL,2),(1968,29,19,NULL,NULL,NULL,2),(1969,32,19,NULL,NULL,NULL,2),(1970,39,19,NULL,NULL,NULL,2),(1971,34,19,9,NULL,NULL,3),(1972,22,19,NULL,NULL,NULL,3),(1973,28,19,NULL,NULL,NULL,3),(1974,22,19,NULL,NULL,NULL,3),(1975,21,19,NULL,NULL,NULL,3),(1976,36,19,NULL,NULL,NULL,3),(1977,31,19,NULL,NULL,NULL,3),(1978,35,19,NULL,NULL,NULL,3),(1979,38,19,NULL,NULL,NULL,3),(1980,24,19,NULL,NULL,NULL,3),(1981,29,19,NULL,NULL,NULL,3),(1982,32,19,NULL,NULL,NULL,3),(1983,39,19,NULL,NULL,NULL,3),(1984,34,19,NULL,NULL,NULL,4),(1985,22,19,NULL,NULL,NULL,4),(1986,28,19,NULL,NULL,NULL,4),(1987,22,19,NULL,NULL,NULL,4),(1988,21,19,12,NULL,NULL,4),(1989,36,19,NULL,NULL,NULL,4),(1990,31,19,NULL,NULL,NULL,4),(1991,35,19,NULL,NULL,NULL,4),(1992,38,19,NULL,NULL,NULL,4),(1993,24,19,NULL,NULL,NULL,4),(1994,29,19,NULL,NULL,NULL,4),(1995,32,19,NULL,NULL,NULL,4),(1996,39,19,NULL,NULL,NULL,4),(1997,34,19,6,NULL,NULL,5),(1998,22,19,NULL,NULL,NULL,5),(1999,28,19,1,NULL,NULL,5),(2000,22,19,1,NULL,NULL,5),(2001,21,19,NULL,NULL,NULL,5),(2002,36,19,8,NULL,NULL,5),(2003,31,19,4,NULL,NULL,5),(2004,35,19,NULL,NULL,NULL,5),(2005,38,19,NULL,NULL,NULL,5),(2006,24,19,NULL,NULL,NULL,5),(2007,29,19,NULL,NULL,NULL,5),(2008,32,19,NULL,NULL,NULL,5),(2009,39,19,NULL,NULL,NULL,5),(2010,34,19,NULL,NULL,NULL,6),(2011,22,19,NULL,NULL,NULL,6),(2012,28,19,NULL,NULL,NULL,6),(2013,22,19,NULL,NULL,NULL,6),(2014,21,19,NULL,NULL,NULL,6),(2015,36,19,NULL,NULL,NULL,6),(2016,31,19,NULL,NULL,NULL,6),(2017,35,19,NULL,NULL,NULL,6),(2018,38,19,NULL,NULL,NULL,6),(2019,24,19,6,NULL,NULL,6),(2020,29,19,NULL,NULL,NULL,6),(2021,32,19,NULL,NULL,NULL,6),(2022,39,19,NULL,NULL,NULL,6),(2023,34,19,NULL,NULL,NULL,7),(2024,22,19,NULL,NULL,NULL,7),(2025,28,19,NULL,NULL,NULL,7),(2026,22,19,NULL,NULL,NULL,7),(2027,21,19,NULL,NULL,NULL,7),(2028,36,19,NULL,NULL,NULL,7),(2029,31,19,NULL,NULL,NULL,7),(2030,35,19,NULL,NULL,NULL,7),(2031,38,19,NULL,NULL,NULL,7),(2032,24,19,NULL,NULL,NULL,7),(2033,29,19,NULL,NULL,NULL,7),(2034,39,19,NULL,NULL,NULL,7),(2035,30,19,104,NULL,NULL,2),(2036,30,19,NULL,NULL,NULL,3),(2037,30,19,NULL,NULL,NULL,4),(2038,25,19,NULL,NULL,NULL,4),(2039,37,19,NULL,NULL,NULL,5),(2040,27,19,NULL,NULL,NULL,5),(2041,33,19,NULL,NULL,NULL,7),(2042,26,19,NULL,NULL,NULL,7),(2043,34,19,NULL,NULL,NULL,1),(2044,22,19,NULL,NULL,NULL,1),(2045,28,19,NULL,NULL,NULL,1),(2046,22,19,NULL,NULL,NULL,1),(2047,21,19,NULL,NULL,NULL,1),(2048,36,19,NULL,NULL,NULL,1),(2049,31,19,NULL,NULL,NULL,1),(2050,35,19,NULL,NULL,NULL,1),(2051,38,19,NULL,NULL,NULL,1),(2052,24,20,NULL,NULL,NULL,1),(2053,29,20,NULL,NULL,NULL,1),(2054,32,20,NULL,NULL,NULL,1),(2055,39,20,NULL,NULL,NULL,1),(2056,34,20,NULL,NULL,NULL,2),(2057,22,20,NULL,NULL,NULL,2),(2058,28,20,NULL,NULL,NULL,2),(2059,22,20,NULL,NULL,NULL,2),(2060,21,20,NULL,NULL,NULL,2),(2061,36,20,NULL,NULL,NULL,2),(2062,31,20,NULL,NULL,NULL,2),(2063,35,20,NULL,NULL,NULL,2),(2064,38,20,NULL,NULL,NULL,2),(2065,24,20,NULL,NULL,NULL,2),(2066,29,20,NULL,NULL,NULL,2),(2067,32,20,NULL,NULL,NULL,2),(2068,39,20,NULL,NULL,NULL,2),(2069,34,20,NULL,NULL,NULL,3),(2070,22,20,NULL,NULL,NULL,3),(2071,28,20,NULL,NULL,NULL,3),(2072,22,20,NULL,NULL,NULL,3),(2073,21,20,NULL,NULL,NULL,3),(2074,36,20,NULL,NULL,NULL,3),(2075,31,20,NULL,NULL,NULL,3),(2076,35,20,NULL,NULL,NULL,3),(2077,38,20,NULL,NULL,NULL,3),(2078,24,20,NULL,NULL,NULL,3),(2079,29,20,NULL,NULL,NULL,3),(2080,32,20,NULL,NULL,NULL,3),(2081,39,20,NULL,NULL,NULL,3),(2082,34,20,NULL,NULL,NULL,4),(2083,22,20,NULL,NULL,NULL,4),(2084,28,20,NULL,NULL,NULL,4),(2085,22,20,NULL,NULL,NULL,4),(2086,21,20,NULL,NULL,NULL,4),(2087,36,20,NULL,NULL,NULL,4),(2088,31,20,NULL,NULL,NULL,4),(2089,35,20,NULL,NULL,NULL,4),(2090,38,20,NULL,NULL,NULL,4),(2091,24,20,NULL,NULL,NULL,4),(2092,29,20,NULL,NULL,NULL,4),(2093,32,20,NULL,NULL,NULL,4),(2094,39,20,NULL,NULL,NULL,4),(2095,34,20,NULL,NULL,NULL,5),(2096,22,20,NULL,NULL,NULL,5),(2097,28,20,NULL,NULL,NULL,5),(2098,22,20,NULL,NULL,NULL,5),(2099,21,20,NULL,NULL,NULL,5),(2100,36,20,NULL,NULL,NULL,5),(2101,31,20,NULL,NULL,NULL,5),(2102,35,20,NULL,NULL,NULL,5),(2103,38,20,NULL,NULL,NULL,5),(2104,24,20,NULL,NULL,NULL,5),(2105,29,20,NULL,NULL,NULL,5),(2106,32,20,NULL,NULL,NULL,5),(2107,39,20,NULL,NULL,NULL,5),(2108,34,20,NULL,NULL,NULL,6),(2109,22,20,NULL,NULL,NULL,6),(2110,28,20,NULL,NULL,NULL,6),(2111,22,20,NULL,NULL,NULL,6),(2112,21,20,NULL,NULL,NULL,6),(2113,36,20,NULL,NULL,NULL,6),(2114,31,20,NULL,NULL,NULL,6),(2115,35,20,NULL,NULL,NULL,6),(2116,38,20,NULL,NULL,NULL,6),(2117,24,20,NULL,NULL,NULL,6),(2118,29,20,NULL,NULL,NULL,6),(2119,32,20,NULL,NULL,NULL,6),(2120,39,20,NULL,NULL,NULL,6),(2121,34,20,NULL,NULL,NULL,7),(2122,22,20,NULL,NULL,NULL,7),(2123,28,20,NULL,NULL,NULL,7),(2124,22,20,NULL,NULL,NULL,7),(2125,21,20,NULL,NULL,NULL,7),(2126,36,20,NULL,NULL,NULL,7),(2127,31,20,NULL,NULL,NULL,7),(2128,35,20,NULL,NULL,NULL,7),(2129,38,20,NULL,NULL,NULL,7),(2130,24,20,NULL,NULL,NULL,7),(2131,29,20,NULL,NULL,NULL,7),(2132,39,20,NULL,NULL,NULL,7),(2133,30,20,NULL,NULL,NULL,2),(2134,30,20,NULL,NULL,NULL,3),(2135,30,20,NULL,NULL,NULL,4),(2136,25,20,NULL,NULL,NULL,4),(2137,37,20,NULL,NULL,NULL,5),(2138,27,20,NULL,NULL,NULL,5),(2139,33,20,NULL,NULL,NULL,7),(2140,26,20,NULL,NULL,NULL,7),(2141,34,20,NULL,NULL,NULL,1),(2142,22,20,NULL,NULL,NULL,1),(2143,28,20,NULL,NULL,NULL,1),(2144,22,20,NULL,NULL,NULL,1),(2145,21,20,NULL,NULL,NULL,1),(2146,36,20,NULL,NULL,NULL,1),(2147,31,20,NULL,NULL,NULL,1),(2148,35,20,NULL,NULL,NULL,1),(2149,38,20,NULL,NULL,NULL,1),(2150,24,21,NULL,NULL,NULL,1),(2151,29,21,NULL,NULL,NULL,1),(2152,32,21,NULL,NULL,NULL,1),(2153,39,21,NULL,NULL,NULL,1),(2154,34,21,NULL,NULL,NULL,2),(2155,22,21,NULL,NULL,NULL,2),(2156,28,21,NULL,NULL,NULL,2),(2157,22,21,NULL,NULL,NULL,2),(2158,21,21,NULL,NULL,NULL,2),(2159,36,21,NULL,NULL,NULL,2),(2160,31,21,NULL,NULL,NULL,2),(2161,35,21,NULL,NULL,NULL,2),(2162,38,21,NULL,NULL,NULL,2),(2163,24,21,NULL,NULL,NULL,2),(2164,29,21,NULL,NULL,NULL,2),(2165,32,21,NULL,NULL,NULL,2),(2166,39,21,NULL,NULL,NULL,2),(2167,34,21,NULL,NULL,NULL,3),(2168,22,21,NULL,NULL,NULL,3),(2169,28,21,NULL,NULL,NULL,3),(2170,22,21,NULL,NULL,NULL,3),(2171,21,21,NULL,NULL,NULL,3),(2172,36,21,NULL,NULL,NULL,3),(2173,31,21,NULL,NULL,NULL,3),(2174,35,21,NULL,NULL,NULL,3),(2175,38,21,NULL,NULL,NULL,3),(2176,24,21,NULL,NULL,NULL,3),(2177,29,21,NULL,NULL,NULL,3),(2178,32,21,NULL,NULL,NULL,3),(2179,39,21,NULL,NULL,NULL,3),(2180,34,21,NULL,NULL,NULL,4),(2181,22,21,NULL,NULL,NULL,4),(2182,28,21,NULL,NULL,NULL,4),(2183,22,21,NULL,NULL,NULL,4),(2184,21,21,NULL,NULL,NULL,4),(2185,36,21,NULL,NULL,NULL,4),(2186,31,21,NULL,NULL,NULL,4),(2187,35,21,NULL,NULL,NULL,4),(2188,38,21,NULL,NULL,NULL,4),(2189,24,21,NULL,NULL,NULL,4),(2190,29,21,NULL,NULL,NULL,4),(2191,32,21,NULL,NULL,NULL,4),(2192,39,21,NULL,NULL,NULL,4),(2193,34,21,NULL,NULL,NULL,5),(2194,22,21,NULL,NULL,NULL,5),(2195,28,21,NULL,NULL,NULL,5),(2196,22,21,NULL,NULL,NULL,5),(2197,21,21,NULL,NULL,NULL,5),(2198,36,21,NULL,NULL,NULL,5),(2199,31,21,NULL,NULL,NULL,5),(2200,35,21,NULL,NULL,NULL,5),(2201,38,21,NULL,NULL,NULL,5),(2202,24,21,NULL,NULL,NULL,5),(2203,29,21,NULL,NULL,NULL,5),(2204,32,21,NULL,NULL,NULL,5),(2205,39,21,NULL,NULL,NULL,5),(2206,34,21,NULL,NULL,NULL,6),(2207,22,21,NULL,NULL,NULL,6),(2208,28,21,NULL,NULL,NULL,6),(2209,22,21,NULL,NULL,NULL,6),(2210,21,21,NULL,NULL,NULL,6),(2211,36,21,NULL,NULL,NULL,6),(2212,31,21,NULL,NULL,NULL,6),(2213,35,21,NULL,NULL,NULL,6),(2214,38,21,NULL,NULL,NULL,6),(2215,24,21,NULL,NULL,NULL,6),(2216,29,21,NULL,NULL,NULL,6),(2217,32,21,NULL,NULL,NULL,6),(2218,39,21,NULL,NULL,NULL,6),(2219,34,21,NULL,NULL,NULL,7),(2220,22,21,NULL,NULL,NULL,7),(2221,28,21,NULL,NULL,NULL,7),(2222,22,21,NULL,NULL,NULL,7),(2223,21,21,NULL,NULL,NULL,7),(2224,36,21,NULL,NULL,NULL,7),(2225,31,21,NULL,NULL,NULL,7),(2226,35,21,NULL,NULL,NULL,7),(2227,38,21,NULL,NULL,NULL,7),(2228,24,21,NULL,NULL,NULL,7),(2229,29,21,NULL,NULL,NULL,7),(2230,39,21,NULL,NULL,NULL,7),(2231,30,21,NULL,NULL,NULL,2),(2232,30,21,NULL,NULL,NULL,3),(2233,30,21,NULL,NULL,NULL,4),(2234,25,21,NULL,NULL,NULL,4),(2235,37,21,NULL,NULL,NULL,5),(2236,27,21,NULL,NULL,NULL,5),(2237,33,21,NULL,NULL,NULL,7),(2238,26,21,NULL,NULL,NULL,7),(2239,34,21,NULL,NULL,NULL,1),(2240,22,21,NULL,NULL,NULL,1),(2241,28,21,NULL,NULL,NULL,1),(2242,22,21,NULL,NULL,NULL,1),(2243,21,21,NULL,NULL,NULL,1),(2244,36,21,NULL,NULL,NULL,1),(2245,31,21,NULL,NULL,NULL,1),(2246,35,21,NULL,NULL,NULL,1),(2247,38,21,NULL,NULL,NULL,1),(2248,24,22,NULL,NULL,NULL,1),(2249,29,22,NULL,NULL,NULL,1),(2250,32,22,NULL,NULL,NULL,1),(2251,39,22,NULL,NULL,NULL,1),(2252,34,22,NULL,NULL,NULL,2),(2253,22,22,NULL,NULL,NULL,2),(2254,28,22,NULL,NULL,NULL,2),(2255,22,22,NULL,NULL,NULL,2),(2256,21,22,NULL,NULL,NULL,2),(2257,36,22,NULL,NULL,NULL,2),(2258,31,22,NULL,NULL,NULL,2),(2259,35,22,NULL,NULL,NULL,2),(2260,38,22,NULL,NULL,NULL,2),(2261,24,22,NULL,NULL,NULL,2),(2262,29,22,NULL,NULL,NULL,2),(2263,32,22,NULL,NULL,NULL,2),(2264,39,22,NULL,NULL,NULL,2),(2265,34,22,NULL,NULL,NULL,3),(2266,22,22,NULL,NULL,NULL,3),(2267,28,22,NULL,NULL,NULL,3),(2268,22,22,NULL,NULL,NULL,3),(2269,21,22,NULL,NULL,NULL,3),(2270,36,22,NULL,NULL,NULL,3),(2271,31,22,NULL,NULL,NULL,3),(2272,35,22,NULL,NULL,NULL,3),(2273,38,22,NULL,NULL,NULL,3),(2274,24,22,NULL,NULL,NULL,3),(2275,29,22,NULL,NULL,NULL,3),(2276,32,22,NULL,NULL,NULL,3),(2277,39,22,NULL,NULL,NULL,3),(2278,34,22,NULL,NULL,NULL,4),(2279,22,22,NULL,NULL,NULL,4),(2280,28,22,NULL,NULL,NULL,4),(2281,22,22,NULL,NULL,NULL,4),(2282,21,22,NULL,NULL,NULL,4),(2283,36,22,NULL,NULL,NULL,4),(2284,31,22,NULL,NULL,NULL,4),(2285,35,22,NULL,NULL,NULL,4),(2286,38,22,NULL,NULL,NULL,4),(2287,24,22,NULL,NULL,NULL,4),(2288,29,22,NULL,NULL,NULL,4),(2289,32,22,NULL,NULL,NULL,4),(2290,39,22,NULL,NULL,NULL,4),(2291,34,22,NULL,NULL,NULL,5),(2292,22,22,NULL,NULL,NULL,5),(2293,28,22,NULL,NULL,NULL,5),(2294,22,22,NULL,NULL,NULL,5),(2295,21,22,NULL,NULL,NULL,5),(2296,36,22,NULL,NULL,NULL,5),(2297,31,22,NULL,NULL,NULL,5),(2298,35,22,NULL,NULL,NULL,5),(2299,38,22,NULL,NULL,NULL,5),(2300,24,22,NULL,NULL,NULL,5),(2301,29,22,NULL,NULL,NULL,5),(2302,32,22,NULL,NULL,NULL,5),(2303,39,22,NULL,NULL,NULL,5),(2304,34,22,NULL,NULL,NULL,6),(2305,22,22,NULL,NULL,NULL,6),(2306,28,22,NULL,NULL,NULL,6),(2307,22,22,NULL,NULL,NULL,6),(2308,21,22,NULL,NULL,NULL,6),(2309,36,22,NULL,NULL,NULL,6),(2310,31,22,NULL,NULL,NULL,6),(2311,35,22,NULL,NULL,NULL,6),(2312,38,22,NULL,NULL,NULL,6),(2313,24,22,NULL,NULL,NULL,6),(2314,29,22,NULL,NULL,NULL,6),(2315,32,22,NULL,NULL,NULL,6),(2316,39,22,NULL,NULL,NULL,6),(2317,34,22,NULL,NULL,NULL,7),(2318,22,22,NULL,NULL,NULL,7),(2319,28,22,NULL,NULL,NULL,7),(2320,22,22,NULL,NULL,NULL,7),(2321,21,22,NULL,NULL,NULL,7),(2322,36,22,NULL,NULL,NULL,7),(2323,31,22,NULL,NULL,NULL,7),(2324,35,22,NULL,NULL,NULL,7),(2325,38,22,NULL,NULL,NULL,7),(2326,24,22,NULL,NULL,NULL,7),(2327,29,22,NULL,NULL,NULL,7),(2328,39,22,NULL,NULL,NULL,7),(2329,30,22,NULL,NULL,NULL,2),(2330,30,22,NULL,NULL,NULL,3),(2331,30,22,NULL,NULL,NULL,4),(2332,25,22,NULL,NULL,NULL,4),(2333,37,22,NULL,NULL,NULL,5),(2334,27,22,NULL,NULL,NULL,5),(2335,33,22,NULL,NULL,NULL,7),(2336,26,22,NULL,NULL,NULL,7),(2337,34,22,NULL,NULL,NULL,1),(2338,22,22,NULL,NULL,NULL,1),(2339,28,22,NULL,NULL,NULL,1),(2340,22,22,NULL,NULL,NULL,1),(2341,21,22,NULL,NULL,NULL,1),(2342,36,22,NULL,NULL,NULL,1),(2343,31,22,NULL,NULL,NULL,1),(2344,35,22,NULL,NULL,NULL,1),(2345,38,22,NULL,NULL,NULL,1),(2346,24,23,NULL,NULL,NULL,1),(2347,29,23,NULL,NULL,NULL,1),(2348,32,23,NULL,NULL,NULL,1),(2349,39,23,NULL,NULL,NULL,1),(2350,34,23,NULL,NULL,NULL,2),(2351,22,23,NULL,NULL,NULL,2),(2352,28,23,NULL,NULL,NULL,2),(2353,22,23,NULL,NULL,NULL,2),(2354,21,23,NULL,NULL,NULL,2),(2355,36,23,NULL,NULL,NULL,2),(2356,31,23,NULL,NULL,NULL,2),(2357,35,23,NULL,NULL,NULL,2),(2358,38,23,NULL,NULL,NULL,2),(2359,24,23,NULL,NULL,NULL,2),(2360,29,23,NULL,NULL,NULL,2),(2361,32,23,NULL,NULL,NULL,2),(2362,39,23,NULL,NULL,NULL,2),(2363,34,23,NULL,NULL,NULL,3),(2364,22,23,NULL,NULL,NULL,3),(2365,28,23,NULL,NULL,NULL,3),(2366,22,23,NULL,NULL,NULL,3),(2367,21,23,NULL,NULL,NULL,3),(2368,36,23,NULL,NULL,NULL,3),(2369,31,23,NULL,NULL,NULL,3),(2370,35,23,NULL,NULL,NULL,3),(2371,38,23,NULL,NULL,NULL,3),(2372,24,23,NULL,NULL,NULL,3),(2373,29,23,NULL,NULL,NULL,3),(2374,32,23,NULL,NULL,NULL,3),(2375,39,23,NULL,NULL,NULL,3),(2376,34,23,NULL,NULL,NULL,4),(2377,22,23,NULL,NULL,NULL,4),(2378,28,23,NULL,NULL,NULL,4),(2379,22,23,NULL,NULL,NULL,4),(2380,21,23,NULL,NULL,NULL,4),(2381,36,23,NULL,NULL,NULL,4),(2382,31,23,NULL,NULL,NULL,4),(2383,35,23,NULL,NULL,NULL,4),(2384,38,23,NULL,NULL,NULL,4),(2385,24,23,NULL,NULL,NULL,4),(2386,29,23,NULL,NULL,NULL,4),(2387,32,23,NULL,NULL,NULL,4),(2388,39,23,NULL,NULL,NULL,4),(2389,34,23,NULL,NULL,NULL,5),(2390,22,23,NULL,NULL,NULL,5),(2391,28,23,NULL,NULL,NULL,5),(2392,22,23,NULL,NULL,NULL,5),(2393,21,23,NULL,NULL,NULL,5),(2394,36,23,NULL,NULL,NULL,5),(2395,31,23,NULL,NULL,NULL,5),(2396,35,23,NULL,NULL,NULL,5),(2397,38,23,NULL,NULL,NULL,5),(2398,24,23,NULL,NULL,NULL,5),(2399,29,23,NULL,NULL,NULL,5),(2400,32,23,NULL,NULL,NULL,5),(2401,39,23,NULL,NULL,NULL,5),(2402,34,23,NULL,NULL,NULL,6),(2403,22,23,NULL,NULL,NULL,6),(2404,28,23,NULL,NULL,NULL,6),(2405,22,23,NULL,NULL,NULL,6),(2406,21,23,NULL,NULL,NULL,6),(2407,36,23,NULL,NULL,NULL,6),(2408,31,23,NULL,NULL,NULL,6),(2409,35,23,NULL,NULL,NULL,6),(2410,38,23,NULL,NULL,NULL,6),(2411,24,23,NULL,NULL,NULL,6),(2412,29,23,NULL,NULL,NULL,6),(2413,32,23,NULL,NULL,NULL,6),(2414,39,23,NULL,NULL,NULL,6),(2415,34,23,NULL,NULL,NULL,7),(2416,22,23,NULL,NULL,NULL,7),(2417,28,23,NULL,NULL,NULL,7),(2418,22,23,NULL,NULL,NULL,7),(2419,21,23,NULL,NULL,NULL,7),(2420,36,23,NULL,NULL,NULL,7),(2421,31,23,NULL,NULL,NULL,7),(2422,35,23,NULL,NULL,NULL,7),(2423,38,23,NULL,NULL,NULL,7),(2424,24,23,NULL,NULL,NULL,7),(2425,29,23,NULL,NULL,NULL,7),(2426,39,23,NULL,NULL,NULL,7),(2427,30,23,NULL,NULL,NULL,2),(2428,30,23,NULL,NULL,NULL,3),(2429,30,23,NULL,NULL,NULL,4),(2430,25,23,NULL,NULL,NULL,4),(2431,37,23,NULL,NULL,NULL,5),(2432,27,23,NULL,NULL,NULL,5),(2433,33,23,NULL,NULL,NULL,7),(2434,26,23,NULL,NULL,NULL,7),(2435,34,23,NULL,NULL,NULL,1),(2436,22,23,NULL,NULL,NULL,1),(2437,28,23,NULL,NULL,NULL,1),(2438,22,23,NULL,NULL,NULL,1),(2439,21,23,NULL,NULL,NULL,1),(2440,36,23,NULL,NULL,NULL,1),(2441,31,23,NULL,NULL,NULL,1),(2442,35,23,NULL,NULL,NULL,1),(2443,38,23,NULL,NULL,NULL,1),(2444,24,24,NULL,NULL,NULL,1),(2445,29,24,NULL,NULL,NULL,1),(2446,32,24,2,NULL,NULL,1),(2447,39,24,NULL,NULL,NULL,1),(2448,34,24,NULL,NULL,NULL,2),(2449,22,24,NULL,NULL,NULL,2),(2450,28,24,NULL,NULL,NULL,2),(2451,22,24,NULL,NULL,NULL,2),(2452,21,24,NULL,NULL,NULL,2),(2453,36,24,NULL,NULL,NULL,2),(2454,31,24,NULL,NULL,NULL,2),(2455,35,24,NULL,NULL,NULL,2),(2456,38,24,8,NULL,NULL,2),(2457,24,24,NULL,NULL,NULL,2),(2458,29,24,NULL,NULL,NULL,2),(2459,32,24,NULL,NULL,NULL,2),(2460,39,24,1,NULL,NULL,2),(2461,34,24,5,NULL,NULL,3),(2462,22,24,NULL,NULL,NULL,3),(2463,28,24,NULL,NULL,NULL,3),(2464,22,24,104,NULL,NULL,3),(2465,21,24,NULL,NULL,NULL,3),(2466,36,24,6,NULL,NULL,3),(2467,31,24,NULL,NULL,NULL,3),(2468,35,24,NULL,NULL,NULL,3),(2469,38,24,NULL,NULL,NULL,3),(2470,24,24,NULL,NULL,NULL,3),(2471,29,24,NULL,NULL,NULL,3),(2472,32,24,NULL,NULL,NULL,3),(2473,39,24,NULL,NULL,NULL,3),(2474,34,24,NULL,NULL,NULL,4),(2475,22,24,NULL,NULL,NULL,4),(2476,28,24,NULL,NULL,NULL,4),(2477,22,24,NULL,NULL,NULL,4),(2478,21,24,NULL,NULL,NULL,4),(2479,36,24,NULL,NULL,NULL,4),(2480,31,24,NULL,NULL,NULL,4),(2481,35,24,NULL,NULL,NULL,4),(2482,38,24,NULL,NULL,NULL,4),(2483,24,24,NULL,NULL,NULL,4),(2484,29,24,NULL,NULL,NULL,4),(2485,32,24,NULL,NULL,NULL,4),(2486,39,24,NULL,NULL,NULL,4),(2487,34,24,NULL,NULL,NULL,5),(2488,22,24,NULL,NULL,NULL,5),(2489,28,24,NULL,NULL,NULL,5),(2490,22,24,NULL,NULL,NULL,5),(2491,21,24,NULL,NULL,NULL,5),(2492,36,24,NULL,NULL,NULL,5),(2493,31,24,NULL,NULL,NULL,5),(2494,35,24,NULL,NULL,NULL,5),(2495,38,24,NULL,NULL,NULL,5),(2496,24,24,NULL,NULL,NULL,5),(2497,29,24,NULL,NULL,NULL,5),(2498,32,24,6,NULL,NULL,5),(2499,39,24,NULL,NULL,NULL,5),(2500,34,24,NULL,NULL,NULL,6),(2501,22,24,NULL,NULL,NULL,6),(2502,28,24,NULL,NULL,NULL,6),(2503,22,24,NULL,NULL,NULL,6),(2504,21,24,NULL,NULL,NULL,6),(2505,36,24,NULL,NULL,NULL,6),(2506,31,24,NULL,NULL,NULL,6),(2507,35,24,NULL,NULL,NULL,6),(2508,38,24,NULL,NULL,NULL,6),(2509,24,24,9,NULL,NULL,6),(2510,29,24,NULL,NULL,NULL,6),(2511,32,24,NULL,NULL,NULL,6),(2512,39,24,NULL,NULL,NULL,6),(2513,34,24,NULL,NULL,NULL,7),(2514,22,24,NULL,NULL,NULL,7),(2515,28,24,NULL,NULL,NULL,7),(2516,22,24,7,NULL,NULL,7),(2517,21,24,NULL,NULL,NULL,7),(2518,36,24,NULL,NULL,NULL,7),(2519,31,24,NULL,NULL,NULL,7),(2520,35,24,NULL,NULL,NULL,7),(2521,38,24,NULL,NULL,NULL,7),(2522,24,24,NULL,NULL,NULL,7),(2523,29,24,NULL,NULL,NULL,7),(2524,39,24,NULL,NULL,NULL,7),(2525,30,24,3,NULL,NULL,2),(2526,30,24,NULL,NULL,NULL,3),(2527,30,24,NULL,NULL,NULL,4),(2528,25,24,NULL,NULL,NULL,4),(2529,37,24,NULL,NULL,NULL,5),(2530,27,24,NULL,NULL,NULL,5),(2531,33,24,NULL,NULL,NULL,7),(2532,26,24,NULL,NULL,NULL,7),(2533,34,24,NULL,NULL,NULL,1),(2534,22,24,NULL,NULL,NULL,1),(2535,28,24,NULL,NULL,NULL,1),(2536,22,24,NULL,NULL,NULL,1),(2537,21,24,NULL,NULL,NULL,1),(2538,36,24,NULL,NULL,NULL,1),(2539,31,24,NULL,NULL,NULL,1),(2540,35,24,NULL,NULL,NULL,1),(2541,38,24,NULL,NULL,NULL,1),(2542,24,25,NULL,NULL,NULL,1),(2543,29,25,NULL,NULL,NULL,1),(2544,32,25,NULL,NULL,NULL,1),(2545,39,25,NULL,NULL,NULL,1),(2546,34,25,NULL,NULL,NULL,2),(2547,22,25,NULL,NULL,NULL,2),(2548,28,25,NULL,NULL,NULL,2),(2549,22,25,NULL,NULL,NULL,2),(2550,21,25,NULL,NULL,NULL,2),(2551,36,25,NULL,NULL,NULL,2),(2552,31,25,NULL,NULL,NULL,2),(2553,35,25,NULL,NULL,NULL,2),(2554,38,25,NULL,NULL,NULL,2),(2555,24,25,NULL,NULL,NULL,2),(2556,29,25,NULL,NULL,NULL,2),(2557,32,25,NULL,NULL,NULL,2),(2558,39,25,NULL,NULL,NULL,2),(2559,34,25,NULL,NULL,NULL,3),(2560,22,25,NULL,NULL,NULL,3),(2561,28,25,NULL,NULL,NULL,3),(2562,22,25,NULL,NULL,NULL,3),(2563,21,25,NULL,NULL,NULL,3),(2564,36,25,NULL,NULL,NULL,3),(2565,31,25,NULL,NULL,NULL,3),(2566,35,25,NULL,NULL,NULL,3),(2567,38,25,NULL,NULL,NULL,3),(2568,24,25,NULL,NULL,NULL,3),(2569,29,25,NULL,NULL,NULL,3),(2570,32,25,NULL,NULL,NULL,3),(2571,39,25,NULL,NULL,NULL,3),(2572,34,25,NULL,NULL,NULL,4),(2573,22,25,NULL,NULL,NULL,4),(2574,28,25,NULL,NULL,NULL,4),(2575,22,25,NULL,NULL,NULL,4),(2576,21,25,NULL,NULL,NULL,4),(2577,36,25,NULL,NULL,NULL,4),(2578,31,25,NULL,NULL,NULL,4),(2579,35,25,NULL,NULL,NULL,4),(2580,38,25,NULL,NULL,NULL,4),(2581,24,25,NULL,NULL,NULL,4),(2582,29,25,NULL,NULL,NULL,4),(2583,32,25,NULL,NULL,NULL,4),(2584,39,25,NULL,NULL,NULL,4),(2585,34,25,NULL,NULL,NULL,5),(2586,22,25,NULL,NULL,NULL,5),(2587,28,25,NULL,NULL,NULL,5),(2588,22,25,NULL,NULL,NULL,5),(2589,21,25,NULL,NULL,NULL,5),(2590,36,25,NULL,NULL,NULL,5),(2591,31,25,NULL,NULL,NULL,5),(2592,35,25,NULL,NULL,NULL,5),(2593,38,25,NULL,NULL,NULL,5),(2594,24,25,NULL,NULL,NULL,5),(2595,29,25,NULL,NULL,NULL,5),(2596,32,25,NULL,NULL,NULL,5),(2597,39,25,NULL,NULL,NULL,5),(2598,34,25,NULL,NULL,NULL,6),(2599,22,25,NULL,NULL,NULL,6),(2600,28,25,NULL,NULL,NULL,6),(2601,22,25,NULL,NULL,NULL,6),(2602,21,25,NULL,NULL,NULL,6),(2603,36,25,NULL,NULL,NULL,6),(2604,31,25,NULL,NULL,NULL,6),(2605,35,25,NULL,NULL,NULL,6),(2606,38,25,NULL,NULL,NULL,6),(2607,24,25,NULL,NULL,NULL,6),(2608,29,25,NULL,NULL,NULL,6),(2609,32,25,NULL,NULL,NULL,6),(2610,39,25,NULL,NULL,NULL,6),(2611,34,25,NULL,NULL,NULL,7),(2612,22,25,NULL,NULL,NULL,7),(2613,28,25,NULL,NULL,NULL,7),(2614,22,25,NULL,NULL,NULL,7),(2615,21,25,NULL,NULL,NULL,7),(2616,36,25,NULL,NULL,NULL,7),(2617,31,25,NULL,NULL,NULL,7),(2618,35,25,NULL,NULL,NULL,7),(2619,38,25,NULL,NULL,NULL,7),(2620,24,25,NULL,NULL,NULL,7),(2621,29,25,NULL,NULL,NULL,7),(2622,39,25,NULL,NULL,NULL,7),(2623,30,25,NULL,NULL,NULL,2),(2624,30,25,NULL,NULL,NULL,3),(2625,30,25,NULL,NULL,NULL,4),(2626,25,25,NULL,NULL,NULL,4),(2627,37,25,NULL,NULL,NULL,5),(2628,27,25,NULL,NULL,NULL,5),(2629,33,25,NULL,NULL,NULL,7),(2630,26,25,NULL,NULL,NULL,7),(2631,34,25,NULL,NULL,NULL,1),(2632,22,25,NULL,NULL,NULL,1),(2633,28,25,NULL,NULL,NULL,1),(2634,22,25,NULL,NULL,NULL,1),(2635,21,25,NULL,NULL,NULL,1),(2636,36,25,NULL,NULL,NULL,1),(2637,31,25,NULL,NULL,NULL,1),(2638,35,25,NULL,NULL,NULL,1),(2639,38,25,NULL,NULL,NULL,1);
/*!40000 ALTER TABLE `todos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `todosheets`
--

DROP TABLE IF EXISTS `todosheets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `todosheets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `week` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `base_id` int(11) NOT NULL,
  `closeBy` int(11) DEFAULT NULL,
  `template_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `model_name_UNIQUE` (`template_name`),
  KEY `fk_todosheets_bases1_idx` (`base_id`),
  KEY `fk_todosheets_status1` (`status_id`),
  KEY `fk_todosheets_user1` (`closeBy`),
  CONSTRAINT `fk_todosheets_bases1` FOREIGN KEY (`base_id`) REFERENCES `bases` (`id`),
  CONSTRAINT `fk_todosheets_status1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  CONSTRAINT `fk_todosheets_user1` FOREIGN KEY (`closeBy`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `todosheets`
--

LOCK TABLES `todosheets` WRITE;
/*!40000 ALTER TABLE `todosheets` DISABLE KEYS */;
INSERT INTO `todosheets` VALUES (1,2113,3,1,NULL,NULL),(2,2114,3,1,NULL,NULL),(3,2115,3,1,NULL,NULL),(4,2116,2,1,NULL,NULL),(5,2117,1,1,NULL,NULL),(6,2113,3,2,NULL,NULL),(7,2114,3,2,NULL,NULL),(8,2115,3,2,NULL,NULL),(9,2116,2,2,NULL,NULL),(10,2117,1,2,NULL,NULL),(11,2113,3,3,NULL,NULL),(12,2114,3,3,NULL,NULL),(13,2115,3,3,NULL,NULL),(14,2116,2,3,NULL,NULL),(15,2117,1,3,NULL,NULL),(16,2113,3,4,NULL,NULL),(17,2114,3,4,NULL,NULL),(18,2115,3,4,NULL,NULL),(19,2116,2,4,NULL,NULL),(20,2117,1,4,NULL,NULL),(21,2113,3,5,NULL,NULL),(22,2114,3,5,NULL,NULL),(23,2115,3,5,NULL,NULL),(24,2116,2,5,NULL,NULL),(25,2117,1,5,NULL,NULL);
/*!40000 ALTER TABLE `todosheets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `todothings`
--

DROP TABLE IF EXISTS `todothings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `todothings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  `daything` tinyint(4) NOT NULL DEFAULT 1,
  `type` enum('novas') DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `text_UNIQUE` (`description`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `todothings`
--

LOCK TABLES `todothings` WRITE;
/*!40000 ALTER TABLE `todothings` DISABLE KEYS */;
INSERT INTO `todothings` VALUES (21,'Changer Bac chariot de nettoyage',1,NULL,5),(22,'Check Ambulance et Communication',1,NULL,2),(23,'Check bibliothèque',1,NULL,4),(24,'Check de nuit ',0,NULL,21),(25,'Commande mat et commande pharma.',1,NULL,6),(26,'Commande O2',0,NULL,25),(27,'Contrôle niveau véhicule',1,NULL,8),(28,'Contrôle stupéfiants + Date perf. Chaudes',1,NULL,3),(29,'Contrôle stupéfiants Nova .... (Morphine X4, Fentanyl X6)',0,'novas',22),(30,'Désinfection + Inventaire hebdo Nova ....',1,'novas',11),(31,'Tâches spécifiques de jour',1,NULL,13),(32,'Tâches spécifiques de nuit',0,NULL,23),(33,'Envoi rapport STUP hebdo à gt pharmacie',1,NULL,9),(34,'Fax 144 Transmission',1,NULL,1),(35,'Formation',1,NULL,14),(36,'Nettoyage centrale et garage',1,NULL,10),(37,'Rangement mat',1,NULL,7),(38,'Remise locaux ambulances ',1,NULL,15),(39,'Remise locaux Transmission',0,NULL,24),(40,'Tâches selon nécessité',1,NULL,12);
/*!40000 ALTER TABLE `todothings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tokens`
--

DROP TABLE IF EXISTS `tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(50) NOT NULL,
  `validity` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `token_UNIQUE` (`value`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_table1_users1_idx` (`user_id`),
  CONSTRAINT `fk_table1_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tokens`
--

LOCK TABLES `tokens` WRITE;
/*!40000 ALTER TABLE `tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `initials` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `api_token` varchar(200) DEFAULT NULL,
  `admin` tinyint(4) NOT NULL,
  `firstconnect` tinyint(4) NOT NULL,
  `email` varchar(254) DEFAULT NULL,
  `mobileNumber` varchar(20) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `initials_UNIQUE` (`initials`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','istrateur','ANW','$2y$10$IUpQUnMhzPXSD62922qKquT4ByP1PylV/7YbLBg9FlQJkLlXbE9XO',NULL,1,1,NULL,NULL,NULL),(2,'Dimitri','Imfeld','DID','$2y$10$d1L1EeKInZE78BORj6PlzO3aIeDBMs79W5tZMyyhWVeNgKs9UU8NC',NULL,0,0,NULL,NULL,NULL),(3,'Alexandre','Philibert','APT','$2y$10$ymBRVyXglT5QbEAk4mcIdezmuuHTgixxezgkXWwwhoVB2w2thNcyu',NULL,1,0,NULL,NULL,NULL),(4,'Gabriel','Pereira','GPA','$2y$10$da9jIDSoU7.q8qeMn6NMFevcNVrg1dHe6MVLfTWNjzqL59agahkB6',NULL,1,0,NULL,NULL,NULL),(5,'Dylan','Ramos','DOS','$2y$10$vnNkvDguaXeYQw0Hf6tCje.bCpN3tn9QyZLHNF04Ss9xbyuhD/7DS',NULL,1,0,NULL,NULL,NULL),(6,'Andi','Santos','ASO','$2y$10$n6wns2OxbD3/9Yp/lhT6auZIiJ5yJj0QSlcxaVIPj8p7AeUNCx8v6',NULL,1,0,NULL,NULL,NULL),(7,'Quentin','Aellen','QAN','$2y$10$bAqW.Hl6ZoRXeqRKJZelfurz1baJF4HEbATVpNHqaRWb/lIVlnCoi',NULL,0,0,NULL,NULL,NULL),(8,'Yvann','Butticaz','YBZ','$2y$10$Fk6OJNzAQaoM9gWfPIxQOe4Va7HH6zGrlcqZ2eoB6kltYzHvbOr5O',NULL,0,0,NULL,NULL,NULL),(9,'Mathieu','Burnat','MBT','$2y$10$XU9JJpvC38c4YBrDnDYCA.QYAnyk4geocribgqMNR/zAHU1frIsNq',NULL,0,1,NULL,NULL,NULL),(10,'Cyril','Goldenschue','CGE','$2y$10$vPJrv/ZmyQHhpSx1WTTDbuYhDSd9z2ajf5Y6az1XwxvpzTXmHjT9.',NULL,0,0,NULL,NULL,NULL),(11,'Zaid','Schouwey','ZSY','$2y$10$kOVn1KVQEiC5p1736IwUou4uBAZMZMQSFJdnL8Ny0H/dNPh7j4Z9W',NULL,0,1,NULL,NULL,NULL),(12,'Gabriel','Rossier','GRR','$2y$10$.zAj0rdXp7x/rt0a1QElb.5VczaDu4IU38VxFdOMzcWtN9auyNrMy',NULL,0,0,NULL,NULL,NULL),(104,'William','Hausmann','WHN','$2y$10$AHBreoiRi.lmiJIH7cMaAupFItjPkI8xVc059qa9mpxTKsenJlHU2',NULL,0,0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `worktime`
--

DROP TABLE IF EXISTS `worktime`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `worktime` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(5) NOT NULL,
  `type` int(11) NOT NULL,
  `day` tinyint(1) DEFAULT NULL,
  `base_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code_UNIQUE` (`code`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_base_id` (`base_id`),
  CONSTRAINT `fk_base_id` FOREIGN KEY (`base_id`) REFERENCES `bases` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `worktime`
--

LOCK TABLES `worktime` WRITE;
/*!40000 ALTER TABLE `worktime` DISABLE KEYS */;
/*!40000 ALTER TABLE `worktime` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-04 11:53:43
