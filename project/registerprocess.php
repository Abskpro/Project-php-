<?php 
    session_start();
    include 'connection.php';

    //form submitted or not 

    if(isset($_POST['email'],$_POST['pass'],$_POST['rpass'],$_POST['name']))
    {
        //grab the value from form 

        $email = mysqli_escape_string($conn,$_POST['email']);
        $pass = mysqli_escape_string($conn,$_POST['pass']);
        $rpass = mysqli_escape_string($conn,$_POST['rpass']);
        $name = mysqli_escape_string($conn,$_POST['name']);

        //blank check 

        //password confirmation check

        //email is valid or not 

        $errors = [];

        if(empty($email))
        {
            $errors[] = "Email is required";
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $errors[] = "Email must be valid";
        }

        if(empty($name))
        {
            $errors[] = "Fullname is required";
        }

        if(empty($pass))
        {
            $errors[] = "Password is required";
        }
        else if($pass != $rpass)
        {
            $errors[] = "Password confirmation failed";
        }

        if(empty($errors))
        {
            $hashPassword = password_hash($pass,PASSWORD_DEFAULT);
            // echo $hashPassword;
            // exit;
            $sql = "insert into login (email,password,fullname) values ('$email','$hashPassword','$name')";

            if( mysqli_query($conn,$sql) )
            {
                $_SESSION['msg'] = "Users inserted. GO for login";
            }

        }
        else 
        {
            $_SESSION['err'] = $errors;
        }


     
    }
    header('location:register.php');