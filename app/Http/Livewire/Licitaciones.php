<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Licitaciones extends Component
{

    public $tenders;

    public function mount(){
        $this->tenders = session("tenders");
    }

    public function crearLicitaciones()
    {
        return redirect()->route('crear');
    }

    public function match($id){

        //$this->ids = $id;

        return redirect()->route('match',[
            "id" => $id + 1
        ]);
    }


    public function render()
    {
        return view('livewire.licitaciones');
    }
}
