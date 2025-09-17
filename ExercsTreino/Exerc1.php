<?php


class Funcoes
{
    public $age = 20;
    public $nome = "Davi";
    public $cargo = "Dev";


    function apresentação()
    {
        echo "Meu nome é $this->nome, tenho $this->age anos e atualmente trabalho como $this->cargo\n";

    }
}

$obj = new Funcoes();

echo "Ola meu nome é $obj->nome, tenho $obj->age e atualmente trabalho como $obj->cargo\n";

$obj->apresentação();



