<?php

class NewsController {
    public function actionAll(){
        $items = News::Article_getAll('news');
        var_dump($items);

    }

    public function actionOne(){
        $items = News::Article_getOne('news',1);
        var_dump($items);
    }

} 