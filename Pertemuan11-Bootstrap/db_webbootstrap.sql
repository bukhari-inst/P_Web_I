-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2021 pada 14.51
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webbootstrap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_tamu`
--

CREATE TABLE `t_tamu` (
  `no` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` int(15) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `Keperluan` text NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_tamu`
--

INSERT INTO `t_tamu` (`no`, `email`, `nama`, `nim`, `gender`, `Keperluan`, `tgl`) VALUES
(3, 'bukhori414647@gmail.com', 'buahsuhhggdhakhdkas', 1855201033, 'L', 'test', '2021-01-02'),
(4, 'muslimxssn41@gmail.com', 'sd', 1855201033, 'L', 'test', '2021-01-02'),
(5, 'bukhori414647@gmail.com', 'buahsuhhggdhakhdkas', 1855201033, 'L', 'test5', '2021-01-02'),
(6, 'bukhori414647@gmail.com', 'buahsuhhggdhakhdkas', 1855201033, 'L', 'test6', '2021-01-02'),
(7, 'bukhori414647@gmail.com', 'buahsuhhggdhakhdkas', 1855201033, 'L', 'test6', '2021-01-02'),
(8, 'muslimxssn41@gmail.com', 'test', 1855201033, 'L', 'test tabel', '2021-01-02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_tamu`
--
ALTER TABLE `t_tamu`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_tamu`
--
ALTER TABLE `t_tamu`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
