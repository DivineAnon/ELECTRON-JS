-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bodc_cyber
-- ------------------------------------------------------
-- Server version	8.0.19

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
-- Table structure for table `activity`
--

DROP TABLE IF EXISTS `activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activity` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) DEFAULT NULL,
  `id_operator` int DEFAULT NULL,
  `id_proses` varchar(255) DEFAULT NULL,
  `id_aktifitas` varchar(255) DEFAULT NULL,
  `id_material` varchar(255) DEFAULT NULL,
  `tgl_aktifitas` date DEFAULT NULL,
  `no_unit` int DEFAULT NULL,
  `hm_awal` int DEFAULT NULL,
  `km_awal` int DEFAULT NULL,
  `jm_opt_awal` time DEFAULT NULL,
  `hm_akhir` int DEFAULT NULL,
  `km_akhir` int DEFAULT NULL,
  `jm_opt_akhir` time DEFAULT NULL,
  `total_hm` int DEFAULT NULL,
  `total_km` int DEFAULT NULL,
  `total_jm_opt` int DEFAULT NULL,
  `total_ritasi` int DEFAULT NULL,
  `total_ton` int DEFAULT NULL,
  `fuel` varchar(45) DEFAULT NULL,
  `rata_rata` varchar(45) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity`
--

LOCK TABLES `activity` WRITE;
/*!40000 ALTER TABLE `activity` DISABLE KEYS */;
INSERT INTO `activity` VALUES (10,'Imputer 1',NULL,'(103) CRUSHING','(102) COMPACT','(OB) OB BLASTING	','2020-07-16',3,53,42,'21:00:00',80,52,'22:00:00',27,10,1,107,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_role` int DEFAULT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,5,'admin@gmail.com','$2y$12$JoU3UmUFoaTh9lXGEXiGQuRcbyQF9DJMUYPuGYUl2ymq/U01cAYfe','B2Nka2ylzkZSyEYQh7WE4A8s26NUDsRvgKTJkeYmmolS3J5I7zrMMAoFJM9T');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aktifitas`
--

DROP TABLE IF EXISTS `aktifitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `aktifitas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aktifitas`
--

