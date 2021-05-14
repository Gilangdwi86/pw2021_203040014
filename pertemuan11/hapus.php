<?php
/*
Gilang Dwi Adira Karsoma
203040014
https://github.com/Gilangdwi86/pw2021_203040014
Pertemuan 11 - 3 Mei 2021
Delete,Update,Searching Data
*/
?>

<?php
require 'function.php';
//mengambil id dari url

$id = $_GET['id'];
if (hapus($id) > 0) {
    echo "
        <script>
            alert('data berhasil di hapus')
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data berhasil di hapus')
            document.location.href = 'index.php';
        </script>
        ";
}
