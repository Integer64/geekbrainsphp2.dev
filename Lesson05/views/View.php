<?php

class View
    implements Iterator
{
    protected  $data=[];
    protected  $keys=[];
    private $position = 0;

    public function __set($key, $value){
        $this->data[$key] = $value;
        $this->keys = array_keys($this->data);
    }

    public function display($template){
        foreach($this->data as $key => $value){
            $$key = $value;
        }
        include __DIR__.'/../templates/'.$template;
    }

    public function current()
    {
        return $this->data[$this->keys[$this->position]];
    }

    public function next()
    {
        ++$this->position;
    }

    public function key()
    {
        return $this->keys[$this->position];
    }

    public function valid()
    {
        return isset($this->data[$this->keys[$this->position]]);
    }

    public function rewind()
    {
        $this->position = 0;
    }
}