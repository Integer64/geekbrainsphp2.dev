<?php



class AdminController {

    public function actionAddNews(){

        if(!empty($_POST['title']) && !empty($_POST['textNews']) && !empty($_POST['date'])){
            $article = new NewsModel();
            if(empty($article)){
                throw new E404Exception;
            }
            $article->title = $_POST['title'];
            $article->text = $_POST['textNews'];
            $article->date = $_POST['date'];
            $article->insert();
        }
        header("Location: /Lesson05/");

    }

    public function actionAdd(){
        $view = new View();
        $view->display('addNews.php');
    }
} 