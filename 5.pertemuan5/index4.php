<?php 
    $mahasiswa = ['Ryandra', '08952213', 'Ilmu Komputer', '22'];

    $mahasiswa2 = [
        ['Ryandra', '08952213', 'Ilmu Komputer', '22'],
        ['Lunox', '08952213', 'Ilmu Komputer', '22'],
        ['Chaos And Order', '08952213', 'Ilmu Komputer', '22'],
    ];
    // ini juga bisa di sebut array numerik yaitu array yang indexnya angka
    // untuk mecegah ketidak pastian data maka pakai lah arrray assosiative indexnya yaitu string

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li><?= $mhs ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- atau -->
    <!-- sama aja tapi agak ribet gak sih ngulang2 -->
     <ul>
        <li><?= $mahasiswa[0]?></li>
        <li><?= $mahasiswa[1]?></li>
        <li><?= $mahasiswa[2]?></li>
        <li><?= $mahasiswa[3]?></li>
     </ul>

     <h1>array dalam array</h1>
     <!-- mengulang data  -->
    
     <!-- urutanya gak boleh alah yang ada di data php -->
     <?php foreach($mahasiswa2 as $mhss) : ?>
        <ul>
            <li>Nama: <?= $mhss[0] ?></li>
            <li>NoHp: <?= $mhss[1] ?></li>
            <li>Jurusan: <?= $mhss[2] ?></li>
            <li>Umur: <?= $mhss[3] ?></li>

        </ul>
    

    <?php endforeach ?>

    <button id="myButton">Klik aku!</button>




     
 
<script src="script.js"></script>
</body>
</html>