LOCK TABLES `aktifitas` WRITE;
/*!40000 ALTER TABLE `aktifitas` DISABLE KEYS */;
INSERT INTO `aktifitas` VALUES (1,'(101) BLASTING'),(2,'(102) COMPACT'),(3,'(103) CRUSHING'),(4,'(104) DITCHING'),(5,'(105) DRILLING'),(6,'(106) GRADING'),(7,'(107) HAULING'),(8,'(108) INSTALLING'),(9,'(109) LOADING'),(10,'(110) RIPPING DOZING'),(11,'(111) SPREADING'),(12,'(112) DEWATERING'),(13,'(113) WATER SPRAY');
/*!40000 ALTER TABLE `aktifitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `block`
--

DROP TABLE IF EXISTS `block`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `block` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `block`
--

LOCK TABLES `block` WRITE;
/*!40000 ALTER TABLE `block` DISABLE KEYS */;
INSERT INTO `block` VALUES (1,'Bunyut');
/*!40000 ALTER TABLE `block` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `breakdown_radio`
--

DROP TABLE IF EXISTS `breakdown_radio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `breakdown_radio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tgl_aktifitas` date DEFAULT NULL,
  `id_type_unit` varchar(255) DEFAULT NULL,
  `no_unit` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `start_bd` time DEFAULT NULL,
  `rfu` time DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `jarak` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `breakdown_radio`
--

LOCK TABLES `breakdown_radio` WRITE;
/*!40000 ALTER TABLE `breakdown_radio` DISABLE KEYS */;
INSERT INTO `breakdown_radio` VALUES (2,'2020-05-23','Excavator','1','Tengah','Eng','22:52:12','22:52:12','Mesin Mati Overheat',32),(3,'2020-05-23','Excavator','2','Depan','Eng','22:56:29','22:56:29','Mesin Mati Overheat',32),(4,'2020-05-23','Excavator','3','Tengah','Eng','23:00:26','23:00:26','Mesin Meleleh',42),(6,'2020-06-18','Excavator','4','Jakarta','aada','21:24:06','22:24:06','awra',424);
/*!40000 ALTER TABLE `breakdown_radio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dt_ton`
--

DROP TABLE IF EXISTS `dt_ton`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dt_ton` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dt_ton`
--

LOCK TABLES `dt_ton` WRITE;
/*!40000 ALTER TABLE `dt_ton` DISABLE KEYS */;
INSERT INTO `dt_ton` VALUES (1,'DT 20 TON'),(2,'DT 30 TON');
/*!40000 ALTER TABLE `dt_ton` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hourly_radio`
--

DROP TABLE IF EXISTS `hourly_radio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hourly_radio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tgl_aktifitas` date DEFAULT NULL,
  `id_type_unit` varchar(255) DEFAULT NULL,
  `id_block` varchar(255) DEFAULT NULL,
  `id_dt_ton` varchar(255) DEFAULT NULL,
  `no_unit` varchar(255) DEFAULT NULL,
  `work` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `problem` varchar(255) DEFAULT NULL,
  `operator` varchar(255) DEFAULT NULL,
  `n_rit` varchar(255) DEFAULT NULL,
  `n_rit_time` time DEFAULT NULL,
  `mat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hourly_radio`
--

LOCK TABLES `hourly_radio` WRITE;
/*!40000 ALTER TABLE `hourly_radio` DISABLE KEYS */;
INSERT INTO `hourly_radio` VALUES (1,'2020-07-14','Excavator','Bunyut','DT 30 TON','1','asdw','Mesin Mati','sadqw','Budi','22','07:00:00','-'),(2,'2020-07-14','Excavator','Bunyut','DT 30 TON','2','wqe','dsa','sad','dsa','dsa','21:26:13','wqeq'),(3,'2020-07-14','Excavator','Bunyut','DT 30 TON','3','qwrq','wqrq','rwqr','kkrak','23','22:22:48','241');
/*!40000 ALTER TABLE `hourly_radio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loader`
--

DROP TABLE IF EXISTS `loader`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `loader` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loader`
--

LOCK TABLES `loader` WRITE;
/*!40000 ALTER TABLE `loader` DISABLE KEYS */;
/*!40000 ALTER TABLE `loader` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `material` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material`
--

LOCK TABLES `material` WRITE;
/*!40000 ALTER TABLE `material` DISABLE KEYS */;
INSERT INTO `material` VALUES (1,'(TS) TOPSOIL'),(2,'(ON) OB NON BLASTING'),(3,'(OB) OB BLASTING	'),(4,'(CC) BATUBARA'),(5,'(MD) LUMPUR');
/*!40000 ALTER TABLE `material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `operator`
--

DROP TABLE IF EXISTS `operator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `operator` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nrp` int DEFAULT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `unit_field` varchar(45) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `operator`
--

LOCK TABLES `operator` WRITE;
/*!40000 ALTER TABLE `operator` DISABLE KEYS */;
INSERT INTO `operator` VALUES (1,12414,'wqeq','asea','jakarta','1993-07-15','DT','2020-06-17');
/*!40000 ALTER TABLE `operator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proses`
--

DROP TABLE IF EXISTS `proses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proses`
--

LOCK TABLES `proses` WRITE;
/*!40000 ALTER TABLE `proses` DISABLE KEYS */;
INSERT INTO `proses` VALUES (1,'(101) PENGUPASAN BATUBARA'),(2,'(102) PENGANGKUTAN BATUBARA	'),(3,'(103) CRUSHING'),(4,'(104) PEKERJAAN GENERAL'),(5,'(105) LAND CLEARING & PINDAH TOPSOIL'),(6,'(106) REHABILITASI LOKASI TAMBANG'),(7,'(107) KONSTRUKSI JALAN & PERAWATAN'),(8,'(108) PENGUPASAN OVERBURDEN'),(9,'(109) PENGANGKUTAN OVERBURDEN	'),(10,'(111) KONSTRUKSI JALAN & PERAWATAN'),(11,'(112) PENGUPASAN OVERBURDEN'),(12,'(113) PENGANGKUTAN OVERBURDEN');
/*!40000 ALTER TABLE `proses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `record`
--

DROP TABLE IF EXISTS `record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `record` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) DEFAULT NULL,
  `tanggal_login` date DEFAULT NULL,
  `jam_login` time DEFAULT NULL,
  `tanggal_logout` date DEFAULT NULL,
  `jam_logout` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `record`
--

LOCK TABLES `record` WRITE;
/*!40000 ALTER TABLE `record` DISABLE KEYS */;
/*!40000 ALTER TABLE `record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ritasi`
--

DROP TABLE IF EXISTS `ritasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ritasi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_activity` varchar(255) DEFAULT NULL,
  `time_1` time DEFAULT NULL,
  `time_2` time DEFAULT NULL,
  `time_3` time DEFAULT NULL,
  `time_4` time DEFAULT NULL,
  `time_5` time DEFAULT NULL,
  `time_6` time DEFAULT NULL,
  `time_7` time DEFAULT NULL,
  `time_8` time DEFAULT NULL,
  `time_9` time DEFAULT NULL,
  `time_10` time DEFAULT NULL,
  `time_11` time DEFAULT NULL,
  `time_12` time DEFAULT NULL,
  `time_13` time DEFAULT NULL,
  `time_14` time DEFAULT NULL,
  `time_15` time DEFAULT NULL,
  `time_16` time DEFAULT NULL,
  `time_17` time DEFAULT NULL,
  `time_18` time DEFAULT NULL,
  `time_19` time DEFAULT NULL,
  `time_20` time DEFAULT NULL,
  `time_21` time DEFAULT NULL,
  `time_22` time DEFAULT NULL,
  `time_23` time DEFAULT NULL,
  `time_24` time DEFAULT NULL,
  `total_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_4` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_5` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_6` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_7` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_8` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_9` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_10` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_11` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_12` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_13` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_14` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_15` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_16` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_17` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_18` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_19` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_20` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_21` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_22` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_23` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_24` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_utama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ritasi`
--

LOCK TABLES `ritasi` WRITE;
/*!40000 ALTER TABLE `ritasi` DISABLE KEYS */;
INSERT INTO `ritasi` VALUES (22,'1','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','2','4','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10'),(23,'1','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','10:27:01','4','2','10','','','','','','','','','','','','','','','','','','','','','','16'),(24,'2','19:21:19','21:21:25','19:21:18','19:21:18','19:21:18','19:21:18','19:21:18','19:21:18','19:21:19','19:21:18','19:21:18','19:21:18','19:21:18','19:21:18','19:21:18','19:21:18','19:21:18','19:21:18','19:21:18','19:21:19','19:21:19','19:21:19','19:21:19','19:21:19','43','53','','','','','','','','','','','','','','','','','','','','','','','96'),(25,'3','06:00:00','07:00:00','08:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','24','52','31','','','','','','','','','','','','','','','','','','','','','','107');
/*!40000 ALTER TABLE `ritasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,'Super Admin',1),(2,'Data Validator',1),(3,'Data Imputer',1),(4,'Data Radio',1),(5,'Admin',1);
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stanby`
--

DROP TABLE IF EXISTS `stanby`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stanby` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stanby`
--

LOCK TABLES `stanby` WRITE;
/*!40000 ALTER TABLE `stanby` DISABLE KEYS */;
INSERT INTO `stanby` VALUES (1,'(D01) P2H '),(2,'(D02) ISI SOLAR/ OLI/ GREASING'),(3,'(D03) CEK TYRE'),(4,'(D04) ALAT PINDAH LOKASI '),(5,'(D05) TUNGGU LOADER/ TUNGGU HAULER'),(6,'(D06) TUNGGU ENGINEERING'),(7,'(D07) TUNGGU BLASTING'),(8,'(D08)  CUCI UNIT'),(9,'(D09) MAKAN & ISTIRAHAT'),(10,'(D10) SAFETY CHECK');
/*!40000 ALTER TABLE `stanby` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stanby_status`
--

DROP TABLE IF EXISTS `stanby_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stanby_status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_activity` varchar(255) DEFAULT NULL,
  `id_stanby` varchar(255) DEFAULT NULL,
  `start_time_1` time DEFAULT NULL,
  `start_time_2` time DEFAULT NULL,
  `start_time_3` time DEFAULT NULL,
  `start_time_4` time DEFAULT NULL,
  `end_time_1` time DEFAULT NULL,
  `end_time_2` time DEFAULT NULL,
  `end_time_3` time DEFAULT NULL,
  `end_time_4` time DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `breakdown` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stanby_status`
--

LOCK TABLES `stanby_status` WRITE;
/*!40000 ALTER TABLE `stanby_status` DISABLE KEYS */;
INSERT INTO `stanby_status` VALUES (1,'1','1','09:00:00','11:00:00',NULL,NULL,'10:00:00','12:00:00',NULL,NULL,NULL,NULL),(7,'1','1','10:00:00',NULL,NULL,NULL,'11:00:00',NULL,NULL,NULL,'sdaa',NULL),(8,'1','1','11:00:00',NULL,NULL,NULL,'12:00:00',NULL,NULL,NULL,'we',NULL),(9,'3','2','22:00:00',NULL,NULL,NULL,'23:00:00',NULL,NULL,NULL,'',NULL),(10,'3','2','22:00:00',NULL,NULL,NULL,'23:00:00',NULL,NULL,NULL,'',NULL);
/*!40000 ALTER TABLE `stanby_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_unit`
--

DROP TABLE IF EXISTS `type_unit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `type_unit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_unit`
--

LOCK TABLES `type_unit` WRITE;
/*!40000 ALTER TABLE `type_unit` DISABLE KEYS */;
INSERT INTO `type_unit` VALUES (1,'Excavator');
/*!40000 ALTER TABLE `type_unit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unit`
--

DROP TABLE IF EXISTS `unit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `unit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `no_unit` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `nama_unit` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `type_unit` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `brand` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `owner` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unit`
--

LOCK TABLES `unit` WRITE;
/*!40000 ALTER TABLE `unit` DISABLE KEYS */;
INSERT INTO `unit` VALUES (1,'1','Ksksk','tetea','sewe','rae','eeaa');
/*!40000 ALTER TABLE `unit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unit_field`
--

DROP TABLE IF EXISTS `unit_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `unit_field` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unit_field`
--

LOCK TABLES `unit_field` WRITE;
/*!40000 ALTER TABLE `unit_field` DISABLE KEYS */;
INSERT INTO `unit_field` VALUES (1,'DT');
/*!40000 ALTER TABLE `unit_field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unit_status`
--

DROP TABLE IF EXISTS `unit_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `unit_status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tgl_aktifitas` date DEFAULT NULL,
  `id_proses` varchar(255) DEFAULT NULL,
  `id_aktifitas` varchar(255) DEFAULT NULL,
  `id_material` varchar(255) DEFAULT NULL,
  `no_unit` int DEFAULT NULL,
  `total_ritasi` int DEFAULT NULL,
  `loader` varchar(255) DEFAULT NULL,
  `loading_point` varchar(255) DEFAULT NULL,
  `dumping_area` varchar(255) DEFAULT NULL,
  `jarak` int DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unit_status`
--

LOCK TABLES `unit_status` WRITE;
/*!40000 ALTER TABLE `unit_status` DISABLE KEYS */;
INSERT INTO `unit_status` VALUES (1,'2020-05-15','(102) PENGANGKUTAN BATUBARA	','(101) BLASTING','(TS) TOPSOIL',1,100,'231','2131','213',123,'VERIFIED'),(2,'2020-05-15','(102) PENGANGKUTAN BATUBARA	','(101) BLASTING','(ON) OB NON BLASTING',2,50,'231','2131','213',123,'VERIFIED'),(11,'2020-07-16','(103) CRUSHING','(102) COMPACT','(OB) OB BLASTING	',3,107,'42','42','42',42,'VERIFIED');
/*!40000 ALTER TABLE `unit_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_role` int DEFAULT NULL,
  `nrp` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `jm_login` time DEFAULT NULL,
  `tgl_login` date DEFAULT NULL,
  `jm_logout` time DEFAULT NULL,
  `tgl_logout` date DEFAULT NULL,
  `total_jm_opt` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `shift` varchar(45) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,3,'123456','Imputer 1','$2y$12$Lv7a00aNzajBedTXNgxHO.aDGogEVFCmxsBL7vjjwPaO/Rtc5rCOK','Jullend Gatc',NULL,'17:23:22','2020-08-12','00:47:32','2020-08-12','00','ONLINE','1',NULL,'C5GX6Mb8rKYSRNLYwVjUHwTwfLXKOZQ83gzJRF930upZzkCsCIk4A6PbSeun'),(2,2,'456789','Validator 1','$2y$12$Lv7a00aNzajBedTXNgxHO.aDGogEVFCmxsBL7vjjwPaO/Rtc5rCOK','John',NULL,'17:56:42','2020-08-07','17:56:46','2020-08-07','00','OFFLINE','2',NULL,'lNrBX8Bm5uwuf3d8N3QH0pEMQJKSL8PupmiT6tXTtMswilYpo4sbDpalepUO'),(3,1,'232323','Super Admin','$2y$12$Lv7a00aNzajBedTXNgxHO.aDGogEVFCmxsBL7vjjwPaO/Rtc5rCOK','Admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL),(4,4,'323233','Radio 1','$2y$12$Lv7a00aNzajBedTXNgxHO.aDGogEVFCmxsBL7vjjwPaO/Rtc5rCOK','eqwe',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2',NULL,NULL),(5,4,'21312','Validator 2','$2y$12$Lv7a00aNzajBedTXNgxHO.aDGogEVFCmxsBL7vjjwPaO/Rtc5rCOK','31231',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2020-06-17',NULL),(6,4,'151512','Validator 3','$2y$12$Lv7a00aNzajBedTXNgxHO.aDGogEVFCmxsBL7vjjwPaO/Rtc5rCOK','sadas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2','2020-06-17',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-17  6:41:34
