<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css"  href="/Lesson01/css/view_index.css">
    <title></title>
</head>
<body>
<h1>News feed.</h1>
<a href="/Lesson01/add.php">Добавить новость</a>
<table>
<?php foreach($articles as $article):?>
    <tr>
    <td class="date"><?php echo strstr($article['date'], ' ', true);?></td>
    <td class="title"><a href="<?php echo "/Lesson01/article.php?id=".$article['id']?>"><?php echo $article['title'];?></a></td>
    </tr>
<?php endforeach;?>
</table>
</body>
</html>

