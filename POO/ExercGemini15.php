<?php

abstract class Veiculo
{

    abstract public function acelerar();
}

abstract class VeiculoTerrestre extends Veiculo
{

    public $numRodas;

    public function acelerar()
    {
        echo "Acelerando veiculo terrestre\n";
    }
}

class Carro extends VeiculoTerrestre
{

    public function __construct($numRodas)
    {
        $this->numRodas = $numRodas;
    }

    public function exibirInfos()
    {
        echo "Este veiculo tem $this->numRodas rodas\n";
    }
}

class Moto extends VeiculoTerrestre
{

    public function empinar()
    {
        echo "Empinando moto\n";
    }
}

$carro = new Carro(4);
$moto = new Moto();
$carro->acelerar();
$carro->exibirInfos();
$moto->acelerar();
$moto->empinar();
