<?php 

    for($i = 1; $i <= 4; $i++){
        echo "$i. Hellow World <br>";
    }

    echo "<br>";
    
    $a = 2;
    do {
        echo "$a. Hellow World <br>";
        $a++;
    }while($a < 0);
    
    echo "<br>";
    $j = 1;
    while($j <= 3){
        echo "$j. Hello world <br>";
    $j++;
    }

    $ab = 50;

    if (is_numeric($ab)) {
        if ($ab % 2 == 0) {
            echo "Genap";
        } else {
            echo "Ganjil";
        }
    } else {
        echo "Bukan Angka";
    }

    $sapaString = "sakalskla";

    if(is_string($sapaString)){

        $i = 0;
        do {
            echo "Ini String <br>";
        $i++;
        }while($i <= 4);

    }else if(is_numeric($sapaString)){
        if($sapaString % 2 == 0){
            echo "Genap";
        }else{
            echo "Ganjil";
        }
    }else{
        echo "None";
    }

    $angka = 30;
    $angka += 40;
    if(is_numeric($angka) && $angka > 100){
        echo "ANGKA lebih besar = $angka";
    }else if(is_string($angka)){
        echo "BUKAN";
    }else{
        echo "None";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<script src="../pertemuan3/function.js"></script>
</body>
</html>



