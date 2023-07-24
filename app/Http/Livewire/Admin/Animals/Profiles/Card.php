<?php

namespace App\Http\Livewire\Admin\Animals\Profiles;

use App\Models\Animal;
use Livewire\Component;

class Card extends Component
{
    /** @var Animal $animal */
    public $animal;
    public function mount($animal)
    {
        $this->animal = $animal;
    }

    public function render()
    {
        return view('livewire.admin.animals.profiles.card');
    }
}
