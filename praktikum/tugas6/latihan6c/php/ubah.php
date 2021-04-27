<!-- 
Nama : Gilang Dwi Adira Karsoma
NRP : 203040014
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php

session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];
$laptop = query("SELECT * FROM laptop1 WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../pw2021_203040014/latihan4b/css/style.css">
    <style>
    section {
        min-height: 420px;
    }

    h1 {
        text-align: center;
    }

    span {
        font-family: arial;
        border: 1px solid black;
        padding: 5px;
        background-color: blue;
        font-weight: bold;
    }
    </style>

    <title>G'Tech</title>
</head>
<body>
    <div class="container">

        <h3>Form Ubah Data Laptop</h3>

        <form action="" method="POST">
            <input type="hidden" name="id" id="id" value="<?= $laptop['id']; ?>">
            <ul>
                <li>
                    <label for="gambar">Gambar :</label><br>
                    <input type="file" name="gambar" id="gambar" require value="<?= $laptop['gambar']; ?>"><br><br>
                </li>
                <li>
                    <label for="nama">Nama :</label><br>
                    <input type="text" name="nama" id="nama" require value="<?= $laptop['nama']; ?>"><br><br>
                </li>
                <li>
                    <label for="deskripsi">Deskripsi :</label><br>
                    <input type="text" name="deskripsi" id="deskripsi" require value="<?= $laptop['deskripsi']; ?>"><br><br>
                </li>
                <li>
                    <label for="harga">Harga :</label><br>
                    <input type="text" name="harga" id="harga" require value="<?= $laptop['harga']; ?>"><br><br>
                </li>
                <li>
                    <label for="type">Type :</label><br>
                    <input type="text" name="type" id="type" require value="<?= $laptop['type']; ?>"><br><br>
                </li>
                <br>
                <button type="submit" name="ubah">Ubah Data !</button>
                <button type="submit">
                    <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
                </button>
            </ul>
        </form>
    </div>

</body>
</html>