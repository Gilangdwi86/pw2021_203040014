<?php
/*
Gilang Dwi Adira Karsoma
203040014
https://github.com/Gilangdwi86/pw2021_203040014
Pertemuan 10 - 29 April 2021
Koneksi DB & Insert Data
*/
?>

<?php
//koneksi ke DB & pilih database
$conn = mysqli_connect('localhost', 'root', '', 'pw_203040014');

//query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah data dalam array
// $row = mysqli_fetch_row($result); array numerik
// $row = mysqli_fetch_assoc($result); //array associative
// $row = mysqli_fetch_array($result); //keduanya

while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

$mahasiswa = $rows;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h3>Daftar Mahasiswa</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>

            <tr>
                <td><?= $i; ?></td>

                <td><img src="<?= $row["gambar"]; ?>" width="50"></td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?> " onclick="return confirm('Yakin?');">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>

        <?php endforeach; ?>
    </table>
</body>

</html>