<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];
$lp = query("SELECT * FROM laptop1 WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/detail.css">
    <title>G'Tech</title>
</head>

<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $lp["gambar"]; ?>">
        </div>

        <div class="list2"></div>

        <div class="list">
            <h1><?= $lp["nama"]; ?></h1>
            <ul>
                <li><?= $lp["deskripsi"]; ?></li>
            </ul>
            <br>
            <br>
            <h3><?= $lp["harga"]; ?></h3>
        </div>
        <button id="back"><a href="../index.php"><span>BACK</span></a></button>
    </div>
</body>

</html>