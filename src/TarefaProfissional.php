<?php

namespace Mateus\Php;

class TarefaProfissional extends Tarefa 
{
    private string $dataPrazo;

    public function __construct(int $id, string $descricao, string $dataPrazo) 
    {
        parent::__construct($id, $descricao); 
        $this->dataPrazo = $dataPrazo;
    }

    public function getDataPrazo(): string 
    {
        return $this->dataPrazo;
    }

    public function setDataPrazo(string $dataPrazo): void 
    {
        $this->dataPrazo = $dataPrazo;
    }

    public function exibirDetalhes(): string 
    {
        return "[Profissional] ID: {$this->id} | Descrição: {$this->descricao} (Prazo: {$this->dataPrazo})";
    }
}