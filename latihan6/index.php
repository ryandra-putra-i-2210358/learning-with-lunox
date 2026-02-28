<?php

    $mahasiswa = [
        [
            "nama" => 'Ryandra',
            "kelas" => "reguler",
            "falkultas" => "Filkom",
            "umur" => "22",

        ],
        [
            "nama" => 'Lunox',
            "kelas" => "reguler",
            "falkultas" => "Filkom",
            "umur" => "22",

        ],
        [
            "nama" => 'Order',
            "kelas" => "reguler",
            "falkultas" => "Filkom",
            "umur" => "22",

        ],
        [
            "nama" => 'Chaos',
            "kelas" => "reguler",
            "falkultas" => "Filkom",
            "umur" => "22",

        ],

    ];

    $buahs = [

        [
            'Mangga',
            '20.000',
            'manis',
            'baru',
            'Ci Ajur',
            "impor" => [
                "Ya",
                'bukan',
                'bisa jadi',


            ],
        ],
        [
            'Apel',
            '20.000',
            'manis',
            'baru',
            'Ci Ajur',
            "impor" => [
                "Ya",
                'bukan',
                'bisa jadi',


            ],
        ],
        [
            'Jeruk',
            '20.000',
            'manis',
            'baru',
            'Ci Ajur',
            "impor" => [
                "Ya",
                'bukan',
                'bisa jadi',


            ],
        ],
        [
            'Anggur',
            '20.000',
            'manis',
            'baru',
            'Ci Ajur',
            "impor" => [
                "Ya",
                'bukan',
                'bisa jadi',


            ],
        ],
    ];

    $siswa = [
        [
            "Nama" => "Ryandra",
            "Jenis Kelamin" => "Laki-Laki",
            "Umur" => 22,
            "lulus" => true,
            "Nilai" => [90, 80, 81],
        ],
        [
            "Nama" => "Lunox",
            "Jenis Kelamin" => "Perempuan",
            "Umur" => 22,
            "lulus" => true,
            "Nilai" => [93, 86, 90],
        ],
        [
            "Nama" => "Order",
            "Jenis Kelamin" => "Perempuan",
            "Umur" => 22,
            "lulus" => true,
            "Nilai" => [81, 81, 81]
        ],
        [
            "Nama" => "Chaos",
            "Jenis Kelamin" => "Perempuan",
            "Umur" => 22,
            "lulus" => true,
            "Nilai" => [86, 86, 86]
        ],
    ];

    $students = [
        [
            "Nama" => "Ryandra",
            "Jenis Kelamin" => "Laki Laki",
            "Umur" => 22,
            "Email" => "email@gmail.com",
            "Nilai" => [
                "Matatika" => 80,
                "Fisika" => 90,
                "Kimia" => 80,
            ],
        ],
        [
            "Nama" => "Lunox",
            "Jenis Kelamin" => "Perempuan",
            "Umur" => 22,
            "Email" => "email@gmail.com",
            "Nilai" => [
                "Matatika" => 80,
                "Fisika" => 90,
                "Kimia" => 80,
            ],
            
        ],
        [
            "Nama" => "Order and Chaos",
            "Jenis Kelamin" => "Laki Laki",
            "Umur" => 22,
            "Email" => "email@gmail.com",
            "Nilai" => [
                "Matematika" => 80,
                "Fisika" => 90,
                "Kimia" => 80,
            ],
        ],
    ];
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
    <h1>Hai</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
        <div class="for-hover">
            <div class="kotak">
                <p><?= $mhs["nama"]; ?></p>
                <p><?= $mhs["kelas"]; ?></p>
                <p><?= $mhs["falkultas"]; ?></p>
                <p><?= $mhs["umur"]; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
    

    <?php foreach($students as $student) : ?>     

        <div class="box">
            <p>Nama : <?= $student["Nama"] ?></p>
            <p>Jenis Kelamin <?= $student["Jenis Kelamin"] ?></p>
            <p>Umur :<?= $student["Umur"] ?></p>
            <p>Email : <?= $student["Email"] ?></p>
            <?php foreach($student["Nilai"] as $stdn => $id ) : ?>
                <p>Nilai <?= $id["Matematika"] ?>: <?= $stdn ?></p>
            <?php endforeach ?>
        </div>

    <?php endforeach; ?>

    <?php foreach($siswa as $sws) : ?>
        <div class="box2">
            <p><?= $sws["Nama"] ?></p>
            <p><?= $sws["Jenis Kelamin"] ?></p>
            <p><?= $sws["Umur"] ?></p>
            <p><?= $sws["lulus"] ?></p>
            <?php foreach( $sws["Nilai"] as $value) : ?>
                <p>Nilai : <?= $value ?></p>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>

    <?php foreach($buahs as $buah) : ?>

        <div class="coba">
            <div class="test">
                <p>nama : <?= $buah[0] ?></p>
                <p>Rasa : <?= $buah[1] ?></p>
                <p>Harga : <?= $buah[2] ?></p>
                <p>kondisi : <?= $buah[3] ?></p>
                <p>Asli dari : <?= $buah[4] ?></p>
                <?php foreach ($buah["impor"] as $b ) : ?>
                    <p>Impor? : <?= $b ?></p>
                <?php endforeach; ?>

            </div>
        </div>
    <?php endforeach; ?>

    <div class="bungkus">
        <div class="bulet"></div>
    </div>

<script src="scripts.js"></script>
</body>
</html>