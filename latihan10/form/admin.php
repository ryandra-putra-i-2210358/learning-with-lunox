<?php 
    session_start();
    $mahasiswas = [
        [
            "Nama" => "Ryandra",
            "Kelas" => "Reguler",
            "Jurusan" => "Ilmu Komputer",
            "Jodoh" => "Lunox",

        ],
        [
            "Nama" => "Lunox",
            "Kelas" => "Reguler",
            "Jurusan" => "Ilmu Komputer",
            "Jodoh" => "Ryandra",

        ],
    ];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>haiii <?= $_SESSION["username"] ?> </h1>
    <?php foreach($mahasiswas as $index => $mhs) :?>
        <ul>
            <a href="details.php?nama=<?= $mhs["Nama"] ?>&kelas=<?= $mhs["Kelas"] ?>&jurusan=<?= $mhs["Jurusan"] ?>&jodoh=<?= $mhs["Jodoh"] ?> ">No.<?= $index + 1?> <?= $mhs["Nama"] ?></a>
        </ul>

    <?php endforeach; ?>
    <a href="login.php">Logout</a>

</body>
</html>