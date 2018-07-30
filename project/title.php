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
<head><div class="whole">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body><div class="whole">    
    <h1>Add new article</h1>
    <form action="article_process.php" enctype="multipart/form-data" method="post">
        <p>
            Title : <input type="text" name="title">
            </p>
        <p>
            Description <br>
            <textarea name="description" cols="60" rows="5"></textarea>
        </p>
        <input type="submit" value="Add"><br>
        </form></div>
        <div class="question_answer">
            </div>
  </body>
</html>    