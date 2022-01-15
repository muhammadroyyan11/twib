-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2022 pada 08.35
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twib`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `twibbon`
--

CREATE TABLE `twibbon` (
  `id_twibbon` int(11) NOT NULL,
  `tittle_twibbon` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `date` date DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `twibbon`
--

INSERT INTO `twibbon` (`id_twibbon`, `tittle_twibbon`, `gambar`, `deskripsi`, `date`, `id_user`) VALUES
(124, 'Testing', '—Pngtree—download_modern_blue_orange_cool_6023424.png', 'Testing lagi', '2022-01-15', 1),
(125, 'Tes', 'ARMADABIRULANGIT2019.png', 'TES LAGI', '2022-01-15', 1),
(126, 'Tes', 'math19.png', 'Testing Royyan User', '2022-01-15', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` enum('gudang','admin') NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `role`, `password`, `created_at`, `is_active`) VALUES
(1, 'Adminisitrator', 'admin@admin.com', 'admin', '$2a$12$DV2Us3MVJMAiPyBXNbDlkuY9RnTJk9pfpiTKYNrtLu/GSX5ELAX9S', 1568689561, 1),
(4, 'Rulitaw', 'rulita.mirdasari@gmail.com', 'gudang', '$2y$10$sJy.jSgKdsjEOKVGKQFo/uiak9PBd9HhcNECGNw7hP8AzgOvmMP46', 1632835449, 1),
(5, 'Galang Paksi Permana', 'galangpaksipermana77@gmail.com', 'gudang', '$2y$10$vUBj5obiVtH2cKpnUSzrRuQhnNVVGlGJ61ZbF8nufMhh/SCaDzFP.', 1633311959, 1),
(6, 'Muhammad Royyan Zamzami', 'royyanmz87@gmail.com', 'gudang', '$2y$10$Z9M8i.vyS/NswAwA5i5uweBHLmvpuDb7ZaxGnnszJyjL/3boMxc.K', 1642231344, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `twibbon`
--
ALTER TABLE `twibbon`
  ADD PRIMARY KEY (`id_twibbon`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `twibbon`
--
ALTER TABLE `twibbon`
  MODIFY `id_twibbon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `twibbon`
--
ALTER TABLE `twibbon`
  ADD CONSTRAINT `twibbon_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
