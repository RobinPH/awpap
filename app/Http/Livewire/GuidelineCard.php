<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GuidelineCard extends Component
{
    public $title;
    public $description;
    public $process;

    public function render()
    {
        return view('livewire.guideline-card');
    }
}
