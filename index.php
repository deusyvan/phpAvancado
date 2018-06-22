<?php

class Animal{
    
    public function getNome(){
        echo "getNome da classe Animal";
    }
    
}

class Cachorro extends Animal{
    
}

$cachorro = new Cachorro();
$cachorro->getNome();


?>