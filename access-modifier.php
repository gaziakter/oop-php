<?php 

/**
 * private
 * public
 * protected
 */

 class Dhaka {
    private $zila = "Cumilla";
    public function amar(){
        return $this->zila;
    }
 }

 $ourzila = new Dhaka();
 echo $ourzila->amar(); 
