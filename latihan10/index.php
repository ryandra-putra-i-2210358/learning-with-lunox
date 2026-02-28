<?php 
    $mahasiswa = [
        [
            "Nama" => "Ryandra",
            "Kelas" => "Reguler",
            "Jurusan" => "Ilmu Komputer",
            "Pacar" => "Lunox"
        ],
        [
            "Nama" => "Lunox",
            "Kelas" => "Reguler",
            "Jurusan" => 'Ilmu Komputer',
            "Pacar" => "Ryandra",
        ],
        [
            "Nama" => "Lunox",
            "Kelas" => "Reguler",
            "Jurusan" => 'Ilmu Komputer',
            "Pacar" => "Ryandra",
        ],
        [
            "Nama" => "Lunox",
            "Kelas" => "Reguler",
            "Jurusan" => 'Ilmu Komputer',
            "Pacar" => "Ryandra",
        ],
        [
            "Nama" => "Lunox",
            "Kelas" => "Reguler",
            "Jurusan" => 'Ilmu Komputer',
            "Pacar" => "Ryandra",
        ],
        [
            "Nama" => "Lunox",
            "Kelas" => "Reguler",
            "Jurusan" => 'Ilmu Komputer',
            "Pacar" => "Ryandra",
        ],
        [
            "Nama" => "Lunox",
            "Kelas" => "Reguler",
            "Jurusan" => 'Ilmu Komputer',
            "Pacar" => "Ryandra",
        ],
    ]

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

    <div class="container">
        <?php foreach($mahasiswa as $mhs => $index) : ?>
            <div class="mahasiswa">
                <h1>No mahasiswa <?=$mhs + 1?></h1>
                <ul>
                    <li>Nama : <?= $index["Nama"]?> </li>
                    <li>Kelas : <?= $index["Kelas"]?> </li>
                    <li>Jurusan : <?= $index["Jurusan"]?> </li>
                    <li>Pacar : <?= $index["Pacar"]?> </li>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>


    <div class="bungkus">
        <div class="satu">1</div>
        <div class="dua">2</div>
        <div class="tiga">3</div>
        <div class="empat">4</div>
        <div class="lima">5</div>
       
    </div>
    
    <script src="script.js"></script>
</body>
</html>