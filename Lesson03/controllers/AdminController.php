<?php



class AdminController {

    public function actionAdd(){
        if(!empty($_POST['title']) && !empty($_POST['text']) && !empty($_POST['date'])){
            $news = new News();
            $data = [
                'title' => $_POST['title'],
                'text'  => $_POST['text'],
                'date'  => $_POST['date']
            ];
            $news->Article_add('news',$data);
        }
        header("Location: /Lesson03/");
    }
} 