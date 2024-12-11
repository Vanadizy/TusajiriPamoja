-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: ytp_db
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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `type` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `Descriptions` varchar(200) DEFAULT NULL,
  `Post_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES ('PRAYER','../posts/PRAYER.png','Hunu ni mchezaji kutoka nchi za nje tuna hitaji kumsajiri lakini tuna hitaji maoni ya mashabiki kabla ya kusajiri','2024-10-10 12:58:01',NULL),('PRAYER','../posts/PRAYER.png','huyu ni mlinda lango tunahitaji kumsajiri tuna hitaji kumsairi karibuni kwa mawao\r\n','2024-10-10 13:04:46',NULL),('PRAYER','../posts/PRAYER.png','Hunu ni mchezaji kutoka nchi za nje tuna hitaji kumsajiri lakini tuna hitaji maoni ya mashabiki kabla ya kusajiri','2024-10-10 13:26:55',34),('PRAYER','../posts/.png','Hunu ni mchezaji kutoka nchi za nje tuna hitaji kumsajiri lakini tuna hitaji maoni ya mashabiki kabla ya kusajiri','2024-10-10 13:29:04',0),('NEWS','../posts/989.png','Je unaju kwamba yanga sports club ni timu inyo ongozwa na watu wenye elimu ya juu tia komenti yako hapo chini tujue \r\n','2024-10-10 13:46:19',989),('JERSEY','../posts/097867.png','we need any aidea of how jersey o look like so welcome','2024-10-10 14:44:20',97867);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `firstname` varchar(200) DEFAULT NULL,
  `lastname` varchar(200) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `birth_date` varchar(200) DEFAULT NULL,
  `region` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `image_path` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('BARAKA','BARAKA','Male','2002-12-27','MWANZA','admin@tusajiripamoja.com','$2y$10$vRQWVMxiW3D1YpouXdFZ1uTDYqa4SIDBlA49oPj6tJBS6eOSWEPC.','../users/admin@tusajiripamoja.com.jpg'),('chawa ','halisi','Male','2024-06-08','MWANZA','johnlyasi28@gmail.com','$2y$10$JqWdooIbV6./iQZ1SXxwceIcsoK10R3JZKE28fIXVg7OJEq2A/pNG','../users/johnlyasi28@gmail.com.jpg'),('EMMANUEL','CHARLES','Male','2002-12-27','MWANZA','vanadizyemachazy@gmail.com','$2y$10$zTxcpzsASZTkHJk2Nv81Ke17NPqaoJ/Bc71hxPGFJ45rJoclUba1m','../users/vanadizyemachazy@gmail.com.jpg'),('EMMANUEL','CHARLES','Male','0002-12-27','MWANZA','vanadizyemachazy@gmail.com1234','$2y$10$SM7r1bvzFXpqOsjRFC40XOdnm.xxgPycSmjt9jBPBQIs96qZF8Piy','../users/vanadizyemachazy@gmail.com1234.jpg');
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

-- Dump completed on 2024-10-10 17:50:44
