<?php

    // Var_dump exibe informções sobre a variavel, como o tipo, o valor e etc
    // var_dump($_GET);

    // $_GET e $_POST é um array que recebe os parametros passados pela requisição 

    $nome = $_GET["nome"];

    $idade = $_GET["idade"];

    $anoNascimento = 2021 - $idade;

    // isset() retorna true se a variavel for declarada e se o valor é diferente de nulo. 
    if(!isset ($_GET["fez-aniversario"])){
        $anoNascimento = $anoNascimento - 1;
    }

    echo "<h1>Olá, $nome, voce nasceu em $anoNascimento</h1>";