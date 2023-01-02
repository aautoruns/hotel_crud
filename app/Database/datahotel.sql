-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 02:54 PM
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
-- Database: `datahotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'galihazella06@gmail.com', 1, '2022-12-26 10:01:57', 1),
(2, '::1', 'galihazella06@gmail.com', 1, '2022-12-26 10:24:43', 1),
(3, '::1', 'galihazella06@gmail.com', 1, '2022-12-26 10:33:32', 1),
(4, '::1', 'galihazellaa', NULL, '2022-12-26 10:36:58', 0),
(5, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 10:38:23', 1),
(6, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 11:01:01', 1),
(7, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 11:01:31', 1),
(8, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 11:02:05', 1),
(9, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 11:02:38', 1),
(10, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 11:02:45', 1),
(11, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 11:04:41', 1),
(12, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 11:05:36', 1),
(13, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 11:05:54', 1),
(14, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 11:06:07', 1),
(15, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 11:12:27', 1),
(16, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 11:15:05', 1),
(17, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 11:24:04', 1),
(18, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 11:45:16', 1),
(19, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 11:46:08', 1),
(20, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 11:47:15', 1),
(21, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 11:50:03', 1),
(22, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 12:14:51', 1),
(23, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 19:08:25', 1),
(24, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 19:28:20', 1),
(25, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 19:43:52', 1),
(26, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 19:46:22', 1),
(27, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 19:49:10', 1),
(28, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 19:52:18', 1),
(29, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 19:57:29', 1),
(30, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 20:47:10', 1),
(31, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 22:34:19', 1),
(32, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 23:06:58', 1),
(33, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-26 23:20:30', 1),
(34, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-28 07:10:28', 1),
(35, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-28 07:59:21', 1),
(36, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-29 00:03:28', 1),
(37, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-29 00:06:44', 1),
(38, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-31 04:31:35', 1),
(39, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-31 04:37:16', 1),
(40, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-31 05:17:49', 1),
(41, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-31 07:01:10', 1),
(42, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-31 08:20:51', 1),
(43, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-31 11:17:50', 1),
(44, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-31 12:28:34', 1),
(45, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-31 12:28:45', 1),
(46, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-31 19:55:31', 1),
(47, '::1', 'galihazellafirdaus@gmail.com', 2, '2022-12-31 22:53:03', 1),
(48, '::1', 'email@mail.com', 3, '2022-12-31 23:07:56', 1),
(49, '::1', 'email@mail.com', 3, '2022-12-31 23:08:23', 1),
(50, '::1', 'email@mail.com', 3, '2023-01-01 00:12:28', 1),
(51, '::1', 'email@mail.com', 3, '2023-01-01 00:12:39', 1),
(52, '::1', 'email@mail.com', 3, '2023-01-01 02:13:02', 1),
(53, '::1', 'email@mail.com', 3, '2023-01-01 07:05:11', 1),
(54, '::1', 'email@mail.com', 3, '2023-01-01 07:11:16', 1),
(55, '::1', 'email@mail.com', 3, '2023-01-01 09:11:30', 1),
(56, '::1', 'email@mail.com', 3, '2023-01-01 09:11:43', 1),
(57, '::1', 'email@mail.com', 3, '2023-01-01 10:39:37', 1),
(58, '::1', 'email@mail.com', 3, '2023-01-01 11:23:58', 1),
(59, '::1', 'email@mail.com', 3, '2023-01-01 23:38:38', 1),
(60, '::1', 'email@mail.com', 3, '2023-01-01 23:52:08', 1),
(61, '::1', 'galihazellafirdaus@gmail.com', 2, '2023-01-02 07:13:07', 1),
(62, '::1', 'galihazellafirdaus@gmail.com', 2, '2023-01-02 07:35:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `idkamar` varchar(11) NOT NULL,
  `nokamar` int(10) NOT NULL,
  `idtipekamar` varchar(11) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`idkamar`, `nokamar`, `idtipekamar`, `price`) VALUES
('K-01', 10, 'VVIP', 500000),
('K-02', 20, 'VIP', 400000),
('K-03', 30, 'FAM', 750000),
('K-04', 40, 'STD', 200000),
('K-05', 50, 'SIN', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1672070100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(512) NOT NULL,
  `email` varchar(256) NOT NULL,
  `telp` varchar(256) NOT NULL,
  `posisi` enum('Valet','Porter','Resepsionis','Chef','Maintenance staff') NOT NULL,
  `gambar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `alamat`, `email`, `telp`, `posisi`, `gambar`) VALUES
