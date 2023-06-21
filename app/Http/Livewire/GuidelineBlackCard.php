<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GuidelineBlackCard extends Component
{
    public $process = [];
    public $title;
    public $description;
    public $img;

    public function render()
    {
        return view('livewire.guideline-black-card');
    }
}
