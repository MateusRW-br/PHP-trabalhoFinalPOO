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

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }
}