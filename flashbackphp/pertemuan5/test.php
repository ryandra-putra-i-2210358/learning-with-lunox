<?php
    $nama = "Ryandra";
    $array = [3,32,13,32];

    function test($a = "string", $b = 3){
        $angka1 = $a;
        $angka2 = $b;
        $array = [$angka1, $angka2];

        if(is_int($array[0]) == true && is_int($array[1]) == true){
            return 'Ini angka Boy' . $array[0] . $array[1];
        }else if (is_string($array[0]) == true && is_string($array[1]) == true){
            return "Ini String coy" . $array[0] . $array[1];
        }else{
            return 'Bukan String angka' . $array[0] . $array[1];
        }

        return $array;
    }
    echo test(22,22);
    echo "<br>";

    $arayy = ["Ryandra", "Reguler", "Email", "0812345678"];

    function isiEmpatNilaiArray ($array1, $array2, $array3, $array4) {
        return [$array1, $array2, $array3, $array4];
    }

    function verifArray($nomer) {
        $arrayFunction = isiEmpatNilaiArray(2,1,4,1);
        if(is_integer($arrayFunction[0])){
            $arrayFunction[0] += $nomer;
        }else{
            return "Naon";
        }
        return $arrayFunction;
    }
    print_r(verifArray(4));

    echo "<br>";
    function cekTypeData($a){
        $data = $a;
        if(is_int($data) == true){
            return "Ini Integer $data";
        }else if(is_string($data) == true){
            return "Ini String $data";
        }else if(is_bool($data) == true){
            return "Ini Boolean $data";
        }else{
            return "Data Tidak ada";
        }

        return $data;
    }

    echo cekTypeData(1);
    for($i = 0; $i < count($array); $i++){
        echo $array[$i];
    }
    echo "<br>";
    function tambah($a){
        return $a += 30;
    }
    
    $hasil = tambah(40);

    function cekNilai($nomer){
        $data = $nomer;
        if(is_int($data)){
            if($data % 2 == 0){
                for($a = 1; $a <= 3; $a++){
                   echo "$a. Ini Genap ya $data <br>";
                }
            }else {
                for($a = 1; $a <= 3; $a++){
                   echo "$a. Ini ganjil ya $data <rb>";
                }   
            }
        }else {
            return "none";
        }
    }
    echo cekNilai(tambah(30));
    $input = var_dump(cekNilai($array[] = 40 + tambah(30)));
    if($input == NULL){
        echo "yes";
    }
    
    $nomerAngka = tambah(30);
    function cekFunction ($nama) {
        $number = $nama;
        if(is_int($number) == true){
            if($number % 2 == 0 && $number > 10){
                echo "angka ini genap dan $nama > 10";
                return $number;
            }else if($number % 2 == 1 && $number > 10){
                echo "angka ini ganjil dan $nama > 10";
                return $number;
            }else{
                echo "Gak bener coba cek lagi";
            }
        }else{
            echo "Bukan angka";
        }
    }
    echo cekFunction(tambah(38));
    echo "<br>";

    function validate($angka1, $angka2){
        $angkaNominal = tambah(30); // 60
        if($angkaNominal % 2 == 0){
            $hasil = $angkaNominal += $angka1;
            return $hasil += $angka2;
        }else if($angkaNominal % 2 == 1){
            $hasil = $angkaNominal -= $angka1;
            return $hasil -= $angka2;
        }else{
            return "None";
        }
        return $angkaNominal;
    }
    echo validate(33, 33);
    echo cekFunction(11);
    function innerFunction($nomer){
        $hasil = validate(30, 20); // 110
        $hasil -= $nomer;
        $cek = cekFunction($hasil);
        if(is_int($cek) == true){
            for($i = 1; $i <= 3; $i++){
                echo "Oke <br>";
            }
        }else{
            echo "Ini string === > $cek";
        }
        return $hasil;
    }
    var_dump(innerFunction(10));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pertemuan5/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="bungkus-top">
            <h1 class="text-utama">About Us</h1>
            <div class="bungkus">
                <div class="kiri">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti animi mollitia placeat eaque quos! Numquam officia nisi, sit porro voluptas autem voluptates eum necessitatibus quam repudiandae consequatur praesentium neque voluptatem?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus architecto alias a aspernatur repellat, doloremque, est dolor nulla temporibus quibusdam deleniti? Sint eveniet laborum consectetur, ab possimus voluptate unde.</p>
                    <?php foreach ($arayy as $arr) : ?>
                        <p>Nama : <?= $arr ?></p>
                    <?php endforeach; ?>
                </div>
                <div class="kanan">
                    <img src="../pertemuan5/image/ryanox.png" alt="">
                    
                </div>
            </div>
            
        </div>
        
        
        <div class="bungkus-top-flex">
            <h1 class="text-kedua">Get Started</h1>
            <div class="bungkus2">
                <div class="kiri-2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti animi mollitia placeat eaque quos! Numquam officia nisi, sit porro voluptas autem voluptates eum necessitatibus quam repudiandae consequatur praesentium neque voluptatem?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus architecto alias a aspernatur repellat, doloremque, est dolor nulla temporibus quibusdam deleniti? Sint eveniet laborum consectetur, ab possimus voluptate unde.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat velit tenetur incidunt voluptas, aspernatur sequi laudantium nam rerum atque eos eaque odio ex eveniet ab ipsa quam laborum possimus fugit!</p>
                    
                </div>
                <div class="kanan-2">
                    <img src="../pertemuan5/image/ryanox2.png" alt="">
                </div>
            </div>

        </div>
    </div>





<script src="../pertemuan5/scope.js"></script>
    
</body>
</html>