-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookings` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) DEFAULT NULL,
  `lastname` varchar(200) DEFAULT NULL,
  `from_` varchar(200) DEFAULT NULL,
  `to_` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `plane` varchar(200) DEFAULT NULL,
  `class` varchar(200) DEFAULT NULL,
  `datee` date DEFAULT NULL,
  `timee` time DEFAULT NULL,
  `travelling_date` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (1,'EMMANUEL','CHARLES','DAR','DUBAI','vanadizyemachazy@gmail.come','+255 628115130','AIR TANZANIA','VVIP','2024-04-21','17:28:52','2024-07-01'),(2,'EMMANUEL','CHARLES','DAR','DUB','vanadizyemachazy@gmail.com','0628115130','airti','a','0000-00-00','00:00:00','2024-04-10'),(3,'EMMANUEL','CHARLES','DAR','DUB','vanadizyemachazy@gmail.com','0628115130','airti','a','2024-05-11','00:00:00','current_time()'),(4,'EMMANUEL','CHARLES','DAR','DUB','vanadizyemachazy@gmail.com','0628115130','airti','a','2024-05-08','00:00:00','current_time()'),(5,'EMMANUEL','CHARLES','DAR','DUB','vanadizyemachazy@gmail.com','0628115130','airti','a','0000-00-00','00:00:00','2024-05-08'),(6,'EMMANUEL','CHARLES','DAR','DUB','vanadizyemachazy@gmail.com','0628115130','airti','a','0000-00-00','00:00:00','2024-06-07'),(7,'EMMANUEL','CHARLES','DAR','DUB','vanadizyemachazy@gmail.com','0628115130','airti','a','0000-00-00','00:00:00','2024-03-31'),(8,'EMMANUEL','CHARLES','DAR','DUB','vanadizyemachazy@gmail.com','0628115130','airti','a','0000-00-00','00:00:00','2025-09-25'),(9,'EMMANUEL','CHARLES','DAR','DUB','vanadizyemachazy@gmail.com','0628115130','airti','a','2024-04-21','21:02:15','2025-12-27'),(10,'VERONICAH','SHELEMBI','MABIBO','MPAKANI','','+255 784447990','MAGUFULI','VVIP','2024-04-21','21:10:09','2024-05-01');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-21 21:15:23
