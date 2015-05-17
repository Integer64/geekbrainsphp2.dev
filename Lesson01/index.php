<?php
require __DIR__ . '/models/article.php';

$articles = Article_getAllTitle();

include __DIR__.'/views/index.php';