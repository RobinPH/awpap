<?php

namespace App\Http\Livewire\Admin\Animals\Sexes;

use App\Models\AnimalSex;
use Livewire\Component;

class Card extends Component
{
    /** @var AnimalSex $sex */
    public $sex;
    public function mount($sex)
    {
        $this->sex = $sex;
    }

    public function render()
    {
        return view('livewire.admin.animals.sexes.card');
    }
}
