<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ScheduleCard extends Component
{
    public $name;
    public $program;
    public $status;
    
    public function render()
    {
        return view('livewire.schedule-card');
    }
}
