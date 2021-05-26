<?php
//Menghubungkan dengan file php lainnya
require 'php/function.php';

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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Tugas Besar Gilang</title>
  <link rel="icon" href="assets/img/sneakers.ico" type="image/x-icon">

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body id="home" class="scrollspy">

  <!-- NAVBAR -->
  <div class="navbar-fixed">
    <nav class="blue darken-3">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo">G'Kicks</a>
          <a href="" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#home">HOME</a></li>
            <li><a href="#produk">PRODUK</a></li>
            <li><a href="#pesan">PEMESANAN</a></li>
            <li>
              <a href="php/login.php" class="waves-effect waves-light btn">LOGIN</a>
            </li>
          </ul>
        </div>
    </nav>
  </div>

  <!--Sidenav-->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#home">HOME</a></li>
    <li><a href="#produk">PRODUK</a></li>
    <li><a href="#pesan">PEMESANAN</a></li>
    <li><a href="php/login.php">LOGIN</a></li>
  </ul>

  <!--Slider-->
  <div id="home" class="slider scrollspy">
    <ul class="slides">
      <li>
        <img src="assets/img/slide.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h1 class="white-text"><b>Hello</b></h1>
          <h3 class="blue-text text-darken-2">SELAMAT DATANG</h3>
          <h3 class="red-text text-darken-3">"G'Kicks"</h3>
        </div>
      </li>
    </ul>
  </div>

  <!-- SEARCH -->
  <div id="produk" class="container">
    <br>
    <br>
    <form action="" method="GET">
      <input type="text" name="keyword">
      <button type="submit" name="cari" class="btn blue darken-3">Cari!</button>
      <button class="btn red darken-3"><a href="index.php"></a> BACK</button>
    </form>
    <br>
    <br>

    <!-- DATABASE -->
    <?php if (empty($sepatu)) : ?>
      <tr>
        <td colspan="2">
          <h1>DATA TIDAK DITEMUKAN</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php foreach ($sepatu as $sp) : ?>
        <ul class="collection">
          <li class="collection-item avatar">
            <i class="material-icons circle">shop</i>
            <p>
              <a href="php/detail.php?id=<?= $sp['id'] ?>">
                <?= $sp["nama"] ?>
              </a>
            </p>
            <a href="php/detail.php?id=<?= $sp['id'] ?>" class="secondary-content"><i class="material-icons">shopping_cart</i></a>
          </li>
        </ul>
      <?php endforeach; ?>
    <?php endif ?>
  </div>

  <!--Contact Me-->
  <section id="pesan" class="contact grey lighten-3 scrollspy">
    <div class="container">
      <h3 class="light grey-text text-darken-3 center">Pesan Sekarang!</h3>
      <div class="row">
        <div class="col m5 s12">
          <div class="card-panel deep-orange lighten-2 center white-text">
            <i class="material-icons">email</i>
            <h5>Kontak</h5>
            <p>Kami memberikan pelayanan yang terbaik untuk pelanggan</p>
          </div>
          <ul class="collection with-header">
            <li class="collection-header">
              <h4 class="center">Toko Kami</h4>
            </li>
            <li class="collection-item">G'Kicks</li>
            <li class="collection-item">Jalan Ipik Gandamanah,Sukamulya, Purwakarta</li>
            <li class="collection-item">Jawa Barat, Indonesia</li>
          </ul>
        </div>
        <div class="col m7 s12">
          <form>
            <div class="card-panel">
              <h5>Silahkan isi form ini untuk pemesanan</h5>
              <div class="input-field">
                <input type="text" name="name" id="name">
                <label for="name">Nama</label>
              </div>
              <div class="input-field">
                <input type="email" name="email" id="email">
                <label for="name">Email</label>
              </div>
              <div class="input-field">
                <input type="text" name="phone" id="phone">
                <label for="name">Nomor Telepon</label>
              </div>
              <div class="input-field">
                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                <label for="message">Pesanan</label>
              </div>
              <button type="submit" class="btn green accent-3">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!--Footer-->
  <footer class="blue darken-3 white-text center">
    <p>Gilang Dwi Adira Karsoma Copyright 2021</p>
  </footer>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>

  <script type="text/javascript">
    const sidenav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sidenav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 600,
      duration: 3000
    });

    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrolloffset: 50
    });
  </script>

</body>

</html>