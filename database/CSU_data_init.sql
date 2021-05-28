-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: csunvb_csu
-- ------------------------------------------------------
-- Server version	5.7.26

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
-- Dumping data for table `bases`
--

LOCK TABLES `bases` WRITE;
/*!40000 ALTER TABLE `bases` DISABLE KEYS */;
INSERT INTO `bases` VALUES
(5,'La Vallée-de-Joux'),
(4,'Payerne'),
(3,'Saint-Loup'),
(2,'Ste-Croix'),
(1,'Yverdon');
/*!40000 ALTER TABLE `bases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `drugs`
--

LOCK TABLES `drugs` WRITE;
/*!40000 ALTER TABLE `drugs` DISABLE KEYS */;
INSERT INTO `drugs` VALUES
(1,'Fentanyl'),
(2,'Morphine'),
(3,'Temesta');
/*!40000 ALTER TABLE `drugs` ENABLE KEYS */;
UNLOCK TABLES;




--
-- Dumping data for table `novas`
--

LOCK TABLES `novas` WRITE;
/*!40000 ALTER TABLE `novas` DISABLE KEYS */;
INSERT INTO `novas` VALUES
(1,31),
(2,32),
(3,33),
(4,35),
(5,36),
(11,43),
(6,57),
(7,58),
(8,75),
(9,76),
(10,77);
/*!40000 ALTER TABLE `novas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `todothings`
--

LOCK TABLES `todothings` WRITE;
/*!40000 ALTER TABLE `todothings` DISABLE KEYS */;
INSERT INTO `todothings` VALUES
(21,'Changer Bac chariot de nettoyage',1,null,5),
(22,'Check Ambulance et Communication',1,null,2),
(23,'Check bibliothèque',1,null,4),
(24,'Check de nuit ',0,null,21),
(25,'Commande mat et commande pharma.',1,null,6),
(26,'Commande O2',0,null,25),
(27,'Contrôle niveau véhicule',1,null,8),
(28,'Contrôle stupéfiants + Date perf. Chaudes',1,null,3),
(29,'Contrôle stupéfiants Nova .... (Morphine X4, Fentanyl X6)',0,'novas',22),
(30,'Désinfection + Inventaire hebdo Nova ....',1,'novas',11),
(31,'Tâches spécifiques de jour',1,null,13),
(32,'Tâches spécifiques de nuit',0,null,23),
(33,'Envoi rapport STUP hebdo à gt pharmacie',1,null,9),
(34,'Fax 144 Transmission',1,null,1),
(35,'Formation',1,null,14),
(36,'Nettoyage centrale et garage',1,null,10),
(37,'Rangement mat',1,null,7),
(38,'Remise locaux ambulances ',1,null,15),
(39,'Remise locaux Transmission',0,null,24),
(40,'Tâches selon nécessité',1,NULL,12);
/*!40000 ALTER TABLE `todothings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `firstname`, `lastname`, `initials`, `password`, `admin`, `firstconnect`, `email`, `mobileNumber`) VALUES
(1,'Admin','istrateur','ANN','',1,1,NULL,NULL); -- Password initial = 'Pa$$w0rd'
INSERT INTO `users` (`id`, `firstname`, `lastname`, `initials`, `password`, `admin`, `firstconnect`, `email`, `mobileNumber`) VALUES
(2, 'Michelle', 'Dutoit', 'MDT', '', 0, 0, NULL, NULL),
(3, 'Antonio', 'Casaburi', 'ACI', '', 1, 0, NULL, NULL),
(4, 'Xavier', 'Carrel', 'XCL', '', 1, 0, 'Xavier.Carrel@cpnv.ch', '0792129621'),
(5, 'Thierry', 'Billieux', 'TBX', '', 1, 0, 'thierry.billieux@csu-nvb.ch', '0789468149'),
(6, 'Michaël', 'Gogniat', 'MGT', '', 1, 0, NULL, NULL),
(7, 'Philippe', 'Michel', 'PML', '', 0, 0, NULL, NULL),
(8, 'Laurent', 'Pedroli', 'LPI', '', 0, 0, NULL, NULL),
(9, 'Damaris', 'Bourgeois', 'DMS', '', 0, 1, NULL, NULL),
(10, 'Laurent', 'Scheurer', 'LSR', '', 0, 0, NULL, NULL),
(11, 'Galien', 'Wolfer', 'GWR', '', 0, 1, NULL, NULL),
(12, 'Damaris ', 'Bourgeois', 'DBS', '', 0, 0, NULL, NULL),
(13, 'Théo', 'Gautier', 'TGR', '', 0, 0, 'Theo.Gautier@cpnv.ch', NULL);

update users set password=PASSWORD(initials);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-01  7:28:46

-- table status
INSERT INTO `status` VALUES
(1,'blank','En préparation'),
(2,'open','Actif'),
(3,'close','Clôturé'),
(4,'reopen','En correction'),
(5,'archive','Archivé');

-- table shiftsections
INSERT INTO `shiftsections` VALUES
(1,'Centrale & Tâches'),
(2,'Ecrans de communication & Trafic'),
(3,'Matériel & Télécom'),
(4,'Véhicules & Interventions');

-- table shiftactions
INSERT INTO `shiftactions` VALUES
(1,'Radios',1),
(2,'Détecteurs CO',1),
(3,'Téléphones',1),
(4,'Gt info avisé',1),
(5,'Annonce 144',1),
(6,'Plein essence',2),
(7,'Opérationnel',2),
(8,'Rdv garage',2),
(9,'Gt vhc avisé',2),
(10,'50chf présents',2),
(11,'Problèmes d\'interventions hors véhicules',2),
(12,'Info trafic consulté',3),
(13,'Report des infos trafic sur plan de secteur',3),
(14,'Accueil étudiant ou stagiaire',3),
(15,'Lecture journal de bord ',3),
(16,'Problème et responsable Gt avisé',3),
(17,'Centrale propre',4),
(18,'Tâches du jour effectuées',4),
(19,'Dimanche ',4);
