<?php

class Veiculo {
    public $marca;
    public $modelo;
    public $ano;

    public function __construct($marca, $modelo, $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function exibirInfosBasicas(){
        return "Marca: $this->marca
        Modelo: $this->modelo
        Ano: $this->ano\n";
    }
}

class Carro extends Veiculo{
    public $numeroDePortas;

    public function __construct($marca, $modelo, $ano, $numeroDePortas){
        parent::__construct($marca, $modelo, $ano);
        $this->numeroDePortas = $numeroDePortas;
    }

    public function exibirInfoCompleta(){
        echo $this->exibirInfosBasicas() . "\n" . "Numero de portas: $this->numeroDePortas\n";
    }
    
}

$obj = new Carro("Honda", "civic", 2026, 4);
$obj->exibirInfoCompleta();
