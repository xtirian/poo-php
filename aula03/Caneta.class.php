<?php

class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;


    public function rabiscar(){
        if( $this->tampada ){
            echo "<p>ERRO! Não é possível rabiscar com a caneta tampada</p>";
        } else{
            echo "<p class='tip'>Estou rabiscando</p>";
        }

    }

    public function tampar(){
        $this->tampada = true;
    }

    public function destampar(){
        $this->tampada = false;
    }

}

?>