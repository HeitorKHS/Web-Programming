<?php

session_start();

function calculatorNumber($number)
{
    $sum = 0;
    while($number > 0)
    {
        $d = $number % 10;
        $sum += $d;
        $number = $number/10;
    }

    return $sum;
}

if(!empty($_POST['number']))
{
    $result = calculatorNumber($_POST['number']);
}

$_SESSION['result2'] = $result;
header('location:./index.php');
die();
?>