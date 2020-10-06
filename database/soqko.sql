-- MariaDB dump 10.17  Distrib 10.4.13-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: soqko
-- ------------------------------------------------------
-- Server version	10.4.13-MariaDB

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
-- Table structure for table `tbl_adfeatures`
--

DROP TABLE IF EXISTS `tbl_adfeatures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_adfeatures` (
  `idtbl_adfeatures` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tbl_adsdetails_idads_details` int(10) unsigned NOT NULL,
  `tbl_feature_category_idtbl_feature_category` int(10) unsigned NOT NULL,
  `tbl_features_idtbl_features` int(10) unsigned NOT NULL,
  `created_on` datetime DEFAULT NULL,
  PRIMARY KEY (`idtbl_adfeatures`),
  KEY `tbl_adfeatures_FKIndex1` (`tbl_features_idtbl_features`),
  KEY `tbl_adfeatures_FKIndex2` (`tbl_feature_category_idtbl_feature_category`),
  KEY `tbl_adfeatures_FKIndex3` (`tbl_adsdetails_idads_details`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_adfeatures`
--

LOCK TABLES `tbl_adfeatures` WRITE;
/*!40000 ALTER TABLE `tbl_adfeatures` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_adfeatures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_ads`
--

DROP TABLE IF EXISTS `tbl_ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_ads` (
  `idtbl_ads` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tbl_adsdetails_idads_details` int(10) unsigned NOT NULL,
  `tbl_payment_idtbl_payment` int(10) unsigned NOT NULL,
  `tbl_users_idtbl_user` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idtbl_ads`),
  KEY `tbl_ads_FKIndex1` (`tbl_users_idtbl_user`),
  KEY `tbl_ads_FKIndex2` (`tbl_payment_idtbl_payment`),
  KEY `tbl_ads_FKIndex3` (`tbl_adsdetails_idads_details`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_ads`
--

LOCK TABLES `tbl_ads` WRITE;
/*!40000 ALTER TABLE `tbl_ads` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_adsdetails`
--

DROP TABLE IF EXISTS `tbl_adsdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_adsdetails` (
  `idads_details` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tbl_listing_category_idtbl_listing_category` int(10) unsigned NOT NULL,
  `tbl_users_idtbl_user` int(10) unsigned NOT NULL,
  `payment_status` int(1) unsigned DEFAULT 0,
  PRIMARY KEY (`idads_details`),
  KEY `tbl_adsdetails_FKIndex1` (`tbl_users_idtbl_user`),
  KEY `tbl_adsdetails_FKIndex2` (`tbl_listing_category_idtbl_listing_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_adsdetails`
--

LOCK TABLES `tbl_adsdetails` WRITE;
/*!40000 ALTER TABLE `tbl_adsdetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_adsdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_agencies`
--

DROP TABLE IF EXISTS `tbl_agencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_agencies` (
  `idtbl_agencies` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `agency_name` varchar(90) DEFAULT NULL,
  `email_address` varchar(60) DEFAULT NULL,
  `mob_no` varchar(30) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `agency_lbl_status` int(1) unsigned DEFAULT 1,
  PRIMARY KEY (`idtbl_agencies`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_agencies`
--

LOCK TABLES `tbl_agencies` WRITE;
/*!40000 ALTER TABLE `tbl_agencies` DISABLE KEYS */;
INSERT INTO `tbl_agencies` VALUES (1,'PAMA Agencies','pama@gmail.com','254700000000','Kangundo',1),(2,'KIROTE Agencies','kirote@gmail.com','254700000000','Kikuyu',1);
/*!40000 ALTER TABLE `tbl_agencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_feature_category`
--

DROP TABLE IF EXISTS `tbl_feature_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_feature_category` (
  `idtbl_feature_category` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `feature_category_lbl` varchar(60) DEFAULT NULL,
  `feature_category_status` int(1) DEFAULT 1,
  PRIMARY KEY (`idtbl_feature_category`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_feature_category`
--

LOCK TABLES `tbl_feature_category` WRITE;
/*!40000 ALTER TABLE `tbl_feature_category` DISABLE KEYS */;
INSERT INTO `tbl_feature_category` VALUES (1,'External features',1),(2,'Internal features',1),(3,'Other features',1);
/*!40000 ALTER TABLE `tbl_feature_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_features`
--

DROP TABLE IF EXISTS `tbl_features`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_features` (
  `idtbl_features` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tbl_feature_category_idtbl_feature_category` int(10) unsigned NOT NULL,
  `feature_lbl` varchar(50) DEFAULT NULL,
  `feature_status` int(1) unsigned DEFAULT 1,
  PRIMARY KEY (`idtbl_features`),
  KEY `tbl_features_FKIndex1` (`tbl_feature_category_idtbl_feature_category`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_features`
--

LOCK TABLES `tbl_features` WRITE;
/*!40000 ALTER TABLE `tbl_features` DISABLE KEYS */;
INSERT INTO `tbl_features` VALUES (1,2,'Furnshed Kitchen',1),(2,1,'Swimming pool',1),(3,3,'Schools nearby',1);
/*!40000 ALTER TABLE `tbl_features` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_listing_category`
--

DROP TABLE IF EXISTS `tbl_listing_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_listing_category` (
  `idtbl_listing_category` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tbl_listing_type_idtbl_listingtype` int(10) unsigned NOT NULL,
  `listing_category_lbl` varchar(60) DEFAULT NULL,
  `listing_category_status` int(1) unsigned DEFAULT 1,
  PRIMARY KEY (`idtbl_listing_category`),
  KEY `tbl_listing_category_FKIndex1` (`tbl_listing_type_idtbl_listingtype`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_listing_category`
--

LOCK TABLES `tbl_listing_category` WRITE;
/*!40000 ALTER TABLE `tbl_listing_category` DISABLE KEYS */;
INSERT INTO `tbl_listing_category` VALUES (1,1,'Flats And Apartment',1),(2,1,'Land',1),(3,1,'Houses',1),(4,1,'Commercial Properties',1),(5,2,'Afordable Rentals',1),(6,2,'Flats And Apartment',1),(7,2,'Houses',1),(8,2,'Commercial Properties',1),(9,2,'Bedsitters',1),(10,3,'Blog',1),(11,3,'Places',1),(12,3,'Ideas',1),(13,4,'Residential',1),(14,4,'Commerical',1),(15,5,'Add Property',1),(16,6,'Requests',1),(17,6,'Fevourites',1),(18,6,'My Properties',1),(19,6,'My Profile',1),(20,6,'Account Setting',1);
/*!40000 ALTER TABLE `tbl_listing_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_listing_type`
--

DROP TABLE IF EXISTS `tbl_listing_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_listing_type` (
  `idtbl_listingtype` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `litstingtype_lbl` varchar(30) DEFAULT NULL,
  `listingtype_status` int(1) unsigned DEFAULT 1,
  PRIMARY KEY (`idtbl_listingtype`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_listing_type`
--

LOCK TABLES `tbl_listing_type` WRITE;
/*!40000 ALTER TABLE `tbl_listing_type` DISABLE KEYS */;
INSERT INTO `tbl_listing_type` VALUES (1,'For Sale',1),(2,'To Sale',1),(3,'Advice',1),(4,'New Project',1),(5,'Add Property',1),(6,'My Account',1);
/*!40000 ALTER TABLE `tbl_listing_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_payment`
--

DROP TABLE IF EXISTS `tbl_payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_payment` (
  `idtbl_payment` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tbl_payment_channel_idtbl_payment_channel` int(10) unsigned NOT NULL,
  `payment_amount` decimal(14,2) DEFAULT 0.00,
  `balance` decimal(14,2) DEFAULT 0.00,
  `paid_on` datetime DEFAULT '0000-00-00 00:00:00',
  `paid_by` int(10) unsigned DEFAULT NULL,
  `processed_status` int(1) unsigned DEFAULT 0,
  PRIMARY KEY (`idtbl_payment`),
  KEY `tbl_payment_FKIndex1` (`tbl_payment_channel_idtbl_payment_channel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_payment`
--

LOCK TABLES `tbl_payment` WRITE;
/*!40000 ALTER TABLE `tbl_payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_payment_channel`
--

DROP TABLE IF EXISTS `tbl_payment_channel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_payment_channel` (
  `idtbl_payment_channel` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `payment_channel_lbl` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idtbl_payment_channel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_payment_channel`
--

LOCK TABLES `tbl_payment_channel` WRITE;
/*!40000 ALTER TABLE `tbl_payment_channel` DISABLE KEYS */;
INSERT INTO `tbl_payment_channel` VALUES (1,'MPESA'),(2,'VISA'),(3,'AIRTEL MONEY');
/*!40000 ALTER TABLE `tbl_payment_channel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_photos`
--

DROP TABLE IF EXISTS `tbl_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_photos` (
  `idtbl_photos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tbl_adsdetails_idads_details` int(10) unsigned NOT NULL,
  `image_name` varchar(60) DEFAULT NULL,
  `image_path` varchar(100) DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  PRIMARY KEY (`idtbl_photos`),
  KEY `tbl_photos_FKIndex1` (`tbl_adsdetails_idads_details`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_photos`
--

LOCK TABLES `tbl_photos` WRITE;
/*!40000 ALTER TABLE `tbl_photos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_request`
--

DROP TABLE IF EXISTS `tbl_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_request` (
  `idtbl_scheduled` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tbl_ads_idtbl_ads` int(10) unsigned NOT NULL,
  `customer_name` varchar(60) DEFAULT NULL,
  `mob_no` varchar(30) DEFAULT NULL,
  `email_address` varchar(40) DEFAULT NULL,
  `description` varchar(30) DEFAULT NULL,
  `tovisiton` datetime DEFAULT NULL,
  `requestedon` datetime DEFAULT NULL,
  PRIMARY KEY (`idtbl_scheduled`),
  KEY `tbl_request_FKIndex1` (`tbl_ads_idtbl_ads`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_request`
--

LOCK TABLES `tbl_request` WRITE;
/*!40000 ALTER TABLE `tbl_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_reviews`
--

DROP TABLE IF EXISTS `tbl_reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_reviews` (
  `idtbl_reviews` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tbl_ads_idtbl_ads` int(10) unsigned NOT NULL,
  `reviewed_description` text DEFAULT NULL,
  `reviewed_on` datetime DEFAULT NULL,
  `reviewed_by` varchar(60) DEFAULT NULL,
  `reviewed_status` int(1) unsigned DEFAULT 1,
  PRIMARY KEY (`idtbl_reviews`),
  KEY `tbl_reviews_FKIndex1` (`tbl_ads_idtbl_ads`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_reviews`
--

LOCK TABLES `tbl_reviews` WRITE;
/*!40000 ALTER TABLE `tbl_reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `idtbl_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tbl_userrole_idtbl_userrole` int(10) unsigned NOT NULL,
  `tbl_usercategory_idtbl_usercategory` int(10) unsigned NOT NULL,
  `reporting_to` int(10) unsigned DEFAULT 0,
  `first_name` varchar(90) DEFAULT NULL,
  `last_name` varchar(60) DEFAULT NULL,
  `mob_no` varchar(30) DEFAULT NULL,
  `email_address` varchar(30) DEFAULT NULL,
  `pword` varchar(90) DEFAULT NULL,
  `access_token` varchar(90) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(1) unsigned DEFAULT NULL,
  `last_accessdate` datetime DEFAULT NULL,
  PRIMARY KEY (`idtbl_user`),
  KEY `tbl_user_FKIndex1` (`tbl_usercategory_idtbl_usercategory`),
  KEY `tbl_user_FKIndex2` (`tbl_userrole_idtbl_userrole`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (1,1,3,1,'qqq522','qqqq','','qqq@gmail.com','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2020-10-05 22:42:29',1,NULL),(2,1,3,1,'Nicholas','Munyoki','254705206362','nicomunyoki@gmail.com','c14195788d55f7b8e349a8555fa1ad31f302d198',NULL,'2020-10-05 23:13:51',1,'2020-10-06 11:46:48');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usercategory`
--

DROP TABLE IF EXISTS `tbl_usercategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usercategory` (
  `idtbl_usercategory` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usercategory_lbl` varchar(50) DEFAULT NULL,
  `usercategory_table` varchar(50) DEFAULT NULL,
  `usercategory_status` int(1) unsigned DEFAULT 1,
  PRIMARY KEY (`idtbl_usercategory`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usercategory`
--

LOCK TABLES `tbl_usercategory` WRITE;
/*!40000 ALTER TABLE `tbl_usercategory` DISABLE KEYS */;
INSERT INTO `tbl_usercategory` VALUES (1,'Agencies','tbl_agencies',1),(2,'Brokers','tbl_brokers',1),(3,'Land lord','tbl_landloard',1);
/*!40000 ALTER TABLE `tbl_usercategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_userrole`
--

DROP TABLE IF EXISTS `tbl_userrole`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_userrole` (
  `idtbl_userrole` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userrole_lbl` varchar(50) DEFAULT NULL,
  `userrole_status` int(1) unsigned DEFAULT 1,
  PRIMARY KEY (`idtbl_userrole`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_userrole`
--

LOCK TABLES `tbl_userrole` WRITE;
/*!40000 ALTER TABLE `tbl_userrole` DISABLE KEYS */;
INSERT INTO `tbl_userrole` VALUES (1,'System admin',1),(2,'Accountant',1),(3,'Normal user',1);
/*!40000 ALTER TABLE `tbl_userrole` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-06 13:08:26
