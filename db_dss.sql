-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2019 pada 17.38
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dss`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bobot`
--

CREATE TABLE `tbl_bobot` (
  `nik` varchar(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bobot`
--

INSERT INTO `tbl_bobot` (`nik`, `c1`, `c2`, `c3`, `c4`, `tgl`) VALUES
('1111', 90, 75, 80, 75, '2017-01-10'),
('1112', 75, 75, 75, 78, '2019-01-15'),
('2222', 90, 55, 90, 75, '2019-12-10'),
('2223', 90, 90, 90, 90, '2018-12-31'),
('3333', 85, 55, 80, 75, '2019-12-13'),
('4444', 82, 70, 65, 85, '2019-12-13'),
('5555', 75, 75, 85, 80, '2019-12-13'),
('6666', 90, 88, 65, 98, '2018-01-12'),
('7777', 78, 87, 78, 98, '2019-12-17'),
('9999', 85, 78, 80, 90, '2019-12-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cat`
--

CREATE TABLE `tbl_cat` (
  `id_cat` varchar(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `bobotc` float NOT NULL,
  `jenis` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_cat`
--

INSERT INTO `tbl_cat` (`id_cat`, `nama`, `bobotc`, `jenis`) VALUES
('c1', 'pengetahuan/wawasan', 0.35, 'benefit'),
('c2', 'instalasi jaringan', 0.25, 'benefit'),
('c3', 'kepribadian', 0.25, 'benefit'),
('c4', 'agama', 0.15, 'benefit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `golongan` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`nik`, `nama`, `golongan`, `alamat`) VALUES
('1111', 'asura', 'A', 'padang'),
('1112', 'jina', 'A', 'painan'),
('2222', 'roni', 'A', 'solok selatan'),
('2223', 'doris', 'A', 'solok selatan'),
('3333', 'putri', 'B', 'solok selatan'),
('4444', 'dani', 'B', 'mncester'),
('5555', 'ratna', 'C', 'london'),
('6666', 'mira', 'D', 'jember'),
('7777', 'agus', 'C', 'denmark'),
('9999', 'denis', 'D', 'lubeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_normal`
--

CREATE TABLE `tbl_normal` (
  `nik` varchar(11) NOT NULL,
  `c1` double NOT NULL,
  `c2` double NOT NULL,
  `c3` double NOT NULL,
  `c4` double NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_normal`
--

INSERT INTO `tbl_normal` (`nik`, `c1`, `c2`, `c3`, `c4`, `tgl`) VALUES
('1111', 1, 0.83333333333333, 0.88888888888889, 0.76530612244898, '2017-01-10'),
('1112', 0.83333333333333, 0.83333333333333, 0.83333333333333, 0.79591836734694, '2019-01-15'),
('2222', 1, 0.61111111111111, 1, 0.76530612244898, '2019-12-10'),
('2223', 1, 1, 1, 0.91836734693878, '2018-12-31'),
('3333', 0.94444444444444, 0.61111111111111, 0.88888888888889, 0.76530612244898, '2019-12-13'),
('4444', 0.91111111111111, 0.77777777777778, 0.72222222222222, 0.86734693877551, '2019-12-13'),
('5555', 0.83333333333333, 0.83333333333333, 0.94444444444444, 0.81632653061224, '2019-12-13'),
('6666', 1, 0.97777777777778, 0.72222222222222, 1, '2018-01-12'),
('7777', 0.86666666666667, 0.96666666666667, 0.86666666666667, 1, '2019-12-17'),
('9999', 0.94444444444444, 0.86666666666667, 0.88888888888889, 0.91836734693878, '2019-12-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rank`
--

CREATE TABLE `tbl_rank` (
  `nik` varchar(11) NOT NULL,
  `nilai` double NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_rank`
--

INSERT INTO `tbl_rank` (`nik`, `nilai`, `tgl`) VALUES
('1111', 0.8953514739229, '2017-01-10'),
('1112', 0.82772108843537, '2019-01-15'),
('2222', 0.86757369614512, '2019-12-10'),
('2223', 0.98775510204082, '2018-12-31'),
('3333', 0.8203514739229, '2019-12-13'),
('4444', 0.82399092970522, '2019-12-13'),
('5555', 0.85856009070294, '2019-12-13'),
('6666', 0.925, '2018-01-12'),
('7777', 0.91166666666667, '2019-12-17'),
('9999', 0.90719954648526, '2019-12-18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `tbl_cat`
--
ALTER TABLE `tbl_cat`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indeks untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
