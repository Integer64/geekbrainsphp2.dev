<?php
foreach($this->data as $news){
    $title =$news->title;
    $text = $news->text;
    $date = $news->date;
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
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
    <a href="/Lesson04/">На главную</a>
</p>
</body>
</html>