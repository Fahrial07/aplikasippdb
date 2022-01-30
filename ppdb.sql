-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 05:17 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id` int(11) NOT NULL,
  `aktivitas` varchar(225) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aktivitas`
--

INSERT INTO `aktivitas` (`id`, `aktivitas`, `tanggal`) VALUES
(72, 'User dengan nama Muhammad Abdur Rahman telah logout pada 2021/09/09 ', '2021-09-09 22:30:58'),
(73, 'Admin  telah me-Inactive-kan user dengan id 17 pada 2021/09/10 ', '2021-09-10 05:12:51'),
(74, 'Admin  telah me-Inactive-kan user dengan id 17 pada 2021/09/10 ', '2021-09-10 05:13:03'),
(75, 'Admin  telah me-Inactive-kan user dengan id 17 pada 2021/09/10 ', '2021-09-10 05:13:07'),
(76, 'Admin  telah me-Inactive-kan user dengan id 17 pada 2021/09/10 ', '2021-09-10 05:13:10'),
(77, 'Admin  telah me-Active-kan user dengan id 17 pada 2021/09/10 ', '2021-09-10 05:13:26'),
(78, 'Admin  telah me-Inactive-kan user dengan id 17 pada 2021/09/10 ', '2021-09-10 05:14:46'),
(79, 'Admin  telah me-Active-kan user dengan id 17 pada 2021/09/10 ', '2021-09-10 05:14:49'),
(80, 'Admin  telah me-Inactive-kan user dengan id 17 pada 2021/09/10 ', '2021-09-10 05:20:55'),
(81, 'Admin  telah me-Active-kan user dengan id 17 pada 2021/09/10 ', '2021-09-10 05:20:59'),
(82, 'User dengan nama  telah logout pada 2021/09/10 ', '2021-09-10 11:11:16'),
(83, 'Admin  telah me-Inactive-kan akun user dengan id 17 pada 2021/09/10 ', '2021-09-10 14:01:59'),
(84, 'Admin  telah me-Active-kan akun user dengan id 17 pada 2021/09/10 ', '2021-09-10 14:02:11'),
(85, 'Admin  telah mengupdate akun user dengan id 17 pada 2021/09/10 ', '2021-09-10 14:17:23'),
(86, 'Admin  telah mengupdate akun user dengan id 17 pada 2021/09/10 ', '2021-09-10 14:18:05'),
(87, 'Admin  telah mengupdate akun user dengan id 17 pada 2021/09/10 ', '2021-09-10 14:18:27'),
(88, 'Admin  telah mengubah status pendaftaran menjadi Diterima  pada user id 15 pada 2021/09/10 ', '2021-09-10 15:18:02'),
(89, 'Admin  telah mengubah status pendaftaran menjadi Diterima  pada user id 14 pada 2021/09/10 ', '2021-09-10 15:18:05'),
(90, 'Admin  telah mengubah status pendaftaran menjadi Diterima  pada user id 11 pada 2021/09/10 ', '2021-09-10 15:18:09'),
(91, 'Admin  telah mengubah status pendaftaran menjadi Diterima  pada user id 10 pada 2021/09/10 ', '2021-09-10 15:18:14'),
(92, 'Admin  telah mengubah status pendaftaran menjadi Diterima  pada user id 8 pada 2021/09/10 ', '2021-09-10 15:18:22'),
(93, 'Admin  telah mengubah status pendaftaran menjadi Tidak di terima  pada user id 1 pada 2021/09/10 ', '2021-09-10 15:18:30'),
(94, 'Admin  telah mengubah status pendaftaran menjadi Tidak di terima  pada user id 2 pada 2021/09/10 ', '2021-09-10 15:18:35'),
(95, 'Admin  telah mengubah status pendaftaran menjadi Diterima  pada user id 1 pada 2021/09/10 ', '2021-09-10 15:18:39'),
(96, 'Admin  telah mengubah status pendaftaran menjadi Diterima  pada user id 2 pada 2021/09/10 ', '2021-09-10 15:18:44'),
(97, 'Admin  telah me-Inactive-kan user dengan id 17 pada 2021/09/10 ', '2021-09-10 15:19:00'),
(98, 'Admin  telah me-Inactive-kan user dengan id 16 pada 2021/09/10 ', '2021-09-10 15:19:03'),
(99, 'Admin  telah me-Inactive-kan user dengan id 15 pada 2021/09/10 ', '2021-09-10 15:19:05'),
(100, 'Admin  telah me-Inactive-kan user dengan id 14 pada 2021/09/10 ', '2021-09-10 15:19:07'),
(101, 'Admin  telah me-Inactive-kan user dengan id 13 pada 2021/09/10 ', '2021-09-10 15:19:10'),
(102, 'Admin  telah me-Inactive-kan user dengan id 12 pada 2021/09/10 ', '2021-09-10 15:19:14'),
(103, 'Admin  telah me-Inactive-kan user dengan id 11 pada 2021/09/10 ', '2021-09-10 15:19:17'),
(104, 'Admin  telah me-Inactive-kan user dengan id 10 pada 2021/09/10 ', '2021-09-10 15:19:20'),
(105, 'Admin  telah me-Inactive-kan user dengan id 8 pada 2021/09/10 ', '2021-09-10 15:19:22'),
(106, 'Admin  telah me-Inactive-kan user dengan id 7 pada 2021/09/10 ', '2021-09-10 15:19:25'),
(107, 'Admin  telah me-Active-kan user dengan id 7 pada 2021/09/10 ', '2021-09-10 15:19:30'),
(108, 'Admin  telah me-Active-kan user dengan id 17 pada 2021/09/10 ', '2021-09-10 15:19:33'),
(109, 'Admin  telah me-Active-kan user dengan id 16 pada 2021/09/10 ', '2021-09-10 15:19:36'),
(110, 'Admin  telah me-Active-kan user dengan id 15 pada 2021/09/10 ', '2021-09-10 15:19:38'),
(111, 'Admin  telah me-Active-kan user dengan id 14 pada 2021/09/10 ', '2021-09-10 15:19:41'),
(112, 'Admin  telah me-Active-kan user dengan id 13 pada 2021/09/10 ', '2021-09-10 15:19:44'),
(113, 'Admin  telah me-Active-kan user dengan id 12 pada 2021/09/10 ', '2021-09-10 15:19:47'),
(114, 'Admin  telah me-Active-kan user dengan id 11 pada 2021/09/10 ', '2021-09-10 15:19:50'),
(115, 'Admin  telah me-Active-kan user dengan id 10 pada 2021/09/10 ', '2021-09-10 15:19:53'),
(116, 'Admin  telah me-Active-kan user dengan id 8 pada 2021/09/10 ', '2021-09-10 15:19:56'),
(117, 'Admin  telah mengupdate akun user dengan id 17 pada 2021/09/10 ', '2021-09-10 15:20:19'),
(118, 'Admin  telah mengupdate akun user dengan id 17 pada 2021/09/10 ', '2021-09-10 15:20:44'),
(119, 'Admin  telah me-Inactive-kan akun user dengan id 17 pada 2021/09/10 ', '2021-09-10 15:21:23'),
(120, 'Admin  telah me-Inactive-kan akun user dengan id 16 pada 2021/09/10 ', '2021-09-10 15:21:27'),
(121, 'Admin  telah me-Inactive-kan akun user dengan id 15 pada 2021/09/10 ', '2021-09-10 15:21:30'),
(122, 'Admin  telah me-Inactive-kan akun user dengan id 14 pada 2021/09/10 ', '2021-09-10 15:21:33'),
(123, 'Admin  telah me-Inactive-kan akun user dengan id 13 pada 2021/09/10 ', '2021-09-10 15:21:40'),
(124, 'Admin  telah me-Inactive-kan akun user dengan id 12 pada 2021/09/10 ', '2021-09-10 15:21:46'),
(125, 'Admin  telah me-Inactive-kan akun user dengan id 11 pada 2021/09/10 ', '2021-09-10 15:21:49'),
(126, 'Admin  telah me-Inactive-kan akun user dengan id 10 pada 2021/09/10 ', '2021-09-10 15:21:52'),
(127, 'Admin  telah me-Active-kan akun user dengan id 10 pada 2021/09/10 ', '2021-09-10 15:21:56'),
(128, 'Admin  telah me-Active-kan akun user dengan id 11 pada 2021/09/10 ', '2021-09-10 15:21:59'),
(129, 'Admin  telah me-Active-kan user dengan id 12 pada 2021/09/10 ', '2021-09-10 15:22:49'),
(130, 'Admin  telah me-Active-kan user dengan id 13 pada 2021/09/10 ', '2021-09-10 15:22:52'),
(131, 'Admin  telah me-Active-kan user dengan id 14 pada 2021/09/10 ', '2021-09-10 15:22:54'),
(132, 'Admin  telah me-Active-kan user dengan id 15 pada 2021/09/10 ', '2021-09-10 15:22:56'),
(133, 'Admin  telah me-Active-kan user dengan id 16 pada 2021/09/10 ', '2021-09-10 15:22:58'),
(134, 'Admin  telah me-Active-kan user dengan id 17 pada 2021/09/10 ', '2021-09-10 15:23:00'),
(135, 'User dengan nama  telah logout pada 2021/09/10 ', '2021-09-10 21:24:49'),
(136, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/10 ', '2021-09-10 21:57:16'),
(137, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/11 ', '2021-09-11 11:47:48'),
(138, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Diterima  pada user id 17 pada 2021/09/11 ', '2021-09-11 06:49:57'),
(139, 'User dengan nama Muhammad Abdur Rahman telah login pada 2021/09/11 ', '2021-09-11 11:50:41'),
(140, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Tidak di terima  pada user id 17 pada 2021/09/11 ', '2021-09-11 06:51:23'),
(141, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Diterima  pada user id 17 pada 2021/09/11 ', '2021-09-11 06:52:40'),
(142, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/11 ', '2021-09-11 07:01:06'),
(143, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/11 ', '2021-09-11 07:01:26'),
(144, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/11 ', '2021-09-11 07:01:33'),
(145, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/11 ', '2021-09-11 07:01:50'),
(146, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/11 ', '2021-09-11 07:03:13'),
(147, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/11 ', '2021-09-11 07:15:11'),
(148, 'Admin dengan nama Ali Fahrial Anwar telah logout pada 2021/09/11 ', '2021-09-11 12:17:03'),
(149, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/11 ', '2021-09-11 12:23:42'),
(150, 'User dengan nama Muhammad Abdur Rahman telah logout pada 2021/09/11 ', '2021-09-11 12:27:42'),
(151, 'Admin dengan nama Ali Fahrial Anwar telah logout pada 2021/09/11 ', '2021-09-11 15:17:35'),
(152, 'User dengan nama Ali Fahrial Anwar telah login pada 2021/09/11 ', '2021-09-11 15:18:22'),
(153, 'User dengan nama Ali Fahrial Anwar telah logout pada 2021/09/11 ', '2021-09-11 15:18:34'),
(154, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/12 ', '2021-09-12 10:07:36'),
(155, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 17 pada 2021/09/12 ', '2021-09-12 06:05:18'),
(156, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 16 pada 2021/09/12 ', '2021-09-12 06:05:21'),
(157, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 14 pada 2021/09/12 ', '2021-09-12 06:05:26'),
(158, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 15 pada 2021/09/12 ', '2021-09-12 06:05:30'),
(159, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 13 pada 2021/09/12 ', '2021-09-12 06:05:33'),
(160, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 12 pada 2021/09/12 ', '2021-09-12 06:05:39'),
(161, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 11 pada 2021/09/12 ', '2021-09-12 06:05:44'),
(162, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 10 pada 2021/09/12 ', '2021-09-12 06:05:50'),
(163, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 8 pada 2021/09/12 ', '2021-09-12 06:05:58'),
(164, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 7 pada 2021/09/12 ', '2021-09-12 06:06:03'),
(165, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 16 pada 2021/09/12 ', '2021-09-12 06:06:07'),
(166, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 17 pada 2021/09/12 ', '2021-09-12 06:06:10'),
(167, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 15 pada 2021/09/12 ', '2021-09-12 06:06:14'),
(168, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 14 pada 2021/09/12 ', '2021-09-12 06:06:19'),
(169, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 13 pada 2021/09/12 ', '2021-09-12 06:06:26'),
(170, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 12 pada 2021/09/12 ', '2021-09-12 06:06:31'),
(171, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 10 pada 2021/09/12 ', '2021-09-12 06:06:36'),
(172, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 11 pada 2021/09/12 ', '2021-09-12 06:06:39'),
(173, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 7 pada 2021/09/12 ', '2021-09-12 06:06:45'),
(174, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 8 pada 2021/09/12 ', '2021-09-12 06:06:51'),
(175, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/12 ', '2021-09-12 21:53:52'),
(176, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Tidak di terima  pada user id 17 pada 2021/09/12 ', '2021-09-12 16:54:53'),
(177, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Tidak di terima  pada user id 15 pada 2021/09/12 ', '2021-09-12 16:55:01'),
(178, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Tidak di terima  pada user id 14 pada 2021/09/12 ', '2021-09-12 16:55:06'),
(179, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Tidak di terima  pada user id 13 pada 2021/09/12 ', '2021-09-12 16:55:10'),
(180, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Tidak di terima  pada user id 12 pada 2021/09/12 ', '2021-09-12 16:55:15'),
(181, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Tidak di terima  pada user id 11 pada 2021/09/12 ', '2021-09-12 16:55:20'),
(182, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Tidak di terima  pada user id 10 pada 2021/09/12 ', '2021-09-12 16:55:55'),
(183, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Tidak di terima  pada user id 8 pada 2021/09/12 ', '2021-09-12 16:56:00'),
(184, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Tidak di terima  pada user id 7 pada 2021/09/12 ', '2021-09-12 16:56:04'),
(185, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Diterima  pada user id 7 pada 2021/09/12 ', '2021-09-12 16:56:10'),
(186, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Diterima  pada user id 8 pada 2021/09/12 ', '2021-09-12 16:56:13'),
(187, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Diterima  pada user id 17 pada 2021/09/12 ', '2021-09-12 16:56:17'),
(188, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Diterima  pada user id 15 pada 2021/09/12 ', '2021-09-12 16:56:25'),
(189, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Diterima  pada user id 14 pada 2021/09/12 ', '2021-09-12 16:57:31'),
(190, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Diterima  pada user id 13 pada 2021/09/12 ', '2021-09-12 16:57:50'),
(191, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Diterima  pada user id 10 pada 2021/09/12 ', '2021-09-12 16:58:34'),
(192, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Diterima  pada user id 11 pada 2021/09/12 ', '2021-09-12 16:58:38'),
(193, 'Admin Ali Fahrial Anwar telah mengubah status pendaftaran menjadi Diterima  pada user id 12 pada 2021/09/12 ', '2021-09-12 16:58:42'),
(194, 'Admin Ali Fahrial Anwar telah me-Inactive-kan akun user dengan id 17 pada 2021/09/12 ', '2021-09-12 16:59:07'),
(195, 'Admin Ali Fahrial Anwar telah me-Inactive-kan akun user dengan id 16 pada 2021/09/12 ', '2021-09-12 16:59:11'),
(196, 'Admin Ali Fahrial Anwar telah me-Inactive-kan akun user dengan id 15 pada 2021/09/12 ', '2021-09-12 16:59:15'),
(197, 'Admin Ali Fahrial Anwar telah me-Inactive-kan akun user dengan id 14 pada 2021/09/12 ', '2021-09-12 16:59:18'),
(198, 'Admin Ali Fahrial Anwar telah me-Inactive-kan akun user dengan id 13 pada 2021/09/12 ', '2021-09-12 16:59:22'),
(199, 'Admin Ali Fahrial Anwar telah me-Inactive-kan akun user dengan id 12 pada 2021/09/12 ', '2021-09-12 16:59:25'),
(200, 'Admin Ali Fahrial Anwar telah me-Inactive-kan akun user dengan id 11 pada 2021/09/12 ', '2021-09-12 16:59:28'),
(201, 'Admin Ali Fahrial Anwar telah me-Inactive-kan akun user dengan id 10 pada 2021/09/12 ', '2021-09-12 16:59:31'),
(202, 'Admin Ali Fahrial Anwar telah me-Inactive-kan akun user dengan id 9 pada 2021/09/12 ', '2021-09-12 16:59:34'),
(203, 'Admin Ali Fahrial Anwar telah me-Active-kan akun user dengan id 10 pada 2021/09/12 ', '2021-09-12 17:00:36'),
(204, 'Admin Ali Fahrial Anwar telah me-Active-kan akun user dengan id 17 pada 2021/09/12 ', '2021-09-12 17:00:39'),
(205, 'Admin Ali Fahrial Anwar telah me-Active-kan akun user dengan id 9 pada 2021/09/12 ', '2021-09-12 17:00:43'),
(206, 'Admin Ali Fahrial Anwar telah me-Active-kan akun user dengan id 16 pada 2021/09/12 ', '2021-09-12 17:00:45'),
(207, 'Admin Ali Fahrial Anwar telah me-Active-kan akun user dengan id 15 pada 2021/09/12 ', '2021-09-12 17:00:48'),
(208, 'Admin Ali Fahrial Anwar telah me-Active-kan akun user dengan id 14 pada 2021/09/12 ', '2021-09-12 17:00:52'),
(209, 'Admin Ali Fahrial Anwar telah me-Active-kan akun user dengan id 13 pada 2021/09/12 ', '2021-09-12 17:00:55'),
(210, 'Admin Ali Fahrial Anwar telah me-Active-kan akun user dengan id 12 pada 2021/09/12 ', '2021-09-12 17:00:58'),
(211, 'Admin Ali Fahrial Anwar telah me-Active-kan akun user dengan id 11 pada 2021/09/12 ', '2021-09-12 17:01:01'),
(212, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:01:15'),
(213, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:01:21'),
(214, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:01:22'),
(215, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:01:24'),
(216, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:01:27'),
(217, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:01:29'),
(218, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:01:31'),
(219, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:01:33'),
(220, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:01:34'),
(221, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:01:37'),
(222, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:02:17'),
(223, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:02:19'),
(224, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:02:21'),
(225, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:02:24'),
(226, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:03:50'),
(227, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:03:52'),
(228, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:03:54'),
(229, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:03:57'),
(230, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:03:59'),
(231, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:04:02'),
(232, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:04:03'),
(233, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:04:06'),
(234, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:04:08'),
(235, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:04:11'),
(236, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:04:13'),
(237, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:04:16'),
(238, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:04:20'),
(239, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:04:24'),
(240, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:04:25'),
(241, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 17:04:27'),
(243, 'User dengan nama  telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 22:10:06'),
(244, 'User dengan nama  telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 22:22:32'),
(245, 'User dengan nama  telah logout pada 2021/09/12 ', '2021-09-12 22:22:54'),
(246, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/12 ', '2021-09-12 22:23:09'),
(247, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 22:23:24'),
(248, 'Admin dengan nama Ali Fahrial Anwar telah mencetak/print-out Formulir pada 2021/09/12 ', '2021-09-12 22:24:16'),
(249, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/12 ', '2021-09-12 23:50:17'),
(250, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/13 ', '2021-09-13 11:02:35'),
(251, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/13 ', '2021-09-13 11:03:46'),
(252, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/13 ', '2021-09-13 11:04:51'),
(253, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/13 ', '2021-09-13 11:06:54'),
(254, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/13 ', '2021-09-13 14:56:12'),
(255, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/13 ', '2021-09-13 14:58:54'),
(256, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/13 ', '2021-09-13 15:00:14'),
(257, 'Admin dengan nama Ali Fahrial Anwar telah logout pada 2021/09/13 ', '2021-09-13 15:03:58'),
(258, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/13 ', '2021-09-13 15:04:12'),
(259, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/14 ', '2021-09-14 08:57:07'),
(260, 'Admin dengan nama Ali Fahrial Anwar telah logout pada 2021/09/14 ', '2021-09-14 09:31:53'),
(261, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/14 ', '2021-09-14 12:01:53'),
(262, 'Admin dengan nama Ali Fahrial Anwar telah logout pada 2021/09/14 ', '2021-09-14 13:09:52'),
(263, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/14 ', '2021-09-14 13:10:38'),
(264, 'Admin dengan nama Ali Fahrial Anwar telah logout pada 2021/09/14 ', '2021-09-14 13:11:09'),
(265, 'muhammad anwar Mendaftar pada 2021/09/14', '2021-09-14 13:12:41'),
(266, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/14 ', '2021-09-14 13:13:02'),
(267, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 17 pada 2021/09/14 ', '2021-09-14 08:14:49'),
(268, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 16 pada 2021/09/14 ', '2021-09-14 08:14:52'),
(269, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 15 pada 2021/09/14 ', '2021-09-14 08:14:54'),
(270, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 14 pada 2021/09/14 ', '2021-09-14 08:14:57'),
(271, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 13 pada 2021/09/14 ', '2021-09-14 08:14:59'),
(272, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 13 pada 2021/09/14 ', '2021-09-14 08:15:14'),
(273, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 14 pada 2021/09/14 ', '2021-09-14 08:15:17'),
(274, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 15 pada 2021/09/14 ', '2021-09-14 08:15:20'),
(275, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 16 pada 2021/09/14 ', '2021-09-14 08:15:22'),
(276, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 17 pada 2021/09/14 ', '2021-09-14 08:15:24'),
(277, 'Admin dengan nama Ali Fahrial Anwar telah logout pada 2021/09/14 ', '2021-09-14 13:19:00'),
(278, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/14 ', '2021-09-14 13:21:44'),
(279, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 7 pada 2021/09/14 ', '2021-09-14 08:21:52'),
(280, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 8 pada 2021/09/14 ', '2021-09-14 08:21:54'),
(281, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 10 pada 2021/09/14 ', '2021-09-14 08:21:56'),
(282, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 12 pada 2021/09/14 ', '2021-09-14 08:21:59'),
(283, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 17 pada 2021/09/14 ', '2021-09-14 08:22:01'),
(284, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 16 pada 2021/09/14 ', '2021-09-14 08:22:04'),
(285, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 15 pada 2021/09/14 ', '2021-09-14 08:22:13'),
(286, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 14 pada 2021/09/14 ', '2021-09-14 08:22:15'),
(287, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 11 pada 2021/09/14 ', '2021-09-14 08:22:16'),
(288, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 1 pada 2021/09/14 ', '2021-09-14 08:22:22'),
(289, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 2 pada 2021/09/14 ', '2021-09-14 08:22:26'),
(290, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 3 pada 2021/09/14 ', '2021-09-14 08:22:30'),
(291, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 13 pada 2021/09/14 ', '2021-09-14 08:22:34'),
(292, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 6 pada 2021/09/14 ', '2021-09-14 08:22:38'),
(293, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 4 pada 2021/09/14 ', '2021-09-14 08:22:43'),
(294, 'Admin Ali Fahrial Anwar telah me-Inactive-kan user dengan id 5 pada 2021/09/14 ', '2021-09-14 08:22:51'),
(295, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 17 pada 2021/09/14 ', '2021-09-14 08:22:54'),
(296, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 16 pada 2021/09/14 ', '2021-09-14 08:22:56'),
(297, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 15 pada 2021/09/14 ', '2021-09-14 08:22:58'),
(298, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 14 pada 2021/09/14 ', '2021-09-14 08:23:00'),
(299, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 13 pada 2021/09/14 ', '2021-09-14 08:23:02'),
(300, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 12 pada 2021/09/14 ', '2021-09-14 08:23:04'),
(301, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 11 pada 2021/09/14 ', '2021-09-14 08:23:06'),
(302, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 10 pada 2021/09/14 ', '2021-09-14 08:23:08'),
(303, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 8 pada 2021/09/14 ', '2021-09-14 08:23:10'),
(304, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 7 pada 2021/09/14 ', '2021-09-14 08:23:12'),
(305, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 6 pada 2021/09/14 ', '2021-09-14 08:23:17'),
(306, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 1 pada 2021/09/14 ', '2021-09-14 08:23:20'),
(307, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 2 pada 2021/09/14 ', '2021-09-14 08:23:25'),
(308, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 3 pada 2021/09/14 ', '2021-09-14 08:23:27'),
(309, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 5 pada 2021/09/14 ', '2021-09-14 08:23:39'),
(310, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 3 pada 2021/09/14 ', '2021-09-14 08:23:43'),
(311, 'Admin Ali Fahrial Anwar telah me-Active-kan user dengan id 4 pada 2021/09/14 ', '2021-09-14 08:23:47'),
(312, 'Admin dengan nama Ali Fahrial Anwar telah logout pada 2021/09/14 ', '2021-09-14 13:24:33'),
(313, 'Admin dengan nama Ali Fahrial Anwar telah login pada 2021/09/17 ', '2021-09-17 14:54:57'),
(314, 'User dengan nama Ali Fahrial Anwar telah login pada 2021/10/09 ', '2021-10-09 00:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `alur_ppdb`
--

CREATE TABLE `alur_ppdb` (
  `id_alur` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `isi_alur` text NOT NULL,
  `is_active` varchar(2) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `tgl_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alur_ppdb`
--

INSERT INTO `alur_ppdb` (`id_alur`, `judul`, `isi_alur`, `is_active`, `tgl_input`, `tgl_update`) VALUES
(1, 'Alur PPDB 2021/2022 MI Terpadu KIta', '<ol><li>Calon peserta didi membuat akun PPDB di aplikasi.</li><li>Calon peserta melakukan login di aplikasi PPDB.</li><li>Calon peserta mengisi formulir terlebih dahulu.</li><li>Setelah mengisi formulir calon peserta mencetak formulir (Dapat di dwonload / Print out);</li><li>Setelah itu melakukan pendaftaran ulang ke MI Terpadu Kita sesuai tanggal yang telah di tentukan.</li></ol>', '1', '2021-09-13 15:17:01', '0000-00-00 00:00:00'),
(2, 'Alur PPDB', '<ul><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li></ul>', '0', '2021-09-14 09:02:31', '0000-00-00 00:00:00'),
(3, 'Test 111', '<ul><li>Alur ppsb</li><li>Alur PSB</li></ul>', '0', '2021-09-14 09:04:13', '2021-09-14 09:29:28');

-- --------------------------------------------------------

--
-- Table structure for table `biodata_orangtua`
--

CREATE TABLE `biodata_orangtua` (
  `id_biodata_ortu` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `pendidikan_ayah` varchar(10) NOT NULL,
  `penghasilan_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `pendidikan_ibu` varchar(20) NOT NULL,
  `penghasilan_ibu` varchar(20) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `tgl_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata_orangtua`
--

INSERT INTO `biodata_orangtua` (`id_biodata_ortu`, `id_user`, `nama_ayah`, `pendidikan_ayah`, `penghasilan_ayah`, `nama_ibu`, `pendidikan_ibu`, `penghasilan_ibu`, `tgl_input`, `tgl_update`) VALUES
(1, 1, 'Martono', '', '>Rp. 3000.000', 'Anik Ruhayati', 'S1', '>Rp. 1000.000', '2021-09-06 01:07:14', '2021-09-08 20:41:25'),
(3, 8, 'uadadkjald as dakjhl', 'SMA', '>Rp. 2000.000', 'kladfajdd;lkd', 'SMA', '>Rp. 1000.000', '2021-09-08 20:58:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `biodata_santri`
--

CREATE TABLE `biodata_santri` (
  `id_biodata` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nama_panggilan` varchar(20) NOT NULL,
  `kelamin` varchar(6) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `warganegara` varchar(10) NOT NULL,
  `saudara_kandung` varchar(2) NOT NULL,
  `saudara_tiri` varchar(2) NOT NULL,
  `saudara_angkat` varchar(2) NOT NULL,
  `anak_ke` varchar(2) NOT NULL,
  `bb` varchar(5) NOT NULL,
  `tinggi` varchar(5) NOT NULL,
  `gol_darah` varchar(5) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `kodepos` varchar(10) NOT NULL,
  `telp_wa` varchar(13) NOT NULL,
  `tempat_tinggal` text NOT NULL,
  `jarak_dari_sekolah` varchar(10) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `tgl_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata_santri`
--

INSERT INTO `biodata_santri` (`id_biodata`, `id_user`, `nama`, `nama_panggilan`, `kelamin`, `ttl`, `nik`, `agama`, `warganegara`, `saudara_kandung`, `saudara_tiri`, `saudara_angkat`, `anak_ke`, `bb`, `tinggi`, `gol_darah`, `alamat_rumah`, `kodepos`, `telp_wa`, `tempat_tinggal`, `jarak_dari_sekolah`, `tgl_input`, `tgl_update`) VALUES
(1, 1, 'Ali Fahrial Anwar', 'Fahrial', 'L', 'Pati, 07-04-2001', '3318160704010003', 'Islam', 'WNI', '2', '0', '0', '1', '80', '180', 'A', 'Jl. Balidesa, 001/002 Bulumanis Lor, Margoyoso, Kabupaten Pati.', '59154', '085641739560', 'Jl. Balidesa, 001/002 Bulumanis Lor, Margoyoso, Kabupaten Pati.', '1000', '2021-09-06 01:07:14', '2021-09-08 20:41:25'),
(3, 8, 'dhdhdhdhdhh', 'ajkdakdjadsk', 'L', 'Kudus, 02-08-2010', '9292337733723737', 'Islam', 'WNI', '3', '0', '0', '1', '60', '199', 'B', 'ajdhajdh asdhah alhd lkh sakfhlshfld fsjfsdljkf sflh', '837463', '089934746332', 'ahdsakdjf  sdjhsdfsda dsjlh sdfkjsda klhsf hlhk', '813138127', '2021-09-08 20:58:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `biodata_wali`
--

CREATE TABLE `biodata_wali` (
  `id_wali` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_wali` varchar(30) NOT NULL,
  `pendidikan_wali` varchar(15) NOT NULL,
  `penghasilan_wali` varchar(20) NOT NULL,
  `hubungan_keluarga` varchar(20) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `tgl_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata_wali`
--

INSERT INTO `biodata_wali` (`id_wali`, `id_user`, `nama_wali`, `pendidikan_wali`, `penghasilan_wali`, `hubungan_keluarga`, `tgl_input`, `tgl_update`) VALUES
(1, 1, 'Martono', 'SMA', '>Rp. 3000.000', 'Bapak', '2021-09-06 01:07:14', '2021-09-08 20:41:25'),
(3, 8, 'asjdhasdhklahd askdhkj', 'SMA', '>Rp. 1000.000', 'fagdjggh', '2021-09-08 20:58:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gelombang`
--

CREATE TABLE `gelombang` (
  `id_gel` int(111) NOT NULL,
  `gelombang` varchar(20) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `tgl_buka` varchar(15) NOT NULL,
  `tgl_tutup` varchar(15) NOT NULL,
  `publish` varchar(2) NOT NULL,
  `is_active_gel` varchar(2) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `tgl_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gelombang`
--

INSERT INTO `gelombang` (`id_gel`, `gelombang`, `tahun`, `tgl_buka`, `tgl_tutup`, `publish`, `is_active_gel`, `tgl_input`, `tgl_update`) VALUES
(1, 'Gelombang 1', '2021/2022', '2021-09-09', '2021-09-14', '1', '1', '2021-09-09 00:13:01', '0000-00-00 00:00:00'),
(3, 'Gelombang 2', '2021/2022', '2021-09-15', '2021-09-20', '1', '0', '2021-09-09 09:50:05', '2021-09-10 17:07:38'),
(7, 'Gelombang 3', '2021/2022', '2021-09-21', '2021-09-26', '1', '0', '2021-09-10 17:15:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah_asal`
--

CREATE TABLE `sekolah_asal` (
  `id_asal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `tgl_input` datetime NOT NULL,
  `tgl_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sekolah_asal`
--

INSERT INTO `sekolah_asal` (`id_asal`, `id_user`, `nama_sekolah`, `alamat_sekolah`, `tgl_input`, `tgl_update`) VALUES
(1, 1, 'TK MASYITOH BULUMANIS LOR', 'Desa Bulumanis Lor, Margoyoso, Kabupaten Pati.', '2021-09-06 01:07:14', '2021-09-08 20:41:25'),
(3, 8, 'jadhkjhadj adha lkdald hk', 'jasd ahdkahdkah dkahdlkah dlahdkasjdasd ', '2021-09-08 20:58:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_angkatan`
--

CREATE TABLE `tahun_angkatan` (
  `id_tahun` int(11) NOT NULL,
  `tahun_angkatan` varchar(20) NOT NULL,
  `is_active` varchar(2) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `thgl_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `slogan` varchar(225) NOT NULL,
  `isi` text NOT NULL,
  `is_active` varchar(2) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `tgl_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `judul`, `slogan`, `isi`, `is_active`, `tgl_input`, `tgl_update`) VALUES
(1, 'Tentang MI Terpadu Kita', 'Rajin, Pintar, Maju, Jaya', '<ul><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li></ul>', '1', '2021-09-11 09:54:26', '0000-00-00 00:00:00'),
(2, 'tentang 1', 'lorem ipsum dolor sit amet', '<ol><li>Lorem Ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li><li>Bismillah</li></ol>', '0', '2021-09-11 10:13:44', '2021-09-13 00:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_gel` int(111) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `status_daftar` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role_id` varchar(2) NOT NULL,
  `is_active` int(2) NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  `tgl_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_gel`, `nama`, `no_kk`, `username`, `status_daftar`, `password`, `role_id`, `is_active`, `tgl_daftar`, `tgl_update`) VALUES
(1, 1, 'Ali Fahrial Anwar', '3318160704010003', 'Fahrial07', 'Diterima', '$2y$10$V693nMND5lVK31PDg9PRr.6SNgjq9.EOk5yczsWkbGHW6Au3Cg.76', '2', 1, '2021-09-03 00:00:00', '2021-09-08 20:43:08'),
(2, 1, 'M. Abid Fadhil Abyan', '3318160102160003', 'Adbid01', 'Diterima', '$2y$10$UkJ5yWGTWOMxt6DCvuEbLeqYMdS3EBjXfCjd3XPGk6MGPvkzf.rgu', '2', 1, '2021-09-03 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'adsjsgj', '1010191826347362', 'kadha', 'Diterima', '$2y$10$E.vqC.hOoL/Ix2x7hd92juLFyYobGvgpQ6le5CFa8FOwyYQZsTvJW', '2', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'sdfhkh', '8888888888888888', 'kjshdas', 'Diterima', '$2y$10$RSN7yuia3xRDDsETcmWXSe3ob1yLXQK4VN4VixYcs86yOb07euPwu', '2', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 'lasjdaljdh', '9191919191919191', 'lajsdla', 'Diterima', '$2y$10$z3gGtv5YKlEceXhGO3ThM.aKfyvTaKkTXT8nh48ONpi1iHg/bR0FC', '2', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 'jadshhj', '9999101010987654', 'gfgfgfg', 'Diterima', '$2y$10$oTWQbNS7KKFiQfUbouqOFuKBt2Z5MAGkr1BMEMBhA6rWBIUeaTjLm', '2', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 'askldhl', '0001020202020201', 'kasljdlad', 'Diterima', '$2y$10$Lkk9xt/Vdaqv3xrMrlhipu5OlyqcSRG5MEuTi6i2OD93RfpJxDLle', '2', 1, '2021-09-03 23:32:36', '0000-00-00 00:00:00'),
(8, 1, 'user1138973', '1928372837361827', 'user1', 'Diterima', '$2y$10$ZDUtD9eMZoRm96IBC5yBhe0T8rneJP33SzsolTzEP/RBrYEoF.IQG', '2', 1, '2021-09-06 02:40:22', '0000-00-00 00:00:00'),
(9, 1, 'Ali Fahrial Anwar', '0', 'Admin07', '', '$2y$10$hPbcJEclX3vbb2ypQzfJmeTSuzUvrqbZS9vG2RwU/hknNW5HVwsVu', '1', 1, '2021-09-07 15:52:19', '2021-09-07 15:52:19'),
(10, 1, 'Users2', '0029387766235416', 'User2', 'Diterima', '$2y$10$9xaIW6twPPYChRojaxBURuaYDDr2HbW3N3v8OFPOYf2ey8aAnyEZ.', '2', 1, '2021-09-08 00:17:16', '0000-00-00 00:00:00'),
(11, 1, 'User3', '2239102937650003', 'User3', 'Diterima', '$2y$10$nXMgvhWhS/7XRxZ/y/gVHuNmyUqexxIZQrpBcfuUZzIdDx68bO0Tm', '2', 1, '2021-09-08 00:17:46', '0000-00-00 00:00:00'),
(12, 1, 'User4', '9980029382221287', 'User4', 'Diterima', '$2y$10$Jj1Pws3YkcKj8uLGDelcd.nq0Ihosbsi3QJAuneShctQQGWBlhUa6', '2', 1, '2021-09-08 00:18:18', '0000-00-00 00:00:00'),
(13, 1, 'User5', '0092833744332178', 'User5', 'Diterima', '$2y$10$7otsb4R3PQTcvB1PMFXRz.KwTx8XSY2x51zIAcTgdZFGDpqSqe0SC', '2', 1, '2021-09-08 00:21:38', '0000-00-00 00:00:00'),
(14, 1, 'User6', '1122099998823701', 'User6', 'Diterima', '$2y$10$kUIXdTafPjM/P7qu67lVrOUu6oQkVRJc8JhSbk8iIy7h/acIsbE72', '2', 1, '2021-09-08 00:22:01', '0000-00-00 00:00:00'),
(15, 1, 'User7', '9992837474848484', 'User7', 'Diterima', '$2y$10$R8R1Z9n1npaIGKQt099G/.sylcZI2q2GqFQArj6xCu4xTADcUq8Tm', '2', 1, '2021-09-08 00:41:53', '0000-00-00 00:00:00'),
(16, 1, 'Aananwar07', '0092384477321237', 'aananwar07', '', '$2y$10$uEgRgQpqeidhZ6co5CPhQevjTUCflDZE5N4MGt5.1KaC07WJ3WqsC', '2', 1, '2021-09-09 15:53:31', '0000-00-00 00:00:00'),
(17, 1, 'Muhammad Abdur Rahman', '11203944003003393', 'muhammad01', 'Diterima', '$2y$10$C5g.q/2grwdAILg471t7se7QYskVyQ1Z5MDawYQet4SkMSxPf4ZHW', '2', 1, '2021-09-09 21:37:18', '2021-09-10 15:20:44'),
(18, 3, 'muhammad anwar', '3318160704010003', 'anwar07', '', '$2y$10$pBuSdipZj3yR6auYKqOsGOBkJjEBxNcrJvq8yFIFU7V6usVRtlkD2', '2', 1, '2021-09-14 13:12:41', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alur_ppdb`
--
ALTER TABLE `alur_ppdb`
  ADD PRIMARY KEY (`id_alur`);

--
-- Indexes for table `biodata_orangtua`
--
ALTER TABLE `biodata_orangtua`
  ADD PRIMARY KEY (`id_biodata_ortu`),
  ADD KEY `biu` (`id_user`);
ALTER TABLE `biodata_orangtua` ADD FULLTEXT KEY `pendidikan_ayah` (`pendidikan_ayah`);

--
-- Indexes for table `biodata_santri`
--
ALTER TABLE `biodata_santri`
  ADD PRIMARY KEY (`id_biodata`),
  ADD KEY `id_s_bu` (`id_user`);

--
-- Indexes for table `biodata_wali`
--
ALTER TABLE `biodata_wali`
  ADD PRIMARY KEY (`id_wali`),
  ADD KEY `id_s_bw` (`id_user`);

--
-- Indexes for table `gelombang`
--
ALTER TABLE `gelombang`
  ADD PRIMARY KEY (`id_gel`);

--
-- Indexes for table `sekolah_asal`
--
ALTER TABLE `sekolah_asal`
  ADD PRIMARY KEY (`id_asal`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tahun_angkatan`
--
ALTER TABLE `tahun_angkatan`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;

--
-- AUTO_INCREMENT for table `alur_ppdb`
--
ALTER TABLE `alur_ppdb`
  MODIFY `id_alur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `biodata_orangtua`
--
ALTER TABLE `biodata_orangtua`
  MODIFY `id_biodata_ortu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `biodata_santri`
--
ALTER TABLE `biodata_santri`
  MODIFY `id_biodata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `biodata_wali`
--
ALTER TABLE `biodata_wali`
  MODIFY `id_wali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gelombang`
--
ALTER TABLE `gelombang`
  MODIFY `id_gel` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sekolah_asal`
--
ALTER TABLE `sekolah_asal`
  MODIFY `id_asal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tahun_angkatan`
--
ALTER TABLE `tahun_angkatan`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biodata_orangtua`
--
ALTER TABLE `biodata_orangtua`
  ADD CONSTRAINT `biu` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `biodata_santri`
--
ALTER TABLE `biodata_santri`
  ADD CONSTRAINT `id_s_bu` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `biodata_wali`
--
ALTER TABLE `biodata_wali`
  ADD CONSTRAINT `id_s_bw` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `sekolah_asal`
--
ALTER TABLE `sekolah_asal`
  ADD CONSTRAINT `sekolah_asal_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
