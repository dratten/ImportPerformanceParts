-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 09:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipp`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_specifications` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_rating` int(11) NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_specifications`, `category_id`, `car_id`, `product_price`, `product_rating`, `product_image`) VALUES
(1, 'Cusco', 'Engine/Transmission Mount', 1, 4, 35000.00, 0, 'images/Drivetrain and Transmission/cemn16.jpg'),
(2, 'Exedy', 'Release Bearing', 1, 6, 6500.00, 0, 'images/Drivetrain and Transmission/erbe9.jpg'),
(3, 'Exedy', 'Stage 1 Heavy Duty Organic Disc Clutch Kit', 1, 3, 75500.00, 0, 'images/Drivetrain and Transmission/es1cn12.jpg'),
(4, 'Perrin', 'Pitch Stop Mount Black', 1, 1, 18000.00, 0, 'images/Drivetrain and Transmission/ppsn10.jpg'),
(5, 'PST', 'Carbon Fiber Driveshaft', 1, 3, 150000.00, 0, 'images/Drivetrain and Transmission/pstn14.jpg'),
(6, 'ARP', 'Case Bolt Kit', 3, 4, 20000.00, 0, 'images/Engine/arpn16.jpg'),
(7, 'ATP', 'Turbo GTX3076R Turbo 4in Inlet ', 3, 5, 245000.00, 0, 'images/Engine/atpe8.jpg'),
(8, 'Cavalli', 'Stage 2 Ball Bearing Turbo', 3, 7, 235000.00, 0, 'images/Engine/cavex.jpg'),
(9, 'Cosworth', 'Balance Belt', 3, 6, 7500.00, 0, 'images/Engine/cose9.jpg'),
(10, 'DeatschWerks', 'DW65c Series Fuel Pump Install Kit', 3, 8, 17000.00, 0, 'images/Engine/dwgen.jpg'),
(11, 'GrimmSpeed', 'Boost Solenoid ', 3, 7, 16000.00, 0, 'images/Engine/gsex.jpg'),
(12, 'Injector Dynamics', '1000cc Top Feed Fuel injectors', 3, 1, 60000.00, 0, 'images/Engine/idn10.jpg'),
(13, 'K&N', 'Pro-Series Oil Filter PS-1008', 3, 8, 2500.00, 0, 'images/Engine/kngen.jpg'),
(14, 'Tomei', 'ARMS M8265 Turbo', 3, 3, 150000.00, 0, 'images/Engine/armsn14.jpg'),
(15, 'APR Performance', 'Vortex Generator', 4, 7, 40000.00, 0, 'images/Exterior/aprex.jpg'),
(16, 'Beatrush', 'Rear Tow Hook Red', 4, 2, 15500.00, 0, 'images/Exterior/brn12.jpg'),
(17, 'GrillCraft', 'Lower Black Grill', 4, 1, 14500.00, 0, 'images/Exterior/gcn10.jpg'),
(18, 'GrimmSpeed', 'License Plate Relocation Kit', 4, 3, 16000.00, 0, 'images/Exterior/gsn14.jpg'),
(19, 'Mishimoto', 'Oil Cooler Kit', 5, 1, 45000.00, 0, 'images/Intake and Exhaust/mmn10.jpg'),
(20, 'AMS', '3in Stainless Steel Single Exit Cat Back Exhaust ', 5, 6, 110000.00, 0, 'images/Intake and Exhaust/amse9.jpg'),
(21, 'AEM', 'Cold Air Intake ', 5, 7, 32000.00, 0, 'images/Intake and Exhaust/aemex.jpg'),
(22, 'AMS', 'Front Mount Intercooler', 5, 5, 75000.00, 0, 'images/Intake and Exhaust/amse8.jpg'),
(23, 'AMS', 'Performance Intake Kit', 5, 7, 52000.00, 0, 'images/Intake and Exhaust/amsex.jpg'),
(24, 'Cosworth', 'High Flow Air Intake System', 5, 4, 26000.00, 0, 'images/Intake and Exhaust/cosn16.jpg'),
(25, 'Cusco', 'Turbo Heat Shield', 5, 2, 13000.00, 0, 'images/Intake and Exhaust/cusn12.jpg'),
(26, 'DEI', 'Titanium Exhaust Wrap 2in x 50ft', 5, 8, 85000.00, 0, 'images/Intake and Exhaust/deigen.jpg'),
(27, 'GrimmSpeed', 'Phenolic Thermal 8mm Spacer', 5, 8, 23000.00, 0, 'images/Intake and Exhaust/gsgen.jpg'),
(28, 'K&N', 'Apollo Cold Air Intake', 5, 3, 12500.00, 0, 'images/Intake and Exhaust/knn14.jpg'),
(29, 'Mishimoto', 'Impreza Radiator', 5, 2, 38000.00, 0, 'images/Intake and Exhaust/mmn12.jpg'),
(30, 'AEM', 'UEGO Failsafe Wideband Boost Gauge', 6, 8, 33000.00, 0, 'images/Interior/aemgen.jpg'),
(31, 'ATI', 'Triple Meter Center Dash Pod', 6, 4, 16000.00, 0, 'images/Interior/atin16.jpg'),
(32, 'Corbeau', '2 Inch 4 Point Bolt-In Yellow Harness', 6, 8, 8500.00, 0, 'images/Interior/corgen.jpg'),
(33, 'Defi', 'Red Racer Temperature Gauge', 6, 8, 23000.00, 0, 'images/Interior/defigen.jpg'),
(34, 'Prova', 'O-Shaped Steering Wheel ', 6, 2, 85000.00, 0, 'images/Interior/provn12.jpg'),
(35, 'Sparco', 'Carbon Fiber Tuning Pedal Kit', 6, 8, 8000.00, 0, 'images/Interior/spgen.jpg'),
(36, 'Subaru', 'OEM STI Duracon Shift Black Knob 5spd M/T', 6, 1, 8500.00, 0, 'images/Interior/subn10.jpg'),
(37, 'APR', 'Carbon Fiber Brake Ducts', 7, 3, 36000.00, 0, 'images/Suspension and Braking/aprn14.jpg'),
(38, 'BC', 'Racing BR Coilovers', 7, 6, 135000.00, 0, 'images/Suspension and Braking/bce9.jpg'),
(39, 'DBA', '4000 Series T-Slotted Rear Rotor Pair', 7, 5, 62000.00, 0, 'images/Suspension and Braking/dbae8.jpg'),
(40, 'Eibach', 'Pro-Kit Lowering Springs', 7, 2, 60000.00, 0, 'images/Suspension and Braking/ein12.jpg'),
(41, 'Energy Suspension', 'Red Hyper-Flex Master Bushing Set', 7, 1, 26000.00, 0, 'images/Suspension and Braking/esn10.jpg'),
(42, 'GoodRidge', 'G-Stop Stainless Steel Brake Lines', 7, 4, 20000.00, 0, 'images/Suspension and Braking/grn16.jpg'),
(43, 'KW', 'Coilovers Variant 3 Inox-Line', 7, 5, 300000.00, 0, 'images/Suspension and Braking/kwe8.jpg'),
(44, 'Tein', 'Street Basis Coilovers', 7, 4, 80000.00, 0, 'images/Suspension and Braking/tn16.jpg'),
(45, 'Cusco', 'Smart Cross Lug Wrench', 8, 8, 6000.00, 0, 'images/Wheels/cusgen.jpg'),
(46, 'KICS', 'R40 16+4 Piece Neo Chrome 12x1.25 Lug Nuts', 8, 8, 28000.00, 0, 'images/Wheels/kicsgen.jpg'),
(47, 'Wheel Mate', 'Muteki Open End Black Deep 12x1.25 Lug Nuts', 8, 8, 8500.00, 0, 'images/Wheels/wmgen.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_car_id_foreign` (`car_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `car_models` (`car_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
