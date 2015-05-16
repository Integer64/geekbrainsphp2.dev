<?php
require_once __DIR__.'/../functions/sql.php';

function Article_getAllTitle(){
    Sql_connect();
    $sql = 'SELECT id, title, date FROM news ORDER BY date DESC';
    return Sql_query($sql);
}
