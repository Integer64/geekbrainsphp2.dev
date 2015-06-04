<?php



class AdminController {

    public function actionAddNews(){

        if(!empty($_POST['title']) && !empty($_POST['textNews']) && !empty($_POST['date'])){
             $data = [
                'title' => $_POST['title'],
                'text'  => $_POST['textNews'],
                'date'  => $_POST['date']
            ];
            News::add($data);
        }
        header("Location: /Lesson04/");

    }

    public function actionAdd(){
        $view = new View();
        $view->display('addNews.php');
    }
} 