<?php

namespace mateus\php;

class Usuario{
    private string $nome;
    /*@var Tarefa[]*/
    private array $tarefas;

    public function construtor(string $nome){
        $this->nome = $nome;
        $this->tarefas = [];
    }

}