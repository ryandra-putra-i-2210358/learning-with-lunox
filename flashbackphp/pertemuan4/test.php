<?php 

    function jumlahVolumeKubus($a, $b) {
        $volumeA = $a**3;
        $volumeB = $b**3;

        $total = $volumeA + $volumeB;
        return $total;
    }
    echo jumlahVolumeKubus(3,1);

    function dectectNumber($c) {
        if(is_numeric($c)){
            if($c % 2 == 0){
                echo "Genap $c";
            }else{
                echo "Ganjil $c";
            }
        }else {
            echo "Bukan angka ya";
        }
    }
    echo dectectNumber(jumlahVolumeKubus(3,1));

    function penjumlahanInner($nama){
        return "Haii Aku $nama saya nomer". " " . jumlahVolumeKubus(3,1);
    }
    function adminAuto($hari = "Datang", $nama = "Admin"){
        $day = date("l");
        return "Hari ini $hari $day selamat beraktifitas $nama";
    }   
    echo adminAuto("Sore", "Ryandra");

    echo "<br>";
    
    echo date("l" ,time()+60*60*24*1);

    echo date("l", mktime(0,0,0,9,10,2025));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .baris{
                background-color: blueviolet;
            }
            .bariss{
                background-color: yellow;
            }
        </style>
    <title>Document</title>
</head>
<body>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($i = 1; $i <= 5; $i++) : ?>
            <?php if($i % 2 == 0) : ?>
                <tr class="baris">
            <?php else :?>
                <tr class="bariss">
            <?php endif; ?>
                <?php for($j = 1; $j <= 5; $j++) :?>
                    <td><?= "$i, $j" ?></td>

                <?php endfor; ?>
            </tr>
    
        <?php endfor; ?>

    </table>

    <?php for($k = 1; $k <= 5; $k++) : ?>
        <h1><?= $k . ". ". penjumlahanInner("Ryandra") ?></h1>
    <?php endfor ?>
        
    <script src="../pertemuan4/function.js"></script>
    <script src="../pertemuan4/refactoring.js"></script>


</body>
</html>