<?php 

    $nama = [3, 4, 5, 7, 1];
    for($i = 0; $i < count($nama); $i++){
        echo "index ke $i isinya $nama[$i] <br>" ;
    }

    $hewan = ["Anjing", "Kucing", "Kelinci", "Mamot"];
    $nama = ["Ryandra", "I.2210358", "email@gmail.com", "Ilmu Komputer"];
    
    $dataAbsen = [
        ["Ryandra", "I.2210318", "email1@gmail.com", "Ilmu Komputer"],
        ["Lunox", "I.2210368", "email2@gmail.com", "Ilmu Komputer"],
        ["Order", "I.2210348", "email3@gmail.com", "Ilmu Komputer"],
        ["Chaos", "I.2210338", "email4@gmail.com", "Ilmu Komputer"],
        
    ];
    
    $dataMahasiswa = [

        ["Ryandra", "I.2210318", "email1@gmail.com", "Ilmu Komputer", [90, 80, 86]],
        ["Lunox", "I.2210368", "email2@gmail.com", "Ilmu Komputer", [80, 90, 86]],
        ["Order", "I.2210348", "email3@gmail.com", "Ilmu Komputer", [95, 85, 85]],
        ["Chaos", "I.2210338", "email4@gmail.com", "Ilmu Komputer", [93, 87, 88]],

    ];

    $arrayTest = [2,3,5,3,[4,3,1],3,5];
    $hasil = $arrayTest[4][1];
    echo $hasil;

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
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>

    <?php for($j = 0; $j < count($hewan); $j++) : ?>
        <h1>index ke <?= $j; ?> isinya <?= $hewan[$j]; ?></h1>
    <?php endfor; ?>

    <p>Nama : <?= $nama[0] ?></p>
    <p>Nim : <?= $nama[1] ?></p>
    <p>Email : <?= $nama[2] ?></p>
    <p>Jurusan : <?= $nama[3] ?></p>
    <br>

    <?php foreach($dataAbsen as $na ) : ?>
        <p>Nama : <?= $na[0]; ?></p>
        <p>Nim: <?= $na[1]; ?></p>
        <p>Email : <?= $na[2]; ?></p>
        <p>jurusan: <?= $na[3]; ?></p>
    <?php endforeach; ?>

    <?php for($data = 0; $data < count($dataAbsen); $data++) : ?>
        <p>Nama : <?= $dataAbsen[$data][0]; ?></p>
        <p>Nim : <?= $dataAbsen[$data][1]; ?></p>
        <p>Email : <?= $dataAbsen[$data][2]; ?></p>
        <p>Jurusan : <?= $dataAbsen[$data][3]; ?></p>
    <?php endfor; ?>  
    
    
    
    <div class="container">
        
        <?php foreach($dataMahasiswa as $mahasiswa) : ?>

            
            <div class="card">
                <h6>Nama : <?= $mahasiswa[0]?> </h6>
                <h6>Nim : <?= $mahasiswa[1]?> </h6>
                <h6>Email : <?= $mahasiswa[2]?> </h6>
                <h6>Jurusan : <?= $mahasiswa[3]?> </h6>
                <?php foreach($mahasiswa[4] as $value )  : ?>
                    <h6>Nilai1 : <?= $value ?></h6>
                <?php endforeach ?>
        

            </div>
        
        <?php endforeach; ?>
    
    </div>    

    <?php foreach(namaIsset("Ryandra", "I.2210358", "email@gmail.com", "Ilmu Komputer") as $a) : ?>
        <h1> Nama: <?= $a[0]; ?></h1>
        <h1> Nim: <?= $a[1]; ?></h1>
        <h1> Email: <?= $a[2]; ?></h1>
        <h1> Jurusan: <?= $a[3]; ?></h1>
    <?php endforeach; ?>

    <script src="script.js"></script>
</body>
</html>