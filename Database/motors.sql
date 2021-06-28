-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 12:38 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartmethod`
--

-- --------------------------------------------------------

--
-- Table structure for table `motors`
--

CREATE TABLE `motors` (
  `Motor1` int(11) NOT NULL,
  `Motor2` int(11) NOT NULL,
  `Motor3` int(11) NOT NULL,
  `Motor4` int(11) NOT NULL,
  `Motor5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `motors`
--

INSERT INTO `motors` (`Motor1`, `Motor2`, `Motor3`, `Motor4`, `Motor5`) VALUES
(97, 0, 0, 0, 0),
(97, 0, 38, 88, 83),
(97, 101, 38, 88, 83),
(97, 40, 38, 88, 83),
(97, 40, 38, 88, 0),
(97, 40, 38, 55, 0),
(97, 40, 38, 55, 0),
(180, 180, 180, 180, 180),
(24, 180, 180, 180, 180),
(24, 180, 180, 16, 180),
(19, 180, 180, 16, 180);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
