<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LicitacionesCrear extends Component
{
    public $title;
    public $description;
    public $from;
    public $to;
    public $value;

    public function saveTender(){
        $tender = [
            "title" => $this->title,
            "description" => $this->description,
            "from" => $this->from,
            "to" => $this->to,
            "value" => $this->value,
            "company" => session("user")["name"]
        ];

        $tenders = session("tenders");
        $tenders[] = $tender;
        session([
            "tenders" => $tenders
        ]);

        redirect("licitaciones");
    }

    

    public function render()
    {
        return view('livewire.licitaciones-crear');
    }
}
