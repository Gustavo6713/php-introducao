<?php

    const constante = "Isso é uma constante";

    $nome = "Gustavo";

    $idade = 18;

    $anoNascimento = date("Y") - $idade;

    /**
     * Exibir na pagina o nome do usuario e o seu ano de nascimento
     * 
     * Exemplo: Olá, Fulano de Tal, voce nasceu em 1988
     */

    // echo date("d/m/Y");

     echo "<h1>Olá, $nome , voce nasceu em $anoNascimento</h1>";