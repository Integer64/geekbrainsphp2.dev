<?php
require_once __DIR__ . '/../classes/DB.php';

abstract class AbstractArticle {
    public $title;
    public $text;
    public $date;
    protected static $class;
    protected static $tableName;

    public static function Article_getAll(){
        $sql = "SELECT * FROM ".static::$tableName;
        $db = new DB();
        return $db->DB_query($sql, static::$class);
    }

    public static function Article_getOne($id){
        $sql = "SELECT * FROM ".static::$tableName." WHERE id = ".$id;
        $db = new DB();
        return $db->DB_query($sql, static::$class);
    }

    public function Article_add($insertColumnsValues){
        foreach($insertColumnsValues as $key => $value){
            $insertColumnsValues[$key] = "'".$value."'";
        }
        $sql = 'INSERT INTO '.static::$tableName.' ('.implode(array_keys($insertColumnsValues),', ').') VALUES ('.implode($insertColumnsValues,',').')';
        $db = new DB();
        $result = $db->DB_exec($sql);
        return $result;
    }

} 