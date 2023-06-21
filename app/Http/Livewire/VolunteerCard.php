<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VolunteerCard extends Component
{
    public $title;
    public $description;
    public $img;

    public function render()
    {
        return view('livewire.volunteer-card');
    }
}
