<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StoryCard extends Component
{
    public $img;
    public $title;
    public $name;
    public $story;

    public function render()
    {
        return view('livewire.story-card');
    }
}
