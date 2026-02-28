<?php 

    // array numerik yang indexnya dalah angka atau nol
    // $mahasiswa = [
    //     ["Ryandra Putra", "I.2210358", "ryandra@gmail.com", "Ilmu Komputer"],
    //     ["Lunox", "I.2210668", "Lunox@gmail.com", "Ilmu Komputer"],
    //     ["I.2210668","Lunox", "Lunox@gmail.com", "Ilmu Komputer"],
    // ];

    // array associatif
    // definisi sama seperti array numeric, kecuali
    // key nya adalah string yang kita buat sendiri

    $mahasiswa = [
        [
            "nama" => "Ryandra", 
            "nim" => "I.2210358", 
            "email" => "andra1802@gmail.com", 
            "jurusan" => "Ilmu komputer",
            "tugas" => [90, 80, 100],
            "gambar" => "ryanox.png"
        ],
        [
            "nama" => "Lunox", 
            "nim" => "I.2210668", 
            "email" => "Lunox@gmail.com", 
            "jurusan" => "Ilmu komputer",
            "tugas" => [90, 80, 100],
            "gambar" => "ryanox2.png"

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
    <h1>Daftar Mahasiwa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="../pertemuan6/image/<?= $mhs["gambar"] ?>" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>

            <?php foreach($mhs["tugas"] as $nilai ) : ?>
                <li>Tugas : <?= $nilai ?></li>
            <?php endforeach ?>

        
        </ul>
    <?php endforeach; ?>
    
</body>
</html>
