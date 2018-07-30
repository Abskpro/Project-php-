<?php 
        session_start();
        include 'connection.php';
        if(!isset($_SESSION['loginId']))
        {
            header('location:login.php');
        }
        $var_value = $_SESSION['varname'];
        //echo $var_value;
        //var_dump($_POST);
        //var_dump($_FILES);//files is a 2d array
        //$GLOBALS['a'] = $var_value;
           // echo $GLOBALS['a'];

            if(isset($_POST['answer']))
            {
                $GLOBALS['var_value'];
                //echo $GLOBALS['var_value'];
                $id=$GLOBALS['var_value'];
                echo $GLOBALS['var_value'];
                $answer=mysqli_escape_string($conn,$_POST['answer']);
                $userId=$_SESSION['loginId'];
                //$sql="insert into article (answer) values ('$answer') where id='$id'";
                $sql="update article set answer='$answer' where id='$id'";

                mysqli_query($conn,$sql);

            }
            header('location:dashboard.php');
        
        