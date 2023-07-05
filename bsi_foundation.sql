-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 06:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsi_foundation`
--

-- --------------------------------------------------------

--
-- Table structure for table `adopsi`
--

CREATE TABLE `adopsi` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `nama_hewan` varchar(128) NOT NULL,
  `id_species` int(11) NOT NULL,
  `tgl_adopsi` date NOT NULL,
  `batas_adopsi` date NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adopsi`
--

INSERT INTO `adopsi` (`id`, `nama`, `alamat`, `no_telepon`, `nama_hewan`, `id_species`, `tgl_adopsi`, `batas_adopsi`, `harga`) VALUES
(4, 'Muhammad Faizal', 'Kayu Manis, Bogor, Jawa Barat', '089678719425', 'Zidan', 4, '2022-11-08', '2023-11-08', 'Rp. 2.000.000'),
(5, 'Dirgava Alfarel Mursadi', 'Leuwiliang, Bogor, Jawa Barat', '08817258832', 'Srambi', 1, '2022-11-09', '2023-11-09', 'Rp. 2.000.000'),
(6, 'Muhammad Rafli Fadillah', 'Bubulak, Bogor, Jawa Barat', '085158485548', 'Funyum', 3, '2022-11-09', '2023-11-09', 'Rp. 2.000.000'),
(7, 'Ivana Okazaki', 'Karadenan, Bogor, Jawa Barat', '085814207533', 'Phani', 5, '2022-11-09', '2023-11-09', 'Rp. 2.000.000'),
(8, 'Ivana Okazaki', 'Cilebut', '085814207533', 'John', 5, '2022-11-17', '2023-11-17', 'Rp. 2.000.000'),
(12, 'Ivana Okazaki', 'Karadenan, Bogor, Jawa Barat', '085158485548', 'Georgy', 1, '2023-07-03', '2024-07-03', 'Rp. 2.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `barang` varchar(128) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `kategori` varchar(64) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `barang`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'T-Shirt', 'Orangutan Freedom T-Shirt', 'Pakaian', 110000, 20, 'shop4.png'),
(2, 'Boneka', 'Baby-O', 'Aksesoris', 75000, 22, 'shop5.png'),
(3, 'T-Shirt', 'Orangutan Face T-Shirt', 'Pakaian', 110000, 22, 'shop6.png'),
(4, 'Boneka', 'Mommy-O', 'Aksesoris', 150000, 29, 'shop7.png'),
(5, 'Hoodie', 'BOSF Hoodie', 'Pakaian', 200000, 20, 'shop8.png'),
(6, 'Gelang', 'Orangutan Lifesaver Bracelet', 'Aksesoris', 40000, 48, 'shop9.png'),
(7, 'Hoodie', 'Orangutan Full-Zip Hoodie', 'Pakaian', 250000, 33, 'shop10.png'),
(8, 'T-Shirt', 'Baby Hammock T-Shirt', 'Pakaian', 85000, 50, 'shop11.png');

-- --------------------------------------------------------

--
-- Table structure for table `detail_donasi`
--

CREATE TABLE `detail_donasi` (
  `id` int(11) NOT NULL,
  `id_donasi` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `paket_donasi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_donasi`
--

INSERT INTO `detail_donasi` (`id`, `id_donasi`, `nama`, `alamat`, `no_telepon`, `paket_donasi`) VALUES
(7, 4, 'Ivana Okazaki', 'Karadenan, Bogor, Jawa Barat', '085814207533', 1000000),
(8, 3, 'Muhammad Faizal', 'Kayu Manis, Bogor, Jawa Barat', '089678719425', 750000),
(9, 2, 'Dirgava Alfarel Mursadi', 'Leuwiliang, Bogor, Jawa Barat', '08817258832', 500000),
(10, 1, 'Muhammad Rafli Fadillah', 'Bubulak, Bogor, Jawa Barat', '085158485548', 250000),
(11, 3, 'Muhammad Faizal', 'Kayu Manis, Bogor, Jawa Barat', '08967871XXXX', 750000),
(13, 4, 'Muhammad Faizal', 'Karadenan, Bogor, Jawa Barat', '085814207533', 1000000),
(15, 2, 'Muhammad Gunawan', 'Cilebut', '087801354248', 500000),
(18, 2, 'Ivana Okazaki', 'Karadenan', '085814207533', 500000),
(19, 2, 'Ivana Okazaki', 'Karadenan, Bogor, Jawa Barat', '085814207533', 500000),
(20, 4, 'Muhammad Faizal', 'Karadenan, Bogor, Jawa Barat', '085814207533', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id`, `id_invoice`, `id_barang`, `nama_barang`, `jumlah`, `harga`, `pilihan`) VALUES
(5, 8, 1, 'T-Shirt', 1, 110000, ''),
(6, 8, 2, 'Boneka', 1, 75000, ''),
(7, 8, 3, 'T-Shirt', 1, 110000, ''),
(8, 8, 4, 'Boneka', 1, 150000, ''),
(9, 9, 6, 'Gelang', 1, 40000, ''),
(10, 10, 6, 'Gelang', 1, 40000, ''),
(11, 11, 7, 'Hoodie', 1, 250000, ''),
(12, 11, 6, 'Gelang', 1, 40000, ''),
(13, 12, 7, 'Hoodie', 1, 250000, ''),
(16, 14, 3, 'T-Shirt', 1, 110000, ''),
(19, 16, 3, 'T-Shirt', 1, 110000, ''),
(20, 16, 2, 'Boneka', 1, 75000, '');

--
-- Triggers `detail_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `detail_pesanan` FOR EACH ROW BEGIN
	UPDATE barang SET stok = stok-NEW.jumlah
    WHERE id = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id` int(11) NOT NULL,
  `paket_donasi` int(20) NOT NULL,
  `teks` text NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id`, `paket_donasi`, `teks`, `image`) VALUES
(1, 250000, 'Untuk membantu menyediakan makanan ringan bagi Hewan Konservasi atau untuk menanam 1 Pohon.', 'donasipohon.jpg'),
(2, 500000, 'Untuk menyediakan perlengkapan yang akan berguna untuk Konservasi Kami.\r\n\r\n\r\n', 'donasiperlengkapan.jpg'),
(3, 750000, 'Untuk membantu pembiayaan pemeriksaan kesehatan umum rutin bagi para Hewan Konservasi.', 'donasikesehatan.jpg'),
(4, 1000000, 'Untuk menyediakan Makanan dan Vitamin untuk Hewan Konservasi Kami.', 'donasimakanan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `id` int(11) NOT NULL,
  `nama_hewan` varchar(128) CHARACTER SET latin1 NOT NULL,
  `jenis_kelamin` enum('Jantan','Betina') NOT NULL,
  `id_species` int(11) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_adopsi` enum('SUDAH','BELUM') NOT NULL,
  `image` varchar(256) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`id`, `nama_hewan`, `jenis_kelamin`, `id_species`, `tanggal_lahir`, `status_adopsi`, `image`) VALUES
(1, 'Edmund', 'Jantan', 4, '2000-01-21', 'BELUM', 'Edmund.jpg'),
(2, 'Badur', 'Jantan', 3, '1982-06-15', 'BELUM', 'badur.jpg'),
(3, 'Leo', 'Jantan', 4, '2010-11-01', 'BELUM', 'Leo.jpg'),
(4, 'Gadis', 'Betina', 4, '2014-02-10', 'BELUM', 'Gadis.jpg'),
(5, 'Agra', 'Betina', 4, '2010-05-15', 'BELUM', 'Agra.jpg'),
(6, 'Gatot', 'Jantan', 4, '2005-07-05', 'BELUM', 'gatot.jpg'),
(7, 'Lala', 'Betina', 4, '2007-12-20', 'BELUM', 'lala.jpg'),
(8, 'Meli', 'Betina', 4, '2007-08-21', 'BELUM', 'Meli.jpg'),
(9, 'Zidan', 'Jantan', 4, '2020-11-17', 'SUDAH', 'zidan.jpeg'),
(10, 'Cut', 'Betina', 5, '1970-12-04', 'BELUM', 'cut.jpg'),
(11, 'Ele', 'Betina', 5, '1990-06-25', 'BELUM', 'ele.jpg'),
(12, 'Louis', 'Jantan', 5, '1998-08-17', 'BELUM', 'louis.jpg'),
(13, 'Mamoo', 'Jantan', 5, '2015-04-28', 'BELUM', 'mamoo.jpeg'),
(14, 'Peko', 'Jantan', 5, '1985-03-15', 'BELUM', 'peko.jpg'),
(15, 'Phani', 'Betina', 5, '2007-09-25', 'SUDAH', 'phani.jpg'),
(16, 'Will', 'Jantan', 5, '2020-07-31', 'BELUM', 'will.jpg'),
(17, 'John', 'Jantan', 5, '1973-05-24', 'SUDAH', 'john.jpg'),
(18, 'Dobleh', 'Jantan', 1, '1998-08-07', 'BELUM', 'dobleh.jpg'),
(19, 'Morio', 'Jantan', 1, '2005-09-13', 'BELUM', 'morio.jpg'),
(20, 'Belli', 'Betina', 1, '2007-05-02', 'BELUM', 'belli.jpg'),
(21, 'Boogi', 'Jantan', 1, '2000-02-28', 'BELUM', 'boogi.jpg'),
(22, 'Kikkymay', 'Betina', 1, '2006-09-19', 'BELUM', 'kikkymay.jpg'),
(23, 'Srambi', 'Jantan', 1, '2018-09-12', 'SUDAH', 'srambi.jpg'),
(24, 'Georgy', 'Jantan', 1, '2015-11-18', 'BELUM', 'georgy.jpg'),
(25, 'Murphis', 'Jantan', 1, '2015-09-23', 'BELUM', 'murphis.jpg'),
(26, 'Xeon', 'Jantan', 1, '1996-06-12', 'BELUM', 'xeon.jpg'),
(27, 'Enchiz', 'Betina', 1, '1996-05-17', 'BELUM', 'enchiz.jpg'),
(28, 'Trixie', 'Betina', 2, '1950-08-12', 'BELUM', 'trixie.jpg'),
(29, 'Felix', 'Jantan', 2, '1956-05-23', 'BELUM', 'felix.jpg'),
(30, 'Chester', 'Jantan', 2, '1958-01-13', 'BELUM', 'chester.jpg'),
(31, 'Sparta', 'Jantan', 2, '1960-02-23', 'BELUM', 'sparta.jpg'),
(32, 'Jinora', 'Betina', 2, '1934-04-28', 'BELUM', 'jinora.jpg'),
(33, 'Ivana', 'Jantan', 2, '1980-12-09', 'BELUM', 'ivana.jpg'),
(34, 'Dexter', 'Jantan', 2, '1945-07-17', 'BELUM', 'dexter.jpg'),
(35, 'Ehsan', 'Jantan', 2, '1978-07-09', 'BELUM', 'ehsan.jpg'),
(36, 'Diego', 'Jantan', 2, '1980-07-10', 'BELUM', 'diego.jpg'),
(37, 'Valkrie', 'Betina', 2, '1990-08-22', 'BELUM', 'valkrie.jpg'),
(38, 'Rhino', 'Jantan', 3, '1989-10-06', 'BELUM', 'rhino.jpg'),
(39, 'RhinoJr', 'Jantan', 3, '2010-01-23', 'BELUM', 'rhinojr.jpg'),
(40, 'Cusasa', 'Betina', 3, '2019-04-29', 'BELUM', 'cusasa.jpg'),
(41, 'Bager', 'Jantan', 3, '1981-09-28', 'BELUM', 'bager.jpg'),
(42, 'Baduh', 'Jantan', 3, '1979-01-01', 'BELUM', 'baduh.jpg'),
(43, 'Bari', 'Jantan', 3, '1987-07-05', 'BELUM', 'bari.jpg'),
(44, 'Bapuh', 'Jantan', 3, '1978-07-27', 'BELUM', 'bapuh.jpg'),
(45, 'Funyum', 'Betina', 3, '1992-03-17', 'SUDAH', 'funyum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(8, 'Ivana Okazaki', 'Karadenan, Bogor, Jawa Barat', '2022-11-05 16:48:39', '2022-11-06 16:48:39'),
(9, '', '', '2022-11-06 12:05:18', '2022-11-07 12:05:18'),
(10, 'Muhammad Faizal', 'Kayu Manis, Bogor, Jawa Barat', '2022-11-06 12:16:08', '2022-11-07 12:16:08'),
(11, 'Dirgava Alfarel Mursadi', 'Leuwiliang, Bogor, Jawa Barat', '2022-11-06 17:32:27', '2022-11-07 17:32:27'),
(12, 'Muhammad Faizal', 'Kayu Manis, Bogor, Jawa Barat', '2022-11-07 16:17:53', '2022-11-08 16:17:53'),
(16, 'Muhammad Gunawan', 'Karadenan, Bogor, Jawa Barat', '2023-04-14 22:41:55', '2023-04-15 22:41:55');

-- --------------------------------------------------------

--
-- Table structure for table `relawan`
--

CREATE TABLE `relawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) CHARACTER SET latin1 NOT NULL,
  `email` varchar(128) CHARACTER SET latin1 NOT NULL,
  `alamat` varchar(256) CHARACTER SET latin1 NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_input` int(11) NOT NULL,
  `status_relawan` enum('Calon Relawan','Relawan Aktif') NOT NULL,
  `image` varchar(256) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `relawan`
--

INSERT INTO `relawan` (`id`, `nama`, `email`, `alamat`, `no_telepon`, `tanggal_lahir`, `tanggal_input`, `status_relawan`, `image`) VALUES
(13, 'Gunawan Muh', 'mgunawan127@gmail.com', 'Cilebut, Bogor, Jawa Barat', '08581420XXXX', '1945-12-04', 1683445992, 'Relawan Aktif', 'pro1680947068.jpg'),
(19, 'Ivana Okazaki', 'okazakiivana47@gmail.com', 'Karadenan, Bogor, Jawa Barat', '085814207533', '2002-06-25', 1685348073, 'Relawan Aktif', 'pro1667611217.jpg'),
(20, 'Muhammad Faizal', 'mohfaizal2018@gmail.com', 'Kayu Manis, Bogor, Jawa Barat', '08817258832', '1945-12-04', 1685935307, 'Relawan Aktif', 'pro1667644013.jpg'),
(21, 'Ivana Okazaki', 'okazakiivana47@gmail.com', 'Karadenan, Bogor, Jawa Barat', '087801354248', '2022-06-25', 1686211063, 'Relawan Aktif', 'pro1667611217.jpg'),
(22, 'Ivana Okazaki', 'okazakiivana47@gmail.com', 'Karadenan, Bogor, Jawa Barat', '085814207533', '2022-06-25', 1688372328, 'Relawan Aktif', 'pro1667611217.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `species`
--

CREATE TABLE `species` (
  `id_species` int(5) NOT NULL,
  `species` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `species`
--

INSERT INTO `species` (`id_species`, `species`) VALUES
(1, 'Orangutan'),
(2, 'Komodo'),
(3, 'Badak Bercula Satu'),
(4, 'Harimau Sumatera'),
(5, 'Gajah Sumatera');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `no_telepon` varchar(30) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `alamat`, `no_telepon`, `image`, `password`, `role_id`, `is_active`, `tanggal_input`) VALUES
(3, 'Muhammad Gunawan', '12211015@bsi.ac.id', 'Kayumanis', '087801354248', 'pro1667611150.jpg', '$2y$10$3zIGqRetRDZ5pcFjSDz8o.D4Quadu5iJSbrC89iSZzMHbFPYMNS2q', 1, 1, 1667546326),
(5, 'Muhammad Faizal', 'mohfaizal2018@gmail.com', 'Kayu Manis', '089678719425', 'pro1667644013.jpg', '$2y$10$dmmHc6BOI7BKLOIowNyzlOOq7vmG6N84s7pWbw4ubTH.Ua/zDT90a', 2, 1, 1667643986),
(7, 'Dirgava Alfarel Mursadi', 'dirgavaalfarel@gmail.com', 'Leuwiliang', '08817258832', 'pro1667973817.jpg', '$2y$10$c58KY4IQVElGyPjJLsZZzuIDRNWgnPskyND1K7/RVCxjBeK5QVcEq', 2, 1, 1667973785),
(8, 'Muhammad Rafli Fadillah', 'raflifadillah123321@gmail.com', 'Bubulak', '085158485548', 'pro1667974001.jpg', '$2y$10$8B8POHIATCYYKrs7/tVTtuXRF4W4s8CrwPNKJJfAFapWi/e8bqXwS', 2, 1, 1667973970),
(15, 'Gunawan Muh', 'mgunawan127@gmail.com', 'Cilebut', '0858585858', 'pro1680947068.jpg', '$2y$10$wy/uB1J5SUflO4NwGcm0uuuUun2Vk6H83x0qMR3VnnD9XH8SH//EC', 2, 1, 1680944052);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopsi`
--
ALTER TABLE `adopsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_donasi`
--
ALTER TABLE `detail_donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relawan`
--
ALTER TABLE `relawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`id_species`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adopsi`
--
ALTER TABLE `adopsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `detail_donasi`
--
ALTER TABLE `detail_donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `relawan`
--
ALTER TABLE `relawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `species`
--
ALTER TABLE `species`
  MODIFY `id_species` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
