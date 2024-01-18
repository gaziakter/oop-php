<?php 

/**
 * Usage Contstant
 */
class CityCumilla{
    const KANDIRPAR = "This is Cumilla city";
    function what_area(){
        return self::KANDIRPAR;
    }
}

$city = new CityCumilla();
$city_area = $city->what_area();
echo $city_area;