-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Apr 2021 pada 18.55
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040014`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laptop1`
--

CREATE TABLE `laptop1` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laptop1`
--

INSERT INTO `laptop1` (`id`, `nama`, `deskripsi`, `harga`, `type`, `gambar`) VALUES
(1, 'XPS 13', 'Dengan Ram Hingga 16gb dan Storage SSD 1TB dan batre yang awet yang tahan hingga 9 jam', 'Rp.15.999.000', 'Laptop', 'lp1.jpg'),
(2, 'Aspire 1 (One) 2020', 'Laptop ini sudah dibekali Processor Intel Celeron N4000 yang lebih dari cukup untuk kebutuhan kerja Anda. Selain itu terdapat juga RAM sebesar 4GB dan media penyimpanan HDD sebesar 64GB yang pas untuk keperluan ringan Anda', 'Rp.3.000.000	', 'Laptop', 'lp2.jpg'),
(3, 'Inspiron 11 3000', 'Laptop ini dipersenjatai dengan processor dual core AMD A9 yang hemat daya dan juga RAM sebesar 4GB. Untuk masalah penyimpanannya, laptop ini mempercayai media eMMC berkapasitas sebesar 64GB.', 'Rp.3.250.000	', 'Laptop', 'lp3.jpg'),
(4, 'Asus X441BA	', 'Merk laptop ini ditenagai Intel Core generasi ke-8,laptop ini telah menggunakan graphic card, dan audio yang berkelas untuk aktivitas gaming. Untuk media penyimpanan, merk laptop ini dibekali RAM 4GB, dan penyimpanan HDD sebesar 1TB', 'Rp.3.650.000.	', 'Laptop', 'lp4.jpg'),
(5, 'Lenovo Yoga C640', 'Menggunakan Processor Core i3 Generasi ke 10 dan sudah terdapat RAM sebesar 8GB yang menunjang untuk kebutuhan multitasking Anda. Media penyimpanan pada laptop ini sudah mengandalkan SSD sebesar 128GB', 'Rp.13.590.000', 'Laptop', 'lp5.jpg'),
(6, 'Lenovo IdeaPad Duet', 'Ditenagai oleh Prosesor Octa Core MediaTek Helio P60T dan didukung juga dengan RAM sebesar 4GB. Untuk masalah penyimpanan data, Lenovo IdeaPad Duet dibekali dengan eMMC dengan kapasitas sebesar 128GB.', 'Rp.7.099.000', 'Laptop', 'lp6.jpg'),
(7, 'Asus VivoBook A442UQ', 'Memiliki daya tarik pada besaran RAM yang digunakan. Laptop ini dipersenjatai RAM 8GB yang lebih dari cukup untuk memproses berbagai pekerjaan secara bersamaan. Selain itu, laptop ini menggunakan prosesor Intel Core i5, dengan penyimpanan HDD 1TB.', 'Rp.8.999.000', 'Laptop', 'lp7.jpg'),
(8, 'Acer Aspire E15', 'Laptop ini dibekali dengan layar berukuran 15 inchi dengan resolusi sebesar 1080p. Acer Aspire E15 ditenagai oleh processor Intel Core i3 8130U dan dikombinasikan dengan RAM sebesar 6GB. Untuk masalah penyimpanannya sudah disediakan HDD dengan kapasitas sebesar 1TB.', 'Rp.6.099.000', 'Laptop', 'lp8.jpg'),
(9, 'Acer Inspiron 14 5481', 'Laptop ini mempunyai processor Intel Core i3 8145U dan RAM DDR4 sebesar 4GB. Untuk masalah penyimpanan, laptop ini dibekali dengan SSD berkapasitas 128GB.', 'Rp.6.499.000', 'Laptop', 'lp9.jpg'),
(10, 'Asus C202SA Chromebook', 'Dilengkapi dengan ChromeOS dan processor Intel Celeron N3060 menjadikan laptop ini sangat ringkas untuk keperluan kerja Anda.', 'Rp.2.990.000	', 'Notebook', 'lp10.jpg'),
(24, 'ASUS VivoBook 14 K413', 'Mempunyai desain simpel dan elegan, Bobot dari laptop termasuk ringan yaitu 1,4 kg dan tipis (17,9 mm), Memiliki layar full HD yang memberi pengalaman menonton yang menarik, Telah menggunakan Windows 10 Home dan CPU Core i3 (ASUS VivoBook 14 K413FA)', 'Rp. 9.500.000', 'Laptop', 'lp11.jpg'),
(25, 'Acer Aspire 5 A514-52G', 'Telah menggunakan prosesor Intel Core i7 Quad Core, Mempunyai layar lebar 14 inci full HD dengan layar yang luas dengan bingkai tipis, Grafis layar sudah menggunakan GeForce MX250', 'Rp. 7.400.000', 'Laptop', 'lp12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laptop1`
--
ALTER TABLE `laptop1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laptop1`
--
ALTER TABLE `laptop1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
