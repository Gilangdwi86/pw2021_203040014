<?php 
/*
Nama            : Gilang Dwi Adira Karsoma
NRP             : 203040014
Shift Praktikum : Rabu 09:00 - 10:00 WIB
*/
?>

<?php
$laptop = [
    [
        "nama" => "XPS 13",
        "spesifikasi" => "Dengan Ram Hingga 16gb dan Storage SSD 1TB dan batre yang awet yang tahan hingga 9 jam",
        "harga" => "Rp.15.999.000",
        "gambar" => "lp1.jpg",
        "type" => "Laptop"
    ],
    [
        "nama" => "Aspire 1 (One) 2020",
        "spesifikasi" => "Laptop ini sudah dibekali Processor Intel Celeron N4000 yang lebih dari cukup untuk kebutuhan kerja Anda. Selain itu terdapat juga RAM sebesar 4GB dan media penyimpanan HDD sebesar 64GB yang pas untuk keperluan ringan Anda",
        "harga" => "Rp.3.000.000",
        "gambar" => "lp2.jpg",
        "type" => "Laptop"
    ],
    [
        "nama" => "Inspiron 11 3000",
        "spesifikasi" => "Laptop ini dipersenjatai dengan processor dual core AMD A9 yang hemat daya dan juga RAM sebesar 4GB. Untuk masalah penyimpanannya, laptop ini mempercayai media eMMC berkapasitas sebesar 64GB.",
        "harga" => "Rp.3.250.000",
        "gambar" => "lp3.jpg",
        "type" => "Laptop"
    ],
    [
        "nama" => "X441BA",
        "spesifikasi" => "Merk laptop ini ditenagai Intel Core generasi ke-8,laptop ini telah menggunakan graphic card, dan audio yang berkelas untuk aktivitas gaming. Untuk media penyimpanan, merk laptop ini dibekali RAM 4GB, dan penyimpanan HDD sebesar 1TB",
        "harga" => "Rp.3.650.000.",
        "gambar" => "lp4.jpg",
        "type" => "Laptop"
    ],
    [
        "nama" => "Yoga C640",
        "spesifikasi" => "menggunakan Processor Core i3 Generasi ke 10 dan sudah terdapat RAM sebesar 8GB yang menunjang untuk kebutuhan multitasking Anda. Media penyimpanan pada laptop ini sudah mengandalkan SSD sebesar 128GB",
        "harga" => "Rp.13.590.000",
        "gambar" => "lp5.jpg",
        "type" => "Laptop"
    ],
    [
        "nama" => "IdeaPad Duet",
        "spesifikasi" => " ditenagai oleh Prosesor Octa Core MediaTek Helio P60T dan didukung juga dengan RAM sebesar 4GB. Untuk masalah penyimpanan data, Lenovo IdeaPad Duet dibekali dengan eMMC dengan kapasitas sebesar 128GB.",
        "harga" => "Rp.7.099.000",
        "gambar" => "lp6.jpg",
        "type" => "Laptop"
    ],
    [
        "nama" => "VivoBook A442UQ",
        "spesifikasi" => "memiliki daya tarik pada besaran RAM yang digunakan. Laptop ini dipersenjatai RAM 8GB yang lebih dari cukup untuk memproses berbagai pekerjaan secara bersamaan. Selain itu, laptop ini menggunakan prosesor Intel Core i5, dengan penyimpanan HDD 1TB.",
        "harga" => "Rp.8.999.000",
        "gambar" => "lp7.jpg",
        "type" => "Laptop"
    ],
    [
        "nama" => "Aspire E15",
        "spesifikasi" => "Laptop ini dibekali dengan layar berukuran 15 inchi dengan resolusi sebesar 1080p. Acer Aspire E15 ditenagai oleh processor Intel Core i3 8130U dan dikombinasikan dengan RAM sebesar 6GB. Untuk masalah penyimpanannya sudah disediakan HDD dengan kapasitas sebesar 1TB",
        "harga" => "Rp.6.099.000",
        "gambar" => "lp8.jpg",
        "type" => "Laptop"
    ],
    [
        "nama" => "Inspiron 14 5481",
        "spesifikasi" => "Laptop ini mempunyai processor Intel Core i3 8145U dan RAM DDR4 sebesar 4GB. Untuk masalah penyimpanan, laptop ini dibekali dengan SSD berkapasitas 128GB.",
        "harga" => "Rp.6.499.000",
        "gambar" => "lp9.jpg",
        "type" => "Laptop"
    ],
    [
        "nama" => "C202SA Chromebook",
        "spesifikasi" => "Dilengkapi dengan ChromeOS dan processor Intel Celeron N3060 menjadikan laptop ini sangat ringkas untuk keperluan kerja Anda.",
        "harga" => "Rp.2.990.000",
        "gambar" => "lp10.jpg",
        "type" => "Laptop"
    ]
]; 


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
    <style>
    img{
        width:300px;
        height:220px;
    }
    h1{
        text-align:center;
        color:red;
        font-size:55px;
        padding:10px;
        text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
    }
    th{
        text-align:center;
    }
    #type{
        text-align:center;
    }
    span{
       color:white;
       background-color:blue;
       text-align:center;
       font-weight:bold;
       padding:5px;
       border:1px solid #116951;
       border-radius:30px;
       cursor:default;
    }
    span:hover{
       color:white;
       background-color:salmon; 
       border:1px solid #d90d3d;
    }
    </style>
</head>
<body>
    
<h1>Rekomendasi Laptop</h1>
<div class="table-responsive">
    <table class="table">
        <tr class="table-primary">
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Spesifikasi</th>
            <th>Harga</th>
            <th>Type</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($laptop as $lp) : ?>
            <tr>
                <td class="table-success"><?= $i; ?></td>
                <td><img src="img/<?= $lp["gambar"]; ?>"></td>
                <td class="table-success"><?= $lp["nama"]; ?></td>
                <td><?= $lp["spesifikasi"]; ?></td>
                <td class="table-success"><?= $lp["harga"]; ?></td>
                <td id="type"><span><?= $lp["type"]; ?></span></td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</div>


</body>
</html>