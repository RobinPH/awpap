<?php

namespace App\Http\Livewire\Forms\User;

use App\Models\Permission as ModelsPermission;
use App\Models\User;
use Livewire\Component;

class Permission extends Component
{
    /** @var string $user_id */
    public $user_id;

    /** @var User $user */
    public $user;

    /** @var Permission[] $permissions */
    public $permissions;

    public function mount(string $user_id) {
        $this->user_id = $user_id;
        $this->user = User::query()->where("id", $this->user_id)->first();
        $this->permissions = ModelsPermission::all();
    }
    public function render()
    {
        return view('livewire.forms.user.permission');
    }
}
