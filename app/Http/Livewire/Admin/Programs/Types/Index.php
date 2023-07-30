<?php

namespace App\Http\Livewire\Admin\Programs\Types;

use App\Models\Program;
use Livewire\Component;

class Index extends Component
{
    /** @var string $card */
    public $card;

    /** @var Program[] $programs */
    public $programs;

    public $search;

    protected $queryString = [
        'search' => ['except' => ''],
        // 'page' => ['except' => 1],
    ];
    public function render()
    {
        $this->programs = Program::query()
            ->where(function ($query) {
                $query->where('name', 'like', '%'.$this->search.'%')
                      ->orWhere('description', 'like', '%'.$this->search.'%');
            })
            ->get();

        return view('livewire.admin.programs.types.index');
    }
}
