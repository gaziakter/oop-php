<?php 

abstract class bangladesh{
    public $tutorial;
    public function __construct($name){
        $this->tutorial = $name;
    }
    abstract public function message(){

    }
}

class phptute extends bangladesh{  
    public function message(){
        echo "Thank for waching".$this->tutorial."this is video";
    }
}