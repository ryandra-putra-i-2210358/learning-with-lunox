<?php
    $books = [
        [
            "Gambar" => "binatang.jpeg",
            "Nama" => "Buku Kisah Binatang",
            "Author" => "Ryan",
            "Jumlah Halaman" => "254",
            "Harga" => "Rp.350.000",

        ],
        [
            "Gambar" => "ceritaanak.jpeg",
            "Nama" => "Buku Kisah Tentang Anak",
            "Author" => "Ryandra",
            "Jumlah Halaman" => "123",
            "Harga" => "Rp.240.000",

        ],
        [
            "Gambar" => "hutan.jpeg",
            "Nama" => "Buku Kisah Hutan",
            "Author" => "Ryanox",
            "Jumlah Halaman" => "220",
            "Harga" => "Rp.150.000",

        ],
        [
            "Gambar" => "kancil.jpeg",
            "Nama" => "Buku Kisah Kancil",
            "Author" => "Ryan Lunox",
            "Jumlah Halaman" => "204",
            "Harga" => "Rp.100.000",

        ],
        [
            "Gambar" => "karakter.jpeg",
            "Nama" => "Buku Kisah Karakter",
            "Author" => "Lunoxyan",
            "Jumlah Halaman" => "1608",
            "Harga" => "Rp.680.000",

        ],
        [
            "Gambar" => "malang.jpeg",
            "Nama" => "Buku Kisah Malang",
            "Author" => "Ryan Nox",
            "Jumlah Halaman" => "217",
            "Harga" => "Rp.110.000",

        ],
        [
            "Gambar" => "pelangi.jpeg",
            "Nama" => "Buku Kisah Binatang",
            "Author" => "Ryan",
            "Jumlah Halaman" => "204",
            "Harga" => "Rp.250.000",

        ],
        [
            "Gambar" => "ragamindo.jpeg",
            "Nama" => "Buku Kisah Ragam",
            "Author" => "RyanNOX",
            "Jumlah Halaman" => "224",
            "Harga" => "Rp.276.000",

        ],
        [
            "Gambar" => "rajahutan.jpeg",
            "Nama" => "Buku Kisah Raaj",
            "Author" => "Ryan dRA NOX",
            "Jumlah Halaman" => "354",
            "Harga" => "Rp.250.000",

        ],
        [
            "Gambar" => "tupai.jpeg",
            "Nama" => "Buku Kisah Tupai",
            "Author" => "Ryan Lunox",
            "Jumlah Halaman" => "104",
            "Harga" => "Rp.150.000",

        ],
        

    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        ul{
            display: inline-block;
            margin-left: 30px;
        }
        h1{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            color: blueviolet;
        }
        li{
            list-style-type: none;
        }
    </style>
    <title>Toko Buku</title>
</head>
<body>
    <h1>Daftar Buku Dongeng</h1>


    <?php foreach($books as $book) : ?>
        <ul>
            <li>
                <img src="../pertemuan6/book/<?= $book["Gambar"] ?>" alt=""> 
            </li>
            <li>Nama : <?= $book["Nama"] ?></li>
            <li>Author : <?= $book["Author"] ?></li>
            <li>Jumlah Halaman : <?= $book["Jumlah Halaman"] ?> </li>
            <li>Harga : <?= $book["Harga"] ?> </li>
            
        </ul>
    <?php endforeach; ?>

    >
    <script src="../pertemuan6/test.js"></script>
</body>
</html>