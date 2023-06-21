<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdoptCard extends Component
{
    public $img;
    public $name;

    public function render()
    {
        return view('livewire.adopt-card');
    }
}
