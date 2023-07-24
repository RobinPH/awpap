<?php

namespace App\Http\Livewire\Admin\Animals\Sexes;

use App\Models\AnimalSex;
use Livewire\Component;

class Index extends Component
{
    /** @var string $card */
    public $card;

    /** @var AnimalSex[] $sexes */
    public $sexes;

    public $search;

    protected $queryString = [
        'search' => ['except' => ''],
        // 'page' => ['except' => 1],
    ];

    public function render()
    {
        return view('livewire.admin.animals.sexes.index');
    }
}
