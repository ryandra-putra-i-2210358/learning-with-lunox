<?php
    session_start();
    if(isset($_POST["submit"])){
        if($_POST["username"] == "Lunox" && $_POST["password"] == "Ryandra"){
            $_SESSION["username"] = $_POST["username"]; // Perbaiki assignment
            header('Location: admin.php');
            exit;
        }else{
            $erorrs = true; // Perbaiki typo
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h1>Login</h1>
            <?php if(isset($erorrs)) : ?>
                <p style="color: red;">Username dan password salah </p>
            <?php endif ?>
            <form action="" method="post">
        
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
                <br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <br>
                <button type="submit" name="submit">Login</button>
        
            </form>
        </div>
    </div>
</body>
</html>