-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 03:43 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fix`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `userid` int(11) NOT NULL,
  `nama_keluarga` text NOT NULL,
  `saldo_sisa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`userid`, `nama_keluarga`, `saldo_sisa`) VALUES
(1, 'Komang kalis', 35000),
(2, 'Kadek Budi', 630000);

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `ukuran_file` double NOT NULL,
  `tipe_file` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `deskripsi`, `nama_file`, `ukuran_file`, `tipe_file`) VALUES
(1, '', '526aecbffda6fd02fbc1e7b522474bfe.PNG', 80.14, 'image/png'),
(2, '', '630e46f4ac9ace121ac49ebf60c4cf98.PNG', 54.64, 'image/png'),
(3, '', '74108f08b64c191a3baa15053c0ee129.PNG', 54.64, 'image/png'),
(4, '', '8a52dc6dc2f2e38e79c9cbb74cfbd226.jpg', 1305.65, 'image/jpeg'),
(5, '', '7fbcaafc80da223b1027db3943450b0a.jpg', 1305.65, 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `trackrecord`
--

CREATE TABLE `trackrecord` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `nama_keluarga` varchar(255) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_belanja` int(11) NOT NULL,
  `foto_nota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trackrecord`
--

INSERT INTO `trackrecord` (`id`, `userid`, `nama_keluarga`, `nama_toko`, `tanggal`, `jumlah_belanja`, `foto_nota`) VALUES
(1, 2, '', 'Sri Rejeki', '2018-02-08', 5000, ''),
(2, 2, 'Kadek Budi', 'Laju Terus', '2018-02-08', 5000, 'bf6117d12101cfaff735fc803481c283.jpg'),
(3, 2, 'Kadek Budi', 'sadadas', '2018-02-18', 4000, '673d7cf61d2361c4849c6ad17b57e3ff.PNG'),
(4, 2, 'Kadek Budi', 'byuy', '2018-02-18', 6000, '2c9a6fc87ef7c58b10c333c971829b78.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trackrecord`
--
ALTER TABLE `trackrecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trackrecord`
--
ALTER TABLE `trackrecord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
