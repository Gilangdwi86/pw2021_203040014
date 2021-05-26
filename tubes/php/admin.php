<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

//menghubungkan dengan file php lainnya
require 'function.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $sepatu = query("SELECT * FROM sepatu WHERE
                nama LIKE '%$keyword%' OR
                deskripsi LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                tipe LIKE '%$keyword%' ");
} else {
  $sepatu = query("SELECT * FROM sepatu");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>ADMIN</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

  <div class="navbar-fixed">
    <nav class="blue darken-3">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">G'Kicks</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="tambah.php" class="waves-effect green accent-4 btn">Tambah Data</a></li>
            <li><a href="logout.php" class="waves-effect red darken-4 btn">LOGOUT</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>


  <div class="container">
    <br>
    <br>
    <form action="" method="GET">
      <input type="text" name="keyword" autofocus>
      <button class="btn green darken-3" type="submit" name="cari">Cari!</button>
    </form>
    <br>
    <br>
    <table class="striped" border="1" cellpadding="13" cellspacing="0">
      <tr>
        <th>#</th>
        <th>Opsi</th>
        <th>Gambar</th>
        <th>Nama Produk</th>
        <th>Deksripsi</th>
        <th>Harga</th>
        <th>Tipe</th>
      </tr>
      <?php if (empty($sepatu)) : ?>
        <tr>
          <td colspan="2">
            <h1>DATA TIDAK DITEMUKAN</h1>
          </td>
        </tr>
      <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($sepatu as $sp) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td>
              <a href="ubah.php?id=<?= $sp['id'] ?>"><button class="btn grey">Ubah</button></a>
              <a href="hapus.php?id=<?= $sp['id'] ?>" onclick="return confirm('Hapus Data??')"><button class="btn red">Hapus</button></a>
            </td>
            <td><img src="../assets/img/<?= $sp['gambar']; ?>" width="120"></td>
            <td><?= $sp['nama']; ?></td>
            <td><?= $sp['deskripsi']; ?></td>
            <td><?= $sp['harga']; ?></td>
            <td><?= $sp['tipe']; ?></td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </table>
  </div>

  <footer class="blue darken-3 white-text center">
    <p>Gilang Dwi Adira Karsoma Copyright 2021</p>
  </footer>
</body>

</html>