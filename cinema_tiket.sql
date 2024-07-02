-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2024 pada 13.28
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema_tiket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_film`
--

CREATE TABLE `daftar_film` (
  `id` int(11) NOT NULL,
  `nama_film` varchar(255) NOT NULL,
  `tanggal_release` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `harga` int(8) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `genre` int(11) NOT NULL,
  `jumlah_penonton` int(10) NOT NULL,
  `is_tayang` int(1) NOT NULL,
  `is_populer` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftar_film`
--

INSERT INTO `daftar_film` (`id`, `nama_film`, `tanggal_release`, `jam_mulai`, `jam_selesai`, `harga`, `gambar`, `genre`, `jumlah_penonton`, `is_tayang`, `is_populer`) VALUES
(1, 'Finding Nemo', '2024-06-26', '04:14:25', '04:15:25', 100000, 'poster1.png', 1, 10000, 1, 1),
(2, 'Toy Story 3', '2024-06-25', '17:51:16', '18:51:16', 40000, 'poster2.png', 2, 20, 0, 0),
(3, 'The Boboiboy The Movie', '2024-08-13', '10:00:00', '11:00:00', 50000, 'poster3.png', 3, 0, 1, 0),
(4, 'The Incredibles', '2024-09-25', '13:27:18', '14:27:18', 45000, 'poster4.png', 4, 20, 1, 1),
(5, 'Cars', '2024-07-11', '15:24:05', '16:24:05', 50000, 'poster5.png', 5, 100, 0, 0),
(6, 'Terix Jabrix 2', '2024-08-07', '17:51:16', '18:51:16', 50000, 'poster6.png', 6, 20, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `genres`
--

INSERT INTO `genres` (`id`, `kategori`) VALUES
(1, 'komedi'),
(2, 'aksi'),
(3, 'romantis'),
(4, 'keluarga'),
(5, 'kartun'),
(6, 'horor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumlah_kursi`
--

CREATE TABLE `jumlah_kursi` (
  `id_kursi` int(11) NOT NULL,
  `total_kursi` int(255) NOT NULL,
  `kursi_kosong` int(255) NOT NULL,
  `kursi_terisi` int(255) NOT NULL,
  `id_ruang_bioskop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jumlah_kursi`
--

INSERT INTO `jumlah_kursi` (`id_kursi`, `total_kursi`, `kursi_kosong`, `kursi_terisi`, `id_ruang_bioskop`) VALUES
(1, 50, 0, 0, 1),
(2, 50, 0, 0, 2),
(3, 50, 0, 0, 3),
(4, 45, 0, 0, 4),
(5, 30, 0, 0, 5),
(6, 60, 0, 0, 6),
(7, 65, 0, 0, 7),
(8, 55, 0, 0, 8),
(9, 60, 0, 0, 9),
(10, 55, 0, 0, 10),
(11, 70, 0, 0, 11),
(12, 50, 0, 0, 12),
(13, 40, 0, 0, 13),
(14, 45, 0, 0, 14),
(15, 55, 0, 0, 15),
(16, 50, 0, 0, 16),
(17, 40, 0, 0, 17),
(18, 45, 0, 0, 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_bioskop`
--

CREATE TABLE `nama_bioskop` (
  `id_bioskop` int(11) NOT NULL,
  `nama_bioskop` varchar(255) NOT NULL,
  `gambar_bioskop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nama_bioskop`
--

INSERT INTO `nama_bioskop` (`id_bioskop`, `nama_bioskop`, `gambar_bioskop`) VALUES
(1, 'Cinema XXI', 'cinemaxxi.png'),
(2, 'Cinépolis', 'cinapolis.png'),
(3, 'CGV Cinemas', 'cgvcinemas.png'),
(4, 'Platinum Cineplex', 'cineplex.png'),
(5, 'Lotte Cinema', 'lottecinema.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `no_telp_pemesan` int(15) NOT NULL,
  `nama_film` varchar(255) NOT NULL,
  `nama_bioskop` varchar(255) NOT NULL,
  `ruang_bioskop` varchar(255) NOT NULL,
  `lokasi_bioskop` varchar(255) NOT NULL,
  `nomor_kursi` int(11) NOT NULL,
  `harga_tiket` int(64) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `is_lunas` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(1) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang_bioskop`
--

CREATE TABLE `ruang_bioskop` (
  `id_ruang_bioskop` int(11) NOT NULL,
  `nama_ruang` varchar(255) NOT NULL,
  `id_kursi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ruang_bioskop`
--

INSERT INTO `ruang_bioskop` (`id_ruang_bioskop`, `nama_ruang`, `id_kursi`) VALUES
(1, 'Cinema 1', 1),
(2, 'Cinema 2', 2),
(3, 'Cinema 1', 3),
(4, 'Cinema 2', 4),
(5, 'Cinema 3', 5),
(6, 'Cinema 1', 6),
(7, 'Cinema 2', 7),
(8, 'Cinema 1', 8),
(9, 'Cinema 2', 9),
(10, 'Cinema 1', 10),
(11, 'Cinema 1', 11),
(12, 'Cinema 2', 12),
(13, 'Cinema 1', 13),
(14, 'Cinema 1', 14),
(15, 'Cinema 1', 15),
(16, 'Cinema 1', 16),
(17, 'Cinema 1', 17),
(18, 'Cinema 2', 18);

-- --------------------------------------------------------


--
-- Struktur dari tabel `lokasi_bioskop`
--

CREATE TABLE `lokasi_bioskop` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(255) NOT NULL,
  `id_bioskop` int(11) NOT NULL,
  `id_ruang_bioskop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lokasi_bioskop`
--

INSERT INTO `lokasi_bioskop` (`id_lokasi`, `nama_lokasi`, `id_bioskop`, `id_ruang_bioskop`) VALUES
(1, 'Cempaka Putih, Jakarta Pusat', 1, 1),
(2, 'Menteng, Jakarta Pusat', 1, 2),
(3, 'Setiabudi, Jakarta Selatan', 1, 3),
(4, 'Kelapa Gading, Jakarta Utara', 2, 4),
(5, 'Taman Sari, Jakarta Barat', 2, 5),
(6, 'Gambir, Jakarta Pusat', 3, 6),
(7, 'Tebet, Jakarta Selatan', 3, 7),
(8, 'Duren Sawit, Jakarta Timur', 3, 8),
(9, 'Cengkareng, Jakarta Barat', 4, 9),
(10, 'Setiabudi, Jakarta Selatan', 5, 10),
(11, 'Kramat Jati, Jakarta Timur', 5, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `nama`, `password`, `role_id`, `is_active`, `tanggal_input`) VALUES
(6, '', 'ronaldo@gmail.com', 'Web Progamming 2', '$2y$10$uO9kbCObLcYKSCxwJ8MF6umABh7IYVSuDIOPrGfTl/cpR8195kG.G', 2, 0, 2024),
(14, 'admin', 'admin@gmail.com', 'admin1', '$2y$10$4ndua2FAqb5B0BBD0vaSjOan2D4rGRj6njXhpIjvITAiI4Wxy/Na2', 2, 1, 2024);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_film`
--
ALTER TABLE `daftar_film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre` (`genre`);

--
-- Indeks untuk tabel `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jumlah_kursi`
--
ALTER TABLE `jumlah_kursi`
  ADD PRIMARY KEY (`id_kursi`);

--
-- Indeks untuk tabel `lokasi_bioskop`
--

ALTER TABLE `nama_bioskop`
  ADD PRIMARY KEY (`id_bioskop`);

--
-- Indeks untuk tabel `pesanan`
--

ALTER TABLE `ruang_bioskop`
  ADD PRIMARY KEY (`id_ruang_bioskop`),
  ADD KEY `id_kursi` (`id_kursi`);

--
-- Indeks untuk tabel `user`
--

ALTER TABLE `lokasi_bioskop`
  ADD PRIMARY KEY (`id_lokasi`),
  ADD KEY `id_bioskop` (`id_bioskop`),
  ADD KEY `id_ruang_bioskop` (`id_ruang_bioskop`);

--
-- Indeks untuk tabel `nama_bioskop`
--

ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ruang_bioskop`
--

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_film`
--
ALTER TABLE `daftar_film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jumlah_kursi`
--
ALTER TABLE `jumlah_kursi`
  MODIFY `id_kursi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;


--
-- AUTO_INCREMENT untuk tabel `nama_bioskop`
--
ALTER TABLE `nama_bioskop`
  MODIFY `id_bioskop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--

ALTER TABLE `ruang_bioskop`
  MODIFY `id_ruang_bioskop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `lokasi_bioskop`
--
ALTER TABLE `lokasi_bioskop`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--

ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ruang_bioskop`
--

ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar_film`
--
ALTER TABLE `daftar_film`
  ADD CONSTRAINT `daftar_film_ibfk_1` FOREIGN KEY (`genre`) REFERENCES `genres` (`id`);

--
-- Ketidakleluasaan untuk tabel `jumlah_kursi`
--

ALTER TABLE `ruang_bioskop`
  ADD CONSTRAINT `ruang_bioskop_ibfk_1` FOREIGN KEY (`id_kursi`) REFERENCES `jumlah_kursi` (`id_kursi`);

--
-- Ketidakleluasaan untuk tabel `user`
--

ALTER TABLE `lokasi_bioskop`
  ADD CONSTRAINT `fk_lokasi_bioskop_nama_bioskop` FOREIGN KEY (`id_bioskop`) REFERENCES `nama_bioskop` (`id_bioskop`),
  ADD CONSTRAINT `fk_lokasi_bioskop_ruang_bioskop` FOREIGN KEY (`id_ruang_bioskop`) REFERENCES `ruang_bioskop` (`id_ruang_bioskop`);

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Ketidakleluasaan untuk tabel `ruang_bioskop`
--

ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
