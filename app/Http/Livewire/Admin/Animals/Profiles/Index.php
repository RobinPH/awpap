<?php

namespace App\Http\Livewire\Admin\Animals\Profiles;

use App\Models\Animal;
use App\Models\AnimalSex;
use App\Models\AnimalType;
use Livewire\Component;

class Index extends Component
{
    /** @var string $card */
    public $card;

    /** @var Animal[] $animals */
    public $animals;

    /** @var AnimalType[] $animalTypes */
    public $animalTypes;


    /** @var AnimalSex[] $animalSexes */
    public $animalSexes;

    public $search;

    public $types = [];

    protected $queryString = [
        'types' => ['except' => ''],
        'search' => ['except' => ''],
        // 'page' => ['except' => 1],
    ];

    public function mount() {
        $this->animalTypes = AnimalType::all();
        $this->animalSexes = AnimalSex::all();
    }

    public function render()
    {
        if (count($this->types) == 0) {
            $types = AnimalType::all();
        } else {
            $types = AnimalType::query()->whereIn('type', $this->types)->get();
        }

        $this->animals = Animal::query()
            ->where(function ($query) {
                $query->where('name', 'like', '%'.$this->search.'%');
                    //   ->orWhere('description', 'like', '%'.$this->search.'%');
            })
            ->whereIn('type_id', array_map(fn ($type) => $type["id"], $types->toArray()))
            ->get();

        return view('livewire.admin.animals.profiles.index');
    }
}
