-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 12:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daily_expense_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenditures`
--

CREATE TABLE `expenditures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_amt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenditures`
--

INSERT INTO `expenditures` (`id`, `item_id`, `exp_amt`, `create_user`, `created_at`, `updated_at`) VALUES
(6, '5', '10', '1', '2023-08-18 01:32:32', '2023-08-18 01:32:32'),
(7, '6', '100', '1', '2023-08-18 01:32:43', '2023-08-18 01:32:43'),
(8, '8', '150', '1', '2023-08-18 01:32:55', '2023-08-18 01:32:55'),
(9, '7', '100', '1', '2023-08-18 01:33:04', '2023-08-18 01:33:04'),
(10, '8', '200', '3', '2023-08-18 01:40:32', '2023-08-18 01:40:32'),
(11, '8', '200', '1', '2023-08-18 04:02:19', '2023-08-18 04:02:19'),
(12, '13', '500', '1', '2023-08-18 04:23:03', '2023-08-18 04:23:03'),
(13, '7', '200', '1', '2023-08-18 04:23:38', '2023-08-18 04:23:38'),
(14, '14', '500', '1', '2023-08-18 04:26:41', '2023-08-18 04:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `itemgroups`
--

CREATE TABLE `itemgroups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itemgroups`
--

INSERT INTO `itemgroups` (`id`, `item_group_name`, `create_user`, `created_at`, `updated_at`) VALUES
(6, 'Electronics', '2', '2023-08-18 01:16:39', '2023-08-18 01:16:39'),
(7, 'Travels', '2', '2023-08-18 01:17:32', '2023-08-18 01:17:32'),
(8, 'Diet', '2', '2023-08-18 01:19:07', '2023-08-18 01:19:07'),
(9, 'Medical', '2', '2023-08-18 01:25:37', '2023-08-18 01:25:37'),
(10, 'Fitness', '1', '2023-08-18 04:24:23', '2023-08-18 04:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_group_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_group_id`, `item_name`, `create_user`, `created_at`, `updated_at`) VALUES
(5, '8', 'Breakfast', '2', '2023-08-18 01:19:58', '2023-08-18 01:19:58'),
(6, '8', 'Lunch', '2', '2023-08-18 01:20:28', '2023-08-18 01:20:28'),
(7, '8', 'Dinner', '2', '2023-08-18 01:20:54', '2023-08-18 01:20:54'),
(8, '7', 'Taxi Rent', '2', '2023-08-18 01:23:10', '2023-08-18 01:23:10'),
(9, '7', 'Toto Rent', '2', '2023-08-18 01:24:52', '2023-08-18 01:24:52'),
(10, '9', 'First Aid Band Aid', '2', '2023-08-18 03:05:35', '2023-08-18 03:05:35'),
(11, '9', 'Tablet', '1', '2023-08-18 04:16:59', '2023-08-18 04:16:59'),
(12, '6', 'Light', '1', '2023-08-18 04:20:48', '2023-08-18 04:20:48'),
(13, '7', 'Ola rent', '1', '2023-08-18 04:22:42', '2023-08-18 04:22:42'),
(14, '10', 'Protein Powder', '1', '2023-08-18 04:26:27', '2023-08-18 04:26:27');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_16_201418_create_itemgroup_table', 2),
(6, '2023_08_16_210302_create_itemgroups_table', 3),
(7, '2023_08_16_222204_create_items_table', 4),
(8, '2023_08_17_040607_create_expenditures_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Subhasish Jana', 'subhasishjana132@gmail.com', NULL, '$2y$10$OX8aSPKw/90nKVOpa8pLzu45br4javzW.QrVMjCLJl4nP7h5QBLUm', 'user', NULL, '2023-08-16 10:49:55', '2023-08-17 08:14:13'),
(2, 'Admin', 'admin@admin.com', NULL, '$2y$10$mMWM14qz.NAbUzfYVUhUpO0bIgwSoh014VSHaiL3J3HCpNK9KUBdK', 'admin', NULL, '2023-08-16 10:51:53', '2023-08-16 10:51:53'),
(3, 'test', 'test@gmail.com', NULL, '$2y$10$.c.3hyPuY90glp8YU.sf4OfffPCdfWypYybOBxuBe4MDIP1uoXeE.', 'user', 'a9xwEDIupmekrH5np96wL75v8EcEp0J3mXigWdTL44f5Ho5IwQYagBqVbNe5', '2023-08-17 10:38:32', '2023-08-17 10:38:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenditures`
--
ALTER TABLE `expenditures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `itemgroups`
--
ALTER TABLE `itemgroups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expenditures`
--
ALTER TABLE `expenditures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itemgroups`
--
ALTER TABLE `itemgroups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
