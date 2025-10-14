<?php


class BancaryCount
{

    private $titular;
    private $saldo = 0;

    public function __construct($titular)
    {
        $this->titular = $titular;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function depositar($deposito)
    {
        if ($deposito < 0) {
            return "Valor de deposito invalido\n";
        }

        $this->saldo += $deposito;
        return $this->saldo;
    }

    public function sacar($vlrSaque)
    {
        if ($vlrSaque < 0) {
            return "Valor de saque inválido\n";
        }

        if ($this->saldo < $vlrSaque) {
            return "Saldo insuficiente\n";
        }

        $this->saldo -= $vlrSaque;
        return "Ola $this->titular, seu novo saldo é: $this->saldo\n";
    }
}

$obj = new BancaryCount('Davi');
$obj->depositar(10000);
echo $obj->sacar(90);
