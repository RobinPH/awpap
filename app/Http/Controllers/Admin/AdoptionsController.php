<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdoptionForm;
use Illuminate\Http\Request;

class AdoptionsController extends Controller
{
    public function edit(Request $request) {
        $inputs = $request->all();

        $request->validate([
            "adoption_id" => ["required", "uuid", "exists:App\Models\AdoptionForm,id"],
            "adoption_form_status_id" => ["required", "uuid", "exists:App\Models\AdoptionFormStatus,id"],
        ]);

        $adoption = AdoptionForm::query()->where("id", "=", $inputs["adoption_id"])->first();

        $adoption->adoption_form_status_id = $inputs["adoption_form_status_id"];

        $adoption->save();

        return redirect()->back();
    }

    public function show() {
        $adoptions = AdoptionForm::all();

        return view("admin.adoption", [
            "adoptions" => $adoptions,
        ]);
    }
}
