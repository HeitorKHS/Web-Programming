<?php

class Livro
{
    private $titulo;
    private $autor;
    private $categoria;
    private $anoPublicacao;

    public function __construct($titulo, $autor, $categoria, $anoPublicacao)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->categoria = $categoria;
        $this->anoPublicacao = $anoPublicacao;   
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setAnoPublicacao($anoPublicacao)
    {
        $this->anoPublicacao = $anoPublicacao;
    }

    public function getAnoPublicacao()
    {
        return $this->anoPublicacao;
    }

    public function getInformacoes()
    {
        $informacoes = "Título: ".$this->titulo."<br>"."Autor: ".$this->autor."<br>"."Categoria: ".$this->categoria."<br>"."Ano de publicação: ".$this->anoPublicacao."<br>";
        return $informacoes;
    }

}

?>