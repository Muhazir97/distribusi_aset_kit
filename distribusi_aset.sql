-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Sep 2019 pada 05.01
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `distribusi_aset`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_komputer`
--

CREATE TABLE `data_komputer` (
  `id` int(20) NOT NULL,
  `jenis_aset` varchar(30) NOT NULL,
  `serial_number` varchar(20) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_komputer`
--

INSERT INTO `data_komputer` (`id`, `jenis_aset`, `serial_number`, `merk`, `type`) VALUES
(98, 'KOMPUTER', '111', 'acar', '890e'),
(99, 'LAPTOP', '222', 'usus', '345f'),
(100, 'INFOCUS', '333', 'acar', 'f32'),
(102, 'KOMPUTER', '444', 'acar', '34t'),
(103, 'PRINTER', '555', 'HP', 'kr45'),
(105, 'INFOCUS', '666', 'acar', '34G'),
(106, 'KOMPUTER', '777', 'acar', '546G'),
(107, 'KOMPUTER', '888', 'acar', '546G'),
(109, 'LAPTOP', '999', 'HP', 'G30'),
(110, 'LAPTOP', '1111', 'HP', 'G30'),
(111, 'INFOCUS', '1010', 'acar', 'e234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_login`
--

CREATE TABLE `data_login` (
  `id` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_login`
--

INSERT INTO `data_login` (`id`, `nama`, `password`) VALUES
(1, 'azir', '123'),
(2, 'admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_peminjam`
--

CREATE TABLE `data_peminjam` (
  `id` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `jenis_aset` varchar(50) NOT NULL,
  `serial_number` varchar(50) NOT NULL,
  `kembali` date NOT NULL,
  `status` int(11) NOT NULL,
  `l` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_peminjam`
--

INSERT INTO `data_peminjam` (`id`, `nama`, `nik`, `divisi`, `tgl_peminjaman`, `tgl_pengembalian`, `lokasi`, `jenis_aset`, `serial_number`, `kembali`, `status`, `l`) VALUES
(180, 'MUHAZIR', '1234', 'BE & IT/IS', '2019-09-15', '2019-09-21', 'HO', 'KOMPUTER', '111', '0000-00-00', 0, 0),
(182, 'Oky ble', '1234', 'Security', '2019-09-15', '2019-09-28', 'MES', 'LAPTOP', '222', '0000-00-00', 0, 0),
(186, 'MUHAZIR', '24242', 'CRM', '2019-09-15', '2019-09-22', 'MES', 'INFOCUS', '333', '2019-09-16', 1, 0),
(189, 'oky', '66676', 'perhutani', '2019-09-17', '2019-09-19', 'MES', 'INFOCUS', '1010', '0000-00-00', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_komputer`
--
ALTER TABLE `data_komputer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_login`
--
ALTER TABLE `data_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_peminjam`
--
ALTER TABLE `data_peminjam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_komputer`
--
ALTER TABLE `data_komputer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `data_login`
--
ALTER TABLE `data_login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data_peminjam`
--
ALTER TABLE `data_peminjam`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
