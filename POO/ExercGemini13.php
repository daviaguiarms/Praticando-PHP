<?php

interface Autenticavel
{
    public function autenticar(string $senha);
}

class Usuario implements Autenticavel
{

    public $email;
    private $senha;

    public function __construct($email, $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function autenticar(string $senha)
    {
        if ($senha != $this->senha) {
            return "Senha incorreta, digite novamente!\n";
        } else {

            return "Senha correta.\n";
        }
    }
}

class Admin implements Autenticavel
{

    public static $email;
    private $senha = "admin123";

    public static function setEmail($email)
    {
        Self::$email = $email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function autenticar(string $senha)
    {
        if ($senha != $this->senha) {
            return "Senha incorreta!\n";
        }

        if (empty(Self::$email)) {
            return "Email não preenchido!\n";
        }

        return "Autenticado com sucesso!";
    }
}

$objUser = new Usuario("davi@gmail.com", 12345);
$objAdmin = new Admin();
Admin::setEmail("davizn@gmail.com");
echo $objUser->autenticar("12345");
echo $objAdmin->autenticar("admin123");
