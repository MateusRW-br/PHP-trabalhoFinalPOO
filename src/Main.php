<?php

namespace Mateus\Php;
require_once __DIR__ . '/../vendor/autoload.php';
use Mateus\Php\Usuario;
use Mateus\Php\TarefaPessoal;
use Mateus\Php\TarefaProfissional;
use Mateus\Php\GerenciaTarefas;
class Main 
{
    public static function run(): void 
    {
        $user1 = new Usuario("João Silva");
        $user2 = new Usuario("Maria Souza");
        $gerente = new GerenciaTarefas();

        $gerente->criarTarefa(new TarefaPessoal(11, "Treinar braço", "Média"), $user1);
        $gerente->criarTarefa(new TarefaPessoal(12, "Treinar costas", "Baixa"), $user1);
        $gerente->criarTarefa(new TarefaPessoal(10, "Treinar perna", "Alta"), $user1);
        $gerente->criarTarefa(new TarefaProfissional(20, "Ajustar query no Oracle", "15/06/2026"), $user2);
        
        $gerente->listarTarefas($user1);
        $gerente->listarTarefas($user2);
        $gerente->alterarTarefa(10, "Treinar perna e panturrilha", "Baixa", null, $user1);
        $gerente->listarTarefas($user1);

        
        $gerente->excluirTarefa(20, $user2);
        $gerente->listarTarefas($user2);
        $gerente->listarTarefas($user1);
    }
}
Main::run();