<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php for($i = 0; $i <= 3; $i++) : ?>
        <p>Nama: <?= $_GET["nama"];?></p>
        <p>Kelas : <?= $_GET["kelas"];?></p>
        <p>Email : <?= $_GET["email"];?></p>
        <p>Jenis Kelamin : <?= $_GET["kelamin"];?></p>
    <?php endfor; ?>
    
</body>
</html>