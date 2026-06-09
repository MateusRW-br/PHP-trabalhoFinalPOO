<?php

namespace mateus\php;

class TarefaProfissional extends Tarefa{
    private string $dataPrazo;
    public function construtor($descricao, $id, $dataPrazo)
    {
        parent::construtor($descricao, $id);
        $this->dataPrazo = $dataPrazo;
    }

    /**
     * @param string $dataPrazo
     */
    public function setDataPrazo(string $dataPrazo): void
    {
        $this->dataPrazo = $dataPrazo;
    }

    /**
     * @return string
     */
    public function getDataPrazo(): string
    {
        return $this->dataPrazo;
    }
}