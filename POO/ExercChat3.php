<?php

class Produto
{
    public $nome;
    public $preco;

    public function __construct($nome, $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}

class Carrinho
{
    public $produtos = [];

    public function addProduct(Produto $produto)
    {

        $this->produtos[] = $produto;
    }


    public function calcularTotal()
    {
        $total = 0;
        foreach ($this->produtos as $value) {
            $total += $value->preco;
        }
        return $total;
    }
}

class Cliente
{
    public $nome;
    public $carrinho;

    public function __construct($nome, Carrinho $carrinho)
    {
        $this->nome = $nome;
        $this->carrinho = $carrinho;
    }

    public function finalizarCompra()
    {


        return "Cliente: $this->nome\n" . "Total a pagar: " . $this->carrinho->calcularTotal() . "\n";
    }
}

$objProduto = new Produto('Mouse', 100);
$objProduto2 = new Produto('Teclado', 150);
$objCarrinho = new Carrinho();
$objCarrinho->addProduct($objProduto);
$objCarrinho->addProduct($objProduto2);
$objCarrinho->calcularTotal();
$objCliente = new Cliente('Davi', $objCarrinho);
echo $objCliente->finalizarCompra();
