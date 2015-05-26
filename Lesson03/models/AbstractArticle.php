<?php
require_once __DIR__.'/../classes/DB.php';

abstract class AbstractArticle {
    public $title;
    public $text;
    public $date;
    private $db;

    public function __construct(){
        $this->db = new DB();
    }
    public function Article_getAll($tableName){
        $sql = "SELECT * FROM ".$tableName;
        return $this->db->DB_query($sql);
    }

    public function Article_getOne($tableName,$id){
        $sql = "SELECT * FROM ".$tableName." WHERE id = ".$id;
        return $this->db->DB_query($sql);
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