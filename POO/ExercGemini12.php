<?php

class Aluno
{

    public $nome;
    public $matricula;

    public function __construct($nome, $matricula)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }
}

class Turma
{

    public $nomeTurma;
    private $alunos = [];

    public function __construct($nomeTurma)
    {
        $this->nomeTurma = $nomeTurma;
    }

    public function addAluno(Aluno $aluno)
    {
        $this->alunos[] = $aluno;
    }

    public function listarAlunos()
    {
        echo "Alunos da turma $this->nomeTurma: \n";
        foreach ($this->alunos as $aluno) {
            echo "Nome: " . $aluno->nome . "  -  " .
                "Matricula: " . $aluno->matricula . "\n";
        }
    }
}

$obj1 = new Aluno("Davi", 123);
$obj2 = new Aluno("Laura", 14423);
$obj3 = new Aluno("Leo", 12367);
$obj4 = new Aluno("Jorge", 12389);
$objTurma = new Turma("Turma A");
$objTurma->addAluno($obj1);
$objTurma->addAluno($obj2);
$objTurma->addAluno($obj3);
$objTurma->addAluno($obj4);
$objTurma->listarAlunos();
