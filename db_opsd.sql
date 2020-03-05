-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Mar 2020 pada 09.41
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_opsd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_about_us`
--

CREATE TABLE `tbl_about_us` (
  `id` int(11) NOT NULL,
  `about_us` text NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_about_us`
--

INSERT INTO `tbl_about_us` (`id`, `about_us`, `active`) VALUES
(1, 'Infrastructure Operation / Maintenance', 1),
(2, 'Application Operation / Maintenance', 1),
(3, 'End User Support', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_aplikasi_pendukung`
--

CREATE TABLE `tbl_aplikasi_pendukung` (
  `id` int(11) NOT NULL,
  `nama_apps` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` varchar(50) NOT NULL,
  `show_apps` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_aplikasi_pendukung`
--

INSERT INTO `tbl_aplikasi_pendukung` (`id`, `nama_apps`, `deskripsi`, `link`, `show_apps`) VALUES
(1, 'Centralize Monitoring  VMS', 'Tools untuk monitoring Usage server untuk aplikasi New VMS.', 'https://portalprod.idpcs.id/apps/f?p=242:LOGIN_DES', 1),
(2, 'INAMON', 'Aplikasi ini digunakan untuk monitoring INAPORTNET', 'http://10.8.1.242:8080/apex/f?p=215:LOGIN_DESKTOP:', 1),
(3, 'New VMS Monitoring', 'Aplikasi ini digunakan untuk monitoring proses aplikasi NEW VMS', 'https://dev.idpcs.id/dev/f?p=213:LOGIN_DESKTOP:360', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_best_employee`
--

CREATE TABLE `tbl_best_employee` (
  `id` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `nik` varchar(8) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_best_employee`
--

INSERT INTO `tbl_best_employee` (`id`, `id_bulan`, `tahun`, `id_divisi`, `nik`, `pesan`) VALUES
(1, 3, 2020, 1, '132', 'Innovative Employe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_divisi`
--

CREATE TABLE `tbl_divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_divisi`
--

INSERT INTO `tbl_divisi` (`id_divisi`, `nama_divisi`) VALUES
(1, 'Service & Delivery'),
(2, 'O&M Network and Device'),
(3, 'O&M Application Platform and Database'),
(4, 'Customer Care'),
(5, 'GM Operation & Service Delivery');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'General Manager'),
(2, 'Manager'),
(3, 'Karyawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `nik` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`nik`, `nama`, `id_jabatan`, `id_divisi`, `foto`, `status`) VALUES
('123', 'Bobby Karsono', 1, 5, '', 1),
('124', 'Ave Prayitno', 2, 1, '', 1),
('125', 'Kuswanto', 2, 2, '', 1),
('126', 'Wicaksono Hari Prayoga', 2, 3, '', 1),
('127', 'Taufik MTX', 2, 4, '', 1),
('129', 'FA', 3, 1, '', 0),
('130', 'FB', 3, 2, '', 0),
('131', 'FC', 3, 3, '', 0),
('132', 'FD', 3, 4, '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_motivasi`
--

CREATE TABLE `tbl_motivasi` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `show_motivasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_role`
--

INSERT INTO `tbl_role` (`id_role`, `nama_role`) VALUES
(1, 'Super Admin'),
(2, 'Manager');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nik` varchar(8) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `nik`, `id_role`) VALUES
('admin', 'c93ccd78b2076528346216b3b2f701e6', '132', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_aplikasi_pendukung`
--
ALTER TABLE `tbl_aplikasi_pendukung`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_best_employee`
--
ALTER TABLE `tbl_best_employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bulan` (`id_bulan`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indeks untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indeks untuk tabel `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_motivasi`
--
ALTER TABLE `tbl_motivasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `nik` (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_aplikasi_pendukung`
--
ALTER TABLE `tbl_aplikasi_pendukung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_best_employee`
--
ALTER TABLE `tbl_best_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_motivasi`
--
ALTER TABLE `tbl_motivasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_best_employee`
--
ALTER TABLE `tbl_best_employee`
  ADD CONSTRAINT `tbl_best_employee_ibfk_2` FOREIGN KEY (`id_divisi`) REFERENCES `tbl_divisi` (`id_divisi`),
  ADD CONSTRAINT `tbl_best_employee_ibfk_3` FOREIGN KEY (`nik`) REFERENCES `tbl_karyawan` (`nik`);

--
-- Ketidakleluasaan untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD CONSTRAINT `tbl_karyawan_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `tbl_divisi` (`id_divisi`),
  ADD CONSTRAINT `tbl_karyawan_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `tbl_jabatan` (`id_jabatan`);

--
-- Ketidakleluasaan untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tbl_role` (`id_role`),
  ADD CONSTRAINT `tbl_user_ibfk_2` FOREIGN KEY (`nik`) REFERENCES `tbl_karyawan` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
