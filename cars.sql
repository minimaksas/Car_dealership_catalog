-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 08:41 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(10) UNSIGNED NOT NULL,
  `Brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` float(8,2) NOT NULL,
  `Fuel_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fuel_tank_capacity` int(11) NOT NULL,
  `Max_speed` int(11) NOT NULL,
  `Color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `main_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `list_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `Brand`, `Model`, `Price`, `Fuel_type`, `Fuel_tank_capacity`, `Max_speed`, `Color`, `Description`, `category_id`, `main_image`, `thumb_image`, `list_image`, `slug`, `created_at`, `updated_at`) VALUES
(8, 'Audi', 'A6', 15800.00, 'Diesel', 75, 249, 'Blue', '<p>Date of manufacture:&nbsp;<strong>2014-11</strong></p>\r\n\r\n<p>Mileage:&nbsp;<strong>109 450 km</strong></p>\r\n\r\n<p>Number of doors: <strong>4/5</strong></p>', 2, 'cars_main_8.jpg', 'cars_thumb_8.jpg', 'cars_list_8.jpg', 'audi-a6-15800', '2021-06-25 04:34:58', '2021-06-25 07:20:17'),
(9, 'Lexus', 'LS 460', 9500.00, 'Diesel', 84, 266, 'White', '<p>Date of manufacture:&nbsp;<strong>2007-06</strong></p>\r\n\r\n<p>Mileage:&nbsp;<strong>255 000 km</strong></p>\r\n\r\n<p>Number of doors:&nbsp;<strong>4/5</strong></p>', 2, 'cars_main_9.JPG', 'cars_thumb_9.JPG', 'cars_list_9.JPG', 'lexus-ls-460-9500', '2021-06-25 04:42:45', '2021-06-25 05:13:41'),
(10, 'Volkswagen', 'Golf', 4400.00, 'Petrol (Gasoline)', 55, 200, 'Silver', '<p>Date of manufacture:&nbsp;<strong>2010-11</strong></p>\r\n\r\n<p>Mileage:&nbsp;<strong>250 000 km</strong></p>\r\n\r\n<p>Number of doors: <strong>2/3</strong></p>', 10, 'cars_main_10.jpg', 'cars_thumb_10.jpg', 'cars_list_10.jpg', 'volkswagen-golf-4400', '2021-06-25 04:51:52', '2021-06-25 05:13:09'),
(11, 'Opel', 'Astra', 1800.00, 'Petrol (Gasoline)', 52, 193, 'Silver', '<p>Date of manufacture:&nbsp;<strong>2008-09</strong></p>\r\n\r\n<p>Mileage:&nbsp;<strong>164 852 km</strong></p>\r\n\r\n<p>Number of doors:&nbsp;<strong>4/5</strong></p>', 10, 'cars_main_11.jpg', 'cars_thumb_11.jpg', 'cars_list_11.jpg', 'opel-astra-1800', '2021-06-25 04:59:46', '2021-06-25 05:34:58'),
(12, 'BMW', '330', 5900.00, 'Petrol (Gasoline)', 61, 250, 'Gray', '<p>Date of manufacture:&nbsp;<strong>2007-08</strong></p>\r\n\r\n<p>Mileage:<strong>&nbsp;313 000 km</strong></p>\r\n\r\n<p>Number of doors:&nbsp;<strong>2/3</strong></p>', 8, 'cars_main_12.jpg', 'cars_thumb_12.jpg', 'cars_list_12.jpg', 'bmw-330-5900', '2021-06-25 05:12:00', '2021-06-25 06:44:49'),
(13, 'Dodge', 'Challenger', 28800.00, 'Petrol (Gasoline)', 70, 326, 'Red/Cherry', '<p>Date of manufacture:&nbsp;<strong>2019-07</strong></p>\r\n\r\n<p>Mileage:&nbsp;<strong>26 000 km</strong></p>\r\n\r\n<p>Number of doors:&nbsp;<strong>2/3</strong></p>', 8, 'cars_main_13.jpg', 'cars_thumb_13.jpg', 'cars_list_13.jpg', 'dodge-challenger-28800', '2021-06-25 05:34:01', '2021-06-25 05:34:10'),
(14, 'Audi', 'RS5', 31000.00, 'Petrol (Gasoline)', 61, 280, 'Red/Cherry', '<p>Date of manufacture:&nbsp;<strong>2013</strong></p>\r\n\r\n<p>Mileage:&nbsp;<strong>43 500 km</strong></p>\r\n\r\n<p>Number of doors:&nbsp;<strong>2/3</strong></p>', 8, 'cars_main_14.jpg', 'cars_thumb_14.jpg', 'cars_list_14.jpg', 'audi-rs5-31000', '2021-06-25 05:40:52', '2021-06-25 05:40:52'),
(15, 'Ford', 'Mustang', 31500.00, 'Petrol (Gasoline)', 59, 253, 'Purple', '<p>Date of manufacture:&nbsp;<strong>2018-07</strong></p>\r\n\r\n<p>Mileage:<strong>&nbsp;9 400 km</strong></p>\r\n\r\n<p>Number of doors:&nbsp;<strong>2/3</strong></p>', 16, 'cars_main_15.jpg', 'cars_thumb_15.jpg', 'cars_list_15.jpg', 'ford-mustang-31500', '2021-06-25 05:53:34', '2021-06-25 05:53:34'),
(16, 'Ford', 'F-150', 6500.00, 'Petrol (Gasoline)', 136, 210, 'Blue', '<p>Date of manufacture:&nbsp;<strong>2010-01</strong></p>\r\n\r\n<p>Mileage:&nbsp;<strong>123 456 km</strong></p>\r\n\r\n<p>Number of doors:&nbsp;<strong>4/5</strong></p>', 14, 'cars_main_16.jpg', 'cars_thumb_16.jpg', 'cars_list_16.jpg', 'ford-f-150-6500', '2021-06-25 06:02:31', '2021-06-25 06:02:31'),
(17, 'Land Rover', 'Defender', 11500.00, 'Petrol (Gasoline)', 93, 129, 'Black', '<p>Date of manufacture:&nbsp;<strong>1999-05</strong></p>\r\n\r\n<p>Mileage:&nbsp;<strong>279 500 km</strong></p>\r\n\r\n<p>Number of doors: <strong>4/5</strong></p>', 14, 'cars_main_17.jpg', 'cars_thumb_17.jpg', 'cars_list_17.jpg', 'land-rover-defender-11500', '2021-06-25 06:08:34', '2021-06-25 06:08:35'),
(18, 'Renault', 'Trafic', 14999.00, 'Diesel', 80, 196, 'Gray', '<p>Date of manufacture:&nbsp;<strong>2017-09</strong></p>\r\n\r\n<p>Mileage: <strong>267 300 km</strong></p>\r\n\r\n<p>Number of doors:<strong>&nbsp;4/5</strong></p>', 11, 'cars_main_18.jpg', 'cars_thumb_18.jpg', 'cars_list_18.jpg', 'renault-trafic-14999', '2021-06-25 06:25:13', '2021-06-25 06:38:00'),
(19, 'Mitsubishi', 'Lancer Evolution', 27500.00, 'Petrol (Gasoline)', 55, 260, 'Black', '<p>Date of manufacture:&nbsp;<strong>2011-08</strong></p>\r\n\r\n<p>Mileage: <strong>84 500 km</strong></p>\r\n\r\n<p>Number of doors:<strong>&nbsp;4/5</strong></p>', 2, 'cars_main_19.jpg', 'cars_thumb_19.jpg', 'cars_list_19.jpg', 'mitsubishi-lancer-evolution-27500', '2021-06-25 06:33:14', '2021-06-27 04:51:36');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Sedan', '2020-04-29 14:57:51', '2021-06-24 08:04:56'),
(8, 'Coupe', '2020-05-08 11:54:58', '2021-06-24 08:05:00'),
(10, 'Hatchback', '2020-05-08 14:39:47', '2021-06-24 08:05:09'),
(11, 'Minivan/Van', '2020-05-12 04:35:12', '2021-06-24 08:05:48'),
(14, 'Truck', '2020-05-17 16:43:21', '2021-06-24 08:05:55'),
(16, 'Convertible', '2021-06-24 08:32:34', '2021-06-24 08:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('benasbns1@gmail.com', '$2y$10$jr9Ap.fFIJRcG5OwAyusCeYbkFr9HI.ISl29DB6ePA07vTYoEkb3W', '2020-05-12 05:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'system_name', 'Car dealership catalog', NULL, '2021-06-24 14:47:08'),
(2, 'favicon', 'favicon.png', NULL, NULL),
(3, 'front_logo', 'front_logo.PNG', NULL, '2020-06-01 16:58:49'),
(4, 'admin_logo', 'admin_logo.PNG', NULL, '2021-06-24 15:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Administrator', 'admin@gmail.com', '$2y$10$RLmo3mESWFcqQgYWRoR5guON3wd04BqKv3oLWFTWVGbV..Vhd5Smq', 'HDVWv10njtJkhy1uQcoxaR1g2Xmnmb3zKhvVNDboRplFD8r8yVhL9SxfjJnj', '2020-04-20 18:00:00', '2021-06-26 07:22:47'),
(3, 'Benas', 'Klimašauskas', 'benas.klimasauskas@cybercare.cc', '$2y$10$9exZB66edTNbCZDxredN2Oa8SU4y4V3wEUhvpPL5T5XsORxLjD.ZO', NULL, '2020-04-28 08:27:25', '2021-06-25 10:33:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
