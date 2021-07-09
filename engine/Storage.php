<?php


namespace app\engine;


class Storage
{
    protected $items = [];

    public function set($key, $obj) {
        $this->items[$key] = $obj;
    }

    public function get($key) {
        if(!isset($this->items[$key])) {
            $this->items[$key] = App::call()->createComponents($key);
        }
        return $this->items[$key];
    }
}