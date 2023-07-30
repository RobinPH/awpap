<?php

namespace App\Http\Livewire\Admin\Programs\Schedules;

use App\Models\Program;
use App\Models\ProgramForm;
use App\Models\ProgramFormStatus;
use Livewire\Component;

class Index extends Component
{
    /** @var string $card */
    public $card;

    /** @var ProgramForm[] $schedules */
    public $schedules;

    /** @var Program[] $programs */
    public $programs;

    /** @var ProgramFormStatus[] $statuses */
    public $statuses;

    public $search;
    public $types = [];



    protected $queryString = [
        'types' => ['except' => ''],
        'search' => ['except' => ''],
        // 'page' => ['except' => 1],
    ];

    public function mount()
    {
        $this->programs = Program::all();
        $this->statuses = ProgramFormStatus::all();
    }

    public function render()
    {
        if (count($this->types) == 0) {
            $programs = Program::all();
        } else {
            $programs = Program::query()->whereIn('id', $this->types)->get();
        }

        $this->schedules = ProgramForm::query()
            // ->with(["user" => function ($query) {
            //     $query->orWhere('first_name', 'like', '%' . $this->search . '%')
            //         ->orWhere('last_name', 'like', '%' . $this->search . '%');
            // }])
            ->whereIn('program_id', array_map(fn ($program) => $program["id"], $programs->toArray()))
            ->where('breed', 'like', '%' . $this->search . '%')
            ->get();

        return view('livewire.admin.programs.schedules.index');
    }
}
