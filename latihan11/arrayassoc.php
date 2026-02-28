<?php 

    function namaIsset ($data1, $data2, $data3, $data4){
        $dataMahasiswa2 = [
            [$data1, $data2, $data3, $data4],
        ];
        return $dataMahasiswa2;
    }
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php foreach(namaIsset("Ryandra", "I.2210358", "email@gmail.com", "Ilmu Komputer") as $a) : ?>
        <h1> Nama: <?= $a[0]; ?></h1>
        <h1> Nim: <?= $a[1]; ?></h1>
        <h1> Email: <?= $a[2]; ?></h1>
        <h1> Jurusan: <?= $a[3]; ?></h1>
    <?php endforeach; ?>

    
</body>
</html>