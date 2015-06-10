<?php

abstract class AbstractModel
{

    static protected $table;

    protected $id = 0;
    protected $data = [];

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }


    public static function findAll()
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY date DESC';
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql);
    }

    public static function findOneByPk($id)
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $db = new DB();
        $db->setClassName($class);
        $result = $db->query($sql, [':id' => $id]);
        if(!empty($result))
        {
            return $result[0];
        }
        return $result;
    }

    public static function findByColumn($column, $value)
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE ' . $column .'= :value';
        $db = new DB();
        $db->setClassName($class);
        $result = $db->query($sql, [':value' => $value]);
        if(!empty($result))
        {
            return $result[0];
        }
        return false;
    }

    public function insert()
    {
        $cols = array_keys($this->data);
        $data = [];
        foreach ($cols as $col){
            $data[':' . $col] = $this->data[$col];
        }

        $sql = 'INSERT INTO ' . static::$table . '
        (' . implode(', ', $cols) . ')
        VALUES
        (' . implode(', ', array_keys($data)) . ')
        ';

        $db = new DB();
        $this->id = $db->exec($sql, $data);
    }

    public function update()
    {
        $setColumnsValues = [];
        $setValues = [];

        foreach($this->data as $key => $value){
            $setValues[':'.$key] = $value;
            if('id' == $key){continue;}
            $setColumnsValues[] = $key."=:".$key;
        }

        $sql = 'UPDATE ' . static::$table . ' SET ' . implode(', ', $setColumnsValues) .' WHERE id=:id';
        $db = new DB();
        $db->exec($sql, $setValues);
    }

    public function delete()
    {
        $sql = 'DELETE FROM ' . static::$table . ' WHERE id=' . $this->id;
        $db = new DB();
        $db->exec($sql);
    }

    public function getId()
    {
        return $this->id;
    }

    public function save()
    {
        $res = static::findByColumn('title',$this->data['title']);
        if(empty($res)){
            $this->insert();
        }else{
            $res->title = $this->data['title'];
            $res->text = $this->data['text'];
            $res->date = $this->data['date'];
            $res->update();
        }
    }

}