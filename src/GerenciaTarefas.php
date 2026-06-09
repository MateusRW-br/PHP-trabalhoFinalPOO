<?php
namespace mateus\php;
class repos
{
    public array $repositories = [];

    public function addRepository(Tarefa $tarefa){
        $this->repositories[] = $tarefa;
    }

    public function removeRepository($id){

        for($i = 0; $i < count($this->repositories); $i++){
            if($this->repositories[$i]->getId() == $id){
                unset($this->repositories[$i]);
            }
        }
    }

    public function getRepository(){
        return $this->repositories;
    }

    public function find($id){
        foreach ($this->repositories as $tarefa) {
            if ($tarefa->getId() == $id) {
                return $tarefa;
            }
        }
    }

    public function update(Tarefa $tarefa, $data){
        $this->repositories[$tarefa] = $data;
    }
}