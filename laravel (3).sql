-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 12:00 PM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `room_code` varchar(255) DEFAULT NULL,
  `payment_method` enum('cash','online_payment') NOT NULL DEFAULT 'cash',
  `check_in` varchar(25) DEFAULT NULL,
  `check_out` varchar(25) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `booking_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `number`, `price`, `room_code`, `payment_method`, `check_in`, `check_out`, `status`, `payment_id`, `booking_status`, `created_at`, `updated_at`) VALUES
(11, 'rakesh Pandey', 'rkshpandeyji123@gmail.com', '5874514870', '100.00', 'R2H3', 'online_payment', '07/27/2023 5:55 PM', '07/27/2023 5:55 PM', 1, '0', 'Not confirm', '2023-07-27 06:55:41', '2023-07-27 06:55:41'),
(12, 'rakesh Pandey', 'rkshpandeyji123@gmail.com', '8445188705', '100.00', 'R2H3', 'cash', '07/27/2023 5:56 PM', '07/27/2023 5:56 PM', 1, '0', 'Not confirm', '2023-07-27 06:56:37', '2023-07-27 06:56:37'),
(13, 'rakesh Pandey', 'rkshpandeyji123@gmail.com', '8445188705', '100.00', 'R2H3', 'online_payment', '07/27/2023 5:57 PM', '07/27/2023 5:57 PM', 1, 'pay_MIpEPJrRoX64gY', 'confirm', '2023-07-27 06:57:38', '2023-07-27 06:57:38'),
(14, 'rakesh Pandey', 'rkshpandeyji123@gmail.com', '8445188705', '100.00', 'R2H3', 'online_payment', '07/27/2023 6:01 PM', '07/27/2023 6:01 PM', 1, 'pay_MIpJgAImEtvCe7', 'confirm', '2023-07-27 07:02:37', '2023-07-27 07:02:37'),
(15, 'rakesh Pandey', 'rkshpandeyji123@gmail.com', '8445188705', '100.00', 'R2H3', 'online_payment', '07/27/2023 6:10 PM', '07/27/2023 6:10 PM', 1, 'pay_MIpSP3kI3zMKUQ', 'confirm', '2023-07-27 07:10:53', '2023-07-27 07:10:53'),
(16, 'rakesh Pandey', 'rkshpandeyji123@gmail.com', '8445188705', '100.00', 'R2H3', 'cash', '07/27/2023 6:12 PM', '07/27/2023 6:12 PM', 1, '0', 'Not confirm', '2023-07-27 07:12:37', '2023-07-27 07:12:37'),
(17, 'rakesh Pandey', 'rkshpandeyji123@gmail.com', '8445188705', '100.00', 'R2H3', 'online_payment', '07/28/2023 6:20 PM', '07/28/2023 6:20 PM', 1, 'pay_MIpdW7GwMdzB33', 'confirm', '2023-07-27 07:21:25', '2023-07-27 07:21:25'),
(18, 'rakesh Pandey', 'rkshpandeyji123@gmail.com', '08445188705', '100.00', 'R2H3', 'online_payment', '07/29/2023 1:17 PM', '07/29/2023 1:17 PM', 1, 'pay_MJ90nhXeheOoxq', 'confirm', '2023-07-28 02:18:39', '2023-07-28 02:18:39'),
(19, 'rakesh RAKESH', 'rkshpandeyji123@gmail.com', '8445188705', '100.00', 'R2H3', 'online_payment', '07/29/2023 1:24 PM', '07/29/2023 1:24 PM', 1, 'pay_MJ97jGVBYqK20l', 'confirm', '2023-07-28 02:25:14', '2023-07-28 02:25:14'),
(20, 'rakesh Pandey', 'rkshpandeyji123@gmail.com', '8445188705', '100.00', 'R2H2', 'online_payment', '07/29/2023 2:01 PM', '07/29/2023 2:01 PM', 1, 'pay_MJ9kLqNo6MaqYt', 'confirm', '2023-07-28 03:01:45', '2023-07-28 03:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotals`
--

CREATE TABLE `hotals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotals`
--

INSERT INTO `hotals` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'H1', '1', '2023-07-01 17:20:11', '2023-07-01 17:20:11'),
(2, 'H2', '1', '2023-07-01 17:20:11', '2023-07-01 17:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_26_064326_create_hotals_table', 2),
(6, '2023_07_26_064340_create_room_types_table', 2),
(7, '2023_07_26_064350_create_rooms_table', 2),
(8, '2023_07_27_060341_create_bookings_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_code` varchar(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `hotal_id` bigint(20) DEFAULT NULL,
  `room_type_id` bigint(20) DEFAULT NULL,
  `available_count` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `shift` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_code`, `name`, `status`, `hotal_id`, `room_type_id`, `available_count`, `price`, `des`, `img`, `shift`, `created_at`, `updated_at`) VALUES
(1, 'R1H1', 'Junior Suite', '1', 1, 1, 5, '100', 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.', 'img/room-1.jpg', 'Night', '2023-07-26 18:24:22', '2023-07-26 18:24:22'),
(2, 'R1H2', 'Executive Suite', '1', 1, 2, 5, '100', 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.', 'img/room-2.jpg', 'Night', '2023-07-26 18:27:22', '2023-07-26 18:27:22'),
(3, 'R1H3', 'Super Deluxe', '1', 1, 3, 5, '100', 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.', 'img/room-3.jpg', 'Night', '2023-07-26 18:28:46', '2023-07-26 18:28:46'),
(4, 'R2H1', 'Junior Suite', '1', 2, 1, 5, '100', 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.', 'img/room-1.jpg', 'night', '2023-07-26 18:24:22', '2023-07-26 18:24:22'),
(5, 'R2H2', 'Executive Suite', '1', 2, 2, 5, '100', 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.', 'img/room-2.jpg', 'Night', '2023-07-26 18:27:22', '2023-07-28 03:02:10'),
(6, 'R2H3', 'Super Deluxe', '1', 2, 3, 5, '100', 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.', 'img/room-3.jpg', 'Night', '2023-07-26 18:28:46', '2023-07-28 02:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '1BHK', '1', '2023-07-26 17:21:49', '2023-07-26 17:21:49'),
(2, '2BHK', '1', '2023-07-26 17:21:49', '2023-07-26 17:21:49'),
(3, '3BHK', '1', '2023-07-26 17:21:49', '2023-07-26 17:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'rakesh Pandey', 'admin@example.com', NULL, '$2y$10$FmoyNzfS0/PA0E/ifqjxbONxqdcIAJqbejTZ8CuqHKDspqriUaILS', NULL, '2023-07-28 00:59:05', '2023-07-28 00:59:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hotals`
--
ALTER TABLE `hotals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotals`
--
ALTER TABLE `hotals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
