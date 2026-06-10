<?php

namespace Mateus\Php;

use Mateus\Php\Tarefa;

class Usuario 
{
    private string $nome;
    
    /**
     * @var Tarefa[]
     */
    private array $tarefas;  //Agregacao

    public function __construct(string $nome) 
    {
        $this->nome = $nome;
        $this->tarefas = []; 
    }

    public function adicionarTarefa(Tarefa $tarefa): void 
    {
        $this->tarefas[] = $tarefa;
    }

    /**
     * @param Tarefa[] $tarefas
     */
    public function setTarefas(array $tarefas): void 
    {
        $this->tarefas = $tarefas;
    }

    /**
     * @return Tarefa[] // Nao necessario
     */
    public function getTarefas(): array 
    {
        return $this->tarefas;
    }

    public function getNome(): string 
    {
        return $this->nome;
    }

    public function setNome(string $nome): void 
    {
        $this->nome = $nome;
    }
}