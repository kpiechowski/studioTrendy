-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: studiotrendy
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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

CREATE DATABASE studiotrendy

--
-- Table structure for table `pracownicy`
--

DROP TABLE IF EXISTS `pracownicy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pracownicy` (
  `id` int(11) NOT NULL,
  `Nazwa_pracownika` varchar(50) NOT NULL,
  `login` varchar(40) NOT NULL,
  `haslo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pracownicy`
--

LOCK TABLES `pracownicy` WRITE;
/*!40000 ALTER TABLE `pracownicy` DISABLE KEYS */;
INSERT INTO `pracownicy` VALUES (0,'','',''),(1,'Joanna Ygrekowska','pracownik1','$2y$10$Y6j8riJUVplaECy1U6b2rOjx2jmuYjCwDiiwFLyqR16VMaKB.CuxW');
/*!40000 ALTER TABLE `pracownicy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typy_wizyt`
--

DROP TABLE IF EXISTS `typy_wizyt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typy_wizyt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nazwa` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typy_wizyt`
--

LOCK TABLES `typy_wizyt` WRITE;
/*!40000 ALTER TABLE `typy_wizyt` DISABLE KEYS */;
INSERT INTO `typy_wizyt` VALUES (1,'Strzyżenie krótkie'),(2,'Strzyżenie boków'),(3,'Skin fade'),(4,'Combo'),(5,'Dziecięce'),(6,'Długa klasyka');
/*!40000 ALTER TABLE `typy_wizyt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `admin` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'test','$2y$10$VEoM5ir7Er5Z3lI63eWzU.HR2GjUoOwPga.LYQfIiW7uUQfFWccYC','kpiechowski25@gmail.com',0),(2,'kp','$2y$10$rkomksio9wCsbj5EIw2vHOd0PmYHo0pbuJbtzt1Y3KZBXl3JHpdD.','kpiechowski25@gmail.com',0),(3,'test2','$2y$10$Y6j8riJUVplaECy1U6b2rOjx2jmuYjCwDiiwFLyqR16VMaKB.CuxW','kpiechowski25@gmail.com',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wizyty`
--

DROP TABLE IF EXISTS `wizyty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wizyty` (
  `id_wizyty` int(11) NOT NULL AUTO_INCREMENT,
  `typ_wizyty` varchar(50) NOT NULL,
  `opiekun_id` int(11) DEFAULT NULL,
  `data` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_wizyty`),
  UNIQUE KEY `data` (`data`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wizyty`
--

LOCK TABLES `wizyty` WRITE;
/*!40000 ALTER TABLE `wizyty` DISABLE KEYS */;
INSERT INTO `wizyty` VALUES (1,'4',1,'2022-12-21 15:00:00',1),(3,'1',1,'2022-12-18 10:00:00',1),(4,'3',1,'2022-12-23 15:00:00',1),(5,'4',0,'2022-12-24 14:00:00',1),(6,'5',0,'2023-01-01 18:00:00',1);
/*!40000 ALTER TABLE `wizyty` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-30 18:35:10
