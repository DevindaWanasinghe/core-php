<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays2</title>
</head>
<body>
    <?php
        $mycars = array(10, 20, 30,"Toyota","Nissan","BMW","Benz", array("black", "white", "blue"), "kia", "rx10",);
        
    ?>
    <br>
    <h3>Before</h3>
    <pre>
        <?php echo print_r($mycars); ?>
    </pre>

    <?php $mycars[7][0]= "red"; ?>
    

    <h2>After</h2>
    <pre>
        <?php echo print_r($mycars); ?>
    </pre>

    
 




    
</body>
</html>