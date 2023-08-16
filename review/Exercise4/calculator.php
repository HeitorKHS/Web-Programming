<?php

session_start();

function calculatorPrice($pound)
{
    $value = 0;
    if($pound > 50)
    {
        $value = ceil(($pound - 50)/5)*4;
    }

    return $value;
}

if(!empty($_POST['pound']))
{
    $result = calculatorPrice($_POST['pound']);
}

$_SESSION['result2'] = $result;
header('location:./index.php');
die();
?>