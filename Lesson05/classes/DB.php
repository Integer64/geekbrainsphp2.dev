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
        $attributes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        try{
            $this->dbh = new PDO($dsn, $user, $password, $attributes);
        }catch (PDOException $e){
            http_response_code(403);
            $view = new View();
            $view->error = $e->getMessage();
            $view->display('error403.php');
        }
    }

    public function setClassName($className)
    {
        $this->className = $className;
    }

    public function exec($sql, $params=[])
    {
        try{
            $sth = $this->dbh->prepare($sql);
            $res = $sth->execute($params);
        }catch (PDOException $e){
            $log = new LogException();
            $log->writeLog($e);
            http_response_code(403);
            $view = new View();
            $view->error = $e->getMessage();
            $view->display('error403.php');
            die;
        }
        if($res){
            return $this->dbh->lastInsertId();
        }
        return $res;
    }

    public function query($sql, $params=[])
    {
        try {
            $sth = $this->dbh->prepare($sql);
            $sth->execute($params);
        } catch(PDOException $e){
            $log = new LogException();
            $log->writeLog($e);
            http_response_code(403);
            $view = new View();
            $view->error = $e->getMessage();
            $view->display('error403.php');
            die;
        }
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }

} 