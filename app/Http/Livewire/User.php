<?php

namespace App\Http\Livewire;

use Livewire\Component;

class User extends Component
{
    public $user;
    public $name;
    public $description;
    public $categories;
    public $mycategories;
    public $newTag;

    public function mount(){
        $this->user = session("user");
        $this->name = $this->user["name"];
        $this->myCategories = $this->user["categories"];
        $this->categories = session("categories");

    }

    public function addTag(){
        $this->user["tags"][] = $this->newTag;
        session([
            "user" => $this->user
        ]);
    }   

    public function removeTag($index){
        array_splice($this->user["tags"],$index,1);
        session([
            "user" => $this->user
        ]);
    }

    public function updateCategories(){
        $this->user["categories"] = $this->myCategories;
        session([
            "user" => $this->user
        ]);
    }

    public function redirigirALicitaciones()
    {
        return redirect()->route('licitaciones');
    }

    public function render()
    {
        return view('livewire.user');
    }
}
