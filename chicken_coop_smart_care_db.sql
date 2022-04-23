-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 02:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chicken_coop_smart_care_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `body`
--

CREATE TABLE `body` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `volume` double(8,2) NOT NULL,
  `chicken_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `bodytype_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `body`
--

INSERT INTO `body` (`id`, `volume`, `chicken_id`, `user_id`, `bodytype_id`, `active`, `created_at`, `updated_at`) VALUES
(1, 11.20, 'A-1', 2, 1, 1, '2022-03-14 21:19:30', '2022-04-14 22:58:16'),
(2, 10.20, 'A-1', 2, 1, 1, '2022-03-14 21:19:30', '2022-04-14 22:34:20'),
(3, 13.20, 'A-1', 2, 1, 1, '2022-03-14 21:19:30', '2022-04-14 22:34:30'),
(4, 13.00, 'A-1', 2, 2, 1, '2022-03-14 21:19:30', '2022-03-14 21:19:30'),
(5, 14.00, 'A-1', 2, 2, 1, '2022-03-14 21:19:30', '2022-03-14 21:19:30'),
(6, 15.00, 'A-1', 2, 2, 1, '2022-03-14 21:19:30', '2022-03-14 21:19:30'),
(7, 4.50, 'A-1', 2, 3, 1, '2022-03-14 21:19:30', '2022-03-14 21:19:30'),
(8, 4.70, 'A-1', 2, 3, 1, '2022-03-14 21:19:30', '2022-03-14 21:19:30'),
(9, 4.00, 'A-1', 2, 3, 1, '2022-03-14 21:19:30', '2022-03-14 21:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `bodytype`
--

CREATE TABLE `bodytype` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bodytype`
--

INSERT INTO `bodytype` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'น้ำหนัก', '2022-03-14 21:19:17', '2022-03-14 21:19:17'),
(2, 'ความยาวแข้ง', '2022-03-14 21:19:17', '2022-03-14 21:19:17'),
(3, 'รอบอก', '2022-03-14 21:19:17', '2022-03-14 21:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `breed`
--

CREATE TABLE `breed` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chicken_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chicken_hen_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `egg_total` int(11) NOT NULL,
  `egg_infected_total` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `breed`
--

INSERT INTO `breed` (`id`, `chicken_id`, `chicken_hen_id`, `egg_total`, `egg_infected_total`, `active`, `created_at`, `updated_at`) VALUES
(1, 'A-1', 'A-20', 30, 25, 1, '2022-02-14 21:30:12', '2022-04-15 00:46:08'),
(2, 'A-1', 'A-22', 22, 21, 1, '2022-02-27 21:30:12', '2022-02-27 21:30:12'),
(3, 'A-1', 'A-14', 30, 28, 1, '2022-03-15 21:30:12', '2022-03-15 21:30:12'),
(4, 'A-1', 'A-12', 25, 22, 1, '2022-03-31 21:30:12', '2022-04-15 00:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `checkegg`
--

CREATE TABLE `checkegg` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `egg_spawn` int(11) NOT NULL,
  `chicken_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkegg`
--

INSERT INTO `checkegg` (`id`, `egg_spawn`, `chicken_id`, `user_id`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'A-12', 2, 1, '2022-03-31 21:35:16', '2022-03-31 21:35:16'),
(2, 1, 'A-12', 2, 1, '2022-04-01 21:35:16', '2022-04-01 21:35:16'),
(3, 1, 'A-12', 2, 1, '2022-04-02 21:35:16', '2022-04-02 21:35:16'),
(4, 1, 'A-12', 2, 1, '2022-04-04 21:35:16', '2022-04-04 21:35:16'),
(5, 1, 'A-12', 2, 1, '2022-04-06 21:35:16', '2022-04-06 21:35:16');

-- --------------------------------------------------------

--
-- Table structure for table `chickenphases`
--

CREATE TABLE `chickenphases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phase_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chickenphases`
--

INSERT INTO `chickenphases` (`id`, `phase_name`, `active`, `created_at`, `updated_at`) VALUES
(1, 'ไก่เด็ก', 1, '2022-02-16 18:12:58', '2022-02-16 18:12:58'),
(2, 'ไก่รุ่น', 1, '2022-02-16 18:12:58', '2022-02-16 18:12:58'),
(3, 'ไก่หนุ่ม ไก่สาว', 1, '2022-02-16 18:12:58', '2022-02-16 18:12:58'),
(4, 'ไก่ทดแทน', 1, '2022-02-16 18:12:58', '2022-02-16 18:12:58'),
(5, 'ไก่พ่อแม่พันธุ์', 1, '2022-02-16 18:12:58', '2022-02-16 18:12:58');

-- --------------------------------------------------------

--
-- Table structure for table `chickens`
--

CREATE TABLE `chickens` (
  `id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chickenspecies_id` int(11) NOT NULL,
  `chicken_phase_id` int(11) NOT NULL,
  `father_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expect_sex` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_born` double(8,2) DEFAULT NULL,
  `birthday` date NOT NULL,
  `first_egg_date` date DEFAULT NULL,
  `first_egg_weight` double(8,2) DEFAULT NULL,
  `first_egg_age` int(11) DEFAULT NULL,
  `weight_first_egg` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chickens`
--

INSERT INTO `chickens` (`id`, `chickenspecies_id`, `chicken_phase_id`, `father_id`, `mother_id`, `expect_sex`, `sex`, `temp_born`, `birthday`, `first_egg_date`, `first_egg_weight`, `first_egg_age`, `weight_first_egg`, `created_at`, `updated_at`) VALUES
('A-1', 1, 4, NULL, NULL, 'ผู้', 'ผู้', 35.00, '2021-12-23', NULL, NULL, NULL, NULL, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-10', 1, 5, 'A-1', 'A-2', NULL, 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-11', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-11111', 1, 2, NULL, NULL, 'female', 'ผู้', NULL, '2022-01-06', NULL, NULL, NULL, NULL, '2022-04-14 22:17:51', '2022-04-14 22:17:51'),
('A-12', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-13', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-14', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-15', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-16', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-17', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-18', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-19', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-2', 2, 4, NULL, NULL, 'ผู้', 'เมีย', 35.00, '2021-12-23', '2022-02-01', 53.00, 20, 1.34, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-20', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-21', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-22', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-23', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-24', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-3', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-4', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-5', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-6', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-65', 1, 1, 'asd', 'asd', 'female', NULL, 123.00, '2022-04-14', NULL, NULL, NULL, NULL, '2022-04-14 22:11:32', '2022-04-14 22:11:32'),
('A-7', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-8', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11'),
('A-9', 1, 5, 'A-1', 'A-2', 'เมีย', 'เมีย', 34.00, '2021-12-23', '2022-02-03', 64.00, 18, 1.23, '2022-04-14 16:25:11', '2022-04-14 16:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `chickenspecies`
--

CREATE TABLE `chickenspecies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chickenspecies`
--

INSERT INTO `chickenspecies` (`id`, `name`, `active`, `created_at`, `updated_at`) VALUES
(1, 'ไก่แดง', 1, '2022-02-16 17:43:40', '2022-02-26 18:42:15'),
(2, 'ไก่ดำ', 1, '2022-02-16 17:43:46', '2022-02-16 17:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `dht22`
--

CREATE TABLE `dht22` (
  `id` int(11) NOT NULL,
  `humidity` float NOT NULL,
  `fahrenheit` float NOT NULL,
  `temperature` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dht22`
--

INSERT INTO `dht22` (`id`, `humidity`, `fahrenheit`, `temperature`, `date`, `created_at`, `updated_at`) VALUES
(1, 84.38, 86.2, 29.1, '2022-01-31 20:23:30', NULL, NULL),
(2, 84.2, 86.1, 29, '2022-01-31 20:23:35', NULL, NULL),
(3, 84.2, 86.1, 29, '2022-01-31 20:23:44', NULL, NULL),
(4, 84.2, 86, 29, '2022-01-31 20:24:34', NULL, NULL),
(5, 84.2, 86, 29, '2022-01-31 20:25:24', NULL, NULL),
(6, 84.2, 85.8, 29, '2022-01-31 20:26:14', NULL, NULL),
(7, 84.2, 85.7, 29, '2022-01-31 20:27:04', NULL, NULL),
(8, 1, 2, 13, '2022-02-18 13:07:39', '2022-02-18 13:07:39', '2022-02-18 13:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `name`, `detail`, `active`, `created_at`, `updated_at`) VALUES
(1, 'ไก่', 'หกฟหกasd', 1, '2022-02-26 17:48:12', '2022-04-13 16:18:48'),
(2, 'ไก่asd', 'asd', 0, '2022-02-26 18:01:37', '2022-02-26 18:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `managedetail`
--

CREATE TABLE `managedetail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chicken_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `manage_detail` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `managetype`
--

CREATE TABLE `managetype` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manage_type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managetype`
--

INSERT INTO `managetype` (`id`, `manage_type_name`, `created_at`, `updated_at`) VALUES
(1, 'เพิ่มไก่', '2022-04-14 14:45:03', '2022-04-14 14:45:03'),
(2, 'ให้อาหาร', '2022-04-14 14:45:03', '2022-04-14 14:45:03'),
(3, 'ฉีดวัคซีน', '2022-04-14 14:45:03', '2022-04-14 14:45:03'),
(4, 'บันทึกน้ำหนัก', '2022-04-14 14:45:03', '2022-04-14 14:45:03'),
(5, 'บันทึกขนาดตัว', '2022-04-14 14:45:03', '2022-04-14 14:45:03'),
(6, 'คัดเลือกไก้พันธุ์', '2022-04-14 14:45:03', '2022-04-14 14:45:03'),
(7, 'จับคู่ผสมพันธุ์', '2022-04-14 14:45:03', '2022-04-14 14:45:03'),
(8, 'บันทึกการให้ไข่', '2022-04-14 14:45:03', '2022-04-14 14:45:03'),
(9, 'บันทึกการผสมติด', '2022-04-14 14:45:03', '2022-04-14 14:45:03');

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
(2, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_01_19_144010_create_sessions_table', 1),
(5, '2022_01_27_181048_vaccine', 1),
(6, '2022_01_27_181239_food', 1),
(7, '2022_01_27_181258_stall', 1),
(8, '2022_01_27_181318_chickenphase', 1),
(9, '2022_01_28_184858_chickenspecies', 1),
(10, '2022_02_16_231717_chicken', 2),
(14, '2022_02_17_000616_chicken', 3),
(16, '2022_03_27_123335_sensormid', 4),
(17, '2022_04_10_060027_reset_password', 5),
(18, '2022_04_13_222040_managedetail', 6),
(19, '2022_04_14_213600_managetype', 7),
(21, '2022_04_15_014234_user_manage_detail', 8),
(22, '2022_04_15_032311_vaccinate', 9),
(23, '2022_04_15_034718_check_egg', 10),
(24, '2022_04_15_035345_body_type', 11),
(25, '2022_04_15_035703_body', 12),
(26, '2022_04_15_040004_breed', 13);

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reset_password`
--

INSERT INTO `reset_password` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(15, 'domelaz2556@gmail.com', 'r76CgwHQRbYop1YnOz27G8awICUeZI1gnG9rv3brh25AAWYAMnEusinuGL2fYT8J', '2022-04-17 12:26:01', '2022-04-17 12:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `sensormid`
--

CREATE TABLE `sensormid` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sm_temperature` double(8,2) DEFAULT NULL,
  `sm_humudity` double(8,2) DEFAULT NULL,
  `sm_ammonia` double(8,2) DEFAULT NULL,
  `sm_light_intensity` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sensormid`
--

INSERT INTO `sensormid` (`id`, `sm_temperature`, `sm_humudity`, `sm_ammonia`, `sm_light_intensity`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 3.00, '2022-03-27 05:48:43', '2022-03-27 05:48:43'),
(2, NULL, NULL, NULL, 3.00, '2022-03-27 05:50:06', '2022-03-27 05:50:06'),
(3, NULL, NULL, NULL, 3.00, '2022-03-27 05:51:21', '2022-03-27 05:51:21'),
(4, 1.00, 2.00, NULL, 3.00, '2022-03-27 05:52:10', '2022-03-27 05:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('GztXoIjLxkKBIWBYgH9pAjGEV6XUbo6qFsX2TGjz', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36 Edg/100.0.1185.44', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiMXZVU3ZabWo5UlFSUUNpWjFGT0tEbm9ZcUhFQVNqRzFOTmdOdUQ5eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tZW51Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJE02RC9vYTVZd0p1cEU2a2dRRFJVcHVtRG1RT2RHOHNsVE1iRDM3YVljN3pvd1hjdFBVTmpHIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRNNkQvb2E1WXdKdXBFNmtnUURSVXB1bURtUU9kRzhzbFRNYkQzN2FZYzd6b3dYY3RQVU5qRyI7fQ==', 1650199137);

-- --------------------------------------------------------

--
-- Table structure for table `stalls`
--

CREATE TABLE `stalls` (
  `id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stalls`
--

INSERT INTO `stalls` (`id`, `name`, `active`, `created_at`, `updated_at`) VALUES
('A-123', '123123123', 0, '2022-02-26 17:38:37', '2022-02-26 17:38:44'),
('A-54', 'คอกไก่แดง', 1, '2022-02-16 17:04:47', '2022-02-26 17:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `usermanagedetail`
--

CREATE TABLE `usermanagedetail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_managed_id` int(11) NOT NULL,
  `detail` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titlename` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_id` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `titlename`, `firstname`, `lastname`, `std_id`, `email`, `role`, `active`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'Admin', NULL, 'admin@admin.com', 'superadmin', 1, '$2y$10$msRFId4um4bvOjPyA91fzuRwdz2QHzUYd4WiRHNp7wfWrdMRsFqWS', '2022-02-14 11:05:39', '2022-02-14 11:05:39'),
(2, 'นาย', 'ผู้ใช้งาน', 'คนแรก', NULL, 'user@user.com', 'user', 1, '$2y$10$M6D/oa5YwJupE6kgQDRUpumDmQOdG8slTMbD37aYc7zowXctPUNjG', '2022-02-14 11:05:39', '2022-04-14 19:53:21'),
(3, 'นาย', 'User1', 'User1', '236578940-9', 'user1@user.com', 'user', 1, '$2y$10$IFwZLUAvY3hCKpmNnSdqQ.yi86cLNhamg/kGlybDvj3zOvYrUtHP2', '2022-02-14 11:05:39', '2022-04-14 18:47:06'),
(4, 'นาย', 'User2', 'User2', NULL, 'user2@user.com', 'user', 0, '$2y$10$ScaAr9nhHzk4/HAVoY3x.ejgyoljaxPhmhYqEgWqxH818RCui0W9S', '2022-02-14 11:05:39', '2022-04-13 22:07:31'),
(5, 'นาย', 'พงศ์พณิช', 'เสนาภักดิ์', '623020383-4', 'phongphanit.se@kkumail.com', 'admin', 1, '$2y$10$hZfz5rfiIB3dw4YVqzYyr.GaIcDKJSVIRS0nyrk1fylB5PG6tgkMG', '2022-02-17 03:53:07', '2022-04-13 15:43:51'),
(7, 'นาย', 'พงศ์พณิช', 'เสนาภักดิ์', NULL, 'domelaz2556@gmail.com', '0', 0, '$2y$10$qLSu5fsighAwIssM3jb59OsdcZz3rJR0gyG.lZ7eM3f0ywTIwhDWG', '2022-02-16 18:59:46', '2022-04-14 18:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinate`
--

CREATE TABLE `vaccinate` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chicken_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vaccine_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `chicken_weight` double(8,2) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaccinate`
--

INSERT INTO `vaccinate` (`id`, `chicken_id`, `vaccine_id`, `user_id`, `chicken_weight`, `active`, `created_at`, `updated_at`) VALUES
(1, 'A-1', 1, 2, 21.10, 1, '2022-03-01 21:24:49', '2022-04-15 00:45:21'),
(2, 'A-1', 1, 2, 23.20, 1, '2022-03-08 21:24:49', '2022-03-08 21:24:49'),
(3, 'A-1', 1, 2, 21.40, 1, '2022-03-14 21:24:49', '2022-04-15 00:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`id`, `name`, `detail`, `active`, `created_at`, `updated_at`) VALUES
(1, 'az', 'az', 1, '2022-02-26 18:38:29', '2022-02-26 18:46:19'),
(2, 'asdasd', '123', 0, '2022-02-26 18:46:07', '2022-02-26 18:46:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `body`
--
ALTER TABLE `body`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bodytype`
--
ALTER TABLE `bodytype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breed`
--
ALTER TABLE `breed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkegg`
--
ALTER TABLE `checkegg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chickenphases`
--
ALTER TABLE `chickenphases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chickens`
--
ALTER TABLE `chickens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chickenspecies`
--
ALTER TABLE `chickenspecies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dht22`
--
ALTER TABLE `dht22`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managedetail`
--
ALTER TABLE `managedetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managetype`
--
ALTER TABLE `managetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sensormid`
--
ALTER TABLE `sensormid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `stalls`
--
ALTER TABLE `stalls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usermanagedetail`
--
ALTER TABLE `usermanagedetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_std_id_unique` (`std_id`);

--
-- Indexes for table `vaccinate`
--
ALTER TABLE `vaccinate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `body`
--
ALTER TABLE `body`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `breed`
--
ALTER TABLE `breed`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `checkegg`
--
ALTER TABLE `checkegg`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chickenphases`
--
ALTER TABLE `chickenphases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chickenspecies`
--
ALTER TABLE `chickenspecies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dht22`
--
ALTER TABLE `dht22`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `managedetail`
--
ALTER TABLE `managedetail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `managetype`
--
ALTER TABLE `managetype`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sensormid`
--
ALTER TABLE `sensormid`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usermanagedetail`
--
ALTER TABLE `usermanagedetail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vaccinate`
--
ALTER TABLE `vaccinate`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
