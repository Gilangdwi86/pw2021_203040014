<?php
/* 
Gilang Dwi Adira Karsoma
203040014
https://github.com/Gilangdwi86/pw2021_203040014
Pertemuan 12 - 6 Mei 2021
Login & Registrasi
*/
?>

<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
