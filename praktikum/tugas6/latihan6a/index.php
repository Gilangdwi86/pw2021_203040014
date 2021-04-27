<!-- 
Nama : Gilang Dwi Adira Karsoma
NRP : 203040014
Praktikum : Rabu
u pukul 09:00 - 10:00 WIB
-->


<?php 
require 'php/functions.php';
$laptop = query("SELECT * FROM laptop1");
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
        
    <h1>Rekomendasi Laptop</h1>
    
    <div class="container">
        <div>
            <?php foreach ($laptop as $lp) :?>
                <p class="nama">
                    <a href="php/detail.php?id=<?= $lp['id'] ?>">
                        <?= $lp["nama"]?>
                    </a>
                </p>
            <?php endforeach; ?>
        </div>

        <a href="php/login.php">
            <button type="">Masuk Ke Halaman Admin</button>
        </a>

    </div>
    
    

</body>
</html>
