<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Matchs extends Component 
{
    public $tenders;
    public $tender;
    public $user;
    public $ids;
    public $companies;

    public function mount($id){
        $this->ids = $id;

        $this->tender = session("tenders")[$id - 1];
        $this->tenders = session("tenders");

        $misCategorias = session("user")["categories"];

// Array de usuarios con sus categorías
        $usuarios = session("company");

        $usuariosCoincidentes = [];

        foreach ($usuarios as $usuario) {
            $categoriasComunes = array_intersect($misCategorias, $usuario["categories"]);
    
        if (!empty($categoriasComunes)) {
            $usuariosCoincidentes[] = $usuario;
        }
    }

    $this->companies = $usuariosCoincidentes;



    }

    public function render()
    {
        return view('livewire.matchs');
    }
}