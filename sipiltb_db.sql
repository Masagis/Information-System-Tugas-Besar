-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2019 pada 05.58
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipiltb_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(1) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_create`) VALUES
(1, 'Agis Tri wahyuji', 'karmeo08@gmail.com', '4.jpg', '$2y$10$zeyDkPWqOe4KsSYLGlacWu0dH1ewxouOhUUy2m.gDAM5fqSYWViXi', 1, 1, 1552385297),
(2, 'Rahmat Kurniawan', 'wahyujiat@gmail.com', 'default.jpg', '$2y$10$GFncW32QQR0tDM9bIUkxU.V3Zxk7lqx8I3mKD//OaFPuCMa2HbsFy', 2, 1, 1552552313);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(4, 1, 3),
(6, 2, 4),
(8, 2, 5),
(11, 2, 2),
(13, 1, 2),
(14, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_asisten`
--

CREATE TABLE `user_asisten` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `matkul` varchar(128) NOT NULL,
  `matkul1` varchar(128) NOT NULL,
  `matkul2` varchar(128) NOT NULL,
  `filename` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_asisten`
--

INSERT INTO `user_asisten` (`id`, `nim`, `name`, `matkul`, `matkul1`, `matkul2`, `filename`) VALUES
(1, 14115041, 'Rahmat Kurniawan', 'sistem informasi', 'pengembangan aplikasi mobile', '', 'data_analisis_dg_tablue.zip'),
(2, 14155065, 'Rahmat Kurniawan', 'sistem ', 'ppl', '', 'magang-source_code_id.zip');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_daftar`
--

CREATE TABLE `user_daftar` (
  `id` int(11) NOT NULL,
  `kodemk` varchar(128) NOT NULL,
  `namamk` varchar(128) NOT NULL,
  `sksmk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_kelompok`
--

CREATE TABLE `user_kelompok` (
  `nim` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `matkul` varchar(30) DEFAULT NULL,
  `kelompok` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_kelompok`
--

INSERT INTO `user_kelompok` (`nim`, `nama`, `kelas`, `matkul`, `kelompok`) VALUES
(14116030, 'ilham raobi', 'RB', 'Proyek perangkat lunak', ''),
(14116033, 'Arif wicaksono', 'RA', 'Proyek perangkat lunak', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_matkul`
--

CREATE TABLE `user_matkul` (
  `id` int(11) NOT NULL,
  `kodemk` varchar(128) NOT NULL,
  `namamk` varchar(128) NOT NULL,
  `sksmk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_matkul`
--

INSERT INTO `user_matkul` (`id`, `kodemk`, `namamk`, `sksmk`) VALUES
(1, 'IF4567', 'Sistem Operasi', 3),
(2, 'IF2412', 'Sistem Informmasi', 2),
(3, 'IF3412', 'Data Mining', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Mahasiswa'),
(5, 'Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_post`
--

CREATE TABLE `user_post` (
  `id_post` int(11) NOT NULL,
  `title_post` varchar(128) NOT NULL,
  `isi_post` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_post`
--

INSERT INTO `user_post` (`id_post`, `title_post`, `isi_post`) VALUES
(1, 'Google ', 'https://google.com/'),
(2, 'Facebook', 'https://facebook.com'),
(3, 'Instagram', 'https://instagram.com/'),
(4, 'Sistem akademik', 'http://siakad.itera.ac.id/'),
(5, 'E-leraning', 'http://kuliah.itera.ac.id/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu/index', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(7, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(8, 4, 'Pendaftaran Tugas Besar', 'mahasiswa', 'fas fa-fw fa-file', 1),
(9, 4, 'Pendaftaran Asisten', 'mahasiswa/lamaran', 'fas fa-fw fa-file-upload', 1),
(10, 5, 'Pembagian Kelompok', 'informasi/kelompok', 'fas fa-fw fa-book', 1),
(11, 5, 'Pengumuman', 'informasi/pengumuman', 'fas fa-fw fa-bullhorn', 1),
(12, 3, 'Buka Kelas', 'menu/class', 'fas fa-fw fa-users', 1),
(13, 3, 'Upload Nilai', 'menu/upload', 'fas fa-fw fa-file-upload', 1),
(14, 3, 'Pembagian Kelompok', 'menu/kelompok', 'fas fa-fw fa-user-edit', 1),
(15, 3, 'Data Pelamar Asisten', 'menu/asisten', 'fas fa-fw fa-database', 1),
(16, 3, 'Post Pengumuman', 'menu/post', 'fas fa-fw fa-file-upload', 1),
(17, 4, 'Kartu Hasil Tugas Besar', 'mahasiswa/khs', 'fas fa-fw fa-file-alt', 1),
(18, 4, 'Unduh Kartu Kelulusan', 'mahasiswa/hasil', 'fas fa-fw fa-file-pdf', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_asisten`
--
ALTER TABLE `user_asisten`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_daftar`
--
ALTER TABLE `user_daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_kelompok`
--
ALTER TABLE `user_kelompok`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `user_matkul`
--
ALTER TABLE `user_matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_asisten`
--
ALTER TABLE `user_asisten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_daftar`
--
ALTER TABLE `user_daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_matkul`
--
ALTER TABLE `user_matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_post`
--
ALTER TABLE `user_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
