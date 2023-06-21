<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AnimalCard extends Component
{
    public $name;
    public $age;
    public $img;

    public function render()
    {
        return view('livewire.animal-card');
    }
}
