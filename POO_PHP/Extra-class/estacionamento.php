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
        foreach($this-> vagas as $index => $carro)
        {
            if($carro->getPlaca() === $placa)
            {
                unset($this->vagas[$index]);
                return "Removido";
            }
        }
        return "Não encontrado";
    }

}

?>