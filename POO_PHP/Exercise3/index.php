<?php

require "./class.php";

$car = new Car(10);

echo "Filled 60 liters </br>";
$car->setFuel(60);

echo "Total fuel: {$car->getFuel()} Liters </br>";

echo "Try to drive 500km </br>";
echo $car->walk(500);

echo "Try to drive 400km </br>";
echo $car->walk(400);

echo "Total fuel: {$car->getFuel()} Liters </br>";
?>