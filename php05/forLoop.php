<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>
    <?php

        for ($i=1; $i < 12; $i++) { 
            echo "12 x {$i} = " . 12*$i . "<br>";

        }
    ?>
    <br><br>

    <?php
        for ($i=1; $i <= 12; $i++) {
            
            echo "{$i} x Multiple"."<br><br>";

            for ($l=1; $l <= 12 ; $l++) { 
                echo "{$i} x {$l} = " . $i*$l . "<br>";
            } 
            echo "<br>";
        }
  
    ?>
 
</body>
</html>