<?php 
    $navbar = ["Home", "About", "Contact", "Carer"];
    $biodata = [
        [
            "Nama" =>"Ryandra", 
            "Umur" =>"22", 
            "Keterangan" => "haalodjsdnsjdskadnsakjdnsajdnasjdnasjdnsakdnasjd"
        ],
        [
            "Nama" =>"Lunox", 
            "Umur" =>"22", 
            "Keterangan" => "haalodjsdnsjdskadnsakjdnsajdnasjdnasjdnsakdnasjd"
        ],
        [
            "Nama" =>"Order", 
            "Umur" =>"22", 
            "Keterangan" => "haalodjsdnsjdskadnsakjdnsajdnasjdnasjdnsakdnasjd"
        ],

        


    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylw.css">
    <title>Document</title>
</head>
<body>

  
    <div class="navbar">
        <div class="navbar-logo">
            <img src="image/01-1024x1024.webp" alt="">
        </div>
        <div class="navbar-menu">
            <?php foreach($navbar as $nav) : ?>
                <a href="#"><?= $nav ?></a>
                <?php endforeach; ?>
                
            </div>
        </div>
        
    </div>
    <h1>Contact</h1>

    <?php foreach($biodata as $bio) : ?>
        <div class="profile">
            <div class="container">
                <div class="profile-image">
                    <img class="image-biasa" src="image/lunox.webp" alt="">
                </div>
                
                <div class="profile-biodata">
                    <h1 class="nama">nama : <?= $bio["Nama"] ?></h1>
                    <p>umur : <?= $bio["Umur"]?></p>
                    <p> ketrangan : <?= $bio["Keterangan"]?></p>
            </div>

            </div>
    <?php endforeach ;?>



<script src="script.js"></script>
</body>
</html>