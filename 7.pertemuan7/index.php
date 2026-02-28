<?php
// varibael skocope /lingkup variabel 
$x = 10; // varibael lokal di index.php ini saja

function tampilx() {
    // $x = 20; // ini variabel yang bisa akses di dlam function ini saja
    // echo $x;
    // x nya gak terdeksi ya? padahal udah dideklrasikan bahwa
    // $x = 10 tapi gak muncul kenapa?
    // karena varibel $x=10 dan di dalam $x itu beda lingkup scope
    // jadi weh gak kebaca
    // jadi variabel yang di dalam function, variabel nya berlaku di dalam function itu saja




    // nah gimana kalau ingin kekeh variabel global di masukan ke function
    //caranya gini pakai keyword global

    global $x;
    echo $x;

}
// tampilx();
// echo "<br>";
// echo $x; // ini bisa  ngeakses variabel global $x



// SUPER GLOBAL
// varibel global milik php
// merupakan array asosiative

// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER 
// $_ENV
// Semua variabel ini adalah type array asosiative
// jadi perlakukan lah seperi array asosiative

// var_dump($_GET); // edfault array nya kososng
// var_dump($_POST); // defaultnya arrarnya kosong;
// var_dump($_SERVER); // Ini mengetahui server kita 

// echo $_SERVER["SERVER_NAME"]


// mtode requst get itu beda dengan $_GET

// $_GET
// cara penulisanya
// $_GET["nama"] = "Ryandra";
// $_GET["nim"] = "i.2210358";

// misal ada link  URL dan cara memasukan datanya dengan " ?"
// artinya memasukan data ke halaman ini mengunakan metode request get
// di tangkap oleh super global $_GET


// cara memasukan data lewat url ketik aja
// http://localhost/phpdasar/7.pertemuan7/index.php?nama=Lunox 
// kaya gitu kasih akhiran ?nama=Lunox
// kalau mau 2 data
// http://localhost/phpdasar/7.pertemuan7/index.php?nama=Lunox&pacar=Ryandra%20Putra

// var_dump($_GET)

$mahasiswa = [
    [
        "Nim" => "2210358",
        "Nama" => "Ryandra",
        "Umur" => 22,
        "Email" => "email@gmail.com",
        "Jurusan" => "Ilmu Komputer",
        "Jodoh" => "Lunox"
    ],
    [
        "Nim" => "2210368",
        "Nama" => "Lunox",
        "Umur" => 21,
        "Email" => "email2@gmail.com",
        "Jurusan" => "Ilmu Komputerr",
        "Jodoh" => "Ryandra"
    ],
]

// method rquest get itu melalui url
// method request posh itu melalui form

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
   <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="../7.pertemuan7/latihan/detail.php?nama=<?= $mhs["Nama"]; ?>&nim=<?= $mhs["Nim"]; ?>&umur=<?=$mhs["Umur"]; ?>&email=<?= $mhs["Email"]; ?>&jurusan=<?= $mhs["Jurusan"];?>&jodoh=<?= $mhs["Jodoh"]; ?>"> <?= $mhs["Nama"];?> </a>
            <!-- harus sesua misalnya url?nama= -->
             <!-- maka yang harus di kirim ke detailnya yaitu ke $_GET halaman detail -->
              <!-- yaitu nama -->
        </li>

    <?php endforeach ?>
    <!-- metode request get adalah metode pengirim man data melalui url dan data tersebut di ambil di $_GET -->
    
</body>
</html>



