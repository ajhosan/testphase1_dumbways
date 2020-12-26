-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2020 pada 13.58
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technical_test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_tb`
--

CREATE TABLE `post_tb` (
  `id_post` int(11) NOT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post_tb`
--

INSERT INTO `post_tb` (`id_post`, `content`, `image`, `users_id`) VALUES
(1, 'Ini Content Pertama', 'contentimage1.jpg', 3),
(2, 'Ini Content Kedua Dari Users Ke 2', 'contentimage2.jpg', 2),
(3, 'Ini Content Kedua Dari Users Ke 1', 'contentimage3.jpg', 1),
(10, 'Tester 23', '4.-Tips-Traveling-ke-Jepang-dengan-Minim-Budget.jpg', 1),
(11, 'Ini Content Kedua Dari Useqwdqwdrs Ke 13213', '871786501_8ff7587b-6ab5-44a6-9a87-ca57cc1e60c8_1560_1560.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_tb`
--

CREATE TABLE `users_tb` (
  `id_users` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users_tb`
--

INSERT INTO `users_tb` (`id_users`, `name`, `photo`, `email`, `password`) VALUES
(1, 'Dumways Update Name Success 2', 'image1.jpg', 'tester1@tester.com', '72a3dcef165d9122a45decf13ae20631'),
(2, 'Dumbways 2', 'image2.jpg', 'tester2@tester.com', '2e9fcf8e3df4d415c96bcf288d5ca4ba'),
(3, 'Stevan', 'image3.jpg', 'stevan3@tester3.com', '7effbf343c0f8ee164da2fe3ae01e8cb');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `post_tb`
--
ALTER TABLE `post_tb`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `users_id` (`users_id`);

--
-- Indeks untuk tabel `users_tb`
--
ALTER TABLE `users_tb`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `post_tb`
--
ALTER TABLE `post_tb`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users_tb`
--
ALTER TABLE `users_tb`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `post_tb`
--
ALTER TABLE `post_tb`
  ADD CONSTRAINT `users_id` FOREIGN KEY (`users_id`) REFERENCES `users_tb` (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
