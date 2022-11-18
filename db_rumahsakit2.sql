-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 05:58 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rumahsakit2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_transaksi`
--

CREATE TABLE `tbl_detail_transaksi` (
  `kode_detail` int(9) NOT NULL,
  `kode_transaksi` char(14) NOT NULL,
  `kode_obat` char(5) NOT NULL,
  `jumlah_obat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_transaksi`
--

INSERT INTO `tbl_detail_transaksi` (`kode_detail`, `kode_transaksi`, `kode_obat`, `jumlah_obat`) VALUES
(50, 'TR202112030001', 'B0003', 1),
(51, 'TR202112030001', 'B0005', 1),
(55, 'TR202112030002', 'B0007', 1),
(56, 'TR202112030003', 'B0006', 1),
(57, 'TR202112030003', 'B0005', 2),
(64, 'TR202112100004', 'B0004', 1),
(65, 'TR202112100004', 'B0005', 2),
(66, 'TR202112100004', 'B0002', 1),
(67, 'TR202112100005', 'B0009', 1),
(68, 'TR202112100005', 'B0005', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `kode_dokter` char(5) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`kode_dokter`, `nama_dokter`, `jenis_kelamin`, `spesialis`, `alamat`, `no_tlp`) VALUES
('D0001', 'Ferdinand Porsche', 'Pria', 'Anak', 'Semarang', '082917292918'),
('D0002', 'Kiichiro Toyoda', 'Pria', 'Umum', 'Kudus', '812100200'),
('D0003', 'Mary Barra', 'Wanita', 'Gigi', 'Semarang', '081235466471'),
('D0004', 'Melinda Gates', 'Wanita', 'Kandungan', 'Salatiga', '081237461717'),
('D0005', 'Rowan Atkinson', 'Pria', 'Mata', 'Semarang', '081276765151'),
('D0006', 'William Tanuwijaya', 'Pria', 'Umum', 'Semarang', '081281729182'),
('D0007', 'Agung Mario', 'Pria', 'Penyakit Dalam', 'Surabaya', '081223569889');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `kode_jadwal` char(4) NOT NULL,
  `nama_jadwal` varchar(255) NOT NULL,
  `kode_dokter` char(5) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`kode_jadwal`, `nama_jadwal`, `kode_dokter`, `hari`, `jam`) VALUES
('J001', 'Praktik Umum', 'D0002', 'Senin', '07.00 - 11.30'),
('J002', 'Praktik Anak', 'D0001', 'Senin', '13.00 - 16.30'),
('J003', 'Praktik Gigi', 'D0003', 'Senin', '19.00 - 22.30'),
('J004', 'Praktik Umum', 'D0006', 'Senin', '07.00 - 11.30'),
('J005', 'Praktik Anak', 'D0001', 'Selasa', '13.00 - 16.30'),
('J006', 'Praktik Umum', 'D0002', 'Rabu', '07.00 - 11.30'),
('J007', 'Praktik Umum', 'D0006', 'Rabu', '13.00 - 16.30'),
('J008', 'Praktik Mata', 'D0005', 'Senin', '07.00 - 11.30'),
('J009', 'Praktik Kandungan', 'D0004', 'Jumat', '19.00 - 22.30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `kode_obat` char(5) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `stok_obat` varchar(255) NOT NULL,
  `jenis_obat` varchar(255) NOT NULL,
  `harga_obat` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_obat`
--

