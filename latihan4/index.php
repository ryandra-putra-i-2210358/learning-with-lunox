<?php 
    date_default_timezone_set('Asia/Jakarta');
    echo date("Y-m-d H:i:s", time());

    function animaTion($nama){
        if(is_string($nama)){
            echo "Ini String";
        }elseif(is_int($nama)){
            echo "Ini type integer";
        }elseif(is_bool($nama)){
            echo "Ini type Bollean";
        }else {
            echo "Ini tipe yang lainya";
        }
    }
    animaTion(true);
    $buahs = [
        [
            "Nama" => "Mangga",
            "Rasa" => "Agak Asam",
            "Harga" => "Rp.5000",
            "Toko" => "Buah Store",
        ],
        [
            "Nama" => "Alpukat",
            "Rasa" => "Agak Manis",
            "Harga" => "Rp.4000",
            "Toko" => "Euy Store",
        ],
        [
            "Nama" => "Apel",
            "Rasa" => "Manis",
            "Harga" => "Rp.5000",
            "Toko" => "Buah Storey 2",
        ]
    ];
    $mahasiswas = [
        ["Ryandra", "Ilmu Komputer", "22", "email@gmail.com"],
        ["Lunox", "Ilmu Komputer", "22", "email@gmail.com"],
        ["Order", "Ilmu Komputer", "22", "email@gmail.com"],
        ["Chaos", "Ilmu Komputer", "22", "email@gmail.com"],

    ];
    $siswas = [
        [
            "Nama" => "Ryandra",
            "Kelas" => 6,
            "Lulus" => true,
            "Nilai" => [90, 85, 88],
        ],
        [
            "Nama" => "Lunox",
            "Kelas" => 6,
            "Lulus" => true,
            "Nilai" => [90, 85, 88],
        ],
        [
            "Nama" => "Chaos and Order",
            "Kelas" => 6,
            "Lulus" => true,
            "Nilai" => [90, 85, 88],
        ],

    ];



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
    <?php for($i = 0; $i <= 3; $i++) : ?>
        <h1><?= animaTion(9) ?></h1>
    <?php endfor;?>
    <br>
    <div class="pembungkus">
        <h2>data buah buah han</h2>
        
        <?php foreach($buahs as $buah) : ?>
            <ul>
                <li>Buah: <?= $buah["Nama"] ?></li>
                <li>Rasa : <?= $buah["Rasa"] ?></li>
                <li>Harga: <?= $buah["Harga"] ?></li>
                <li>Toko: <?= $buah["Toko"] ?></li>
            </ul>
        <?php endforeach; ?>
    </div>

    <div class="data-mahasiswa">
        <h3>Data mahasiswa</h3>
        <?php foreach($mahasiswas as $mahasiswa ) : ?>
            <ul>
                <!-- kuhusus array umerik foreach 2x -->
                <?php foreach($mahasiswa as $mhs) : ?>
                    <li><?= $mhs ?> </li> 
                <?php endforeach; ?> 
            </ul>
        <?php endforeach; ?>
    </div>
    <div class="pelanggan">
        <h1>Data Pelanggan</h1>
        <?php foreach($siswas as $siswa) : ?>
            <ul>
                <li>Nama : <?= $siswa["Nama"] ?></li>
                <li>Kelas : <?= $siswa["Kelas"] ?></li>
                <li>Lulus <?= $siswa["Lulus"] ?></li>
                <?php foreach($siswa["Nilai"] as $nilai) : ?>
                    <li> Nilai <?= $nilai ?></li>
                <?php endforeach; ?>
               
            </ul>
        <?php endforeach; ?>
    </div>

<script src="script.js"></script>
</body>
</html>