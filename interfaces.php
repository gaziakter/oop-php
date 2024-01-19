<?php 

interface gaziakter{
    public function videotime();
}

class youtube implements gaziakter{
    public function videotime(){
        $daya = "Time is very important";
        return $daya;
    }
}

$homememd = new youtube();
$banglsennd = $homememd->videotime();
echo $banglsennd;