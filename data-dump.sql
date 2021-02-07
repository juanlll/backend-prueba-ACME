-- MySQL dump 10.13  Distrib 8.0.22, for osx10.15 (x86_64)
--
-- Host: localhost    Database: acme
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `assignments`
--

DROP TABLE IF EXISTS `assignments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `assignments` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `driver_id` int unsigned NOT NULL,
  `process_id` int unsigned NOT NULL,
  `vehicle_id` int unsigned NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `assignments_driver_id_foreign` (`driver_id`),
  KEY `assignments_process_id_foreign` (`process_id`),
  KEY `assignments_vehicle_id_foreign` (`vehicle_id`),
  CONSTRAINT `assignments_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `persons` (`id`),
  CONSTRAINT `assignments_process_id_foreign` FOREIGN KEY (`process_id`) REFERENCES `processes` (`id`),
  CONSTRAINT `assignments_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assignments`
--

LOCK TABLES `assignments` WRITE;
/*!40000 ALTER TABLE `assignments` DISABLE KEYS */;
INSERT INTO `assignments` VALUES (1,1,2,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(2,3,4,4,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(3,2,1,1,1,'2021-02-07 06:27:53','2021-02-07 06:27:53'),(4,1,2,1,1,'2021-02-07 07:46:14','2021-02-07 07:46:14'),(5,1,2,1,1,'2021-02-07 07:46:17','2021-02-07 07:46:17'),(6,1,2,1,1,'2021-02-07 07:46:19','2021-02-07 07:46:19');
/*!40000 ALTER TABLE `assignments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cities` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` VALUES (1,'Port Lee',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(2,'South Mireyaville',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(3,'Estellaton',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(4,'Port Rosemariehaven',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(5,'Ryanberg',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(6,'Hertafort',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(7,'Busterville',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(8,'Port Lavonside',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(9,'Wilhelmborough',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(10,'Kathlynland',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(11,'Lake Royal',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(12,'West Amelie',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(13,'South Olashire',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(14,'Doylechester',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(15,'Port Lelahaven',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(16,'Kubside',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(17,'Lowellstad',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(18,'Murazikfurt',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(19,'West Jedediahport',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(20,'Domenicotown',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(21,'East Clementina',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(22,'Donatostad',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(23,'Garfieldport',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(24,'Port Tom',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(25,'East Odessamouth',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(26,'East Justiceburgh',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(27,'Jackfort',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(28,'Rafaelland',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(29,'Lake Jakaylashire',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(30,'Lourdesside',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(31,'South Aaron',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(32,'Leonardomouth',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(33,'Lake Saul',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(34,'Haagchester',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(35,'New Velmafurt',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(36,'Alessandroland',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(37,'South Murlmouth',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(38,'Jaydenburgh',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(39,'Kennystad',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(40,'Port Billie',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(41,'South Jaquelinebury',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(42,'Watsicafurt',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(43,'Mooreborough',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(44,'Port Shanelleville',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(45,'Kiarramouth',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(46,'South Audra',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(47,'Darrinborough',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(48,'Lake Chyna',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(49,'Lutherberg',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(50,'D\'Amoremouth',1,'2021-02-07 05:37:37','2021-02-07 05:37:37');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (8,'2014_10_12_100000_create_password_resets_table',1),(9,'2021_02_05_194928_create_cities_table',1),(10,'2021_02_05_194938_create_people_table',1),(11,'2021_02_05_195124_create_type_vechicles_table',1),(12,'2021_02_05_195125_create_ processes_table',1),(13,'2021_02_05_195126_create_vehicles_table',1),(14,'2021_02_05_195202_create_assignments_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persons`
--

DROP TABLE IF EXISTS `persons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `persons` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_names` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint NOT NULL,
  `city_id` int unsigned NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `persons_city_id_foreign` (`city_id`),
  CONSTRAINT `persons_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persons`
--

LOCK TABLES `persons` WRITE;
/*!40000 ALTER TABLE `persons` DISABLE KEYS */;
INSERT INTO `persons` VALUES (1,'Quinn','RuthEEE','Brekke','75826 Marge Keys Apt. 753\nTorphyfurt, NC 29487',1234567899,1,1,'2021-02-07 05:37:37','2021-02-07 09:26:41'),(2,'Constance','Giovanny','Prohaska','100 Ariane Islands Apt. 486\nDooleyfort, MN 72875-1077',336259468,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(3,'Leonor','Titus','Osinski','4147 Heller Plain\nSouth Anabelshire, FL 09409-3160',634086196,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(4,'Salvatore','Princess','Rath','40566 Esmeralda Glen Suite 026\nDoloresborough, VA 81461',978060667,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(5,'Jermaine','Arturo','Little','680 Fay Green Apt. 416\nGrimesport, OH 00952',340724571,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(6,'Judson','Henry','Feeney','7221 Murazik Estates\nPort Jayden, IL 29295',838771857,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(7,'Loy','Winifred','Lehner','6855 Ledner Circle Suite 935\nHauckview, VT 10635',435964219,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(8,'Dolores','Jade','Feeney','5521 Emmerich Mill\nAminahaven, AK 75501',904841671,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(9,'Gisselle','Darius','Jacobson','580 Newton Ford\nNew Herbertfort, DC 93246',375270233,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(10,'Elijah','Lazaro','King','4088 Christiansen Well\nNew Jadon, NY 28144',541264678,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(11,'Sarah','Gerald','Quitzon','299 Name Parks Suite 133\nWest Rhettburgh, NY 45812',902899083,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(12,'Christina','Anastasia','Pollich','5837 Heathcote Drive\nNorth Jamaal, NM 73912-8039',884305520,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(13,'Garett','Freddie','Koch','2666 Jade Lane Apt. 459\nLake Rosemary, WV 80119',808474656,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(14,'Turner','Eunice','Graham','88275 Mafalda Loaf\nWest Clairburgh, OR 50887',800274434,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(15,'Blake','Lavon','Hahn','415 Bernier Motorway Apt. 181\nWest Henryhaven, IA 87060-2012',319511179,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(16,'Emanuel','Layla','Greenholt','77505 Bartell Views Apt. 138\nJakubowskiview, SC 29583',408079502,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(17,'Dillan','Jamal','Hodkiewicz','2612 Mikayla Ferry\nHerminaview, AZ 21606-9720',575115803,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(18,'Charles','Rashawn','Jaskolski','3758 Homenick Forge Suite 314\nPort Elenorfurt, OH 31689',651348114,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(19,'Cooper','Michelle','Osinski','6230 Bertha Expressway\nBruenchester, CA 71487',516996646,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(20,'Belle','Jerrell','Rice','148 Marvin Curve\nCarolanneshire, AL 50769',474422439,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(21,'Zetta','Raheem','Sawayn','52058 Carter Glen Suite 560\nChazview, MT 11529-2834',720922842,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(22,'Santina','Cecile','Conroy','291 Ethyl Avenue\nSouth Nedmouth, AK 30185-0316',843990894,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(23,'Reece','Abbigail','Flatley','8850 Pink Port Apt. 476\nLake Antonettefort, OK 49407',725333188,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(24,'Tatyana','Deborah','Kemmer','3476 Carmelo Prairie Suite 358\nDominiquetown, VT 16200',450294081,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(25,'Keagan','Reuben','Heathcote','853 Nicolas Summit Apt. 745\nMarkusfurt, RI 19613',753835514,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(26,'Gabrielle','Mathew','Stiedemann','932 Greenfelder Crossroad Suite 379\nCamillefurt, ME 13887-2646',682273533,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(27,'Kasey','Keara','Rodriguez','255 Curt Place Apt. 263\nPort Bruce, NJ 84689-5971',727200283,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(28,'Elsie','Precious','Cormier','1984 Christa Wall Suite 368\nTatyanatown, CA 31349-7590',738043566,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(29,'Eli','Sadye','Harvey','82711 Trantow Island\nGudrunborough, MA 30456-4127',371426871,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(30,'Raina','Mack','Cormier','226 Laron Common Suite 873\nDouglasside, OH 64789-3702',795893911,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(31,'Nona','Christ','McCullough','3394 Avery Summit\nAliyahtown, UT 86683-8057',450143754,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(32,'Jewel','Luigi','Boehm','47568 Murray Terrace\nMullerberg, FL 70257-2825',537313164,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(33,'Kavon','Aglae','Schmidt','40134 Chelsea Trace Apt. 195\nEast Kip, CA 20608-4554',402786525,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(34,'Alivia','Mauricio','Stiedemann','44176 Jadyn Junctions\nEast Julien, TX 13786-6217',563196997,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(35,'Katelin','Paul','Veum','597 Kuhlman Turnpike Suite 060\nWest Beatriceside, ID 52043',590105246,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(36,'Evans','Lea','Mohr','77944 Kovacek Road Suite 615\nO\'Connellborough, FL 18175-8082',455417116,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(37,'Brannon','April','Fritsch','23893 Maye Meadow Suite 906\nSouth Jeromy, IA 11128',913150529,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(38,'Marlee','Shyanne','Heathcote','712 Destinee Loaf Apt. 025\nSengertown, MT 97693-8877',672955064,1,1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(39,'Ebba','Mason','Murphy','860 Alexys Overpass Apt. 402\nNorth Armandmouth, NM 73890',533102355,1,0,'2021-02-07 05:37:37','2021-02-07 09:26:08'),(40,'Merlin','Felicia','Hodkiewicz','71418 Langosh Cliff\nWest Alberto, CO 35064-0469',640560613,1,0,'2021-02-07 05:37:37','2021-02-07 09:26:08'),(41,'Reagan','Leif','Block','697 Kihn Vista Apt. 763\nTarynton, VT 04977-7289',917345432,1,0,'2021-02-07 05:37:37','2021-02-07 09:26:07'),(42,'Maxwell','Jerald','Cartwright','1552 Aleen Tunnel\nSandrineshire, OH 32629-9103',411069090,1,0,'2021-02-07 05:37:37','2021-02-07 09:26:06'),(43,'Kayley','Fred','Stamm','8458 Dibbert Rue Apt. 742\nParisport, AK 92986-9065',901082014,1,0,'2021-02-07 05:37:37','2021-02-07 09:26:06'),(44,'Francisco','Keyshawn','Schumm','428 Beatty Oval\nWuckertfurt, MN 65056',668680900,1,0,'2021-02-07 05:37:37','2021-02-07 09:24:37'),(45,'Vergie','Eleazar','Keebler','74538 Alek Lakes Suite 589\nEast Ricky, WI 71870-8859',577076265,1,0,'2021-02-07 05:37:37','2021-02-07 09:26:05'),(46,'Randy','Alyson','Emmerich','47371 Grady Pass Suite 787\nJohnsonmouth, MS 65191',324820410,1,0,'2021-02-07 05:37:37','2021-02-07 09:26:04'),(47,'Jamison','Rusty','Hayes','58469 D\'Amore Brook\nNew Horacio, RI 60589-9842',602104090,1,0,'2021-02-07 05:37:37','2021-02-07 09:24:16'),(48,'Madelyn','Otto','King','99602 Enola Extension\nEast Ramonside, AK 08100',563931949,1,0,'2021-02-07 05:37:37','2021-02-07 09:24:13'),(49,'Trace','Nellie','Gislason','9873 Koelpin Hill\nDenesikport, FL 88384-9654',876341356,1,0,'2021-02-07 05:37:37','2021-02-07 09:24:13'),(50,'Joannie','Kennith','Johns','4557 Gabe Bypass\nCarrollmouth, LA 50051',885001955,1,0,'2021-02-07 05:37:37','2021-02-07 09:24:56'),(51,'asdasd','asdas','asdasdasd','asdasd',5151,2,1,'2021-02-07 09:28:07','2021-02-07 09:28:07');
/*!40000 ALTER TABLE `persons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `processes`
--

DROP TABLE IF EXISTS `processes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `processes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `processes`
--

LOCK TABLES `processes` WRITE;
/*!40000 ALTER TABLE `processes` DISABLE KEYS */;
INSERT INTO `processes` VALUES (1,'Process #1',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(2,'Process #2',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(3,'Process #3',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(4,'Process #4',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(5,'Process #5',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(6,'Process #6',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(7,'Process #7',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(8,'Process #8',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(9,'Process #9',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(10,'Process #10',1,'2021-02-07 05:37:37','2021-02-07 05:37:37');
/*!40000 ALTER TABLE `processes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_vehicles`
--

DROP TABLE IF EXISTS `type_vehicles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `type_vehicles` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_vehicles`
--

LOCK TABLES `type_vehicles` WRITE;
/*!40000 ALTER TABLE `type_vehicles` DISABLE KEYS */;
INSERT INTO `type_vehicles` VALUES (1,'Particular',1,'2021-02-07 05:37:37','2021-02-07 05:37:37'),(2,'Publico',1,'2021-02-07 05:37:37','2021-02-07 05:37:37');
/*!40000 ALTER TABLE `type_vehicles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vehicles` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `vehicle_plate` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int unsigned NOT NULL,
  `owner_id` int unsigned NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vehicles_type_id_foreign` (`type_id`),
  KEY `vehicles_owner_id_foreign` (`owner_id`),
  CONSTRAINT `vehicles_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `persons` (`id`),
  CONSTRAINT `vehicles_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `type_vehicles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicles`
--

LOCK TABLES `vehicles` WRITE;
/*!40000 ALTER TABLE `vehicles` DISABLE KEYS */;
INSERT INTO `vehicles` VALUES (1,'XEE-777','red','BAJAJ',1,1,0,'2021-02-07 05:37:37','2021-02-07 08:24:06'),(2,'ASE-458','red','BEIJING',1,2,0,'2021-02-07 05:37:37','2021-02-07 07:46:03'),(3,'PEI-413','red','BENTLEY',2,3,0,'2021-02-07 05:37:37','2021-02-07 07:46:02'),(4,'RWL-057','red','BMW',2,4,0,'2021-02-07 05:37:37','2021-02-07 07:46:02'),(5,'234234','RED','HONDA',2,1,0,'2021-02-07 06:08:17','2021-02-07 07:46:02'),(6,'234-234','RED','HONDA',2,1,0,'2021-02-07 06:08:26','2021-02-07 07:46:01'),(7,'234-234','RED','HONDA',2,1,0,'2021-02-07 06:08:32','2021-02-07 07:46:01'),(8,'234234','RED','HONDA',2,1,0,'2021-02-07 06:08:40','2021-02-07 07:46:01'),(9,'DAS-232','BLUESS','HONDA',2,1,0,'2021-02-07 06:08:44','2021-02-07 07:46:00'),(10,'123123','123123','123123123',1,3,0,'2021-02-07 07:12:17','2021-02-07 07:41:24'),(11,'123123','123123','123123123',1,3,0,'2021-02-07 07:12:18','2021-02-07 07:41:23'),(12,'1233221','dsadasd','adsasdasd',1,2,0,'2021-02-07 07:13:34','2021-02-07 07:40:05'),(13,'123123','123213','123123',1,1,0,'2021-02-07 07:17:53','2021-02-07 07:40:03'),(14,'12H-223','123213','12312312',1,1,0,'2021-02-07 07:18:46','2021-02-07 07:40:02'),(15,'KHDA-23','BLUE','QQQQQ',2,2,0,'2021-02-07 07:35:29','2021-02-07 07:39:59'),(16,'XSE-324','RED','AAAAA',1,2,0,'2021-02-07 07:42:12','2021-02-07 07:45:59'),(17,'212313','RES','AZUL',1,3,0,'2021-02-07 09:17:45','2021-02-07 09:26:34');
/*!40000 ALTER TABLE `vehicles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-07  0:02:41
