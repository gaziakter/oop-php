<?php 
class man{

    function male(){
        $capital = "Dhaka";
        return $capital;
    }
}

$city = new man();
echo $city->male();