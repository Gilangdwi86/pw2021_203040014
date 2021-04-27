<!-- 
Nama : Gilang Dwi Adira Karsoma
NRP : 203040014
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040014");

    return $conn;
}

function query($sql) 
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
    $type = htmlspecialchars($data['type']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO laptop1
                    VALUES
                    ('', '$nama', '$deskripsi', '$harga', '$type', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) 
{
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM laptop1 WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
    $type = htmlspecialchars($data['type']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "UPDATE laptop1 
                    SET 
                    nama='$nama',
                    deskripsi='$deskripsi',
                    harga='$harga',
                    type='$type',
                    gambar='$gambar'                    
                    WHERE id = $id
                    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>