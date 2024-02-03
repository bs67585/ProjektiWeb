<?php

class User{
    private $id;
    private $name;
    private $ndeshjet;
    private $fitoret;
    private $humbjet;
    private $diferenca;
    private $piket;


    function __construct($id, $name, $ndeshjet, $fitoret, $humbjet, $diferenca, $piket){
            $this->id = $id;
            $this->name = $name;
            $this->ndeshjet = $ndeshjet;
            $this->fitoret = $fitoret;
            $this->humbjet = $humbjet;
            $this->diferenca = $diferenca;
            $this->piket = $piket;
    }

    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getNdeshjet(){
        return $this->ndeshjet;
    }
    function getFitoret(){
        return $this->fitoret;
    }
    function getHumbjet(){
        return $this->humbjet;
    }
    function getDiferenca(){
        return $this->diferenca;
    }
    function getPiket(){
        return $this->piket;
    }
}

?>