<?php
/*
Gilang Dwi Adira Karsoma
203040014
https://github.com/Gilangdwi86/pw2021_203040014
pertemuan 4 - 25 Februari 2021
Mempelajari mengenai sintaks php
Function
time()
date()
mktime()
strtotime()
*/
?>

<?php
function salam($waktu = "Datang", $nama = "Admin!") {
    return "Selamat $waktu, $nama!";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Gilang"); ?></h1>
</body>
</html>