-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 06:43 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joenfloristdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id_acara` int(11) NOT NULL,
  `acara` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id_acara`, `acara`) VALUES
(1, 'Congratulation'),
(2, 'Duka Cita'),
(3, 'For Her'),
(4, 'For Him'),
(5, 'Get Well Soon'),
(6, 'Graduation'),
(7, 'Wedding'),
(8, 'Valentine'),
(9, 'Mothers Day'),
(10, 'Symphaty');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id_jenis` int(11) NOT NULL,
  `jenis_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id_jenis`, `jenis_produk`) VALUES
(1, 'Bunga Papan'),
(2, 'Bunga Meja'),
(3, 'Flower Box'),
(4, 'Cake'),
(5, 'Cupcake'),
(6, 'Parcel buah'),
(7, 'Hampers Baby'),
(8, 'Forever Flower'),
(9, 'Handbouqet & Cokelat'),
(10, 'Parcel Cookie'),
(11, 'Bunga Bang'),
(12, 'Flower Box & Boneka'),
(13, 'Flower Box & cake'),
(14, 'Parcel Makanan'),
(15, 'Parcel Buah Pecah'),
(16, 'handbouqet');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_produk` varchar(200) NOT NULL,
  `id_acara` int(10) DEFAULT NULL,
  `id_jenis` int(10) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga_produk`, `id_acara`, `id_jenis`, `gambar`) VALUES
(1, 'Bunga Keren', ' mantap ini', '50000', 1, 1, 'WhatsApp_Image_2020-02-07_at_17_01_32.jpeg'),
(2, 'Bunga Sepatu', ' nice', '120000', 2, 2, 'WhatsApp_Image_2020-02-07_at_16_59_52.jpeg'),
(3, 'Bunga lumrah', '  woow cocok', '234434', 3, 3, 'WhatsApp_Image_2020-02-07_at_16_57_57.jpeg'),
(4, 'Bunga Cantik', ' unikk', '67000', 4, 4, 'WhatsApp_Image_2020-02-07_at_16_59_14.jpeg'),
(5, 'Bunga Mewah', ' nice shot', '89000', 15, 5, 'WhatsApp_Image_2020-02-07_at_16_58_36.jpeg'),
(6, 'Bunga Bakung', '  harum', '670000', 5, 6, 'WhatsApp_Image_2020-02-07_at_16_57_141.jpeg'),
(7, 'Bunga wisuda', ' selamat', '70000', 6, 7, 'WhatsApp_Image_2020-02-07_at_16_56_45.jpeg'),
(8, 'Bunga mekar', ' cantik', '2323000', 7, 8, 'WhatsApp_Image_2020-02-07_at_16_56_25.jpeg'),
(9, 'Bunga jadi', '  Mantap', '708900', 1, 1, 'WhatsApp_Image_2020-02-07_at_16_52_09.jpeg'),
(10, 'Bunga ditaman anggrek', '  Bunga ini keren', '50000', 9, 10, 'WhatsApp_Image_2020-02-07_at_16_55_55.jpeg'),
(11, 'Bunga ho', ' bungaa wei', '898882', 10, 11, 'WhatsApp_Image_2020-02-07_at_16_55_30.jpeg'),
(12, 'Bungaann ', ' bunga indahh', '789990', 11, 12, 'WhatsApp_Image_2020-02-07_at_16_55_12.jpeg'),
(13, 'Bungah', ' bunga indassh', '38494', 12, 13, 'WhatsApp_Image_2020-02-07_at_16_54_43.jpeg'),
(14, 'Bunga Men', ' mantap jiwa', '89000', 13, 4, 'WhatsApp_Image_2020-02-07_at_16_54_19.jpeg'),
(15, 'Bunga Nan', ' keren uy', '230987', 14, 15, 'WhatsApp_Image_2020-02-07_at_16_53_53.jpeg'),
(16, 'Bunga Lai', ' mantap beud', '8737483', 16, 16, 'WhatsApp_Image_2020-02-07_at_16_53_26.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `image`, `password`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', 'home-right.png', '$2y$10$pigZ8yZ2V9j5nTqxDIzsuO5I6/J42N9lxInW3oxNDltBsCRQgkyNS', 'admin'),
(3, 'gorbyno', 'bynogan@gmail.com', 'home-right.png', '$2y$10$drh2tzqUV172Jno2DRnp8elUTnbVB.F10gitkIR5Fn/wsRBB6ezt2', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
