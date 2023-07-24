<?php

namespace App\Http\Livewire\Admin\Animals\Types;

use App\Models\AnimalType;
use Livewire\Component;

class Index extends Component
{
    /** @var string $card */
    public $card;

    /** @var AnimalType[] $types */
    public $types;

    public $search;

    protected $queryString = [
        'search' => ['except' => ''],
        // 'page' => ['except' => 1],
    ];
    public function render()
    {
        $this->types = AnimalType::query()
            ->where(function ($query) {
                $query->where('type', 'like', '%'.$this->search.'%')
                    ->orWhere('description', 'like', '%'.$this->search.'%');
            })
            ->get();

        return view('livewire.admin.animals.types.index');
    }
}
