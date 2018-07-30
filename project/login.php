<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style.css" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body><div id=all>
    <h1 class="align" id="padlock">login</h1>
    <?php
        if(isset($_SESSION['err'])){
            echo $_SESSION['err'];
            unset($_SESSION['err']);
        }
        ?>
        <div class="align" id="padlock">
    <form action="loginprocess.php" method="post">
            <p>
                Email:<input type="email" name="email">
            </p>
            <p>
                Password:<input type="password" name="pass">
            </p>
            <input type="submit" value="Login">
    </form></div><br>
    <div class="align" id="padlock">Are you new?  <a href="register.php"><input type="submit" value="Register"></a></div></div>
</body>
</html>