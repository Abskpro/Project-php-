<?php
    session_start();
    if(!isset($_SESSION['loginId']))
    {
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="title.css" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome</h1>
    <ul class="arr">
    <li><a href="title.php">Ask Questions</a><li>
    <li><a href="answer.php">Answer Questions</a><li>
    <li><a href="logout.php">Logout</a><li>
</ul>
</body>
</html>    