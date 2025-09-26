<?php

class Livro
{

    public $titulo;
    public $autor;

    public function __construct($titulo, $autor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }
}

class Biblioteca
{
    public $nome;
    public $livros = [];

    public function addLivro(Livro $livro)
    {
        $this->livros[] = $livro;
    }

    public function listarLivros()
    {
        echo "Lista de livros\n";
        foreach ($this->livros as $livro) {
            echo  "Titulo: $livro->titulo, Autor: $livro->autor" . "\n";
        }
    }
}

$objLivro1 = new Livro("HP", "Kaio Jorge");
$objLivro2 = new Livro("Senhor dos aneis", "JRR");
$objLivro3 = new Livro("IT", "Stephen King");
$objBibli = new Biblioteca();
$objBibli->addLivro($objLivro1);
$objBibli->addLivro($objLivro2);
$objBibli->addLivro($objLivro3);
$objBibli->listarLivros();
