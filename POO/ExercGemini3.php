<?php

class Circulo {
    public $raio;

    public function __construct($raio){
        $this->raio = $raio;
    }

    public function calcularArea(){
        return M_PI * ($this->raio * $this->raio) ;
    }

    public function calcularCircunferencia(){
        return 2 * M_PI *  $this->raio;
    }

}

$obj = new Circulo(15);

echo "A area é: " .   $obj->calcularArea() . "\n";

echo "A circunferencia é: " . $obj->calcularCircunferencia() . "\n";
