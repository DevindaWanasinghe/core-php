<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <?php

        $sub1 =  60;
        $sub2 = 51;

        if (($sub1 > 50) && ($sub2 > 50)) {
            echo "You have passed the exam";
        }
        else{
            echo "you need to pass both subjects!";
        }
    ?>

    <br>
    <br>
    <h2>Not Operator</h2>
    <?php
        //$username = "devinda";

        if(!isset($username)){
            //echo "Yourname is: " . $username;
            echo "Please enter the username!";
        }
    
    ?>

    
</body>
</html>