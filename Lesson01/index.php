<?php
require __DIR__ . '/models/index.php';

$articles = Article_getAllTitle();

include __DIR__.'/views/index.php';