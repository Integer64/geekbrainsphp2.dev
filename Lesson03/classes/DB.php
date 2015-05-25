<?php

class DB {
    protected $host = '127.0.0.1';
    protected $user = 'geekbrainsphp';
    protected $password = '123456';
    protected $dbName = 'news_feed';

    public function __construct(){
        mysql_connect($this->host, $this->user, $this->password);
        mysql_select_db($this->dbName);
        mysql_query('SET NAMES utf8');
    }

    public function DB_exec($sql){
       return mysql_query($sql);
    }

    public function DB_query($sql){
        $result = mysql_query($sql);
        if($result === false){
            return $result;
        }

        $ret = [];
        while(false !== ($row = mysql_fetch_object($result))){
            $ret[] = $row;
        }

        return $ret;
    }



} 