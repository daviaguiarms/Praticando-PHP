<?php

class Cachorro
{

    public $nome;
    public $raca;

    public function __construct($nome, $raca)
    {
        $this->nome = $nome;
        $this->raca = $raca;
    }

    public function latir()
    {
        return "O cachorro $this->nome da raça $this->raca está latindo\n";
    }
}

$obj = new Cachorro('Zack', 'Biwer terrier');
echo $obj->latir();
