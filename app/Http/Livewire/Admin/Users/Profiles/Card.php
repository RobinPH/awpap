<?php

namespace App\Http\Livewire\Admin\Users\Profiles;

use App\Models\User;
use Livewire\Component;

class Card extends Component
{
    /** @var User $user */
    public $user;

    public function mount($user)
    {
        $this->user = $user;
    }
    public function render()
    {
        return view('livewire.admin.users.profiles.card');
    }
}
