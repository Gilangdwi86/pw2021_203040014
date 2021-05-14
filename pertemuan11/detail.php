<?php
/*
Gilang Dwi Adira Karsoma
203040014
https://github.com/Gilangdwi86/pw2021_203040014
Pertemuan 11 - 3 Mei 2021
Delete,Update,Searching Data
*/
?>

<?php
require 'function.php';

$id = $_GET['id'];
// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <h3>Detail Mahasiswa</h3>

    <ul>
        <li><img src="<?= $m['gambar']; ?>" width="150" alt=""></li>
        <li>NRP: <?= $m['nrp']; ?></li>
        <li>Nama: <?= $m['nama']; ?></li>
        <li>Email: <?= $m['email']; ?></li>
        <li>Jurusan: <?= $m['jurusan']; ?></li>
        <li>
            <a href="ubah.php?id=<?= $m["id"]; ?>">Ubah</a> |
            <a href="hapus.php?id=<?= $m["id"]; ?> " onclick="return confirm('Yakin?');">Hapus</a>
        </li>
        <li><a href="index.php">Kembali ke daftar mahasiswa</a></li>
    </ul>
</body>

</html>