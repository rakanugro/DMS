-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Mar 2021 pada 03.55
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `no_id` int(11) NOT NULL,
  `jenis_dokumen` varchar(100) NOT NULL,
  `ket` varchar(200) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`no_id`, `jenis_dokumen`, `ket`, `create_date`) VALUES
(1, 'COA', 'set', '2021-02-01 14:47:42'),
(2, 'Halal', 'tes2', '2021-02-02 09:35:31'),
(3, 'tes11', 'tes11', '2021-02-02 09:37:49'),
(4, 'seta', 'bbbaaa', '2021-02-02 16:35:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `no_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` varchar(50) NOT NULL,
  `ket` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`no_id`, `username`, `password`, `level_user`, `ket`) VALUES
(1, 'ayano@gmail.com', 'anako321', 'superadmin', 'back'),
(3, 'dodo@gmail.com', 'warnaku444', 'admin', 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_file`
--

CREATE TABLE `master_file` (
  `no_id` bigint(20) NOT NULL,
  `nama_produsen` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `jenis_dokumen` varchar(50) NOT NULL,
  `tgl_upload` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_file`
--

INSERT INTO `master_file` (`no_id`, `nama_produsen`, `nama_produk`, `jenis_dokumen`, `tgl_upload`, `tgl_kadaluarsa`, `file`, `create_date`) VALUES
(26, 'ukimo utama', 'semen', 'COA', '2021-02-17', '2021-02-26', 'revisi pt gala natura kreasi.pdf', '2021-02-17 14:05:26'),
(31, 'nutri jaya', 'semen', 'Halal', '2021-02-22', '2021-02-23', 'Marketing Communication.pdf', '2021-02-22 11:57:13'),
(36, 'nutri jaya', 'semen', 'Halal', '2021-03-01', '2021-03-01', 'TEST.docx', '2021-03-01 10:48:25'),
(37, 'sematra', 'wasabi', 'seta', '2021-03-03', '2021-04-03', 'PO Kaspersky Internernet Security.pdf', '2021-03-03 09:27:37'),
(38, 'nutri jaya', 'wasabi', 'COA', '2021-03-03', '2021-03-03', 'KOLAB-marcom-internal audit-it.pdf', '2021-03-03 09:57:44'),
(39, 'sematra', 'gandum', 'tes11', '2021-03-10', '2021-04-10', 'laporan-tes.pdf', '2021-03-10 10:01:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produsen`
--

CREATE TABLE `produsen` (
  `no_id` bigint(20) NOT NULL,
  `nama_produsen` varchar(100) NOT NULL,
  `alamat_produsen` varchar(200) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produsen`
--

INSERT INTO `produsen` (`no_id`, `nama_produsen`, `alamat_produsen`, `telepon`, `create_date`) VALUES
(1, 'nutri jaya', 'malaka 1 kembangan selatan', '923482348234', '2021-01-21 10:45:14'),
(2, 'alonda', 'ancol utara 1', '1111111', '2021-02-02 09:16:21'),
(3, 'ukimo utama', 'cawang timur', '777777', '2021-02-02 09:17:59'),
(5, 'ghfgh', 'dfgdfg', '453453', '2021-02-02 11:44:25'),
(9, 'khjj', 'kjk', '7777', '2021-02-02 11:45:04'),
(10, 'uuu', 'oooo', '2222', '2021-02-02 11:45:12'),
(11, 'hhh', 'kkk', '999', '2021-02-02 11:45:22'),
(12, 'murah jaya baru', 'ancol tengah selatan', '83424111', '2021-02-08 16:47:45'),
(13, 'sematra', 'karawaci utara', '333333', '2021-02-10 13:35:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`no_id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`no_id`);

--
-- Indeks untuk tabel `master_file`
--
ALTER TABLE `master_file`
  ADD PRIMARY KEY (`no_id`);

--
-- Indeks untuk tabel `produsen`
--
ALTER TABLE `produsen`
  ADD PRIMARY KEY (`no_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `master_file`
--
ALTER TABLE `master_file`
  MODIFY `no_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `produsen`
--
ALTER TABLE `produsen`
  MODIFY `no_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
