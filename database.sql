-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: form
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Table structure for table `Creative_Events`
--

DROP TABLE IF EXISTS `Creative_Events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Creative_Events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `fees` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Creative_Events`
--

LOCK TABLES `Creative_Events` WRITE;
/*!40000 ALTER TABLE `Creative_Events` DISABLE KEYS */;
INSERT INTO `Creative_Events` VALUES (1,'Doodle it',10),(2,'History Buff',10),(4,'Junior Scientist',10),(5,'Mock Placement',10),(6,'Price is Right',10),(7,'Scrap Dealers',10),(8,'Talking Pen',10);
/*!40000 ALTER TABLE `Creative_Events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Departmental_Events`
--

DROP TABLE IF EXISTS `Departmental_Events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Departmental_Events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `fees` int(5) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Departmental_Events`
--

LOCK TABLES `Departmental_Events` WRITE;
/*!40000 ALTER TABLE `Departmental_Events` DISABLE KEYS */;
INSERT INTO `Departmental_Events` VALUES (1,'Blind C',10,'CODESTER'),(2,'Code in Less',10,'CODESTER'),(3,'Microcon',10,'CODESTER'),(4,'Switch Hero',10,'CODESTER'),(5,'Switch Hero',10,'CODESTER'),(6,'Draw Your Design',10,'TEXPLORER'),(8,'Entwining Trends',10,'TEXPLORER'),(9,'Style Your Mannequin',10,'TEXPLORER'),(10,'cadwar',10,'MECHATRON'),(11,'train your tool',10,'MECHATRON'),(12,'bridge up',10,'CENFEST'),(13,'seem city',10,'CENFEST'),(14,'staking tower',10,'CENFEST'),(15,'codem paper presentation',10,'CONFERENCE'),(16,'pitch your paper',10,'CONFERENCE'),(17,'sashleshan paper presentation',10,'CONFERENCE'),(18,'swipe your slide',10,'CONFERENCE'),(19,'technochem',10,'CONFERENCE'),(20,'threaded ideas',10,'CONFERENCE'),(21,'papel electrica(ppt)',10,'CONFERENCE'),(22,'creatrical',10,'ELECTROMA'),(23,'technothon',10,'ELECTROMA'),(24,'amazing reaction',10,'CHEMTREK'),(25,'brain booshup',10,'CHEMTREK');
/*!40000 ALTER TABLE `Departmental_Events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Exhibation`
--

DROP TABLE IF EXISTS `Exhibation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Exhibation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `fees` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Exhibation`
--

LOCK TABLES `Exhibation` WRITE;
/*!40000 ALTER TABLE `Exhibation` DISABLE KEYS */;
INSERT INTO `Exhibation` VALUES (1,'Biomax',10);
/*!40000 ALTER TABLE `Exhibation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Gaming_Zone`
--

DROP TABLE IF EXISTS `Gaming_Zone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Gaming_Zone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `fees` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Gaming_Zone`
--

LOCK TABLES `Gaming_Zone` WRITE;
/*!40000 ALTER TABLE `Gaming_Zone` DISABLE KEYS */;
INSERT INTO `Gaming_Zone` VALUES (1,'CS:GO',10),(2,'FIFA',10),(3,'PUBG',10),(4,'NEED FOR SPEED',10);
/*!40000 ALTER TABLE `Gaming_Zone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Online_Events`
--

DROP TABLE IF EXISTS `Online_Events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Online_Events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `fees` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Online_Events`
--

LOCK TABLES `Online_Events` WRITE;
/*!40000 ALTER TABLE `Online_Events` DISABLE KEYS */;
INSERT INTO `Online_Events` VALUES (1,'Clear Your Lens',10),(2,'E-Buzz',10),(3,'Face The nation',10);
/*!40000 ALTER TABLE `Online_Events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Robotics`
--

DROP TABLE IF EXISTS `Robotics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Robotics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `fees` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Robotics`
--

LOCK TABLES `Robotics` WRITE;
/*!40000 ALTER TABLE `Robotics` DISABLE KEYS */;
INSERT INTO `Robotics` VALUES (1,'Drone Racing',10),(2,'Mazomania',10),(3,'Pick & Place & Line Follower',10),(4,'Robosoccer',10),(5,'Robosumo',10),(6,'Speedster',10);
/*!40000 ALTER TABLE `Robotics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deparmental_events`
--

DROP TABLE IF EXISTS `deparmental_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deparmental_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `fees` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deparmental_events`
--

LOCK TABLES `deparmental_events` WRITE;
/*!40000 ALTER TABLE `deparmental_events` DISABLE KEYS */;
/*!40000 ALTER TABLE `deparmental_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solo`
--

DROP TABLE IF EXISTS `solo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `mobile_number` varchar(10) DEFAULT NULL,
  `college_name` varchar(100) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `Event_type` varchar(30) DEFAULT NULL,
  `Event_department` varchar(15) DEFAULT NULL,
  `Event` varchar(50) DEFAULT NULL,
  `Registered_by` varchar(30) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solo`
--

LOCK TABLES `solo` WRITE;
/*!40000 ALTER TABLE `solo` DISABLE KEYS */;
INSERT INTO `solo` VALUES (1,'vikas','joshi','Male','vikasjoshis001@gmail.com','8805572004','Shri Guru Gobind Singhji Institute of Engineering and Technology, Nanded','Computer science & Engineering','Nanded','Departmental Event','ELECTROMA','creatrical','dj','2019-12-01 12:57:39'),(2,'VIKAS','Joshi','Male','vikasjoshis001@gmail.com','8805572004','Shri Guru Gobind Singhji Institute of Engineering and Technology, Nanded','Computer science & Engineering','Nanded','Select','select','','VJ','2019-12-01 13:00:44'),(3,'VIKAS','Joshi','Male','vikasjoshis001@gmail.com','8805572004','Shri Guru Gobind Singhji Institute of Engineering and Technology, Nanded','Computer science & Engineering','Nanded','Departmental Event','CODESTER','Code in Less','VJ','2019-12-01 13:01:04'),(4,'Vikas','Joshi','Male','vikasjsohsi001@gmail.com','8805572004','Siddhivinayak Technical Campus, School of Engineering & Research Technology, Shirasgon, Nile','Mechanical Engineering','Osmanabad','Departmental Event','CODESTER','Code in Less','VJ','2019-12-01 13:11:58'),(5,'s','d','Male','e@s.c','1234567890','Shri Sant Gajanan Maharaj College of Engineering,Shegaon','Computer science & Engineering','Beed','Select','select','','VJ','2019-12-02 06:40:07'),(6,'asa','dsda','Male','a@d.c','1234567890','Dr. Bhausaheb Nadurkar College of Engineering, Waghapur,Yavatmal','Mechanical Engineering','Osmanabad','Select','select','','VJ','2019-12-02 06:47:36'),(7,'add','h','Male','d.@m.c','1234567890','Dr. Bhausaheb Nadurkar College of Engineering, Waghapur,Yavatmal','f','Amravati','Departmental Event','select','','VJ','2019-12-02 07:00:27'),(8,'f','d','Male','df@gm.com','1234567890','Dr. Bhausaheb Nadurkar College of Engineering, Waghapur,Yavatmal','Computer science & Engineering','Bhandara','Departmental Event','select','','VJ','2019-12-02 07:04:21'),(9,'a','d','Male','s@g.com','1234567890','Prof Ram Meghe College of Engineering and Management, Badnera','c','Bhandara','Departmental Event','CODESTER','','VJ','2019-12-02 07:23:30'),(10,'a','s','Male','a@g.om','1234567890','Dwarka Bahu Uddeshiya Gramin Vikas Foundation, Rajarshri Shahu College of Engineering, Buldhana','Chemical Engineering','Gondia','Departmental Event','CODESTER','','VJ','2019-12-02 07:25:16'),(11,'a','s','Male','a@g.om','1234567890','Dwarka Bahu Uddeshiya Gramin Vikas Foundation, Rajarshri Shahu College of Engineering, Buldhana','Chemical Engineering','Gondia','Departmental Event','CODESTER','Blind C','VJ','2019-12-02 07:25:24'),(12,'a','s','Male','a@g.com','1234567890','Dr. Bhausaheb Nadurkar College of Engineering, Waghapur,Yavatmal','cs','Nanded','Departmental Event','CODESTER','','VJ','2019-12-02 07:34:34'),(13,'a','s','Male','a@g.com','1234567890','Dr. Bhausaheb Nadurkar College of Engineering, Waghapur,Yavatmal','cs','Nanded','Departmental Event','CODESTER','Code in Less','VJ','2019-12-02 07:34:40'),(14,'a','s','Male','a@g.m','1234567890','Dr.Rajendra Gode Institute of Technology & Research, Amravati','cs','Nanded','Departmental Event','CODESTER','','VJ','2019-12-02 07:41:10'),(15,'a','s','Male','a@g.m','1234567890','Dr.Rajendra Gode Institute of Technology & Research, Amravati','cs','Nanded','Departmental Event','CODESTER','Blind C','VJ','2019-12-02 07:41:14'),(16,'a','s','Male','a@g.cmo','1234567890','s','cs','Buldana','Departmental Event','CODESTER','','VJ','2019-12-02 07:51:08'),(17,'a','s','Male','d@g.com','1234567890','Dr. Bhausaheb Nadurkar College of Engineering, Waghapur,Yavatmal','cs','Nanded','Departmental Event','TEXPLORER','','VJ','2019-12-02 07:52:19'),(18,'a','s','Male','d@gm.ocm','1234567890','Dwarka Bahu Uddeshiya Gramin Vikas Foundation, Rajarshri Shahu College of Engineering, Buldhana','cs','Nanded','Departmental Event','CODESTER','Code in Less','VJ','2019-12-02 07:53:32');
/*!40000 ALTER TABLE `solo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solo_form`
--

DROP TABLE IF EXISTS `solo_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solo_form` (
  `name` varchar(1000) DEFAULT NULL,
  `college` varchar(1000) DEFAULT NULL,
  `college_address` varchar(1000) DEFAULT NULL,
  `branch` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `mobile_number` bigint(20) DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `event` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solo_form`
--

LOCK TABLES `solo_form` WRITE;
/*!40000 ALTER TABLE `solo_form` DISABLE KEYS */;
INSERT INTO `solo_form` VALUES ('Vikas Joshi','SGGS','NANDED',NULL,'2019bcs140@sggs.ac.in',8805572004,NULL,NULL),('VJ','SGGS','NANDED','CSE','vikasjoshis001@gmail.com',8805572004,'M',NULL),('vikas','sggs','nanded','IT','2019bcs140@sggs.ac.in',9850662383,'M','D2,D7,D9'),('Dilip Joshi','SGGS','Vishnupuri Nanded','EXTC','dilipjoshis98@gmail.com',8975427620,'M','D1,D3,D6,D9,D11,C3,O2,R1,G1,G2,E1'),('VJ','SGGS','NANDED','CIVIL','2019bcs140@sggs.ac.in',9850662383,'M','D1,D6,D13'),('DJ','SGGS','NANDED','TEXT','dilipjoshis98@gmail.com',8208624455,'F',''),('DJ','SGGS','NANDED','TEXT','dilipjoshis98@gmail.com',8208624455,'F','D2,D7'),('Vikas Hemraj Joshi','Shri Guru Gobind Singhji Institute of Engineering and Technology ,Nanded','Vishnupuri Nanded','CSE','vikasjoshis001@gmail.com',8805572004,'M','D1,C5,C6,O3,R4,G3,E1'),('vikas','SGGS','NANDED','CHEM','2019bcs140@sggs.ac.in',8805572004,'M','D2,D7,C4'),('dfd','Shri Sant Gajanan Maharaj College of Engineering,Shegaon','','CSE','dfd@gsd.com',12345,'',''),('VJ','SGGS','','CSE','vikasjoshis001@gmail.com',8805572004,'M',''),('VJ','SGGS','','CSE','vikasjoshis001@gmail.com',8805572004,'M',''),('VJ','SGGS','','CSE','vikasjoshis001@gmail.com',8805572004,'M',''),('VJ','SGGS','','CSE','vikasjoshis001@gmail.com',8805572004,'M',''),('VJ','SGGS','','CSE','vikasjoshis001@gmail.com',8805572004,'M',''),('VJ','SGGS','Nanded','CSE','vikasjoshis001@gmail.com',8805572004,'M',''),('VJ','SGGS','Nanded','CSE','vikasjoshis001@gmail.com',8805572004,'M','D1,D6,D8,D13'),('Vikas Hemraj Joshi','Shri Guru GObind Singhji Institute of Engineering and Technology ,Nanded','Amravati','IT','2019bcs140@sggs.ac.in',8208624455,'M','D2');
/*!40000 ALTER TABLE `solo_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(30) DEFAULT NULL,
  `leader_name` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `mobile_number` varchar(10) DEFAULT NULL,
  `player1` varchar(30) DEFAULT NULL,
  `player2` varchar(30) DEFAULT NULL,
  `player3` varchar(30) DEFAULT NULL,
  `player4` varchar(30) DEFAULT NULL,
  `player5` varchar(30) DEFAULT NULL,
  `player6` varchar(30) DEFAULT NULL,
  `player7` varchar(30) DEFAULT NULL,
  `player8` varchar(30) DEFAULT NULL,
  `player9` varchar(30) DEFAULT NULL,
  `player10` varchar(30) DEFAULT NULL,
  `college_name` varchar(100) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `Event_type` varchar(30) DEFAULT NULL,
  `Event_department` varchar(15) DEFAULT NULL,
  `Event` varchar(50) DEFAULT NULL,
  `Registered_by` varchar(30) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (1,'dfd','fdf','fdf@gasdkfj.com','8805572004','','','','','','','','','','','SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune.','Sangli','Departmental Event','TEXPLORER','Entwining Trends','VJ','2019-12-01 14:06:46'),(2,'dfd','fdf','fdf@gasdkfj.com','8805572004','','','','','','','','','','','SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune.','Sangli','Departmental Event','TEXPLORER','Entwining Trends','VJ','2019-12-01 14:12:06'),(3,'dfd','fdf','fdf@gasdkfj.com','8805572004','','','','','','','','','','','SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune.','Sangli','Departmental Event','TEXPLORER','Entwining Trends','VJ','2019-12-01 14:13:19'),(4,'dfd','fdf','fdf@gasdkfj.com','8805572004','','','','','','','','','','','SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune.','Sangli','Departmental Event','TEXPLORER','Entwining Trends','VJ','2019-12-01 14:21:50'),(5,'dfd','fdf','fdf@gasdkfj.com','8805572004','','','','','','','','','','','SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune.','Sangli','Departmental Event','TEXPLORER','Entwining Trends','VJ','2019-12-01 14:22:51'),(6,'dfd','fdf','fdf@gasdkfj.com','8805572004','','','','','','','','','','','SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune.','Sangli','Departmental Event','TEXPLORER','Entwining Trends','VJ','2019-12-01 14:23:21'),(7,'dfd','fdf','fdf@gasdkfj.com','8805572004','ere','erere','fdf','','','','','','','','SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune.','Sangli','Departmental Event','TEXPLORER','Entwining Trends','VJ','2019-12-01 14:24:17'),(8,'a','s','w@g.com','1234567890','a','b','','','','','','','','','s','Nanded','Departmental Event','TEXPLORER','Draw Your Design','VJ','2019-12-02 07:59:54'),(9,'a','s','w@g.com','1234567890','a','b','','','','','','','','','s','Nanded','Departmental Event','TEXPLORER','Draw Your Design','VJ','2019-12-02 08:00:03'),(10,'a','d','a@g.com','1234567890','a','d','','','','','','','','','cs','Nanded','Departmental Event','CODESTER','Blind C','VJ','2019-12-02 08:04:02'),(11,'a','d','d@g.com','1234567890','a','d','','','','','','','','','G.H. Raisoni college of Engineering & Management, Amravati','Nanded','Departmental Event','CODESTER','Blind C','VJ','2019-12-02 08:05:43');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_form`
--

DROP TABLE IF EXISTS `team_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_form` (
  `team_name` varchar(1000) DEFAULT NULL,
  `leader_name` varchar(1000) DEFAULT NULL,
  `college` varchar(1000) DEFAULT NULL,
  `college_address` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `mobile_number` bigint(20) DEFAULT NULL,
  `no_of_members` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_form`
--

LOCK TABLES `team_form` WRITE;
/*!40000 ALTER TABLE `team_form` DISABLE KEYS */;
INSERT INTO `team_form` VALUES ('sdfdsf','a','dfdsfd','dfdsfdsf','djs@dfjd.con',1234567890,2),('sdfdsf','a','dfdsfd','dfdsfdsf','djs@dfjd.con',1234567890,2),('sdfdsf','a','dfdsfd','dfdsfdsf','djs@dfjd.con',1234567890,2);
/*!40000 ALTER TABLE `team_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Dilip','Joshi','djs@gmail.com','81dc9bdb52d04dc20036dbd8313ed055');
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

-- Dump completed on 2019-12-02 14:03:07
