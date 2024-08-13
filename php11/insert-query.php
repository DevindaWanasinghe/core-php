<!-- insert connection -->
<?php require_once('inc/connection.php'); ?>
<?php
    /*
        INSERT INTO table_name (
            column1, column2, etc
        ) VALUES (
            value1, value2, etc 
        )
    */
    $first_name = 'Devinda';
    $last_name = 'Wanasinghe';
    $email = 'devindawanasinghe@gmail.com';
    $password = 'mypassword';
    $is_deleted = 0;

    $hashed_password = sha1($password);
    //echo "Hashed Password: {$hashed_password}";

    $query = "INSERT INTO user (first_name, last_name, email, password, is_deleted)
     VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$hashed_password}',{$is_deleted})";

    $result = mysqli_query($connection, $query);

    if ($result){
        echo "1 Record added";
    }else{
        echo "Database query faild!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Query</title>
</head>
<body>
    
</body>
</html>

<!-- close connection -->
 <?php mysqli_close($connection); ?>