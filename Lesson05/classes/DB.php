<?php

class DB
{
    private $dbh;
    private $className = 'stdClass';

    public function __construct()
    {
        $host = '127.0.0.1';
        $user = 'geekbrainsphp';
        $password = '123456';
        $dbName = 'news_feed';
        $dsn = 'mysql:host='.$host.';dbname='.$dbName.';charset=utf8';

        $this->dbh = new PDO($dsn,$user,$password);
    }

    public function setClassName($className)
    {
        $this->className = $className;
    }

    public function exec($sql, $params=[])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        if($res){
            return $this->dbh->lastInsertId();
        }
        return $res;
    }

    public function query($sql, $params=[])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }

} 