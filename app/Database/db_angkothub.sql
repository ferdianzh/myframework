-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2021 pada 12.41
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_angkothub`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `angkot`
--

CREATE TABLE `angkot` (
  `id` int(11) NOT NULL,
  `id_pangkalan` int(10) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `rute` varchar(100) NOT NULL,
  `rute_berangkat` linestring NOT NULL,
  `rute_kembali` linestring NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pangkalan`
--

CREATE TABLE `pangkalan` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tipe` int(1) NOT NULL,
  `kordinat` point NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pangkalan`
--

INSERT INTO `pangkalan` (`id`, `nama`, `tipe`, `kordinat`) VALUES
(101, 'Terminal Manukan', 2, 0x000000000101000000fb912232ac2a5c4018ec866d8b121dc0),
(102, 'Pangkalan Test', 1, 0x0000000001010000008b54185b082a5c4018ec866d8b121dc0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `angkot`
--
ALTER TABLE `angkot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `angkot_pangkalan_foreign` (`id_pangkalan`);

--
-- Indeks untuk tabel `pangkalan`
--
ALTER TABLE `pangkalan`
  ADD PRIMARY KEY (`id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `angkot`
--
ALTER TABLE `angkot`
  ADD CONSTRAINT `angkot_pangkalan_foreign` FOREIGN KEY (`id_pangkalan`) REFERENCES `pangkalan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
