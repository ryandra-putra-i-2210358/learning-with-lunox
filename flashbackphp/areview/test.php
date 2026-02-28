<?php 

    // FUNCTION trim() hanya untuk merapihkan string
    // dan jsom_encode = mengubah type data menjadi string


    $nama = "Hellow";
    echo $nama;

    if(is_string($nama)){
        echo "Oke";
    }
    $hasil = isset($nama);
    echo $hasil;
    echo $hasil += 2;
    echo $hasil;

    function testFunction($nama, $kelas) {
        $text =  "halo nama ku $nama saya kelas $kelas <br>";
        if(is_string($text)){
            echo "True";
        }else{
            echo "False"; 
        }
        echo $text;
    }
    testFunction('Ryandra', 8);

    $array = ['string', testFunction('Lunox', 8), true];
    echo $array[1];
    foreach($array as $a => $value){
        echo "Index $a" . gettype($value) . PHP_EOL . "<br>" ;
    }

    // trim() confert type data apappun menjadi string

    $hasil2 =gettype($nama);
    echo $hasil2;

    $array2 = $array[1];

    echo trim($array2);


    function testTrim ($angka, $angka2){
        $hasil = $angka + $angka2;
        $functionTrim = trim($hasil);
        if(is_string($functionTrim)){
            echo "Jadi String $hasil";
        }else if(is_int($functionTrim)){
            echo "Memang tetap integer";
        }else{
            echo "None";
        }
    }
    testTrim(3, 1);
    $hasil3 = testTrim(3, 4);
    echo gettype($hasil3);


    function arrayTextNomber($nama = 'admin', $nama2 = 'user'){
        $hasil = $nama;
        $hasil2 = $nama2;
        echo "Hai saya adalah $hasil dan istri saya bernama $hasil2";
    }
    arrayTextNomber("Ryandra", "Lunox");
    echo "<br>";
    arrayTextNomber();

    $arrayHewan = ["Kucing", "Anjing", "Kelinci"];
    $arrayHewan[] = "Panda";
    foreach($arrayHewan as $hewan => $element){
        echo "<br> Index ". $hewan + 1 . " isi nya $element ";
    }

    function cleanInput($data) {
        $data = htmlspecialchars($data);
        return $data;
    }
    $hasil = "<h1>HellO World</h1>";
    $cek = cleanInput($hasil);
    echo $cek;

    function cekAngkaTerminate ($angka, $angka2) {
        $akumulasi = $angka += $angka2;
        if(is_int($akumulasi)){
            if($akumulasi < 0 && $akumulasi % 2 == 0){
                for($i = 1; $i <= 3; $i++){
                    echo "<br> Angka Genap Namun Negatif";
                }
            }else if($akumulasi > 0 && $akumulasi % 2 == 0){
                for($i = 1; $i <= 3; $i++){
                    echo "<br> Angka Genap Namun Positif";
                }
            }else {
                echo "undifined";
            }
        }else{
            echo "Bukan Integer";
        }
        return $akumulasi;
    }
    cekAngkaTerminate(20, 30);

    $y = 30;
    function arrayInner(){
        global $y;
        echo $y;
    }
    arrayInner();

    $books = [
        [
            "Gambar" => "ryanox.png",
            "Nama" => "Buku Dongeng1",
            "Penulis" => "Ryanox",
            "Harga" => "Rp.25.000",
        ],
        [
            "Gambar" => "ryanox2.png",
            "Nama" => "Buku Dongeng2",
            "Penulis" => "Ryanox Putra",
            "Harga" => "Rp.35.000",
        ],
        [   "Gambar" => "ryanox3.png",
            "Nama" => "Buku Dongeng3",
            "Penulis" => "Ryanox Lunox",
            "Harga" => "Rp.45.000",
        ],
    ];

    function inputString($input){
        function uniqidIT($nama){
            $jumlahKarater = strlen($nama);
            return $jumlahKarater;
        }
        $hasilnya = uniqidIT($input);
        return $hasilnya;
    }
    function mauPrintBerapa($angka){
        $hasilnya = inputString('Ryanox');
        if($hasilnya > 0){
            for($i = 1; $i <= $angka; $i++){
                echo "<br> True Love";
            }
        }
    }
    $cekhasil = mauPrintBerapa(8);
    var_dump($cekhasil);
    $array23 = ['nama', $nama, true, 32, $cekhasil];
    foreach($array23 as $index => $element){
        echo "<br>Index ke-". $index . "Adalah element dari" . gettype($element) . $element;
    }


    function arrayApaAja($angka1, $angka2, $angka3, $angka4, $angka5){
        return  [$angka1, $angka2, $angka3, $angka4, $angka5];
    }
    $hasilARRay = arrayApaAja(3,5,2,4,1);
    print_r($hasilARRay);
    foreach($hasilARRay as $angka => $element){
        echo "<br> Ini Index ke " . $angka . "isi element = ". $element;
    }
    
    $hasilAray2 = arrayApaAja(4,2,3,1,5);
    $covertString = json_encode($hasilAray2);
    var_dump($hasilAray2);
    echo "<br>";
    var_dump($covertString);

    function kotakImplodes($angka, $angka2) {
        return $angka**3 + $angka2**3;
    }
    echo kotakImplodes(3,4);

    function pengubahMenjadiInteger($nama){
        $jumlahKarakter = strlen($nama);
        if(is_numeric($jumlahKarakter)){
            if($jumlahKarakter % 2 == 0 && $jumlahKarakter > 0){
                echo "<br>Genap lebih besar dari nol = ". $nama;
            }else if($jumlahKarakter % 2 == 1 && $jumlahKarakter > 0){
                echo "<br>Ganjil Lebih besar dari nol = ". $nama;
            }
        }else{
            echo "ini adalah String dan jumlah nya". $jumlahKarakter;
        }
        return $jumlahKarakter;
    }
    echo pengubahMenjadiInteger("dskdnskdns");


    $angka332 = [3,21,4,51,40,56,32,12,];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .buku{
            display: inline-block;
        }
        .angka{
            display: inline-block;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            background-color: blueviolet;
            color: white;
            transition: 0.5s;
        }
        .angka:hover{
            transform: rotate(360deg);
            border-radius: 50px;
        }
    </style>

    <title>Document</title>
</head>
<body>

    <h1>Harga Buku</h1>

    <?php foreach($books as $book) : ?>
        <div class="buku">
            <ul>
                <li>
                    <img src="../areview/image/<?= $book["Gambar"]?>" alt="">
                </li>
                <li>Nama : <?= $book["Nama"]?></li>
                <li>Penulis : <?= $book["Penulis"]?></li>
                <li>Harga : <?= $book["Harga"]?></li>
            </ul>
        </div>
    <?php endforeach; ?>

    <h1>Test</h1>

    <?php for($i = 0; $i < count($angka332); $i++ )  : ?>
        <div class="angka" ><?= $angka332[$i]; ?></div>
    <?php endfor; ?>


    <script src="../areview/test.js"></script>



    
</body>
</html>