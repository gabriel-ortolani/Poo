<?php
   abstract class Pessoa{
    public $nome;

    public function __construct($nome)
    {
        $this->nome=$nome;
    }
   }

   class Aluno extends Pessoa{
   }

   $gabriel = new Aluno ("Gabriel");
   echo $gabriel->nome . " É ele";
?>