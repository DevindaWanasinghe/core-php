<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booleans</title>
</head>
<body>
    <?php
        $var1 = true;
        $var2 = false;
        $var3 = "book";
    ?>

    <?php echo "variable 1: " . $var1; ?> <br>
    <?php echo "variable 2: " . $var2; ?> <br>

    <br><br>

    <?php echo "Is Variable 1 boolean? " . is_bool($var1); ?> <br>
    <?php echo "Is Variable 3 boolean? " . is_bool($var3); ?> <br>
    <br>
    <?php 
        if ($var2 == false ){
            echo "Variable 2 is False";
        }
    ?>

    
</body>
</html>