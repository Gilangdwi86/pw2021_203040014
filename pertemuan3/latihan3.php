<?php
/*
Gilang Dwi Adira Karsoma
203040014
https://github.com/Gilangdwi86/pw2021_203040014
pertemuan 3 - 18 Februari 2021
Mempelajari mengenai pengulangan dan pengondisian (for,while dan foreach) ( Struktur kendali PHP )
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: salmon;
        }
    </style>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
            <?php if( $i % 2 == 0 ) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor; ?>
                </tr>
        <?php endfor; ?>
    </table>


</body>
</html>