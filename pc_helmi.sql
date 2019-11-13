-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Sep 2019 pada 02.44
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc_helmi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `id_user`, `nama`, `username`, `password`) VALUES
(1, 1, 'admin baru', 'admin', '$2y$10$PX4HimBPg58kZ9k5u2iVmOxP4Q2WiKpF7qQXZ3jONtJ/jjMIutR5O');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_prk`
--

CREATE TABLE `detail_prk` (
  `id_detailprk` int(11) NOT NULL,
  `id_rnd` int(11) NOT NULL,
  `id_prk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_prk`
--

INSERT INTO `detail_prk` (`id_detailprk`, `id_rnd`, `id_prk`) VALUES
(4, 5, 1),
(5, 6, 3),
(6, 7, 1),
(7, 7, 2),
(8, 7, 4),
(9, 8, 2),
(10, 8, 4),
(11, 8, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'jasa'),
(2, 'material');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontrak`
--

CREATE TABLE `kontrak` (
  `id_kontrak` int(11) NOT NULL,
  `id_rnd` int(11) NOT NULL,
  `no_smartone` varchar(100) NOT NULL,
  `no_spk` varchar(100) NOT NULL,
  `nama_vendor` varchar(255) NOT NULL,
  `tgl_akhir` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontrak`
--

INSERT INTO `kontrak` (`id_kontrak`, `id_rnd`, `no_smartone`, `no_spk`, `nama_vendor`, `tgl_akhir`, `keterangan`) VALUES
(2, 5, '565656', '66746738', 'vendor abc', '2019-08-30', 'alhamdulillah sudah beres'),
(3, 7, '774864381', '667467381', 'vendor abc1', '2019-08-30', 'alhamdulillah sudah beres1'),
(4, 6, '64637467', '66746738', 'vendor abc', '2019-08-08', 'alhamdulillah sudah beres');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_rnd` int(11) NOT NULL,
  `r_100` date NOT NULL,
  `r_95` date NOT NULL,
  `r_5` date NOT NULL,
  `n_100` bigint(20) NOT NULL,
  `n_95` bigint(20) NOT NULL,
  `n_5` bigint(20) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_rnd`, `r_100`, `r_95`, `r_5`, `n_100`, `n_95`, `n_5`, `status`) VALUES
(1, 5, '2019-09-28', '2019-09-28', '2019-09-28', 6666, 6666, 66666, 'hyuuu'),
(2, 6, '0000-00-00', '2019-09-12', '2019-09-19', 0, 65656, 5555, 'hyuuu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prk`
--

CREATE TABLE `prk` (
  `id_prk` int(11) NOT NULL,
  `nama_prk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prk`
--

INSERT INTO `prk` (`id_prk`, `nama_prk`) VALUES
(1, 'KEGIATAN YANG SUDAH TERKONTRAK/LANJUTAN'),
(2, 'SAMBUNGAN LISTRIK TM 630A'),
(3, 'SLTR 3 FASA 6,6 - 33 KVA (LPB)'),
(4, 'SLTR 3 FASA 41,5 KVA'),
(5, 'SLTR 3 FASA 53 KVA'),
(6, 'SLTR 3 FASA 66 KVA'),
(7, 'SLTR 3 FASA 82,5 KVA'),
(8, 'SLTR 3 FASA 105 KVA'),
(9, 'SLTR 3 FASA 131 KVA'),
(10, 'SLTR 3 FASA 147 KVA'),
(11, 'SLTR 3 FASA 164 KVA'),
(12, 'SLTR 3 FASA 197 KVA'),
(13, 'SLTR UMUM (PREPAID)'),
(14, 'MCB 6 A (TAMBAH DAYA)'),
(15, 'MCB 10 A (TAMBAH DAYA)'),
(16, 'MCB 16 A (TAMBAH DAYA)'),
(17, 'MCB 20 A (TAMBAH DAYA)'),
(18, 'MCB 25 A (TAMBAH DAYA)'),
(19, 'MCB 35 A (TAMBAH DAYA)'),
(20, 'MCB 50 A (TAMBAH DAYA)'),
(21, 'KWH METER 1 PHASA MIGRASI KE PREPAID'),
(22, 'PENARIKAN SUTM AAACS 150MM2'),
(23, 'PENANAMAN SKTM 3X300MM2'),
(24, 'PEMBANGUNAN GARDU CANTOL 50 KVA'),
(25, 'PEMBANGUNAN GARDU CANTOL 100 KVA'),
(26, 'PEMBANGUNAN GARDU PORTAL 160KVA'),
(27, 'PEMBANGUNAN GARDU PORTAL 250KVA'),
(28, 'PEMBANGUNAN GARDU TEMBOK 400KVA'),
(29, 'PENGADAAN STASIUN PENYEDIA LISTRIK UMUM ( SPLU)'),
(30, 'PENARIKAN SUTR TIC 3X70+50MM2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rnd_pengadaan`
--

CREATE TABLE `rnd_pengadaan` (
  `id_rnd` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `no_skki` varchar(100) NOT NULL,
  `no_nota` varchar(100) NOT NULL,
  `uraian` text NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `nilai_rab` varchar(30) NOT NULL,
  `status_kontrak` enum('belum','sudah') NOT NULL,
  `status_pembayaran` enum('belum','sudah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rnd_pengadaan`
--

INSERT INTO `rnd_pengadaan` (`id_rnd`, `id_admin`, `id_jenis`, `no_skki`, `no_nota`, `uraian`, `tgl_dibuat`, `nilai_rab`, `status_kontrak`, `status_pembayaran`) VALUES
(5, 1, 1, '001/SKKI/SAR/TSK/2019', 'XXX/KEU.01.02/MB JAR/2019', 'JASA PEMASANGAN PENTANAHAN JTR AREA TASIKMALAYA 5%', '2019-09-02', '2955664', 'sudah', 'sudah'),
(6, 1, 2, '002/SKKI/SAR/TSK/2019', 'XXX/KEU.01.03/MB JAR/2019', 'JASA PEMASANGAN PENTANAHAN JTR AREA TASIKMALAYA 5%', '2019-08-30', '1200000', 'sudah', 'sudah'),
(7, 1, 1, '003/SKKI/SAR/TSK/2019', 'XXX/KEU.01.05/MB JAR/2019', 'JASA PEMASANGAN PENTANAHAN JTR AREA TASIKMALAYA 5%', '2019-08-30', '2400000', 'sudah', 'belum'),
(8, 1, 2, '003/SKKI/SAR/TSK/20191', 'XXX/KEU.01.02/MB JAR/20191', 'JASA PEMASANGAN PENTANAHAN JTR AREA TASIKMALAYA 5%1', '2019-09-02', '44444441', 'belum', 'belum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saldo`
--

CREATE TABLE `saldo` (
  `id_saldo` tinyint(4) NOT NULL,
  `saldo` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saldo`
--

INSERT INTO `saldo` (`id_saldo`, `saldo`) VALUES
(1, 21776204981);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id_setting` tinyint(1) NOT NULL,
  `nama_aplikasi` varchar(255) NOT NULL,
  `nama_perumahan` varchar(255) NOT NULL,
  `logo` text NOT NULL,
  `judul_footer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id_setting`, `nama_aplikasi`, `nama_perumahan`, `logo`, `judul_footer`) VALUES
(1, 'SISTEM INFORMASI PLN', 'PLN', 'pln.jpg', 'SISTEM INFORMASI PLN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`) VALUES
(1, 'jaringan'),
(2, 'kontruksi'),
(3, 'tel');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `detail_prk`
--
ALTER TABLE `detail_prk`
  ADD PRIMARY KEY (`id_detailprk`),
  ADD KEY `id_rdn` (`id_rnd`),
  ADD KEY `id_prk` (`id_prk`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `kontrak`
--
ALTER TABLE `kontrak`
  ADD PRIMARY KEY (`id_kontrak`),
  ADD KEY `id_rdn` (`id_rnd`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_rnd` (`id_rnd`);

--
-- Indeks untuk tabel `prk`
--
ALTER TABLE `prk`
  ADD PRIMARY KEY (`id_prk`);

--
-- Indeks untuk tabel `rnd_pengadaan`
--
ALTER TABLE `rnd_pengadaan`
  ADD PRIMARY KEY (`id_rnd`),
  ADD KEY `id_user` (`id_admin`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id_saldo`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `detail_prk`
--
ALTER TABLE `detail_prk`
  MODIFY `id_detailprk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kontrak`
--
ALTER TABLE `kontrak`
  MODIFY `id_kontrak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `prk`
--
ALTER TABLE `prk`
  MODIFY `id_prk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `rnd_pengadaan`
--
ALTER TABLE `rnd_pengadaan`
  MODIFY `id_rnd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id_saldo` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `user admin` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_prk`
--
ALTER TABLE `detail_prk`
  ADD CONSTRAINT `detail prk` FOREIGN KEY (`id_prk`) REFERENCES `prk` (`id_prk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail rdn` FOREIGN KEY (`id_rnd`) REFERENCES `rnd_pengadaan` (`id_rnd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kontrak`
--
ALTER TABLE `kontrak`
  ADD CONSTRAINT `kontrak rdn` FOREIGN KEY (`id_rnd`) REFERENCES `rnd_pengadaan` (`id_rnd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `rnd pembayaran` FOREIGN KEY (`id_rnd`) REFERENCES `rnd_pengadaan` (`id_rnd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rnd_pengadaan`
--
ALTER TABLE `rnd_pengadaan`
  ADD CONSTRAINT `admin rnd` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jenis rdn` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
