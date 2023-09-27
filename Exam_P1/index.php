<?php

require "./livro.php";
require "./biblioteca.php";

$livro1 = new Livro("AA","AA","AA","AA");
echo $livro1->getInformacoes()."<br>";
$livro2 = new Livro("BB","BB","BB","BB");
echo $livro2->getInformacoes()."<br>";
$biblioteca1 = new Biblioteca("Livros Heitor","Heitor");
$biblioteca1->incluirLivro($livro1);
$biblioteca1->incluirLivro($livro2);
echo $biblioteca1->getLivros()."<br><br>";
echo $biblioteca1->removerLivro("BB");
echo $biblioteca1->getLivros()."<br><br>";
$livro3 = new Livro("CC","AA","CC","CC");
$livro4 = new Livro("DD","DD","DD","DD");
$livro5 = new Livro("EE","AA","EE","EE");
$biblioteca1->incluirLivro($livro3);
$biblioteca1->incluirLivro($livro4);
$biblioteca1->incluirLivro($livro5);
echo $biblioteca1->getLivros()."<br><br>";
echo $biblioteca1->procurarLivroPorAutor("AA")."<br><br>";
echo $biblioteca1->procurarLivroPorTitulo("EE")."<br><br>";
echo $biblioteca1->listarLivros();
?>