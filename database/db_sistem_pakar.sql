-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2024 at 07:07 PM
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
-- Database: `db_sistem_pakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('david@mail.com|127.0.0.1', 'i:1;', 1720664800),
('david@mail.com|127.0.0.1:timer', 'i:1720664800;', 1720664800),
('david2mail.com|127.0.0.1', 'i:1;', 1720606887),
('david2mail.com|127.0.0.1:timer', 'i:1720606887;', 1720606887),
('rikidavidtra.2310@gmail.com|127.0.0.1', 'i:2;', 1719813787),
('rikidavidtra.2310@gmail.com|127.0.0.1:timer', 'i:1719813787;', 1719813787),
('tra@gmail.com|127.0.0.1', 'i:1;', 1720619523),
('tra@gmail.com|127.0.0.1:timer', 'i:1720619523;', 1720619523);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8w6M13ZiLc5pDyKPXIDYDvtb80As1Ro3sVbgWFIv', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYU5TdUtEcGNRU2h2UlJ0VEs0Skt0Y3JNVE9WR2RJZ294ajh1c2d5dyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kaWFnbm9zYS9lZGl0LzQwIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3MjM0ODIzOTE7fX0=', 1723482398);

-- --------------------------------------------------------

--
-- Table structure for table `tb_accessmenus`
--

CREATE TABLE `tb_accessmenus` (
  `id_accessmenu` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `activity_log` text DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL,
  `id_firstmenu` int(11) DEFAULT NULL,
  `id_secondmenu` int(11) DEFAULT NULL,
  `id_thirdmenu` int(11) DEFAULT NULL,
  `id_fourthmenu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_accessmenus`
--

INSERT INTO `tb_accessmenus` (`id_accessmenu`, `created_at`, `updated_at`, `created_by`, `updated_by`, `activity_log`, `id_level`, `id_firstmenu`, `id_secondmenu`, `id_thirdmenu`, `id_fourthmenu`) VALUES
(245, '2024-07-21 21:11:45', '2024-07-21 21:11:45', 'Riki', NULL, NULL, 1, 28, 29, NULL, NULL),
(246, '2024-07-21 21:11:45', '2024-07-21 21:11:45', 'Riki', NULL, NULL, 1, 28, 28, NULL, NULL),
(247, '2024-07-21 21:11:45', '2024-07-21 21:11:45', 'Riki', NULL, NULL, 1, 30, NULL, NULL, NULL),
(248, '2024-07-21 21:11:45', '2024-07-21 21:11:45', 'Riki', NULL, NULL, 1, 29, 37, NULL, NULL),
(249, '2024-07-21 21:11:45', '2024-07-21 21:11:45', 'Riki', NULL, NULL, 1, 29, 35, NULL, NULL),
(250, '2024-07-21 21:11:45', '2024-07-21 21:11:45', 'Riki', NULL, NULL, 1, 29, 36, NULL, NULL),
(251, '2024-07-21 21:11:45', '2024-07-21 21:11:45', 'Riki', NULL, NULL, 1, 31, NULL, NULL, NULL),
(252, '2024-07-21 21:11:45', '2024-07-21 21:11:45', 'Riki', NULL, NULL, 1, 20, NULL, NULL, NULL),
(253, '2024-07-21 21:12:08', '2024-07-21 21:12:08', 'Riki', NULL, NULL, 2, 30, NULL, NULL, NULL),
(254, '2024-07-21 21:12:08', '2024-07-21 21:12:08', 'Riki', NULL, NULL, 2, 31, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_aturan_diagnosas`
--

