<?php

namespace Mateus\Php;

class TarefaPessoal extends Tarefa 
{
    private string $prioridade;

    public function __construct(int $id, string $descricao, string $prioridade) 
    {
        parent::__construct($id, $descricao); 
        $this->prioridade = $prioridade;
    }

    public function getPrioridade(): string 
    {
        return $this->prioridade;
    }

    public function setPrioridade(string $prioridade): void 
    {
        $this->prioridade = $prioridade;
    }

    public function exibirDetalhes(): string 
    {
        return "[Pessoal] ID: {$this->id} | Descrição: {$this->descricao} (Prioridade: {$this->prioridade})";
    }
}