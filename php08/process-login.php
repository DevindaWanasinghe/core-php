<?php
      
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == 'devinda' && $password == '123'){
            echo "Login Successful";
        }else{
            echo "Invalid username or password!";
        }
     
?>