INSERT INTO `tbl_obat` (`kode_obat`, `nama_obat`, `stok_obat`, `jenis_obat`, `harga_obat`) VALUES
('B0001', 'Avigan', '10', 'Tablet', 225000),
('B0002', 'Antangin', '79', 'Tablet', 40000),
('B0003', 'Panadol', '89', 'Tablet', 12000),
('B0004', 'Insto', '14', 'Tablet', 16000),
('B0005', 'Antibiotik', '94', 'Tablet', 6000),
('B0006', 'Chlorhexidine', '9', 'Sirup', 30000),
('B0007', 'Neozep', '79', 'Tablet', 2500),
('B0008', 'Ibuprofen', '80', 'Tablet', 4500),
('B0009', 'Bisolvon', '49', 'Tablet', 49000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `kode_pasien` char(5) NOT NULL,
  `nama_pasien` varchar(225) NOT NULL,
  `tgl_pendaftaran` date NOT NULL DEFAULT current_timestamp(),
  `jenis_kelamin` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_pasien` text NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`kode_pasien`, `nama_pasien`, `tgl_pendaftaran`, `jenis_kelamin`, `tgl_lahir`, `alamat_pasien`, `no_telp`) VALUES
('P0001', 'Billie Eilish', '2021-12-02', 'Wanita', '2001-12-18', 'Nganjuk', '081210002000'),
('P0002', 'Adit', '2021-12-02', 'Pria', '1991-07-16', 'Semarang', '085291018920'),
('P0003', 'Mawar', '2021-12-02', 'Wanita', '2004-03-01', 'Yogyakarta', '081928192819'),
('P0004', 'Daimler', '2021-12-03', 'Pria', '1986-02-13', 'Surabaya', '082718291845'),
('P0005', 'Budi', '2021-12-03', 'Pria', '1984-06-03', 'Semarang', '081275829561'),
('P0006', 'Kusuma Fatimah', '2021-12-03', 'Wanita', '1996-06-08', 'Semarang', '081782739291'),
('P0007', 'Eka Harun', '2021-12-03', 'Pria', '1988-01-10', 'Surakarta', '08328718387'),
('P0008', 'Ridwan Krisna', '2021-12-03', 'Pria', '2004-08-12', 'Semarang', '085286718080'),
('P0009', 'Sari Aminah', '2021-12-03', 'Wanita', '1993-09-21', 'Semarang', '081728472846'),
('P0010', 'Eka Asih', '2021-12-03', 'Wanita', '1999-12-31', 'Semarang', '089285729581'),
('P0011', 'Ahmad Yusuf', '2021-12-10', 'Pria', '1986-12-10', 'Malang', '089764223560');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekammedis`
--

CREATE TABLE `tbl_rekammedis` (
  `kode_rekam_medis` char(14) NOT NULL,
  `tgl_rekam_medis` date NOT NULL,
  `kode_pasien` char(5) NOT NULL,
  `kode_jadwal` char(4) NOT NULL,
  `diagnosa` varchar(255) NOT NULL,
  `resep_obat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rekammedis`
--

INSERT INTO `tbl_rekammedis` (`kode_rekam_medis`, `tgl_rekam_medis`, `kode_pasien`, `kode_jadwal`, `diagnosa`, `resep_obat`) VALUES
('RM202112020001', '2021-12-03', 'P0004', 'J001', 'Demam', 'Paracetamol'),
('RM202112030002', '2021-12-03', 'P0001', 'J001', 'Flu', 'Neozep'),
('RM202112030003', '2021-12-03', 'P0002', 'J003', 'Radang Gusi', 'Chlorhexidine'),
('RM202112100004', '2021-12-10', 'P0011', 'J008', 'Iritasi Mata', 'Insto'),
('RM202112100005', '2021-12-10', 'P0009', 'J007', 'Batuk Berdahak', 'Bisolvon');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `kode_transaksi` char(14) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `kode_pasien` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`kode_transaksi`, `tgl_transaksi`, `kode_pasien`) VALUES
('TR202112030001', '2021-12-03', 'P0004'),
('TR202112030002', '2021-12-03', 'P0001'),
('TR202112030003', '2021-12-03', 'P0002'),
('TR202112100004', '2021-12-10', 'P0011'),
('TR202112100005', '2021-12-10', 'P0009');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detail_transaksi`
--
ALTER TABLE `tbl_detail_transaksi`
  ADD PRIMARY KEY (`kode_detail`),
  ADD KEY `kode_transaksi` (`kode_transaksi`,`kode_obat`),
  ADD KEY `kode_obat` (`kode_obat`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`kode_dokter`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`kode_jadwal`),
  ADD KEY `kode_dokter` (`kode_dokter`);

--
-- Indexes for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`kode_pasien`);

--
-- Indexes for table `tbl_rekammedis`
--
ALTER TABLE `tbl_rekammedis`
  ADD PRIMARY KEY (`kode_rekam_medis`),
  ADD KEY `kode_pasien` (`kode_pasien`,`kode_jadwal`),
  ADD KEY `kode_jadwal` (`kode_jadwal`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`kode_transaksi`),
  ADD KEY `kode_pasien` (`kode_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_transaksi`
--
ALTER TABLE `tbl_detail_transaksi`
  MODIFY `kode_detail` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_detail_transaksi`
--
ALTER TABLE `tbl_detail_transaksi`
  ADD CONSTRAINT `tbl_detail_transaksi_ibfk_1` FOREIGN KEY (`kode_obat`) REFERENCES `tbl_obat` (`kode_obat`),
  ADD CONSTRAINT `tbl_detail_transaksi_ibfk_2` FOREIGN KEY (`kode_transaksi`) REFERENCES `tbl_transaksi` (`kode_transaksi`);

--
-- Constraints for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD CONSTRAINT `tbl_jadwal_ibfk_1` FOREIGN KEY (`kode_dokter`) REFERENCES `tbl_dokter` (`kode_dokter`);

--
-- Constraints for table `tbl_rekammedis`
--
ALTER TABLE `tbl_rekammedis`
  ADD CONSTRAINT `tbl_rekammedis_ibfk_1` FOREIGN KEY (`kode_pasien`) REFERENCES `tbl_pasien` (`kode_pasien`),
  ADD CONSTRAINT `tbl_rekammedis_ibfk_2` FOREIGN KEY (`kode_jadwal`) REFERENCES `tbl_jadwal` (`kode_jadwal`);

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`kode_pasien`) REFERENCES `tbl_pasien` (`kode_pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
