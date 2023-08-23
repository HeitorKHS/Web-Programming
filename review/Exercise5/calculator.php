<?php

session_start();

function calculatorParcel($percentage, $parcel, $financedAmount)
{
    $valueParcel = $financedAmount * (($percentage/100*(1+$percentage/100)**$parcel)/((1+$percentage/100)**$parcel-1));

    return round($valueParcel, 2);
}

function calculatorAll($valueParcel, &$saldoDevedor, $percentage, $i, &$totalJuros)
{
    $list2 = [];

    $juros = round(($saldoDevedor * $percentage)/100, 2);
    $amount = round(($valueParcel - $juros), 2);
    $saldoDevedor = round(($saldoDevedor - $amount), 2);
    $totalJuros += $juros;
    array_push($list2,$i+1);
    array_push($list2,$valueParcel);
    array_push($list2,$amount);
    array_push($list2,$juros);
    array_push($list2,max($saldoDevedor,0));
    return $list2;
}



if(!empty($_POST['percentage']) && !empty($_POST['parcel']) && !empty($_POST['financedAmount']))
{
    $list = [];
    $saldoDevedor = $_POST['financedAmount'];
    $percentage = $_POST['percentage'];
    $parcel = $_POST['parcel'];
    $financedAmount = $_POST['financedAmount'];
    $totalJuros = 0;

    $valueParcel = calculatorParcel($percentage, $parcel, $financedAmount);
    for($i=0; $i < $_POST['parcel']; $i++)
        array_push($list, calculatorAll($valueParcel, $saldoDevedor, $percentage, $i, $totalJuros));
}

$_SESSION['result'] = $list;
$_SESSION['juros'] = $totalJuros;
header('location:./index.php');
die();

?>