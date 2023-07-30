<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdoptionForm;
use App\Models\AdoptionFormStatus;
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

        if ($adoption->status->name == "COMPLETED") {
            return redirect()->back()->with(["error", "Status of this adoption can no longer be changed because it has already been marked as COMPLETED."]);
        }

        $adoption->adoption_form_status_id = $inputs["adoption_form_status_id"];

        if (AdoptionFormStatus::query()->where("id", "=", $inputs["adoption_form_status_id"])->first()->name == "COMPLETED") {
            $adoption->animal->adopted_at = now();
            $adoption->animal->save();
        }

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
