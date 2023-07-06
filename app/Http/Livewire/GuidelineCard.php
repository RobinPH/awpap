<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GuidelineCard extends Component
{
    public $process = [];
    public $title;
    public $description;
    public $img;

    public function render()
    {
        return view('livewire.guideline-card');
    }
}
