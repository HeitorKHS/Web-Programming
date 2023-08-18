<?php

session_start();

function calculatorParcel($percentage, $parcel, $financedAmount)
{
    $valueParcel = $financedAmount * (($percentage/100*(1+$percentage/100)**$parcel)/((1+$percentage/100)**$parcel-1));

    return round($valueParcel, 2);
}

if(!empty($_POST['percentage']) && !empty($_POST['parcel']) && !empty($_POST['financedAmount']))
{
    $valueParcel = calculatorParcel($_POST['percentage'], $_POST['parcel'], $_POST['financedAmount']);
}

$_SESSION['result'] = $valueParcel;
header('location:./index.php');
die();

?>