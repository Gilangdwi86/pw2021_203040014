<?php 
/*
Gilang Dwi Adira Karsoma
203040014
https://github.com/Gilangdwi86/pw2021_203040014
pertemuan 7 - 18 Maret 2021
mempelajari mengenai sintaks PHP 
GET and POST
*/
?> 

<?php
// Variable Scope / lingkup variabel
// $x = 10;

// function tampilX() {
//     global $x;
//     echo $x;
// }

// tampilX();


// SUPERGLOBALS
// variable global milik PHP
// merupakan array Associative
// echo $_SERVER["SERVER_NAME"]
// $_GET
$laptop = [
    [
        "nama" => "XPS 13",
        "merk"  => "Dell",
        "spesifikasi" => "Dengan Ram Hingga 16gb dan Storage SSD 1TB dan batre yang awet yang tahan hingga 9 jam",
        "harga" => "Rp.15.999.000",
        "gambar" => "lp1.jpg"
    ],
    [
        "nama" => "Aspire 1 (One) 2020",
        "merk"  => "Acer",
        "spesifikasi" => "Laptop ini sudah dibekali Processor Intel Celeron N4000 yang lebih dari cukup untuk kebutuhan kerja Anda. Selain itu terdapat juga RAM sebesar 4GB dan media penyimpanan HDD sebesar 64GB yang pas untuk keperluan ringan Anda",
        "harga" => "Rp.3.000.000",
        "gambar" => "lp2.jpg"
    ],
    [
        "nama" => "Inspiron 11 3000",
        "merk"  => "Dell",
        "spesifikasi" => "Laptop ini dipersenjatai dengan processor dual core AMD A9 yang hemat daya dan juga RAM sebesar 4GB. Untuk masalah penyimpanannya, laptop ini mempercayai media eMMC berkapasitas sebesar 64GB.",
        "harga" => "Rp.3.250.000",
        "gambar" => "lp3.jpg"
    ],
    [
        "nama" => "X441BA",
        "merk"  => "Asus",
        "spesifikasi" => "Merk laptop ini ditenagai Intel Core generasi ke-8,laptop ini telah menggunakan graphic card, dan audio yang berkelas untuk aktivitas gaming. Untuk media penyimpanan, merk laptop ini dibekali RAM 4GB, dan penyimpanan HDD sebesar 1TB",
        "harga" => "Rp.3.650.000.",
        "gambar" => "lp4.jpg"
    ],
    [
        "nama" => "Yoga C640",
        "merk"  => "Lenovo",
        "spesifikasi" => "menggunakan Processor Core i3 Generasi ke 10 dan sudah terdapat RAM sebesar 8GB yang menunjang untuk kebutuhan multitasking Anda. Media penyimpanan pada laptop ini sudah mengandalkan SSD sebesar 128GB",
        "harga" => "Rp.13.590.000",
        "gambar" => "lp5.jpg"
    ],
    [
        "nama" => "IdeaPad Duet",
        "merk"  => "Lenovo",
        "spesifikasi" => " ditenagai oleh Prosesor Octa Core MediaTek Helio P60T dan didukung juga dengan RAM sebesar 4GB. Untuk masalah penyimpanan data, Lenovo IdeaPad Duet dibekali dengan eMMC dengan kapasitas sebesar 128GB.",
        "harga" => "Rp.7.099.000",
        "gambar" => "lp6.jpg"
    ],
    [
        "nama" => "VivoBook A442UQ",
        "merk"  => "Asus",
        "spesifikasi" => "memiliki daya tarik pada besaran RAM yang digunakan. Laptop ini dipersenjatai RAM 8GB yang lebih dari cukup untuk memproses berbagai pekerjaan secara bersamaan. Selain itu, laptop ini menggunakan prosesor Intel Core i5, dengan penyimpanan HDD 1TB.",
        "harga" => "Rp.8.999.000",
        "gambar" => "lp7.jpg"
    ],
    [
        "nama" => "Aspire E15",
        "merk"  => "Acer",
        "spesifikasi" => "Laptop ini dibekali dengan layar berukuran 15 inchi dengan resolusi sebesar 1080p. Acer Aspire E15 ditenagai oleh processor Intel Core i3 8130U dan dikombinasikan dengan RAM sebesar 6GB. Untuk masalah penyimpanannya sudah disediakan HDD dengan kapasitas sebesar 1TB",
        "harga" => "Rp.6.099.000",
        "gambar" => "lp8.jpg"
    ],
    [
        "nama" => "Inspiron 14 5481",
        "merk"  => "Dell",
        "spesifikasi" => "Laptop ini mempunyai processor Intel Core i3 8145U dan RAM DDR4 sebesar 4GB. Untuk masalah penyimpanan, laptop ini dibekali dengan SSD berkapasitas 128GB.",
        "harga" => "Rp.6.499.000",
        "gambar" => "lp9.jpg"
    ],
    [
        "nama" => "C202SA Chromebook",
        "merk"  => "Asus",
        "spesifikasi" => "Dilengkapi dengan ChromeOS dan processor Intel Celeron N3060 menjadikan laptop ini sangat ringkas untuk keperluan kerja Anda.",
        "harga" => "Rp.2.990.000",
        "gambar" => "lp10.jpg"
    ]
]; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Rekomendasi Laptop</h1>
    <?php foreach ($laptop as $lp) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $lp["nama"];?>&merk=
            <?= $lp["merk"];?>&spesifikasi=<?= $lp["spesifikasi"];?>
            &harga=<?= $lp["harga"];?>&gambar=<?= $lp["gambar"];?> "><?= $lp["nama"]?></a>
        </li>
    <?php endforeach; ?>
</body>
</html>