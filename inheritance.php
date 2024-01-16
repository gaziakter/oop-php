<?php 
/**
 * Inheritance:
 * use first class in 2nd class without changing any data in perent class
 * final keyword usage: perent class a final keyword use korle ai class k ar 
 * extend kora jai na ata method ar ketra o projja
 * 
 */
class bank{
    public $name;
    public $age;

    public function get_name(){
        return $this->name;
    }
}

$usefunction = new bank();
$usefunction->get_name();