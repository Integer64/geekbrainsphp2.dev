<?php
require __DIR__ . '/models/index.php';

if(!empty($_POST)){
    $data = [];
    if(!empty($_POST['title']) && !empty($_POST['textNews']) && !empty($_POST['date'])){
        $data['title'] = $_POST['title'];
        $data['text'] = $_POST['textNews'];
        $data['date'] = $_POST['date'];
    }


    if(isset($data['title']) && isset($data['text']) && isset($data['date'])){
     Article_addArticle($data);
     header("Location: /Lesson01/");
      die;
    }
}

include __DIR__.'/views/add.php';