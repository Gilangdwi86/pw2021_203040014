<?php
/*
Gilang Dwi Adira Karsoma
203040014
https://github.com/Gilangdwi86/pw2021_203040014
Pertemuan 6 - 9 Maret 2021
Associative Array
*/
?>

<?php
// $mahasiswa = [
//     ["Gilang","203040014","Teknik Informatika","203040014@mail.unpas.ac.id"],
//     ["Dwi","203010014","Fakultas Kedokteran","Dwi@gmail.com"],
//     ["Adira","203020014","Ilmu Komunikasi","adira@gmail.com"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
        [
            "nama" => "Gilang",
            "nrp"  => "203040014",
            "email" => "203040014@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "gilang.jpg"
        ],
        [
            "nama" => "Dwi",
            "nrp"  => "203010014",
            "email" => "Dwi@gmail.com",
            "jurusan" => "Fakultas Kedokteran",
            "gambar" => "dwi.jpg"
        ],
        [
            "nama" => "Adira",
            "nrp"  => "203020014",
            "email" => "adira@gmail.com",
            "jurusan" => "Ilmu Komunikasi",
            "gambar" => "adira.jpg"
        ]
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
    <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
    </li>
    <li>Nama    : <?= $mhs["nama"]; ?></li>
    <li>Nrp     : <?= $mhs["nrp"]; ?></li>
    <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    <li>Email   : <?= $mhs["email"]; ?></li>

</ul>
<?php endforeach; ?>
</body>
</html>