<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h2>Sessions: 2</h2>
    <?php
        echo "User ID: {$_SESSION['user_id']}<br>";
        echo "First Name: {$_SESSION['first_name']}<br>";
    ?>
</body>
</html>