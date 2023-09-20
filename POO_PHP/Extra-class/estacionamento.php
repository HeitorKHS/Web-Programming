<?php

class Estacionamento
{
    private $vagas;

    public function __construct()
    {
        $this->vagas = array();
    }

    public function setVagas($carro)
    {
        array_push($this->vagas, $carro);
    }

    public function getVagas()
    {
        return print_r($this->vagas);
    }

    public function registraEntrada($carro)
    {
        array_push($this->vagas, $carro);
    }

    public function registraSaida($placa)
    {
        $key = array_search($placa, $this->vagas,TRUE);
        echo $key;
        unset($this->vagas[$key]);
        
    }

}

?>