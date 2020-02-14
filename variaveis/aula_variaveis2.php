<?php
    /*
    $anoNascimento = 1990;
    $nomeCompleto = "";*/

    $nome1 = "Anderson"; //colocar numeros no final, não pode ser colocado no inicio

    $sobrenome = "Nunes";

    $nomeCompleto = $nome1 . " " . $sobrenome; //concatenação

    echo $nomeCompleto;

    exit;
    //$this // não pode ser usado como variável
    echo $nome1;
    unset($nome1);//limpa a variavel

    if(isset($nome1)){//saber se existe
        echo $nome1;
    }


 ?>
