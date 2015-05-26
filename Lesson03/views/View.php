<?php

class View {
    private $type;
    private $data;

    public function data($type, $items){
        $this->type = $type;
        $this->data = $items;
    }

    public function display($template){
        include __DIR__.'/../templates/'.$template;
    }

} 