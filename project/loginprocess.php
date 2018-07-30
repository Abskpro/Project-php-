<?php       
        session_start();
        include 'connection.php';

        if(isset($_POST['email'],$_POST['pass']))
        {   
            //grab the value from form
            $email=mysqli_escape_string($conn,$_POST['email']);
            $password=mysqli_escape_string($conn,$_POST['pass']);
            //blank cheque

            $loginsql="select * from login where email= '$email'";
            $sqlexec=mysqli_query($conn,$loginsql);

            $count= mysqli_num_rows($sqlexec);

        if($count == 1)
        {
            //echo "good to go"
            $user=mysqli_fetch_assoc($sqlexec);
            //var_dump($user);

            if( password_verify($password,$user['password']))
            {
                //echo"login sucessfull
                //var_dump($user);
                $_SESSION['loginId'] = $user['id'];
                header('location:dashboard.php');
            }
            else{
                $_SESSION['err']="invalid login details";
                header('location:index.php');
            }
        }
        else{
            $_SESSION['err']="email doesnt exist";
            header('location:login.php');
        }
    }
    else
    {
        header('location:index.php');
    }