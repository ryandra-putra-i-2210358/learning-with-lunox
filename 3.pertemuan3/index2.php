<?php 
    //Perkondisian  /percabangan

    // if else
    // if elseif else
    // ternary
    // switch


    // $x = 20;
    // if($x < 20){
    //     echo "Benar";
    // } else if ($x == 20){
    //     echo "Binggo";
    // }
    // else {
    //     echo "salah";
    // }

    // $x = 21;
    // if($x < 20){
    //     echo "Benar";
    // } else if($x == 20){
    //     echo "sama";
    // } else {
    //     echo "salah";
    // }

    $angkaPertama = 1;
    $angkaKetiga = 3;
    $angkaKelima = 5;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0" class="table1">
    <?php for($i = 1; $i <= 5; $i++) : ?>
        <!-- cek kalau mau ngasih kodisi warna ke tr jgn tr dulu baru ngasih kondisi -->
        <?php if($i % 2 == 1) :?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr> </tr>   
        <?php endif; ?>
        
            <?php for($j = 1; $j <= 5; $j++) : ?>
                <td><?= $i ." , " . $j?></td>

            <?php endfor; ?>
            </tr>

    <?php endfor; ?>
    </table>


    <table border="1" cellpadding="10" cellspacing="0" class="table2">
    <!-- ambil tr nya untuk di for (bungkus oleh if) -->
    <?php for($i = $angkaPertama; $i <= $angkaKelima; $i++) : ?>
        <?php if($i % 2 == 0) : ?>
            <tr class="biru">
        <?php elseif ($i % 2 == 1) :?>
            <tr class="kuning">
        <?php else :?>
            <tr></tr>
        <?php endif; ?>

            <?php for($j = $angkaPertama; $j <=  $angkaKetiga; $j++) : ?>
                <td><?= $i, $j; ?></td>
            <?php endfor; ?>


        </tr>
        
    <?php endfor; ?>
    </table>



<script src="script2.js"></script>
</body>
</html>