<?php

class BerlinClock
{

    public function getSimplesMinutes($minutes):string
    {
        $string = "";
        $nbLampOn = $minutes%5;
        for ($i = 0; $i < 4; $i++){
            if($i<$nbLampOn){
                $string .= "Y";
            } else {
                $string .= "O";
            }
        }
        return $string;
    }
}