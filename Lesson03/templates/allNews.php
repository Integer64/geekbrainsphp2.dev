<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>News feed.</h1>
<a href="/Lesson03/index.php?ctrl=Admin&act=Add">Добавить новость</a>
<table>
<?php foreach($this->data as $news):?>
    <tr>
    <td class="date"><?php echo strstr($news->date, ' ', true);?></td>
    <td class="title"><a href="<?php echo "/Lesson03/index.php?ctrl=News&act=One&id=".$news->id?>"><?php echo $news->title;?></a></td>
    </tr>
<?php endforeach;?>
</table>
</body>
</html>

