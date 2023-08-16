<?php

session_start();

function calculatorNumber($percentage, $parcel, $financedAmount)
{
    $cost = $price/(1+($percentage/100));

    return $cost;
}

if(!empty($_POST['percentage']) && !empty($_POST['parcel']) && !empty($_POST['financedAmount']))
{
    
}

?>