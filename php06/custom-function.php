<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserDefined Functions</title>
</head>
<body>
    <?php
        function get_month_name($monthval=0, $yearval=2016){ //asign default paramitars

           switch ($monthval){
                case 1: $month_name = "Duruthu";break;
                case 2: $month_name = "Navam";break;
                case 3: $month_name = "Medin";break;
                case 4: $month_name = "bak";break;
                case 5: $month_name = "wesak";break;
                case 6: $month_name = "poson";break;
                case 7: $month_name = "esala";break;
                case 8: $month_name = "nikini";break;
                case 9: $month_name = "binara";break;
                case 10: $month_name = "vap";break;
                case 11: $month_name = "il";break;
                case 12: $month_name = "uduwap";break;
                default: $month_name = "Invalid month"; break;
           }
           return $yearval . " " . $month_name;

        }

        echo get_month_name(8, 2024);
        echo "<br>";
        echo get_month_name(9,2025);


        echo "<br>";

        $domain_name = "devinda";
        echo "Outside function: {$domain_name} <br> ";
        myfunc(); //calling function
        echo "Outside function again: {$domain_name} <br> ";

        function myfunc(){

            global $domain_name;
            echo "Inside function: {$domain_name} <br>";

            $domain_name = "www";

        }
    ?>

    

    
</body>
</html>