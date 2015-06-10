<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <a href="/Lesson05/">На главную</a>
    <p></p>
    <form action="/Lesson05/Admin/AddNews" method="post">
        <label for="title">Название новости</label>
    <p>
    <input type="text" id="title" name="title"/>
    </p>
    <label for="textNews" style="text-align: top">Текст новости</label>
    <p>
    <textarea id="textNews" rows="10" cols="45" name="textNews"></textarea>
    <input type="hidden" name="date" value="<?php date_default_timezone_set('UTC'); echo date('Y-m-d H:i:s');?>"/>
    </p>
        <input type="submit" value="Опубликовать"/>
    </form>
</body>
</html>