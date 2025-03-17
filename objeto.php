<?php
    $aluno = [
        "nome" => "Gabriel",
        "idade" => 16,

        "estudar" => function() use (&$aluno){
            echo "{$aluno['nome']} está estudando";
        }
    ];

    $aluno['estudar']();  // Chama a função 'estudar' para exibir a frase
    
?>
