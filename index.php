<?php

class  Post {
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;
    
    public function getTitulo(){
        return $this->titulo;
    }

   
    public function setTitulo($titulo){
        if(is_string($titulo)){
            $this->titulo = $titulo;
        }
    }

    
    
}

$post = new Post();

?>