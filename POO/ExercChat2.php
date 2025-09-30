<?php

class Pessoa
{
    protected $nome;
    protected $idade;
}

class Aluno extends Pessoa
{
    public $matricula;

    public function __construct($nome, $idade, $matricula)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->matricula = $matricula;
    }

    public function getInfo(){
        return "ESTUDANTE \n" . "Nome: $this->nome\n" . "Idade: $this->idade\n" . "Matricula: $this->matricula" .  "\n";
    }
}

class Professor extends Pessoa
{
    public $salario;

    public function __construct($nome, $idade, $salario)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->salario = $salario;
    }

    public function getInfo() {
         return "PROFESSOR \n" . "Nome: $this->nome\n" . "Idade: $this->idade\n" . "Salario: $this->salario" .  "\n";
    }
}
;
$objAluno = new Aluno('Davi', 20, 123456);
echo $objAluno->getInfo();
$objProf = new Professor('Euber', 38, 7800);
echo $objProf->getInfo();
