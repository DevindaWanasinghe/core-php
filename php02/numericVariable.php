<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integers</title>
</head>
<body>
    <?php

        $var1 = 30;
        $var2 = 40;
    
    ?>
    Basic calculation (((10+20+ $var1)*$var2)/ 20- 50):
     <?php echo (((10+20+ $var1)*$var2)/ 20- 50); ?>
    
     <h2>Some usefull functions</h2>

     squre root: <?php echo sqrt(100); ?> <br>
     Exponential: <?php echo pow(2, 4); ?> <br>
     Absolute Value: <?php echo abs(10-15 ); ?> <br>
     Amodule: <?php echo fmod(10, 3); ?> <br>
     Random Number: <?php echo rand(); ?> <br>
     Random Number: <?php echo rand(10, 100); ?> <br>

    <h2>Increment /  Decrement</h2>

    Addition: <?php $var1 += 20; echo $var1; ?> <br>
    Subtraction: <?php $var1 -= 40; echo $var1; ?> <br>
    Multiplication: <?php $var1 *= 9; echo $var1; ?> <br>
    Division: <?php $var1 /= 3; echo $var1?>
    

</body>
</html>