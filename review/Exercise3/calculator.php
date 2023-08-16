<?php

session_start();

function calculatorNumber($price, $percentage)
{
    $cost = $price/(1+($percentage/100));

    return $cost;
}

if(!empty($_POST['percentage']) && !empty($_POST['price']))
{
    $result = calculatorNumber($_POST['price'], $_POST['percentage']);
}

$_SESSION['result2'] = $result;
header('location:./index.php');
die();
?>