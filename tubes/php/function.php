<?php
// functions untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "pw_tubes_203040014") or die("Database salah!");

    return $conn;
}

// function untuk melakukan query ke database
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

//function untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
    $tipe = htmlspecialchars($data['tipe']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO sepatu
                VALUES
                ('','$nama','$deskripsi','$harga','$tipe','$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//function untuk menghapuskan data didalam database
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM sepatu WHERE id = $id");

    return mysqli_affected_rows($conn);
}

//function untuk mengubah data didalam database
function ubah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
    $tipe = htmlspecialchars($data['tipe']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "UPDATE sepatu
            SET
            nama = '$nama',
            deskripsi = '$deskripsi',
            harga = '$harga',
            tipe = '$tipe'
            WHERE gambar = '$gambar'
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //CEK USERNAME SUDAH ADA ATAU BELUM
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert(Username Sudah Digunakan!);
            </script>";
        return false;
    }

    //ENKRIPSI PASSWORD
    $password = password_hash($password, PASSWORD_DEFAULT);

    //TAMBAH USER BARU
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
