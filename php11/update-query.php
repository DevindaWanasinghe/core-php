<!-- insert connection -->
<?php require_once('inc/connection.php'); ?>
<?php
    /*
        UPDATE table_name
        SET column1 = value1, clloumn2 = value2;
        WHERE column_name = value
        LIMIT 1
    */

    $query = "UPDATE user SET first_name='nipuni' WHERE id = 6"; 
    $result = mysqli_query($connection, $query);

    //mysqli_affected_rows() = returns number of rows affected
    if($result){
        echo mysqli_affected_rows($connection) . " Records update.";
    }
    else "Database query faild.";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Query</title>
</head>
<body>
    
</body>
</html>

<!-- close connection -->
 <?php mysqli_close($connection); ?>