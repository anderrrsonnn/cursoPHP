<?php

    $frase = "A repetição é mãe da retenção.";
    $palavra = "mãe";
    $q = strpos($frase, $palavra); // conta quantas casas tem até encontrar a palavra solicitada

    $texto = substr($frase, 0, $q);// mostra o que tem escrito apartir do inicio até encontrar a palavra solicitada.

    var_dump($texto);

    $texto2 = substr($frase, $q + strlen($palavra), strlen($frase));// mostra o que está escrito depois da palavra solicitada.

    echo "<br>";

    echo $texto2;

 ?>
