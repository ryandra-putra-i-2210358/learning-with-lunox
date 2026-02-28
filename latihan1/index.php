<?php 
    function pengaBungNama($nama1, $nama2){
        $namaInner = $nama1;
        $namaSystem = $nama2;
        
        $hasil = $namaInner . " Love " . $namaSystem;
        return $hasil;
    }
    // echo pengaBungNama('Ryandra', 'Lunox');

    function jumlahType($sytem, $element){
        for($i = 0; $i <= 3; $i++){
            $systemInner = pengaBungNama('Ryandra', 'Lunox');
            echo $systemInner;
        }
        $nama = $sytem;
        $nama += 10;
        $index = $element;

        $total = $nama + $index;
        $combinationAll = $systemInner . " " . $total;

        return $combinationAll;
        
    }
    echo jumlahType(4, 4);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <input type="text" name="nama" placeholder="Masukan Text" style="display: none;">
    <button class="button" type="submit">Click</button>


<script src="scrip.js"></script>    
</body>
</html>