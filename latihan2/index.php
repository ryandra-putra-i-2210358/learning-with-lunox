<?php
    echo "haii";
    $masukanNomorAnda = 3;
    if($masukanNomorAnda % 2 == 0 && $masukanNomorAnda < 10){
        for($i = 0; $i <= 3; $i++){
            echo "<br>Nomer Genap dan kurang dari 10 </br>";
        }
    }else if($masukanNomorAnda % 2 == 1 && $masukanNomorAnda < 10){
        for($i = 0; $i <= 3; $i++){
            echo "<br>Nomer Ganjil dan kurang dari 10</br>";
        }
    }else{
        echo "Bukan Nomer ini mah";
    }
    function cekTypeVaribel ($nilai){
        if(!is_numeric($nilai)){
            echo "<br> ini bukan number";
        }else{
            echo "<br> ini adalah number";
        }
    }
    cekTypeVaribel($masukanNomorAnda);

    $arayy = [2,4,12,4,5,];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HAII</title>
</head>
<body>
    <h1><?= cekTypeVaribel(3) ?></h1>
    <p><?= $arayy[0] + $arayy[4]?></p>

<script src="script.js"></script>
</body>
</html>