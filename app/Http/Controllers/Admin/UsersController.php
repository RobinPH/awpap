<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersController extends Controller
{
    public function show() {
        $users = User::all();
        return view("admin.users", [
            "users" => $users,
        ]);
    }
}
