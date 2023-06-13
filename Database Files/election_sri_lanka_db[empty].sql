CREATE DATABASE  IF NOT EXISTS `election_sri_lanka_db` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `election_sri_lanka_db`;
-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: election_sri_lanka_db
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `admin_no` int NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(45) NOT NULL,
  `admin_nic` varchar(15) NOT NULL,
  `admin_contact_no` varchar(10) NOT NULL,
  `admin_city` varchar(45) NOT NULL,
  `admin_username` varchar(45) NOT NULL,
  `admin_password` varchar(45) NOT NULL,
  `admin_status` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`admin_no`),
  UNIQUE KEY `admin_no_UNIQUE` (`admin_no`),
  UNIQUE KEY `admin_nic_UNIQUE` (`admin_nic`),
  UNIQUE KEY `admin_username_UNIQUE` (`admin_username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Nuwanga','200019401866','0713848592','Kelaniya','nuwa','1234',1),(2,'Nimal','2000134018844','0775551947','Colombo','nimal','1234',1),(3,'Kamal','200139275466','0713928374','Colombo','kamal','1234',1);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `candidate`
--

DROP TABLE IF EXISTS `candidate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `candidate` (
  `candidate_election_no` int NOT NULL,
  `candidate_picture` varchar(200) NOT NULL,
  `candidate_name` varchar(45) NOT NULL,
  `candidate_nic` varchar(15) NOT NULL,
  `candidate_city` varchar(45) NOT NULL,
  `candidate_votes` int NOT NULL,
  `candidate_status` varchar(45) NOT NULL DEFAULT '1',
  `party_no` int NOT NULL,
  PRIMARY KEY (`candidate_election_no`),
  UNIQUE KEY `candidate_election_no_UNIQUE` (`candidate_election_no`),
  UNIQUE KEY `candidate_nic_UNIQUE` (`candidate_nic`),
  KEY `fk_candidate_party_idx` (`party_no`),
  CONSTRAINT `fk_candidate_party` FOREIGN KEY (`party_no`) REFERENCES `party` (`party_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidate`
--

LOCK TABLES `candidate` WRITE;
/*!40000 ALTER TABLE `candidate` DISABLE KEYS */;
INSERT INTO `candidate` VALUES (1,'Default_Candidate_Picture.png','Mahinda Rajapaksa','20007775v','kurunagala',0,'1',1),(2,'Default_Candidate_Picture.png','G.L. Peries','25448947v','Colombo',0,'1',1),(3,'Default_Candidate_Picture.png','Presanna Ranathunga','31231232v','Gampaha',0,'1',1),(4,'Default_Candidate_Picture.png','Presanna Ranaweera','84848814v','Kelaniya',0,'1',1),(5,'Default_Candidate_Picture.png','Sisira Jayakodi','87917987v','Kadewetha',0,'1',1),(6,'Default_Candidate_Picture.png','Sajith Premadasa','68418468v','Colombo',0,'1',2),(7,'Default_Candidate_Picture.png','Lakshman Kirialla','30298301v','Nuwara Eliya',0,'1',2),(8,'Default_Candidate_Picture.png','Sarath Fonseka','32481029v','Kelaniya',0,'1',2),(9,'Default_Candidate_Picture.png','Harshe De Silwa','64164654v','Colombo',0,'1',2),(10,'Default_Candidate_Picture.png','Hareen Fernando','68499353v','Negombo',0,'1',2),(11,'Default_Candidate_Picture.png','Anura Kumara Disanayaka','47777344v','Colombo',0,'1',3),(12,'Default_Candidate_Picture.png','Vigitha Herath','24357584v','Biyagama',0,'1',3),(13,'Default_Candidate_Picture.png','Sunil Hadunneththi','39474888v','Badulla',0,'1',3),(14,'Default_Candidate_Picture.png','Ranil Wickermesinghe','25546985v','Colombo',0,'1',4),(15,'Default_Candidate_Picture.png','Palitha Range Bandara','31113255v','Kurunagala',0,'1',4),(16,'Default_Candidate_Picture.png','Ravee Karunanayaka','684646868v','Colombo',0,'1',4);
/*!40000 ALTER TABLE `candidate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `party`
--

DROP TABLE IF EXISTS `party`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `party` (
  `party_no` int NOT NULL AUTO_INCREMENT,
  `party_mark` varchar(200) NOT NULL,
  `party_name` varchar(100) NOT NULL,
  `party_name_short_form` varchar(20) NOT NULL,
  `party_votes` int NOT NULL,
  `party_status` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`party_no`),
  UNIQUE KEY `party_no_UNIQUE` (`party_no`),
  UNIQUE KEY `party_name_UNIQUE` (`party_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `party`
--

LOCK TABLES `party` WRITE;
/*!40000 ALTER TABLE `party` DISABLE KEYS */;
INSERT INTO `party` VALUES (1,'SLPJP_Election_Mark.png','Sri Lanka Podujana Peramuna','SLPP',0,1),(2,'SJB_Election_Mark.png','Samagi Jana Balawegaya','SJB',0,1),(3,'JVP_Election_Mark.png','Janatha Vimukthi Peramuna','JVP',0,1),(4,'UNP_Election_Mark.png','United National Party','UNP',0,1);
/*!40000 ALTER TABLE `party` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `position`
--

DROP TABLE IF EXISTS `position`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `position` (
  `position_no` int NOT NULL AUTO_INCREMENT,
  `position_name` varchar(45) NOT NULL,
  `position_description` varchar(45) NOT NULL,
  `position_status` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`position_no`),
  UNIQUE KEY `position_no_UNIQUE` (`position_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `position`
--

LOCK TABLES `position` WRITE;
/*!40000 ALTER TABLE `position` DISABLE KEYS */;
INSERT INTO `position` VALUES (1,'Prime Minister','2nd Citizen of Sri Lanka',1),(2,'Minister of Parliament','Heads of Ministries of Sri Lanka',1),(3,'Member of Parliament','No Description',1);
/*!40000 ALTER TABLE `position` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voter`
--

DROP TABLE IF EXISTS `voter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `voter` (
  `voter_nic` varchar(15) NOT NULL,
  `voter_name` varchar(45) NOT NULL,
  `voter_contact_no` varchar(10) NOT NULL,
  `voter_city` varchar(45) NOT NULL,
  `voter_password` varchar(45) NOT NULL,
  `voter_status` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`voter_nic`),
  UNIQUE KEY `voter_nic_UNIQUE` (`voter_nic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voter`
--

LOCK TABLES `voter` WRITE;
/*!40000 ALTER TABLE `voter` DISABLE KEYS */;
INSERT INTO `voter` VALUES ('200019401866','Nuwanga Rajapaksha','0713848592','Kelaniya','1234',1),('20031947233','Sameera Rajapaksha','0713482746','Colombo','1234',1);
/*!40000 ALTER TABLE `voter` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-26 15:00:45
