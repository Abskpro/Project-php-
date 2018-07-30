<?php

    //php mysql connection

    //hostname,username,password,dbname 

    $conn=mysqli_connect("localhost","root","","database1");
    
    if(!$conn)
    {
        die("error");
    }