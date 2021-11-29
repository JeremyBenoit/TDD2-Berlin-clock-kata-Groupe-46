<?php

class BerlinClock
{
    /**
     * Transform minutes number into berlin clock format
     * @param $minutes
     * @return string berlin clock format
     */
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

    /**
     * Transform minutes number into berlin clock format
     * @param $minutes
     * @return string berlin clock format
     */
    public function getFiveMinutesBlock($minutes):string
    {
        $string = "";
        $nbLampOn = floor($minutes/5);
        for ($i = 0; $i < 11; $i++){
            if($i<$nbLampOn && $i%3!=2){
                $string .= "Y";
            } elseif ($i<$nbLampOn){
                $string .= "R";
            } else {
                $string .= "O";
            }
        }
        return $string;
    }

    public function getSimplesHours($hours):string
    {
        $string = "";
        $nbLampOn = $hours%5;
        for ($i = 0; $i < 4; $i++){
            if($i<$nbLampOn){
                $string .= "R";
            } else {
                $string .= "O";
            }
        }
        return $string;
    }

    public function getFiveHoursBlock($hours):string
    {
        $string = "";
        $nbLampOn = floor($hours/5);
        for ($i = 0; $i < 4; $i++){
            if ($i<$nbLampOn){
                $string .= "R";
            } else {
                $string .= "O";
            }
        }
        return $string;
    }

    public function getSecondsLamp($seconds):string
    {
        if($seconds%2==0)return "Y";
        return "O";
    }

    public function getFullClock($hours,$minutes,$seconds):string
    {$string = "";
        $string .= $this->getSecondsLamp($seconds);
        $string .= $this->getFiveHoursBlock($hours);
        $string .= $this->getSimplesHours($hours);
        $string .= $this->getFiveMinutesBlock($minutes);
        $string .= $this->getSimplesMinutes($minutes);
        return $string;
    }
}