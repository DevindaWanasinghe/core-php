<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php

        $user_group_code = 'U';

        switch ($user_group_code) {
            case 'A':
                echo "User Group: Adminstrator <br>";
                break;
            
            case 'p':
                echo "User Group: Power User <br>";
                break;

            case 'U':
                echo "User Group: User <br>";
                break;

            case 'G':
                echo "User Group: Guest <br>";
                break;
            
            default:
                echo "Invalid user Group";
                break;
        }
    ?>
    
</body>
</html>