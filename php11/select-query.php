<!-- insert connection -->
<?php require_once('inc/connection.php'); ?>

<?php
    $query = "SELECT first_name, last_name, email FROM user";

    $result = mysqli_query($connection, $query);

    if($result){
        //checking how many records returned from the query
        echo mysqli_num_rows($result). " Records Fund <hr>";

        $table = '<table>';
        $table .= '<tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>';

        //display all records into table
        while($record = mysqli_fetch_assoc($result)){
            $table .= '<tr>';
            $table .= '<td>' . $record['first_name'] . '</td>';
            $table .= '<td>' . $record['last_name'] . '</td>';
            $table .= '<td>' . $record['email'] . '</td>';
            $table .= '</tr>';

        }

        $table .= '</table>';
        //echo "Query Succefull";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Query</title>
    <style>
        table {border-collapse: collapse;}
        td, th {border: 1px solid black; padding: 10px;}
    </style>
</head>
<body>

    <?php echo $table; ?>
    
</body>
</html>

<!-- close connection -->
 <?php mysqli_close($connection); ?>