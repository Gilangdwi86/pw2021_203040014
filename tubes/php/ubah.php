<?php

session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'function.php';

$id = $_GET['id'];

$sp = query("SELECT * FROM sepatu WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal Diubah!');
            document.location.href = 'admin.php';
          </script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UBAH DATA</title>
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
        </div>
      </div>
    </nav>
  </div>

  <div class="container white">
    <h3>FORM UBAH DATA SEPATU</h3>
    <form action="" method="POST">
      <input type="hidden" name="id" id="id" value="<?= $sp['id']; ?>">
      <ul>
        <li>
          <label for="nama">Nama :</label>
          <input type="text" name="nama" id="nama" required value="<?= $sp['nama']; ?>"><br><br>
        </li>
        <li>
          <label for="deskripsi">Deskripsi</label>
          <input type="text" name="deskripsi" id="deskripsi" required value="<?= $sp['deskripsi']; ?>"><br><br>
        </li>
        <li>
          <label for="harga">Harga :</label>
          <input type="text" name="harga" id="harga" required value="<?= $sp['harga']; ?>"><br><br>
        </li>
        <li>
          <label for="tipe">Tipe :</label>
          <input type="text" name="tipe" id="tipe" required value="<?= $sp['tipe']; ?>"><br><br>
        </li>
        <li>
          <label for="harga">Gambar :</label>
          <input type="text" name="gambar" id="gambar" required value="<?= $sp['gambar']; ?>"><br><br>
        </li>
        <br>
        <button class="btn green accent-3" type="submit" name="ubah">Ubah Data!</button>
        <button class="btn black" type="submit">
          <a href="admin.php">Kembali</a>
        </button>
      </ul>
    </form>
  </div>

  <!--Footer-->
  <footer class="blue darken-3 white-text center">
    <p>Gilang Dwi Adira Karsoma Copyright 2021</p>
  </footer>
</body>

</html>