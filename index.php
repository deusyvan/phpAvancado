<?php

abstract class Animal {
    private $nome;
    private $idade;
    
    abstract protected function andar();
    
    public function getNome(){
        return $this->nome;
    }

    public function setNome($n){
        $this->nome = $n;
    }

}


class Cavalo extends Animal{
    private $quantidade_de_patas;
    private $tipo_de_pelo;
    
    public function andar(){
        
    }
}


$cavalo = new Cavalo();

$cavalo->setNome("Cavalo Teste");

echo "O meu cavalo é: ".$cavalo->getNome();

?>