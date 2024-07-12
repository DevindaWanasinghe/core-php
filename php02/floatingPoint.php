<!DOCTYPE html>
< lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floating Point</title>
</head>
    <?php $float = 6.28; echo $float; ?> <br>
    <?php $float += 5; echo $float; ?> <br>
    <?php echo 10/3; ?> <br>



    <h2>Functions</h2>
    Round: <?php echo round($float,1);?> <br>
    Round up: <?php echo ceil($float); ?> <br>
    Round down: <?php echo floor($float); ?> <br>

    
    <h2>How to check if a number is an integer or a float</h2>

    <?php

        $myfloat = 7.34;
        $myintger = 20;
    
    ?>

    <?php echo "Is {$myfloat} an Integer? " . is_int($myfloat); ?> <br>
    <?php echo "Is {$myintger} an Integer? " . is_int($myintger); ?> <br>
    <br>
    <?php echo "Is {$myfloat} an float? " . is_float($myfloat); ?> <br>
    <?php echo "Is {$myintger} an float? " . is_float($myintger); ?> <br>
    <br>
    <?php echo "Is {$myfloat} an number? " . is_numeric($myfloat); ?> <br>
    <?php echo "Is {$myintger} an number? " . is_numeric($myintger); ?> <br>


    
</body>
</html>