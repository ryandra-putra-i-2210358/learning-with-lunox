<?php 

    $nomer1 = 32;
    $nomer1 += 6;
    $nomer2 = 30;
    $total = $nomer1 + $nomer2;

    $nama = "Ryandra $total <br>";
    var_dump($nama);
    $nama2 = is_string($nama);
    if($nama2 == 1){
        for($i = 0; $i <= 4; $i++){
            echo "Ini adalah String <br>";
        }
    }
    $namaApa = "Ryandra";
    print_r($namaApa);

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Pengulangan";
    echo "<br>";
    
    //for
    //while
    //do.. while = di jalan dulu 1x meskipun false
    // foreach : pengulanagn array
    
    for($i = 0; $i < 5; $i++){
        echo "Helo World <br>";
    }
    
    echo "<br>";
    $j = 0;
    while($j < 5){
        echo "Hello World <br>";
        $j++;
    }
    
    echo "<br>";
    echo "<br>";
    $a = 10;
    do {
        echo("Hellow World <br>");
        $a++;
    } while ($a < 5);
    
    echo "<br>";
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris{
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
       <?php 
            for($i = 1; $i <= 3; $i++){
                echo "<tr>";
                    for($j = 1; $j <= 5; $j++){
                        echo "<td>$i, $j</td>";
                    }

                echo "</tr>";
            }
       ?>
    </table>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($a = 1; $a <= 3; $a++) { ?>
            <tr>
                <?php for($b = 1; $b <= 5; $b++) { ?>
                    <td><?php echo "$a, $b"?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($a = 1; $a <= 5; $a++) : ?>
            <?php if($a % 2 == 1) : ?>

            <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>

                <?php for($b = 1; $b <= 5; $b++) : ?>
                    <td><?= "$a, $b"?></td>
                <?php endfor ?>
            </tr>
        <?php endfor; ?>
    </table>

    
</body>
</html>