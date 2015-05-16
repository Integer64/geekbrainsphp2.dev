<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php foreach($articles as $article):?>
    <?php echo $article['date']." ".$article['title']."<br>";?>
<?php endforeach;?>
</body>
</html>

