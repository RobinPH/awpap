<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InfoCard extends Component
{
    public $img;
    public $title;
    public $description;

    public function render()
    {
        return view('livewire.info-card');
    }
}
