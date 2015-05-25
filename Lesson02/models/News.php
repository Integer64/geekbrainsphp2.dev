<?php
require_once __DIR__.'/Article.php';

class News extends Article{
    function News_getAllTitleNews(){
        $sql = new SQL();
        $articles = $sql->SQL_getEntries('news',['id, title, date'],'1 ORDER BY date DESC');
        return $articles;
    }

    function News_getNews($id_article){
        $sql = new SQL();
        $article = $sql->SQL_getEntries('news',['*'],'id = '.$id_article);
        return $article;
    }

    function News_addNews($data){
        $sql = new SQL();
        $res = $sql->SQL_add('news',$data);
        return $res;
    }
}
