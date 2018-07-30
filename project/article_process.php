<?php 
        session_start();
        include 'connection.php';
        if(!isset($_SESSION['loginId']))
        {
            header('location:login.php');
        }
        //var_dump($_POST);
        //var_dump($_FILES);//files is a 2d array

            if(isset($_POST['title'],$_POST['description']))
            {
                $title=mysqli_escape_string($conn,$_POST['title']);
                $description=mysqli_escape_string($conn,$_POST['description']);
                $userId=$_SESSION['loginId'];

                $sql="insert into article (title,description,user_id) values ('$title','$description','$userId')";
                mysqli_query($conn,$sql);

            }
            header('location:dashboard.php');