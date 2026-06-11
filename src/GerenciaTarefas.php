<?php

namespace Mateus\Php;

use Mateus\Php\Tarefa;
use Mateus\Php\Usuario;

class gerenciaTarefas
{
    public function criarTarefa(Tarefa $tarefa, Usuario $usuario): void
    {
        $usuario->adicionarTarefa($tarefa);
        echo "Tarefa adicionada com sucesso!\n";
    }

    public function alterarTarefa(int $id, ?string $novaDescricao = null, ?string $novaPrioridade = null, ?string $novaDataPrazo = null, Usuario $usuario): void 
    {
        foreach ($usuario->getTarefas() as $tarefa) {
            if ($tarefa->getId() === $id) {
                
                if ($novaDescricao !== null) {
                    $tarefa->setDescricao($novaDescricao);
                }

                if ($tarefa instanceof TarefaPessoal) {
                    if ($novaPrioridade !== null) {
                        $tarefa->setPrioridade($novaPrioridade);
                    }
                } 
                if ($tarefa instanceof TarefaProfissional) {
                    if ($novaDataPrazo !== null) {
                        $tarefa->setDataPrazo($novaDataPrazo);
                    }
                }

                echo "Tarefa ID {$id} atualizada com sucesso!\n";
                return;
            }
        }
        echo "Tarefa ID {$id} não encontrada para alteração.\n";
    }

    public function excluirTarefa(int $id, Usuario $usuario): void
    {
        $tarefasAtuais = $usuario->getTarefas();

        foreach ($tarefasAtuais as $index => $tarefa) {
            if ($tarefa->getId() === $id) {
                unset($tarefasAtuais[$index]); 

                $usuario->setTarefas(array_values($tarefasAtuais));
                echo "Tarefa excluída com sucesso!\n";
                return;
            }
        }
        echo "Tarefa não encontrada para exclusão.\n";
    }

    public function listarTarefas(Usuario $usuario): void
    {
        $tarefas = $usuario->getTarefas();

        if (empty($tarefas)) {
            echo "Nenhuma tarefa a fazer.\n";
            return;
        }

        echo "Lista de Tarefas de " . $usuario->getNome() . "\n";
        foreach ($tarefas as $tarefa) {
            echo $tarefa->exibirDetalhes() . "\n";
        }
    }
}