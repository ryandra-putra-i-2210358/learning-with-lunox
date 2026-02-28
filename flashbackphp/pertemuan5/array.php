
<?php
    //array

    //memebuat array

    $hari = array("Senin", "Selasa", "Rabu");

    // cara baru
    // element araray typenya boleh beda
    // key = index
    // element = value

    $bulan = ["Januari", "Febuari", "Maret"];
    $arr1 = [123, "Tulisan", false];

    // menampilkan array1
    //var_dump() / print_r()

    var_dump($arr1);
    echo "<br>";
    print_r($bulan);
    
    echo "<br>";
    // menampilkan 1 elemaent pada array
    
    echo $arr1[0];
    echo "<br>";
    echo $bulan[1];
    echo "<br>";
    
    // menambahkan element pada array
    
    var_dump($hari);
    $hari[] = "Kamis"; // menambhkan element pada akhir element di variabel $hari
    $hari[] = "Jum'at";
    echo "<br>";
    var_dump($hari);


?>


















