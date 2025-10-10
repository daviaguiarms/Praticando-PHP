<?php

interface Processavel
{
    public function processar();
}

class PagamentoCartao implements Processavel
{
    public $valor;

    public function __construct($valor)
    {
        $this->valor = $valor;
    }

    public function processar()
    {
        return "Processando pagamento com cartão\n";
    }
}

class PagamentoPix implements Processavel
{
    public $valor;

    public function __construct($valor)
    {
        $this->valor = $valor;
    }

    public function processar()
    {
        return "Processando pagamento com pix\n";
    }
}

class ProcessadorPagamento
{
    public $pagamentos = [];

    public function executarProcessamento(array $pagamentos)
    {
        $execute = "";
        foreach ($pagamentos as $pagamento) {
            $execute .= $pagamento->processar() . "\n";
        }
        return $execute;
    }
}

$pgtCartao = new PagamentoCartao(150);
$pgtPix = new PagamentoPix(590);
$array = [$pgtCartao, $pgtPix];
$processaPgt = new ProcessadorPagamento();
echo $processaPgt->executarProcessamento($array);
