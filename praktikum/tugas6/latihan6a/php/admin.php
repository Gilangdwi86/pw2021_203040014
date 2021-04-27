<!-- 
Nama : Gilang Dwi Adira Karsoma
NRP : 203040014
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php
require 'functions.php';

$laptop = query("SELECT * FROM laptop1");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $laptop = query("SELECT * FROM laptop1 WHERE
            nama LIKE '%$keyword%' OR
            deskripsi LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            type LIKE '%$keyword%' ");
} else {
    $laptop = query("SELECT * FROM laptop1");
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

     img {
        width: 300px;
        Height : 200px;
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

    .add {
        border: 1px solid rgb(204, 204, 204);
        padding: 10px;
        width: 180px;
        text-align: justify;
        overflow: auto;
        background-color: #cfe2f3;
        margin-bottom: 15px;
    }

    .container {
        margin: 20px;
    }

    form {
        width:500px;
    }

    .search {
        padding:8px 15px;
        background:rgba(50, 50, 50, 0.2);
        border:0px solid #dbdbdb;
    }

    .button {
        position:relative;
        padding:6px 15px;
        left:-8px;
        border:2px solid #53bd84;
        background-color:#53bd84;
        color:#fafafa;
    }

    .button:hover  {
        background-color:#fafafa;
        color:#207cca;
    }

    .logout {
        border: 1px solid rgb(204, 204, 204);
        padding: 10px;
        width: 180px;
        text-align: justify;
        overflow: auto;
        background-color: #cfe2f3;
        margin-bottom: 15px;
    }

    </style>

    <title>G'Tech</title>
</head>
<body>
        
    <h1>Rekomendasi Laptop</h1>

    <div class="container">
        <div class="add">
            <a href="tambah.php">Tambah Data</a>
        </div>
    </div>

    <div class="container">
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="container">
        <form action="" method="get">
            <input class="search" type="text" name="keyword" autofocus>
            <button class="button" type="submit" name="cari">Cari!</button>
        </form>
    </div>

    <div class="container">
        <table border="1" cellpadding="13" cellspacing="0">
            <tr>
                <th>No</th>
                <th>#</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Type</th>
            </tr>

            <?php if (empty($laptop)) : ?>
                <tr>
                    <td colspan="7">
                        <h1>Laptop Tidak Ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($laptop as $lp) : ?>
            <tr>
                <td class="table-primary"><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $lp['id'] ?>"><button>Ubah</button></a>
                    <a href="hapus.php?id=<?= $lp ['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td class="table-primary"><img src="../assets/img/<?= $lp['gambar']; ?>"></td>
                <td class="table"><?= $lp['nama']; ?></td>
                <td class="table-primary"><?= $lp['deskripsi']; ?></td>
                <td class="table"><?= $lp['harga']; ?></td>
                <td class="table-primary"><?= $lp['type']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </table>

    </div>
</body>
</html>
