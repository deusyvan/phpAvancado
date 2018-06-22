<?php

class  Post {
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;
    private $qtComentarios;
    
    public function getTitulo(){
        return $this->titulo;
    }

   
    public function setTitulo($titulo){
        if(is_string($titulo)){
            $this->titulo = $titulo;
        }
    }

    public function addComentario($msg){
        $this->comentarios[] = $msg;
    }
    
    public function getQuantosComentarios() {
        return $qtComentarios;
    }
    
}

$post = new Post();

$post->addComentario("Teste");
$post->addComentario("Teste 2");
$post->addComentario("Teste 3");

?>