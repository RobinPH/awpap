<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdoptCard extends Component
{
    public $animal;

    public function mount($animal)
    {
        $this->animal = $animal;
    }

    public function render()
    {
        return view('livewire.adopt-card');
    }
}
