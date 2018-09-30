-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 09, 2018 at 08:34 AM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trms3`
--

-- --------------------------------------------------------

--
-- Table structure for table `aso_timing_checks`
--

DROP TABLE IF EXISTS `aso_timing_checks`;
CREATE TABLE IF NOT EXISTS `aso_timing_checks` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `test_id` int(11) NOT NULL,
  `sample_id` int(11) DEFAULT NULL,
  `doc_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `power_rating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_purpose` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rev_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wire_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flex_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bending_angle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `progress_action` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci,
  `0_cycle_min` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `0_cycle_max` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `0_cycle_mean` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `0_cycle_horizontal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `0_cycle_vertical` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1000_cycle_min` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1000_cycle_max` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1000_cycle_mean` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1000_cycle_horizontal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1000_cycle_vertical` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aso_timing_checks`
--

INSERT INTO `aso_timing_checks` (`id`, `test_id`, `sample_id`, `doc_num`, `power_rating`, `test_purpose`, `rev_num`, `supplier`, `wire_size`, `pin_type`, `flex_type`, `bending_angle`, `weight`, `current`, `issue`, `progress_action`, `status`, `0_cycle_min`, `0_cycle_max`, `0_cycle_mean`, `0_cycle_horizontal`, `0_cycle_vertical`, `1000_cycle_min`, `1000_cycle_max`, `1000_cycle_mean`, `1000_cycle_horizontal`, `1000_cycle_vertical`, `result`, `remark`, `created_at`, `updated_at`) VALUES
(1, 1711300701, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-30 08:32:56', '2017-11-30 08:33:53'),
(2, 1711300801, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-30 08:33:32', '2017-11-30 08:33:32'),
(3, 1711301201, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-30 08:41:37', '2017-11-30 09:39:13'),
(4, 1712220501, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-22 08:04:22', '2017-12-22 08:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `test_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `test_id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 1707190201, 6, 'A block of comment code that can applied for every template', '2017-07-19 07:40:07', '2017-07-19 07:40:07'),
(2, 1707190102, 6, 'leave a comment', '2017-07-21 09:25:36', '2017-07-21 09:25:36'),
(3, 1707240101, 6, '23132131', '2017-07-24 03:34:15', '2017-07-24 03:34:15'),
(4, 1707240101, 6, 'sample 1 failed due to something', '2017-07-24 03:34:48', '2017-07-24 03:34:48'),
(5, 1707240101, 1, 'fok', '2017-07-24 03:35:48', '2017-07-24 03:35:48'),
(6, 1707240101, 6, 'ff', '2017-10-02 08:03:58', '2017-10-02 08:03:58'),
(7, 1711160101, 6, 'fff', '2017-11-16 01:26:07', '2017-11-16 01:26:07'),
(8, 1711160101, 6, 'ddd', '2017-11-16 02:30:49', '2017-11-16 02:30:49'),
(9, 1711160101, 6, '123', '2017-11-16 02:31:12', '2017-11-16 02:31:12'),
(10, 1711160101, 6, 'jjj', '2017-11-16 06:25:53', '2017-11-16 06:25:53'),
(11, 1711160201, 6, 'equipment down. investigation ongoing.', '2017-11-16 09:33:41', '2017-11-16 09:33:41'),
(12, 1711160201, 6, 'equipment fault found to be caused by a fuse open circuit. replaced and equipment back up continue to run the test.', '2017-11-16 09:34:12', '2017-11-16 09:34:12'),
(13, 1711170101, 6, 'sample #1 faulty. not pumping.', '2017-11-17 07:39:16', '2017-11-17 07:39:16'),
(14, 1707240101, 10, 'hello', '2018-01-24 07:03:46', '2018-01-24 07:03:46'),
(15, 1707240101, 6, 'hi', '2018-02-06 07:12:11', '2018-02-06 07:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `downtimeform`
--

DROP TABLE IF EXISTS `downtimeform`;
CREATE TABLE IF NOT EXISTS `downtimeform` (
  `id` int(110) NOT NULL AUTO_INCREMENT,
  `machinesname` text,
  `fromdate` date DEFAULT NULL,
  `todate` date DEFAULT NULL,
  `downreason` text,
  `downremark` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downtimeform`
--

INSERT INTO `downtimeform` (`id`, `machinesname`, `fromdate`, `todate`, `downreason`, `downremark`, `created_at`, `updated_at`) VALUES
(16, '--------------------------------select----------------------------------', NULL, NULL, NULL, NULL, '2018-02-09 08:02:25', '2018-02-09 08:02:25'),
(15, NULL, '2018-02-09', '2018-02-28', '123', '123', '2018-02-09 07:58:58', '2018-02-09 07:58:58'),
(14, '123', '2018-02-20', '2018-02-20', '123', '123', '2018-02-09 07:56:05', '2018-02-09 07:56:05'),
(13, NULL, NULL, NULL, NULL, NULL, '2018-02-09 07:50:59', '2018-02-09 07:50:59'),
(12, NULL, '2018-02-28', '2018-03-28', '123', '123', '2018-02-09 07:21:48', '2018-02-09 07:21:48'),
(11, NULL, '2018-02-27', '2018-02-19', '1111', 'ghjh', '2018-02-09 03:12:41', '2018-02-09 03:12:41'),
(17, 'XPRO INN-01-WL', '2018-02-13', '2018-02-26', '123', '123', '2018-02-09 08:02:33', '2018-02-09 08:02:33'),
(18, 'CTTN Scaling m/c 2', '2018-02-13', '2018-02-26', '123', '123', '2018-02-09 08:02:50', '2018-02-09 08:02:50'),
(19, 'CTTN Scaling m/c 1', '2018-02-06', '2018-02-20', '3123', '123', '2018-02-09 08:03:07', '2018-02-09 08:03:07'),
(20, 'XPRO INN-01-WL', '2018-02-06', '2018-02-20', '3123', '123', '2018-02-09 08:08:37', '2018-02-09 08:08:37'),
(21, 'Verona INN-02-WL', '2018-02-14', '2018-02-27', '21sda', 'asdsda', '2018-02-09 08:32:40', '2018-02-09 08:32:40'),
(22, 'Verona INN-02-WL', '2018-02-14', '2018-02-27', '21sda', 'asdsda', '2018-02-09 08:33:48', '2018-02-09 08:33:48'),
(23, 'Bangkok ACC-07-WL', '2018-01-31', '2018-02-26', 'sdasdasda', 'sdasdasdasda', '2018-02-09 08:34:03', '2018-02-09 08:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `drop_tests`
--

DROP TABLE IF EXISTS `drop_tests`;
CREATE TABLE IF NOT EXISTS `drop_tests` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `test_id` int(11) NOT NULL,
  `sample_id` int(11) DEFAULT NULL,
  `doc_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `power_rating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_purpose` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rev_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wire_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flex_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bending_angle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `progress_action` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Temp_Recording_Station` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `before_min` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `before_max` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `after_min` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `after_max` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HV_before` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HV_after` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leakage_current_before` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leakage_current_after` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1stdrop` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `2nddrop` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `3rddrop` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tstat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Spray` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Steam_Slider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Steaming` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drop_tests`
--

INSERT INTO `drop_tests` (`id`, `test_id`, `sample_id`, `doc_num`, `power_rating`, `test_purpose`, `rev_num`, `supplier`, `wire_size`, `pin_type`, `flex_type`, `bending_angle`, `weight`, `current`, `issue`, `progress_action`, `status`, `Temp_Recording_Station`, `before_min`, `before_max`, `after_min`, `after_max`, `HV_before`, `HV_after`, `leakage_current_before`, `leakage_current_after`, `1stdrop`, `2nddrop`, `3rddrop`, `Tstat`, `Spray`, `Steam_Slider`, `Steaming`, `remark`, `created_at`, `updated_at`) VALUES
(1, 1711280501, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-28 08:35:34', '2017-11-28 08:35:34'),
(2, 1711280601, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-28 08:42:06', '2017-11-28 08:42:06'),
(3, 1711280701, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-28 09:15:57', '2017-11-28 09:15:57'),
(4, 1711280801, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fff', NULL, NULL, NULL, NULL, 'close', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-28 10:08:36', '2017-11-28 10:08:36'),
(5, 1711280901, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-28 10:13:23', '2017-11-28 10:13:23'),
(6, 1711280901, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-28 10:13:23', '2017-11-28 10:13:23'),
(7, 1711280901, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-28 10:13:23', '2017-11-28 10:13:23'),
(8, 1711290101, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111', NULL, NULL, NULL, NULL, 'close', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-29 02:03:31', '2017-11-29 02:28:24'),
(9, 1711290101, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111', NULL, NULL, NULL, NULL, 'close', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-29 02:03:31', '2017-11-29 02:03:31'),
(10, 1711290101, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111', NULL, NULL, NULL, NULL, 'close', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-29 02:03:31', '2017-11-29 02:03:31'),
(11, 1711290401, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-29 03:24:36', '2017-11-29 03:24:36'),
(12, 1711290501, 1, 'ss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'close', 'ggg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-29 03:58:45', '2017-11-29 04:00:27'),
(13, 1711290501, 2, 'ss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'close', 'hh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-29 03:58:45', '2017-11-29 08:14:03'),
(14, 1711290501, 3, 'ss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'close', NULL, 'ddd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-29 03:58:45', '2017-11-29 09:13:21'),
(15, 1711300901, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-30 08:34:56', '2017-11-30 08:34:56'),
(16, 1712130101, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-13 06:27:36', '2017-12-13 06:27:36'),
(17, 1712130201, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-13 06:40:24', '2017-12-13 06:40:24'),
(18, 1712180101, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-18 02:43:35', '2017-12-18 02:43:35'),
(19, 1712220201, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-22 03:41:43', '2017-12-22 03:41:43'),
(20, 1712220401, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-22 07:53:50', '2017-12-22 07:53:50'),
(21, 1712260101, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'close', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-26 06:19:30', '2017-12-26 06:19:30'),
(22, 1712260101, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'close', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-26 06:19:30', '2017-12-26 06:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `flexing_tests`
--

DROP TABLE IF EXISTS `flexing_tests`;
CREATE TABLE IF NOT EXISTS `flexing_tests` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `test_id` int(11) NOT NULL,
  `sample_id` int(11) DEFAULT NULL,
  `doc_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `power_rating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_purpose` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rev_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wire_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flex_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bending_angle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `8000` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16000` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `24000` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `32000` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `40000` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `48000` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `56000` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `65000` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `station_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EWBC` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LONW1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LONW2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BM` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EOIW` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EPM` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LONW3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `issue` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `progress_action` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flexing_tests`
--

INSERT INTO `flexing_tests` (`id`, `test_id`, `sample_id`, `doc_num`, `power_rating`, `test_purpose`, `rev_num`, `supplier`, `wire_size`, `pin_type`, `flex_type`, `bending_angle`, `weight`, `current`, `8000`, `16000`, `24000`, `32000`, `40000`, `48000`, `56000`, `65000`, `station_num`, `EWBC`, `LONW1`, `LONW2`, `BM`, `fire`, `EOIW`, `EPM`, `LONW3`, `result`, `remark`, `created_at`, `updated_at`, `issue`, `progress_action`, `status`) VALUES
(10, 1707190101, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-19 03:01:12', '2017-07-19 03:01:12', '', '', NULL),
(9, 1707190102, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '312', '121', '3', NULL, NULL, NULL, NULL, NULL, 'z', '321', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-19 03:01:12', '2017-07-21 09:25:30', '', '', NULL),
(8, 1707190102, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '321', NULL, NULL, NULL, NULL, NULL, 'cv', 'z', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-19 03:01:12', '2017-07-21 09:25:30', '', '', NULL),
(7, 1707190102, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'afdsa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-19 03:01:12', '2017-07-21 09:25:30', '', '', NULL),
(6, 1707190102, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '321', NULL, NULL, NULL, NULL, NULL, 'fdsa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-19 03:01:12', '2017-07-21 09:25:30', '', '', NULL),
(11, 1707190101, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-19 03:01:12', '2017-07-19 03:01:12', '', '', NULL),
(12, 1707210101, 1, NULL, NULL, NULL, NULL, NULL, '999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-21 09:33:53', '2017-10-19 07:23:12', NULL, NULL, NULL),
(13, 1707210101, 2, NULL, NULL, NULL, NULL, NULL, '999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-21 09:33:53', '2017-10-19 07:23:12', NULL, NULL, NULL),
(14, 1707210101, 3, NULL, NULL, NULL, NULL, NULL, '999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fdsa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-21 09:33:53', '2017-10-19 07:23:12', NULL, NULL, NULL),
(15, 1707210101, 4, NULL, NULL, NULL, NULL, NULL, '999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fdsa', 'mm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-21 09:33:53', '2017-10-19 07:23:12', NULL, NULL, NULL),
(16, 1707210101, 5, NULL, NULL, NULL, NULL, NULL, '999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fsda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-21 09:33:53', '2017-10-19 07:23:12', NULL, NULL, NULL),
(17, 1707210101, 6, NULL, NULL, NULL, NULL, NULL, '999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fdsa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-21 09:33:53', '2017-10-19 07:23:12', NULL, NULL, NULL),
(18, 1707240101, 1, NULL, NULL, NULL, NULL, '32132', '321', 'n', NULL, 'aaa', '321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-24 03:33:31', '2017-10-19 07:31:38', 'dss', 'fuse changed', 'close'),
(19, 1707240101, 2, NULL, NULL, NULL, NULL, '32132', '321', 'n', NULL, 'aaa', '321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '231', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-24 03:33:31', '2017-10-19 07:31:38', 'dss', 'fuse changed', 'close'),
(20, 1707240101, 3, NULL, NULL, NULL, NULL, '32132', '321', 'n', NULL, 'aaa', '321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-24 03:33:31', '2017-10-19 07:31:38', 'dss', 'fuse changed', 'close'),
(21, 1711160101, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-16 01:08:18', '2017-11-16 01:08:18', 'sss', 'ss', 'close'),
(22, 1711160101, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-16 01:08:18', '2017-11-16 01:08:18', 'sss', 'ss', 'close'),
(23, 1711160101, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-16 01:08:18', '2017-11-16 01:08:18', 'sss', 'ss', 'close'),
(24, 1711160101, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-16 01:08:18', '2017-11-16 01:08:18', 'sss', 'ss', 'close'),
(25, 1710050601, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-16 01:09:19', '2017-11-16 01:09:19', NULL, NULL, NULL),
(26, 1711160201, 1, NULL, '2400W', 'evaluate the alternate supplier cord set', '1.0', 'Volex', '0.75mm2', 'EU', '???', '9090', '2kg', '11A', 'Live wire broken at 8555 cycles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-16 09:29:20', '2017-11-16 09:32:41', 'equipment down', 'fuse changed', 'close'),
(27, 1711160201, 2, NULL, '2400W', 'evaluate the alternate supplier cord set', '1.0', 'Volex', '0.75mm2', 'EU', '???', '9090', '2kg', '11A', NULL, NULL, 'earth wire broken at 25011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-16 09:29:20', '2017-11-16 09:32:41', 'equipment down', 'fuse changed', 'close'),
(28, 1711160201, 3, NULL, '2400W', 'evaluate the alternate supplier cord set', '1.0', 'Volex', '0.75mm2', 'EU', '???', '9090', '2kg', '11A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'completed without any breakage.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-16 09:29:20', '2017-11-16 09:32:41', 'equipment down', 'fuse changed', 'close'),
(29, 1711170101, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-17 07:36:54', '2017-11-17 07:36:54', 'pump faulty', 'designer to change pump and return.', 'open'),
(30, 1711170101, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-17 07:36:55', '2017-11-17 07:36:55', 'pump faulty', 'designer to change pump and return.', 'open'),
(31, 1711170101, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-17 07:36:55', '2017-11-17 07:36:55', 'pump faulty', 'designer to change pump and return.', 'open'),
(32, 1711170101, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-17 07:36:55', '2017-11-17 07:36:55', 'pump faulty', 'designer to change pump and return.', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

DROP TABLE IF EXISTS `machines`;
CREATE TABLE IF NOT EXISTS `machines` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `machinename` varchar(110) DEFAULT NULL,
  `capacity` tinyint(4) DEFAULT NULL,
  `suppiler` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=170001 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machines`
--

INSERT INTO `machines` (`id`, `machinename`, `capacity`, `suppiler`, `created_at`, `updated_at`) VALUES
(1, 'XPRO INN-01-WL\r\n', 48, 'Chong Fong\r\n', '2018-02-07 06:49:17', '2018-02-07 06:49:17'),
(2, 'DTS ACC-09-WL\r\n', 72, 'Chong Fong\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(3, 'Verona INN-02-WL\r\n', 24, 'Metholec\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(4, 'Bangkok ACC-07-WL\r\n', 24, 'Metholec\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(5, 'CTTN Scaling m/c 1\r\n', 12, 'CommsTech\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(6, 'CTTN Scaling m/c 2\r\n', 12, 'CommsTech\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(7, 'CTTN Scaling m/c 3\r\n', 12, 'CommsTech\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(8, 'Dry/Wet Wear Tester 1\r\n', 6, 'ATS\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(9, 'Dry/Wet Wear Tester 2\r\n', 5, 'CommsTech\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(10, 'Modena Life Tester 1\r\n', 4, 'Metholec\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(11, 'Modena Life Tester 2\r\n', 4, 'Metholec\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(12, 'Modena Steamer Tester\r\n', 4, 'Metholec\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(13, 'Height Adjustment Endurance Test (Modena)\r\n', 1, 'Metholec\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(14, 'Board Fold/Tilt Endurance Test (Modena)\r\n', 1, 'Metholec\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(15, 'Quenching Tester 1\r\n', 3, 'Engineering\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(16, 'New Quenching Tester 1 & 2\r\n', 6, 'ServoConnect\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(17, 'ASO Endurance Test 1\r\n', 6, NULL, '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(18, 'Thermostat/ Snap Disc Endurance Test\r\n', 12, 'Synergy Engr.\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(19, 'Spray/Sos Endurance Test\r\n', 6, NULL, '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(20, '4cm Drop Test\r\n', 2, NULL, '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(21, 'Continous Steaming Test\r\n', 6, NULL, '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(22, 'CZS Climatic Chamber\r\n', 30, 'Probiz\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(23, 'CSZ temperature/Humidity Chamber Model ZPH-32-2-\r\n', 30, 'Probiz\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(24, 'Constant Heat Chamber\r\n', NULL, 'Suzhou\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(25, 'Edge Chipping Test\r\n', 1, 'Engineering\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(26, 'Glow Wire\r\n', 1, 'Century Town\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(27, 'Steamer Life Tester System 1\r\n', 6, 'Xin Zhilong', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(28, 'Steamer Life Tester System 2\r\n', 6, 'Xin Zhilong', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(29, 'Drop Tester\r\n', NULL, NULL, '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(30, 'PSG steam rate tester\r\n', NULL, NULL, '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(31, '4 fold PSG Steam rate tester\r\n', NULL, NULL, '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(32, 'Programmable Transformer\r\n', NULL, NULL, '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(33, 'Iron cooling Rack\r\n', NULL, NULL, '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(34, 'DTS steam rate tester\r\n', NULL, NULL, '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(35, 'Flexing tester -1\r\n', NULL, NULL, '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(36, 'Flexing tester -2\r\n', NULL, NULL, '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(37, 'Flexing tester -3\r\n', NULL, 'CommsTech\r\n', '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(38, 'Overpressure tester\r\n', NULL, NULL, '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(39, 'Movable transformer with platform  (2x)\r\n', NULL, NULL, '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(40, 'Stabilizer (heavy)    (7x)\r\n', NULL, NULL, '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(41, 'TMI Digital Ink Rub Tester\r\n', NULL, NULL, '2018-02-07 07:17:18', '2018-02-07 07:17:18'),
(42, 'Industrial freezer\r\n', NULL, NULL, '2018-02-07 07:20:05', '2018-02-07 07:20:05'),
(43, 'transformer   (7x)\r\n', NULL, NULL, '2018-02-07 07:20:05', '2018-02-07 07:20:05'),
(44, 'Hi-pot tester\r\n', NULL, NULL, '2018-02-07 07:20:05', '2018-02-07 07:20:05'),
(45, 'Power meter   (4x)\r\n', NULL, NULL, '2018-02-07 07:20:05', '2018-02-07 07:20:05'),
(46, 'Earth resistance tester\r\n', NULL, NULL, '2018-02-07 07:20:05', '2018-02-07 07:20:05'),
(47, 'Electronic weighing balance    (7x)\r\n', NULL, NULL, '2018-02-07 07:20:05', '2018-02-07 07:20:05'),
(48, 'Data logger    (5x)\r\n', NULL, NULL, '2018-02-07 07:20:05', '2018-02-07 07:20:05'),
(49, 'NF MODEL KP3000GS AC POWER SOURCE\r\n', NULL, NULL, '2018-02-07 07:20:05', '2018-02-07 07:20:05'),
(50, 'Temperature recorder   (3x)\r\n', NULL, NULL, '2018-02-07 07:20:05', '2018-02-07 07:20:05'),
(51, 'Multimeter   (2x)\r\n', NULL, NULL, '2018-02-07 07:20:05', '2018-02-07 07:20:05'),
(52, 'Promon 501 Camera Module (high speed camera)\r\n', NULL, NULL, '2018-02-07 07:21:25', '2018-02-07 07:21:25'),
(53, 'Robotic Arm\r\n', NULL, NULL, '2018-02-07 07:21:25', '2018-02-07 07:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(35, '2014_10_12_000000_create_users_table', 1),
(36, '2014_10_12_100000_create_password_resets_table', 1),
(37, '2017_04_28_094041_create_tickets_table', 1),
(38, '2017_05_02_061115_create_tests_table', 1),
(39, '2017_05_02_062115_create_projects_table', 1),
(40, '2017_05_02_062127_create_modelcodes_table', 1),
(41, '2017_05_02_062137_create_test_types_table', 1),
(42, '2017_05_08_021135_create_flexing_tests_table', 1),
(43, '2017_06_12_131640_create_comments_table', 1),
(44, '2017_07_19_111616_create_wet_life_tests_table', 2),
(45, '2017_07_20_172646_change_TRC_to_TRS_in_wet_life_tests_table', 3),
(46, '2017_07_25_153817_create_test_table', 4),
(47, '2017_07_25_154048_create_testing_table', 4),
(48, '2017_07_25_154854_create_test1_table', 4),
(49, '2017_11_28_154758_create_drop_test_table', 5),
(50, '2017_11_28_162638_create_drop_tests_table', 6),
(51, '2017_11_29_124728_create_aso_timing_check_tests_table', 7),
(52, '2017_11_29_145220_create_aso_timing_checks_tests_table', 8),
(53, '2017_11_29_150857_create_aso_timing_checks_table', 9),
(54, '2017_11_30_144432_create_vibration_tests_table', 10),
(55, '2017_11_30_154018_create_a_s_o_timing_checks_table', 11),
(58, '2017_11_30_161643_create_a_s_o_timing_checks_table', 12),
(59, '2017_11_30_162502_create_aso_timing_checks_table', 13),
(60, '2018_02_01_133316_create_product_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `modelcodes`
--

DROP TABLE IF EXISTS `modelcodes`;
CREATE TABLE IF NOT EXISTS `modelcodes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modelcodes`
--

INSERT INTO `modelcodes` (`id`, `project_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 'GC1234', '2017-05-02 06:51:59', '2017-05-02 06:51:59'),
(2, 1, 'GC1344', '2017-05-02 06:51:59', '2017-05-02 06:51:59'),
(3, 1, 'GC1754', '2017-05-02 06:52:16', '2017-05-02 06:52:16'),
(5, 2, 'GC2078', '2017-05-02 06:53:29', '2017-05-02 06:53:29'),
(6, 2, 'GC2485', '2017-05-02 06:53:37', '2017-05-02 06:53:37'),
(7, 2, 'GC2568', '2017-05-02 06:53:46', '2017-05-02 06:53:46'),
(8, 3, 'GC3058', '2017-05-02 06:53:52', '2017-05-02 06:53:52'),
(9, 3, 'GC3458', '2017-05-02 06:53:57', '2017-05-02 06:53:57'),
(10, 3, 'GC3521', '2017-05-02 06:54:02', '2017-05-02 06:54:02'),
(11, 4, 'GC4012', '2017-05-02 06:54:12', '2017-05-02 06:54:12'),
(12, 4, 'GC4258', '2017-05-02 06:54:16', '2017-05-02 06:54:16'),
(13, 4, 'GC4582', '2017-05-02 06:54:20', '2017-05-02 06:54:20'),
(14, 1, 'GC1998', '2017-07-12 06:15:31', '2017-07-12 06:15:31'),
(15, 1, 'GC1547', '2017-07-12 06:34:21', '2017-07-12 06:34:21'),
(16, 20, 'GC4564', '2017-12-22 07:22:17', '2017-12-22 07:22:17'),
(17, 20, 'GC4532', '2017-12-22 07:22:35', '2017-12-22 07:22:35'),
(43, 29, 'GC7833', '2017-12-22 07:57:25', '2017-12-22 07:57:25'),
(42, 29, 'GC7830', '2017-12-22 07:57:01', '2017-12-22 07:57:01'),
(41, 26, 'GC5039', '2017-12-22 07:56:29', '2017-12-22 07:56:29'),
(40, 26, 'GC5033', '2017-12-22 07:55:58', '2017-12-22 07:55:58'),
(39, 26, 'GC4939', '2017-12-22 07:55:36', '2017-12-22 07:55:36'),
(38, 26, 'GC4933', '2017-12-22 07:55:17', '2017-12-22 07:55:17'),
(49, 22, 'GC4564', '2017-12-22 08:08:11', '2017-12-22 08:08:11'),
(48, 22, 'GC4532', '2017-12-22 08:07:52', '2017-12-22 08:07:52'),
(35, 23, 'GC9680', '2017-12-22 07:49:42', '2017-12-22 07:49:42'),
(34, 23, 'GC9670', '2017-12-22 07:49:08', '2017-12-22 07:49:08'),
(33, 23, 'GC9660', '2017-12-22 07:48:40', '2017-12-22 07:48:40'),
(47, 21, 'GC4532', '2017-12-22 08:07:45', '2017-12-22 08:07:45'),
(46, 21, 'GC4564', '2017-12-22 08:07:29', '2017-12-22 08:07:29'),
(44, 32, 'GC29XX', '2017-12-22 07:58:02', '2017-12-22 07:58:02'),
(45, 32, 'GC39XX', '2017-12-22 07:58:18', '2017-12-22 07:58:18'),
(50, 24, 'GC9680', '2017-12-22 08:14:19', '2017-12-22 08:14:19'),
(51, 24, 'GC9670', '2017-12-22 08:14:35', '2017-12-22 08:14:35'),
(52, 24, 'GC9660', '2017-12-22 08:14:55', '2017-12-22 08:14:55'),
(53, 25, 'GC9660', '2017-12-22 08:15:11', '2017-12-22 08:15:11'),
(54, 25, 'GC9670', '2017-12-22 08:15:28', '2017-12-22 08:15:28'),
(55, 25, 'GC9680', '2017-12-22 08:15:47', '2017-12-22 08:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('development.quality@philips.com', '$2y$10$uZvahoeSmHRckMvdu9a/UekytayizgdtrhQz5uzmCJTKyHoUjf9re', '2018-01-26 07:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternate_product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_manager` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quality_project_leader` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charging_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `product_name`, `alternate_product_name`, `project_manager`, `quality_project_leader`, `charging_code`, `created_at`, `updated_at`) VALUES
(35, '12', '123', '123', '123', '123', '123', '2018-01-29 06:02:28', '2018-01-29 06:02:28'),
(34, 'Fast & Furious', 'Fast TFC', 'Azur IPD', 'liang', 'liangzai', '12312321', '2018-01-25 07:15:56', '2018-01-25 07:15:56'),
(1, 'Astro TFC', 'Azur TFC', 'Azur TFC', 'Manager1', 'Leader1', 'SG1900008912', '2017-12-22 07:21:34', '2017-12-22 07:21:34'),
(21, 'Astro IPD', 'Azur IPD', 'Azur IPD', 'Manager1', 'Leader1', 'SG1900070577', '2017-12-22 07:23:49', '2017-12-22 07:23:49'),
(22, 'Astro LCM', 'Azur LCM', 'Azur LCM', 'Manager1', 'Leader1', 'SG1900013156', '2017-12-22 07:25:21', '2017-12-22 07:25:21'),
(23, 'Mems TFC', 'PC Elite Plus TFC', 'PC Elite Plus TFC', 'Manager1', 'Leader1', 'SG1900058463', '2017-12-22 07:26:55', '2017-12-22 07:26:55'),
(24, 'Mems IPD', 'PC Elite Plus IPD', 'PC Elite Plus IPD', 'Manager1', 'Leader1', 'SG1900003790', '2017-12-22 07:28:21', '2017-12-22 07:28:21'),
(25, 'Mems LCM', 'PC Elite Plus LCM', 'PC Elite Plus LCM', 'Manager1', 'Leader1', 'SG1900013157', '2017-12-22 07:29:35', '2017-12-22 07:29:35'),
(26, 'Fast & Furious', 'PC Azur Elite TFC', 'PC Azur Elite TFC', 'Manager1', 'Leader1', 'SG1900058463', '2017-12-22 07:31:30', '2017-12-22 07:31:30'),
(27, 'Fast & Furious', 'PC Azur Elite IPD', 'PC Azur Elite IPD', 'Manager1', 'Leader1', 'SG190003666', '2017-12-22 07:32:16', '2017-12-22 07:32:16'),
(28, 'Fast & Furious', 'PC Azur Elite LCM', 'PC Azur Elite LCM', 'Manager1', 'Leader1', 'SG1900013156', '2017-12-22 07:33:36', '2017-12-22 07:33:36'),
(29, 'PC Entry', 'PC Compact Essential TFC', 'PC Compact Essential TFC', 'Manager1', 'Leader1', 'SG1900003664', '2017-12-22 07:35:06', '2017-12-22 07:35:06'),
(30, 'PC Entry', 'PC Compact Essential IPD', 'PC Compact Essential IPD', 'Manager1', 'Leader1', 'SG1900003649', '2017-12-22 07:35:49', '2017-12-22 07:35:49'),
(31, 'PC Entry', 'PC Compact Essential LCM', 'PC Compact Essential LCM', 'Manager1', 'Leader1', 'SG1900013157', '2017-12-22 07:36:48', '2017-12-22 07:36:48'),
(32, 'NXG Powerlife', 'NXG Powerlife IPD', 'NXG Powerlife IPD', 'Manager1', 'Leader1', 'SG1900058291', '2017-12-22 07:37:53', '2017-12-22 07:37:53'),
(33, 'NXG Powerlife', 'NXG Powerlife LCM', 'NXG Powerlife LCM', 'Manager1', 'Leader1', 'SG1900013156', '2017-12-22 07:38:32', '2017-12-22 07:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

DROP TABLE IF EXISTS `tests`;
CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ticket_id` int(11) NOT NULL,
  `test_type_id` int(11) NOT NULL,
  `modelcode_id` int(11) NOT NULL,
  `reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(11) NOT NULL,
  `sample_availability` date NOT NULL,
  `sample_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protocal_deviation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending approval',
  `approved` tinyint(1) DEFAULT NULL,
  `est_start_date` date DEFAULT NULL,
  `actual_start_date` date DEFAULT NULL,
  `est_end_date` date DEFAULT NULL,
  `actual_end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1802090102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `ticket_id`, `test_type_id`, `modelcode_id`, `reason`, `size`, `sample_availability`, `sample_type`, `protocal_deviation`, `remark`, `status`, `approved`, `est_start_date`, `actual_start_date`, `est_end_date`, `actual_end_date`, `created_at`, `updated_at`) VALUES
(1801250601, 18012506, 8, 16, 'something', 1, '2018-01-31', 'something', 'yes', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 01:22:09', '2018-01-25 01:22:09'),
(1707190201, 17071902, 63, 6, 'something', 3, '2017-07-12', 'something', '21.', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-07-19 06:49:54', '2017-07-20 08:23:48'),
(1707190102, 17071901, 27, 10, 'something', 4, '2017-07-20', 'something', 'stsadg', 'reamaujk', 'Pending approval', 1, NULL, NULL, NULL, NULL, '2017-07-19 03:00:18', '2017-11-16 01:06:53'),
(1707190101, 17071901, 20, 8, 'something', 2, '2017-07-05', 'something', 'eta', NULL, 'Pending approval', 0, NULL, NULL, NULL, NULL, '2017-07-19 03:00:18', '2017-07-19 03:01:05'),
(1707210102, 17072101, 63, 8, 'something', 3, '2017-07-04', 'something', 'fdsa', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-07-21 09:33:28', '2017-07-21 09:33:51'),
(1707240101, 17072401, 21, 8, 'something', 3, '2017-07-12', 'something', '321321', NULL, 'Test report generation', 1, NULL, NULL, NULL, NULL, '2017-07-24 03:32:57', '2017-11-21 02:05:30'),
(1710020101, 17100201, 8, 6, 'something', 3, '2017-12-04', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-10-02 08:15:26', '2017-10-02 08:28:19'),
(1712040101, 17120401, 59, 1, 'something', 1, '2017-12-04', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-12-04 01:13:49', '2017-12-04 01:13:57'),
(1710020201, 17100202, 13, 6, 'something', 4, '2017-10-02', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-10-02 08:42:58', '2017-10-02 08:43:17'),
(1710020301, 17100203, 24, 5, 'something', 4, '2017-10-02', 'something', 'noj', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-10-02 08:46:06', '2017-10-02 08:46:14'),
(1710020401, 17100204, 63, 8, 'something', 1, '2017-10-02', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-10-02 08:47:16', '2017-10-02 08:47:26'),
(1710030101, 17100301, 14, 3, 'something', 5, '2017-10-04', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-10-03 06:23:08', '2017-10-03 06:26:58'),
(1710030301, 17100303, 11, 1, 'something', 4, '2017-10-03', 'something', 'no', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2017-10-03 07:06:32', '2017-10-03 07:06:32'),
(1710050101, 17100501, 13, 2, 'something', 4, '2017-10-05', 'something', 'no', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2017-10-05 02:50:07', '2017-10-05 02:50:07'),
(1710050201, 17100502, 11, 1, 'something', 4, '2017-10-05', 'something', 'no', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2017-10-05 03:53:34', '2017-10-05 03:53:34'),
(1710050301, 17100503, 10, 1, 'something', 1, '2017-10-05', 'something', 'no', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2017-10-05 03:56:57', '2017-10-05 03:56:57'),
(1710050401, 17100504, 12, 1, 'something', 1, '2017-10-05', 'something', 'no', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2017-10-05 03:57:31', '2017-10-05 03:57:31'),
(1710050501, 17100505, 12, 1, 'something', 1, '2017-10-05', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-10-05 07:05:24', '2017-10-05 07:05:44'),
(1710050601, 17100506, 21, 8, 'something', 1, '2017-10-05', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-10-05 07:07:47', '2017-10-05 07:07:59'),
(1711160101, 17111601, 20, 1, 'something', 4, '2017-11-16', 'something', 'no', 'no', 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-16 01:02:39', '2017-11-16 01:03:09'),
(1711160201, 17111602, 21, 6, 'something', 3, '2017-12-17', 'something', 'no', NULL, 'Test completed', 1, NULL, NULL, NULL, NULL, '2017-11-16 09:28:49', '2017-11-16 09:35:03'),
(1711170101, 17111701, 20, 6, 'something', 4, '2017-12-17', 'something', 'no', NULL, 'Test completed', 1, NULL, NULL, NULL, NULL, '2017-11-17 07:30:47', '2017-11-17 07:40:50'),
(1711220101, 17112201, 21, 1, 'something', 1, '2017-12-22', 'something', 'no', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2017-11-22 07:29:29', '2017-11-22 07:29:29'),
(1711280301, 17112803, 8, 1, 'something', 1, '2017-12-28', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-28 08:02:31', '2017-11-28 08:02:52'),
(1711280401, 17112804, 8, 1, 'something', 1, '2017-12-28', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-28 08:16:38', '2017-11-28 08:16:48'),
(1711280501, 17112805, 8, 1, 'something', 1, '2017-12-28', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-28 08:35:23', '2017-11-28 08:35:31'),
(1711280601, 17112806, 10, 1, 'something', 1, '2017-12-28', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-28 08:41:52', '2017-11-28 08:42:03'),
(1801250501, 18012505, 1, 16, 'something', 1, '2018-01-31', 'something', '1', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 01:21:39', '2018-01-25 01:21:39'),
(1711280801, 17112808, 9, 1, 'something', 1, '2017-12-28', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-28 10:08:26', '2017-11-28 10:08:32'),
(1711280901, 17112809, 8, 1, 'something', 3, '2017-12-28', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-28 10:13:13', '2017-11-28 10:13:20'),
(1711290101, 17112901, 8, 1, 'something', 3, '2017-12-29', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-29 02:03:18', '2017-11-29 02:03:26'),
(1711290301, 17112903, 1, 1, 'something', 1, '2017-11-29', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-29 02:34:46', '2017-11-29 02:35:08'),
(1711290401, 17112904, 8, 1, 'something', 1, '2017-11-29', 'something', 'no', NULL, 'Equipment repair', 1, NULL, NULL, NULL, NULL, '2017-11-29 03:24:27', '2017-11-29 03:46:38'),
(1711290501, 17112905, 8, 1, 'something', 3, '2017-12-29', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-29 03:58:36', '2017-11-29 03:58:43'),
(1711290601, 17112906, 1, 1, 'something', 1, '2017-12-29', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-29 06:33:34', '2017-11-29 06:33:42'),
(1711290701, 17112907, 1, 1, 'something', 1, '2017-12-29', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-29 06:54:11', '2017-11-29 06:54:18'),
(1711290801, 17112908, 1, 1, 'something', 1, '2017-12-29', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-29 06:57:40', '2017-11-29 06:57:47'),
(1711290901, 17112909, 1, 1, 'something', 1, '2017-11-29', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-29 07:17:58', '2017-11-29 07:18:05'),
(1711291001, 17112910, 1, 1, 'something', 1, '2017-12-29', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-29 07:29:57', '2017-11-29 07:30:06'),
(1711300101, 17113001, 1, 1, 'something', 3, '2017-11-30', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-30 01:02:00', '2017-11-30 01:02:08'),
(1711300201, 17113002, 59, 1, 'something', 1, '2017-12-30', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-30 07:23:31', '2017-11-30 07:23:39'),
(1711300301, 17113003, 1, 1, 'something', 1, '2017-12-30', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-30 07:43:22', '2017-11-30 07:43:28'),
(1711300401, 17113004, 1, 1, 'something', 1, '2017-12-30', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-30 07:49:20', '2017-11-30 07:49:27'),
(1711300501, 17113005, 1, 1, 'something', 1, '2017-12-30', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-30 07:52:52', '2017-11-30 07:52:59'),
(1711300601, 17113006, 1, 1, 'something', 3, '2017-12-30', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-30 07:55:00', '2017-11-30 07:55:08'),
(1711300701, 17113007, 1, 1, 'something', 1, '2017-12-30', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-30 08:23:49', '2017-11-30 08:23:55'),
(1711300801, 17113008, 1, 1, 'something', 1, '2017-12-30', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-30 08:33:20', '2017-11-30 08:33:27'),
(1711300901, 17113009, 9, 1, 'something', 1, '2017-11-30', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-30 08:34:46', '2017-11-30 08:34:52'),
(1711301101, 17113011, 59, 1, 'something', 1, '2017-12-30', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-30 08:38:18', '2017-11-30 08:38:27'),
(1711301201, 17113012, 1, 1, 'something', 1, '2017-12-30', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-11-30 08:41:25', '2017-11-30 08:41:33'),
(1712010101, 17120101, 59, 1, 'something', 1, '2017-12-01', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-12-01 00:58:00', '2017-12-01 00:58:40'),
(1712070101, 17120701, 9, 1, 'something', 1, '2017-12-07', 'something', 'no', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2017-12-07 06:16:55', '2017-12-07 06:16:55'),
(1712130101, 17121301, 8, 1, 'something', 1, '2017-12-13', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-12-13 06:21:42', '2017-12-13 06:21:52'),
(1712130201, 17121302, 9, 8, 'something', 1, '2017-12-13', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-12-13 06:40:12', '2017-12-13 06:40:20'),
(1712180101, 17121801, 8, 1, 'something', 1, '2017-12-18', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-12-18 02:43:22', '2017-12-18 02:43:29'),
(1712220201, 17122202, 8, 1, 'something', 1, '2017-12-22', 'something', 'no', NULL, 'Test report generation', 1, NULL, NULL, NULL, NULL, '2017-12-22 03:41:36', '2017-12-22 06:06:47'),
(1712220301, 17122203, 1, 35, 'something', 1, '2017-12-22', 'something', 'NO', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2017-12-22 07:51:53', '2017-12-22 07:51:53'),
(1712220401, 17122204, 8, 33, 'something', 1, '2017-12-22', 'something', 'NO', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-12-22 07:53:07', '2017-12-22 07:53:46'),
(1712220501, 17122205, 1, 16, 'something', 1, '2017-12-22', 'something', 'NO', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-12-22 08:04:14', '2017-12-22 08:04:19'),
(1712220601, 17122206, 1, 16, 'something', 2, '2017-12-22', 'something', 'NO', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2017-12-22 08:08:35', '2017-12-22 08:08:35'),
(1712260101, 17122601, 8, 16, 'something', 2, '2017-12-29', 'something', 'no', NULL, 'Test report generation', 1, NULL, NULL, NULL, NULL, '2017-12-26 06:18:55', '2018-01-23 06:17:09'),
(1712260102, 17122601, 59, 17, 'something', 3, '2017-12-31', 'something', 'no', NULL, 'Pending samples arrival', 1, NULL, NULL, NULL, NULL, '2017-12-26 06:18:55', '2017-12-26 06:19:27'),
(1801241301, 18012413, 4, 16, 'something', 1, '2018-01-31', 'something', '1', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-24 08:15:45', '2018-01-24 08:15:45'),
(1801241401, 18012414, 6, 16, 'something', 1, '2018-01-18', 'something', '1', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-24 08:26:36', '2018-01-24 08:26:36'),
(1801241501, 18012415, 3, 16, 'something', 1, '2018-01-27', 'something', '1', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-24 08:30:12', '2018-01-24 08:30:12'),
(1801250101, 18012501, 3, 17, 'something', 1, '2018-01-31', 'something', '1', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 00:48:15', '2018-01-25 00:48:15'),
(1801250201, 18012502, 2, 17, 'something', 2, '2018-01-31', 'something', '1', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 01:04:16', '2018-01-25 01:04:16'),
(1801250301, 18012503, 1, 17, 'something', 1, '2018-01-31', 'something', '1', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 01:12:11', '2018-01-25 01:12:11'),
(1801250401, 18012504, 1, 17, 'something', 1, '2018-01-31', 'something', '1', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 01:19:58', '2018-01-25 01:19:58'),
(1801250701, 18012507, 25, 41, 'something', 3, '2018-01-01', 'something', 'jvj', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 01:22:57', '2018-01-25 01:22:57'),
(1801250801, 18012508, 8, 16, 'something', 3, '2018-01-01', 'something', 'wdww', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 01:24:22', '2018-01-25 01:24:22'),
(1801250901, 18012509, 8, 17, 'something', 1, '2018-01-01', 'something', 'ggjgjg', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 01:32:34', '2018-01-25 01:32:34'),
(1801251001, 18012510, 1, 16, 'something', 1, '2018-01-31', 'something', 'yes', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 05:22:43', '2018-01-25 05:22:43'),
(1801251101, 18012511, 2, 41, 'something', 12, '2018-01-08', 'something', '1', '45', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 05:24:44', '2018-01-25 05:24:44'),
(1801251201, 18012512, 8, 41, 'something', 100, '2018-01-31', 'something', 'yes', 'yes', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 05:27:25', '2018-01-25 05:27:25'),
(1801251301, 18012513, 1, 43, 'something', 21, '2018-01-30', 'something', '2', '3', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 05:28:17', '2018-01-25 05:28:17'),
(1801251302, 18012513, 1, 43, 'something', 23, '2018-01-28', 'something', '2', '3', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 05:28:17', '2018-01-25 05:28:17'),
(1801251401, 18012514, 15, 16, 'something', 12, '2018-01-24', 'something', '1', '2', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 05:46:09', '2018-01-25 05:46:09'),
(1801251601, 18012516, 17, 41, 'something', 1, '2018-01-24', 'something', '23', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 05:49:04', '2018-01-25 05:49:04'),
(1801252001, 18012520, 16, 16, 'something', 123, '2018-01-10', 'something', '123', '23', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 05:55:35', '2018-01-25 05:55:35'),
(1801252201, 18012522, 7, 34, 'something', 1, '2018-01-08', 'something', '12', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 06:22:31', '2018-01-25 06:22:31'),
(1801252301, 18012523, 2, 16, 'something', 1, '2018-01-01', 'something', '1', '2', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 06:29:10', '2018-01-25 06:29:10'),
(1801252401, 18012524, 3, 17, 'something', 12, '2018-01-08', 'something', '12', '12', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 06:39:20', '2018-01-25 06:39:20'),
(1801252501, 18012525, 2, 17, 'something', 12, '2018-01-22', 'something', '12', '12', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 06:40:34', '2018-01-25 06:40:34'),
(1801252601, 18012526, 4, 34, 'something', 12, '2018-01-09', 'something', '12', '123', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 06:46:36', '2018-01-25 06:46:36'),
(1801252701, 18012527, 16, 17, 'something', 123, '2017-12-21', 'something', '123', '123', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 07:14:31', '2018-01-25 07:14:31'),
(1801252801, 18012528, 1, 44, 'something', 1, '2018-01-31', 'something', '1', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 07:36:39', '2018-01-25 07:36:39'),
(1801253001, 18012530, 1, 43, 'something', 12, '2018-01-31', 'something', 'yes', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 07:41:21', '2018-01-25 07:41:21'),
(1801253101, 18012531, 4, 17, 'something', 231232, '2018-01-16', 'something', '123213', '13', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 07:57:07', '2018-01-25 07:57:07'),
(1801253102, 18012531, 4, 16, 'something', 2334131, '2018-01-08', 'something', '123213', '123', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 07:57:07', '2018-01-25 07:57:07'),
(1801253201, 18012532, 7, 17, 'something', 23121, '2018-01-15', 'something', '121', '1212', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 07:57:57', '2018-01-25 07:57:57'),
(1801253301, 18012533, 4, 16, 'something', 23123, '2018-01-16', 'something', '12312', '123123', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 07:59:49', '2018-01-25 07:59:49'),
(1801253401, 18012534, 1, 17, 'something', 1, '2018-01-31', 'something', '12', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 08:35:50', '2018-01-25 08:35:50'),
(1801253501, 18012535, 2, 35, 'something', 23, '2018-01-31', 'something', 'tyes', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 08:36:38', '2018-01-25 08:36:38'),
(1801253601, 18012536, 5, 16, 'something', 1, '2018-01-08', 'something', '123', '123', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 08:45:00', '2018-01-25 08:45:00'),
(1801253701, 18012537, 5, 17, 'something', 12312, '2018-01-23', 'something', '12312', '123213', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 09:00:57', '2018-01-25 09:00:57'),
(1801253801, 18012538, 4, 17, 'something', 23213, '2018-01-16', 'something', '12321', '123213', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 09:02:49', '2018-01-25 09:02:49'),
(1801254201, 18012542, 3, 17, 'something', 123, '2018-01-08', 'something', '12312', '123213', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 09:13:26', '2018-01-25 09:13:26'),
(1801254301, 18012543, 4, 34, 'something', 12321, '2018-01-22', 'something', '123', '123213', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 09:16:25', '2018-01-25 09:16:25'),
(1801254401, 18012544, 6, 16, 'something', 123, '2018-01-09', 'something', '123', '123', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 09:17:42', '2018-01-25 09:17:42'),
(1801254501, 18012545, 5, 17, 'something', 12321, '2018-01-09', 'something', '12321', '123213', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 09:23:09', '2018-01-25 09:23:09'),
(1801254601, 18012546, 7, 17, 'something', 123123, '2018-01-08', 'something', '12321', '123123', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 09:25:15', '2018-01-25 09:25:15'),
(1801254701, 18012547, 6, 17, 'something', 12321, '2018-01-09', 'something', '12321', '123213', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 09:29:18', '2018-01-25 09:29:18'),
(1801254801, 18012548, 4, 34, 'something', 21321, '2018-01-15', 'something', '21312', '213213', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 09:38:44', '2018-01-25 09:38:44'),
(1801254901, 18012549, 6, 16, 'something', 123, '2018-01-23', 'something', '123', '123', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 09:42:45', '2018-01-25 09:42:45'),
(1801255001, 18012550, 2, 17, 'something', 12312, '2018-01-08', 'something', '123', '123123', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-25 09:59:40', '2018-01-25 09:59:40'),
(1801260101, 18012601, 2, 17, 'something', 12, '2018-01-31', 'something', '1', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-26 01:26:43', '2018-01-26 01:26:43'),
(1801260201, 18012602, 6, 34, 'something', 12, '2018-01-31', 'something', '12', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-26 01:41:33', '2018-01-26 01:41:33'),
(1801260301, 18012603, 1, 16, 'something', 12, '2018-01-31', 'something', '12', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-26 01:43:16', '2018-01-26 01:43:16'),
(1801260401, 18012604, 4, 2, 'something', 12, '2018-01-31', 'something', '1', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-26 01:54:58', '2018-01-26 01:54:58'),
(1801260501, 18012605, 2, 1, 'something', 12, '2018-01-31', 'something', '12', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-26 01:57:46', '2018-01-26 01:57:46'),
(1801260601, 18012606, 1, 2, 'something', 1, '2018-01-24', 'something', '1', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-26 02:06:42', '2018-01-26 02:06:42'),
(1801260701, 18012607, 15, 1, 'something', 12, '2018-01-30', 'something', 'yes', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-26 05:18:39', '2018-01-26 05:18:39'),
(1801260801, 18012608, 18, 2, 'something', 12, '2018-01-31', 'something', '12', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-26 05:32:03', '2018-01-26 05:32:03'),
(1801260901, 18012609, 18, 34, 'something', 12, '2018-01-23', 'something', '12', NULL, 'Pending approval', 0, NULL, NULL, NULL, NULL, '2018-01-26 05:34:16', '2018-01-26 07:20:21'),
(1801261001, 18012610, 3, 3, 'something', 12, '2018-01-31', 'something', '12', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-26 06:07:08', '2018-01-26 06:07:08'),
(1801261101, 18012611, 5, 17, 'something', 242, '2018-01-17', 'something', '43344', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-26 06:26:50', '2018-01-26 06:26:50'),
(1801261102, 18012611, 6, 16, 'something', 545, '2018-01-17', 'something', '754756', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-26 06:26:50', '2018-01-26 06:26:50'),
(1801290101, 18012901, 2, 1, 'something', 1, '2018-01-31', 'something', '1', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-29 05:43:48', '2018-01-29 05:43:48'),
(1801310101, 18013101, 3, 33, 'something', 1, '2018-01-31', 'something', '1', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-31 03:46:52', '2018-01-31 03:46:52'),
(1801310201, 18013102, 3, 16, 'something', 1, '2018-01-10', 'something', '1', NULL, 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-01-31 05:28:53', '2018-01-31 05:28:53'),
(1802090101, 18020901, 13, 17, 'something', 12, '2018-02-21', 'something', '12', '12', 'Pending approval', NULL, NULL, NULL, NULL, NULL, '2018-02-09 01:13:27', '2018-02-09 01:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `test_types`
--

DROP TABLE IF EXISTS `test_types`;
CREATE TABLE IF NOT EXISTS `test_types` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compliance` text COLLATE utf8mb4_unicode_ci,
  `application` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `est_duration` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_types`
--

INSERT INTO `test_types` (`id`, `title`, `description`, `compliance`, `application`, `est_duration`, `created_at`, `updated_at`) VALUES
(1, 'ASO Timing Check', 'ASO Timing Check', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(2, 'Auto-Cord Winder Endurance Test', 'Auto-Cord Winder Endurance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(3, 'Carry Case and Iron Tray Endurance Test', 'Carry Case and Iron Tray Endurance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(4, 'Climatic Test', 'Climatic Test - Cyclic Humdity', '', 'PSG, DTS, STM, GTBA', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(5, 'Climatic Test', 'Climatic Test - Cyclic Temperature', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(6, 'Cordless Knob Cam Endurance Test', 'Cordless Knob Cam Endurance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(7, 'Detachable Tank Endurance Test', 'Detachable Tank Endurance Test', '', 'PSG', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(8, 'Drop test', 'Drop Test - IEC | Bare', '', 'PSG, DTS, STM, GTBA', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(9, 'Drop test', 'Drop Test - IEC | Packaging', '', 'PSG, DTS, STM, GTBA', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(10, 'Drop test', 'Drop Test - In-House | Bare', '', 'PSG, DTS, STM, GTBA', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(11, 'Drop test', 'Drop Test - In-House | Packaging', '', 'PSG, DTS, STM, GTBA', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(12, 'Drop test', 'Drop Test - STIWA | Bare', '', 'PSG', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(13, 'Drop test', 'Drop Test - STIWA | Packaging', '', 'PSG', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(14, 'Dual Voltage Switch Endurance Test', 'Dual Voltage Switch Endurance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(15, 'Dynamic Scaling', 'Dynamic Scaling - CTTN', '', 'DTS', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(16, 'Dynamic Scaling', 'Dynamic Scaling - IEC', '', 'DTS', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(17, 'Electrical Pump Endurance Test', 'Electrical Pump Endurance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(18, 'Flex Braiding Wear Test', 'Flex Braiding Wear Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(19, 'Flex Kink Test', 'Flex Kink Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(20, 'Flexing Test', 'Flexing Test - IEC | 4545 | Swivel', '', 'PSG, DTS, STM', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(21, 'Flexing Test', 'Flexing Test - IEC | 9090 | Swivel', '', 'PSG, DTS, STM', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(22, 'Flexing Test', 'Flexing Test - IEC | 4545 | Plug', '', 'PSG, DTS, STM', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(23, 'Flexing Test', 'Flexing Test - IEC | 9090 | Plug', '', 'PSG, DTS, STM', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(24, 'Flexing Test', 'Flexing Test - In-House | 4545 | Swivel', '', 'PSG, DTS, STM', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(25, 'Flexing Test', 'Flexing Test - In-House | 9090 | Swivel', '', 'PSG, DTS, STM', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(26, 'Flexing Test', 'Flexing Test - In-House | 4545 | Plug', '', 'PSG, DTS, STM', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(27, 'Flexing Test', 'Flexing Test - In-House | 9090 | Plug', '', 'PSG, DTS, STM', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(28, 'Iron Docking Test', 'Iron Docking Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(29, 'Main Switch Endurance Test', 'Main Switch Endurance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(30, 'Mechanical Strenght 4cm Drop Test', 'Mechanical Strenght 4cm Drop Test', '', 'PSG, DTS', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(31, 'Noise Measurement', 'Noise Measurement', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(32, 'Overflow Test', 'Overflow Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(33, 'Painting and Decoration Test', 'Painting and Decoration Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(34, 'PCBA Moisture Resistance Test', 'PCBA Moisture Resistance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(35, 'Pole Structure Endurance Test', 'Pole Structure Endurance Test', '', 'STM', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(36, 'Power Pack Assembly Endurance Test', 'Power Pack Assembly Endurance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(37, 'Roller Door Endurance Test', 'Roller Door Endurance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(38, 'Self-Clean Button Endurance Test', 'Self-Clean Button Endurance Test', '', 'DTS', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(39, 'Snap Disc Endurance Test', 'Snap Disc Endurance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(40, 'Software Verification', 'Software Verification', '', 'PSG, DTS', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(41, 'SOS Knob Endurance Test', 'SOS Knob Endurance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(42, 'SOS Performance Test', 'SOS Performance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(43, 'SOS Rate Measurement', 'SOS Rate Measurement', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(44, 'Spary Pattern Test', 'Spary Pattern Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(45, 'Spitting Test', 'Spitting Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(46, 'Spray Knob Endurance Test', 'Spray Knob Endurance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(47, 'Spray Performance Test', 'Spray Performance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(48, 'Stability Test', 'Stability Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(49, 'Static Scaling', 'Static Scaling - CTTN', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(50, 'Static Scaling', 'Static Scaling - IEC', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(51, 'Steam Control Endurance Test', 'Steam Control Endurance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(52, 'Steam Dial Endurance Test', 'Steam Dial Endurance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(53, 'Steam Rate Measurement', 'Steam Rate Measurement - IEC', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(54, 'Steam Rate Measurement', 'Steam Rate Measurement - CECED', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(55, 'Steam Rate Measurement', 'Steam Rate Measurement - CTTN', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(56, 'Steam Trigger Endurance Test', 'Steam Trigger Endurance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(57, 'Thermostat Control Endurance Test', 'Thermostat Control Endurance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(58, 'Thermostat Dial Movement Endurance Test', 'Thermostat Dial Endurance Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(59, 'Vibration Test', 'Vibration Test', '', '', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(60, 'Water Tank Door Endurance Test', 'Water Tank Door Endurance Test', '', 'DTS', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(61, 'Wear Resistance Test', 'Wear Resistance Test', '', 'PSG, DTS', NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(62, '', 'IEC 6335', '', NULL, NULL, '2017-05-25 07:25:48', '2017-05-25 07:25:48'),
(63, 'Wet Life Test', 'Wet Life Test', NULL, NULL, NULL, '2017-07-14 05:55:56', '2017-07-14 05:55:56');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `processed` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18020902 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `user_id`, `project_id`, `processed`, `created_at`, `updated_at`) VALUES
(17072401, 1, 3, 1, '2017-07-24 03:32:57', '2017-07-24 03:33:31'),
(17072101, 1, 3, 1, '2017-07-21 09:33:28', '2017-07-21 09:33:53'),
(17071902, 1, 2, 1, '2017-07-19 06:49:53', '2017-07-19 06:50:24'),
(17071901, 6, 3, 1, '2017-07-19 03:00:18', '2017-07-19 03:01:12'),
(17080401, 6, 2, 0, '2017-08-04 03:52:16', '2017-08-04 03:52:16'),
(17092901, 6, 3, 0, '2017-09-29 05:45:05', '2017-09-29 05:45:05'),
(17092902, 6, 2, 0, '2017-09-29 06:29:43', '2017-09-29 06:29:43'),
(17100201, 6, 2, 1, '2017-10-02 08:15:26', '2017-10-02 08:28:28'),
(17100202, 6, 2, 0, '2017-10-02 08:42:58', '2017-10-02 08:42:58'),
(17100203, 6, 2, 0, '2017-10-02 08:46:06', '2017-10-02 08:46:06'),
(17100204, 6, 3, 0, '2017-10-02 08:47:16', '2017-10-02 08:47:16'),
(17100301, 6, 1, 0, '2017-10-03 06:23:08', '2017-10-03 06:23:08'),
(17100302, 6, 1, 0, '2017-10-03 06:23:45', '2017-10-03 06:23:45'),
(17100303, 6, 1, 0, '2017-10-03 07:06:32', '2017-10-03 07:06:32'),
(17100501, 6, 1, 0, '2017-10-05 02:50:07', '2017-10-05 02:50:07'),
(17100502, 6, 1, 0, '2017-10-05 03:53:34', '2017-10-05 03:53:34'),
(17100503, 6, 1, 0, '2017-10-05 03:56:57', '2017-10-05 03:56:57'),
(17100504, 6, 1, 0, '2017-10-05 03:57:31', '2017-10-05 03:57:31'),
(17100505, 6, 1, 0, '2017-10-05 07:05:24', '2017-10-05 07:05:24'),
(17100506, 6, 3, 1, '2017-10-05 07:07:47', '2017-11-16 01:09:19'),
(17111601, 6, 1, 1, '2017-11-16 01:02:39', '2017-11-16 01:08:18'),
(17111602, 6, 2, 1, '2017-11-16 09:28:49', '2017-11-16 09:29:20'),
(17111701, 6, 2, 1, '2017-11-17 07:30:47', '2017-11-17 07:36:54'),
(17112201, 6, 1, 0, '2017-11-22 07:29:29', '2017-11-22 07:29:29'),
(17112801, 6, 2, 0, '2017-11-28 07:56:00', '2017-11-28 07:56:00'),
(17112802, 6, 2, 0, '2017-11-28 07:59:12', '2017-11-28 07:59:12'),
(17112803, 6, 1, 1, '2017-11-28 08:02:31', '2017-11-28 08:02:57'),
(17112804, 6, 1, 1, '2017-11-28 08:16:38', '2017-11-28 08:16:52'),
(17112805, 6, 1, 1, '2017-11-28 08:35:23', '2017-11-28 08:35:34'),
(17112806, 6, 1, 1, '2017-11-28 08:41:52', '2017-11-28 08:42:06'),
(17112807, 6, 1, 1, '2017-11-28 09:15:45', '2017-11-28 09:15:57'),
(17112808, 6, 1, 1, '2017-11-28 10:08:26', '2017-11-28 10:08:36'),
(17112809, 6, 1, 1, '2017-11-28 10:13:13', '2017-11-28 10:13:23'),
(17112901, 6, 1, 1, '2017-11-29 02:03:18', '2017-11-29 02:03:31'),
(17112902, 6, 2, 0, '2017-11-29 02:34:03', '2017-11-29 02:34:03'),
(17112903, 6, 1, 1, '2017-11-29 02:34:46', '2017-11-29 02:35:12'),
(17112904, 6, 1, 1, '2017-11-29 03:24:27', '2017-11-29 03:24:36'),
(17112905, 6, 1, 1, '2017-11-29 03:58:36', '2017-11-29 03:58:45'),
(17112906, 6, 1, 1, '2017-11-29 06:33:34', '2017-11-29 06:33:45'),
(17112907, 6, 1, 1, '2017-11-29 06:54:11', '2017-11-29 06:54:22'),
(17112908, 6, 1, 1, '2017-11-29 06:57:40', '2017-11-29 07:05:35'),
(17112909, 6, 1, 1, '2017-11-29 07:17:58', '2017-11-29 07:18:09'),
(17112910, 6, 1, 1, '2017-11-29 07:29:57', '2017-11-29 07:30:09'),
(17113001, 6, 1, 1, '2017-11-30 01:02:00', '2017-11-30 01:02:12'),
(17113002, 6, 1, 1, '2017-11-30 07:23:31', '2017-11-30 07:23:42'),
(17113003, 6, 1, 1, '2017-11-30 07:43:22', '2017-11-30 07:43:31'),
(17113004, 6, 1, 1, '2017-11-30 07:49:20', '2017-11-30 07:49:31'),
(17113005, 6, 1, 1, '2017-11-30 07:52:52', '2017-11-30 07:54:32'),
(17113006, 6, 1, 1, '2017-11-30 07:55:00', '2017-11-30 07:55:49'),
(17113007, 6, 1, 1, '2017-11-30 08:23:49', '2017-11-30 08:32:56'),
(17113008, 6, 1, 1, '2017-11-30 08:33:20', '2017-11-30 08:33:32'),
(17113009, 6, 1, 1, '2017-11-30 08:34:46', '2017-11-30 08:34:56'),
(17113010, 6, 6, 0, '2017-11-30 08:37:30', '2017-11-30 08:37:30'),
(17113011, 6, 1, 1, '2017-11-30 08:38:18', '2017-11-30 08:38:31'),
(17113012, 6, 1, 1, '2017-11-30 08:41:25', '2017-11-30 08:41:37'),
(17120101, 6, 1, 1, '2017-12-01 00:58:00', '2017-12-01 00:59:11'),
(17120401, 6, 1, 0, '2017-12-04 01:13:49', '2017-12-04 01:13:49'),
(17120701, 6, 1, 0, '2017-12-07 06:16:55', '2017-12-07 06:16:55'),
(17121301, 6, 1, 1, '2017-12-13 06:21:42', '2017-12-13 06:27:36'),
(17121302, 6, 3, 1, '2017-12-13 06:40:12', '2017-12-13 06:40:24'),
(17121801, 6, 1, 1, '2017-12-18 02:43:22', '2017-12-18 02:43:35'),
(17122201, 6, 2, 0, '2017-12-22 02:36:06', '2017-12-22 02:36:06'),
(17122202, 6, 1, 1, '2017-12-22 03:41:36', '2017-12-22 03:41:43'),
(17122203, 6, 23, 0, '2017-12-22 07:51:53', '2017-12-22 07:51:53'),
(17122204, 6, 23, 1, '2017-12-22 07:53:07', '2017-12-22 07:53:50'),
(17122205, 6, 20, 1, '2017-12-22 08:04:14', '2017-12-22 08:04:22'),
(17122206, 6, 22, 0, '2017-12-22 08:08:35', '2017-12-22 08:08:35'),
(17122601, 6, 20, 1, '2017-12-26 06:18:55', '2017-12-26 06:19:30'),
(18012401, 10, 1, 0, '2018-01-24 06:57:48', '2018-01-24 06:57:48'),
(18012402, 11, 20, 0, '2018-01-24 07:42:26', '2018-01-24 07:42:26'),
(18012403, 11, 23, 0, '2018-01-24 07:44:00', '2018-01-24 07:44:00'),
(18012404, 11, 22, 0, '2018-01-24 07:49:38', '2018-01-24 07:49:38'),
(18012405, 11, 24, 0, '2018-01-24 07:50:02', '2018-01-24 07:50:02'),
(18012406, 11, 21, 0, '2018-01-24 07:55:02', '2018-01-24 07:55:02'),
(18012407, 11, 20, 0, '2018-01-24 07:55:37', '2018-01-24 07:55:37'),
(18012408, 11, 20, 0, '2018-01-24 07:55:58', '2018-01-24 07:55:58'),
(18012409, 11, 26, 0, '2018-01-24 07:59:43', '2018-01-24 07:59:43'),
(18012410, 11, 20, 0, '2018-01-24 08:01:14', '2018-01-24 08:01:14'),
(18012411, 11, 20, 0, '2018-01-24 08:04:54', '2018-01-24 08:04:54'),
(18012412, 11, 20, 0, '2018-01-24 08:10:26', '2018-01-24 08:10:26'),
(18012413, 11, 20, 0, '2018-01-24 08:15:45', '2018-01-24 08:15:45'),
(18012414, 11, 22, 0, '2018-01-24 08:26:36', '2018-01-24 08:26:36'),
(18012415, 11, 22, 0, '2018-01-24 08:30:12', '2018-01-24 08:30:12'),
(18012501, 11, 21, 0, '2018-01-25 00:48:15', '2018-01-25 00:48:15'),
(18012502, 11, 21, 0, '2018-01-25 01:04:16', '2018-01-25 01:04:16'),
(18012503, 11, 21, 0, '2018-01-25 01:12:11', '2018-01-25 01:12:11'),
(18012504, 11, 21, 0, '2018-01-25 01:19:58', '2018-01-25 01:19:58'),
(18012505, 11, 20, 0, '2018-01-25 01:21:39', '2018-01-25 01:21:39'),
(18012506, 11, 20, 0, '2018-01-25 01:22:09', '2018-01-25 01:22:09'),
(18012507, 11, 26, 0, '2018-01-25 01:22:57', '2018-01-25 01:22:57'),
(18012508, 6, 20, 0, '2018-01-25 01:24:22', '2018-01-25 01:24:22'),
(18012509, 6, 21, 0, '2018-01-25 01:32:34', '2018-01-25 01:32:34'),
(18012510, 11, 20, 0, '2018-01-25 05:22:43', '2018-01-25 05:22:43'),
(18012511, 11, 26, 0, '2018-01-25 05:24:44', '2018-01-25 05:24:44'),
(18012512, 11, 26, 0, '2018-01-25 05:27:25', '2018-01-25 05:27:25'),
(18012513, 11, 29, 0, '2018-01-25 05:28:17', '2018-01-25 05:28:17'),
(18012514, 11, 20, 0, '2018-01-25 05:46:09', '2018-01-25 05:46:09'),
(18012515, 11, 21, 0, '2018-01-25 05:48:10', '2018-01-25 05:48:10'),
(18012516, 11, 26, 0, '2018-01-25 05:49:04', '2018-01-25 05:49:04'),
(18012517, 11, 29, 0, '2018-01-25 05:53:09', '2018-01-25 05:53:09'),
(18012518, 11, 23, 0, '2018-01-25 05:54:20', '2018-01-25 05:54:20'),
(18012519, 11, 21, 0, '2018-01-25 05:55:04', '2018-01-25 05:55:04'),
(18012520, 11, 22, 0, '2018-01-25 05:55:35', '2018-01-25 05:55:35'),
(18012521, 6, 23, 0, '2018-01-25 06:22:16', '2018-01-25 06:22:16'),
(18012522, 6, 23, 0, '2018-01-25 06:22:31', '2018-01-25 06:22:31'),
(18012523, 6, 21, 0, '2018-01-25 06:29:10', '2018-01-25 06:29:10'),
(18012524, 6, 21, 0, '2018-01-25 06:39:20', '2018-01-25 06:39:20'),
(18012525, 6, 22, 0, '2018-01-25 06:40:34', '2018-01-25 06:40:34'),
(18012526, 6, 23, 0, '2018-01-25 06:46:36', '2018-01-25 06:46:36'),
(18012527, 11, 22, 0, '2018-01-25 07:14:31', '2018-01-25 07:14:31'),
(18012528, 6, 32, 0, '2018-01-25 07:36:39', '2018-01-25 07:36:39'),
(18012529, 6, 34, 0, '2018-01-25 07:40:32', '2018-01-25 07:40:32'),
(18012530, 6, 29, 0, '2018-01-25 07:41:21', '2018-01-25 07:41:21'),
(18012531, 6, 20, 0, '2018-01-25 07:57:07', '2018-01-25 07:57:07'),
(18012532, 6, 21, 0, '2018-01-25 07:57:57', '2018-01-25 07:57:57'),
(18012533, 6, 21, 0, '2018-01-25 07:59:49', '2018-01-25 07:59:49'),
(18012534, 6, 21, 0, '2018-01-25 08:35:50', '2018-01-25 08:35:50'),
(18012535, 6, 23, 0, '2018-01-25 08:36:38', '2018-01-25 08:36:38'),
(18012536, 6, 22, 0, '2018-01-25 08:45:00', '2018-01-25 08:45:00'),
(18012537, 6, 22, 0, '2018-01-25 09:00:57', '2018-01-25 09:00:57'),
(18012538, 6, 22, 0, '2018-01-25 09:02:49', '2018-01-25 09:02:49'),
(18012539, 6, 34, 0, '2018-01-25 09:09:47', '2018-01-25 09:09:47'),
(18012540, 6, 21, 0, '2018-01-25 09:11:05', '2018-01-25 09:11:05'),
(18012541, 6, 34, 0, '2018-01-25 09:11:33', '2018-01-25 09:11:33'),
(18012542, 6, 21, 0, '2018-01-25 09:13:26', '2018-01-25 09:13:26'),
(18012543, 6, 23, 0, '2018-01-25 09:16:25', '2018-01-25 09:16:25'),
(18012544, 6, 21, 0, '2018-01-25 09:17:42', '2018-01-25 09:17:42'),
(18012545, 6, 20, 0, '2018-01-25 09:23:09', '2018-01-25 09:23:09'),
(18012546, 6, 22, 0, '2018-01-25 09:25:15', '2018-01-25 09:25:15'),
(18012547, 6, 22, 0, '2018-01-25 09:29:18', '2018-01-25 09:29:18'),
(18012548, 6, 23, 0, '2018-01-25 09:38:44', '2018-01-25 09:38:44'),
(18012549, 6, 21, 0, '2018-01-25 09:42:45', '2018-01-25 09:42:45'),
(18012550, 6, 22, 0, '2018-01-25 09:59:40', '2018-01-25 09:59:40'),
(18012601, 6, 21, 0, '2018-01-26 01:26:43', '2018-01-26 01:26:43'),
(18012602, 6, 24, 0, '2018-01-26 01:41:33', '2018-01-26 01:41:33'),
(18012603, 6, 21, 0, '2018-01-26 01:43:16', '2018-01-26 01:43:16'),
(18012604, 6, 1, 0, '2018-01-26 01:54:58', '2018-01-26 01:54:58'),
(18012605, 6, 1, 0, '2018-01-26 01:57:46', '2018-01-26 01:57:46'),
(18012606, 6, 1, 0, '2018-01-26 02:06:42', '2018-01-26 02:06:42'),
(18012607, 6, 1, 0, '2018-01-26 05:18:39', '2018-01-26 05:18:39'),
(18012608, 6, 1, 0, '2018-01-26 05:32:03', '2018-01-26 05:32:03'),
(18012609, 6, 23, 1, '2018-01-26 05:34:16', '2018-01-26 07:20:23'),
(18012610, 6, 1, 1, '2018-01-26 06:07:08', '2018-01-26 07:19:42'),
(18012611, 6, 22, 1, '2018-01-26 06:26:50', '2018-01-26 07:14:50'),
(18012901, 11, 1, 1, '2018-01-29 05:43:48', '2018-01-31 02:46:18'),
(18013101, 6, 23, 0, '2018-01-31 03:46:52', '2018-01-31 03:46:52'),
(18013102, 6, 21, 1, '2018-01-31 05:28:53', '2018-02-06 07:30:27'),
(18020901, 6, 22, 0, '2018-02-09 01:13:27', '2018-02-09 01:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_name_unique` (`name`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user1', 'user1@philips.com', 'admin', '$2y$10$mYwXCKRrYpIEAahNIq6s8uzWCcY8wiGSmUoZRK.IjQwZQA/ONZ07u', 'lO5u65FZF5abGdLaQE5BoGOnmthsttD3zjz4nhWzkrqc1xyJxj9SL1XHD2Z1', '2017-05-01 23:04:08', '2018-01-25 07:05:39'),
(8, 'jack', 'jack@hotmail.com', 'user', '$2y$10$Zt3CWzFP40mYoceXWBJcwu9lzphwES7xvhqOFuxxTbiBrm8VeVUp6', 'bFVoMPfjz3kMGBevzuDsJWoTo0HSaaF0szeOAppTrVnReXBcX3q3ZFonuLrh', '2017-07-10 06:08:03', '2018-01-25 07:05:38'),
(7, 'Zac Tan', 'tan.chiewtiong@philips.com', 'user', '$2y$10$EEOlugYnmg4kcYUGu7swjO3m3JTZdxGoi3eddjywFIsaPYfWvQvsO', '9EESYsM4Aq11joOmwqqqpHdj4M07euz3FiYHOcY8AirDxInFSzrvVru7HnML', '2017-07-04 07:49:20', '2018-01-25 07:05:38'),
(6, 'admin1', 'admin1@philips.com', 'admin', '$2y$10$tTelsCWKI0hUyl9oM37gHu5V/E8/6sb1a/itd7Im.NS1IsBRgfWIa', 'uGxQPVzUfyNxozcuUJHPpRN5ufZIom13fMw7i0OfoxDbgHP6KV0yjHV365zC', '2017-06-06 09:24:49', '2017-07-07 05:16:00'),
(9, 'aaa', 'aaa@gmail.com', 'user', '$2y$10$bfsK.DQiBM8a0B1TKFI2Le0P7D9AGcBQCF6YK4tPQ1PxYeBfTAjqy', 'ViRfDaIjQpW6DcnBhXykc1IxTs8pAJBC3cOhY0iB0g72rua1JuOwrMWo0Zgr', '2017-07-25 06:04:07', '2018-01-25 07:05:40'),
(11, 'zhonghsun', 'development.quality@philips.com', 'user', '$2y$10$xqhvupAYkUNvk4op0K.p6.usbIaw7AetjXigVrAWtbGp/wC3g.YMS', 'MWzqnIs9N1JRb6EufpFIsu2uQO80tfK6lcueXri0pIN93TRszwhACvBWJK10', '2018-01-24 07:22:21', '2018-01-26 00:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `vibration_tests`
--

DROP TABLE IF EXISTS `vibration_tests`;
CREATE TABLE IF NOT EXISTS `vibration_tests` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `test_id` int(11) NOT NULL,
  `sample_id` int(11) DEFAULT NULL,
  `doc_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `power_rating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_purpose` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rev_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wire_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flex_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bending_angle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `progress_action` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci,
  `type_of_vibration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `F-Box` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iron` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vibration_tests`
--

INSERT INTO `vibration_tests` (`id`, `test_id`, `sample_id`, `doc_num`, `power_rating`, `test_purpose`, `rev_num`, `supplier`, `wire_size`, `pin_type`, `flex_type`, `bending_angle`, `weight`, `current`, `issue`, `progress_action`, `status`, `type_of_vibration`, `F-Box`, `iron`, `result`, `remark`, `created_at`, `updated_at`) VALUES
(1, 1711300201, 1, NULL, NULL, NULL, NULL, 'Volex', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gg', NULL, NULL, NULL, NULL, '2017-11-30 07:23:42', '2017-11-30 07:26:06'),
(2, 1711301101, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ggg', NULL, NULL, NULL, NULL, '2017-11-30 08:38:31', '2017-11-30 08:48:27'),
(3, 1712010101, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-01 00:59:11', '2017-12-01 00:59:11'),
(4, 1712260102, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-26 06:19:30', '2017-12-26 06:19:30'),
(5, 1712260102, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-26 06:19:30', '2017-12-26 06:19:30'),
(6, 1712260102, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-26 06:19:30', '2017-12-26 06:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `wet_life_tests`
--

DROP TABLE IF EXISTS `wet_life_tests`;
CREATE TABLE IF NOT EXISTS `wet_life_tests` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `test_id` int(11) NOT NULL,
  `sample_id` int(11) DEFAULT NULL,
  `doc_num` text COLLATE utf8mb4_unicode_ci,
  `power_rating` text COLLATE utf8mb4_unicode_ci,
  `test_purpose` text COLLATE utf8mb4_unicode_ci,
  `rev_num` text COLLATE utf8mb4_unicode_ci,
  `AHT_0` text COLLATE utf8mb4_unicode_ci,
  `AHT_100` text COLLATE utf8mb4_unicode_ci,
  `AHT_200` text COLLATE utf8mb4_unicode_ci,
  `AHT_300` text COLLATE utf8mb4_unicode_ci,
  `AHT_600` text COLLATE utf8mb4_unicode_ci,
  `AHT_900` text COLLATE utf8mb4_unicode_ci,
  `AHT_1200` text COLLATE utf8mb4_unicode_ci,
  `DOC_0` text COLLATE utf8mb4_unicode_ci,
  `DOC_100` text COLLATE utf8mb4_unicode_ci,
  `DOC_200` text COLLATE utf8mb4_unicode_ci,
  `DOC_300` text COLLATE utf8mb4_unicode_ci,
  `DOC_600` text COLLATE utf8mb4_unicode_ci,
  `DOC_900` text COLLATE utf8mb4_unicode_ci,
  `DOC_1200` text COLLATE utf8mb4_unicode_ci,
  `TRS_0` text COLLATE utf8mb4_unicode_ci,
  `TRS_100` text COLLATE utf8mb4_unicode_ci,
  `TRS_200` text COLLATE utf8mb4_unicode_ci,
  `TRS_300` text COLLATE utf8mb4_unicode_ci,
  `TRS_600` text COLLATE utf8mb4_unicode_ci,
  `TRS_900` text COLLATE utf8mb4_unicode_ci,
  `TRS_1200` text COLLATE utf8mb4_unicode_ci,
  `f1_0` text COLLATE utf8mb4_unicode_ci,
  `f1_100` text COLLATE utf8mb4_unicode_ci,
  `f1_200` text COLLATE utf8mb4_unicode_ci,
  `f1_300` text COLLATE utf8mb4_unicode_ci,
  `f1_600` text COLLATE utf8mb4_unicode_ci,
  `f1_900` text COLLATE utf8mb4_unicode_ci,
  `f1_1200` text COLLATE utf8mb4_unicode_ci,
  `f2_0` text COLLATE utf8mb4_unicode_ci,
  `f2_100` text COLLATE utf8mb4_unicode_ci,
  `f2_200` text COLLATE utf8mb4_unicode_ci,
  `f2_300` text COLLATE utf8mb4_unicode_ci,
  `f2_600` text COLLATE utf8mb4_unicode_ci,
  `f2_900` text COLLATE utf8mb4_unicode_ci,
  `f2_1200` text COLLATE utf8mb4_unicode_ci,
  `f3_0` text COLLATE utf8mb4_unicode_ci,
  `f3_100` text COLLATE utf8mb4_unicode_ci,
  `f3_200` text COLLATE utf8mb4_unicode_ci,
  `f3_300` text COLLATE utf8mb4_unicode_ci,
  `f3_600` text COLLATE utf8mb4_unicode_ci,
  `f3_900` text COLLATE utf8mb4_unicode_ci,
  `f3_1200` text COLLATE utf8mb4_unicode_ci,
  `f4a_0` text COLLATE utf8mb4_unicode_ci,
  `f4a_100` text COLLATE utf8mb4_unicode_ci,
  `f4a_200` text COLLATE utf8mb4_unicode_ci,
  `f4a_300` text COLLATE utf8mb4_unicode_ci,
  `f4a_600` text COLLATE utf8mb4_unicode_ci,
  `f4a_900` text COLLATE utf8mb4_unicode_ci,
  `f4a_1200` text COLLATE utf8mb4_unicode_ci,
  `f4b_0` text COLLATE utf8mb4_unicode_ci,
  `f4b_100` text COLLATE utf8mb4_unicode_ci,
  `f4b_200` text COLLATE utf8mb4_unicode_ci,
  `f4b_300` text COLLATE utf8mb4_unicode_ci,
  `f4b_600` text COLLATE utf8mb4_unicode_ci,
  `f4b_900` text COLLATE utf8mb4_unicode_ci,
  `f4b_1200` text COLLATE utf8mb4_unicode_ci,
  `f5a_0` text COLLATE utf8mb4_unicode_ci,
  `f5a_100` text COLLATE utf8mb4_unicode_ci,
  `f5a_200` text COLLATE utf8mb4_unicode_ci,
  `f5a_300` text COLLATE utf8mb4_unicode_ci,
  `f5a_600` text COLLATE utf8mb4_unicode_ci,
  `f5a_900` text COLLATE utf8mb4_unicode_ci,
  `f5a_1200` text COLLATE utf8mb4_unicode_ci,
  `f5b_0` text COLLATE utf8mb4_unicode_ci,
  `f5b_100` text COLLATE utf8mb4_unicode_ci,
  `f5b_200` text COLLATE utf8mb4_unicode_ci,
  `f5b_300` text COLLATE utf8mb4_unicode_ci,
  `f5b_600` text COLLATE utf8mb4_unicode_ci,
  `f5b_900` text COLLATE utf8mb4_unicode_ci,
  `f5b_1200` text COLLATE utf8mb4_unicode_ci,
  `f6a_0` text COLLATE utf8mb4_unicode_ci,
  `f6a_100` text COLLATE utf8mb4_unicode_ci,
  `f6a_200` text COLLATE utf8mb4_unicode_ci,
  `f6a_300` text COLLATE utf8mb4_unicode_ci,
  `f6a_600` text COLLATE utf8mb4_unicode_ci,
  `f6a_900` text COLLATE utf8mb4_unicode_ci,
  `f6a_1200` text COLLATE utf8mb4_unicode_ci,
  `f6b_0` text COLLATE utf8mb4_unicode_ci,
  `f6b_100` text COLLATE utf8mb4_unicode_ci,
  `f6b_200` text COLLATE utf8mb4_unicode_ci,
  `f6b_300` text COLLATE utf8mb4_unicode_ci,
  `f6b_600` text COLLATE utf8mb4_unicode_ci,
  `f6b_900` text COLLATE utf8mb4_unicode_ci,
  `f6b_1200` text COLLATE utf8mb4_unicode_ci,
  `f6c_0` text COLLATE utf8mb4_unicode_ci,
  `f6c_100` text COLLATE utf8mb4_unicode_ci,
  `f6c_200` text COLLATE utf8mb4_unicode_ci,
  `f6c_300` text COLLATE utf8mb4_unicode_ci,
  `f6c_600` text COLLATE utf8mb4_unicode_ci,
  `f6c_900` text COLLATE utf8mb4_unicode_ci,
  `f6c_1200` text COLLATE utf8mb4_unicode_ci,
  `f7a_0` text COLLATE utf8mb4_unicode_ci,
  `f7a_100` text COLLATE utf8mb4_unicode_ci,
  `f7a_200` text COLLATE utf8mb4_unicode_ci,
  `f7a_300` text COLLATE utf8mb4_unicode_ci,
  `f7a_600` text COLLATE utf8mb4_unicode_ci,
  `f7a_900` text COLLATE utf8mb4_unicode_ci,
  `f7a_1200` text COLLATE utf8mb4_unicode_ci,
  `f7b_0` text COLLATE utf8mb4_unicode_ci,
  `f7b_100` text COLLATE utf8mb4_unicode_ci,
  `f7b_200` text COLLATE utf8mb4_unicode_ci,
  `f7b_300` text COLLATE utf8mb4_unicode_ci,
  `f7b_600` text COLLATE utf8mb4_unicode_ci,
  `f7b_900` text COLLATE utf8mb4_unicode_ci,
  `f7b_1200` text COLLATE utf8mb4_unicode_ci,
  `f7c_0` text COLLATE utf8mb4_unicode_ci,
  `f7c_100` text COLLATE utf8mb4_unicode_ci,
  `f7c_200` text COLLATE utf8mb4_unicode_ci,
  `f7c_300` text COLLATE utf8mb4_unicode_ci,
  `f7c_600` text COLLATE utf8mb4_unicode_ci,
  `f7c_900` text COLLATE utf8mb4_unicode_ci,
  `f7c_1200` text COLLATE utf8mb4_unicode_ci,
  `f7d_0` text COLLATE utf8mb4_unicode_ci,
  `f7d_100` text COLLATE utf8mb4_unicode_ci,
  `f7d_200` text COLLATE utf8mb4_unicode_ci,
  `f7d_300` text COLLATE utf8mb4_unicode_ci,
  `f7d_600` text COLLATE utf8mb4_unicode_ci,
  `f7d_900` text COLLATE utf8mb4_unicode_ci,
  `f7d_1200` text COLLATE utf8mb4_unicode_ci,
  `f8a_0` text COLLATE utf8mb4_unicode_ci,
  `f8a_100` text COLLATE utf8mb4_unicode_ci,
  `f8a_200` text COLLATE utf8mb4_unicode_ci,
  `f8a_300` text COLLATE utf8mb4_unicode_ci,
  `f8a_600` text COLLATE utf8mb4_unicode_ci,
  `f8a_900` text COLLATE utf8mb4_unicode_ci,
  `f8a_1200` text COLLATE utf8mb4_unicode_ci,
  `f8b_0` text COLLATE utf8mb4_unicode_ci,
  `f8b_100` text COLLATE utf8mb4_unicode_ci,
  `f8b_200` text COLLATE utf8mb4_unicode_ci,
  `f8b_300` text COLLATE utf8mb4_unicode_ci,
  `f8b_600` text COLLATE utf8mb4_unicode_ci,
  `f8b_900` text COLLATE utf8mb4_unicode_ci,
  `f8b_1200` text COLLATE utf8mb4_unicode_ci,
  `f8c_0` text COLLATE utf8mb4_unicode_ci,
  `f8c_100` text COLLATE utf8mb4_unicode_ci,
  `f8c_200` text COLLATE utf8mb4_unicode_ci,
  `f8c_300` text COLLATE utf8mb4_unicode_ci,
  `f8c_600` text COLLATE utf8mb4_unicode_ci,
  `f8c_900` text COLLATE utf8mb4_unicode_ci,
  `f8c_1200` text COLLATE utf8mb4_unicode_ci,
  `f8d_0` text COLLATE utf8mb4_unicode_ci,
  `f8d_100` text COLLATE utf8mb4_unicode_ci,
  `f8d_200` text COLLATE utf8mb4_unicode_ci,
  `f8d_300` text COLLATE utf8mb4_unicode_ci,
  `f8d_600` text COLLATE utf8mb4_unicode_ci,
  `f8d_900` text COLLATE utf8mb4_unicode_ci,
  `f8d_1200` text COLLATE utf8mb4_unicode_ci,
  `f9a_0` text COLLATE utf8mb4_unicode_ci,
  `f9a_100` text COLLATE utf8mb4_unicode_ci,
  `f9a_200` text COLLATE utf8mb4_unicode_ci,
  `f9a_300` text COLLATE utf8mb4_unicode_ci,
  `f9a_600` text COLLATE utf8mb4_unicode_ci,
  `f9a_900` text COLLATE utf8mb4_unicode_ci,
  `f9a_1200` text COLLATE utf8mb4_unicode_ci,
  `f9b_0` text COLLATE utf8mb4_unicode_ci,
  `f9b_100` text COLLATE utf8mb4_unicode_ci,
  `f9b_200` text COLLATE utf8mb4_unicode_ci,
  `f9b_300` text COLLATE utf8mb4_unicode_ci,
  `f9b_600` text COLLATE utf8mb4_unicode_ci,
  `f9b_900` text COLLATE utf8mb4_unicode_ci,
  `f9b_1200` text COLLATE utf8mb4_unicode_ci,
  `f9c_0` text COLLATE utf8mb4_unicode_ci,
  `f9c_100` text COLLATE utf8mb4_unicode_ci,
  `f9c_200` text COLLATE utf8mb4_unicode_ci,
  `f9c_300` text COLLATE utf8mb4_unicode_ci,
  `f9c_600` text COLLATE utf8mb4_unicode_ci,
  `f9c_900` text COLLATE utf8mb4_unicode_ci,
  `f9c_1200` text COLLATE utf8mb4_unicode_ci,
  `f9d_0` text COLLATE utf8mb4_unicode_ci,
  `f9d_100` text COLLATE utf8mb4_unicode_ci,
  `f9d_200` text COLLATE utf8mb4_unicode_ci,
  `f9d_300` text COLLATE utf8mb4_unicode_ci,
  `f9d_600` text COLLATE utf8mb4_unicode_ci,
  `f9d_900` text COLLATE utf8mb4_unicode_ci,
  `f9d_1200` text COLLATE utf8mb4_unicode_ci,
  `f9e_0` text COLLATE utf8mb4_unicode_ci,
  `f9e_100` text COLLATE utf8mb4_unicode_ci,
  `f9e_200` text COLLATE utf8mb4_unicode_ci,
  `f9e_300` text COLLATE utf8mb4_unicode_ci,
  `f9e_600` text COLLATE utf8mb4_unicode_ci,
  `f9e_900` text COLLATE utf8mb4_unicode_ci,
  `f9e_1200` text COLLATE utf8mb4_unicode_ci,
  `f10_0` text COLLATE utf8mb4_unicode_ci,
  `f10_100` text COLLATE utf8mb4_unicode_ci,
  `f10_200` text COLLATE utf8mb4_unicode_ci,
  `f10_300` text COLLATE utf8mb4_unicode_ci,
  `f10_600` text COLLATE utf8mb4_unicode_ci,
  `f10_900` text COLLATE utf8mb4_unicode_ci,
  `f10_1200` text COLLATE utf8mb4_unicode_ci,
  `f11_0` text COLLATE utf8mb4_unicode_ci,
  `f11_100` text COLLATE utf8mb4_unicode_ci,
  `f11_200` text COLLATE utf8mb4_unicode_ci,
  `f11_300` text COLLATE utf8mb4_unicode_ci,
  `f11_600` text COLLATE utf8mb4_unicode_ci,
  `f11_900` text COLLATE utf8mb4_unicode_ci,
  `f11_1200` text COLLATE utf8mb4_unicode_ci,
  `f12_0` text COLLATE utf8mb4_unicode_ci,
  `f12_100` text COLLATE utf8mb4_unicode_ci,
  `f12_200` text COLLATE utf8mb4_unicode_ci,
  `f12_300` text COLLATE utf8mb4_unicode_ci,
  `f12_600` text COLLATE utf8mb4_unicode_ci,
  `f12_900` text COLLATE utf8mb4_unicode_ci,
  `f12_1200` text COLLATE utf8mb4_unicode_ci,
  `f13_0` text COLLATE utf8mb4_unicode_ci,
  `f13_100` text COLLATE utf8mb4_unicode_ci,
  `f13_200` text COLLATE utf8mb4_unicode_ci,
  `f13_300` text COLLATE utf8mb4_unicode_ci,
  `f13_600` text COLLATE utf8mb4_unicode_ci,
  `f13_900` text COLLATE utf8mb4_unicode_ci,
  `f13_1200` text COLLATE utf8mb4_unicode_ci,
  `f14_0` text COLLATE utf8mb4_unicode_ci,
  `f14_100` text COLLATE utf8mb4_unicode_ci,
  `f14_200` text COLLATE utf8mb4_unicode_ci,
  `f14_300` text COLLATE utf8mb4_unicode_ci,
  `f14_600` text COLLATE utf8mb4_unicode_ci,
  `f14_900` text COLLATE utf8mb4_unicode_ci,
  `f14_1200` text COLLATE utf8mb4_unicode_ci,
  `f15_0` text COLLATE utf8mb4_unicode_ci,
  `f15_100` text COLLATE utf8mb4_unicode_ci,
  `f15_200` text COLLATE utf8mb4_unicode_ci,
  `f15_300` text COLLATE utf8mb4_unicode_ci,
  `f15_600` text COLLATE utf8mb4_unicode_ci,
  `f15_900` text COLLATE utf8mb4_unicode_ci,
  `f15_1200` text COLLATE utf8mb4_unicode_ci,
  `f16_0` text COLLATE utf8mb4_unicode_ci,
  `f16_100` text COLLATE utf8mb4_unicode_ci,
  `f16_200` text COLLATE utf8mb4_unicode_ci,
  `f16_300` text COLLATE utf8mb4_unicode_ci,
  `f16_600` text COLLATE utf8mb4_unicode_ci,
  `f16_900` text COLLATE utf8mb4_unicode_ci,
  `f16_1200` text COLLATE utf8mb4_unicode_ci,
  `remark` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wet_life_tests`
--

INSERT INTO `wet_life_tests` (`id`, `test_id`, `sample_id`, `doc_num`, `power_rating`, `test_purpose`, `rev_num`, `AHT_0`, `AHT_100`, `AHT_200`, `AHT_300`, `AHT_600`, `AHT_900`, `AHT_1200`, `DOC_0`, `DOC_100`, `DOC_200`, `DOC_300`, `DOC_600`, `DOC_900`, `DOC_1200`, `TRS_0`, `TRS_100`, `TRS_200`, `TRS_300`, `TRS_600`, `TRS_900`, `TRS_1200`, `f1_0`, `f1_100`, `f1_200`, `f1_300`, `f1_600`, `f1_900`, `f1_1200`, `f2_0`, `f2_100`, `f2_200`, `f2_300`, `f2_600`, `f2_900`, `f2_1200`, `f3_0`, `f3_100`, `f3_200`, `f3_300`, `f3_600`, `f3_900`, `f3_1200`, `f4a_0`, `f4a_100`, `f4a_200`, `f4a_300`, `f4a_600`, `f4a_900`, `f4a_1200`, `f4b_0`, `f4b_100`, `f4b_200`, `f4b_300`, `f4b_600`, `f4b_900`, `f4b_1200`, `f5a_0`, `f5a_100`, `f5a_200`, `f5a_300`, `f5a_600`, `f5a_900`, `f5a_1200`, `f5b_0`, `f5b_100`, `f5b_200`, `f5b_300`, `f5b_600`, `f5b_900`, `f5b_1200`, `f6a_0`, `f6a_100`, `f6a_200`, `f6a_300`, `f6a_600`, `f6a_900`, `f6a_1200`, `f6b_0`, `f6b_100`, `f6b_200`, `f6b_300`, `f6b_600`, `f6b_900`, `f6b_1200`, `f6c_0`, `f6c_100`, `f6c_200`, `f6c_300`, `f6c_600`, `f6c_900`, `f6c_1200`, `f7a_0`, `f7a_100`, `f7a_200`, `f7a_300`, `f7a_600`, `f7a_900`, `f7a_1200`, `f7b_0`, `f7b_100`, `f7b_200`, `f7b_300`, `f7b_600`, `f7b_900`, `f7b_1200`, `f7c_0`, `f7c_100`, `f7c_200`, `f7c_300`, `f7c_600`, `f7c_900`, `f7c_1200`, `f7d_0`, `f7d_100`, `f7d_200`, `f7d_300`, `f7d_600`, `f7d_900`, `f7d_1200`, `f8a_0`, `f8a_100`, `f8a_200`, `f8a_300`, `f8a_600`, `f8a_900`, `f8a_1200`, `f8b_0`, `f8b_100`, `f8b_200`, `f8b_300`, `f8b_600`, `f8b_900`, `f8b_1200`, `f8c_0`, `f8c_100`, `f8c_200`, `f8c_300`, `f8c_600`, `f8c_900`, `f8c_1200`, `f8d_0`, `f8d_100`, `f8d_200`, `f8d_300`, `f8d_600`, `f8d_900`, `f8d_1200`, `f9a_0`, `f9a_100`, `f9a_200`, `f9a_300`, `f9a_600`, `f9a_900`, `f9a_1200`, `f9b_0`, `f9b_100`, `f9b_200`, `f9b_300`, `f9b_600`, `f9b_900`, `f9b_1200`, `f9c_0`, `f9c_100`, `f9c_200`, `f9c_300`, `f9c_600`, `f9c_900`, `f9c_1200`, `f9d_0`, `f9d_100`, `f9d_200`, `f9d_300`, `f9d_600`, `f9d_900`, `f9d_1200`, `f9e_0`, `f9e_100`, `f9e_200`, `f9e_300`, `f9e_600`, `f9e_900`, `f9e_1200`, `f10_0`, `f10_100`, `f10_200`, `f10_300`, `f10_600`, `f10_900`, `f10_1200`, `f11_0`, `f11_100`, `f11_200`, `f11_300`, `f11_600`, `f11_900`, `f11_1200`, `f12_0`, `f12_100`, `f12_200`, `f12_300`, `f12_600`, `f12_900`, `f12_1200`, `f13_0`, `f13_100`, `f13_200`, `f13_300`, `f13_600`, `f13_900`, `f13_1200`, `f14_0`, `f14_100`, `f14_200`, `f14_300`, `f14_600`, `f14_900`, `f14_1200`, `f15_0`, `f15_100`, `f15_200`, `f15_300`, `f15_600`, `f15_900`, `f15_1200`, `f16_0`, `f16_100`, `f16_200`, `f16_300`, `f16_600`, `f16_900`, `f16_1200`, `remark`, `created_at`, `updated_at`) VALUES
(1, 1707190201, 1, 'fda', 'fdsafdsaffdsa', 'fdsa', 'fdsa', '3213', NULL, NULL, 'fdsafsda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '213', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fdasfdsa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-19 06:50:24', '2017-07-19 06:50:24'),
(2, 1707190201, 2, 'fda', 'fdsafdsaffdsa', 'fdsa', 'fdsa', '13520', NULL, NULL, 'fdsaf', NULL, NULL, NULL, '3213321', NULL, NULL, NULL, NULL, NULL, NULL, 'fdsa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4531', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-19 06:50:24', '2017-07-21 09:13:25'),
(3, 1707190201, 3, 'fda', 'fdsafdsaffdsa', 'fdsa', 'fdsa', NULL, NULL, NULL, '4530', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3213', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fdsa', NULL, NULL, '12.5', NULL, NULL, NULL, NULL, 'fdsa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-19 06:50:24', '2017-07-21 09:16:02'),
(4, 1707210102, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fdsa', NULL, NULL, NULL, NULL, NULL, 'fdsa', NULL, NULL, NULL, NULL, NULL, NULL, 'fdsa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-21 09:33:53', '2017-07-21 09:34:15'),
(5, 1707210102, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dfsa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fdas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dsa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-21 09:33:53', '2017-07-21 09:34:15'),
(6, 1707210102, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fdsa', NULL, NULL, NULL, NULL, '42314', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dsa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-21 09:33:53', '2017-07-21 09:34:15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
