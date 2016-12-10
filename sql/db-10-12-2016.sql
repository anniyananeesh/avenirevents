-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2016 at 06:24 PM
-- Server version: 5.5.42
-- PHP Version: 5.5.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `avenir_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_logs`
--

CREATE TABLE `tbl_admin_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` text COLLATE latin1_general_ci NOT NULL,
  `is_active` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=1056 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_admin_logs`
--

INSERT INTO `tbl_admin_logs` (`id`, `user_id`, `description`, `is_active`, `added_date`) VALUES
(1, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 5', 'Y', '2014-11-28 19:29:43'),
(2, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 3', 'Y', '2014-11-28 20:37:09'),
(3, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 4', 'Y', '2014-11-28 20:40:58'),
(4, 1, '<b>Super Administrator</b> Inserted a new record in <b>Doctors Management</b> with ID = 5', 'Y', '2014-11-28 21:08:03'),
(5, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 3', 'Y', '2014-11-28 21:13:05'),
(6, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 4', 'Y', '2014-11-28 21:27:13'),
(7, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 5', 'Y', '2014-11-28 21:27:29'),
(8, 1, '<b>Super Administrator</b> Inserted a new record in <b>Doctors Management</b> with ID = 6', 'Y', '2014-11-29 19:22:49'),
(9, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 6', 'Y', '2014-11-29 19:23:26'),
(10, 1, '<b>Super Administrator</b> Inserted a new record in <b>Doctors Management</b> with ID = 7', 'Y', '2014-11-29 19:35:04'),
(11, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 3', 'Y', '2014-11-30 10:57:06'),
(12, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 3', 'Y', '2014-11-30 11:03:46'),
(13, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2014-11-30 11:19:49'),
(14, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2014-11-30 11:32:16'),
(15, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 10', 'Y', '2014-11-30 11:34:31'),
(16, 1, '<b>Super Administrator</b> Inserted a new record in <b>Contents Management</b> with ID = 18', 'Y', '2014-11-30 11:38:03'),
(17, 1, '<b>Super Administrator</b> Inserted a new record in <b>Contents Management</b> with ID = 19', 'Y', '2014-11-30 12:03:18'),
(18, 1, '<b>Super Administrator</b> Inserted a new record in <b>Contents Management</b> with ID = 20', 'Y', '2014-11-30 12:03:35'),
(19, 1, '<b>Super Administrator</b> Delete a record in <b>Contents Management</b> with ID = 20', 'Y', '2014-11-30 12:16:18'),
(20, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 18', 'Y', '2014-11-30 12:31:00'),
(21, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 19', 'Y', '2014-11-30 12:40:27'),
(22, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 10', 'Y', '2014-11-30 12:45:54'),
(23, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 10', 'Y', '2014-11-30 12:47:51'),
(24, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 10', 'Y', '2014-11-30 12:48:03'),
(25, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 1', 'Y', '2014-12-01 05:24:04'),
(26, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 2', 'Y', '2014-12-01 05:24:28'),
(27, 1, '<b>Super Administrator</b> Inserted a new record in <b>Services Management</b> with ID = 3', 'Y', '2014-12-01 05:24:47'),
(28, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 2', 'Y', '2014-12-01 12:31:51'),
(29, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 3', 'Y', '2014-12-01 12:33:40'),
(30, 1, '<b>Super Administrator</b> Unpublish a record in <b>Media Management</b> with ID = 3', 'Y', '2014-12-01 12:38:33'),
(31, 1, '<b>Super Administrator</b> Publish a record in <b>Media Management</b> with ID = 3', 'Y', '2014-12-01 12:38:40'),
(32, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 4', 'Y', '2014-12-01 12:44:29'),
(33, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 2', 'Y', '2014-12-01 13:05:59'),
(34, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 3', 'Y', '2014-12-01 13:06:07'),
(35, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 1', 'Y', '2014-12-01 13:06:07'),
(36, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 4', 'Y', '2014-12-01 13:06:12'),
(37, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 111', 'Y', '2014-12-01 13:42:44'),
(38, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 110', 'Y', '2014-12-01 13:42:44'),
(39, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 109', 'Y', '2014-12-01 13:42:44'),
(40, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 108', 'Y', '2014-12-01 13:42:44'),
(41, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 107', 'Y', '2014-12-01 13:42:44'),
(42, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 106', 'Y', '2014-12-01 13:42:44'),
(43, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 105', 'Y', '2014-12-01 13:42:44'),
(44, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 104', 'Y', '2014-12-01 13:42:44'),
(45, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 103', 'Y', '2014-12-01 13:42:44'),
(46, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 102', 'Y', '2014-12-01 13:42:44'),
(47, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 101', 'Y', '2014-12-01 13:42:44'),
(48, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 100', 'Y', '2014-12-01 13:42:44'),
(49, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 99', 'Y', '2014-12-01 13:42:44'),
(50, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 98', 'Y', '2014-12-01 13:42:44'),
(51, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 97', 'Y', '2014-12-01 13:42:44'),
(52, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 96', 'Y', '2014-12-01 13:42:44'),
(53, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 95', 'Y', '2014-12-01 13:42:44'),
(54, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 94', 'Y', '2014-12-01 13:42:44'),
(55, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 93', 'Y', '2014-12-01 13:42:44'),
(56, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 92', 'Y', '2014-12-01 13:42:44'),
(57, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 91', 'Y', '2014-12-01 13:42:44'),
(58, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 90', 'Y', '2014-12-01 13:42:44'),
(59, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 89', 'Y', '2014-12-01 13:42:44'),
(60, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 88', 'Y', '2014-12-01 13:42:44'),
(61, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 87', 'Y', '2014-12-01 13:42:44'),
(62, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 86', 'Y', '2014-12-01 13:42:44'),
(63, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 85', 'Y', '2014-12-01 13:42:44'),
(64, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 84', 'Y', '2014-12-01 13:42:44'),
(65, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 83', 'Y', '2014-12-01 13:42:44'),
(66, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 75', 'Y', '2014-12-01 13:42:44'),
(67, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 74', 'Y', '2014-12-01 13:42:44'),
(68, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 73', 'Y', '2014-12-01 13:42:44'),
(69, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 72', 'Y', '2014-12-01 13:42:44'),
(70, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 71', 'Y', '2014-12-01 13:42:44'),
(71, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 70', 'Y', '2014-12-01 13:42:44'),
(72, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 69', 'Y', '2014-12-01 13:42:44'),
(73, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 66', 'Y', '2014-12-01 13:42:44'),
(74, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 65', 'Y', '2014-12-01 13:42:44'),
(75, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 64', 'Y', '2014-12-01 13:42:44'),
(76, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 115', 'Y', '2014-12-01 13:42:51'),
(77, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 114', 'Y', '2014-12-01 13:42:51'),
(78, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 113', 'Y', '2014-12-01 13:42:51'),
(79, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 112', 'Y', '2014-12-01 13:42:51'),
(80, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 81', 'Y', '2014-12-01 13:42:51'),
(81, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 79', 'Y', '2014-12-01 13:42:51'),
(82, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 78', 'Y', '2014-12-01 13:42:51'),
(83, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 63', 'Y', '2014-12-01 13:42:51'),
(84, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 62', 'Y', '2014-12-01 13:42:51'),
(85, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 61', 'Y', '2014-12-01 13:42:51'),
(86, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 60', 'Y', '2014-12-01 13:42:51'),
(87, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 59', 'Y', '2014-12-01 13:42:51'),
(88, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 58', 'Y', '2014-12-01 13:42:51'),
(89, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 57', 'Y', '2014-12-01 13:42:51'),
(90, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 56', 'Y', '2014-12-01 13:42:51'),
(91, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 55', 'Y', '2014-12-01 13:42:51'),
(92, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 54', 'Y', '2014-12-01 13:42:51'),
(93, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 53', 'Y', '2014-12-01 13:42:51'),
(94, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 52', 'Y', '2014-12-01 13:42:51'),
(95, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 51', 'Y', '2014-12-01 13:42:51'),
(96, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 50', 'Y', '2014-12-01 13:42:51'),
(97, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 49', 'Y', '2014-12-01 13:42:51'),
(98, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 48', 'Y', '2014-12-01 13:42:51'),
(99, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 47', 'Y', '2014-12-01 13:42:51'),
(100, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 46', 'Y', '2014-12-01 13:42:51'),
(101, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 45', 'Y', '2014-12-01 13:42:51'),
(102, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 44', 'Y', '2014-12-01 13:42:51'),
(103, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 42', 'Y', '2014-12-01 13:42:51'),
(104, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 41', 'Y', '2014-12-01 13:42:51'),
(105, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 40', 'Y', '2014-12-01 13:42:51'),
(106, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 39', 'Y', '2014-12-01 13:42:51'),
(107, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 38', 'Y', '2014-12-01 13:42:51'),
(108, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 37', 'Y', '2014-12-01 13:42:51'),
(109, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 36', 'Y', '2014-12-01 13:42:51'),
(110, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 35', 'Y', '2014-12-01 13:42:51'),
(111, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 34', 'Y', '2014-12-01 13:42:51'),
(112, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 28', 'Y', '2014-12-01 13:42:51'),
(113, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 27', 'Y', '2014-12-01 13:42:51'),
(114, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 26', 'Y', '2014-12-01 13:42:51'),
(115, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 3', 'Y', '2014-12-03 06:45:32'),
(116, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 4', 'Y', '2014-12-03 08:04:03'),
(117, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 4', 'Y', '2014-12-03 08:04:38'),
(118, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 5', 'Y', '2014-12-03 09:15:18'),
(119, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 5', 'Y', '2014-12-03 09:15:44'),
(120, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 6', 'Y', '2014-12-03 09:16:06'),
(121, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 7', 'Y', '2014-12-03 09:16:36'),
(122, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 8', 'Y', '2014-12-03 09:21:40'),
(123, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 6', 'Y', '2014-12-03 09:22:02'),
(124, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 6', 'Y', '2014-12-03 09:23:32'),
(125, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 9', 'Y', '2014-12-03 09:23:36'),
(126, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 10', 'Y', '2014-12-03 09:23:52'),
(127, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 3', 'Y', '2014-12-03 09:27:13'),
(128, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 119', 'Y', '2014-12-03 09:27:23'),
(129, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 116', 'Y', '2014-12-03 09:27:23'),
(130, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 117', 'Y', '2014-12-03 09:27:23'),
(131, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 118', 'Y', '2014-12-03 09:27:23'),
(132, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 124', 'Y', '2014-12-03 09:27:32'),
(133, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 125', 'Y', '2014-12-03 09:27:32'),
(134, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 126', 'Y', '2014-12-03 09:27:32'),
(135, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 127', 'Y', '2014-12-03 09:27:32'),
(136, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 120', 'Y', '2014-12-03 09:27:32'),
(137, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 121', 'Y', '2014-12-03 09:27:32'),
(138, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 122', 'Y', '2014-12-03 09:27:32'),
(139, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 123', 'Y', '2014-12-03 09:27:32'),
(140, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 129', 'Y', '2014-12-03 09:28:32'),
(141, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 130', 'Y', '2014-12-03 09:28:32'),
(142, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 131', 'Y', '2014-12-03 09:28:32'),
(143, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 128', 'Y', '2014-12-03 09:28:32'),
(144, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 4', 'Y', '2014-12-03 09:29:15'),
(145, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 3', 'Y', '2014-12-03 09:29:15'),
(146, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 134', 'Y', '2014-12-03 09:29:31'),
(147, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 135', 'Y', '2014-12-03 09:29:31'),
(148, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 133', 'Y', '2014-12-03 09:29:31'),
(149, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 132', 'Y', '2014-12-03 09:29:31'),
(150, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 7', 'Y', '2014-12-03 09:29:42'),
(151, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 8', 'Y', '2014-12-03 09:33:00'),
(152, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2014-12-03 09:47:21'),
(153, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2014-12-03 09:50:12'),
(154, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2014-12-03 09:53:44'),
(155, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2014-12-03 09:54:31'),
(156, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2014-12-03 09:54:53'),
(157, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 4', 'Y', '2014-12-03 10:45:29'),
(158, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 6', 'Y', '2014-12-03 10:45:35'),
(159, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 7', 'Y', '2014-12-03 10:45:40'),
(160, 1, '<b>Super Administrator</b> Delete a record in <b>Contents Management</b> with ID = 17', 'Y', '2014-12-03 11:25:39'),
(161, 1, '<b>Super Administrator</b> Delete a record in <b>Contents Management</b> with ID = 16', 'Y', '2014-12-03 11:25:39'),
(162, 1, '<b>Super Administrator</b> Delete a record in <b>Contents Management</b> with ID = 14', 'Y', '2014-12-03 11:25:55'),
(163, 1, '<b>Super Administrator</b> Delete a record in <b>Contents Management</b> with ID = 12', 'Y', '2014-12-03 11:25:55'),
(164, 1, '<b>Super Administrator</b> Delete a record in <b>Contents Management</b> with ID = 11', 'Y', '2014-12-03 11:25:55'),
(165, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 15', 'Y', '2014-12-03 11:27:52'),
(166, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 13', 'Y', '2014-12-03 11:35:39'),
(167, 1, '<b>Super Administrator</b> Inserted a new record in <b>Banners Management</b> with ID = 9', 'Y', '2014-12-03 11:44:47'),
(168, 1, '<b>Super Administrator</b> Delete a record in <b>Banners Management</b> with ID = 9', 'Y', '2014-12-03 11:44:54'),
(169, 1, '<b>Super Administrator</b> Inserted a new record in <b>Banners Management</b> with ID = 10', 'Y', '2014-12-03 11:45:31'),
(170, 1, '<b>Super Administrator</b> Inserted a new record in <b>Banners Management</b> with ID = 11', 'Y', '2014-12-03 11:45:44'),
(171, 1, '<b>Super Administrator</b> Inserted a new record in <b>Banners Management</b> with ID = 12', 'Y', '2014-12-03 11:50:22'),
(172, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 12', 'Y', '2014-12-03 11:50:51'),
(173, 1, '<b>Super Administrator</b> Delete a record in <b>Banners Management</b> with ID = 12', 'Y', '2014-12-03 11:51:28'),
(174, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 10', 'Y', '2014-12-04 06:52:51'),
(175, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 18', 'Y', '2014-12-04 06:53:08'),
(176, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 19', 'Y', '2014-12-04 06:53:27'),
(177, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 3', 'Y', '2014-12-04 06:54:24'),
(178, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 4', 'Y', '2014-12-04 06:54:58'),
(179, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 5', 'Y', '2014-12-04 06:56:01'),
(180, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 6', 'Y', '2014-12-04 06:56:47'),
(181, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 7', 'Y', '2014-12-04 06:57:21'),
(182, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 3', 'Y', '2014-12-04 06:57:36'),
(183, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 2', 'Y', '2014-12-04 06:57:55'),
(184, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 1', 'Y', '2014-12-04 06:58:09'),
(185, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 8', 'Y', '2014-12-04 07:00:25'),
(186, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 7', 'Y', '2014-12-04 07:00:36'),
(187, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 6', 'Y', '2014-12-04 07:00:47'),
(188, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 5', 'Y', '2014-12-04 07:00:58'),
(189, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 13', 'Y', '2014-12-04 09:25:56'),
(190, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-01-06 06:09:14'),
(191, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-01-06 06:14:54'),
(192, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-01-06 06:16:16'),
(193, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-01-06 06:16:59'),
(194, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-01-06 06:24:00'),
(195, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-01-06 06:27:49'),
(196, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2015-01-06 06:31:13'),
(197, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2015-01-06 06:31:27'),
(198, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 18', 'Y', '2015-01-06 06:33:00'),
(199, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 19', 'Y', '2015-01-06 06:33:38'),
(200, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 10', 'Y', '2015-01-06 06:35:41'),
(201, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2015-01-06 06:37:04'),
(202, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 3', 'Y', '2015-01-06 06:38:48'),
(203, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 2', 'Y', '2015-01-06 06:39:35'),
(204, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 1', 'Y', '2015-01-06 06:40:04'),
(205, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 2', 'Y', '2015-01-06 06:41:15'),
(206, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 2', 'Y', '2015-01-06 06:41:25'),
(207, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 1', 'Y', '2015-01-06 06:42:25'),
(208, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 3', 'Y', '2015-01-06 06:50:50'),
(209, 1, '<b>Super Administrator</b> Edited a record in <b>Department Management</b> with ID = 7', 'Y', '2015-01-06 06:52:10'),
(210, 1, '<b>Super Administrator</b> Edited a record in <b>Department Management</b> with ID = 9', 'Y', '2015-01-06 06:52:22'),
(211, 1, '<b>Super Administrator</b> Edited a record in <b>Department Management</b> with ID = 7', 'Y', '2015-01-06 06:52:52'),
(212, 1, '<b>Super Administrator</b> Delete a record in <b>Department Management</b> with ID = 9', 'Y', '2015-01-06 06:53:10'),
(213, 1, '<b>Super Administrator</b> Delete a record in <b>Doctors Management</b> with ID = 5', 'Y', '2015-01-06 06:53:26'),
(214, 1, '<b>Super Administrator</b> Delete a record in <b>Doctors Management</b> with ID = 7', 'Y', '2015-01-06 06:53:39'),
(215, 1, '<b>Super Administrator</b> Delete a record in <b>Doctors Management</b> with ID = 6', 'Y', '2015-01-06 06:53:39'),
(216, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 4', 'Y', '2015-01-06 07:00:05'),
(217, 1, '<b>Super Administrator</b> Inserted a new record in <b>Doctors Management</b> with ID = 8', 'Y', '2015-01-06 07:01:51'),
(218, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 8', 'Y', '2015-01-06 07:02:42'),
(219, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 7', 'Y', '2015-01-06 07:03:44'),
(220, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 8', 'Y', '2015-01-06 07:04:00'),
(221, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 12', 'Y', '2015-01-06 07:05:01'),
(222, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 11', 'Y', '2015-01-06 07:05:01'),
(223, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 6', 'Y', '2015-01-06 07:05:01'),
(224, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 7', 'Y', '2015-01-06 07:05:01'),
(225, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 8', 'Y', '2015-01-06 07:05:02'),
(226, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 9', 'Y', '2015-01-06 07:05:02'),
(227, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 10', 'Y', '2015-01-06 07:05:02'),
(228, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 5', 'Y', '2015-01-06 07:05:02'),
(229, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 6', 'Y', '2015-01-06 07:10:12'),
(230, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 7', 'Y', '2015-01-06 07:10:17'),
(231, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 13', 'Y', '2015-01-06 07:14:33'),
(232, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 15', 'Y', '2015-01-06 07:18:02'),
(233, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 15', 'Y', '2015-01-06 07:19:02'),
(234, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 13', 'Y', '2015-01-06 07:20:18'),
(235, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 11', 'Y', '2015-01-07 00:37:43'),
(236, 1, '<b>Super Administrator</b> Inserted a new record in <b>Banners Management</b> with ID = 13', 'Y', '2015-01-07 00:40:37'),
(237, 1, '<b>Super Administrator</b> Inserted a new record in <b>Banners Management</b> with ID = 14', 'Y', '2015-01-07 00:44:05'),
(238, 1, '<b>Super Administrator</b> Inserted a new record in <b>Banners Management</b> with ID = 15', 'Y', '2015-01-07 00:56:26'),
(239, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-01-13 01:59:59'),
(240, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 18', 'Y', '2015-01-13 02:03:15'),
(241, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 19', 'Y', '2015-01-13 02:06:20'),
(242, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 10', 'Y', '2015-01-13 02:08:12'),
(243, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 3', 'Y', '2015-01-13 02:09:38'),
(244, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 4', 'Y', '2015-01-13 02:10:24'),
(245, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 8', 'Y', '2015-01-13 02:11:32'),
(246, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 3', 'Y', '2015-01-13 02:13:20'),
(247, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 2', 'Y', '2015-01-13 02:13:48'),
(248, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 1', 'Y', '2015-01-13 02:14:18'),
(249, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 13', 'Y', '2015-01-13 02:27:29'),
(250, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 15', 'Y', '2015-01-13 02:50:14'),
(251, 1, '<b>Super Administrator</b> Edited a record in <b>Department Management</b> with ID = 7', 'Y', '2015-01-13 06:32:22'),
(252, 1, '<b>Super Administrator</b> Edited a record in <b>Department Management</b> with ID = 7', 'Y', '2015-01-13 06:32:56'),
(253, 1, '<b>Super Administrator</b> Edited a record in <b>Department Management</b> with ID = 7', 'Y', '2015-01-13 06:33:04'),
(254, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 15', 'Y', '2015-01-13 06:35:11'),
(255, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 8', 'Y', '2015-01-14 02:45:52'),
(256, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 3', 'Y', '2015-02-07 07:52:06'),
(257, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 4', 'Y', '2015-02-07 07:52:35'),
(258, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 4', 'Y', '2015-02-07 07:52:44'),
(259, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 8', 'Y', '2015-02-07 07:53:04'),
(260, 1, '<b>Super Administrator</b> Edited a record in <b>Department Management</b> with ID = 8', 'Y', '2015-02-07 07:55:33'),
(261, 1, '<b>Super Administrator</b> Unpublish a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-02-15 06:09:13'),
(262, 1, '<b>Super Administrator</b> Publish a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-02-15 06:09:20'),
(263, 1, '<b>Super Administrator</b> Unpublish a record in <b>Banners Management</b> with ID = 10', 'Y', '2015-02-15 06:10:17'),
(264, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 9', 'Y', '2015-02-15 06:19:55'),
(265, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 4', 'Y', '2015-02-15 06:22:24'),
(266, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-02-16 04:54:06'),
(267, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 28', 'Y', '2015-02-22 06:10:11'),
(268, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 27', 'Y', '2015-02-22 06:11:06'),
(269, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 25', 'Y', '2015-02-22 06:38:33'),
(270, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 26', 'Y', '2015-02-22 06:38:42'),
(271, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 15', 'Y', '2015-02-26 05:30:55'),
(272, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 13', 'Y', '2015-02-26 05:33:42'),
(273, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 3', 'Y', '2015-02-26 05:42:20'),
(274, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 2', 'Y', '2015-02-26 05:42:56'),
(275, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 1', 'Y', '2015-02-26 05:43:53'),
(276, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 15', 'Y', '2015-03-05 03:34:53'),
(277, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-04-16 09:16:41'),
(278, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-04-16 09:17:55'),
(279, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 15', 'Y', '2015-04-16 09:34:07'),
(280, 1, '<b>Super Administrator</b> Unpublish a record in <b>Media Management</b> with ID = 5', 'Y', '2015-04-16 09:58:46'),
(281, 1, '<b>Super Administrator</b> Unpublish a record in <b>Media Management</b> with ID = 24', 'Y', '2015-04-16 10:00:12'),
(282, 1, '<b>Super Administrator</b> Unpublish a record in <b>Media Management</b> with ID = 23', 'Y', '2015-04-16 10:00:12'),
(283, 1, '<b>Super Administrator</b> Unpublish a record in <b>Media Management</b> with ID = 22', 'Y', '2015-04-16 10:00:12'),
(284, 1, '<b>Super Administrator</b> Unpublish a record in <b>Media Management</b> with ID = 21', 'Y', '2015-04-16 10:00:12'),
(285, 1, '<b>Super Administrator</b> Unpublish a record in <b>Media Management</b> with ID = 20', 'Y', '2015-04-16 10:00:12'),
(286, 1, '<b>Super Administrator</b> Unpublish a record in <b>Media Management</b> with ID = 19', 'Y', '2015-04-16 10:00:12'),
(287, 1, '<b>Super Administrator</b> Unpublish a record in <b>Media Management</b> with ID = 18', 'Y', '2015-04-16 10:00:56'),
(288, 1, '<b>Super Administrator</b> Unpublish a record in <b>Media Management</b> with ID = 17', 'Y', '2015-04-16 10:00:56'),
(289, 1, '<b>Super Administrator</b> Unpublish a record in <b>Media Management</b> with ID = 16', 'Y', '2015-04-16 10:00:56'),
(290, 1, '<b>Super Administrator</b> Delete a record in <b>Contents Management</b> with ID = 19', 'Y', '2015-04-16 10:15:54'),
(291, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2015-04-16 10:16:55'),
(292, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 10', 'Y', '2015-04-16 10:17:50'),
(293, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 18', 'Y', '2015-04-16 10:20:22'),
(294, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 3', 'Y', '2015-04-16 10:33:01'),
(295, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 2', 'Y', '2015-04-16 10:33:13'),
(296, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 1', 'Y', '2015-04-16 10:33:27'),
(297, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 2', 'Y', '2015-04-16 10:33:39'),
(298, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2015-04-16 10:34:37'),
(299, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 13', 'Y', '2015-04-16 11:33:07'),
(300, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 15', 'Y', '2015-04-16 11:34:33'),
(301, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 3', 'Y', '2015-04-16 13:05:11'),
(302, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 2', 'Y', '2015-04-16 13:05:33'),
(303, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 1', 'Y', '2015-04-16 13:05:44'),
(304, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 4', 'Y', '2015-04-16 13:34:16'),
(305, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2015-04-16 13:44:32'),
(306, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2015-04-16 13:44:51'),
(307, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 3', 'Y', '2015-04-16 13:49:47'),
(308, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 3', 'Y', '2015-04-16 13:50:24'),
(309, 1, '<b>Super Administrator</b> Inserted a new record in <b>Testimonial Management</b> with ID = 0', 'Y', '2015-04-16 14:44:41'),
(310, 1, '<b>Super Administrator</b> Inserted a new record in <b>Testimonial Management</b> with ID = 0', 'Y', '2015-04-16 14:46:57'),
(311, 1, '<b>Super Administrator</b> Edited a record in <b>Department Management</b> with ID = 3', 'Y', '2015-04-16 14:50:19'),
(312, 1, '<b>Super Administrator</b> Edited a record in <b>Department Management</b> with ID = 1', 'Y', '2015-04-16 14:50:40'),
(313, 1, '<b>Super Administrator</b> Delete a record in <b>Testimonial Management</b> with ID = 3', 'Y', '2015-04-16 14:52:47'),
(314, 1, '<b>Super Administrator</b> Inserted a new record in <b>Testimonial Management</b> with ID = 0', 'Y', '2015-04-16 14:53:46'),
(315, 1, '<b>Super Administrator</b> Edited a record in <b>Department Management</b> with ID = 1', 'Y', '2015-04-16 14:59:42'),
(316, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 15:44:31'),
(317, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 15:44:31'),
(318, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 15:44:31'),
(319, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 15:44:31'),
(320, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 15:44:31'),
(321, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 15:44:31'),
(322, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 15:45:34'),
(323, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 15:45:34'),
(324, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 15:45:34'),
(325, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 15:45:34'),
(326, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 15:45:34'),
(327, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 15:45:34'),
(328, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 15:49:10'),
(329, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 15:49:10'),
(330, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 15:49:10'),
(331, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 15:49:10'),
(332, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 15:49:10'),
(333, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 16:03:47'),
(334, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 16:03:47'),
(335, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 16:03:47'),
(336, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 16:03:47'),
(337, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 16:03:47'),
(338, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 16:03:47'),
(339, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 6', 'Y', '2015-04-16 16:07:33'),
(340, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 6', 'Y', '2015-04-16 16:08:05'),
(341, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 5', 'Y', '2015-04-16 16:08:12'),
(342, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 4', 'Y', '2015-04-16 16:08:18'),
(343, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 3', 'Y', '2015-04-16 16:08:24'),
(344, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 2', 'Y', '2015-04-16 16:08:30'),
(345, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 1', 'Y', '2015-04-16 16:08:35'),
(346, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 16:08:57'),
(347, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 16:08:57'),
(348, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 16:08:57'),
(349, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 16:08:57'),
(350, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 16:08:57'),
(351, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 16:08:57'),
(352, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 16:09:25'),
(353, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 16:09:25'),
(354, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 16:09:25'),
(355, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 16:09:25'),
(356, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 16:09:25'),
(357, 1, '<b>Super Administrator</b> Inserted a new record in <b>Website Settings</b> with ID = 0', 'Y', '2015-04-16 16:09:25'),
(358, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-04-19 02:25:07'),
(359, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 3', 'Y', '2015-04-19 02:41:37'),
(360, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 3', 'Y', '2015-04-19 02:49:32'),
(361, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 3', 'Y', '2015-04-19 02:56:24'),
(362, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 9', 'Y', '2015-04-19 03:04:02'),
(363, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 15', 'Y', '2015-04-19 04:06:07'),
(364, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 4', 'Y', '2015-04-19 05:17:10'),
(365, 1, '<b>Super Administrator</b> Edited a record in <b>Department Management</b> with ID = 1', 'Y', '2015-04-19 05:25:21'),
(366, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 8', 'Y', '2015-04-19 05:26:34'),
(367, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 15', 'Y', '2015-04-19 07:21:35'),
(368, 1, '<b>Super Administrator</b> Publish a record in <b>Media Management</b> with ID = 18', 'Y', '2015-04-19 07:22:19'),
(369, 1, '<b>Super Administrator</b> Publish a record in <b>Media Management</b> with ID = 17', 'Y', '2015-04-19 07:22:19'),
(370, 1, '<b>Super Administrator</b> Publish a record in <b>Media Management</b> with ID = 16', 'Y', '2015-04-19 07:22:19'),
(371, 1, '<b>Super Administrator</b> Publish a record in <b>Media Management</b> with ID = 19', 'Y', '2015-04-19 07:22:35'),
(372, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-04-19 07:27:36'),
(373, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 0', 'Y', '2015-05-10 16:00:05'),
(374, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 3', 'Y', '2015-05-10 16:08:55'),
(375, 1, '<b>Super Administrator</b> Inserted a new record in <b>Contents Management</b> with ID = 0', 'Y', '2015-05-11 08:46:09'),
(376, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 21', 'Y', '2015-05-11 09:14:39'),
(377, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 21', 'Y', '2015-05-11 09:25:40'),
(378, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 21', 'Y', '2015-05-11 09:28:17'),
(379, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 21', 'Y', '2015-05-11 09:34:26'),
(380, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2015-05-12 14:20:17'),
(381, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 7', 'Y', '2015-05-12 14:33:23'),
(382, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 8', 'Y', '2015-05-12 14:33:24'),
(383, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 9', 'Y', '2015-05-12 14:33:26'),
(384, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 10', 'Y', '2015-05-12 14:33:27'),
(385, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 11', 'Y', '2015-05-12 14:33:28'),
(386, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 12', 'Y', '2015-05-12 14:33:28'),
(387, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 13', 'Y', '2015-05-12 14:33:29'),
(388, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 14', 'Y', '2015-05-12 14:33:29'),
(389, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 15', 'Y', '2015-05-12 14:33:29'),
(390, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 16', 'Y', '2015-05-12 14:33:30'),
(391, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 16', 'Y', '2015-05-12 14:33:30'),
(392, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 17', 'Y', '2015-05-12 14:33:30'),
(393, 1, '<b>Super Administrator</b> Delete a record in <b>Timing Management</b> with ID = 18', 'Y', '2015-05-12 14:33:31'),
(394, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 15', 'Y', '2015-05-12 14:35:41'),
(395, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 22', 'Y', '2015-05-12 14:42:25'),
(396, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 15', 'Y', '2015-05-12 14:42:40'),
(397, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 13', 'Y', '2015-05-12 14:43:31'),
(398, 1, '<b>Super Administrator</b> Delete a record in <b>Testimonial Management</b> with ID = 4', 'Y', '2015-05-12 14:45:38'),
(399, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 9', 'Y', '2015-05-12 15:19:23'),
(400, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 5', 'Y', '2015-05-12 15:19:23'),
(401, 1, '<b>Super Administrator</b> Delete a record in <b>Banners Management</b> with ID = 15', 'Y', '2015-05-12 15:19:42'),
(402, 1, '<b>Super Administrator</b> Delete a record in <b>Banners Management</b> with ID = 14', 'Y', '2015-05-12 15:19:42'),
(403, 1, '<b>Super Administrator</b> Delete a record in <b>Banners Management</b> with ID = 13', 'Y', '2015-05-12 15:19:42');
INSERT INTO `tbl_admin_logs` (`id`, `user_id`, `description`, `is_active`, `added_date`) VALUES
(404, 1, '<b>Super Administrator</b> Delete a record in <b>Banners Management</b> with ID = 11', 'Y', '2015-05-12 15:19:42'),
(405, 1, '<b>Super Administrator</b> Delete a record in <b>Banners Management</b> with ID = 10', 'Y', '2015-05-12 15:19:42'),
(406, 1, '<b>Super Administrator</b> Inserted a new record in <b>Banners Management</b> with ID = 16', 'Y', '2015-05-12 15:22:12'),
(407, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 3', 'Y', '2015-05-12 15:36:52'),
(408, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 3', 'Y', '2015-05-12 15:37:41'),
(409, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 4', 'Y', '2015-05-12 15:39:00'),
(410, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 8', 'Y', '2015-05-12 15:39:16'),
(411, 1, '<b>Super Administrator</b> Edited a record in <b>Doctors Management</b> with ID = 8', 'Y', '2015-05-12 15:40:08'),
(412, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 18', 'Y', '2015-05-12 15:53:17'),
(413, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 17', 'Y', '2015-05-12 15:53:17'),
(414, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 16', 'Y', '2015-05-12 15:53:17'),
(415, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 15', 'Y', '2015-05-12 15:53:17'),
(416, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 14', 'Y', '2015-05-12 15:53:17'),
(417, 1, '<b>Super Administrator</b> Inserted a new record in <b>Banners Management</b> with ID = 17', 'Y', '2015-05-12 15:57:43'),
(418, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2015-05-13 07:05:42'),
(419, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 10', 'Y', '2015-05-13 07:05:49'),
(420, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 18', 'Y', '2015-05-13 07:06:01'),
(421, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 2', 'Y', '2015-05-13 07:08:00'),
(422, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 1', 'Y', '2015-05-13 07:08:11'),
(423, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-05-20 10:06:00'),
(424, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-05-20 10:06:07'),
(425, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 23', 'Y', '2015-05-20 10:13:18'),
(426, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-05-20 10:13:27'),
(427, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-05-20 10:13:33'),
(428, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2015-05-20 10:13:52'),
(429, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2015-05-20 10:15:06'),
(430, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2015-05-20 10:16:50'),
(431, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 26', 'Y', '2015-05-20 10:21:04'),
(432, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 26', 'Y', '2015-05-20 10:21:13'),
(433, 1, '<b>Super Administrator</b> Edited a record in <b>Products Management</b> with ID = 3', 'Y', '2015-05-20 10:50:24'),
(434, 1, '<b>Super Administrator</b> Edited a record in <b>Products Management</b> with ID = 3', 'Y', '2015-05-20 10:50:34'),
(435, 1, '<b>Super Administrator</b> Edited a record in <b>Products Management</b> with ID = 3', 'Y', '2015-05-20 10:50:38'),
(436, 1, '<b>Super Administrator</b> Edited a record in <b>Products Management</b> with ID = 3', 'Y', '2015-05-20 10:50:42'),
(437, 1, '<b>Super Administrator</b> Unpublish a record in <b>Products Management</b> with ID = 3', 'Y', '2015-05-20 10:51:24'),
(438, 1, '<b>Super Administrator</b> Publish a record in <b>Products Management</b> with ID = 3', 'Y', '2015-05-20 10:51:26'),
(439, 1, '<b>Super Administrator</b> Delete a record in <b>Products Management</b> with ID = 8', 'Y', '2015-05-20 10:51:38'),
(440, 1, '<b>Super Administrator</b> Delete a record in <b>Products Management</b> with ID = 4', 'Y', '2015-05-20 10:51:38'),
(441, 1, '<b>Super Administrator</b> Edited a record in <b>News Management</b> with ID = 3', 'Y', '2015-05-20 11:13:11'),
(442, 1, '<b>Super Administrator</b> Edited a record in <b>News Management</b> with ID = 3', 'Y', '2015-05-20 11:13:19'),
(443, 1, '<b>Super Administrator</b> Edited a record in <b>News Management</b> with ID = 3', 'Y', '2015-05-20 11:14:17'),
(444, 1, '<b>Super Administrator</b> Edited a record in <b>News Management</b> with ID = 3', 'Y', '2015-05-20 11:14:25'),
(445, 1, '<b>Super Administrator</b> Edited a record in <b>News Management</b> with ID = 3', 'Y', '2015-05-20 11:14:30'),
(446, 1, '<b>Super Administrator</b> Inserted a new record in <b>News Management</b> with ID = 4', 'Y', '2015-05-20 11:14:44'),
(447, 1, '<b>Super Administrator</b> Delete a record in <b>News Management</b> with ID = 2', 'Y', '2015-05-20 11:14:59'),
(448, 1, '<b>Super Administrator</b> Delete a record in <b>News Management</b> with ID = 1', 'Y', '2015-05-20 11:14:59'),
(449, 1, '<b>Super Administrator</b> Delete a record in <b>Banners Management</b> with ID = 17', 'Y', '2015-05-20 11:20:25'),
(450, 1, '<b>Super Administrator</b> Delete a record in <b>Banners Management</b> with ID = 16', 'Y', '2015-05-20 11:20:25'),
(451, 1, '<b>Super Administrator</b> Inserted a new record in <b>Banners Management</b> with ID = 18', 'Y', '2015-05-20 11:27:20'),
(452, 1, '<b>Super Administrator</b> Delete a record in <b>Banners Management</b> with ID = 18', 'Y', '2015-05-20 11:28:33'),
(453, 1, '<b>Super Administrator</b> Inserted a new record in <b>Banners Management</b> with ID = 19', 'Y', '2015-05-20 11:29:05'),
(454, 1, '<b>Super Administrator</b> Delete a record in <b>Branch Management</b> with ID = 6', 'Y', '2015-05-20 11:51:14'),
(455, 1, '<b>Super Administrator</b> Delete a record in <b>Branch Management</b> with ID = 5', 'Y', '2015-05-20 11:51:14'),
(456, 1, '<b>Super Administrator</b> Delete a record in <b>Branch Management</b> with ID = 4', 'Y', '2015-05-20 11:51:14'),
(457, 1, '<b>Super Administrator</b> Delete a record in <b>Branch Management</b> with ID = 3', 'Y', '2015-05-20 11:51:14'),
(458, 1, '<b>Super Administrator</b> Delete a record in <b>Branch Management</b> with ID = 2', 'Y', '2015-05-20 11:51:14'),
(459, 1, '<b>Super Administrator</b> Delete a record in <b>Branch Management</b> with ID = 1', 'Y', '2015-05-20 11:51:14'),
(460, 1, '<b>Super Administrator</b> Inserted a new record in <b>Branch Management</b> with ID = 7', 'Y', '2015-05-20 12:03:28'),
(461, 1, '<b>Super Administrator</b> Edited a record in <b>Branch Management</b> with ID = 7', 'Y', '2015-05-20 12:05:02'),
(462, 1, '<b>Super Administrator</b> Edited a record in <b>Branch Management</b> with ID = 7', 'Y', '2015-05-20 12:05:10'),
(463, 1, '<b>Super Administrator</b> Edited a record in <b>Branch Management</b> with ID = 7', 'Y', '2015-05-20 12:05:24'),
(464, 1, '<b>Super Administrator</b> Edited a record in <b>Branch Management</b> with ID = 7', 'Y', '2015-05-20 12:05:29'),
(465, 1, '<b>Super Administrator</b> Publish a record in <b>Branch Management</b> with ID = 7', 'Y', '2015-05-20 12:05:42'),
(466, 1, '<b>Super Administrator</b> Publish a record in <b>Branch Management</b> with ID = 7', 'Y', '2015-05-20 12:06:00'),
(467, 1, '<b>Super Administrator</b> Unpublish a record in <b>Branch Management</b> with ID = 7', 'Y', '2015-05-20 12:06:03'),
(468, 1, '<b>Super Administrator</b> Publish a record in <b>Branch Management</b> with ID = 7', 'Y', '2015-05-20 12:06:05'),
(469, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-05-20 12:46:12'),
(470, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 23', 'Y', '2015-05-20 12:46:22'),
(471, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 24', 'Y', '2015-05-20 12:46:27'),
(472, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 6', 'Y', '2015-05-20 13:02:19'),
(473, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 23', 'Y', '2015-05-20 13:02:26'),
(474, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 24', 'Y', '2015-05-20 13:02:32'),
(475, 1, '<b>Super Administrator</b> Inserted a new record in <b>Banners Management</b> with ID = 20', 'Y', '2015-05-20 13:24:14'),
(476, 1, '<b>Super Administrator</b> Unpublish a record in <b>Banners Management</b> with ID = 20', 'Y', '2015-05-20 13:24:46'),
(477, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 26', 'Y', '2015-05-20 13:44:33'),
(478, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 26', 'Y', '2015-05-20 13:45:36'),
(479, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 26', 'Y', '2015-05-20 13:47:48'),
(480, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 26', 'Y', '2015-05-20 13:48:16'),
(481, 1, '<b>Super Administrator</b> Edited a record in <b>Products Management</b> with ID = 3', 'Y', '2015-05-20 14:02:20'),
(482, 1, '<b>Super Administrator</b> Inserted a new record in <b>Products Management</b> with ID = 9', 'Y', '2015-05-20 14:08:07'),
(483, 1, '<b>Super Administrator</b> Edited a record in <b>News Management</b> with ID = 4', 'Y', '2015-05-20 14:26:30'),
(484, 1, '<b>Super Administrator</b> Inserted a new record in <b>News Management</b> with ID = 5', 'Y', '2015-05-20 14:28:13'),
(485, 1, '<b>Super Administrator</b> Edited a record in <b>News Management</b> with ID = 3', 'Y', '2015-05-20 14:28:34'),
(486, 1, '<b>Super Administrator</b> Edited a record in <b>News Management</b> with ID = 3', 'Y', '2015-05-20 14:28:41'),
(487, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 8', 'Y', '2015-05-20 15:59:11'),
(488, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 8', 'Y', '2015-05-20 15:59:15'),
(489, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 11', 'Y', '2015-05-20 15:59:24'),
(490, 1, '<b>Super Administrator</b> Inserted a new record in <b>Branch Management</b> with ID = 8', 'Y', '2015-05-20 16:10:06'),
(491, 1, '<b>Super Administrator</b> Edited a record in <b>Branch Management</b> with ID = 8', 'Y', '2015-05-20 16:11:04'),
(492, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 11', 'Y', '2015-05-21 07:56:44'),
(493, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 8', 'Y', '2015-05-21 07:56:44'),
(494, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 12', 'Y', '2015-05-21 07:57:13'),
(495, 1, '<b>Super Administrator</b> Edited a record in <b>Branch Management</b> with ID = 8', 'Y', '2015-05-21 07:58:59'),
(496, 1, '<b>Super Administrator</b> Edited a record in <b>Branch Management</b> with ID = 8', 'Y', '2015-05-21 07:59:15'),
(497, 1, '<b>Super Administrator</b> Edited a record in <b>Branch Management</b> with ID = 7', 'Y', '2015-05-21 07:59:26'),
(498, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 13', 'Y', '2015-05-21 07:59:35'),
(499, 1, '<b>Super Administrator</b> Edited a record in <b>Branch Management</b> with ID = 7', 'Y', '2015-05-21 08:00:44'),
(500, 1, '<b>Super Administrator</b> Unpublish a record in <b>Media Management</b> with ID = 43', 'Y', '2015-05-21 08:01:34'),
(501, 1, '<b>Super Administrator</b> Unpublish a record in <b>Media Management</b> with ID = 47', 'Y', '2015-05-21 08:01:44'),
(502, 1, '<b>Super Administrator</b> Edited a record in <b>Branch Management</b> with ID = 8', 'Y', '2015-05-21 08:08:28'),
(503, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 19', 'Y', '2015-05-21 09:18:20'),
(504, 1, '<b>Super Administrator</b> Unpublish a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:43:00'),
(505, 1, '<b>Super Administrator</b> Unpublish a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:43:00'),
(506, 1, '<b>Super Administrator</b> Publish a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:43:10'),
(507, 1, '<b>Super Administrator</b> Publish a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:43:10'),
(508, 1, '<b>Super Administrator</b> Publish a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:43:46'),
(509, 1, '<b>Super Administrator</b> Publish a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:43:46'),
(510, 1, '<b>Super Administrator</b> Publish a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:44:44'),
(511, 1, '<b>Super Administrator</b> Publish a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:44:44'),
(512, 1, '<b>Super Administrator</b> Delete a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:44:50'),
(513, 1, '<b>Super Administrator</b> Delete a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:44:50'),
(514, 1, '<b>Super Administrator</b> Delete a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:46:48'),
(515, 1, '<b>Super Administrator</b> Delete a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:46:48'),
(516, 1, '<b>Super Administrator</b> Delete a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:46:48'),
(517, 1, '<b>Super Administrator</b> Delete a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:47:25'),
(518, 1, '<b>Super Administrator</b> Delete a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:47:25'),
(519, 1, '<b>Super Administrator</b> Delete a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:47:25'),
(520, 1, '<b>Super Administrator</b> Delete a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:48:45'),
(521, 1, '<b>Super Administrator</b> Unpublish a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:53:07'),
(522, 1, '<b>Super Administrator</b> Unpublish a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:53:12'),
(523, 1, '<b>Super Administrator</b> Publish a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:53:17'),
(524, 1, '<b>Super Administrator</b> Unpublish a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:54:51'),
(525, 1, '<b>Super Administrator</b> Publish a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:54:53'),
(526, 1, '<b>Super Administrator</b> Publish a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:56:33'),
(527, 1, '<b>Super Administrator</b> Publish a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:57:08'),
(528, 1, '<b>Super Administrator</b> Publish a record in <b>Catalog Management</b> with ID = 0', 'Y', '2015-05-21 10:57:16'),
(529, 1, '<b>Super Administrator</b> Unpublish a record in <b>Catalog Management</b> with ID = 49', 'Y', '2015-05-21 10:57:20'),
(530, 1, '<b>Super Administrator</b> Delete a record in <b>Catalog Management</b> with ID = 51', 'Y', '2015-05-21 10:57:29'),
(531, 1, '<b>Super Administrator</b> Publish a record in <b>Catalog Management</b> with ID = 50', 'Y', '2015-05-21 12:53:30'),
(532, 1, '<b>Super Administrator</b> Publish a record in <b>Catalog Management</b> with ID = 49', 'Y', '2015-05-21 12:53:33'),
(533, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 26', 'Y', '2015-05-23 07:48:56'),
(534, 1, '<b>Super Administrator</b> Inserted a new record in <b>Catalog Management</b> with ID = 1', 'Y', '2015-05-23 08:24:55'),
(535, 1, '<b>Super Administrator</b> Inserted a new record in <b>Catalog Management</b> with ID = 1', 'Y', '2015-05-23 08:26:38'),
(536, 1, '<b>Super Administrator</b> Inserted a new record in <b>Catalog Management</b> with ID = 2', 'Y', '2015-05-23 08:27:03'),
(537, 1, '<b>Super Administrator</b> Inserted a new record in <b>Catalog Management</b> with ID = 3', 'Y', '2015-05-23 08:27:21'),
(538, 1, '<b>Super Administrator</b> Inserted a new record in <b>Catalog Management</b> with ID = 1', 'Y', '2015-05-23 08:27:48'),
(539, 1, '<b>Super Administrator</b> Delete a record in <b>Catalog Management</b> with ID = 1', 'Y', '2015-05-23 08:40:18'),
(540, 1, '<b>Super Administrator</b> Inserted a new record in <b>Catalog Management</b> with ID = 2', 'Y', '2015-05-23 08:40:27'),
(541, 1, '<b>Super Administrator</b> Delete a record in <b>Catalog Management</b> with ID = 2', 'Y', '2015-05-23 08:40:58'),
(542, 1, '<b>Super Administrator</b> Inserted a new record in <b>Catalog Management</b> with ID = 3', 'Y', '2015-05-23 08:42:04'),
(543, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 19', 'Y', '2015-05-23 09:08:23'),
(544, 1, '<b>Super Administrator</b> Edited a record in <b>Products Management</b> with ID = 3', 'Y', '2015-05-23 09:26:16'),
(545, 1, '<b>Super Administrator</b> Edited a record in <b>Products Management</b> with ID = 9', 'Y', '2015-05-23 09:26:20'),
(546, 1, '<b>Super Administrator</b> Publish a record in <b>Banners Management</b> with ID = 20', 'Y', '2015-05-23 09:32:47'),
(547, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 19', 'Y', '2015-05-23 09:43:37'),
(548, 1, '<b>Super Administrator</b> Unpublish a record in <b>Banners Management</b> with ID = 20', 'Y', '2015-05-23 09:43:43'),
(549, 1, '<b>Super Administrator</b> Delete a record in <b>Banners Management</b> with ID = 20', 'Y', '2015-05-23 09:49:37'),
(550, 1, '<b>Super Administrator</b> Delete a record in <b>Banners Management</b> with ID = 19', 'Y', '2015-05-23 09:49:37'),
(551, 1, '<b>Super Administrator</b> Inserted a new record in <b>Banners Management</b> with ID = 21', 'Y', '2015-05-23 09:49:56'),
(552, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 21', 'Y', '2015-05-23 09:55:14'),
(553, 1, '<b>Super Administrator</b> Delete a record in <b>Banners Management</b> with ID = 21', 'Y', '2015-05-23 09:55:30'),
(554, 1, '<b>Super Administrator</b> Inserted a new record in <b>Banners Management</b> with ID = 22', 'Y', '2015-05-23 09:55:44'),
(555, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 22', 'Y', '2015-05-23 09:55:48'),
(556, 1, '<b>Super Administrator</b> Delete a record in <b>Banners Management</b> with ID = 22', 'Y', '2015-05-23 09:57:14'),
(557, 1, '<b>Super Administrator</b> Inserted a new record in <b>Banners Management</b> with ID = 23', 'Y', '2015-05-23 09:57:29'),
(558, 1, '<b>Super Administrator</b> Delete a record in <b>Banners Management</b> with ID = 23', 'Y', '2015-05-23 09:57:59'),
(559, 1, '<b>Super Administrator</b> Inserted a new record in <b>Banners Management</b> with ID = 24', 'Y', '2015-05-23 09:58:14'),
(560, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 24', 'Y', '2015-05-23 09:59:03'),
(561, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 24', 'Y', '2015-05-23 09:59:12'),
(562, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 24', 'Y', '2015-05-23 10:00:21'),
(563, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 24', 'Y', '2015-05-23 10:00:39'),
(564, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 24', 'Y', '2015-05-23 10:00:45'),
(565, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 24', 'Y', '2015-05-23 10:01:00'),
(566, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 24', 'Y', '2015-05-23 10:01:10'),
(567, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 24', 'Y', '2015-05-23 10:03:31'),
(568, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 24', 'Y', '2015-05-23 10:03:35'),
(569, 1, '<b>Super Administrator</b> Edited a record in <b>Banners Management</b> with ID = 24', 'Y', '2015-05-23 10:18:13'),
(570, 1, '<b>Super Administrator</b> Inserted a new record in <b>Catalog Management</b> with ID = 4', 'Y', '2015-05-23 10:36:12'),
(571, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 25', 'Y', '2015-05-24 14:00:02'),
(572, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 24', 'Y', '2015-05-24 14:00:15'),
(573, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 24', 'Y', '2015-05-24 14:00:27'),
(574, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 24', 'Y', '2015-05-24 14:00:31'),
(575, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 25', 'Y', '2015-05-24 14:00:35'),
(576, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 11', 'Y', '2015-05-28 09:44:16'),
(577, 1, '<b>Super Administrator</b> Unpublish a record in <b>Media Management</b> with ID = 48', 'Y', '2015-05-28 10:08:58'),
(578, 1, '<b>Super Administrator</b> Unpublish a record in <b>Media Management</b> with ID = 42', 'Y', '2015-05-28 10:09:11'),
(579, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 14', 'Y', '2015-06-09 08:22:56'),
(580, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 14', 'Y', '2015-06-09 08:25:36'),
(581, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 14', 'Y', '2015-06-09 08:25:40'),
(582, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 14', 'Y', '2015-06-09 08:25:44'),
(583, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 14', 'Y', '2015-06-09 08:26:55'),
(584, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 26', 'Y', '2015-06-27 09:58:41'),
(585, 1, '<b>Super Administrator</b> Inserted a new record in <b>Contents Management</b> with ID = 27', 'Y', '2015-06-27 10:00:53'),
(586, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 26', 'Y', '2015-06-27 10:02:28'),
(587, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 27', 'Y', '2015-06-27 10:09:40'),
(588, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2015-09-15 13:54:09'),
(589, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2015-09-15 13:55:29'),
(590, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 26', 'Y', '2015-09-15 13:57:45'),
(591, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 27', 'Y', '2015-09-15 14:01:43'),
(592, 1, '<b>Super Administrator</b> Inserted a new record in <b>Contents Management</b> with ID = 28', 'Y', '2015-09-15 14:04:58'),
(593, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 28', 'Y', '2015-09-15 14:09:21'),
(594, 1, '<b>Super Administrator</b> Edited a record in <b>Contents Management</b> with ID = 28', 'Y', '2015-09-15 14:10:29'),
(595, 1, '<b>Super Administrator</b> Delete a record in <b>Contents Management</b> with ID = 21', 'Y', '2015-09-15 14:22:07'),
(596, 1, '<b>Super Administrator</b> Inserted a new record in <b>Services Management</b> with ID = 0', 'Y', '2015-09-15 14:58:33'),
(597, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 0', 'Y', '2015-09-15 15:01:21'),
(598, 1, '<b>Super Administrator</b> Inserted a new record in <b>Services Management</b> with ID = 0', 'Y', '2015-09-15 15:03:23'),
(599, 1, '<b>Super Administrator</b> Inserted a new record in <b>Services Management</b> with ID = 0', 'Y', '2015-09-15 15:04:52'),
(600, 1, '<b>Super Administrator</b> Inserted a new record in <b>Services Management</b> with ID = 0', 'Y', '2015-09-15 15:06:07'),
(601, 1, '<b>Super Administrator</b> Inserted a new record in <b>Services Management</b> with ID = 0', 'Y', '2015-09-15 15:07:25'),
(602, 1, '<b>Super Administrator</b> Inserted a new record in <b>Models Management</b> with ID = 2', 'Y', '2015-09-17 08:56:35'),
(603, 1, '<b>Super Administrator</b> Inserted a new record in <b>Models Management</b> with ID = 3', 'Y', '2015-09-17 08:59:57'),
(604, 1, '<b>Super Administrator</b> Inserted a new record in <b>Models Management</b> with ID = 4', 'Y', '2015-09-17 09:07:31'),
(605, 1, '<b>Super Administrator</b> Inserted a new record in <b>Models Management</b> with ID = 5', 'Y', '2015-09-17 09:16:41'),
(606, 1, '<b>Super Administrator</b> Inserted a new record in <b>Models Management</b> with ID = 6', 'Y', '2015-09-17 09:31:50'),
(607, 1, '<b>Super Administrator</b> Inserted a new record in <b>Models Management</b> with ID = 1', 'Y', '2015-09-17 09:33:25'),
(608, 1, '<b>Super Administrator</b> Inserted a new record in <b>Models Management</b> with ID = 2', 'Y', '2015-09-17 09:49:02'),
(609, 1, '<b>Super Administrator</b> Inserted a new record in <b>Models Management</b> with ID = 3', 'Y', '2015-09-17 09:56:30'),
(610, 1, '<b>Super Administrator</b> Inserted a new record in <b>Models Management</b> with ID = 1', 'Y', '2015-09-17 10:03:46'),
(611, 1, '<b>Super Administrator</b> Publish a record in <b>Models Management</b> with ID = 1', 'Y', '2015-09-17 10:09:29'),
(612, 1, '<b>Super Administrator</b> Inserted a new record in <b>Models Management</b> with ID = 1', 'Y', '2015-09-17 10:10:59'),
(613, 1, '<b>Super Administrator</b> Publish a record in <b>Models Management</b> with ID = 1', 'Y', '2015-09-17 10:11:07'),
(614, 1, '<b>Super Administrator</b> Edited a record in <b>Models Management</b> with ID = 1', 'Y', '2015-09-17 10:53:33'),
(615, 1, '<b>Super Administrator</b> Edited a record in <b>Models Management</b> with ID = 1', 'Y', '2015-09-17 10:53:42'),
(616, 1, '<b>Super Administrator</b> Edited a record in <b>Models Management</b> with ID = 1', 'Y', '2015-09-17 10:55:23'),
(617, 1, '<b>Super Administrator</b> Edited a record in <b>Models Management</b> with ID = 1', 'Y', '2015-09-17 10:56:18'),
(618, 1, '<b>Super Administrator</b> Edited a record in <b>Models Management</b> with ID = 1', 'Y', '2015-09-17 10:56:56'),
(619, 1, '<b>Super Administrator</b> Unpublish a record in <b>Models Management</b> with ID = 1', 'Y', '2015-09-17 10:57:22'),
(620, 1, '<b>Super Administrator</b> Publish a record in <b>Models Management</b> with ID = 1', 'Y', '2015-09-17 10:57:26'),
(621, 1, '<b>Super Administrator</b> Publish a record in <b>Models Management</b> with ID = 1', 'Y', '2015-09-17 10:57:52'),
(622, 1, '<b>Super Administrator</b> Edited a record in <b>Models Management</b> with ID = 1', 'Y', '2015-09-17 10:58:10'),
(623, 1, '<b>Super Administrator</b> Publish a record in <b>Models Management</b> with ID = 1', 'Y', '2015-09-17 11:06:26'),
(624, 1, '<b>Super Administrator</b> Publish a record in <b>Models Management</b> with ID = 1', 'Y', '2015-09-17 11:09:23'),
(625, 1, '<b>Super Administrator</b> Publish a record in <b>Models Management</b> with ID = 2', 'Y', '2015-09-17 11:42:05'),
(626, 1, '<b>Super Administrator</b> Publish a record in <b>Models Management</b> with ID = 1', 'Y', '2015-09-17 11:42:05'),
(627, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 14', 'Y', '2015-09-19 11:26:14'),
(628, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 13', 'Y', '2015-09-19 11:26:14'),
(629, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 12', 'Y', '2015-09-19 11:26:14'),
(630, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 15', 'Y', '2015-09-19 11:28:08'),
(631, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 52', 'Y', '2015-09-19 11:29:44'),
(632, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 53', 'Y', '2015-09-19 11:29:44'),
(633, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 54', 'Y', '2015-09-19 11:29:44'),
(634, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 55', 'Y', '2015-09-19 11:29:44'),
(635, 1, '<b>Super Administrator</b> Inserted a new record in <b>Media Management</b> with ID = 12', 'Y', '2015-09-19 11:35:17'),
(636, 1, '<b>Super Administrator</b> Inserted a new record in <b>Company Management</b> with ID = 4', 'Y', '2015-09-27 08:10:55'),
(637, 1, '<b>Super Administrator</b> Edited a record in <b>Company Management</b> with ID = 4', 'Y', '2015-09-27 08:21:13'),
(638, 1, '<b>Super Administrator</b> Edited a record in <b>Company Management</b> with ID = 4', 'Y', '2015-09-27 08:21:32'),
(639, 1, '<b>Super Administrator</b> Edited a record in <b>Company Management</b> with ID = 4', 'Y', '2015-09-27 08:22:28'),
(640, 1, '<b>Super Administrator</b> Delete a record in <b>Company Management</b> with ID = 4', 'Y', '2015-09-27 08:25:01'),
(641, 1, '<b>Super Administrator</b> Edited a record in <b>Company Management</b> with ID = 3', 'Y', '2015-09-27 08:25:30'),
(642, 1, '<b>Super Administrator</b> Unpublish a record in <b>Company Management</b> with ID = 3', 'Y', '2015-09-27 08:30:38'),
(643, 1, '<b>Super Administrator</b> Unpublish a record in <b>Company Management</b> with ID = 2', 'Y', '2015-09-27 08:30:39'),
(644, 1, '<b>Super Administrator</b> Unpublish a record in <b>Company Management</b> with ID = 1', 'Y', '2015-09-27 08:30:39'),
(645, 1, '<b>Super Administrator</b> Publish a record in <b>Company Management</b> with ID = 3', 'Y', '2015-09-27 08:30:57'),
(646, 1, '<b>Super Administrator</b> Publish a record in <b>Company Management</b> with ID = 2', 'Y', '2015-09-27 08:30:57'),
(647, 1, '<b>Super Administrator</b> Publish a record in <b>Company Management</b> with ID = 1', 'Y', '2015-09-27 08:30:57'),
(648, 1, '<b>Super Administrator</b> Publish a record in <b>Company Management</b> with ID = 3', 'Y', '2015-09-27 08:31:01'),
(649, 1, '<b>Super Administrator</b> Publish a record in <b>Company Management</b> with ID = 2', 'Y', '2015-09-27 08:31:01'),
(650, 1, '<b>Super Administrator</b> Publish a record in <b>Company Management</b> with ID = 1', 'Y', '2015-09-27 08:31:01'),
(651, 1, '<b>Super Administrator</b> Publish a record in <b>Company Management</b> with ID = 3', 'Y', '2015-09-27 08:45:24'),
(652, 1, '<b>Super Administrator</b> Publish a record in <b>Company Management</b> with ID = 2', 'Y', '2015-09-27 08:45:24'),
(653, 1, '<b>Super Administrator</b> Publish a record in <b>Company Management</b> with ID = 1', 'Y', '2015-09-27 08:45:24'),
(654, 1, '<b>Super Administrator</b> Publish a record in <b>Models Management</b> with ID = 7', 'Y', '2015-09-27 08:57:18'),
(655, 1, '<b>Super Administrator</b> Publish a record in <b>Models Management</b> with ID = 6', 'Y', '2015-09-27 08:57:18'),
(656, 1, '<b>Super Administrator</b> Publish a record in <b>Models Management</b> with ID = 5', 'Y', '2015-09-27 08:57:18'),
(657, 1, '<b>Super Administrator</b> Publish a record in <b>Models Management</b> with ID = 4', 'Y', '2015-09-27 08:57:18'),
(658, 1, '<b>Super Administrator</b> Publish a record in <b>Models Management</b> with ID = 3', 'Y', '2015-09-27 08:57:18'),
(659, 1, '<b>Super Administrator</b> Publish a record in <b>Models Management</b> with ID = 2', 'Y', '2015-09-27 08:57:18'),
(660, 1, '<b>Super Administrator</b> Publish a record in <b>Models Management</b> with ID = 1', 'Y', '2015-09-27 08:57:18'),
(661, 1, '<b>Super Administrator</b> Delete a record in <b>Models Management</b> with ID = 3', 'Y', '2015-09-27 08:57:35'),
(662, 1, '<b>Super Administrator</b> Edited a record in <b>Models Management</b> with ID = 6', 'Y', '2015-09-27 09:26:32'),
(663, 1, '<b>Super Administrator</b> Edited a record in <b>Models Management</b> with ID = 2', 'Y', '2015-09-27 09:26:40'),
(664, 1, '<b>Super Administrator</b> Edited a record in <b>Models Management</b> with ID = 2', 'Y', '2015-09-27 09:26:50'),
(665, 1, '<b>Super Administrator</b> Edited a record in <b>Models Management</b> with ID = 2', 'Y', '2015-09-27 09:35:42'),
(666, 1, '<b>Super Administrator</b> Edited a record in <b>Models Management</b> with ID = 6', 'Y', '2015-09-27 09:43:46'),
(667, 1, '<b>Super Administrator</b> Publish a record in <b>Models Management</b> with ID = 2', 'Y', '2015-09-27 09:43:56'),
(668, 1, '<b>Super Administrator</b> Edited a record in <b>Models Management</b> with ID = 7', 'Y', '2015-09-27 10:11:19'),
(669, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 57', 'Y', '2015-09-27 10:18:33'),
(670, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 58', 'Y', '2015-09-27 10:18:33'),
(671, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 56', 'Y', '2015-09-27 10:18:33'),
(672, 1, '<b>Super Administrator</b> Edited a record in <b>Media Management</b> with ID = 15', 'Y', '2015-09-27 10:20:04'),
(673, 1, '<b>Super Administrator</b> Unpublish a record in <b>Models Management</b> with ID = 2', 'Y', '2015-09-27 10:24:45'),
(674, 1, '<b>Super Administrator</b> Publish a record in <b>Models Management</b> with ID = 2', 'Y', '2015-09-27 10:24:57'),
(675, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 28', 'Y', '2015-09-27 10:46:07'),
(676, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 29', 'Y', '2015-09-27 10:46:12'),
(677, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 30', 'Y', '2015-09-27 10:46:16'),
(678, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 31', 'Y', '2015-09-27 10:46:20'),
(679, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 30', 'Y', '2015-09-27 10:47:51'),
(680, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 30', 'Y', '2015-09-27 10:49:02'),
(681, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 31', 'Y', '2015-09-27 10:53:21'),
(682, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 31', 'Y', '2015-09-27 10:53:25'),
(683, 1, '<b>Super Administrator</b> Delete a record in <b>Language Management</b> with ID = 31', 'Y', '2015-09-27 10:54:44'),
(684, 1, '<b>Super Administrator</b> Unpublish a record in <b>Language Management</b> with ID = 30', 'Y', '2015-09-27 10:55:07'),
(685, 1, '<b>Super Administrator</b> Publish a record in <b>Language Management</b> with ID = 30', 'Y', '2015-09-27 10:55:09'),
(686, 1, '<b>Super Administrator</b> Edited a record in <b>Models Management</b> with ID = 8', 'Y', '2015-09-27 15:03:45'),
(687, 1, '<b>Super Administrator</b> Edited a record in <b>Models Management</b> with ID = 8', 'Y', '2015-09-27 15:04:12'),
(688, 1, '<b>Super Administrator</b> Edited a record in <b>Models Management</b> with ID = 8', 'Y', '2015-09-27 15:04:23'),
(689, 1, '<b>Super Administrator</b> Edited a record in <b>Models Management</b> with ID = 8', 'Y', '2015-09-27 15:07:12'),
(690, 1, '<b>Super Administrator</b> Edited a record in <b>Models Management</b> with ID = 7', 'Y', '2015-09-27 15:07:34'),
(691, 1, '<b>Super Administrator</b> Delete a record in <b>Models Management</b> with ID = 9', 'Y', '2015-09-29 00:13:28'),
(692, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 26', 'Y', '2015-09-29 00:32:24'),
(693, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 28', 'Y', '2015-09-29 00:33:23'),
(694, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 29', 'Y', '2015-09-29 00:33:50'),
(695, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 30', 'Y', '2015-09-29 00:34:17'),
(696, 1, '<b>Super Administrator</b> Inserted a new record in <b>Admin Users Management</b> with ID = 3', 'Y', '2015-10-04 06:18:45'),
(697, 1, '<b>Super Administrator</b> Delete a record in <b>Media Management</b> with ID = 15', 'Y', '2015-10-04 08:30:03'),
(698, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 32', 'Y', '2015-10-05 00:41:55'),
(699, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 33', 'Y', '2015-10-05 00:42:13'),
(700, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 34', 'Y', '2015-10-05 00:42:15'),
(701, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 35', 'Y', '2015-10-05 00:42:18'),
(702, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 36', 'Y', '2015-10-05 00:42:21'),
(703, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 37', 'Y', '2015-10-05 00:42:24'),
(704, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 38', 'Y', '2015-10-05 00:42:26'),
(705, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 39', 'Y', '2015-10-05 00:42:29'),
(706, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 40', 'Y', '2015-10-05 00:42:37'),
(707, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 41', 'Y', '2015-10-05 00:42:40'),
(708, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 42', 'Y', '2015-10-05 00:42:43'),
(709, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 43', 'Y', '2015-10-05 00:42:47'),
(710, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 44', 'Y', '2015-10-05 00:42:50'),
(711, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 45', 'Y', '2015-10-05 00:42:53'),
(712, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 46', 'Y', '2015-10-05 00:42:56'),
(713, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 47', 'Y', '2015-10-05 00:43:16'),
(714, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 48', 'Y', '2015-10-05 00:43:22'),
(715, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 49', 'Y', '2015-10-05 00:43:25'),
(716, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 50', 'Y', '2015-10-05 00:43:29'),
(717, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 51', 'Y', '2015-10-05 00:43:33'),
(718, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 52', 'Y', '2015-10-05 00:43:36'),
(719, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 53', 'Y', '2015-10-05 00:43:41'),
(720, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 54', 'Y', '2015-10-05 00:43:48'),
(721, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 55', 'Y', '2015-10-05 00:44:01'),
(722, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 56', 'Y', '2015-10-05 00:44:06'),
(723, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 57', 'Y', '2015-10-05 00:44:14'),
(724, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 58', 'Y', '2015-10-05 00:44:20'),
(725, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 59', 'Y', '2015-10-05 00:44:25'),
(726, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 60', 'Y', '2015-10-05 00:44:28'),
(727, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 61', 'Y', '2015-10-05 00:44:32'),
(728, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 62', 'Y', '2015-10-05 00:44:35'),
(729, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 63', 'Y', '2015-10-05 00:44:39'),
(730, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 64', 'Y', '2015-10-05 00:44:43'),
(731, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 65', 'Y', '2015-10-05 00:44:59'),
(732, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 66', 'Y', '2015-10-05 00:45:03'),
(733, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 67', 'Y', '2015-10-05 00:45:06'),
(734, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 68', 'Y', '2015-10-05 00:46:35'),
(735, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 69', 'Y', '2015-10-05 00:46:44'),
(736, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 70', 'Y', '2015-10-05 00:46:47'),
(737, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 71', 'Y', '2015-10-05 00:46:51'),
(738, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 72', 'Y', '2015-10-05 00:46:55'),
(739, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 73', 'Y', '2015-10-05 00:46:58'),
(740, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 74', 'Y', '2015-10-05 00:47:05'),
(741, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 75', 'Y', '2015-10-05 00:47:12'),
(742, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 76', 'Y', '2015-10-05 00:47:15'),
(743, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 77', 'Y', '2015-10-05 00:47:32'),
(744, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 78', 'Y', '2015-10-05 00:47:36'),
(745, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 79', 'Y', '2015-10-05 00:47:40'),
(746, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 80', 'Y', '2015-10-05 00:47:44'),
(747, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 81', 'Y', '2015-10-05 00:47:47'),
(748, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 82', 'Y', '2015-10-05 00:47:54'),
(749, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 83', 'Y', '2015-10-05 00:48:04'),
(750, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 84', 'Y', '2015-10-05 00:48:12'),
(751, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 85', 'Y', '2015-10-05 00:48:20'),
(752, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 86', 'Y', '2015-10-05 00:48:27'),
(753, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 87', 'Y', '2015-10-05 00:48:33'),
(754, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 88', 'Y', '2015-10-05 00:48:37'),
(755, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 89', 'Y', '2015-10-05 00:48:41'),
(756, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 90', 'Y', '2015-10-05 00:48:44'),
(757, 1, '<b>Super Administrator</b> Inserted a new record in <b>Language Management</b> with ID = 91', 'Y', '2015-10-05 00:48:48'),
(758, 3, '<b>aveniradmin</b> Inserted a new record in <b>Media Management</b> with ID = 16', 'Y', '2015-10-05 02:36:25'),
(759, 3, '<b>aveniradmin</b> Delete a record in <b>Media Management</b> with ID = 16', 'Y', '2015-10-05 02:37:14'),
(760, 1, '<b>Super Administrator</b> Delete a record in <b>Models Management</b> with ID = 12', 'Y', '2015-10-05 02:40:11'),
(761, 1, '<b>Super Administrator</b> Delete a record in <b>Models Management</b> with ID = 10', 'Y', '2015-10-05 02:40:11'),
(762, 1, '<b>Super Administrator</b> Delete a record in <b>Models Management</b> with ID = 8', 'Y', '2015-10-05 02:40:11'),
(763, 1, '<b>Super Administrator</b> Delete a record in <b>Models Management</b> with ID = 7', 'Y', '2015-10-05 02:40:11'),
(764, 1, '<b>Super Administrator</b> Delete a record in <b>Models Management</b> with ID = 6', 'Y', '2015-10-05 02:40:11'),
(765, 1, '<b>Super Administrator</b> Delete a record in <b>Models Management</b> with ID = 5', 'Y', '2015-10-05 02:40:11'),
(766, 1, '<b>Super Administrator</b> Delete a record in <b>Models Management</b> with ID = 4', 'Y', '2015-10-05 02:40:11'),
(767, 1, '<b>Super Administrator</b> Delete a record in <b>Models Management</b> with ID = 2', 'Y', '2015-10-05 02:40:11'),
(768, 1, '<b>Super Administrator</b> Delete a record in <b>Models Management</b> with ID = 1', 'Y', '2015-10-05 02:40:11'),
(769, 3, '<b>aveniradmin</b> Inserted a new record in <b>Media Management</b> with ID = 17', 'Y', '2015-10-05 04:33:51'),
(770, 3, '<b>aveniradmin</b> Delete a record in <b>Media Management</b> with ID = 17', 'Y', '2015-10-05 04:34:38'),
(771, 3, '<b>aveniradmin</b> Inserted a new record in <b>Media Management</b> with ID = 18', 'Y', '2015-10-05 04:37:06'),
(772, 3, '<b>aveniradmin</b> Inserted a new record in <b>Media Management</b> with ID = 19', 'Y', '2015-10-05 04:39:29'),
(773, 3, '<b>aveniradmin</b> Inserted a new record in <b>Media Management</b> with ID = 20', 'Y', '2015-10-05 04:41:23'),
(774, 3, '<b>aveniradmin</b> Inserted a new record in <b>Media Management</b> with ID = 21', 'Y', '2015-10-05 04:43:56'),
(775, 3, '<b>aveniradmin</b> Edited a record in <b>Media Management</b> with ID = 21', 'Y', '2015-10-05 04:47:37'),
(776, 3, '<b>aveniradmin</b> Edited a record in <b>Media Management</b> with ID = 20', 'Y', '2015-10-05 04:47:55'),
(777, 3, '<b>aveniradmin</b> Edited a record in <b>Media Management</b> with ID = 19', 'Y', '2015-10-05 04:48:12'),
(778, 3, '<b>aveniradmin</b> Edited a record in <b>Media Management</b> with ID = 19', 'Y', '2015-10-05 04:48:13'),
(779, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 13', 'Y', '2015-10-05 04:54:58'),
(780, 3, '<b>aveniradmin</b> Edited a record in <b>Language Management</b> with ID = 83', 'Y', '2015-10-05 05:50:41'),
(781, 3, '<b>aveniradmin</b> Edited a record in <b>Language Management</b> with ID = 83', 'Y', '2015-10-05 05:54:50'),
(782, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 30', 'Y', '2015-10-08 04:10:47'),
(783, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 29', 'Y', '2015-10-08 04:11:02'),
(784, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 28', 'Y', '2015-10-08 04:11:09'),
(785, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 27', 'Y', '2015-10-08 04:11:18'),
(786, 1, '<b>Super Administrator</b> Edited a record in <b>Services Management</b> with ID = 26', 'Y', '2015-10-08 04:11:26'),
(787, 1, '<b>Super Administrator</b> Edited a record in <b>Models Management</b> with ID = 13', 'Y', '2015-10-08 06:16:16'),
(788, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 41', 'Y', '2015-10-08 06:20:20'),
(789, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 91', 'Y', '2015-10-08 06:32:53'),
(790, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 90', 'Y', '2015-10-08 06:33:07'),
(791, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 89', 'Y', '2015-10-08 06:33:20'),
(792, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 88', 'Y', '2015-10-08 06:33:33'),
(793, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 87', 'Y', '2015-10-08 06:33:54'),
(794, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 86', 'Y', '2015-10-08 06:34:08'),
(795, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 85', 'Y', '2015-10-08 06:34:25'),
(796, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 83', 'Y', '2015-10-08 06:35:01'),
(797, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 82', 'Y', '2015-10-08 06:35:34'),
(798, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 81', 'Y', '2015-10-08 06:35:43'),
(799, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 80', 'Y', '2015-10-08 06:35:51'),
(800, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 79', 'Y', '2015-10-08 06:36:14'),
(801, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 78', 'Y', '2015-10-08 06:36:22');
INSERT INTO `tbl_admin_logs` (`id`, `user_id`, `description`, `is_active`, `added_date`) VALUES
(802, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 77', 'Y', '2015-10-08 06:36:34'),
(803, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 76', 'Y', '2015-10-08 06:40:30'),
(804, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 75', 'Y', '2015-10-08 06:40:42'),
(805, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 74', 'Y', '2015-10-08 06:40:50'),
(806, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 73', 'Y', '2015-10-08 06:41:07'),
(807, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 72', 'Y', '2015-10-08 06:41:25'),
(808, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 71', 'Y', '2015-10-08 06:41:49'),
(809, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 67', 'Y', '2015-10-08 06:42:09'),
(810, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 66', 'Y', '2015-10-08 06:42:29'),
(811, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 42', 'Y', '2015-10-08 06:44:46'),
(812, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 70', 'Y', '2015-10-08 06:45:49'),
(813, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 69', 'Y', '2015-10-08 06:46:09'),
(814, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 68', 'Y', '2015-10-08 06:46:24'),
(815, 1, '<b>Super Administrator</b> Edited a record in <b>Language Management</b> with ID = 84', 'Y', '2015-10-08 06:47:22'),
(816, 1, '<b>Super Administrator</b> Delete a record in <b>Language Management</b> with ID = 84', 'Y', '2015-10-08 06:48:00'),
(817, 3, '<b>aveniradmin</b> Delete a record in <b>Models Management</b> with ID = 14', 'Y', '2015-10-10 09:15:30'),
(818, 3, '<b>aveniradmin</b> Delete a record in <b>Models Management</b> with ID = 13', 'Y', '2015-10-10 09:15:36'),
(819, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 15', 'Y', '2015-10-10 11:31:07'),
(820, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 15', 'Y', '2015-10-10 12:12:49'),
(821, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 15', 'Y', '2015-10-10 12:24:10'),
(822, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 16', 'Y', '2015-10-10 14:22:58'),
(823, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 19', 'Y', '2015-10-11 04:05:35'),
(824, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 18', 'Y', '2015-10-11 04:05:35'),
(825, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 15', 'Y', '2015-10-11 04:05:35'),
(826, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 17', 'Y', '2015-10-11 04:05:35'),
(827, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 16', 'Y', '2015-10-11 04:05:35'),
(828, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 21', 'Y', '2015-10-12 02:52:27'),
(829, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 20', 'Y', '2015-10-12 02:52:27'),
(830, 3, '<b>aveniradmin</b> Inserted a new record in <b>Media Management</b> with ID = 22', 'Y', '2015-10-12 03:08:37'),
(831, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 23', 'Y', '2015-10-12 08:38:18'),
(832, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 23', 'Y', '2015-10-12 08:38:18'),
(833, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 22', 'Y', '2015-10-12 08:38:29'),
(834, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 23', 'Y', '2015-10-12 08:39:28'),
(835, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 25', 'Y', '2015-10-13 05:14:20'),
(836, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 24', 'Y', '2015-10-13 05:14:20'),
(837, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 26', 'Y', '2015-10-16 13:38:07'),
(838, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 28', 'Y', '2015-10-25 02:26:36'),
(839, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 30', 'Y', '2015-11-19 08:32:17'),
(840, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 29', 'Y', '2015-11-19 08:32:17'),
(841, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 31', 'Y', '2015-12-13 23:45:42'),
(842, 3, '<b>aveniradmin</b> Delete a record in <b>Models Management</b> with ID = 32', 'Y', '2015-12-13 23:45:51'),
(843, 3, '<b>aveniradmin</b> Delete a record in <b>Models Management</b> with ID = 27', 'Y', '2015-12-13 23:50:20'),
(844, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 34', 'Y', '2015-12-29 00:40:52'),
(845, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 33', 'Y', '2015-12-29 00:40:52'),
(846, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 37', 'Y', '2016-03-02 04:26:27'),
(847, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 36', 'Y', '2016-03-02 04:26:27'),
(848, 3, '<b>aveniradmin</b> Delete a record in <b>Models Management</b> with ID = 35', 'Y', '2016-03-02 04:26:42'),
(849, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 42', 'Y', '2016-03-23 05:03:43'),
(850, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 41', 'Y', '2016-03-23 05:03:43'),
(851, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 40', 'Y', '2016-03-23 05:03:43'),
(852, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 39', 'Y', '2016-03-23 05:03:43'),
(853, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 38', 'Y', '2016-03-23 05:03:43'),
(854, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 37', 'Y', '2016-03-23 05:03:43'),
(855, 3, '<b>aveniradmin</b> Inserted a new record in <b>Media Management</b> with ID = 23', 'Y', '2016-04-05 03:33:50'),
(856, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 23', 'Y', '2016-04-05 03:55:27'),
(857, 3, '<b>aveniradmin</b> Edited a record in <b>Contents Management</b> with ID = 28', 'Y', '2016-04-06 04:20:16'),
(858, 3, '<b>aveniradmin</b> Inserted a new record in <b>Media Management</b> with ID = 24', 'Y', '2016-04-11 04:45:47'),
(859, 3, '<b>aveniradmin</b> Delete a record in <b>Media Management</b> with ID = 95', 'Y', '2016-04-11 04:47:22'),
(860, 3, '<b>aveniradmin</b> Delete a record in <b>Media Management</b> with ID = 94', 'Y', '2016-04-11 04:47:27'),
(861, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 99', 'Y', '2016-04-11 04:50:13'),
(862, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 98', 'Y', '2016-04-11 04:50:13'),
(863, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 97', 'Y', '2016-04-11 04:50:13'),
(864, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 96', 'Y', '2016-04-11 04:50:13'),
(865, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 93', 'Y', '2016-04-11 04:50:13'),
(866, 3, '<b>aveniradmin</b> Inserted a new record in <b>Media Management</b> with ID = 25', 'Y', '2016-04-11 04:53:56'),
(867, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 107', 'Y', '2016-04-11 05:41:52'),
(868, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 106', 'Y', '2016-04-11 05:41:52'),
(869, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 105', 'Y', '2016-04-11 05:41:52'),
(870, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 104', 'Y', '2016-04-11 05:41:52'),
(871, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 103', 'Y', '2016-04-11 05:41:52'),
(872, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 102', 'Y', '2016-04-11 05:41:52'),
(873, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 101', 'Y', '2016-04-11 05:41:52'),
(874, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 100', 'Y', '2016-04-11 05:41:52'),
(875, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 108', 'Y', '2016-04-11 05:45:43'),
(876, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 108', 'Y', '2016-04-11 05:45:47'),
(877, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 107', 'Y', '2016-04-11 05:45:47'),
(878, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 106', 'Y', '2016-04-11 05:45:47'),
(879, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 105', 'Y', '2016-04-11 05:45:48'),
(880, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 104', 'Y', '2016-04-11 05:45:48'),
(881, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 103', 'Y', '2016-04-11 05:45:48'),
(882, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 102', 'Y', '2016-04-11 05:45:48'),
(883, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 101', 'Y', '2016-04-11 05:45:48'),
(884, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 100', 'Y', '2016-04-11 05:45:48'),
(885, 3, '<b>aveniradmin</b> Inserted a new record in <b>Media Management</b> with ID = 26', 'Y', '2016-04-12 07:02:29'),
(886, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 111', 'Y', '2016-04-12 07:03:10'),
(887, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 110', 'Y', '2016-04-12 07:03:10'),
(888, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 109', 'Y', '2016-04-12 07:03:10'),
(889, 3, '<b>aveniradmin</b> Delete a record in <b>Media Management</b> with ID = 111', 'Y', '2016-04-12 07:29:45'),
(890, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 112', 'Y', '2016-04-12 07:30:28'),
(891, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 110', 'Y', '2016-04-12 07:30:28'),
(892, 3, '<b>aveniradmin</b> Publish a record in <b>Media Management</b> with ID = 109', 'Y', '2016-04-12 07:30:28'),
(893, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 44', 'Y', '2016-07-19 09:08:12'),
(894, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 43', 'Y', '2016-07-19 09:08:12'),
(895, 3, '<b>aveniradmin</b> Publish a record in <b>Models Management</b> with ID = 45', 'Y', '2016-09-19 03:18:14'),
(896, 0, '<b></b> Delete a record in <b>Banners Management</b> with ID = 24', 'Y', '2016-11-05 12:16:35'),
(897, 0, '<b></b> Inserted a new record in <b>Banners Management</b> with ID = 25', 'Y', '2016-11-05 12:24:51'),
(898, 0, '<b></b> Edited a record in <b>Banners Management</b> with ID = 25', 'Y', '2016-11-05 12:26:22'),
(899, 0, '<b></b> Publish a record in <b>Banners Management</b> with ID = 25', 'Y', '2016-11-05 12:26:34'),
(900, 0, '<b></b> Unpublish a record in <b>Banners Management</b> with ID = 25', 'Y', '2016-11-05 12:26:37'),
(901, 0, '<b></b> Publish a record in <b>Banners Management</b> with ID = 25', 'Y', '2016-11-05 12:26:40'),
(902, 0, '<b></b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2016-11-05 12:41:15'),
(903, 0, '<b></b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2016-11-05 12:50:56'),
(904, 0, '<b></b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2016-11-05 12:51:28'),
(905, 0, '<b></b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2016-11-05 12:51:36'),
(906, 0, '<b></b> Edited a record in <b>Contents Management</b> with ID = 26', 'Y', '2016-11-05 12:55:56'),
(907, 0, '<b></b> Edited a record in <b>Contents Management</b> with ID = 26', 'Y', '2016-11-05 12:56:16'),
(908, 0, '<b></b> Edited a record in <b>Contents Management</b> with ID = 27', 'Y', '2016-11-05 13:22:42'),
(909, 0, '<b></b> Edited a record in <b>Contents Management</b> with ID = 28', 'Y', '2016-11-05 14:05:19'),
(910, 0, '<b></b> Edited a record in <b>Contents Management</b> with ID = 28', 'Y', '2016-11-05 14:05:35'),
(911, 0, '<b></b> Inserted a new record in <b>Contents Management</b> with ID = 29', 'Y', '2016-11-05 14:06:22'),
(912, 0, '<b></b> Inserted a new record in <b>Contents Management</b> with ID = 30', 'Y', '2016-11-05 14:07:05'),
(913, 0, '<b></b> Inserted a new record in <b>Contents Management</b> with ID = 31', 'Y', '2016-11-05 14:08:10'),
(914, 0, '<b></b> Delete a record in <b>Media Management</b> with ID = 26', 'Y', '2016-11-05 14:26:14'),
(915, 0, '<b></b> Delete a record in <b>Media Management</b> with ID = 25', 'Y', '2016-11-05 14:26:14'),
(916, 0, '<b></b> Delete a record in <b>Media Management</b> with ID = 24', 'Y', '2016-11-05 14:26:14'),
(917, 0, '<b></b> Delete a record in <b>Media Management</b> with ID = 23', 'Y', '2016-11-05 14:26:14'),
(918, 0, '<b></b> Delete a record in <b>Media Management</b> with ID = 22', 'Y', '2016-11-05 14:26:14'),
(919, 0, '<b></b> Delete a record in <b>Media Management</b> with ID = 21', 'Y', '2016-11-05 14:26:14'),
(920, 0, '<b></b> Delete a record in <b>Media Management</b> with ID = 20', 'Y', '2016-11-05 14:26:14'),
(921, 0, '<b></b> Delete a record in <b>Media Management</b> with ID = 19', 'Y', '2016-11-05 14:26:14'),
(922, 0, '<b></b> Delete a record in <b>Media Management</b> with ID = 18', 'Y', '2016-11-05 14:26:14'),
(923, 0, '<b></b> Inserted a new record in <b>Media Management</b> with ID = 27', 'Y', '2016-11-05 15:16:41'),
(924, 0, '<b></b> Inserted a new record in <b>Media Management</b> with ID = 13', 'Y', '2016-11-05 15:19:37'),
(925, 0, '<b></b> Inserted a new record in <b>Media Management</b> with ID = 14', 'Y', '2016-11-05 15:20:50'),
(926, 0, '<b></b> Delete a record in <b>Media Management</b> with ID = 14', 'Y', '2016-11-05 15:21:18'),
(927, 0, '<b></b> Delete a record in <b>Media Management</b> with ID = 13', 'Y', '2016-11-05 15:21:18'),
(928, 0, '<b></b> Inserted a new record in <b>Media Management</b> with ID = 15', 'Y', '2016-11-05 15:21:52'),
(929, 0, '<b></b> Delete a record in <b>Media Management</b> with ID = 15', 'Y', '2016-11-05 15:23:02'),
(930, 0, '<b></b> Inserted a new record in <b>Media Management</b> with ID = 16', 'Y', '2016-11-05 15:23:09'),
(931, 0, '<b></b> Delete a record in <b>Media Management</b> with ID = 16', 'Y', '2016-11-05 15:39:28'),
(932, 0, '<b></b> Inserted a new record in <b>Media Management</b> with ID = 17', 'Y', '2016-11-05 15:39:52'),
(933, 0, '<b></b> Delete a record in <b>Media Management</b> with ID = 17', 'Y', '2016-11-05 15:41:53'),
(934, 0, '<b></b> Inserted a new record in <b>Media Management</b> with ID = 18', 'Y', '2016-11-05 15:41:57'),
(935, 0, '<b></b> Delete a record in <b>Media Management</b> with ID = 18', 'Y', '2016-11-05 15:42:47'),
(936, 0, '<b></b> Inserted a new record in <b>Media Management</b> with ID = 19', 'Y', '2016-11-05 15:42:52'),
(937, 0, '<b></b> Delete a record in <b>Media Management</b> with ID = 19', 'Y', '2016-11-05 15:43:19'),
(938, 0, '<b></b> Inserted a new record in <b>Media Management</b> with ID = 20', 'Y', '2016-11-05 15:44:13'),
(939, 0, '<b></b> Delete a record in <b>Client Management</b> with ID = 4', 'Y', '2016-11-05 15:59:46'),
(940, 0, '<b></b> Delete a record in <b>Client Management</b> with ID = 3', 'Y', '2016-11-05 15:59:46'),
(941, 0, '<b></b> Delete a record in <b>Client Management</b> with ID = 2', 'Y', '2016-11-05 15:59:46'),
(942, 0, '<b></b> Delete a record in <b>Client Management</b> with ID = 1', 'Y', '2016-11-05 15:59:46'),
(943, 0, '<b></b> Inserted a new record in <b>Client Management</b> with ID = 5', 'Y', '2016-11-05 16:01:04'),
(944, 0, '<b></b> Delete a record in <b>Review Management</b> with ID = 30', 'Y', '2016-11-05 16:52:21'),
(945, 0, '<b></b> Delete a record in <b>Review Management</b> with ID = 29', 'Y', '2016-11-05 16:52:21'),
(946, 0, '<b></b> Delete a record in <b>Review Management</b> with ID = 28', 'Y', '2016-11-05 16:52:21'),
(947, 0, '<b></b> Delete a record in <b>Review Management</b> with ID = 27', 'Y', '2016-11-05 16:52:21'),
(948, 0, '<b></b> Delete a record in <b>Review Management</b> with ID = 26', 'Y', '2016-11-05 16:52:21'),
(949, 0, '<b></b> Inserted a new record in <b>Review Management</b> with ID = 31', 'Y', '2016-11-05 17:00:25'),
(950, 0, '<b></b> Edited a record in <b>Review Management</b> with ID = 31', 'Y', '2016-11-05 17:01:54'),
(951, 0, '<b></b> Edited a record in <b>Models Management</b> with ID = 54', 'Y', '2016-11-08 19:57:34'),
(952, 0, '<b></b> Edited a record in <b>Models Management</b> with ID = 54', 'Y', '2016-11-08 19:57:40'),
(953, 0, '<b></b> Edited a record in <b>Models Management</b> with ID = 54', 'Y', '2016-11-08 19:59:32'),
(954, 0, '<b></b> Edited a record in <b>Models Management</b> with ID = 54', 'Y', '2016-11-08 19:59:43'),
(955, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 52', 'Y', '2016-11-08 20:00:43'),
(956, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 51', 'Y', '2016-11-08 20:00:43'),
(957, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 50', 'Y', '2016-11-08 20:00:43'),
(958, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 49', 'Y', '2016-11-08 20:00:43'),
(959, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 48', 'Y', '2016-11-08 20:00:43'),
(960, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 47', 'Y', '2016-11-08 20:00:43'),
(961, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 46', 'Y', '2016-11-08 20:00:43'),
(962, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 45', 'Y', '2016-11-08 20:00:43'),
(963, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 44', 'Y', '2016-11-08 20:00:43'),
(964, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 43', 'Y', '2016-11-08 20:00:43'),
(965, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 42', 'Y', '2016-11-08 20:00:43'),
(966, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 41', 'Y', '2016-11-08 20:00:43'),
(967, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 40', 'Y', '2016-11-08 20:00:43'),
(968, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 39', 'Y', '2016-11-08 20:00:43'),
(969, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 38', 'Y', '2016-11-08 20:00:43'),
(970, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 37', 'Y', '2016-11-08 20:00:43'),
(971, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 36', 'Y', '2016-11-08 20:00:43'),
(972, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 34', 'Y', '2016-11-08 20:00:43'),
(973, 0, '<b></b> Inserted a new record in <b>Models Management</b> with ID = 55', 'Y', '2016-11-08 20:11:31'),
(974, 0, '<b></b> Edited a record in <b>Models Management</b> with ID = 54', 'Y', '2016-11-08 20:12:06'),
(975, 0, '<b></b> Edited a record in <b>Models Management</b> with ID = 55', 'Y', '2016-11-08 20:12:12'),
(976, 0, '<b></b> Edited a record in <b>Models Management</b> with ID = 55', 'Y', '2016-11-08 20:12:21'),
(977, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 55', 'Y', '2016-11-08 20:14:08'),
(978, 0, '<b></b> Inserted a new record in <b>Company Management</b> with ID = 7', 'Y', '2016-11-09 07:47:42'),
(979, 0, '<b></b> Inserted a new record in <b>Company Management</b> with ID = 8', 'Y', '2016-11-09 13:06:29'),
(980, 0, '<b></b> Inserted a new record in <b>Company Management</b> with ID = 1', 'Y', '2016-11-09 13:13:47'),
(981, 0, '<b></b> Edited a record in <b>Company Management</b> with ID = 1', 'Y', '2016-11-09 13:25:13'),
(982, 0, '<b></b> Edited a record in <b>Company Management</b> with ID = 1', 'Y', '2016-11-09 13:25:19'),
(983, 0, '<b></b> Edited a record in <b>Company Management</b> with ID = 1', 'Y', '2016-11-09 13:26:46'),
(984, 0, '<b></b> Edited a record in <b>Stylist Management</b> with ID = 5', 'Y', '2016-11-09 15:20:52'),
(985, 0, '<b></b> Edited a record in <b>Stylist Management</b> with ID = 5', 'Y', '2016-11-09 15:20:58'),
(986, 0, '<b></b> Edited a record in <b>Stylist Management</b> with ID = 5', 'Y', '2016-11-09 15:21:03'),
(987, 0, '<b></b> Edited a record in <b>Stylist Management</b> with ID = 5', 'Y', '2016-11-09 15:21:19'),
(988, 0, '<b></b> Edited a record in <b>Contents Management</b> with ID = 26', 'Y', '2016-11-09 16:15:03'),
(989, 0, '<b></b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2016-11-22 05:10:20'),
(990, 0, '<b></b> Edited a record in <b>Contents Management</b> with ID = 26', 'Y', '2016-11-22 05:10:32'),
(991, 0, '<b></b> Edited a record in <b>Banners Management</b> with ID = 25', 'Y', '2016-11-22 05:13:14'),
(992, 0, '<b></b> Edited a record in <b>Review Management</b> with ID = 31', 'Y', '2016-11-22 05:14:14'),
(993, 0, '<b></b> Edited a record in <b>Contents Management</b> with ID = 7', 'Y', '2016-12-07 17:51:18'),
(994, 0, '<b></b> Inserted a new record in <b>Contents Management</b> with ID = 33', 'Y', '2016-12-07 17:53:38'),
(995, 0, '<b></b> Inserted a new record in <b>Contents Management</b> with ID = 34', 'Y', '2016-12-07 18:04:29'),
(996, 0, '<b></b> Inserted a new record in <b>Contents Management</b> with ID = 35', 'Y', '2016-12-07 18:06:20'),
(997, 0, '<b></b> Inserted a new record in <b>Contents Management</b> with ID = 36', 'Y', '2016-12-07 18:11:05'),
(998, 0, '<b></b> Inserted a new record in <b>Contents Management</b> with ID = 37', 'Y', '2016-12-07 18:18:58'),
(999, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 54', 'Y', '2016-12-08 20:04:11'),
(1000, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 53', 'Y', '2016-12-08 20:04:11'),
(1001, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 33', 'Y', '2016-12-08 20:04:11'),
(1002, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 31', 'Y', '2016-12-08 20:04:11'),
(1003, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 30', 'Y', '2016-12-08 20:04:11'),
(1004, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 29', 'Y', '2016-12-08 20:04:11'),
(1005, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 28', 'Y', '2016-12-08 20:04:11'),
(1006, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 26', 'Y', '2016-12-08 20:04:11'),
(1007, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 25', 'Y', '2016-12-08 20:04:11'),
(1008, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 24', 'Y', '2016-12-08 20:04:11'),
(1009, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 23', 'Y', '2016-12-08 20:04:11'),
(1010, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 22', 'Y', '2016-12-08 20:04:11'),
(1011, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 21', 'Y', '2016-12-08 20:04:11'),
(1012, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 20', 'Y', '2016-12-08 20:04:11'),
(1013, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 19', 'Y', '2016-12-08 20:04:11'),
(1014, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 18', 'Y', '2016-12-08 20:04:11'),
(1015, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 15', 'Y', '2016-12-08 20:04:11'),
(1016, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 17', 'Y', '2016-12-08 20:04:11'),
(1017, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 16', 'Y', '2016-12-08 20:04:11'),
(1018, 0, '<b></b> Inserted a new record in <b>Models Management</b> with ID = 57', 'Y', '2016-12-09 14:58:34'),
(1019, 0, '<b></b> Edited a record in <b>Models Management</b> with ID = 57', 'Y', '2016-12-09 15:04:56'),
(1020, 0, '<b></b> Edited a record in <b>Models Management</b> with ID = 57', 'Y', '2016-12-09 15:05:07'),
(1021, 0, '<b></b> Edited a record in <b>Models Management</b> with ID = 57', 'Y', '2016-12-09 16:28:06'),
(1022, 0, '<b></b> Delete a record in <b>Models Management</b> with ID = 56', 'Y', '2016-12-09 16:28:18'),
(1023, 0, '<b></b> Edited a record in <b>Hostess Management</b> with ID = 57', 'Y', '2016-12-09 17:18:49'),
(1024, 0, '<b></b> Edited a record in <b>Hostess Management</b> with ID = 57', 'Y', '2016-12-09 17:20:15'),
(1025, 0, '<b></b> Unpublish a record in <b>Hostess Management</b> with ID = 57', 'Y', '2016-12-09 17:24:38'),
(1026, 0, '<b></b> Edited a record in <b>Hostess Management</b> with ID = 57', 'Y', '2016-12-09 17:24:50'),
(1027, 0, '<b></b> Edited a record in <b>Hostess Management</b> with ID = 57', 'Y', '2016-12-09 17:24:54'),
(1028, 0, '<b></b> Edited a record in <b>Promoter Management</b> with ID = 57', 'Y', '2016-12-09 18:34:18'),
(1029, 0, '<b></b> Edited a record in <b>Promoter Management</b> with ID = 57', 'Y', '2016-12-09 18:34:24'),
(1030, 0, '<b></b> Edited a record in <b>Promoter Management</b> with ID = 57', 'Y', '2016-12-09 18:34:30'),
(1031, 0, '<b></b> Edited a record in <b>Promoter Management</b> with ID = 57', 'Y', '2016-12-09 18:34:41'),
(1032, 0, '<b></b> Inserted a new record in <b>Promoter Management</b> with ID = 58', 'Y', '2016-12-09 18:36:47'),
(1033, 0, '<b></b> Delete a record in <b>Promoter Management</b> with ID = 58', 'Y', '2016-12-09 18:37:03'),
(1034, 0, '<b></b> Edited a record in <b>Stylist Management</b> with ID = 1', 'Y', '2016-12-09 19:15:07'),
(1035, 0, '<b></b> Inserted a new record in <b>Stylist Management</b> with ID = 3', 'Y', '2016-12-09 19:19:23'),
(1036, 0, '<b></b> Edited a record in <b>Stylist Management</b> with ID = 3', 'Y', '2016-12-09 19:20:08'),
(1037, 0, '<b></b> Delete a record in <b>Stylist Management</b> with ID = 3', 'Y', '2016-12-09 19:20:12'),
(1038, 0, '<b></b> Inserted a new record in <b>Photographers Management</b> with ID = 58', 'Y', '2016-12-09 19:43:35'),
(1039, 0, '<b></b> Edited a record in <b>Photographers Management</b> with ID = 58', 'Y', '2016-12-09 19:45:15'),
(1040, 0, '<b></b> Delete a record in <b>Photographers Management</b> with ID = 57', 'Y', '2016-12-09 19:45:30'),
(1041, 0, '<b></b> Delete a record in <b>Entertainers Management</b> with ID = 58', 'Y', '2016-12-09 20:00:40'),
(1042, 0, '<b></b> Inserted a new record in <b>Entertainers Management</b> with ID = 59', 'Y', '2016-12-09 20:01:19'),
(1043, 0, '<b></b> Edited a record in <b>Banners Management</b> with ID = 25', 'Y', '2016-12-09 20:04:45'),
(1044, 0, '<b></b> Edited a record in <b>Banners Management</b> with ID = 25', 'Y', '2016-12-09 20:05:32'),
(1045, 0, '<b></b> Edited a record in <b>Client Management</b> with ID = 5', 'Y', '2016-12-09 20:07:18'),
(1046, 0, '<b></b> Edited a record in <b>Event Updates</b> with ID = 31', 'Y', '2016-12-10 08:41:29'),
(1047, 0, '<b></b> Edited a record in <b>Event Updates</b> with ID = 31', 'Y', '2016-12-10 13:51:57'),
(1048, 0, '<b></b> Edited a record in <b>Event Updates</b> with ID = 31', 'Y', '2016-12-10 13:52:10'),
(1049, 0, '<b></b> Inserted a new record in <b>Event Updates</b> with ID = 32', 'Y', '2016-12-10 13:53:33'),
(1050, 0, '<b></b> Edited a record in <b>Event Updates</b> with ID = 32', 'Y', '2016-12-10 13:55:30'),
(1051, 0, '<b></b> Edited a record in <b>Event Updates</b> with ID = 32', 'Y', '2016-12-10 13:55:33'),
(1052, 0, '<b></b> Edited a record in <b>Event Updates</b> with ID = 31', 'Y', '2016-12-10 13:55:45'),
(1053, 0, '<b></b> Edited a record in <b>Event Updates</b> with ID = 31', 'Y', '2016-12-10 13:55:49'),
(1054, 0, '<b></b> Inserted a new record in <b>Event Updates</b> with ID = 33', 'Y', '2016-12-10 13:56:03'),
(1055, 0, '<b></b> Delete a record in <b>Event Updates</b> with ID = 33', 'Y', '2016-12-10 13:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_modules`
--

