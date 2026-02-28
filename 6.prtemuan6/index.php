<?php
    //ARRAY
    // $hari = array("Senin", "Selasa", "Rabu");
    // $bulan = ["Januari", "Febuari", "Maret"];
    // $arr = [100, "text", true];
    //MENAMPILKAN ARRAY
    // melihat isi array khusus untuk developer
    // var_dump($arr); // lenkap dengan jumlah kata2
    // echo "<br>";
    // print_r($bulan);

    // menanmipilkan 1 element array

    // echo $arr[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <?php
        $angka = [
            [1,2,3],
            [4,5,6],
            [7,8,9],
        ]; 
    ?>
    
    

    <!--kalau masih $an doang itu masih tempat array nya  -->
    <!-- nah suapaya element atau valuenya maka harus $an[0] dengan index di dalam $an itu sendiri -->
    <?php foreach($angka as $an) : ?>
        <!-- atau bisa gini kan di dalam array ada array lagi bisa gini -->
        <!-- foreach nya ada dua jadi buka array 1 lalu buka array 2 lalau ketemu elementnya atau datanya -->
        <?php foreach($an as $a) : ?>
            <div class="kotak"><?= $a ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
        
    <?php endforeach; ?>

    

<script src="scripts.js"></script>

</body>
</html>