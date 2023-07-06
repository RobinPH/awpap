<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdoptionCard extends Component
{
    public $name;
    public $pet;
    

    public function render()
    {
        return view('livewire.adoption-card');
    }
}
