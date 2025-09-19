<?php

class Cliente
{
    public $nome;
    public $email;

    public function __construct($nome, $email)
    {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getNome()
    {
        return $this->nome;
    }
}

class Pedido
{
    public  $cliente;
    public $itens = [];
    public $status;

    public function __construct(Cliente $cliente, $itens, $status)
    {
        $this->cliente = $cliente;
        $this->itens = $itens;
        $this->status = $status;
    }

    public function detalhesDoPedido()
    {
        return "Detalhes do pedido: \n" .
            "Cliente: " . $this->cliente->getNome() . "\n" .
            "Itens: " . json_encode($this->itens) . "\n" .
            "Status: $this->status";
    }
}

$cliente = new Cliente("Davi", "davi@gmail.com");
$itens = ["Mouse", "Teclado"];
$pedido = new Pedido($cliente, $itens, "Em analise");
echo $pedido->detalhesDoPedido();

    // class Model {

    // }

    // class Controller {
    //     public Model $model;
    // }

    // $model = new Model();
    // $contr = new Controller();
    // $contr->model = $model;

