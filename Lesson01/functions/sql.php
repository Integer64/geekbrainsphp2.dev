<?php

function Sql_connect(){
    $host = '127.0.0.1';
    $user = 'geekbrainsphp';
    $password = '123456';
    $dataBase = 'news_feed';

    mysql_connect($host,$user,$password);
    mysql_select_db($dataBase);
    mysql_query('SET NAMES utf8');
}

function Sql_exec($query){
    Sql_connect();
    mysql_query($query);
}

function Sql_query($query){
    Sql_connect();
    $res = mysql_query($query);

    $ret = [];

    while(false !== ($row = mysql_fetch_assoc($res))){
        $ret[] = $row;
    }
    return $ret;
}

