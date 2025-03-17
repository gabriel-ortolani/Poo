<?php
    $aluno = [
        "nome" => "Gabriel",
        "idade" => 16,

        "estudar" => function() use (&$aluno){
            echo "{$aluno['nome']} está estudando";
        }
    ];
?>