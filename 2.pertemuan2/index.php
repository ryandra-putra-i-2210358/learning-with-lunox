<?php
    // $haii = 'hai';
    // echo $haii; // atau gini kometarnya

   /* echo "haii" */ // bisa kaya gini komentarnya

    // pertemuan 2 - PHP DASAR

    // Strandar Output =  untuk mencetak sesuatu ke layar
    // echo atau print
    // print_r untuk array

    // var_dump melihat isi variabel console di web log lah ibaratnya kalau js

    echo "Ryanox"; // boleh banget
    print "Ryanox"; // boleh kaya gini
    print_r("Ryanox"); // untuk array
    var_dump("Ryanox"); // memberikan seluruh informasi varibel atau isi output untuk mengecek type data, ukuranya apa

    echo 1; //output 1
    echo true; // output 1
    echo false; // output kosong
    // kalau string ada kutip ' mening string nya di bungkus ""
    
    // Penulisan  sintaks php
    // 1. PHP di dalam html
    // 2. HTML di dalam PHP

    // variabel dan tipe data
    // varibel 
    // variabel gak boleh di awali dengan angka, tapi boleh mengandung angka


    $nama = "Haloo";
    $namaLove = 'Ryanox';
    // rekoemdasi mening pakai " " untuk intepolasi

    $nama1 = "Ryanox";
    echo "Halo nama saya adlah $nama1 ";
    echo 'halo nama saya adalah $nama1'; // tuh aneh kan mening pakai "" untuk memmangil outputnya variabel


    // operator
    // arit matika  + - * / %;
    echo 1 + 1; // 2
    
    $x = 20;
    $y = 10;
    echo $x + $y; // 30
    
    // Perbandingan
    // > < >= , <=, == ,!=// hnaya mengecek outputnya bukan type datanya
    // var_dump(2 < 3); // true
    // var_dump(1 == "1") // true int dengan string ngak mandang type data

    // kalau mau mengecek type data pakai 
    //  ===, !==
    // var_dump(1 === "1"); // false karena memandang type data int dengan string beda

    // Logika
    // && , || , !
    $nilai1 = 10;
    var_dump($nilai1 < 15 && $nilai1 % 2 == 0 ); // true  karena kodinsi nya harus bener semua jadi true 
    // keculi && ada yang gak bener 1 saja maka nilai nya // false
    // kalau \\ or
    // meskipun kodisi dari salah satu salah satu lagi bner maka tetep true
    // dan jika kodisi nya salah smua maka false

    $nilai2 = 30;
    var_dump($nilai2 < 15 || $nilai2 % 2 == 1 ); //false karena salah semua
    // kecuali
    var_dump($nilai2 > 15 || $nilai2 % 2 == 1); // true karena kodisi awal bener meskipun kodisi ke 2 salah


    // penganbung string / concatenator / concat
    // .

    $namadepan = "Ryandra";
    $namabelakang = "Lunox";

    echo $namadepan ." ".$namabelakang;


    // Assignment
    // =, +=, -=, /=, %=, .=,
    // $angka1 = 1;
    // $angka1 += 2;
    // echo $angka1;

    $namaTest = "Ryandra";
    $namaTest .= " Love ";
    $namaTest .= "Lunox";
    echo $namaTest;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- bisa kaya gini html ada php -->
    <?php $hai = "Ryaaanox";?>
    <h1>Halo SELAMAT DATANG <?php echo $hai; ?> </h1>
    <p><?php echo "ini adalah paragraft "?></p>


   <!-- sekarang didalam php ada html -->
    <?php 

        $varibel1 = "<h1>Ryanox</h1>";

        echo "<h1>Haiii</h1>";
        echo $varibel1;
        echo $nama;
    
    ?>

    <!-- varibael type data -->
    <h1>haloo <?php echo $namaLove; ?></h1>


</body>
</html>