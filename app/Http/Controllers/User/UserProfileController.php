<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserProfileController extends Controller
{
    public function showPersonalDetails() {
        return view("user.personal-details");
    }
}
