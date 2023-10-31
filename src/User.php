<?php

namespace blog;

class User {
    protected $name;
    protected $last_name;

    public function set_name(String $name, String $last_name){
        $this->name = $name;
        $this->last_name = $last_name;
    }

    public function get_full_name(){
        return $this->name . " " . $this->last_name;
    }


}