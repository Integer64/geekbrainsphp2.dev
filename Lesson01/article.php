<?php
require __DIR__ . '/models/article.php';

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $data_article = Article_getArticle($id);
}
include __DIR__.'/views/article.php';


