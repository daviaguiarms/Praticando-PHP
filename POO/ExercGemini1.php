<?php


class Produto
{
    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco, $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;

    }

    public function comprar($quantidade){
        if ($quantidade <= $this->estoque) {
            $this->estoque -= $quantidade;
             
            return $quantidade * $this->preco;

        } else {
            return 0;
        }
    }
}

$objProduto = new Produto("Mouse", 340, 20); 

echo $objProduto->comprar(3);

