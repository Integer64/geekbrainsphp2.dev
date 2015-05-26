<?php
require_once __DIR__.'/../classes/DB.php';

abstract class AbstractArticle {
    public $title;
    public $text;
    public $date;
    protected static $class;
    private $db;


    public function __construct(){
        $this->db = new DB();
    }

    public function Article_getAll($tableName){
        $sql = "SELECT * FROM ".$tableName;
        $db = $this->db;
        return $db->DB_query($sql, static::$class);
    }

    public function Article_getOne($tableName,$id){
        $sql = "SELECT * FROM ".$tableName." WHERE id = ".$id;
        return $this->db->DB_query($sql, static::$class);
    }

    public function Article_add($tableName, $insertColumnsValues){
        foreach($insertColumnsValues as $key => $value){
            $insertColumnsValues[$key] = "'".$value."'";
        }
        $sql = 'INSERT INTO '.$tableName.' ('.implode(array_keys($insertColumnsValues),', ').') VALUES ('.implode($insertColumnsValues,',').')';
        $result = $this->db->DB_exec($sql);
        return $result;
    }

} 