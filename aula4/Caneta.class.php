<?php

class Caneta {
    public $modelo;
    private $ponta;
    private $cor;


    public function __construct(
        $modelo,
        $cor,
        $ponta
    )
    {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta= $ponta;
        
    }


    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($m)
    {
        $this->modelo = $m;
    }
    public function getPonta()
    {
        return $this->ponta;
    }
    public function setPonta($p)
    {
        $this->ponta = $p;
    }    
}

