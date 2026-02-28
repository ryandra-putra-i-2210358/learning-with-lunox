<?php 
    
    function sapa($a = "Admin", $waktu = "Datang"){
        $nama = $a;

        return "Selamat $waktu $nama !!";
    }
    // echo sapa("Ryandra");

    //parameter harus diisi semua jika ada parameter bepara pun parameternta



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?= sapa("Ryandra", "Sore") ?></h1>
    
</body>
</html>