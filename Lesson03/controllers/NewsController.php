<?php

class NewsController {
    public function actionAll(){
        $articles = News::Article_getAll();
        }

    public function actionOne(){
        if(!empty($_POST['id'])){
            $id = $_POST['id'];
            $article = News::Article_getOne($id);
        }else{
            header("Location: /Lesson03/");
        }
    }
}