<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>News feed.</h1>
<a href="/Lesson04/Admin/Add">Добавить новость</a>
<table>
<?php foreach($news as $item):?>
    <tr>
    <td class="date"><?php echo strstr($item->date, ' ', true);?></td>
    <td class="title"><a href="<?php echo "/Lesson04/News/One/".$item->id?>"><?php echo $item->title;?></a></td>
    </tr>
<?php endforeach;?>
</table>
</body>
</html>

