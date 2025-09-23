<?php

class Aluno
{
    private $nome;
    private $matricula;
    private $notas = [];

    public function __construct($nome, $matricula)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function addNota($nota)
    {
        $this->notas[] = $nota;
    }

    public function calcularMedia()
    {
        return array_sum($this->notas) / count($this->notas);
    }

    public function status()
    {
        if ($this->calcularMedia() >= 7) {
            return "Aprovado";
        } else {
            return 'Reprovado';
        }
    }
}

$objAluno = new Aluno('Davi', 125);
$objAluno->addNota(6);
$objAluno->addNota(6);
$objAluno->addNota(8);
$objAluno->addNota(4);
$objAluno->addNota(5);
$objAluno->addNota(7);
$objAluno->calcularMedia();
echo $objAluno->status() . "\n";
echo $objAluno->calcularMedia();
