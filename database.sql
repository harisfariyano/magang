-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Apr 2024 pada 18.22
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
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_quest` int(11) DEFAULT NULL,
  `tahun_ajaran` varchar(255) DEFAULT NULL COMMENT 'Menyesuaikan data yang diambil',
  `answer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `count`
--

CREATE TABLE `count` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'menyesuaikan tampilan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_quest`
--

CREATE TABLE `jenis_quest` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `quest`
--

CREATE TABLE `quest` (
  `id` int(11) NOT NULL,
  `id_jenis_quest` int(11) DEFAULT NULL,
  `id_sub_quest` int(11) DEFAULT NULL,
  `quesioner` varchar(255) DEFAULT NULL,
  `type_quest` enum('Type1','Type2','Type3') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_quest`
--

CREATE TABLE `sub_quest` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--
-- Kesalahan membaca struktur untuk tabel database.user: #1932 - Table &#039;database.user&#039; doesn&#039;t exist in engine
-- Kesalahan membaca data untuk tabel database.user: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `database`.`user`&#039; at line 1

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_answer_quest` (`id_quest`);

--
-- Indeks untuk tabel `count`
--
ALTER TABLE `count`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_quest`
--
ALTER TABLE `jenis_quest`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `quest`
--
ALTER TABLE `quest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_quest_jenis_quest` (`id_jenis_quest`),
  ADD KEY `fk_quest_sub_quest` (`id_sub_quest`);

--
-- Indeks untuk tabel `sub_quest`
--
ALTER TABLE `sub_quest`
  ADD PRIMARY KEY (`id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `fk_answer_quest` FOREIGN KEY (`id_quest`) REFERENCES `quest` (`id`);

--
-- Ketidakleluasaan untuk tabel `quest`
--
ALTER TABLE `quest`
  ADD CONSTRAINT `fk_quest_jenis_quest` FOREIGN KEY (`id_jenis_quest`) REFERENCES `jenis_quest` (`id`),
  ADD CONSTRAINT `fk_quest_sub_quest` FOREIGN KEY (`id_sub_quest`) REFERENCES `sub_quest` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
