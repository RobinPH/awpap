<?php

namespace App\Http\Livewire\Admin\Users\Profiles;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    /** @var string $card */
    public $card;

    /** @var User[] $users */
    public $users;

    public $search;

    public $types = [];

    protected $queryString = [
        'types' => ['except' => ''],
        'search' => ['except' => ''],
        // 'page' => ['except' => 1],
    ];
    public function render()
    {
        $this->users = User::query()
            ->where(function ($query) {
                $query->where('first_name', 'like', '%'.$this->search.'%')
                      ->orWhere('last_name', 'like', '%'.$this->search.'%');
            })
            ->get();

        // $this->users = $this->users->filter(function (User $user) {
        //     if (in_array("ADMIN", $this->types) && $user->is_admin) {
        //         return true;
        //     }

        //     if (in_array("USER", $this->types) && !$user->is_admin) {
        //         return true;
        //     }

        //     if (count($this->types) == 0) {
        //         return true;
        //     }

        //     return false;
        // });

        // array_filter($this->users, function (User $user) {
        //     if (in_array("ADMIN", $this->types) && $user->is_admin) {
        //         return true;
        //     }

        //     if (in_array("USER", $this->types) && !$user->is_admin) {
        //         return true;
        //     }

        //     return false;
        // });

        return view('livewire.admin.users.profiles.index');
    }
}
