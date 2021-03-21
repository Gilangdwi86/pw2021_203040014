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
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"])  ||
    !isset($_GET["merk"])  ||
    !isset($_GET["spesifikasi"])  ||
    !isset($_GET["harga"])  ||
    !isset($_GET["gambar"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rekomendasi Laptop</title>
</head>
<body>

<ul>
    <li><img src="img/<?= $_GET["gambar"];?>"></li>
    <li><?= $_GET["nama"];?></li>
    <li><?= $_GET["merk"];?></li>
    <li><?= $_GET["spesifikasi"];?></li>
    <li><?= $_GET["harga"];?></li>
</ul>

<a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>