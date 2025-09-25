<?php

abstract class Forma
{
    public abstract function calcularArea();
}

class Retangulo extends Forma
{
    public $largura;
    public $altura;

    public function __construct($largura, $altura)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea()
    {
        return $this->largura * $this->altura;
    }
}

class Triangulo extends Forma
{
    public $base;
    public $altura;

    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea()
    {
      return $this->base * $this->altura / 2; 
    }
}

$objRetangulo = new Retangulo(3, 6);
echo $objRetangulo->calcularArea() . "\n";
$objTriangulo = new Triangulo(5, 10);
echo $objTriangulo->calcularArea() . "\n";