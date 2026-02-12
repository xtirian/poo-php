<?php
    require_once './Caneta.class.php';

    $c1 = new Caneta;

    $c1->modelo="BIC Cristal";
    $c1->cor="Azul";

    $c1->ponta = 0.5;

    var_dump($c1)

?>