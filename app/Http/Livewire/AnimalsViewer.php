<?php

namespace App\Http\Livewire;

use App\Models\Animal;
use App\Models\AnimalType;
use Livewire\Component;

class AnimalsViewer extends Component
{
    public $animals;

    public $animalTypes;

    public function mount() {
        $this->animals = Animal::query()->whereRaw("adopted_at IS NULL")->limit(20)->get();
        $this->animalTypes = AnimalType::all();
    }

    public function getAnimalsOfType(string $type_id = null, int $skip = 0, int $limit = 12) {
        if ($type_id != null) {
            $this->animals = Animal::query()->whereRaw("adopted_at IS NULL")->where("type_id", $type_id)->skip($skip)->limit($limit)->get();
        } else {
            $this->animals = Animal::query()->skip($skip)->limit($limit)->get();
        }
    }

    public function render()
    {
        return view('livewire.animals-viewer');
    }
}