CREATE TABLE `tbl_admin_modules` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `module_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `folder` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `icon` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `sub_menu` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `thumbnail_cropping` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `thumb_width` int(11) NOT NULL DEFAULT '120',
  `thumb_height` int(11) NOT NULL DEFAULT '90',
  `image_resize` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `image_cropping` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `image_width` int(11) NOT NULL DEFAULT '640',
  `image_height` int(11) NOT NULL DEFAULT '480',
  `is_watermark` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `is_active` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_admin_modules`
--

INSERT INTO `tbl_admin_modules` (`id`, `orderby`, `module_name`, `folder`, `description`, `icon`, `sub_menu`, `thumbnail_cropping`, `thumb_width`, `thumb_height`, `image_resize`, `image_cropping`, `image_width`, `image_height`, `is_watermark`, `is_active`, `added_date`) VALUES
(1, 1, 'Website Settings', 'settings_management', '', 'settings.png', 'N', 'Y', 0, 0, 'N', 'N', 2, 0, 'N', 'Y', '2012-12-12 12:12:00'),
(2, 2, 'Contents Management', 'contents_management', '', 'contents.png', 'N', 'N', 94, 92, 'N', 'N', 94, 92, 'N', 'Y', '2012-12-12 12:12:00'),
(20, 4, 'Stylist Management', 'stylist_management', '', 'icons_stylist_management', 'Y', 'Y', 239, 306, 'N', 'N', 640, 480, 'N', 'Y', '0000-00-00 00:00:00'),
(4, 4, 'Models Management', 'models_management', '', '', 'Y', 'Y', 254, 361, 'Y', 'N', 328, 464, 'N', 'N', '2014-05-08 02:00:00'),
(14, 4, 'Media Management', 'media_management', '', 'icons_media_management', 'Y', 'Y', 239, 306, 'N', 'N', 640, 480, 'N', 'Y', '0000-00-00 00:00:00'),
(15, 4, 'Promoter Management', 'promoter_management', '', 'icons_company_management', 'Y', 'Y', 239, 306, 'N', 'N', 640, 480, 'N', 'Y', '0000-00-00 00:00:00'),
(16, 4, 'Language Management', 'language_management', '', 'icons_language_management', 'Y', 'Y', 239, 306, 'N', 'N', 640, 480, 'N', 'Y', '0000-00-00 00:00:00'),
(17, 4, 'Banners Management', 'banners_management', '', 'icons_banners_management', 'Y', 'Y', 450, 200, 'N', 'N', 1920, 685, 'N', 'Y', '0000-00-00 00:00:00'),
(18, 3, 'Client Management', 'client_management', '', '', 'Y', 'Y', 239, 306, 'Y', 'Y', 337, 431, 'N', 'Y', '2012-12-12 12:12:00'),
(19, 3, 'Event Updates', 'review_management', '', '', 'Y', 'Y', 150, 150, 'Y', 'Y', 150, 150, 'N', 'Y', '2012-12-12 12:12:00'),
(21, 4, 'Hostess Management', 'hostess_management', '', '', 'Y', 'Y', 254, 361, 'Y', 'N', 328, 464, 'N', 'N', '2014-05-08 02:00:00'),
(22, 4, 'Photographers Management', 'photographers_management', '', 'icons_photographers_management', 'Y', 'Y', 239, 306, 'N', 'N', 640, 480, 'N', 'Y', '0000-00-00 00:00:00'),
(23, 4, 'Entertainers Management', 'entertainers_management', '', 'icons_entertainers_management', 'Y', 'Y', 239, 306, 'N', 'N', 640, 480, 'N', 'Y', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_rights`
--

CREATE TABLE `tbl_admin_rights` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_settings`
--

CREATE TABLE `tbl_admin_settings` (
  `id` int(11) NOT NULL,
  `website_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `meta_keywords` text CHARACTER SET utf8 NOT NULL,
  `meta_description` text CHARACTER SET utf8 NOT NULL,
  `editor` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `thumb_width` int(11) NOT NULL,
  `thumb_height` int(11) NOT NULL,
  `facebook` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `twitter` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `linkedin` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `youtube` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `googleplus` varchar(255) CHARACTER SET utf8 NOT NULL,
  `instagram` varchar(255) CHARACTER SET utf8 NOT NULL,
  `blogger` varchar(255) CHARACTER SET utf8 NOT NULL,
  `skype` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `vertical_alignment` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT 'bottom',
  `horizontal_alignment` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT 'right',
  `watermark_padding` int(20) NOT NULL,
  `watermark_image` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `paypal_id` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `order_form` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `sup_email` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `cn_phone` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `cn_mob` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `cn_fax` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `cn_pbno` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `cn_address_en` text COLLATE latin1_general_ci,
  `cn_address_ar` text COLLATE latin1_general_ci,
  `cn_address_fr` text COLLATE latin1_general_ci,
  `gmap_iframe` text COLLATE latin1_general_ci,
  `creg_email` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `mreg_email` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `is_active` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_admin_settings`
--

INSERT INTO `tbl_admin_settings` (`id`, `website_title`, `meta_keywords`, `meta_description`, `editor`, `thumb_width`, `thumb_height`, `facebook`, `twitter`, `linkedin`, `youtube`, `googleplus`, `instagram`, `blogger`, `skype`, `vertical_alignment`, `horizontal_alignment`, `watermark_padding`, `watermark_image`, `paypal_id`, `order_form`, `sup_email`, `cn_phone`, `cn_mob`, `cn_fax`, `cn_pbno`, `cn_address_en`, `cn_address_ar`, `cn_address_fr`, `gmap_iframe`, `creg_email`, `mreg_email`, `is_active`, `added_date`) VALUES
(1, 'Avenir Event Management, UAE', '0', '0', '0', 0, 0, 'https://www.facebook.com/AvenirDubai?pnref=lhc', 'https://twitter.com/AvenirDubai', 'https://www.linkedin.com/profile/view?id=AAkAABWm8P8BK7OLSttXVbW1ve6Ehww8dVVsIvg&authType=NAME_SEARCH&authToken=oZkS&locale=en_US&trk=tyah&trkInfo=clickedVertical:mynetwork,clickedEntityId:363262207,authType:NAME_SEARCH,idx:1-1-1,tarId:1444029942296,tas:a', '0', '0', 'https://instagram.com/avenir.dubai/', '0', 'avenir.events', '0', '0', 0, '', '0', 'OF_94f2418573.pdf', 'info@avenirevents.com', '+971 4 2566683', '0', '+971 4 2383668', '0', 'Office 108/45,\n1st Floor, Acico Business Tower, Sheikh Rashid Road,\nDubai, United Arab Emirates', '0', '0', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.3816936424864!2d55.33652545!3d25.2577424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5ce09d4580dd:0x74bc22958ce211fe!2sACICO+Business+Park+-+Dubai!5e0!3m2!1sen!2sae!4v1444056718915', '0', '0', 'Y', '2011-03-15 19:17:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_themes`
--

CREATE TABLE `tbl_admin_themes` (
  `id` int(11) NOT NULL,
  `theme_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `top_image` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `top_bar_color` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `border_color` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `menuBg` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `menuBorder` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `heading_color` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `panel_bg` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `is_selected` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `is_active` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_admin_themes`
--

INSERT INTO `tbl_admin_themes` (`id`, `theme_name`, `top_image`, `top_bar_color`, `border_color`, `menuBg`, `menuBorder`, `heading_color`, `panel_bg`, `is_selected`, `is_active`, `added_date`) VALUES
(1, 'Black New', 'top_bg.jpg', '#066DA1', '#757575', '#F4F4F4', '#066DA1', '#276295', '#000000', 'Y', 'Y', '2008-12-02 10:38:53'),
(2, 'Blue', 'top_bar_bg_blue.jpg', '#CE4801', '#D6DEFE', '#CFE7FC', '#004F99', '#004F99', '#004F99', 'N', 'N', '2009-01-07 05:33:36'),
(3, 'Newq', 'top_bar_bg_green.jpg', '#2C3E00', '#D6DEFE', '#E8F5C5', '#2C3E00', '#2C3E00', '#2C3E00', 'N', 'N', '2009-01-07 15:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_users`
--

CREATE TABLE `tbl_admin_users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` bigint(11) NOT NULL,
  `image1` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `user_type` enum('A','SA') COLLATE latin1_general_ci NOT NULL DEFAULT 'SA',
  `username` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `is_block` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `is_active` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `is_default` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `is_prog` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_admin_users`
--

INSERT INTO `tbl_admin_users` (`id`, `full_name`, `email`, `phone`, `image1`, `user_type`, `username`, `password`, `is_block`, `is_active`, `is_default`, `is_prog`, `last_login`, `added_date`) VALUES
(1, 'Super Administrator', 'info@sitename.com', 1234567, '', 'A', 'admin', 'e80356a8eaa6f603595ba6414d78498c08be3e9c', 'N', 'Y', 'Y', 'N', '0000-00-00 00:00:00', '2013-01-01 12:00:00'),
(2, 'Shams Karamat', 'mail2shams@gmail.com', 971557200725, '', 'A', 'SAdministrator', 'ee62e10086a212b786f9730d9f426c9988a31874', 'N', 'Y', 'N', 'Y', '0000-00-00 00:00:00', '2013-01-01 12:00:00'),
(3, 'aveniradmin', 'info@avenirevents.com', 525723556, '', 'A', 'aveniradmin', 'aveniradmin', 'N', 'Y', 'N', 'N', '0000-00-00 00:00:00', '2015-10-04 06:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banners`
--

CREATE TABLE `tbl_banners` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_fr` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_banners`
--

INSERT INTO `tbl_banners` (`id`, `orderby`, `title_en`, `title_ar`, `title_fr`, `image1`, `is_active`, `added_date`) VALUES
(25, 1, 'stes\ntnstestns\ntest', '', '', 'IMG-736fd9eb47ca240.jpg', 'Y', '2016-11-05 12:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branches`
--

CREATE TABLE `tbl_branches` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `location_en` varchar(255) NOT NULL,
  `location_ar` varchar(255) NOT NULL,
  `address_en` text,
  `address_ar` text,
  `gmap` varchar(300) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_branches`
--

INSERT INTO `tbl_branches` (`id`, `orderby`, `location_en`, `location_ar`, `address_en`, `address_ar`, `gmap`, `contact_no`, `album_id`, `is_active`, `added_date`) VALUES
(7, 1, 'DUBAI AL QUOZ', 'DUBAI AL QUOZ', 'The Dubai Mall, 3,rnMohammed Bin Rashid BoulevardrnG Floor – Downtown Dubai, city Dubai', 'The Dubai Mall, 3,rnMohammed Bin Rashid BoulevardrnG Floor – Downtown Dubai, city Dubai', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d902.5402119576039!2d55.27930245404062!3d25.197797595911553!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f4282829df7df:0x7487a1ae3dbe0907!2sAhjar!5e0!3m2!1sen!2sae!4v1432116114144', '971 50 668988236', 13, 'Y', '2015-05-20 12:03:28'),
(8, 2, 'DUBAI DUBAI MALL', 'DUBAI DUBAI MALL', 'The Dubai Mall, 3,rnMohammed Bin Rashid BoulevardrnG Floor – Downtown Dubai, city Dubai', 'The Dubai Mall, 3,rnMohammed Bin Rashid BoulevardrnG Floor – Downtown Dubai, city Dubai', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d902.5402119576039!2d55.27930245404062!3d25.197797595911553!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f4282829df7df:0x7487a1ae3dbe0907!2sAhjar!5e0!3m2!1sen!2sae!4v1432116114144', '971 50 66898836', 12, 'Y', '2015-05-20 16:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catalog`
--

CREATE TABLE `tbl_catalog` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_catalog`
--

INSERT INTO `tbl_catalog` (`id`, `orderby`, `title`, `url`, `is_active`, `added_date`) VALUES
(3, 1, '2015 2014 Catalogss', 'FILEe9b175923f340f6.pdf', 'Y', '2015-05-23 08:42:04'),
(4, 2, '2015 2014 Catalog2', 'FILEc8e7920a3f64637.pdf', 'Y', '2015-05-23 10:36:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `category_name_en` varchar(255) NOT NULL,
  `category_name_ar` varchar(255) NOT NULL,
  `category_name_fr` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `orderby`, `parent_id`, `category_name_en`, `category_name_ar`, `category_name_fr`, `description`, `image1`, `is_active`, `added_date`) VALUES
(1, 1, 0, 'Hotels', 'الفنادق', 'hôtels', '', '', 'Y', '2014-10-19 16:25:49'),
(2, 2, 0, 'Showrooms', 'معارض', 'showrooms', '', '', 'Y', '2014-10-19 16:27:02'),
(3, 3, 0, 'Residential / Villas', 'سكني / فلل', 'Résidentiel / Villas', '', '', 'Y', '2014-10-19 16:27:21'),
(4, 4, 0, 'Offices', 'مكاتب', 'bureaux', '', '', 'Y', '2014-10-19 16:27:38'),
(5, 5, 0, 'SPA', 'SPA', 'SPA', '', '', 'Y', '2014-10-19 16:27:59'),
(6, 6, 0, 'Restaurants', 'مطاعم', 'Restauration', '', '', 'Y', '2014-11-02 12:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE `tbl_clients` (
  `id` int(11) NOT NULL,
  `heading_en` varchar(255) NOT NULL,
  `heading_ar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `orderby` int(11) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`id`, `heading_en`, `heading_ar`, `link`, `image1`, `orderby`, `is_active`, `added_date`, `updated_on`) VALUES
(5, 'tests', '', '', 'IMG-e81576416bab44c.png', 1, 'Y', '2016-11-05 16:01:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `image1` varchar(300) DEFAULT NULL,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `height` varchar(30) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `bust` varchar(30) NOT NULL,
  `hip` varchar(255) DEFAULT NULL,
  `waist` varchar(30) NOT NULL,
  `hair_long` varchar(250) NOT NULL,
  `eye_color` varchar(250) NOT NULL,
  `dress_size` varchar(250) NOT NULL,
  `shoe_size` varchar(250) NOT NULL,
  `pant_size` varchar(255) DEFAULT NULL,
  `model_region` varchar(255) DEFAULT NULL,
  `model_gender` varchar(255) DEFAULT NULL,
  `model_info` varchar(255) DEFAULT NULL,
  `model_exp` varchar(255) DEFAULT NULL,
  `model_pref` varchar(255) DEFAULT NULL,
  `model_marrital_status` varchar(20) DEFAULT NULL,
  `model_age` varchar(20) DEFAULT NULL,
  `cv_path` varchar(250) DEFAULT NULL,
  `language` varchar(200) DEFAULT NULL,
  `description` text,
  `is_active` enum('Y','N') CHARACTER SET utf8 NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`id`, `orderby`, `code`, `image1`, `name`, `contact_no`, `email`, `city`, `country`, `height`, `weight`, `bust`, `hip`, `waist`, `hair_long`, `eye_color`, `dress_size`, `shoe_size`, `pant_size`, `model_region`, `model_gender`, `model_info`, `model_exp`, `model_pref`, `model_marrital_status`, `model_age`, `cv_path`, `language`, `description`, `is_active`, `added_date`) VALUES
(57, 1, '', '', 'Aneesh Ponnappan', '8589055080', 'aneesh.anniyan@gmail.com', 'Kollam', 'AE', '180', '80', '29', '30', '20', '120', 'Blue', 'XL', '42', 'L', 'arabic', 'male', 'new_face', '3years', 'a:4:{i:0;s:10:"automobile";i:1;s:11:"exhibitions";i:2;s:5:"malls";i:3;s:11:"supermarket";}', 'married', '30_40', 'DOC-b787edb93f948a4.doc', NULL, 'hi gud', 'N', '2016-12-09 07:42:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_images`
--

CREATE TABLE `tbl_company_images` (
  `company_fk` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `added_date` datetime DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company_images`
--

INSERT INTO `tbl_company_images` (`company_fk`, `image`, `added_date`, `id`) VALUES
(1, 'IMG-2e0bf574fcf4e3e', '2016-11-09 01:13:47', 9),
(1, 'IMG-ddc00b9b81cb336', '2016-11-09 01:13:47', 10),
(57, 'IMG-dcca2df1fdae34d.jpg', '2016-12-09 07:42:56', 11),
(58, 'IMG-00b6c791632e99a', '2016-12-09 06:36:47', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_language`
--

CREATE TABLE `tbl_company_language` (
  `company_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company_language`
--

INSERT INTO `tbl_company_language` (`company_id`, `language_id`) VALUES
(4, 28),
(4, 29),
(4, 30),
(5, 28),
(5, 29),
(5, 30),
(6, 29),
(6, 30),
(6, 32),
(7, 28),
(7, 29),
(7, 30),
(8, 28),
(8, 29),
(8, 30),
(1, 28),
(1, 29),
(1, 30),
(1, 32),
(1, 33),
(57, 33),
(57, 34),
(58, 28),
(58, 30),
(58, 33),
(58, 34);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contents`
--

CREATE TABLE `tbl_contents` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `heading_en` varchar(255) CHARACTER SET utf8 NOT NULL,
  `heading_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `heading_fr` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_sm_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `description_sm_ar` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `description_sm_fr` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `description_en` text CHARACTER SET utf8 NOT NULL,
  `description_ar` text CHARACTER SET utf8 NOT NULL,
  `description_fr` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `image1` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `comments` text CHARACTER SET utf8 NOT NULL,
  `website_title` text CHARACTER SET utf8 NOT NULL,
  `meta_keywords` text CHARACTER SET utf8 NOT NULL,
  `meta_description` text CHARACTER SET utf8 NOT NULL,
  `can_delete` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `is_active` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_contents`
--

INSERT INTO `tbl_contents` (`id`, `orderby`, `parent_id`, `heading_en`, `heading_ar`, `heading_fr`, `description_sm_en`, `description_sm_ar`, `description_sm_fr`, `description_en`, `description_ar`, `description_fr`, `image1`, `comments`, `website_title`, `meta_keywords`, `meta_description`, `can_delete`, `is_active`, `added_date`) VALUES
(2, 0, 0, 'About Section', '', NULL, NULL, NULL, NULL, '', '', NULL, '', '', '', '', '', 'N', 'Y', '2014-09-15 01:00:00'),
(5, 0, 0, 'Spare Slot', '', NULL, NULL, NULL, NULL, '', '', NULL, '', '', '', '', '', 'N', 'N', '2014-09-15 01:00:00'),
(7, 1, 2, 'About us', '', '', 'WHO WE ARES', '', '', '<div class=\\"sub-page-banner\\">\n<div class=\\"sub-page-title-block\\">\n<div class=\\"sub-page-quote\\">\n<p>We are your choice because we provide a quantity of the best quality. Services that we give will reach your audience, as you have been targeting. You will ask what are we specialized in? Well; our answer will be everything! Any of your ideas will become a reality in our hands. SSS</p>\n</div>\n</div>\n</div>', '', '', '', '', 'About Us', 'About Us', 'About Us', 'N', 'Y', '2014-09-22 13:24:52'),
(32, 0, 0, 'Services', '', NULL, NULL, NULL, NULL, '', '', NULL, '', '', '', '', '', 'N', 'Y', '2014-09-15 01:00:00'),
(33, 16, 32, 'About our Auction services', '', '', 'Auction', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In malesuada elementum ultricies. Duis convallis luctus lacus. Praesent maximus velit vitae diam luctus ultrices. Quisque dapibus facilisis dictum. Maecenas venenatis elementum velit quis imperdiet. Ut euismod metus eget molestie luctus. Nulla facilisi. Integer mollis metus vel ipsum cursus suscipit. Ut sed elit arcu. Etiam feugiat feugiat turpis, elementum accumsan erat. Vivamus eu auctor tortor, id sagittis nibh.</p>\n<p>Ut finibus imperdiet nulla, sit amet tempor velit. Aliquam dignissim, ante in ultricies condimentum, nulla nisi mattis tortor, non ultricies mauris nisi non arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam augue metus, sodales et tellus in, rutrum dapibus ante. Pellentesque eget iaculis sem. Nullam vel velit a dolor molestie condimentum. Fusce dapibus sagittis molestie.</p>', '', '', '', '', 'Auction', 'Auction', 'Auction', 'N', 'Y', '2016-12-07 17:53:38'),
(26, 15, 2, 'Staff Quality', 'Staff Quality', '', 'We guarantee a high quality staff thanks to a network of experienced supervisor and tour leaders, able to coordinate and monitor all our activities in the field.', 'We guarantee a high quality staff thanks to a network of experienced supervisor and tour leaders, able to coordinate and monitor all our activities in the field.ss', '', '<p><span>We guarantee a high quality staff thanks to a network of experienced supervisor and tour leaders, able to coordinate and monitor all our activities in the field.</span></p>', '<p><span>We guarantee a high quality staff thanks to a network of experienced supervisor and tour leaders, able to coordinate and monitor all our activities in the field.</span></p>', '', 'IMG-815d2a2144d919c.png', '', 'Staff Quality', 'Staff Quality', 'Staff Quality', 'N', 'Y', '2014-09-22 13:24:52'),
(13, 6, 3, 'Contact us', 'Contact us', NULL, NULL, NULL, NULL, '<p><span><strong>Main Office:</strong>&nbsp;<br />Oxygen Medical Center&nbsp;</span><br /><span>Near Safeer Mall,&nbsp;</span><br /><span>Al Ittihad Road&nbsp;</span><br /><span>Sharjah, UAE</span></p>', '<p><strong>Rona Rabah Dental Clinic</strong><br /><span>1101 Michigan Avenue&nbsp;</span><br /><span>Logansport, IN 46947</span></p>', NULL, '', '', 'Contact us', 'Contact us', 'Contact us', 'N', 'Y', '2014-10-20 13:19:10'),
(15, 8, 3, 'Sharjah Address', '', NULL, NULL, NULL, NULL, '<p><span>Oxygen Medical Center&nbsp;</span><br /><span>Near Safeer Mall,&nbsp;</span><br /><span>Al Ittihad Road&nbsp;</span><br /><span>Sharjah, UAE</span></p>', '<p><span>Oxygen Medical Center&nbsp;</span><br /><span>Near Safeer Mall,&nbsp;</span><br /><span>Al Ittihad Road&nbsp;</span><br /><span>Sharjah, UAE</span></p>', NULL, '', '', 'None', 'None', 'None', 'N', 'Y', '2014-11-02 00:07:04'),
(22, 8, 3, 'Ajman Address', '', NULL, NULL, NULL, NULL, '<p>Oxygen Medical Center<br />Near Ajman bank Head Office<br />Sheikh Calipha Bin Zayed St.<br />Ajman, UAE<br /><br /></p>', '<p>Oxygen Medical Center<br />Near Ajman bank Head Office<br />Sheikh Calipha Bin Zayed St.<br />Ajman, UAE</p>', NULL, '', '', 'None', 'None', 'None', 'N', 'Y', '2014-11-02 00:07:04'),
(27, 10, 2, 'MULTI-YEAR EXPERIENCE', 'MULTI-YEAR EXPERIENCE', 'MULTI-YEAR EXPERIENCE', 'MULTI-YEAR EXPERIENCE\n\n', 'MULTI-YEAR EXPERIENCE\n\n', 'MULTI-YEAR EXPERIENCE\n\n', '<p><span>Many years of experience gained through many successful collaborations with national and international leading brands and with the most prestigious advertising agencies.</span></p>', '<p><span>Many years of experience gained through many successful collaborations with national and international leading brands and with the most prestigious advertising agencies.</span></p>', '<p><span>Many years of experience gained through many successful collaborations with national and international leading brands and with the most prestigious advertising agencies.</span></p>', 'IMG-0513871ca3190b6.png', '', 'MULTI-YEAR EXPERIENCE\n\n', 'MULTI-YEAR EXPERIENCE\n\n', 'MULTI-YEAR EXPERIENCE\n\n', 'Y', 'Y', '2015-06-27 10:00:53'),
(30, 13, 2, 'INSURANCE COVERAGE', 'INSURANCE COVERAGE', 'INSURANCE COVERAGE', 'INSURANCE COVERAGE', 'INSURANCE COVERAGE', 'INSURANCE COVERAGE', '<p><span>The entire staff of Avenir is regularly contracted according to applicable regulations and can count on an insurance coverage for any service performed</span></p>', '<p><span>The entire staff of Avenir is regularly contracted according to applicable regulations and can count on an insurance coverage for any service performed</span></p>', '<p><span>The entire staff of Avenir is regularly contracted according to applicable regulations and can count on an insurance coverage for any service performed</span></p>', 'IMG-5b19e07c9d720c3.png', '', 'INSURANCE COVERAGE', 'INSURANCE COVERAGE', 'INSURANCE COVERAGE', 'Y', 'Y', '2016-11-05 14:07:05'),
(31, 14, 2, 'CUSTOMIZATION', 'CUSTOMIZATION', 'CUSTOMIZATION', 'CUSTOMIZATION', 'CUSTOMIZATION', 'CUSTOMIZATION', '<p><span>Thanks to our creative department and the direct cooperation with fashion producers, we can design and create custom outfits for every need.</span></p>', '<p><span>Thanks to our creative department and the direct cooperation with fashion producers, we can design and create custom outfits for every need.</span></p>', '<p><span>Thanks to our creative department and the direct cooperation with fashion producers, we can design and create custom outfits for every need.</span></p>', 'IMG-a0155098d6b190f.png', '', 'CUSTOMIZATION', 'CUSTOMIZATION', 'CUSTOMIZATION', 'Y', 'Y', '2016-11-05 14:08:10'),
(28, 11, 2, 'Creativity', 'Creativity', 'Creativity', 'We include many other integrated services available to our clients as the production of events, brand tours and corporate activities below the line.', 'We include many other integrated services available to our clients as the production of events, brand tours and corporate activities below the line.', 'We include many other integrated services available to our clients as the production of events, brand tours and corporate activities below the line.', '<p><span>We include many other integrated services available to our clients as the production of events, brand tours and corporate activities below the line.</span></p>', '<p><span>We include many other integrated services available to our clients as the production of events, brand tours and corporate activities below the line.</span></p>', '<p><span>We include many other integrated services available to our clients as the production of events, brand tours and corporate activities below the line.</span></p>', 'IMG-1f9e16fdc9b0255.png', '', 'Creativity', 'Creativity', 'Creativity', 'Y', 'Y', '2015-09-15 14:04:58'),
(29, 12, 2, 'NATIONAL NETWORK', 'NATIONAL NETWORK', 'NATIONAL NETWORK', 'NATIONAL NETWORK\n\n', 'NATIONAL NETWORK\n\n', 'NATIONAL NETWORK\n\n', '<p><span>We guarantee full coverage thanks to a multimedia database allowing us to reach in few seconds hundreds of profiles, according to our clients\\'' parameters.</span></p>', '<p><span>We guarantee full coverage thanks to a multimedia database allowing us to reach in few seconds hundreds of profiles, according to our clients\\'' parameters.</span></p>', '<p><span>We guarantee full coverage thanks to a multimedia database allowing us to reach in few seconds hundreds of profiles, according to our clients\\'' parameters.</span></p>', 'IMG-1c1dc06bdc34c54.png', '', 'NATIONAL NETWORK\n\n', 'NATIONAL NETWORK\n\n', 'NATIONAL NETWORK\n\n', 'Y', 'Y', '2016-11-05 14:06:22'),
(34, 17, 32, 'About our Conference & Seminar service', '', '', 'About our Conference & Seminar service', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In malesuada elementum ultricies. Duis convallis luctus lacus. Praesent maximus velit vitae diam luctus ultrices. Quisque dapibus facilisis dictum. Maecenas venenatis elementum velit quis imperdiet. Ut euismod metus eget molestie luctus. Nulla facilisi. Integer mollis metus vel ipsum cursus suscipit. Ut sed elit arcu. Etiam feugiat feugiat turpis, elementum accumsan erat. Vivamus eu auctor tortor, id sagittis nibh.</p>\n<p>Ut finibus imperdiet nulla, sit amet tempor velit. Aliquam dignissim, ante in ultricies condimentum, nulla nisi mattis tortor, non ultricies mauris nisi non arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam augue metus, sodales et tellus in, rutrum dapibus ante. Pellentesque eget iaculis sem. Nullam vel velit a dolor molestie condimentum. Fusce dapibus sagittis molestie.</p>', '', '', '', '', 'Conference', 'Conference', 'Conference', 'N', 'Y', '2016-12-07 18:04:29'),
(35, 18, 32, 'About our Exhibition services', '', '', 'About our Exhibition services', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In malesuada elementum ultricies. Duis convallis luctus lacus. Praesent maximus velit vitae diam luctus ultrices. Quisque dapibus facilisis dictum. Maecenas venenatis elementum velit quis imperdiet. Ut euismod metus eget molestie luctus. Nulla facilisi. Integer mollis metus vel ipsum cursus suscipit. Ut sed elit arcu. Etiam feugiat feugiat turpis, elementum accumsan erat. Vivamus eu auctor tortor, id sagittis nibh.</p>\n<p>Ut finibus imperdiet nulla, sit amet tempor velit. Aliquam dignissim, ante in ultricies condimentum, nulla nisi mattis tortor, non ultricies mauris nisi non arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam augue metus, sodales et tellus in, rutrum dapibus ante. Pellentesque eget iaculis sem. Nullam vel velit a dolor molestie condimentum. Fusce dapibus sagittis molestie.</p>', '', '', '', '', 'Exhibition services', 'Exhibition services', 'Exhibition services', 'N', 'Y', '2016-12-07 18:06:20'),
(36, 19, 32, 'About our Party services', '', '', 'About our Party services', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In malesuada elementum ultricies. Duis convallis luctus lacus. Praesent maximus velit vitae diam luctus ultrices. Quisque dapibus facilisis dictum. Maecenas venenatis elementum velit quis imperdiet. Ut euismod metus eget molestie luctus. Nulla facilisi. Integer mollis metus vel ipsum cursus suscipit. Ut sed elit arcu. Etiam feugiat feugiat turpis, elementum accumsan erat. Vivamus eu auctor tortor, id sagittis nibh.</p>\n<p>Ut finibus imperdiet nulla, sit amet tempor velit. Aliquam dignissim, ante in ultricies condimentum, nulla nisi mattis tortor, non ultricies mauris nisi non arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam augue metus, sodales et tellus in, rutrum dapibus ante. Pellentesque eget iaculis sem. Nullam vel velit a dolor molestie condimentum. Fusce dapibus sagittis molestie.</p>', '', '', '', '', 'Party services', 'Party services', 'Party services', 'N', 'Y', '2016-12-07 18:11:05'),
(37, 20, 32, 'About our Casting services', '', '', 'Casting services', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In malesuada elementum ultricies. Duis convallis luctus lacus. Praesent maximus velit vitae diam luctus ultrices. Quisque dapibus facilisis dictum. Maecenas venenatis elementum velit quis imperdiet. Ut euismod metus eget molestie luctus. Nulla facilisi. Integer mollis metus vel ipsum cursus suscipit. Ut sed elit arcu. Etiam feugiat feugiat turpis, elementum accumsan erat. Vivamus eu auctor tortor, id sagittis nibh.</p>\n<p>Ut finibus imperdiet nulla, sit amet tempor velit. Aliquam dignissim, ante in ultricies condimentum, nulla nisi mattis tortor, non ultricies mauris nisi non arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam augue metus, sodales et tellus in, rutrum dapibus ante. Pellentesque eget iaculis sem. Nullam vel velit a dolor molestie condimentum. Fusce dapibus sagittis molestie.</p>', '', '', '', '', 'Casting services', 'Casting services', 'Casting services', 'N', 'Y', '2016-12-07 18:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `id` int(11) NOT NULL,
  `val` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `country_name_en` varchar(255) CHARACTER SET utf8 NOT NULL,
  `country_name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_active` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=246 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`id`, `val`, `country_name_en`, `country_name_ar`, `is_active`, `added_date`) VALUES
(1, 'AF', 'Afghanistan', 'أفغانستان', 'Y', '2011-11-19 10:16:36'),
(2, 'AL', 'Albania', '', 'Y', '2011-11-19 10:16:36'),
(3, 'AG', 'Algeria', '', 'Y', '2011-11-19 10:16:36'),
(4, 'AS', 'American Samoa', '', 'Y', '2011-11-19 10:16:36'),
(5, 'AD', 'Andorra', '', 'Y', '2011-11-19 10:16:36'),
(6, 'AO', 'Angola', '', 'Y', '2011-11-19 10:16:36'),
(7, 'AI', 'Anguilla', '', 'Y', '2011-11-19 10:16:36'),
(8, 'AQ', 'Antarctica', '', 'Y', '2011-11-19 10:16:36'),
(9, 'AB', 'Antigua and Barbuda', '', 'Y', '2011-11-19 10:16:36'),
(10, 'AR', 'Argentina', '', 'Y', '2011-11-19 10:16:36'),
(11, 'AM', 'Armenia', '', 'Y', '2011-11-19 10:16:36'),
(12, 'AW', 'Aruba', '', 'Y', '2011-11-19 10:16:36'),
(13, 'AU', 'Australia', '', 'Y', '2011-11-19 10:16:36'),
(14, 'AT', 'Austria', '', 'Y', '2011-11-19 10:16:36'),
(15, 'AZ', 'Azerbaidjan', '', 'Y', '2011-11-19 10:16:36'),
(16, 'BS', 'Bahamas', '', 'Y', '2011-11-19 10:16:36'),
(17, 'BH', 'Bahrain', 'البحرين', 'Y', '2011-11-19 10:16:36'),
(18, 'BD', 'Bangladesh', '', 'Y', '2011-11-19 10:16:36'),
(19, 'BB', 'Barbados', '', 'Y', '2011-11-19 10:16:36'),
(20, 'BY', 'Belarus', '', 'Y', '2011-11-19 10:16:36'),
(21, 'BE', 'Belgium', '', 'Y', '2011-11-19 10:16:36'),
(22, 'BZ', 'Belize', '', 'Y', '2011-11-19 10:16:36'),
(23, 'BJ', 'Benin', '', 'Y', '2011-11-19 10:16:36'),
(24, 'BM', 'Bermuda', '', 'Y', '2011-11-19 10:16:36'),
(25, 'BT', 'Bhutan', '', 'Y', '2011-11-19 10:16:36'),
(26, 'BO', 'Bolivia', '', 'Y', '2011-11-19 10:16:36'),
(27, 'BA', 'Bosnia-Herzegovina', '', 'Y', '2011-11-19 10:16:36'),
(28, 'BW', 'Botswana', '', 'Y', '2011-11-19 10:16:36'),
(29, 'BV', 'Bouvet Island', '', 'Y', '2011-11-19 10:16:36'),
(30, 'BR', 'Brazil', '', 'Y', '2011-11-19 10:16:36'),
(31, 'IO', 'British Indian Ocean Territory', '', 'Y', '2011-11-19 10:16:36'),
(32, 'BN', 'Brunei Darussalam', '', 'Y', '2011-11-19 10:16:36'),
(33, 'BG', 'Bulgaria', '', 'Y', '2011-11-19 10:16:36'),
(34, 'BF', 'Burkina Faso', '', 'Y', '2011-11-19 10:16:36'),
(35, 'BI', 'Burundi', '', 'Y', '2011-11-19 10:16:36'),
(36, 'KH', 'Cambodia', '', 'Y', '2011-11-19 10:16:36'),
(37, 'CM', 'Cameroon', '', 'Y', '2011-11-19 10:16:36'),
(38, 'CA', 'Canada', '', 'Y', '2011-11-19 10:16:36'),
(39, 'CV', 'Cape Verde', '', 'Y', '2011-11-19 10:16:36'),
(40, 'KY', 'Cayman Islands', '', 'Y', '2011-11-19 10:16:36'),
(41, 'CF', 'Central African Republic', '', 'Y', '2011-11-19 10:16:36'),
(42, 'TD', 'Chad', '', 'Y', '2011-11-19 10:16:36'),
(43, 'CL', 'Chile', '', 'Y', '2011-11-19 10:16:36'),
(44, 'CN', 'China', '', 'Y', '2011-11-19 10:16:36'),
(45, 'CX', 'Christmas Island', '', 'Y', '2011-11-19 10:16:36'),
(46, 'CC', 'Cocos (Keeling) Islands', '', 'Y', '2011-11-19 10:16:36'),
(47, 'CO', 'Colombia', '', 'Y', '2011-11-19 10:16:36'),
(48, 'KM', 'Comoros', '', 'Y', '2011-11-19 10:16:36'),
(49, 'CG', 'Congo', '', 'Y', '2011-11-19 10:16:36'),
(50, 'CK', 'Cook Islands', '', 'Y', '2011-11-19 10:16:36'),
(51, 'CR', 'Costa Rica', '', 'Y', '2011-11-19 10:16:36'),
(52, 'HR', 'Croatia', '', 'Y', '2011-11-19 10:16:36'),
(53, 'CU', 'Cuba', '', 'Y', '2011-11-19 10:16:36'),
(54, 'CY', 'Cyprus', '', 'Y', '2011-11-19 10:16:36'),
(55, 'CZ', 'Czech Republic', '', 'Y', '2011-11-19 10:16:36'),
(56, 'DK', 'Denmark', '', 'Y', '2011-11-19 10:16:36'),
(57, 'DJ', 'Djibouti', '', 'Y', '2011-11-19 10:16:36'),
(58, 'DM', 'Dominica', '', 'Y', '2011-11-19 10:16:36'),
(59, 'DO', 'Dominican Republic', '', 'Y', '2011-11-19 10:16:36'),
(60, 'TP', 'East Timor', '', 'Y', '2011-11-19 10:16:36'),
(61, 'EC', 'Ecuador', '', 'Y', '2011-11-19 10:16:36'),
(62, 'EG', 'Egypt', 'مصر', 'Y', '2011-11-19 10:16:36'),
(63, 'SV', 'El Salvador', '', 'Y', '2011-11-19 10:16:36'),
(64, 'GQ', 'Equatorial Guinea', '', 'Y', '2011-11-19 10:16:36'),
(65, 'ER', 'Eritrea', '', 'Y', '2011-11-19 10:16:36'),
(66, 'EE', 'Estonia', '', 'Y', '2011-11-19 10:16:36'),
(67, 'ET', 'Ethiopia', '', 'Y', '2011-11-19 10:16:36'),
(68, 'FK', 'Falkland Islands', '', 'Y', '2011-11-19 10:16:36'),
(69, 'FO', 'Faroe Islands', '', 'Y', '2011-11-19 10:16:36'),
(70, 'FJ', 'Fiji', '', 'Y', '2011-11-19 10:16:36'),
(71, 'FI', 'Finland', '', 'Y', '2011-11-19 10:16:36'),
(72, 'CS', 'Former Czechoslovakia', '', 'Y', '2011-11-19 10:16:36'),
(73, 'SU', 'Former USSR', '', 'Y', '2011-11-19 10:16:36'),
(74, 'FR', 'France', '', 'Y', '2011-11-19 10:16:36'),
(75, 'FX', 'France (European Territory)', '', 'Y', '2011-11-19 10:16:36'),
(76, 'GF', 'French Guyana', '', 'Y', '2011-11-19 10:16:36'),
(77, 'TF', 'French Southern Territories', '', 'Y', '2011-11-19 10:16:36'),
(78, 'GA', 'Gabon', '', 'Y', '2011-11-19 10:16:36'),
(79, 'GM', 'Gambia', '', 'Y', '2011-11-19 10:16:36'),
(80, 'GE', 'Georgia', '', 'Y', '2011-11-19 10:16:36'),
(81, 'DE', 'Germany', '', 'Y', '2011-11-19 10:16:36'),
(82, 'GH', 'Ghana', '', 'Y', '2011-11-19 10:16:36'),
(83, 'GI', 'Gibraltar', '', 'Y', '2011-11-19 10:16:36'),
(84, 'GB', 'Great Britain', '', 'Y', '2011-11-19 10:16:36'),
(85, 'GR', 'Greece', '', 'Y', '2011-11-19 10:16:36'),
(86, 'GL', 'Greenland', '', 'Y', '2011-11-19 10:16:36'),
(87, 'GD', 'Grenada', '', 'Y', '2011-11-19 10:16:36'),
(88, 'GP', 'Guadeloupe (French)', '', 'Y', '2011-11-19 10:16:36'),
(89, 'GU', 'Guam (USA)', '', 'Y', '2011-11-19 10:16:36'),
(90, 'GT', 'Guatemala', '', 'Y', '2011-11-19 10:16:36'),
(91, 'GN', 'Guinea', '', 'Y', '2011-11-19 10:16:36'),
(92, 'GW', 'Guinea Bissau', '', 'Y', '2011-11-19 10:16:36'),
(93, 'GY', 'Guyana', '', 'Y', '2011-11-19 10:16:36'),
(94, 'HT', 'Haiti', '', 'Y', '2011-11-19 10:16:36'),
(95, 'HM', 'Heard and McDonald Islands', '', 'Y', '2011-11-19 10:16:36'),
(96, 'HN', 'Honduras', '', 'Y', '2011-11-19 10:16:36'),
(97, 'HK', 'Hong Kong', '', 'Y', '2011-11-19 10:16:36'),
(98, 'HU', 'Hungary', '', 'Y', '2011-11-19 10:16:36'),
(99, 'IS', 'Iceland', '', 'Y', '2011-11-19 10:16:36'),
(100, 'IN', 'India', '', 'Y', '2011-11-19 10:16:36'),
(101, 'ID', 'Indonesia', '', 'Y', '2011-11-19 10:16:36'),
(102, 'INT', 'International', '', 'Y', '2011-11-19 10:16:36'),
(103, 'IR', 'Iran', '', 'Y', '2011-11-19 10:16:36'),
(104, 'IQ', 'Iraq', 'العراق', 'Y', '2011-11-19 10:16:36'),
(105, 'IE', 'Ireland', '', 'Y', '2011-11-19 10:16:36'),
(106, 'IL', 'Israel', '', 'Y', '2011-11-19 10:16:36'),
(107, 'IT', 'Italy', '', 'Y', '2011-11-19 10:16:36'),
(108, 'CI', 'Ivory Coast (Cote D&#39;Ivoire)', '', 'Y', '2011-11-19 10:16:36'),
(109, 'JM', 'Jamaica', '', 'Y', '2011-11-19 10:16:36'),
(110, 'JP', 'Japan', '', 'Y', '2011-11-19 10:16:36'),
(111, 'JO', 'Jordan', 'الأردن', 'Y', '2011-11-19 10:16:36'),
(112, 'KZ', 'Kazakhstan', '', 'Y', '2011-11-19 10:16:36'),
(113, 'KE', 'Kenya', '', 'Y', '2011-11-19 10:16:36'),
(114, 'KI', 'Kiribati', '', 'Y', '2011-11-19 10:16:36'),
(115, 'KW', 'Kuwait', 'الكويت', 'Y', '2011-11-19 10:16:36'),
(116, 'KG', 'Kyrgyzstan', '', 'Y', '2011-11-19 10:16:36'),
(117, 'LA', 'Laos', '', 'Y', '2011-11-19 10:16:36'),
(118, 'LV', 'Latvia', '', 'Y', '2011-11-19 10:16:36'),
(119, 'LB', 'Lebanon', 'لبنان', 'Y', '2011-11-19 10:16:36'),
(120, 'LS', 'Lesotho', '', 'Y', '2011-11-19 10:16:36'),
(121, 'LR', 'Liberia', '', 'Y', '2011-11-19 10:16:36'),
(122, 'LY', 'Libya', 'ليبيا', 'Y', '2011-11-19 10:16:36'),
(123, 'LI', 'Liechtenstein', '', 'Y', '2011-11-19 10:16:36'),
(124, 'LT', 'Lithuania', '', 'Y', '2011-11-19 10:16:36'),
(125, 'LU', 'Luxembourg', '', 'Y', '2011-11-19 10:16:36'),
(126, 'MO', 'Macau', '', 'Y', '2011-11-19 10:16:36'),
(127, 'MK', 'Macedonia', '', 'Y', '2011-11-19 10:16:36'),
(128, 'MG', 'Madagascar', '', 'Y', '2011-11-19 10:16:36'),
(129, 'MW', 'Malawi', '', 'Y', '2011-11-19 10:16:36'),
(130, 'MY', 'Malaysia', '', 'Y', '2011-11-19 10:16:36'),
(131, 'MV', 'Maldives', '', 'Y', '2011-11-19 10:16:36'),
(132, 'ML', 'Mali', '', 'Y', '2011-11-19 10:16:36'),
(133, 'MT', 'Malta', '', 'Y', '2011-11-19 10:16:36'),
(134, 'MH', 'Marshall Islands', '', 'Y', '2011-11-19 10:16:36'),
(135, 'MQ', 'Martinique (French)', '', 'Y', '2011-11-19 10:16:36'),
(136, 'MR', 'Mauritania', '', 'Y', '2011-11-19 10:16:36'),
(137, 'MU', 'Mauritius', '', 'Y', '2011-11-19 10:16:36'),
(138, 'YT', 'Mayotte', '', 'Y', '2011-11-19 10:16:36'),
(139, 'MX', 'Mexico', '', 'Y', '2011-11-19 10:16:36'),
(140, 'FM', 'Micronesia', '', 'Y', '2011-11-19 10:16:36'),
(141, 'MD', 'Moldavia', '', 'Y', '2011-11-19 10:16:36'),
(142, 'MC', 'Monaco', '', 'Y', '2011-11-19 10:16:36'),
(143, 'MN', 'Mongolia', '', 'Y', '2011-11-19 10:16:36'),
(144, 'MS', 'Montserrat', '', 'Y', '2011-11-19 10:16:36'),
(145, 'MA', 'Morocco', '', 'Y', '2011-11-19 10:16:36'),
(146, 'MZ', 'Mozambique', '', 'Y', '2011-11-19 10:16:36'),
(147, 'MM', 'Myanmar', '', 'Y', '2011-11-19 10:16:36'),
(148, 'NA', 'Namibia', '', 'Y', '2011-11-19 10:16:36'),
(149, 'NR', 'Nauru', '', 'Y', '2011-11-19 10:16:36'),
(150, 'NP', 'Nepal', '', 'Y', '2011-11-19 10:16:36'),
(151, 'NL', 'Netherlands', '', 'Y', '2011-11-19 10:16:36'),
(152, 'AN', 'Netherlands Antilles', '', 'Y', '2011-11-19 10:16:36'),
(153, 'NT', 'Neutral Zone', '', 'Y', '2011-11-19 10:16:36'),
(154, 'NC', 'New Caledonia (French)', '', 'Y', '2011-11-19 10:16:36'),
(155, 'NZ', 'New Zealand', '', 'Y', '2011-11-19 10:16:36'),
(156, 'NI', 'Nicaragua', '', 'Y', '2011-11-19 10:16:36'),
(157, 'NE', 'Niger', '', 'Y', '2011-11-19 10:16:36'),
(158, 'NG', 'Nigeria', '', 'Y', '2011-11-19 10:16:36'),
(159, 'NU', 'Niue', '', 'Y', '2011-11-19 10:16:36'),
(160, 'NF', 'Norfolk Island', '', 'Y', '2011-11-19 10:16:36'),
(161, 'KP', 'North Korea', '', 'Y', '2011-11-19 10:16:36'),
(162, 'MP', 'Northern Mariana Islands', '', 'Y', '2011-11-19 10:16:36'),
(163, 'NO', 'Norway', '', 'Y', '2011-11-19 10:16:36'),
(164, 'OM', 'Oman', 'عُمان', 'Y', '2011-11-19 10:16:36'),
(165, 'PK', 'Pakistan', '', 'Y', '2011-11-19 10:16:36'),
(166, 'PW', 'Palau', '', 'Y', '2011-11-19 10:16:36'),
(167, 'PA', 'Panama', '', 'Y', '2011-11-19 10:16:36'),
(168, 'PG', 'Papua New Guinea', '', 'Y', '2011-11-19 10:16:36'),
(169, 'PY', 'Paraguay', '', 'Y', '2011-11-19 10:16:36'),
(170, 'PE', 'Peru', '', 'Y', '2011-11-19 10:16:36'),
(171, 'PH', 'Philippines', '', 'Y', '2011-11-19 10:16:36'),
(172, 'PN', 'Pitcairn Island', '', 'Y', '2011-11-19 10:16:36'),
(173, 'PL', 'Poland', '', 'Y', '2011-11-19 10:16:36'),
(174, 'PF', 'Polynesia (French)', '', 'Y', '2011-11-19 10:16:36'),
(175, 'PT', 'Portugal', '', 'Y', '2011-11-19 10:16:36'),
(176, 'PR', 'Puerto Rico', '', 'Y', '2011-11-19 10:16:36'),
(177, 'QA', 'Qatar', 'قطر', 'Y', '2011-11-19 10:16:36'),
(178, 'RE', 'Reunion (French)', '', 'Y', '2011-11-19 10:16:36'),
(179, 'RO', 'Romania', '', 'Y', '2011-11-19 10:16:36'),
(180, 'RU', 'Russian Federation', '', 'Y', '2011-11-19 10:16:36'),
(181, 'RW', 'Rwanda', '', 'Y', '2011-11-19 10:16:36'),
(182, 'GS', 'S. Georgia & S. Sandwich Isls.', '', 'Y', '2011-11-19 10:16:36'),
(183, 'SH', 'Saint Helena', '', 'Y', '2011-11-19 10:16:36'),
(184, 'KN', 'Saint Kitts & Nevis Anguilla', '', 'Y', '2011-11-19 10:16:36'),
(185, 'LC', 'Saint Lucia', '', 'Y', '2011-11-19 10:16:36'),
(186, 'PM', 'Saint Pierre and Miquelon', '', 'Y', '2011-11-19 10:16:36'),
(187, 'ST', 'Saint Tome (Sao Tome) and Principe', '', 'Y', '2011-11-19 10:16:36'),
(188, 'VC', 'Saint Vincent & Grenadines', '', 'Y', '2011-11-19 10:16:36'),
(189, 'WS', 'Samoa', '', 'Y', '2011-11-19 10:16:36'),
(190, 'SM', 'San Marino', '', 'Y', '2011-11-19 10:16:36'),
(191, 'SA', 'Saudi Arabia', 'المملكة العربية السعودية', 'Y', '2011-11-19 10:16:36'),
(192, 'SN', 'Senegal', '', 'Y', '2011-11-19 10:16:36'),
(193, 'SC', 'Seychelles', '', 'Y', '2011-11-19 10:16:36'),
(194, 'SL', 'Sierra Leone', '', 'Y', '2011-11-19 10:16:36'),
(195, 'SG', 'Singapore', '', 'Y', '2011-11-19 10:16:36'),
(196, 'SK', 'Slovak Republic', '', 'Y', '2011-11-19 10:16:36'),
(197, 'SI', 'Slovenia', '', 'Y', '2011-11-19 10:16:36'),
(198, 'SB', 'Solomon Islands', '', 'Y', '2011-11-19 10:16:36'),
(199, 'SO', 'Somalia', '', 'Y', '2011-11-19 10:16:36'),
(200, 'ZA', 'South Africa', '', 'Y', '2011-11-19 10:16:36'),
(201, 'KR', 'South Korea', '', 'Y', '2011-11-19 10:16:36'),
(202, 'ES', 'Spain', '', 'Y', '2011-11-19 10:16:36'),
(203, 'LK', 'Sri Lanka', '', 'Y', '2011-11-19 10:16:36'),
(204, 'SD', 'Sudan', '', 'Y', '2011-11-19 10:16:36'),
(205, 'SR', 'Suriname', '', 'Y', '2011-11-19 10:16:36'),
(206, 'SJ', 'Svalbard and Jan Mayen Islands', '', 'Y', '2011-11-19 10:16:36'),
(207, 'SZ', 'Swaziland', '', 'Y', '2011-11-19 10:16:36'),
(208, 'SE', 'Sweden', '', 'Y', '2011-11-19 10:16:36'),
(209, 'CH', 'Switzerland', '', 'Y', '2011-11-19 10:16:36'),
(210, 'SY', 'Syria', 'سوريا', 'Y', '2011-11-19 10:16:36'),
(211, 'TJ', 'Tadjikistan', '', 'Y', '2011-11-19 10:16:36'),
(212, 'TW', 'Taiwan', '', 'Y', '2011-11-19 10:16:36'),
(213, 'TZ', 'Tanzania', '', 'Y', '2011-11-19 10:16:36'),
(214, 'TH', 'Thailand', '', 'Y', '2011-11-19 10:16:36'),
(215, 'TG', 'Togo', '', 'Y', '2011-11-19 10:16:36'),
(216, 'TK', 'Tokelau', '', 'Y', '2011-11-19 10:16:36'),
(217, 'TO', 'Tonga', '', 'Y', '2011-11-19 10:16:36'),
(218, 'TT', 'Trinidad and Tobago', '', 'Y', '2011-11-19 10:16:36'),
(219, 'TN', 'Tunisia', '', 'Y', '2011-11-19 10:16:36'),
(220, 'TR', 'Turkey', '', 'Y', '2011-11-19 10:16:36'),
(221, 'TM', 'Turkmenistan', '', 'Y', '2011-11-19 10:16:36'),
(222, 'TC', 'Turks and Caicos Islands', '', 'Y', '2011-11-19 10:16:36'),
(223, 'TV', 'Tuvalu', '', 'Y', '2011-11-19 10:16:36'),
(224, 'UG', 'Uganda', '', 'Y', '2011-11-19 10:16:36'),
(225, 'UA', 'Ukraine', '', 'Y', '2011-11-19 10:16:36'),
(226, 'AE', 'United Arab Emirates', 'الإمارات العربية المتحدة', 'Y', '2011-11-19 10:16:36'),
(227, 'GB', 'United Kingdom', '', 'Y', '2011-11-19 10:16:36'),
(228, 'US', 'United States', '', 'Y', '2011-11-19 10:16:36'),
(229, 'UY', 'Uruguay', '', 'Y', '2011-11-19 10:16:36'),
(230, 'MIL', 'USA Military', '', 'Y', '2011-11-19 10:16:36'),
(231, 'UM', 'USA Minor Outlying Islands', '', 'Y', '2011-11-19 10:16:36'),
(232, 'UZ', 'Uzbekistan', '', 'Y', '2011-11-19 10:16:36'),
(233, 'VU', 'Vanuatu', '', 'Y', '2011-11-19 10:16:36'),
(234, 'VA', 'Vatican City State', '', 'Y', '2011-11-19 10:16:36'),
(235, 'VE', 'Venezuela', '', 'Y', '2011-11-19 10:16:36'),
(236, 'VN', 'Vietnam', '', 'Y', '2011-11-19 10:16:36'),
(237, 'VG', 'Virgin Islands (British)', '', 'Y', '2011-11-19 10:16:36'),
(238, 'VI', 'Virgin Islands (USA)', '', 'Y', '2011-11-19 10:16:36'),
(239, 'WF', 'Wallis and Futuna Islands', '', 'Y', '2011-11-19 10:16:36'),
(240, 'EH', 'Western Sahara', '', 'Y', '2011-11-19 10:16:36'),
(241, 'YE', 'Yemen', '', 'Y', '2011-11-19 10:16:36'),
(242, 'YU', 'Yugoslavia', '', 'Y', '2011-11-19 10:16:36'),
(243, 'ZR', 'Zaire', '', 'Y', '2011-11-19 10:16:36'),
(244, 'ZM', 'Zambia', '', 'Y', '2011-11-19 10:16:36'),
(245, 'ZW', 'Zimbabwe', '', 'Y', '2011-11-19 10:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_entertainer`
--

CREATE TABLE `tbl_entertainer` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `image1` varchar(300) DEFAULT NULL,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `model_region` varchar(255) DEFAULT NULL,
  `model_gender` varchar(255) DEFAULT NULL,
  `model_info` varchar(255) DEFAULT NULL,
  `model_exp` varchar(255) DEFAULT NULL,
  `model_marrital_status` varchar(20) DEFAULT NULL,
  `model_age` varchar(20) DEFAULT NULL,
  `model_spl` varchar(255) DEFAULT NULL,
  `model_spl_other` varchar(255) DEFAULT NULL,
  `cv_path` varchar(250) DEFAULT NULL,
  `description` text,
  `is_active` enum('Y','N') CHARACTER SET utf8 NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_entertainer`
--

INSERT INTO `tbl_entertainer` (`id`, `orderby`, `code`, `image1`, `name`, `contact_no`, `email`, `city`, `country`, `model_region`, `model_gender`, `model_info`, `model_exp`, `model_marrital_status`, `model_age`, `model_spl`, `model_spl_other`, `cv_path`, `description`, `is_active`, `added_date`) VALUES
(59, 1, '4110001', '', 'Aneesh Ponnappan', '023123', 'aneesh.anniyan@gmail.com', 'Al Khan', 'AE', 'arabic', 'female', 'professional', '3y', 'single', 'below_6', 'a:4:{i:0;s:2:"DJ";i:1;s:8:"Magician";i:2;s:8:"Comedian";i:3;s:8:"Musician";}', NULL, 'FILEd611d0080f9bc4d.doc', 'hi', 'Y', '2016-12-09 20:01:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_entertainer_images`
--

CREATE TABLE `tbl_entertainer_images` (
  `entertainer_fk` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `added_date` datetime DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_entertainer_images`
--

INSERT INTO `tbl_entertainer_images` (`entertainer_fk`, `image`, `added_date`, `id`) VALUES
(59, 'IMG-7b5242d3888f34f', '2016-12-09 08:01:19', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_entertainer_language`
--

CREATE TABLE `tbl_entertainer_language` (
  `entertainer_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_entertainer_language`
--

INSERT INTO `tbl_entertainer_language` (`entertainer_id`, `language_id`) VALUES
(58, 28),
(58, 30),
(58, 32),
(59, 28),
(59, 29),
(59, 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `gallery_title_en` varchar(255) NOT NULL,
  `gallery_title_ar` varchar(255) NOT NULL,
  `views` int(11) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `is_delete` tinyint(1) NOT NULL DEFAULT '1',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `orderby`, `gallery_title_en`, `gallery_title_ar`, `views`, `is_active`, `is_delete`, `added_date`) VALUES
(27, 1, 'Sample Videos', '', 0, 'Y', 1, '2016-11-05 15:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery_images`
--

CREATE TABLE `tbl_gallery_images` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file_type` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image1` varchar(255) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=113 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_gallery_images`
--

INSERT INTO `tbl_gallery_images` (`id`, `orderby`, `parent_id`, `title`, `file_type`, `image1`, `is_active`, `added_date`) VALUES
(32, 19, 8, 'Hospital-office-interior-design.jpg', '', 'IMG-495d7e345ef7d4a.jpg', 'Y', '2015-05-12 15:53:30'),
(33, 20, 8, '6.jpg', '', 'IMG-dbeb2e317e0528f.jpg', 'Y', '2015-05-12 15:53:31'),
(34, 21, 8, 'top-hospital-room-design-with-hospital-interior-design-ideas-yellow-hospital-room-interior-home.jpg', '', 'IMG-a4ff6a284f246a2.jpg', 'Y', '2015-05-12 15:53:31'),
(43, 30, 12, 'The-Whisky-Shop-flagship-store-by-gpstudio-London-04.jpg', '', 'IMG-1ceabab8f80ca5a.jpg', 'N', '2015-05-21 07:58:49'),
(42, 29, 12, 'IMG_0183-e1334948587544.jpg', '', 'IMG-1fd6336a7861274.jpg', 'N', '2015-05-21 07:58:49'),
(41, 28, 12, 'perfumes4.jpg', '', 'IMG-80ccf043a572e9d.jpg', 'Y', '2015-05-21 07:58:49'),
(40, 27, 12, 'kochi_store_big.jpg', '', 'IMG-137118c01a99ceb.jpg', 'Y', '2015-05-21 07:58:49'),
(39, 26, 12, 'DSC02866.jpg', '', 'IMG-41bf0d8bbc64d69.jpg', 'Y', '2015-05-21 07:58:49'),
(35, 22, 8, 'Regions-Hospital-Interior.jpg', '', 'IMG-c4fa88419590cbb.jpg', 'Y', '2015-05-12 15:53:32'),
(36, 23, 8, 'HOME_7.png', '', 'IMG-3297c9d7746ea01.png', 'Y', '2015-05-20 15:56:44'),
(37, 24, 8, '2.jpg', '', 'IMG-2233646b234b3c7.jpg', 'Y', '2015-05-20 15:56:44'),
(38, 25, 8, 'IMG_4659 (1).jpg', '', 'IMG-ca4fc0337252633.jpg', 'Y', '2015-05-20 15:56:44'),
(44, 31, 13, 'Ajmal-Location-08.jpg', '', 'IMG-004750f5444dc49.jpg', 'Y', '2015-05-21 08:00:32'),
(45, 32, 13, 'A-Peek-Inside-The-New-ScentBar-12.jpg', '', 'IMG-ff85d40b737bede.jpg', 'Y', '2015-05-21 08:00:32'),
(46, 33, 13, 'cosmeticwatchjewerllysunglassshoesbagsexhibitiondisplayrackexhibitionkiosk_0cb581ad-0278-4161-a25d-94551e5a6e5f.jpg', '', 'IMG-fa851adaad7ab8c.jpg', 'Y', '2015-05-21 08:00:32'),
(47, 34, 13, 'Picture 1.png', '', 'IMG-846d99cbab737a6.png', 'N', '2015-05-21 08:00:32'),
(48, 35, 13, 'The-Whisky-Shop-flagship-store-by-gpstudio-London-04.jpg', '', 'IMG-c3d52d1bed9f9a0.jpg', 'N', '2015-05-21 08:00:32'),
(49, 36, 14, '2.jpg', '', 'IMG-805c2236bcbc4e6.jpg', 'Y', '2015-06-09 08:27:48'),
(50, 37, 14, '1.jpg', '', 'IMG-f19a9e74c6c554d.jpg', 'Y', '2015-06-09 08:27:48'),
(51, 38, 14, '5.jpg', '', 'IMG-4c550b160eeab56.jpg', 'Y', '2015-06-09 08:27:49'),
(60, 40, 15, 'eur-erco-berne-art-museum-industrious-exhibition-image-1-4.jpg', '', 'IMG-0ab32292fc79b18.jpg', 'Y', '2015-09-27 10:19:52'),
(61, 41, 15, 'rowland-moye-exhibitions-b3.jpg', '', 'IMG-5bcad416228a5e9.jpg', 'Y', '2015-09-27 10:19:53'),
(59, 39, 15, 'Dubai-Derma-Exhibition.jpg', '', 'IMG-540abffeba2728b.jpg', 'Y', '2015-09-27 10:19:52'),
(62, 42, 18, '10881752_794775333930702_1897374803193693392_n.jpg', '', 'IMG-84ffb940e7b57af.jpg', 'Y', '2015-10-05 04:37:46'),
(63, 43, 18, '10881625_794775330597369_4317369936327464031_n.jpg', '', 'IMG-f1004898daa91f0.jpg', 'Y', '2015-10-05 04:37:46'),
(64, 44, 18, '10882119_794775337264035_7428140812902882689_n.jpg', '', 'IMG-821469654b93881.jpg', 'Y', '2015-10-05 04:37:47'),
(65, 45, 19, '11021366_846148378793397_4882863421251165796_o.jpg', '', 'IMG-42cb09f46cafdb4.jpg', 'Y', '2015-10-05 04:39:51'),
(66, 46, 19, '11029537_846148385460063_8087897832511578518_o.jpg', '', 'IMG-65479bb5c18100f.jpg', 'Y', '2015-10-05 04:39:52'),
(67, 47, 19, '11038425_846148672126701_1751784560834028256_o.jpg', '', 'IMG-52519677d7dfc83.jpg', 'Y', '2015-10-05 04:39:53'),
(68, 48, 19, '11050731_846148518793383_4569640708792297190_o.jpg', '', 'IMG-bbd971e2bf802aa.jpg', 'Y', '2015-10-05 04:39:54'),
(69, 49, 20, '10317803_846148938793341_6529488496876369134_o.jpg', '', 'IMG-2d72b6427754c29.jpg', 'Y', '2015-10-05 04:41:49'),
(70, 50, 20, '10866119_846148935460008_8031173098322170641_o.jpg', '', 'IMG-e3e2863d8e0370c.jpg', 'Y', '2015-10-05 04:41:50'),
(71, 51, 21, 'F3RWckXbBNw edit.jpg', '', 'IMG-432d9befd55aa32.jpg', 'Y', '2015-10-05 04:44:39'),
(72, 52, 21, '3flyiGqPPnM edited.jpg', '', 'IMG-5dd7d728e0e8c22.jpg', 'Y', '2015-10-05 04:44:40'),
(73, 53, 21, 'hph1LgpRQg0 edited.jpg', '', 'IMG-2f2cb3ddd3f6753.jpg', 'Y', '2015-10-05 04:44:41'),
(74, 54, 22, 'Ani_Lorak_brichikov133_19.09.15.jpg', '', 'IMG-7afb1903c607a49.jpg', 'Y', '2015-10-12 03:17:04'),
(75, 55, 22, 'Ani_Lorak_brichikov167_19.09.15.jpg', '', 'IMG-465194e3e19ee02.jpg', 'Y', '2015-10-12 03:17:04'),
(76, 56, 22, 'Ani_Lorak_brichikov194_19.09.15.jpg', '', 'IMG-bcc1f9757e7e2da.jpg', 'Y', '2015-10-12 03:17:07'),
(77, 57, 22, 'Ani_Lorak_brichikov191_19.09.15.jpg', '', 'IMG-89b95989b4db1f3.jpg', 'Y', '2015-10-12 03:17:07'),
(78, 58, 22, 'Ani_Lorak_brichikov232_19.09.15.jpg', '', 'IMG-1c93d2b42c02d97.jpg', 'Y', '2015-10-12 03:17:08'),
(79, 59, 22, 'Ani_Lorak_brichikov215_19.09.15.jpg', '', 'IMG-013e7854f68f807.jpg', 'Y', '2015-10-12 03:17:09'),
(80, 60, 22, 'Ani_Lorak_brichikov278_19.09.15.jpg', '', 'IMG-4ecf3100fdaa81c.jpg', 'Y', '2015-10-12 03:17:09'),
(81, 61, 22, 'Ani_Lorak_brichikov371_19.09.15.jpg', '', 'IMG-7188dd377c4361f.jpg', 'Y', '2015-10-12 03:17:12'),
(82, 62, 22, 'Ani_Lorak_brichikov437_19.09.15.jpg', '', 'IMG-db4de87b01f5dea.jpg', 'Y', '2015-10-12 03:17:15'),
(83, 63, 22, 'Ani_Lorak_brichikov453_19.09.15.jpg', '', 'IMG-96c632fa3c7f9e4.jpg', 'Y', '2015-10-12 03:17:17'),
(84, 64, 22, 'Ani_Lorak_brichikov490_19.09.15.jpg', '', 'IMG-f6bf60ed0bfd341.jpg', 'Y', '2015-10-12 03:17:19'),
(85, 65, 22, 'Ani_Lorak_brichikov528_19.09.15.jpg', '', 'IMG-3a56ed4959940a6.jpg', 'Y', '2015-10-12 03:17:21'),
(86, 66, 22, 'Ani_Lorak_brichikov542_19.09.15.jpg', '', 'IMG-2ac2ef164cd055d.jpg', 'Y', '2015-10-12 03:17:22'),
(87, 67, 22, 'Ani_Lorak_brichikov399_19.09.15.jpg', '', 'IMG-8290303fe77089e.jpg', 'Y', '2015-10-12 03:19:02'),
(88, 68, 23, '12941103_1580609805585888_204311220_o.jpg', '', 'IMG-cf1562015a58058.jpg', 'Y', '2016-04-05 03:54:28'),
(89, 69, 23, '12922293_1580609835585885_727921160_o.jpg', '', 'IMG-ed2338fe3f9bf08.jpg', 'Y', '2016-04-05 03:54:29'),
(90, 70, 23, '12948398_1580609825585886_408941372_o.jpg', '', 'IMG-3996cac4896e099.jpg', 'Y', '2016-04-05 03:54:33'),
(91, 71, 23, 'page.jpg', '', 'IMG-5a4500886251821.jpg', 'Y', '2016-04-05 03:54:34'),
(92, 72, 23, '12941128_1580609852252550_131856973_o.jpg', '', 'IMG-de8b295b1c23183.jpg', 'Y', '2016-04-05 03:54:37'),
(93, 73, 24, 'IMG_3963.JPG', '', 'IMG-a0dab674da39f28.JPG', 'Y', '2016-04-11 04:46:38'),
(96, 74, 24, 'IMG_3962 1.JPG', '', 'IMG-91624abc1495a51.JPG', 'Y', '2016-04-11 04:49:47'),
(97, 75, 24, 'page.jpg', '', 'IMG-ce0e76223ae0d79.jpg', 'Y', '2016-04-11 04:49:48'),
(98, 76, 24, 'page1.jpg', '', 'IMG-d734dec50712e91.jpg', 'Y', '2016-04-11 04:49:49'),
(99, 77, 24, 'IMG_3968.JPG', '', 'IMG-f28ef5d81ffefc8.JPG', 'Y', '2016-04-11 04:49:51'),
(100, 78, 25, 'IMG_4154.JPG', '', 'IMG-510db2a03fb6ee8.JPG', 'Y', '2016-04-11 05:41:06'),
(101, 79, 25, 'IMG_4145.JPG', '', 'IMG-998c96dfcd6fbad.JPG', 'Y', '2016-04-11 05:41:07'),
(102, 80, 25, 'IMG_4159.JPG', '', 'IMG-7a62818d8664eb4.JPG', 'Y', '2016-04-11 05:41:18'),
(103, 81, 25, 'IMG_4164.JPG', '', 'IMG-a9db17150e7766b.JPG', 'Y', '2016-04-11 05:41:18'),
(104, 82, 25, 'IMG_4170.JPG', '', 'IMG-be35e89c78c2f64.JPG', 'Y', '2016-04-11 05:41:30'),
(105, 83, 25, 'IMG_4167.JPG', '', 'IMG-16e3c2ae1c3eb08.JPG', 'Y', '2016-04-11 05:41:32'),
(106, 84, 25, 'IMG_4173.JPG', '', 'IMG-1650b66b5dd7c04.JPG', 'Y', '2016-04-11 05:41:40'),
(107, 85, 25, 'IMG_4190.JPG', '', 'IMG-9dd02b03c3191b1.JPG', 'Y', '2016-04-11 05:41:41'),
(108, 86, 25, 'page.jpg', '', 'IMG-aae6afac1cec1de.jpg', 'Y', '2016-04-11 05:45:24'),
(109, 87, 26, 'IMG_3142.JPG', '', 'IMG-eaf8e63d2836b49.JPG', 'Y', '2016-04-12 07:02:58'),
(110, 88, 26, 'page.jpg', '', 'IMG-b1b8c252564f1bf.jpg', 'Y', '2016-04-12 07:02:59'),
(112, 89, 26, 'IMG_3143.JPG', '', 'IMG-67c725e942b703f.JPG', 'Y', '2016-04-12 07:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery_videos`
--

CREATE TABLE `tbl_gallery_videos` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `video_title` varchar(255) DEFAULT NULL,
  `video_url` text NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_gallery_videos`
--

INSERT INTO `tbl_gallery_videos` (`id`, `orderby`, `parent_id`, `video_title`, `video_url`, `is_active`, `added_date`) VALUES
(20, 1, 27, 'Video 1', 'https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/facebook/videos/10153231379946729/&width=500&show_text=false&appId=669686323054727&height=280', 'Y', '2016-11-05 15:44:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hits`
--

CREATE TABLE `tbl_hits` (
  `id` int(11) NOT NULL,
  `visits` int(11) NOT NULL,
  `hits` int(11) NOT NULL,
  `today_date` date NOT NULL,
  `is_active` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=700 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_hits`
--

INSERT INTO `tbl_hits` (`id`, `visits`, `hits`, `today_date`, `is_active`, `added_date`) VALUES
(1, 1, 10, '2014-05-04', 'Y', '2014-05-04 13:27:29'),
(2, 1, 204, '2014-05-05', 'Y', '2014-05-05 06:46:17'),
(3, 1, 177, '2014-05-06', 'Y', '2014-05-06 07:08:24'),
(4, 1, 11, '2014-05-07', 'Y', '2014-05-07 14:17:37'),
(5, 2, 89, '2014-05-08', 'Y', '2014-05-08 07:12:56'),
(6, 1, 152, '2014-05-12', 'Y', '2014-05-12 08:33:33'),
(7, 1, 186, '2014-05-13', 'Y', '2014-05-13 06:55:42'),
(8, 1, 120, '2014-05-14', 'Y', '2014-05-14 09:20:11'),
(9, 1, 24, '2014-05-18', 'Y', '2014-05-18 13:41:35'),
(10, 1, 128, '2014-05-19', 'Y', '2014-05-19 06:59:16'),
(11, 1, 120, '2014-05-20', 'Y', '2014-05-20 08:19:27'),
(12, 1, 80, '2014-05-21', 'Y', '2014-05-21 12:13:28'),
(13, 1, 21, '2014-05-22', 'Y', '2014-05-22 06:48:11'),
(14, 1, 218, '2014-05-26', 'Y', '2014-05-26 06:33:00'),
(15, 1, 149, '2014-05-27', 'Y', '2014-05-27 14:03:40'),
(16, 1, 65, '2014-05-28', 'Y', '2014-05-28 10:22:35'),
(17, 1, 158, '2014-05-29', 'Y', '2014-05-29 06:18:46'),
(18, 1, 112, '2014-06-01', 'Y', '2014-06-01 09:46:49'),
(19, 1, 138, '2014-06-02', 'Y', '2014-06-02 06:42:06'),
(20, 1, 37, '2014-06-08', 'Y', '2014-06-08 13:15:44'),
(21, 1, 485, '2014-06-09', 'Y', '2014-06-09 06:23:16'),
(22, 1, 35, '2014-06-12', 'Y', '2014-06-12 19:11:18'),
(23, 1, 277, '2014-06-14', 'Y', '2014-06-14 07:11:10'),
(24, 1, 14, '2014-06-17', 'Y', '2014-06-17 07:46:13'),
(25, 1, 1, '2014-06-22', 'Y', '2014-06-22 12:29:20'),
(26, 2, 2, '2014-06-25', 'Y', '2014-06-25 07:32:14'),
(27, 1, 1, '2014-08-07', 'Y', '2014-08-07 07:41:36'),
(28, 1, 1, '2014-08-10', 'Y', '2014-08-10 11:39:32'),
(29, 1, 170, '2014-08-12', 'Y', '2014-08-12 14:21:15'),
(30, 1, 818, '2014-08-13', 'Y', '2014-08-13 06:05:29'),
(31, 1, 8, '2014-08-14', 'Y', '2014-08-14 06:36:27'),
(32, 1, 18, '2014-08-18', 'Y', '2014-08-18 06:14:46'),
(33, 1, 760, '2014-08-19', 'Y', '2014-08-19 07:15:03'),
(34, 1, 132, '2014-08-20', 'Y', '2014-08-20 09:30:46'),
(35, 1, 301, '2014-08-21', 'Y', '2014-08-21 07:39:04'),
(36, 1, 305, '2014-08-24', 'Y', '2014-08-24 06:34:41'),
(37, 1, 399, '2014-08-25', 'Y', '2014-08-25 06:25:12'),
(38, 1, 15, '2014-08-26', 'Y', '2014-08-26 07:29:57'),
(39, 1, 19, '2014-08-27', 'Y', '2014-08-27 08:51:00'),
(40, 1, 2, '2014-09-07', 'Y', '2014-09-07 08:17:16'),
(41, 1, 60, '2014-09-08', 'Y', '2014-09-08 06:46:54'),
(42, 1, 1, '2014-09-09', 'Y', '2014-09-09 06:10:23'),
(43, 1, 10, '2014-09-10', 'Y', '2014-09-10 06:19:39'),
(44, 1, 24, '2014-09-14', 'Y', '2014-09-14 06:36:09'),
(45, 1, 1, '2014-09-16', 'Y', '2014-09-16 07:40:16'),
(46, 1, 23, '2014-09-17', 'Y', '2014-09-17 06:38:32'),
(47, 1, 5, '2014-09-21', 'Y', '2014-09-21 07:52:04'),
(48, 1, 73, '2014-09-22', 'Y', '2014-09-22 06:26:42'),
(49, 1, 303, '2014-09-23', 'Y', '2014-09-23 06:32:44'),
(50, 1, 423, '2014-09-24', 'Y', '2014-09-24 06:15:15'),
(51, 1, 329, '2014-09-25', 'Y', '2014-09-25 06:18:14'),
(52, 1, 33, '2014-09-28', 'Y', '2014-09-28 06:55:39'),
(53, 1, 83, '2014-09-29', 'Y', '2014-09-29 06:28:06'),
(54, 1, 122, '2014-09-30', 'Y', '2014-09-30 07:01:29'),
(55, 1, 224, '2014-10-01', 'Y', '2014-10-01 06:35:00'),
(56, 1, 12, '2014-10-02', 'Y', '2014-10-02 12:32:47'),
(57, 1, 63, '2014-10-07', 'Y', '2014-10-07 08:25:41'),
(58, 1, 562, '2014-10-08', 'Y', '2014-10-08 07:13:35'),
(59, 1, 197, '2014-10-09', 'Y', '2014-10-09 08:01:30'),
(60, 1, 1, '2014-10-13', 'Y', '2014-10-13 13:23:06'),
(61, 1, 1, '2014-10-14', 'Y', '2014-10-14 08:27:27'),
(62, 1, 34, '2014-10-15', 'Y', '2014-10-15 08:29:46'),
(63, 1, 1, '2014-10-16', 'Y', '2014-10-16 20:48:06'),
(64, 1, 101, '2014-10-18', 'Y', '2014-10-18 18:38:01'),
(65, 1, 218, '2014-10-19', 'Y', '2014-10-19 07:37:12'),
(66, 1, 566, '2014-10-20', 'Y', '2014-10-20 06:29:14'),
(67, 1, 225, '2014-10-21', 'Y', '2014-10-21 11:36:33'),
(68, 1, 240, '2014-10-22', 'Y', '2014-10-22 06:35:44'),
(69, 1, 16, '2014-10-26', 'Y', '2014-10-26 16:55:37'),
(70, 5, 88, '2014-10-27', 'Y', '2014-10-27 09:25:20'),
(71, 7, 8, '2014-10-28', 'Y', '2014-10-28 01:12:57'),
(72, 52, 52, '2014-10-29', 'Y', '2014-10-29 11:19:36'),
(73, 49, 112, '2014-10-30', 'Y', '2014-10-30 00:27:01'),
(74, 14, 23, '2014-10-31', 'Y', '2014-10-31 00:03:34'),
(75, 1, 59, '2014-11-01', 'Y', '2014-11-01 00:09:49'),
(76, 1, 198, '2014-11-02', 'Y', '2014-11-02 00:01:59'),
(77, 3, 143, '2014-11-03', 'Y', '2014-11-03 01:14:14'),
(78, 20, 77, '2014-11-04', 'Y', '2014-11-04 00:07:06'),
(79, 2, 64, '2014-11-05', 'Y', '2014-11-05 00:32:17'),
(80, 4, 5, '2014-11-06', 'Y', '2014-11-06 06:53:18'),
(81, 7, 7, '2014-11-07', 'Y', '2014-11-07 00:45:37'),
(82, 3, 20, '2014-11-08', 'Y', '2014-11-08 04:39:27'),
(83, 11, 27, '2014-11-09', 'Y', '2014-11-09 02:42:18'),
(84, 1, 28, '2014-11-10', 'Y', '2014-11-10 02:22:45'),
(85, 7, 79, '2014-11-11', 'Y', '2014-11-11 04:12:13'),
(86, 1, 11, '2014-11-12', 'Y', '2014-11-12 01:57:13'),
(87, 4, 36, '2014-11-13', 'Y', '2014-11-13 01:47:09'),
(88, 2, 3, '2014-11-14', 'Y', '2014-11-14 00:24:33'),
(89, 10, 13, '2014-11-15', 'Y', '2014-11-15 02:45:54'),
(90, 12, 12, '2014-11-16', 'Y', '2014-11-16 00:45:19'),
(91, 11, 11, '2014-11-17', 'Y', '2014-11-17 00:03:59'),
(92, 3, 31, '2014-11-18', 'Y', '2014-11-18 02:38:13'),
(93, 6, 20, '2014-11-19', 'Y', '2014-11-19 00:41:08'),
(94, 3, 7, '2014-11-20', 'Y', '2014-11-20 06:10:43'),
(95, 15, 15, '2014-11-21', 'Y', '2014-11-21 00:28:48'),
(96, 2, 2, '2014-11-22', 'Y', '2014-11-22 23:27:02'),
(97, 12, 12, '2014-11-23', 'Y', '2014-11-23 00:30:44'),
(98, 7, 7, '2014-11-24', 'Y', '2014-11-24 01:51:23'),
(99, 2, 2, '2014-11-25', 'Y', '2014-11-25 04:33:48'),
(100, 3, 3, '2014-11-26', 'Y', '2014-11-26 00:58:01'),
(101, 1, 34, '2014-11-27', 'Y', '2014-11-27 03:32:29'),
(102, 1, 73, '2014-11-28', 'Y', '2014-11-28 06:12:25'),
(103, 1, 226, '2014-11-29', 'Y', '2014-11-29 06:56:31'),
(104, 1, 279, '2014-11-30', 'Y', '2014-11-30 07:07:03'),
(105, 1, 329, '2014-12-01', 'Y', '2014-12-01 05:16:51'),
(106, 1, 426, '2014-12-03', 'Y', '2014-12-03 05:08:13'),
(107, 3, 198, '2014-12-04', 'Y', '2014-12-04 05:25:08'),
(108, 6, 68, '2014-12-05', 'Y', '2014-12-05 00:14:10'),
(109, 27, 56, '2014-12-06', 'Y', '2014-12-06 02:54:45'),
(110, 28, 44, '2014-12-07', 'Y', '2014-12-07 00:22:31'),
(111, 35, 38, '2014-12-08', 'Y', '2014-12-08 00:29:58'),
(112, 21, 30, '2014-12-09', 'Y', '2014-12-09 00:26:08'),
(113, 23, 23, '2014-12-10', 'Y', '2014-12-10 00:14:54'),
(114, 23, 23, '2014-12-11', 'Y', '2014-12-11 05:08:14'),
(115, 37, 37, '2014-12-12', 'Y', '2014-12-12 00:37:19'),
(116, 20, 20, '2014-12-13', 'Y', '2014-12-13 00:54:53'),
(117, 21, 35, '2014-12-14', 'Y', '2014-12-14 00:03:41'),
(118, 6, 7, '2014-12-15', 'Y', '2014-12-15 01:25:41'),
(119, 3, 39, '2014-12-16', 'Y', '2014-12-16 00:45:09'),
(120, 20, 22, '2014-12-17', 'Y', '2014-12-17 02:23:09'),
(121, 7, 7, '2014-12-18', 'Y', '2014-12-18 00:21:30'),
(122, 4, 4, '2014-12-19', 'Y', '2014-12-19 03:05:21'),
(123, 15, 15, '2014-12-20', 'Y', '2014-12-20 06:43:37'),
(124, 9, 20, '2014-12-21', 'Y', '2014-12-21 00:49:54'),
(125, 3, 9, '2014-12-22', 'Y', '2014-12-22 04:55:47'),
(126, 1, 15, '2014-12-23', 'Y', '2014-12-23 03:49:25'),
(127, 9, 9, '2014-12-24', 'Y', '2014-12-24 02:05:12'),
(128, 2, 2, '2014-12-25', 'Y', '2014-12-25 02:59:54'),
(129, 2, 2, '2014-12-26', 'Y', '2014-12-26 07:00:30'),
(130, 25, 25, '2014-12-27', 'Y', '2014-12-27 05:21:49'),
(131, 3, 12, '2014-12-28', 'Y', '2014-12-28 00:34:58'),
(132, 2, 2, '2014-12-29', 'Y', '2014-12-29 15:07:45'),
(133, 4, 5, '2014-12-30', 'Y', '2014-12-30 03:30:29'),
(134, 2, 3, '2014-12-31', 'Y', '2014-12-31 07:02:15'),
(135, 3, 4, '2015-01-01', 'Y', '2015-01-01 04:02:09'),
(136, 13, 13, '2015-01-02', 'Y', '2015-01-02 00:40:23'),
(137, 1, 2, '2015-01-03', 'Y', '2015-01-03 11:46:07'),
(138, 3, 3, '2015-01-04', 'Y', '2015-01-04 01:19:33'),
(139, 1, 3, '2015-01-05', 'Y', '2015-01-05 15:24:14'),
(140, 1, 51, '2015-01-06', 'Y', '2015-01-06 02:05:03'),
(141, 11, 15, '2015-01-07', 'Y', '2015-01-07 00:34:03'),
(142, 8, 17, '2015-01-08', 'Y', '2015-01-08 01:55:32'),
(143, 10, 10, '2015-01-09', 'Y', '2015-01-09 00:01:40'),
(144, 22, 25, '2015-01-10', 'Y', '2015-01-10 00:44:54'),
(145, 1, 8, '2015-01-11', 'Y', '2015-01-11 01:02:19'),
(146, 1, 4, '2015-01-12', 'Y', '2015-01-12 10:52:22'),
(147, 1, 36, '2015-01-13', 'Y', '2015-01-13 02:00:17'),
(148, 11, 11, '2015-01-14', 'Y', '2015-01-14 22:38:18'),
(149, 10, 10, '2015-01-15', 'Y', '2015-01-15 00:19:11'),
(150, 27, 27, '2015-01-16', 'Y', '2015-01-16 00:32:42'),
(151, 13, 19, '2015-01-17', 'Y', '2015-01-17 01:47:25'),
(152, 5, 20, '2015-01-18', 'Y', '2015-01-18 00:47:42'),
(153, 8, 8, '2015-01-19', 'Y', '2015-01-19 00:43:33'),
(154, 1, 1, '2015-01-20', 'Y', '2015-01-20 05:59:24'),
(155, 2, 2, '2015-01-20', 'Y', '2015-01-20 05:59:24'),
(156, 6, 6, '2015-01-20', 'Y', '2015-01-20 05:59:24'),
(157, 13, 33, '2015-01-21', 'Y', '2015-01-21 01:45:16'),
(158, 13, 13, '2015-01-22', 'Y', '2015-01-22 03:58:26'),
(159, 2, 16, '2015-01-23', 'Y', '2015-01-23 03:08:36'),
(160, 1, 15, '2015-01-24', 'Y', '2015-01-24 04:50:06'),
(161, 2, 16, '2015-01-25', 'Y', '2015-01-25 07:26:09'),
(162, 1, 22, '2015-01-26', 'Y', '2015-01-26 00:41:33'),
(163, 2, 25, '2015-01-27', 'Y', '2015-01-27 00:03:29'),
(164, 5, 5, '2015-01-28', 'Y', '2015-01-28 02:53:33'),
(165, 19, 19, '2015-01-29', 'Y', '2015-01-29 00:47:29'),
(166, 39, 39, '2015-01-30', 'Y', '2015-01-30 08:39:15'),
(167, 12, 20, '2015-01-31', 'Y', '2015-01-31 00:36:48'),
(168, 10, 10, '2015-02-01', 'Y', '2015-02-01 00:36:32'),
(169, 3, 20, '2015-02-02', 'Y', '2015-02-02 00:54:52'),
(170, 27, 73, '2015-02-03', 'Y', '2015-02-03 00:22:46'),
(171, 21, 24, '2015-02-04', 'Y', '2015-02-04 00:44:54'),
(172, 30, 45, '2015-02-05', 'Y', '2015-02-05 00:03:13'),
(173, 5, 12, '2015-02-06', 'Y', '2015-02-06 01:49:54'),
(174, 3, 62, '2015-02-07', 'Y', '2015-02-07 01:12:26'),
(175, 1, 43, '2015-02-08', 'Y', '2015-02-08 01:06:43'),
(176, 10, 38, '2015-02-09', 'Y', '2015-02-09 00:54:53'),
(177, 8, 48, '2015-02-10', 'Y', '2015-02-10 00:34:53'),
(178, 17, 41, '2015-02-11', 'Y', '2015-02-11 00:36:29'),
(179, 31, 46, '2015-02-12', 'Y', '2015-02-12 00:06:39'),
(180, 26, 26, '2015-02-13', 'Y', '2015-02-13 01:40:59'),
(181, 27, 27, '2015-02-14', 'Y', '2015-02-14 00:17:22'),
(182, 12, 22, '2015-02-15', 'Y', '2015-02-15 00:04:51'),
(183, 6, 26, '2015-02-16', 'Y', '2015-02-16 00:13:08'),
(184, 5, 71, '2015-02-17', 'Y', '2015-02-17 00:39:30'),
(185, 18, 97, '2015-02-18', 'Y', '2015-02-18 00:09:54'),
(186, 5, 23, '2015-02-19', 'Y', '2015-02-19 00:34:15'),
(187, 23, 23, '2015-02-20', 'Y', '2015-02-20 00:04:43'),
(188, 34, 63, '2015-02-21', 'Y', '2015-02-21 00:27:59'),
(189, 4, 39, '2015-02-22', 'Y', '2015-02-22 04:39:11'),
(190, 19, 23, '2015-02-23', 'Y', '2015-02-23 00:32:15'),
(191, 11, 14, '2015-02-24', 'Y', '2015-02-24 02:11:47'),
(192, 1, 35, '2015-02-25', 'Y', '2015-02-25 00:17:38'),
(193, 1, 64, '2015-02-26', 'Y', '2015-02-26 00:49:16'),
(194, 3, 4, '2015-02-27', 'Y', '2015-02-27 05:47:21'),
(195, 15, 40, '2015-02-28', 'Y', '2015-02-28 00:58:43'),
(196, 2, 63, '2015-03-01', 'Y', '2015-03-01 00:42:41'),
(197, 1, 51, '2015-03-02', 'Y', '2015-03-02 00:04:53'),
(198, 23, 41, '2015-03-03', 'Y', '2015-03-03 00:00:14'),
(199, 4, 42, '2015-03-04', 'Y', '2015-03-04 02:01:25'),
(200, 29, 47, '2015-03-05', 'Y', '2015-03-05 00:14:54'),
(201, 37, 46, '2015-03-06', 'Y', '2015-03-06 00:40:02'),
(202, 19, 46, '2015-03-07', 'Y', '2015-03-07 00:01:07'),
(203, 3, 50, '2015-03-08', 'Y', '2015-03-08 00:04:53'),
(204, 10, 22, '2015-03-09', 'Y', '2015-03-09 00:04:52'),
(205, 44, 73, '2015-03-10', 'Y', '2015-03-10 02:49:17'),
(206, 3, 65, '2015-03-11', 'Y', '2015-03-11 01:32:08'),
(207, 8, 55, '2015-03-12', 'Y', '2015-03-12 00:19:49'),
(208, 12, 43, '2015-03-13', 'Y', '2015-03-13 00:26:49'),
(209, 4, 50, '2015-03-14', 'Y', '2015-03-14 00:31:34'),
(210, 18, 60, '2015-03-15', 'Y', '2015-03-15 01:19:06'),
(211, 11, 82, '2015-03-16', 'Y', '2015-03-16 00:28:19'),
(212, 27, 54, '2015-03-17', 'Y', '2015-03-17 01:14:43'),
(213, 69, 72, '2015-03-18', 'Y', '2015-03-18 00:19:13'),
(214, 38, 52, '2015-03-19', 'Y', '2015-03-19 00:05:28'),
(215, 1, 67, '2015-03-20', 'Y', '2015-03-20 00:32:03'),
(216, 57, 57, '2015-03-21', 'Y', '2015-03-21 00:09:54'),
(217, 20, 48, '2015-03-22', 'Y', '2015-03-22 00:06:16'),
(218, 8, 69, '2015-03-23', 'Y', '2015-03-23 00:28:30'),
(219, 38, 56, '2015-03-24', 'Y', '2015-03-24 00:03:13'),
(220, 35, 35, '2015-03-25', 'Y', '2015-03-25 00:50:10'),
(221, 10, 70, '2015-03-26', 'Y', '2015-03-26 00:04:16'),
(222, 19, 19, '2015-03-27', 'Y', '2015-03-27 03:07:06'),
(223, 20, 54, '2015-03-28', 'Y', '2015-03-28 00:00:35'),
(224, 13, 53, '2015-03-29', 'Y', '2015-03-29 00:16:44'),
(225, 13, 71, '2015-03-30', 'Y', '2015-03-30 00:15:00'),
(226, 14, 41, '2015-03-31', 'Y', '2015-03-31 01:09:12'),
(227, 24, 33, '2015-04-01', 'Y', '2015-04-01 00:12:26'),
(228, 23, 41, '2015-04-02', 'Y', '2015-04-02 01:09:36'),
(229, 27, 47, '2015-04-03', 'Y', '2015-04-03 00:02:48'),
(230, 31, 31, '2015-04-04', 'Y', '2015-04-04 01:07:18'),
(231, 4, 60, '2015-04-05', 'Y', '2015-04-05 00:01:05'),
(232, 15, 69, '2015-04-06', 'Y', '2015-04-06 00:07:13'),
(233, 16, 74, '2015-04-07', 'Y', '2015-04-07 00:56:40'),
(234, 10, 63, '2015-04-08', 'Y', '2015-04-08 00:08:25'),
(235, 18, 120, '2015-04-09', 'Y', '2015-04-09 00:25:47'),
(236, 9, 39, '2015-04-10', 'Y', '2015-04-10 00:21:53'),
(237, 2, 46, '2015-04-11', 'Y', '2015-04-11 00:48:49'),
(238, 23, 55, '2015-04-12', 'Y', '2015-04-12 00:52:16'),
(239, 1, 54, '2015-04-13', 'Y', '2015-04-13 00:14:46'),
(240, 12, 46, '2015-04-14', 'Y', '2015-04-14 00:10:21'),
(241, 9, 52, '2015-04-15', 'Y', '2015-04-15 00:01:43'),
(242, 1, 250, '2015-04-16', 'Y', '2015-04-16 07:49:03'),
(243, 1, 75, '2015-04-18', 'Y', '2015-04-18 16:38:49'),
(244, 1, 436, '2015-04-19', 'Y', '2015-04-19 01:35:24'),
(245, 1, 2, '2015-04-25', 'Y', '2015-04-25 11:57:01'),
(246, 1, 11, '2015-04-26', 'Y', '2015-04-26 14:00:58'),
(247, 1, 4, '2015-05-05', 'Y', '2015-05-05 15:18:49'),
(248, 1, 2, '2015-05-10', 'Y', '2015-05-10 15:55:45'),
(249, 1, 40, '2015-05-11', 'Y', '2015-05-11 08:34:39'),
(250, 1, 418, '2015-05-12', 'Y', '2015-05-12 10:35:16'),
(251, 1, 33, '2015-05-13', 'Y', '2015-05-13 07:04:41'),
(252, 1, 21, '2015-05-15', 'Y', '2015-05-15 06:53:07'),
(253, 1, 268, '2015-05-20', 'Y', '2015-05-20 08:59:12'),
(254, 1, 275, '2015-05-21', 'Y', '2015-05-21 07:10:50'),
(255, 1, 343, '2015-05-23', 'Y', '2015-05-23 07:03:01'),
(256, 1, 29, '2015-05-24', 'Y', '2015-05-24 13:55:59'),
(257, 1, 96, '2015-05-25', 'Y', '2015-05-25 09:10:46'),
(258, 1, 70, '2015-05-28', 'Y', '2015-05-28 09:25:55'),
(259, 1, 5, '2015-05-30', 'Y', '2015-05-30 07:32:35'),
(260, 1, 1, '2015-06-03', 'Y', '2015-06-03 15:01:16'),
(261, 1, 2, '2015-06-03', 'Y', '2015-06-03 15:01:16'),
(262, 1, 12, '2015-06-09', 'Y', '2015-06-09 08:15:54'),
(263, 1, 1, '2015-06-11', 'Y', '2015-06-11 02:39:19'),
(264, 1, 5, '2015-06-11', 'Y', '2015-06-11 02:39:19'),
(265, 1, 2, '2015-06-13', 'Y', '2015-06-13 08:49:12'),
(266, 1, 1, '2015-06-16', 'Y', '2015-06-16 15:26:43'),
(267, 1, 32, '2015-06-20', 'Y', '2015-06-20 12:07:56'),
(268, 1, 43, '2015-06-21', 'Y', '2015-06-21 09:44:07'),
(269, 1, 66, '2015-06-23', 'Y', '2015-06-23 08:50:02'),
(270, 1, 89, '2015-06-27', 'Y', '2015-06-27 09:36:06'),
(271, 1, 3, '2015-06-29', 'Y', '2015-06-29 16:28:00'),
(272, 1, 12, '2015-07-05', 'Y', '2015-07-05 11:57:58'),
(273, 1, 61, '2015-07-07', 'Y', '2015-07-07 07:26:38'),
(274, 1, 26, '2015-07-14', 'Y', '2015-07-14 10:24:09'),
(275, 1, 9, '2015-07-20', 'Y', '2015-07-20 07:21:13'),
(276, 1, 3, '2015-08-03', 'Y', '2015-08-03 13:55:59'),
(277, 1, 395, '2015-09-15', 'Y', '2015-09-15 09:49:39'),
(278, 1, 326, '2015-09-16', 'Y', '2015-09-16 07:10:15'),
(279, 1, 220, '2015-09-17', 'Y', '2015-09-17 07:02:09'),
(280, 2, 79, '2015-09-19', 'Y', '2015-09-19 10:51:40'),
(281, 1, 130, '2015-09-22', 'Y', '2015-09-22 13:38:11'),
(282, 1, 109, '2015-09-23', 'Y', '2015-09-23 07:06:15'),
(283, 1, 415, '2015-09-27', 'Y', '2015-09-27 07:05:09'),
(284, 2, 40, '2015-09-29', 'Y', '2015-09-29 00:05:54'),
(285, 1, 1, '2015-09-30', 'Y', '2015-09-30 22:05:32'),
(286, 2, 2, '2015-10-03', 'Y', '2015-10-03 22:35:22'),
(287, 14, 304, '2015-10-04', 'Y', '2015-10-04 03:19:52'),
(288, 5, 309, '2015-10-05', 'Y', '2015-10-05 00:49:22'),
(289, 2, 155, '2015-10-06', 'Y', '2015-10-06 00:09:59'),
(290, 212, 266, '2015-10-07', 'Y', '2015-10-07 01:29:34'),
(291, 200, 427, '2015-10-08', 'Y', '2015-10-08 00:04:20'),
(292, 13, 286, '2015-10-09', 'Y', '2015-10-09 00:11:34'),
(293, 1, 615, '2015-10-10', 'Y', '2015-10-10 02:52:39'),
(294, 3, 262, '2015-10-11', 'Y', '2015-10-11 00:12:54'),
(295, 1, 300, '2015-10-12', 'Y', '2015-10-12 00:30:00'),
(296, 17, 142, '2015-10-13', 'Y', '2015-10-13 02:52:40'),
(297, 19, 47, '2015-10-14', 'Y', '2015-10-14 00:20:25'),
(298, 11, 52, '2015-10-15', 'Y', '2015-10-15 01:40:49'),
(299, 25, 71, '2015-10-16', 'Y', '2015-10-16 00:39:04'),
(300, 10, 40, '2015-10-17', 'Y', '2015-10-17 03:56:02'),
(301, 13, 24, '2015-10-18', 'Y', '2015-10-18 02:07:59'),
(302, 26, 33, '2015-10-19', 'Y', '2015-10-19 00:13:42'),
(303, 11, 11, '2015-10-20', 'Y', '2015-10-20 00:01:05'),
(304, 1, 38, '2015-10-21', 'Y', '2015-10-21 00:52:03'),
(305, 26, 26, '2015-10-22', 'Y', '2015-10-22 00:25:55'),
(306, 7, 7, '2015-10-23', 'Y', '2015-10-23 03:55:41'),
(307, 19, 19, '2015-10-24', 'Y', '2015-10-24 00:18:31'),
(308, 80, 80, '2015-10-25', 'Y', '2015-10-25 00:16:35'),
(309, 293, 293, '2015-10-26', 'Y', '2015-10-26 01:12:13'),
(310, 8, 17, '2015-10-27', 'Y', '2015-10-27 00:49:01'),
(311, 30, 30, '2015-10-28', 'Y', '2015-10-28 00:29:35'),
(312, 9, 25, '2015-10-29', 'Y', '2015-10-29 00:57:54'),
(313, 33, 33, '2015-10-30', 'Y', '2015-10-30 00:55:08'),
(314, 55, 55, '2015-10-31', 'Y', '2015-10-31 00:52:55'),
(315, 6, 37, '2015-11-01', 'Y', '2015-11-01 00:42:22'),
(316, 5, 30, '2015-11-02', 'Y', '2015-11-02 00:52:06'),
(317, 2, 39, '2015-11-03', 'Y', '2015-11-03 03:42:26'),
(318, 6, 69, '2015-11-04', 'Y', '2015-11-04 02:16:28'),
(319, 23, 30, '2015-11-05', 'Y', '2015-11-05 02:27:01'),
(320, 6, 15, '2015-11-06', 'Y', '2015-11-06 03:35:18'),
(321, 6, 59, '2015-11-07', 'Y', '2015-11-07 01:54:06'),
(322, 6, 90, '2015-11-08', 'Y', '2015-11-08 00:40:29'),
(323, 10, 46, '2015-11-09', 'Y', '2015-11-09 01:26:41'),
(324, 8, 24, '2015-11-10', 'Y', '2015-11-10 00:57:50'),
(325, 6, 17, '2015-11-11', 'Y', '2015-11-11 01:08:48'),
(326, 6, 24, '2015-11-12', 'Y', '2015-11-12 06:00:53'),
(327, 18, 32, '2015-11-13', 'Y', '2015-11-13 00:55:18'),
(328, 10, 10, '2015-11-14', 'Y', '2015-11-14 00:35:16'),
(329, 18, 18, '2015-11-15', 'Y', '2015-11-15 02:31:25'),
(330, 17, 38, '2015-11-16', 'Y', '2015-11-16 02:15:01'),
(331, 8, 42, '2015-11-17', 'Y', '2015-11-17 04:24:17'),
(332, 11, 24, '2015-11-18', 'Y', '2015-11-18 00:30:18'),
(333, 25, 88, '2015-11-19', 'Y', '2015-11-19 00:46:09'),
(334, 30, 30, '2015-11-20', 'Y', '2015-11-20 01:17:25'),
(335, 20, 20, '2015-11-21', 'Y', '2015-11-21 01:48:31'),
(336, 77, 77, '2015-11-22', 'Y', '2015-11-22 00:42:52'),
(337, 24, 24, '2015-11-23', 'Y', '2015-11-23 02:21:09'),
(338, 21, 28, '2015-11-24', 'Y', '2015-11-24 00:22:58'),
(339, 17, 32, '2015-11-25', 'Y', '2015-11-25 02:15:59'),
(340, 1, 61, '2015-11-26', 'Y', '2015-11-26 00:29:44'),
(341, 13, 42, '2015-11-27', 'Y', '2015-11-27 00:12:44'),
(342, 9, 61, '2015-11-28', 'Y', '2015-11-28 00:00:14'),
(343, 27, 31, '2015-11-29', 'Y', '2015-11-29 00:10:01'),
(344, 42, 113, '2015-11-30', 'Y', '2015-11-30 00:00:41'),
(345, 16, 42, '2015-12-01', 'Y', '2015-12-01 00:15:36'),
(346, 1, 32, '2015-12-02', 'Y', '2015-12-02 00:21:56'),
(347, 7, 40, '2015-12-03', 'Y', '2015-12-03 00:48:25'),
(348, 2, 15, '2015-12-04', 'Y', '2015-12-04 01:48:21'),
(349, 7, 22, '2015-12-05', 'Y', '2015-12-05 00:09:21'),
(350, 17, 17, '2015-12-06', 'Y', '2015-12-06 00:09:47'),
(351, 17, 17, '2015-12-07', 'Y', '2015-12-07 01:24:51'),
(352, 28, 28, '2015-12-08', 'Y', '2015-12-08 02:49:50'),
(353, 7, 16, '2015-12-09', 'Y', '2015-12-09 00:15:37'),
(354, 9, 9, '2015-12-10', 'Y', '2015-12-10 00:59:26'),
(355, 15, 15, '2015-12-11', 'Y', '2015-12-11 00:20:02'),
(356, 12, 12, '2015-12-12', 'Y', '2015-12-12 04:33:55'),
(357, 1, 15, '2015-12-13', 'Y', '2015-12-13 01:03:45'),
(358, 15, 27, '2015-12-14', 'Y', '2015-12-14 00:38:39'),
(359, 36, 62, '2015-12-15', 'Y', '2015-12-15 00:52:29'),
(360, 10, 13, '2015-12-16', 'Y', '2015-12-16 01:22:07'),
(361, 14, 62, '2015-12-17', 'Y', '2015-12-17 00:55:05'),
(362, 11, 44, '2015-12-18', 'Y', '2015-12-18 00:00:07'),
(363, 19, 38, '2015-12-19', 'Y', '2015-12-19 00:14:21'),
(364, 20, 71, '2015-12-20', 'Y', '2015-12-20 00:00:41'),
(365, 17, 52, '2015-12-21', 'Y', '2015-12-21 00:44:52'),
(366, 13, 90, '2015-12-22', 'Y', '2015-12-22 00:03:33'),
(367, 15, 80, '2015-12-23', 'Y', '2015-12-23 03:34:01'),
(368, 28, 34, '2015-12-24', 'Y', '2015-12-24 00:08:16'),
(369, 15, 23, '2015-12-25', 'Y', '2015-12-25 01:24:30'),
(370, 15, 132, '2015-12-26', 'Y', '2015-12-26 00:17:40'),
(371, 21, 62, '2015-12-27', 'Y', '2015-12-27 00:30:45'),
(372, 16, 69, '2015-12-28', 'Y', '2015-12-28 01:13:04'),
(373, 12, 70, '2015-12-29', 'Y', '2015-12-29 01:11:44'),
(374, 12, 34, '2015-12-30', 'Y', '2015-12-30 00:27:56'),
(375, 19, 29, '2015-12-31', 'Y', '2015-12-31 00:48:27'),
(376, 3, 30, '2016-01-01', 'Y', '2016-01-01 00:26:37'),
(377, 6, 28, '2016-01-02', 'Y', '2016-01-02 02:07:37'),
(378, 10, 23, '2016-01-03', 'Y', '2016-01-03 01:48:45'),
(379, 12, 42, '2016-01-04', 'Y', '2016-01-04 00:20:50'),
(380, 3, 39, '2016-01-05', 'Y', '2016-01-05 01:13:03'),
(381, 4, 70, '2016-01-06', 'Y', '2016-01-06 01:42:21'),
(382, 25, 41, '2016-01-07', 'Y', '2016-01-07 00:35:45'),
(383, 6, 41, '2016-01-08', 'Y', '2016-01-08 00:22:46'),
(384, 21, 29, '2016-01-09', 'Y', '2016-01-09 00:56:47'),
(385, 1, 73, '2016-01-10', 'Y', '2016-01-10 00:07:36'),
(386, 32, 50, '2016-01-11', 'Y', '2016-01-11 00:02:57'),
(387, 2, 56, '2016-01-12', 'Y', '2016-01-12 01:02:49'),
(388, 18, 49, '2016-01-13', 'Y', '2016-01-13 01:53:44'),
(389, 32, 39, '2016-01-14', 'Y', '2016-01-14 00:29:54'),
(390, 17, 57, '2016-01-15', 'Y', '2016-01-15 01:14:23'),
(391, 32, 54, '2016-01-16', 'Y', '2016-01-16 00:02:19'),
(392, 29, 35, '2016-01-17', 'Y', '2016-01-17 00:19:31'),
(393, 13, 49, '2016-01-18', 'Y', '2016-01-18 00:10:49'),
(394, 12, 31, '2016-01-19', 'Y', '2016-01-19 00:35:05'),
(395, 47, 92, '2016-01-20', 'Y', '2016-01-20 00:24:42'),
(396, 3, 95, '2016-01-21', 'Y', '2016-01-21 00:16:24'),
(397, 2, 167, '2016-01-22', 'Y', '2016-01-22 00:20:32'),
(398, 28, 61, '2016-01-23', 'Y', '2016-01-23 00:06:26'),
(399, 3, 77, '2016-01-24', 'Y', '2016-01-24 00:16:40'),
(400, 5, 41, '2016-01-25', 'Y', '2016-01-25 00:42:01'),
(401, 16, 64, '2016-01-26', 'Y', '2016-01-26 00:14:36'),
(402, 12, 54, '2016-01-27', 'Y', '2016-01-27 01:00:29'),
(403, 27, 58, '2016-01-28', 'Y', '2016-01-28 00:18:03'),
(404, 1, 100, '2016-01-29', 'Y', '2016-01-29 00:18:37'),
(405, 3, 102, '2016-01-30', 'Y', '2016-01-30 00:49:30'),
(406, 3, 114, '2016-01-31', 'Y', '2016-01-31 00:06:35'),
(407, 1, 97, '2016-02-01', 'Y', '2016-02-01 00:23:30'),
(408, 2, 63, '2016-02-02', 'Y', '2016-02-02 00:20:55'),
(409, 1, 97, '2016-02-03', 'Y', '2016-02-03 00:48:08'),
(410, 17, 50, '2016-02-04', 'Y', '2016-02-04 00:37:19'),
(411, 24, 77, '2016-02-05', 'Y', '2016-02-05 00:13:39'),
(412, 10, 94, '2016-02-06', 'Y', '2016-02-06 00:30:36'),
(413, 12, 62, '2016-02-07', 'Y', '2016-02-07 00:40:53'),
(414, 1, 450, '2016-02-08', 'Y', '2016-02-08 00:13:39'),
(415, 9, 25, '2016-02-09', 'Y', '2016-02-09 01:27:14'),
(416, 21, 21, '2016-02-10', 'Y', '2016-02-10 03:01:25'),
(417, 22, 22, '2016-02-11', 'Y', '2016-02-11 02:42:28'),
(418, 13, 32, '2016-02-12', 'Y', '2016-02-12 01:33:41'),
(419, 24, 61, '2016-02-13', 'Y', '2016-02-13 00:15:26'),
(420, 24, 35, '2016-02-14', 'Y', '2016-02-14 00:32:28'),
(421, 38, 43, '2016-02-15', 'Y', '2016-02-15 00:29:40'),
(422, 34, 67, '2016-02-16', 'Y', '2016-02-16 01:06:59'),
(423, 4, 28, '2016-02-17', 'Y', '2016-02-17 00:16:21'),
(424, 29, 65, '2016-02-18', 'Y', '2016-02-18 00:16:07'),
(425, 15, 35, '2016-02-19', 'Y', '2016-02-19 00:20:59'),
(426, 2, 85, '2016-02-20', 'Y', '2016-02-20 01:19:17'),
(427, 70, 70, '2016-02-21', 'Y', '2016-02-21 02:16:28'),
(428, 3, 27, '2016-02-22', 'Y', '2016-02-22 01:17:03'),
(429, 75, 82, '2016-02-23', 'Y', '2016-02-23 01:03:22'),
(430, 28, 28, '2016-02-24', 'Y', '2016-02-24 00:04:53'),
(431, 12, 26, '2016-02-25', 'Y', '2016-02-25 00:52:33'),
(432, 24, 27, '2016-02-26', 'Y', '2016-02-26 00:04:38'),
(433, 19, 19, '2016-02-27', 'Y', '2016-02-27 00:12:47'),
(434, 27, 38, '2016-02-28', 'Y', '2016-02-28 00:12:29'),
(435, 33, 33, '2016-02-29', 'Y', '2016-02-29 00:16:00'),
(436, 6, 78, '2016-03-01', 'Y', '2016-03-01 02:14:24'),
(437, 16, 257, '2016-03-02', 'Y', '2016-03-02 00:00:56'),
(438, 4, 106, '2016-03-03', 'Y', '2016-03-03 00:00:32'),
(439, 19, 80, '2016-03-04', 'Y', '2016-03-04 00:49:24'),
(440, 8, 62, '2016-03-05', 'Y', '2016-03-05 00:03:33'),
(441, 8, 57, '2016-03-06', 'Y', '2016-03-06 01:49:14'),
(442, 10, 113, '2016-03-07', 'Y', '2016-03-07 00:46:45'),
(443, 5, 66, '2016-03-08', 'Y', '2016-03-08 00:28:19'),
(444, 2, 90, '2016-03-09', 'Y', '2016-03-09 00:23:42'),
(445, 15, 67, '2016-03-10', 'Y', '2016-03-10 00:03:51'),
(446, 15, 29, '2016-03-11', 'Y', '2016-03-11 00:24:41'),
(447, 13, 44, '2016-03-12', 'Y', '2016-03-12 00:26:38'),
(448, 24, 66, '2016-03-13', 'Y', '2016-03-13 00:07:06'),
(449, 5, 32, '2016-03-14', 'Y', '2016-03-14 01:51:30'),
(450, 1, 30, '2016-03-15', 'Y', '2016-03-15 00:28:51'),
(451, 2, 146, '2016-03-16', 'Y', '2016-03-16 00:22:29'),
(452, 20, 101, '2016-03-17', 'Y', '2016-03-17 00:17:10'),
(453, 15, 29, '2016-03-18', 'Y', '2016-03-18 00:23:06'),
(454, 28, 28, '2016-03-19', 'Y', '2016-03-19 01:10:05'),
(455, 10, 28, '2016-03-20', 'Y', '2016-03-20 01:00:50'),
(456, 16, 30, '2016-03-21', 'Y', '2016-03-21 00:04:39'),
(457, 7, 19, '2016-03-22', 'Y', '2016-03-22 02:58:37'),
(458, 9, 79, '2016-03-23', 'Y', '2016-03-23 01:04:57'),
(459, 35, 50, '2016-03-24', 'Y', '2016-03-24 00:36:32'),
(460, 53, 72, '2016-03-25', 'Y', '2016-03-25 00:45:37'),
(461, 50, 50, '2016-03-26', 'Y', '2016-03-26 03:16:29'),
(462, 14, 14, '2016-03-27', 'Y', '2016-03-27 03:43:24'),
(463, 1, 33, '2016-03-28', 'Y', '2016-03-28 01:25:22'),
(464, 12, 24, '2016-03-29', 'Y', '2016-03-29 01:08:00'),
(465, 1, 18, '2016-03-30', 'Y', '2016-03-30 04:43:06'),
(466, 13, 33, '2016-03-31', 'Y', '2016-03-31 00:52:33'),
(467, 34, 34, '2016-04-01', 'Y', '2016-04-01 01:50:01'),
(468, 65, 65, '2016-04-02', 'Y', '2016-04-02 02:12:29'),
(469, 53, 66, '2016-04-03', 'Y', '2016-04-03 00:03:53'),
(470, 10, 10, '2016-04-04', 'Y', '2016-04-04 05:12:15'),
(471, 13, 43, '2016-04-05', 'Y', '2016-04-05 00:20:47'),
(472, 1, 21, '2016-04-06', 'Y', '2016-04-06 00:54:24'),
(473, 15, 18, '2016-04-07', 'Y', '2016-04-07 00:45:41'),
(474, 8, 11, '2016-04-08', 'Y', '2016-04-08 00:17:35'),
(475, 27, 35, '2016-04-09', 'Y', '2016-04-09 00:41:32'),
(476, 8, 21, '2016-04-10', 'Y', '2016-04-10 00:05:55'),
(477, 18, 41, '2016-04-11', 'Y', '2016-04-11 01:32:43'),
(478, 48, 67, '2016-04-12', 'Y', '2016-04-12 00:19:17'),
(479, 23, 23, '2016-04-13', 'Y', '2016-04-13 01:47:10'),
(480, 28, 28, '2016-04-14', 'Y', '2016-04-14 00:09:12'),
(481, 13, 13, '2016-04-15', 'Y', '2016-04-15 00:00:42'),
(482, 7, 23, '2016-04-16', 'Y', '2016-04-16 01:06:56'),
(483, 7, 36, '2016-04-17', 'Y', '2016-04-17 00:55:06'),
(484, 14, 52, '2016-04-18', 'Y', '2016-04-18 03:50:22'),
(485, 16, 60, '2016-04-19', 'Y', '2016-04-19 00:18:49'),
(486, 19, 19, '2016-04-20', 'Y', '2016-04-20 04:33:17'),
(487, 8, 65, '2016-04-21', 'Y', '2016-04-21 00:54:09'),
(488, 1, 72, '2016-04-22', 'Y', '2016-04-22 00:26:26'),
(489, 15, 15, '2016-04-23', 'Y', '2016-04-23 00:41:37'),
(490, 29, 29, '2016-04-24', 'Y', '2016-04-24 00:02:02'),
(491, 9, 20, '2016-04-25', 'Y', '2016-04-25 00:29:38'),
(492, 6, 34, '2016-04-26', 'Y', '2016-04-26 02:35:26'),
(493, 41, 45, '2016-04-27', 'Y', '2016-04-27 00:53:18'),
(494, 20, 20, '2016-04-28', 'Y', '2016-04-28 02:44:51'),
(495, 19, 19, '2016-04-29', 'Y', '2016-04-29 00:58:22'),
(496, 15, 21, '2016-04-30', 'Y', '2016-04-30 00:54:58'),
(497, 10, 10, '2016-05-01', 'Y', '2016-05-01 00:44:31'),
(498, 37, 37, '2016-05-02', 'Y', '2016-05-02 00:31:16'),
(499, 4, 94, '2016-05-03', 'Y', '2016-05-03 00:11:54'),
(500, 15, 97, '2016-05-04', 'Y', '2016-05-04 00:24:47'),
(501, 19, 37, '2016-05-05', 'Y', '2016-05-05 01:22:39'),
(502, 27, 27, '2016-05-06', 'Y', '2016-05-06 00:05:24'),
(503, 71, 101, '2016-05-07', 'Y', '2016-05-07 02:08:33'),
(504, 65, 117, '2016-05-08', 'Y', '2016-05-08 00:01:48'),
(505, 18, 70, '2016-05-09', 'Y', '2016-05-09 00:46:38'),
(506, 15, 43, '2016-05-10', 'Y', '2016-05-10 01:14:35'),
(507, 3, 34, '2016-05-11', 'Y', '2016-05-11 01:46:18'),
(508, 36, 39, '2016-05-12', 'Y', '2016-05-12 03:06:02'),
(509, 49, 135, '2016-05-13', 'Y', '2016-05-13 02:43:44'),
(510, 6, 29, '2016-05-14', 'Y', '2016-05-14 00:45:57'),
(511, 37, 40, '2016-05-15', 'Y', '2016-05-15 01:28:33'),
(512, 25, 37, '2016-05-16', 'Y', '2016-05-16 00:48:21'),
(513, 36, 63, '2016-05-17', 'Y', '2016-05-17 02:32:02'),
(514, 64, 64, '2016-05-18', 'Y', '2016-05-18 00:29:33'),
(515, 25, 53, '2016-05-19', 'Y', '2016-05-19 01:18:02'),
(516, 7, 26, '2016-05-20', 'Y', '2016-05-20 02:41:05'),
(517, 30, 30, '2016-05-21', 'Y', '2016-05-21 01:14:28'),
(518, 17, 35, '2016-05-22', 'Y', '2016-05-22 00:00:16'),
(519, 66, 66, '2016-05-23', 'Y', '2016-05-23 00:11:54'),
(520, 7, 131, '2016-05-24', 'Y', '2016-05-24 00:06:07'),
(521, 2, 45, '2016-05-25', 'Y', '2016-05-25 03:13:52'),
(522, 40, 40, '2016-05-26', 'Y', '2016-05-26 00:49:20'),
(523, 13, 13, '2016-05-27', 'Y', '2016-05-27 00:23:28'),
(524, 19, 19, '2016-05-28', 'Y', '2016-05-28 02:56:02'),
(525, 8, 21, '2016-05-29', 'Y', '2016-05-29 02:30:09'),
(526, 14, 68, '2016-05-30', 'Y', '2016-05-30 02:47:08'),
(527, 71, 71, '2016-05-31', 'Y', '2016-05-31 00:55:52'),
(528, 18, 18, '2016-06-01', 'Y', '2016-06-01 00:25:45'),
(529, 67, 67, '2016-06-02', 'Y', '2016-06-02 01:50:54'),
(530, 12, 26, '2016-06-03', 'Y', '2016-06-03 03:10:09'),
(531, 31, 32, '2016-06-04', 'Y', '2016-06-04 00:22:19'),
(532, 1, 1, '2016-06-05', 'Y', '2016-06-05 01:48:03'),
(533, 1, 1, '2016-06-05', 'Y', '2016-06-05 01:48:03'),
(534, 1, 1, '2016-06-05', 'Y', '2016-06-05 01:48:03'),
(535, 15, 39, '2016-06-05', 'Y', '2016-06-05 01:48:03'),
(536, 18, 27, '2016-06-06', 'Y', '2016-06-06 04:30:10'),
(537, 1, 42, '2016-06-07', 'Y', '2016-06-07 01:19:54'),
(538, 21, 44, '2016-06-08', 'Y', '2016-06-08 00:10:25'),
(539, 152, 180, '2016-06-09', 'Y', '2016-06-09 00:02:53'),
(540, 93, 218, '2016-06-10', 'Y', '2016-06-10 00:20:37'),
(541, 45, 145, '2016-06-11', 'Y', '2016-06-11 00:31:41'),
(542, 77, 124, '2016-06-12', 'Y', '2016-06-12 00:07:26'),
(543, 13, 209, '2016-06-13', 'Y', '2016-06-13 00:18:54'),
(544, 92, 138, '2016-06-14', 'Y', '2016-06-14 00:19:22'),
(545, 6, 95, '2016-06-15', 'Y', '2016-06-15 00:16:19'),
(546, 11, 34, '2016-06-16', 'Y', '2016-06-16 00:00:09'),
(547, 4, 86, '2016-06-17', 'Y', '2016-06-17 01:53:05'),
(548, 49, 67, '2016-06-18', 'Y', '2016-06-18 01:10:37'),
(549, 103, 142, '2016-06-19', 'Y', '2016-06-19 00:16:20'),
(550, 19, 19, '2016-06-20', 'Y', '2016-06-20 00:28:30'),
(551, 1, 1, '2016-06-21', 'Y', '2016-06-21 00:11:26'),
(552, 60, 60, '2016-06-21', 'Y', '2016-06-21 00:11:26'),
(553, 3, 55, '2016-06-22', 'Y', '2016-06-22 00:18:25'),
(554, 35, 98, '2016-06-23', 'Y', '2016-06-23 00:03:00'),
(555, 41, 45, '2016-06-24', 'Y', '2016-06-24 04:32:34'),
(556, 3, 87, '2016-06-25', 'Y', '2016-06-25 00:05:22'),
(557, 1, 48, '2016-06-26', 'Y', '2016-06-26 00:03:44'),
(558, 31, 31, '2016-06-27', 'Y', '2016-06-27 01:37:04'),
(559, 49, 49, '2016-06-28', 'Y', '2016-06-28 00:32:49'),
(560, 42, 91, '2016-06-29', 'Y', '2016-06-29 00:00:21'),
(561, 6, 55, '2016-06-30', 'Y', '2016-06-30 02:52:08'),
(562, 20, 30, '2016-07-01', 'Y', '2016-07-01 01:24:18'),
(563, 7, 59, '2016-07-02', 'Y', '2016-07-02 02:28:25'),
(564, 59, 67, '2016-07-03', 'Y', '2016-07-03 00:30:57'),
(565, 9, 23, '2016-07-04', 'Y', '2016-07-04 00:20:21'),
(566, 38, 49, '2016-07-05', 'Y', '2016-07-05 00:25:20'),
(567, 10, 10, '2016-07-06', 'Y', '2016-07-06 02:55:30'),
(568, 49, 49, '2016-07-07', 'Y', '2016-07-07 00:13:36'),
(569, 21, 40, '2016-07-08', 'Y', '2016-07-08 02:49:18'),
(570, 1, 43, '2016-07-09', 'Y', '2016-07-09 00:09:38'),
(571, 44, 44, '2016-07-10', 'Y', '2016-07-10 00:19:02'),
(572, 9, 46, '2016-07-11', 'Y', '2016-07-11 00:38:20'),
(573, 1, 97, '2016-07-12', 'Y', '2016-07-12 01:55:16'),
(574, 53, 134, '2016-07-13', 'Y', '2016-07-13 00:41:47'),
(575, 4, 53, '2016-07-14', 'Y', '2016-07-14 00:16:09'),
(576, 22, 22, '2016-07-15', 'Y', '2016-07-15 01:24:31'),
(577, 27, 31, '2016-07-16', 'Y', '2016-07-16 01:03:21'),
(578, 2, 49, '2016-07-17', 'Y', '2016-07-17 00:12:09'),
(579, 40, 100, '2016-07-18', 'Y', '2016-07-18 00:35:49'),
(580, 41, 146, '2016-07-19', 'Y', '2016-07-19 00:08:55'),
(581, 18, 90, '2016-07-20', 'Y', '2016-07-20 00:27:25'),
(582, 26, 50, '2016-07-21', 'Y', '2016-07-21 00:02:52'),
(583, 16, 56, '2016-07-22', 'Y', '2016-07-22 03:58:25'),
(584, 14, 29, '2016-07-23', 'Y', '2016-07-23 00:15:10'),
(585, 7, 107, '2016-07-24', 'Y', '2016-07-24 00:32:10'),
(586, 67, 84, '2016-07-25', 'Y', '2016-07-25 00:14:12'),
(587, 19, 27, '2016-07-26', 'Y', '2016-07-26 00:37:08'),
(588, 4, 49, '2016-07-27', 'Y', '2016-07-27 00:55:34'),
(589, 7, 22, '2016-07-28', 'Y', '2016-07-28 00:26:21'),
(590, 40, 40, '2016-07-29', 'Y', '2016-07-29 00:38:12'),
(591, 9, 37, '2016-07-30', 'Y', '2016-07-30 00:01:36'),
(592, 95, 100, '2016-07-31', 'Y', '2016-07-31 00:07:20'),
(593, 2, 35, '2016-08-01', 'Y', '2016-08-01 01:52:58'),
(594, 16, 49, '2016-08-02', 'Y', '2016-08-02 00:20:47'),
(595, 27, 103, '2016-08-03', 'Y', '2016-08-03 00:01:37'),
(596, 10, 25, '2016-08-04', 'Y', '2016-08-04 00:13:50'),
(597, 38, 38, '2016-08-05', 'Y', '2016-08-05 00:54:05'),
(598, 24, 24, '2016-08-06', 'Y', '2016-08-06 03:18:24'),
(599, 8, 66, '2016-08-07', 'Y', '2016-08-07 02:54:34'),
(600, 21, 48, '2016-08-08', 'Y', '2016-08-08 01:55:10'),
(601, 16, 33, '2016-08-09', 'Y', '2016-08-09 01:54:36'),
(602, 25, 25, '2016-08-10', 'Y', '2016-08-10 00:07:56'),
(603, 16, 34, '2016-08-11', 'Y', '2016-08-11 00:15:17'),
(604, 4, 59, '2016-08-12', 'Y', '2016-08-12 00:36:07'),
(605, 94, 94, '2016-08-13', 'Y', '2016-08-13 00:02:04'),
(606, 32, 32, '2016-08-14', 'Y', '2016-08-14 00:04:53'),
(607, 24, 38, '2016-08-15', 'Y', '2016-08-15 01:00:34'),
(608, 77, 87, '2016-08-16', 'Y', '2016-08-16 00:41:37'),
(609, 6, 31, '2016-08-17', 'Y', '2016-08-17 00:54:40'),
(610, 29, 29, '2016-08-18', 'Y', '2016-08-18 02:20:25'),
(611, 37, 47, '2016-08-19', 'Y', '2016-08-19 03:11:34'),
(612, 40, 40, '2016-08-20', 'Y', '2016-08-20 00:15:10'),
(613, 114, 160, '2016-08-21', 'Y', '2016-08-21 00:58:18'),
(614, 68, 115, '2016-08-22', 'Y', '2016-08-22 00:03:42'),
(615, 49, 95, '2016-08-23', 'Y', '2016-08-23 01:10:02'),
(616, 13, 86, '2016-08-24', 'Y', '2016-08-24 00:02:14'),
(617, 16, 61, '2016-08-25', 'Y', '2016-08-25 00:11:04'),
(618, 31, 31, '2016-08-26', 'Y', '2016-08-26 00:08:57'),
(619, 68, 82, '2016-08-27', 'Y', '2016-08-27 00:12:33'),
(620, 28, 110, '2016-08-28', 'Y', '2016-08-28 01:16:07'),
(621, 63, 100, '2016-08-29', 'Y', '2016-08-29 01:01:17'),
(622, 8, 103, '2016-08-30', 'Y', '2016-08-30 00:00:48'),
(623, 33, 57, '2016-08-31', 'Y', '2016-08-31 00:14:02'),
(624, 75, 186, '2016-09-01', 'Y', '2016-09-01 01:32:03'),
(625, 79, 79, '2016-09-02', 'Y', '2016-09-02 00:06:25'),
(626, 22, 213, '2016-09-03', 'Y', '2016-09-03 00:05:34'),
(627, 10, 83, '2016-09-04', 'Y', '2016-09-04 00:34:22'),
(628, 52, 69, '2016-09-05', 'Y', '2016-09-05 00:36:44'),
(629, 26, 69, '2016-09-06', 'Y', '2016-09-06 00:12:59'),
(630, 49, 49, '2016-09-07', 'Y', '2016-09-07 00:43:35'),
(631, 11, 49, '2016-09-08', 'Y', '2016-09-08 00:24:00'),
(632, 1, 55, '2016-09-09', 'Y', '2016-09-09 01:07:55'),
(633, 40, 47, '2016-09-10', 'Y', '2016-09-10 01:38:38'),
(634, 13, 13, '2016-09-11', 'Y', '2016-09-11 00:40:21'),
(635, 62, 64, '2016-09-12', 'Y', '2016-09-12 00:18:45'),
(636, 3, 236, '2016-09-13', 'Y', '2016-09-13 00:13:56'),
(637, 11, 67, '2016-09-14', 'Y', '2016-09-14 00:38:30'),
(638, 22, 26, '2016-09-15', 'Y', '2016-09-15 00:05:31'),
(639, 10, 26, '2016-09-16', 'Y', '2016-09-16 00:45:54'),
(640, 36, 59, '2016-09-17', 'Y', '2016-09-17 01:09:46'),
(641, 17, 33, '2016-09-18', 'Y', '2016-09-18 00:25:02'),
(642, 19, 68, '2016-09-19', 'Y', '2016-09-19 00:09:59'),
(643, 14, 80, '2016-09-20', 'Y', '2016-09-20 00:55:09'),
(644, 14, 43, '2016-09-21', 'Y', '2016-09-21 00:51:45'),
(645, 44, 83, '2016-09-22', 'Y', '2016-09-22 00:20:10'),
(646, 1, 1, '2016-09-23', 'Y', '2016-09-23 01:56:34'),
(647, 1, 64, '2016-09-23', 'Y', '2016-09-23 01:56:34'),
(648, 23, 49, '2016-09-24', 'Y', '2016-09-24 00:02:53'),
(649, 16, 29, '2016-09-25', 'Y', '2016-09-25 02:13:02'),
(650, 34, 49, '2016-09-26', 'Y', '2016-09-26 01:08:19'),
(651, 9, 110, '2016-09-27', 'Y', '2016-09-27 00:40:07'),
(652, 44, 134, '2016-09-28', 'Y', '2016-09-28 01:26:38'),
(653, 12, 62, '2016-09-29', 'Y', '2016-09-29 01:13:12'),
(654, 57, 57, '2016-09-30', 'Y', '2016-09-30 01:00:26'),
(655, 69, 102, '2016-10-01', 'Y', '2016-10-01 01:20:00'),
(656, 31, 77, '2016-10-02', 'Y', '2016-10-02 01:56:54'),
(657, 70, 131, '2016-10-03', 'Y', '2016-10-03 00:24:04'),
(658, 37, 49, '2016-10-04', 'Y', '2016-10-04 01:06:18'),
(659, 65, 100, '2016-10-05', 'Y', '2016-10-05 01:36:48'),
(660, 48, 48, '2016-10-06', 'Y', '2016-10-06 00:17:03'),
(661, 4, 48, '2016-10-07', 'Y', '2016-10-07 00:56:23'),
(662, 25, 25, '2016-10-08', 'Y', '2016-10-08 01:47:41'),
(663, 19, 52, '2016-10-09', 'Y', '2016-10-09 00:43:23'),
(664, 21, 65, '2016-10-10', 'Y', '2016-10-10 00:37:41'),
(665, 26, 146, '2016-10-11', 'Y', '2016-10-11 00:05:11'),
(666, 13, 88, '2016-10-12', 'Y', '2016-10-12 00:11:44'),
(667, 97, 130, '2016-10-13', 'Y', '2016-10-13 00:00:33'),
(668, 11, 33, '2016-10-14', 'Y', '2016-10-14 01:26:01'),
(669, 1, 123, '2016-10-15', 'Y', '2016-10-15 01:41:14'),
(670, 36, 77, '2016-10-16', 'Y', '2016-10-16 01:36:06'),
(671, 4, 131, '2016-10-17', 'Y', '2016-10-17 00:01:15'),
(672, 129, 183, '2016-10-18', 'Y', '2016-10-18 00:06:27'),
(673, 26, 107, '2016-10-19', 'Y', '2016-10-19 00:29:53'),
(674, 6, 40, '2016-10-20', 'Y', '2016-10-20 00:26:58'),
(675, 52, 52, '2016-10-21', 'Y', '2016-10-21 01:05:09'),
(676, 6, 47, '2016-10-22', 'Y', '2016-10-22 00:24:33'),
(677, 1, 125, '2016-10-23', 'Y', '2016-10-23 00:29:41'),
(678, 51, 93, '2016-10-24', 'Y', '2016-10-24 00:29:18'),
(679, 33, 85, '2016-10-25', 'Y', '2016-10-25 00:37:38'),
(680, 19, 95, '2016-10-26', 'Y', '2016-10-26 00:41:47'),
(681, 18, 31, '2016-10-27', 'Y', '2016-10-27 01:00:36'),
(682, 7, 40, '2016-10-28', 'Y', '2016-10-28 00:22:12'),
(683, 69, 69, '2016-10-29', 'Y', '2016-10-29 00:07:03'),
(684, 17, 35, '2016-10-30', 'Y', '2016-10-30 00:27:51'),
(685, 9, 51, '2016-10-31', 'Y', '2016-10-31 01:00:14'),
(686, 7, 66, '2016-11-01', 'Y', '2016-11-01 00:51:08'),
(687, 7, 50, '2016-11-02', 'Y', '2016-11-02 00:13:01'),
(688, 12, 33, '2016-11-03', 'Y', '2016-11-03 00:25:10'),
(689, 33, 33, '2016-11-04', 'Y', '2016-11-04 01:50:33'),
(690, 1, 83, '2016-11-05', 'Y', '2016-11-05 01:32:05'),
(691, 1, 81, '2016-11-06', 'Y', '2016-11-06 14:12:19'),
(692, 1, 64, '2016-11-07', 'Y', '2016-11-07 05:19:57'),
(693, 1, 47, '2016-11-08', 'Y', '2016-11-08 06:12:50'),
(694, 1, 26, '2016-11-09', 'Y', '2016-11-09 06:48:02'),
(695, 1, 3, '2016-11-22', 'Y', '2016-11-22 05:05:44'),
(696, 1, 46, '2016-12-07', 'Y', '2016-12-07 16:17:30'),
(697, 1, 39, '2016-12-08', 'Y', '2016-12-08 18:58:31'),
(698, 1, 86, '2016-12-09', 'Y', '2016-12-09 06:59:18'),
(699, 1, 23, '2016-12-10', 'Y', '2016-12-10 13:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hostess`
--

CREATE TABLE `tbl_hostess` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `image1` varchar(300) DEFAULT NULL,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `height` varchar(30) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `bust` varchar(30) NOT NULL,
  `hip` varchar(255) DEFAULT NULL,
  `waist` varchar(30) NOT NULL,
  `hair_long` varchar(250) NOT NULL,
  `eye_color` varchar(250) NOT NULL,
  `dress_size` varchar(250) NOT NULL,
  `shoe_size` varchar(250) NOT NULL,
  `pant_size` varchar(255) DEFAULT NULL,
  `model_region` varchar(255) DEFAULT NULL,
  `model_gender` varchar(255) DEFAULT NULL,
  `model_exp` varchar(255) DEFAULT NULL,
  `model_marrital_status` varchar(20) DEFAULT NULL,
  `model_age` varchar(20) DEFAULT NULL,
  `model_pref` varchar(255) DEFAULT NULL,
  `cv_path` varchar(250) DEFAULT NULL,
  `description` text,
  `is_active` enum('Y','N') CHARACTER SET utf8 NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hostess`
--

INSERT INTO `tbl_hostess` (`id`, `orderby`, `code`, `image1`, `name`, `contact_no`, `email`, `city`, `country`, `height`, `weight`, `bust`, `hip`, `waist`, `hair_long`, `eye_color`, `dress_size`, `shoe_size`, `pant_size`, `model_region`, `model_gender`, `model_exp`, `model_marrital_status`, `model_age`, `model_pref`, `cv_path`, `description`, `is_active`, `added_date`) VALUES
(57, 1, '', '', 'sAneesh Ponnappan', '8589055080', 'aneesh.anniyan@gmail.com', 'Kollam', 'AE', '180', '80', '29', '29', '20', '120', 'Blue', 'XL', '42', 'L', 'meditaranian', 'female', '3 y 5 Months', 'single', '12_18', 'a:5:{i:0;s:10:"automobile";i:1;s:5:"malls";i:2;s:11:"conferences";i:3;s:11:"supermarket";i:4;s:8:"weddings";}', 'DOC-472a378e1f09721.doc', 'Hi good to paraticiapte with you', 'N', '2016-12-09 12:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hostess_images`
--

CREATE TABLE `tbl_hostess_images` (
  `hostess_fk` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `added_date` datetime DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hostess_images`
--

INSERT INTO `tbl_hostess_images` (`hostess_fk`, `image`, `added_date`, `id`) VALUES
(57, 'IMG-080d012e713f2b5.jpg', '2016-12-09 12:06:09', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hostess_language`
--

CREATE TABLE `tbl_hostess_language` (
  `hostess_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hostess_language`
--

INSERT INTO `tbl_hostess_language` (`hostess_id`, `language_id`) VALUES
(57, 28),
(57, 29),
(57, 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languages`
--

CREATE TABLE `tbl_languages` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `is_active` enum('Y','N') CHARACTER SET utf8 NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_languages`
--

INSERT INTO `tbl_languages` (`id`, `orderby`, `name_en`, `is_active`, `added_date`) VALUES
(28, 1, 'English', 'Y', '2015-09-27 10:46:07'),
(29, 2, 'Arabic', 'Y', '2015-09-27 10:46:12'),
(30, 3, 'German', 'Y', '2015-09-27 10:46:16'),
(32, 4, 'Afrikaans', 'Y', '2015-10-05 00:41:55'),
(33, 5, 'Bahasa Indonesia', 'Y', '2015-10-05 00:42:13'),
(34, 6, 'Bahasa Melayu', 'Y', '2015-10-05 00:42:15'),
(35, 7, 'Català', 'Y', '2015-10-05 00:42:18'),
(36, 8, 'Čeština', 'Y', '2015-10-05 00:42:21'),
(37, 9, 'Dansk', 'Y', '2015-10-05 00:42:24'),
(38, 10, 'Deutsch', 'Y', '2015-10-05 00:42:26'),
(39, 11, 'Eesti', 'Y', '2015-10-05 00:42:29'),
(40, 12, 'English (United Kingdom)', 'Y', '2015-10-05 00:42:37'),
(41, 13, 'Spanish', 'Y', '2015-10-05 00:42:40'),
(42, 14, 'Spanish (Latin American)', 'Y', '2015-10-05 00:42:43'),
(43, 15, 'Euskara', 'Y', '2015-10-05 00:42:47'),
(44, 16, 'Filipino', 'Y', '2015-10-05 00:42:50'),
(45, 17, 'Français', 'Y', '2015-10-05 00:42:53'),
(46, 18, 'Français (Canada)', 'Y', '2015-10-05 00:42:56'),
(47, 19, 'Galego', 'Y', '2015-10-05 00:43:16'),
(48, 20, 'Hrvatski', 'Y', '2015-10-05 00:43:22'),
(49, 21, 'Isizulu', 'Y', '2015-10-05 00:43:25'),
(50, 22, 'Íslenska', 'Y', '2015-10-05 00:43:29'),
(51, 23, 'Italiano', 'Y', '2015-10-05 00:43:33'),
(52, 24, 'Kiswahili', 'Y', '2015-10-05 00:43:36'),
(53, 25, 'Latviešu', 'Y', '2015-10-05 00:43:41'),
(54, 26, 'Lietuvių', 'Y', '2015-10-05 00:43:48'),
(55, 27, 'Magyar', 'Y', '2015-10-05 00:44:01'),
(56, 28, 'Nederlands', 'Y', '2015-10-05 00:44:06'),
(57, 29, 'Norsk', 'Y', '2015-10-05 00:44:14'),
(58, 30, 'Polski', 'Y', '2015-10-05 00:44:20'),
(59, 31, 'Português (Brasil)', 'Y', '2015-10-05 00:44:25'),
(60, 32, 'Português (Portugal)', 'Y', '2015-10-05 00:44:28'),
(61, 33, 'Română', 'Y', '2015-10-05 00:44:32'),
(62, 34, 'Slovenčina', 'Y', '2015-10-05 00:44:35'),
(63, 35, 'Slovenščina', 'Y', '2015-10-05 00:44:39'),
(64, 36, 'Suomi', 'Y', '2015-10-05 00:44:43'),
(65, 37, 'Svenska', 'Y', '2015-10-05 00:44:59'),
(66, 38, 'Vietnamese', 'Y', '2015-10-05 00:45:03'),
(67, 39, 'Turkish', 'Y', '2015-10-05 00:45:06'),
(68, 40, 'Japanese', 'Y', '2015-10-05 00:46:35'),
(69, 41, 'Chinese (Traditional Chinese)', 'Y', '2015-10-05 00:46:44'),
(70, 42, 'Chinese (Simplified Chinese)', 'Y', '2015-10-05 00:46:47'),
(71, 43, 'Chinese', 'Y', '2015-10-05 00:46:51'),
(72, 44, 'Korean', 'Y', '2015-10-05 00:46:55'),
(73, 45, 'Thai', 'Y', '2015-10-05 00:46:58'),
(74, 46, 'Malayalam', 'Y', '2015-10-05 00:47:05'),
(75, 47, 'Kannada', 'Y', '2015-10-05 00:47:12'),
(76, 48, 'Telugu', 'Y', '2015-10-05 00:47:15'),
(77, 49, 'Tamil', 'Y', '2015-10-05 00:47:32'),
(78, 50, 'Gujrathi', 'Y', '2015-10-05 00:47:36'),
(79, 51, 'Bengali', 'Y', '2015-10-05 00:47:40'),
(80, 52, 'Hindi', 'Y', '2015-10-05 00:47:44'),
(81, 53, 'Marathi', 'Y', '2015-10-05 00:47:47'),
(82, 54, 'Amharic', 'Y', '2015-10-05 00:47:54'),
(83, 55, 'Persian', 'Y', '2015-10-05 00:48:04'),
(85, 57, 'Urdu', 'Y', '2015-10-05 00:48:20'),
(86, 58, 'Hebrew', 'Y', '2015-10-05 00:48:27'),
(87, 59, 'Ukraine', 'Y', '2015-10-05 00:48:33'),
(88, 60, 'Serbian', 'Y', '2015-10-05 00:48:37'),
(89, 61, 'Russian', 'Y', '2015-10-05 00:48:41'),
(90, 62, 'Bulgarian', 'Y', '2015-10-05 00:48:44'),
(91, 63, 'Greek', 'Y', '2015-10-05 00:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_models`
--

CREATE TABLE `tbl_models` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `image1` varchar(300) DEFAULT NULL,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `height` varchar(30) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `bust` varchar(30) NOT NULL,
  `hip` varchar(255) DEFAULT NULL,
  `waist` varchar(30) NOT NULL,
  `hair_long` varchar(250) NOT NULL,
  `eye_color` varchar(250) NOT NULL,
  `dress_size` varchar(250) NOT NULL,
  `shoe_size` varchar(250) NOT NULL,
  `pant_size` varchar(255) DEFAULT NULL,
  `model_region` varchar(255) DEFAULT NULL,
  `model_gender` varchar(255) DEFAULT NULL,
  `model_info` varchar(255) DEFAULT NULL,
  `model_exp` varchar(255) DEFAULT NULL,
  `model_marrital_status` varchar(20) DEFAULT NULL,
  `model_age` varchar(20) DEFAULT NULL,
  `cv_path` varchar(250) DEFAULT NULL,
  `language` varchar(200) DEFAULT NULL,
  `description` text,
  `is_active` enum('Y','N') CHARACTER SET utf8 NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_models`
--

INSERT INTO `tbl_models` (`id`, `orderby`, `code`, `image1`, `name`, `contact_no`, `email`, `city`, `country`, `height`, `weight`, `bust`, `hip`, `waist`, `hair_long`, `eye_color`, `dress_size`, `shoe_size`, `pant_size`, `model_region`, `model_gender`, `model_info`, `model_exp`, `model_marrital_status`, `model_age`, `cv_path`, `language`, `description`, `is_active`, `added_date`) VALUES
(57, 41, '', '', 'Aneesh Ponnappan', '21323213', 'aneesh.anniyan@gmail.com', 'Kollam', 'GB', '180', '80', '29', '20', '20', '120', 'Blue', 'XL', '42', 'L', 'meditaranian', 'male', 'celebrity', '3Y', 'married', '18_24', 'FILEa39c27cc7512bee.doc', NULL, 'Hi good message', 'Y', '2016-12-09 14:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_models_images`
--

CREATE TABLE `tbl_models_images` (
  `model_fk` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `added_date` datetime DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_models_images`
--

INSERT INTO `tbl_models_images` (`model_fk`, `image`, `added_date`, `id`) VALUES
(1, 'IMG-39db188508fc395.jpg', '2015-09-17 10:11:00', 2),
(1, 'IMG-3694649939074e9.jpg', '2015-09-17 10:56:56', 7),
(1, 'IMG-3ec0aa4a9b8fde3.jpg', '2015-09-17 10:56:56', 8),
(1, 'IMG-a76380f6d813f6c.JPG', '2015-09-17 10:56:56', 9),
(2, 'IMG-f415cdb8c59fd2f.jpg', '2015-09-17 11:41:34', 10),
(2, 'IMG-bc1f5c43603a0b2.jpg', '2015-09-17 11:41:34', 11),
(3, 'IMG-3c8e5943d961ab5.jpg', '2015-09-22 01:50:47', 12),
(4, 'IMG-07009281a428f5e.jpg', '2015-09-22 01:56:48', 13),
(5, 'IMG-8dd944b2b40d5e6.jpg', '2015-09-22 02:03:58', 14),
(5, 'IMG-949a51405a33a3a.jpg', '2015-09-22 02:03:58', 15),
(6, 'IMG-87e40693ed21ad3.jpg', '2015-09-22 02:04:42', 16),
(6, 'IMG-26bd2f82d4aacca.jpg', '2015-09-22 02:04:42', 17),
(6, 'IMG-9729f85b3f7db4f.jpg', '2015-09-22 02:04:42', 18),
(7, 'IMG-de54d5cfaa0e3f0.jpg', '2015-09-22 02:05:50', 19),
(8, 'IMG-52705de6b887e5b.jpg', '2015-09-27 11:34:45', 20),
(8, 'IMG-7ff4fd641affb4c.jpg', '2015-09-27 11:34:45', 21),
(8, 'IMG-96d2177b3d7fc84.jpg', '2015-09-27 11:34:45', 22),
(10, 'IMG-76bf0dbaec3d683.jpg', '2015-09-29 12:26:35', 23),
(10, 'IMG-038b5233f842a06.jpg', '2015-09-29 12:26:40', 24),
(12, 'IMG-b9cb6d8a173e3f0.jpg', '2015-09-29 12:30:06', 25),
(12, 'IMG-1e6e0e744cf9d95.JPG', '2015-09-29 12:30:06', 26),
(12, 'IMG-4369eeefeef689d.jpg', '2015-09-29 12:30:06', 27),
(12, 'IMG-a2c871f6426b68a.jpg', '2015-09-29 12:30:06', 28),
(13, 'IMG-d2e3e228208c6b2.jpg', '2015-10-05 04:51:16', 29),
(13, 'IMG-23f32792e21dcc6.jpg', '2015-10-05 04:51:18', 30),
(13, 'IMG-68d67284f37ae54.jpg', '2015-10-05 04:51:19', 31),
(14, 'IMG-4e63eab0ad541ab.JPG', '2015-10-05 04:59:20', 32),
(15, 'IMG-eea359b816963be.JPG', '2015-10-10 11:09:05', 33),
(15, 'IMG-ef41f971ae14a79.JPG', '2015-10-10 11:09:06', 34),
(15, 'IMG-00352445f5bcff2.JPG', '2015-10-10 11:09:06', 35),
(15, 'IMG-0626daf075048df.JPG', '2015-10-10 11:09:06', 36),
(15, 'IMG-944b64b8a0239fb.JPG', '2015-10-10 11:09:06', 37),
(15, 'IMG-04e8957d86946d0.JPG', '2015-10-10 11:09:14', 38),
(16, 'IMG-464dd8065641ecc.jpg', '2015-10-10 01:33:18', 39),
(16, 'IMG-297e02303a028d2.JPG', '2015-10-10 01:33:20', 40),
(16, 'IMG-f1f9ca690afa4ba.jpg', '2015-10-10 01:33:20', 41),
(17, 'IMG-a757c7fe8a66c8c.png', '2015-10-10 06:59:23', 42),
(17, 'IMG-84649f2f18027dc.png', '2015-10-10 06:59:23', 43),
(17, 'IMG-c1a8507b351d3bb.jpg', '2015-10-10 06:59:23', 44),
(17, 'IMG-bc6a0c5cb934d4b.png', '2015-10-10 06:59:24', 45),
(17, 'IMG-3e8f3d1138b2a13.png', '2015-10-10 06:59:24', 46),
(18, 'IMG-869ebaa1e6e3a06.jpg', '2015-10-10 11:14:46', 47),
(18, 'IMG-78bab0283b537c7.jpg', '2015-10-10 11:14:46', 48),
(19, 'IMG-9d0cf0447903614.jpg', '2015-10-11 02:02:39', 49),
(20, 'IMG-e8b11eb901e00e3.jpg', '2015-10-11 04:51:27', 50),
(20, 'IMG-c555a61621cc328.jpg', '2015-10-11 04:51:27', 51),
(20, 'IMG-ce6ad052acac42b.jpg', '2015-10-11 04:51:27', 52),
(20, 'IMG-f7207f14bc8e02d.jpg', '2015-10-11 04:51:28', 53),
(20, 'IMG-853d9d2b0554cc3.jpg', '2015-10-11 04:51:28', 54),
(20, 'IMG-f6a99da20a5f80a.png', '2015-10-11 04:51:29', 55),
(21, 'IMG-71aba55e0d27407.jpg', '2015-10-12 02:50:26', 56),
(21, 'IMG-c4efaf638438981.jpg', '2015-10-12 02:50:27', 57),
(21, 'IMG-8181f91d185d324.jpg', '2015-10-12 02:50:28', 58),
(21, 'IMG-b23d71cd15d0517.jpg', '2015-10-12 02:50:28', 59),
(22, 'IMG-dd4dbcf8448fdbc.jpg', '2015-10-12 06:27:47', 60),
(22, 'IMG-730504a31104d96.jpg', '2015-10-12 06:27:47', 61),
(22, 'IMG-500a63b58456a24.jpg', '2015-10-12 06:27:48', 62),
(23, 'IMG-de400638feffae2.jpg', '2015-10-12 07:47:54', 63),
(23, 'IMG-69e4c4481531343.jpg', '2015-10-12 07:47:54', 64),
(23, 'IMG-c586677eb0634eb.png', '2015-10-12 07:47:55', 65),
(23, 'IMG-d58ac60f04a047d.jpg', '2015-10-12 07:47:58', 66),
(23, 'IMG-def94a4faaf86b9.jpg', '2015-10-12 07:48:01', 67),
(24, 'IMG-c3f40b40980f55c.jpg', '2015-10-12 10:54:40', 68),
(24, 'IMG-ab17b5623915c69.jpg', '2015-10-12 10:54:40', 69),
(24, 'IMG-014b0f01836b281.jpg', '2015-10-12 10:54:40', 70),
(24, 'IMG-8d768c7709f7dab.jpg', '2015-10-12 10:54:41', 71),
(24, 'IMG-ad9d9a502280e9c.jpg', '2015-10-12 10:54:41', 72),
(24, 'IMG-27449f4a7de5267.jpg', '2015-10-12 10:54:42', 73),
(25, 'IMG-de3f4ae6c92bda9.jpg', '2015-10-13 03:21:30', 74),
(25, 'IMG-84f8a534fbbdf15.JPG', '2015-10-13 03:21:31', 75),
(25, 'IMG-595ffe8a8549a49.JPG', '2015-10-13 03:21:32', 76),
(25, 'IMG-ec723a5ebfa9b22.jpg', '2015-10-13 03:21:32', 77),
(25, 'IMG-4487c970cf61c59.jpg', '2015-10-13 03:21:33', 78),
(26, 'IMG-159fc87c6b78f3c.jpg', '2015-10-14 08:33:25', 79),
(26, 'IMG-80f38bb8b58e40f.jpg', '2015-10-14 08:33:25', 80),
(26, 'IMG-1e3fc278352c8a4.jpg', '2015-10-14 08:33:26', 81),
(26, 'IMG-7348857dcd74c1c.jpg', '2015-10-14 08:33:36', 82),
(26, 'IMG-903a63dc7ef0537.jpg', '2015-10-14 08:33:39', 83),
(27, 'IMG-b1b4f6f12fea0b2.jpg', '2015-10-15 10:25:12', 84),
(27, 'IMG-4b4cfe8b06da088.jpg', '2015-10-15 10:25:12', 85),
(27, 'IMG-45f43acdaa70168.jpg', '2015-10-15 10:25:12', 86),
(28, 'IMG-cd210f5cd6088c3.jpg', '2015-10-16 11:03:28', 87),
(29, 'IMG-4e1fd32a85535f9.jpg', '2015-11-09 05:12:37', 88),
(29, 'IMG-26ccee3038fc5d7.jpg', '2015-11-09 05:12:38', 89),
(29, 'IMG-921c03a9a526a9d.jpg', '2015-11-09 05:12:40', 90),
(29, 'IMG-dd2d953ba3661aa.jpg', '2015-11-09 05:12:40', 91),
(29, 'IMG-6b5b60702c92e48.jpg', '2015-11-09 05:12:41', 92),
(29, 'IMG-aaaddd83bad69bf.jpg', '2015-11-09 05:12:41', 93),
(30, 'IMG-1124db4ca0e0016.jpg', '2015-11-12 07:32:51', 94),
(30, 'IMG-1800cfd4b13a9dc.jpg', '2015-11-12 07:32:51', 95),
(30, 'IMG-3ea811ed37876e4.jpg', '2015-11-12 07:32:56', 96),
(30, 'IMG-6c23cba6973b0f6.jpg', '2015-11-12 07:33:09', 97),
(30, 'IMG-42a9460253f50cf.jpg', '2015-11-12 07:34:15', 98),
(31, 'IMG-4334c1642cfd252.jpg', '2015-11-24 04:57:47', 99),
(33, 'IMG-4ef44cd87d27573.JPG', '2015-12-27 05:25:20', 100),
(34, 'IMG-c1a1f7bf21816d4.jpg', '2015-12-28 06:45:15', 101),
(34, 'IMG-000992381afa7f3.jpg', '2015-12-28 06:45:15', 102),
(36, 'IMG-f0737a706f69ad8.jpg', '2016-01-27 08:46:30', 103),
(36, 'IMG-b12ccbce6dc06dc.jpg', '2016-01-27 08:46:30', 104),
(36, 'IMG-5acd5760017c69f.jpg', '2016-01-27 08:46:31', 105),
(36, 'IMG-1c2f537791ad0ff.jpg', '2016-01-27 08:46:31', 106),
(36, 'IMG-dce9118194ef7ca.jpg', '2016-01-27 08:46:31', 107),
(36, 'IMG-a3411f7e1cf281a.jpg', '2016-01-27 08:46:31', 108),
(37, 'IMG-aef1f70c7561a45.JPG', '2016-02-02 04:53:17', 109),
(37, 'IMG-61e9384509622c4.jpg', '2016-02-02 04:53:18', 110),
(37, 'IMG-d3e05f7f4874f96.jpg', '2016-02-02 04:53:18', 111),
(38, 'IMG-475ffcfda485040.jpg', '2016-02-06 03:27:13', 112),
(39, 'IMG-f5b5de389bdde9c.jpg', '2016-03-02 07:42:14', 113),
(39, 'IMG-b2cba13d541e726.jpg', '2016-03-02 07:42:16', 114),
(39, 'IMG-c6aafaf4352b4d5.jpg', '2016-03-02 07:42:16', 115),
(39, 'IMG-a4a31a21042bb3a.jpg', '2016-03-02 07:42:20', 116),
(40, 'IMG-14dd4ba15d88580.jpg', '2016-03-03 04:05:01', 117),
(40, 'IMG-09d8f3d770d6e10.jpg', '2016-03-03 04:05:01', 118),
(40, 'IMG-0cdfd186f7cd9b6.jpg', '2016-03-03 04:05:01', 119),
(40, 'IMG-452ff3f0d690fc2.jpg', '2016-03-03 04:05:01', 120),
(40, 'IMG-36c75995e7b62ff.jpg', '2016-03-03 04:05:02', 121),
(41, 'IMG-686c9935736ef71.jpg', '2016-03-06 12:11:59', 122),
(42, 'IMG-8a8cf12ece3cbc2.jpg', '2016-03-17 06:35:33', 123),
(43, 'IMG-1eda425963e0f9d.JPG', '2016-05-09 09:54:01', 124),
(43, 'IMG-13479013a17bcfa.jpg', '2016-05-09 09:54:02', 125),
(43, 'IMG-7622e11939c3478.jpg', '2016-05-09 09:54:03', 126),
(43, 'IMG-6d4b0b8e1226531.jpg', '2016-05-09 09:54:08', 127),
(43, 'IMG-93a4c8a7e9600c9.jpg', '2016-05-09 09:54:15', 128),
(44, 'IMG-6868e181934ed6f.jpg', '2016-05-09 12:47:07', 129),
(45, 'IMG-f37604eb43925b2.jpg', '2016-07-22 04:12:13', 130),
(45, 'IMG-0cad024c9541340.jpg', '2016-07-22 04:12:19', 131),
(45, 'IMG-5af23859f2621ae.jpg', '2016-07-22 04:12:19', 132),
(45, 'IMG-6d5c82035e71a2c.jpg', '2016-07-22 04:12:21', 133),
(45, 'IMG-c2a77d91ee8492f.jpg', '2016-07-22 04:12:21', 134),
(45, 'IMG-2e4a5fd33f1bc41.jpg', '2016-07-22 04:12:21', 135),
(46, 'IMG-732e0f416913e3a.jpg', '2016-10-10 11:04:44', 136),
(46, 'IMG-cff22c66099ba2b.jpg', '2016-10-10 11:04:44', 137),
(46, 'IMG-02a073fd6cbf67b.jpg', '2016-10-10 11:04:44', 138),
(47, 'IMG-828a63ee6c6f637.jpg', '2016-10-22 02:56:41', 139),
(48, 'IMG-75ad1cb45297493.jpg', '2016-10-23 09:55:13', 140),
(48, 'IMG-07032d7cfa25aa8.jpg', '2016-10-23 09:55:14', 141),
(48, 'IMG-28ff10dde567635.jpg', '2016-10-23 09:55:16', 142),
(52, 'IMG-791290d6679d2f4.jpg', '2016-11-06 07:37:57', 143),
(52, 'IMG-e4ebd53b4f24df1.jpg', '2016-11-06 07:37:57', 144),
(53, 'IMG-ed738183fca3840.jpg', '2016-11-06 07:44:13', 145),
(53, 'IMG-4a261f7ad650be2.jpg', '2016-11-06 07:44:14', 146),
(54, 'IMG-3ce2a0028adbb65.jpg', '2016-11-06 07:45:24', 148),
(54, 'IMG-8c9a08d7e4c8b8d.jpg', '2016-11-08 07:59:32', 149),
(55, 'IMG-236f93edfa8f09b', '2016-11-08 08:11:31', 150),
(55, 'IMG-678d28e06a3d639', '2016-11-08 08:11:31', 151),
(55, 'IMG-b43512ade6d941e', '2016-11-08 08:11:31', 152),
(56, 'IMG-fbcfa0c8accf94f.jpg', '2016-12-08 08:00:39', 153),
(57, 'IMG-418c4c4a106b8a2', '2016-12-09 02:58:34', 154);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_model_language`
--

CREATE TABLE `tbl_model_language` (
  `model_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_model_language`
--

INSERT INTO `tbl_model_language` (`model_id`, `language_id`) VALUES
(8, 28),
(8, 30),
(7, 28),
(7, 29),
(9, 28),
(9, 29),
(10, 28),
(10, 29),
(10, 30),
(11, 28),
(11, 29),
(11, 30),
(12, 28),
(12, 29),
(14, 28),
(14, 29),
(13, 28),
(13, 87),
(13, 89),
(15, 28),
(15, 87),
(15, 89),
(16, 28),
(16, 87),
(16, 89),
(17, 28),
(18, 28),
(19, 28),
(19, 54),
(20, 28),
(20, 44),
(21, 28),
(21, 29),
(21, 51),
(21, 87),
(21, 89),
(22, 29),
(23, 28),
(23, 87),
(23, 89),
(24, 28),
(24, 44),
(25, 28),
(25, 29),
(26, 28),
(26, 89),
(27, 28),
(27, 29),
(27, 85),
(28, 28),
(28, 29),
(28, 89),
(29, 28),
(30, 28),
(30, 29),
(31, 28),
(31, 29),
(31, 67),
(31, 89),
(32, 28),
(32, 30),
(32, 40),
(32, 85),
(33, 28),
(33, 44),
(34, 28),
(34, 48),
(34, 88),
(34, 89),
(35, 28),
(35, 87),
(35, 89),
(36, 28),
(36, 87),
(36, 89),
(37, 28),
(37, 80),
(37, 85),
(38, 28),
(39, 28),
(39, 87),
(39, 89),
(40, 28),
(40, 29),
(41, 28),
(41, 29),
(41, 89),
(42, 28),
(43, 28),
(43, 87),
(43, 89),
(44, 28),
(44, 87),
(44, 89),
(45, 28),
(45, 40),
(45, 87),
(45, 89),
(46, 28),
(46, 80),
(46, 85),
(47, 28),
(47, 51),
(47, 87),
(47, 89),
(48, 28),
(48, 29),
(49, 28),
(50, 28),
(50, 34),
(50, 35),
(51, 28),
(51, 29),
(52, 28),
(52, 29),
(53, 28),
(53, 29),
(53, 30),
(54, 28),
(54, 29),
(54, 32),
(55, 28),
(55, 29),
(55, 30),
(55, 33),
(56, 28),
(56, 29),
(56, 30),
(57, 28),
(57, 30),
(57, 32),
(57, 34);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `heading_en` varchar(255) CHARACTER SET utf8 NOT NULL,
  `heading_ar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_en` text CHARACTER SET utf8 NOT NULL,
  `description_ar` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `image1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_active` enum('Y','N') CHARACTER SET utf8 NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `orderby`, `heading_en`, `heading_ar`, `description_en`, `description_ar`, `image1`, `is_active`, `added_date`) VALUES
(5, 3, 'BECHAM FRAGRANCE..s', 'BECHAM FRAGRAsNCE..', '<p>BECHAM FRAGRANCE..</p>', '<p>BECHAM FRAGRANCE..</p>', 'IMG-772ed0843d67778.jpg', 'Y', '2015-05-20 14:28:13'),
(3, 1, 'BECHAM FRAGRANCE..2', 'BECHAM FRAGRANCE..2', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'IMG-586766a82b2e654.jpg', 'Y', '2014-10-09 08:13:39'),
(4, 2, 'BECHAM FRAGRANCE..', 'BECHAM FRAGRANCE..', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'IMG-fa12a8dc500d250.jpg', 'Y', '2015-05-20 11:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletters`
--

CREATE TABLE `tbl_newsletters` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `image1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_active` enum('Y','N') CHARACTER SET utf8 NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_newsletters`
--

INSERT INTO `tbl_newsletters` (`id`, `orderby`, `title`, `description`, `image1`, `is_active`, `added_date`) VALUES
(2, 0, 'This is the Newsletter Made Today', '<table style="width: 750px;" border="0" cellspacing="0" cellpadding="0" align="center">\r\n<tbody>\r\n<tr>\r\n<td align="left" valign="top">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style="padding: 15px; font-family: Georgia; font-size: 18px; color: #fff; font-style: italic;" align="left" valign="middle" bgcolor="#b88f00" height="80">Ministry of Health</td>\r\n</tr>\r\n<tr>\r\n<td style="font-size: 2px; height: 3px;" align="left" valign="top" bgcolor="#009249">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style="font-size: 2px; height: 3px;" align="left" valign="top" bgcolor="#e81736">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td align="left" valign="top">\r\n<table style="background-color: #f5f5f5; width: 750px; border: #d8d8d8 1px solid;" border="0" cellspacing="0" cellpadding="0" align="center">\r\n<tbody>\r\n<tr>\r\n<td align="left" valign="top">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td align="center" valign="top">\r\n<table style="width: 700px; border: #d8d8d8 1px solid;" border="0" cellspacing="0" cellpadding="0" align="center">\r\n<tbody>\r\n<tr>\r\n<td style="padding: 15px;" align="left" valign="top" bgcolor="#ffffff">\r\n<p><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: x-small;"><span style="font-size: large;">D</span><strong>ear Member,</strong></span></p>\r\n<p><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: x-small;">Here we can type our offers or matter<br />&nbsp;asdfasdf asdf asdf asdf asdf<br /><br />Wishing you the best.</span></p>\r\n<p><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: large;">S</span><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: x-small;"><strong>incerely,</strong><br /><span style="color: #000066;"><a href="../../">shams:10064</a></span></span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td align="center" valign="top">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="font-size: 2px; height: 3px;" align="left" valign="top" bgcolor="#e81736">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style="font-size: 2px; height: 3px;" align="left" valign="top" bgcolor="#009249">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style="padding: 10px; font-family: Georgia; font-size: 11px; color: #fff; font-style: italic;" align="left" valign="middle" bgcolor="#b88f00">This mail is automatically sent to you by shams:10064. Please do not reply to this email. <br />This has been generated upon request and not a part of spam mails.</td>\r\n</tr>\r\n<tr>\r\n<td align="left" valign="middle" height="10">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style="font-family: tahoma; font-size: 11px; color: #999;" align="center" valign="middle">Copyrights 2012 Ministry of Health, All rights reserved.<br />If you want to un-subsribe from our newsletter, Please email us at</td>\r\n</tr>\r\n</tbody>\r\n</table>', '', 'Y', '2012-09-13 19:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter_settings`
--

CREATE TABLE `tbl_newsletter_settings` (
  `id` int(11) NOT NULL,
  `tbl_newsletter_id` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `from_email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `from_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `banner_link` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `is_smtp` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `smtp_host` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `smtp_email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `smtp_password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `smtp_secure` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `smtp_port` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `message` longtext CHARACTER SET utf8 NOT NULL,
  `template_header` text CHARACTER SET utf8 NOT NULL,
  `template_footer` text CHARACTER SET utf8 NOT NULL,
  `banner1` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `added_date` datetime NOT NULL,
  `is_active` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_newsletter_settings`
--

INSERT INTO `tbl_newsletter_settings` (`id`, `tbl_newsletter_id`, `title`, `from_email`, `from_name`, `banner_link`, `is_smtp`, `smtp_host`, `smtp_email`, `smtp_password`, `smtp_secure`, `smtp_port`, `message`, `template_header`, `template_footer`, `banner1`, `added_date`, `is_active`) VALUES
(1, '', 'Whats happening on our website', '', '', 'www.google.com', 'N', 'smtp.gmail.com', '', '', 'ssl', '465', '<p><span style="font-size: small;">Dear Member</span>, <br /><br />Here we can type our offers or matter.</p>', '<body leftmargin=''0'' topmargin=''0''>\r\n<table width=''750'' border=''0'' align=''center'' cellpadding=''0'' cellspacing=''0''>\r\n  <tr>\r\n    <td align=''left'' valign=''top''> </td>\r\n  </tr>\r\n  <tr>\r\n    <td height=''80'' align=''left'' valign=''middle'' bgcolor=''#B88F00'' style=''padding:15px;font-family:Georgia;font-size:18px;color:#FFF;font-style:italic''>Ministry of Health</td>\r\n  </tr>\r\n  <tr>\r\n    <td align=''left'' valign=''top'' bgcolor=''#009249'' style=''font-size:2px;height:3px;''></td>\r\n  </tr>\r\n  <tr>\r\n    <td align=''left'' valign=''top'' bgcolor=''#E81736'' style=''font-size:2px;height:3px;''></td>\r\n  </tr>\r\n  <tr>\r\n    <td align=''left'' valign=''top''><table width=''750'' border=''0'' align=''center'' cellpadding=''0'' cellspacing=''0'' style=''background-color:#F5F5F5; border:1px solid #D8D8D8;''>\r\n        <tr>\r\n          <td align=''left'' valign=''top''> </td>\r\n        </tr>\r\n        <tr>\r\n          <td align=''center'' valign=''top''><table width=''700'' border=''0'' align=''center'' cellpadding=''0'' cellspacing=''0'' style=''border:1px solid #D8D8D8;''>\r\n              <tr>\r\n                <td align=''left'' valign=''top'' bgcolor=''#FFFFFF'' style=''padding:15px;''>', '<p><font face=''Verdana, Arial, Helvetica, sans-serif'' size=''5''>S</font><font face=''Verdana, Arial, Helvetica, sans-serif'' size=''2''><b>incerely,</b><br />\r\n                  <font color=''#000066''><a href=''http://$txt_site_name''>$txt_site_name</a></font></font></p></td>\r\n              </tr>\r\n            </table></td>\r\n        </tr>\r\n        <tr>\r\n          <td align=''center'' valign=''top''> </td>\r\n        </tr>\r\n      </table></td>\r\n  </tr>\r\n  <tr>\r\n    <td align=''left'' valign=''top'' bgcolor=''#E81736'' style=''font-size:2px;height:3px;''></td>\r\n  </tr>\r\n  <tr>\r\n    <td align=''left'' valign=''top'' bgcolor=''#009249'' style=''font-size:2px;height:3px;''></td>\r\n  </tr>\r\n  <tr>\r\n    <td align=''left'' valign=''middle'' bgcolor=''#B88F00'' style=''padding:10px; font-family:Georgia;font-size:11px;color:#FFF;font-style:italic''>This mail is automatically sent to you by $txt_site_name. Please do not reply to this email. <br />\r\n      This has been generated upon request and not a part of spam mails.</td>\r\n  </tr>\r\n  <tr>\r\n    <td align=''left'' valign=''middle'' height=''10''></td>\r\n  </tr>\r\n  <tr>\r\n    <td align=''center'' valign=''middle'' style=''font-family:tahoma;font-size:11px;color:#999;''>Copyrights 2012 Ministry of Health, All rights reserved.<br>\r\n      If you want to un-subsribe from our newsletter, Please email us at </td>\r\n  </tr>\r\n</table>\r\n</body>', 'EBAN-677266aa6915b6b.jpg', '2011-09-11 16:02:18', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photographer`
--

CREATE TABLE `tbl_photographer` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `image1` varchar(300) DEFAULT NULL,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `model_region` varchar(255) DEFAULT NULL,
  `model_gender` varchar(255) DEFAULT NULL,
  `model_info` varchar(255) DEFAULT NULL,
  `model_exp` varchar(255) DEFAULT NULL,
  `model_marrital_status` varchar(20) DEFAULT NULL,
  `model_age` varchar(20) DEFAULT NULL,
  `model_spl` varchar(255) DEFAULT NULL,
  `model_spl_other` varchar(255) DEFAULT NULL,
  `cv_path` varchar(250) DEFAULT NULL,
  `description` text,
  `is_active` enum('Y','N') CHARACTER SET utf8 NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_photographer`
--

INSERT INTO `tbl_photographer` (`id`, `orderby`, `code`, `image1`, `name`, `contact_no`, `email`, `city`, `country`, `model_region`, `model_gender`, `model_info`, `model_exp`, `model_marrital_status`, `model_age`, `model_spl`, `model_spl_other`, `cv_path`, `description`, `is_active`, `added_date`) VALUES
(58, 2, '', '', 'Aneesh Ponnappan2', '023123', 'aneesh.anniyan@gmail.com', 'Kollam', 'AE', 'meditaranian', 'male', 'non_professional', '3Y', 'single', '6_12', 'a:4:{i:0;s:20:"Fashion Photographer";i:1;s:24:"Advertising Photographer";i:2;s:20:"Wedding Photographer";i:3;s:17:"Food Photographer";}', NULL, 'FILE14f4d2a74803be9.doc', 'Hi goo message', 'Y', '2016-12-09 19:43:35'),
(59, 3, '1', NULL, 'Aneesh Ponnappan', '8589055080', 'aneesh.anniyan23@gmail.com', 'Kolam', 'AE', 'arabic', 'male', NULL, '3 Y', 'married', '12_18', 'a:4:{i:0;s:20:"Fashion Photographer";i:1;s:24:"Advertising Photographer";i:2;s:18:"Event Photographer";i:3;s:20:"Wedding Photographer";}', 'Some other options also', 'DOC-c5f95c2e8435700.doc', 'Hi message', 'N', '2016-12-10 03:16:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photographer_images`
--

CREATE TABLE `tbl_photographer_images` (
  `photographer_fk` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `added_date` datetime DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_photographer_images`
--

INSERT INTO `tbl_photographer_images` (`photographer_fk`, `image`, `added_date`, `id`) VALUES
(58, 'IMG-8ecd784b90646b5', '2016-12-09 07:43:35', 3),
(59, 'IMG-ee5c51201e6493a.jpg', '2016-12-10 03:16:28', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photographer_language`
--

CREATE TABLE `tbl_photographer_language` (
  `photographer_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_photographer_language`
--

INSERT INTO `tbl_photographer_language` (`photographer_id`, `language_id`) VALUES
(57, 28),
(57, 29),
(57, 30),
(58, 28),
(58, 29),
(58, 32),
(58, 33),
(58, 35),
(58, 36),
(59, 28),
(59, 29),
(59, 30),
(59, 33);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `prdt_name_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prdt_name_ar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category_ar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `p_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_active` enum('Y','N') CHARACTER SET utf8 NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `orderby`, `prdt_name_en`, `prdt_name_ar`, `category_en`, `category_ar`, `p_link`, `image1`, `is_active`, `added_date`) VALUES
(3, 2, 'Die Marie Royal', 'Die Marie Royal', 'Premium', 'طبيب أسنان عام', '#', 'IMG-5778f0fedf3f0b2.jpg', 'Y', '2013-05-11 07:10:27'),
(9, 3, 'Stone Royal', 'Stone Royal', 'Premium', 'Premium', '#', 'IMG-275564c9b1f1e20.jpg', 'Y', '2015-05-20 14:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reviews`
--

CREATE TABLE `tbl_reviews` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `heading_en` varchar(255) NOT NULL,
  `heading_ar` varchar(255) NOT NULL,
  `heading_fr` varchar(255) DEFAULT NULL,
  `venue_en` varchar(255) DEFAULT NULL,
  `venue_ar` varchar(255) DEFAULT NULL,
  `venue_fr` varchar(255) DEFAULT NULL,
  `event_date` varchar(255) DEFAULT NULL,
  `description_en` text NOT NULL,
  `description_ar` text NOT NULL,
  `description_fr` text,
  `image1` varchar(255) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_reviews`
--

INSERT INTO `tbl_reviews` (`id`, `orderby`, `heading_en`, `heading_ar`, `heading_fr`, `venue_en`, `venue_ar`, `venue_fr`, `event_date`, `description_en`, `description_ar`, `description_fr`, `image1`, `is_active`, `added_date`) VALUES
(31, 1, 'Dubai internet show 2016', 'John Doe', '', 'Kollam', 'Chief Technical Officer', '', 'Jan 01 - Feb 06', '<p>Chief Technical Officer</p>', '<p>Chief Technical Officer</p>', '', 'IMG-d606dad84d438f3.png', 'Y', '2016-11-05 17:00:25'),
(32, 2, 'test', '', NULL, 'Dubai MIracle Garden', NULL, NULL, 'Dec 20 - Dec 22', '<p>Some description goes here&nbsp;</p>', '', NULL, 'IMG-0e12d6682899c84.png', 'Y', '2016-12-10 13:53:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `heading_en` varchar(255) NOT NULL,
  `heading_ar` varchar(255) NOT NULL,
  `description_en` text NOT NULL,
  `description_ar` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `home_image` varchar(255) DEFAULT NULL,
  `file1` varchar(255) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `orderby`, `heading_en`, `heading_ar`, `description_en`, `description_ar`, `image1`, `home_image`, `file1`, `is_active`, `added_date`) VALUES
(26, 1, 'Exhibitions & Events', 'Exhibitions & Events', '<p><span>A successful exhibition depends on the management of a number of elements that should be delivered in the right and perfect approach. Avenir&rsquo;steam will work counselling with you to create, design and build your personalized exhibition stands to reflect the heritage of your brand, by guaranteeing on-time execution.Regardless of your budget, we will help you to stand out from the rest!</span></p>\n<p><span>- Commercial exhibitions<br /></span>- Art galleries<br />- Promotions<br />- Road shows<br />- Trade shows<br />-Product launching <br />- Art exhibitions</p>', '<p>A successful exhibition depends on the management of a number of elements that should be delivered in the right and perfect approach. Avenir&rsquo;steam will work counselling with you to create, design and build your personalized exhibition stands to reflect the heritage of your brand, by guaranteeing on-time execution.Regardless of your budget, we will help you to stand out from the rest!</p>\n<p>- Commercial exhibitions<br />- Art galleries<br />- Promotions<br />- Road shows<br />- Trade shows<br />-Product launching&nbsp;<br />- Art exhibitions</p>', 'IMG-2377f1b78502ff1.jpg', 'IMG-dce18114f162313.png', '', 'Y', '2015-09-15 14:58:33'),
(27, 2, 'Fashion Show Organizing', 'Fashion Show Organizing', '<p><span>From our appreciation of art and the sense of beauty, we treasure the looks of the persons as it reflects their personality. So that&rsquo;s why we persist a team of the best in the fashion field with a long experience whom are able to get your designs and your pieces of art out there to all sorts of personals, in order for them to enjoy the taste of your creation and really to reach the hearts of everyone.&nbsp;</span><br /><br /><span>- Pre-Falls&nbsp;</span><br /><span>- Fashion shows</span><br /><span>- Fashion weeks</span><br /><span>- The run-way shows</span><br /><span>- Formal fashion shows</span></p>', '<p><span>From our appreciation of art and the sense of beauty, we treasure the looks of the persons as it reflects their personality. So that&rsquo;s why we persist a team of the best in the fashion field with a long experience whom are able to get your designs and your pieces of art out there to all sorts of personals, in order for them to enjoy the taste of your creation and really to reach the hearts of everyone.&nbsp;</span><br /><br /><span>- Pre-Falls&nbsp;</span><br /><span>- Fashion shows</span><br /><span>- Fashion weeks</span><br /><span>- The run-way shows</span><br /><span>- Formal fashion shows</span></p>', 'IMG-66eeb746d9499d8.png', 'IMG-2f26ff940aebc7d.png', '', 'Y', '2015-09-15 15:03:23'),
(28, 3, 'Conferences & Seminars', 'Conferences & Seminars', '<p>Do you want to make - seminars or conferences - an unforgettable journey to a world of education? Would you like the participants to be amazed by your performance? Then, Avenir is the right choice! Our organized and unique agency is able to provide you with all your required services and the flavor of luxury environment in your event.<br />- Seminars<br />- Gala dinners<br />- Corporate events<br />- Press conferences<br />- Awards Ceremonies<br />- Educational conferences</p>', '<p>Do you want to make - seminars or conferences - an unforgettable journey to a world of education? Would you like the participants to be amazed by your performance? Then, Avenir is the right choice! Our organized and unique agency is able to provide you with all your required services and the flavor of luxury environment in your event.<br />- Seminars<br />- Gala dinners<br />- Corporate events<br />- Press conferences<br />- Awards Ceremonies<br />- Educational conferences</p>', 'IMG-e7e288664ff8bf6.jpg', 'IMG-1d11b9120a00ab1.png', '', 'Y', '2015-09-15 15:04:52'),
(29, 4, 'Parties & Entertainment', 'Parties & Entertainment', '<p>There is more when it comes to Organizing and entertainment event than many people might think. It is not just about booking a band, a venue and selling some tickets or getting entertainers with a great talent. <br />We do the most exciting and memorable ones, with the best organizing and control that you would ever experience!!! making any concert or festival supervised by &ldquo;Avenir&rdquo; is the best escape to spend the superb time.<br />- Concerts<br />- Weddings<br />- Festivals<br />- Night life<br />- Anniversaries<br />- Receptions <br />- Fire dancing <br />- Private parties<br />- Cocktail parties</p>', '<p>There is more when it comes to Organizing and entertainment event than many people might think. It is not just about booking a band, a venue and selling some tickets or getting entertainers with a great talent. <br />We do the most exciting and memorable ones, with the best organizing and control that you would ever experience!!! making any concert or festival supervised by &ldquo;Avenir&rdquo; is the best escape to spend the superb time.<br />- Concerts<br />- Weddings<br />- Festivals<br />- Night life<br />- Anniversaries<br />- Receptions <br />- Fire dancing <br />- Private parties<br />- Cocktail parties</p>', 'IMG-57c1cf64c45b2f8.jpg', 'IMG-64ee141291f217b.png', '', 'Y', '2015-09-15 15:06:07'),
(30, 5, 'Auctions Organizing', 'Auctions Organizing', '<p>We are not only into the entertainment and commercial fields, but also our services reaches beyond your expectations, from that point, we organize auctions and we give it the proper attention, due to the value of it!<br /> <br />Because we care of what you care about, we know the accountability of your event!<br />- General auctions<br />- Charity auctions</p>', '<p>We are not only into the entertainment and commercial fields, but also our services reaches beyond your expectations, from that point, we organize auctions and we give it the proper attention, due to the value of it!<br /> <br />Because we care of what you care about, we know the accountability of your event!<br />- General auctions<br />- Charity auctions</p>', 'IMG-04e9fa0d1a571e7.jpg', 'IMG-6d5a684c80ac89d.png', '', 'Y', '2015-09-15 15:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stylist`
--

CREATE TABLE `tbl_stylist` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `image1` varchar(300) DEFAULT NULL,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `model_region` varchar(255) DEFAULT NULL,
  `model_gender` varchar(255) DEFAULT NULL,
  `model_info` varchar(255) DEFAULT NULL,
  `model_info_other` varchar(255) DEFAULT NULL,
  `model_exp` varchar(255) DEFAULT NULL,
  `model_marrital_status` varchar(20) DEFAULT NULL,
  `model_age` varchar(20) DEFAULT NULL,
  `cv_path` varchar(250) DEFAULT NULL,
  `description` text,
  `is_active` enum('Y','N') CHARACTER SET utf8 NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stylist`
--

INSERT INTO `tbl_stylist` (`id`, `orderby`, `code`, `image1`, `name`, `contact_no`, `email`, `city`, `country`, `model_region`, `model_gender`, `model_info`, `model_info_other`, `model_exp`, `model_marrital_status`, `model_age`, `cv_path`, `description`, `is_active`, `added_date`) VALUES
(1, 1, '', '', 'Aneesh Ponnappan', '8589055080', 'aneesh.anniyan@gmail.com', 'Kollam', 'AE', 'arabic', 'male', 'hair_stylist', NULL, '4Y', 'single', '18_24', 'DOC-fc8d9100c6ad4c3.doc', 'Hi please contact me if iam good', 'N', '2016-12-09 08:26:19'),
(2, 2, '4110002', NULL, 'Aneesh Ponnappan', '8589055080', 'aneesh.anniyasn@gmail.com', 'Kollam', 'AE', 'arabic', 'male', 'makeup_artist', NULL, '2y', 'married', '18_24', 'DOC-ade0e823a700f47.doc', 'test', 'N', '2016-12-09 08:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stylist_images`
--

CREATE TABLE `tbl_stylist_images` (
  `stylist_fk` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `added_date` datetime DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stylist_images`
--

INSERT INTO `tbl_stylist_images` (`stylist_fk`, `image`, `added_date`, `id`) VALUES
(1, 'IMG-4b99a5b6829f038.jpg', '2016-12-09 08:26:19', 1),
(2, 'IMG-c44b74ce35ff225.jpg', '2016-12-09 08:29:01', 2),
(3, 'IMG-242ba8723346855', '2016-12-09 07:19:23', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stylist_language`
--

CREATE TABLE `tbl_stylist_language` (
  `stylist_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stylist_language`
--

INSERT INTO `tbl_stylist_language` (`stylist_id`, `language_id`) VALUES
(1, 28),
(1, 29),
(1, 30),
(1, 32),
(3, 28),
(3, 36),
(3, 38);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribers`
--

CREATE TABLE `tbl_subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `full_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `is_active` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_subscribers`
--

INSERT INTO `tbl_subscribers` (`id`, `email`, `full_name`, `is_active`, `added_date`) VALUES
(3, 'a@a.com', '', '', '2014-10-20 17:47:38'),
(4, 'aneesh.anniyan@gmail.com', '', 'Y', '0000-00-00 00:00:00'),
(5, 'aneesh.anniyan@gmail.com', '', 'Y', '0000-00-00 00:00:00'),
(6, 'aneesh.anniyan@gmail.com', '', 'Y', '0000-00-00 00:00:00'),
(7, 'aneesh.anniyan@gmail.com', '', 'Y', '0000-00-00 00:00:00'),
(8, 'aneesh.anniyan@gmail.com', '', 'Y', '0000-00-00 00:00:00'),
(9, 'aneesh.anniyan@gmail.com', '', 'Y', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upload_center`
--

CREATE TABLE `tbl_upload_center` (
  `id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `image1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_active` enum('Y','N') CHARACTER SET utf8 NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_logs`
--
ALTER TABLE `tbl_admin_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_modules`
--
ALTER TABLE `tbl_admin_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_rights`
--
ALTER TABLE `tbl_admin_rights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_settings`
--
ALTER TABLE `tbl_admin_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_themes`
--
ALTER TABLE `tbl_admin_themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_users`
--
ALTER TABLE `tbl_admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_branches`
--
ALTER TABLE `tbl_branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_catalog`
--
ALTER TABLE `tbl_catalog`
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_company_images`
--
ALTER TABLE `tbl_company_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contents`
--
ALTER TABLE `tbl_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `country_name_en` (`country_name_en`);

--
-- Indexes for table `tbl_entertainer`
--
ALTER TABLE `tbl_entertainer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_entertainer_images`
--
ALTER TABLE `tbl_entertainer_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery_images`
--
ALTER TABLE `tbl_gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery_videos`
--
ALTER TABLE `tbl_gallery_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hits`
--
ALTER TABLE `tbl_hits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hostess`
--
ALTER TABLE `tbl_hostess`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_hostess_images`
--
ALTER TABLE `tbl_hostess_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_languages`
--
ALTER TABLE `tbl_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_models`
--
ALTER TABLE `tbl_models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_models_images`
--
ALTER TABLE `tbl_models_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_newsletters`
--
ALTER TABLE `tbl_newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_newsletter_settings`
--
ALTER TABLE `tbl_newsletter_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_photographer`
--
ALTER TABLE `tbl_photographer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_photographer_images`
--
ALTER TABLE `tbl_photographer_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_stylist`
--
ALTER TABLE `tbl_stylist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_stylist_images`
--
ALTER TABLE `tbl_stylist_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subscribers`
--
ALTER TABLE `tbl_subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_upload_center`
--
ALTER TABLE `tbl_upload_center`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_logs`
--
ALTER TABLE `tbl_admin_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1056;
--
-- AUTO_INCREMENT for table `tbl_admin_modules`
--
ALTER TABLE `tbl_admin_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_admin_rights`
--
ALTER TABLE `tbl_admin_rights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_admin_settings`
--
ALTER TABLE `tbl_admin_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_admin_themes`
--
ALTER TABLE `tbl_admin_themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_admin_users`
--
ALTER TABLE `tbl_admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_branches`
--
ALTER TABLE `tbl_branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_catalog`
--
ALTER TABLE `tbl_catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `tbl_company_images`
--
ALTER TABLE `tbl_company_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_contents`
--
ALTER TABLE `tbl_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=246;
--
-- AUTO_INCREMENT for table `tbl_entertainer`
--
ALTER TABLE `tbl_entertainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `tbl_entertainer_images`
--
ALTER TABLE `tbl_entertainer_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tbl_gallery_images`
--
ALTER TABLE `tbl_gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `tbl_gallery_videos`
--
ALTER TABLE `tbl_gallery_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_hits`
--
ALTER TABLE `tbl_hits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=700;
--
-- AUTO_INCREMENT for table `tbl_hostess`
--
ALTER TABLE `tbl_hostess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `tbl_hostess_images`
--
ALTER TABLE `tbl_hostess_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_languages`
--
ALTER TABLE `tbl_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `tbl_models`
--
ALTER TABLE `tbl_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `tbl_models_images`
--
ALTER TABLE `tbl_models_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=155;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_newsletters`
--
ALTER TABLE `tbl_newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_newsletter_settings`
--
ALTER TABLE `tbl_newsletter_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_photographer`
--
ALTER TABLE `tbl_photographer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `tbl_photographer_images`
--
ALTER TABLE `tbl_photographer_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tbl_stylist`
--
ALTER TABLE `tbl_stylist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_stylist_images`
--
ALTER TABLE `tbl_stylist_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_subscribers`
--
ALTER TABLE `tbl_subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_upload_center`
--
ALTER TABLE `tbl_upload_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
