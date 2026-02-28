<?php 

    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            line-height: 30px;
            text-align: center;
            transition: 1s;
            display: inline-block;
            margin: 3px;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
    <title>Document</title>
</head>
<body>

<?php 
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

// echo $angka[2][2];

?>

<?php foreach($angka as $ang) : ?>
    <?php foreach($ang as $a) : ?>
        <div class="kotak"> <?= $a ?></div>
    <?php endforeach ?>
    <div class="clear"></div>
<?php endforeach ?>





<script src="../pertemuan6/function.js"></script>
    
</body>
</html>