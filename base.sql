-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2016 at 03:24 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinamicko`
--
CREATE DATABASE IF NOT EXISTS `dinamicko` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dinamicko`;

-- --------------------------------------------------------

--
-- Table structure for table `najduzipodstring`
--

CREATE TABLE `najduzipodstring` (
  `id` int(11) NOT NULL,
  `string1` varchar(30) DEFAULT NULL,
  `string2` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `najduzipodstring`
--

INSERT INTO `najduzipodstring` (`id`, `string1`, `string2`) VALUES
(1, 'abcdefgab', 'becdgrefag'),
(2, 'radovanovic', 'jovanovic');

-- --------------------------------------------------------

--
-- Table structure for table `polindrom`
--

CREATE TABLE `polindrom` (
  `id` int(11) NOT NULL,
  `str` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polindrom`
--

INSERT INTO `polindrom` (`id`, `str`) VALUES
(1, 'adbcecba'),
(2, 'milanimo'),
(3, 'ivicarcivri');

-- --------------------------------------------------------

--
-- Table structure for table `problemranca`
--

CREATE TABLE `problemranca` (
  `id` int(11) NOT NULL,
  `cena` int(11) DEFAULT NULL,
  `zapremina` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problemranca`
--

INSERT INTO `problemranca` (`id`, `cena`, `zapremina`) VALUES
(1, 3, 2),
(2, 4, 3),
(3, 5, 3),
(4, 7, 4),
(5, 6, 5),
(6, 8, 7),
(7, 14, 8),
(8, 17, 10),
(9, 20, 11);

-- --------------------------------------------------------

--
-- Table structure for table `rastuci`
--

CREATE TABLE `rastuci` (
  `id` int(11) NOT NULL,
  `broj` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rastuci`
--

INSERT INTO `rastuci` (`id`, `broj`) VALUES
(1, 4),
(2, 6),
(3, -1),
(4, 5),
(5, 10),
(6, 4),
(7, 8),
(8, 15),
(9, 6),
(10, -4),
(11, -3),
(12, 21),
(13, 33),
(14, 4),
(15, -45),
(16, 44);

-- --------------------------------------------------------

--
-- Table structure for table `redkarte`
--

CREATE TABLE `redkarte` (
  `id` int(11) NOT NULL,
  `vreme` int(11) NOT NULL,
  `udruzenovreme` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redkarte`
--

INSERT INTO `redkarte` (`id`, `vreme`, `udruzenovreme`) VALUES
(1, 5, 5),
(2, 4, 8),
(3, 6, 10),
(4, 2, 11),
(5, 5, 13),
(6, 9, 8),
(7, 4, 13),
(8, 5, 8),
(9, 12, 15),
(10, 2, 8),
(11, 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `secenjestapica`
--

CREATE TABLE `secenjestapica` (
  `id` int(11) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secenjestapica`
--

INSERT INTO `secenjestapica` (`id`, `cena`) VALUES
(1, 1),
(2, 5),
(3, 8),
(4, 9),
(5, 10),
(6, 17),
(7, 17),
(8, 20),
(9, 24),
(10, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `najduzipodstring`
--
ALTER TABLE `najduzipodstring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polindrom`
--
ALTER TABLE `polindrom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problemranca`
--
ALTER TABLE `problemranca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rastuci`
--
ALTER TABLE `rastuci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redkarte`
--
ALTER TABLE `redkarte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secenjestapica`
--
ALTER TABLE `secenjestapica`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `najduzipodstring`
--
ALTER TABLE `najduzipodstring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `polindrom`
--
ALTER TABLE `polindrom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `problemranca`
--
ALTER TABLE `problemranca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `rastuci`
--
ALTER TABLE `rastuci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `redkarte`
--
ALTER TABLE `redkarte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `secenjestapica`
--
ALTER TABLE `secenjestapica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
