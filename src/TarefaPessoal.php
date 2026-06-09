<?php

namespace mateus\php;

class TarefaPessoal extends Tarefa{
    private string $prioridade;
    public function construtor($descricao, $id, $prioridade)
    {
        parent::construtor($descricao, $id);
        $this->prioridade = $prioridade;
    }

    /**
     * @param string $prioridade
     */
    public function setPrioridade(string $prioridade): void
    {
        $this->prioridade = $prioridade;
    }
}