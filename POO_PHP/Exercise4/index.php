<?php

    require "./class.php";

    $date = new Date();
    echo "Declaring date variable without parameter: ".$date->returnDate()."</br>";
    $date->setDay(24);
    $date->setMonth(8);
    $date->setYear(2023);
    echo "Using set methods to add day, year and month to date variable: ".$date->returnDate()."</br>";

    $date1 = new Date(20,8,2024);
    echo "Declaring date1 variable with parameter: ".$date1->returnDate()."</br>";
    $date1->decrementDay();
    echo "Decrementing one day to date1 variable: ".$date1->returnDate()."</br>";
    $date1->incrementDay();
    echo "Incrementing one day to date1 varaible: ".$date1->returnDate()."</br>";

    echo "Checking if date from date variable is a leap year: ".$date->leapYear()."</br>";
    echo "Checking if date1 from date variable is a leap year: ".$date1->leapYear()."</br>";

    echo "Checking the difference of the date variable with 2023-05-15: ".$date->differenceYears('2023-05-15')." days of difference</br>";

    echo "Checking if the date variable is equal to 2023-08-24: ".$date->checkYears('2023-08-24')."</br>";
    echo "Checking if the date variable is equal to 2023-08-25: ".$date->checkYears('2023-08-25')."</br>";
    echo "Checking if the date variable is equal to 2023-08-23: ".$date->checkYears('2023-08-23')."</br>";
?>