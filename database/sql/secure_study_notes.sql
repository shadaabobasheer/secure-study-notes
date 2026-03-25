-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2026 at 01:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secure_study_notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('securestudynotes-cache-mona@gmail.com|127.0.0.1', 'i:2;', 1770834035),
('securestudynotes-cache-mona@gmail.com|127.0.0.1:timer', 'i:1770834035;', 1770834035),
('securestudynotes-cache-shada1@gmail.com|127.0.0.1', 'i:1;', 1774356446),
('securestudynotes-cache-shada1@gmail.com|127.0.0.1:timer', 'i:1774356446;', 1774356446);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2026_01_27_071604_create_cache_table', 1),
(2, '2026_01_27_071612_create_sessions_table', 1),
(3, '2026_01_27_161450_create_users_table', 1),
(4, '2026_01_27_162420_create_notes_table', 1),
(5, '2026_02_28_072750_create_password_reset_tokens_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `tag` varchar(255) NOT NULL DEFAULT 'study',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `user_id`, `title`, `content`, `tag`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'shada', 'ghjkl;\'\'l,nv dd', 'daily', '2026-02-11 15:23:17', '2026-02-17 14:15:24', NULL),
(2, 2, 'doaa', 'jfrgbgmmb', 'daily', '2026-02-11 15:23:38', '2026-02-11 15:23:50', '2026-02-11 15:23:50'),
(3, 2, 'wlaa', 'rkrbfl;gbgr', 'daily', '2026-02-11 15:24:04', '2026-02-11 15:24:04', NULL),
(6, 3, 'First Note', '# Final Semester at University 🎓\r\n\r\n- **Decisive Stage**: Every project or report is a step toward graduation.  \r\n- **Double Focus**: No room for delay; each task must be completed on time.  \r\n- **Balance Matters**: Between studying, research, and personal life.  \r\n- **Last Memories**: Moments with friends and professors will last forever.  \r\n- **Next Step**: Preparing for the job market or graduate studies.', 'study', '2026-02-25 08:11:45', '2026-02-25 08:11:45', NULL),
(8, 3, 'Finall Notes', '# University Journey 🌟\r\n\r\n- **Learning Beyond Books**: Real growth comes from projects, teamwork, and challenges.  \r\n- **Friendships**: Bonds built in classrooms and cafeterias last a lifetime.  \r\n- **Resilience**: Exams, deadlines, and stress teach patience and strength.  \r\n- **Opportunities**: Each semester opens doors to new skills and experiences.  \r\n- **Legacy**: Graduation is not the end, but the beginning of applying what was learned.', 'study', '2026-02-25 08:33:39', '2026-03-07 05:53:03', NULL),
(11, 3, 'Normal Note', '# 📘 Daily Note\r\n\r\n- **Focus:** Review today’s lesson before bedtime  \r\n- **Tip:** Even 10 minutes of revision makes a difference  \r\n- **Reminder:** Take a short break every hour to stay fresh', 'daily', '2026-03-02 05:06:54', '2026-03-07 05:53:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('shatha@gmail.com', '$2y$12$CGLVipu7dUQ2m6qDwcWIZOd3zvKRhOvGCDWg7F3OwmNXRO4Vx0BGe', '2026-02-28 04:29:54'),
('walaa@gmail.com', '$2y$12$ULW9f2Dklu6Xs2vcfX4rT.Ihyl8D2AtwLFJ2MOCeZ62m9IG1Zp3t.', '2026-02-28 04:31:19'),
('alaa@gmail.com', '$2y$12$X3FPc1nOsOGmvKdORZqYDOc40T5Goj8W74LABoovqml.z2ProZsX.', '2026-03-07 05:50:44');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3AYXf90VvQWyaLdgUY1naXksyhEjzlgPRCMLedlV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidHJGZFU0ZTRheE1NQWhLNG5nOGRsU0xGTzROZ0xlN2pVM2JSUGxtSyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7czo1OiJyb3V0ZSI7czo4OiJyZWdpc3RlciI7fX0=', 1774356395),
('lhDbbR1yKx24VPv9DLQgwgPCwiBfjMiQykHz6wEe', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZmxjZU9JWUNxSkpFQ214Mkg3ZmxjNzhKZXIzRXRkV3pXdHJXS2p6eCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ub3Rlcy9jcmVhdGUiO3M6NToicm91dGUiO3M6MTI6Im5vdGVzLmNyZWF0ZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7fQ==', 1772873657);

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
(1, 'mona', 'mona@email.com', NULL, '$2y$12$KN065bGp9XwPBVawksOkgegPUYi793y/1nwm.m0rJvu/.AXOgEekK', NULL, '2026-02-11 14:35:34', '2026-02-11 14:35:34'),
(2, 'alaa', 'alaa@gmail.com', NULL, '$2y$12$75viBBfRLmDOFlVZnooq4.E1L9cWeGCmzBAfmu6DKAaY0EFmQN3L.', NULL, '2026-02-11 15:22:03', '2026-02-11 15:22:03'),
(3, 'shatha', 'shatha@gmail.com', NULL, '$2y$12$wuCwENI0KPM7e5p7H21pGeFhbR9NE3fxguBmAZE0uFZKY8fKqIzYC', NULL, '2026-02-17 14:28:32', '2026-02-17 14:28:32'),
(4, 'walaa', 'walaa@gmail.com', NULL, '$2y$12$7DWiZ2cZW6loqqTWySx3eedI0nnSij.xZZdpurWyN6PXKGqNI18EO', NULL, '2026-02-28 04:23:29', '2026-02-28 10:01:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD KEY `password_reset_tokens_email_index` (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
