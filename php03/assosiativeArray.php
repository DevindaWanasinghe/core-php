<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <?php
        $students = array("first_name" => "sajith", "last_name" => "wanasinghe", "age" => 21);
    ?>

    <pre>    
        <?php print_r($students);?>
    </pre>

    <?php echo $students["first_name"];?> <br>
    <?php echo $students["first_name"] . " " .  $students["last_name"];?> <br>

    <?php $students["age"] = 24;?>

    <?php echo $students["age"]; ?>

    
</body>
</html>