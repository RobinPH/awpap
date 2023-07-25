<?php

namespace App\Http\Livewire\Admin\Adoptions;

use App\Models\AdoptionForm;
use App\Models\AdoptionFormStatus;
use Livewire\Component;

class Index extends Component
{
    /** @var string $card */
    public $card;

    /** @var AdoptionForm[] $adoptions */
    public $adoptions;

    /** @var AdoptionFormStatus[] $statuses */
    public $statuses;

    public $search;

    public $types = [];

    protected $queryString = [
        'types' => ['except' => ''],
        'search' => ['except' => ''],
        // 'page' => ['except' => 1],
    ];

    public function mount() {
        $this->statuses = AdoptionFormStatus::all();
    }

    public function render()
    {
        $this->adoptions = AdoptionForm::all();

        return view('livewire.admin.adoptions.index');
    }
}
