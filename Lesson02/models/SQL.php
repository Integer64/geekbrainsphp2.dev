<?php

class SQL {
    static protected $host = '127.0.0.1';
    static protected $user = 'geekbrainsphp';
    static protected $password = '123456';
    static protected $dbName = 'news_feed';

    public function __construct(){
        mysql_connect(self::$host,self::$user,self::$password);
        mysql_select_db(self::$dbName);
        mysql_query('SET NAMES utf8');
    }

    public function SQL_add($table_name = '', $insertColumnsValues = []){
        foreach($insertColumnsValues as $key => $value){
            $insertColumnsValues[$key] = "'".$value."'";
        }

        $sql = 'INSERT INTO '.$table_name.' ('.implode(array_keys($insertColumnsValues),', ').') VALUES ('.implode($insertColumnsValues,',').')';
        $result = mysql_query($sql);
        return $result;
    }

    public function SQL_edit($table_name = '', $where = '1', $updateColumnsValues = []){

        $table_name = 'news';

        $where = "id = 1";

        $updateColumnsValues = [
            'title' => "ArticleTitle1",
            'text' => "ArticleText1",
            'date' => "2015-05-02 00:15:00"
        ];

        $setColumnsValues = [];

        foreach($updateColumnsValues as $key => $value){
            $setColumnsValues[] = $key."=". "'".$value."'";
        }

        $sql = 'UPDATE '.$table_name.' SET '.implode($setColumnsValues,', ').' WHERE '.$where;
        $result = mysql_query($sql);
        return $result;

    }

    public function SQL_getEntries($table_name = '', $what = ['*'], $where = '1'){

        $sql = 'SELECT '.implode($what, ',').' FROM '.$table_name.' WHERE '.$where;
        $result = mysql_query($sql);

        if($result !== false){
            $ret = [];
            while(false !== ($row = mysql_fetch_assoc($result))){
                $ret[] = $row;
            }

            return $ret;
        }

        return $result;
    }

}
