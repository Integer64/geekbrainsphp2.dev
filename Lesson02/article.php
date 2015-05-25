<?php
require __DIR__ . '/models/News.php';

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $news = new News();
    $data_article = $news->News_getNews($id);
}
include __DIR__.'/views/article.php';


