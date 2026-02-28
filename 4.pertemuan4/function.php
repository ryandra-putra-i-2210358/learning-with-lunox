<?php 
    echo "HAI";
    // harus definisikan dulu function nya baru panggil
    // rekoemdasi ada return
    // parater harus di pabil 2 2 nya jika emmang ada 2 kalau gak eror
    // atau kita kasih nilai parameter defaultnya
    function salam($nama = "Admin"){
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("H:i");
        return "sekarang jam $waktu, $nama";
    }  
    
    function isGanjil($angka){
        return $angka % 2 == 1;
    }

    if(isGanjil(4)){
        echo "Ganjil";
    }else{
        echo "Genap";
    }
//    echo date('d-M-Y', time()+60*60*24); 

   $jam = date("H");
   echo "sekarang jam" . $jam;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- harus sama dari urutan parameter dari functionya -->
    <h1><?= salam("Rynox") ?></h1>
    <!-- kalau misal ada parameter nya 2 di function maka harus pangil lagu dua duanya -->
     <!-- kalau gak di pangil 1 aja maka erorr -->
      <!-- bisa di pangil defalut -->
    <!-- DATANG nya di timpa oleH PAGI -->
    <?php if(isGanjil(3)) :?>
        <h1><?= "ini angka ganjil $angka"?></h1>
    <?php else :?>
        <h1><?= "ini angka genap $angka" . salam(); ?></h1>
    <?php endif; ?>




</body>
</html>