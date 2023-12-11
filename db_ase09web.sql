-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2023 pada 08.32
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ase09web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE `content` (
  `id_content` int(11) NOT NULL,
  `content_name` varchar(121) NOT NULL,
  `title` varchar(121) NOT NULL,
  `path_img` varchar(121) NOT NULL,
  `status` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `content`
--

INSERT INTO `content` (`id_content`, `content_name`, `title`, `path_img`, `status`, `created_at`) VALUES
(1, 'title_atas', 'Website ase09', '', 1, '2023-09-02 03:19:06'),
(2, 'Keahlian_1', 'Networking', 'icon-sli-equalizer', 1, '2023-09-02 03:48:48'),
(3, 'Keahlian_2', 'Graphic Design', 'icon-sli-layers', 1, '2023-09-02 03:48:48'),
(4, 'Keahlian_3', 'Data Analyst', 'icon-sli-diamond', 1, '2023-09-02 03:48:54'),
(5, 'Keahlian_4', 'Programming', 'icon-sli-share', 1, '2023-09-02 03:48:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `listcuti`
--

CREATE TABLE `listcuti` (
  `id` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tanggal_mulai_cuti` date NOT NULL,
  `lama` int(3) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `status` int(3) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `listcuti`
--

INSERT INTO `listcuti` (`id`, `id_karyawan`, `tanggal_mulai_cuti`, `lama`, `alasan`, `status`, `created_at`, `updated_at`) VALUES
(1, 101, '2023-12-09', 21, 'Cuti Besar', 1, '2023-11-18 04:53:00', '2023-12-11 07:18:52'),
(2, 101, '2023-12-09', 14, 'Cuti Haji/Umroh', 2, '2023-11-18 04:53:27', '2023-12-11 07:18:53'),
(3, 101, '2023-12-20', 10, 'Cuti Sakit', 0, '2023-12-09 04:32:21', '2023-12-11 07:18:17'),
(4, 101, '2023-12-22', 10, 'Cuti Melahirkan', 0, '2023-12-11 06:23:19', '2023-12-11 07:18:19'),
(5, 101, '2023-12-15', 1, 'Cuti Tahunan', 0, '2023-12-11 06:30:15', '2023-12-11 07:18:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `path_img` varchar(121) NOT NULL,
  `title` varchar(121) NOT NULL,
  `deskripsi` varchar(121) NOT NULL,
  `status` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `path_img`, `title`, `deskripsi`, `status`, `created_at`, `updated_at`) VALUES
(1, 'img/carousel-01.jpg', 'We are Web design Heroes', 'Con nonummy sem integer interdum volutpat dis eget eligendi aliquip dolorum magnam.', 1, '2023-09-02 02:05:12', NULL),
(2, 'img/carousel-02.jpg', 'Terinspirasi dari teknologi', 'Teknologi adalah bagian dari kehidupan sehari hari di zaman sekarang.', 0, '2023-09-02 02:05:12', '2023-09-02 02:46:57'),
(3, 'img/G63.Webp', 'Mercedes - Benz G63', 'Pegunungan adalah suatu objek yang bisa terlihat dari kejauhan dan amat indah. Pegunungan juga amat besar ', 1, '2023-09-02 02:56:50', '2023-09-02 03:44:49'),
(4, 'img/rolls.jpg', 'Rolls-royce boat tail', 'A HAND-BUILT MASTERPIECE\nEnvisioned extraordinary clients and realised by the master artisans of Coachbuild, this singula', 1, '2023-09-02 02:56:50', '2023-09-02 03:47:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `akses` int(3) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `akses`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '2023-11-11 03:16:40', '$2a$12$9ccKFVDLwRH.R0Z.1y2/lOj5xOmV1LN8YPJ1zowxsLjCHDiHQmiXS', NULL, 3, '2023-11-11 03:16:29', NULL),
(2, 'adminHR', 'adminHr@gmail.com', NULL, '$2a$12$vSg41s..MDKezw5OmaWBCulbVbuSHZENtCnijclqjrM9Dun.At1fu', NULL, 2, '2023-11-11 04:12:12', NULL),
(3, 'karyawan', 'karyawan@gmail.com', NULL, '$2a$12$C.F.xLH5jecYgWfmnQw7Eu6F1/GTFbBPtmtdAHANBFmgDUF.IoHKa', NULL, 1, '2023-11-11 04:12:12', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id_content`);

--
-- Indeks untuk tabel `listcuti`
--
ALTER TABLE `listcuti`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `content`
--
ALTER TABLE `content`
  MODIFY `id_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `listcuti`
--
ALTER TABLE `listcuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
