-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 10:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboratorio`
--

-- --------------------------------------------------------

--
-- Table structure for table `laboratorio_final`
--

CREATE TABLE `laboratorio_final` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `PrimerApellido` varchar(40) NOT NULL,
  `SegundoApellido` varchar(40) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Login` varchar(10) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laboratorio_final`
--

INSERT INTO `laboratorio_final` (`id`, `Nombre`, `PrimerApellido`, `SegundoApellido`, `Email`, `Login`, `Password`) VALUES
(12, 'vdsvdfr', 'dfgbfgb', 'fgbfg', 'fgbfgb@bvfgb.vfgf', 'fgfgnhfgng', ''),
(13, 'gbfgb', 'fgbfghb', 'fgbgfhbn', 'fghnbghn@ghn.tgjyu', 'fghnghn', ''),
(14, 'fthfth', 'tdrgyrth', 'rtrth', 'rthyrt@fhfh.hy', 'ryhtyhy', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laboratorio_final`
--
ALTER TABLE `laboratorio_final`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laboratorio_final`
--
ALTER TABLE `laboratorio_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
