-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2022 pada 08.00
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saleskit_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_market`
--

CREATE TABLE `data_market` (
  `id_negara` int(11) NOT NULL,
  `flag` varchar(2225) NOT NULL,
  `negara` mediumtext NOT NULL,
  `hs_1` int(11) NOT NULL,
  `komoditi_1` mediumtext NOT NULL,
  `jumlah_1` float NOT NULL,
  `hs_2` int(11) NOT NULL,
  `komoditi_2` mediumtext NOT NULL,
  `jumlah_2` float NOT NULL,
  `hs_3` int(11) NOT NULL,
  `komoditi_3` mediumtext NOT NULL,
  `jumlah_3` float NOT NULL,
  `hs_4` int(11) NOT NULL,
  `komoditi_4` mediumtext NOT NULL,
  `jumlah_4` float NOT NULL,
  `hs_5` int(11) NOT NULL,
  `komoditi_5` mediumtext NOT NULL,
  `jumlah_5` float NOT NULL,
  `hs_6` int(11) NOT NULL,
  `komoditi_6` mediumtext NOT NULL,
  `jumlah_6` float NOT NULL,
  `hs_7` int(11) NOT NULL,
  `komoditi_7` mediumtext NOT NULL,
  `jumlah_7` float NOT NULL,
  `hs_8` int(11) NOT NULL,
  `komoditi_8` mediumtext NOT NULL,
  `jumlah_8` float NOT NULL,
  `hs_9` int(11) NOT NULL,
  `komoditi_9` mediumtext NOT NULL,
  `jumlah_9` float NOT NULL,
  `hs_10` int(11) NOT NULL,
  `komoditi_10` mediumtext NOT NULL,
  `jumlah_10` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_market`
--

INSERT INTO `data_market` (`id_negara`, `flag`, `negara`, `hs_1`, `komoditi_1`, `jumlah_1`, `hs_2`, `komoditi_2`, `jumlah_2`, `hs_3`, `komoditi_3`, `jumlah_3`, `hs_4`, `komoditi_4`, `jumlah_4`, `hs_5`, `komoditi_5`, `jumlah_5`, `hs_6`, `komoditi_6`, `jumlah_6`, `hs_7`, `komoditi_7`, `jumlah_7`, `hs_8`, `komoditi_8`, `jumlah_8`, `hs_9`, `komoditi_9`, `jumlah_9`, `hs_10`, `komoditi_10`, `jumlah_10`) VALUES
(1, 'asset/flag/INA.jpeg', 'Indonesia', 1234, 'Kopi', 129000, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0),
(2, 'asset/flag/MAS.jpeg', 'Malaysia', 1234, 'Ganja', 899, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0),
(3, 'asset/flag/JPN.jpeg', 'Japan', 111, 'Teh', 998, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0),
(4, 'asset/flag/USA.jpeg', 'United States', 1234, 'Kopi', 332244, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_umkm`
--

CREATE TABLE `data_umkm` (
  `id` int(11) NOT NULL,
  `nama_umkm` mediumtext NOT NULL,
  `komoditas_unggulan` mediumtext NOT NULL,
  `kapasitas_produksi` float NOT NULL,
  `satuan_produksi` mediumtext NOT NULL,
  `material` mediumtext NOT NULL,
  `alamat` mediumtext NOT NULL,
  `detail_permasalahan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_market`
--
ALTER TABLE `data_market`
  ADD PRIMARY KEY (`id_negara`);

--
-- Indeks untuk tabel `data_umkm`
--
ALTER TABLE `data_umkm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_market`
--
ALTER TABLE `data_market`
  MODIFY `id_negara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_umkm`
--
ALTER TABLE `data_umkm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
