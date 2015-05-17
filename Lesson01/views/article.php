<?php
foreach($data_article as $data){
    $title = $data['title'];
    $text = $data['text'];
    $date = $data['date'];
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css"  href="/Lesson01/css/view_index.css">
    <title></title>
</head>
<body>
<h1><?php echo $title;?></h1>
<p>
    <?php echo $date;?>
</p>
    <p>
    <?php echo $text;?>
    </p>
<p>
    <a href="/Lesson01/index.php">На главную</a>
</p>
</body>
</html>