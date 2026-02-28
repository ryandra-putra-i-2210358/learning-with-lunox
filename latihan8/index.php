<?php
    if(isset($_POST["submit"])){
        if($_POST["username"] == "Lunox" && $_POST["password"] == "Ryandra" ){
            
            header("Location: admin.php");
            exit;
        }else {
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    
    <div class="form-login">
        <?php if(isset($error)) : ?>
            <p style="color: red;">Id Atau Password Salah</p>
        <?php endif;?>
        <h1>Login</h1>
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        
            <button type="submit" name="submit">Login</button>
        </form>

    </div>

    
    
</body>
</html>