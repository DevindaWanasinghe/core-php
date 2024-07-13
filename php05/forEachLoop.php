<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each Loop</title>
</head>
<body>
    <?php

        $jobCategories = array("accounting","ict","finance","markting","sales");

        foreach ($jobCategories as $items) {
            echo $items . "<br>";
        } 
    ?>
    <br>
    <br>
    <?php
        //Assosiative Array Create 
        $student = array("firstname"=>"Devinda", "surname"=>"Wanasinghe","age"=>22, "garade"=>13);


        foreach ($student as $items) {
            echo $items . "<br>";
        }

        echo "<br><br>";

        foreach ($student as $label => $items) {
            echo $label . " : " . $items . "<br>";
            # code...
        }

    
    
    
    ?>


    
</body>
</html>