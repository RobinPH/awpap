<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UsersCard extends Component
{
    public $name;
    public $username;
    public $email;
    public $type;

    public function render()
    {
        return view('livewire.users-card');
    }
}
