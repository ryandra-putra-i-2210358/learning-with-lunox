<?php 

    $nama = "Ryandra";
    function test ($one) {
        $namaGabung = $one . " " . "ks";

        return $namaGabung;
    }
    echo test($nama);

    $arrayAsoc = [
        [ 
            "Nama" => "Ryandra",
            "Jurusan" => "Ilmu Komputer",
            "Kelas" => "Reguler3",
        
        ],
        [ 
            "Nama" => "Ryandra PUTRA",
            "Jurusan" => "Ilmu13 Komputer",
            "Kelas" => "Reguler 2",
        
        ],
        [ 
            "Nama" => "Ryandra TEST" ,
            "Jurusan" => "Ilmu 12 Komputer",
            "Kelas" => "Reguler 1",
        
        ],
    ];

    




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cakupan/style22.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="satu">
            <h1>Haii</h1>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, error facere ullam asperiores dignissimos distinctio repellendus? Voluptatibus unde dicta tempora esse quidem porro veniam. Culpa laudantium natus dolorem quos reiciendis.</p>
        </div> 
        <div class="dua">
            <h1>Haii</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita aspernatur assumenda soluta voluptates deleniti sint repudiandae veniam placeat neque! Nulla et corrupti iste dolor veniam ab quo ducimus tenetur voluptatibus?
            </p>
        </div>

    </div>
    <h1>Array Asosiatif</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arrayAsoc as $index => $data) : ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $data["Nama"] ?></td>
                    <td><?= $data["Jurusan"] ?></td>
                    <td><?= $data["Kelas"] ?></td>
                    <td>Hapus | Edit</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="container2">
        <div class="satu2">1</div>
        <div class="dua2">2</div>
        <div class="tiga2">3</div>
        <div class="empat2">4</div>
       
    </div>

    <script src="../cakupan/script.js"></script>
    
</body>
</html>
