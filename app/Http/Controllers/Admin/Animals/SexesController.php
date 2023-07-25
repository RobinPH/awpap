<?php

namespace App\Http\Controllers\Admin\Animals;

use App\Http\Controllers\Controller;
use App\Models\AnimalSex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class SexesController extends Controller
{
    public function create(Request $request) {
        $inputs = $request->all();

        Validator::make($inputs, [
            'sex' => ['required', 'string', 'unique:App\Models\AnimalSex,sex', 'max:255'],
            'description' => ['string', 'max:2048', 'nullable'],
        ], [
            "sex.unique" => 'Sex "' . $inputs["sex"] . '" already exists',
        ])->validate();

        $sex = AnimalSex::query()->create([
            'sex' => $inputs['sex'],
            'description' => $inputs['description'],
        ]);

        return redirect()->back();
    }

    public function edit(Request $request) {
        $inputs = $request->all();


        Validator::make($inputs, [
            'id' => ['required', 'uuid', "exists:App\Models\AnimalSex,id"],
            'sex' => ['required', 'string', 'max:255', Rule::unique('animal_sexes', "sex")->ignore($inputs["id"], "id")],
            'description' => ['string', 'max:2048', 'nullable'],
        ])->validate();

        $sex = AnimalSex::query()->where("id", "=", $inputs["id"])->firstOrFail();

        $sex->sex = $inputs["sex"];
        $sex->description = $inputs["description"];

        $sex->save();

        return redirect()->back();
    }
    public function show() {
        $sexes = AnimalSex::all();

        return view("admin.animals.sexes", [
            "sexes" => $sexes,
        ]);
    }
}
