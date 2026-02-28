<?php 

    // tidak pakai print_r dan var_dump
    // menampilkan array dengan cara yang baik dan bnar
    
    //Untuk menampilkan element ke user butuh pengulanggan

    // pengulanagan pada array
    // for //foreach = untuk pengulangan array

    $angka = [3,2,15,20,11,77,4,6,1,3];





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
    <!-- kaya length di php -->
    <?php  for($i = 0; $i < count($angka); $i++) :?> 
        <!-- panggil index nya -->
        <div class="kotak"><?= $angka[$i] ?></div>
    <?php endfor ?>

    
    <div class="clear"></div>
    <!-- foreach adalah artinya untuk setiap  -->
    <!-- untuk setiap $angka(array) element lankuakan sesuatu -->
    <!-- untuk setiap element pada array nya $angka  -->
    <!-- $angka adalah arraynya -->
    <!-- untuk melakukan looping tiap2 element $angka -->
    <!-- kita simpan dulu element yang di looping nya ke variabel baru yati as $a -->
    <!-- jadi loop ambil simpan ke variabel baru lalu tambilkan  -->
    
    
    
    <!-- $angka as $a artinya: ambil setiap nilai dari $angka dan simpan ke $a satu per satu. -->
    
    
    <?php foreach($angka as $a) {?>
        <div class="satu"><?= $a ?></div>
        <?php } ?>
        
        <!-- "Untuk setiap elemen di array $angka, simpan nilainya ke variabel sementara $a dan jalankan kode di dalamnya." -->
        <!-- Jadi loop-nya akan dijalankan 6 kali (karena isi array-nya ada 6 angka). -->
        
        <!-- cara penulisan yang di sarankan -->

    <div class="clear"></div>

    <?php foreach($angka as $a) : ?>
        <div class="dua"><?= $a; ?></div>

    <?php endforeach; ?>

    






</body>
</html>