-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 05:12 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paketsantri2`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_asrama`
--

CREATE TABLE `data_asrama` (
  `id_asrama` int(11) UNSIGNED NOT NULL,
  `nama_asrama` varchar(100) NOT NULL,
  `gedung` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_asrama`
--

INSERT INTO `data_asrama` (`id_asrama`, `nama_asrama`, `gedung`, `created_at`, `updated_at`) VALUES
(1, 'Asrama A', 'Gedung A', '2020-10-07 02:24:11', '0000-00-00 00:00:00'),
(2, 'Asrama B', 'Gedung GKB', '2020-10-07 02:24:21', '0000-00-00 00:00:00'),
(4, 'Asrama C', 'Gedung kartini', '2020-10-07 02:25:19', '0000-00-00 00:00:00'),
(5, 'Asrama D', 'Gedung merdeka', '2020-10-07 02:25:41', '0000-00-00 00:00:00'),
(6, 'Asrama E', 'Gedung skyline', '2020-10-07 02:25:49', '0000-00-00 00:00:00'),
(7, 'Asrama F', 'Gedung A', '2020-10-07 02:25:56', '0000-00-00 00:00:00'),
(8, 'Asrama G', 'Gedung kartini', '2020-10-07 02:26:05', '0000-00-00 00:00:00'),
(9, 'Asrama H', 'Gedung GKB', '2020-10-07 02:26:14', '0000-00-00 00:00:00'),
(10, 'Asrama I', 'Gedung skyline', '2020-10-07 02:26:21', '0000-00-00 00:00:00'),
(12, 'Asrama J', 'Gedung merdeka', '2020-10-07 02:26:36', '0000-00-00 00:00:00'),
(13, 'Asrama J', 'Gedung nismo', '2020-10-07 02:26:56', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `data_paket`
--

CREATE TABLE `data_paket` (
  `id_paket` int(11) UNSIGNED NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `tanggal_diterima` date NOT NULL,
  `id_kategori` int(11) UNSIGNED NOT NULL,
  `NIS` varchar(100) NOT NULL,
  `id_asrama` int(11) UNSIGNED NOT NULL,
  `pengirim_paket` varchar(100) NOT NULL,
  `isi_paket_yg_disita` varchar(200) NOT NULL,
  `status_paket` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_paket`
--

INSERT INTO `data_paket` (`id_paket`, `nama_paket`, `tanggal_diterima`, `id_kategori`, `NIS`, `id_asrama`, `pengirim_paket`, `isi_paket_yg_disita`, `status_paket`, `created_at`, `updated_at`) VALUES
(1, 'paket a', '2020-10-07', 7, 'dsf435', 1, 'bapak antono', 'asasd', 'diambil', '2020-10-07 01:40:50', '0000-00-00 00:00:00'),
(2, 'paketnya rilla', '2020-10-09', 1, 'erw123', 8, 'ayahnya putri', 'buah buahan', 'diambil', '2020-10-07 02:47:18', '0000-00-00 00:00:00'),
(3, 'paketnya yunika', '2020-10-20', 3, 'gh23', 2, 'kakaknya', 'melon', 'belum diambil', '2020-10-07 02:52:53', '0000-00-00 00:00:00'),
(4, 'paketnya afira', '2020-10-13', 5, 'ghh56', 7, 'kakanya', 'mobil mobilan', 'diambil', '2020-10-07 02:55:42', '0000-00-00 00:00:00'),
(5, 'paketnya dita', '2020-10-23', 5, 'bnr34', 1, 'adiknya', 'gelang', 'belum diambil', '2020-10-07 02:55:42', '0000-00-00 00:00:00'),
(6, 'paketnya afsana', '2020-10-24', 7, 'sr20', 2, 'kakanya', 'jajanan pasar', 'diambil', '2020-10-07 02:57:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `data_santri`
--

CREATE TABLE `data_santri` (
  `NIS` varchar(100) NOT NULL,
  `nama_santri` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_asrama` int(11) UNSIGNED NOT NULL,
  `total_paket_diterima` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_santri`
--

INSERT INTO `data_santri` (`NIS`, `nama_santri`, `alamat`, `id_asrama`, `total_paket_diterima`, `created_at`, `updated_at`) VALUES
('bnr34', 'dita septa', 'malang', 1, 3, '2020-10-07 02:53:53', '0000-00-00 00:00:00'),
('dsf435', 'naomi amirah', 'sunda', 1, 2, '2020-10-06 20:20:30', '0000-00-00 00:00:00'),
('erw123', 'putri izzal', 'malang', 8, 11, '2020-10-06 20:25:35', '0000-00-00 00:00:00'),
('fh34', 'rilla', 'pakis', 12, 3, '2020-10-06 18:10:23', '0000-00-00 00:00:00'),
('gh23', 'yunika karin', 'batu selecta', 2, 3, '2020-10-06 20:26:46', '0000-00-00 00:00:00'),
('ghh56', 'afira febriani', 'tanjung arum', 7, 3, '2020-10-07 02:22:08', '0000-00-00 00:00:00'),
('sr20', 'afsana', 'malang', 2, 3, '2020-10-07 02:56:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_paket`
--

CREATE TABLE `kategori_paket` (
  `id_kategori` int(11) UNSIGNED NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori_paket`
--

INSERT INTO `kategori_paket` (`id_kategori`, `nama_kategori`) VALUES
(1, 'paket A'),
(3, 'paket B'),
(4, 'paket C'),
(5, 'paket D'),
(7, 'paket E'),
(8, 'paket F'),
(9, 'paket G');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(255) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2020-10-06-113415', 'App\\Database\\Migrations\\Addtabelasrama', 'default', 'App', 1601984255, 1),
(4, '2020-10-06-151345', 'App\\Database\\Migrations\\Santri', 'default', 'App', 1601997354, 2),
(5, '2020-10-06-153159', 'App\\Database\\Migrations\\Trisan', 'default', 'App', 1601998574, 3),
(7, '2020-10-06-220449', 'App\\Database\\Migrations\\Datapaket', 'default', 'App', 1602021950, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_asrama`
--
ALTER TABLE `data_asrama`
  ADD PRIMARY KEY (`id_asrama`);

--
-- Indexes for table `data_paket`
--
ALTER TABLE `data_paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `data_paket_id_kategori_foreign` (`id_kategori`),
  ADD KEY `data_paket_NIS_foreign` (`NIS`),
  ADD KEY `data_paket_id_asrama_foreign` (`id_asrama`);

--
-- Indexes for table `data_santri`
--
ALTER TABLE `data_santri`
  ADD PRIMARY KEY (`NIS`),
  ADD KEY `data_santri_id_asrama_foreign` (`id_asrama`);

--
-- Indexes for table `kategori_paket`
--
ALTER TABLE `kategori_paket`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_asrama`
--
ALTER TABLE `data_asrama`
  MODIFY `id_asrama` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `data_paket`
--
ALTER TABLE `data_paket`
  MODIFY `id_paket` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori_paket`
--
ALTER TABLE `kategori_paket`
  MODIFY `id_kategori` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_paket`
--
ALTER TABLE `data_paket`
  ADD CONSTRAINT `data_paket_NIS_foreign` FOREIGN KEY (`NIS`) REFERENCES `data_santri` (`NIS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_paket_id_asrama_foreign` FOREIGN KEY (`id_asrama`) REFERENCES `data_asrama` (`id_asrama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_paket_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_paket` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_santri`
--
ALTER TABLE `data_santri`
  ADD CONSTRAINT `data_santri_id_asrama_foreign` FOREIGN KEY (`id_asrama`) REFERENCES `data_asrama` (`id_asrama`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
