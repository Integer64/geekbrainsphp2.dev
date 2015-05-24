<?php
require_once __DIR__.'/../functions/sql.php';

function Article_getAllTitle(){
    Sql_connect();
    $sql = 'SELECT id, title, date FROM news ORDER BY date DESC';
    return Sql_query($sql);
}

function Article_getArticle($id_article){
    Sql_connect();
    $sql = 'SELECT * FROM news WHERE news.id='.$id_article;
    return Sql_query($sql);
}

function Article_addArticle($data){
    $sql = "INSERT INTO news (title, text, date) VALUES ('".$data['title']."', '".$data['text']."', '".$data['date']."')";
    Sql_exec($sql);
}