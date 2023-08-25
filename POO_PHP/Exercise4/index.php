<?php

    require "./class.php";

    $date = new Date();
    echo $date->returnDate()."</br>";
    $date->setDay(24);
    $date->setMonth(8);
    $date->setYear(2023);
    echo $date->returnDate()."</br>";

    $date1 = new Date(20,8,2024);
    echo $date1->returnDate()."</br>";
    $date1->decrementDay();
    echo $date1->returnDate()."</br>";
    $date1->incrementDay();
    echo $date1->returnDate()."</br>";

    echo $date->leapYear()."</br>";
    echo $date1->leapYear()."</br>";

    echo $date->differenceYears('2023-05-15')."</br>";

    echo $date->checkYears('2023-08-24')."</br>";
    echo $date->checkYears('2023-08-25')."</br>";
    echo $date->checkYears('2023-08-23')."</br>";
?>