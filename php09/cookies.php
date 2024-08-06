<?php
//set cookies setcookie(name, value, expiration);
    //setcookie('language','sinhala', time()+60*60*24*7);

    /*
    if(isset($_COOKIE['language'])){
        $language = $_COOKIE['language']; 
        echo "selected language: {$language}";

    }else{
        setcookie('language','sinhala', time()+60*60*24*7);
    }
    */

    //how to remove a cookie
    setcookie('language','',-time()+60*60*24*7);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    
</body>
</html>