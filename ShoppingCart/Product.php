<?php

class Product{
    private $id;
    private $name;
    private $price;
    private $qtd;

    public function setId(int $id){
        $this->id = $id;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function setQtd($qtd){
        $this->qtd = $qtd;
    }

    public function getId(){
        return $this->id;
    }   

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getQtd(){
        return $this->qtd;
    }
}

?>