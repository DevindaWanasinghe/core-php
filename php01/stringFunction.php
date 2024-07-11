<?php 
    $first = "the first boxing wizard ";
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

First letter capital in all words: <?php echo ucwords($sentence);  //ucword function ?> <br>

Number of characters: <?php echo strlen($sentence);  //number of characters ?> <br>

Search for a string or character: <?php echo strstr($sentence, "box");  //number of characters ?> <br>

replace words: <?php echo str_replace("first","seven",$sentence);  //replace "first" word for "seven" ?> <br>





