<?php 

    $fnama = "Ryandra"; 
    $fnama2 = "Lunox";
    for($j = 0; $j < 3; $j++){
        echo $fnama;
    }

    $fnama = "Ryandra"; 
    $loop = 0;
    while($loop <=  3){
        echo "$loop "+ 1 . " $fnama <br>";
    $loop++;
    }

    for($i = 0; $i < 3; $i++){
        echo "$fnama <br>";
    }


    function namaAman (){
        global $fnama2;
        $nama = "Ryandra";

        echo $nama . $fnama2;

    }
    namaAman(); 

    function isGanjil($angka){
        return $angka % 2 === 1;
    } 
    if(isGanjil(1)){
        echo "Ganjil";
    }else{
        echo "Genap";
    }

    function isAngka($angka){
        if($angka % 2 === 1){
            echo "Ganjil";
        }elseif($angka % 2 === 0){
            echo "Genap";
        }else {
            echo "Tidak Terdifinisi";
        }

        return $angka;
    }
    isAngka(3);


    function typeValue($element){
        if(is_integer($element)){
            echo "Ini Integer";
        }else{
            echo "Ini bukan INTEGER";
        }
        return $element;
    }

    typeValue(2);

    function typeValueElement($type){
        if(is_integer($type)){
            echo "Ini Integer";
        }elseif(is_string($type)){
            echo "Ini String";
        }elseif(is_bool($type)){
            echo "Ini Boolean";
        }else{
            echo "Type Tidak valid";
        }
    }

    typeValueElement(3);


    function yieldText($nama, $angka){
        $a = $nama;
        $b = $angka;
        for($i = 0; $i < 3; $i++){
            if(is_integer($b) && is_string($a)){
                echo "<br>true<br>";
            }else if(!is_integer($b) && !is_string($a)){
                echo "false<br>";
            }else{
                echo "Tidak valid<br>";
            }
        }
    }
    yieldText(true,"ss");

    $angkaGlobal1 = 2;
    $angkaGlobal2 = 4;
    function edit($angka1, $angka2){
        global $angkaGlobal1;
        global $angkaGlobal2;

        $generate1 = $angka1 += $angkaGlobal1;
        $generate2 = $angka2 += $angkaGlobal2;

        $total = $generate1 + $generate2;

        if(is_integer($total)){
            for($i = 0; $i < 2; $i++){
                echo "true , hasil total = " . "  ". $total;
            }
        }

        return $total;
        
    }
    edit(3,2);

    function salam($nama = "Admin"){
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("H:i:s");
        return "sekarang jam $waktu, $nama";
    }  
    salam("Ryanox");
    
    function finTelectric($volt = "User"){
        date_default_timezone_set('Asia/Jakarta');
        $date = date("d-M-Y");
        return "Skarang tanggal $date, $volt";


    }

    function tokenLoop($angka3){
        for($i = 0; $i < $angka3; $i++){
            echo "<div>test</div>";
        }
    }
    tokenLoop(3); // Output: 3 div
    
    $nama3 = 'hai';
    function testIsset($nama3){
        global $nama3;
        
        $hasil = isset($nama3);
        echo $hasil;
    
        if($hasil == 1){
            echo "true";
        }else{
            echo "false";
        }
        return $hasil;
    }
    testIsset("gagaga");

    $jam = date("H:i:s");
    echo "sekarang jam" . $jam . "<br>";

    $today = date("d-Y-m". "<br>");
    echo $today;

    $testEmpty = 3;

    $hasil5 = empty($testEmpty);
    echo "$hasil5";

    $buah = ["jeruk", "apel", "mangga"];
    $hasill = $buah[2];
    if(empty($hasill)){
        // kalau kosong maka true kalau ada maka false;
        echo "true";
    }else{
        echo "false";
    }

    function arrayTest($array1, $array2, $array3){
        return  [$array1, $array2, $array3];
    }
    $hasilArray = arrayTest('kucing', 'kelinci', 'mamot');
    print_r($hasilArray);
    
    function arrayTestDua($array1, $array2, $array3){
        echo "$array1, $array2, $array3";
    }

    arrayTestDua('kucing', 'kelinci', 'mamot');
    echo ("<br>");

    function arrayValue($array1, $array2){
        $value1 = $array1 += 3;
        $value2 = $array2 += 4;

        $total1 = $value1 + $value2;
        $total2 = $value1 - $value2;
        $total3 = $value1 * $value2;
        $total4 = $value1 / $value2;
        echo "hasil tambah = $total1, hasil kurang = $total2, hasil kali = $total3, hasil bagi = $total4 ";
        echo "<br>";
        return [$total1, $total2, $total3, $total4];
    }
    arrayValue(1,1);
    $array = arrayValue(2, 4);
    print_r($array);

    echo "<br>";

    $array1 = [2,3,5,6,1];
    for($i = 0; $i < count($array1); $i++){
        echo "index ke $i isinya = $array1[$i] <br>";
    }
    echo "<br>";
    $arrayForeach = [3,2,1,4,5];
    foreach($arrayForeach as $index => $element){
        echo "index ke- $index isinya $element <br>";
    }

    $hewan = ['Kucing', 'Anjing', 'Kelinci'];
    foreach($hewan as $hwn){
        echo "$hwn , ";
    }





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
    <h1><?= salam("ryanox")?></h1>
    <p><?= finTelectric("lundra")?></p>

    <?php tokenLoop(3) ?>
</body>
</html>