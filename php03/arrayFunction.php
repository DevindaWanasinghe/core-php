<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array functions</title>
</head>
<body>
    <?php
        $myNumbers = array(13, 17,19,23, 45,66, 67);

    ?>

    Maximum Value: <?php echo max($myNumbers); ?> <br>

    Minimum Value: <?php echo min($myNumbers); ?> <br>

    Count: <?php echo count($myNumbers); ?> <br>

    sort: <pre> <?php sort($myNumbers); print_r($myNumbers); ?> </pre>

    Reverse sort: <pre> <?php rsort($myNumbers); print_r($myNumbers); ?> </pre> <br>

    Implode:
    <?php 
        $string = implode(" | ", $myNumbers);
        echo $string;    
    ?>

    Explode:
    <pre>
    <?php 
        $newArry = explode(" | ", $string);
        print_r($newArry); 
    ?>
    </pre>

    search: <?php echo in_array(66, $myNumbers); ?>



</body>
</html>