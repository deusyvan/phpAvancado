<?php

class Animal{
    
    public function getNome(){
        echo "getNome da classe Animal";
    }
    
}

class Cachorro extends Animal{
    public function getNome(){
        echo "getNome da classe Cachorro";
    }
}

$animal = new Animal();
$animal->getNome();


?>