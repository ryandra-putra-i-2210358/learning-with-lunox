<?php 
    date_default_timezone_set("Asia/Jakarta");
    $nama = [
        [
            "Nama" => "Ryandra",
            "Kelas" => "Reguler",
            "Email" => "email@gmail.com",
            "Jurusan" => "Ilmu Komputer",
            "Nilai" => [80, 90, 85],
        ],
        [
            "Nama" => "Lunox",
            "Kelas" => "Reguler",
            "Email" => "email@gmail.com",
            "Jurusan" => "Ilmu Komputer",
            "Nilai" => [90, 93, 95],
        ],
    ];
    echo $nama[4]["Create"];

    $nama2 = ["Ryandra", "Lunox", "22", "Pasutri"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Haii</h1>

    <?php foreach($nama as $nma) : ?>
        <ul>
            <li>Nama : <?= $nma["Nama"]; ?></li>
            <li>Jurusan : <?= $nma["Kelas"]; ?></li>
            <li>Email : <?= $nma["Email"]; ?></li>
            <li>Jurusan : <?= $nma["Jurusan"]; ?></li>

            <?php foreach($nma["Nilai"] as $index => $nilai) : ?>
                <li> nilai ke : <?=  $index + 1?>: <?= $nilai ?></li>
               <?php echo "Index " . ($index + 1) . " nilai nya $nilai <br>"; ?>
            <?php endforeach; ?>

        </ul>

    <?php endforeach; ?>

   <!-- gak perlu foreach karena 1 dimesnsi array -->
   <!-- kalau array di dalam aray baru pakai foreach -->
    <ul>
        <li>Nama : <?= $nama2[0]?></li>
        <li>Jodoh : <?= $nama2[1]?></li>
        <li>Umur : <?= $nama2[2]?></li>
        <li>Status : <?= $nama2[3]?></li>
    </ul>

    


    
</body>
</html>