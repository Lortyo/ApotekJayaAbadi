-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 01:50 AM
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
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `iddetailtransaksi` int(4) NOT NULL,
  `idtransaksi` int(5) NOT NULL,
  `idobat` int(4) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `hargasatuan` double NOT NULL,
  `totalharga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`iddetailtransaksi`, `idtransaksi`, `idobat`, `jumlah`, `hargasatuan`, `totalharga`) VALUES
(1, 2, 1, 2, 5000, 10000),
(2, 3, 3, 3, 50000, 150000),
(3, 3, 4, 1, 5000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `idkar` int(11) NOT NULL,
  `namakar` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`idkar`, `namakar`, `alamat`, `telp`) VALUES
(1, 'Yumi Awiawi', 'Denpasar Utara', '081236126864'),
(3, 'Anggi Cuak', 'Ubud', '081238387296'),
(4, 'wanqo adui', 'jalan cokroaminoto', '0896131166691'),
(5, 'Bdui', 'Jalan', '0858585'),
(6, 'kelamin', 'dihatimu', '098763435678');

-- --------------------------------------------------------

--
-- Table structure for table `loginn`
--

CREATE TABLE `loginn` (
  `username` varchar(50) NOT NULL,
  `passwor` varchar(65) NOT NULL,
  `leveluser` enum('admin','karyawan') NOT NULL,
  `idkar` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginn`
--

INSERT INTO `loginn` (`username`, `passwor`, `leveluser`, `idkar`) VALUES
('bdui', '$2y$10$jQqMPmsCh9LLvy3tucCgdesSomuihc0H4WqNepXxM/NtPtzEdyCrS', 'karyawan', 5),
('Reno', '$2y$10$8ITYJR/cMNHFzwdhr7lWNuZ5nk1XmsovUA6amZRc88OjrtawwyMTG', 'admin', 3),
('skadi', '$2y$10$ziI/.y8G.dZYr.K3vY7BgeWaKL2cYM1fidmdqfn.aofhn5bkttJLu', 'admin', 4),
('wanto', '$2y$10$3IJYl3sGcIkRvohbrQCXKumrBz5UM26s0pJ.MoOApCmnCSCeHuJ.C', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `idobat` int(11) NOT NULL,
  `idsuplir` int(4) NOT NULL,
  `namaobat` varchar(100) NOT NULL,
  `kategoriobat` varchar(50) NOT NULL,
  `hargajual` double NOT NULL,
  `hargabeli` double NOT NULL,
  `stokobat` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`idobat`, `idsuplir`, `namaobat`, `kategoriobat`, `hargajual`, `hargabeli`, `stokobat`, `keterangan`) VALUES
(1, 2, 'antimo', 'sakit', 50000, 30000, 12345, 'biar ga mabuk'),
(3, 1, 'parasetamol', 'sakit', 50000, 15000, 12345, 'parasetamol aku gataua'),
(4, 3, 'diapet anak', 'sakit sekali', 5000, 2500, 102, 'sakit perut untuk anak'),
(5, 2, 'moanti', 'sakit aw', 5000, 4000, 45, 'biar ga mabuk');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idpel` int(4) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `usia` int(3) NOT NULL,
  `buktifotoresep` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idpel`, `namalengkap`, `alamat`, `telp`, `usia`, `buktifotoresep`) VALUES
(1, 'muhammad gibran bravenanda putra', 'padang indah 1 no 8', '081239171712', 17, '../fotoResep/FcajS9CakAA6YkK.jpg'),
(2, 'athaya zamarista putra yuwanto', 'jalan cokroaminoto', '089613116669', 17, '../fotoResep/F6Qg4jyaQAAJ3Qt.jpeg'),
(3, 'Zidan Rifki Setiawan', 'gatau pokoknya bali', '0895343974000', 17, '../fotoResep/F5hLDMtXYAAqqmC.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `supler`
--

CREATE TABLE `supler` (
  `idsuplir` int(4) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supler`
--

INSERT INTO `supler` (`idsuplir`, `perusahaan`, `telp`, `alamat`, `keterangan`) VALUES
(1, 'teh gelas', '089696845543', 'jalan teh gelas disamping es teh anget', 'enak dah itu aja'),
(2, 'antimo', '085237076599', 'jalan raya aceerrr', 'biar ga mabuk'),
(3, 'diapet', '08513481921', 'jalan jalan ke kiri kanan gang ging gung', 'diare aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` int(5) NOT NULL,
  `idpel` int(4) NOT NULL,
  `idkar` int(4) NOT NULL,
  `tgltransaksi` date NOT NULL,
  `kategoripelanggan` varchar(20) NOT NULL,
  `totalbayar` double NOT NULL,
  `bayar` double NOT NULL,
  `kembali` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `idpel`, `idkar`, `tgltransaksi`, `kategoripelanggan`, `totalbayar`, `bayar`, `kembali`) VALUES
(1, 1, 3, '2023-06-08', 'tidak ramah', 70000, 100000, 30000),
(2, 2, 3, '2023-07-01', 'ramah', 20000, 20000, 0),
(3, 3, 1, '2023-06-13', 'jahat', 180000, 200000, 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`iddetailtransaksi`),
  ADD KEY `fk_idobat` (`idobat`),
  ADD KEY `fk_tran` (`idtransaksi`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`idkar`);

--
-- Indexes for table `loginn`
--
ALTER TABLE `loginn`
  ADD PRIMARY KEY (`username`),
  ADD KEY `fk_kar2` (`idkar`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`idobat`),
  ADD KEY `fk_supler` (`idsuplir`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idpel`);

--
-- Indexes for table `supler`
--
ALTER TABLE `supler`
  ADD PRIMARY KEY (`idsuplir`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`),
  ADD KEY `fk_pelang` (`idpel`),
  ADD KEY `fk_kar` (`idkar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `iddetailtransaksi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `idkar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `idobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idpel` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `supler`
--
ALTER TABLE `supler`
  MODIFY `idsuplir` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `fk_idobat` FOREIGN KEY (`idobat`) REFERENCES `obat` (`idobat`),
  ADD CONSTRAINT `fk_tran` FOREIGN KEY (`idtransaksi`) REFERENCES `transaksi` (`idtransaksi`);

--
-- Constraints for table `loginn`
--
ALTER TABLE `loginn`
  ADD CONSTRAINT `fk_kar2` FOREIGN KEY (`idkar`) REFERENCES `karyawan` (`idkar`);

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `fk_supler` FOREIGN KEY (`idsuplir`) REFERENCES `supler` (`idsuplir`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_kar` FOREIGN KEY (`idkar`) REFERENCES `karyawan` (`idkar`),
  ADD CONSTRAINT `fk_pelang` FOREIGN KEY (`idpel`) REFERENCES `pelanggan` (`idpel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
