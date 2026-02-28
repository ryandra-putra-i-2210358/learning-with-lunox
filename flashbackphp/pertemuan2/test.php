<?php

    $nomer = 3;
    $nama = "Ryandra";
    echo $nama . " " . $nomer;

    $nomer += 3;
    $nomer2 = 12;
    $total = $nomer + $nomer2;
    echo $total;

    $test = ($nomer === $nomer2);
    if($test == 1){
        echo "True";
    }else{
        echo "False";
    }
    echo "Hasil Penjmlahan $nomer + $nomer2 = $total";

    var_dump($nama);
    var_dump($nomer);

    $main = $nomer * $nomer2 . $nama;
    var_dump($main);
    $esclipe = $nama . " " . $total . "Ryandra";

    var_dump($esclipe);
    $date = date('d-m-y');
    echo $date;

    $nama2 = [
        "Nama" => "Ryandra",
        "Kelas" => "Reguler",
        "Umur" => 18,
    ];

    var_dump($nama2);


    

?>