<?php

class Livro {
    public $titulo;
    public $autor;

    public function __construct($titulo, $autor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }
}

class Biblioteca {
    public $livros = [];

    public function addLivro(Livro $livro){
        $this->livros[] = $livro;
    }

    public function listarLivros(){
        return json_encode($this->livros);
    }
}

$objLivro = new Livro("Hobbit", "J.R.R Tolken");
$objBibli = new Biblioteca();
$objBibli->addLivro($objLivro);
echo $objBibli->listarLivros();