CREATE TABLE `tb_aturan_diagnosas` (
  `id_aturan_diagnosa` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `cf_expert` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_aturan_diagnosas`
--

INSERT INTO `tb_aturan_diagnosas` (`id_aturan_diagnosa`, `id_gejala`, `id_penyakit`, `cf_expert`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 0.7, NULL, '2024-08-11 08:44:53'),
(2, 33, 1, 0.7, NULL, '2024-08-11 08:44:17'),
(3, 16, 2, 0.85, NULL, '2024-08-11 08:41:33'),
(16, 37, 8, 0.8, '2024-08-02 10:04:24', '2024-08-11 08:40:41'),
(17, 16, 8, 0.8, '2024-08-11 08:40:03', '2024-08-11 08:40:03'),
(18, 37, 8, 0.8, '2024-08-11 08:45:28', '2024-08-11 08:45:28'),
(19, 13, 8, 0.8, '2024-08-11 08:46:00', '2024-08-11 08:46:00'),
(20, 14, 8, 0.8, '2024-08-11 08:46:19', '2024-08-11 08:46:19'),
(21, 24, 8, 0.8, '2024-08-11 08:46:48', '2024-08-11 08:46:48'),
(22, 30, 8, 0.8, '2024-08-11 08:47:12', '2024-08-11 08:47:12'),
(23, 31, 8, 0.8, '2024-08-11 08:47:32', '2024-08-11 08:47:32'),
(24, 32, 8, 0.8, '2024-08-11 08:47:47', '2024-08-11 08:47:47'),
(25, 16, 11, 0.9, '2024-08-11 08:48:22', '2024-08-11 08:48:22'),
(26, 17, 11, 0.9, '2024-08-11 08:48:49', '2024-08-11 08:48:49'),
(27, 18, 11, 0.9, '2024-08-11 08:49:23', '2024-08-11 08:49:23'),
(28, 19, 11, 0.9, '2024-08-11 08:49:54', '2024-08-11 08:49:54'),
(29, 13, 11, 0.9, '2024-08-11 08:50:18', '2024-08-11 08:50:18'),
(30, 14, 11, 0.9, '2024-08-11 08:50:33', '2024-08-11 08:50:33'),
(31, 47, 11, 0.9, '2024-08-11 08:51:18', '2024-08-11 08:51:18'),
(32, 22, 11, 0.9, '2024-08-11 08:51:34', '2024-08-11 08:51:34'),
(33, 23, 11, 0.9, '2024-08-11 08:51:54', '2024-08-11 08:51:54'),
(34, 48, 11, 0.9, '2024-08-11 08:52:21', '2024-08-11 08:52:21'),
(35, 48, 11, 0.9, '2024-08-11 08:52:23', '2024-08-11 08:52:23'),
(36, 1, 9, 0.85, '2024-08-11 08:52:54', '2024-08-11 08:52:54'),
(37, 15, 9, 0.85, '2024-08-11 08:53:49', '2024-08-11 08:53:49'),
(38, 20, 9, 0.85, '2024-08-11 08:54:07', '2024-08-11 08:54:07'),
(39, 21, 9, 0.85, '2024-08-11 08:55:40', '2024-08-11 08:55:40'),
(40, 32, 9, 0.85, '2024-08-11 08:56:02', '2024-08-11 08:56:02'),
(41, 49, 9, 0.85, '2024-08-11 08:56:22', '2024-08-11 08:56:22'),
(42, 50, 9, 0.85, '2024-08-11 08:56:42', '2024-08-11 08:56:42'),
(43, 51, 9, 0.85, '2024-08-11 08:57:01', '2024-08-11 08:57:01'),
(44, 22, 9, 0.85, '2024-08-11 08:57:19', '2024-08-11 08:57:19'),
(45, 23, 9, 0.85, '2024-08-11 08:57:32', '2024-08-11 08:57:32'),
(46, 16, 5, 0.9, '2024-08-11 08:58:08', '2024-08-11 08:58:08'),
(47, 22, 5, 0.9, '2024-08-11 08:58:30', '2024-08-11 08:58:30'),
(48, 23, 5, 0.9, '2024-08-11 08:58:42', '2024-08-11 08:58:42'),
(49, 24, 5, 0.9, '2024-08-11 08:59:16', '2024-08-11 08:59:16'),
(50, 25, 5, 0.9, '2024-08-11 08:59:35', '2024-08-11 08:59:35'),
(51, 14, 5, 0.9, '2024-08-11 08:59:50', '2024-08-11 08:59:50'),
(54, 32, 5, 0.9, '2024-08-11 09:00:56', '2024-08-11 09:00:56'),
(55, 37, 5, 0.9, '2024-08-11 09:01:20', '2024-08-11 09:01:20'),
(56, 52, 5, 0.9, '2024-08-11 09:01:41', '2024-08-11 09:01:41'),
(57, 16, 10, 0.8, '2024-08-11 09:02:16', '2024-08-11 09:02:16'),
(58, 37, 10, 0.8, '2024-08-11 09:02:45', '2024-08-11 09:02:45'),
(59, 26, 10, 0.8, '2024-08-11 09:03:24', '2024-08-11 09:03:24'),
(60, 53, 10, 0.8, '2024-08-11 09:03:46', '2024-08-11 09:03:46'),
(61, 54, 10, 0.8, '2024-08-11 09:04:20', '2024-08-11 09:04:20'),
(62, 55, 10, 0.8, '2024-08-11 09:04:46', '2024-08-11 09:04:46'),
(63, 56, 10, 0.8, '2024-08-11 09:05:04', '2024-08-11 09:05:04'),
(64, 78, 10, 0.8, '2024-08-11 09:07:35', '2024-08-11 09:07:35'),
(65, 16, 6, 0.85, '2024-08-11 09:08:21', '2024-08-11 09:08:21'),
(66, 78, 6, 0.85, '2024-08-11 09:08:57', '2024-08-11 09:08:57'),
(67, 22, 6, 0.85, '2024-08-11 09:09:13', '2024-08-11 09:09:13'),
(68, 79, 6, 0.85, '2024-08-11 09:10:03', '2024-08-11 09:11:30'),
(69, 27, 6, 0.85, '2024-08-11 09:12:02', '2024-08-11 09:12:02'),
(70, 14, 6, 0.85, '2024-08-11 09:12:21', '2024-08-11 09:12:21'),
(71, 37, 6, 0.85, '2024-08-11 09:12:43', '2024-08-11 09:12:43'),
(72, 57, 6, 0.85, '2024-08-11 09:13:16', '2024-08-11 09:13:16'),
(73, 58, 6, 0.85, '2024-08-11 09:13:34', '2024-08-11 09:13:34'),
(74, 59, 6, 0.85, '2024-08-11 09:13:49', '2024-08-11 09:13:49'),
(75, 78, 7, 0.75, '2024-08-11 09:14:12', '2024-08-11 09:15:56'),
(76, 22, 7, 0.75, '2024-08-11 09:15:46', '2024-08-11 09:15:46'),
(77, 23, 7, 0.75, '2024-08-11 09:16:24', '2024-08-11 09:16:24'),
(78, 28, 7, 0.75, '2024-08-11 09:16:49', '2024-08-11 09:16:49'),
(79, 21, 7, 0.75, '2024-08-11 09:17:09', '2024-08-11 09:17:09'),
(80, 60, 7, 0.75, '2024-08-11 09:17:53', '2024-08-11 09:17:53'),
(81, 62, 7, 0.75, '2024-08-11 09:18:13', '2024-08-11 09:18:13'),
(82, 63, 7, 0.75, '2024-08-11 09:18:30', '2024-08-11 09:18:30'),
(83, 61, 7, 0.75, '2024-08-11 09:19:02', '2024-08-11 09:19:02'),
(84, 32, 7, 0.75, '2024-08-11 09:19:22', '2024-08-11 09:19:22'),
(85, 31, 1, 0.7, '2024-08-11 09:20:03', '2024-08-11 09:20:03'),
(86, 30, 1, 0.7, '2024-08-11 09:21:17', '2024-08-11 09:21:17'),
(87, 14, 1, 0.7, '2024-08-11 09:22:09', '2024-08-11 09:22:09'),
(88, 13, 1, 0.7, '2024-08-11 09:22:26', '2024-08-11 09:22:26'),
(89, 35, 12, 0.8, '2024-08-11 09:23:02', '2024-08-11 09:23:02'),
(90, 32, 12, 0.8, '2024-08-11 09:23:25', '2024-08-11 09:23:25'),
(91, 3, 12, 0.8, '2024-08-11 09:23:44', '2024-08-11 09:23:44'),
(92, 1, 12, 0.8, '2024-08-11 09:24:22', '2024-08-11 09:24:22'),
(93, 29, 12, 0.8, '2024-08-11 09:25:17', '2024-08-11 09:25:17'),
(94, 30, 12, 0.8, '2024-08-11 09:25:52', '2024-08-11 09:25:52'),
(95, 35, 2, 0.85, '2024-08-11 09:26:20', '2024-08-11 09:26:51'),
(96, 34, 2, 0.85, '2024-08-11 09:27:25', '2024-08-11 09:27:25'),
(97, 29, 2, 0.85, '2024-08-11 09:28:11', '2024-08-11 09:28:11'),
(98, 32, 2, 0.85, '2024-08-11 09:28:25', '2024-08-11 09:28:25'),
(99, 24, 2, 0.85, '2024-08-11 09:28:48', '2024-08-11 09:28:48'),
(100, 64, 2, 0.85, '2024-08-11 09:29:03', '2024-08-11 09:29:03'),
(101, 36, 14, 0.75, '2024-08-11 09:29:36', '2024-08-11 09:29:36'),
(102, 30, 14, 0.75, '2024-08-11 09:30:04', '2024-08-11 09:30:04'),
(103, 37, 14, 0.75, '2024-08-11 09:30:28', '2024-08-11 09:30:28'),
(104, 65, 14, 0.75, '2024-08-11 09:31:02', '2024-08-11 09:31:02'),
(105, 66, 14, 0.75, '2024-08-11 09:31:31', '2024-08-11 09:31:31'),
(106, 30, 15, 0.8, '2024-08-11 09:31:53', '2024-08-11 09:31:53'),
(107, 1, 15, 0.8, '2024-08-11 09:32:14', '2024-08-11 09:32:14'),
(108, 14, 15, 0.8, '2024-08-11 09:32:34', '2024-08-11 09:32:34'),
(109, 38, 15, 0.8, '2024-08-11 09:32:56', '2024-08-11 09:32:56'),
(110, 67, 15, 0.8, '2024-08-11 09:33:14', '2024-08-11 09:33:14'),
(111, 69, 15, 0.8, '2024-08-11 09:33:33', '2024-08-11 09:33:33'),
(112, 68, 15, 0.8, '2024-08-11 09:34:00', '2024-08-11 09:34:00'),
(113, 31, 16, 0.75, '2024-08-11 09:34:24', '2024-08-11 09:34:24'),
(114, 39, 16, 0.75, '2024-08-11 09:35:50', '2024-08-11 09:35:50'),
(115, 1, 16, 0.75, '2024-08-11 09:36:44', '2024-08-11 09:36:44'),
(116, 14, 16, 0.75, '2024-08-11 09:37:05', '2024-08-11 09:37:05'),
(117, 70, 16, 0.75, '2024-08-11 09:38:11', '2024-08-11 09:38:11'),
(118, 71, 16, 0.75, '2024-08-11 09:38:56', '2024-08-11 09:38:56'),
(119, 80, 16, 0.75, '2024-08-11 09:41:01', '2024-08-11 09:41:01'),
(120, 72, 16, 0.75, '2024-08-11 09:41:24', '2024-08-11 09:41:24'),
(121, 41, 17, 0.9, '2024-08-11 09:42:10', '2024-08-11 09:42:10'),
(122, 16, 17, 0.9, '2024-08-11 09:42:45', '2024-08-11 09:42:45'),
(123, 42, 17, 0.9, '2024-08-11 09:43:13', '2024-08-11 09:43:13'),
(124, 43, 17, 0.9, '2024-08-11 09:43:41', '2024-08-11 09:43:41'),
(125, 32, 17, 0.9, '2024-08-11 09:43:58', '2024-08-11 09:43:58'),
(126, 51, 17, 0.9, '2024-08-11 09:44:14', '2024-08-11 09:44:14'),
(127, 73, 17, 0.9, '2024-08-11 09:44:51', '2024-08-11 09:44:51'),
(128, 40, 18, 0.8, '2024-08-11 09:45:30', '2024-08-11 09:45:30'),
(129, 1, 18, 0.8, '2024-08-11 09:45:49', '2024-08-11 09:45:49'),
(130, 44, 18, 0.8, '2024-08-11 09:46:08', '2024-08-11 09:46:08'),
(131, 45, 18, 0.8, '2024-08-11 09:47:32', '2024-08-11 09:47:32'),
(132, 74, 18, 0.8, '2024-08-11 09:47:50', '2024-08-11 09:47:50'),
(133, 30, 19, 0.8, '2024-08-11 09:48:18', '2024-08-11 09:48:18'),
(134, 1, 19, 0.8, '2024-08-11 09:48:32', '2024-08-11 09:48:32'),
(135, 69, 19, 0.8, '2024-08-11 09:49:58', '2024-08-11 09:49:58'),
(136, 75, 19, 0.8, '2024-08-11 09:50:25', '2024-08-11 09:50:25'),
(137, 76, 19, 0.8, '2024-08-11 09:50:47', '2024-08-11 09:50:47'),
(138, 36, 19, 0.8, '2024-08-11 09:51:13', '2024-08-11 09:51:13'),
(139, 71, 19, 0.8, '2024-08-11 09:51:30', '2024-08-11 09:51:30'),
(140, 40, 19, 0.8, '2024-08-11 09:52:28', '2024-08-11 09:52:28'),
(141, 2, 20, 0.85, '2024-08-11 09:53:07', '2024-08-11 09:53:07'),
(142, 46, 20, 0.85, '2024-08-11 09:54:19', '2024-08-11 09:54:19'),
(143, 3, 20, 0.85, '2024-08-11 09:54:38', '2024-08-11 09:54:38'),
(144, 51, 20, 0.85, '2024-08-11 09:55:12', '2024-08-11 09:55:12'),
(145, 1, 20, 0.85, '2024-08-11 09:55:31', '2024-08-11 09:55:31'),
(146, 53, 20, 0.85, '2024-08-11 09:56:52', '2024-08-11 09:56:52'),
(147, 31, 20, 0.85, '2024-08-11 09:57:34', '2024-08-11 09:57:34'),
(148, 32, 20, 0.85, '2024-08-11 09:57:52', '2024-08-11 09:57:52'),
(149, 33, 21, 0.7, '2024-08-11 09:58:10', '2024-08-11 09:58:10'),
(150, 26, 21, 0.7, '2024-08-11 09:58:40', '2024-08-11 09:58:40'),
(151, 31, 21, 0.7, '2024-08-11 09:59:08', '2024-08-11 09:59:08'),
(152, 2, 21, 0.7, '2024-08-11 09:59:26', '2024-08-11 09:59:26'),
(153, 77, 21, 0.7, '2024-08-11 10:00:23', '2024-08-11 10:00:23'),
(154, 81, 21, 0.7, '2024-08-11 10:02:48', '2024-08-11 10:02:48'),
(155, 82, 21, 0.7, '2024-08-11 10:04:22', '2024-08-11 10:04:22'),
(156, 16, 23, 0.9, '2024-08-11 10:04:46', '2024-08-11 10:07:51'),
(161, 13, 23, 0.9, '2024-08-11 10:10:01', '2024-08-11 10:10:01'),
(162, 30, 23, 0.9, '2024-08-11 10:10:17', '2024-08-11 10:10:17'),
(163, 2, 23, 0.9, '2024-08-11 10:10:34', '2024-08-11 10:10:34'),
(164, 73, 23, 0.9, '2024-08-11 10:10:58', '2024-08-11 10:10:58'),
(165, 78, 23, 0.9, '2024-08-11 10:11:15', '2024-08-11 10:11:15'),
(166, 32, 23, 0.9, '2024-08-11 10:11:31', '2024-08-11 10:11:31'),
(167, 22, 23, 0.9, '2024-08-11 10:11:45', '2024-08-11 10:11:45'),
(168, 23, 23, 0.9, '2024-08-11 10:12:00', '2024-08-11 10:12:00'),
(169, 1, 22, 0.85, '2024-08-11 10:12:32', '2024-08-11 10:12:32'),
(170, 2, 22, 0.85, '2024-08-11 10:13:11', '2024-08-11 10:13:11'),
(171, 35, 22, 0.85, '2024-08-11 10:13:32', '2024-08-11 10:13:32'),
(172, 29, 22, 0.85, '2024-08-11 10:14:42', '2024-08-11 10:16:12'),
(173, 32, 22, 0.85, '2024-08-11 10:15:00', '2024-08-11 10:15:58'),
(174, 3, 22, 0.85, '2024-08-11 10:15:31', '2024-08-11 10:15:45'),
(175, 43, 22, 0.85, '2024-08-11 10:16:29', '2024-08-11 10:16:29'),
(176, 42, 22, 0.85, '2024-08-11 10:16:47', '2024-08-11 10:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosas`
--

CREATE TABLE `tb_diagnosas` (
  `id_diagnosa` int(11) NOT NULL,
  `kode_diagnosa` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `nama_pasien` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `cf_result` varchar(255) DEFAULT NULL,
  `id_penyakit` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_diagnosas`
--

INSERT INTO `tb_diagnosas` (`id_diagnosa`, `kode_diagnosa`, `created_at`, `updated_at`, `id_pasien`, `nama_pasien`, `alamat`, `cf_result`, `id_penyakit`, `keterangan`, `status`, `id_user`) VALUES
(33, 'DIAG3171', '2024-08-11 10:31:07', '2024-08-12 09:48:14', NULL, 'Lala', 'Brebes', '0.99999808', 8, NULL, 'Proses', 3),
(34, 'DIAG4267', '2024-08-12 10:12:11', '2024-08-12 10:25:32', NULL, 'Riri', 'Jambi', '0.9', 11, NULL, 'Selesai', 3),
(36, 'DIAG8887', '2024-08-12 10:52:11', '2024-08-12 16:55:12', 7, NULL, NULL, '0.9999937792', 8, 'pengobatan', 'Proses', 1),
(37, 'DIAG462', '2024-08-12 11:36:55', '2024-08-12 11:49:03', NULL, 'eqweqwe', 'iyo', '0.9999904', 8, NULL, 'Proses', 3),
(38, 'DIAG3774', '2024-08-12 11:56:31', '2024-08-12 11:56:31', NULL, 'eq', 'weq', NULL, NULL, NULL, 'Proses', 3),
(39, 'DIAG6715', '2024-08-12 11:56:32', '2024-08-12 11:56:32', NULL, 'eq', 'weq', NULL, NULL, NULL, 'Proses', 3),
(40, 'DIAG3806', '2024-08-12 16:56:35', '2024-08-12 17:01:37', NULL, 'ewqe', 'eqeq', '0.8128', 19, '56ffuyfuyuyfyf', 'Proses', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosa_details`
--

CREATE TABLE `tb_diagnosa_details` (
  `id_diagnosa_detail` int(11) NOT NULL,
  `id_diagnosa` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_gejala` int(11) DEFAULT NULL,
  `cf_user` float DEFAULT NULL,
  `cf_expert` float DEFAULT NULL,
  `cf_he` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_diagnosa_details`
--

INSERT INTO `tb_diagnosa_details` (`id_diagnosa_detail`, `id_diagnosa`, `created_at`, `updated_at`, `id_gejala`, `cf_user`, `cf_expert`, `cf_he`) VALUES
(72, 33, '2024-08-12 08:45:57', '2024-08-12 08:45:57', 16, 1, 0.85, 0.85),
(73, 33, '2024-08-12 08:46:06', '2024-08-12 08:46:06', 37, 1, 0.8, 0.8),
(74, 33, '2024-08-12 08:46:39', '2024-08-12 08:46:39', 13, 1, 0.8, 0.8),
(75, 33, '2024-08-12 08:46:56', '2024-08-12 08:46:56', 14, 1, 0.8, 0.8),
(76, 33, '2024-08-12 08:47:10', '2024-08-12 08:47:10', 24, 1, 0.8, 0.8),
(77, 33, '2024-08-12 08:47:27', '2024-08-12 08:47:27', 30, 1, 0.8, 0.8),
(78, 33, '2024-08-12 08:48:04', '2024-08-12 08:48:04', 31, 1, 0.8, 0.8),
(81, 33, '2024-08-12 09:47:18', '2024-08-12 09:47:18', 32, 1, 0.8, 0.8),
(84, 34, '2024-08-12 10:22:33', '2024-08-12 10:22:33', 16, 1, 0.85, 0.85),
(85, 34, '2024-08-12 10:22:44', '2024-08-12 10:22:44', 17, 1, 0.9, 0.9),
(86, 34, '2024-08-12 10:22:57', '2024-08-12 10:22:57', 18, 1, 0.9, 0.9),
(87, 34, '2024-08-12 10:23:08', '2024-08-12 10:23:08', 19, 1, 0.9, 0.9),
(88, 34, '2024-08-12 10:23:27', '2024-08-12 10:23:27', 13, 1, 0.8, 0.8),
(89, 34, '2024-08-12 10:23:42', '2024-08-12 10:23:42', 14, 1, 0.8, 0.8),
(90, 34, '2024-08-12 10:24:02', '2024-08-12 10:24:02', 47, 1, 0.9, 0.9),
(91, 34, '2024-08-12 10:24:21', '2024-08-12 10:24:21', 22, 1, 0.9, 0.9),
(92, 34, '2024-08-12 10:24:35', '2024-08-12 10:24:35', 48, 1, 0.9, 0.9),
(137, 37, '2024-08-12 11:49:03', '2024-08-12 11:49:03', 37, 1, 0.8, 0.8),
(138, 37, '2024-08-12 11:49:03', '2024-08-12 11:49:03', 16, 1, 0.85, 0.85),
(139, 37, '2024-08-12 11:49:03', '2024-08-12 11:49:03', 31, 1, 0.8, 0.8),
(140, 37, '2024-08-12 11:49:03', '2024-08-12 11:49:03', 32, 1, 0.8, 0.8),
(141, 37, '2024-08-12 11:49:03', '2024-08-12 11:49:03', 13, 1, 0.8, 0.8),
(142, 37, '2024-08-12 11:49:03', '2024-08-12 11:49:03', 14, 1, 0.8, 0.8),
(143, 37, '2024-08-12 11:49:03', '2024-08-12 11:49:03', 30, 1, 0.8, 0.8),
(184, 36, '2024-08-12 16:46:35', '2024-08-12 16:46:56', 37, 1, 0.8, 0.8),
(185, 36, '2024-08-12 16:46:35', '2024-08-12 16:46:56', 16, 1, 0.85, 0.85),
(186, 36, '2024-08-12 16:46:35', '2024-08-12 16:46:56', 31, 1, 0.8, 0.8),
(187, 36, '2024-08-12 16:46:35', '2024-08-12 16:46:56', 32, 1, 0.8, 0.8),
(188, 36, '2024-08-12 16:46:35', '2024-08-12 16:46:56', 13, 1, 0.8, 0.8),
(189, 36, '2024-08-12 16:46:35', '2024-08-12 16:46:56', 14, 1, 0.8, 0.8),
(190, 36, '2024-08-12 16:46:35', '2024-08-12 16:53:38', 30, 0.8, 0.8, 0.64),
(192, 36, '2024-08-12 16:52:57', '2024-08-12 16:53:38', 24, 0.8, 0.8, 0.64),
(193, 40, '2024-08-12 16:59:30', '2024-08-12 16:59:43', 75, 0.6, 0.8, 0.48),
(194, 40, '2024-08-12 16:59:30', '2024-08-12 16:59:43', 35, 0.8, 0.8, 0.64);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejalas`
--

CREATE TABLE `tb_gejalas` (
  `id_gejala` int(11) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_gejalas`
--

INSERT INTO `tb_gejalas` (`id_gejala`, `nama_gejala`, `created_at`, `updated_at`) VALUES
(1, 'Demam Ringan', NULL, '2024-08-10 10:41:35'),
(2, 'Batuk Ringan', NULL, '2024-08-10 10:41:54'),
(3, 'Sesak Napas', NULL, NULL),
(13, 'Nyeri Otot', '2024-08-02 07:40:35', '2024-08-02 07:40:35'),
(14, 'Sakit Kepala', '2024-08-02 07:42:17', '2024-08-02 07:42:17'),
(15, 'Penyakit kuning', '2024-08-02 07:42:49', '2024-08-02 07:42:49'),
(16, 'Demam Tinggi', '2024-08-02 07:52:59', '2024-08-02 08:41:48'),
(17, 'Trombosit Turun', '2024-08-02 08:42:08', '2024-08-02 08:42:08'),
(18, 'Muncul Bintik Merah', '2024-08-02 08:42:35', '2024-08-02 08:42:35'),
(19, 'Sakit Di Persendian', '2024-08-02 08:42:59', '2024-08-02 08:42:59'),
(20, 'Nyeri Sendi', '2024-08-02 08:43:23', '2024-08-02 08:43:23'),
(21, 'Nyeri Perut', '2024-08-02 08:43:38', '2024-08-02 08:43:38'),
(22, 'Mual', '2024-08-02 08:44:03', '2024-08-02 08:44:03'),
(23, 'Muntah', '2024-08-02 08:44:21', '2024-08-02 08:44:21'),
(24, 'Tubuh Menggigil', '2024-08-02 08:44:46', '2024-08-02 08:44:46'),
(25, 'Tubuh Nyeri', '2024-08-02 08:45:48', '2024-08-02 08:45:48'),
(26, 'Pilek Ringan', '2024-08-02 08:46:12', '2024-08-10 10:41:17'),
(27, 'Kram Otot', '2024-08-02 08:46:46', '2024-08-02 08:46:46'),
(28, 'Gatal', '2024-08-02 08:46:57', '2024-08-02 08:46:57'),
(29, 'Nyeri Dada', '2024-08-02 09:48:44', '2024-08-02 09:48:44'),
(30, 'Sakit Tenggorokan', '2024-08-10 10:44:24', '2024-08-10 10:44:24'),
(31, 'Hidung Tersumbat', '2024-08-10 10:44:50', '2024-08-10 10:44:50'),
(32, 'Kelelahan', '2024-08-10 10:45:03', '2024-08-10 10:45:03'),
(33, 'Bersin-Bersin', '2024-08-10 10:46:20', '2024-08-10 10:46:20'),
(34, 'Sesak Napas', '2024-08-10 10:46:48', '2024-08-10 10:46:48'),
(35, 'Batuk Berdahak', '2024-08-10 10:47:08', '2024-08-10 10:47:08'),
(36, 'Suara Serak / Hilang', '2024-08-10 10:47:44', '2024-08-10 10:47:44'),
(37, 'Batuk Kering', '2024-08-10 10:48:01', '2024-08-10 10:48:01'),
(38, 'Pembengkakan Kelenjar Getah Bening', '2024-08-10 10:48:55', '2024-08-10 10:48:55'),
(39, 'Nyeri Pada Wajah', '2024-08-10 10:49:21', '2024-08-10 10:49:21'),
(40, 'Nyeri Telinga', '2024-08-10 10:49:50', '2024-08-10 10:49:50'),
(41, 'Batuk Kronis', '2024-08-10 10:50:06', '2024-08-10 10:50:06'),
(42, 'Keringat Malam', '2024-08-10 10:50:20', '2024-08-10 10:50:20'),
(43, 'Penurunan Berat Badan', '2024-08-10 10:50:33', '2024-08-10 10:50:33'),
(44, 'Gangguan Pada Pendengaran', '2024-08-10 10:50:59', '2024-08-10 10:50:59'),
(45, 'Keluarnya Cairan Dari Telinga', '2024-08-10 10:52:13', '2024-08-10 10:52:13'),
(46, 'Napas Terasa Cepat', '2024-08-10 10:52:41', '2024-08-10 10:52:41'),
(47, 'Ruam Kulit', '2024-08-10 11:18:42', '2024-08-10 11:18:42'),
(48, 'Mimisan', '2024-08-10 11:18:56', '2024-08-10 11:18:56'),
(49, 'Urin Berwarna Gelap', '2024-08-10 11:19:20', '2024-08-10 11:19:20'),
(50, 'Warna Kuning Pada Mata dan Kulit', '2024-08-10 11:20:03', '2024-08-10 11:20:03'),
(51, 'Kehilangan Napsu Makan', '2024-08-10 11:20:25', '2024-08-10 11:20:25'),
(52, 'Anemia', '2024-08-10 11:21:02', '2024-08-10 11:21:02'),
(53, 'Hidung Berair', '2024-08-10 11:21:26', '2024-08-10 11:21:26'),
(54, 'Mata Merah dan Berair', '2024-08-10 11:21:50', '2024-08-10 11:21:50'),
(55, 'Ruam Kulit Yang Menyebar Dari Wajah Sampai Seluruh Tubuh', '2024-08-10 11:22:43', '2024-08-10 11:22:43'),
(56, 'Bercak Putih DI Dalam Mulut', '2024-08-10 11:23:09', '2024-08-10 11:23:09'),
(57, 'Hilangnya Nafsu Makan', '2024-08-10 11:24:05', '2024-08-10 11:24:05'),
(58, 'Lidah yang Berlapis Dengan Ujung Merah', '2024-08-10 11:25:04', '2024-08-10 11:25:04'),
(59, 'Ruam Merah Muda Pada Perut / Dada', '2024-08-10 11:25:43', '2024-08-10 11:25:43'),
(60, 'Berat Badan Menurun', '2024-08-10 11:26:08', '2024-08-10 11:26:08'),
(61, 'Gatal Di Area Anus', '2024-08-10 11:26:35', '2024-08-10 11:26:35'),
(62, 'Napsu Makan Meningkat', '2024-08-10 11:26:58', '2024-08-10 11:26:58'),
(63, 'Napsu Makan Menurun Drastis', '2024-08-10 11:27:24', '2024-08-10 11:27:44'),
(64, 'Kebiruan Pada Bibir / Kuku', '2024-08-10 11:28:51', '2024-08-10 11:28:51'),
(65, 'Sulit Berbicara', '2024-08-10 11:29:19', '2024-08-10 11:29:19'),
(66, 'Nyeri Pada Leher', '2024-08-10 11:29:49', '2024-08-10 11:29:49'),
(67, 'Sulit Menelan', '2024-08-10 11:30:09', '2024-08-10 11:30:09'),
(68, 'Bercak Putih Pada Amandel', '2024-08-10 11:30:48', '2024-08-10 11:30:48'),
(69, 'Amandel Yang Merah dan Bengkak', '2024-08-10 11:31:17', '2024-08-10 11:31:17'),
(70, 'Kehilangan Penciuman Pada Hidung', '2024-08-10 11:32:10', '2024-08-10 11:32:10'),
(71, 'Bau Mulut', '2024-08-10 11:32:27', '2024-08-10 11:32:27'),
(72, 'Lendir Hidung Yang Kental dan Berwarna', '2024-08-10 11:33:05', '2024-08-10 11:33:05'),
(73, 'Sulit Bernapas', '2024-08-10 11:33:35', '2024-08-10 11:33:35'),
(74, 'Sulit Tidur', '2024-08-10 11:34:01', '2024-08-10 11:34:01'),
(75, 'Amandel Yang Membesar dan Merah', '2024-08-10 11:34:42', '2024-08-10 11:34:42'),
(76, 'Bercak Putih / Nanah Pada Amandel', '2024-08-10 11:35:38', '2024-08-10 11:35:38'),
(77, 'Mata Gatal dan Berair', '2024-08-10 11:36:20', '2024-08-10 11:36:20'),
(78, 'Diare', '2024-08-11 09:06:49', '2024-08-11 09:06:49'),
(79, 'Sakit Perut', '2024-08-11 09:11:01', '2024-08-11 09:11:01'),
(80, 'Pilek Berkepanjangan', '2024-08-11 09:39:41', '2024-08-11 09:39:41'),
(81, 'Gatal di Hidung dan Tenggorokan', '2024-08-11 10:02:10', '2024-08-11 10:02:10'),
(82, 'Sakit Kepala Sinus', '2024-08-11 10:03:44', '2024-08-11 10:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_levels`
--

CREATE TABLE `tb_levels` (
  `id_level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `activity_log` text DEFAULT NULL,
  `level_name` varchar(255) DEFAULT NULL,
  `create` bit(1) DEFAULT NULL,
  `read` bit(1) DEFAULT NULL,
  `update` bit(1) DEFAULT NULL,
  `delete` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_levels`
--

INSERT INTO `tb_levels` (`id_level`, `created_at`, `updated_at`, `created_by`, `updated_by`, `activity_log`, `level_name`, `create`, `read`, `update`, `delete`) VALUES
(1, NULL, '2024-06-07 02:52:52', NULL, 'Riki', NULL, 'Admin', b'1', b'1', b'1', b'1'),
(2, NULL, '2024-06-07 02:52:48', NULL, 'Riki', NULL, 'Doktor', b'1', b'1', b'1', b'1'),
(14, '2024-07-22 09:54:50', '2024-07-22 09:54:50', 'Riki', NULL, NULL, 'Anonim', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_menufirsts`
--

CREATE TABLE `tb_menufirsts` (
  `id_firstmenu` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `activity_log` text DEFAULT NULL,
  `firstmenu_name` varchar(255) DEFAULT NULL,
  `firstmenu_link` varchar(255) DEFAULT NULL,
  `firstmenu_icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_menufirsts`
--

INSERT INTO `tb_menufirsts` (`id_firstmenu`, `created_at`, `updated_at`, `created_by`, `updated_by`, `activity_log`, `firstmenu_name`, `firstmenu_link`, `firstmenu_icon`) VALUES
(20, '2024-07-01 09:32:11', '2024-07-10 09:55:51', 'Riki', 'Riki', NULL, 'Pengguna', 'user', 'fas fa-user'),
(28, '2024-07-04 11:07:14', '2024-07-04 11:54:28', 'Riki', 'Riki', NULL, 'Aplikasi', '#', 'fas fa-table'),
(29, '2024-07-10 09:58:20', NULL, 'Riki', NULL, NULL, 'Master', '#', 'fas fa-table'),
(30, '2024-07-10 11:24:57', '2024-07-10 11:26:06', 'David', 'David', NULL, 'Diagnosa', 'diagnosa', 'bi bi-heart-pulse-fill'),
(31, '2024-07-10 13:38:50', NULL, 'David', NULL, NULL, 'Pasien', 'pasien', 'fas fa-users');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menuseconds`
--

CREATE TABLE `tb_menuseconds` (
  `id_secondmenu` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `activity_log` text DEFAULT NULL,
  `secondmenu_name` varchar(255) DEFAULT NULL,
  `secondmenu_link` varchar(255) DEFAULT NULL,
  `secondmenu_icon` varchar(255) DEFAULT NULL,
  `id_firstmenu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_menuseconds`
--

INSERT INTO `tb_menuseconds` (`id_secondmenu`, `created_at`, `updated_at`, `created_by`, `updated_by`, `activity_log`, `secondmenu_name`, `secondmenu_link`, `secondmenu_icon`, `id_firstmenu`) VALUES
(28, '2024-07-04 11:07:55', '2024-07-04 11:09:41', 'Riki', 'Riki', NULL, 'Menu', 'menu', 'far fa-circle', 28),
(29, '2024-07-04 11:08:23', '2024-07-04 11:09:53', 'Riki', 'Riki', NULL, 'Level', 'level', 'far fa-circle', 28),
(35, '2024-07-10 09:59:48', NULL, 'Riki', NULL, NULL, 'Gejala', 'gejala', 'far fa-circle', 29),
(36, '2024-07-10 10:00:09', NULL, 'Riki', NULL, NULL, 'Penyakit', 'penyakit', 'far fa-circle', 29),
(37, '2024-07-10 10:16:56', NULL, 'Riki', NULL, NULL, 'Aturan Diagnosa', 'aturan_diagnosa', 'far fa-circle', 29);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasiens`
--

CREATE TABLE `tb_pasiens` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `no_nik` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pasiens`
--

INSERT INTO `tb_pasiens` (`id_pasien`, `nama_pasien`, `created_at`, `updated_at`, `no_nik`, `tanggal_lahir`, `tempat_lahir`, `alamat`) VALUES
(5, 'Ucok', '2024-07-10 13:39:16', '2024-07-21 21:17:15', '1571072104990081', '1999-04-21', 'Pekanbaru', 'Jl. Kenali'),
(6, 'Wong', '2024-07-10 13:39:38', '2024-07-21 21:15:42', '1571072203980081', '1998-03-22', 'Palembang', 'Jl. Nangka'),
(7, 'Asep', '2024-07-10 13:39:51', '2024-07-21 21:14:59', '1571072202970081', '1997-02-22', 'Jambi', 'Jl. Mawar'),
(10, 'jhkhkkhk', '2024-07-22 10:18:44', '2024-07-22 10:18:44', '15709090', NULL, NULL, NULL),
(11, 'jhkhkkhk', '2024-07-22 10:21:35', '2024-07-22 10:21:35', '15709090', NULL, NULL, NULL),
(12, 'jhkhkkhk', '2024-07-22 10:23:32', '2024-07-22 10:23:32', '15709090', NULL, NULL, NULL),
(13, 'jhkhkkhk', '2024-07-22 10:26:44', '2024-07-22 10:26:44', '15709090', NULL, NULL, NULL),
(14, 'hhfh', '2024-07-22 10:29:10', '2024-07-22 10:29:10', '775775`', NULL, NULL, NULL),
(15, 'lili', '2024-07-23 03:45:47', '2024-07-23 03:45:47', '123456789765432', NULL, NULL, NULL),
(16, 'kiki', '2024-07-23 06:23:29', '2024-07-23 06:23:29', '123257856884', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakits`
--

CREATE TABLE `tb_penyakits` (
  `id_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_penyakits`
--

INSERT INTO `tb_penyakits` (`id_penyakit`, `nama_penyakit`, `created_at`, `updated_at`, `keterangan`) VALUES
(1, 'Pilek Biasa', NULL, '2024-08-10 09:32:38', NULL),
(2, 'Pneumonia', NULL, NULL, NULL),
(5, 'Malaria', '2024-08-02 06:05:11', '2024-08-02 08:27:10', NULL),
(6, 'Tipes', '2024-08-02 06:28:02', '2024-08-02 08:26:49', NULL),
(7, 'Cacingan', '2024-08-02 06:28:20', '2024-08-02 08:26:34', NULL),
(8, 'Influenza', '2024-08-02 07:43:19', '2024-08-12 11:51:15', 'pengobatan'),
(9, 'Hepatitis', '2024-08-02 08:36:17', '2024-08-02 08:36:17', NULL),
(10, 'Campak', '2024-08-02 08:39:23', '2024-08-02 08:39:23', NULL),
(11, 'Demam Berdarah Dangue (DBD)', '2024-08-02 08:40:14', '2024-08-10 09:31:53', NULL),
(12, 'Bronkitis Akut', '2024-08-10 09:33:04', '2024-08-10 09:33:04', NULL),
(14, 'Laringitis', '2024-08-10 09:33:52', '2024-08-10 09:33:52', NULL),
(15, 'Farangitis', '2024-08-10 09:34:05', '2024-08-10 09:34:05', NULL),
(16, 'Sinusitis Akut', '2024-08-10 09:34:20', '2024-08-10 09:34:20', NULL),
(17, 'Tuberkolosis', '2024-08-10 09:34:37', '2024-08-10 09:34:37', NULL),
(18, 'Infeksi Telinga Tengah', '2024-08-10 09:35:21', '2024-08-10 09:35:21', NULL),
(19, 'Tonsilitis', '2024-08-10 09:35:52', '2024-08-10 09:35:52', '56ffuyfuyuyfyf'),
(20, 'Bronkiolitis', '2024-08-10 09:36:11', '2024-08-10 10:28:00', NULL),
(21, 'Alergi Debu', '2024-08-10 09:36:34', '2024-08-10 09:36:34', NULL),
(22, 'Infeksi Jamur Paru-Paru', '2024-08-10 09:37:04', '2024-08-10 09:37:04', NULL),
(23, 'Flu Burung', '2024-08-10 09:37:26', '2024-08-10 09:37:26', NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `activity_log` text DEFAULT NULL,
  `id_level` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `created_by`, `updated_by`, `activity_log`, `id_level`, `no_hp`, `status`) VALUES
(1, 'Nurul', 'nurul@gmail.com', NULL, '$2y$12$vJ4Eod.mzFkJJ.u5Plv9b.f9iQ.F4vYHbK8pGB/0ZtF6yTyr1Tf6m', NULL, '2024-05-20 04:09:36', '2024-07-23 03:51:33', NULL, NULL, NULL, '1', '0898796978', 'Aktif'),
(2, 'Annila', 'annila@gmail.com', NULL, '$2y$12$FD/gMH6b3Dcs6Gnw31qWEeM.ndn/01XCMcZpDk8YOzUZ7paq6uQvG', NULL, '2024-05-20 04:09:36', '2024-07-23 03:51:07', NULL, NULL, NULL, '2', '0989789789986', 'Aktif'),
(3, 'Anonim', 'anonim@gmail.com', NULL, '$2y$12$4TN58CAd42OU2xGWH14aaOZy0jmPA/MozUqx9gmdRWFroKsYdy8hu', NULL, '2024-07-22 09:54:37', '2024-07-22 09:55:04', NULL, NULL, NULL, '14', '0988768686867', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`) USING BTREE;

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`) USING BTREE;

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`) USING BTREE;

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `jobs_queue_index` (`queue`) USING BTREE;

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`) USING BTREE;

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `sessions_user_id_index` (`user_id`) USING BTREE,
  ADD KEY `sessions_last_activity_index` (`last_activity`) USING BTREE;

--
-- Indexes for table `tb_accessmenus`
--
ALTER TABLE `tb_accessmenus`
  ADD PRIMARY KEY (`id_accessmenu`) USING BTREE,
  ADD KEY `fkey_id_level_tb_accessmenus` (`id_level`);

--
-- Indexes for table `tb_aturan_diagnosas`
--
ALTER TABLE `tb_aturan_diagnosas`
  ADD PRIMARY KEY (`id_aturan_diagnosa`) USING BTREE,
  ADD KEY `fkey_tb_aturan_diagnosa_id_gejala` (`id_gejala`),
  ADD KEY `fkey_tb_aturan_diagnosa_id_penyakit` (`id_penyakit`);

--
-- Indexes for table `tb_diagnosas`
--
ALTER TABLE `tb_diagnosas`
  ADD PRIMARY KEY (`id_diagnosa`) USING BTREE,
  ADD KEY `fkey_tb_diagnosas_id_pasien` (`id_pasien`),
  ADD KEY `fkey_tb_diagnosas_id_penyakit` (`id_penyakit`);

--
-- Indexes for table `tb_diagnosa_details`
--
ALTER TABLE `tb_diagnosa_details`
  ADD PRIMARY KEY (`id_diagnosa_detail`) USING BTREE,
  ADD KEY `fkey_tb_diagnosa_details_id_diagnosa` (`id_diagnosa`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- Indexes for table `tb_gejalas`
--
ALTER TABLE `tb_gejalas`
  ADD PRIMARY KEY (`id_gejala`) USING BTREE;

--
-- Indexes for table `tb_levels`
--
ALTER TABLE `tb_levels`
  ADD PRIMARY KEY (`id_level`) USING BTREE;

--
-- Indexes for table `tb_menufirsts`
--
ALTER TABLE `tb_menufirsts`
  ADD PRIMARY KEY (`id_firstmenu`) USING BTREE;

--
-- Indexes for table `tb_menuseconds`
--
ALTER TABLE `tb_menuseconds`
  ADD PRIMARY KEY (`id_secondmenu`) USING BTREE,
  ADD KEY `fkey_id_firstmenu_tb_menuseconds` (`id_firstmenu`);

--
-- Indexes for table `tb_pasiens`
--
ALTER TABLE `tb_pasiens`
  ADD PRIMARY KEY (`id_pasien`) USING BTREE;

--
-- Indexes for table `tb_penyakits`
--
ALTER TABLE `tb_penyakits`
  ADD PRIMARY KEY (`id_penyakit`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_accessmenus`
--
ALTER TABLE `tb_accessmenus`
  MODIFY `id_accessmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `tb_aturan_diagnosas`
--
ALTER TABLE `tb_aturan_diagnosas`
  MODIFY `id_aturan_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `tb_diagnosas`
--
ALTER TABLE `tb_diagnosas`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tb_diagnosa_details`
--
ALTER TABLE `tb_diagnosa_details`
  MODIFY `id_diagnosa_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `tb_gejalas`
--
ALTER TABLE `tb_gejalas`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tb_levels`
--
ALTER TABLE `tb_levels`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_menufirsts`
--
ALTER TABLE `tb_menufirsts`
  MODIFY `id_firstmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_menuseconds`
--
ALTER TABLE `tb_menuseconds`
  MODIFY `id_secondmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_pasiens`
--
ALTER TABLE `tb_pasiens`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_penyakits`
--
ALTER TABLE `tb_penyakits`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_accessmenus`
--
ALTER TABLE `tb_accessmenus`
  ADD CONSTRAINT `fkey_id_level_tb_accessmenus` FOREIGN KEY (`id_level`) REFERENCES `tb_levels` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_aturan_diagnosas`
--
ALTER TABLE `tb_aturan_diagnosas`
  ADD CONSTRAINT `fkey_tb_aturan_diagnosa_id_gejala` FOREIGN KEY (`id_gejala`) REFERENCES `tb_gejalas` (`id_gejala`),
  ADD CONSTRAINT `fkey_tb_aturan_diagnosa_id_penyakit` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakits` (`id_penyakit`);

--
-- Constraints for table `tb_diagnosas`
--
ALTER TABLE `tb_diagnosas`
  ADD CONSTRAINT `fkey_tb_diagnosas_id_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasiens` (`id_pasien`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkey_tb_diagnosas_id_penyakit` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakits` (`id_penyakit`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_diagnosa_details`
--
ALTER TABLE `tb_diagnosa_details`
  ADD CONSTRAINT `fkey_tb_diagnosa_details_id_diagnosa` FOREIGN KEY (`id_diagnosa`) REFERENCES `tb_diagnosas` (`id_diagnosa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_menuseconds`
--
ALTER TABLE `tb_menuseconds`
  ADD CONSTRAINT `fkey_id_firstmenu_tb_menuseconds` FOREIGN KEY (`id_firstmenu`) REFERENCES `tb_menufirsts` (`id_firstmenu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
