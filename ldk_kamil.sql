-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2021 at 08:16 PM
-- Server version: 8.0.22-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ldk_kamil`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_05_130305_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(1, 'App\\User', 2);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'genrate_surat.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(2, 'genrate_surat.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(3, 'genrate_surat.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(4, 'genrate_surat.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(5, 'surat_keluar.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(6, 'surat_keluar.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(7, 'surat_keluar.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(8, 'surat_keluar.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(9, 'surat_masuk.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(10, 'surat_masuk.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(11, 'surat_masuk.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(12, 'surat_masuk.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(13, 'murobi.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(14, 'murobi.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(15, 'murobi.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(16, 'murobi.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(17, 'kader.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(18, 'kader.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(19, 'kader.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(20, 'kader.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(21, 'posts.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(22, 'posts.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(23, 'posts.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(24, 'posts.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(25, 'categories.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(26, 'categories.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(27, 'categories.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(28, 'categories.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(29, 'events.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(30, 'events.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(31, 'events.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(32, 'events.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(33, 'galeri.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(34, 'galeri.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(35, 'galeri.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(36, 'videos.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(37, 'videos.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(38, 'videos.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(39, 'videos.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(40, 'users.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(41, 'users.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(42, 'users.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(43, 'users.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(44, 'roles.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(45, 'roles.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(46, 'roles.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(47, 'roles.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(48, 'permissions.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(3, 'user', 'web', '2021-01-10 04:12:37', '2021-01-10 04:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(40, 3),
(48, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MUHAMMAD ZIAD ALFIAN', 'admin@gmail.com', NULL, '$2y$10$maZejtGTV2PPvyO3DtJRmeoJVMl3uhSjM6gGrzc3fIbDzLEXqgXAC', NULL, '2021-01-05 05:25:11', '2021-01-10 04:11:58'),
(2, 'MUHAMAMD KUSWARI', 'muhammadkuswari@gmail.com', NULL, '$2y$10$YJaNq5D6dXat1nrc4g2XKOHDXstBXsFu9itj3yuOtLVLSTkZUx6ja', NULL, '2021-01-10 03:59:02', '2021-01-10 03:59:02');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
