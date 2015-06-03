<?php

class NewsController {
    public function actionAll(){
        $articles = News::getAll();
        $view = new View();
        $view->news = $articles;
        $view->display('allNews.php');
        }

    public function actionOne(){
        if(!empty($_GET['id'])){
            $id = $_GET['id'];
            $article = News::getOne($id);
            $view = new View();
            $view->oneNews = $article;
            $view->display('oneNews.php');
        }else{
            header("Location: /Lesson04/");
        }
    }
}