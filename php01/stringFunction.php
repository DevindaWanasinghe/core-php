<?php 
    $first = "The first boxing wizard ";
    $second = "jump quickly.";

    //$sentence = $first . $second;

    $sentence = $first;
    $sentence .= $second;

    echo $sentence;
?>
<br>
All simple: <?php echo strtolower($sentence); //strtolower function ?> <br>  
All capital: <?php echo strtoupper($sentence);  //strtoupper function?> <br>
First letter capital: <?php echo ucfirst($sentence);  //ucfirst function?> <br>
