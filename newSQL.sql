-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 09:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `importperformancedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_models`
--

CREATE TABLE `car_models` (
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `car_brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_models`
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

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Drivetrain and Transmission'),
(2, 'Electronics'),
(3, 'Engine'),
(4, 'Exterior'),
(5, 'Intake and Exhaust'),
(6, 'Interior'),
(7, 'Suspension and Braking'),
(8, 'Wheels');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companydetails`
--

CREATE TABLE `companydetails` (
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state/province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_14_183059_create_categories_table', 1),
(5, '2020_05_14_183928_create_products_table', 1),
(6, '2020_05_14_184025_create_companydetails_table', 1),
(7, '2020_05_14_184053_create_comments_table', 1),
(8, '2020_05_14_184150_create_payments_table', 1),
(9, '2020_06_18_183804_create_car_models_table', 1),
(10, '2020_06_19_103157_set_product_table_foreign_constraints', 1),
(11, '2020_07_01_204555_set_payments_table_foreign_constraints', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `payment_status` tinyint(1) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Cusco', 'Engine/Transmission Mount', 1, 4, 35000.00, 0, 'Drivetrain and Transmission\\cemn16'),
(2, 'Exedy', 'Release Bearing', 1, 6, 6500.00, 0, 'Drivetrain and Transmission\\erbe9'),
(3, 'Exedy', 'Stage 1 Heavy Duty Organic Disc Clutch Kit', 1, 3, 75500.00, 0, 'Drivetrain and Transmission\\es1cn12'),
(4, 'Perrin', 'Pitch Stop Mount Black', 1, 1, 18000.00, 0, 'Drivetrain and Transmission\\ppsn10'),
(5, 'PST', 'Carbon Fiber Driveshaft', 1, 3, 150000.00, 0, 'Drivetrain and Transmission\\pstn14'),
(6, 'ARP', 'Case Bolt Kit', 3, 4, 20000.00, 0, 'Engine\\arpn16'),
(7, 'ATP', 'Turbo GTX3076R Turbo 4in Inlet ', 3, 5, 245000.00, 0, 'Engine\\atpe8'),
(8, 'Cavalli', 'Stage 2 Ball Bearing Turbo', 3, 7, 235000.00, 0, 'Engine\\cavex'),
(9, 'Cosworth', 'Balance Belt', 3, 6, 7500.00, 0, 'Engine\\cose9'),
(10, 'DeatschWerks', 'DW65c Series Fuel Pump Install Kit', 3, 8, 17000.00, 0, 'Engine\\dwgen'),
(11, 'GrimmSpeed', 'Boost Solenoid ', 3, 7, 16000.00, 0, 'Engine\\gsex'),
(12, 'Injector Dynamics', '1000cc Top Feed Fuel injectors', 3, 1, 60000.00, 0, 'Engine\\idn10'),
(13, 'K&N', 'Pro-Series Oil Filter PS-1008', 3, 8, 2500.00, 0, 'Engine\\kngen'),
(14, 'Tomei', 'ARMS M8265 Turbo', 3, 3, 150000.00, 0, 'Engine\\armsn14'),
(15, 'APR Performance', 'Vortex Generator', 4, 7, 40000.00, 0, 'Exterior\\aprex'),
(16, 'Beatrush', 'Rear Tow Hook Red', 4, 2, 15500.00, 0, 'Exterior\\brn12'),
(17, 'GrillCraft', 'Lower Black Grill', 4, 1, 14500.00, 0, 'Exterior\\gcn10'),
(18, 'GrimmSpeed', 'License Plate Relocation Kit', 4, 3, 16000.00, 0, 'Exterior\\gsn14'),
(19, 'Mishimoto', 'Oil Cooler Kit', 5, 1, 45000.00, 0, 'Intake and Exhaust\\mmn10'),
(20, 'AMS', '3in Stainless Steel Single Exit Cat Back Exhaust ', 5, 6, 110000.00, 0, 'Intake and Exhaust\\amse9'),
(21, 'AEM', 'Cold Air Intake ', 5, 7, 32000.00, 0, 'Intake and Exhaust\\aemex'),
(22, 'AMS', 'Front Mount Intercooler', 5, 5, 75000.00, 0, 'Intake and Exhaust\\amse8'),
(23, 'AMS', 'Performance Intake Kit', 5, 7, 52000.00, 0, 'Intake and Exhaust\\amsex'),
(24, 'Cosworth', 'High Flow Air Intake System', 5, 4, 26000.00, 0, 'Intake and Exhaust\\cosn16'),
(25, 'Cusco', 'Turbo Heat Shield', 5, 2, 13000.00, 0, 'Intake and Exhaust\\cusn12'),
(26, 'DEI', 'Titanium Exhaust Wrap 2in x 50ft', 5, 8, 85000.00, 0, 'Intake and Exhaust\\deigen'),
(27, 'GrimmSpeed', 'Phenolic Thermal 8mm Spacer', 5, 8, 23000.00, 0, 'Intake and Exhaust\\gsgen'),
(28, 'K&N', 'Apollo Cold Air Intake', 5, 3, 12500.00, 0, 'Intake and Exhaust\\knn14'),
(29, 'Mishimoto', 'Impreza Radiator', 5, 2, 38000.00, 0, 'Intake and Exhaust\\mmn12'),
(30, 'AEM', 'UEGO Failsafe Wideband Boost Gauge', 6, 8, 33000.00, 0, 'Interior\\aemgen'),
(31, 'ATI', 'Triple Meter Center Dash Pod', 6, 4, 16000.00, 0, 'Interior\\atin16'),
(32, 'Corbeau', '2 Inch 4 Point Bolt-In Yellow Harness', 6, 8, 8500.00, 0, 'Interior\\corgen'),
(33, 'Defi', 'Red Racer Temperature Gauge', 6, 8, 23000.00, 0, 'Interior\\defigen'),
(34, 'Prova', 'O-Shaped Steering Wheel ', 6, 2, 85000.00, 0, 'Interior\\provn12'),
(35, 'Sparco', 'Carbon Fiber Tuning Pedal Kit', 6, 8, 8000.00, 0, 'Interior\\spgen'),
(36, 'Subaru', 'OEM STI Duracon Shift Black Knob 5spd M/T', 6, 1, 8500.00, 0, 'Interior\\subn10'),
(37, 'APR', 'Carbon Fiber Brake Ducts', 7, 3, 36000.00, 0, 'Suspension and Braking\\aprn14'),
(38, 'BC', 'Racing BR Coilovers', 7, 6, 135000.00, 0, 'Suspension and Braking\\bce9'),
(39, 'DBA', '4000 Series T-Slotted Rear Rotor Pair', 7, 5, 62000.00, 0, 'Suspension and Braking\\dbae8'),
(40, 'Eibach', 'Pro-Kit Lowering Springs', 7, 2, 60000.00, 0, 'Suspension and Braking\\ein12'),
(41, 'Energy Suspension', 'Red Hyper-Flex Master Bushing Set', 7, 1, 26000.00, 0, 'Suspension and Braking\\esn10'),
(42, 'GoodRidge', 'G-Stop Stainless Steel Brake Lines', 7, 4, 20000.00, 0, 'Suspension and Braking\\grn16'),
(43, 'KW', 'Coilovers Variant 3 Inox-Line', 7, 5, 300000.00, 0, 'Suspension and Braking\\kwe8'),
(44, 'Tein', 'Street Basis Coilovers', 7, 4, 80000.00, 0, 'Suspension and Braking\\tn16'),
(45, 'Cusco', 'Smart Cross Lug Wrench', 8, 8, 6000.00, 0, 'Wheels\\cusgen'),
(46, 'KICS', 'R40 16+4 Piece Neo Chrome 12x1.25 Lug Nuts', 8, 8, 28000.00, 0, 'Wheels\\kicsgen'),
(47, 'Wheel Mate', 'Muteki Open End Black Deep 12x1.25 Lug Nuts', 8, 8, 8500.00, 0, 'Wheels\\wmgen');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_models`
--
ALTER TABLE `car_models`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `companydetails`
--
ALTER TABLE `companydetails`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `payments_product_id_foreign` (`product_id`),
  ADD KEY `payments_customer_id_foreign` (`customer_id`),
  ADD KEY `payments_category_id_foreign` (`category_id`),
  ADD KEY `payments_company_id_foreign` (`company_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_car_id_foreign` (`car_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_models`
--
ALTER TABLE `car_models`
  MODIFY `car_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companydetails`
--
ALTER TABLE `companydetails`
  MODIFY `company_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companydetails` (`company_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

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
