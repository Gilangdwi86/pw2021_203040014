-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2021 pada 08.16
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
(30, 'ASUS VivoBook 14 K413', 'Mempunyai desain simpel dan elegan, Bobot dari laptop termasuk ringan yaitu 1,4 kg dan tipis (17,9 mm), Memiliki layar full HD yang memberi pengalaman menonton yang menarik, Telah menggunakan Windows 10 Home dan CPU Core i3 (ASUS VivoBook 14 K413FA)', 'Rp. 9.500.000', 'Laptop', 'lp11.jpg'),
(31, 'Acer Aspire 5 A514-52G', 'Telah menggunakan prosesor Intel Core i7 Quad Core, Mempunyai layar lebar 14 inci full HD dengan layar yang luas dengan bingkai tipis, Grafis layar sudah menggunakan GeForce MX250', 'Rp. 7.400.000', 'Laptop', 'lp12.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sepatu`
--

CREATE TABLE `sepatu` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sepatu`
--

INSERT INTO `sepatu` (`id`, `nama`, `deskripsi`, `harga`, `tipe`, `gambar`) VALUES
(1, 'Tomkins Columbus', 'Tomkins Columbus merupakan sepatu yang terbuat dari material kulit sintetis dengan outsole kuat berkualitas terbaik. Seperti merk Tomkins lainnya, sepatu ini juga menyasar anak muda dengan desain trendy dan modern jadi selain bisa dipakai bersekolah bisa ', 'Rp.420.000', 'sepatu', 'sp1.jpg'),
(2, 'Vans Old Skool', 'Sepatu satu ini hadir dengan desain khas Vans dengan perpaduan warna hitam dan putih pada bagian atasnya. Sepatu ini merupakan model slip on shoes, sehingga walaupun bertali Vans Old Skool tetap mudah digunakan dan tidak sulit ketika melepasnya.', 'Rp.180.000', 'sepatu', 'sp2.jpg'),
(3, 'Fila Clips', 'Sepatu olahraga satu ini cocok digunakan untuk berolahraga sekaligus berjalan-jalan karena desainnya yang sporty dan trendy. Bagian depan, terdapat logo Fila yang jelas namun tidak berlebihan sehingga menambah nilai sepatu merk terkenal satu ini.', 'Rp.546.000', 'sepatu', 'sp3.jpg'),
(4, 'Converse One Star Mason', 'Sepatu Converse One Star Mason adalah salah satu merk sepatu mahal pria namun hadir dengan kualitas sepadan. Desainnya unik, berbeda dengan yang lain, namun tetap menunjukan kelas sepatu premium.', 'Rp.650.000', 'sepatu', 'sp4.jpg'),
(5, 'League Regulus', 'League memang terkenal dengan sepatu sekolah dan olahraga terutama running. Seperti seri League Regulus yang hadir dengan mesh upper dan sirkulasi udara yang maksimal.', 'Rp.479.200', 'sepatu', 'sp5.jpg'),
(6, 'Reebok Astro', 'Reebok tidak pernah mengecewakan soal kualitas sepatu dan selalu masuk daftar merk sepatu pria branded yang paling disukai. Desainnya sangat detail bahkan hingga sole sepatu diberi aksen warna sesuai dengan warna sepatu.', 'Rp.395.000', 'sepatu', 'sp6.jpg'),
(7, 'Adidas Gazelle', 'Adidas merupakan merek sepatu mahal pria yang hadir dengan berbagai seri berkualitas tinggi dan Material bahan yang dipilih juga tidak pernah mengecewakan.Untuk seri Adidas Gazelle kali ini menggunakan bahan suede yang cocok dengan gaya sepatu sport namun', 'Rp 678.000', 'sepatu', 'sp7.jpg'),
(8, 'Nike Ebernon Low', 'Sepatu yang sporty namun juga santai ini cocok digunakan untuk berjalan-jalan atau sekedar olahraga kecil. Versi untuk wanitanya juga tersedia karena Nike juga termasuk merk sepatu wanita terkenal dan bukan hanya merk sepatu pria saja.', 'Rp.1.039.000', 'sepatu', 'sp8.jpg'),
(9, 'Adidas Duramo 9', 'Model sepatu dengan sol tinggi satu ini sedang tren dan banyak yang menyukainya. Sepatu bukan hanya mudah untuk berlari namun sekaligus menambah keren penampilan karena jadi terlihat lebih tinggi.', 'Rp.1.770.000', 'sepatu', 'sp9.jpg'),
(10, 'Brodo Base Gum', 'Bagi yang membutuhkan sepatu yang cocok untuk aktivitas semi formal seperti ke kampus, namun tetap terlihat keren, ini jawabannya. Sepatu berwarna jet black ini hadir tanpa perpaduan warna apapun kecuali pada bagian sol dan sedikit pada bagian belakang.', 'Rp.485.000', 'sepatu', 'sp10.jpg'),
(11, 'Hi Jack Sandals', 'Jika Anda adalah penyuka model sandal multi strap maka model yang ditawarkan oleh Hi Jack Sandals ini mungkin bisa masuk ke dalam daftar belanjaan Anda. Selai itu, terdapat pula model sandal gunung dengan beragam warna yang elegan.', 'Rp.250.000', 'sandal', 'sd1.jpg'),
(12, 'Heiden Shoes', 'produk unggulan dari merk ini menyediakan sandal dengan kualitas yang sudah tidak perlu diragukan lagi. Harga untuk produk ini pun terjangkau', 'Rp.160.000', 'sandal', 'sd2.jpg'),
(13, 'Navara', 'Produk lokal ini tidak kalah dengan buatan luar negeri, hal ini dibuktikan dengan banyak selebgram yang sudah menggunakan produk ini tanpa endorse. Model yang ditawarkan selalu mengikuti trend dan dengan harga yang relatif murah.', 'Rp.135.000', 'sandal', 'sd3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'gilang', '$2y$10$kCfOPPeryfj6G4CRO2zQuO5t68YH9EM3mR9.HQFZgQwhxzAKXpxi6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laptop1`
--
ALTER TABLE `laptop1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laptop1`
--
ALTER TABLE `laptop1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `sepatu`
--
ALTER TABLE `sepatu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
