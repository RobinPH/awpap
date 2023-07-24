<?php

namespace App\Http\Livewire\Admin\Animals\Types;

use App\Models\AnimalType;
use Livewire\Component;

class Card extends Component
{
    /** @var AnimalType $type */
    public $type;

    public function mount($type)
    {
        $this->type = $type;
    }
    public function render()
    {
        return view('livewire.admin.animals.types.card');
    }
}
