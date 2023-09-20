<?php

require "./estacionamento.php";
require "./carro.php";

$carro1 = new Carro("gol","gol","def","preto");
$estacionamento = new Estacionamento();
$estacionamento->registraEntrada($carro1);
echo $estacionamento->getVagas()."<br>";
$carro2 = new Carro("ferrari","ferrari","abc","vermelho");
$estacionamento->registraEntrada($carro2);
echo $estacionamento->getVagas()."<br>";
$estacionamento->registraSaida("abc");
echo $estacionamento->getVagas();
?>