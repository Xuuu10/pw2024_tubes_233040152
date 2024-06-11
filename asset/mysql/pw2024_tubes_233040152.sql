-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2024 at 04:00 AM
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
  `paket` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `gambar`, `paket`, `deskripsi`) VALUES
(1, 'paket3.jpg', 'Paket 1', 'Paket Starter (Basic): \n            Akses ke fasilitas gym dasar\n            Konsultasi awal dengan pelatih pribadi\n            Jadwal latihan dasar\n            Panduan diet umum\n            Biaya bulanan yang terjangkau'),
(3, 'paket4.jpg', 'Paket 2', 'Transformasikan tubuh Anda dengan Paket Fit & Fab! Dapatkan akses ke peralatan gym modern, kelas harian seperti Zumba dan Yoga, serta sesi bulanan dengan pelatih pribadi. Ideal untuk Anda yang ingin bugar dan menawan dalam waktu singkat.'),
(4, 'paket1.jpg', 'Paket 3', 'Tingkatkan kekuatan dan stamina dengan Paket Power Boost! Akses tak terbatas ke area angkat beban, program pelatihan intensif, dan sesi mingguan dengan pelatih kekuatan profesional. Dilengkapi dengan suplemen nutrisi khusus untuk mencapai puncak performa.'),
(5, 'paket2.jpg', 'Paket 4', 'Ciptakan keseimbangan tubuh dan pikiran dengan Paket Ultimate Wellness. Selain fasilitas gym lengkap, nikmati kelas meditasi, terapi pijat mingguan, dan akses ke sauna serta jacuzzi. Dirancang untuk mencapai kebugaran total dan relaksasi maksimal.');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pesanan` int NOT NULL,
  `paket` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pesanan`, `paket`, `first_name`, `last_name`, `email`, `phone`, `message`) VALUES
(1, 'Paket A', 'can', 'can', 'can@gmail.com', '0808080808', 'tambah'),
(2, '', 'rudol', 'prasetyo', 'rudolsinuratbahul@gmaiil.com', '089786284', 'susuuuuu');

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
(1, 'default.img', 'Rudol_1001', 'rudolsinuratbahul@gmail.com', '$2y$10$Sm53acde.mdFQxtIshXSr.yoTQGo16b4mLZNkzrenysXrzc1IY0Eu', 1),
(14, 'deffault.img', 'rudolpras', 'prasetyosinurat10@gmail.com', '$2y$10$gFV8tCnd5fHdRccf45KDOusI5ctIPu8nut.NILQ5p5OihnNTxo0r2', 1),
(17, '', 'admin', 'admin@gmail.com', '$2y$10$UD76wdxramaz8.jlvNkwX.z5KPLmOvj2o5Cbxv8ah8XQB/BhF5Xwy', 1),
(19, 'deffault.img', 'rudolpra', 'rudolsinuratbahul@gmail.com', '$2y$10$vMTEkcObfJxwzMeFJl2YuuGeNLF27hUb4shgRptcc2UNHpPABSFXS', 2),
(20, '666746c9991fa.png', 'gaugfuag', 'aggfagu@gmail.com', '$2y$10$mfdVr43gmRPBizJQCyDbne23g7vaiwI3rF67WFMZrIpu4IkMwXQFq', 2),
(21, '6667474737b3b.png', 'adafafa', 'faffav@gmail.com', '$2y$10$/xkaqcX0kQP8DCztRXXf7uhCB6aKavtfY/X5YNOFK2R8bVLxk.Eji', 2),
(22, '666749079470f.png', 'afafasf', 'afayv@gmail.com', '$2y$10$PspksgB6i7N7zI6BC4BFEuhx6DngP.JpVeIacIxzp7vMI7.uEBQC.', 2),
(23, '66674959015f4.png', 'afaa', 'aga@gmail.com', '$2y$10$qi3qPhKJ0WqO/IWPe3.dpuDGDueOOHZp01KDOueCWeeAPIWaEOL.O', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pesanan`);

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
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pesanan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
