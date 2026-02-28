<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- sesuai kan data nya dariatribute input name='nama' dari post.php -->
    <h1>Selamat datang <?= $_POST["nama"] ?></h1>
    <p>dengan jurusan <?= $_POST["jurusan"]?></p>
    <p>umur kamu itu <?= $_POST["angka"]; ?></p>
    <!-- kita palngil data post.php dengan $_POST superglobal bvariabel -->
    <!-- kenapa $_POST karena kan udah di bilang kalau post itu dari form post.php, bukan $_GET dari url lagi -->
</body>
</html>