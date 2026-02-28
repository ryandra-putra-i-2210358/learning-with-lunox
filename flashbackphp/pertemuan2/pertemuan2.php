<?php 

    // Pertemuan 2 - PHP Dasar
    
    
    // standar Output
    
    //echo, print = sama
    //print_r = sama
    //var_dump = ngasih info type dan berapa huruf
    
    $nomer = 312;
    var_dump($nomer);





    // var_dump('ryandra');
    // echo true; = 1
    // echo false; = kosong
    
    // echo true;
    

    
    // penulisan sintaks php
    // 1. PHP di dalam HTML
    // 2. HTML di dalamam PHP
    
    // Varibael dan Tipe Data
    
    //Variabel
    // Tidak boleh di awaki dengan angka, tapi boleh mengandung angka
    // $nama2 = "Ryandra Putra";
    // echo "Heloo nama $nama2";

    // $nama1 = "Ryandra Putra";
    // echo "Helo $nama1";
    
    
    //Operator
    // aritmatika
    // + - * / %
    
    
    // $x = 10;
    // $y = 4;
    // echo $x % $y;
    
    
    $x = 392;
    $y = 421 + $nomer;
    echo $y - $x;






    // pengabung string  / concatenation / concat 
    
    // .
    
    // $nama_depan = "Ryandra";
    // $nama_belakang = "Putra";
    // echo $nama_depan . " " . $nama_belakang;
    
    $nama = "Ryandra Putra";
    $kelas = "Reguler";
    $angka = $y - $x;
    echo "Halo Nama saya $nama saya kelas $kelas di nomer $angka";







    
    //Assignment
    // =, +=, -=, /=, %=, .=,
    
    
    // $x = 1;
    // $x += 5;
    // echo $x;

    $z = 10;
    $z += $angka;
    echo " ". "$z" . "Angka $kelas";

    echo "<br>";
    echo "<br>";
    
    // $nama = "Ryandra";
    // $nama .= " ";
    // $nama .= "Putra";
    // echo $nama;


    //Perbandingan ini tidak menegcek type data nya

    // < , > , <=, >=, ==, !=
    // var_dump(1 < 5);

    // var_dump(1 == "1");


    //IDENTITAS

    // ===, !==
 
    // Logika
    // && kodinsi nya harus bener semua
    // || minimal ada yang bener kodisinya 1
    //!

    $x = 10;
    var_dump($x < 1 || $x % 2 == 0);

    $totalKeseluruhan = $angka;
    $namay = ($totalKeseluruhan < 1000 && $totalKeseluruhan % 2 == 0); 
    echo $namay;

    var_dump('2' !== 2);

    $angka3 = 42;
    $angka3 += 80;
    $angka4 = 32;
    $nama1 = "Kucing";
    $validate = $angka3 !== $angka4;

    //jadi gak hanya memeriksa 
    //type data tapi juga memerika siapa yang paling besar nilainya jika int

    if($validate == 1){
        echo "True";
    }else {
        echo "False";
    }

    $totalString = 1 . "2" !== 2;
    echo $totalString;
    $namk = 3; 
    $namal = 5;

    $total2 = $namk + $namal;
    if($total2 % 2 === 0){
        echo "genap";
    }else {
        echo "ganjil";
    }

    $namaPanjang = "Ryandra Putra";
    $namaPendek = "Ryandra Putra";

    var_dump($namaPanjang);
    var_dump($namaPendek);

    $namaInternal = $namaPanjang . " " . $nama;

    echo $namaInternal . "3";

    $validate2 = $namaInternal === $namaPendek;

    if($validate2 == 1){
        echo "True";
    }else{
        echo "False";
    }

    $nomer1 = 50;
    $nomer2 = 34;
    $nomer2 += 17 + $nomer;

    $totalSemua = $nomer1 > $nomer2;
    echo $totalSemua;





    
?>






















