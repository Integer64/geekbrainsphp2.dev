<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css"  href="/Lesson02/css/view_index.css">
    <title></title>
</head>
<body>
    <a href="/Lesson02/index.php">На главную</a>
    <p></p>
    <form action="/Lesson02/add.php" method="post">
        <label for="title">Название новости</label>
    <p>
    <input type="text" id="title" name="title"/>
    </p>
    <label for="textNews" style="text-align: top">Текст новости</label>
    <p>
    <textarea id="textNews" rows="10" cols="45" name="textNews"></textarea>
    <input type="hidden" name="date" value="<?php echo date('Y-m-d H:i:s');?>"/>
    </p>
        <input type="submit" value="Опубликовать"/>
    </form>
</body>
</html>