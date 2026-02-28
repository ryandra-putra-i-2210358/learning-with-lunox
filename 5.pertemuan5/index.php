<?php
    // array
    // array adalah variabel yang bisa menampung lebih dari 1 nilai
    // varibel yang dapat memiliki banyak nilai
    

    // element pada array boleh memiliki tipe data yang berbeda

    $nama = "Ryandra";
    $hari1 = "Senin";
    // bisa ketimpan kalau varibel nya sama
    $hari2 = "Selasa";


    // membuat array 
    // cara lama
    // nilai yang yang banyak yang di tampung oleh varibel (array) itu element
    // $hari3  = array("Senin", "Selasa", "Rabu");
    $bulan = ["Januari", "Febuari", "Maret"];


    // nilai array (element) boleh beda type
    $arrr1 = [123, "Tulisan", false];


    //echo gak bisa tampilin semua value array;
    // bisa pakai var_dump() / print_r()

    // var_dump($hari3); // lengkap berserta nama type datanya;
    //[0] adalah index yang dari 0 isinya adalah eleement
    // aray aadalah pasangan antara key dan value;
    // key-nya itu adalah index nya yang dimulai dari 0
    // value adalah elmenet dari array atau value aaray (isi array);

    // echo "<br>";
    // print_r($bulan); // hanya ada index dan value;
    // echo"<br>";
    // echo $arrr1[0];

    // echo "<br>";
    // echo $bulan[1];
    // echo "<br>";
    // var_dump($bulan[0]);
    // echo "<br>";
    // print_r($arrr1[1]);
    
    // menambahkan element baru pada array;
    
    var_dump($bulan);
    $bulan[] = "April"; // mengisi array kaya push di javascript
    $bulan[] = "Mei"; // mengisi array kaya push di javascri
    echo "<br>";
    var_dump($bulan);

    
    



























?>
