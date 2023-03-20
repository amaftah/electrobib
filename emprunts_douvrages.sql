-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 04:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emprunts_douvrages`
--

-- --------------------------------------------------------

--
-- Table structure for table `adherant`
--

CREATE TABLE `adherant` (
  `ID_adherant` int(11) NOT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Nom` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Adress` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Cin` varchar(255) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `Nickname` varchar(255) DEFAULT NULL,
  `date_compte` date DEFAULT NULL,
  `pénalité` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bibliothécair`
--

CREATE TABLE `bibliothécair` (
  `Id_bib` int(11) NOT NULL,
  `Nom_bib` varchar(255) DEFAULT NULL,
  `Prénom_bib` varchar(255) DEFAULT NULL,
  `Email_bib` varchar(255) DEFAULT NULL,
  `Password_bib` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `demprunt`
--

CREATE TABLE `demprunt` (
  `ID_demprunt` int(11) NOT NULL,
  `date_emp` date DEFAULT NULL,
  `date_eff` date DEFAULT NULL,
  `adherant_ID` int(11) DEFAULT NULL,
  `ouvrage_ID` int(11) DEFAULT NULL,
  `ouvrage_edition` varchar(255) DEFAULT NULL,
  `bib_id` int(11) NOT NULL,
  `reserve_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ouvrage`
--

CREATE TABLE `ouvrage` (
  `Code_ouvrage` int(11) NOT NULL,
  `Titre_ouvr` varchar(255) DEFAULT NULL,
  `Nom_auteur` varchar(255) DEFAULT NULL,
  `Etat_ouvr` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Date_edition` date DEFAULT NULL,
  `Numbre_pages` varchar(255) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `réservation`
--

CREATE TABLE `réservation` (
  `Reserve_id` int(11) NOT NULL,
  `Reserve_date` varchar(255) DEFAULT NULL,
  `Reserve_validation` varchar(255) DEFAULT NULL,
  `adh_id` int(11) NOT NULL,
  `ovr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adherant`
--


--
-- Indexes for table `bibliothécair`
--
ALTER TABLE `bibliothécair`
  ADD PRIMARY KEY (`Id_bib`);

--
-- Indexes for table `demprunt`
--
ALTER TABLE `demprunt`
  ADD KEY `bib_id` (`bib_id`),
  ADD KEY `reserve_id` (`reserve_id`);

--
-- Indexes for table `ouvrage`
--
ALTER TABLE `ouvrage`
  ADD PRIMARY KEY (`Code_ouvrage`);

--
-- Indexes for table `réservation`
--
ALTER TABLE `réservation`
  ADD PRIMARY KEY (`Reserve_id`),
  ADD KEY `adh_id` (`adh_id`),
  ADD KEY `ovr_id` (`ovr_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `demprunt`
--
ALTER TABLE `demprunt`
  ADD CONSTRAINT `demprunt_ibfk_1` FOREIGN KEY (`bib_id`) REFERENCES `bibliothécair` (`Id_bib`),
  ADD CONSTRAINT `demprunt_ibfk_2` FOREIGN KEY (`bib_id`) REFERENCES `bibliothécair` (`Id_bib`),
  ADD CONSTRAINT `demprunt_ibfk_3` FOREIGN KEY (`reserve_id`) REFERENCES `réservation` (`Reserve_id`);

--
-- Constraints for table `réservation`
--
ALTER TABLE `réservation`
 
  ADD CONSTRAINT `réservation_ibfk_2` FOREIGN KEY (`ovr_id`) REFERENCES `ouvrage` (`Code_ouvrage`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
