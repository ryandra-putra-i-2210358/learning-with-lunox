<?php

    function animateViner($nama){
        $angka1 = 3;
        $angka1 += $nama;
        $angka2 = 4;

        $total = $angka1 + $angka2;

        if($total % 2 == 0){
            for($i = 0; $i < 3; $i++){
                echo " " . "<h1>Genap</h1>";
                echo date('l'." ".'d-M-y', strtotime('18 jan 2003'));
            }
        }elseif($total % 2 == 1) {
            for($i = 0; $i < 3; $i++){
                echo " " . "<h1>Ganjil</h1>";
                // echo date('d-M-y');
                echo date('l'." ".'d-M-y', strtotime('4 sep 2003'));
            }
        }else {
            echo "Undifined";
        }

        return $total;

    }
    $hasil = animateViner(2);
    $arr1 = ["kucing", 21, true, $hasil];
    echo $arr1[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!-- gak boleh di atas php -->
    <h2>ddddslds</h2>
    <h2 class="test"><?php animateViner(1)?></h2>
    
    
    <script src="script.js"></script>    
    
</body>
</html>