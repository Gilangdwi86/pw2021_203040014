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
// date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// time
// UNIX Timestamp / EPOCH time
// Detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("d M Y", time()-60*60*24*100);

// mktime
// Membuat sendiri detik
// mktime(0,0,0,0,0,0)
// Jam, Menit, Detik, Bulan, Tanggal, Tahun
// echo date("l", mktime(0,0,0,7,8,2002));

// strtotime
echo date("l", strtotime("8 jul 2002"));
?>