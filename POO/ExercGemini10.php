<?php

class Conta
{

    private $saldo;

    public function depositar($valor)
    {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    public function sacar($valor)
    {
        if ($valor < $this->saldo && $valor > 0) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente\n";
        }
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}

$objConta = new Conta();
$objConta->depositar(500);
$objConta->sacar(1000);
echo "Seu saldo é de: " . $objConta->getSaldo() . " reais\n";
