<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
</head>
<body>
    <h1>Readng News</h1>

        <?php
            //print_r($_GET);
            $news_Items = $_GET['news_items'];
            $category = $_GET['category'];
        ?>

        <h2>Category: <?php echo $category; ?></h2>
        <h2>News Items: <?php echo $news_Items; ?></h2>

    
</body>
</html>