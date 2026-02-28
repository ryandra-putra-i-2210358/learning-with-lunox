<?php
    $mahasiswa = [
        ["Ryandra", "I.2210358", "089522134141", "Ilmu Komputer", "email@gmail.com"],
        ["Lunox", "I.2210368", "089522131868", "Ilmu Komputer", "email2@gmail.com"],
        ["Order and Chaos", "I.2210368", "089522131868", "Ilmu Komputer", "email2@gmail.com"]
    ];
    $buah  = [
        ["Mangga", "50000", "Import"],
        ["Pisang", "60000", "Lokal"],
        ["Stobery", "1000", "Import"],
    ];

    $hewan = ["Kucing", "Karnivora"];

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- harus susai nama apa email apa gitu gak boleh ngacak -->
    <?php foreach($mahasiswa as $mhs ) : ?>
        <ul>
            <li>Nama :<?= $mhs[0]; ?></li>
            <li>Nim : <?= $mhs[1]; ?></li>
            <li>NoHP : <?= $mhs[2]; ?></li>
            <li>Jurusan : <?= $mhs[3]; ?></li>
            <li>email : <?= $mhs[4]; ?></li>
                
        </ul>
    <?php endforeach; ?>

    <h1>buah</h1>
    <?php foreach($buah as $b ) : ?>
    <ul>
            <li>nama <?= $b[0] ?></li>
            <li>nama <?= $b[1] ?></li>
            <li>nama <?= $b[2] ?></li>

    </ul>
    <?php endforeach; ?>

    <h1>binatang</h1>

    <ul>
        <?php foreach($hewan as $hn ) : ?>
            <li> <?= $hewan[0] ?></li>
            <li> <?= $hewan[1] ?></li>
        <?php endforeach; ?>

    </ul>





    
</body>
</html>