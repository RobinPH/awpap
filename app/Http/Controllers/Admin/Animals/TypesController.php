<?php

namespace App\Http\Controllers\Admin\Animals;

use App\Http\Controllers\Controller;
use App\Models\AnimalType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class TypesController extends Controller
{
    public function create(Request $request) {
        $inputs = $request->all();

        Validator::make($inputs, [
            'type' => ['required', 'string', 'unique:App\Models\AnimalType,type', 'max:255'],
            'description' => ['string', 'max:2048', 'nullable'],
        ], [
            "type.unique" => 'Type "' . $inputs["type"] . '" already exists',
        ])->validate();

        $type = AnimalType::query()->create([
            'type' => $inputs['type'],
            'description' => $inputs['description'],
        ]);
    }

    public function edit(Request $request) {
        $inputs = $request->all();


        Validator::make($inputs, [
            'id' => ['required', 'uuid', "exists:App\Models\AnimalType,id"],
            'type' => ['required', 'string', 'max:255', Rule::unique('animal_types')->ignore($inputs["id"], "id")],
            'description' => ['string', 'max:2048', 'nullable'],
        ])->validate();

        $type = AnimalType::query()->where("id", "=", $inputs["id"])->firstOrFail();

        if (!$type) {
            return;
        }

        $type->type = $inputs["type"];
        $type->description = $inputs["description"];

        $type->save();
    }
    public function show() {
        $types = AnimalType::all();

        return view("admin.animals.types", [
            "types" => $types,
        ]);
    }
}
