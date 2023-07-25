<?php

namespace App\Http\Livewire\Admin\Adoptions;

use App\Models\AdoptionForm;
use Livewire\Component;

class Card extends Component
{
    /** @var AdoptionForm $adoption */
    public $adoption;
    public function mount($adoption)
    {
        $this->adoption = $adoption;
    }
    public function render()
    {
        return view('livewire.admin.adoptions.card');
    }
}
