<?php

class Airplane
{

    private $flight_number;
    private $seat = [];
    private $date;

    public function __construct($flight_number, $date)
    {

        $this->flight_number = $flight_number;
        $newDate = new DateTime($date);
        $this->date = $newDate;

    }

    public function getNextSeat()
    {

        foreach($this->seat as $i) $i += $i;
        return "Next seat is ".$i;
    }

    public function checkSeat($seat)
    {
        if($this->seat[$seat-1] == 1) return "Occupied seat";
        else return "Seat not occupied";
    }

    public function ocuppy($seat)
    {
        if(!isset($this->seat[$seat-1]))
        {
            $this->seat[$seat-1] = 1;
            return "Seat successfully occupied";
        }
        else return "Seat is already occupied";
    }

    public function getVacancies()
    {
        return 100-count($this->seat)." vacancies left";
    }

    public function getFlight()
    {
        return "Plane number is ".$this->flight_number;
    }

    public function getDateFlight()
    {
        return $this->date->format("d/m/Y");
         
    }

}

?>