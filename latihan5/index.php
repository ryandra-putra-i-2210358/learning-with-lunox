<?php 

    $datas = [
        'Anjing', 'Kucing',  'Kelinci'
    ];
    $mahasiswas = [
        [
            "Nama" => "Ryandra Putra",
            "Kelas" => "Reguler",
            "Email" => "andra180110@gmail.com",
            "No HP" => "0899999",
        ],
        [
            "Nama" => "Lunox",
            "Kelas" => "Reguler",
            "Email" => "andra180110@gmail.com",
            "No HP" => "0899999",
        ],
        [
            "Nama" => "Order Chaos",
            "Kelas" => "Reguler",
            "Email" => "andra180110@gmail.com",
            "No HP" => "0899999",
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
    <?php foreach($datas as $data) : ?>

        <h1><?= $data ?></h1>
    <?php endforeach;?>

    <h1>Mahasiswa</h1>
    <?php foreach($mahasiswas as $mahasiswa) :?>
        <ul>
            <li><?= $mahasiswa["Nama"] ?></li>
            <li><?= $mahasiswa["Kelas"] ?></li>
            <li><?= $mahasiswa["Email"] ?></li>
            <li><?= $mahasiswa["No HP"] ?></li>
        </ul>

    <?php endforeach;?>



<script src="scripts.js"></script>    
</body>
</html>