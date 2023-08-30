<?php

require "./class.php";

$airplane = new Airplane(45,'2023-08-25');

echo "Occupying seat 1: ".$airplane->ocuppy(1)."</br>";
echo "Occupying seat 39: ".$airplane->ocuppy(39)."</br>";
echo "Occupying seat 1: ".$airplane->ocuppy(1)."</br>";
echo "Check seat 39: ".$airplane->checkSeat(39)."</br>";
echo "Get next seat: ".$airplane->getNextSeat()."</br>";
echo "Get vacancies: ".$airplane->getVacancies()."</br>";
echo "Get flight: ".$airplane->getFlight()."</br>";
echo "Get date flight: ".$airplane->getDateFlight()."</br>";

?>