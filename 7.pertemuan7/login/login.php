<?php 
//cek apakah tombol sumbit sudah tekan atau belum
// isi isset $_POST = berdasarkan namenya di atribute namenya htmlnya
// name nya sumbit berarti $_POST["name"]
if(isset($_POST["submit"])){ 
    // kenapa langsung $_POST["submit"]
    // karena di bawah atau di halaman ini udah ada data name "submit"
    // jadi jika ada name sumbit maka lanjutkan
    // cek username & password
    
    if($_POST["username"] == "Lunox" && $_POST["password"] == "Ryandra"){
        //jika benar , redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // jika salah , tampilka kesalahanya
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Admin</h1>
    <!-- kenapa gak disini karena proses nya disini aja datanya -->
    <?php if(isset($error)) : ?>
        <p style="color: red;">username / password salah </p>
    <?php endif; ?>
    <ul>
        <form action="" method="post">
            <li>
                <!-- untuk saling berhubungan label kasih atrubut for  -->
                <!-- dan input kasih id -->
                <!-- dan label untuk for dan id untuk input harus memeliki nama yang sama agar saling berhubungan -->

                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <!-- name untuk menyimpan data dari $_POST -->
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
    
        </form>

    </ul>
    
</body>
</html>