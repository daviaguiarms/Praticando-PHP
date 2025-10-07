<?php

class Produto
{

    public static $totalDeProdutosCriados = 0;

    public function __construct()
    {
        Self::$totalDeProdutosCriados++;
    }

    public static function getTotal()
    {
        return Self::$totalDeProdutosCriados;
    }
}

echo "Inicio: " . Produto::getTotal() . "\n";
$obj1 = new Produto(); 
$obj2 = new Produto(); 
$obj3 = new Produto(); 
$obj4 = new Produto();
echo "Final: " . Produto::getTotal();
