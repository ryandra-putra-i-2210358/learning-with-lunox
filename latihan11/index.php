<?php 
    $nama = "Ryandra";
    var_dump($nama);


    $nomer = 11;
    if($nomer % 2 === 0){
        echo "ini genap";
    }else{
        echo "ini ganjil";
    } 

    var_dump($nomer <= 12 || $nomer % 2 === 0);

    $nama1 = "Lunox";
    $nama2 = "Aku";
    $hasil = "Maafkan Aku";

    echo $nama1 . " " . $hasil ;


    

    
    
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
<body>
    <h1>aku sayang banget sama <?php echo $nama1; ?></h1>
    
    <?php 

        $varibel = "<h1> Hai Syg Lunox Maafkan aku ya </h1>";
        echo $varibel;
        if(gettype($varibel) === "string"){
            echo "ini string";
        }else {
            echo "ini int";
        }
        echo "\n";
        $angkaNomer = 1;
        
        if($angkaNomer % 2 === 0 && gettype($angkaNomer) === "integer"){
            echo "genap dan type integerz<br>";
        }else{
            echo "ganjil dan type integer<br>";    
        }


        $angkaNomer2 = 10;
        if(is_integer($angkaNomer2) === true){
            for($i = 0; $i <= 3; $i++){
                if($angkaNomer2 % 2 === 0 && gettype($angkaNomer2 === "integer")){
                    echo "ini angka genap dan type integer <br>";
                }else {
                    echo "ini angka ganjil dan type integer <br>";
                }
            }
        }else{
            echo "Ini Bukan Angka";
        }

        $loop = 1;
        while($loop <= 3){
            echo "lunox maafin aku ya<br>";
        $loop++;
        }

        $loopDoWhile = 0;
        do {
            echo "Haii <br>";
        $loopDoWhile++;
        }while( $loopDoWhile <= 3);



        



    ?>
    <table border="1" cellpadding="10" cellspacing="0" class="table1">
        <?php for($i = 1; $i <= 5; $i++) : ?>
            <!-- cek kalau mau ngasih kodisi warna ke tr jgn tr dulu baru ngasih kondisi -->
            <?php if($i % 2 == 1) :?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr></tr>   
            <?php endif; ?>
            
            <?php for($j = 1; $j <= 5; $j++) : ?>
                <td><?= $i ." , " . $j?></td>

            <?php endfor; ?>
            </tr>

        <?php endfor; ?>
    </table>
       <br>         
    <table border="1" cellspacing="0" cellpadding="10">
        <table border="1" cellspacing="0" cellpadding="10">
            <?php for($i = 1; $i <= 5; $i++) : ?>
                <tr class="warna-baris">
                    <?php for($j = 1; $j <= 5; $j++) : ?>
                        <td><?= "$i , $j"; ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>

    </table>






</body>
</html>