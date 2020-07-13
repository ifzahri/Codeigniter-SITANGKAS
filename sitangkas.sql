-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 04:47 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitangkas`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id` int(11) NOT NULL,
  `nomor` int(128) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jumlah` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id`, `nomor`, `tanggal`, `nama`, `jumlah`) VALUES
(8, 658, '2020-04-16', 'Ifzahri', 0),
(9, 76589, '2020-04-08', 'siswa', 0),
(10, 96479, '2020-04-10', 'iftala', 0),
(11, 56879, '2020-04-17', 'siswa', 0),
(12, 764563, '2020-04-16', 'iftala', 0),
(13, 6524, '2020-04-23', 'Ifzahri', 0),
(16, 809204, '2020-04-11', 'Ifzahri', 0),
(23, 12420101, '2020-04-12', 'siswa', 3),
(24, 12420101, '2020-04-30', 'iftala', 5),
(25, 12420101, '2020-04-21', 'admin', 5000),
(26, 12420101, '2020-04-29', 'walikelas', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `nomor` int(128) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `nomor`, `tanggal`, `jumlah`, `keterangan`) VALUES
(1, 5342678, '2020-04-04', '40000', 'beli masker');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `image`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'iftala', 'iftala@gmail.com', '$2y$10$OghlJAMmSsNuWRHAiSdKsex4u0socz5fwqwfJTZgDvN/q932J/pxq', 'Annotation_2019-08-13_193447.png', 1, 1, 1585805647),
(2, 'siswa', 'siswa@gmail.com', '$2y$10$u23UBwoBepDV7f/ytHEs9uVviEYkeH/3MQuca82W1cLQGk2YNKtC6', 'default.jpg', 2, 1, 1585805697),
(9, 'ifzahri', 'ifzahri@gmail.com', '$2y$10$vPpxjH1LrlzC9RGjLz7vxu22d0VF3TAZjWR41XGmCqvdLQ5uamMle', 'default.jpg', 2, 1, 1586406121),
(11, 'admin', 'admin@gmail.com', '$2y$10$7nIi5mDwVLxZqAh1XvC8BOBEaKKBQ671.cQ7brTi6q3GZmK3EfWMO', 'default.jpg', 1, 1, 1586406941),
(12, 'walikelas', 'walikelas@gmail.com', '$2y$10$hN.4jd6FInf1xGlAAi9AzeZxNKj5KNE4VpjA9S8FjOnodTwl2KLYC', 'default.jpg', 3, 1, 1586424556),
(16, 'Iftala Admin', 'ifzahri3003@gmail.com', '$2y$10$pBOwAXd2WqP3SAOtT8pSIedsOb2uaIKUWrMWRLx/F1oXLzjd/8/G2', 'default.jpg', 2, 1, 1586590917),
(17, 'Iftala', 'circlebytes.iftala@gmail.com', '$2y$10$RTYKlUT3AJPZzDvSv/WBfuViPdVm0L53.S.Z4OX4tJPdODjwKsf8S', 'default.jpg', 2, 1, 1586591023),
(18, 'Dedy sukmana', 'dedysukmana68@gmail.com', '$2y$10$N.nWVf5a/bsSl2OuCVjJ9uw.0WX0zcI5vGGJ80ETolBSMQmgr1DN6', 'default.jpg', 2, 1, 1586677584);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `menu_id`, `role_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 5, 1),
(9, 4, 3),
(12, 4, 1),
(14, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(4, 'Walikelas'),
(5, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Siswa'),
(3, 'Walikelas');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'ni ni-shop text-primary', 1),
(2, 1, 'Pemasukan', 'admin/pemasukan', 'ni ni-chart-bar-32 text-info', 1),
(3, 2, 'Landing Page', 'user', 'ni ni-shop text-primary', 1),
(4, 2, 'Laporan', 'user/laporan', 'ni ni-calendar-grid-58 text-red', 1),
(5, 1, 'Laporan Pemasukan', 'admin/laporanpemasukan', 'ni ni-calendar-grid-58 text-red', 1),
(6, 1, 'Pengeluaran', 'admin/pengeluaran', 'ni ni-chart-bar-32 text-info', 1),
(7, 5, 'Menu Management', 'menu', 'ni ni-folder-17 text-green', 1),
(8, 5, 'Submenu Management', 'menu/submenu', 'ni ni-folder-17 text-info', 1),
(9, 1, 'Laporan Pengeluaran', 'admin/laporanpengeluaran', 'ni ni-calendar-grid-58 text-red', 1),
(10, 4, 'Home', 'walikelas', 'ni ni-shop text-primary', 1),
(11, 4, 'Laporan Kas Kelas', 'walikelas/laporankaskelas', 'ni ni-calendar-grid-58 text-red', 1),
(12, 1, 'Role', 'admin/role', 'ni ni-circle-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'iftalazahri30@gmail.com', '0VOtD5R1UU6a/12b8Q0OWmVJtAa6YozRYmeINyjDYNw=', 1585813139),
(12, 'circlebytes.iftala@gmail.com', 'kALNguZ5UM+lx7QeqSIcnPotNNJFEIxH72SFShw0XJI=', 1586593512),
(13, 'dedysukmana68@gmail.com', '9C6TpL31yutsuuRuEukc/wHyqIgHxxphaSB6OAI/WBo=', 1586677584);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
