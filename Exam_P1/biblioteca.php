<?php

class Biblioteca
{

    private $nome;
    private $responsavel;
    private $livros;

    public function __construct($nome, $responsavel)
    {
        $this->nome = $nome;
        $this->responsavel = $responsavel;
        $this->livros = array();
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;
    }

    public function getResponsavel()
    {
        return $this->responsavel;
    }

    public function setLivros($livro)
    {
        array_push($this->livros, $livro);
    }

    public function getLivros()
    {
        return print_r($this->livros);
    }

    public function incluirLivro($livro)
    {
        array_push($this->livros, $livro);
    }

    public function removerLivro($titulo)
    {
        foreach($this-> livros as $index => $livro)
        {
            if($livro->getTitulo() === $titulo)
            {
                unset($this->livros[$index]);
                return "Removido <br>";
            }
        }
        return "Não encontrado <br>";
    }

    public function procurarLivroPorAutor($autor)
    {
        $autorLivros = array();
        foreach($this-> livros as $index => $livro)
        {
            if($livro->getAutor() === $autor)
            {
                array_push($autorLivros, $livro);
            }
        }
        return print_r($autorLivros);
    }

    public function procurarLivroPorTitulo($titulo)
    {
        foreach($this-> livros as $index => $livro)
        {
            if($livro->getTitulo() === $titulo)
            {
                return print_r($livro);
            }
        }
        return "Não encontrado <br>";
    }

    public function listarLivros()
    {
        return print_r($this->livros);
    }

}

?>