<?php

    $mahasiswa = [
        ["I.2210358", "Ryandraa",  "email@gmail.com", "Teknik Informatika"],
        ["Lunox", "I.2210358", "email@gmail.com", "Teknik Informatika"],
    ];

    //ARRAY ASSOSIATIVE
    // definisinya sama dengan  seperti array numerik , kecuali
    // key nya adalah string yang kita buat sendiri

    $mahasiswass = [

        [
            "Gambar" => "Lunox1.webp",
            "Jurusan" => "Teknik Informatika",
            "Nama" => "Ryandra",
            "Nim" => "I.2210358",
            "Email" => "email@gmail.com",
            "Nilai" => [90, 90, 80],
        ],
        [
            "Gambar" => "Lunox2.webp",
            "Nama" => "Lunox",
            "Nim" => "I.2210358",
            "Email" => "email@gmail.com",
            "Jurusan" => "Teknik Informatika",
            "Nilai" => [90, 85, 95],
        ],

    ];
    // array terluarnya atau array prtama adalah array numerik yang indexnya angka [0]"int"
    // array yang kedua atau paling dalamnya itu array assosiantive  yang indexnya adalah string["nama"];
    // jadi gini kalau mau nampilin data satu persatu ya misal inimah

    echo $mahasiswass[1]["Nama"];
    echo $mahasiswass[0]["Nama"];
    echo $mahasiswass[1]["Nilai"][1]; // bisa gini loh
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <!-- kenapa masih error karena ini masih cetak varibel array nyaa -->
    <!-- kan ane udah bilang ini array di dalam array -->
    <!-- kalau mau nampilin data pas array teralhir kasih indexnya misal $a[0] -->
    <!-- tapi pakai foreach -->

    <h1>daftar mahasiswa pada array numerik</h1>
    <!-- kadang suka aneh nim malah isi nya nama dan email malah isi nya jurusan -->
     <!-- sebenarnya gak error ini karena array numerik -->
      <!-- mencgah agar supaya tidak begitu mening pakai array assosiative yang indexnya adalah string -->
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama :<?= $mhs[0] ?></li>
            <li>Nim : <?= $mhs[1] ?></li>
            <li>email : <?= $mhs[2] ?></li>
            <li>Jurusan : <?= $mhs[3] ?></li>
            
        </ul>
    <?php endforeach; ?>

    <h1>daftar mahasiswa pada array assosiative</h1>
    
    <?php foreach($mahasiswass as $mahasiswas) : ?>
        <ul>
            <li>
                <img src="image/<?= $mahasiswas["Gambar"]?>" alt="" class="gambar">
            </li>
            <li>Nama : <?= $mahasiswas["Nama"] ?></li>
            <li>Nim : <?= $mahasiswas["Nim"] ?></li>
            <li>Email : <?= $mahasiswas["Email"] ?></li>
            <li>Nama : <?= $mahasiswas["Jurusan"] ?></li>
            <?php foreach ($mahasiswas["Nilai"] as $nilai ): ?>
                <li>Nilai:  <?= $nilai ?></li>
            <?php endforeach; ?>
            <!-- jadi gak amslaha bila data nya ngacak juga bisa di handle di key nya  -->
             <!-- kecuali numerik harus suai urutanya -->
            
            
        </ul>
    <?php endforeach; ?>







</body>
</html>






