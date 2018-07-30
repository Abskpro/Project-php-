<?php
     session_start();
     if(!isset($_SESSION['loginId']))
     {
         header('location:login.php');
     }
    include 'connection.php';

    //sql statement
   $_SESSION['varname']=$_GET['id'];
   

    // $selectSql="select * from articles";
      $id=$_GET['id'];
      $selectSql="select title from article where id='$id'";
    //execute sql statement

    $sqlExecute=mysqli_query($conn,$selectSql);

    $answer=[];

    //var dump($sqlExecute);

    //$data=mysqli_fetch_assoc($sqlExecute);

    while($data= mysqli_fetch_assoc($sqlExecute)){
        //var_dump($data);
        $answer[] = $data;
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php foreach($answer as $article){
        ?>
            <h1><?php echo $article['title']; ?></h1>
            <hr>
            <?php }?>
            <form action="answer_process.php" enctype="multipart/form-data" method="post">
        <p>
            Answer <br>
            <textarea name="answer" cols="150" rows="15"></textarea>
        </p>
        <input type="submit" value="Submit"><br>
        </form>
    </body>
    </html>