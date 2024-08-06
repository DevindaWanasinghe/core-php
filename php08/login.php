<?php
      if(isset($_POST['submit'])){
        //the userr has presed submit button
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == 'devinda' && $password == '123'){
            echo "Login Successful";
        }else{
            echo "Invalid username or password!";
        }
      }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login In</title>
</head>
<body>
    <form action="login.php" method="post">
        Username: <input type="text" name="username" id=""> <br>
        Password: <input type="password" name="password" id=""> <br>
        <input type="submit" value="Login" name="submit">



    </form>
    
</body>
</html>