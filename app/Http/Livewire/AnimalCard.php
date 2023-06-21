<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AnimalCard extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.animal-card');
    }
}
