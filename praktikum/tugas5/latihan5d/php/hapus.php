<!-- 
Nama : Gilang Dwi Adira Karsoma
NRP : 203040014
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php 
require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'admin.php';
        </script>";
} else {
    echo "<script>
            alert('Data Gagal Dihapus!');
            document.location.href = 'admin.php';
        </script>";
}
?>