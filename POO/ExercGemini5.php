<?php

class Pagamento
{
    private $valor;

    public function __construct($valor)
    {
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }
}

class PagamentoCartao extends Pagamento
{

    public function processarTransacao()
    {
        return "Processando pagamento de R$" . $this->getValor() . " com cartão\n";
    }
}

class PagamentoDinheiro extends Pagamento
{

    public function processarTransacao()
    {
        return "Processando pagamento de R$" . $this->getValor() . "com dinheiro\n";
    }
}

$objMoney = new PagamentoDinheiro(50);
$objCard = new PagamentoCartao(100);

echo $objCard->processarTransacao();

echo $objMoney->processarTransacao();
