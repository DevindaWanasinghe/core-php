<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $mycars = array("Toyota","Nissan","BMW","Benz");
        echo $mycars[2];
    ?>
    <br>

    <h2>Before</h2>
    <pre>
        <?php print_r($mycars);?>
    </pre>

        <?php $mycars[4] = "suzuki"; ?>
        <?php $mycars[] = "Audi"; ?>
        <?php $mycars[3] = "Honda";?>

    <h2>After</h2>
    <pre>
        <?php print_r($mycars);?>
    </pre>




    
</body>
</html>