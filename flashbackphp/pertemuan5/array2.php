<?php
// pengulangan pada array

// for / foreach
$angka = [3,43,21,54,11];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .kotak{
            height: 50px;
            width: 50px;
            line-height: 50px;
            background-color: blueviolet;
            text-align: center;
            margin: 3px;
            float: left;
            /* display: inline-block; */
        }
        .clear{
            clear: both;
        }

    </style>
    <title>Document</title>
</head>
<body>
    <?php for($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?= $angka[$i]; ?></div>
        
    <?php } ?>

    <div class="clear"></div>
    
    <?php foreach($angka as $a) { ?>
        <div class="kotak"><?= $a ?></div>
    <?php } ?>
        
     <div class="clear"></div>

    <?php foreach($angka as $a) : ?>
        <div class="kotak"><?= $a ?></div>
    <?php endforeach; ?>

    
</body>
</html>









