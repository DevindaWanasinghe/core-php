<?php

    //$connection = mysqli_connect(dbserver,dbuser, dbpass, dbname);

    $connection = mysqli_connect('localhost','root','','userdb');

    //mysqli_connect_errno();     mysqli_connect_error();
    //checking the connection

    if(mysqli_connect_errno()){
        die('Database connection faild'.mysqli_connect_error());
    }else{
       // echo "Connection successful!";
    }
?>