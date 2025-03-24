<?php
    class Pessoa {
        public $nome;
        public $idade;
        private $nota;
        private $salario;

        public function __construct($nome, $idade, $nota, $salario)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->nota = $nota;
            $this->salario = $salario;
        }

        public function falar (){
            echo "olá sou {$this->nome} e tenho {$this->idade} anos. <br>";
        }

        public function verNota(){
            return $this->nota;
        }

        public function verSalario(){
            return $this->salario;
        }
    }

    // a classe aluno vai herdar de Pessoa

    class Aluno extends Pessoa{
        public function falar(){
            echo "olá sou {$this->nome} e tenho {$this->idade} anos e tirei {$this->VerNota()}. <br>";
        }
    }

    // a classe professor herda de Pessoa
    class Professor extends Pessoa{
        public function falar(){
            echo "olá sou {$this->nome} e tenho {$this->idade} anos e ganho {$this->verSalario()}. <br>";
        }
    }

    $gabriel = new Aluno ("Gabriel", 16, "100", "undefined");
    $gutin = new Aluno ("Gustavo", 17, "99", "undefined");
    $carlos = new Aluno ("Carlos", 16, "72", "undefined");
    $miguel = new Aluno ("Miguel", 18, "50", "undefined");
    $raul = new Professor ("Raul", 38, "undefined", "uma coca e uma coxinha");
    $nadja = new Professor ("Nadja", 25, "undefined", "uma coca e duas coxinha");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Escola</title>
</head>
<body>
    <div class="container d-flex cow col-sm-12">
        <div class="card col-sm-6">
            <div class="card-body">
                <p class="card-text"><?php  $gabriel->falar(); ?></p>
            </div>
        </div>
        <div class="card col-sm-6">
            <div class="card-body">
                <p class="card-text"><?php $gutin->falar(); ?></p>
            </div>
        </div>
        <div class="card col-sm-6">
            <div class="card-body">
                <p class="card-text"><?php $miguel->falar(); ?></p>
            </div>
        </div>
        <div class="card col-sm-6">
            <div class="card-body">
                <p class="card-text"><?php $carlos->falar(); ?></p>
            </div>
        </div>
        <div class="card col-sm-6">
            <div class="card-body">
                <p class="card-text"><?php $raul->falar(); ?></p>
            </div>
        </div>
        <div class="card col-sm-6">
            <div class="card-body">
                <p class="card-text"><?php $nadja->falar(); ?></p>
            </div>
        </div>
    </div>
</body>
</html>