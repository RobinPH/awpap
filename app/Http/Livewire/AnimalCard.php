<?php

namespace App\Http\Livewire;

use App\Models\Animal;
use Livewire\Component;

class AnimalCard extends Component
{
    /** @var Animal $animal */
    public $animal;

    public function mount($animal)
    {
        $this->animal = $animal;
    }

    public function render()
    {
        return view('livewire.animal-card');
    }
}
