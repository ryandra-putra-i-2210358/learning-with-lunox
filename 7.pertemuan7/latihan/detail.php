<?php 
    // cek apakah ada data di $_GET?
    // ISSET adlaah untyk mngecek apakah variabel udah di bikin atau belum
    // kaya ?nama tah si nama itu udah dibikin apa belum

    // misal !isset() belum di bikin isset() udah di bikin
    
    
    // jadi kalau ini di cetak melalui method get di index.php ya yakan 
    // nah kalau kita akses detail.php langsung di url nya ototamis blum kebiikin dong datanya
    // maksudnya datanya belum ke $_GET
    
    // MAKAANYA DATA NYA HILANG ATAU GAK ADA
    
    // DAN INI JUGA BAHAYA KALAU MISAL DI AKSES SECARA INSTAN BEGINI DI URL NYA
    // NAH KITA CEGAH DENGAN MENGECEK KEY, SOLUSINYA KITA PERIKSA DULU KEY dari php?nama nya

    // nah kalau misalnya belum bikin langsung di pindah kan oleh rederect ke halaman utama
    if(!isset($_GET["nama"]) || 
    !isset($_GET["nim"]) || 
    !isset($_GET['umur']) || 
    !isset($_GET['email']) || 
    !isset($_GET['jurusan']) ||
    !isset($_GET['jodoh'])) {
        // redirect
        header("Location: ../index.php ");
        exit;
    }
    // tuh langsung pindah ke halaman pertama kalau mau akses detail di url secara tidak sah
    // kecuali pakai link a yang sah tertera di di link sebelumnya




    /// method rquest get itu melalui url
    // method request posh itu melalui form

    // form bisa get bisa posh tapi kalau url bisa get doang
    


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data</title>
</head>
<body>
    <ul>
        <li>Nama : <?= $_GET["nama"]; ?> </li>
        <li>Nim : <?= $_GET["nim"]; ?> </li>
        <li>Umur: <?= $_GET["umur"];?> </li>
        <li>Email : <?= $_GET["email"]; ?> </li>
        <li>Jurusan : <?= $_GET["jurusan"]; ?> </li>
        <li>Jodoh : <?= $_GET["jodoh"]; ?> </li>
    </ul>

    <a href="../index.php">Kembali</a>

</body>
</html>