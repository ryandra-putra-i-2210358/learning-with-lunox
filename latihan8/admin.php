<?php
    $mahasiswas = [
        [
            "Nama" => "Ryandra",
            "Kelas" => "Malam",
            "Email" => "email@gmail.com",
            "Jenis Kelamin" => "Laki Laki",
        ],
        [
            "Nama" => "Lunox",
            "Kelas" => "Reguler",
            "Email" => "email@gmail.com",
            "Jenis Kelamin" => "Perempuan",
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
    <h1>haii admin</h1>
    <h2>Daftar Mahasiswa </h2>
    <?php foreach($mahasiswas as $mahasiswa) : ?>
        <li>
            <a href="detail.php?nama=<?= $mahasiswa["Nama"] ?>&kelas=<?= $mahasiswa["Kelas"]?>&email=<?= $mahasiswa["Email"]; ?>&kelamin=<?= $mahasiswa["Jenis Kelamin"] ?>  "><?= $mahasiswa["Nama"]; ?></a>

        </li>
    <?php endforeach; ?>

    <a href="index.php">Logout</a>



</body>
</html>