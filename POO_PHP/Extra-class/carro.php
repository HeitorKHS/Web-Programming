<?php

class Carro
{
    private $marca;
    private $modelo;
    private $placa;
    private $cor;

    public function __construct($marca, $modelo, $placa, $cor)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->placa = $placa;
        $this->cor = $cor;   
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }

    public function getPlaca()
    {
        return $this->placa;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getCor()
    {
        return $this->cor;
    }

}

?>