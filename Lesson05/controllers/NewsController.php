<?php

class NewsController
{
    public function actionAll()
    {
        $articles = NewsModel::findAll();
        $view = new View();
        $view->news = $articles;
        $view->display('allNews.php');
        }

    public function actionOne()
    {
        if(!empty($_GET['id']))
        {
            $id = $_GET['id'];
            $article = NewsModel::findOneByPk($id);
            $view = new View();
            $view->oneNews = $article;
            $view->display('oneNews.php');
        }
        else
        {
            header("Location: /Lesson05/");
        }
    }
}