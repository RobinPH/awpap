<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PetsCard extends Component
{
    public $pet;

    public function mount($pet)
    {
        $this->pet = $pet;
    }
    public function render()
    {
        return view('livewire.pets-card');
    }
}
