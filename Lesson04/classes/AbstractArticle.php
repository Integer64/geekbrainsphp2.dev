<?php
require_once __DIR__ . '/../classes/DB.php';

abstract class AbstractArticle {
    public $title;
    public $text;
    public $date;
    protected static $class;
    protected static $tableName;

    public static function getAll(){
        $sql = "SELECT * FROM ".static::$tableName. ' ORDER BY date DESC';
        $db = new DB();
        return $db->query($sql, static::$class);
    }

    public static function getOne($id){
        $sql = "SELECT * FROM ".static::$tableName." WHERE id = ".$id;
        $db = new DB();
        return $db->query($sql, static::$class);
    }

    public static function add($insertColumnsValues){
        foreach($insertColumnsValues as $key => $value){
            $insertColumnsValues[$key] = "'".$value."'";
        }
        $sql = 'INSERT INTO '.static::$tableName.' ('.implode(array_keys($insertColumnsValues),', ').') VALUES ('.implode($insertColumnsValues,',').')';
        var_dump($sql);
        $db = new DB();
        $result = $db->exec($sql);
        return $result;
    }

} 