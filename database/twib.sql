-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2022 pada 16.44
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
  `name_file` int(255) NOT NULL,
  `date` date DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `role` enum('gudang','admin') NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `foto` text NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `no_telp`, `role`, `password`, `created_at`, `foto`, `is_active`) VALUES
(1, 'Adminisitrator', 'admin', 'admin@admin.com', '025123456789', 'admin', '$2a$12$DV2Us3MVJMAiPyBXNbDlkuY9RnTJk9pfpiTKYNrtLu/GSX5ELAX9S', 1568689561, 'd5f22535b639d55be7d099a7315e1f7f.png', 1),
(2, 'Muhammad Royyan Zamzami', 'royyan', 'royyanmz87@gmail.com', '0856-4988-8272', 'gudang', '$2y$10$eZim3CSuUFJPUPXvaorGFeIDsm9dFDUP47iCwgYw2OsZROBs1XGqK', 1632469880, 'user.png', 1),
(4, 'Rulitaw', 'rulitaw', 'rulita.mirdasari@gmail.com', '089693986515', 'gudang', '$2y$10$sJy.jSgKdsjEOKVGKQFo/uiak9PBd9HhcNECGNw7hP8AzgOvmMP46', 1632835449, 'user.png', 1),
(5, 'Galang Paksi Permana', 'galangpp7', 'galangpaksipermana77@gmail.com', '083192919886', 'gudang', '$2y$10$vUBj5obiVtH2cKpnUSzrRuQhnNVVGlGJ61ZbF8nufMhh/SCaDzFP.', 1633311959, 'user.png', 1);

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
  MODIFY `id_twibbon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
