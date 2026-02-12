<?php

class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;


    function rabiscar(){
        if( $this->tampada ){
            echo "<p>ERRO! Não é possível rabiscar com a caneta tampada</p>";
        } else{
            echo "<p class='tip'>Estou rabiscando</p>";
        }

    }

    function tampar(){
        $this->tampada = true;
    }

    function destampar(){
        $this->tampada = false;
    }

}

?>