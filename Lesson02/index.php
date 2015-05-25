<?php
require __DIR__.'/models/News.php';
$news = new News();
$articles = $news->News_getAllTitleNews();

include __DIR__.'/views/index.php';