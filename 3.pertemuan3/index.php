<?php 
    // pengulangan

    //for
    //while 
    //do while 
    //foreach


    // FOR
    // index sellau dari nol makanya dari 0 penulanagnya cokk
    // for($i = 0; $i < 5; $i++){
    //     echo $i . " " ."Heloo wordl <br>". " ";
    // }


    //WHILE
    // $i = 1;
    // while( $i < 5){
    //     echo $i . " ". "Heloo World ! <br>";
    // $i++;
    // }


    //DO WHILE
    // $i = 0;
    // do {
    //     echo "Hello world <br>";

    // $i++;
    // }while($i <= 3);
    // bisa di jalann 1x kan msekipun nanti hasilnya false





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
    <h1 class="hah"><?php echo "haloo $nama" ;?></h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <!-- cara 1 -->

       <?php 

            // for( $i = 1; $i <= 3; $i++ ){
            //     echo "<tr>";
            //         for($j =1; $j <= 5; $j++){
            //             echo "<td>$i $j </td>";
            //         }
            //         //karena i nya columns j nya baris
            //         //maka terbuat tabel 3x5
            //     echo "</tr>";
            // }

        ?>
        <!-- cara 2 -->

        <?php for($i = 1; $i <= 3; $i++) {?>
            <tr>
                <?php  for($j = 1; $j <= 5; $j++ ){?>
                        <td><?php echo "$i , $j"; ?></td>
                <?php } ?>
            </tr>
        <?php }?>

        <div class="batas">dd</div>
        <!-- atau -->

         <?php for($i = 1; $i <= 3; $i++) : ?>
            <tr>
                <?php for($j = 1; $j <= 5; $j++) : ?>
                    <td><?php echo $i, $j; ?></td>

                <?php endfor;?>

            </tr>

         <?php endfor; ?>
         
         <!--  atau cara 3-->
         <?php for($i = 1; $i <= 3; $i++) : ?>
            <tr>
                <?php for($j = 1; $j <= 5; $j++) : ?>
                    <td><?= $i ."x". $j; ?></td>

                <?php endfor;?>

            </tr>

         <?php endfor; ?>
         
















    </table>

<script src="script.js"></script>
</body>
</html>