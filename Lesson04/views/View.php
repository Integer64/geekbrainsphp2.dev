<?php

class View {
    protected  $data=[];

    public function data($name,$items){
        $this->data[$name] = $items;
    }

    public function display($template){
        foreach($this->data as $key => $value){
            $$key = $value;
        }

        include __DIR__.'/../templates/'.$template;
    }

} 