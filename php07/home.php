<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home Page</h1>

    <?php
        $news_items = 3122;
        $category =  urlencode("sports & hobbies");
        $url = "news.php?news_items={$news_items}&category={$category}";
    
    ?>



    <a href="<?php echo $url; ?>">Read News Items 1</a> 
    
</body>
</html>