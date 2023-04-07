-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2023 at 03:55 PM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isco`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int NOT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interlocuteur`
--

DROP TABLE IF EXISTS `interlocuteur`;
CREATE TABLE IF NOT EXISTS `interlocuteur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `civility` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `cellPhone` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interlocuteur_has_client`
--

DROP TABLE IF EXISTS `interlocuteur_has_client`;
CREATE TABLE IF NOT EXISTS `interlocuteur_has_client` (
  `Interlocuteur_id` int NOT NULL,
  `Client_id` int NOT NULL,
  PRIMARY KEY (`Interlocuteur_id`,`Client_id`),
  KEY `fk_Interlocuteur_has_Client_Client1_idx` (`Client_id`),
  KEY `fk_Interlocuteur_has_Client_Interlocuteur1_idx` (`Interlocuteur_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `itc`
--

DROP TABLE IF EXISTS `itc`;
CREATE TABLE IF NOT EXISTS `itc` (
  `id` int NOT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `quoteNumber` varchar(45) DEFAULT NULL,
  `Interlocuteur_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ITC_Interlocuteur1_idx` (`Interlocuteur_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

DROP TABLE IF EXISTS `quote`;
CREATE TABLE IF NOT EXISTS `quote` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `num_devis` int DEFAULT NULL,
  `num_affaire` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `offre` varchar(45) DEFAULT NULL,
  `Client_id` int NOT NULL,
  `Interlocuteur_id` int NOT NULL,
  `ITC_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Quote_Client_idx` (`Client_id`),
  KEY `fk_Quote_Interlocuteur1_idx` (`Interlocuteur_id`),
  KEY `fk_Quote_ITC1_idx` (`ITC_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quote_has_service`
--

DROP TABLE IF EXISTS `quote_has_service`;
CREATE TABLE IF NOT EXISTS `quote_has_service` (
  `Quote_id` int NOT NULL,
  `Service_id` int NOT NULL,
  PRIMARY KEY (`Quote_id`,`Service_id`),
  KEY `fk_Quote_has_Service_Service1_idx` (`Service_id`),
  KEY `fk_Quote_has_Service_Quote1_idx` (`Quote_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `catalogRef` int DEFAULT NULL,
  `EANCode` int DEFAULT NULL,
  `constructorRef` varchar(45) DEFAULT NULL,
  `supplierName` varchar(45) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `totalCostPriceExcludingVAT` decimal(25,0) DEFAULT NULL,
  `coef` decimal(25,0) DEFAULT NULL,
  `totalSellingPriceExcludingVAT` decimal(25,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
