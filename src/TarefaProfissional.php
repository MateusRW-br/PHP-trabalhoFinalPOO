<?php

namespace mateus\php;

class TarefaProfissional extends Tarefa{
    private string $dataPrazo;
    public function construtor($descricao, $id, $dataPrazo)
    {
        parent::construtor($descricao, $id);
        $this->dataPrazo = $dataPrazo;
    }
}