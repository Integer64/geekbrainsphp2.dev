<?php

class NewsController
{
    public function actionAll()
    {

        $articles = NewsModel::findAll();
        if(empty($articles)){
            throw new E404Exception("Не найдены записи в БД.");
        }
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
            if(empty($article)){
                throw new E404Exception("Не найдена запись в БД.");
            }
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