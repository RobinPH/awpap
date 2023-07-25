<?php

namespace App\Http\Controllers;

use App\Models\VolunteerSubmission;
use App\Models\VolunteerWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VolunteerController extends Controller
{
    public function join(Request $request) {
        $inputs = $request->all();

        $request->validate([
            "volunteer_work_id" => ["required", "uuid", "exists:App\Models\VolunteerWork,id"]
        ]);
        $user_id = Auth::user()->id;

        $count = VolunteerSubmission::query()->where("user_id", "=", $user_id)->where("volunteer_work_id", "=", $inputs["volunteer_work_id"])->count();

        if ($count == 0) {
            VolunteerSubmission::query()->create([
                "user_id" => $user_id,
                "volunteer_work_id" => $inputs["volunteer_work_id"],
            ]);
        }
    }

    public function show() {
        $works = VolunteerWork::all();
        return view("volunteer-form", [
            "works" => $works,
        ]);
    }
}
