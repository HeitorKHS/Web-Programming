<?php

class Car
{
    private $consumption;
    private $fuel;

    public function __construct($consumption)
    {
        $this->consumption = $consumption;
        $this->fuel = 0;
    }

    public function walk($distance)
    {
        $necessaryFuel = $distance/$this->consumption;
        if($necessaryFuel <= $this->fuel) 
        {
            $this->fuel -= $necessaryFuel;
            return  "The car traveled {$distance}/KM </br>";
        }
        else return "There is not enought fuel !! </br>";
    }

    public function getFuel()
    {
        return $this->fuel;
    }

    public function setFuel($fuel)
    {
        $this->fuel += $fuel;
    }


}

?>