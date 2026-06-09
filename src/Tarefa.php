<?php

namespace mateus\php;
abstract class Tarefa{
    public $descricao;
    public $id;

    public function construtor($descricao, $id){
        $this->descricao = $descricao;
        $this->id = $id;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function getId(){
        return $this->id;
    }
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }
}