<?php 
/*
Nama            : Gilang Dwi Adira Karsoma
NRP             : 203040014
Shift Praktikum : Rabu 09:00 - 10:00 WIB
*/
?>

<?php
require 'php/functions.php';
$laptop = query("SELECT * FROM laptop1");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>G'Tech</title>
</head>
<body>
   
<h1 style="font-size:40px">Rekomendasi Laptop</h1>
<div class="table-responsive">
    <table class="table">
        <tr class="table-primary" style="text-align:center">
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Fitur</th>
            <th>Harga</th>
            <th>Type</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($laptop as $lp) : ?>
            <tr>
                <td class="table-success"><?= $i; ?></td>
                <td><img src="assets/img/<?= $lp["gambar"]; ?>"></td>
                <td class="table-success"><?= $lp["nama"]; ?></td>
                <td><?= $lp["deskripsi"]; ?></td>
                <td class="table-success"><?= $lp["harga"]; ?></td>
                <td id="type"><span><?= $lp["type"]; ?></span></td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</div>

</body>
</html>