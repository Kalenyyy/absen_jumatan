-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 05 Okt 2023 pada 05.01
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jumatan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` enum('superadmin','admin','cicurug','wikrama','cibedug','cisarua','tajur','sukasari') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, 'superadmin', 'superadmin', 'superadmin'),
(3, 'admin', 'admin', 'admin'),
(9, 'guru', 'cicurug', 'cicurug'),
(10, 'guru', 'wikrama', 'wikrama'),
(13, 'guru', 'cisarua', 'cisarua'),
(14, 'guru', 'cibedug', 'cibedug'),
(15, 'guru', 'tajur', 'tajur'),
(16, 'guru', 'sukasari', 'sukasari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cibalok`
--

CREATE TABLE `tb_cibalok` (
  `id` int(11) NOT NULL,
  `siswa_id` varchar(50) NOT NULL,
  `rayon` varchar(50) NOT NULL,
  `kehadiran` enum('hadir','izin','sakit','alpha') NOT NULL,
  `alasan_tidak_hadir` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `type` enum('cisarua_1','cisarua_2','cisarua_3','cisarua_4') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_iqram`
--

CREATE TABLE `tb_iqram` (
  `id` int(11) NOT NULL,
  `siswa_id` varchar(300) NOT NULL,
  `rayon` varchar(50) NOT NULL,
  `kehadiran` enum('hadir','izin','sakit','alpha') NOT NULL,
  `alasan_tidak_hadir` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `type` enum('cibedug_1','cibedug_2','cibedug_3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_iqram`
--

INSERT INTO `tb_iqram` (`id`, `siswa_id`, `rayon`, `kehadiran`, `alasan_tidak_hadir`, `date`, `type`) VALUES
(2, 'khairul', 'Cibedug 1', 'izin', 'hehe', '2023-10-03', 'cibedug_1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kongsi`
--

CREATE TABLE `tb_kongsi` (
  `id` int(11) NOT NULL,
  `siswa_id` varchar(50) NOT NULL,
  `rayon` varchar(50) NOT NULL,
  `kehadiran` enum('hadir','izin','sakit','alpha') NOT NULL,
  `alasan_tidak_hadir` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `type` enum('sukasari_1','sukasari_2','sukasari_3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mujahidin`
--

CREATE TABLE `tb_mujahidin` (
  `id` int(11) NOT NULL,
  `siswa_id` varchar(300) NOT NULL,
  `rayon` varchar(300) NOT NULL,
  `kehadiran` enum('hadir','izin','sakit','alpha') NOT NULL,
  `alasan_tidak_hadir` varchar(300) NOT NULL,
  `date` date DEFAULT NULL,
  `type` enum('cicurug_1','cicurug_2','cicurug_3','wikrama_1','wikrama_2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_mujahidin`
--

INSERT INTO `tb_mujahidin` (`id`, `siswa_id`, `rayon`, `kehadiran`, `alasan_tidak_hadir`, `date`, `type`) VALUES
(3, 'bopeng', 'Cicurug 2', '', '', NULL, 'cicurug_2'),
(4, 'giblar', 'Cicurug 1', 'hadir', '', '2023-10-03', 'cicurug_1'),
(5, 'angger', 'Cicurug 3', '', '', NULL, 'cicurug_3'),
(6, 'gemoy', 'Wikrama 1', '', '', NULL, 'wikrama_1'),
(7, 'Hirzi', 'Wikrama 2', '', '', NULL, 'wikrama_2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_cibalok`
--
ALTER TABLE `tb_cibalok`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_iqram`
--
ALTER TABLE `tb_iqram`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kongsi`
--
ALTER TABLE `tb_kongsi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mujahidin`
--
ALTER TABLE `tb_mujahidin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_cibalok`
--
ALTER TABLE `tb_cibalok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_iqram`
--
ALTER TABLE `tb_iqram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kongsi`
--
ALTER TABLE `tb_kongsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_mujahidin`
--
ALTER TABLE `tb_mujahidin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
