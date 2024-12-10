-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 09:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tablica`
--

CREATE TABLE `tablica` (
  `ID` int(11) NOT NULL,
  `naslov_djela` varchar(100) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `godina_izdanja` int(11) DEFAULT NULL,
  `kratak_sadrzaj` text NOT NULL,
  `vrsta_djela` varchar(30) NOT NULL,
  `tema_djela` varchar(200) NOT NULL,
  `glavni_likovi` text NOT NULL,
  `citati` text DEFAULT NULL,
  `kompozicija_djela` text NOT NULL,
  `knjizevna_vrsta` varchar(50) NOT NULL,
  `knjizevno_razdoblje` varchar(50) NOT NULL,
  `stilska_sredstva` text NOT NULL,
  `jezicno_stilska_analiza` text NOT NULL,
  `povijesni_kontekst` text NOT NULL,
  `osobni_osvrt` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `tablica`
--

INSERT INTO `tablica` (`ID`, `naslov_djela`, `autor`, `godina_izdanja`, `kratak_sadrzaj`, `vrsta_djela`, `tema_djela`, `glavni_likovi`, `citati`, `kompozicija_djela`, `knjizevna_vrsta`, `knjizevno_razdoblje`, `stilska_sredstva`, `jezicno_stilska_analiza`, `povijesni_kontekst`, `osobni_osvrt`) VALUES
(1, 'Prijan Lovro', 'August Šenoa', 1873, 'aa', 'Roman', 'aaa', 'aaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tablica`
--
ALTER TABLE `tablica`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tablica`
--
ALTER TABLE `tablica`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
