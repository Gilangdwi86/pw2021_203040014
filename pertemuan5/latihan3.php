<?php
/*
Gilang Dwi Adira Karsoma
203040014
https://github.com/Gilangdwi86/pw2021_203040014
pertemuan 5 - 2 Maret 2021
Mempelajari mengenai sintaks php
Array
*/
?>

<?php
$mahasiswa = [
    ["Gilang","203040014","Teknik Informatika","dwigilang21@gmail.com"],
    ["Dwi","203040014","Teknik Mesin","203040014@mail.unpas.ac.id"],
    ["Adira","203040014","Teknik Pangan","203040014@mail.unpas.ac.id"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>


<?php foreach ($mahasiswa as $mhs) : ?>
<ul>
    <li>Nama    : <?= $mhs[0]; ?></li>
    <li>Nrp     : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email   : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>