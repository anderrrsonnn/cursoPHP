<?php

    /*
        aula sobre escopo de variavel.
    */

    $nome = "Glaucio ";

    function teste(){
        global $nome;
        echo $nome;

    }

    function teste2(){
        $nome = "Anderson";
        echo $nome." agora no teste2";

    }

    teste();

    teste2();
 ?>
