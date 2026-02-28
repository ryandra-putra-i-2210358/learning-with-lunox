<?php
session_start();

$mahasiswas = [
    [
        "Nama" => "Ryandra",
        "Kelas" =>"Reguler",
        "JenisKelamin" => "Laki Laki",
        "Jurusan" => "Ilmu Komputer",
    ],
    [
        "Nama" => "Lunox",
        "Kelas" =>"Reguler",
        "JenisKelamin" => "Perempuan",
        "Jurusan" => "Ilmu Komputer",
    ],
];

$buahs = [
    [
        "Nama" => "Anggur",
        "Harga" => "20.000",
        "Asli" => "Impor",
    ],
    [
        "Nama" => "Strobery",
        "Harga" => "35.000",
        "Asli" => "Lokal",
    ],
    [
        "Nama" => "Jeruk",
        "Harga" => "25.000",
        "Asli" => "Impor",
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
    <h1>haaiiii adminn <?= $_SESSION["username"]; ?></h1>
    
    <?php foreach($mahasiswas as $mahasiswa) :?>
        <li>
            <!-- link sambil bawa data ke detail.php -->
            <a href="detail.php?nama=<?= $mahasiswa["Nama"];?>&kelas=<?= $mahasiswa["Kelas"];?>&jurusan=<?=$mahasiswa["Jurusan"]; ?>&jeniskelamin=<?=$mahasiswa["JenisKelamin"] ?>"><?= $mahasiswa["Nama"] ?></a>
        </li>
        
    <?php endforeach; ?>
    <br>
    <br>

    <h1>Data Buah</h1>
    <?php foreach($buahs as $buah) : ?>


    <?php endforeach; ?>









    <a href="index.php">Logout</a>
</body>
</html>