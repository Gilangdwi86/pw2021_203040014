<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>203040014</title>
  <link rel="icon" href="assets/img/code.ico" type="image/x-icon">

  <style>
    table {
      border: #CCC solid 1px;
      background: #f9f9f9;
      box-shadow: 0 2px 7px rgba(0, 0, 0, 0.1);
      border-radius: 20px;
    }

    /* Info Panel */
    .info-panel {
      background-color: white;
      padding: 30px;
      margin-top: -120px;
      border-radius: 12px;
      box-shadow: 0 3px 20px rgba(0, 0, 0, 0.6);
    }

    .info-panel h4 {
      font-size: 16px;
      font-weight: bold;
      margin-top: 20px;
      text-transform: uppercase;
    }

    .info-panel p {
      font-size: 14px;
      font-weight: lighter;
      color: #acacac;
    }

    .info-panel img {
      width: 110px;
      height: 100px;
    }
  </style>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <a class="navbar-brand" href="#">G'Site</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-item nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kuliah">Kuliah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#praktikum">Praktikum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tubes">Tugas Besar</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <ul class="nav nav-pills card-header-pills pl-3">
            <li class="nav-item">
              <a class="nav-link active">Gilang Dwi Adira Karsoma</a>
            </li>
            <li class="nav-item pl-2">
              <a class="nav-link text-white bg-primary">203040014</a>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </nav>

  <!-- home -->
  <section id="home" class="home">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5 text-center">
          <br><br><br><br><br>
          <h1 class="display-4" style="text-align: left; font-size: 60px;"><b>Selamat Datang</b></h1>
          <br>
          <p style=" text-align: left; font-size: 20px;">Halaman ini menampilkan <b>Profile</b>, <b>Tugas Kuliah</b>, <b>Tugas Praktikum</b>, dan <b>Tugas Besar</b></p>
          <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
        <div class="col-md-5 text-center">
          <img src="assets/img/logo.png" width=100%">
        </div>
      </div>
    </div>
  </section>

  <!-- info panel -->
  <div class="row justify-content-center">
    <div class="col-7 info-panel">
      <div class="row">
        <div class="col-sm">
          <img src="assets/img/java.png" alt="kuliah" class="img-fluid float-left">
          <h4>Kuliah</h4>
          <p>Tugas Kuliah</p>
        </div>
        <div class="col-lg">
          <img src="assets/img/server.png" alt="praktikum" class="img-fluid float-left">
          <h4>Praktikum</h4>
          <p>Tugas Praktikum</p>
        </div>
        <div class="col-lg">
          <img src="assets/img/php.png" alt="tubes" class="img-fluid float-left">
          <h4>Tugas Besar</h4>
          <p>Tugas Besar</p>
        </div>
      </div>
    </div>
  </div>


  <!-- profile -->
  <section id="profile" class="profile">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5 text-center">
          <br><br><br>
          <img src="assets/img/gilang.jpg" width=50%" class="rounded-box img-thumbnail">
          <br><br><br>
        </div>
        <div class="col-md-5 text-center">
          <br><br><br>
          <h2 style="text-align: left; font-size: 38px;">Gilang Dwi Adira Karsoma</h2>
          <br>
          <p style="text-align: left; font-size: 18px;">Saya adalah mahasiswa jurusan <b>Teknik Informatika</b> yang sedang menempuh pendidikan di <b>Universitas Pasundan</b></p>
        </div>
      </div>
    </div>
  </section>

  <!-- kuliah -->
  <section id="kuliah" class="kuliah" style="background-color: Gainsboro;">
    <div class=" container">
      <div class="row mb-4">
      </div>

      <div class="row justify-content-center">
        <div class="col-md-5 text-center">
          <table class="table">
            <thead class="thead-dark">
              <br>
              <h2 style="font-size: 38px;">Tugas Kuliah</h2>
              <br>
              <p style="text-align: center; font-size: 20px;"><b>Username:</b> gilang <b>Password:</b> 12345</p>
              <br>
              <tr style="font-size: 20px;">
                <th scope="col">Repositories</th>
              </tr>
            </thead>
            <tbody>
              <tr style="font-size: 20px;">
                <td><a href="pertemuan2">Pertemuan 2</a></td>
              </tr>
              <tr style="font-size: 20px;">
                <td><a href="pertemuan3">Pertemuan 3</a></td>
              </tr>
              <tr style="font-size: 20px;">
                <td><a href="pertemuan4">Pertemuan 4</td>
              </tr>
              <tr style="font-size: 20px;">
                <td><a href="pertemuan5">Pertemuan 5</td>
              </tr>
              <tr style="font-size: 20px;">
                <td><a href="pertemuan6">Pertemuan 6</td>
              </tr>
              <tr style="font-size: 20px;">
                <td><a href="pertemuan7">Pertemuan 7</td>
              </tr>
              <tr style="font-size: 20px;">
                <td><a href="pertemuan10">Pertemuan 10</td>
              </tr>
              <tr style="font-size: 20px;">
                <td><a href="pertemuan11">Pertemuan 11</td>
              </tr>
              <tr style="font-size: 20px;">
                <td><a href="pertemuan12">Pertemuan 12</td>
              </tr>
              <tr style="font-size: 20px;">
                <td><a href="pertemuan13">Pertemuan 13</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-md-5 ml-5 text-center">
          <img src="assets/img/java.png" style="width: 100%;">
        </div>
      </div>
    </div>
  </section>

  <!-- praktikum -->
  <section id="praktikum" class="praktikum">
    <div class=" container">
      <div class="row mb-4">
      </div>
      <div class="row justify-content-center">
        <div class="col-md-5 text-center">
          <table class="table">
            <thead class="thead-dark">
              <br>
              <h2 style="font-size: 38px;">Tugas Praktikum</h2>
              <br>
              <p style="text-align: center; font-size: 20px;"><b>Username:</b> gilang <b>Password:</b> 12345</p>
              <br>
              <tr style="font-size: 20px;">
                <th scope="col">Repositories</th>
              </tr>
            </thead>
            <tbody>
              <tr style="font-size: 20px;">
                <td><a href=" praktikum/tugas1">Tugas 1 </a> </td>
              </tr>
              <tr style="font-size: 20px;">
                <td><a href="praktikum/tugas2">Tugas 2</td>
              </tr>
              <tr style="font-size: 20px;">
                <td><a href="praktikum/tugas3">Tugas 3</td>
              </tr>
              <tr style="font-size: 20px;">
                <td><a href="praktikum/tugas4">Tugas 4</td>
              </tr>
              <tr style="font-size: 20px;">
                <td><a href="praktikum/tugas5">Tugas 5</td>
              </tr>
              <tr style="font-size: 20px;">
                <td><a href="praktikum/tugas6">Tugas 6</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-md-5 ml-5 text-center">
          <img src="assets/img/server.png" width=100%">
        </div>
      </div>
    </div>
  </section>

  <!-- tubes -->
  <section id="tubes" class="tubes" style="background-color: Gainsboro;">
    <div class=" container">
      <div class="row mb-4">
      </div>
      <div class="row justify-content-center">
        <div class="col-md-5 text-center">
          <table class="table">
            <thead class="thead-dark">
              <br>
              <h2 style="font-size: 38px;">Tugas Besar</h2>
              <br>
              <p style="text-align: left; font-size: 20px;">Untuk melihat semua fitur pada halaman admin silahkan login dengan akun</p>
              <p style="text-align: left; font-size: 20px;"><b>Username:</b> gilang <b>Password:</b> 12345</p>
              <tr style="font-size: 20px;">
                <th scope=" col">Repositories</th>
              </tr>
            </thead>
            <tbody>
              <tr style="font-size: 20px;">
                <td><a href="tubes">Tugas Besar</a></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-md-5 ml-5 text-center">
          <img src="assets/img/php.png" width=100%">
        </div>
      </div>
    </div>
  </section>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>