<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statement</title>
</head>
<body>
    <?php
        $avg_score = 85;
        echo "Score: " . $avg_score;
        echo "<br>";

        if($avg_score >= 70){
            echo "You are quaified! GRADE A";
        }
        elseif($avg_score >= 40){
            echo "You are qualified! GRADE B";
        }
        else{
            echo "You are not qualified!";
        }
    ?>
    
</body>
</html>