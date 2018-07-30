<?php

    include 'connection.php';

    //sql statement
   
    // $selectSql="select * from articles";
      
      $selectSql="select * from article order by id desc";
    //execute sql statement

    $sqlExecute=mysqli_query($conn,$selectSql);

    $answer=[];

    //var dump($sqlExecute);

    //$data=mysqli_fetch_assoc($sqlExecute);

    while($data= mysqli_fetch_assoc($sqlExecute)){
        //var_dump($data);
        $ans[] = $data;
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
        <h1>Answer</h1>
        <?php foreach($ans as $article){
        ?>  <h5>ID:  <?php echo $article['id']; ?></h5>
            <h5>TITLE:  <?php echo $article['title']; ?></h5>
            <h5>DESCRIPTION:<p>
            <?php echo $article['description']; ?>
            </p></h5>
            <h5>ANSWER:<p>
            <?php echo $article['answer']; ?>
            </p></h5>
            <a href="delete.php?id=<?php echo $article['id'];?>"onclick="return confirm('Do you really want to delete')" >Delete</a>
            <a href="ans.php?id=<?php echo $article['id'];?>"onclick="return confirm('Do you really want to answer')" >Answer</a>
            <hr>
            <?php }?>
    </body>
    </html>