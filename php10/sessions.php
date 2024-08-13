<?php
    session_start();
    $_SESSION['user_id'] = 30;
    $_SESSION['first_name'] = 'Devinda';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <?php
        echo "User ID: {$_SESSION['user_id']}<br>";
        echo "First Name: {$_SESSION['first_name']}<br>";
    ?>
</body>
</html>