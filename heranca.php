<?php
class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar (){
        echo "olá sou {$this->nome} e tenho {$this->idade} anos. <br>";
    }
}

// a classe aluno vai herdar de Pessoa

class Aluno extends Pessoa{
    public function estudar(){
        echo "o {$this->nome} está estudando. <br>";
    }
}

// a classe professor herda de Pessoa
class Professor extends Pessoa{
    public function encinar(){
        echo "{$this->nome} está encinando. <br>";
    }
}

$gabriel = new Aluno ("Gabriel", 16);
$raul = new Professor ("Raul", 38);

$gabriel->apresentar();
$gabriel->estudar();
$raul->apresentar();
$raul->encinar();

?>