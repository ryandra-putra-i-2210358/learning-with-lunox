<?php 
// DBMS Adalah database management system softwarenya lah ibarat
// contoh : mysql, postgresql, monggodb, oracle, sql server

// sedangkan database adalah data data yang ada di software dbms itu sendiiri
// jenis dbms
// relational dbms
// hierarchical dbms
// network dbms
// nosql dbms = monggo db tidak menguankan mysql

// nama sql yang kita pelajari realtional dbms

// rdbms

// tabel
// yang ke horizontal di sebut record
// yang ke verical di sebut columns di sebut field


// tiap tiap field harus memiliki aturan type datanya apa fieldnya apa

// PRIMARY KEY

// SEBUAH DATA YANG MEMPRESENTASIKAN SATU BARIS RECORD SECARA UNIQUE
// MISALNYA TIDAK ADA YANG BOLEH SAMA DATANYA KAYA NIM EMAIL
// itu disebut unique -> gak boleh sama

//  kalau ada tada nim saran pakai operasi int matematika
// kareena primary key yang unique gak boleh sama
// seiring bertambah data maka nambah

// di dalam data abse ada increment namabh 1 nambah 1

// ISTILAH

//  Field / columns / vertikal (tabel)
//  Row / record / baris / horizontal (tabel)

//  Key 
//  1. primary key di setiap tabel harus ada
    // Merupakan kolom (atau kombinasi kolom) dalam suatu tabel yang secara unik mengidentifikasi setiap baris (record). Tidak boleh ada duplikasi dan nilainya tidak boleh null.
//  2.foreign key penghubung anatar tabel
    // Merupakan kolom yang digunakan untuk membuat hubungan antara dua tabel. Nilainya mengacu pada primary key di tabel lain, dan berfungsi menjaga integritas data antar tabel.


// auto increment fitur dabase yaitu ktika ada data yang masuk terus bertambah nilai nya seiring penambahan  data
// jadi 1 + 2 + 3

// relationship yaitu hubungan antar tabel

// normalization atau nomralisasi sebuah proses memebuat tabel suapaya normal


// MYSQL
$namas = [
    [
        "Ryandra", 
        '22', 
        'Ilmu Komputer',
        "Fisika" => 80,
        "Matematika" =>[86, 88, 93],
        "Biology" => 90,
        "Kimia" => 81,
    ],
    [
        "Lunox", 
        "22", 
        "Ilmu Komputer",
        "Fisika" => 90,
        "Matematika" => [88, 81, 93],
        "Biology" => 81,
        "Kimia" => 95,
    ],
    

];

$mahasiswas = [
    [
        "Ryandra",
        "email@gmail.com",
        "i.2210358",
        "22",
        

    ],
    [
        "Lunox",
        "email28@gmail.com",
        "i.226818",
        "22",
    ],

];

$buahs  = [
    [
        "Nama" => "Anggur",
        "Rasa" => "asam",
        "Harga" => "Rp. 40000",
        "Asli" => "Import",

    ],
    [
        "Nama" => "Jeruk",
        "Rasa" => "Manis",
        "Harga" => "Rp. 50000",
        "Asli" => "Eksport",

    ],
];




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <?php foreach($namas as $nama) : ?>
        <ul>
            <li>Nama : <?= $nama[0] ?></li>
            <li>Umur : <?= $nama[1] ?></li>
            <li>Jurusan : <?= $nama[2] ?></li>
            
            <li>Nilai Fisika: <?= $nama["Fisika"] ?></li>
            <?php foreach($nama["Matematika"] as $index => $mtk) : ?>
                <li>Nilai Matematika <?= $index + 1 ?> = <?= $mtk ?> </li>
            <?php endforeach; ?>

            <li>Nilai Biology : <?= $nama["Biology"] ?></li>
            <li>Nilai Kimia : <?= $nama["Kimia"] ?></li>
        </ul>

    <?php endforeach; ?>

    <h1>Daftar Mahasiswa </h1>
    <?php foreach($mahasiswas as $index => $mhs) : ?>
        <ul>
            <li>No : <?= $index + 1 ?> untuk <?= $mhs[0] ?></li>
            <li>Email : <?= $mhs[1] ?></li>
            <li>Nim : <?= $mhs[2] ?></li>
            <li>Umur : <?= $mhs[3] ?></li>
        </ul>
    <?php endforeach; ?>

    <h1>Daftar Buah</h1>
    
    <?php foreach($buahs as $index => $buah) : ?>
        <ul>
            <li> No.<?= $index + 1?> Nama : <?= $buah["Nama"]?> </li>
            <li> Rasa : <?= $buah["Rasa"]?> </li>
            <li> Harga: <?= $buah["Harga"]?> </li>
            <li> Ekport/Import : <?= $buah["Asli"]?> </li>
        </ul>

    <?php endforeach; ?>
    
</body>
</html>