(6, 'Marcus Hergreeves', 'Sparrow Academy Mansion Street. 00', 'sparrowacademy@gmail.com', '1111111111', 'Valet', '1672493607_956996188cd4cb415904.png'),
(7, 'Ben Hargreeves', 'Sparrow Academy Mansion Street. 00', 'sparrowacademy@gmail.com', '2222222222', 'Porter', '1672494542_5ae426724c6f975fd846.png'),
(8, 'Fei Hargreeves', 'Sparrow Academy Mansion Street. 00', 'sparrowacademy@gmail.com', '3333333333', 'Resepsionis', '1672494711_98f58245705d5a7965da.jpg'),
(9, 'Alphonso Hargreeves', 'Sparrow Academy Mansion Street. 00', 'sparrowacademy@gmail.com', '4444444444', 'Maintenance staff', '1672494771_553b3af5fe8cdf15fd34.jpg'),
(10, 'Sloane Hargreeves', 'Sparrow Academy Mansion Street. 00', 'sparrowacademy@gmail.com', '5555555555', 'Chef', '1672495181_c08f33bf869d09077574.jpg'),
(11, 'Jayme Hargreeves', 'Sparrow Academy Mansion Street. 00', 'sparrowacademy@gmail.com', '6666666666', 'Chef', '1672495236_499fd135cc1d350e3a52.png'),
(12, 'Christopher Hargreeves', 'Sparrow Academy Mansion Street. 00', 'sparrowacademy@gmail.com', '7777777777', 'Resepsionis', '1672495293_128af504988b3ee72654.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkin`
--

CREATE TABLE `tbl_checkin` (
  `id` int(5) NOT NULL,
  `idtamu` int(5) DEFAULT NULL,
  `idkamar` varchar(11) DEFAULT NULL,
  `checkin` date DEFAULT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_checkin`
--

INSERT INTO `tbl_checkin` (`id`, `idtamu`, `idkamar`, `checkin`, `duration`) VALUES
(6, 2, 'K-01', '2023-01-01', 1),
(7, 1, 'K-01', '2023-01-01', 1),
(8, 3, 'K-02', '2023-01-01', 3),
(9, 4, 'K-01', '2023-01-01', 1),
(10, 5, 'K-05', '2022-12-31', 3),
(11, 6, 'K-05', '2022-12-31', 3),
(12, 7, 'K-04', '2023-01-01', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel`
--

CREATE TABLE `tbl_hotel` (
  `id` int(11) NOT NULL,
  `nama_hotel` varchar(50) NOT NULL,
  `bintang` enum('1','2','3','4') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_hotel`
--

INSERT INTO `tbl_hotel` (`id`, `nama_hotel`, `bintang`, `alamat`, `email`, `telp`) VALUES
(3, 'Hotel Sahid Mandarin', '3', 'Jalan, No. Kota Pekalongan', 'email@mail.com', '085123456789'),
(4, 'Hotel Horison', '4', 'Jalan, No. Kota Pekalongan', 'email@mail.com', '085123456789'),
(5, 'Hotel Dafam Pekalongan', '4', 'Jalan, No. Kota Pekalongan', 'email@mail.com', '085123456789'),
(6, 'Hotel Santika Pekalongan', '3', 'Jalan, No. Kota Pekalongan', 'email@mail.com', '085123456789'),
(7, 'The Sidji Hotel', '3', 'Jalan, No. Kota Pekalongan', 'email@mail.com', '085123456789'),
(8, 'Hotel Namira Syariah', '3', 'Jalan, No. Kota Pekalongan', 'email@mail.com', '085123456789'),
(9, 'Nirwana Hotel', '3', 'Jalan, No. Kota Pekalongan', 'email@mail.com', '085123456789'),
(10, 'KHAS Pekalongan Hotel', '3', 'Jalan, No. Kota Pekalongan', 'email@mail.com', '085123456789'),
(11, 'Grand Dian Hotel Pekalongan', '3', 'Jalan, No. Kota Pekalongan', 'email@mail.com', '085123456789'),
(12, 'Hotel Marlin Pekalongan', '4', 'Jalan, No. Kota Pekalongan', 'email@mail.com', '085123456789'),
(13, 'Hotel Sendang Sari Batang', '4', 'Jalan, No. Kota Pekalongan', 'email@mail.com', '085123456789'),
(14, 'RedDoorz', '3', 'Jalan, No. Kota Pekalongan', 'email@mail.com', '085123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `idtamu` int(5) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`idtamu`, `nama`, `alamat`, `email`, `phone`) VALUES
(1, 'Luther Hargreeaves', 'Umbrella Academy Mansion, Number. 00', 'umbrellaacademy1@gmail.com', '1111111111'),
(2, 'Diego Hargreeves', 'Umbrella Academy Mansion, Number. 00', 'umbrellaacademy2@gmail.com', '2222222222'),
(3, 'Allison Hargreeaves', 'Umbrella Academy Mansion, Number. 00', 'umbrellaacademy3@gmail.com', '3333333333'),
(4, 'Klaus Hargreeves', 'Umbrella Academy Mansion, Number. 00', 'umbrellaacademy4@gmail.com', '4444444444'),
(5, 'Five Hargreeves', 'Umbrella Academy Mansion, Number. 00', 'umbrellaacademy5@gmail.com', '5555555555'),
(6, 'Ben Hargreeves', 'Umbrella Academy Mansion, Number. 00', 'umbrellaacademy6@gmail.com', '6666666666'),
(7, 'Victor Hargreeves', 'Umbrella Academy Mansion, Number. 00', 'umbrellaacademy7@gmail.com', '7777777777');

-- --------------------------------------------------------

--
-- Table structure for table `tipekamar`
--

CREATE TABLE `tipekamar` (
  `idtipekamar` varchar(11) NOT NULL,
  `namatipe` varchar(225) NOT NULL,
  `ukuran` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipekamar`
--

INSERT INTO `tipekamar` (`idtipekamar`, `namatipe`, `ukuran`) VALUES
('DOU', 'Double Bed', '12 x 12'),
('FAM', 'Family Room', '10 x 15'),
('SIN', 'Single Room', '10 x 10'),
('STD', 'Standard Room', '15 x 15'),
('VIP', 'VIP Room', '20 x 20'),
('VVIP', 'VVIP Room', '25 x 25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'galihazellafirdaus@gmail.com', 'galihazellaa', '$2y$10$gcqno2G4lqyOuVpOl1ZUDO1tH.l8w/f9URpPP3XkOdwQ6jBXCcogO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-12-26 10:37:50', '2022-12-26 10:37:50', NULL),
(3, 'email@mail.com', 'test', '$2y$10$8ZoKrzsshy4AkxaS9ZJBOuqKPVPTDn7meEfsQWgJWXz7FrXiHGP5K', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-12-31 23:07:50', '2022-12-31 23:07:50', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`idkamar`),
  ADD KEY `idtipekamar` (`idtipekamar`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_checkin`
--
ALTER TABLE `tbl_checkin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`idtamu`);

--
-- Indexes for table `tipekamar`
--
ALTER TABLE `tipekamar`
  ADD PRIMARY KEY (`idtipekamar`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_checkin`
--
ALTER TABLE `tbl_checkin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `idtamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`idtipekamar`) REFERENCES `tipekamar` (`idtipekamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_checkin`
--
ALTER TABLE `tbl_checkin`
  ADD CONSTRAINT `tbl_checkin_ibfk_1` FOREIGN KEY (`idtamu`) REFERENCES `tbl_tamu` (`idtamu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_checkin_ibfk_2` FOREIGN KEY (`idkamar`) REFERENCES `kamar` (`idkamar`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
