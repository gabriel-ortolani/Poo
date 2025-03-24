<?php
    class Aluno {
        public $nome;
        public $idade;

        public function __construct($nome, $idade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function estudar (){
            echo "{$this->nome} esta estudando e tem {$this->idade} anos. ";
        }
    }
    // criando objetos

    $gabriel = new aluno ("Gabriel", 16);
    $gutin = new Aluno ("Gutin", 17);

    $gabriel->estudar();
    $gutin->estudar();
?>