<?php

class Livro
{
    public $titulo;
    public $autor;

    public function __construct($titulo, $autor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    function exibirInfos()
    {
        echo "O titulo do livro é $this->titulo, e o autor é $this->autor\n";
    }
}

$obj = new Livro("O hobbit", "JRR Token");

//$obj->exibirInfos();


class Produto
{

    public $nome;
    public $preco;
    public $qtdEstoque;

    public function __construct($nome, $preco, $qtdEstoque)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->qtdEstoque = $qtdEstoque;
    }

    public function vender($qtdVenda)
    {
        if ($qtdVenda > $this->qtdEstoque) {
            return 0;
        } else {
            $this->qtdEstoque -= $qtdVenda;
            $totalVenda = $qtdVenda * $this->preco;
            return $totalVenda;
        }
    }
}

$produto = new Produto("Teclado", 300, 15);


$valorVenda = $produto->vender(5);
//echo "O valor total da venda foi $valorVenda\n";


class Pessoa
{
    public $nome;
    public $idade;


    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
}

class Funcionario extends Pessoa
{
    public $salario;

    public function __construct($nome, $idade, $salario)
    {
       parent::__construct($nome, $idade);
        $this->salario = $salario;
    }

    public function exibirDetalhes()
    {
        echo "Nome do funcionario: $this->nome\n
        Idade: $this->idade\n
        Salario: $this->salario\n";
    }
}

$func = new Funcionario("Davi", 20, 1800);

//$infos = $func->exibirDetalhes();

//echo $infos;



class ContaBancaria {
    public $titular;
    public $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
         $this->saldo += $valor;  
        
    }

    public function sacar($valor){
        if ($this->saldo < $valor) {
            echo "Saldo insuficiente\n";
        } else {
            $this->saldo -= $valor;

        }

    }

    public function verSaldo(){
        echo "Titular: $this->titular\n
        Saldo: $this->saldo\n";
    }

}

$obj = new ContaBancaria("Davi", 1300);
$obj->verSaldo();
$obj->depositar(1000);
$obj->verSaldo();
$obj->sacar(200);
$obj->verSaldo();
