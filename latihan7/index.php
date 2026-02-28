<?php
session_start();
if(isset($_POST["submit"])){
   if($_POST["username"] == "Lunox" && $_POST["password"]){
        $_SESSION["username"] = $_POST["username"];
        header('Location: admin.php');
        exit;
   }else {
    $erorr = true;
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
    <?php if(isset($erorr)) :?>
        <p style="color: red;">Email Atau Password Salah</p>
    <?php endif; ?>

    <h1>login</h1>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit" name="submit">Login</button>


    </form>
    
</body>
</html>