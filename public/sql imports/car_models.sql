-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 10:32 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipp_kenya`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_models`
--



INSERT INTO `car_models` (`car_id`, `car_brand`, `car_model`, `car_code`) VALUES
(1, 'Subaru', 'Impreza STI', 'N10'),
(2, 'Subaru ', 'Impreza STI\r\n', 'N12'),
(3, 'Subaru', 'Impreza STI', 'N14'),
(4, 'Subaru ', 'Impreza STI', 'N16'),
(5, 'Mitsubishi', 'Evolution', 'VIII'),
(6, 'Mitsubishi', 'Evolution', 'IX\r\n'),
(7, 'Mitsubishi', 'Evolution', 'X'),
(8, 'Generic', '', '');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
