-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Agu 2020 pada 08.05
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbekspedisi_rm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`id_admin` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` enum('Admin','User') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'Admin'),
(2, 'user1', 'user1', 'User'),
(3, 'user2', 'user2', 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ekspedisi`
--

CREATE TABLE IF NOT EXISTS `tbl_ekspedisi` (
`id_ekspedisi` int(10) NOT NULL,
  `no_rm` varchar(50) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `jenis_layanan` varchar(50) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `kepentingan` text NOT NULL,
  `tujuan_ekspedisi` varchar(100) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ekspedisi`
--

INSERT INTO `tbl_ekspedisi` (`id_ekspedisi`, `no_rm`, `nama_pasien`, `jenis_layanan`, `nama_peminjam`, `kepentingan`, `tujuan_ekspedisi`, `nama_petugas`, `tgl_pinjam`, `tgl_kembali`) VALUES
(1, '028100', 'Nur Aini', 'Umum', 'Dina', '-', '4', '3', '2017-10-24', '2017-10-26'),
(2, '20044526', 'Dina Nur Faizah', 'SPM', 'Via', '-', '1', '2', '2020-02-03', '2020-02-05'),
(3, '20044464', 'Nariye', 'Umum', 'Ana', '-', '1', '3', '2020-01-30', '2020-02-01'),
(4, '20044494', 'Idawati Ningsih', 'Umum', 'Dani', '-', '2', '1', '2020-02-01', '2020-07-04'),
(5, '20044545', 'Misnati', 'Umum', 'Dina', '-', '2', '2', '2020-02-04', '2020-02-06'),
(6, '20044546', 'Hafid', 'Umum', 'Dini', '-', '4', '3', '2020-02-11', '2020-07-14'),
(7, '20044429', 'Hasan Basri', 'Umum', 'Via', '-', '2', '3', '2020-01-29', '2020-01-31'),
(8, '20044508', 'Suhatija', 'Umum', 'Ari', '-', '4', '3', '2020-02-02', '2020-07-05'),
(9, '20044538', 'Asman', 'Umum', 'Dini', '-', '2', '5', '2020-07-03', '2020-07-05'),
(10, '20044498', 'Robiatul Adawiyah', 'Umum', 'Dani', '-', '1', '4', '2020-02-01', '2020-02-03'),
(11, '20044533', 'Ahmad Hasibbudin', 'Umum', 'Putri', '-', '1', '2', '2020-02-03', '2020-02-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasien`
--

CREATE TABLE IF NOT EXISTS `tbl_pasien` (
`id_pasien` int(10) NOT NULL,
  `no_rm` varchar(50) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `nik` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id_pasien`, `no_rm`, `nama_pasien`, `jenis_kelamin`, `nik`, `alamat`, `no_telp`) VALUES
(1, '20044526', 'Dina Nur Faizah', 'P', '-', 'Jl. Adirasa Pesisir Gudang 3/1 Besuki', ''),
(2, '20044464', 'Nariye', 'P', '-', 'Lesanan Lor 1/4 Pesisir', ''),
(3, '20044429', 'Hasan Basri', 'L', '35112011201620001', 'Secangan 2/2 Jatibanteng', '085335433707'),
(4, '20044494', 'Idawati Ningsih', 'P', '-', 'Krajan 1/1 Suboh', ''),
(5, '20044545', 'Misnati', 'P', '-', 'Karang Malang 1/2 Kalianget Banyuglugur', '085236551306'),
(6, '20044546', 'Hafid', 'L', '-', 'Karang Malang 3/2 Kalianget Banyuglugur', '085236551306'),
(7, '20044508', 'Suhatija', 'P', '-', 'Curah Guno 16/06 Lubawang Banyuglugur', '082302465371'),
(8, '20044538', 'Asman', 'L', '-', 'Wringin Anom 2/2 Jatibanteng', ''),
(9, '20044533', 'Ahmad Hasibbudin', 'L', '-', 'Sagaran 2/3 Blimbing', ''),
(10, '20044498', 'Robiatul Adawiyah', 'P', '-', 'Perum Mager Sari Ay. 10 Sidoarjo', ''),
(11, '028100', 'Nur Aini', 'P', '-', 'Jambaran Plalangan Sumber Malang', '082228638392');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peminjaman`
--

CREATE TABLE IF NOT EXISTS `tbl_peminjaman` (
`id_peminjaman` int(10) NOT NULL,
  `no_rm` varchar(50) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `kepentingan` text NOT NULL,
  `tujuan_ekspedisi` varchar(50) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `tgl_pinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengembalian`
--

CREATE TABLE IF NOT EXISTS `tbl_pengembalian` (
`id_pengembalian` int(11) NOT NULL,
  `no_rm` int(11) NOT NULL,
  `nama_pasien` int(11) NOT NULL,
  `jenis_layanan` int(11) NOT NULL,
  `nama_peminjam` int(11) NOT NULL,
  `nama_petugas` int(11) NOT NULL,
  `tgl_kembali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_petugas`
--

CREATE TABLE IF NOT EXISTS `tbl_petugas` (
`id_petugas` int(10) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id_petugas`, `nip`, `nama_petugas`) VALUES
(1, '199508092019032011', 'Melur Kasmaboti'),
(2, '-', 'Rizka Nurhidayati'),
(3, '-', 'Umairoh Lailatul F.'),
(4, '-', 'Dwi Rahmaniatun Badriyah'),
(5, '-', 'Agustin Apriliyanti');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tujuan`
--

CREATE TABLE IF NOT EXISTS `tbl_tujuan` (
`id_tujuan` int(10) NOT NULL,
  `tujuan_ekspedisi` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tujuan`
--

INSERT INTO `tbl_tujuan` (`id_tujuan`, `tujuan_ekspedisi`) VALUES
(5, 'IGD'),
(3, 'Poli Anak'),
(4, 'Poli Mata'),
(2, 'Poli Penyakit Dalam'),
(1, 'UGD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_ekspedisi`
--
ALTER TABLE `tbl_ekspedisi`
 ADD PRIMARY KEY (`id_ekspedisi`), ADD UNIQUE KEY `no_rm` (`no_rm`,`tujuan_ekspedisi`,`nama_petugas`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
 ADD PRIMARY KEY (`id_pasien`), ADD KEY `no_rm` (`no_rm`);

--
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
 ADD PRIMARY KEY (`id_peminjaman`), ADD UNIQUE KEY `tujuan_ekspedisi` (`tujuan_ekspedisi`,`nama_petugas`);

--
-- Indexes for table `tbl_pengembalian`
--
ALTER TABLE `tbl_pengembalian`
 ADD PRIMARY KEY (`id_pengembalian`), ADD UNIQUE KEY `nama_petugas` (`nama_petugas`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
 ADD PRIMARY KEY (`id_petugas`), ADD KEY `nama_petugas` (`nama_petugas`), ADD KEY `nama_petugas_2` (`nama_petugas`);

--
-- Indexes for table `tbl_tujuan`
--
ALTER TABLE `tbl_tujuan`
 ADD PRIMARY KEY (`id_tujuan`), ADD KEY `tujuan_ekspedisi` (`tujuan_ekspedisi`), ADD KEY `tujuan_ekspedisi_2` (`tujuan_ekspedisi`), ADD KEY `tujuan_ekspedisi_3` (`tujuan_ekspedisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_ekspedisi`
--
ALTER TABLE `tbl_ekspedisi`
MODIFY `id_ekspedisi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
MODIFY `id_pasien` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
MODIFY `id_peminjaman` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pengembalian`
--
ALTER TABLE `tbl_pengembalian`
MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
MODIFY `id_petugas` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_tujuan`
--
ALTER TABLE `tbl_tujuan`
MODIFY `id_tujuan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
