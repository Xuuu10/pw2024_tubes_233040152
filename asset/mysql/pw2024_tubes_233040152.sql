-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2024 at 05:31 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2024_tubes_233040152`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `gambar`, `judul`, `deskripsi`) VALUES
(1, 'paket3.jpg', 'Paket 1', 'Paket Starter (Basic): \n            Akses ke fasilitas gym dasar\n            Konsultasi awal dengan pelatih pribadi\n            Jadwal latihan dasar\n            Panduan diet umum\n            Biaya bulanan yang terjangkau'),
(3, 'paket4.jpg', 'Paket 2', 'Transformasikan tubuh Anda dengan Paket Fit & Fab! Dapatkan akses ke peralatan gym modern, kelas harian seperti Zumba dan Yoga, serta sesi bulanan dengan pelatih pribadi. Ideal untuk Anda yang ingin bugar dan menawan dalam waktu singkat.'),
(4, 'paket1.jpg', 'Paket 3', 'Tingkatkan kekuatan dan stamina dengan Paket Power Boost! Akses tak terbatas ke area angkat beban, program pelatihan intensif, dan sesi mingguan dengan pelatih kekuatan profesional. Dilengkapi dengan suplemen nutrisi khusus untuk mencapai puncak performa.'),
(5, 'paket2.jpg', 'Paket 4', 'Ciptakan keseimbangan tubuh dan pikiran dengan Paket Ultimate Wellness. Selain fasilitas gym lengkap, nikmati kelas meditasi, terapi pijat mingguan, dan akses ke sauna serta jacuzzi. Dirancang untuk mencapai kebugaran total dan relaksasi maksimal.');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int NOT NULL,
  `nama_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_role` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `gambar`, `username`, `email`, `password`, `id_role`) VALUES
(1, '', 'Rudol_1001', 'rudolsinuratbahul@gmail.com', 'Rudol123', 1),
(3, 'deffault.img', 'royyyy', 'royy@gmail.com', 'apaajawe123', 2),
(4, 'deffault.img', 'monyet', 'royy@gmail.com', '123456789', 2),
(5, 'deffault.img', 'rudolprasetyo', 'rudolprasetyo@gmail.com', 'niceguys', 2),
(6, 'deffault.img', 'aku ya?', 'akujuga@gmail.com', '1234563', 2),
(7, 'deffault.img', 'apapapa', 'abdba@gmail.com', '1234445', 2),
(8, 'deffault.img', 'apa123', 'apa@gmail.com', '123456', 2),
(9, 'deffault.img', 'Prasetyo10', 'Prasetyo10@gmail.com', 'prasetyo12345', 2),
(10, '', 'nikennn', 'nikenn123@gmail.com', 'niken123', 2),
(11, 'deffault.img', 'lllll', 'lllll@gmail.com', '54321', 2),
(12, '', 'ufafgagu', 'afajgaufa@gmail.com', '54321', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
