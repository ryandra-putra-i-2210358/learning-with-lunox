<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <?php if( isset($_POST["submit"])) :  ?>
        <h1>haloo , selamat datang <?= $_POST["nama"] ?></h1>
    <?php endif; ?>


    <!-- form kalau atribute actionya di kosong kan maka datanya masuk ke diri di sini ke halaman post.php -->
    <!-- dan juga ketika tidak memakai action nya -->
    <!-- ketika form tidak memliki atribut sama sekali itu menjadi request nilainya get -->

    <form action="" method="post">
        <!-- semua data ini akan di kirim ke kirim.php -->
        <!-- langsung di arahkan ke kirim.php -->
        Masukan Nama :
        <input type="text" name="nama">
        Jurusan :
        <input type="text" name="jurusan">
        Umur :
        <input type="text" name="angka">
        <!-- nah data key nama nya ada di kirim.php -->
        <br>
        <button type="submit" name="submit">Kirim</button>
        <!-- kalau get itu datanya tampil di url -->
         <!-- kalau post itu datanya tidak tapil di url -->
    </form>
    
</body>
</html>