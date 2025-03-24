<?php
    class Pessoa {
        public $nome;

        public function __construct($nome)
        {
            $this->nome = $nome;
        }

        public function apresentar (){
            echo "olá sou {$this->nome}. <br>";
        }
    }

    // a classe aluno vai herdar de Pessoa

    class Aluno extends Pessoa{
        public function apresentar(){
            echo "olá sou {$this->nome} e sou um aluno. <br>";
        }
    }

    // a classe professor herda de Pessoa
    class Professor extends Pessoa{
        public function apresentar(){
            echo "olá sou {$this->nome} e sou um professor. <br>";
        }
    }

    $gabriel = new Aluno ("Gabriel");
    $raul = new Professor ("Raul");

    $gabriel->apresentar();
    $raul->apresentar();
?>